<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP1debatec2m2Request;
use App\Http\Requests\UpdateP1debatec2m2Request;
use App\Repositories\P1debatec2m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P1debatec2m2Controller extends AppBaseController
{
    /** @var  P1debatec2m2Repository */
    private $p1debatec2m2Repository;

    public function __construct(P1debatec2m2Repository $p1debatec2m2Repo)
    {
        $this->p1debatec2m2Repository = $p1debatec2m2Repo;
    }

    /**
     * Display a listing of the P1debatec2m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p1debatec2m2s = $this->p1debatec2m2Repository->all();

        return view('p1debatec2m2s.index')
            ->with('p1debatec2m2s', $p1debatec2m2s);
    }

    /**
     * Show the form for creating a new P1debatec2m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('p1debatec2m2s.create');
    }

    /**
     * Store a newly created P1debatec2m2 in storage.
     *
     * @param CreateP1debatec2m2Request $request
     *
     * @return Response
     */
    public function store(CreateP1debatec2m2Request $request)
    {
        $input = $request->all();

        $p1debatec2m2 = $this->p1debatec2m2Repository->create($input);

        Flash::success('P1Debatec2M2 saved successfully.');

        return redirect(route('p1debatec2m2s.index'));
    }

    /**
     * Display the specified P1debatec2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p1debatec2m2 = $this->p1debatec2m2Repository->find($id);

        if (empty($p1debatec2m2)) {
            Flash::error('P1Debatec2M2 not found');

            return redirect(route('p1debatec2m2s.index'));
        }

        return view('p1debatec2m2s.show')->with('p1debatec2m2', $p1debatec2m2);
    }

    /**
     * Show the form for editing the specified P1debatec2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p1debatec2m2 = $this->p1debatec2m2Repository->find($id);

        if (empty($p1debatec2m2)) {
            Flash::error('P1Debatec2M2 not found');

            return redirect(route('p1debatec2m2s.index'));
        }

        return view('p1debatec2m2s.edit')->with('p1debatec2m2', $p1debatec2m2);
    }

    /**
     * Update the specified P1debatec2m2 in storage.
     *
     * @param int $id
     * @param UpdateP1debatec2m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP1debatec2m2Request $request)
    {
        $p1debatec2m2 = $this->p1debatec2m2Repository->find($id);

        if (empty($p1debatec2m2)) {
            Flash::error('P1Debatec2M2 not found');

            return redirect(route('p1debatec2m2s.index'));
        }

        $p1debatec2m2 = $this->p1debatec2m2Repository->update($request->all(), $id);

        Flash::success('P1Debatec2M2 updated successfully.');

        return redirect(route('p1debatec2m2s.index'));
    }

    /**
     * Remove the specified P1debatec2m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p1debatec2m2 = $this->p1debatec2m2Repository->find($id);

        if (empty($p1debatec2m2)) {
            Flash::error('P1Debatec2M2 not found');

            return redirect(route('p1debatec2m2s.index'));
        }

        $this->p1debatec2m2Repository->delete($id);

        Flash::success('P1Debatec2M2 deleted successfully.');

        return redirect(route('p1debatec2m2s.index'));
    }
}
