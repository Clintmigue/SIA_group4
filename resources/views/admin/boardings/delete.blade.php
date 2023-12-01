@extends('layouts.index')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <!-- Breadcrumb content goes here if needed -->
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Delete Boarding House</h4>
                    <div class="table-responsive pt-3">
                        <form action="{{ route('boardings.delete', ['id'=> $boarding->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name of Boarding House</th>
                                    <th>Owner</th>
                                    <th>Description</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $boarding->id }}</td>
                                    <td>{{ $boarding->name_of_bh }}</td>
                                    <td>{{ $boarding->owner }}</td>
                                    <td>{{ $boarding->description }}</td>
                                    <td>{{ $boarding->address }}</td>
                                    <td>{{ $boarding->contact_number }}</td>
                                    <td>
                                        <a href="{{ route('boardings.index') }}" class="btn btn-secondary">Cancel</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
