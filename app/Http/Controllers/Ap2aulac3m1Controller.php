<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp2aulac3m1Request;
use App\Http\Requests\UpdateAp2aulac3m1Request;
use App\Repositories\Ap2aulac3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap2aulac3m1Controller extends AppBaseController
{
    /** @var  Ap2aulac3m1Repository */
    private $ap2aulac3m1Repository;

    public function __construct(Ap2aulac3m1Repository $ap2aulac3m1Repo)
    {
        $this->ap2aulac3m1Repository = $ap2aulac3m1Repo;
    }

    /**
     * Display a listing of the Ap2aulac3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap2aulac3m1s = $this->ap2aulac3m1Repository->all();

        return view('ap2aulac3m1s.index')
            ->with('ap2aulac3m1s', $ap2aulac3m1s);
    }

    /**
     * Show the form for creating a new Ap2aulac3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap2aulac3m1s.create');
    }

    /**
     * Store a newly created Ap2aulac3m1 in storage.
     *
     * @param CreateAp2aulac3m1Request $request
     *
     * @return Response
     */
    public function store(CreateAp2aulac3m1Request $request)
    {
        $input = $request->all();

        $ap2aulac3m1 = $this->ap2aulac3m1Repository->create($input);

        Flash::success('Ap2Aulac3M1 saved successfully.');

        return redirect(route('ap2aulac3m1s.index'));
    }

    /**
     * Display the specified Ap2aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap2aulac3m1 = $this->ap2aulac3m1Repository->find($id);

        if (empty($ap2aulac3m1)) {
            Flash::error('Ap2Aulac3M1 not found');

            return redirect(route('ap2aulac3m1s.index'));
        }

        return view('ap2aulac3m1s.show')->with('ap2aulac3m1', $ap2aulac3m1);
    }

    /**
     * Show the form for editing the specified Ap2aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap2aulac3m1 = $this->ap2aulac3m1Repository->find($id);

        if (empty($ap2aulac3m1)) {
            Flash::error('Ap2Aulac3M1 not found');

            return redirect(route('ap2aulac3m1s.index'));
        }

        return view('ap2aulac3m1s.edit')->with('ap2aulac3m1', $ap2aulac3m1);
    }

    /**
     * Update the specified Ap2aulac3m1 in storage.
     *
     * @param int $id
     * @param UpdateAp2aulac3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp2aulac3m1Request $request)
    {
        $ap2aulac3m1 = $this->ap2aulac3m1Repository->find($id);

        if (empty($ap2aulac3m1)) {
            Flash::error('Ap2Aulac3M1 not found');

            return redirect(route('ap2aulac3m1s.index'));
        }

        $ap2aulac3m1 = $this->ap2aulac3m1Repository->update($request->all(), $id);

        Flash::success('Ap2Aulac3M1 updated successfully.');

        return redirect(route('ap2aulac3m1s.index'));
    }

    /**
     * Remove the specified Ap2aulac3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap2aulac3m1 = $this->ap2aulac3m1Repository->find($id);

        if (empty($ap2aulac3m1)) {
            Flash::error('Ap2Aulac3M1 not found');

            return redirect(route('ap2aulac3m1s.index'));
        }

        $this->ap2aulac3m1Repository->delete($id);

        Flash::success('Ap2Aulac3M1 deleted successfully.');

        return redirect(route('ap2aulac3m1s.index'));
    }
}
