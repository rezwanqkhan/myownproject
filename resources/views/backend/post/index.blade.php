@extends('backend.layout.masterone')
                <!-- End of Topbar -->
@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

 
      
    <div class="card">
        <h5 class="card-header">Posts
            <a href="{{route('post.create')}}" class ='btn btn-success float-right'>Add Post</a>
        </h5
        </h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>SubTitle</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- takiing data from data base and showing it --}}
                    @foreach ($posts as $index=>$post)
                     <tr>
                      {{-- when change the number of pages in the mainpage it will chang the number accoringly --}}
                <td>{{($posts->currentPage()*10) -10 + $index+1}}</td> 

                        <td>  {{$post->title}}</td>

                        <td>  {{$post->sub_title}}</td>

                        <td> 
                            <a href="#"  class= "delete" id="{{$post->id}}"><i class="fa fa-trash"></i></a>
                            <a href="{{route('post.edit', ['post'=>$post->id])}}"><i class="fa fa-edit"></i></a>
                        </td>


                    </tr>       
                    @endforeach
                </tbody>
            </table>
           <tfoot>
            {{$posts->links()}}
           </tfoot>
        </div>
      </div>
</div>
<!-- /.container-fluid -->

    
@endsection
              
 @section('script')  
 
       <script>
         $('.delete').click(function(){

              Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {

    var id = $(this).attr('id');
    var url = 'post/'+id;

    $.ajax({
       
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url:url,
        type:'DELETE',
        datatype:'json',
        data:{"_method":"Delete",},
        success: function(data){
            location.reload();
        }
    
    
    })
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
   
  }
})

             })
       </script>

 @endsection