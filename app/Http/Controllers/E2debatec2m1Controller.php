<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE2debatec2m1Request;
use App\Http\Requests\UpdateE2debatec2m1Request;
use App\Repositories\E2debatec2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E2debatec2m1Controller extends AppBaseController
{
    /** @var  E2debatec2m1Repository */
    private $e2debatec2m1Repository;

    public function __construct(E2debatec2m1Repository $e2debatec2m1Repo)
    {
        $this->e2debatec2m1Repository = $e2debatec2m1Repo;
    }

    /**
     * Display a listing of the E2debatec2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e2debatec2m1s = $this->e2debatec2m1Repository->all();

        return view('e2debatec2m1s.index')
            ->with('e2debatec2m1s', $e2debatec2m1s);
    }

    /**
     * Show the form for creating a new E2debatec2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('e2debatec2m1s.create');
    }

    /**
     * Store a newly created E2debatec2m1 in storage.
     *
     * @param CreateE2debatec2m1Request $request
     *
     * @return Response
     */
    public function store(CreateE2debatec2m1Request $request)
    {
        $input = $request->all();

        $e2debatec2m1 = $this->e2debatec2m1Repository->create($input);

        Flash::success('E2Debatec2M1 saved successfully.');

        return redirect(route('e2debatec2m1s.index'));
    }

    /**
     * Display the specified E2debatec2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e2debatec2m1 = $this->e2debatec2m1Repository->find($id);

        if (empty($e2debatec2m1)) {
            Flash::error('E2Debatec2M1 not found');

            return redirect(route('e2debatec2m1s.index'));
        }

        return view('e2debatec2m1s.show')->with('e2debatec2m1', $e2debatec2m1);
    }

    /**
     * Show the form for editing the specified E2debatec2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e2debatec2m1 = $this->e2debatec2m1Repository->find($id);

        if (empty($e2debatec2m1)) {
            Flash::error('E2Debatec2M1 not found');

            return redirect(route('e2debatec2m1s.index'));
        }

        return view('e2debatec2m1s.edit')->with('e2debatec2m1', $e2debatec2m1);
    }

    /**
     * Update the specified E2debatec2m1 in storage.
     *
     * @param int $id
     * @param UpdateE2debatec2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE2debatec2m1Request $request)
    {
        $e2debatec2m1 = $this->e2debatec2m1Repository->find($id);

        if (empty($e2debatec2m1)) {
            Flash::error('E2Debatec2M1 not found');

            return redirect(route('e2debatec2m1s.index'));
        }

        $e2debatec2m1 = $this->e2debatec2m1Repository->update($request->all(), $id);

        Flash::success('E2Debatec2M1 updated successfully.');

        return redirect(route('e2debatec2m1s.index'));
    }

    /**
     * Remove the specified E2debatec2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e2debatec2m1 = $this->e2debatec2m1Repository->find($id);

        if (empty($e2debatec2m1)) {
            Flash::error('E2Debatec2M1 not found');

            return redirect(route('e2debatec2m1s.index'));
        }

        $this->e2debatec2m1Repository->delete($id);

        Flash::success('E2Debatec2M1 deleted successfully.');

        return redirect(route('e2debatec2m1s.index'));
    }
}
