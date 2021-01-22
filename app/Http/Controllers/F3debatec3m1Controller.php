<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF3debatec3m1Request;
use App\Http\Requests\UpdateF3debatec3m1Request;
use App\Repositories\F3debatec3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F3debatec3m1Controller extends AppBaseController
{
    /** @var  F3debatec3m1Repository */
    private $f3debatec3m1Repository;

    public function __construct(F3debatec3m1Repository $f3debatec3m1Repo)
    {
        $this->f3debatec3m1Repository = $f3debatec3m1Repo;
    }

    /**
     * Display a listing of the F3debatec3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f3debatec3m1s = $this->f3debatec3m1Repository->all();

        return view('f3debatec3m1s.index')
            ->with('f3debatec3m1s', $f3debatec3m1s);
    }

    /**
     * Show the form for creating a new F3debatec3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f3debatec3m1s.create');
    }

    /**
     * Store a newly created F3debatec3m1 in storage.
     *
     * @param CreateF3debatec3m1Request $request
     *
     * @return Response
     */
    public function store(CreateF3debatec3m1Request $request)
    {
        $input = $request->all();

        $f3debatec3m1 = $this->f3debatec3m1Repository->create($input);

        Flash::success('F3Debatec3M1 saved successfully.');

        return redirect(route('f3debatec3m1s.index'));
    }

    /**
     * Display the specified F3debatec3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f3debatec3m1 = $this->f3debatec3m1Repository->find($id);

        if (empty($f3debatec3m1)) {
            Flash::error('F3Debatec3M1 not found');

            return redirect(route('f3debatec3m1s.index'));
        }

        return view('f3debatec3m1s.show')->with('f3debatec3m1', $f3debatec3m1);
    }

    /**
     * Show the form for editing the specified F3debatec3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f3debatec3m1 = $this->f3debatec3m1Repository->find($id);

        if (empty($f3debatec3m1)) {
            Flash::error('F3Debatec3M1 not found');

            return redirect(route('f3debatec3m1s.index'));
        }

        return view('f3debatec3m1s.edit')->with('f3debatec3m1', $f3debatec3m1);
    }

    /**
     * Update the specified F3debatec3m1 in storage.
     *
     * @param int $id
     * @param UpdateF3debatec3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF3debatec3m1Request $request)
    {
        $f3debatec3m1 = $this->f3debatec3m1Repository->find($id);

        if (empty($f3debatec3m1)) {
            Flash::error('F3Debatec3M1 not found');

            return redirect(route('f3debatec3m1s.index'));
        }

        $f3debatec3m1 = $this->f3debatec3m1Repository->update($request->all(), $id);

        Flash::success('F3Debatec3M1 updated successfully.');

        return redirect(route('f3debatec3m1s.index'));
    }

    /**
     * Remove the specified F3debatec3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f3debatec3m1 = $this->f3debatec3m1Repository->find($id);

        if (empty($f3debatec3m1)) {
            Flash::error('F3Debatec3M1 not found');

            return redirect(route('f3debatec3m1s.index'));
        }

        $this->f3debatec3m1Repository->delete($id);

        Flash::success('F3Debatec3M1 deleted successfully.');

        return redirect(route('f3debatec3m1s.index'));
    }
}
