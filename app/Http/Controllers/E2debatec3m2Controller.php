<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE2debatec3m2Request;
use App\Http\Requests\UpdateE2debatec3m2Request;
use App\Repositories\E2debatec3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E2debatec3m2Controller extends AppBaseController
{
    /** @var  E2debatec3m2Repository */
    private $e2debatec3m2Repository;

    public function __construct(E2debatec3m2Repository $e2debatec3m2Repo)
    {
        $this->e2debatec3m2Repository = $e2debatec3m2Repo;
    }

    /**
     * Display a listing of the E2debatec3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e2debatec3m2s = $this->e2debatec3m2Repository->all();

        return view('e2debatec3m2s.index')
            ->with('e2debatec3m2s', $e2debatec3m2s);
    }

    /**
     * Show the form for creating a new E2debatec3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('e2debatec3m2s.create');
    }

    /**
     * Store a newly created E2debatec3m2 in storage.
     *
     * @param CreateE2debatec3m2Request $request
     *
     * @return Response
     */
    public function store(CreateE2debatec3m2Request $request)
    {
        $input = $request->all();

        $e2debatec3m2 = $this->e2debatec3m2Repository->create($input);

        Flash::success('E2Debatec3M2 saved successfully.');

        return redirect(route('e2debatec3m2s.index'));
    }

    /**
     * Display the specified E2debatec3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e2debatec3m2 = $this->e2debatec3m2Repository->find($id);

        if (empty($e2debatec3m2)) {
            Flash::error('E2Debatec3M2 not found');

            return redirect(route('e2debatec3m2s.index'));
        }

        return view('e2debatec3m2s.show')->with('e2debatec3m2', $e2debatec3m2);
    }

    /**
     * Show the form for editing the specified E2debatec3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e2debatec3m2 = $this->e2debatec3m2Repository->find($id);

        if (empty($e2debatec3m2)) {
            Flash::error('E2Debatec3M2 not found');

            return redirect(route('e2debatec3m2s.index'));
        }

        return view('e2debatec3m2s.edit')->with('e2debatec3m2', $e2debatec3m2);
    }

    /**
     * Update the specified E2debatec3m2 in storage.
     *
     * @param int $id
     * @param UpdateE2debatec3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE2debatec3m2Request $request)
    {
        $e2debatec3m2 = $this->e2debatec3m2Repository->find($id);

        if (empty($e2debatec3m2)) {
            Flash::error('E2Debatec3M2 not found');

            return redirect(route('e2debatec3m2s.index'));
        }

        $e2debatec3m2 = $this->e2debatec3m2Repository->update($request->all(), $id);

        Flash::success('E2Debatec3M2 updated successfully.');

        return redirect(route('e2debatec3m2s.index'));
    }

    /**
     * Remove the specified E2debatec3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e2debatec3m2 = $this->e2debatec3m2Repository->find($id);

        if (empty($e2debatec3m2)) {
            Flash::error('E2Debatec3M2 not found');

            return redirect(route('e2debatec3m2s.index'));
        }

        $this->e2debatec3m2Repository->delete($id);

        Flash::success('E2Debatec3M2 deleted successfully.');

        return redirect(route('e2debatec3m2s.index'));
    }
}
