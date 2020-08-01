@extends('admin.base')
@section('content')

    <div class="main-content" id="panel">

        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
             style="min-height: 100px; background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->

        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-4 order-xl-2">
                    <div class="card card-profile">
                        <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-5">

                            <h5 class="mb-3">Data Penyewa</h5>
                            <div class="text-left">
                                <p class="mb-1">Nama</p>
                                <h6 class="h3 mb-4">
                                    {{--                                    {{ $user->no_identitas }}--}}
                                </h6>
                                <p class="mb-1">email</p>
                                <h6 class="h3 mb-4">
                                    {{--                                    {{ $user->nama_pemohon }}--}}
                                </h6>

                                <p class="mb-1">Phone</p>
                                <h6 class="h3 mb-4">
                                    {{--                                    {{ $user->tempat_lahir }}--}}
                                </h6>

                                <p class="mb-1">Alamat</p>
                                <h6 class="h3 mb-4">
                                    {{--                                    {{ $user->tanggal_lahir }}--}}
                                </h6>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0 mb-2">Data Kardus</h3>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card ">

                                                <!-- Light table -->
                                                <div class="table-responsive">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" class="sort" data-sort="name">#</th>
                                                            <th scope="col" class="sort" data-sort="budget">Nama
                                                                Kardus
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Bahan
                                                                Kardus
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Tebal
                                                                Kardus
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Dimensi
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Harga
                                                                /pcs
                                                            </th>

                                                            <th scope="col" class="sort" data-sort="completion">Status
                                                            </th>

                                                            <th scope="col" class="sort" data-sort="completion">Gambar
                                                            </th>

                                                            <th scope="col" class="sort text-center"
                                                                data-sort="completion">File Mentah
                                                            </th>
                                                            <th scope="col" class="sort text-center"
                                                                data-sort="completion">File Jadi
                                                            </th>
                                                            <th scope="col" class="sort text-center"
                                                                data-sort="completion">Action
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="list">
                                                        <tr>

                                                            <td class="budget">
                                                                1
                                                            </td>

                                                            <td class="budget">
                                                                Kardus Glossy Kubik Kecil
                                                            </td>

                                                            <td class="budget">
                                                                Glosy
                                                            </td>

                                                            <td class="budget">
                                                                0.2mm
                                                            </td>

                                                            <td class="budget">
                                                                10 x 10 x 10 cm
                                                            </td>

                                                            <td class="budget">
                                                                Rp. 1.000,-
                                                            </td>

                                                            <td class="budget">
                                                                menunggu / design ok / ditolak
                                                            </td>

                                                            <td class="text-center"><img
                                                                    src="{{asset('assets/img/theme/angular.jpg')}}"
                                                                    style="height: 50px"></td>

                                                            <td class="text-center"><a
                                                                    style="height: 100px; width: 100px; object-fit: cover"
                                                                    href="{{asset('assets/img/slider/slide1.jpg')}}"
                                                                    target="_blank">
                                                                    <img
                                                                        src="{{asset('assets/img/slider/slide1.jpg')}}"
                                                                        style="height: 100px; width: 100px; object-fit: cover">
                                                                </a></td>

                                                            <td class="text-center"><a
                                                                    style="height: 100px; width: 100px; object-fit: cover"
                                                                    href="{{asset('assets/img/slider/slide1.jpg')}}"
                                                                    target="_blank">
                                                                    <img
                                                                        src="{{asset('assets/img/slider/slide1.jpg')}}"
                                                                        style="height: 100px; width: 100px; object-fit: cover">
                                                                </a></td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning mt-0"
                                                                        data-toggle="modal"
                                                                        data-target="#exampleModalCenter">Upload
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModalCenter"
                                                                     tabindex="-1" role="dialog"
                                                                     aria-labelledby="exampleModalCenterTitle"
                                                                     aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered"
                                                                         role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLongTitle">Kirim
                                                                                    Gambar</h5>
                                                                                <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-lg-9">
                                                                                        <a>Gambar</a>
                                                                                        <div class="custom-file">
                                                                                            <input type="file"
                                                                                                   class="custom-file-input"
                                                                                                   id="gambar"
                                                                                                   name="gambar"
                                                                                                   lang="en">
                                                                                            <label
                                                                                                class="custom-file-label"
                                                                                                for="gambar">Select
                                                                                                file</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-dismiss="modal">Batal
                                                                                </button>
                                                                                <button type="button"
                                                                                        class="btn btn-warning">Simpan
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0 mb-2">Data Pembayaran</h3>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card ">

                                                <!-- Light table -->
                                                <div class="table-responsive">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" class="sort" data-sort="name">#</th>
                                                            <th scope="col" class="sort" data-sort="budget">Nama
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Vendor
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Bukti
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="completion">Action
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="list">
                                                        <tr>

                                                            <td class="budget">
                                                                1
                                                            </td>

                                                            <td class="budget">
                                                                Juh
                                                            </td>

                                                            <td class="budget">
                                                                BCA
                                                            </td>

                                                            <td class="budget">
                                                                <a style="height: 50px"
                                                                   href="{{asset('assets/img/theme/angular.jpg')}}"><img
                                                                        src="{{asset('assets/img/theme/angular.jpg')}}"
                                                                        style="height: 50px">
                                                                </a>
                                                            </td>
                                                            <td class="budget">
                                                                <a class="btn btn-sm btn-success">Terima</a>
                                                                <a class="btn btn-sm btn-danger">Tolak</a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="/user/pemohon/update" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="">
                                <h6 class="heading-small text-muted mb-1"></h6>
                                <div class="pl-lg-4">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tanggalPinjam">Tanggal
                                                    Pesan</label>
                                                <input type="text" id="tanggalPinjam" name="tanggalPinjam" readonly
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="status">Status</label>
                                                <input type="text" id="status" name="status" readonly
                                                       class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="total">Total Harga</label>
                                                <input type="text" id="total" name="total" readonly
                                                       class="form-control" value="">
                                            </div>
                                        </div>


                                        <hr class="my-4"/>
                                        <!-- Description -->
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-lg btn-primary">Tombol Status</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')


@endsection
