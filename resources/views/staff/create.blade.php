@extends('master')
@section('content')
<div class="container">
    <div class="col-md-offset-3 col-md-6">
        <h1>Create new staff member</h1>
        <br>
        @include('partials.errors')
        <form class="form" method="POST" action={{route('staff.store')}}>
            {{csrf_field()}}
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" name="id" value="{{old('id')}}">
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}">
            </div>

            <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" class="form-control" name="job_title" value="{{old('job_title')}}">
            </div>
            <div class="form-group">
                <label>Activity types</label>
                <div class="form-control">
                <div class="checkbox-inline"><label><input type="checkbox"
                    name="club">Clubs</label></div>
                <div class="checkbox-inline"><label><input type="checkbox"
                    name="competition">Competitions</label></div>
                <div class="checkbox-inline"><label><input type="checkbox"
                    name="sport">Sports</label></div>
                <div class="checkbox-inline"><label><input type="checkbox"
                    name="other">Others</label></div>
                </div>
            </div>

            <div class="form-group">
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">Create Staff</button>
                </div>
            </div>
        </form>
        <br>
    </div>
</div>
@endsection
