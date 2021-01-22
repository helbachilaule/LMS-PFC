<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateExerciciosc1m1Request;
use App\Http\Requests\UpdateExerciciosc1m1Request;
use App\Repositories\Exerciciosc1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Exerciciosc1m1Controller extends AppBaseController
{
    /** @var  Exerciciosc1m1Repository */
    private $exerciciosc1m1Repository;

    public function __construct(Exerciciosc1m1Repository $exerciciosc1m1Repo)
    {
        $this->exerciciosc1m1Repository = $exerciciosc1m1Repo;
    }

    /**
     * Display a listing of the Exerciciosc1m1.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $exerciciosc1m1s = $this->exerciciosc1m1Repository->all();

        return view('exerciciosc1m1s.index')
            ->with('exerciciosc1m1s', $exerciciosc1m1s);
    }

    /**
     * Show the form for creating a new Exerciciosc1m1.
     *
     * @return Response
     */
    public function create()
    {
        return view('exerciciosc1m1s.create');
    }

    /**
     * Store a newly created Exerciciosc1m1 in storage.
     *
     * @param CreateExerciciosc1m1Request $request
     *
     * @return Response
     */
    public function store(CreateExerciciosc1m1Request $request)
    {
        $input = $request->all();

        $exerciciosc1m1 = $this->exerciciosc1m1Repository->create($input);

        Flash::success('Exerciciosc1M1 saved successfully.');

        return redirect(route('exerciciosc1m1s.index'));
    }

    /**
     * Display the specified Exerciciosc1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $exerciciosc1m1 = $this->exerciciosc1m1Repository->find($id);

        if (empty($exerciciosc1m1)) {
            Flash::error('Exerciciosc1M1 not found');

            return redirect(route('exerciciosc1m1s.index'));
        }

        return view('exerciciosc1m1s.show')->with('exerciciosc1m1', $exerciciosc1m1);
    }

    /**
     * Show the form for editing the specified Exerciciosc1m1.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $exerciciosc1m1 = $this->exerciciosc1m1Repository->find($id);

        if (empty($exerciciosc1m1)) {
            Flash::error('Exerciciosc1M1 not found');

            return redirect(route('exerciciosc1m1s.index'));
        }

        return view('exerciciosc1m1s.edit')->with('exerciciosc1m1', $exerciciosc1m1);
    }

    /**
     * Update the specified Exerciciosc1m1 in storage.
     *
     * @param int $id
     * @param UpdateExerciciosc1m1Request $request
     *
     * @return Response
     */
    public function update($id, UpdateExerciciosc1m1Request $request)
    {
        $exerciciosc1m1 = $this->exerciciosc1m1Repository->find($id);

        if (empty($exerciciosc1m1)) {
            Flash::error('Exerciciosc1M1 not found');

            return redirect(route('exerciciosc1m1s.index'));
        }

        $exerciciosc1m1 = $this->exerciciosc1m1Repository->update($request->all(), $id);

        Flash::success('Exerciciosc1M1 updated successfully.');

        return redirect(route('exerciciosc1m1s.index'));
    }

    /**
     * Remove the specified Exerciciosc1m1 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $exerciciosc1m1 = $this->exerciciosc1m1Repository->find($id);

        if (empty($exerciciosc1m1)) {
            Flash::error('Exerciciosc1M1 not found');

            return redirect(route('exerciciosc1m1s.index'));
        }

        $this->exerciciosc1m1Repository->delete($id);

        Flash::success('Exerciciosc1M1 deleted successfully.');

        return redirect(route('exerciciosc1m1s.index'));
    }
}
