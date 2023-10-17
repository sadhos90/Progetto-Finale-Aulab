<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h3 class="display-6 borderY text-inst text-center">ARTICOLI PER CATEGORIA : {{$category->name}}</h3>
              </fieldset>
            </div>
        </div>
    </div>

    <div class="container mb-5 ">
        <div class="row mt-3 justify-content-around">
            @if ($category->articles->isNotEmpty())
          @foreach($category->articles->where('is_accepted', true) as $article)
          <div class="col-12 col-lg-4">
            <x-card :article='$article'></x-card>
        </div>
        @endforeach
        @else
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h5 class="text-center">NON CI SONO ARTICOLI PER LA CATEGORIA : {{$category->name}}</h5>
                </div>
            </div>
        </div>
        @endif
    </div>
      </div>
    

</x-layout>