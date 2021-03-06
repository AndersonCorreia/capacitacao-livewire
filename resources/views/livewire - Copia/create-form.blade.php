<div class="card m-0 p-0" wire:poll.30s>
    <h4 class='card-header'>Criação de heroi</h4>
    <div class="p-2">
        @include('livewire.includes.formHero')
        @if (!$heroCreated)
        <div class='p-1'>
            <h5> Registrando um heroi</h5>
            <p>O nome do heroi: {{$hero->name}}</p>
            <p>Heroi conhecido como: {{$hero->knowAs}}</p>
            <p>É interpretado pelo ator: {{$hero->interpreted}}</p>
            <p>Foi criado em: {{$hero->created}}</p>
        </div>
        @else
        <h4 class="text-success">Heroi criado com sucesso!!</h4>
        @endif
    </div>
</div>