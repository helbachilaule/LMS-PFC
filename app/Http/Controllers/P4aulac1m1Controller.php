<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP4aulac1m1Request;
use App\Http\Requests\UpdateP4aulac1m1Request;
use App\Repositories\P4aulac1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P4aulac1m1Controller extends AppBaseController
{
    /** @var  P4aulac1m1Repository */
    private $p4aulac1m1Repository;

    public function __construct(P4aulac1m1Repository $p4aulac1m1Repo)
    {
        $this->p4aulac1m1Repository = $p4aulac1m1Repo;
    }

    /**
     * Display a listing of the P4aulac1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p4aulac1m1s = $this->p4aulac1m1Repository->all();

        return view('p4aulac1m1s.index')
            ->with('p4aulac1m1s', $p4aulac1m1s);
    }

    /**
     * Show the form for creating a new P4aulac1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p4aulac1m1s.create');
    }

    /**
     * Store a newly created P4aulac1m1 in storage.
     *
     * @param CreateP4aulac1m1Request $request
     *
     * @return Response
     */
    public function store(CreateP4aulac1m1Request $request)
    {
        $input = $request->all();

        $p4aulac1m1 = $this->p4aulac1m1Repository->create($input);

        Flash::success('P4Aulac1M1 saved successfully.');

        return redirect(route('p4aulac1m1s.index'));
    }

    /**
     * Display the specified P4aulac1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p4aulac1m1 = $this->p4aulac1m1Repository->find($id);

        if (empty($p4aulac1m1)) {
            Flash::error('P4Aulac1M1 not found');

            return redirect(route('p4aulac1m1s.index'));
        }

        return view('p4aulac1m1s.show')->with('p4aulac1m1', $p4aulac1m1);
    }

    /**
     * Show the form for editing the specified P4aulac1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p4aulac1m1 = $this->p4aulac1m1Repository->find($id);

        if (empty($p4aulac1m1)) {
            Flash::error('P4Aulac1M1 not found');

            return redirect(route('p4aulac1m1s.index'));
        }

        return view('p4aulac1m1s.edit')->with('p4aulac1m1', $p4aulac1m1);
    }

    /**
     * Update the specified P4aulac1m1 in storage.
     *
     * @param int $id
     * @param UpdateP4aulac1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP4aulac1m1Request $request)
    {
        $p4aulac1m1 = $this->p4aulac1m1Repository->find($id);

        if (empty($p4aulac1m1)) {
            Flash::error('P4Aulac1M1 not found');

            return redirect(route('p4aulac1m1s.index'));
        }

        $p4aulac1m1 = $this->p4aulac1m1Repository->update($request->all(), $id);

        Flash::success('P4Aulac1M1 updated successfully.');

        return redirect(route('p4aulac1m1s.index'));
    }

    /**
     * Remove the specified P4aulac1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p4aulac1m1 = $this->p4aulac1m1Repository->find($id);

        if (empty($p4aulac1m1)) {
            Flash::error('P4Aulac1M1 not found');

            return redirect(route('p4aulac1m1s.index'));
        }

        $this->p4aulac1m1Repository->delete($id);

        Flash::success('P4Aulac1M1 deleted successfully.');

        return redirect(route('p4aulac1m1s.index'));
    }
}
