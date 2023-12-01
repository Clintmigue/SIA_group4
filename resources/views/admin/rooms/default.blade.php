@extends('layouts.index')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <a href="{{ route('rooms.create') }}" class="btn btn-primary btn-icon-text">
                <i class="mdi mdi-plus btn-icon-prepend"></i>Add Rooms
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Rooms</h4>
                    <p class="card-description">
                        <!-- <code>6604</code> -->
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Single</th>
                                    <th>Family</th>
                                    <th>Couple</th>
                                    <th>Employees</th>
                                    <th>Students</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rooms as $room)
                                <tr>
                                    <td>{{ $room->id }}</td>
                                    <td>{{ $room->single }}</td>
                                    <td>{{ $room->family }}</td>
                                    <td>{{ $room->couple }}</td>
                                    <td>{{ $room->employees }}</td>
                                    <td>{{ $room->students }}</td>
                                    <td>
                                       
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $rooms->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
