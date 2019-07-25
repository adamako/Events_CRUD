@extends('layouts.master')

@section('content')
    <h1>{{$event->title}}</h1>

    <p>{{$event->description}}</p>

    <a class="btn btn-default" href="{{route('events.edit',$event)}}" >Modifier </a>

{{--    <a href="{{route('events.destroy',$event)}}" data-method="DELETE" data-confirm="Etes vous sur ?" class="btn btn-danger">Supprimer</a>--}}
    <form
            action="{{route('events.destroy',$event)}}"
            method="POST" class="inline-block"
    >
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input type="submit" value="supprimer" class="btn btn-danger">
    </form>
    <hr>
    <p><a href="{{route('home')}}">Tout les evenements</a></p>
@stop