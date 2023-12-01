@extends('layouts.index')

@section('content')
  <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Boarding</h4>
                    <div class="form-group">
                        <label>Name of Boarding House:</label>
                        <h4>{{ $boarding->name_of_bh }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Owner:</label>
                        <h4>{{ $boarding->owner }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <h4>{{ $boarding->description }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <h4>{{ $boarding->address }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Contact Number:</label>
                        <h4>{{ $boarding->contact_number }}</h4>
                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <div class="image">
                            <img style="width: 100%" src="/{{ $boarding->img }}" alt="Boarding Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>
@endsection
