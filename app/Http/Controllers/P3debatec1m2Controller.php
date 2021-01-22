<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP3debatec1m2Request;
use App\Http\Requests\UpdateP3debatec1m2Request;
use App\Repositories\P3debatec1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P3debatec1m2Controller extends AppBaseController
{
    /** @var  P3debatec1m2Repository */
    private $p3debatec1m2Repository;

    public function __construct(P3debatec1m2Repository $p3debatec1m2Repo)
    {
        $this->p3debatec1m2Repository = $p3debatec1m2Repo;
    }

    /**
     * Display a listing of the P3debatec1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p3debatec1m2s = $this->p3debatec1m2Repository->all();

        return view('p3debatec1m2s.index')
            ->with('p3debatec1m2s', $p3debatec1m2s);
    }

    /**
     * Show the form for creating a new P3debatec1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('p3debatec1m2s.create');
    }

    /**
     * Store a newly created P3debatec1m2 in storage.
     *
     * @param CreateP3debatec1m2Request $request
     *
     * @return Response
     */
    public function store(CreateP3debatec1m2Request $request)
    {
        $input = $request->all();

        $p3debatec1m2 = $this->p3debatec1m2Repository->create($input);

        Flash::success('P3Debatec1M2 saved successfully.');

        return redirect(route('p3debatec1m2s.index'));
    }

    /**
     * Display the specified P3debatec1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p3debatec1m2 = $this->p3debatec1m2Repository->find($id);

        if (empty($p3debatec1m2)) {
            Flash::error('P3Debatec1M2 not found');

            return redirect(route('p3debatec1m2s.index'));
        }

        return view('p3debatec1m2s.show')->with('p3debatec1m2', $p3debatec1m2);
    }

    /**
     * Show the form for editing the specified P3debatec1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p3debatec1m2 = $this->p3debatec1m2Repository->find($id);

        if (empty($p3debatec1m2)) {
            Flash::error('P3Debatec1M2 not found');

            return redirect(route('p3debatec1m2s.index'));
        }

        return view('p3debatec1m2s.edit')->with('p3debatec1m2', $p3debatec1m2);
    }

    /**
     * Update the specified P3debatec1m2 in storage.
     *
     * @param int $id
     * @param UpdateP3debatec1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP3debatec1m2Request $request)
    {
        $p3debatec1m2 = $this->p3debatec1m2Repository->find($id);

        if (empty($p3debatec1m2)) {
            Flash::error('P3Debatec1M2 not found');

            return redirect(route('p3debatec1m2s.index'));
        }

        $p3debatec1m2 = $this->p3debatec1m2Repository->update($request->all(), $id);

        Flash::success('P3Debatec1M2 updated successfully.');

        return redirect(route('p3debatec1m2s.index'));
    }

    /**
     * Remove the specified P3debatec1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p3debatec1m2 = $this->p3debatec1m2Repository->find($id);

        if (empty($p3debatec1m2)) {
            Flash::error('P3Debatec1M2 not found');

            return redirect(route('p3debatec1m2s.index'));
        }

        $this->p3debatec1m2Repository->delete($id);

        Flash::success('P3Debatec1M2 deleted successfully.');

        return redirect(route('p3debatec1m2s.index'));
    }
}
