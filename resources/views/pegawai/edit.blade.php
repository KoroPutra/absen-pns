@extends('layout')

@section('konten')

<h1>Edit Absen Pegawai</h1>

<form action="{{route('pegawai.submit')}}" method="POST" class="flex flex-col">
    @csrf
    <label for="">NIP</label>
    <input type="number" name="nip" value="{{$pegawai->nip}}" class="form-control mb-2">
    <label for="">NAMA</label>
    <input type="text" name="nama" value="{{$pegawai->nama}}" class="form-control mb-2">
    <label for="">ABSEN</label>
    <input type="text" name="absen" value="{{$pegawai->absen}}" class="form-control mb-2">
    <label for="">JAM MASUK </label>
    <br>
    <input type="text" value="{{$pegawai->jam_masuk}}" class="form-control mb-2" disabled>
    <input type="date" name="jam_masuk" value="{{$pegawai->jam_masuk}}" class="form-control mb-2">
    <label for="">JAM PULANG</label>
    <input type="text" value="{{$pegawai->jam_keluar}}" class="form-control mb-2" disabled>
    <input type="date" name="jam_keluar" value="{{$pegawai->jam_keluar}}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection