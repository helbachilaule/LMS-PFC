<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP4debatec3m1Request;
use App\Http\Requests\UpdateP4debatec3m1Request;
use App\Repositories\P4debatec3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P4debatec3m1Controller extends AppBaseController
{
    /** @var  P4debatec3m1Repository */
    private $p4debatec3m1Repository;

    public function __construct(P4debatec3m1Repository $p4debatec3m1Repo)
    {
        $this->p4debatec3m1Repository = $p4debatec3m1Repo;
    }

    /**
     * Display a listing of the P4debatec3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p4debatec3m1s = $this->p4debatec3m1Repository->all();

        return view('p4debatec3m1s.index')
            ->with('p4debatec3m1s', $p4debatec3m1s);
    }

    /**
     * Show the form for creating a new P4debatec3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p4debatec3m1s.create');
    }

    /**
     * Store a newly created P4debatec3m1 in storage.
     *
     * @param CreateP4debatec3m1Request $request
     *
     * @return Response
     */
    public function store(CreateP4debatec3m1Request $request)
    {
        $input = $request->all();

        $p4debatec3m1 = $this->p4debatec3m1Repository->create($input);

        Flash::success('P4Debatec3M1 saved successfully.');

        return redirect(route('p4debatec3m1s.index'));
    }

    /**
     * Display the specified P4debatec3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p4debatec3m1 = $this->p4debatec3m1Repository->find($id);

        if (empty($p4debatec3m1)) {
            Flash::error('P4Debatec3M1 not found');

            return redirect(route('p4debatec3m1s.index'));
        }

        return view('p4debatec3m1s.show')->with('p4debatec3m1', $p4debatec3m1);
    }

    /**
     * Show the form for editing the specified P4debatec3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p4debatec3m1 = $this->p4debatec3m1Repository->find($id);

        if (empty($p4debatec3m1)) {
            Flash::error('P4Debatec3M1 not found');

            return redirect(route('p4debatec3m1s.index'));
        }

        return view('p4debatec3m1s.edit')->with('p4debatec3m1', $p4debatec3m1);
    }

    /**
     * Update the specified P4debatec3m1 in storage.
     *
     * @param int $id
     * @param UpdateP4debatec3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP4debatec3m1Request $request)
    {
        $p4debatec3m1 = $this->p4debatec3m1Repository->find($id);

        if (empty($p4debatec3m1)) {
            Flash::error('P4Debatec3M1 not found');

            return redirect(route('p4debatec3m1s.index'));
        }

        $p4debatec3m1 = $this->p4debatec3m1Repository->update($request->all(), $id);

        Flash::success('P4Debatec3M1 updated successfully.');

        return redirect(route('p4debatec3m1s.index'));
    }

    /**
     * Remove the specified P4debatec3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p4debatec3m1 = $this->p4debatec3m1Repository->find($id);

        if (empty($p4debatec3m1)) {
            Flash::error('P4Debatec3M1 not found');

            return redirect(route('p4debatec3m1s.index'));
        }

        $this->p4debatec3m1Repository->delete($id);

        Flash::success('P4Debatec3M1 deleted successfully.');

        return redirect(route('p4debatec3m1s.index'));
    }
}
