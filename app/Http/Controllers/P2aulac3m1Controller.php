<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP2aulac3m1Request;
use App\Http\Requests\UpdateP2aulac3m1Request;
use App\Repositories\P2aulac3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P2aulac3m1Controller extends AppBaseController
{
    /** @var  P2aulac3m1Repository */
    private $p2aulac3m1Repository;

    public function __construct(P2aulac3m1Repository $p2aulac3m1Repo)
    {
        $this->p2aulac3m1Repository = $p2aulac3m1Repo;
    }

    /**
     * Display a listing of the P2aulac3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p2aulac3m1s = $this->p2aulac3m1Repository->all();

        return view('p2aulac3m1s.index')
            ->with('p2aulac3m1s', $p2aulac3m1s);
    }

    /**
     * Show the form for creating a new P2aulac3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p2aulac3m1s.create');
    }

    /**
     * Store a newly created P2aulac3m1 in storage.
     *
     * @param CreateP2aulac3m1Request $request
     *
     * @return Response
     */
    public function store(CreateP2aulac3m1Request $request)
    {
        $input = $request->all();

        $p2aulac3m1 = $this->p2aulac3m1Repository->create($input);

        Flash::success('P2Aulac3M1 saved successfully.');

        return redirect(route('p2aulac3m1s.index'));
    }

    /**
     * Display the specified P2aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p2aulac3m1 = $this->p2aulac3m1Repository->find($id);

        if (empty($p2aulac3m1)) {
            Flash::error('P2Aulac3M1 not found');

            return redirect(route('p2aulac3m1s.index'));
        }

        return view('p2aulac3m1s.show')->with('p2aulac3m1', $p2aulac3m1);
    }

    /**
     * Show the form for editing the specified P2aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p2aulac3m1 = $this->p2aulac3m1Repository->find($id);

        if (empty($p2aulac3m1)) {
            Flash::error('P2Aulac3M1 not found');

            return redirect(route('p2aulac3m1s.index'));
        }

        return view('p2aulac3m1s.edit')->with('p2aulac3m1', $p2aulac3m1);
    }

    /**
     * Update the specified P2aulac3m1 in storage.
     *
     * @param int $id
     * @param UpdateP2aulac3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP2aulac3m1Request $request)
    {
        $p2aulac3m1 = $this->p2aulac3m1Repository->find($id);

        if (empty($p2aulac3m1)) {
            Flash::error('P2Aulac3M1 not found');

            return redirect(route('p2aulac3m1s.index'));
        }

        $p2aulac3m1 = $this->p2aulac3m1Repository->update($request->all(), $id);

        Flash::success('P2Aulac3M1 updated successfully.');

        return redirect(route('p2aulac3m1s.index'));
    }

    /**
     * Remove the specified P2aulac3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p2aulac3m1 = $this->p2aulac3m1Repository->find($id);

        if (empty($p2aulac3m1)) {
            Flash::error('P2Aulac3M1 not found');

            return redirect(route('p2aulac3m1s.index'));
        }

        $this->p2aulac3m1Repository->delete($id);

        Flash::success('P2Aulac3M1 deleted successfully.');

        return redirect(route('p2aulac3m1s.index'));
    }
}
