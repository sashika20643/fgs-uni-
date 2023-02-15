@extends('Admin.layout.layout')

@section('content')
<div class="container ps-5 " style="max-width:80%">
    <div class="card" style="background-color: rgb(214, 197, 166)">
        <div class="card-body">
          <h4 class="card-title">Basic form elements</h4>
          <p class="card-description">
            Basic form elements
          </p>
          <form class="forms-sample" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Registration number</label>
              <input type="email" name="registration_number" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail3">Course</label>
                <input type="email" name="registration_number" class="form-control" id="exampleInputEmail3" placeholder="Email">
              </div>


            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>

    </div>

@endsection
