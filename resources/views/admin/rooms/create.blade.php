@extends('layouts.index')

@section('content')
  <div class="content-wrapper">
      <div class="row">
        <div class=" center col-lg-4  grid-margin stretch-card">
           <div class="card">
              <div class="card-body">
                <h4 class="card-title">Rooms</h4>
                <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('rooms.save') }}">

                  @csrf                   
                    <div class="form-group">
                    <label for="categories">Room Category </label>
                    <select name ="categories" id="categories" style="width: 175px;;height: 26px;">
                    <option value =""></option>
                    <option value ="Single">Single</option>
                    <option value ="Family Room">Family Room</option>
                    <option value ="Couple Room">Couple Room</option>
                    <option value ="Mix Room">Mix Room</option>
                    <option value ="Womens Room">Womens Room</option>
                    <option value ="Mens Room">Mens Room</option>
                    </select>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button class="btn btn-primary">Cancel</button>
                </form>
              </div>

            </div>
        </div>
      </div>
  </div>
  </div>
@endsection

