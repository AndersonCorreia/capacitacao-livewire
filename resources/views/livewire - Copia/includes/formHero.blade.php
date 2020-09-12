<form wire:submit.prevent='saveHero()'>
    <div class='form-group p-1 m-0'>
        <label for='name{{$hero->id}}'>Nome verdadeiro:</label>
        <input id='name{{$hero->id}}' type="text" wire:model='hero.name' required>
    </div>
    <div class='form-group p-1 m-0'>
        <label for='knowAs{{$hero->id}}'>Conhecido como:</label>
        <input id='knowAs{{$hero->id}}' type="text" wire:model='hero.knowAs' required>
    </div>
    <div class='form-group p-1 m-0'>
        <label for='interpreted{{$hero->id}}'>Interpretado por:</label>
        <input id='interpreted{{$hero->id}}' type="text" wire:model='hero.interpreted' required>
    </div>
    <div class='form-group p-1 m-0'>
        <label for='created{{$hero->id}}'>Criado em:</label>
    <input id='created{{$hero->id}}' type="number" wire:model='hero.created' required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>