@extends('admin.layout.layout')

@section('content')

<div class="container ps-5 pe-5"  style="background-color: rgba(182, 188, 193, 0.5)">

    <form action="" class="mb-4">
        <div class="row align-items-center justify-content-center pb-3 pt-3 mb-3">
            <div class="col">
                <div class="input-group">

                    <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
                  </div>


            </div>
            <div class="col">
                <div class="input-group">

                <select class="form-select" aria-label="Default select example">
                    <option selected>Date Added</option>
                    <option value="Date">Date</option>
                    <option value="Status">Status</option>

                  </select>
                </div>

            </div>
            <div class="col">
                <div class="input-group">
         <button class="btn btn-success">
Search
         </button>
                </div>
        </div>
        </form>

<div class="table-responsive mt-5" >
    <table class="table table-striped">
      <thead>
        <tr>
            <th>
                Fee id
              </th>

              <th>
          Registration Number
               </th>
          <th>
            Fee Catagories
          </th>
          <th>
            Slip
          </th>
          <th>
            Amount
          </th>
          <th>
           Date
          </th>
          <th>
            Status
          </th>

        </tr>
      </thead>
      <tbody>
@foreach ( $payment as $fee )




        <tr>
               <td>
                {{$fee->id}}
          </td>

          <td>
            {{$fee->s_registraion}}
          </td>
          <td >
            <ul>
          @foreach ($data as $stu )

    @if ($fee->id==$stu->p_id)

<li>

{{$stu->fee_type}} ( {{$stu->fee}} )

</li>


          @endif
          @endforeach
        </ul>
        </td>
          <td>
            <a href="{{asset('slips/'.$fee->slip)}}" target="blank"><img src="{{asset('slips/'.$fee->slip)}}" alt=""></a>

          </td>
          <td>
            {{$fee->Amount}}
          </td>
          <td>
            {{$fee->Date}}
          </td>
          <td>
            <button class="btn btn-outline-warning">

            {{$fee->Status}}
            </button>
          </td>
        </tr>


        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
