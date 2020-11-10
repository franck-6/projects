<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBuildingRequest;
use App\Http\Requests\UpdateBuildingRequest;
use App\Repositories\BuildingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Location,RoomNumber,ImageFlat,GalleryBuilding;
use DB;

class BuildingController extends AppBaseController
{
    /** @var  BuildingRepository */
    private $buildingRepository;

    public function __construct(BuildingRepository $buildingRepo)
    {
        $this->buildingRepository = $buildingRepo;
    }

    /**
     * Display a listing of the Building.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->buildingRepository->pushCriteria(new RequestCriteria($request));
        //$buildings = $this->buildingRepository::where('habilitado',1)->get();

        $buildings = \App\Models\Building::where('habilitado',1)->get();

        $locations = \App\Models\Location::all();
        $room_numbers = \App\Models\RoomNumber::all();


        return view('buildings.index')
            ->with('buildings', $buildings)
            ->with('locations', $locations)
            ->with('rooms', $room_numbers);
    }

    /**
     * Show the form for creating a new Building.
     *
     * @return Response
     */
    public function create()
    {
        return view('buildings.create');
    }

    /**
     * Store a newly created Building in storage.
     *
     * @param CreateBuildingRequest $request
     *
     * @return Response
     */
    public function store(CreateBuildingRequest $request)
    {
        $input = $request->all();

        $building = $this->buildingRepository->create($input);

        Flash::success('Building saved successfully.');

        return redirect(route('buildings.index'));
    }

    /**
     * Display the specified Building.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $building = $this->buildingRepository->findWithoutFail($id);



        $gallery = \App\Models\GalleryBuilding::where('building_id',$id)->get();

        //$locations = \App\Models\Location::where('building_id',$id)->get();

        $room_numbers = \App\Models\Room::where('building_id',$id)->get();
        $planos = \App\Models\ImageFlat::where('building_id', $id)->get();
        $galleryImages = \App\Models\GalleryBuilding::where('building_id',$id)->get();

        if (empty($building)) {
            Flash::error('Building not found');

            return redirect(route('buildings.index'));
        }



        return view('home.project')->with('building', $building)->with('gallery',$gallery)->with('room_numbers', $room_numbers)->with('planosf', $planos)->with('galleryImages', $galleryImages);
    }
    /**

     * Show the form for editing the specified Building.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $building = $this->buildingRepository->findWithoutFail($id);

        if (empty($building)) {
            Flash::error('Building not found');

            return redirect(route('buildings.index'));
        }

        return view('buildings.edit')->with('building', $building);
    }

    /**
     * Update the specified Building in storage.
     *
     * @param  int              $id
     * @param UpdateBuildingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBuildingRequest $request)
    {
        $building = $this->buildingRepository->findWithoutFail($id);

        if (empty($building)) {
            Flash::error('Building not found');

            return redirect(route('buildings.index'));
        }

        $building = $this->buildingRepository->update($request->all(), $id);

        Flash::success('Building updated successfully.');

        return redirect(route('buildings.index'));
    }

    /**
     * Remove the specified Building from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $building = $this->buildingRepository->findWithoutFail($id);

        if (empty($building)) {
            Flash::error('Building not found');

            return redirect(route('buildings.index'));
        }

        $this->buildingRepository->delete($id);

        Flash::success('Building deleted successfully.');

        return redirect(route('buildings.index'));
    }

    public function search(Request $request){

        $type= $request->input('tipo');

        $status = $request->input('estado');

        //$location = $request->input('location');

        $room = $request->input('room');

        $opportunity = 0;        

        /*$habitaciones =DB::table('buildings')
        ->join('rooms', 'buildings.id','=', 'rooms.building_id')
        ->join('room_numbers','rooms.room_number_id','=','room_numbers.id')        
        ->where('buildings.habilitado',1)
        ->take(5)
        ->orderBy('buildings.created_at', 'DESC')
        ->get();*/

        $build_habitaciones =\App\Models\Building::select(DB::raw('buildings.id,buildings.name,buildings.image,buildings.type,buildings.state, buildings.habilitado'))
        ->join('rooms', 'buildings.id','=', 'rooms.building_id')
        ->join('room_numbers','rooms.room_number_id','=','room_numbers.id')        
        ->where('buildings.habilitado',1)
        ->where('type',$type)
        ->where('state',$status)
        ->where('room_numbers.id',$room)
        ->take(5)
        ->orderBy('buildings.created_at', 'DESC')
        ->get();   

        //return redirect(route('buildings.index'));

       return view('buildings.search')
            ->with('buildings', $build_habitaciones)->with('opportunity', $opportunity);
    }

}
