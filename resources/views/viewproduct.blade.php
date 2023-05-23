<x-layout title="products create" />
<h1> Prodotti creati </h1>
<div class="container">
    <div class="row mt-5">

        @foreach ($products as $product)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$product->name}}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->description}}</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">{{$product->price}}</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
        @endforeach
   

     
    </div>
</div>

