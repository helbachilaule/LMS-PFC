<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP4debatec1m1Request;
use App\Http\Requests\UpdateP4debatec1m1Request;
use App\Repositories\P4debatec1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P4debatec1m1Controller extends AppBaseController
{
    /** @var  P4debatec1m1Repository */
    private $p4debatec1m1Repository;

    public function __construct(P4debatec1m1Repository $p4debatec1m1Repo)
    {
        $this->p4debatec1m1Repository = $p4debatec1m1Repo;
    }

    /**
     * Display a listing of the P4debatec1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p4debatec1m1s = $this->p4debatec1m1Repository->all();

        return view('p4debatec1m1s.index')
            ->with('p4debatec1m1s', $p4debatec1m1s);
    }

    /**
     * Show the form for creating a new P4debatec1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p4debatec1m1s.create');
    }

    /**
     * Store a newly created P4debatec1m1 in storage.
     *
     * @param CreateP4debatec1m1Request $request
     *
     * @return Response
     */
    public function store(CreateP4debatec1m1Request $request)
    {
        $input = $request->all();

        $p4debatec1m1 = $this->p4debatec1m1Repository->create($input);

        Flash::success('P4Debatec1M1 saved successfully.');

        return redirect(route('p4debatec1m1s.index'));
    }

    /**
     * Display the specified P4debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p4debatec1m1 = $this->p4debatec1m1Repository->find($id);

        if (empty($p4debatec1m1)) {
            Flash::error('P4Debatec1M1 not found');

            return redirect(route('p4debatec1m1s.index'));
        }

        return view('p4debatec1m1s.show')->with('p4debatec1m1', $p4debatec1m1);
    }

    /**
     * Show the form for editing the specified P4debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p4debatec1m1 = $this->p4debatec1m1Repository->find($id);

        if (empty($p4debatec1m1)) {
            Flash::error('P4Debatec1M1 not found');

            return redirect(route('p4debatec1m1s.index'));
        }

        return view('p4debatec1m1s.edit')->with('p4debatec1m1', $p4debatec1m1);
    }

    /**
     * Update the specified P4debatec1m1 in storage.
     *
     * @param int $id
     * @param UpdateP4debatec1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP4debatec1m1Request $request)
    {
        $p4debatec1m1 = $this->p4debatec1m1Repository->find($id);

        if (empty($p4debatec1m1)) {
            Flash::error('P4Debatec1M1 not found');

            return redirect(route('p4debatec1m1s.index'));
        }

        $p4debatec1m1 = $this->p4debatec1m1Repository->update($request->all(), $id);

        Flash::success('P4Debatec1M1 updated successfully.');

        return redirect(route('p4debatec1m1s.index'));
    }

    /**
     * Remove the specified P4debatec1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p4debatec1m1 = $this->p4debatec1m1Repository->find($id);

        if (empty($p4debatec1m1)) {
            Flash::error('P4Debatec1M1 not found');

            return redirect(route('p4debatec1m1s.index'));
        }

        $this->p4debatec1m1Repository->delete($id);

        Flash::success('P4Debatec1M1 deleted successfully.');

        return redirect(route('p4debatec1m1s.index'));
    }
}
