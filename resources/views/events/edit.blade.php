@extends('layouts.master')

@section('content')
    <h1>Editer l'evenement {{$event->id}}</h1>
    <form action="{{route('events.update',$event)}}" method="POST" class="form-control-lg m-5">
        {{csrf_field()}}
       {{method_field('PUT')}}

        @include('layouts.partials.form')

        <div class="form-group">
            <button class="btn btn-primary  btn-block"  type="submit">Modifier</button>
        </div>
        <a class=" btn-block" href="{{route('home')}}">Annuler</a>

    </form>

@stop