<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    public function index()
    {
        $cruds = Crud::all();

        return view('index', compact('cruds'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'standard' => 'required',
            'age' => 'required'
        ], [
            'name.required' => 'Please Enter Valid Name',
            'standard.required' => 'Please Enter Valid Standard',
            'age.required' => 'Please Enter Valid Age',
        ]);

        $crud = new Crud;
        $crud->name =  $request->get('name');
        $crud->standard = $request->get('standard');
        $crud->age = $request->get('age');
        $crud->save();
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $crud = new Crud;
        $crud->id =  $request->get('id');
        $cruds = Crud::find($crud->id);
        return view('edit', compact('cruds'));
    }

    public function update(Request $request)
    {
        $crud = new Crud;
        $crud->id =  $request->get('id');
        $crud = Crud::find($crud->id);
        $crud->name =  $request->get('name');
        $crud->standard = $request->get('standard');
        $crud->age = $request->get('age');
        $crud->save();
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $crud = new Crud;
        $crud->id =  $request->get('id');
        $crud = Crud::find($crud->id);
        $crud->delete();
        return redirect('/');
    }

    public function getUsers($id)
    {
        return $id ? Crud::find($id) : Crud::all();
    }
}
