@extends ('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Artikel</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/artikel" method="POST">
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Artikel</label>
                        <input type="text" class="form-control" id="isi" name="isi" placeholder="Tulis Artikel">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                    </div>
                    <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag">
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                
            </div>
    </div>

@endsection