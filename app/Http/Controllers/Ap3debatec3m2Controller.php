<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp3debatec3m2Request;
use App\Http\Requests\UpdateAp3debatec3m2Request;
use App\Repositories\Ap3debatec3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap3debatec3m2Controller extends AppBaseController
{
    /** @var  Ap3debatec3m2Repository */
    private $ap3debatec3m2Repository;

    public function __construct(Ap3debatec3m2Repository $ap3debatec3m2Repo)
    {
        $this->ap3debatec3m2Repository = $ap3debatec3m2Repo;
    }

    /**
     * Display a listing of the Ap3debatec3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap3debatec3m2s = $this->ap3debatec3m2Repository->all();

        return view('ap3debatec3m2s.index')
            ->with('ap3debatec3m2s', $ap3debatec3m2s);
    }

    /**
     * Show the form for creating a new Ap3debatec3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap3debatec3m2s.create');
    }

    /**
     * Store a newly created Ap3debatec3m2 in storage.
     *
     * @param CreateAp3debatec3m2Request $request
     *
     * @return Response
     */
    public function store(CreateAp3debatec3m2Request $request)
    {
        $input = $request->all();

        $ap3debatec3m2 = $this->ap3debatec3m2Repository->create($input);

        Flash::success('Ap3Debatec3M2 saved successfully.');

        return redirect(route('ap3debatec3m2s.index'));
    }

    /**
     * Display the specified Ap3debatec3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap3debatec3m2 = $this->ap3debatec3m2Repository->find($id);

        if (empty($ap3debatec3m2)) {
            Flash::error('Ap3Debatec3M2 not found');

            return redirect(route('ap3debatec3m2s.index'));
        }

        return view('ap3debatec3m2s.show')->with('ap3debatec3m2', $ap3debatec3m2);
    }

    /**
     * Show the form for editing the specified Ap3debatec3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap3debatec3m2 = $this->ap3debatec3m2Repository->find($id);

        if (empty($ap3debatec3m2)) {
            Flash::error('Ap3Debatec3M2 not found');

            return redirect(route('ap3debatec3m2s.index'));
        }

        return view('ap3debatec3m2s.edit')->with('ap3debatec3m2', $ap3debatec3m2);
    }

    /**
     * Update the specified Ap3debatec3m2 in storage.
     *
     * @param int $id
     * @param UpdateAp3debatec3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp3debatec3m2Request $request)
    {
        $ap3debatec3m2 = $this->ap3debatec3m2Repository->find($id);

        if (empty($ap3debatec3m2)) {
            Flash::error('Ap3Debatec3M2 not found');

            return redirect(route('ap3debatec3m2s.index'));
        }

        $ap3debatec3m2 = $this->ap3debatec3m2Repository->update($request->all(), $id);

        Flash::success('Ap3Debatec3M2 updated successfully.');

        return redirect(route('ap3debatec3m2s.index'));
    }

    /**
     * Remove the specified Ap3debatec3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap3debatec3m2 = $this->ap3debatec3m2Repository->find($id);

        if (empty($ap3debatec3m2)) {
            Flash::error('Ap3Debatec3M2 not found');

            return redirect(route('ap3debatec3m2s.index'));
        }

        $this->ap3debatec3m2Repository->delete($id);

        Flash::success('Ap3Debatec3M2 deleted successfully.');

        return redirect(route('ap3debatec3m2s.index'));
    }
}
