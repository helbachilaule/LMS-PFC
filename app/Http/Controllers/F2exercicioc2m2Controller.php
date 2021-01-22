<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF2exercicioc2m2Request;
use App\Http\Requests\UpdateF2exercicioc2m2Request;
use App\Repositories\F2exercicioc2m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F2exercicioc2m2Controller extends AppBaseController
{
    /** @var  F2exercicioc2m2Repository */
    private $f2exercicioc2m2Repository;

    public function __construct(F2exercicioc2m2Repository $f2exercicioc2m2Repo)
    {
        $this->f2exercicioc2m2Repository = $f2exercicioc2m2Repo;
    }

    /**
     * Display a listing of the F2exercicioc2m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f2exercicioc2m2s = $this->f2exercicioc2m2Repository->all();

        return view('f2exercicioc2m2s.index')
            ->with('f2exercicioc2m2s', $f2exercicioc2m2s);
    }

    /**
     * Show the form for creating a new F2exercicioc2m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('f2exercicioc2m2s.create');
    }

    /**
     * Store a newly created F2exercicioc2m2 in storage.
     *
     * @param CreateF2exercicioc2m2Request $request
     *
     * @return Response
     */
    public function store(CreateF2exercicioc2m2Request $request)
    {
        $input = $request->all();

        $f2exercicioc2m2 = $this->f2exercicioc2m2Repository->create($input);

        Flash::success('F2Exercicioc2M2 saved successfully.');

        return redirect(route('f2exercicioc2m2s.index'));
    }

    /**
     * Display the specified F2exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f2exercicioc2m2 = $this->f2exercicioc2m2Repository->find($id);

        if (empty($f2exercicioc2m2)) {
            Flash::error('F2Exercicioc2M2 not found');

            return redirect(route('f2exercicioc2m2s.index'));
        }

        return view('f2exercicioc2m2s.show')->with('f2exercicioc2m2', $f2exercicioc2m2);
    }

    /**
     * Show the form for editing the specified F2exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f2exercicioc2m2 = $this->f2exercicioc2m2Repository->find($id);

        if (empty($f2exercicioc2m2)) {
            Flash::error('F2Exercicioc2M2 not found');

            return redirect(route('f2exercicioc2m2s.index'));
        }

        return view('f2exercicioc2m2s.edit')->with('f2exercicioc2m2', $f2exercicioc2m2);
    }

    /**
     * Update the specified F2exercicioc2m2 in storage.
     *
     * @param int $id
     * @param UpdateF2exercicioc2m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF2exercicioc2m2Request $request)
    {
        $f2exercicioc2m2 = $this->f2exercicioc2m2Repository->find($id);

        if (empty($f2exercicioc2m2)) {
            Flash::error('F2Exercicioc2M2 not found');

            return redirect(route('f2exercicioc2m2s.index'));
        }

        $f2exercicioc2m2 = $this->f2exercicioc2m2Repository->update($request->all(), $id);

        Flash::success('F2Exercicioc2M2 updated successfully.');

        return redirect(route('f2exercicioc2m2s.index'));
    }

    /**
     * Remove the specified F2exercicioc2m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f2exercicioc2m2 = $this->f2exercicioc2m2Repository->find($id);

        if (empty($f2exercicioc2m2)) {
            Flash::error('F2Exercicioc2M2 not found');

            return redirect(route('f2exercicioc2m2s.index'));
        }

        $this->f2exercicioc2m2Repository->delete($id);

        Flash::success('F2Exercicioc2M2 deleted successfully.');

        return redirect(route('f2exercicioc2m2s.index'));
    }
}
