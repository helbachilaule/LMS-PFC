<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateE4exercicioc1m2Request;
use App\Http\Requests\UpdateE4exercicioc1m2Request;
use App\Repositories\E4exercicioc1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class E4exercicioc1m2Controller extends AppBaseController
{
    /** @var  E4exercicioc1m2Repository */
    private $e4exercicioc1m2Repository;

    public function __construct(E4exercicioc1m2Repository $e4exercicioc1m2Repo)
    {
        $this->e4exercicioc1m2Repository = $e4exercicioc1m2Repo;
    }

    /**
     * Display a listing of the E4exercicioc1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $e4exercicioc1m2s = $this->e4exercicioc1m2Repository->all();

        return view('e4exercicioc1m2s.index')
            ->with('e4exercicioc1m2s', $e4exercicioc1m2s);
    }

    /**
     * Show the form for creating a new E4exercicioc1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('e4exercicioc1m2s.create');
    }

    /**
     * Store a newly created E4exercicioc1m2 in storage.
     *
     * @param CreateE4exercicioc1m2Request $request
     *
     * @return Response
     */
    public function store(CreateE4exercicioc1m2Request $request)
    {
        $input = $request->all();

        $e4exercicioc1m2 = $this->e4exercicioc1m2Repository->create($input);

        Flash::success('E4Exercicioc1M2 saved successfully.');

        return redirect(route('e4exercicioc1m2s.index'));
    }

    /**
     * Display the specified E4exercicioc1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $e4exercicioc1m2 = $this->e4exercicioc1m2Repository->find($id);

        if (empty($e4exercicioc1m2)) {
            Flash::error('E4Exercicioc1M2 not found');

            return redirect(route('e4exercicioc1m2s.index'));
        }

        return view('e4exercicioc1m2s.show')->with('e4exercicioc1m2', $e4exercicioc1m2);
    }

    /**
     * Show the form for editing the specified E4exercicioc1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $e4exercicioc1m2 = $this->e4exercicioc1m2Repository->find($id);

        if (empty($e4exercicioc1m2)) {
            Flash::error('E4Exercicioc1M2 not found');

            return redirect(route('e4exercicioc1m2s.index'));
        }

        return view('e4exercicioc1m2s.edit')->with('e4exercicioc1m2', $e4exercicioc1m2);
    }

    /**
     * Update the specified E4exercicioc1m2 in storage.
     *
     * @param int $id
     * @param UpdateE4exercicioc1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateE4exercicioc1m2Request $request)
    {
        $e4exercicioc1m2 = $this->e4exercicioc1m2Repository->find($id);

        if (empty($e4exercicioc1m2)) {
            Flash::error('E4Exercicioc1M2 not found');

            return redirect(route('e4exercicioc1m2s.index'));
        }

        $e4exercicioc1m2 = $this->e4exercicioc1m2Repository->update($request->all(), $id);

        Flash::success('E4Exercicioc1M2 updated successfully.');

        return redirect(route('e4exercicioc1m2s.index'));
    }

    /**
     * Remove the specified E4exercicioc1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $e4exercicioc1m2 = $this->e4exercicioc1m2Repository->find($id);

        if (empty($e4exercicioc1m2)) {
            Flash::error('E4Exercicioc1M2 not found');

            return redirect(route('e4exercicioc1m2s.index'));
        }

        $this->e4exercicioc1m2Repository->delete($id);

        Flash::success('E4Exercicioc1M2 deleted successfully.');

        return redirect(route('e4exercicioc1m2s.index'));
    }
}
