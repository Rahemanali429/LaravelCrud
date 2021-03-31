@extends('layout.master')

@section('content')
@if($errors->any())

<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
</div>

@endif
<div class="row mt-3">
    <div class="col-md-6">
        <h1 align="center">Add Record Here</h1>
        <form method="POST" action="add" class="mt-3">
            @csrf
            <div class="form-group">
                <label class="form-lable" for="first_name">Name:</label><br />
                <input type="text" class="form-control" name="name" /><br />
            </div>
            <div class="form-group">
                <label class="form-lable" for="first_name">Standard:</label><br />
                <input type="text" class="form-control" name="standard" /><br />
            </div>
            <div class="form-group">
                <label class="form-lable" for="gender">Age:</label><br />
                <input type="text" class="form-control" name="age" /><br />
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
</div>

@endsection