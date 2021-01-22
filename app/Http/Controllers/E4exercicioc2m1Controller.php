<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE4exercicioc2m1Request;
use App\Http\Requests\UpdateE4exercicioc2m1Request;
use App\Repositories\E4exercicioc2m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E4exercicioc2m1Controller extends AppBaseController
{
    /** @var  E4exercicioc2m1Repository */
    private $e4exercicioc2m1Repository;

    public function __construct(E4exercicioc2m1Repository $e4exercicioc2m1Repo)
    {
        $this->e4exercicioc2m1Repository = $e4exercicioc2m1Repo;
    }

    /**
     * Display a listing of the E4exercicioc2m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e4exercicioc2m1s = $this->e4exercicioc2m1Repository->all();

        return view('e4exercicioc2m1s.index')
            ->with('e4exercicioc2m1s', $e4exercicioc2m1s);
    }

    /**
     * Show the form for creating a new E4exercicioc2m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('e4exercicioc2m1s.create');
    }

    /**
     * Store a newly created E4exercicioc2m1 in storage.
     *
     * @param CreateE4exercicioc2m1Request $request
     *
     * @return Response
     */
    public function store(CreateE4exercicioc2m1Request $request)
    {
        $input = $request->all();

        $e4exercicioc2m1 = $this->e4exercicioc2m1Repository->create($input);

        Flash::success('E4Exercicioc2M1 saved successfully.');

        return redirect(route('e4exercicioc2m1s.index'));
    }

    /**
     * Display the specified E4exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e4exercicioc2m1 = $this->e4exercicioc2m1Repository->find($id);

        if (empty($e4exercicioc2m1)) {
            Flash::error('E4Exercicioc2M1 not found');

            return redirect(route('e4exercicioc2m1s.index'));
        }

        return view('e4exercicioc2m1s.show')->with('e4exercicioc2m1', $e4exercicioc2m1);
    }

    /**
     * Show the form for editing the specified E4exercicioc2m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e4exercicioc2m1 = $this->e4exercicioc2m1Repository->find($id);

        if (empty($e4exercicioc2m1)) {
            Flash::error('E4Exercicioc2M1 not found');

            return redirect(route('e4exercicioc2m1s.index'));
        }

        return view('e4exercicioc2m1s.edit')->with('e4exercicioc2m1', $e4exercicioc2m1);
    }

    /**
     * Update the specified E4exercicioc2m1 in storage.
     *
     * @param int $id
     * @param UpdateE4exercicioc2m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE4exercicioc2m1Request $request)
    {
        $e4exercicioc2m1 = $this->e4exercicioc2m1Repository->find($id);

        if (empty($e4exercicioc2m1)) {
            Flash::error('E4Exercicioc2M1 not found');

            return redirect(route('e4exercicioc2m1s.index'));
        }

        $e4exercicioc2m1 = $this->e4exercicioc2m1Repository->update($request->all(), $id);

        Flash::success('E4Exercicioc2M1 updated successfully.');

        return redirect(route('e4exercicioc2m1s.index'));
    }

    /**
     * Remove the specified E4exercicioc2m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e4exercicioc2m1 = $this->e4exercicioc2m1Repository->find($id);

        if (empty($e4exercicioc2m1)) {
            Flash::error('E4Exercicioc2M1 not found');

            return redirect(route('e4exercicioc2m1s.index'));
        }

        $this->e4exercicioc2m1Repository->delete($id);

        Flash::success('E4Exercicioc2M1 deleted successfully.');

        return redirect(route('e4exercicioc2m1s.index'));
    }
}
