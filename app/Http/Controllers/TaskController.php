<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function insertform(){
        return view('task_create');
}
    public function insert(Request $request){
        $body = $request->input('user_text');
        echo 'your text:'.$body.'<br>';
        $successful = $request->input('do_it');
        echo 'do it:'.$successful.'<br>';
        $user_id=$request->input('user_id');
        echo 'your id:'.$user_id.'<br>';
        echo 'added time:'.date("Y-m-d H:i");
       $data=array('body'=>$body,"successful"=>$successful,
            "user_id"=>$user_id,'time'=>date("Y-m-d H:i"),
            'created_at'=>date("Y-m-d H:i"),
            'updated_at'=>date("Y-m-d H:i")
            );
        DB::table('tasks')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
