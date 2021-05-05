@extends('layout')

@section('title')
Редактировать учителя
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h4>Редактировать учителя</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{action('UserController@updateTeacher', $id)}}">
            <input class="form-control" placeholder="Имя" type="text" value="{{$teacher->name}}" name="nameI" required>
            <input class="form-control" placeholder="Фамилия" type="text" value="{{$teacher->surname}}" name="surnameI" required>
            <input class="form-control" placeholder="Почта" type="text" value="{{$teacher->email}}" name="emailI" required>
            <input class="form-control" placeholder="Номер" type="text" value="{{$teacher->phone}}" name="phoneI" required>
            <button type="submit" class="btn btn-primary">Изменить</button>

            @csrf
            @method('PUT')

        </form>
    </div>
</div>

@endsection
