@extends('layouts.index')

@section('content')
  <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Update Boardings Info </h4>
                    <form class="forms-sample" enctype="multipart/form-data" method="POST"
                        action="{{ route('boardings.update') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $boarding->id }}">
                        <div class="form-group">
                            <label for="name_of_bh">Name Of Boarding House</label>
                            <input type="text" name="name_of_bh" class="form-control" id="name_of_bh"
                                value="{{ $boarding->name_of_bh }}">
                        </div>
                        <div class="form-group">
                            <label for="owner">Owner</label>
                            <input type="text" name="owner" class="form-control" id="owner"
                                value="{{ $boarding->owner }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description"
                                value="{{ $boarding->description }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address"
                                value="{{ $boarding->address }}">
                        </div>
                        <div class="form-group">
                            <label for="contact_number">Contact Number</label>
                            <input type="number" name="contact_number" class="form-control" id="contact_number"
                                value="{{ $boarding->contact_number }}">
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <div class="input-group col-xs-12">
                                <input type="file" name="image" class="form-control file-upload-info"
                                    placeholder="Upload Image">
                            </div>
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
