<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE1debatec1m1Request;
use App\Http\Requests\UpdateE1debatec1m1Request;
use App\Repositories\E1debatec1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E1debatec1m1Controller extends AppBaseController
{
    /** @var  E1debatec1m1Repository */
    private $e1debatec1m1Repository;

    public function __construct(E1debatec1m1Repository $e1debatec1m1Repo)
    {
        $this->e1debatec1m1Repository = $e1debatec1m1Repo;
    }

    /**
     * Display a listing of the E1debatec1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e1debatec1m1s = $this->e1debatec1m1Repository->all();

        return view('e1debatec1m1s.index')
            ->with('e1debatec1m1s', $e1debatec1m1s);
    }

    /**
     * Show the form for creating a new E1debatec1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('e1debatec1m1s.create');
    }

    /**
     * Store a newly created E1debatec1m1 in storage.
     *
     * @param CreateE1debatec1m1Request $request
     *
     * @return Response
     */
    public function store(CreateE1debatec1m1Request $request)
    {
        $input = $request->all();

        $e1debatec1m1 = $this->e1debatec1m1Repository->create($input);

        Flash::success('E1Debatec1M1 saved successfully.');

        return redirect(route('e1debatec1m1s.index'));
    }

    /**
     * Display the specified E1debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e1debatec1m1 = $this->e1debatec1m1Repository->find($id);

        if (empty($e1debatec1m1)) {
            Flash::error('E1Debatec1M1 not found');

            return redirect(route('e1debatec1m1s.index'));
        }

        return view('e1debatec1m1s.show')->with('e1debatec1m1', $e1debatec1m1);
    }

    /**
     * Show the form for editing the specified E1debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e1debatec1m1 = $this->e1debatec1m1Repository->find($id);

        if (empty($e1debatec1m1)) {
            Flash::error('E1Debatec1M1 not found');

            return redirect(route('e1debatec1m1s.index'));
        }

        return view('e1debatec1m1s.edit')->with('e1debatec1m1', $e1debatec1m1);
    }

    /**
     * Update the specified E1debatec1m1 in storage.
     *
     * @param int $id
     * @param UpdateE1debatec1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE1debatec1m1Request $request)
    {
        $e1debatec1m1 = $this->e1debatec1m1Repository->find($id);

        if (empty($e1debatec1m1)) {
            Flash::error('E1Debatec1M1 not found');

            return redirect(route('e1debatec1m1s.index'));
        }

        $e1debatec1m1 = $this->e1debatec1m1Repository->update($request->all(), $id);

        Flash::success('E1Debatec1M1 updated successfully.');

        return redirect(route('e1debatec1m1s.index'));
    }

    /**
     * Remove the specified E1debatec1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e1debatec1m1 = $this->e1debatec1m1Repository->find($id);

        if (empty($e1debatec1m1)) {
            Flash::error('E1Debatec1M1 not found');

            return redirect(route('e1debatec1m1s.index'));
        }

        $this->e1debatec1m1Repository->delete($id);

        Flash::success('E1Debatec1M1 deleted successfully.');

        return redirect(route('e1debatec1m1s.index'));
    }
}
