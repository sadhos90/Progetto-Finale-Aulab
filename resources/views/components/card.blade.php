<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="https://picsum.photos/300" class="img-fluid rounded-start" alt="Article Image">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ $article->subtitle }}</p>
                <p class="card-text">{{ $article->body }}</p>
                @if($article->category)
                <div><a href="{{ route('article.category', ['category' => $article->category->id]) }}"
                        class="small fst-italic text-capitalize card-text">{{ $article->category->name }}</a>
                </div>
                @else
                <p class="small fst-italic text-capitalize">Senza categoria</p>
                @endif
                <div class="mt-1 card-footer d-flex justify-content-between align-items-center card-text">
                    Redatto il {{ $article->created_at->format('d/m/Y') }} da
                    <a href="{{ route('article.user', ['user' => $article->user->id]) }}"
                        class="text-decoration-none card-text">{{ $article->user->name }}</a>
                </div>
                <div class="mt-1"><a href="{{ route('article.show', compact('article')) }}"
                        class="btn btn-primary">DETTAGLIO</a></div>
                <span class="small fst-italic text-muted">Tempo di lettura {{ $article->readDuration() }}</span>
            </div>
        </div>
    </div>
</div>


