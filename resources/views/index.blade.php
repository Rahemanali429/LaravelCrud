@extends('layout.master')

@section('content')

<a href="add" class="btn btn-success mt-5">Add</a>

<table class="table mt-5">
    <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Standard</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cruds as $crud)
        <tr align="center">
            <td>{{$crud->id}}</td>
            <td>{{$crud->name}}</td>
            <td>{{$crud->standard}}</td>
            <td>{{$crud->age}}</td>
            <td>
                <form action="edit" method="GET">
                    <input type="hidden" value="{{$crud->id}}" name="id">
                    <button class="btn btn-primary" type="submit">Edit</button>
                </form>
            </td>
            <td>
                <form action="delete" method="POST">
                    @csrf
                    <input type="hidden" value="{{$crud->id}}" name="id">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection