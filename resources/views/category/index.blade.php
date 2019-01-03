@extends('customlayout.app')


@section('content')

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div> <br />
@endif


<h3 class="page-header">{{$categoryinfo[0]->category_name}}</h3>

<div class="row" style="margin-top:50px;">

  @foreach($categorylist as $users)
      <div class="col-sm-3">
        <div class="panel panel-default">
          <div class="panel-heading">
              <h5 style="text-align: center;">{{$users->name}}</h5>
          </div>
          <div class="panel-body">
            <img src="{{url('/storage/app')}}{{'/'.$users->profile_picture}}" style="width:100%;height:200px;" class="" />
            <div style="">

              <h5><b>Email:</b> {{$users->email}}</h5>
              <h5><b>Address:</b> {{$users->address}}</h5>
              <h5><b>Services:</b> {{$users->services}}</h5>
              <h5><b>Contact Number:</b> {{$users->contactnumber}}</h5>
              <a href="#" data-toggle="modal" data-target="#worksmodal" onclick="showWorks({{$users->id}})">Sample Works</a>
            </div>
          </div>
        </div>
      </div>
  @endforeach

</div>



<!-- Modal -->
<div class="modal fade" id="worksmodal" tabindex="-1" role="dialog" aria-labelledby="worksmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sample Works</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
              <div class="img-works">

              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


@endsection
