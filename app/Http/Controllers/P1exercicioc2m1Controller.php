<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP1exercicioc2m1Request;
use App\Http\Requests\UpdateP1exercicioc2m1Request;
use App\Repositories\P1exercicioc2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P1exercicioc2m1Controller extends AppBaseController
{
    /** @var  P1exercicioc2m1Repository */
    private $p1exercicioc2m1Repository;

    public function __construct(P1exercicioc2m1Repository $p1exercicioc2m1Repo)
    {
        $this->p1exercicioc2m1Repository = $p1exercicioc2m1Repo;
    }

    /**
     * Display a listing of the P1exercicioc2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p1exercicioc2m1s = $this->p1exercicioc2m1Repository->all();

        return view('p1exercicioc2m1s.index')
            ->with('p1exercicioc2m1s', $p1exercicioc2m1s);
    }

    /**
     * Show the form for creating a new P1exercicioc2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p1exercicioc2m1s.create');
    }

    /**
     * Store a newly created P1exercicioc2m1 in storage.
     *
     * @param CreateP1exercicioc2m1Request $request
     *
     * @return Response
     */
    public function store(CreateP1exercicioc2m1Request $request)
    {
        $input = $request->all();

        $p1exercicioc2m1 = $this->p1exercicioc2m1Repository->create($input);

        Flash::success('P1Exercicioc2M1 saved successfully.');

        return redirect(route('p1exercicioc2m1s.index'));
    }

    /**
     * Display the specified P1exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p1exercicioc2m1 = $this->p1exercicioc2m1Repository->find($id);

        if (empty($p1exercicioc2m1)) {
            Flash::error('P1Exercicioc2M1 not found');

            return redirect(route('p1exercicioc2m1s.index'));
        }

        return view('p1exercicioc2m1s.show')->with('p1exercicioc2m1', $p1exercicioc2m1);
    }

    /**
     * Show the form for editing the specified P1exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p1exercicioc2m1 = $this->p1exercicioc2m1Repository->find($id);

        if (empty($p1exercicioc2m1)) {
            Flash::error('P1Exercicioc2M1 not found');

            return redirect(route('p1exercicioc2m1s.index'));
        }

        return view('p1exercicioc2m1s.edit')->with('p1exercicioc2m1', $p1exercicioc2m1);
    }

    /**
     * Update the specified P1exercicioc2m1 in storage.
     *
     * @param int $id
     * @param UpdateP1exercicioc2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP1exercicioc2m1Request $request)
    {
        $p1exercicioc2m1 = $this->p1exercicioc2m1Repository->find($id);

        if (empty($p1exercicioc2m1)) {
            Flash::error('P1Exercicioc2M1 not found');

            return redirect(route('p1exercicioc2m1s.index'));
        }

        $p1exercicioc2m1 = $this->p1exercicioc2m1Repository->update($request->all(), $id);

        Flash::success('P1Exercicioc2M1 updated successfully.');

        return redirect(route('p1exercicioc2m1s.index'));
    }

    /**
     * Remove the specified P1exercicioc2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p1exercicioc2m1 = $this->p1exercicioc2m1Repository->find($id);

        if (empty($p1exercicioc2m1)) {
            Flash::error('P1Exercicioc2M1 not found');

            return redirect(route('p1exercicioc2m1s.index'));
        }

        $this->p1exercicioc2m1Repository->delete($id);

        Flash::success('P1Exercicioc2M1 deleted successfully.');

        return redirect(route('p1exercicioc2m1s.index'));
    }
}
