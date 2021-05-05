@extends('layout')

@section('title')
Редактировать группу
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h4>Редактировать группу</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{action('GroupController@updateGroup', $id)}}">
            <input class="form-control" placeholder="Имя" type="text" value="{{$group->name}}" name="nameI" required>
            <button type="submit" class="btn btn-primary">Изменить</button>

            @csrf
            @method('PUT')

        </form>
    </div>
</div>

@endsection
