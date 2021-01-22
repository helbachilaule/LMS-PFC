<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP2debatec1m1Request;
use App\Http\Requests\UpdateP2debatec1m1Request;
use App\Repositories\P2debatec1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P2debatec1m1Controller extends AppBaseController
{
    /** @var  P2debatec1m1Repository */
    private $p2debatec1m1Repository;

    public function __construct(P2debatec1m1Repository $p2debatec1m1Repo)
    {
        $this->p2debatec1m1Repository = $p2debatec1m1Repo;
    }

    /**
     * Display a listing of the P2debatec1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p2debatec1m1s = $this->p2debatec1m1Repository->all();

        return view('p2debatec1m1s.index')
            ->with('p2debatec1m1s', $p2debatec1m1s);
    }

    /**
     * Show the form for creating a new P2debatec1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p2debatec1m1s.create');
    }

    /**
     * Store a newly created P2debatec1m1 in storage.
     *
     * @param CreateP2debatec1m1Request $request
     *
     * @return Response
     */
    public function store(CreateP2debatec1m1Request $request)
    {
        $input = $request->all();

        $p2debatec1m1 = $this->p2debatec1m1Repository->create($input);

        Flash::success('P2Debatec1M1 saved successfully.');

        return redirect(route('p2debatec1m1s.index'));
    }

    /**
     * Display the specified P2debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p2debatec1m1 = $this->p2debatec1m1Repository->find($id);

        if (empty($p2debatec1m1)) {
            Flash::error('P2Debatec1M1 not found');

            return redirect(route('p2debatec1m1s.index'));
        }

        return view('p2debatec1m1s.show')->with('p2debatec1m1', $p2debatec1m1);
    }

    /**
     * Show the form for editing the specified P2debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p2debatec1m1 = $this->p2debatec1m1Repository->find($id);

        if (empty($p2debatec1m1)) {
            Flash::error('P2Debatec1M1 not found');

            return redirect(route('p2debatec1m1s.index'));
        }

        return view('p2debatec1m1s.edit')->with('p2debatec1m1', $p2debatec1m1);
    }

    /**
     * Update the specified P2debatec1m1 in storage.
     *
     * @param int $id
     * @param UpdateP2debatec1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP2debatec1m1Request $request)
    {
        $p2debatec1m1 = $this->p2debatec1m1Repository->find($id);

        if (empty($p2debatec1m1)) {
            Flash::error('P2Debatec1M1 not found');

            return redirect(route('p2debatec1m1s.index'));
        }

        $p2debatec1m1 = $this->p2debatec1m1Repository->update($request->all(), $id);

        Flash::success('P2Debatec1M1 updated successfully.');

        return redirect(route('p2debatec1m1s.index'));
    }

    /**
     * Remove the specified P2debatec1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p2debatec1m1 = $this->p2debatec1m1Repository->find($id);

        if (empty($p2debatec1m1)) {
            Flash::error('P2Debatec1M1 not found');

            return redirect(route('p2debatec1m1s.index'));
        }

        $this->p2debatec1m1Repository->delete($id);

        Flash::success('P2Debatec1M1 deleted successfully.');

        return redirect(route('p2debatec1m1s.index'));
    }
}
