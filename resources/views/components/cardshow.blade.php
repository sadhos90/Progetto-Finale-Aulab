
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{{ $article->subtitle }}</p>
        <p class="card-text">{{ $article->body }}</p>
        <p class="card-text"><a
                href="{{ route('article.category', ['category' => $article->category->id]) }}">{{ $article->category->name }}</a>
        </p>
        <p class="card-text"><small class="text-body-secondary">Redatto il {{ $article->created_at->format('d/m/Y') }} da
                <a href="{{ route('article.user', ['user' => $article->user->id]) }}"
                    class="text-decoration-none ">{{ $article->user->name }}</a></small></p>
    </div>
    <a href="{{ route('welcome') }}" class="btn m-1 bg-warning">TORNA INDIETRO</a>
    <img src="https://picsum.photos/300" class="card-img-bottom" alt="...">
</div>
