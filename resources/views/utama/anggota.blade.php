@extends('layouts.app')

@section('title')
    Anggota
@endsection

@section('anggota-active')
    active
@endsection

@section('content')
<div class="card">
<h4 class="card-header"><b>Data Anggota</b></h4>
</div>
<br>
<div class="card">
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th style="font-weight: bold; font-size: 13px">Id</th>
            <th style="font-weight: bold; font-size: 13px">Nama</th>
            <th style="font-weight: bold; font-size: 13px">Alamat</th>
            <th style="font-weight: bold; font-size: 13px">Nomor Telepon</th>
            <th style="font-weight: bold; font-size: 13px">Tanggal Bergabung</th>
            <th style="font-weight: bold; font-size: 13px">Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td>1</td>
            <td>Trevor Baker</td>
            <td>New York</td>
            <td>+010101010101</td>
            <td>1 Januari 2024</td>
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
            <td>New York</td>
            <td>+010101010101</td>
            <td>1 Januari 2024</td>
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
            <td>New York</td>
            <td>+010101010101</td>
            <td>1 Januari 2024</td>
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
            <td>New York</td>
            <td>+010101010101</td>
            <td>1 Januari 2024</td>
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
            <td>New York</td>
            <td>+010101010101</td>
            <td>1 Januari 2024</td>
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
                              <form>
                                <div class="row mb-3">
                                  <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama</label>
                                  <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                      <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-user"></i
                                      ></span>
                                      <input
                                        type="text"
                                        class="form-control"
                                        id="basic-icon-default-fullname"
                                        placeholder=""
                                        aria-label=""
                                        aria-describedby="basic-icon-default-fullname2"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Alamat</label>
                                  <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                      <span id="basic-icon-default-company2" class="input-group-text"
                                        ><i class="bx bx-home"></i
                                      ></span>
                                      <input
                                        type="text"
                                        id="basic-icon-default-company"
                                        class="form-control"
                                        placeholder=""
                                        aria-label=""
                                        aria-describedby="basic-icon-default-company2"
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                                  <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                      <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                      <input
                                        type="email"
                                        id="basic-icon-default-email"
                                        class="form-control"
                                        placeholder=""
                                        aria-label=""
                                        aria-describedby="basic-icon-default-email2"
                                      />
                                    </div>
                                    <div class="form-text">Untuk email gunakan huruf kecil</div>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label class="col-sm-2 form-label" for="basic-icon-default-phone">Nomor Telepon</label>
                                  <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                      <span id="basic-icon-default-phone2" class="input-group-text"
                                        ><i class="bx bx-phone"></i
                                      ></span>
                                      <input
                                        type="text"
                                        id="basic-icon-default-phone"
                                        class="form-control phone-mask"
                                        placeholder="+62 58 799 8941"
                                        aria-label="+62 58 799 8941"
                                        aria-describedby="basic-icon-default-phone2"
                                      />
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