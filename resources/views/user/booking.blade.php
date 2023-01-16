@extends('layout.main')

@section('container')
<div class="container mt-5" style="background-color: white; width: 80rem; height: 28rem; border-radius: 1rem;">
    <form method="POST" action="/inputanbooking" class="row g-3 mx-auto" style="width: 70rem; margin-top: 1rem;">
    @csrf
        <div class="col-6">
            <label for="text" class="form-label">Nama</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Username" name="nama" required>
          </div>
        <div class="col-md-6">
          <label for="category" class="form-label ms-auto">Layanan</label>
          <select class="form-select" aria-label="Default select example" name="layanan" required>
            <option  selected>Pilih Layanan</option>
            <option value="Cuci Luar">Cuci Luar (Rp. 100.000)</option>
            <option value="Cuci Dalam">Cuci Dalam (Rp. 150.000)</option>
            <option value="Cuci Luar Dalam">Cuci Luar Dalam (Rp. 250.000)</option>
          </select>
        </div>
          <div class="col-6">
            <label for="inputAddress2" class="form-label">No WA/Telp</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="0812xxxxxxxx" name="notelp" required>
          </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Tanggal Booking</label>
            <input type="date" class="form-control" id="inputAddress" placeholder="dd/xx/yyyy" name="tanggal"required>
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">Merk</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Toyota Avanza" name="merk" required>
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">Plat Nomor</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="L 1234 XY" name="plat" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-success"  role="button" style="font-weight: bold; text-align:center; width:500px;">Booking Sekarang</button>
        </div>
      </form>
</div>
@endsection