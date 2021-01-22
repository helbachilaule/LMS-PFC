<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF3debatec2m2Request;
use App\Http\Requests\UpdateF3debatec2m2Request;
use App\Repositories\F3debatec2m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F3debatec2m2Controller extends AppBaseController
{
    /** @var  F3debatec2m2Repository */
    private $f3debatec2m2Repository;

    public function __construct(F3debatec2m2Repository $f3debatec2m2Repo)
    {
        $this->f3debatec2m2Repository = $f3debatec2m2Repo;
    }

    /**
     * Display a listing of the F3debatec2m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f3debatec2m2s = $this->f3debatec2m2Repository->all();

        return view('f3debatec2m2s.index')
            ->with('f3debatec2m2s', $f3debatec2m2s);
    }

    /**
     * Show the form for creating a new F3debatec2m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('f3debatec2m2s.create');
    }

    /**
     * Store a newly created F3debatec2m2 in storage.
     *
     * @param CreateF3debatec2m2Request $request
     *
     * @return Response
     */
    public function store(CreateF3debatec2m2Request $request)
    {
        $input = $request->all();

        $f3debatec2m2 = $this->f3debatec2m2Repository->create($input);

        Flash::success('F3Debatec2M2 saved successfully.');

        return redirect(route('f3debatec2m2s.index'));
    }

    /**
     * Display the specified F3debatec2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f3debatec2m2 = $this->f3debatec2m2Repository->find($id);

        if (empty($f3debatec2m2)) {
            Flash::error('F3Debatec2M2 not found');

            return redirect(route('f3debatec2m2s.index'));
        }

        return view('f3debatec2m2s.show')->with('f3debatec2m2', $f3debatec2m2);
    }

    /**
     * Show the form for editing the specified F3debatec2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f3debatec2m2 = $this->f3debatec2m2Repository->find($id);

        if (empty($f3debatec2m2)) {
            Flash::error('F3Debatec2M2 not found');

            return redirect(route('f3debatec2m2s.index'));
        }

        return view('f3debatec2m2s.edit')->with('f3debatec2m2', $f3debatec2m2);
    }

    /**
     * Update the specified F3debatec2m2 in storage.
     *
     * @param int $id
     * @param UpdateF3debatec2m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF3debatec2m2Request $request)
    {
        $f3debatec2m2 = $this->f3debatec2m2Repository->find($id);

        if (empty($f3debatec2m2)) {
            Flash::error('F3Debatec2M2 not found');

            return redirect(route('f3debatec2m2s.index'));
        }

        $f3debatec2m2 = $this->f3debatec2m2Repository->update($request->all(), $id);

        Flash::success('F3Debatec2M2 updated successfully.');

        return redirect(route('f3debatec2m2s.index'));
    }

    /**
     * Remove the specified F3debatec2m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f3debatec2m2 = $this->f3debatec2m2Repository->find($id);

        if (empty($f3debatec2m2)) {
            Flash::error('F3Debatec2M2 not found');

            return redirect(route('f3debatec2m2s.index'));
        }

        $this->f3debatec2m2Repository->delete($id);

        Flash::success('F3Debatec2M2 deleted successfully.');

        return redirect(route('f3debatec2m2s.index'));
    }
}
