@extends('layouts.index')

@section('content')
  <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Boardings Info </h4>
                    <form class="forms-sample" enctype="multipart/form-data" method="POST"
                        action="{{ route('rooms.update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $room->id }}">
                        <div class="form-group">
                            <label for="categories">Name Of Boarding House</label>
                            <input type="text" name="categories" class="form-control" id="categories"
                                value="{{ $room->categories }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button class="btn btn-primary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
