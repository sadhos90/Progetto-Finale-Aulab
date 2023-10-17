<div class="container-fluid mt-5">
  @if ($errors->any())
  <div class="mt-5 alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
    <div class="row justify-content-center">
        <div class="col-8 col-md-4">
            <form method="POST" action="{{ route('article.update', compact('article')) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="mt-3">NOME ARTICOLO</label>
                    <input name="title" value="{{ $article->title }}" type="text"
                        class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="mt-3">SOTTOTITOLO</label>
                    <input name="subtitle" value="{{ $article->subtitle }}" type="text"
                        class="form-control @error('subtitle') is-invalid @enderror">
                    @error('subtitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label mt-3">DESCRIZIONE ARTICOLO</label>
                    <textarea class="form-control @error('body') is-invalid" @enderror rows="3" name="body">{{ $article->body }}</textarea>
                    @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Cover :</label>
                    <img src="{{ Storage::url($article->img) }}" alt="" height="100px" width="100px">
                </div>
                <div class="mb-3">
                    <label class="mt-3">IMMAGINE ARTICOLO</label>
                    <input type="file" class="form-control" name="img">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">CATEGORIA</label>
                    <select name="category" id="category" cols="30" rows="10"
                        class="form-control text-capitalize">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Tags:</label>
                    <input name="tags" class="form-control" id="tags"
                        value="{{ $article->tags->implode('name', ',') }}">
                    <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                </div>

                @if ($article->category)
                    <a href="{{ route('article.category', ['category' => $article->category->id]) }}"
                        class="small fst-italic text-capitalize">{{ $article->category->name }}</a>
                @else
                    <p class="small fst-italic text-capitalize">Non categorizzato</p>
                @endif

                <button type="submit" class="btn btn-primary mt-3">CONFERMA</button>
            </form>
        </div>
    </div>
</div>
