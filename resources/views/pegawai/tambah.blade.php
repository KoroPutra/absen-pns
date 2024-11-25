@extends('layout')

@section('konten')

<h1>Absen Pegawai</h1>

<form action="{{route('pegawai.submit')}}" method="POST">
    @csrf
    <label for="">NIP</label>
    <input type="number" name="nip" class="form-control mb-2">
    <label for="">NAMA</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label for="">ABSEN</label>
    <input type="text" name="absen" class="form-control mb-2">
    <label for="">JAM MASUK </label>
    <input type="date" name="jam_masuk" class="form-control mb-2">
    <label for="">JAM PULANG</label>
    <input type="date" name="jam_keluar" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection