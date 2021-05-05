@extends('layout')

@section('title')
Редактировать оценку
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <h4>Редактировать оценку</h4>
    </div>
</div>
@php

@endphp
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="{{action('GradeController@updateGrade', $id)}}">
            <select class="form-control" name="lectureIdI" >
                @foreach($lectures as $lecture)
                    @if($lecture->id == $grade->lecture_id)
                        <option value="{{$lecture->id}}" selected disabled>{{$lecture->title}}</option>
                    @else
                        <option value="{{$lecture->id}}">{{$lecture->title}}</option>
                    @endif
                @endforeach
            </select>
            <input class="form-control" placeholder="Комментарий" type="text" value="{{ $grade->comment }}" name="commentI" required>
            <input class="form-control" placeholder="Оценка" type="text" value="{{ $grade->grade }}" name="gradeI" required>
            <button type="submit" class="btn btn-primary">Изменить</button>

            @csrf
            @method('PUT')

        </form>
    </div>
</div>

@endsection
