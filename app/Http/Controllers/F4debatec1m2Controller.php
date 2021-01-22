<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF4debatec1m2Request;
use App\Http\Requests\UpdateF4debatec1m2Request;
use App\Repositories\F4debatec1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F4debatec1m2Controller extends AppBaseController
{
    /** @var  F4debatec1m2Repository */
    private $f4debatec1m2Repository;

    public function __construct(F4debatec1m2Repository $f4debatec1m2Repo)
    {
        $this->f4debatec1m2Repository = $f4debatec1m2Repo;
    }

    /**
     * Display a listing of the F4debatec1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f4debatec1m2s = $this->f4debatec1m2Repository->all();

        return view('f4debatec1m2s.index')
            ->with('f4debatec1m2s', $f4debatec1m2s);
    }

    /**
     * Show the form for creating a new F4debatec1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('f4debatec1m2s.create');
    }

    /**
     * Store a newly created F4debatec1m2 in storage.
     *
     * @param CreateF4debatec1m2Request $request
     *
     * @return Response
     */
    public function store(CreateF4debatec1m2Request $request)
    {
        $input = $request->all();

        $f4debatec1m2 = $this->f4debatec1m2Repository->create($input);

        Flash::success('F4Debatec1M2 saved successfully.');

        return redirect(route('f4debatec1m2s.index'));
    }

    /**
     * Display the specified F4debatec1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f4debatec1m2 = $this->f4debatec1m2Repository->find($id);

        if (empty($f4debatec1m2)) {
            Flash::error('F4Debatec1M2 not found');

            return redirect(route('f4debatec1m2s.index'));
        }

        return view('f4debatec1m2s.show')->with('f4debatec1m2', $f4debatec1m2);
    }

    /**
     * Show the form for editing the specified F4debatec1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f4debatec1m2 = $this->f4debatec1m2Repository->find($id);

        if (empty($f4debatec1m2)) {
            Flash::error('F4Debatec1M2 not found');

            return redirect(route('f4debatec1m2s.index'));
        }

        return view('f4debatec1m2s.edit')->with('f4debatec1m2', $f4debatec1m2);
    }

    /**
     * Update the specified F4debatec1m2 in storage.
     *
     * @param int $id
     * @param UpdateF4debatec1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF4debatec1m2Request $request)
    {
        $f4debatec1m2 = $this->f4debatec1m2Repository->find($id);

        if (empty($f4debatec1m2)) {
            Flash::error('F4Debatec1M2 not found');

            return redirect(route('f4debatec1m2s.index'));
        }

        $f4debatec1m2 = $this->f4debatec1m2Repository->update($request->all(), $id);

        Flash::success('F4Debatec1M2 updated successfully.');

        return redirect(route('f4debatec1m2s.index'));
    }

    /**
     * Remove the specified F4debatec1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f4debatec1m2 = $this->f4debatec1m2Repository->find($id);

        if (empty($f4debatec1m2)) {
            Flash::error('F4Debatec1M2 not found');

            return redirect(route('f4debatec1m2s.index'));
        }

        $this->f4debatec1m2Repository->delete($id);

        Flash::success('F4Debatec1M2 deleted successfully.');

        return redirect(route('f4debatec1m2s.index'));
    }
}
