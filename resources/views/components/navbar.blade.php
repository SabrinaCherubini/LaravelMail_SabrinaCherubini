<nav class="navbar navbar-expand-lg bg-b fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="./media/logo.png" class="logo ms-3" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
        <div class="navbar-nav mx-auto">
          <a class="nav-link text-w" aria-current="page" href="{{Route('Homepage')}}">Home</a>
          <a class="nav-link text-w mx-4" href="{{Route('Products')}}">Products</a>
          <a class="nav-link text-w " href="{{Route('Contacts')}}">Contacts</a>
          <a class="nav-link text-w ms-4 " href="{{Route('Create_products')}}">Aggiungi prodotto</a>
          <a class="nav-link text-w ms-4 " href="{{Route('ViewsProducts')}}">Prodotti creati</a>
          

        </div>
      </div>
    </div>
  </nav>