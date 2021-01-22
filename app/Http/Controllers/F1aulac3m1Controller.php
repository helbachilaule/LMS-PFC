<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF1aulac3m1Request;
use App\Http\Requests\UpdateF1aulac3m1Request;
use App\Repositories\F1aulac3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F1aulac3m1Controller extends AppBaseController
{
    /** @var  F1aulac3m1Repository */
    private $f1aulac3m1Repository;

    public function __construct(F1aulac3m1Repository $f1aulac3m1Repo)
    {
        $this->f1aulac3m1Repository = $f1aulac3m1Repo;
    }

    /**
     * Display a listing of the F1aulac3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f1aulac3m1s = $this->f1aulac3m1Repository->all();

        return view('f1aulac3m1s.index')
            ->with('f1aulac3m1s', $f1aulac3m1s);
    }

    /**
     * Show the form for creating a new F1aulac3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f1aulac3m1s.create');
    }

    /**
     * Store a newly created F1aulac3m1 in storage.
     *
     * @param CreateF1aulac3m1Request $request
     *
     * @return Response
     */
    public function store(CreateF1aulac3m1Request $request)
    {
        $input = $request->all();

        $f1aulac3m1 = $this->f1aulac3m1Repository->create($input);

        Flash::success('F1Aulac3M1 saved successfully.');

        return redirect(route('f1aulac3m1s.index'));
    }

    /**
     * Display the specified F1aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f1aulac3m1 = $this->f1aulac3m1Repository->find($id);

        if (empty($f1aulac3m1)) {
            Flash::error('F1Aulac3M1 not found');

            return redirect(route('f1aulac3m1s.index'));
        }

        return view('f1aulac3m1s.show')->with('f1aulac3m1', $f1aulac3m1);
    }

    /**
     * Show the form for editing the specified F1aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f1aulac3m1 = $this->f1aulac3m1Repository->find($id);

        if (empty($f1aulac3m1)) {
            Flash::error('F1Aulac3M1 not found');

            return redirect(route('f1aulac3m1s.index'));
        }

        return view('f1aulac3m1s.edit')->with('f1aulac3m1', $f1aulac3m1);
    }

    /**
     * Update the specified F1aulac3m1 in storage.
     *
     * @param int $id
     * @param UpdateF1aulac3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF1aulac3m1Request $request)
    {
        $f1aulac3m1 = $this->f1aulac3m1Repository->find($id);

        if (empty($f1aulac3m1)) {
            Flash::error('F1Aulac3M1 not found');

            return redirect(route('f1aulac3m1s.index'));
        }

        $f1aulac3m1 = $this->f1aulac3m1Repository->update($request->all(), $id);

        Flash::success('F1Aulac3M1 updated successfully.');

        return redirect(route('f1aulac3m1s.index'));
    }

    /**
     * Remove the specified F1aulac3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f1aulac3m1 = $this->f1aulac3m1Repository->find($id);

        if (empty($f1aulac3m1)) {
            Flash::error('F1Aulac3M1 not found');

            return redirect(route('f1aulac3m1s.index'));
        }

        $this->f1aulac3m1Repository->delete($id);

        Flash::success('F1Aulac3M1 deleted successfully.');

        return redirect(route('f1aulac3m1s.index'));
    }
}
