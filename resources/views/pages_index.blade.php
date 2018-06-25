@extends('master')
@section('content')
    <table class="table table-bordered" style="width: 800px;margin: 0 auto">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Yesterday CR</th>
            <th scope="col">Today CR</th>
            <th scope="col">Week CR</th>
            <th scope="col">Link</th>
        </tr>
        </thead>
        <tbody>


    @foreach($pages as $page)
        <tr>
            <th scope="row">{{ $page->id }}</th>
            <td>{{ $page->name }}</td>
            <td>{{ $page->yesterday_cr }}</td>
            <td>{{ $page->today_cr }}</td>
            <td>{{ $page->week_cr }}</td>
            <td><a href="{{ url("pages/$page->id")}} "> Go to page#{{$page->id}}</a> </td>
        </tr>
    @endforeach
        </tbody>
    </table>
    @endsection