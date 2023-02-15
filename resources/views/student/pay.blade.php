@extends('student.layout.layout')

@section('content')

<div class="container ps-5 " style="max-width:80%">
    <div class="card"style="background-color: rgb(193, 189, 182,.2)">
        <div class="card-body">
          <h2 class="card-title">Payment Details</h2>
          <p class="card-description">
           Add your Payment Details
          </p>
          <form class="forms-sample" method="POST" action="{{ route('pay') }}" enctype="multipart/form-data">
            @csrf
            <h5>Select Fee Category</h5>
            @foreach ($feeses as $fee )
            <div class="form-check form-check-success">
                <label class="form-check-label">

                  <input type="checkbox" name="{{$fee->id}}" class="form-check-input" value="{{$fee->id}}">
                  {{$fee->fee_type}}(rs {{$fee->fee}})
                </label>
              </div>
            @endforeach

            <div class="form-group">
              <label for="exampleInputName1">Amount </label>
              <input type="text" class="form-control" id="exampleInputName1" name="amount" placeholder="amount">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Slip</label>
              <input type="file" name="slip" class="form-control" id="exampleInputEmail3" placeholder="slip">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Date(paid) </label>
                <input type="date" name="date" class="form-control" id="exampleInputEmail3" placeholder="date">
              </div>



            <button type="submit" class="btn btn-primary me-2">Submit</button>

          </form>
        </div>
      </div>

    </div>


@endsection
