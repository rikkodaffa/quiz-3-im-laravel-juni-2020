@extends ('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Artikel</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/artikel/{{$artikel->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{$artikel->judul}}" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">Artikel</label>
                        <input type="text" class="form-control" id="isi" name="isi" value="{{$artikel->isi}}" placeholder="Artikel">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{$artikel->slug}}" placeholder="Slug">
                    </div>
                    <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" id="tag" name="tag" value="{{$artikel->tag}}" placeholder="Tag">
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
                </div>
    </div>

@endsection