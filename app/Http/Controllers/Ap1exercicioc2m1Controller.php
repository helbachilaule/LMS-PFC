<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp1exercicioc2m1Request;
use App\Http\Requests\UpdateAp1exercicioc2m1Request;
use App\Repositories\Ap1exercicioc2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap1exercicioc2m1Controller extends AppBaseController
{
    /** @var  Ap1exercicioc2m1Repository */
    private $ap1exercicioc2m1Repository;

    public function __construct(Ap1exercicioc2m1Repository $ap1exercicioc2m1Repo)
    {
        $this->ap1exercicioc2m1Repository = $ap1exercicioc2m1Repo;
    }

    /**
     * Display a listing of the Ap1exercicioc2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap1exercicioc2m1s = $this->ap1exercicioc2m1Repository->all();

        return view('ap1exercicioc2m1s.index')
            ->with('ap1exercicioc2m1s', $ap1exercicioc2m1s);
    }

    /**
     * Show the form for creating a new Ap1exercicioc2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap1exercicioc2m1s.create');
    }

    /**
     * Store a newly created Ap1exercicioc2m1 in storage.
     *
     * @param CreateAp1exercicioc2m1Request $request
     *
     * @return Response
     */
    public function store(CreateAp1exercicioc2m1Request $request)
    {
        $input = $request->all();

        $ap1exercicioc2m1 = $this->ap1exercicioc2m1Repository->create($input);

        Flash::success('Ap1Exercicioc2M1 saved successfully.');

        return redirect(route('ap1exercicioc2m1s.index'));
    }

    /**
     * Display the specified Ap1exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap1exercicioc2m1 = $this->ap1exercicioc2m1Repository->find($id);

        if (empty($ap1exercicioc2m1)) {
            Flash::error('Ap1Exercicioc2M1 not found');

            return redirect(route('ap1exercicioc2m1s.index'));
        }

        return view('ap1exercicioc2m1s.show')->with('ap1exercicioc2m1', $ap1exercicioc2m1);
    }

    /**
     * Show the form for editing the specified Ap1exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap1exercicioc2m1 = $this->ap1exercicioc2m1Repository->find($id);

        if (empty($ap1exercicioc2m1)) {
            Flash::error('Ap1Exercicioc2M1 not found');

            return redirect(route('ap1exercicioc2m1s.index'));
        }

        return view('ap1exercicioc2m1s.edit')->with('ap1exercicioc2m1', $ap1exercicioc2m1);
    }

    /**
     * Update the specified Ap1exercicioc2m1 in storage.
     *
     * @param int $id
     * @param UpdateAp1exercicioc2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp1exercicioc2m1Request $request)
    {
        $ap1exercicioc2m1 = $this->ap1exercicioc2m1Repository->find($id);

        if (empty($ap1exercicioc2m1)) {
            Flash::error('Ap1Exercicioc2M1 not found');

            return redirect(route('ap1exercicioc2m1s.index'));
        }

        $ap1exercicioc2m1 = $this->ap1exercicioc2m1Repository->update($request->all(), $id);

        Flash::success('Ap1Exercicioc2M1 updated successfully.');

        return redirect(route('ap1exercicioc2m1s.index'));
    }

    /**
     * Remove the specified Ap1exercicioc2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap1exercicioc2m1 = $this->ap1exercicioc2m1Repository->find($id);

        if (empty($ap1exercicioc2m1)) {
            Flash::error('Ap1Exercicioc2M1 not found');

            return redirect(route('ap1exercicioc2m1s.index'));
        }

        $this->ap1exercicioc2m1Repository->delete($id);

        Flash::success('Ap1Exercicioc2M1 deleted successfully.');

        return redirect(route('ap1exercicioc2m1s.index'));
    }
}
