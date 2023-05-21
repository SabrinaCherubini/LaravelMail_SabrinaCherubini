<x-layout title="products"
    
/>
<x-header header="header3" title1="i nostri servizi" color="text-w"
/>

<section class="container mcard">
    <div class="row vh-100 justify-content-center justify-content-beetwen" >
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card" >
                <img src="{{$product['url']}}" class="card-img-top sizeCard" alt="img pacchetto">
                <div class="card-body">
                  <h5 class="card-title">{{$product['name']}}</h5>
                  <p class="card-text">{{$product['price']}}</p>
                  <a href="{{Route('Details')}}" class="btn btn-outline-dark">Details</a>
                </div>
              </div>

        </div>
        @endforeach
    </div>