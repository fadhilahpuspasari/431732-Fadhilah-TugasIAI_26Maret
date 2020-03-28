<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class TaskController extends BaseController
{
    public function prime(){
        $num=1;
        $data['prime'] = [];
        while($num<100){
            $n = isPrime($num);
            if($n!=null){
                $data['prime'][] = $n ;
                
            }
        $num++;
        }
        
        return response()->json($data);

        

    }
}