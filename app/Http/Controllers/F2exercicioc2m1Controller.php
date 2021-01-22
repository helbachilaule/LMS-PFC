<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF2exercicioc2m1Request;
use App\Http\Requests\UpdateF2exercicioc2m1Request;
use App\Repositories\F2exercicioc2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F2exercicioc2m1Controller extends AppBaseController
{
    /** @var  F2exercicioc2m1Repository */
    private $f2exercicioc2m1Repository;

    public function __construct(F2exercicioc2m1Repository $f2exercicioc2m1Repo)
    {
        $this->f2exercicioc2m1Repository = $f2exercicioc2m1Repo;
    }

    /**
     * Display a listing of the F2exercicioc2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f2exercicioc2m1s = $this->f2exercicioc2m1Repository->all();

        return view('f2exercicioc2m1s.index')
            ->with('f2exercicioc2m1s', $f2exercicioc2m1s);
    }

    /**
     * Show the form for creating a new F2exercicioc2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f2exercicioc2m1s.create');
    }

    /**
     * Store a newly created F2exercicioc2m1 in storage.
     *
     * @param CreateF2exercicioc2m1Request $request
     *
     * @return Response
     */
    public function store(CreateF2exercicioc2m1Request $request)
    {
        $input = $request->all();

        $f2exercicioc2m1 = $this->f2exercicioc2m1Repository->create($input);

        Flash::success('F2Exercicioc2M1 saved successfully.');

        return redirect(route('f2exercicioc2m1s.index'));
    }

    /**
     * Display the specified F2exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f2exercicioc2m1 = $this->f2exercicioc2m1Repository->find($id);

        if (empty($f2exercicioc2m1)) {
            Flash::error('F2Exercicioc2M1 not found');

            return redirect(route('f2exercicioc2m1s.index'));
        }

        return view('f2exercicioc2m1s.show')->with('f2exercicioc2m1', $f2exercicioc2m1);
    }

    /**
     * Show the form for editing the specified F2exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f2exercicioc2m1 = $this->f2exercicioc2m1Repository->find($id);

        if (empty($f2exercicioc2m1)) {
            Flash::error('F2Exercicioc2M1 not found');

            return redirect(route('f2exercicioc2m1s.index'));
        }

        return view('f2exercicioc2m1s.edit')->with('f2exercicioc2m1', $f2exercicioc2m1);
    }

    /**
     * Update the specified F2exercicioc2m1 in storage.
     *
     * @param int $id
     * @param UpdateF2exercicioc2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF2exercicioc2m1Request $request)
    {
        $f2exercicioc2m1 = $this->f2exercicioc2m1Repository->find($id);

        if (empty($f2exercicioc2m1)) {
            Flash::error('F2Exercicioc2M1 not found');

            return redirect(route('f2exercicioc2m1s.index'));
        }

        $f2exercicioc2m1 = $this->f2exercicioc2m1Repository->update($request->all(), $id);

        Flash::success('F2Exercicioc2M1 updated successfully.');

        return redirect(route('f2exercicioc2m1s.index'));
    }

    /**
     * Remove the specified F2exercicioc2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f2exercicioc2m1 = $this->f2exercicioc2m1Repository->find($id);

        if (empty($f2exercicioc2m1)) {
            Flash::error('F2Exercicioc2M1 not found');

            return redirect(route('f2exercicioc2m1s.index'));
        }

        $this->f2exercicioc2m1Repository->delete($id);

        Flash::success('F2Exercicioc2M1 deleted successfully.');

        return redirect(route('f2exercicioc2m1s.index'));
    }
}
