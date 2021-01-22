<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE2aulac3m1Request;
use App\Http\Requests\UpdateE2aulac3m1Request;
use App\Repositories\E2aulac3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E2aulac3m1Controller extends AppBaseController
{
    /** @var  E2aulac3m1Repository */
    private $e2aulac3m1Repository;

    public function __construct(E2aulac3m1Repository $e2aulac3m1Repo)
    {
        $this->e2aulac3m1Repository = $e2aulac3m1Repo;
    }

    /**
     * Display a listing of the E2aulac3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e2aulac3m1s = $this->e2aulac3m1Repository->all();

        return view('e2aulac3m1s.index')
            ->with('e2aulac3m1s', $e2aulac3m1s);
    }

    /**
     * Show the form for creating a new E2aulac3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('e2aulac3m1s.create');
    }

    /**
     * Store a newly created E2aulac3m1 in storage.
     *
     * @param CreateE2aulac3m1Request $request
     *
     * @return Response
     */
    public function store(CreateE2aulac3m1Request $request)
    {
        $input = $request->all();

        $e2aulac3m1 = $this->e2aulac3m1Repository->create($input);

        Flash::success('E2Aulac3M1 saved successfully.');

        return redirect(route('e2aulac3m1s.index'));
    }

    /**
     * Display the specified E2aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e2aulac3m1 = $this->e2aulac3m1Repository->find($id);

        if (empty($e2aulac3m1)) {
            Flash::error('E2Aulac3M1 not found');

            return redirect(route('e2aulac3m1s.index'));
        }

        return view('e2aulac3m1s.show')->with('e2aulac3m1', $e2aulac3m1);
    }

    /**
     * Show the form for editing the specified E2aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e2aulac3m1 = $this->e2aulac3m1Repository->find($id);

        if (empty($e2aulac3m1)) {
            Flash::error('E2Aulac3M1 not found');

            return redirect(route('e2aulac3m1s.index'));
        }

        return view('e2aulac3m1s.edit')->with('e2aulac3m1', $e2aulac3m1);
    }

    /**
     * Update the specified E2aulac3m1 in storage.
     *
     * @param int $id
     * @param UpdateE2aulac3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE2aulac3m1Request $request)
    {
        $e2aulac3m1 = $this->e2aulac3m1Repository->find($id);

        if (empty($e2aulac3m1)) {
            Flash::error('E2Aulac3M1 not found');

            return redirect(route('e2aulac3m1s.index'));
        }

        $e2aulac3m1 = $this->e2aulac3m1Repository->update($request->all(), $id);

        Flash::success('E2Aulac3M1 updated successfully.');

        return redirect(route('e2aulac3m1s.index'));
    }

    /**
     * Remove the specified E2aulac3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e2aulac3m1 = $this->e2aulac3m1Repository->find($id);

        if (empty($e2aulac3m1)) {
            Flash::error('E2Aulac3M1 not found');

            return redirect(route('e2aulac3m1s.index'));
        }

        $this->e2aulac3m1Repository->delete($id);

        Flash::success('E2Aulac3M1 deleted successfully.');

        return redirect(route('e2aulac3m1s.index'));
    }
}
