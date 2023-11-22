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
    <h2>Harga Yang Harus DiBayar</h2>
    <p>Kode Barang: {{ $kode_barang }}</p>
    <p>Nama Barang: {{ $nama_barang }}</p>
    <p>Jenis Varian: {{ $jenis_varian }}</p>
    <p>Quantity: {{ $qty }}</p>
    <p>Harga Jual: {{ $harga_jual }}</p>
    <hr>
    <p>Total Harga: {{ $total_harga }}</p>
    <p>Potongan Harga {{ $potongan_harga }} ({{ $persentase_potongan}}%)</p>
    <p>Harga Setelah Diskon: {{ $harga_bayar }}</p>
</body>
</html>
@endsection
