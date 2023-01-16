@extends('layout.main')

@section('container')   
    <table class="table table-light table-bordered mx-auto" style="width: 80rem; margin-top: 1.3rem;">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No. Wa/Telp</th>
            <th scope="col">Layanan</th>
            <th scope="col">Merk</th>
            <th scope="col">Plat Nomor</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Edit</th>            
            <th scope="col">Hapus</th>            
          </tr>
        </thead>
        <tbody>
          @foreach($post as $posts)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$posts->nama }}</td>
            <td>{{$posts->notelp }}</td>
            <td>{{$posts->layanan }}</td>
            <td>{{$posts->merk }}</td>
            <td>{{$posts->plat }}</td>
            <td>{{$posts->tanggal }}</td>
            <td><a href="/edit/{{$posts->id}}"type="button" class="btn btn-primary">Edit</a></td>
            <td>
              <form action="/delete/{{$posts->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
@endsection