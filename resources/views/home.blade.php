@extends('navbar')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide ml-auto mr-auto" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="First slide"
                    style="height: 550px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slide2.jpg')}}" alt="Second slide"
                     style="height: 550px; object-fit: cover">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/slider/slide3.jpg')}}" alt="Third slide"
                     style="height: 550px; object-fit: cover">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="text-center mt-4 mb-0 text-warning">
        <a style="font-size: 50px; font-weight: bolder">BIGGER IS BETTER</a>
        <div class="d-block bg-gradient-warning ml-auto mr-auto" style="height: 3px; width: 300px"></div>
    </div>

    <div class="text-center mt-1" style="height: 100px">
        <a class="text-gray" style="font-size: 20px; font-weight: lighter">Produk Kami</a>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" >
                    <img class="card-img-top" src="{{asset('assets/img/slider/slide1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Kardus Glossy Kubik Kecil</h5>
                        <h4 class="card-title text-warning mt-1 mb-2">Rp 1.000 /pcs</h4>
                        <p class="card-text">deskripsi produk deskripsi produk deskripsi produk deskripsi produk</p>
                        <a href="#" class="btn btn-warning">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')


@endsection
