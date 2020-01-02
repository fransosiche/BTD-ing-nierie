@extends("templateBTD")

@section("content")

    <div class="container">
        @csrf
        <br>
        <br>
        <br><br>

        {!!form($Itemform)!!}
    </div>
    <p>
        <br>
        <br>
    </p>
    @endsection
