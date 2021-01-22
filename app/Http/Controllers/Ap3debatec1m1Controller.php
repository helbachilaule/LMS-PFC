<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp3debatec1m1Request;
use App\Http\Requests\UpdateAp3debatec1m1Request;
use App\Repositories\Ap3debatec1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap3debatec1m1Controller extends AppBaseController
{
    /** @var  Ap3debatec1m1Repository */
    private $ap3debatec1m1Repository;

    public function __construct(Ap3debatec1m1Repository $ap3debatec1m1Repo)
    {
        $this->ap3debatec1m1Repository = $ap3debatec1m1Repo;
    }

    /**
     * Display a listing of the Ap3debatec1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap3debatec1m1s = $this->ap3debatec1m1Repository->all();

        return view('ap3debatec1m1s.index')
            ->with('ap3debatec1m1s', $ap3debatec1m1s);
    }

    /**
     * Show the form for creating a new Ap3debatec1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap3debatec1m1s.create');
    }

    /**
     * Store a newly created Ap3debatec1m1 in storage.
     *
     * @param CreateAp3debatec1m1Request $request
     *
     * @return Response
     */
    public function store(CreateAp3debatec1m1Request $request)
    {
        $input = $request->all();

        $ap3debatec1m1 = $this->ap3debatec1m1Repository->create($input);

        Flash::success('Ap3Debatec1M1 saved successfully.');

        return redirect(route('ap3debatec1m1s.index'));
    }

    /**
     * Display the specified Ap3debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap3debatec1m1 = $this->ap3debatec1m1Repository->find($id);

        if (empty($ap3debatec1m1)) {
            Flash::error('Ap3Debatec1M1 not found');

            return redirect(route('ap3debatec1m1s.index'));
        }

        return view('ap3debatec1m1s.show')->with('ap3debatec1m1', $ap3debatec1m1);
    }

    /**
     * Show the form for editing the specified Ap3debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap3debatec1m1 = $this->ap3debatec1m1Repository->find($id);

        if (empty($ap3debatec1m1)) {
            Flash::error('Ap3Debatec1M1 not found');

            return redirect(route('ap3debatec1m1s.index'));
        }

        return view('ap3debatec1m1s.edit')->with('ap3debatec1m1', $ap3debatec1m1);
    }

    /**
     * Update the specified Ap3debatec1m1 in storage.
     *
     * @param int $id
     * @param UpdateAp3debatec1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp3debatec1m1Request $request)
    {
        $ap3debatec1m1 = $this->ap3debatec1m1Repository->find($id);

        if (empty($ap3debatec1m1)) {
            Flash::error('Ap3Debatec1M1 not found');

            return redirect(route('ap3debatec1m1s.index'));
        }

        $ap3debatec1m1 = $this->ap3debatec1m1Repository->update($request->all(), $id);

        Flash::success('Ap3Debatec1M1 updated successfully.');

        return redirect(route('ap3debatec1m1s.index'));
    }

    /**
     * Remove the specified Ap3debatec1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap3debatec1m1 = $this->ap3debatec1m1Repository->find($id);

        if (empty($ap3debatec1m1)) {
            Flash::error('Ap3Debatec1M1 not found');

            return redirect(route('ap3debatec1m1s.index'));
        }

        $this->ap3debatec1m1Repository->delete($id);

        Flash::success('Ap3Debatec1M1 deleted successfully.');

        return redirect(route('ap3debatec1m1s.index'));
    }
}
