<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAp1aulac1m1Request;
use App\Http\Requests\UpdateAp1aulac1m1Request;
use App\Repositories\Ap1aulac1m1Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\File;
//use Illuminate\Support\Facades\Request;
use Flash;
use Response;
//use Illuminate\Http\UploadedFile;
use App\Filename;


class UploadController extends Controller
{
    public function uploadForm(){
    	return view('upload');
    }

    public function uploadFile(Request $request){
    	$request->file->store('public');
    	return "uploaded";
    }
}
