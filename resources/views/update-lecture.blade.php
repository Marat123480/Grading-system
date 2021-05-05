@extends('layout')
@section('title')
    Редактировать предмета
@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <h4>Редактировать предмета</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{action('LectureController@updateLecture', $id)}}">
            <input class="form-control" placeholder="Название предмета" type="text" value="{{$lecture->title}}" name="titleU" required>
            <input class="form-control" placeholder="Описание предмета" type="text" value="{{$lecture->description}}" name="descriptionU" required>
            <button type="submit" class="btn btn-primary">Изменить</button>

            @csrf
            @method('PUT')

        </form>
    </div>
</div>

@endsection
