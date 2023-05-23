<x-layout title="creazione prodotti"
   
/>
<h1> form di creazioni prodotti </h1> 

<div class="container mform">
    <div class="row justify-content-center">
        <div class="col-md-8">
{{--            
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif --}}

            <div class="form">
                <form action="{{Route('product_store')}}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label for="productName" class="form-label mt-5">Nome Prodotto </label>
                        <input type="text" class="form-control" id="productName" name="name"> 
                    </div>

                    <div class="mb-3">
                        <label for="Description" class="form-label"> Descrizione</label>
                        <textarea name="description" id="Description" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Prezzo</label>
                        <input type="number" step="0.01" class="form-control" id="productPrice" name="price"
                            aria-describedby="emailHelp">
                    </div>

                   

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
