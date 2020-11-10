<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLeadRequest;
use App\Http\Requests\UpdateLeadRequest;
use App\Repositories\LeadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LeadController extends AppBaseController
{
    /** @var  LeadRepository */
    private $leadRepository;

    public function __construct(LeadRepository $leadRepo)
    {
        $this->leadRepository = $leadRepo;
    }

    /**
     * Display a listing of the Lead.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->leadRepository->pushCriteria(new RequestCriteria($request));
        $leads = $this->leadRepository->all();

        return view('leads.index')
            ->with('leads', $leads);
    }

    /**
     * Show the form for creating a new Lead.
     *
     * @return Response
     */
    public function create()
    {
        /*$this->leadRepository->pushCriteria(new RequestCriteria($request));
        $leads = $this->leadRepository->all();*/
        $lead_parameters = \App\Models\LeadParameters::first();

       //dd($leads_parameters);
        //return view('leads.create')->with('leads_parameters', $leads_parameters);

        return view('leads.create')->with('parameters', $lead_parameters);

    }

    /**


     * Store a newly created Lead in storage.
     *
     * @param CreateLeadRequest $request
     *
     * @return Response
     */
    public function store(CreateLeadRequest $request)
    {
        $input = $request->all();

        $lead = $this->leadRepository->create($input);

        Flash::success('Lead saved successfully.');

        return redirect(route('leads.index'));
    }

    /**
     * Display the specified Lead.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lead = $this->leadRepository->findWithoutFail($id);

        if (empty($lead)) {
            Flash::error('Lead not found');

            return redirect(route('leads.index'));
        }

        return view('leads.show')->with('lead', $lead);
    }

    /**
     * Show the form for editing the specified Lead.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lead = $this->leadRepository->findWithoutFail($id);

        if (empty($lead)) {
            Flash::error('Lead not found');

            return redirect(route('leads.index'));
        }

        return view('leads.edit')->with('lead', $lead);
    }

    /**
     * Update the specified Lead in storage.
     *
     * @param  int              $id
     * @param UpdateLeadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeadRequest $request)
    {
        $lead = $this->leadRepository->findWithoutFail($id);

        if (empty($lead)) {
            Flash::error('Lead not found');

            return redirect(route('leads.index'));
        }

        $lead = $this->leadRepository->update($request->all(), $id);

        Flash::success('Lead updated successfully.');

        return redirect(route('leads.index'));
    }

    /**
     * Remove the specified Lead from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lead = $this->leadRepository->findWithoutFail($id);

        if (empty($lead)) {
            Flash::error('Lead not found');

            return redirect(route('leads.index'));
        }

        $this->leadRepository->delete($id);

        Flash::success('Lead deleted successfully.');

        return redirect(route('leads.index'));
    }

    public function search(Request $request){

        $opportunity = 1;

        $room = $request->get('customRadio0');

        if($room == 1){
            $name_room = 'Monoambiente';
        } elseif($room == 2){
            $name_room = '2 Dormitorios';
        } else {
            $name_room = '1 Dormitorio';
        }

        $state = $request->get('customRadio1');

        if($state == 1){
            $name_state = 'Terminado';
        } elseif($state == 2){
            $name_state = 'En construcción';
        } else {
            $name_state = 'Próximo a entregarse';
        }

        $advance_payment = $request->get('customRadio2');

        $fee_month= $request->get('customRadio3');

        $lead = new \App\Models\Lead;

        $lead->room = $name_room;

        $lead->state = $name_state;

        $lead->advance_payment = $advance_payment;

        $lead->fee_month= $fee_month;        

        preg_match_all('!\d+!', $advance_payment, $adelanto);        
        $adelanto_min = $adelanto[0]['0'];       
        $adelanto_max = $adelanto[0]['1'];       
        preg_match_all('!\d+!', $fee_month, $cuota);
        $cuota_min = $cuota[0]['0'];
        $cuota_max = $cuota[0]['1'];

        if($adelanto_min == 0 and $cuota_min != 0){
            $buildings = \App\Models\Building::where('state',$state)->where('advance_payment','>',$adelanto_max)->whereBetween('fee_month',[$cuota_min,$cuota_max])->get();
            
        }elseif($cuota_min == 0 and $adelanto_min != 0){
            $buildings = \App\Models\Building::where('state',$state)->whereBetween('advance_payment',[$adelanto_min,$adelanto_max])->where('fee_month','>',$cuota_max)->get();
             
        } elseif($adelanto_min == 0 and $cuota_min == 0){
            $buildings = \App\Models\Building::where('state',$state)->where('advance_payment','>',$adelanto_max)->where('fee_month','>',$cuota_max)->get();
             
        }else{
             $buildings = \App\Models\Building::where('state',$state)->whereBetween('advance_payment',[$adelanto_min,$adelanto_max])->whereBetween('fee_month',[$cuota_min,$cuota_max])->get();
                      }

        if($room == 1)
            $room = "Monoambiente";
        elseif($room == 2)
            $room = "1 Dormitorio";
        else
            $room = "2 Dormitorios";

        if($state == 1)
            $state = "Terminado";
        elseif($state == 2)
            $state = "En construcción";
        else
            $state = "Próximo a entregarse";           

        $tmp_values= [];

        $tmp_values[0]=$room;
        $tmp_values[1]= $state;
        $tmp_values[2] = $advance_payment;
        $tmp_values[3]= $fee_month;

        //dd($tmp_values);

        $request->session()->put('multiplechoise',$tmp_values);

        //dd($request->session());        
        

         return view('buildings.search')
            ->with('buildings', $buildings)->with('opportunity', $opportunity);
    }


    public function additional_data(Request $request){

        //dd($request);

        Flash::success('Lead deleted successfully.');

        $lead = new \App\Models\Lead();

        //if ($request->session()->has('users')) {
   
             $parcial_data=$request->session()->get('multiplechoise');           

             $lead->room = $parcial_data[0];
             $lead->state= $parcial_data[1];
             $lead->advance_payment = $parcial_data[2];
             $lead->fee_month= $parcial_data[3];
             $lead->fullname = $request->nyp;
             $lead->telephone = $request->telefono;
             $lead->mail = $request->mail;

             //dd("FRANCO");

      // }

           $id=$request->identificador;

             $lead->save();

             return redirect('/buildings/'.$id);

        //dd($lead);

       

    }
}
