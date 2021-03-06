<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF1debatec1m1Request;
use App\Http\Requests\UpdateF1debatec1m1Request;
use App\Repositories\F1debatec1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F1debatec1m1Controller extends AppBaseController
{
    /** @var  F1debatec1m1Repository */
    private $f1debatec1m1Repository;

    public function __construct(F1debatec1m1Repository $f1debatec1m1Repo)
    {
        $this->f1debatec1m1Repository = $f1debatec1m1Repo;
    }

    /**
     * Display a listing of the F1debatec1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f1debatec1m1s = $this->f1debatec1m1Repository->all();

        return view('f1debatec1m1s.index')
            ->with('f1debatec1m1s', $f1debatec1m1s);
    }

    /**
     * Show the form for creating a new F1debatec1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f1debatec1m1s.create');
    }

    /**
     * Store a newly created F1debatec1m1 in storage.
     *
     * @param CreateF1debatec1m1Request $request
     *
     * @return Response
     */
    public function store(CreateF1debatec1m1Request $request)
    {
        $input = $request->all();

        $f1debatec1m1 = $this->f1debatec1m1Repository->create($input);

        Flash::success('F1Debatec1M1 saved successfully.');

        return redirect(route('f1debatec1m1s.index'));
    }

    /**
     * Display the specified F1debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f1debatec1m1 = $this->f1debatec1m1Repository->find($id);

        if (empty($f1debatec1m1)) {
            Flash::error('F1Debatec1M1 not found');

            return redirect(route('f1debatec1m1s.index'));
        }

        return view('f1debatec1m1s.show')->with('f1debatec1m1', $f1debatec1m1);
    }

    /**
     * Show the form for editing the specified F1debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f1debatec1m1 = $this->f1debatec1m1Repository->find($id);

        if (empty($f1debatec1m1)) {
            Flash::error('F1Debatec1M1 not found');

            return redirect(route('f1debatec1m1s.index'));
        }

        return view('f1debatec1m1s.edit')->with('f1debatec1m1', $f1debatec1m1);
    }

    /**
     * Update the specified F1debatec1m1 in storage.
     *
     * @param int $id
     * @param UpdateF1debatec1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF1debatec1m1Request $request)
    {
        $f1debatec1m1 = $this->f1debatec1m1Repository->find($id);

        if (empty($f1debatec1m1)) {
            Flash::error('F1Debatec1M1 not found');

            return redirect(route('f1debatec1m1s.index'));
        }

        $f1debatec1m1 = $this->f1debatec1m1Repository->update($request->all(), $id);

        Flash::success('F1Debatec1M1 updated successfully.');

        return redirect(route('f1debatec1m1s.index'));
    }

    /**
     * Remove the specified F1debatec1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f1debatec1m1 = $this->f1debatec1m1Repository->find($id);

        if (empty($f1debatec1m1)) {
            Flash::error('F1Debatec1M1 not found');

            return redirect(route('f1debatec1m1s.index'));
        }

        $this->f1debatec1m1Repository->delete($id);

        Flash::success('F1Debatec1M1 deleted successfully.');

        return redirect(route('f1debatec1m1s.index'));
    }
}
