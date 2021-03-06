<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp4exercicioc2m2Request;
use App\Http\Requests\UpdateAp4exercicioc2m2Request;
use App\Repositories\Ap4exercicioc2m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap4exercicioc2m2Controller extends AppBaseController
{
    /** @var  Ap4exercicioc2m2Repository */
    private $ap4exercicioc2m2Repository;

    public function __construct(Ap4exercicioc2m2Repository $ap4exercicioc2m2Repo)
    {
        $this->ap4exercicioc2m2Repository = $ap4exercicioc2m2Repo;
    }

    /**
     * Display a listing of the Ap4exercicioc2m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap4exercicioc2m2s = $this->ap4exercicioc2m2Repository->all();

        return view('ap4exercicioc2m2s.index')
            ->with('ap4exercicioc2m2s', $ap4exercicioc2m2s);
    }

    /**
     * Show the form for creating a new Ap4exercicioc2m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap4exercicioc2m2s.create');
    }

    /**
     * Store a newly created Ap4exercicioc2m2 in storage.
     *
     * @param CreateAp4exercicioc2m2Request $request
     *
     * @return Response
     */
    public function store(CreateAp4exercicioc2m2Request $request)
    {
        $input = $request->all();

        $ap4exercicioc2m2 = $this->ap4exercicioc2m2Repository->create($input);

        Flash::success('Ap4Exercicioc2M2 saved successfully.');

        return redirect(route('ap4exercicioc2m2s.index'));
    }

    /**
     * Display the specified Ap4exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap4exercicioc2m2 = $this->ap4exercicioc2m2Repository->find($id);

        if (empty($ap4exercicioc2m2)) {
            Flash::error('Ap4Exercicioc2M2 not found');

            return redirect(route('ap4exercicioc2m2s.index'));
        }

        return view('ap4exercicioc2m2s.show')->with('ap4exercicioc2m2', $ap4exercicioc2m2);
    }

    /**
     * Show the form for editing the specified Ap4exercicioc2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap4exercicioc2m2 = $this->ap4exercicioc2m2Repository->find($id);

        if (empty($ap4exercicioc2m2)) {
            Flash::error('Ap4Exercicioc2M2 not found');

            return redirect(route('ap4exercicioc2m2s.index'));
        }

        return view('ap4exercicioc2m2s.edit')->with('ap4exercicioc2m2', $ap4exercicioc2m2);
    }

    /**
     * Update the specified Ap4exercicioc2m2 in storage.
     *
     * @param int $id
     * @param UpdateAp4exercicioc2m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp4exercicioc2m2Request $request)
    {
        $ap4exercicioc2m2 = $this->ap4exercicioc2m2Repository->find($id);

        if (empty($ap4exercicioc2m2)) {
            Flash::error('Ap4Exercicioc2M2 not found');

            return redirect(route('ap4exercicioc2m2s.index'));
        }

        $ap4exercicioc2m2 = $this->ap4exercicioc2m2Repository->update($request->all(), $id);

        Flash::success('Ap4Exercicioc2M2 updated successfully.');

        return redirect(route('ap4exercicioc2m2s.index'));
    }

    /**
     * Remove the specified Ap4exercicioc2m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap4exercicioc2m2 = $this->ap4exercicioc2m2Repository->find($id);

        if (empty($ap4exercicioc2m2)) {
            Flash::error('Ap4Exercicioc2M2 not found');

            return redirect(route('ap4exercicioc2m2s.index'));
        }

        $this->ap4exercicioc2m2Repository->delete($id);

        Flash::success('Ap4Exercicioc2M2 deleted successfully.');

        return redirect(route('ap4exercicioc2m2s.index'));
    }
}
