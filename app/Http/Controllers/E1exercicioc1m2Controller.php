<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE1exercicioc1m2Request;
use App\Http\Requests\UpdateE1exercicioc1m2Request;
use App\Repositories\E1exercicioc1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E1exercicioc1m2Controller extends AppBaseController
{
    /** @var  E1exercicioc1m2Repository */
    private $e1exercicioc1m2Repository;

    public function __construct(E1exercicioc1m2Repository $e1exercicioc1m2Repo)
    {
        $this->e1exercicioc1m2Repository = $e1exercicioc1m2Repo;
    }

    /**
     * Display a listing of the E1exercicioc1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e1exercicioc1m2s = $this->e1exercicioc1m2Repository->all();

        return view('e1exercicioc1m2s.index')
            ->with('e1exercicioc1m2s', $e1exercicioc1m2s);
    }

    /**
     * Show the form for creating a new E1exercicioc1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('e1exercicioc1m2s.create');
    }

    /**
     * Store a newly created E1exercicioc1m2 in storage.
     *
     * @param CreateE1exercicioc1m2Request $request
     *
     * @return Response
     */
    public function store(CreateE1exercicioc1m2Request $request)
    {
        $input = $request->all();

        $e1exercicioc1m2 = $this->e1exercicioc1m2Repository->create($input);

        Flash::success('E1Exercicioc1M2 saved successfully.');

        return redirect(route('e1exercicioc1m2s.index'));
    }

    /**
     * Display the specified E1exercicioc1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e1exercicioc1m2 = $this->e1exercicioc1m2Repository->find($id);

        if (empty($e1exercicioc1m2)) {
            Flash::error('E1Exercicioc1M2 not found');

            return redirect(route('e1exercicioc1m2s.index'));
        }

        return view('e1exercicioc1m2s.show')->with('e1exercicioc1m2', $e1exercicioc1m2);
    }

    /**
     * Show the form for editing the specified E1exercicioc1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e1exercicioc1m2 = $this->e1exercicioc1m2Repository->find($id);

        if (empty($e1exercicioc1m2)) {
            Flash::error('E1Exercicioc1M2 not found');

            return redirect(route('e1exercicioc1m2s.index'));
        }

        return view('e1exercicioc1m2s.edit')->with('e1exercicioc1m2', $e1exercicioc1m2);
    }

    /**
     * Update the specified E1exercicioc1m2 in storage.
     *
     * @param int $id
     * @param UpdateE1exercicioc1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE1exercicioc1m2Request $request)
    {
        $e1exercicioc1m2 = $this->e1exercicioc1m2Repository->find($id);

        if (empty($e1exercicioc1m2)) {
            Flash::error('E1Exercicioc1M2 not found');

            return redirect(route('e1exercicioc1m2s.index'));
        }

        $e1exercicioc1m2 = $this->e1exercicioc1m2Repository->update($request->all(), $id);

        Flash::success('E1Exercicioc1M2 updated successfully.');

        return redirect(route('e1exercicioc1m2s.index'));
    }

    /**
     * Remove the specified E1exercicioc1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e1exercicioc1m2 = $this->e1exercicioc1m2Repository->find($id);

        if (empty($e1exercicioc1m2)) {
            Flash::error('E1Exercicioc1M2 not found');

            return redirect(route('e1exercicioc1m2s.index'));
        }

        $this->e1exercicioc1m2Repository->delete($id);

        Flash::success('E1Exercicioc1M2 deleted successfully.');

        return redirect(route('e1exercicioc1m2s.index'));
    }
}
