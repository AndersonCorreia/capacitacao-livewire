<form>
    <div class='form-group p-1 m-0'>
        <label for='name{{$hero->id ?? '1'}}'>Nome verdadeiro:</label>
        <input id='name{{$hero->id ?? '1' }}' type="text" required>
    </div>
    <div class='form-group p-1 m-0'>
        <label for='knowAs{{$hero->id ?? '1' }}'>Conhecido como:</label>
        <input id='knowAs{{$hero->id ?? '1' }}' type="text" required>
    </div>
    <div class='form-group p-1 m-0'>
        <label for='interpreted{{$hero->id ?? '1' }}'>Interpretado por:</label>
        <input id='interpreted{{$hero->id ?? '1' }}' type="text" required>
    </div>
    <div class='form-group p-1 m-0'>
        <label for='created{{$hero->id ?? '1' }}'>Criado em:</label>
    <input id='created{{$hero->id ?? '1' }}' type="number" required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>