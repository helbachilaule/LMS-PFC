<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAttendaceRequest;
use App\Http\Requests\UpdateAttendaceRequest;
use App\Repositories\AttendaceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AttendaceController extends AppBaseController
{
    /** @var  AttendaceRepository */
    private $attendaceRepository;

    public function __construct(AttendaceRepository $attendaceRepo)
    {
        $this->attendaceRepository = $attendaceRepo;
    }

    /**
     * Display a listing of the Attendace.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $attendaces = $this->attendaceRepository->all();

        return view('attendaces.index')
            ->with('attendaces', $attendaces);
    }

    /**
     * Show the form for creating a new Attendace.
     *
     * @return Response
     */
    public function create()
    {
        return view('attendaces.create');
    }

    /**
     * Store a newly created Attendace in storage.
     *
     * @param CreateAttendaceRequest $request
     *
     * @return Response
     */
    public function store(CreateAttendaceRequest $request)
    {
        $input = $request->all();

        $attendace = $this->attendaceRepository->create($input);

        Flash::success('Attendace saved successfully.');

        return redirect(route('attendaces.index'));
    }

    /**
     * Display the specified Attendace.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $attendace = $this->attendaceRepository->find($id);

        if (empty($attendace)) {
            Flash::error('Attendace not found');

            return redirect(route('attendaces.index'));
        }

        return view('attendaces.show')->with('attendace', $attendace);
    }

    /**
     * Show the form for editing the specified Attendace.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $attendace = $this->attendaceRepository->find($id);

        if (empty($attendace)) {
            Flash::error('Attendace not found');

            return redirect(route('attendaces.index'));
        }

        return view('attendaces.edit')->with('attendace', $attendace);
    }

    /**
     * Update the specified Attendace in storage.
     *
     * @param int $id
     * @param UpdateAttendaceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAttendaceRequest $request)
    {
        $attendace = $this->attendaceRepository->find($id);

        if (empty($attendace)) {
            Flash::error('Attendace not found');

            return redirect(route('attendaces.index'));
        }

        $attendace = $this->attendaceRepository->update($request->all(), $id);

        Flash::success('Attendace updated successfully.');

        return redirect(route('attendaces.index'));
    }

    /**
     * Remove the specified Attendace from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $attendace = $this->attendaceRepository->find($id);

        if (empty($attendace)) {
            Flash::error('Attendace not found');

            return redirect(route('attendaces.index'));
        }

        $this->attendaceRepository->delete($id);

        Flash::success('Attendace deleted successfully.');

        return redirect(route('attendaces.index'));
    }
}
