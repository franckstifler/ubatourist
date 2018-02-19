@extends('layouts.app')

@section('content')
    <div>
        <h3>{{ $school->name }} ( {{ $school->abbr }})</h3>
        <div class="col-md-6">
            <img src="" width="200" height="200" alt="">
            {{ $school->description }}
        </div>
        <div class="col-md-6">
            <h4>List of departments</h4>
            <table class="table">
                <thead>
                <th>#</th>
                <th>Department</th>
                <th>Abbr</th>
                <th>Description</th>
                </thead>
                <tbody>
                @foreach($school->departments as $department)
                    <tr>
                        <td>{{$department->id}}</td>
                        <td>{{$department->name}}</td>
                        <td>{{$department->abbr}}</td>
                        <td>{{$department->description}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection