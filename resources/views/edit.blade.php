@extends('layout.master')

@section('content')
<div class="row mt-5">
    <div class="col-md-6">
        <h1 align="center">Edit Record Here</h1>
        <form method="POST" action="edit">
            @csrf
            <input type="hidden" value="{{$cruds->id}}" class="form-control" name="id" /><br />
            <div class="form-group">
                <label for="first_name">Name:</label><br />
                <input type="text" value="{{$cruds->name}}" class="form-control" name="name" /><br />
            </div>
            <div class="form-group">
                <label for="first_name">Standard:</label><br />
                <input type="text" value="{{$cruds->standard}}" class="form-control" name="standard" /><br />
            </div>
            <div class="form-group">
                <label for="gender">Age:</label><br />
                <input type="text" value="{{$cruds->age}}" class="form-control" name="age" /><br />
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
</div>

@endsection