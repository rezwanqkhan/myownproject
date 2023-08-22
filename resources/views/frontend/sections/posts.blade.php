
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <!-- Page content-->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Blog entries-->
            <div class="col-lg-12">
                <!-- Nested row for non-featured blog posts-->
                <div class="col text-center">
                    <hr class="row">
                    @foreach ($posts->chunk(3) as $postChunk)
                    <div class="row mb-4">
                        @foreach ($postChunk as $post)
                        
                        <div class="col-lg-4 mb-4">
                            <div class="card-img-top" style="border-width: 10px; overflow: hidden; display: inline-block;">
                                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <h1 class="post-title">{{$post->title}}</h1>
                                    <h3 class="post sub_title">{{$post->sub_title}}</h3>
                                    <a class="btn btn-primary" href="{{route('home.show',['post'=> $post])}}">Read more →</a> 
                                    <div class="small text-muted">{{$post->created_at->diffForHumans()}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                    <hr class="my-4"></hr>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</section>



   

