<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
                <fieldset>
                    <h3 class=" text-inst display-6 borderY text-center">HAI CERCATO: {{ $query }}</h3>
                </fieldset>
            </div>
        </div>
    </div>


    <div class="container mb-5">
        <div class="row justify-content-center">
            @if ($articles->isNotEmpty())
                @foreach ($articles as $article)
                    <div class="col-12 col-md-4 d-flex justify-content-center">
                        <article class="card">
                            <img class="card__background" src="{{Storage::url($article->img)}}"
                                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                                width="1920" height="2193" />
                            <div class="card__content | flow">
                                <div class="card__content--container | flow">
                                    <h4 class="card__title">{{ $article->title }}</h4>
                                    <p class="card__description mt-3">
                                        {{ $article->subtitle }}
                                    </p>
                                    <p class="card-text">{{ $article->body }}</p>
                                    @if($article->category)
                                    <div><a href="{{ route('article.category', ['category' => $article->category->id]) }}"
                                                class="small fst-italic text-capitalize card-text">{{ $article->category->name }}</a>
                                    </div>
                                    @else
                                    <p class="small fst-italic text-capitalize">Senza categoria</p>
                                    @endif
                                    <div
                                        class="mt-1 card-footer d-flex justify-content-between align-items-center card-text">
                                        Redatto il {{ $article->created_at->format('d/m/Y') }} da <a
                                            href="{{ route('article.user', ['user' => $article->user->id]) }}"
                                            class="text-decoration-none card-text">{{ $article->user->name }}</a>
                                    </div>
                                    <div class="mt-1"><a href="{{ route('article.show', compact('article')) }}"
                                            class="btn btn-primary">DETTAGLIO</a></div>
                                </div>
                                <span class="small fst-italic text-muted">Tempo di lettura {{$article->readDuration()}}</span>
                            </div>
                        </article>
                    </div>
                @endforeach
            @endif

        </div>
    </div>

</x-layout>
