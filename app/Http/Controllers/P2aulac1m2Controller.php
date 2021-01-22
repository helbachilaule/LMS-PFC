<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP2aulac1m2Request;
use App\Http\Requests\UpdateP2aulac1m2Request;
use App\Repositories\P2aulac1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P2aulac1m2Controller extends AppBaseController
{
    /** @var  P2aulac1m2Repository */
    private $p2aulac1m2Repository;

    public function __construct(P2aulac1m2Repository $p2aulac1m2Repo)
    {
        $this->p2aulac1m2Repository = $p2aulac1m2Repo;
    }

    /**
     * Display a listing of the P2aulac1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p2aulac1m2s = $this->p2aulac1m2Repository->all();

        return view('p2aulac1m2s.index')
            ->with('p2aulac1m2s', $p2aulac1m2s);
    }

    /**
     * Show the form for creating a new P2aulac1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('p2aulac1m2s.create');
    }

    /**
     * Store a newly created P2aulac1m2 in storage.
     *
     * @param CreateP2aulac1m2Request $request
     *
     * @return Response
     */
    public function store(CreateP2aulac1m2Request $request)
    {
        $input = $request->all();

        $p2aulac1m2 = $this->p2aulac1m2Repository->create($input);

        Flash::success('P2Aulac1M2 saved successfully.');

        return redirect(route('p2aulac1m2s.index'));
    }

    /**
     * Display the specified P2aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p2aulac1m2 = $this->p2aulac1m2Repository->find($id);

        if (empty($p2aulac1m2)) {
            Flash::error('P2Aulac1M2 not found');

            return redirect(route('p2aulac1m2s.index'));
        }

        return view('p2aulac1m2s.show')->with('p2aulac1m2', $p2aulac1m2);
    }

    /**
     * Show the form for editing the specified P2aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p2aulac1m2 = $this->p2aulac1m2Repository->find($id);

        if (empty($p2aulac1m2)) {
            Flash::error('P2Aulac1M2 not found');

            return redirect(route('p2aulac1m2s.index'));
        }

        return view('p2aulac1m2s.edit')->with('p2aulac1m2', $p2aulac1m2);
    }

    /**
     * Update the specified P2aulac1m2 in storage.
     *
     * @param int $id
     * @param UpdateP2aulac1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP2aulac1m2Request $request)
    {
        $p2aulac1m2 = $this->p2aulac1m2Repository->find($id);

        if (empty($p2aulac1m2)) {
            Flash::error('P2Aulac1M2 not found');

            return redirect(route('p2aulac1m2s.index'));
        }

        $p2aulac1m2 = $this->p2aulac1m2Repository->update($request->all(), $id);

        Flash::success('P2Aulac1M2 updated successfully.');

        return redirect(route('p2aulac1m2s.index'));
    }

    /**
     * Remove the specified P2aulac1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p2aulac1m2 = $this->p2aulac1m2Repository->find($id);

        if (empty($p2aulac1m2)) {
            Flash::error('P2Aulac1M2 not found');

            return redirect(route('p2aulac1m2s.index'));
        }

        $this->p2aulac1m2Repository->delete($id);

        Flash::success('P2Aulac1M2 deleted successfully.');

        return redirect(route('p2aulac1m2s.index'));
    }
}
