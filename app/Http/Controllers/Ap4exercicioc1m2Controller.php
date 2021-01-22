<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp4exercicioc1m2Request;
use App\Http\Requests\UpdateAp4exercicioc1m2Request;
use App\Repositories\Ap4exercicioc1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap4exercicioc1m2Controller extends AppBaseController
{
    /** @var  Ap4exercicioc1m2Repository */
    private $ap4exercicioc1m2Repository;

    public function __construct(Ap4exercicioc1m2Repository $ap4exercicioc1m2Repo)
    {
        $this->ap4exercicioc1m2Repository = $ap4exercicioc1m2Repo;
    }

    /**
     * Display a listing of the Ap4exercicioc1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap4exercicioc1m2s = $this->ap4exercicioc1m2Repository->all();

        return view('ap4exercicioc1m2s.index')
            ->with('ap4exercicioc1m2s', $ap4exercicioc1m2s);
    }

    /**
     * Show the form for creating a new Ap4exercicioc1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap4exercicioc1m2s.create');
    }

    /**
     * Store a newly created Ap4exercicioc1m2 in storage.
     *
     * @param CreateAp4exercicioc1m2Request $request
     *
     * @return Response
     */
    public function store(CreateAp4exercicioc1m2Request $request)
    {
        $input = $request->all();

        $ap4exercicioc1m2 = $this->ap4exercicioc1m2Repository->create($input);

        Flash::success('Ap4Exercicioc1M2 saved successfully.');

        return redirect(route('ap4exercicioc1m2s.index'));
    }

    /**
     * Display the specified Ap4exercicioc1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap4exercicioc1m2 = $this->ap4exercicioc1m2Repository->find($id);

        if (empty($ap4exercicioc1m2)) {
            Flash::error('Ap4Exercicioc1M2 not found');

            return redirect(route('ap4exercicioc1m2s.index'));
        }

        return view('ap4exercicioc1m2s.show')->with('ap4exercicioc1m2', $ap4exercicioc1m2);
    }

    /**
     * Show the form for editing the specified Ap4exercicioc1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap4exercicioc1m2 = $this->ap4exercicioc1m2Repository->find($id);

        if (empty($ap4exercicioc1m2)) {
            Flash::error('Ap4Exercicioc1M2 not found');

            return redirect(route('ap4exercicioc1m2s.index'));
        }

        return view('ap4exercicioc1m2s.edit')->with('ap4exercicioc1m2', $ap4exercicioc1m2);
    }

    /**
     * Update the specified Ap4exercicioc1m2 in storage.
     *
     * @param int $id
     * @param UpdateAp4exercicioc1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp4exercicioc1m2Request $request)
    {
        $ap4exercicioc1m2 = $this->ap4exercicioc1m2Repository->find($id);

        if (empty($ap4exercicioc1m2)) {
            Flash::error('Ap4Exercicioc1M2 not found');

            return redirect(route('ap4exercicioc1m2s.index'));
        }

        $ap4exercicioc1m2 = $this->ap4exercicioc1m2Repository->update($request->all(), $id);

        Flash::success('Ap4Exercicioc1M2 updated successfully.');

        return redirect(route('ap4exercicioc1m2s.index'));
    }

    /**
     * Remove the specified Ap4exercicioc1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap4exercicioc1m2 = $this->ap4exercicioc1m2Repository->find($id);

        if (empty($ap4exercicioc1m2)) {
            Flash::error('Ap4Exercicioc1M2 not found');

            return redirect(route('ap4exercicioc1m2s.index'));
        }

        $this->ap4exercicioc1m2Repository->delete($id);

        Flash::success('Ap4Exercicioc1M2 deleted successfully.');

        return redirect(route('ap4exercicioc1m2s.index'));
    }
}
