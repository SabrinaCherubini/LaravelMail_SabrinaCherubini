<x-layout title="Contacts" />


{{-- sezione form per invio mail --}}
<div class="container mform">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif

            <div class="form">
                <form action="{{ Route('Send') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label for="userNamee" class="form-label mt-5">Nome Utente </label>
                        <input type="text" class="form-control" id="userName" name="username">
                    </div>

                    <div class="mb-3">
                        <label for="userMail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="UserMail" name="usermail"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="userBody" class="form-label"> Scrivici un messaggio </label>
                        <textarea name="Body" id="userBody" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
