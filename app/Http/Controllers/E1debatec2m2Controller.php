<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE1debatec2m2Request;
use App\Http\Requests\UpdateE1debatec2m2Request;
use App\Repositories\E1debatec2m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E1debatec2m2Controller extends AppBaseController
{
    /** @var  E1debatec2m2Repository */
    private $e1debatec2m2Repository;

    public function __construct(E1debatec2m2Repository $e1debatec2m2Repo)
    {
        $this->e1debatec2m2Repository = $e1debatec2m2Repo;
    }

    /**
     * Display a listing of the E1debatec2m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e1debatec2m2s = $this->e1debatec2m2Repository->all();

        return view('e1debatec2m2s.index')
            ->with('e1debatec2m2s', $e1debatec2m2s);
    }

    /**
     * Show the form for creating a new E1debatec2m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('e1debatec2m2s.create');
    }

    /**
     * Store a newly created E1debatec2m2 in storage.
     *
     * @param CreateE1debatec2m2Request $request
     *
     * @return Response
     */
    public function store(CreateE1debatec2m2Request $request)
    {
        $input = $request->all();

        $e1debatec2m2 = $this->e1debatec2m2Repository->create($input);

        Flash::success('E1Debatec2M2 saved successfully.');

        return redirect(route('e1debatec2m2s.index'));
    }

    /**
     * Display the specified E1debatec2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e1debatec2m2 = $this->e1debatec2m2Repository->find($id);

        if (empty($e1debatec2m2)) {
            Flash::error('E1Debatec2M2 not found');

            return redirect(route('e1debatec2m2s.index'));
        }

        return view('e1debatec2m2s.show')->with('e1debatec2m2', $e1debatec2m2);
    }

    /**
     * Show the form for editing the specified E1debatec2m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e1debatec2m2 = $this->e1debatec2m2Repository->find($id);

        if (empty($e1debatec2m2)) {
            Flash::error('E1Debatec2M2 not found');

            return redirect(route('e1debatec2m2s.index'));
        }

        return view('e1debatec2m2s.edit')->with('e1debatec2m2', $e1debatec2m2);
    }

    /**
     * Update the specified E1debatec2m2 in storage.
     *
     * @param int $id
     * @param UpdateE1debatec2m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE1debatec2m2Request $request)
    {
        $e1debatec2m2 = $this->e1debatec2m2Repository->find($id);

        if (empty($e1debatec2m2)) {
            Flash::error('E1Debatec2M2 not found');

            return redirect(route('e1debatec2m2s.index'));
        }

        $e1debatec2m2 = $this->e1debatec2m2Repository->update($request->all(), $id);

        Flash::success('E1Debatec2M2 updated successfully.');

        return redirect(route('e1debatec2m2s.index'));
    }

    /**
     * Remove the specified E1debatec2m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e1debatec2m2 = $this->e1debatec2m2Repository->find($id);

        if (empty($e1debatec2m2)) {
            Flash::error('E1Debatec2M2 not found');

            return redirect(route('e1debatec2m2s.index'));
        }

        $this->e1debatec2m2Repository->delete($id);

        Flash::success('E1Debatec2M2 deleted successfully.');

        return redirect(route('e1debatec2m2s.index'));
    }
}
