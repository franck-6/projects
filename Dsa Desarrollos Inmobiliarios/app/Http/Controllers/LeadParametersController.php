<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLeadParametersRequest;
use App\Http\Requests\UpdateLeadParametersRequest;
use App\Repositories\LeadParametersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LeadParametersController extends AppBaseController
{
    /** @var  LeadParametersRepository */
    private $leadParametersRepository;

    public function __construct(LeadParametersRepository $leadParametersRepo)
    {
        $this->leadParametersRepository = $leadParametersRepo;
    }

    /**
     * Display a listing of the LeadParameters.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->leadParametersRepository->pushCriteria(new RequestCriteria($request));
        $leadParameters = $this->leadParametersRepository->all();

        return view('lead_parameters.index')
            ->with('leadParameters', $leadParameters);
    }

    /**
     * Show the form for creating a new LeadParameters.
     *
     * @return Response
     */
    public function create()
    {
        return view('lead_parameters.create');
    }

    /**
     * Store a newly created LeadParameters in storage.
     *
     * @param CreateLeadParametersRequest $request
     *
     * @return Response
     */
    public function store(CreateLeadParametersRequest $request)
    {
        $input = $request->all();

        $leadParameters = $this->leadParametersRepository->create($input);

        Flash::success('Lead Parameters saved successfully.');

        return redirect(route('leadParameters.index'));
    }

    /**
     * Display the specified LeadParameters.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leadParameters = $this->leadParametersRepository->findWithoutFail($id);

        if (empty($leadParameters)) {
            Flash::error('Lead Parameters not found');

            return redirect(route('leadParameters.index'));
        }

        return view('lead_parameters.show')->with('leadParameters', $leadParameters);
    }

    /**
     * Show the form for editing the specified LeadParameters.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leadParameters = $this->leadParametersRepository->findWithoutFail($id);

        if (empty($leadParameters)) {
            Flash::error('Lead Parameters not found');

            return redirect(route('leadParameters.index'));
        }

        return view('lead_parameters.edit')->with('leadParameters', $leadParameters);
    }

    /**
     * Update the specified LeadParameters in storage.
     *
     * @param  int              $id
     * @param UpdateLeadParametersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeadParametersRequest $request)
    {
        $leadParameters = $this->leadParametersRepository->findWithoutFail($id);

        if (empty($leadParameters)) {
            Flash::error('Lead Parameters not found');

            return redirect(route('leadParameters.index'));
        }

        $leadParameters = $this->leadParametersRepository->update($request->all(), $id);

        Flash::success('Lead Parameters updated successfully.');

        return redirect(route('leadParameters.index'));
    }

    /**
     * Remove the specified LeadParameters from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leadParameters = $this->leadParametersRepository->findWithoutFail($id);

        if (empty($leadParameters)) {
            Flash::error('Lead Parameters not found');

            return redirect(route('leadParameters.index'));
        }

        $this->leadParametersRepository->delete($id);

        Flash::success('Lead Parameters deleted successfully.');

        return redirect(route('leadParameters.index'));
    }
}
