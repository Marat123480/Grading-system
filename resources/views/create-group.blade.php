<div class="row">
    <div class="col-12">
        <h4>Добавить Группу</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{route('group')}}">
            <input class="form-control" placeholder="Имя" type="text" value="{{ old('nameI') }}" name="nameI" required>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            @csrf

        </form>
    </div>
</div>
