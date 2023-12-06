@extends('utama')

@section('hasil_barang')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Proses Barang</title>
</head>
<body>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">HARGA YANG HARUS DIBAYAR</h4>
                  <p class="card-description">
                    TOKO BERKAH DJAYA
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>
                            Kode Barang
                          </th>
                          <th>
                            Nama Barang
                          </th>
                          <th>
                            Jenis Varian
                          </th>
                          <th>
                            Quantity
                          </th>
                          <th>
                            Harga
                          </th>
                          <th>
                            Total Harga
                          </th>
                          <th>
                            Discont
                          </th>
                          <th>
                            Harga Bayar
                          </th>
                          <th>
                            Aktivitas
                          </th>
                        </tr>
                      </thead>
                      @foreach ($barangs as $a)
                      <tbody>
                        <tr>
                          <td>
                            {{ $a->kode_barang }}
                          </td>
                          <td>
                            {{ $a->nama_barang }}
                          </td>
                          <td>
                            {{ $a->jenis_varian }}
                          </td>
                          <td>
                            {{ $a->qty }}
                          </td>
                          <td>
                            {{ $a->harga_jual}}
                          </td>
                          <td>
                            {{ $a->total_harga}}
                          </td>
                          <td>
                            {{ $a->potongan_harga }} {{ $a->persentase_potongan}}%
                          </td>
                          <td>
                            {{ $a->harga_bayar }}
                          </td>
                          <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('edit', $a->id) }}" type="button" class="btn btn-info">Edit</a>
                            <a href="{{ route('delete', $a->id) }}" type="button" class="btn btn-danger">Hapus</a>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                    <br>
                      <a href="{{ route('input') }}" type="button" class="btn btn-primary">Tambah Barang</a>
                  </div>
                </div>
              </div>
            </div>
</body>
</html>
@endsection
