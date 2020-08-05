@extends('navbar')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            alert('Pesanan Berhasil Di Simpan!');
        </script>
    @endif
    @if(\Illuminate\Support\Facades\Session::has('fail'))
        <script>
            alert('Pesanan Gagal Di Simpan!');
        </script>
    @endif
    <section class="container mt-5">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('/uploads/image')}}/{{ $product->url }}"
                     style="height: 300px; width: 100%; object-fit: cover">
            </div>

            <div class="col-6">
                <p class="text-warning mb-2" style="font-size: 30px; font-weight: bold">{{ $product->nama }}</p>
                <p style="font-size: 15px; font-weight: lighter" class="text-gray mb-1"><i
                        data-feather="chevron-right"></i>{{ $product->bahan }}</p>
                <p style="font-size: 15px; font-weight: lighter" class="text-gray mb-1"><i
                        data-feather="chevron-right"></i>Tebal {{ $product->tebal }}mm</p>
                <p style="font-size: 15px; font-weight: lighter" class="text-gray mb-4"><i
                        data-feather="chevron-right"></i>{{ $product->panjang }}cm x {{ $product->lebar }}cm
                    x {{ $product->tinggi }}cm</p>

                <div style="display: flex" class="mb-4">
                    <a href="#" class="btn btn-light mr-0 quantity__minus"><span>-</span></a>
                    <input form="form-cart" name="qty" id="qty" type="number" class="text-center quantity__input"
                           value="{{ $product->minimum }}" style="height: 45px; width: 70px; border: 1px solid #eBe3e3">
                    <a class="btn btn-warning quantity__plus"><span class="text-white">+</span></a>
                </div>

                <button type="button" class="btn btn-warning mt-0" data-toggle="modal"
                        data-target="#exampleModalCenter">Pesan Sekarang
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Kirim Gambar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="form-cart" method="post" action="/addToCart" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="harga" value="{{ $product->harga }}">
                                    <div class="col-lg-12">
                                        <a>Gambar</a>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="gambar"
                                                   name="gambar" lang="en">
                                            <label class="custom-file-label" for="gambar">Select file</label>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-warning">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <a style="font-size: 20px;" class="text-gray-dark ml-3"><i data-feather="credit-card" class="mr-2"></i>Rp {{ number_format($product->harga, 0, ',', '.') }}
                    /pcs</a>
            </div>
        </div>

        <div class="d-block bg-gradient-warning" style="height: 3px; width: 300px; margin-top: 50px"></div>
        <p class="text-gray" style="font-size: 25px"> Produk Kami</p>
        <section class="container">
            <div class="row">
                @foreach($products as $v)
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top" src="{{asset('/uploads/image')}}/{{$v->url}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title mb-0">{{ $v->nama }}</h5>
                                <h4 class="card-title text-warning mt-1 mb-2">
                                    Rp {{ number_format($v->harga, 0, ',', '.') }} /pcs</h4>
                                <p class="card-text">{{ $v->deskripsi }}</p>
                                <a href="/product/{{ $v->id }}" class="btn btn-warning">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        @endsection

        @section('script')


            <script>
                async function addToCart(redirect) {
                    let data = {
                        '_token': "{{ csrf_token() }}",
                        id: '{{ $product->id }}',
                        harga: '{{ $product->harga - $product->diskon}}',
                        qty: $('#qty').val(),
                        detail: '',
                        tipe: 'order',
                    };
                    try {
                        let res = await $.post('/ajax/addToCart', data);
                        if (redirect) {
                            window.location.href = '/cart'
                        }
                        alert('Pesanan Berhasil Masuk Ke Keranjang')
                    } catch (e) {
                        alert('Terjadi Kesalahan\nPesanan Gagal Masuk Ke Keranjang\n' + e.message);
                    }
                }

                $(document).ready(function () {
                    const minus = $('.quantity__minus');
                    const plus = $('.quantity__plus');
                    const input = $('.quantity__input');
                    minus.click(function (e) {
                        e.preventDefault();
                        var value = input.val();
                        if (value > 1000) {
                            value = value - 50;
                        }
                        input.val(value);
                    });

                    plus.click(function (e) {
                        e.preventDefault();
                        var value = input.val();
                        value = parseInt(value) + 50;
                        input.val(value);
                    })
                });
            </script>

@endsection
