<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp1aulac3m1Request;
use App\Http\Requests\UpdateAp1aulac3m1Request;
use App\Repositories\Ap1aulac3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap1aulac3m1Controller extends AppBaseController
{
    /** @var  Ap1aulac3m1Repository */
    private $ap1aulac3m1Repository;

    public function __construct(Ap1aulac3m1Repository $ap1aulac3m1Repo)
    {
        $this->ap1aulac3m1Repository = $ap1aulac3m1Repo;
    }

    /**
     * Display a listing of the Ap1aulac3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap1aulac3m1s = $this->ap1aulac3m1Repository->all();

        return view('ap1aulac3m1s.index')
            ->with('ap1aulac3m1s', $ap1aulac3m1s);
    }

    /**
     * Show the form for creating a new Ap1aulac3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap1aulac3m1s.create');
    }

    /**
     * Store a newly created Ap1aulac3m1 in storage.
     *
     * @param CreateAp1aulac3m1Request $request
     *
     * @return Response
     */
    public function store(CreateAp1aulac3m1Request $request)
    {
        $input = $request->all();

        $ap1aulac3m1 = $this->ap1aulac3m1Repository->create($input);

        Flash::success('Ap1Aulac3M1 saved successfully.');

        return redirect(route('ap1aulac3m1s.index'));
    }

    /**
     * Display the specified Ap1aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap1aulac3m1 = $this->ap1aulac3m1Repository->find($id);

        if (empty($ap1aulac3m1)) {
            Flash::error('Ap1Aulac3M1 not found');

            return redirect(route('ap1aulac3m1s.index'));
        }

        return view('ap1aulac3m1s.show')->with('ap1aulac3m1', $ap1aulac3m1);
    }

    /**
     * Show the form for editing the specified Ap1aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap1aulac3m1 = $this->ap1aulac3m1Repository->find($id);

        if (empty($ap1aulac3m1)) {
            Flash::error('Ap1Aulac3M1 not found');

            return redirect(route('ap1aulac3m1s.index'));
        }

        return view('ap1aulac3m1s.edit')->with('ap1aulac3m1', $ap1aulac3m1);
    }

    /**
     * Update the specified Ap1aulac3m1 in storage.
     *
     * @param int $id
     * @param UpdateAp1aulac3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp1aulac3m1Request $request)
    {
        $ap1aulac3m1 = $this->ap1aulac3m1Repository->find($id);

        if (empty($ap1aulac3m1)) {
            Flash::error('Ap1Aulac3M1 not found');

            return redirect(route('ap1aulac3m1s.index'));
        }

        $ap1aulac3m1 = $this->ap1aulac3m1Repository->update($request->all(), $id);

        Flash::success('Ap1Aulac3M1 updated successfully.');

        return redirect(route('ap1aulac3m1s.index'));
    }

    /**
     * Remove the specified Ap1aulac3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap1aulac3m1 = $this->ap1aulac3m1Repository->find($id);

        if (empty($ap1aulac3m1)) {
            Flash::error('Ap1Aulac3M1 not found');

            return redirect(route('ap1aulac3m1s.index'));
        }

        $this->ap1aulac3m1Repository->delete($id);

        Flash::success('Ap1Aulac3M1 deleted successfully.');

        return redirect(route('ap1aulac3m1s.index'));
    }
}
