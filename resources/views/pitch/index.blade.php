@extends('layouts.app')
@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select class="form-control" id="type" name="type">
                                <option value="0">Restaurant</option>
                                <option value="1">Hostels</option>
                                <option value="2">Sport</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" class="form-control" id="location" placeholder="Location"
                                   name="location">
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h3>All Sport and other UBa Infrastructures</h3>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add
                        Infrastructure
                    </button>
                </div>
                @forelse ($infrastructures as $infrastructure)
                    <div class="card">
                        <img src="{{ asset($infrastructure->image) }}" alt="{{$infrastructure->name}}">
                    </div>
                @empty
                    <p>No infrastructure yet.</p>
                @endforelse
                {{ $infrastructures->links() }}
            </div>
        </div>
    </div>
@endsection