@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">



                    @foreach($topics as $topic)
                        <div  class="panel panel-primary topic" >
                            <div class="panel-heading clearfix">
                                <a style="display: block; color:white;" class="float-left" href="{{ url('/topic-show',$topic->id) }}">
                                    <h1 class="panel-title">{{ $topic->name }}</h1>
                                    <span class="info"> {{ $topic->desc }}</span>
                                </a>
                                <div class="float-right">
                                    Autor: {{ $topic->user->name }}<br>
                                    <span class="info" > Postów: {{ count($topic->posts)  }} </span><br>
                                    <span class="info" >Dodano: {{ $topic->created_at }}</span><br>
                                    @if(!Auth::guest() and Auth::user()->role == 1)
                                        <div  class="text-right info" > <a style="color:white;" href="{{ url('delete-topic',$topic->id) }}">Usuń</a></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection
