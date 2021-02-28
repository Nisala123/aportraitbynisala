@extends('main')

@section('content')
    <section class="hero text-center">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2>
            <strong>
               Welcome to Portrait by Nisala
            </strong>
        </h2>
        <p>"Pencils are the best !" <br>
                A unique pencil drawings for you by NISALA NAYANAJITH. <br> Customized packages are available. 
                Contact us and place your order now. <br>Island wide delivery available! </p>
        <br>
        <a href="{{url('/price')}}">
            <button class="button secondary small">Check out our prices</button>
        </a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Latest Drawings
        </h2>
    </div>

    <!-- Latest drawings -->
    <br>
    <br>
    <div class="row">
    
    
        <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="images\001.jpg" alt="A4 Single Drawing">
        <div class="card-body">
         <h5 class="card-title">Pencil Drawing</h5>
         <p class="card-text">Rs.4000 <br> Single Person <br> Size:A4 (8.27 x 11.69 inches)</p>
         
         <a href="{{route('order')}}" class="btn btn-primary">Order Now</a>
        </div>
        </div>&nbsp; &nbsp; &nbsp; &nbsp;

        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="images\003.jpg" alt="A4 Couple Drawing">
        <div class="card-body">
         <h5 class="card-title">Pencil Drawing</h5>
         <p class="card-text">Rs.5000 <br> Two Persons <br> Size:A4 (8.27 x 11.69 inches)</p>
         
         <a href="{{route('order2')}}" class="btn btn-success">Order Now</a>
        </div>
        </div>&nbsp; &nbsp; &nbsp; &nbsp;

        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="images\005.jpeg" alt="A3 Single Drawing">
        <div class="card-body">
         <h5 class="card-title">Pencil Drawing</h5>
         <p class="card-text">Rs.5000 <br> One Person <br> Size:A3 (11.69 x 16.53 inches)</p>
         
         <a href="{{route('order3')}}" class="btn btn-primary">Order Now</a>
        </div>
        </div>&nbsp; &nbsp; &nbsp; &nbsp;

        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="images\004.jpeg" alt="A3 Couple Drawing">
        <div class="card-body">
         <h5 class="card-title">Pencil Drawing</h5>
         <p class="card-text">Rs.6000 <br> Two Persons <br> Size:A3 (11.69 x 16.53 inches)</p>
         
         <a href="{{route('order4')}}" class="btn btn-success">Order Now</a>
        </div>
        </div>
    </div>

    <!-- Footer -->
    <br>
@endsection