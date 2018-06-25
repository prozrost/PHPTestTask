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
        <label for="name1">Name</label>
        <input type="text" class="form-control" id="name1" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="phone1">Phone</label>
        <input type="text" class="form-control" id="phone1" placeholder="Phone" name="phone">
    </div>
    <div class="form-check">
        <input type="hidden" name="page_id" value="1">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @endsection