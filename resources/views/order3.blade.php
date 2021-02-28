@extends('main')

@section('title','order now')

@section('content')

    

    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                
                    <a href="#">
                        
                        <img src="{{asset("images/one.png")}}"/>
                    </a>
           
                 
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h5 class="subheader">
                    <span class="price-tag">Rs.5000</span>
                </h5>
                <h6 class="subheader">
                    <span class="size">One Person Drawing</span>
                </h6>
                <h6 class="subheader">
                    <span class="size">Size:A3 (11.69 x 16.53 inches)</span>
                </h6>
                <div class="row">
                    <div class="large-12 columns">
                        <p>
                            A3 size black and white one person hand drawn pencil art.
                            If you need more details please contact us by pressing below button.
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="large-10 columns">
                
                        <a href="https://facebook.com/AportraitbyNisala" class="button  expanded">Order Now</a>
                    </div>
                </div>
                <p class="text-left subheader">
                    <small>* Designed by <a href="https://www.facebook.com/nisala.nayanajith">Nisala Nayanajith</a></small>
                </p>

            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection