@extends('layout')

@section('konten')

<h4>Data absen Pegawai Negri Sipil (PNS)</h4>

<div class="d-flex">
    <h4>List Absen</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{route('pegawai.tambah')}}">Silahkan Absen</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>NAMA</th>
        <th>ABSEN</th>
        <th>JAM MASUK</th>
        <th>JAM KELUAR</th>
        <th>ACTION</th>
    </tr>
    @foreach($pegawai as $no=>$pegawais)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{$pegawais->nip}}</td>
        <td>{{$pegawais->nama}}</td>
        <td>{{$pegawais->absen}}</td>
        <td>{{$pegawais->jam_masuk}}</td>
        <td>{{$pegawais->jam_keluar}}</td>
        <td class="d-flex mx-2">
            <a class="btn btn-warning" href="{{route('pegawai.edit', $pegawais->id)}}" class="mx-auto">Edit</a>
            <form action="{{route('pegawai.delete', $pegawais->id)}}" method="POST">
                @csrf
                <button class="btn btn-danger ms-2">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection