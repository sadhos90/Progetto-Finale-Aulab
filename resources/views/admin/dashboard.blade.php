<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class="display-3 borderY text-center p-3" style="color: #ffeba7">BENTORNATO ADMIN {{Auth::user()->name}}</h1>
              </fieldset>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class=" row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"></x-requests-table>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class=" row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"></x-requests-table>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class=" row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore"></x-requests-table>
            </div>
        </div>
    </div>

    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>I tags della Piattaforma</h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags"></x-metainfo-table>
            </div>
        </div>
    </div>

    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della Piattaforma</h2>
                <x-metacategory-table :metaInfos="$categories" metaType="category"></x-metacategory-table>
            </div>
        </div>
    </div>

    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Aggiungi categoria alla piattaforma</h2>
                {{-- <x-metacategory-table :metaInfos="$categories" metaType="category"></x-metacategory-table> --}}
                <form action="{{route('admin.storeCategory')}}" method="POST" class="d-flex">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="Inserisci nuova categoria">
                    <button type="submit" class="btn btn-succes">Aggiungi</button>
                </form>
   
            </div>
        </div>
    </div>

    @if (session('message'))
    <body onload="setTimeout('document.getElementById(\'scompari\').style.display=\'none\'',2000)">
        ...
        </body>
    <div class="container">
        <div class="mt-5 row justify-content-center align-content-center">
            <div class="col-12 col-md-4 col-lg-6">
                <div class="text-center mt-5 alert alert-success">
                    {{session('message')}}
                </div>
            </div>
        </div>
    </div>
    @endif
</x-layout>