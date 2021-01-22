<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE1debatec3m1Request;
use App\Http\Requests\UpdateE1debatec3m1Request;
use App\Repositories\E1debatec3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E1debatec3m1Controller extends AppBaseController
{
    /** @var  E1debatec3m1Repository */
    private $e1debatec3m1Repository;

    public function __construct(E1debatec3m1Repository $e1debatec3m1Repo)
    {
        $this->e1debatec3m1Repository = $e1debatec3m1Repo;
    }

    /**
     * Display a listing of the E1debatec3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e1debatec3m1s = $this->e1debatec3m1Repository->all();

        return view('e1debatec3m1s.index')
            ->with('e1debatec3m1s', $e1debatec3m1s);
    }

    /**
     * Show the form for creating a new E1debatec3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('e1debatec3m1s.create');
    }

    /**
     * Store a newly created E1debatec3m1 in storage.
     *
     * @param CreateE1debatec3m1Request $request
     *
     * @return Response
     */
    public function store(CreateE1debatec3m1Request $request)
    {
        $input = $request->all();

        $e1debatec3m1 = $this->e1debatec3m1Repository->create($input);

        Flash::success('E1Debatec3M1 saved successfully.');

        return redirect(route('e1debatec3m1s.index'));
    }

    /**
     * Display the specified E1debatec3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e1debatec3m1 = $this->e1debatec3m1Repository->find($id);

        if (empty($e1debatec3m1)) {
            Flash::error('E1Debatec3M1 not found');

            return redirect(route('e1debatec3m1s.index'));
        }

        return view('e1debatec3m1s.show')->with('e1debatec3m1', $e1debatec3m1);
    }

    /**
     * Show the form for editing the specified E1debatec3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e1debatec3m1 = $this->e1debatec3m1Repository->find($id);

        if (empty($e1debatec3m1)) {
            Flash::error('E1Debatec3M1 not found');

            return redirect(route('e1debatec3m1s.index'));
        }

        return view('e1debatec3m1s.edit')->with('e1debatec3m1', $e1debatec3m1);
    }

    /**
     * Update the specified E1debatec3m1 in storage.
     *
     * @param int $id
     * @param UpdateE1debatec3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE1debatec3m1Request $request)
    {
        $e1debatec3m1 = $this->e1debatec3m1Repository->find($id);

        if (empty($e1debatec3m1)) {
            Flash::error('E1Debatec3M1 not found');

            return redirect(route('e1debatec3m1s.index'));
        }

        $e1debatec3m1 = $this->e1debatec3m1Repository->update($request->all(), $id);

        Flash::success('E1Debatec3M1 updated successfully.');

        return redirect(route('e1debatec3m1s.index'));
    }

    /**
     * Remove the specified E1debatec3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e1debatec3m1 = $this->e1debatec3m1Repository->find($id);

        if (empty($e1debatec3m1)) {
            Flash::error('E1Debatec3M1 not found');

            return redirect(route('e1debatec3m1s.index'));
        }

        $this->e1debatec3m1Repository->delete($id);

        Flash::success('E1Debatec3M1 deleted successfully.');

        return redirect(route('e1debatec3m1s.index'));
    }
}
