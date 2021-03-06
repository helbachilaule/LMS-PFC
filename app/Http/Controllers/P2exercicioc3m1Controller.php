<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP2exercicioc3m1Request;
use App\Http\Requests\UpdateP2exercicioc3m1Request;
use App\Repositories\P2exercicioc3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P2exercicioc3m1Controller extends AppBaseController
{
    /** @var  P2exercicioc3m1Repository */
    private $p2exercicioc3m1Repository;

    public function __construct(P2exercicioc3m1Repository $p2exercicioc3m1Repo)
    {
        $this->p2exercicioc3m1Repository = $p2exercicioc3m1Repo;
    }

    /**
     * Display a listing of the P2exercicioc3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p2exercicioc3m1s = $this->p2exercicioc3m1Repository->all();

        return view('p2exercicioc3m1s.index')
            ->with('p2exercicioc3m1s', $p2exercicioc3m1s);
    }

    /**
     * Show the form for creating a new P2exercicioc3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p2exercicioc3m1s.create');
    }

    /**
     * Store a newly created P2exercicioc3m1 in storage.
     *
     * @param CreateP2exercicioc3m1Request $request
     *
     * @return Response
     */
    public function store(CreateP2exercicioc3m1Request $request)
    {
        $input = $request->all();

        $p2exercicioc3m1 = $this->p2exercicioc3m1Repository->create($input);

        Flash::success('P2Exercicioc3M1 saved successfully.');

        return redirect(route('p2exercicioc3m1s.index'));
    }

    /**
     * Display the specified P2exercicioc3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p2exercicioc3m1 = $this->p2exercicioc3m1Repository->find($id);

        if (empty($p2exercicioc3m1)) {
            Flash::error('P2Exercicioc3M1 not found');

            return redirect(route('p2exercicioc3m1s.index'));
        }

        return view('p2exercicioc3m1s.show')->with('p2exercicioc3m1', $p2exercicioc3m1);
    }

    /**
     * Show the form for editing the specified P2exercicioc3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p2exercicioc3m1 = $this->p2exercicioc3m1Repository->find($id);

        if (empty($p2exercicioc3m1)) {
            Flash::error('P2Exercicioc3M1 not found');

            return redirect(route('p2exercicioc3m1s.index'));
        }

        return view('p2exercicioc3m1s.edit')->with('p2exercicioc3m1', $p2exercicioc3m1);
    }

    /**
     * Update the specified P2exercicioc3m1 in storage.
     *
     * @param int $id
     * @param UpdateP2exercicioc3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP2exercicioc3m1Request $request)
    {
        $p2exercicioc3m1 = $this->p2exercicioc3m1Repository->find($id);

        if (empty($p2exercicioc3m1)) {
            Flash::error('P2Exercicioc3M1 not found');

            return redirect(route('p2exercicioc3m1s.index'));
        }

        $p2exercicioc3m1 = $this->p2exercicioc3m1Repository->update($request->all(), $id);

        Flash::success('P2Exercicioc3M1 updated successfully.');

        return redirect(route('p2exercicioc3m1s.index'));
    }

    /**
     * Remove the specified P2exercicioc3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p2exercicioc3m1 = $this->p2exercicioc3m1Repository->find($id);

        if (empty($p2exercicioc3m1)) {
            Flash::error('P2Exercicioc3M1 not found');

            return redirect(route('p2exercicioc3m1s.index'));
        }

        $this->p2exercicioc3m1Repository->delete($id);

        Flash::success('P2Exercicioc3M1 deleted successfully.');

        return redirect(route('p2exercicioc3m1s.index'));
    }
}
