<x-layout>
  
  <div class="container mt-5">
    <div class="row justify-content-center p-5 mt-5 ">
        <div class="col-12 mt-3 ">
            <h3 class="display-3 borderY text-inst text-center">TUTTI GLI ARTICOLI</h3>
        </div>
    </div>
</div>
    
    <div class="container mt-3">
        <div class="row mt-2 mb-5 justify-content-center">
          @foreach($articles->where('is_accepted', true) as $article)
          <div class="col-12 col-lg-4">
            <x-card :article='$article'></x-card>
          </div>
          @endforeach
        </div>
      </div>
</x-layout>