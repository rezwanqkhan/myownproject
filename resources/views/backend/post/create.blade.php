@extends('backend.layout.masterone')
                <!-- End of Topbar -->
@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <div class="card">
        <div class="card-header">
          Creat Post
        </div>
        <div class="card-body">

            {{-- posting data to database --}}
          <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- each inputs --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name= "title"  class="form-control" placeholder="Enter the title">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="sub_title">Subtitle</label>
                <input type="text" name= "sub_title"  class="form-control" placeholder="Enter the subtitle">
                @error('sub_title')
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
              
           