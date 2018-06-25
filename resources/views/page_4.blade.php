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
        <label for="name4">Name</label>
        <input type="text" class="form-control" id="name4" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="phone4">Phone</label>
        <input type="text" class="form-control" id="phone4" placeholder="Phone" name="phone">
    </div>
    <div class="form-check">
        <input type="hidden" name="page_id" value="4">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @endsection