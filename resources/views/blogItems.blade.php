@extends("templateBTD")

@section("content")
<div style ="padding-top: 70px" class="container">

    <div class="row">
@foreach($data as $key=> $data)
        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{$data->Name}}</h1>

            <!-- Author -->
            <p class="lead">
                <a >{{$data->Lieu}}</a>
            </p>

            <hr>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 img-carr2" src="/images/{{$data->Image_1}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-carr2" src="/images/{{$data->Image_2}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 img-carr2" src="/images/{{$data->Image_3}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <hr>

            <!-- Post Content -->
            <p class="lead">{{$data->Description}}

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">NOTRE RAISON D'ÊTRE</h5>
                <div class="card-body">
                    Etre un acteur dynamique dynamique et référant de la protection de la ressource « Eau » en France et à l’international.
                </div>
            </div>

        </div>
@endforeach
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

    @endsection
