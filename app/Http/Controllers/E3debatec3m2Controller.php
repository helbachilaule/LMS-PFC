<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE3debatec3m2Request;
use App\Http\Requests\UpdateE3debatec3m2Request;
use App\Repositories\E3debatec3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E3debatec3m2Controller extends AppBaseController
{
    /** @var  E3debatec3m2Repository */
    private $e3debatec3m2Repository;

    public function __construct(E3debatec3m2Repository $e3debatec3m2Repo)
    {
        $this->e3debatec3m2Repository = $e3debatec3m2Repo;
    }

    /**
     * Display a listing of the E3debatec3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e3debatec3m2s = $this->e3debatec3m2Repository->all();

        return view('e3debatec3m2s.index')
            ->with('e3debatec3m2s', $e3debatec3m2s);
    }

    /**
     * Show the form for creating a new E3debatec3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('e3debatec3m2s.create');
    }

    /**
     * Store a newly created E3debatec3m2 in storage.
     *
     * @param CreateE3debatec3m2Request $request
     *
     * @return Response
     */
    public function store(CreateE3debatec3m2Request $request)
    {
        $input = $request->all();

        $e3debatec3m2 = $this->e3debatec3m2Repository->create($input);

        Flash::success('E3Debatec3M2 saved successfully.');

        return redirect(route('e3debatec3m2s.index'));
    }

    /**
     * Display the specified E3debatec3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e3debatec3m2 = $this->e3debatec3m2Repository->find($id);

        if (empty($e3debatec3m2)) {
            Flash::error('E3Debatec3M2 not found');

            return redirect(route('e3debatec3m2s.index'));
        }

        return view('e3debatec3m2s.show')->with('e3debatec3m2', $e3debatec3m2);
    }

    /**
     * Show the form for editing the specified E3debatec3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e3debatec3m2 = $this->e3debatec3m2Repository->find($id);

        if (empty($e3debatec3m2)) {
            Flash::error('E3Debatec3M2 not found');

            return redirect(route('e3debatec3m2s.index'));
        }

        return view('e3debatec3m2s.edit')->with('e3debatec3m2', $e3debatec3m2);
    }

    /**
     * Update the specified E3debatec3m2 in storage.
     *
     * @param int $id
     * @param UpdateE3debatec3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE3debatec3m2Request $request)
    {
        $e3debatec3m2 = $this->e3debatec3m2Repository->find($id);

        if (empty($e3debatec3m2)) {
            Flash::error('E3Debatec3M2 not found');

            return redirect(route('e3debatec3m2s.index'));
        }

        $e3debatec3m2 = $this->e3debatec3m2Repository->update($request->all(), $id);

        Flash::success('E3Debatec3M2 updated successfully.');

        return redirect(route('e3debatec3m2s.index'));
    }

    /**
     * Remove the specified E3debatec3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e3debatec3m2 = $this->e3debatec3m2Repository->find($id);

        if (empty($e3debatec3m2)) {
            Flash::error('E3Debatec3M2 not found');

            return redirect(route('e3debatec3m2s.index'));
        }

        $this->e3debatec3m2Repository->delete($id);

        Flash::success('E3Debatec3M2 deleted successfully.');

        return redirect(route('e3debatec3m2s.index'));
    }
}
