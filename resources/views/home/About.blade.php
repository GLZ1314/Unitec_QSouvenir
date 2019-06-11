@extends('layouts.app')
@section('title', 'About')
@section('content')

    <div class="Container body-content">
        <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="about">

            <h2 style="text-align: center"><strong>Making Shopping Easier</strong></h2>
            <p style="font-size:16px">
                This website is an online shopping website for Quality Souvenirs which is a fictional company selling New Zealand souvenirs.
                <br><br>
                The details include the business specifications which specify and describe the business rules implemented in the website. It also includes a site map and wireframe diagrams for the User Interface design.
                <br><br>
                Additionally, a completed test plan is included that shows the test sequences for all features, error handling and pagination with actual results shown.
                <br><br>
                The website application itself was developed using  PHP Laravel framework and runs MYSQL server for its database.
                <br><br>
                Moreover, the website contents comprise a category section containing categories such as T-shirts, Mugs and Maori Souvenirs.
                <br><br>
                Within each category are various souvenir items displayed in what we call the ‘catalogue area’. The website catalogue can be browsed by both anonymous and registered members and items can be added to what we would call a ‘shopping cart’, but only the registered members can place an order, or make a purchase.
            </p>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-1">
            <a href="../Catalogue"><img src="{{asset('/images/banner6.jpg')}}" alt=""></a>
        </div>
        </div>

    </div>
@endsection