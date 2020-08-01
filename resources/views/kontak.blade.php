@extends('navbar')
@section('content')

    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-7">
                <img src="{{asset('assets/img/slider/slider1.jpg')}}" style="width: 100%; height: 300px; object-fit: cover">
            </div>

            <div class="col-5">
                <p style="font-size: 30px; font-weight: bold" class="mb-3">BIG ADS</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0" >Jl. Ontorejo 2 Serengan Serengan Solo</p>
                <p style="font-size: 14px; font-weight: bold" class="text-black-50 mb-0" >bigads@gmail.com</p>


            </div>
        </div>

        <div class="d-block bg-gradient-red" style="height: 3px; width: 300px; margin-top: 50px">

        </div>

        <div class="text-left mt-2 mb-3">
            <h2>Lokasi</h2>
        </div>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.18184287472957!2d110.81591293359344!3d-7.584830976552103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1673c918527f%3A0x2c0a6a464a999f0e!2sSIN%20ROKOK%20KESEHATAN!5e0!3m2!1sid!2sid!4v1596004114810!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </section>

@endsection

@section('script')


@endsection
