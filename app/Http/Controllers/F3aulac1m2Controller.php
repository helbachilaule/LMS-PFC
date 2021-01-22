<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF3aulac1m2Request;
use App\Http\Requests\UpdateF3aulac1m2Request;
use App\Repositories\F3aulac1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F3aulac1m2Controller extends AppBaseController
{
    /** @var  F3aulac1m2Repository */
    private $f3aulac1m2Repository;

    public function __construct(F3aulac1m2Repository $f3aulac1m2Repo)
    {
        $this->f3aulac1m2Repository = $f3aulac1m2Repo;
    }

    /**
     * Display a listing of the F3aulac1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f3aulac1m2s = $this->f3aulac1m2Repository->all();

        return view('f3aulac1m2s.index')
            ->with('f3aulac1m2s', $f3aulac1m2s);
    }

    /**
     * Show the form for creating a new F3aulac1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('f3aulac1m2s.create');
    }

    /**
     * Store a newly created F3aulac1m2 in storage.
     *
     * @param CreateF3aulac1m2Request $request
     *
     * @return Response
     */
    public function store(CreateF3aulac1m2Request $request)
    {
        $input = $request->all();

        $f3aulac1m2 = $this->f3aulac1m2Repository->create($input);

        Flash::success('F3Aulac1M2 saved successfully.');

        return redirect(route('f3aulac1m2s.index'));
    }

    /**
     * Display the specified F3aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f3aulac1m2 = $this->f3aulac1m2Repository->find($id);

        if (empty($f3aulac1m2)) {
            Flash::error('F3Aulac1M2 not found');

            return redirect(route('f3aulac1m2s.index'));
        }

        return view('f3aulac1m2s.show')->with('f3aulac1m2', $f3aulac1m2);
    }

    /**
     * Show the form for editing the specified F3aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f3aulac1m2 = $this->f3aulac1m2Repository->find($id);

        if (empty($f3aulac1m2)) {
            Flash::error('F3Aulac1M2 not found');

            return redirect(route('f3aulac1m2s.index'));
        }

        return view('f3aulac1m2s.edit')->with('f3aulac1m2', $f3aulac1m2);
    }

    /**
     * Update the specified F3aulac1m2 in storage.
     *
     * @param int $id
     * @param UpdateF3aulac1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF3aulac1m2Request $request)
    {
        $f3aulac1m2 = $this->f3aulac1m2Repository->find($id);

        if (empty($f3aulac1m2)) {
            Flash::error('F3Aulac1M2 not found');

            return redirect(route('f3aulac1m2s.index'));
        }

        $f3aulac1m2 = $this->f3aulac1m2Repository->update($request->all(), $id);

        Flash::success('F3Aulac1M2 updated successfully.');

        return redirect(route('f3aulac1m2s.index'));
    }

    /**
     * Remove the specified F3aulac1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f3aulac1m2 = $this->f3aulac1m2Repository->find($id);

        if (empty($f3aulac1m2)) {
            Flash::error('F3Aulac1M2 not found');

            return redirect(route('f3aulac1m2s.index'));
        }

        $this->f3aulac1m2Repository->delete($id);

        Flash::success('F3Aulac1M2 deleted successfully.');

        return redirect(route('f3aulac1m2s.index'));
    }
}
