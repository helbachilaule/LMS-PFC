<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP4aulac3m2Request;
use App\Http\Requests\UpdateP4aulac3m2Request;
use App\Repositories\P4aulac3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P4aulac3m2Controller extends AppBaseController
{
    /** @var  P4aulac3m2Repository */
    private $p4aulac3m2Repository;

    public function __construct(P4aulac3m2Repository $p4aulac3m2Repo)
    {
        $this->p4aulac3m2Repository = $p4aulac3m2Repo;
    }

    /**
     * Display a listing of the P4aulac3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p4aulac3m2s = $this->p4aulac3m2Repository->all();

        return view('p4aulac3m2s.index')
            ->with('p4aulac3m2s', $p4aulac3m2s);
    }

    /**
     * Show the form for creating a new P4aulac3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('p4aulac3m2s.create');
    }

    /**
     * Store a newly created P4aulac3m2 in storage.
     *
     * @param CreateP4aulac3m2Request $request
     *
     * @return Response
     */
    public function store(CreateP4aulac3m2Request $request)
    {
        $input = $request->all();

        $p4aulac3m2 = $this->p4aulac3m2Repository->create($input);

        Flash::success('P4Aulac3M2 saved successfully.');

        return redirect(route('p4aulac3m2s.index'));
    }

    /**
     * Display the specified P4aulac3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p4aulac3m2 = $this->p4aulac3m2Repository->find($id);

        if (empty($p4aulac3m2)) {
            Flash::error('P4Aulac3M2 not found');

            return redirect(route('p4aulac3m2s.index'));
        }

        return view('p4aulac3m2s.show')->with('p4aulac3m2', $p4aulac3m2);
    }

    /**
     * Show the form for editing the specified P4aulac3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p4aulac3m2 = $this->p4aulac3m2Repository->find($id);

        if (empty($p4aulac3m2)) {
            Flash::error('P4Aulac3M2 not found');

            return redirect(route('p4aulac3m2s.index'));
        }

        return view('p4aulac3m2s.edit')->with('p4aulac3m2', $p4aulac3m2);
    }

    /**
     * Update the specified P4aulac3m2 in storage.
     *
     * @param int $id
     * @param UpdateP4aulac3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP4aulac3m2Request $request)
    {
        $p4aulac3m2 = $this->p4aulac3m2Repository->find($id);

        if (empty($p4aulac3m2)) {
            Flash::error('P4Aulac3M2 not found');

            return redirect(route('p4aulac3m2s.index'));
        }

        $p4aulac3m2 = $this->p4aulac3m2Repository->update($request->all(), $id);

        Flash::success('P4Aulac3M2 updated successfully.');

        return redirect(route('p4aulac3m2s.index'));
    }

    /**
     * Remove the specified P4aulac3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p4aulac3m2 = $this->p4aulac3m2Repository->find($id);

        if (empty($p4aulac3m2)) {
            Flash::error('P4Aulac3M2 not found');

            return redirect(route('p4aulac3m2s.index'));
        }

        $this->p4aulac3m2Repository->delete($id);

        Flash::success('P4Aulac3M2 deleted successfully.');

        return redirect(route('p4aulac3m2s.index'));
    }
}
