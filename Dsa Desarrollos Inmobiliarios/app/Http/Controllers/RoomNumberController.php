<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoomNumberRequest;
use App\Http\Requests\UpdateRoomNumberRequest;
use App\Repositories\RoomNumberRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RoomNumberController extends AppBaseController
{
    /** @var  RoomNumberRepository */
    private $roomNumberRepository;

    public function __construct(RoomNumberRepository $roomNumberRepo)
    {
        $this->roomNumberRepository = $roomNumberRepo;
    }

    /**
     * Display a listing of the RoomNumber.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->roomNumberRepository->pushCriteria(new RequestCriteria($request));
        $roomNumbers = $this->roomNumberRepository->all();

        return view('room_numbers.index')
            ->with('roomNumbers', $roomNumbers);
    }

    /**
     * Show the form for creating a new RoomNumber.
     *
     * @return Response
     */
    public function create()
    {
        return view('room_numbers.create');
    }

    /**
     * Store a newly created RoomNumber in storage.
     *
     * @param CreateRoomNumberRequest $request
     *
     * @return Response
     */
    public function store(CreateRoomNumberRequest $request)
    {
        $input = $request->all();

        $roomNumber = $this->roomNumberRepository->create($input);

        Flash::success('Room Number saved successfully.');

        return redirect(route('roomNumbers.index'));
    }

    /**
     * Display the specified RoomNumber.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roomNumber = $this->roomNumberRepository->findWithoutFail($id);

        if (empty($roomNumber)) {
            Flash::error('Room Number not found');

            return redirect(route('roomNumbers.index'));
        }

        return view('room_numbers.show')->with('roomNumber', $roomNumber);
    }

    /**
     * Show the form for editing the specified RoomNumber.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roomNumber = $this->roomNumberRepository->findWithoutFail($id);

        if (empty($roomNumber)) {
            Flash::error('Room Number not found');

            return redirect(route('roomNumbers.index'));
        }

        return view('room_numbers.edit')->with('roomNumber', $roomNumber);
    }

    /**
     * Update the specified RoomNumber in storage.
     *
     * @param  int              $id
     * @param UpdateRoomNumberRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoomNumberRequest $request)
    {
        $roomNumber = $this->roomNumberRepository->findWithoutFail($id);

        if (empty($roomNumber)) {
            Flash::error('Room Number not found');

            return redirect(route('roomNumbers.index'));
        }

        $roomNumber = $this->roomNumberRepository->update($request->all(), $id);

        Flash::success('Room Number updated successfully.');

        return redirect(route('roomNumbers.index'));
    }

    /**
     * Remove the specified RoomNumber from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roomNumber = $this->roomNumberRepository->findWithoutFail($id);

        if (empty($roomNumber)) {
            Flash::error('Room Number not found');

            return redirect(route('roomNumbers.index'));
        }

        $this->roomNumberRepository->delete($id);

        Flash::success('Room Number deleted successfully.');

        return redirect(route('roomNumbers.index'));
    }
}
