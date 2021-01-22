<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE3aulac2m1Request;
use App\Http\Requests\UpdateE3aulac2m1Request;
use App\Repositories\E3aulac2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E3aulac2m1Controller extends AppBaseController
{
    /** @var  E3aulac2m1Repository */
    private $e3aulac2m1Repository;

    public function __construct(E3aulac2m1Repository $e3aulac2m1Repo)
    {
        $this->e3aulac2m1Repository = $e3aulac2m1Repo;
    }

    /**
     * Display a listing of the E3aulac2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e3aulac2m1s = $this->e3aulac2m1Repository->all();

        return view('e3aulac2m1s.index')
            ->with('e3aulac2m1s', $e3aulac2m1s);
    }

    /**
     * Show the form for creating a new E3aulac2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('e3aulac2m1s.create');
    }

    /**
     * Store a newly created E3aulac2m1 in storage.
     *
     * @param CreateE3aulac2m1Request $request
     *
     * @return Response
     */
    public function store(CreateE3aulac2m1Request $request)
    {
        $input = $request->all();

        $e3aulac2m1 = $this->e3aulac2m1Repository->create($input);

        Flash::success('E3Aulac2M1 saved successfully.');

        return redirect(route('e3aulac2m1s.index'));
    }

    /**
     * Display the specified E3aulac2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e3aulac2m1 = $this->e3aulac2m1Repository->find($id);

        if (empty($e3aulac2m1)) {
            Flash::error('E3Aulac2M1 not found');

            return redirect(route('e3aulac2m1s.index'));
        }

        return view('e3aulac2m1s.show')->with('e3aulac2m1', $e3aulac2m1);
    }

    /**
     * Show the form for editing the specified E3aulac2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e3aulac2m1 = $this->e3aulac2m1Repository->find($id);

        if (empty($e3aulac2m1)) {
            Flash::error('E3Aulac2M1 not found');

            return redirect(route('e3aulac2m1s.index'));
        }

        return view('e3aulac2m1s.edit')->with('e3aulac2m1', $e3aulac2m1);
    }

    /**
     * Update the specified E3aulac2m1 in storage.
     *
     * @param int $id
     * @param UpdateE3aulac2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE3aulac2m1Request $request)
    {
        $e3aulac2m1 = $this->e3aulac2m1Repository->find($id);

        if (empty($e3aulac2m1)) {
            Flash::error('E3Aulac2M1 not found');

            return redirect(route('e3aulac2m1s.index'));
        }

        $e3aulac2m1 = $this->e3aulac2m1Repository->update($request->all(), $id);

        Flash::success('E3Aulac2M1 updated successfully.');

        return redirect(route('e3aulac2m1s.index'));
    }

    /**
     * Remove the specified E3aulac2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e3aulac2m1 = $this->e3aulac2m1Repository->find($id);

        if (empty($e3aulac2m1)) {
            Flash::error('E3Aulac2M1 not found');

            return redirect(route('e3aulac2m1s.index'));
        }

        $this->e3aulac2m1Repository->delete($id);

        Flash::success('E3Aulac2M1 deleted successfully.');

        return redirect(route('e3aulac2m1s.index'));
    }
}
