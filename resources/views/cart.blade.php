@extends('navbar')
@section('content')


    <section class="container mt-5 mb-5">


        <div class="text-left mt-5">
            <h2><i class="mr-3" data-feather="shopping-cart"></i>Data Barang</h2>
        </div>

        <div class="d-block bg-gradient-red mb-2" style="height: 3px; width: 300px; margin-top: 20px">

        </div>

        <div class="card">

            <!-- Light table -->
            <div class="table-responsive">
                <table id="tabel" class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort text-center" data-sort="name">#</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Gambar Kardus Kosong</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Nama Kardus</th>
                        <th scope="col" class="sort text-center" data-sort="budget">Qty</th>
                        <th scope="col" class="sort text-center" data-sort="completion">Harga /pcs</th>
                        <th scope="col" class="sort text-center" data-sort="completion">File Mentah</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                    @foreach($carts as $v)
                        <tr>
                            <td class="text-center">{{ $loop->index + 1 }}</td>
                            <td class="text-center"><img
                                    src="{{asset('/uploads/image')}}/{{ $v->product->url }}"
                                    style="height: 100px; width: 100px; object-fit: cover"></td>
                            <td class="text-center">{{ $v->product->nama }}</td>
                            <td class="text-center">{{ $v->qty }} pcs</td>
                            <td class="text-center"> Rp {{ number_format($v->harga, 0, ',', '.') }},-</td>
                            <td class="text-center"><a style="height: 100px; width: 100px; object-fit: cover"
                                                       href="{{asset('/uploads/order')}}/{{ $v->url }}" target="_blank">
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

        <div class="row">

            <div class="col-12">
                <div class="text-left mt-5 mb-3">
                    <h2><i class="mr-3" data-feather="twitch"></i>Rincian</h2>
                </div>

                <div class="d-block bg-gradient-red mb-2" style="height: 3px; width: 300px; margin-top: 20px">

                </div>


                <div class="col-lg-12">
                    <div class="card p-3">

                        {{--                        <div class="col-lg-12 mt-5">--}}
                        {{--                        <div>Rincian Sewa = <span id="temp-sub">0</span> x ( <span id="lama">0</span> ) Hari = Rp. <span--}}
                        {{--                                id="temp-tot">0</span></div>--}}
                        {{--                        </div>--}}


                        <div class="col-lg-12 ">
                            <div class="form-group">
                                <label for="subTotal">Total</label>
                                <input type="text" readonly id="subTotal" name="subTotal"
                                       class="form-control" value="Rp. {{ number_format($subTotal, 0, ',', '.') }}">
                            </div>
                        </div>
                        <div class="col-lg-2 mt-auto mb-auto ml-auto">
                            <button id="btn-cekout" type="button" class="btn btn-md btn-warning">Check Out</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    <script>
        $(document).ready(function () {

            $('#btn-cekout').on('click', async function (e) {
                e.preventDefault();
                let data = {
                    '_token': '{{ csrf_token() }}',
                    nominal: '{{ $subTotal }}',
                };
                let res = await $.post('/ajax/cekout', data);
                if (res['status'] === 200 && res['payload'] !== null) {
                    let id = res['payload'];
                    alert('Cek Out Berhasil');
                    window.location.href = '/payment/'+id;
                } else {
                    alert('Cek Out gagal');
                }
            });
        });
    </script>

@endsection
