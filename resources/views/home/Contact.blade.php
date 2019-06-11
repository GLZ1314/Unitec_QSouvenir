@extends('layouts.app')
@section('title', 'Contact')
@section('content')


    <div class="row">
        <div class="col-md-4">
            <a href="../Catalogue"><img class="img-responsive" src="{{asset('images/banner8.jpg')}}" alt=""></a>
        </div>
        <div class="col-md-4">
            <h2 style="text-align: center"><strong>Contact Us</strong></h2>
            <h4 style="text-align: center">
                <br><br>
                <strong>Address:</strong>
                <br><br>
                Building 183<br>
                139 Carrington Road<br>
                Mt Albert, Auckland<br>
                New Zealand
                <br><br>
                <strong>Phone:</strong>
                <br><br>
                +64 0800 10 95 10
                <br><br>
                <strong>Email:</strong>
                <br><br>
                <a href="mailto:jearhub@gmail.com">support@qualitysouvenirs.co.nz</a>
            </h4>
        </div>
        <div class="col-md-4">
            <a href="../Catalogue"><img class="img-responsive" src="{{asset('images/banner7.jpg')}}" alt=""></a>
        </div>
    </div>
@endsection