<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp2debatec1m1Request;
use App\Http\Requests\UpdateAp2debatec1m1Request;
use App\Repositories\Ap2debatec1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap2debatec1m1Controller extends AppBaseController
{
    /** @var  Ap2debatec1m1Repository */
    private $ap2debatec1m1Repository;

    public function __construct(Ap2debatec1m1Repository $ap2debatec1m1Repo)
    {
        $this->ap2debatec1m1Repository = $ap2debatec1m1Repo;
    }

    /**
     * Display a listing of the Ap2debatec1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap2debatec1m1s = $this->ap2debatec1m1Repository->all();

        return view('ap2debatec1m1s.index')
            ->with('ap2debatec1m1s', $ap2debatec1m1s);
    }

    /**
     * Show the form for creating a new Ap2debatec1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap2debatec1m1s.create');
    }

    /**
     * Store a newly created Ap2debatec1m1 in storage.
     *
     * @param CreateAp2debatec1m1Request $request
     *
     * @return Response
     */
    public function store(CreateAp2debatec1m1Request $request)
    {
        $input = $request->all();

        $ap2debatec1m1 = $this->ap2debatec1m1Repository->create($input);

        Flash::success('Ap2Debatec1M1 saved successfully.');

        return redirect(route('ap2debatec1m1s.index'));
    }

    /**
     * Display the specified Ap2debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap2debatec1m1 = $this->ap2debatec1m1Repository->find($id);

        if (empty($ap2debatec1m1)) {
            Flash::error('Ap2Debatec1M1 not found');

            return redirect(route('ap2debatec1m1s.index'));
        }

        return view('ap2debatec1m1s.show')->with('ap2debatec1m1', $ap2debatec1m1);
    }

    /**
     * Show the form for editing the specified Ap2debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap2debatec1m1 = $this->ap2debatec1m1Repository->find($id);

        if (empty($ap2debatec1m1)) {
            Flash::error('Ap2Debatec1M1 not found');

            return redirect(route('ap2debatec1m1s.index'));
        }

        return view('ap2debatec1m1s.edit')->with('ap2debatec1m1', $ap2debatec1m1);
    }

    /**
     * Update the specified Ap2debatec1m1 in storage.
     *
     * @param int $id
     * @param UpdateAp2debatec1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp2debatec1m1Request $request)
    {
        $ap2debatec1m1 = $this->ap2debatec1m1Repository->find($id);

        if (empty($ap2debatec1m1)) {
            Flash::error('Ap2Debatec1M1 not found');

            return redirect(route('ap2debatec1m1s.index'));
        }

        $ap2debatec1m1 = $this->ap2debatec1m1Repository->update($request->all(), $id);

        Flash::success('Ap2Debatec1M1 updated successfully.');

        return redirect(route('ap2debatec1m1s.index'));
    }

    /**
     * Remove the specified Ap2debatec1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap2debatec1m1 = $this->ap2debatec1m1Repository->find($id);

        if (empty($ap2debatec1m1)) {
            Flash::error('Ap2Debatec1M1 not found');

            return redirect(route('ap2debatec1m1s.index'));
        }

        $this->ap2debatec1m1Repository->delete($id);

        Flash::success('Ap2Debatec1M1 deleted successfully.');

        return redirect(route('ap2debatec1m1s.index'));
    }
}
