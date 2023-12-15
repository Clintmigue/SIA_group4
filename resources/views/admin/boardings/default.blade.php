@extends('layouts.index')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <a href="{{ route('boardings.create') }}" class="btn btn-primary btn-icon-text">
                <i class="mdi mdi-plus btn-icon-prepend"></i> Add Boardings
            </a>
             <ul class="navbar-nav mr-lg-2 ">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">

            </div>
          </li>
        </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Boarding Houses</h4>
                    <p class="card-description">
                        <!-- <code>6604</code> -->
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>Name of Boarding House</th>
                                    <th>Owner</th>
                                    <th>Description</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($boardings as $boarding)
                                <tr>
                                    <!-- <td>{{ $boarding->id }}</td> -->
                                    <td>{{ $boarding->name_of_bh }}</td>
                                    <td>{{ $boarding->owner }}</td>
                                    <td>{{ $boarding->description }}</td>
                                    <td>{{ $boarding->address }}</td>
                                    <td>{{ $boarding->contact_number }}</td>
                                    <td>
                                        <a href="{{ route('boardings.view', ['id'=> $boarding->id]) }}">View</a>
                                        <a href="{{ route('boardings.delete', ['id'=> $boarding->id]) }}">Delete</a>
                                        <a href="{{ route('boardings.edit', ['id'=> $boarding->id]) }}">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {!! $boardings->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
