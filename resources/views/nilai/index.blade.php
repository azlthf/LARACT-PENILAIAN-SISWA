@extends('main.layout')
@section('content')
  <center>
    <b>
      <h2>LIST NILAI</h2>
      {{-- @if (session('user')->role == 'guru') --}}
        <a href="/nilai/create" class="button-primary">Tambah Data</a>
      {{-- @endif --}}

      @if (session('success'))
        <p class="text-success">{{ session('success') }}</p>
      @endif  

      <table cellpadding="10">
        <tr>
          <th>NO</th>
          <th>GURU MAPEL</th>
          <th>NAMA SISWA</th>
          <th>UH</th>
          <th>UTS</th>
          <th>UAS</th>
          <th>NA</th>
          <th>ACTION</th>
          {{-- @if (session('user')->role == 'guru')
            <th>ACTION</th>
          @endif --}}
        </tr> 
        @foreach ($nilai as $each )
          <tr>
            <th>{{ $loop->iteration }}</th>
            <th>{{ $each->mengajar->guru->nama_guru }} {{ $each->mengajar->mapel->nama_mapel }}</th>
            <th>{{ $each->siswa->nama_siswa }}</th>
            <th>{{ $each->uh }}</th>
            <th>{{ $each->uts }}</th>
            <th>{{ $each->uas }}</th>
            <th>{{ $each->na }}</th>
            {{-- @if (session('user')->role == 'guru') --}}
              <th>
                <a href="/nilai/edit/{{ $each->id }}" class="button-warning">EDIT</a>
                <a href="/nilai/destroy/{{ $each->id }}" onclick="return confirm('Yakin Hapus ?')" class="button-danger">HAPUS</a>
              </th>
            {{-- @endif --}}
          </tr>
        @endforeach
      </table>
    </b>
  </center>
@endsection  