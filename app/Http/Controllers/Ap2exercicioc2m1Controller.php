<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp2exercicioc2m1Request;
use App\Http\Requests\UpdateAp2exercicioc2m1Request;
use App\Repositories\Ap2exercicioc2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap2exercicioc2m1Controller extends AppBaseController
{
    /** @var  Ap2exercicioc2m1Repository */
    private $ap2exercicioc2m1Repository;

    public function __construct(Ap2exercicioc2m1Repository $ap2exercicioc2m1Repo)
    {
        $this->ap2exercicioc2m1Repository = $ap2exercicioc2m1Repo;
    }

    /**
     * Display a listing of the Ap2exercicioc2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap2exercicioc2m1s = $this->ap2exercicioc2m1Repository->all();

        return view('ap2exercicioc2m1s.index')
            ->with('ap2exercicioc2m1s', $ap2exercicioc2m1s);
    }

    /**
     * Show the form for creating a new Ap2exercicioc2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap2exercicioc2m1s.create');
    }

    /**
     * Store a newly created Ap2exercicioc2m1 in storage.
     *
     * @param CreateAp2exercicioc2m1Request $request
     *
     * @return Response
     */
    public function store(CreateAp2exercicioc2m1Request $request)
    {
        $input = $request->all();

        $ap2exercicioc2m1 = $this->ap2exercicioc2m1Repository->create($input);

        Flash::success('Ap2Exercicioc2M1 saved successfully.');

        return redirect(route('ap2exercicioc2m1s.index'));
    }

    /**
     * Display the specified Ap2exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap2exercicioc2m1 = $this->ap2exercicioc2m1Repository->find($id);

        if (empty($ap2exercicioc2m1)) {
            Flash::error('Ap2Exercicioc2M1 not found');

            return redirect(route('ap2exercicioc2m1s.index'));
        }

        return view('ap2exercicioc2m1s.show')->with('ap2exercicioc2m1', $ap2exercicioc2m1);
    }

    /**
     * Show the form for editing the specified Ap2exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap2exercicioc2m1 = $this->ap2exercicioc2m1Repository->find($id);

        if (empty($ap2exercicioc2m1)) {
            Flash::error('Ap2Exercicioc2M1 not found');

            return redirect(route('ap2exercicioc2m1s.index'));
        }

        return view('ap2exercicioc2m1s.edit')->with('ap2exercicioc2m1', $ap2exercicioc2m1);
    }

    /**
     * Update the specified Ap2exercicioc2m1 in storage.
     *
     * @param int $id
     * @param UpdateAp2exercicioc2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp2exercicioc2m1Request $request)
    {
        $ap2exercicioc2m1 = $this->ap2exercicioc2m1Repository->find($id);

        if (empty($ap2exercicioc2m1)) {
            Flash::error('Ap2Exercicioc2M1 not found');

            return redirect(route('ap2exercicioc2m1s.index'));
        }

        $ap2exercicioc2m1 = $this->ap2exercicioc2m1Repository->update($request->all(), $id);

        Flash::success('Ap2Exercicioc2M1 updated successfully.');

        return redirect(route('ap2exercicioc2m1s.index'));
    }

    /**
     * Remove the specified Ap2exercicioc2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap2exercicioc2m1 = $this->ap2exercicioc2m1Repository->find($id);

        if (empty($ap2exercicioc2m1)) {
            Flash::error('Ap2Exercicioc2M1 not found');

            return redirect(route('ap2exercicioc2m1s.index'));
        }

        $this->ap2exercicioc2m1Repository->delete($id);

        Flash::success('Ap2Exercicioc2M1 deleted successfully.');

        return redirect(route('ap2exercicioc2m1s.index'));
    }
}
