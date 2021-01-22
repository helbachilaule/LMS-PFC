<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp3exercicioc3m1Request;
use App\Http\Requests\UpdateAp3exercicioc3m1Request;
use App\Repositories\Ap3exercicioc3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ap3exercicioc3m1Controller extends AppBaseController
{
    /** @var  Ap3exercicioc3m1Repository */
    private $ap3exercicioc3m1Repository;

    public function __construct(Ap3exercicioc3m1Repository $ap3exercicioc3m1Repo)
    {
        $this->ap3exercicioc3m1Repository = $ap3exercicioc3m1Repo;
    }

    /**
     * Display a listing of the Ap3exercicioc3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap3exercicioc3m1s = $this->ap3exercicioc3m1Repository->all();

        return view('ap3exercicioc3m1s.index')
            ->with('ap3exercicioc3m1s', $ap3exercicioc3m1s);
    }

    /**
     * Show the form for creating a new Ap3exercicioc3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap3exercicioc3m1s.create');
    }

    /**
     * Store a newly created Ap3exercicioc3m1 in storage.
     *
     * @param CreateAp3exercicioc3m1Request $request
     *
     * @return Response
     */
    public function store(CreateAp3exercicioc3m1Request $request)
    {
        $input = $request->all();

        $ap3exercicioc3m1 = $this->ap3exercicioc3m1Repository->create($input);

        Flash::success('Ap3Exercicioc3M1 saved successfully.');

        return redirect(route('ap3exercicioc3m1s.index'));
    }

    /**
     * Display the specified Ap3exercicioc3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap3exercicioc3m1 = $this->ap3exercicioc3m1Repository->find($id);

        if (empty($ap3exercicioc3m1)) {
            Flash::error('Ap3Exercicioc3M1 not found');

            return redirect(route('ap3exercicioc3m1s.index'));
        }

        return view('ap3exercicioc3m1s.show')->with('ap3exercicioc3m1', $ap3exercicioc3m1);
    }

    /**
     * Show the form for editing the specified Ap3exercicioc3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap3exercicioc3m1 = $this->ap3exercicioc3m1Repository->find($id);

        if (empty($ap3exercicioc3m1)) {
            Flash::error('Ap3Exercicioc3M1 not found');

            return redirect(route('ap3exercicioc3m1s.index'));
        }

        return view('ap3exercicioc3m1s.edit')->with('ap3exercicioc3m1', $ap3exercicioc3m1);
    }

    /**
     * Update the specified Ap3exercicioc3m1 in storage.
     *
     * @param int $id
     * @param UpdateAp3exercicioc3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp3exercicioc3m1Request $request)
    {
        $ap3exercicioc3m1 = $this->ap3exercicioc3m1Repository->find($id);

        if (empty($ap3exercicioc3m1)) {
            Flash::error('Ap3Exercicioc3M1 not found');

            return redirect(route('ap3exercicioc3m1s.index'));
        }

        $ap3exercicioc3m1 = $this->ap3exercicioc3m1Repository->update($request->all(), $id);

        Flash::success('Ap3Exercicioc3M1 updated successfully.');

        return redirect(route('ap3exercicioc3m1s.index'));
    }

    /**
     * Remove the specified Ap3exercicioc3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap3exercicioc3m1 = $this->ap3exercicioc3m1Repository->find($id);

        if (empty($ap3exercicioc3m1)) {
            Flash::error('Ap3Exercicioc3M1 not found');

            return redirect(route('ap3exercicioc3m1s.index'));
        }

        $this->ap3exercicioc3m1Repository->delete($id);

        Flash::success('Ap3Exercicioc3M1 deleted successfully.');

        return redirect(route('ap3exercicioc3m1s.index'));
    }
}
