<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp2debatec3m2Request;
use App\Http\Requests\UpdateAp2debatec3m2Request;
use App\Repositories\Ap2debatec3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap2debatec3m2Controller extends AppBaseController
{
    /** @var  Ap2debatec3m2Repository */
    private $ap2debatec3m2Repository;

    public function __construct(Ap2debatec3m2Repository $ap2debatec3m2Repo)
    {
        $this->ap2debatec3m2Repository = $ap2debatec3m2Repo;
    }

    /**
     * Display a listing of the Ap2debatec3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap2debatec3m2s = $this->ap2debatec3m2Repository->all();

        return view('ap2debatec3m2s.index')
            ->with('ap2debatec3m2s', $ap2debatec3m2s);
    }

    /**
     * Show the form for creating a new Ap2debatec3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap2debatec3m2s.create');
    }

    /**
     * Store a newly created Ap2debatec3m2 in storage.
     *
     * @param CreateAp2debatec3m2Request $request
     *
     * @return Response
     */
    public function store(CreateAp2debatec3m2Request $request)
    {
        $input = $request->all();

        $ap2debatec3m2 = $this->ap2debatec3m2Repository->create($input);

        Flash::success('Ap2Debatec3M2 saved successfully.');

        return redirect(route('ap2debatec3m2s.index'));
    }

    /**
     * Display the specified Ap2debatec3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap2debatec3m2 = $this->ap2debatec3m2Repository->find($id);

        if (empty($ap2debatec3m2)) {
            Flash::error('Ap2Debatec3M2 not found');

            return redirect(route('ap2debatec3m2s.index'));
        }

        return view('ap2debatec3m2s.show')->with('ap2debatec3m2', $ap2debatec3m2);
    }

    /**
     * Show the form for editing the specified Ap2debatec3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap2debatec3m2 = $this->ap2debatec3m2Repository->find($id);

        if (empty($ap2debatec3m2)) {
            Flash::error('Ap2Debatec3M2 not found');

            return redirect(route('ap2debatec3m2s.index'));
        }

        return view('ap2debatec3m2s.edit')->with('ap2debatec3m2', $ap2debatec3m2);
    }

    /**
     * Update the specified Ap2debatec3m2 in storage.
     *
     * @param int $id
     * @param UpdateAp2debatec3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp2debatec3m2Request $request)
    {
        $ap2debatec3m2 = $this->ap2debatec3m2Repository->find($id);

        if (empty($ap2debatec3m2)) {
            Flash::error('Ap2Debatec3M2 not found');

            return redirect(route('ap2debatec3m2s.index'));
        }

        $ap2debatec3m2 = $this->ap2debatec3m2Repository->update($request->all(), $id);

        Flash::success('Ap2Debatec3M2 updated successfully.');

        return redirect(route('ap2debatec3m2s.index'));
    }

    /**
     * Remove the specified Ap2debatec3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap2debatec3m2 = $this->ap2debatec3m2Repository->find($id);

        if (empty($ap2debatec3m2)) {
            Flash::error('Ap2Debatec3M2 not found');

            return redirect(route('ap2debatec3m2s.index'));
        }

        $this->ap2debatec3m2Repository->delete($id);

        Flash::success('Ap2Debatec3M2 deleted successfully.');

        return redirect(route('ap2debatec3m2s.index'));
    }
}
