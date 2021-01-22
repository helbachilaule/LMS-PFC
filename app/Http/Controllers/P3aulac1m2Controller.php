<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP3aulac1m2Request;
use App\Http\Requests\UpdateP3aulac1m2Request;
use App\Repositories\P3aulac1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P3aulac1m2Controller extends AppBaseController
{
    /** @var  P3aulac1m2Repository */
    private $p3aulac1m2Repository;

    public function __construct(P3aulac1m2Repository $p3aulac1m2Repo)
    {
        $this->p3aulac1m2Repository = $p3aulac1m2Repo;
    }

    /**
     * Display a listing of the P3aulac1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p3aulac1m2s = $this->p3aulac1m2Repository->all();

        return view('p3aulac1m2s.index')
            ->with('p3aulac1m2s', $p3aulac1m2s);
    }

    /**
     * Show the form for creating a new P3aulac1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('p3aulac1m2s.create');
    }

    /**
     * Store a newly created P3aulac1m2 in storage.
     *
     * @param CreateP3aulac1m2Request $request
     *
     * @return Response
     */
    public function store(CreateP3aulac1m2Request $request)
    {
        $input = $request->all();

        $p3aulac1m2 = $this->p3aulac1m2Repository->create($input);

        Flash::success('P3Aulac1M2 saved successfully.');

        return redirect(route('p3aulac1m2s.index'));
    }

    /**
     * Display the specified P3aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p3aulac1m2 = $this->p3aulac1m2Repository->find($id);

        if (empty($p3aulac1m2)) {
            Flash::error('P3Aulac1M2 not found');

            return redirect(route('p3aulac1m2s.index'));
        }

        return view('p3aulac1m2s.show')->with('p3aulac1m2', $p3aulac1m2);
    }

    /**
     * Show the form for editing the specified P3aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p3aulac1m2 = $this->p3aulac1m2Repository->find($id);

        if (empty($p3aulac1m2)) {
            Flash::error('P3Aulac1M2 not found');

            return redirect(route('p3aulac1m2s.index'));
        }

        return view('p3aulac1m2s.edit')->with('p3aulac1m2', $p3aulac1m2);
    }

    /**
     * Update the specified P3aulac1m2 in storage.
     *
     * @param int $id
     * @param UpdateP3aulac1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP3aulac1m2Request $request)
    {
        $p3aulac1m2 = $this->p3aulac1m2Repository->find($id);

        if (empty($p3aulac1m2)) {
            Flash::error('P3Aulac1M2 not found');

            return redirect(route('p3aulac1m2s.index'));
        }

        $p3aulac1m2 = $this->p3aulac1m2Repository->update($request->all(), $id);

        Flash::success('P3Aulac1M2 updated successfully.');

        return redirect(route('p3aulac1m2s.index'));
    }

    /**
     * Remove the specified P3aulac1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p3aulac1m2 = $this->p3aulac1m2Repository->find($id);

        if (empty($p3aulac1m2)) {
            Flash::error('P3Aulac1M2 not found');

            return redirect(route('p3aulac1m2s.index'));
        }

        $this->p3aulac1m2Repository->delete($id);

        Flash::success('P3Aulac1M2 deleted successfully.');

        return redirect(route('p3aulac1m2s.index'));
    }
}
