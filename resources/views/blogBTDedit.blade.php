@extends("templateBTD")

@section("content")
    <div class="container" style="margin-bottom: 35px; margin-top: 75px">
        @foreach($data as $key => $data)
<br>
<br>
            <form action="{{ url('/blogBTD/updatepost')}}/{{$data->ID}}" method="post" role="form"
                  enctype="multipart/form-data" onsubmit="return verifForm(this)">
                @csrf
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input name="name" class="form-control" value="{{$data->Name}}" onblur="verifName(this)">
                </div>
                <div class="form-group">
                    <label type="textarea" for="Description">Description</label>
                    <input name='description' class="form-control" value="{{$data->Description}}"
                           onblur="verifDescription(this)">
                </div>
                <div class="form-group">
                    <input type='hidden' name='id_image1' class="form-control" value="{{$data->Image_1}}">
                    <img src="{{ url('/images')}}/{{$data->Image_1}}" width="10%" height="10%" border="0"/>
                </div>
                <div class="form-group">
                    <label for="image">Change Picture</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <input type='hidden' name='id_image2' class="form-control" value="{{$data->Image_1}}">
                    <img src="{{ url('/images')}}/{{$data->Image_3}}" width="10%" height="10%" border="0"/>
                </div>
                <div class="form-group">
                    <label for="image">Change Picture</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <input type='hidden' name='id_image3' class="form-control" value="{{$data->Image_1}}">
                    <img src="{{ url('/images')}}/{{$data->Image_2}}" width="10%" height="10%" border="0"/>
                </div>
                <div class="form-group">
                    <label for="image">Change Picture</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Lieu">Lieu</label>
                    <input name='Lieu' class="form-control" value="{{$data->Lieu}}" >
                </div>
                <button type="submit" class="btn btn-primary">Sauvegarder</button>
            </form>
        @endforeach
    </div>

@endsection
