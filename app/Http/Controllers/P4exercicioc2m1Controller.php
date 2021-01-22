<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP4exercicioc2m1Request;
use App\Http\Requests\UpdateP4exercicioc2m1Request;
use App\Repositories\P4exercicioc2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P4exercicioc2m1Controller extends AppBaseController
{
    /** @var  P4exercicioc2m1Repository */
    private $p4exercicioc2m1Repository;

    public function __construct(P4exercicioc2m1Repository $p4exercicioc2m1Repo)
    {
        $this->p4exercicioc2m1Repository = $p4exercicioc2m1Repo;
    }

    /**
     * Display a listing of the P4exercicioc2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p4exercicioc2m1s = $this->p4exercicioc2m1Repository->all();

        return view('p4exercicioc2m1s.index')
            ->with('p4exercicioc2m1s', $p4exercicioc2m1s);
    }

    /**
     * Show the form for creating a new P4exercicioc2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p4exercicioc2m1s.create');
    }

    /**
     * Store a newly created P4exercicioc2m1 in storage.
     *
     * @param CreateP4exercicioc2m1Request $request
     *
     * @return Response
     */
    public function store(CreateP4exercicioc2m1Request $request)
    {
        $input = $request->all();

        $p4exercicioc2m1 = $this->p4exercicioc2m1Repository->create($input);

        Flash::success('P4Exercicioc2M1 saved successfully.');

        return redirect(route('p4exercicioc2m1s.index'));
    }

    /**
     * Display the specified P4exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p4exercicioc2m1 = $this->p4exercicioc2m1Repository->find($id);

        if (empty($p4exercicioc2m1)) {
            Flash::error('P4Exercicioc2M1 not found');

            return redirect(route('p4exercicioc2m1s.index'));
        }

        return view('p4exercicioc2m1s.show')->with('p4exercicioc2m1', $p4exercicioc2m1);
    }

    /**
     * Show the form for editing the specified P4exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p4exercicioc2m1 = $this->p4exercicioc2m1Repository->find($id);

        if (empty($p4exercicioc2m1)) {
            Flash::error('P4Exercicioc2M1 not found');

            return redirect(route('p4exercicioc2m1s.index'));
        }

        return view('p4exercicioc2m1s.edit')->with('p4exercicioc2m1', $p4exercicioc2m1);
    }

    /**
     * Update the specified P4exercicioc2m1 in storage.
     *
     * @param int $id
     * @param UpdateP4exercicioc2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP4exercicioc2m1Request $request)
    {
        $p4exercicioc2m1 = $this->p4exercicioc2m1Repository->find($id);

        if (empty($p4exercicioc2m1)) {
            Flash::error('P4Exercicioc2M1 not found');

            return redirect(route('p4exercicioc2m1s.index'));
        }

        $p4exercicioc2m1 = $this->p4exercicioc2m1Repository->update($request->all(), $id);

        Flash::success('P4Exercicioc2M1 updated successfully.');

        return redirect(route('p4exercicioc2m1s.index'));
    }

    /**
     * Remove the specified P4exercicioc2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p4exercicioc2m1 = $this->p4exercicioc2m1Repository->find($id);

        if (empty($p4exercicioc2m1)) {
            Flash::error('P4Exercicioc2M1 not found');

            return redirect(route('p4exercicioc2m1s.index'));
        }

        $this->p4exercicioc2m1Repository->delete($id);

        Flash::success('P4Exercicioc2M1 deleted successfully.');

        return redirect(route('p4exercicioc2m1s.index'));
    }
}
