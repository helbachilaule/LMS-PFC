<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF1exercicioc2m1Request;
use App\Http\Requests\UpdateF1exercicioc2m1Request;
use App\Repositories\F1exercicioc2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F1exercicioc2m1Controller extends AppBaseController
{
    /** @var  F1exercicioc2m1Repository */
    private $f1exercicioc2m1Repository;

    public function __construct(F1exercicioc2m1Repository $f1exercicioc2m1Repo)
    {
        $this->f1exercicioc2m1Repository = $f1exercicioc2m1Repo;
    }

    /**
     * Display a listing of the F1exercicioc2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f1exercicioc2m1s = $this->f1exercicioc2m1Repository->all();

        return view('f1exercicioc2m1s.index')
            ->with('f1exercicioc2m1s', $f1exercicioc2m1s);
    }

    /**
     * Show the form for creating a new F1exercicioc2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f1exercicioc2m1s.create');
    }

    /**
     * Store a newly created F1exercicioc2m1 in storage.
     *
     * @param CreateF1exercicioc2m1Request $request
     *
     * @return Response
     */
    public function store(CreateF1exercicioc2m1Request $request)
    {
        $input = $request->all();

        $f1exercicioc2m1 = $this->f1exercicioc2m1Repository->create($input);

        Flash::success('F1Exercicioc2M1 saved successfully.');

        return redirect(route('f1exercicioc2m1s.index'));
    }

    /**
     * Display the specified F1exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f1exercicioc2m1 = $this->f1exercicioc2m1Repository->find($id);

        if (empty($f1exercicioc2m1)) {
            Flash::error('F1Exercicioc2M1 not found');

            return redirect(route('f1exercicioc2m1s.index'));
        }

        return view('f1exercicioc2m1s.show')->with('f1exercicioc2m1', $f1exercicioc2m1);
    }

    /**
     * Show the form for editing the specified F1exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f1exercicioc2m1 = $this->f1exercicioc2m1Repository->find($id);

        if (empty($f1exercicioc2m1)) {
            Flash::error('F1Exercicioc2M1 not found');

            return redirect(route('f1exercicioc2m1s.index'));
        }

        return view('f1exercicioc2m1s.edit')->with('f1exercicioc2m1', $f1exercicioc2m1);
    }

    /**
     * Update the specified F1exercicioc2m1 in storage.
     *
     * @param int $id
     * @param UpdateF1exercicioc2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF1exercicioc2m1Request $request)
    {
        $f1exercicioc2m1 = $this->f1exercicioc2m1Repository->find($id);

        if (empty($f1exercicioc2m1)) {
            Flash::error('F1Exercicioc2M1 not found');

            return redirect(route('f1exercicioc2m1s.index'));
        }

        $f1exercicioc2m1 = $this->f1exercicioc2m1Repository->update($request->all(), $id);

        Flash::success('F1Exercicioc2M1 updated successfully.');

        return redirect(route('f1exercicioc2m1s.index'));
    }

    /**
     * Remove the specified F1exercicioc2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f1exercicioc2m1 = $this->f1exercicioc2m1Repository->find($id);

        if (empty($f1exercicioc2m1)) {
            Flash::error('F1Exercicioc2M1 not found');

            return redirect(route('f1exercicioc2m1s.index'));
        }

        $this->f1exercicioc2m1Repository->delete($id);

        Flash::success('F1Exercicioc2M1 deleted successfully.');

        return redirect(route('f1exercicioc2m1s.index'));
    }
}
