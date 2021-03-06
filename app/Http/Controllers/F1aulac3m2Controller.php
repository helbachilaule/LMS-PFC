<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF1aulac3m2Request;
use App\Http\Requests\UpdateF1aulac3m2Request;
use App\Repositories\F1aulac3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F1aulac3m2Controller extends AppBaseController
{
    /** @var  F1aulac3m2Repository */
    private $f1aulac3m2Repository;

    public function __construct(F1aulac3m2Repository $f1aulac3m2Repo)
    {
        $this->f1aulac3m2Repository = $f1aulac3m2Repo;
    }

    /**
     * Display a listing of the F1aulac3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f1aulac3m2s = $this->f1aulac3m2Repository->all();

        return view('f1aulac3m2s.index')
            ->with('f1aulac3m2s', $f1aulac3m2s);
    }

    /**
     * Show the form for creating a new F1aulac3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('f1aulac3m2s.create');
    }

    /**
     * Store a newly created F1aulac3m2 in storage.
     *
     * @param CreateF1aulac3m2Request $request
     *
     * @return Response
     */
    public function store(CreateF1aulac3m2Request $request)
    {
        $input = $request->all();

        $f1aulac3m2 = $this->f1aulac3m2Repository->create($input);

        Flash::success('F1Aulac3M2 saved successfully.');

        return redirect(route('f1aulac3m2s.index'));
    }

    /**
     * Display the specified F1aulac3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f1aulac3m2 = $this->f1aulac3m2Repository->find($id);

        if (empty($f1aulac3m2)) {
            Flash::error('F1Aulac3M2 not found');

            return redirect(route('f1aulac3m2s.index'));
        }

        return view('f1aulac3m2s.show')->with('f1aulac3m2', $f1aulac3m2);
    }

    /**
     * Show the form for editing the specified F1aulac3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f1aulac3m2 = $this->f1aulac3m2Repository->find($id);

        if (empty($f1aulac3m2)) {
            Flash::error('F1Aulac3M2 not found');

            return redirect(route('f1aulac3m2s.index'));
        }

        return view('f1aulac3m2s.edit')->with('f1aulac3m2', $f1aulac3m2);
    }

    /**
     * Update the specified F1aulac3m2 in storage.
     *
     * @param int $id
     * @param UpdateF1aulac3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF1aulac3m2Request $request)
    {
        $f1aulac3m2 = $this->f1aulac3m2Repository->find($id);

        if (empty($f1aulac3m2)) {
            Flash::error('F1Aulac3M2 not found');

            return redirect(route('f1aulac3m2s.index'));
        }

        $f1aulac3m2 = $this->f1aulac3m2Repository->update($request->all(), $id);

        Flash::success('F1Aulac3M2 updated successfully.');

        return redirect(route('f1aulac3m2s.index'));
    }

    /**
     * Remove the specified F1aulac3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f1aulac3m2 = $this->f1aulac3m2Repository->find($id);

        if (empty($f1aulac3m2)) {
            Flash::error('F1Aulac3M2 not found');

            return redirect(route('f1aulac3m2s.index'));
        }

        $this->f1aulac3m2Repository->delete($id);

        Flash::success('F1Aulac3M2 deleted successfully.');

        return redirect(route('f1aulac3m2s.index'));
    }
}
