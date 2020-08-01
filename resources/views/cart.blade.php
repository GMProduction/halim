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

                    </tr>
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
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-2 mt-auto mb-auto ml-auto">
                            <a href="#" onclick="addToCart()" class="btn btn-md btn-warning">Check Out</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
{{--    <script>--}}
{{--        let subtotal = 0, diskon = 0, total = 0, lama = 0;--}}
{{--        var date_diff_indays = function (date1, date2) {--}}
{{--            dt1 = new Date(date1);--}}
{{--            dt2 = new Date(date2);--}}
{{--            return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate())) / (1000 * 60 * 60 * 24));--}}
{{--        };--}}

{{--        function hitungTotal() {--}}
{{--            let tgl1 = $('#sewa').val();--}}
{{--            let tgl2 = $('#kembali').val();--}}
{{--            let tempSubTotal = '{{ $product->harga }}';--}}
{{--            lama = date_diff_indays(tgl1, tgl2);--}}
{{--            subtotal = tempSubTotal * lama;--}}
{{--            $('#subTotal').val("Rp. " +subtotal);--}}
{{--            $('#harga').val("Rp. " +tempSubTotal);--}}
{{--            $('#lamanya').val(lama + " hari");--}}
{{--            $('#temp-sub').html(tempSubTotal);--}}
{{--            $('#lama').html(lama);--}}
{{--            $('#temp-tot').html(subtotal);--}}
{{--        }--}}

{{--        async function addToCart() {--}}
{{--            event.preventDefault();--}}
{{--            let data = {--}}
{{--                '_token': "{{ csrf_token() }}",--}}
{{--                id: '{{ $product->id }}',--}}
{{--                harga: subtotal,--}}
{{--                sewa: $('#sewa').val(),--}}
{{--                kembali: $('#kembali').val()--}}
{{--            };--}}
{{--            try {--}}
{{--                let res = await $.post('/ajax/addToCart', data);--}}
{{--                alert('Transaksi Berhasil')--}}
{{--                window.location.href = '/payment/' + res['payload'];--}}
{{--            } catch (e) {--}}
{{--                alert('Transaksi Gagal')--}}
{{--            }--}}
{{--        }--}}

{{--        $(document).ready(function () {--}}
{{--            hitungTotal();--}}
{{--            $('#sewa').on('change', function () {--}}
{{--                hitungTotal();--}}
{{--            });--}}
{{--            $('#kembali').on('change', function () {--}}
{{--                hitungTotal();--}}
{{--            });--}}


{{--            $('#btn-cekout').on('click', async function (e) {--}}
{{--                e.preventDefault();--}}
{{--                let code = $('#voucher').val();--}}
{{--                let data = {--}}
{{--                    '_token': '{{ csrf_token() }}',--}}
{{--                    diskon: $('#diskon').val(),--}}
{{--                    nominal: $('#total').val(),--}}
{{--                    sewa: $('#sewa').val(),--}}
{{--                    kembali: $('#kembali').val(),--}}
{{--                };--}}
{{--                let res = await $.post('/ajax/cekout', data);--}}
{{--                if (res['status'] === 200 && res['payload'] !== null) {--}}
{{--                    let id = res['payload'];--}}
{{--                    alert('Sewa Berhasil');--}}
{{--                    window.location.href = '/payment/' + id;--}}
{{--                } else {--}}
{{--                    alert('Sewa gagal');--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endsection
