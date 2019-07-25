@extends('layouts.master')

@section('content')
    <h1>{{$events->count()}} {{str_plural(' Evenement',$events->count())}}</h1>

{{--    <a href="{{route('events.create')}}">Creer un evenement</a>--}}
    @if(count($events)>0)
        <ul>
            @foreach($events as $ev)
                <li><a href="{{route('events.show',$ev)}}">{{$ev->title}}</a></li>
            @endforeach
        </ul>
        {{$events->links()}}
    @else
        <p>Pas d'evenements</p>
    @endif
@stop