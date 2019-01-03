@extends('customlayout.app')

@section('content')

@if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
  </div> <br />
@endif


    <div class="row">
      <form action="{{ route('profile.update', $userinfo[0]->id) }} " method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="col-sm-3">
              <img src="{{url('/storage/app/'.$userinfo[0]->profile_picture)}}" id="userprofileimg" style="width:200px;height:200px;  " />
              <input type="file" name="profileimage" style="margin-top:20px;" id="profileimage" />
        </div>

        <div class="col-sm-7">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Personal Information</h3>
              </div>
              <div class="panel-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name= "name" value=" {{$userinfo[0]->name}} ">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" class="form-control" style="height:150px;">{{$userinfo[0]->address}}</textarea>
                </div>

                <div class="form-group">
                    <label for="services">Services (Use comma to separate)</label>
                    <textarea name="services" class="form-control" id="services">{{ $userinfo[0]->services }}</textarea>
                    <!-- <input type="text" class="form-control" id="services" name= "services" value="{{ $userinfo[0]->services }}"> -->
                </div>

                <div class="form-group">
                    <label for="contactnum">Contact Number</label>
                    <input type="text" class="form-control" id="contactnum" name= "contactnum" value="{{ $userinfo[0]->contactnumber }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name= "email" value="{{ $userinfo[0]->email }}">
                </div>


                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name= "username" value="{{ $userinfo[0]->username }}">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name= "password" value="!password">
                </div>

                <div class="form-group">
                      <label for="category">Category</label>
                      <select class="form-control" id="category" name="category">
                          @foreach($categories as $category)
                            @if($category->id == $userinfo[0]->category_id)
                                <option value="{{ $category->id }}" selected>{{ $category->category_name }}</options>
                            @else
                              <option value="{{ $category->id }}">{{ $category->category_name }}</options>
                            @endif
                          @endforeach
                      </select>
                </div>


                <div class="form-group">
                    <label for="username">Sample Works (Upload Photo)
                      @if(count($userworks) > 0)
                        <a href="#" data-toggle="modal" data-target="#deleteWorksModal" style="color:red;" title="Delete Photos"><i class="fa fa-trash"></i></a>
                      @endif
                    </label>
                    <input type="file" name="worksphoto[]" id="worksphoto" multiple />

                    <div class="gallery" style="margin-top:20px;"></div>
                </div>



                <div class="form-group">

                        @foreach($userworks as $userwork)
                          <img src="{{url('/storage/app')}}{{'/'.$userwork->photo}}" style="width:100px;height:100px;margin-left:10px;" />
                        @endforeach

                </div>

                <div class="form-group">
                    <input type="hidden" name="oldpicture" value="{{ $userinfo[0]->profile_picture }}" />
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                </div>
              </div>
          </div>
        </div>

      </form>

      <div class="clearfix"></div>

    </div>




<!-- Modal -->
<div class="modal fade" id="deleteWorksModal" tabindex="-1" role="dialog" aria-labelledby="deleteWorksModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this photos?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="deletePhotos()">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>


<input type="hidden" id="userid" value="{{ $userinfo[0]->id }}" />

@endsection
