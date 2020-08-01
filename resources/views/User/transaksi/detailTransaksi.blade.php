@extends('user.base')
@section('content')

    <div class="main-content" id="panel">

        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
             style="min-height: 100px; background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-dark opacity-8"></span>
            <!-- Header container -->

        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">

                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0 mb-2">Data Barang</h3>
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
                                                            <th scope="col" class="sort text-center" data-sort="name">#</th>
                                                            <th scope="col" class="sort text-center" data-sort="completion">Gambar Kardus Kosong</th>
                                                            <th scope="col" class="sort text-center" data-sort="budget">Nama Kardus</th>
                                                            <th scope="col" class="sort text-center" data-sort="budget">Qty</th>
                                                            <th scope="col" class="sort text-center" data-sort="completion">Harga /pcs</th>
                                                            <th scope="col" class="sort text-center" data-sort="completion">File Mentah</th>
                                                            <th scope="col" class="sort text-center" data-sort="completion">File Jadi</th>
                                                            <th scope="col" class="sort text-center" data-sort="completion">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="list">
                                                        {{--                    @foreach($produk as $p)--}}
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center"><img
                                                                    src="{{asset('assets/img/slider/slide1.jpg')}}"
                                                                    style="height: 100px; width: 100px; object-fit: cover"></td>
                                                            <td class="text-center">Kardus Glossy Kubik Kecil</td>
                                                            <td class="text-center">1000 pcs</td>
                                                            <td class="text-center"> Rp 1.000,-</td>
                                                            <td class="text-center"><a style="height: 100px; width: 100px; object-fit: cover" href="{{asset('assets/img/slider/slide1.jpg')}}" target="_blank">
                                                                    <img
                                                                        src="{{asset('assets/img/slider/slide1.jpg')}}"
                                                                        style="height: 100px; width: 100px; object-fit: cover">
                                                                </a></td>

                                                            <td class="text-center"><a style="height: 100px; width: 100px; object-fit: cover" href="{{asset('assets/img/slider/slide1.jpg')}}" target="_blank">
                                                                    <img
                                                                        src="{{asset('assets/img/slider/slide1.jpg')}}"
                                                                        style="height: 100px; width: 100px; object-fit: cover">
                                                                </a></td>
                                                            <td class="text-right">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-sm btn-icon-only btn-primary text-light" href="#" role="button"
                                                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                        <a class="dropdown-item" href="">Terima</a>
                                                                        <a class="dropdown-item" href="#!">Tolak</a>
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

                        <div class="card-body">
                            <form action="/user/pemohon/update" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="">
                                <h6 class="heading-small text-muted mb-1"></h6>
                                <div class="pl-lg-4">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tanggalPinjam">Tanggal Pesan</label>
                                                <input type="text" id="tanggalPinjam" name="tanggalPinjam" readonly
                                                       class="form-control"
{{--                                                       value="{{ $trans->created_at }}"--}}
                                                >
                                            </div>
                                        </div>



                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="status">Status</label>
                                                <input type="text" id="status" name="status" readonly
                                                       class="form-control"
{{--                                                       value="{{ $trans->status }}"--}}
                                                >
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="total">Total Harga</label>
                                                <input type="text" id="total" name="total" readonly
                                                       class="form-control"
{{--                                                       value="Rp {{ number_format($trans->harga, 0, ',', '.') }}"--}}
                                                >
                                            </div>
                                        </div>


                                        <hr class="my-4"/>
                                        <!-- Description -->
                                        <div class="col-12 text-right">
                                            <a type="submit" href="https://wa.me/6282325612941?text=Saya%20ingin%20dengan%20menanyakan%20pesanan" class="btn btn-lg btn-primary">Upload Bukti Pembayaran</a>
                                            <a type="submit" href="https://wa.me/6282325612941?text=Saya%20ingin%20dengan%20menanyakan%20pesanan" class="btn btn-lg btn-success">Contact Admin</a>
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
