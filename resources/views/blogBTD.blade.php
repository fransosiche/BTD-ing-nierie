@extends("templateBTD")
@section("content")

<div class="intro-section site-blocks-cover innerpage" style="background-image: url('/images/hero_1.jpg');">
    <div class="container">
        <div class="row align-items-center text-center border">
            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <h1>Nos prestations</h1>
                @if (isset(Auth::user()->isadmin))
                    @if($permissions == '1')
                        <a href='/blogBTD/create'>
                            <button type="button" class="btn btn-dark">Ajouter un post</button>
                        </a>
                    @endif
                @endif
                <p class="text-white text-center">
                    <a href="/">Accueil</a>
                    <span class="mx-2">/</span>
                    <span>Prestation</span>
                </p>
            </div>
        </div>
    </div>
</div>



<div class="site-section">
    <div class="container">
        <div class="row">
            @foreach($data as $key=> $data)
            <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                <div class="blog-entry">
                    <a href="/blogBTD/post/{{$data -> ID}}" class="img-link">
                        <img src="images/{{$data -> Image_1}}" alt="Image" class="img-fluid img-carr2">
                    </a>
                    <div class="blog-entry-contents">
                        <h3><a href="/blogBTD/post/{{$data -> ID}}"></a>{{$data -> Name}}</h3>
                        <div class="meta">{{$data -> Lieu}} </div>
                        @if (isset(Auth::user()->isadmin))
                            @if($permissions == '1')
                                <a href="/blog/delete/{{ $data->ID}}">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        Supprimer
                                    </button>
                                </a>
                                <a href="blogBTD/edit/{{ $data->ID}}">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Editer
                                    </button>
                                </a>
                            @endif
                        @endif
                    </div>

                </div>
            </div>
                @endforeach
        </div>
    </div>
</div>

@endsection
