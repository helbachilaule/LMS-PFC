<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP4exercicioc2m2Request;
use App\Http\Requests\UpdateP4exercicioc2m2Request;
use App\Repositories\P4exercicioc2m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P4exercicioc2m2Controller extends AppBaseController
{
    /** @var  P4exercicioc2m2Repository */
    private $p4exercicioc2m2Repository;

    public function __construct(P4exercicioc2m2Repository $p4exercicioc2m2Repo)
    {
        $this->p4exercicioc2m2Repository = $p4exercicioc2m2Repo;
    }

    /**
     * Display a listing of the P4exercicioc2m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p4exercicioc2m2s = $this->p4exercicioc2m2Repository->all();

        return view('p4exercicioc2m2s.index')
            ->with('p4exercicioc2m2s', $p4exercicioc2m2s);
    }

    /**
     * Show the form for creating a new P4exercicioc2m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('p4exercicioc2m2s.create');
    }

    /**
     * Store a newly created P4exercicioc2m2 in storage.
     *
     * @param CreateP4exercicioc2m2Request $request
     *
     * @return Response
     */
    public function store(CreateP4exercicioc2m2Request $request)
    {
        $input = $request->all();

        $p4exercicioc2m2 = $this->p4exercicioc2m2Repository->create($input);

        Flash::success('P4Exercicioc2M2 saved successfully.');

        return redirect(route('p4exercicioc2m2s.index'));
    }

    /**
     * Display the specified P4exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p4exercicioc2m2 = $this->p4exercicioc2m2Repository->find($id);

        if (empty($p4exercicioc2m2)) {
            Flash::error('P4Exercicioc2M2 not found');

            return redirect(route('p4exercicioc2m2s.index'));
        }

        return view('p4exercicioc2m2s.show')->with('p4exercicioc2m2', $p4exercicioc2m2);
    }

    /**
     * Show the form for editing the specified P4exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p4exercicioc2m2 = $this->p4exercicioc2m2Repository->find($id);

        if (empty($p4exercicioc2m2)) {
            Flash::error('P4Exercicioc2M2 not found');

            return redirect(route('p4exercicioc2m2s.index'));
        }

        return view('p4exercicioc2m2s.edit')->with('p4exercicioc2m2', $p4exercicioc2m2);
    }

    /**
     * Update the specified P4exercicioc2m2 in storage.
     *
     * @param int $id
     * @param UpdateP4exercicioc2m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP4exercicioc2m2Request $request)
    {
        $p4exercicioc2m2 = $this->p4exercicioc2m2Repository->find($id);

        if (empty($p4exercicioc2m2)) {
            Flash::error('P4Exercicioc2M2 not found');

            return redirect(route('p4exercicioc2m2s.index'));
        }

        $p4exercicioc2m2 = $this->p4exercicioc2m2Repository->update($request->all(), $id);

        Flash::success('P4Exercicioc2M2 updated successfully.');

        return redirect(route('p4exercicioc2m2s.index'));
    }

    /**
     * Remove the specified P4exercicioc2m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p4exercicioc2m2 = $this->p4exercicioc2m2Repository->find($id);

        if (empty($p4exercicioc2m2)) {
            Flash::error('P4Exercicioc2M2 not found');

            return redirect(route('p4exercicioc2m2s.index'));
        }

        $this->p4exercicioc2m2Repository->delete($id);

        Flash::success('P4Exercicioc2M2 deleted successfully.');

        return redirect(route('p4exercicioc2m2s.index'));
    }
}
