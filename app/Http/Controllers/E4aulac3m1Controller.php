<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE4aulac3m1Request;
use App\Http\Requests\UpdateE4aulac3m1Request;
use App\Repositories\E4aulac3m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E4aulac3m1Controller extends AppBaseController
{
    /** @var  E4aulac3m1Repository */
    private $e4aulac3m1Repository;

    public function __construct(E4aulac3m1Repository $e4aulac3m1Repo)
    {
        $this->e4aulac3m1Repository = $e4aulac3m1Repo;
    }

    /**
     * Display a listing of the E4aulac3m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e4aulac3m1s = $this->e4aulac3m1Repository->all();

        return view('e4aulac3m1s.index')
            ->with('e4aulac3m1s', $e4aulac3m1s);
    }

    /**
     * Show the form for creating a new E4aulac3m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('e4aulac3m1s.create');
    }

    /**
     * Store a newly created E4aulac3m1 in storage.
     *
     * @param CreateE4aulac3m1Request $request
     *
     * @return Response
     */
    public function store(CreateE4aulac3m1Request $request)
    {
        $input = $request->all();

        $e4aulac3m1 = $this->e4aulac3m1Repository->create($input);

        Flash::success('E4Aulac3M1 saved successfully.');

        return redirect(route('e4aulac3m1s.index'));
    }

    /**
     * Display the specified E4aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e4aulac3m1 = $this->e4aulac3m1Repository->find($id);

        if (empty($e4aulac3m1)) {
            Flash::error('E4Aulac3M1 not found');

            return redirect(route('e4aulac3m1s.index'));
        }

        return view('e4aulac3m1s.show')->with('e4aulac3m1', $e4aulac3m1);
    }

    /**
     * Show the form for editing the specified E4aulac3m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e4aulac3m1 = $this->e4aulac3m1Repository->find($id);

        if (empty($e4aulac3m1)) {
            Flash::error('E4Aulac3M1 not found');

            return redirect(route('e4aulac3m1s.index'));
        }

        return view('e4aulac3m1s.edit')->with('e4aulac3m1', $e4aulac3m1);
    }

    /**
     * Update the specified E4aulac3m1 in storage.
     *
     * @param int $id
     * @param UpdateE4aulac3m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE4aulac3m1Request $request)
    {
        $e4aulac3m1 = $this->e4aulac3m1Repository->find($id);

        if (empty($e4aulac3m1)) {
            Flash::error('E4Aulac3M1 not found');

            return redirect(route('e4aulac3m1s.index'));
        }

        $e4aulac3m1 = $this->e4aulac3m1Repository->update($request->all(), $id);

        Flash::success('E4Aulac3M1 updated successfully.');

        return redirect(route('e4aulac3m1s.index'));
    }

    /**
     * Remove the specified E4aulac3m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e4aulac3m1 = $this->e4aulac3m1Repository->find($id);

        if (empty($e4aulac3m1)) {
            Flash::error('E4Aulac3M1 not found');

            return redirect(route('e4aulac3m1s.index'));
        }

        $this->e4aulac3m1Repository->delete($id);

        Flash::success('E4Aulac3M1 deleted successfully.');

        return redirect(route('e4aulac3m1s.index'));
    }
}
