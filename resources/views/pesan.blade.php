@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5">


        <div class="text-left mt-5">
            <h2 class="text-warning"><i class="mr-3" data-feather="check-square"></i>Informasi Pesanan</h2>
        </div>

        <div class="d-block bg-gradient-warning mb-2" style="height: 3px; width: 300px; margin-top: 20px">

        </div>

        <div class="card">

            <!-- Light table -->
            <div class="table-responsive">
                <table id="tabel" class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort text-center" data-sort="name">Gambar</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Nama Kardus</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Bahan Kardus</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Tebal</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Dimensi</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Harga /pcs</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    {{--                    @foreach($produk as $p)--}}
                    <tr>
                        <td class="text-center"><img src="{{asset('assets/img/slider/slide1.jpg')}}"
                                                     style="height: 100px; width: 100px; object-fit: cover"></td>
                        <td class="text-center">Kardus Glossy Kubik Kecil</td>
                        <td class="text-center">Glossy</td>
                        <td class="text-center">0.2mm</td>
                        <td class="text-center">10 x 10 x 10 cm</td>
                        <td class="text-center">Rp 1.000</td>

                    </tr>
                    {{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="text-left mt-5">
                    <h2 class="text-warning"><i class="mr-3" data-feather="tag"></i>Total Harga</h2>
                </div>

                <div class="d-block bg-gradient-warning mb-2" style="height: 3px; width: 300px; margin-top: 20px">

                </div>

                <div class="col-lg-12">
                    <div class="card p-3">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="url">Total</label>
                                <input type="number" readonly id="harga" name="harga"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="input-daterange datepicker row align-items-center">
                            <div class="col-lg-2 mt-auto mb-auto ml-auto">
                                <a href="/admin/transaksi/cetak" class="btn btn-md btn-warning">Check Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')


@endsection
