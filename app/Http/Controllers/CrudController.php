<?php

namespace App\Http\Controllers;
use App\Models\Crud;
use Session;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function showData(){
        $showData = Crud::all();
        return view('show_data' , compact('showData'));
    }

    public function addData(){
        return view('add_data');
    }

    public function storeData(Request $request){
        $rules = [
            'name' => 'required|max:10',
            'email' => 'required|email',
        ];
        $this -> validate($request , $rules);
        $crud = new Crud();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('msg' , 'Data successfully added');
        return redirect('/');
    }

    public function editData($id = null){
        $editData = Crud::find($id);
          return view('edit_data', compact('editData'));
    }

    public function updateData(Request $request, $id){
        $rules = [
            'name' => 'required|max:10',
            'email' => 'required|email',
        ];
        $this -> validate($request , $rules);
        $crud =  Crud::find($id);
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('msg' , 'Data successfully upadted');
        return redirect('/');
    }

    public function deleteData($id=null){
        $deleteData = Crud::find($id);
        $deleteData->delete();
        Session::flash('msg' , 'Data successfully deleted');
        return redirect('/');
   }
}

