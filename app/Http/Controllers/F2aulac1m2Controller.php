<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF2aulac1m2Request;
use App\Http\Requests\UpdateF2aulac1m2Request;
use App\Repositories\F2aulac1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F2aulac1m2Controller extends AppBaseController
{
    /** @var  F2aulac1m2Repository */
    private $f2aulac1m2Repository;

    public function __construct(F2aulac1m2Repository $f2aulac1m2Repo)
    {
        $this->f2aulac1m2Repository = $f2aulac1m2Repo;
    }

    /**
     * Display a listing of the F2aulac1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f2aulac1m2s = $this->f2aulac1m2Repository->all();

        return view('f2aulac1m2s.index')
            ->with('f2aulac1m2s', $f2aulac1m2s);
    }

    /**
     * Show the form for creating a new F2aulac1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('f2aulac1m2s.create');
    }

    /**
     * Store a newly created F2aulac1m2 in storage.
     *
     * @param CreateF2aulac1m2Request $request
     *
     * @return Response
     */
    public function store(CreateF2aulac1m2Request $request)
    {
        $input = $request->all();

        $f2aulac1m2 = $this->f2aulac1m2Repository->create($input);

        Flash::success('F2Aulac1M2 saved successfully.');

        return redirect(route('f2aulac1m2s.index'));
    }

    /**
     * Display the specified F2aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f2aulac1m2 = $this->f2aulac1m2Repository->find($id);

        if (empty($f2aulac1m2)) {
            Flash::error('F2Aulac1M2 not found');

            return redirect(route('f2aulac1m2s.index'));
        }

        return view('f2aulac1m2s.show')->with('f2aulac1m2', $f2aulac1m2);
    }

    /**
     * Show the form for editing the specified F2aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f2aulac1m2 = $this->f2aulac1m2Repository->find($id);

        if (empty($f2aulac1m2)) {
            Flash::error('F2Aulac1M2 not found');

            return redirect(route('f2aulac1m2s.index'));
        }

        return view('f2aulac1m2s.edit')->with('f2aulac1m2', $f2aulac1m2);
    }

    /**
     * Update the specified F2aulac1m2 in storage.
     *
     * @param int $id
     * @param UpdateF2aulac1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF2aulac1m2Request $request)
    {
        $f2aulac1m2 = $this->f2aulac1m2Repository->find($id);

        if (empty($f2aulac1m2)) {
            Flash::error('F2Aulac1M2 not found');

            return redirect(route('f2aulac1m2s.index'));
        }

        $f2aulac1m2 = $this->f2aulac1m2Repository->update($request->all(), $id);

        Flash::success('F2Aulac1M2 updated successfully.');

        return redirect(route('f2aulac1m2s.index'));
    }

    /**
     * Remove the specified F2aulac1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f2aulac1m2 = $this->f2aulac1m2Repository->find($id);

        if (empty($f2aulac1m2)) {
            Flash::error('F2Aulac1M2 not found');

            return redirect(route('f2aulac1m2s.index'));
        }

        $this->f2aulac1m2Repository->delete($id);

        Flash::success('F2Aulac1M2 deleted successfully.');

        return redirect(route('f2aulac1m2s.index'));
    }
}
