@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                    <div class="card-body">
                        <h2>Product</h2>
                            <div class="row">
                                <!-- Create a loop for each product -->
                                @foreach ($allProduct as $products)
                                    <div class="col-4">
                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="default-freelance.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <!-- display the name of the product given by the factory -->
                                                <h5 class="card-title">{{$products->name}}</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Select freelance</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                   <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection
