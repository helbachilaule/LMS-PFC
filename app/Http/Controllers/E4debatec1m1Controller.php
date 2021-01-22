<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE4debatec1m1Request;
use App\Http\Requests\UpdateE4debatec1m1Request;
use App\Repositories\E4debatec1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E4debatec1m1Controller extends AppBaseController
{
    /** @var  E4debatec1m1Repository */
    private $e4debatec1m1Repository;

    public function __construct(E4debatec1m1Repository $e4debatec1m1Repo)
    {
        $this->e4debatec1m1Repository = $e4debatec1m1Repo;
    }

    /**
     * Display a listing of the E4debatec1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e4debatec1m1s = $this->e4debatec1m1Repository->all();

        return view('e4debatec1m1s.index')
            ->with('e4debatec1m1s', $e4debatec1m1s);
    }

    /**
     * Show the form for creating a new E4debatec1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('e4debatec1m1s.create');
    }

    /**
     * Store a newly created E4debatec1m1 in storage.
     *
     * @param CreateE4debatec1m1Request $request
     *
     * @return Response
     */
    public function store(CreateE4debatec1m1Request $request)
    {
        $input = $request->all();

        $e4debatec1m1 = $this->e4debatec1m1Repository->create($input);

        Flash::success('E4Debatec1M1 saved successfully.');

        return redirect(route('e4debatec1m1s.index'));
    }

    /**
     * Display the specified E4debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e4debatec1m1 = $this->e4debatec1m1Repository->find($id);

        if (empty($e4debatec1m1)) {
            Flash::error('E4Debatec1M1 not found');

            return redirect(route('e4debatec1m1s.index'));
        }

        return view('e4debatec1m1s.show')->with('e4debatec1m1', $e4debatec1m1);
    }

    /**
     * Show the form for editing the specified E4debatec1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e4debatec1m1 = $this->e4debatec1m1Repository->find($id);

        if (empty($e4debatec1m1)) {
            Flash::error('E4Debatec1M1 not found');

            return redirect(route('e4debatec1m1s.index'));
        }

        return view('e4debatec1m1s.edit')->with('e4debatec1m1', $e4debatec1m1);
    }

    /**
     * Update the specified E4debatec1m1 in storage.
     *
     * @param int $id
     * @param UpdateE4debatec1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE4debatec1m1Request $request)
    {
        $e4debatec1m1 = $this->e4debatec1m1Repository->find($id);

        if (empty($e4debatec1m1)) {
            Flash::error('E4Debatec1M1 not found');

            return redirect(route('e4debatec1m1s.index'));
        }

        $e4debatec1m1 = $this->e4debatec1m1Repository->update($request->all(), $id);

        Flash::success('E4Debatec1M1 updated successfully.');

        return redirect(route('e4debatec1m1s.index'));
    }

    /**
     * Remove the specified E4debatec1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e4debatec1m1 = $this->e4debatec1m1Repository->find($id);

        if (empty($e4debatec1m1)) {
            Flash::error('E4Debatec1M1 not found');

            return redirect(route('e4debatec1m1s.index'));
        }

        $this->e4debatec1m1Repository->delete($id);

        Flash::success('E4Debatec1M1 deleted successfully.');

        return redirect(route('e4debatec1m1s.index'));
    }
}
