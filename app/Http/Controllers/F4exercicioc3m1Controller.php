<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF4exercicioc3m1Request;
use App\Http\Requests\UpdateF4exercicioc3m1Request;
use App\Repositories\F4exercicioc3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F4exercicioc3m1Controller extends AppBaseController
{
    /** @var  F4exercicioc3m1Repository */
    private $f4exercicioc3m1Repository;

    public function __construct(F4exercicioc3m1Repository $f4exercicioc3m1Repo)
    {
        $this->f4exercicioc3m1Repository = $f4exercicioc3m1Repo;
    }

    /**
     * Display a listing of the F4exercicioc3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f4exercicioc3m1s = $this->f4exercicioc3m1Repository->all();

        return view('f4exercicioc3m1s.index')
            ->with('f4exercicioc3m1s', $f4exercicioc3m1s);
    }

    /**
     * Show the form for creating a new F4exercicioc3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f4exercicioc3m1s.create');
    }

    /**
     * Store a newly created F4exercicioc3m1 in storage.
     *
     * @param CreateF4exercicioc3m1Request $request
     *
     * @return Response
     */
    public function store(CreateF4exercicioc3m1Request $request)
    {
        $input = $request->all();

        $f4exercicioc3m1 = $this->f4exercicioc3m1Repository->create($input);

        Flash::success('F4Exercicioc3M1 saved successfully.');

        return redirect(route('f4exercicioc3m1s.index'));
    }

    /**
     * Display the specified F4exercicioc3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f4exercicioc3m1 = $this->f4exercicioc3m1Repository->find($id);

        if (empty($f4exercicioc3m1)) {
            Flash::error('F4Exercicioc3M1 not found');

            return redirect(route('f4exercicioc3m1s.index'));
        }

        return view('f4exercicioc3m1s.show')->with('f4exercicioc3m1', $f4exercicioc3m1);
    }

    /**
     * Show the form for editing the specified F4exercicioc3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f4exercicioc3m1 = $this->f4exercicioc3m1Repository->find($id);

        if (empty($f4exercicioc3m1)) {
            Flash::error('F4Exercicioc3M1 not found');

            return redirect(route('f4exercicioc3m1s.index'));
        }

        return view('f4exercicioc3m1s.edit')->with('f4exercicioc3m1', $f4exercicioc3m1);
    }

    /**
     * Update the specified F4exercicioc3m1 in storage.
     *
     * @param int $id
     * @param UpdateF4exercicioc3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF4exercicioc3m1Request $request)
    {
        $f4exercicioc3m1 = $this->f4exercicioc3m1Repository->find($id);

        if (empty($f4exercicioc3m1)) {
            Flash::error('F4Exercicioc3M1 not found');

            return redirect(route('f4exercicioc3m1s.index'));
        }

        $f4exercicioc3m1 = $this->f4exercicioc3m1Repository->update($request->all(), $id);

        Flash::success('F4Exercicioc3M1 updated successfully.');

        return redirect(route('f4exercicioc3m1s.index'));
    }

    /**
     * Remove the specified F4exercicioc3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f4exercicioc3m1 = $this->f4exercicioc3m1Repository->find($id);

        if (empty($f4exercicioc3m1)) {
            Flash::error('F4Exercicioc3M1 not found');

            return redirect(route('f4exercicioc3m1s.index'));
        }

        $this->f4exercicioc3m1Repository->delete($id);

        Flash::success('F4Exercicioc3M1 deleted successfully.');

        return redirect(route('f4exercicioc3m1s.index'));
    }
}
