<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE2debatec1m2Request;
use App\Http\Requests\UpdateE2debatec1m2Request;
use App\Repositories\E2debatec1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E2debatec1m2Controller extends AppBaseController
{
    /** @var  E2debatec1m2Repository */
    private $e2debatec1m2Repository;

    public function __construct(E2debatec1m2Repository $e2debatec1m2Repo)
    {
        $this->e2debatec1m2Repository = $e2debatec1m2Repo;
    }

    /**
     * Display a listing of the E2debatec1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e2debatec1m2s = $this->e2debatec1m2Repository->all();

        return view('e2debatec1m2s.index')
            ->with('e2debatec1m2s', $e2debatec1m2s);
    }

    /**
     * Show the form for creating a new E2debatec1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('e2debatec1m2s.create');
    }

    /**
     * Store a newly created E2debatec1m2 in storage.
     *
     * @param CreateE2debatec1m2Request $request
     *
     * @return Response
     */
    public function store(CreateE2debatec1m2Request $request)
    {
        $input = $request->all();

        $e2debatec1m2 = $this->e2debatec1m2Repository->create($input);

        Flash::success('E2Debatec1M2 saved successfully.');

        return redirect(route('e2debatec1m2s.index'));
    }

    /**
     * Display the specified E2debatec1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e2debatec1m2 = $this->e2debatec1m2Repository->find($id);

        if (empty($e2debatec1m2)) {
            Flash::error('E2Debatec1M2 not found');

            return redirect(route('e2debatec1m2s.index'));
        }

        return view('e2debatec1m2s.show')->with('e2debatec1m2', $e2debatec1m2);
    }

    /**
     * Show the form for editing the specified E2debatec1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e2debatec1m2 = $this->e2debatec1m2Repository->find($id);

        if (empty($e2debatec1m2)) {
            Flash::error('E2Debatec1M2 not found');

            return redirect(route('e2debatec1m2s.index'));
        }

        return view('e2debatec1m2s.edit')->with('e2debatec1m2', $e2debatec1m2);
    }

    /**
     * Update the specified E2debatec1m2 in storage.
     *
     * @param int $id
     * @param UpdateE2debatec1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE2debatec1m2Request $request)
    {
        $e2debatec1m2 = $this->e2debatec1m2Repository->find($id);

        if (empty($e2debatec1m2)) {
            Flash::error('E2Debatec1M2 not found');

            return redirect(route('e2debatec1m2s.index'));
        }

        $e2debatec1m2 = $this->e2debatec1m2Repository->update($request->all(), $id);

        Flash::success('E2Debatec1M2 updated successfully.');

        return redirect(route('e2debatec1m2s.index'));
    }

    /**
     * Remove the specified E2debatec1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e2debatec1m2 = $this->e2debatec1m2Repository->find($id);

        if (empty($e2debatec1m2)) {
            Flash::error('E2Debatec1M2 not found');

            return redirect(route('e2debatec1m2s.index'));
        }

        $this->e2debatec1m2Repository->delete($id);

        Flash::success('E2Debatec1M2 deleted successfully.');

        return redirect(route('e2debatec1m2s.index'));
    }
}
