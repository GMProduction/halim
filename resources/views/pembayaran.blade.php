@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5">

        <div class="row">
            <div class="col-8">
                <div class="text-left mt-5">
                    <h2 class="text-warning"><i class="mr-3" data-feather="check-square"></i>Informasi</h2>
                </div>

                <div class="d-block bg-gradient-warning mb-2" style="height: 3px; width: 300px; margin-top: 20px">

                </div>

                <div class="card">

                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort text-center" data-sort="name">#</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Gambar Kardus Kosong
                                </th>
                                <th scope="col" class="sort text-center" data-sort="budget">Nama Kardus</th>
                                <th scope="col" class="sort text-center" data-sort="budget">Qty</th>
                                <th scope="col" class="sort text-center" data-sort="completion">Harga /pcs</th>
                                <th scope="col" class="sort text-center" data-sort="completion">File Mentah</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($transaction->cart as $v)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center"><img
                                            src="{{ asset('/uploads/image') }}/{{ $v->product->url }}"
                                            style="height: 100px; width: 100px; object-fit: cover"></td>
                                    <td class="text-center">{{ $v->product->nama }}</td>
                                    <td class="text-center">{{ $v->qty }} pcs</td>
                                    <td class="text-center"> Rp {{ number_format($v->harga, 0, ',', '.') }},-</td>
                                    <td class="text-center"><a style="height: 100px; width: 100px; object-fit: cover"
                                                               href="{{asset('/uploads/order')}}/{{ $v->url }}"
                                                               target="_blank">
                                            <img
                                                src="{{asset('/uploads/order')}}/{{ $v->url }}"
                                                style="height: 100px; width: 100px; object-fit: cover">
                                        </a></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <input type="hidden" name="id" value="">
                    <h6 class="heading-small text-muted mb-1"></h6>
                    <div class="pl-lg-4">
                        <div class="row">

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggalPinjam">Tanggal Pesan</label>
                                    <input type="text" id="tanggalPinjam" name="tanggalPinjam" readonly
                                           class="form-control" value="{{ $transaction->created_at }}">
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="total">Total Harga</label>
                                    <input type="text" id="total" name="total" readonly
                                           class="form-control" value="Rp {{ number_format($transaction->nominal, 0, ',', '.') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="text-left mt-5">
                    <h2 class="text-warning"><i class="mr-3" data-feather="credit-card"></i>Upload Bukti Pembayaran</h2>
                </div>

                <div class="d-block bg-gradient-warning mb-2" style="height: 3px; width: 300px; margin-top: 20px">

                </div>


                <div class="card">

                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="/payment/send">
                            @csrf
                            <input type="hidden" name="id" value="{{ $transaction->id }}">
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="form-group col-lg-12">
                                        <label for="bank">Bank</label>
                                        <select class="form-control" id="bank" name="bank">
                                            @foreach($vendors as $v)
                                                <option value="{{ $v->id }}">{{ $v->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                        <a>Bukti Transfer</a>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar"
                                                   name="gambar" lang="en">
                                            <label class="custom-file-label" for="gambar">Select file</label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-lg btn-warning">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="text-left mt-5">
                    <h2 class="text-warning"><i class="mr-3" data-feather="briefcase"></i>Daftar Bank</h2>
                    <div class="d-block bg-gradient-warning mb-2" style="height: 3px; width: 300px; margin-top: 20px">

                    </div>

                    <div class="card text-center p-3 ">
                        <img class="ml-auto mr-auto" src="{{asset('assets/img/bank/bca.png')}}" style="width: 150px;">
                        <h4 class="mb-1">No. rek: 7997971237</h4>
                        <h5>Holder Name: Halim</h5>
                    </div>

                    <div class="card text-center p-3 ">
                        <img class="ml-auto mr-auto" src="{{asset('assets/img/bank/bri.png')}}" style="width: 150px;">
                        <h4 class="mb-1">No. rek: 1317997971237</h4>
                        <h5>Holder Name: Halim</h5>
                    </div>
                </div>

            </div>
        </div>


    </section>


@endsection

@section('script')


@endsection
