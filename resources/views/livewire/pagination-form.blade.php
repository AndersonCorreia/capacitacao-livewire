<div>
    <div class="card m-0 p-0">
        <div class="card-header pt-2 pb-0 pr-0 m-0">
            <h4 class="card-title">Lista dos heróis</h4>
            <div class="form-group m-2 p-0 col-4">
                <input type="text" name="search" class="form-control"
                    placeholder="nome ou id do Heroi" style="font-size: 0.8rem">
            </div>
        </div>
        <table class="table table-hover text-center table-striped table-responsive-md">
            <caption class="pl-3 m-0 p-0">Lista dos heróis</caption>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Conhecido como</th>
                    <th scope="col">Interpretado por</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Exclusão</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($heroes ?? [] as $hero)
                <tr>
                    <td scope="row">#{{$hero->id}}</td>
                    <td>{{$hero->name}}</td>
                    <td>{{$hero->knowAs}}</td>
                    <td>{{$hero->interpreted}}</td>
                    <td>{{$hero->created}}</td>
                    <td>
                        <button type="button" class="btn btn-danger btn-sm">
                            excluir
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="12">
                        Nenhum herói
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>        
        <div class="card-footer py-2">
            {{ isset($heroes) ? $heroes->links() : '' }}
        </div>
    </div>
</div>