<div class="col-12 row m-0 p-0" wire:poll.30s>
    <div class="col-12 border-bottom border-primary p-0" style="background-color: aliceblue">
        <h4 class="text-primary p-4 text-center"> Vamos ver um pouco do que o livewire pode fazer.</h4>
    </div>
    <div class="col-4">
        <div class="card col-12 p-0 border border-primary m-2">
            <div class="card-header p-2 p-0">
                <h4 class="card-title text-center m-0 p-0">Exibir Componentes</h4>
            </div>
            <ul class="list-group list-group-flush m-0">
                <li class="list-group-item">
                    <input id='creat-form' type="checkbox" wire:model='CreatForm'>
                    <label for="creat-form">Formulario de criação de herois</label>
                </li>
                <li class="list-group-item">
                    <input id='edit-form' type="checkbox" wire:model='EditForm'>
                    <label for="edit-form">Edição de herois</label>
                </li>
                <li class="list-group-item">
                    <input id='pagination-form' type="checkbox" wire:model='PaginationForm'>
                    <label for="pagination-form">Paginação dos herois</label>
                </li>
            </ul>
        </div>
        @if ($CreatForm)
        <div class="col-12 border border-primary rounded m-2 p-0">
            <livewire:create-form>
        </div>
        @endif
    </div>
    <div class="col-8 m-0 p-2" style="height: 80vh">
        <div>
            @if ($EditForm)
            <div class="col-12 border border-primary rounded m-0 mb-3 p-0">
                <livewire:edit-form>
            </div>
            @endif
        </div>
        <div>
            @if ($PaginationForm)
            <div class="col-12 border border-primary rounded m-0 p-0">
                <livewire:pagination-form />
            </div>
            @endif
        </div>
    </div>
</div>