<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Categoria</th>
            <th scope="col">Quantita' articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>

    <tbody>
        @foreach($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>
            @if($metaType == "category")
            <td>
                <form action="{{route('admin.editCategory' , ['category' => $metaInfo])}}" method="POST">
                @csrf
                @method('put')
                <input type="text" name="name" placeholder="Nuovo nome" class="form-control w-50 d-inline">
                <button type="submit" class="btn btn-info">Aggiorna</button>
            </form>
            </td>
            <td>
                <form action="{{route('admin.deleteCategory' , ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
            @else
            <td>
                <form action="" method="">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-info">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="" method="">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>