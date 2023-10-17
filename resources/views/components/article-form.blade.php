<div class="container-fluid">
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
        <div class="col-12 col-md-6">
            <form class="border p-5" method="POST" enctype="multipart/form-data" action="{{ route('article.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">TITOLO</label>
                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror"
                        name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="mt-1 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="mt-3">SOTTOTITOLO</label>
                    <input name="subtitle" value="{{ old('subtitle') }}" type="text"
                        class="form-control @error('subtitle') is-invalid @enderror">
                    @error('subtitle')
                        <div class="mt-1 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">DESCRIZIONE</label>
                    <textarea name="body" id="body" cols="30" rows="10"
                        class="form-control @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
                    @error('body')
                        <div class="mt-1 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Image</label>
                    <input type="file" name="img" class="form-control  @error('body') is-invalid @enderror">
                    @error('img')
                        <div class="mt-1 alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">CATEGORIA</label>
                    <select name="category_id" id="category" cols="30" rows="10"
                        class="form-control text-capitalize">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Tags:</label>
                    <input name="tags" id="tags" class="form-control" value="{{ old('tags') }}">
                    <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                </div>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
