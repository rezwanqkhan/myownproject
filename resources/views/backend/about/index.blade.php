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
          <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- each inputs --}}
            <div class="form-group">
                <label for="">Birthday</label>
                <input type="text" name= "Birthday"  class="form-control" placeholder="Enter the Birthday">
                @error('Birthday')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="City">City</label>
                <input type="text" name= "City"  class="form-control" placeholder="Enter the City">
                @error('City')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group">
                <label for="Age">Age</label>
                <input type="text" name= "Age"  class="form-control" placeholder="Enter the Age">
                @error('Age')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
            <div class="form-group">
                <label for="Degree">Degree</label>
                <input type="text" name= "Degree"  class="form-control" placeholder="Enter the Degree">
                @error('Degree')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                {{-- my-edotor is added for using laravel file managerfor text area --}}
             <textarea name="description" class="form-control my-editor"  cols="30" rows="10"></textarea>
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
              
           