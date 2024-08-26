@extends('utama.user.master')

@section('dashboard-active')
    active
@endsection

@section('content')
    
<div class="card">
    <h4 class="card-header"><b>Data Pinjaman</b></h4>
</div>
<br>

<!-- TABLE PINJAMAN -->
<div class="card">
<div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th style="font-weight: bold; font-size: 13px">Id</th>
          <th style="font-weight: bold; font-size: 13px">Nama Anggota</th>
          <th style="font-weight: bold; font-size: 13px">Tanggal Peminjaman</th>
          <th style="font-weight: bold; font-size: 13px">Jumlah Pinjaman</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td>1</td>
          <td>Trevor Baker</td>
          <td>1 Januari 2024</td>
          <td>Rp 1.500.000</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andrew Garfield</td>
          <td>21 Maret 2023</td>
          <td>Rp 5.500.000</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andrew Garfield</td>
          <td>21 Maret 2023</td>
          <td>Rp 5.500.000</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andrew Garfield</td>
          <td>21 Maret 2023</td>
          <td>Rp 5.500.000</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andrew Garfield</td>
          <td>21 Maret 2023</td>
          <td>Rp 5.500.000</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


<br>
<div class="card">
    <h4 class="card-header"><b>Data Simpanan</b></h4>
</div>
<br>

<div class="card">
<div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th style="font-weight: bold; font-size: 13px">Id</th>
          <th style="font-weight: bold; font-size: 13px">Nama Anggota</th>
          <th style="font-weight: bold; font-size: 13px">Tanggal Simpan</th>
          <th style="font-weight: bold; font-size: 13px">Jumlah Simpan</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td>1</td>
          <td>Trevor Baker</td>
          <td>1 Januari 2024</td>
          <td>Rp 1.500.000</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andrew Garfield</td>
          <td>21 Maret 2023</td>
          <td>Rp 5.500.000</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andrew Garfield</td>
          <td>21 Maret 2023</td>
          <td>Rp 5.500.000</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andrew Garfield</td>
          <td>21 Maret 2023</td>
          <td>Rp 5.500.000</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andrew Garfield</td>
          <td>21 Maret 2023</td>
          <td>Rp 5.500.000</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>

</div>
<br>
@endsection