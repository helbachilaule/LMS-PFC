<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateF4aulac1m1Request;
use App\Http\Requests\UpdateF4aulac1m1Request;
use App\Repositories\F4aulac1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class F4aulac1m1Controller extends AppBaseController
{
    /** @var  F4aulac1m1Repository */
    private $f4aulac1m1Repository;

    public function __construct(F4aulac1m1Repository $f4aulac1m1Repo)
    {
        $this->f4aulac1m1Repository = $f4aulac1m1Repo;
    }

    /**
     * Display a listing of the F4aulac1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $f4aulac1m1s = $this->f4aulac1m1Repository->all();

        return view('f4aulac1m1s.index')
            ->with('f4aulac1m1s', $f4aulac1m1s);
    }

    /**
     * Show the form for creating a new F4aulac1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('f4aulac1m1s.create');
    }

    /**
     * Store a newly created F4aulac1m1 in storage.
     *
     * @param CreateF4aulac1m1Request $request
     *
     * @return Response
     */
    public function store(CreateF4aulac1m1Request $request)
    {
        $input = $request->all();

        $f4aulac1m1 = $this->f4aulac1m1Repository->create($input);

        Flash::success('F4Aulac1M1 saved successfully.');

        return redirect(route('f4aulac1m1s.index'));
    }

    /**
     * Display the specified F4aulac1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $f4aulac1m1 = $this->f4aulac1m1Repository->find($id);

        if (empty($f4aulac1m1)) {
            Flash::error('F4Aulac1M1 not found');

            return redirect(route('f4aulac1m1s.index'));
        }

        return view('f4aulac1m1s.show')->with('f4aulac1m1', $f4aulac1m1);
    }

    /**
     * Show the form for editing the specified F4aulac1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $f4aulac1m1 = $this->f4aulac1m1Repository->find($id);

        if (empty($f4aulac1m1)) {
            Flash::error('F4Aulac1M1 not found');

            return redirect(route('f4aulac1m1s.index'));
        }

        return view('f4aulac1m1s.edit')->with('f4aulac1m1', $f4aulac1m1);
    }

    /**
     * Update the specified F4aulac1m1 in storage.
     *
     * @param int $id
     * @param UpdateF4aulac1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateF4aulac1m1Request $request)
    {
        $f4aulac1m1 = $this->f4aulac1m1Repository->find($id);

        if (empty($f4aulac1m1)) {
            Flash::error('F4Aulac1M1 not found');

            return redirect(route('f4aulac1m1s.index'));
        }

        $f4aulac1m1 = $this->f4aulac1m1Repository->update($request->all(), $id);

        Flash::success('F4Aulac1M1 updated successfully.');

        return redirect(route('f4aulac1m1s.index'));
    }

    /**
     * Remove the specified F4aulac1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $f4aulac1m1 = $this->f4aulac1m1Repository->find($id);

        if (empty($f4aulac1m1)) {
            Flash::error('F4Aulac1M1 not found');

            return redirect(route('f4aulac1m1s.index'));
        }

        $this->f4aulac1m1Repository->delete($id);

        Flash::success('F4Aulac1M1 deleted successfully.');

        return redirect(route('f4aulac1m1s.index'));
    }
}
