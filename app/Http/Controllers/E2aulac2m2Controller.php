<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE2aulac2m2Request;
use App\Http\Requests\UpdateE2aulac2m2Request;
use App\Repositories\E2aulac2m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E2aulac2m2Controller extends AppBaseController
{
    /** @var  E2aulac2m2Repository */
    private $e2aulac2m2Repository;

    public function __construct(E2aulac2m2Repository $e2aulac2m2Repo)
    {
        $this->e2aulac2m2Repository = $e2aulac2m2Repo;
    }

    /**
     * Display a listing of the E2aulac2m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e2aulac2m2s = $this->e2aulac2m2Repository->all();

        return view('e2aulac2m2s.index')
            ->with('e2aulac2m2s', $e2aulac2m2s);
    }

    /**
     * Show the form for creating a new E2aulac2m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('e2aulac2m2s.create');
    }

    /**
     * Store a newly created E2aulac2m2 in storage.
     *
     * @param CreateE2aulac2m2Request $request
     *
     * @return Response
     */
    public function store(CreateE2aulac2m2Request $request)
    {
        $input = $request->all();

        $e2aulac2m2 = $this->e2aulac2m2Repository->create($input);

        Flash::success('E2Aulac2M2 saved successfully.');

        return redirect(route('e2aulac2m2s.index'));
    }

    /**
     * Display the specified E2aulac2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e2aulac2m2 = $this->e2aulac2m2Repository->find($id);

        if (empty($e2aulac2m2)) {
            Flash::error('E2Aulac2M2 not found');

            return redirect(route('e2aulac2m2s.index'));
        }

        return view('e2aulac2m2s.show')->with('e2aulac2m2', $e2aulac2m2);
    }

    /**
     * Show the form for editing the specified E2aulac2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e2aulac2m2 = $this->e2aulac2m2Repository->find($id);

        if (empty($e2aulac2m2)) {
            Flash::error('E2Aulac2M2 not found');

            return redirect(route('e2aulac2m2s.index'));
        }

        return view('e2aulac2m2s.edit')->with('e2aulac2m2', $e2aulac2m2);
    }

    /**
     * Update the specified E2aulac2m2 in storage.
     *
     * @param int $id
     * @param UpdateE2aulac2m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE2aulac2m2Request $request)
    {
        $e2aulac2m2 = $this->e2aulac2m2Repository->find($id);

        if (empty($e2aulac2m2)) {
            Flash::error('E2Aulac2M2 not found');

            return redirect(route('e2aulac2m2s.index'));
        }

        $e2aulac2m2 = $this->e2aulac2m2Repository->update($request->all(), $id);

        Flash::success('E2Aulac2M2 updated successfully.');

        return redirect(route('e2aulac2m2s.index'));
    }

    /**
     * Remove the specified E2aulac2m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e2aulac2m2 = $this->e2aulac2m2Repository->find($id);

        if (empty($e2aulac2m2)) {
            Flash::error('E2Aulac2M2 not found');

            return redirect(route('e2aulac2m2s.index'));
        }

        $this->e2aulac2m2Repository->delete($id);

        Flash::success('E2Aulac2M2 deleted successfully.');

        return redirect(route('e2aulac2m2s.index'));
    }
}
