<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Session;

class ChildrenController extends Controller
{
    function children(Request $req){
        
        // $data = Children::all();
        // return view('children.index',['child' => $data]);
        $userId = Session::get('user')['id'];
        $data =  DB::table('users')
        ->join('childrens','users.id','=','childrens.p_id')
        ->where('childrens.p_id',$userId)
        ->get();
        
        return view('children.index',['child' => $data]);
    }
    function create(Request $req){
        // return 'welcome';
        //оруулсан өгөгдлийн харуулах
        // return $req->all();
        // Children::create($req->all());
        if($req->session()->has('user'))
        {
            $data = new Children;
            $data->ovog = $req->ovog;
            $data->ner = $req->ner;
            $data->r_number = $req->r_number;
            $data->date_of_birth = $req->date_of_birth;
            $data->hvis = $req->hvis;
            $data->p_id = $req->session()->get('user')['id'];
            $data->save();
            return redirect('/children');

        }
        else{
            return redirect('/log');
        }
        
    } 
    function edit($id){
        $dataChild = Children::find($id);
        // dd($dataChild);

        return view('children.edit',['child' => $dataChild]);
    }

    function update(Request $req, $id){
        $dataChild = Children::find($id);
        $dataChild->update($req->all());
        return redirect('/children')->with('success','Амжилттай нэмэгдлээ!!!');
    }
    function delete($id){
        $dataChild = Children::find($id);
        // dd($dataChild);
        $dataChild->delete($dataChild);
        return redirect('/children')->with('success','Амжилттай устгагдлаа!!!');
    }

    
}
