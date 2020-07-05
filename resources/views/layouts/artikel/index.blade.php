@extends('layouts.master')

@section('content')
    <div class = "ml-3 mt-3">
        <h1>Daftar Artikel</h1>
        <a href="/artikel/create" class="btn btn-primary mb-3">
            Buat Artikel
        </a>
        <table class="table table-bordered">
                    <thead>                  
                        <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Isi Artikel</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artikel as $key => $artikel)
                            <tr>
                                <td> {{ $key+1 }} </td>
                                <td> {{ $artikel->judul }} </td>
                                <td>{{ $artikel->isi }}</td>
                                <td>{{ $artikel->tag }}</td>
                                <td> 
                                <a href="/artikel/{{$artikel->id}}" class="btn btn-info">Lihat</a>
                                <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-default">Edit</a>
                                <form action ="/artikel/{{$artikel->id}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                </button>
                                </form>
                                </td>
                                
                            </tr>



                        @endforeach

                    </tbody>
                    </table>
    </div>

@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush