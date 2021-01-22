<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF3debatec1m1Request;
use App\Http\Requests\UpdateF3debatec1m1Request;
use App\Repositories\F3debatec1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F3debatec1m1Controller extends AppBaseController
{
    /** @var  F3debatec1m1Repository */
    private $f3debatec1m1Repository;

    public function __construct(F3debatec1m1Repository $f3debatec1m1Repo)
    {
        $this->f3debatec1m1Repository = $f3debatec1m1Repo;
    }

    /**
     * Display a listing of the F3debatec1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f3debatec1m1s = $this->f3debatec1m1Repository->all();

        return view('f3debatec1m1s.index')
            ->with('f3debatec1m1s', $f3debatec1m1s);
    }

    /**
     * Show the form for creating a new F3debatec1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f3debatec1m1s.create');
    }

    /**
     * Store a newly created F3debatec1m1 in storage.
     *
     * @param CreateF3debatec1m1Request $request
     *
     * @return Response
     */
    public function store(CreateF3debatec1m1Request $request)
    {
        $input = $request->all();

        $f3debatec1m1 = $this->f3debatec1m1Repository->create($input);

        Flash::success('F3Debatec1M1 saved successfully.');

        return redirect(route('f3debatec1m1s.index'));
    }

    /**
     * Display the specified F3debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f3debatec1m1 = $this->f3debatec1m1Repository->find($id);

        if (empty($f3debatec1m1)) {
            Flash::error('F3Debatec1M1 not found');

            return redirect(route('f3debatec1m1s.index'));
        }

        return view('f3debatec1m1s.show')->with('f3debatec1m1', $f3debatec1m1);
    }

    /**
     * Show the form for editing the specified F3debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f3debatec1m1 = $this->f3debatec1m1Repository->find($id);

        if (empty($f3debatec1m1)) {
            Flash::error('F3Debatec1M1 not found');

            return redirect(route('f3debatec1m1s.index'));
        }

        return view('f3debatec1m1s.edit')->with('f3debatec1m1', $f3debatec1m1);
    }

    /**
     * Update the specified F3debatec1m1 in storage.
     *
     * @param int $id
     * @param UpdateF3debatec1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF3debatec1m1Request $request)
    {
        $f3debatec1m1 = $this->f3debatec1m1Repository->find($id);

        if (empty($f3debatec1m1)) {
            Flash::error('F3Debatec1M1 not found');

            return redirect(route('f3debatec1m1s.index'));
        }

        $f3debatec1m1 = $this->f3debatec1m1Repository->update($request->all(), $id);

        Flash::success('F3Debatec1M1 updated successfully.');

        return redirect(route('f3debatec1m1s.index'));
    }

    /**
     * Remove the specified F3debatec1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f3debatec1m1 = $this->f3debatec1m1Repository->find($id);

        if (empty($f3debatec1m1)) {
            Flash::error('F3Debatec1M1 not found');

            return redirect(route('f3debatec1m1s.index'));
        }

        $this->f3debatec1m1Repository->delete($id);

        Flash::success('F3Debatec1M1 deleted successfully.');

        return redirect(route('f3debatec1m1s.index'));
    }
}
