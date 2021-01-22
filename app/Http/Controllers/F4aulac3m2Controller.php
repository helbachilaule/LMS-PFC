<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF4aulac3m2Request;
use App\Http\Requests\UpdateF4aulac3m2Request;
use App\Repositories\F4aulac3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F4aulac3m2Controller extends AppBaseController
{
    /** @var  F4aulac3m2Repository */
    private $f4aulac3m2Repository;

    public function __construct(F4aulac3m2Repository $f4aulac3m2Repo)
    {
        $this->f4aulac3m2Repository = $f4aulac3m2Repo;
    }

    /**
     * Display a listing of the F4aulac3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f4aulac3m2s = $this->f4aulac3m2Repository->all();

        return view('f4aulac3m2s.index')
            ->with('f4aulac3m2s', $f4aulac3m2s);
    }

    /**
     * Show the form for creating a new F4aulac3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('f4aulac3m2s.create');
    }

    /**
     * Store a newly created F4aulac3m2 in storage.
     *
     * @param CreateF4aulac3m2Request $request
     *
     * @return Response
     */
    public function store(CreateF4aulac3m2Request $request)
    {
        $input = $request->all();

        $f4aulac3m2 = $this->f4aulac3m2Repository->create($input);

        Flash::success('F4Aulac3M2 saved successfully.');

        return redirect(route('f4aulac3m2s.index'));
    }

    /**
     * Display the specified F4aulac3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f4aulac3m2 = $this->f4aulac3m2Repository->find($id);

        if (empty($f4aulac3m2)) {
            Flash::error('F4Aulac3M2 not found');

            return redirect(route('f4aulac3m2s.index'));
        }

        return view('f4aulac3m2s.show')->with('f4aulac3m2', $f4aulac3m2);
    }

    /**
     * Show the form for editing the specified F4aulac3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f4aulac3m2 = $this->f4aulac3m2Repository->find($id);

        if (empty($f4aulac3m2)) {
            Flash::error('F4Aulac3M2 not found');

            return redirect(route('f4aulac3m2s.index'));
        }

        return view('f4aulac3m2s.edit')->with('f4aulac3m2', $f4aulac3m2);
    }

    /**
     * Update the specified F4aulac3m2 in storage.
     *
     * @param int $id
     * @param UpdateF4aulac3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF4aulac3m2Request $request)
    {
        $f4aulac3m2 = $this->f4aulac3m2Repository->find($id);

        if (empty($f4aulac3m2)) {
            Flash::error('F4Aulac3M2 not found');

            return redirect(route('f4aulac3m2s.index'));
        }

        $f4aulac3m2 = $this->f4aulac3m2Repository->update($request->all(), $id);

        Flash::success('F4Aulac3M2 updated successfully.');

        return redirect(route('f4aulac3m2s.index'));
    }

    /**
     * Remove the specified F4aulac3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f4aulac3m2 = $this->f4aulac3m2Repository->find($id);

        if (empty($f4aulac3m2)) {
            Flash::error('F4Aulac3M2 not found');

            return redirect(route('f4aulac3m2s.index'));
        }

        $this->f4aulac3m2Repository->delete($id);

        Flash::success('F4Aulac3M2 deleted successfully.');

        return redirect(route('f4aulac3m2s.index'));
    }
}
