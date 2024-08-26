@extends('layouts.app')

@section('title')
    Simpanan
@endsection

@section('simpanan-active')
    active
@endsection

@section('content')
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
            <th style="font-weight: bold; font-size: 13px">Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td>1</td>
            <td>Trevor Baker</td>
            <td>1 Januari 2024</td>
            <td>Rp 1.500.000</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Andrew Garfield</td>
            <td>21 Maret 2023</td>
            <td>Rp 5.500.000</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Andrew Garfield</td>
            <td>21 Maret 2023</td>
            <td>Rp 5.500.000</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Andrew Garfield</td>
            <td>21 Maret 2023</td>
            <td>Rp 5.500.000</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Andrew Garfield</td>
            <td>21 Maret 2023</td>
            <td>Rp 5.500.000</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


<!-- Collapse -->
<br>
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body">
        <p class="demo-inline-spacing">
          <a
            class="btn btn-primary me-1"
            data-bs-toggle="collapse"
            href="#collapseExample"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample"
          >
            + Tambah Data
          </a>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="">
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Tambah Data</h4>
                  <!-- Form -->
                  <div class="row">
                    <div class="col-xxl">
                        <div class="card mb-4">
                          <div class="card-body">
                            <form action="" method="">
                              <div class="row mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Nama Anggota</label>
                                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option selected>Pilih salah satu</option>
                                <option value="1">Andrew Garfield</option>
                                <option value="2">Trevor Baker</option>
                                </select>
                              </div>
                              <div class="row mb-3 ">
                                <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal Simpan</label>
                                <div class="col-md-10">
                                  <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Jumlah Simpan</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"
                                          ><small>Rp</small></span>
                                        <input type="text" class="form-control" id="basic-default-name" placeholder="" />
                                      </div>
                                </div>
                              </div>
                              <div class="row justify-content-end">
                                <div class="col-sm-10">
                                  <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- / Content -->
                <div class="content-backdrop fade"></div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

{{-- <a href="/pinjaman/tambah-data">
<div class="btn btn-primary align-right" style="float: right">  +  Tambah Data</div>
</a> --}}

@endsection