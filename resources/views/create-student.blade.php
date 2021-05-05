<div class="row">
    <div class="col-12">
        <h4>Добавить Студента</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{action('StudentController@storeStudent', $group_id)}}">
            <input class="form-control" placeholder="Фамилия" type="text" value="{{ old('surnameI') }}" name="surnameI" required>
            <input class="form-control" placeholder="Имя" type="text" value="{{ old('nameI') }}" name="nameI" required>
            <input class="form-control" placeholder="Почта" type="text" value="{{ old('emailI') }}" name="emailI" required>
            <input class="form-control" placeholder="Телефон" type="text" value="{{ old('phoneI') }}" name="phoneI" required>
            <button type="submit" class="btn btn-primary">Сохранить</button>

            @csrf

        </form>
    </div>
</div>
