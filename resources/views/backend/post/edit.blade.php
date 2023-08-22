@extends('backend.layout.masterone')
                <!-- End of Topbar -->
@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <div class="card">
        <div class="card-header">
          Edit Post
        </div>
        <div class="card-body">

            {{-- posting data to database --}}
          <form action="{{route('post.update', ['post'=>$post->id])}}" method="post" enctype="multipart/form-data">
            @csrf
             @method('PUT')
            {{-- each inputs --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name= "title"  class="form-control"  value="{{$post->title}}" placeholder="Enter the title">
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitle</label>
                <input type="text" name= "sub_title"  class="form-control" value="{{$post->sub_title}}" placeholder="Enter the subtitle">
                @error('sub_title')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                {{-- my-edotor is added for using laravel file managerfor text area --}}
             <textarea name="description" class="form-control my-editor"  cols="30" rows="10">{{$post->description}}</textarea>
             @error('description')
             <p class="text-danger">{{$message}}</p>
         @enderror
            </div>
         <button type="submite" class="btn btn-success">Update</button>
          </form>
        </div>
      </div>

</div>
<!-- /.container-fluid -->

    
@endsection
              
           