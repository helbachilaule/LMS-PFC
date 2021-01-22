<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP3aulac1m1Request;
use App\Http\Requests\UpdateP3aulac1m1Request;
use App\Repositories\P3aulac1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P3aulac1m1Controller extends AppBaseController
{
    /** @var  P3aulac1m1Repository */
    private $p3aulac1m1Repository;

    public function __construct(P3aulac1m1Repository $p3aulac1m1Repo)
    {
        $this->p3aulac1m1Repository = $p3aulac1m1Repo;
    }

    /**
     * Display a listing of the P3aulac1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p3aulac1m1s = $this->p3aulac1m1Repository->all();

        return view('p3aulac1m1s.index')
            ->with('p3aulac1m1s', $p3aulac1m1s);
    }

    /**
     * Show the form for creating a new P3aulac1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p3aulac1m1s.create');
    }

    /**
     * Store a newly created P3aulac1m1 in storage.
     *
     * @param CreateP3aulac1m1Request $request
     *
     * @return Response
     */
    public function store(CreateP3aulac1m1Request $request)
    {
        $input = $request->all();

        $p3aulac1m1 = $this->p3aulac1m1Repository->create($input);

        Flash::success('P3Aulac1M1 saved successfully.');

        return redirect(route('p3aulac1m1s.index'));
    }

    /**
     * Display the specified P3aulac1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p3aulac1m1 = $this->p3aulac1m1Repository->find($id);

        if (empty($p3aulac1m1)) {
            Flash::error('P3Aulac1M1 not found');

            return redirect(route('p3aulac1m1s.index'));
        }

        return view('p3aulac1m1s.show')->with('p3aulac1m1', $p3aulac1m1);
    }

    /**
     * Show the form for editing the specified P3aulac1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p3aulac1m1 = $this->p3aulac1m1Repository->find($id);

        if (empty($p3aulac1m1)) {
            Flash::error('P3Aulac1M1 not found');

            return redirect(route('p3aulac1m1s.index'));
        }

        return view('p3aulac1m1s.edit')->with('p3aulac1m1', $p3aulac1m1);
    }

    /**
     * Update the specified P3aulac1m1 in storage.
     *
     * @param int $id
     * @param UpdateP3aulac1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP3aulac1m1Request $request)
    {
        $p3aulac1m1 = $this->p3aulac1m1Repository->find($id);

        if (empty($p3aulac1m1)) {
            Flash::error('P3Aulac1M1 not found');

            return redirect(route('p3aulac1m1s.index'));
        }

        $p3aulac1m1 = $this->p3aulac1m1Repository->update($request->all(), $id);

        Flash::success('P3Aulac1M1 updated successfully.');

        return redirect(route('p3aulac1m1s.index'));
    }

    /**
     * Remove the specified P3aulac1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p3aulac1m1 = $this->p3aulac1m1Repository->find($id);

        if (empty($p3aulac1m1)) {
            Flash::error('P3Aulac1M1 not found');

            return redirect(route('p3aulac1m1s.index'));
        }

        $this->p3aulac1m1Repository->delete($id);

        Flash::success('P3Aulac1M1 deleted successfully.');

        return redirect(route('p3aulac1m1s.index'));
    }
}
