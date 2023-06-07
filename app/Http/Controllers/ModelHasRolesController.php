<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

class ModelHasRolesController extends Controller
{
    //
    function index ()
    {

        $data =  array('data'=>array(), 'pagination'=>"", 'enableButtons'=>['add'=>0,'read'=>0,'edit'=>0,'delete'=>0]);

        return view('dashboard.modelhasrole.index' ,[
            'datas' => $data['data'],
            'pagination' => $data['pagination'],
            'enableButtons' => $data['enableButtons']]);
    }

    function create()
    {
        return "create";
    }
}
