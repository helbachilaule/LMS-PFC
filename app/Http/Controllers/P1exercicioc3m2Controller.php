<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP1exercicioc3m2Request;
use App\Http\Requests\UpdateP1exercicioc3m2Request;
use App\Repositories\P1exercicioc3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P1exercicioc3m2Controller extends AppBaseController
{
    /** @var  P1exercicioc3m2Repository */
    private $p1exercicioc3m2Repository;

    public function __construct(P1exercicioc3m2Repository $p1exercicioc3m2Repo)
    {
        $this->p1exercicioc3m2Repository = $p1exercicioc3m2Repo;
    }

    /**
     * Display a listing of the P1exercicioc3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p1exercicioc3m2s = $this->p1exercicioc3m2Repository->all();

        return view('p1exercicioc3m2s.index')
            ->with('p1exercicioc3m2s', $p1exercicioc3m2s);
    }

    /**
     * Show the form for creating a new P1exercicioc3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('p1exercicioc3m2s.create');
    }

    /**
     * Store a newly created P1exercicioc3m2 in storage.
     *
     * @param CreateP1exercicioc3m2Request $request
     *
     * @return Response
     */
    public function store(CreateP1exercicioc3m2Request $request)
    {
        $input = $request->all();

        $p1exercicioc3m2 = $this->p1exercicioc3m2Repository->create($input);

        Flash::success('P1Exercicioc3M2 saved successfully.');

        return redirect(route('p1exercicioc3m2s.index'));
    }

    /**
     * Display the specified P1exercicioc3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p1exercicioc3m2 = $this->p1exercicioc3m2Repository->find($id);

        if (empty($p1exercicioc3m2)) {
            Flash::error('P1Exercicioc3M2 not found');

            return redirect(route('p1exercicioc3m2s.index'));
        }

        return view('p1exercicioc3m2s.show')->with('p1exercicioc3m2', $p1exercicioc3m2);
    }

    /**
     * Show the form for editing the specified P1exercicioc3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p1exercicioc3m2 = $this->p1exercicioc3m2Repository->find($id);

        if (empty($p1exercicioc3m2)) {
            Flash::error('P1Exercicioc3M2 not found');

            return redirect(route('p1exercicioc3m2s.index'));
        }

        return view('p1exercicioc3m2s.edit')->with('p1exercicioc3m2', $p1exercicioc3m2);
    }

    /**
     * Update the specified P1exercicioc3m2 in storage.
     *
     * @param int $id
     * @param UpdateP1exercicioc3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP1exercicioc3m2Request $request)
    {
        $p1exercicioc3m2 = $this->p1exercicioc3m2Repository->find($id);

        if (empty($p1exercicioc3m2)) {
            Flash::error('P1Exercicioc3M2 not found');

            return redirect(route('p1exercicioc3m2s.index'));
        }

        $p1exercicioc3m2 = $this->p1exercicioc3m2Repository->update($request->all(), $id);

        Flash::success('P1Exercicioc3M2 updated successfully.');

        return redirect(route('p1exercicioc3m2s.index'));
    }

    /**
     * Remove the specified P1exercicioc3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p1exercicioc3m2 = $this->p1exercicioc3m2Repository->find($id);

        if (empty($p1exercicioc3m2)) {
            Flash::error('P1Exercicioc3M2 not found');

            return redirect(route('p1exercicioc3m2s.index'));
        }

        $this->p1exercicioc3m2Repository->delete($id);

        Flash::success('P1Exercicioc3M2 deleted successfully.');

        return redirect(route('p1exercicioc3m2s.index'));
    }
}
