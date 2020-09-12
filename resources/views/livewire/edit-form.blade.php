<div class="row col-12 card m-0 p-0 pb-2">
    <h4 class='card-header'> Edição de Heróis</h4>
    <div class='col-12 row m-0 p-2'>
        <div class='col-6'>
            <select wire:model="heroId" class="mr-2 w-75" required>
            @foreach( $options as $option)
                <option value={{$option->id}}>{{$option->name}}</option>
            @endforeach
            </select>
            <button type="buttom" class='btn btn-sm btn-primary' wire:click='edit({{$heroId}})'> Editar </button>
        </div>
        <div class='col'>
            @if ($edited)
            <div class="alert alert-success m-0">
                Registro do heroi atualizado com sucesso.
            </div>
            @endif
        </div>
    </div>
    <div class='m-0 px-2'>
    @if($editing)
        @include('livewire.includes.formHero')
    @endif
    </div>
</div>