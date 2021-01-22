<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentativaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tentativa');
    }
    public function store(CreateAp1aulac1m1Request $request)
    {
        /*$this->validate($request, ['aula'=>'required']);

        $input = $request->all();

        if ($request->hasFile('aula')) {

echo 'sim';
            //return "tem";
        // $aula = $request->file('aula');
            //$aula_nome= time().'.'.$request->file('aula');
         //$aula->getClientOriginalName();

            //Storage::disk('public')->put('aulas', $request->file('aula'));
           //$location = storage_path('app/public/app/');            
            
           //$destination_path= public_path('/Ap1Aulas/ap1aulac1m1s');
           // $aula= $input['aula'];
            
//$path = $request->file('aula')->storeAs($destination_path,$aula_nome);
           // $aula->move($destination_path,$aula_nome);

            $input=$request->file('aula')->store('ap1aulac1m1s','public');
            # code...
            
//dd($request->all());
        
        }else{
            echo 'no';}$ap1aulac1m1 = $this->ap1aulac1m1Repository->create($input);

        Flash::success($input['aula'].' saved successfully.');

        //return redirect(route('ap1aulac1m1s.index'));*/
        return $request->file('aula');
    }
}