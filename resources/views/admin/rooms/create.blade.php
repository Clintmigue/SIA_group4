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
                    <label for="single">Single Room </label>
                    <select name ="single" id="single" style="width: 175px;;height: 26px;">
                    <option value =""></option>
                    <option value ="1">1</option>
                    <option value ="2">2</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="family">Family Room </label>
                    <select name ="family" id="family" style="width: 175px;;height: 26px;">
                    <option value =""></option>
                    <option value ="1">1</option>
                    <option value ="2">2</option>
                    <option value ="3">3</option>
                    <option value ="4">4</option>
                    <option value ="5">5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="couple">Couple Room </label>
                    <select name ="couple" id="couple" style="width: 175px;;height: 26px;">
                    <option value =""></option>
                    <option value ="2">2</option>
                    <option value ="4">4</option>
                    
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="employees">Employees Room </label>
                    <select name ="employees" id="employees" style="width: 175px;;height: 26px;">
                    <option value =""></option>
                    <option value ="1">1</option>
                    <option value ="2">2</option>
                    <option value ="3">3</option>
                    <option value ="4">4</option>
                    <option value ="5">5</option>
                    </select>
                    <div class="form-group">
                    <label for="students">Students Room </label>
                    <select name ="students" id="students" style="width: 175px;;height: 26px;">
                    <option value =""></option>
                    <option value ="1">1</option>
                    <option value ="2">2</option>
                    <option value ="3">3</option>
                    <option value ="4">4</option>
                    <option value ="5">5</option>
                    </select>
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
  </div>
@endsection

