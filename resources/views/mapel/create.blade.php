@extends('main.layout')
@section('content')
  <center>
      <h2>TAMBAH DATA MATA PELAJARAN</h2>
      <form action="/mapel/store" method="POST">
      @csrf
      <table width="50%">
        <tr>
          <td class="bar">MATA PELAJARAN</td>
          <td class="bar">
            <input type="text" name="nama_mapel">
          </td>
          <tr>
            <td colspan="2">
              <center>
                <button type="submit" class="button-primary">SIMPAN</button>
              </center>
            </td>
          </tr>
        </tr>
      </table>
      </form>
  </center>
  @endsection