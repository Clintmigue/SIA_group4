@extends('layouts.index')

@section('content')
  <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Room</h4>
                    <div class="form-group">
                        <label>Room Category:</label>
                        <h4>{{ $room->categories }}</h4>
                    </div>
                   
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>
@endsection
