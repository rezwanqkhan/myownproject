@extends('frontend.home.index')
@section('content')

    <body>
    
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1">{{$post->title}}</h1>
                            <h2 class="subheading" >{{$post->sub_title}}</h2>
                            <!-- Post meta content-->
                        
                            <!-- Post categories-->
                            {{-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                            <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> --}}
                            <span class="meta">{{$post->created_at->diffForHumans()}}</span>
                            <hr>
                        </header>
                        <!-- Preview image figure-->
                        {{-- <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure> --}}
                        <!-- Post content-->
                        <section class="mb-5">
                           @php echo $post->description @endphp                           
                        </section>
                    </article>
                  
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('frontend/showpost/js/scripts.js')}}"></script>
    </body>

@endsection

