<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE1exercicioc3m2Request;
use App\Http\Requests\UpdateE1exercicioc3m2Request;
use App\Repositories\E1exercicioc3m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E1exercicioc3m2Controller extends AppBaseController
{
    /** @var  E1exercicioc3m2Repository */
    private $e1exercicioc3m2Repository;

    public function __construct(E1exercicioc3m2Repository $e1exercicioc3m2Repo)
    {
        $this->e1exercicioc3m2Repository = $e1exercicioc3m2Repo;
    }

    /**
     * Display a listing of the E1exercicioc3m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e1exercicioc3m2s = $this->e1exercicioc3m2Repository->all();

        return view('e1exercicioc3m2s.index')
            ->with('e1exercicioc3m2s', $e1exercicioc3m2s);
    }

    /**
     * Show the form for creating a new E1exercicioc3m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('e1exercicioc3m2s.create');
    }

    /**
     * Store a newly created E1exercicioc3m2 in storage.
     *
     * @param CreateE1exercicioc3m2Request $request
     *
     * @return Response
     */
    public function store(CreateE1exercicioc3m2Request $request)
    {
        $input = $request->all();

        $e1exercicioc3m2 = $this->e1exercicioc3m2Repository->create($input);

        Flash::success('E1Exercicioc3M2 saved successfully.');

        return redirect(route('e1exercicioc3m2s.index'));
    }

    /**
     * Display the specified E1exercicioc3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e1exercicioc3m2 = $this->e1exercicioc3m2Repository->find($id);

        if (empty($e1exercicioc3m2)) {
            Flash::error('E1Exercicioc3M2 not found');

            return redirect(route('e1exercicioc3m2s.index'));
        }

        return view('e1exercicioc3m2s.show')->with('e1exercicioc3m2', $e1exercicioc3m2);
    }

    /**
     * Show the form for editing the specified E1exercicioc3m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e1exercicioc3m2 = $this->e1exercicioc3m2Repository->find($id);

        if (empty($e1exercicioc3m2)) {
            Flash::error('E1Exercicioc3M2 not found');

            return redirect(route('e1exercicioc3m2s.index'));
        }

        return view('e1exercicioc3m2s.edit')->with('e1exercicioc3m2', $e1exercicioc3m2);
    }

    /**
     * Update the specified E1exercicioc3m2 in storage.
     *
     * @param int $id
     * @param UpdateE1exercicioc3m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE1exercicioc3m2Request $request)
    {
        $e1exercicioc3m2 = $this->e1exercicioc3m2Repository->find($id);

        if (empty($e1exercicioc3m2)) {
            Flash::error('E1Exercicioc3M2 not found');

            return redirect(route('e1exercicioc3m2s.index'));
        }

        $e1exercicioc3m2 = $this->e1exercicioc3m2Repository->update($request->all(), $id);

        Flash::success('E1Exercicioc3M2 updated successfully.');

        return redirect(route('e1exercicioc3m2s.index'));
    }

    /**
     * Remove the specified E1exercicioc3m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e1exercicioc3m2 = $this->e1exercicioc3m2Repository->find($id);

        if (empty($e1exercicioc3m2)) {
            Flash::error('E1Exercicioc3M2 not found');

            return redirect(route('e1exercicioc3m2s.index'));
        }

        $this->e1exercicioc3m2Repository->delete($id);

        Flash::success('E1Exercicioc3M2 deleted successfully.');

        return redirect(route('e1exercicioc3m2s.index'));
    }
}
