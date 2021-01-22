<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP4debatec1m2Request;
use App\Http\Requests\UpdateP4debatec1m2Request;
use App\Repositories\P4debatec1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P4debatec1m2Controller extends AppBaseController
{
    /** @var  P4debatec1m2Repository */
    private $p4debatec1m2Repository;

    public function __construct(P4debatec1m2Repository $p4debatec1m2Repo)
    {
        $this->p4debatec1m2Repository = $p4debatec1m2Repo;
    }

    /**
     * Display a listing of the P4debatec1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p4debatec1m2s = $this->p4debatec1m2Repository->all();

        return view('p4debatec1m2s.index')
            ->with('p4debatec1m2s', $p4debatec1m2s);
    }

    /**
     * Show the form for creating a new P4debatec1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('p4debatec1m2s.create');
    }

    /**
     * Store a newly created P4debatec1m2 in storage.
     *
     * @param CreateP4debatec1m2Request $request
     *
     * @return Response
     */
    public function store(CreateP4debatec1m2Request $request)
    {
        $input = $request->all();

        $p4debatec1m2 = $this->p4debatec1m2Repository->create($input);

        Flash::success('P4Debatec1M2 saved successfully.');

        return redirect(route('p4debatec1m2s.index'));
    }

    /**
     * Display the specified P4debatec1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p4debatec1m2 = $this->p4debatec1m2Repository->find($id);

        if (empty($p4debatec1m2)) {
            Flash::error('P4Debatec1M2 not found');

            return redirect(route('p4debatec1m2s.index'));
        }

        return view('p4debatec1m2s.show')->with('p4debatec1m2', $p4debatec1m2);
    }

    /**
     * Show the form for editing the specified P4debatec1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p4debatec1m2 = $this->p4debatec1m2Repository->find($id);

        if (empty($p4debatec1m2)) {
            Flash::error('P4Debatec1M2 not found');

            return redirect(route('p4debatec1m2s.index'));
        }

        return view('p4debatec1m2s.edit')->with('p4debatec1m2', $p4debatec1m2);
    }

    /**
     * Update the specified P4debatec1m2 in storage.
     *
     * @param int $id
     * @param UpdateP4debatec1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP4debatec1m2Request $request)
    {
        $p4debatec1m2 = $this->p4debatec1m2Repository->find($id);

        if (empty($p4debatec1m2)) {
            Flash::error('P4Debatec1M2 not found');

            return redirect(route('p4debatec1m2s.index'));
        }

        $p4debatec1m2 = $this->p4debatec1m2Repository->update($request->all(), $id);

        Flash::success('P4Debatec1M2 updated successfully.');

        return redirect(route('p4debatec1m2s.index'));
    }

    /**
     * Remove the specified P4debatec1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p4debatec1m2 = $this->p4debatec1m2Repository->find($id);

        if (empty($p4debatec1m2)) {
            Flash::error('P4Debatec1M2 not found');

            return redirect(route('p4debatec1m2s.index'));
        }

        $this->p4debatec1m2Repository->delete($id);

        Flash::success('P4Debatec1M2 deleted successfully.');

        return redirect(route('p4debatec1m2s.index'));
    }
}
