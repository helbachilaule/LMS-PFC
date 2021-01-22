<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF2debatec1m1Request;
use App\Http\Requests\UpdateF2debatec1m1Request;
use App\Repositories\F2debatec1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F2debatec1m1Controller extends AppBaseController
{
    /** @var  F2debatec1m1Repository */
    private $f2debatec1m1Repository;

    public function __construct(F2debatec1m1Repository $f2debatec1m1Repo)
    {
        $this->f2debatec1m1Repository = $f2debatec1m1Repo;
    }

    /**
     * Display a listing of the F2debatec1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f2debatec1m1s = $this->f2debatec1m1Repository->all();

        return view('f2debatec1m1s.index')
            ->with('f2debatec1m1s', $f2debatec1m1s);
    }

    /**
     * Show the form for creating a new F2debatec1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f2debatec1m1s.create');
    }

    /**
     * Store a newly created F2debatec1m1 in storage.
     *
     * @param CreateF2debatec1m1Request $request
     *
     * @return Response
     */
    public function store(CreateF2debatec1m1Request $request)
    {
        $input = $request->all();

        $f2debatec1m1 = $this->f2debatec1m1Repository->create($input);

        Flash::success('F2Debatec1M1 saved successfully.');

        return redirect(route('f2debatec1m1s.index'));
    }

    /**
     * Display the specified F2debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f2debatec1m1 = $this->f2debatec1m1Repository->find($id);

        if (empty($f2debatec1m1)) {
            Flash::error('F2Debatec1M1 not found');

            return redirect(route('f2debatec1m1s.index'));
        }

        return view('f2debatec1m1s.show')->with('f2debatec1m1', $f2debatec1m1);
    }

    /**
     * Show the form for editing the specified F2debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f2debatec1m1 = $this->f2debatec1m1Repository->find($id);

        if (empty($f2debatec1m1)) {
            Flash::error('F2Debatec1M1 not found');

            return redirect(route('f2debatec1m1s.index'));
        }

        return view('f2debatec1m1s.edit')->with('f2debatec1m1', $f2debatec1m1);
    }

    /**
     * Update the specified F2debatec1m1 in storage.
     *
     * @param int $id
     * @param UpdateF2debatec1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF2debatec1m1Request $request)
    {
        $f2debatec1m1 = $this->f2debatec1m1Repository->find($id);

        if (empty($f2debatec1m1)) {
            Flash::error('F2Debatec1M1 not found');

            return redirect(route('f2debatec1m1s.index'));
        }

        $f2debatec1m1 = $this->f2debatec1m1Repository->update($request->all(), $id);

        Flash::success('F2Debatec1M1 updated successfully.');

        return redirect(route('f2debatec1m1s.index'));
    }

    /**
     * Remove the specified F2debatec1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f2debatec1m1 = $this->f2debatec1m1Repository->find($id);

        if (empty($f2debatec1m1)) {
            Flash::error('F2Debatec1M1 not found');

            return redirect(route('f2debatec1m1s.index'));
        }

        $this->f2debatec1m1Repository->delete($id);

        Flash::success('F2Debatec1M1 deleted successfully.');

        return redirect(route('f2debatec1m1s.index'));
    }
}
