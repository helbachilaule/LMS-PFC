<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateP3exercicioc2m1Request;
use App\Http\Requests\UpdateP3exercicioc2m1Request;
use App\Repositories\P3exercicioc2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class P3exercicioc2m1Controller extends AppBaseController
{
    /** @var  P3exercicioc2m1Repository */
    private $p3exercicioc2m1Repository;

    public function __construct(P3exercicioc2m1Repository $p3exercicioc2m1Repo)
    {
        $this->p3exercicioc2m1Repository = $p3exercicioc2m1Repo;
    }

    /**
     * Display a listing of the P3exercicioc2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $p3exercicioc2m1s = $this->p3exercicioc2m1Repository->all();

        return view('p3exercicioc2m1s.index')
            ->with('p3exercicioc2m1s', $p3exercicioc2m1s);
    }

    /**
     * Show the form for creating a new P3exercicioc2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('p3exercicioc2m1s.create');
    }

    /**
     * Store a newly created P3exercicioc2m1 in storage.
     *
     * @param CreateP3exercicioc2m1Request $request
     *
     * @return Response
     */
    public function store(CreateP3exercicioc2m1Request $request)
    {
        $input = $request->all();

        $p3exercicioc2m1 = $this->p3exercicioc2m1Repository->create($input);

        Flash::success('P3Exercicioc2M1 saved successfully.');

        return redirect(route('p3exercicioc2m1s.index'));
    }

    /**
     * Display the specified P3exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $p3exercicioc2m1 = $this->p3exercicioc2m1Repository->find($id);

        if (empty($p3exercicioc2m1)) {
            Flash::error('P3Exercicioc2M1 not found');

            return redirect(route('p3exercicioc2m1s.index'));
        }

        return view('p3exercicioc2m1s.show')->with('p3exercicioc2m1', $p3exercicioc2m1);
    }

    /**
     * Show the form for editing the specified P3exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $p3exercicioc2m1 = $this->p3exercicioc2m1Repository->find($id);

        if (empty($p3exercicioc2m1)) {
            Flash::error('P3Exercicioc2M1 not found');

            return redirect(route('p3exercicioc2m1s.index'));
        }

        return view('p3exercicioc2m1s.edit')->with('p3exercicioc2m1', $p3exercicioc2m1);
    }

    /**
     * Update the specified P3exercicioc2m1 in storage.
     *
     * @param int $id
     * @param UpdateP3exercicioc2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateP3exercicioc2m1Request $request)
    {
        $p3exercicioc2m1 = $this->p3exercicioc2m1Repository->find($id);

        if (empty($p3exercicioc2m1)) {
            Flash::error('P3Exercicioc2M1 not found');

            return redirect(route('p3exercicioc2m1s.index'));
        }

        $p3exercicioc2m1 = $this->p3exercicioc2m1Repository->update($request->all(), $id);

        Flash::success('P3Exercicioc2M1 updated successfully.');

        return redirect(route('p3exercicioc2m1s.index'));
    }

    /**
     * Remove the specified P3exercicioc2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $p3exercicioc2m1 = $this->p3exercicioc2m1Repository->find($id);

        if (empty($p3exercicioc2m1)) {
            Flash::error('P3Exercicioc2M1 not found');

            return redirect(route('p3exercicioc2m1s.index'));
        }

        $this->p3exercicioc2m1Repository->delete($id);

        Flash::success('P3Exercicioc2M1 deleted successfully.');

        return redirect(route('p3exercicioc2m1s.index'));
    }
}
