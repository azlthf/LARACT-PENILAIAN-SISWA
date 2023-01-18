@extends('main.layout')
@section('content')
  <center>
    <b>
      <h2>EDIT DATA KELAS</h2>
    </center>
    <center>    
    <form action="/kelas/update/{{ $kelas->id }}" method="POST">
    @csrf
      <table width="50%">
        <tr>
          <tr>
            <td class="bar">KELAS</td>
            <td class="bar">
              <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas}}">
            </td>
          </tr>
          <tr>
            <td class="bar">JURUSAN</td>
            <td class="bar">
              <select name="jurusan_id">
                <option></option>
                @foreach ($jurusan as $j )
                    @if ($kelas->jurusan_id == $j->id) 
                      <option value="{{ $j->id }}" selected>{{ $j->nama_jurusan }}</option>
                    @else  
                      <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                    @endif
                @endforeach
              </select>
            </td>
          </tr>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <button class="button-primary" type="submit">EDIT</button>
            </center>
          </td>
        </tr>
      </table>
      </form>
    </b>
  </center>
  @endsection