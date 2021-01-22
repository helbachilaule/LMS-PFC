<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF1exercicioc1m2Request;
use App\Http\Requests\UpdateF1exercicioc1m2Request;
use App\Repositories\F1exercicioc1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F1exercicioc1m2Controller extends AppBaseController
{
    /** @var  F1exercicioc1m2Repository */
    private $f1exercicioc1m2Repository;

    public function __construct(F1exercicioc1m2Repository $f1exercicioc1m2Repo)
    {
        $this->f1exercicioc1m2Repository = $f1exercicioc1m2Repo;
    }

    /**
     * Display a listing of the F1exercicioc1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f1exercicioc1m2s = $this->f1exercicioc1m2Repository->all();

        return view('f1exercicioc1m2s.index')
            ->with('f1exercicioc1m2s', $f1exercicioc1m2s);
    }

    /**
     * Show the form for creating a new F1exercicioc1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('f1exercicioc1m2s.create');
    }

    /**
     * Store a newly created F1exercicioc1m2 in storage.
     *
     * @param CreateF1exercicioc1m2Request $request
     *
     * @return Response
     */
    public function store(CreateF1exercicioc1m2Request $request)
    {
        $input = $request->all();

        $f1exercicioc1m2 = $this->f1exercicioc1m2Repository->create($input);

        Flash::success('F1Exercicioc1M2 saved successfully.');

        return redirect(route('f1exercicioc1m2s.index'));
    }

    /**
     * Display the specified F1exercicioc1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f1exercicioc1m2 = $this->f1exercicioc1m2Repository->find($id);

        if (empty($f1exercicioc1m2)) {
            Flash::error('F1Exercicioc1M2 not found');

            return redirect(route('f1exercicioc1m2s.index'));
        }

        return view('f1exercicioc1m2s.show')->with('f1exercicioc1m2', $f1exercicioc1m2);
    }

    /**
     * Show the form for editing the specified F1exercicioc1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f1exercicioc1m2 = $this->f1exercicioc1m2Repository->find($id);

        if (empty($f1exercicioc1m2)) {
            Flash::error('F1Exercicioc1M2 not found');

            return redirect(route('f1exercicioc1m2s.index'));
        }

        return view('f1exercicioc1m2s.edit')->with('f1exercicioc1m2', $f1exercicioc1m2);
    }

    /**
     * Update the specified F1exercicioc1m2 in storage.
     *
     * @param int $id
     * @param UpdateF1exercicioc1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF1exercicioc1m2Request $request)
    {
        $f1exercicioc1m2 = $this->f1exercicioc1m2Repository->find($id);

        if (empty($f1exercicioc1m2)) {
            Flash::error('F1Exercicioc1M2 not found');

            return redirect(route('f1exercicioc1m2s.index'));
        }

        $f1exercicioc1m2 = $this->f1exercicioc1m2Repository->update($request->all(), $id);

        Flash::success('F1Exercicioc1M2 updated successfully.');

        return redirect(route('f1exercicioc1m2s.index'));
    }

    /**
     * Remove the specified F1exercicioc1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f1exercicioc1m2 = $this->f1exercicioc1m2Repository->find($id);

        if (empty($f1exercicioc1m2)) {
            Flash::error('F1Exercicioc1M2 not found');

            return redirect(route('f1exercicioc1m2s.index'));
        }

        $this->f1exercicioc1m2Repository->delete($id);

        Flash::success('F1Exercicioc1M2 deleted successfully.');

        return redirect(route('f1exercicioc1m2s.index'));
    }
}
