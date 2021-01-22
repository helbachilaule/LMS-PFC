<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp3exercicioc2m2Request;
use App\Http\Requests\UpdateAp3exercicioc2m2Request;
use App\Repositories\Ap3exercicioc2m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap3exercicioc2m2Controller extends AppBaseController
{
    /** @var  Ap3exercicioc2m2Repository */
    private $ap3exercicioc2m2Repository;

    public function __construct(Ap3exercicioc2m2Repository $ap3exercicioc2m2Repo)
    {
        $this->ap3exercicioc2m2Repository = $ap3exercicioc2m2Repo;
    }

    /**
     * Display a listing of the Ap3exercicioc2m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap3exercicioc2m2s = $this->ap3exercicioc2m2Repository->all();

        return view('ap3exercicioc2m2s.index')
            ->with('ap3exercicioc2m2s', $ap3exercicioc2m2s);
    }

    /**
     * Show the form for creating a new Ap3exercicioc2m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap3exercicioc2m2s.create');
    }

    /**
     * Store a newly created Ap3exercicioc2m2 in storage.
     *
     * @param CreateAp3exercicioc2m2Request $request
     *
     * @return Response
     */
    public function store(CreateAp3exercicioc2m2Request $request)
    {
        $input = $request->all();

        $ap3exercicioc2m2 = $this->ap3exercicioc2m2Repository->create($input);

        Flash::success('Ap3Exercicioc2M2 saved successfully.');

        return redirect(route('ap3exercicioc2m2s.index'));
    }

    /**
     * Display the specified Ap3exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap3exercicioc2m2 = $this->ap3exercicioc2m2Repository->find($id);

        if (empty($ap3exercicioc2m2)) {
            Flash::error('Ap3Exercicioc2M2 not found');

            return redirect(route('ap3exercicioc2m2s.index'));
        }

        return view('ap3exercicioc2m2s.show')->with('ap3exercicioc2m2', $ap3exercicioc2m2);
    }

    /**
     * Show the form for editing the specified Ap3exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap3exercicioc2m2 = $this->ap3exercicioc2m2Repository->find($id);

        if (empty($ap3exercicioc2m2)) {
            Flash::error('Ap3Exercicioc2M2 not found');

            return redirect(route('ap3exercicioc2m2s.index'));
        }

        return view('ap3exercicioc2m2s.edit')->with('ap3exercicioc2m2', $ap3exercicioc2m2);
    }

    /**
     * Update the specified Ap3exercicioc2m2 in storage.
     *
     * @param int $id
     * @param UpdateAp3exercicioc2m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp3exercicioc2m2Request $request)
    {
        $ap3exercicioc2m2 = $this->ap3exercicioc2m2Repository->find($id);

        if (empty($ap3exercicioc2m2)) {
            Flash::error('Ap3Exercicioc2M2 not found');

            return redirect(route('ap3exercicioc2m2s.index'));
        }

        $ap3exercicioc2m2 = $this->ap3exercicioc2m2Repository->update($request->all(), $id);

        Flash::success('Ap3Exercicioc2M2 updated successfully.');

        return redirect(route('ap3exercicioc2m2s.index'));
    }

    /**
     * Remove the specified Ap3exercicioc2m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap3exercicioc2m2 = $this->ap3exercicioc2m2Repository->find($id);

        if (empty($ap3exercicioc2m2)) {
            Flash::error('Ap3Exercicioc2M2 not found');

            return redirect(route('ap3exercicioc2m2s.index'));
        }

        $this->ap3exercicioc2m2Repository->delete($id);

        Flash::success('Ap3Exercicioc2M2 deleted successfully.');

        return redirect(route('ap3exercicioc2m2s.index'));
    }
}
