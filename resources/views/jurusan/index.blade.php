@extends('main.layout')
@section('content')
  <center>
      <b>
        <h2>LIST DATA JURUSAN</h2>
      </center>      
        <a href="/jurusan/create" class="button-primary" style="margin-left: 8%">TAMBAH DATA </a>
        <center>
          <table cellPadding="30" style="text-align: center">
            <tr>
              <th>NO</th>
              <th>NAMA JURUSAN</th>
              <th>ACTION</th>
            </tr>
            @foreach($jurusan as $j)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $j->nama_jurusan }}</td>
              <td>
                <a href="/jurusan/edit/{{ $j->id }}" class="button-warning">EDIT</a>
                <a href="/jurusan/destroy/{{ $j->id }}" onclick="return confirm('Yakin Hapus?')" class="button-danger">HAPUS</a>
              </td>
            </tr>
            @endforeach 
          </table>
      </b>
  </center>
@endsection