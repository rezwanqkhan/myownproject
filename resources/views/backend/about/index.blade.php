@extends('backend.layout.masterone')
                <!-- End of Topbar -->
@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <div class="card">
        <div class="card-header">
          About
        </div>
        <div class="card-body">

            {{-- posting data to database --}}
          <form action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- each inputs --}}
            {{-- image button --}}
            {{-- <div class="input-group">
              <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                </a>
              </span>
              <input id="thumbnail" class="form-control" type="text" name="image">
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;"> --}}
            <div class="form-group">
                <label for="">Birthday</label>
                <input type="text" name= "Birthday"  class="form-control" value="{{$about->Birthday}}" placeholder="Enter the Birthday">
                @error('Birthday')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="City">City</label>
                <input type="text" name= "City"  class="form-control" value="{{$about->City}}" placeholder="Enter the City">
                @error('City')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group">
                <label for="Age">Age</label>
                <input type="text" name= "Age"  class="form-control" value="{{$about->Age}}" placeholder="Enter the Age">
                @error('Age')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group">
                <label for="Degree">Degree</label>
                <input type="text" name= "Degree"  class="form-control" value="{{$about->Degree}}"  placeholder="Enter the Degree">
                @error('Degree')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                {{-- my-edotor is added for using laravel file managerfor text area --}}
             <textarea name="description" class="form-control my-editor"   cols="30" rows="10">{{$about->description}}</textarea>
             @error('description')
             <p class="text-danger">{{$message}}</p>
         @enderror
            </div>
         <button type="submite" class="btn btn-success">Save</button>
          </form>
        </div>
      </div>

</div>
<!-- /.container-fluid -->

    
@endsection
              
@section('script')

{{-- <script src="{{asset('vendor/laravel-filemanager/js/stand-alone-button.js)}}"></script> --}}
<script src="{{asset('/vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>

<script>
  $('#lfm').filemanager('image');
  </script>
@endsection     