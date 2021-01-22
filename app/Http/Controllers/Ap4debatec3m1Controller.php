<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp4debatec3m1Request;
use App\Http\Requests\UpdateAp4debatec3m1Request;
use App\Repositories\Ap4debatec3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap4debatec3m1Controller extends AppBaseController
{
    /** @var  Ap4debatec3m1Repository */
    private $ap4debatec3m1Repository;

    public function __construct(Ap4debatec3m1Repository $ap4debatec3m1Repo)
    {
        $this->ap4debatec3m1Repository = $ap4debatec3m1Repo;
    }

    /**
     * Display a listing of the Ap4debatec3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap4debatec3m1s = $this->ap4debatec3m1Repository->all();

        return view('ap4debatec3m1s.index')
            ->with('ap4debatec3m1s', $ap4debatec3m1s);
    }

    /**
     * Show the form for creating a new Ap4debatec3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap4debatec3m1s.create');
    }

    /**
     * Store a newly created Ap4debatec3m1 in storage.
     *
     * @param CreateAp4debatec3m1Request $request
     *
     * @return Response
     */
    public function store(CreateAp4debatec3m1Request $request)
    {
        $input = $request->all();

        $ap4debatec3m1 = $this->ap4debatec3m1Repository->create($input);

        Flash::success('Ap4Debatec3M1 saved successfully.');

        return redirect(route('ap4debatec3m1s.index'));
    }

    /**
     * Display the specified Ap4debatec3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap4debatec3m1 = $this->ap4debatec3m1Repository->find($id);

        if (empty($ap4debatec3m1)) {
            Flash::error('Ap4Debatec3M1 not found');

            return redirect(route('ap4debatec3m1s.index'));
        }

        return view('ap4debatec3m1s.show')->with('ap4debatec3m1', $ap4debatec3m1);
    }

    /**
     * Show the form for editing the specified Ap4debatec3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap4debatec3m1 = $this->ap4debatec3m1Repository->find($id);

        if (empty($ap4debatec3m1)) {
            Flash::error('Ap4Debatec3M1 not found');

            return redirect(route('ap4debatec3m1s.index'));
        }

        return view('ap4debatec3m1s.edit')->with('ap4debatec3m1', $ap4debatec3m1);
    }

    /**
     * Update the specified Ap4debatec3m1 in storage.
     *
     * @param int $id
     * @param UpdateAp4debatec3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp4debatec3m1Request $request)
    {
        $ap4debatec3m1 = $this->ap4debatec3m1Repository->find($id);

        if (empty($ap4debatec3m1)) {
            Flash::error('Ap4Debatec3M1 not found');

            return redirect(route('ap4debatec3m1s.index'));
        }

        $ap4debatec3m1 = $this->ap4debatec3m1Repository->update($request->all(), $id);

        Flash::success('Ap4Debatec3M1 updated successfully.');

        return redirect(route('ap4debatec3m1s.index'));
    }

    /**
     * Remove the specified Ap4debatec3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap4debatec3m1 = $this->ap4debatec3m1Repository->find($id);

        if (empty($ap4debatec3m1)) {
            Flash::error('Ap4Debatec3M1 not found');

            return redirect(route('ap4debatec3m1s.index'));
        }

        $this->ap4debatec3m1Repository->delete($id);

        Flash::success('Ap4Debatec3M1 deleted successfully.');

        return redirect(route('ap4debatec3m1s.index'));
    }
}
