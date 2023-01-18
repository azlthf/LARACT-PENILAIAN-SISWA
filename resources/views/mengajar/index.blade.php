@extends('main.layout')
@section('content')
  <center>
    <b>
      <h2>LIST DATA MENGAJAR</h2>
      <a href="/mengajar/create" class="button-primary">TAMBAH DATA</a>
      <table cellPadding="10">
        <tr>
          <th>NO</th>
          <th>GURU</th>
          <th>MATA PELAJARAN</th>
          <th>KELAS</th>
          <th>ACTION</th>
        </tr>
        @foreach ($mengajar as $meng )
          <tr style="text-align: center">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $meng->guru->nama_guru }}</td>
            <td>{{ $meng->mapel->nama_mapel }}</td>
            <td>{{ $meng->kelas->nama_kelas }}</td>
            <td>
              <a href="/mengajar/edit/{{ $meng->id }}" class="button-warning">EDIT</a>
              <a href="/mengajar/destroy/{{ $meng->id }}" onclick="return confirm('Yakin Hapus?')" class="button-danger">HAPUS</a>
            </td>
          </tr>
        @endforeach
      </table>
    </b>
  </center>
  @endsection