@extends('layouts.app');

@section('content')

    <div class="container">
        <a href="/school"> les autres ecoles</a>
        <table class="table">
            <thead>
                <th>#</th>
                <th>name</th>
                <th>description</th>
                <th>url</th>
            </thead>
            <tbody>
                <tr>
                    <td> {{$school->id}}</td>
                    <td> {{$school->name}}</td>
                    <td> {{$school->description}}</td>
                    <td> {{$school->url}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection