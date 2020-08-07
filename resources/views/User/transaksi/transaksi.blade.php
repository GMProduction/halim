@extends('user.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-4 col-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Transaksi</h6>
                        {{--                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">--}}
                        {{--                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">--}}
                        {{--                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>--}}
                        {{--                                <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>--}}
                        {{--                            </ol>--}}
                        {{--                        </nav>--}}
                    </div>

                    <div class="col-lg-8 col-8">
                        <div class="row">
                            {{--                            <div class="col-lg-4">--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <label for="dariLelang" class="form-control-label text-white">Dari</label>--}}
                            {{--                                    <input class="form-control" type="date" id="dariLelang" name="dariLelang">--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-lg-4">--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <label for="sampaiLelang" class="form-control-label text-white">Sampai</label>--}}
                            {{--                                    <input class="form-control" type="date" id="sampaiLelang" name="sampaiLelang">--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-lg-2 mt-auto mb-auto">--}}
                            {{--                                <a href="/user/transaksi/cetak" class="btn btn-md btn-neutral">Cetak</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tabel Transaksi</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">No. Transaksi</th>
                                <th scope="col" class="sort" data-sort="status">Tanggal</th>
                                <th scope="col" class="sort" data-sort="status">Pembayaran</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col" class="sort" data-sort="status">Total Harga</th>
                                <th scope="col" class="sort" data-sort="status">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($transaction as $v)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{ $v->no_transaksi }}</td>
                                    <td class="text-center">{{ $v->created_at }}</td>
                                    <td class="text-center">
                                        @switch($v->payment[0]->status)
                                            @case('0')
                                            Menunggu Konfirmasi
                                            @break
                                            @case('1')
                                            Di Terima
                                            @break
                                            @case('2')
                                            Di Tolak
                                            @break
                                            @default
                                            @break
                                        @endswitch
                                    </td>
                                    <td class="text-center">
                                        @switch($v->status)
                                            @case('0')
                                            Menunggu Konfirmasi
                                            @break
                                            @case('1')
                                            Di Terima
                                            @break
                                            @case('2')
                                            Di Tolak
                                            @break
                                            @default
                                            @break
                                        @endswitch
                                    </td>
                                    <td class="text-center">Rp {{ number_format($v->nominal, 0, ',', '.')}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-success" href="/user/pesanan/{{ $v->id }}">
                                                Detail
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')


@endsection
