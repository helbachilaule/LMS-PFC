<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp1exercicioc3m2Request;
use App\Http\Requests\UpdateAp1exercicioc3m2Request;
use App\Repositories\Ap1exercicioc3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap1exercicioc3m2Controller extends AppBaseController
{
    /** @var  Ap1exercicioc3m2Repository */
    private $ap1exercicioc3m2Repository;

    public function __construct(Ap1exercicioc3m2Repository $ap1exercicioc3m2Repo)
    {
        $this->ap1exercicioc3m2Repository = $ap1exercicioc3m2Repo;
    }

    /**
     * Display a listing of the Ap1exercicioc3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap1exercicioc3m2s = $this->ap1exercicioc3m2Repository->all();

        return view('ap1exercicioc3m2s.index')
            ->with('ap1exercicioc3m2s', $ap1exercicioc3m2s);
    }

    /**
     * Show the form for creating a new Ap1exercicioc3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap1exercicioc3m2s.create');
    }

    /**
     * Store a newly created Ap1exercicioc3m2 in storage.
     *
     * @param CreateAp1exercicioc3m2Request $request
     *
     * @return Response
     */
    public function store(CreateAp1exercicioc3m2Request $request)
    {
        $input = $request->all();

        $ap1exercicioc3m2 = $this->ap1exercicioc3m2Repository->create($input);

        Flash::success('Ap1Exercicioc3M2 saved successfully.');

        return redirect(route('ap1exercicioc3m2s.index'));
    }

    /**
     * Display the specified Ap1exercicioc3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap1exercicioc3m2 = $this->ap1exercicioc3m2Repository->find($id);

        if (empty($ap1exercicioc3m2)) {
            Flash::error('Ap1Exercicioc3M2 not found');

            return redirect(route('ap1exercicioc3m2s.index'));
        }

        return view('ap1exercicioc3m2s.show')->with('ap1exercicioc3m2', $ap1exercicioc3m2);
    }

    /**
     * Show the form for editing the specified Ap1exercicioc3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap1exercicioc3m2 = $this->ap1exercicioc3m2Repository->find($id);

        if (empty($ap1exercicioc3m2)) {
            Flash::error('Ap1Exercicioc3M2 not found');

            return redirect(route('ap1exercicioc3m2s.index'));
        }

        return view('ap1exercicioc3m2s.edit')->with('ap1exercicioc3m2', $ap1exercicioc3m2);
    }

    /**
     * Update the specified Ap1exercicioc3m2 in storage.
     *
     * @param int $id
     * @param UpdateAp1exercicioc3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp1exercicioc3m2Request $request)
    {
        $ap1exercicioc3m2 = $this->ap1exercicioc3m2Repository->find($id);

        if (empty($ap1exercicioc3m2)) {
            Flash::error('Ap1Exercicioc3M2 not found');

            return redirect(route('ap1exercicioc3m2s.index'));
        }

        $ap1exercicioc3m2 = $this->ap1exercicioc3m2Repository->update($request->all(), $id);

        Flash::success('Ap1Exercicioc3M2 updated successfully.');

        return redirect(route('ap1exercicioc3m2s.index'));
    }

    /**
     * Remove the specified Ap1exercicioc3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap1exercicioc3m2 = $this->ap1exercicioc3m2Repository->find($id);

        if (empty($ap1exercicioc3m2)) {
            Flash::error('Ap1Exercicioc3M2 not found');

            return redirect(route('ap1exercicioc3m2s.index'));
        }

        $this->ap1exercicioc3m2Repository->delete($id);

        Flash::success('Ap1Exercicioc3M2 deleted successfully.');

        return redirect(route('ap1exercicioc3m2s.index'));
    }
}
