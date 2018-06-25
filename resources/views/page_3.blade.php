@extends('master')
@section('content')
<form method="POST" action="/order" style="width: 250px;margin: 0 auto;">
    @csrf
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="form-group">
        <label for="name3">Name</label>
        <input type="text" class="form-control" id="name3" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="phone3">Phone</label>
        <input type="text" class="form-control" id="phone3" placeholder="Phone" name="phone">
    </div>
    <div class="form-check">
        <input type="hidden" name="page_id" value="3">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @endsection