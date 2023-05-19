<x-layout title="products"
    
/>
<x-header header="header3" title1="i nostri servizi" color="text-w"
/>

<section class="container mt-5">
    <div class="row vh-100" >
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card" >
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product['name']}}</h5>
                  <p class="card-text">{{$product['price']}}</p>
                  <a href="{{Route('Details')}}" class="btn btn-outline-dark">Details</a>
                </div>
              </div>

        </div>
        @endforeach
    </div>