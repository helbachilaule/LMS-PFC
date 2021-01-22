<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF4exercicioc2m2Request;
use App\Http\Requests\UpdateF4exercicioc2m2Request;
use App\Repositories\F4exercicioc2m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F4exercicioc2m2Controller extends AppBaseController
{
    /** @var  F4exercicioc2m2Repository */
    private $f4exercicioc2m2Repository;

    public function __construct(F4exercicioc2m2Repository $f4exercicioc2m2Repo)
    {
        $this->f4exercicioc2m2Repository = $f4exercicioc2m2Repo;
    }

    /**
     * Display a listing of the F4exercicioc2m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f4exercicioc2m2s = $this->f4exercicioc2m2Repository->all();

        return view('f4exercicioc2m2s.index')
            ->with('f4exercicioc2m2s', $f4exercicioc2m2s);
    }

    /**
     * Show the form for creating a new F4exercicioc2m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('f4exercicioc2m2s.create');
    }

    /**
     * Store a newly created F4exercicioc2m2 in storage.
     *
     * @param CreateF4exercicioc2m2Request $request
     *
     * @return Response
     */
    public function store(CreateF4exercicioc2m2Request $request)
    {
        $input = $request->all();

        $f4exercicioc2m2 = $this->f4exercicioc2m2Repository->create($input);

        Flash::success('F4Exercicioc2M2 saved successfully.');

        return redirect(route('f4exercicioc2m2s.index'));
    }

    /**
     * Display the specified F4exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f4exercicioc2m2 = $this->f4exercicioc2m2Repository->find($id);

        if (empty($f4exercicioc2m2)) {
            Flash::error('F4Exercicioc2M2 not found');

            return redirect(route('f4exercicioc2m2s.index'));
        }

        return view('f4exercicioc2m2s.show')->with('f4exercicioc2m2', $f4exercicioc2m2);
    }

    /**
     * Show the form for editing the specified F4exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f4exercicioc2m2 = $this->f4exercicioc2m2Repository->find($id);

        if (empty($f4exercicioc2m2)) {
            Flash::error('F4Exercicioc2M2 not found');

            return redirect(route('f4exercicioc2m2s.index'));
        }

        return view('f4exercicioc2m2s.edit')->with('f4exercicioc2m2', $f4exercicioc2m2);
    }

    /**
     * Update the specified F4exercicioc2m2 in storage.
     *
     * @param int $id
     * @param UpdateF4exercicioc2m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF4exercicioc2m2Request $request)
    {
        $f4exercicioc2m2 = $this->f4exercicioc2m2Repository->find($id);

        if (empty($f4exercicioc2m2)) {
            Flash::error('F4Exercicioc2M2 not found');

            return redirect(route('f4exercicioc2m2s.index'));
        }

        $f4exercicioc2m2 = $this->f4exercicioc2m2Repository->update($request->all(), $id);

        Flash::success('F4Exercicioc2M2 updated successfully.');

        return redirect(route('f4exercicioc2m2s.index'));
    }

    /**
     * Remove the specified F4exercicioc2m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f4exercicioc2m2 = $this->f4exercicioc2m2Repository->find($id);

        if (empty($f4exercicioc2m2)) {
            Flash::error('F4Exercicioc2M2 not found');

            return redirect(route('f4exercicioc2m2s.index'));
        }

        $this->f4exercicioc2m2Repository->delete($id);

        Flash::success('F4Exercicioc2M2 deleted successfully.');

        return redirect(route('f4exercicioc2m2s.index'));
    }
}
