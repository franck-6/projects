<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGalleryBuildingRequest;
use App\Http\Requests\UpdateGalleryBuildingRequest;
use App\Repositories\GalleryBuildingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class GalleryBuildingController extends AppBaseController
{
    /** @var  GalleryBuildingRepository */
    private $galleryBuildingRepository;

    public function __construct(GalleryBuildingRepository $galleryBuildingRepo)
    {
        $this->galleryBuildingRepository = $galleryBuildingRepo;
    }

    /**
     * Display a listing of the GalleryBuilding.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->galleryBuildingRepository->pushCriteria(new RequestCriteria($request));
        $galleryBuildings = $this->galleryBuildingRepository->all();

        return view('gallery_buildings.index')
            ->with('galleryBuildings', $galleryBuildings);
    }

    /**
     * Show the form for creating a new GalleryBuilding.
     *
     * @return Response
     */
    public function create()
    {
        return view('gallery_buildings.create');
    }

    /**
     * Store a newly created GalleryBuilding in storage.
     *
     * @param CreateGalleryBuildingRequest $request
     *
     * @return Response
     */
    public function store(CreateGalleryBuildingRequest $request)
    {
        $input = $request->all();

        $galleryBuilding = $this->galleryBuildingRepository->create($input);

        Flash::success('Gallery Building saved successfully.');

        return redirect(route('galleryBuildings.index'));
    }

    /**
     * Display the specified GalleryBuilding.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $galleryBuilding = $this->galleryBuildingRepository->findWithoutFail($id);

        if (empty($galleryBuilding)) {
            Flash::error('Gallery Building not found');

            return redirect(route('galleryBuildings.index'));
        }

        return view('gallery_buildings.show')->with('galleryBuilding', $galleryBuilding);
    }

    /**
     * Show the form for editing the specified GalleryBuilding.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $galleryBuilding = $this->galleryBuildingRepository->findWithoutFail($id);

        if (empty($galleryBuilding)) {
            Flash::error('Gallery Building not found');

            return redirect(route('galleryBuildings.index'));
        }

        return view('gallery_buildings.edit')->with('galleryBuilding', $galleryBuilding);
    }

    /**
     * Update the specified GalleryBuilding in storage.
     *
     * @param  int              $id
     * @param UpdateGalleryBuildingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGalleryBuildingRequest $request)
    {
        $galleryBuilding = $this->galleryBuildingRepository->findWithoutFail($id);

        if (empty($galleryBuilding)) {
            Flash::error('Gallery Building not found');

            return redirect(route('galleryBuildings.index'));
        }

        $galleryBuilding = $this->galleryBuildingRepository->update($request->all(), $id);

        Flash::success('Gallery Building updated successfully.');

        return redirect(route('galleryBuildings.index'));
    }

    /**
     * Remove the specified GalleryBuilding from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $galleryBuilding = $this->galleryBuildingRepository->findWithoutFail($id);

        if (empty($galleryBuilding)) {
            Flash::error('Gallery Building not found');

            return redirect(route('galleryBuildings.index'));
        }

        $this->galleryBuildingRepository->delete($id);

        Flash::success('Gallery Building deleted successfully.');

        return redirect(route('galleryBuildings.index'));
    }
}
