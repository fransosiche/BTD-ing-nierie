@extends("templateBTD")
@section("content")
    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
            <div class="row align-items-center text-center border">
                <div class="col-lg-12 mt-5" data-aos="fade-up">
                    <h1>Contactez-nous</h1>
                    <h3 style="color : white;">pbiron.btdingenierie@gmail.com</h3>
                    <h3 style="color : white;">tchamou.btdingenierie@gmail.com</h3>
                    <h3 style="color : white;">adjomo.btdingenierie@gmail.com</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @csrf
        <br>
        {!!form($Itemform)!!}
    </div>
    <br>
@endsection
