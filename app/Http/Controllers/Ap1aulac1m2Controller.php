<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp1aulac1m2Request;
use App\Http\Requests\UpdateAp1aulac1m2Request;
use App\Repositories\Ap1aulac1m2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Input;

class Ap1aulac1m2Controller extends AppBaseController
{
    /** @var  Ap1aulac1m2Repository */
    private $ap1aulac1m2Repository;

    public function __construct(Ap1aulac1m2Repository $ap1aulac1m2Repo)
    {
        $this->ap1aulac1m2Repository = $ap1aulac1m2Repo;
    }

    /**
     * Display a listing of the Ap1aulac1m2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ap1aulac1m2s = $this->ap1aulac1m2Repository->all();

        return view('ap1aulac1m2s.index')
            ->with('ap1aulac1m2s', $ap1aulac1m2s);
    }

    /**
     * Show the form for creating a new Ap1aulac1m2.
     *
     * @return Response
     */
    public function create()
    {
        return view('ap1aulac1m2s.create');
    }

    /**
     * Store a newly created Ap1aulac1m2 in storage.
     *
     * @param CreateAp1aulac1m2Request $request
     *
     * @return Response
     */
    public function store(CreateAp1aulac1m2Request $request)
    {
        $input = $request->all();
        $file = Request::file('aula');
        $aula = \Aula::make(\Request::file('aula'));
        $path = public_path().'/aulasc2';

        $aula->save($path.$file->getClientOriginalName());
        $ap1aulac1m2 = $this->ap1aulac1m2Repository->create($input);

        Flash::success('Ap1Aulac1M2 saved successfully.');

        return redirect(route('ap1aulac1m2s.index'));
    }

    /**
     * Display the specified Ap1aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ap1aulac1m2 = $this->ap1aulac1m2Repository->find($id);

        if (empty($ap1aulac1m2)) {
            Flash::error('Ap1Aulac1M2 not found');

            return redirect(route('ap1aulac1m2s.index'));
        }

        return view('ap1aulac1m2s.show')->with('ap1aulac1m2', $ap1aulac1m2);
    }

    /**
     * Show the form for editing the specified Ap1aulac1m2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ap1aulac1m2 = $this->ap1aulac1m2Repository->find($id);

        if (empty($ap1aulac1m2)) {
            Flash::error('Ap1Aulac1M2 not found');

            return redirect(route('ap1aulac1m2s.index'));
        }

        return view('ap1aulac1m2s.edit')->with('ap1aulac1m2', $ap1aulac1m2);
    }

    /**
     * Update the specified Ap1aulac1m2 in storage.
     *
     * @param int $id
     * @param UpdateAp1aulac1m2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateAp1aulac1m2Request $request)
    {
        $ap1aulac1m2 = $this->ap1aulac1m2Repository->find($id);

        if (empty($ap1aulac1m2)) {
            Flash::error('Ap1Aulac1M2 not found');

            return redirect(route('ap1aulac1m2s.index'));
        }

        $ap1aulac1m2 = $this->ap1aulac1m2Repository->update($request->all(), $id);

        Flash::success('Ap1Aulac1M2 updated successfully.');

        return redirect(route('ap1aulac1m2s.index'));
    }

    /**
     * Remove the specified Ap1aulac1m2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ap1aulac1m2 = $this->ap1aulac1m2Repository->find($id);

        if (empty($ap1aulac1m2)) {
            Flash::error('Ap1Aulac1M2 not found');

            return redirect(route('ap1aulac1m2s.index'));
        }

        $this->ap1aulac1m2Repository->delete($id);

        Flash::success('Ap1Aulac1M2 deleted successfully.');

        return redirect(route('ap1aulac1m2s.index'));
    }
}
