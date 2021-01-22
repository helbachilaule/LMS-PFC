<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF4aulac2m1Request;
use App\Http\Requests\UpdateF4aulac2m1Request;
use App\Repositories\F4aulac2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F4aulac2m1Controller extends AppBaseController
{
    /** @var  F4aulac2m1Repository */
    private $f4aulac2m1Repository;

    public function __construct(F4aulac2m1Repository $f4aulac2m1Repo)
    {
        $this->f4aulac2m1Repository = $f4aulac2m1Repo;
    }

    /**
     * Display a listing of the F4aulac2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f4aulac2m1s = $this->f4aulac2m1Repository->all();

        return view('f4aulac2m1s.index')
            ->with('f4aulac2m1s', $f4aulac2m1s);
    }

    /**
     * Show the form for creating a new F4aulac2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f4aulac2m1s.create');
    }

    /**
     * Store a newly created F4aulac2m1 in storage.
     *
     * @param CreateF4aulac2m1Request $request
     *
     * @return Response
     */
    public function store(CreateF4aulac2m1Request $request)
    {
        $input = $request->all();

        $f4aulac2m1 = $this->f4aulac2m1Repository->create($input);

        Flash::success('F4Aulac2M1 saved successfully.');

        return redirect(route('f4aulac2m1s.index'));
    }

    /**
     * Display the specified F4aulac2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f4aulac2m1 = $this->f4aulac2m1Repository->find($id);

        if (empty($f4aulac2m1)) {
            Flash::error('F4Aulac2M1 not found');

            return redirect(route('f4aulac2m1s.index'));
        }

        return view('f4aulac2m1s.show')->with('f4aulac2m1', $f4aulac2m1);
    }

    /**
     * Show the form for editing the specified F4aulac2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f4aulac2m1 = $this->f4aulac2m1Repository->find($id);

        if (empty($f4aulac2m1)) {
            Flash::error('F4Aulac2M1 not found');

            return redirect(route('f4aulac2m1s.index'));
        }

        return view('f4aulac2m1s.edit')->with('f4aulac2m1', $f4aulac2m1);
    }

    /**
     * Update the specified F4aulac2m1 in storage.
     *
     * @param int $id
     * @param UpdateF4aulac2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF4aulac2m1Request $request)
    {
        $f4aulac2m1 = $this->f4aulac2m1Repository->find($id);

        if (empty($f4aulac2m1)) {
            Flash::error('F4Aulac2M1 not found');

            return redirect(route('f4aulac2m1s.index'));
        }

        $f4aulac2m1 = $this->f4aulac2m1Repository->update($request->all(), $id);

        Flash::success('F4Aulac2M1 updated successfully.');

        return redirect(route('f4aulac2m1s.index'));
    }

    /**
     * Remove the specified F4aulac2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f4aulac2m1 = $this->f4aulac2m1Repository->find($id);

        if (empty($f4aulac2m1)) {
            Flash::error('F4Aulac2M1 not found');

            return redirect(route('f4aulac2m1s.index'));
        }

        $this->f4aulac2m1Repository->delete($id);

        Flash::success('F4Aulac2M1 deleted successfully.');

        return redirect(route('f4aulac2m1s.index'));
    }
}
