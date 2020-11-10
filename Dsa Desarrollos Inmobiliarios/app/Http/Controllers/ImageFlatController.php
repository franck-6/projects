<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateImageFlatRequest;
use App\Http\Requests\UpdateImageFlatRequest;
use App\Repositories\ImageFlatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ImageFlatController extends AppBaseController
{
    /** @var  ImageFlatRepository */
    private $imageFlatRepository;

    public function __construct(ImageFlatRepository $imageFlatRepo)
    {
        $this->imageFlatRepository = $imageFlatRepo;
    }

    /**
     * Display a listing of the ImageFlat.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->imageFlatRepository->pushCriteria(new RequestCriteria($request));
        $imageFlats = $this->imageFlatRepository->all();

        return view('image_flats.index')
            ->with('imageFlats', $imageFlats);
    }

    /**
     * Show the form for creating a new ImageFlat.
     *
     * @return Response
     */
    public function create()
    {
        return view('image_flats.create');
    }

    /**
     * Store a newly created ImageFlat in storage.
     *
     * @param CreateImageFlatRequest $request
     *
     * @return Response
     */
    public function store(CreateImageFlatRequest $request)
    {
        $input = $request->all();

        $imageFlat = $this->imageFlatRepository->create($input);

        Flash::success('Image Flat saved successfully.');

        return redirect(route('imageFlats.index'));
    }

    /**
     * Display the specified ImageFlat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $imageFlat = $this->imageFlatRepository->findWithoutFail($id);

        if (empty($imageFlat)) {
            Flash::error('Image Flat not found');

            return redirect(route('imageFlats.index'));
        }

        return view('image_flats.show')->with('imageFlat', $imageFlat);
    }

    /**
     * Show the form for editing the specified ImageFlat.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $imageFlat = $this->imageFlatRepository->findWithoutFail($id);

        if (empty($imageFlat)) {
            Flash::error('Image Flat not found');

            return redirect(route('imageFlats.index'));
        }

        return view('image_flats.edit')->with('imageFlat', $imageFlat);
    }

    /**
     * Update the specified ImageFlat in storage.
     *
     * @param  int              $id
     * @param UpdateImageFlatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateImageFlatRequest $request)
    {
        $imageFlat = $this->imageFlatRepository->findWithoutFail($id);

        if (empty($imageFlat)) {
            Flash::error('Image Flat not found');

            return redirect(route('imageFlats.index'));
        }

        $imageFlat = $this->imageFlatRepository->update($request->all(), $id);

        Flash::success('Image Flat updated successfully.');

        return redirect(route('imageFlats.index'));
    }

    /**
     * Remove the specified ImageFlat from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $imageFlat = $this->imageFlatRepository->findWithoutFail($id);

        if (empty($imageFlat)) {
            Flash::error('Image Flat not found');

            return redirect(route('imageFlats.index'));
        }

        $this->imageFlatRepository->delete($id);

        Flash::success('Image Flat deleted successfully.');

        return redirect(route('imageFlats.index'));
    }
}
