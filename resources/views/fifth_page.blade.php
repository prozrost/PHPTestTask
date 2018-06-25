@extends('master')
@section('content')
<form method="POST" action="/order" style="width: 250px;margin: 0 auto;">
    @csrf
    <div class="form-group">
        <label for="name5">Name</label>
        <input type="text" class="form-control" id="name5" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="phone5">Phone</label>
        <input type="text" class="form-control" id="phone5" placeholder="Phone" name="phone">
    </div>
    <div class="form-check">
        <input type="hidden" name="page_id" value="5">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @endsection