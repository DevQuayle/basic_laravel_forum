@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                        <div  class="panel panel-primary topic" >
                            <div class="panel-heading clearfix">
                                <div class="float-left">
                                    <h1 class="panel-title">{{ $topic->name }}</h1>
                                    <smal class="info"> {{ $topic->desc }}</smal>
                                </div>
                                <div class="float-right">
                                    Autor: {{ $topic->user->name }}<br>
                                    <sapn class="info" >Dodano: {{ $topic->created_at }}</sapn><br>
                                </div>
                            </div>
                        </div>

                        @foreach($topic->posts as $post)
                            <div  class="panel panel-info topic" >
                                <div class="panel-heading clearfix">
                                    <div class="float-left">
                                        {!! $post->text !!}
                                    </div>
                                    <div class="float-right">
                                        Dodano : <strong>{{ $post->created_at }}</strong> <br>
                                        Autor: <strong> {{ $post->user->name }}</strong><br>

                                        @if($post->updated_at  != $post->created_at)
                                            Edytowano: <strong>{{ $post->updated_at }}</strong> <br>
                                        @endif

                                        @if(!Auth::guest() and ( Auth::user()->role == 1 or Auth::user()->id == $post->user_id))
                                            <span class="text-right" style="display: block;">
                                                <button data-url="{{ url('edit-post') }}" data-id="{{ $post->id }}" type="button" class="btn   edit-post btn-warning btn-xs" data-toggle="modal" data-target="#myModal">Edytuj</button>
                                                <a href="{{ url('delete-post',$post->id) }}"  type="button" class="btn  edit-post btn-danger btn-xs" >Usuń</a>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @if (!Auth::guest())
                        <hr>
                        <div class="editr-container">
                            <form method="POST" action="{{ url('/add-post',$topic->id) }}">
                                <textarea name="editor_content" id="edit" cols="30" rows="10"></textarea>
                                {{ csrf_field() }}
                                <button class="odp btn btn-small btn-success">Odpowiedz</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 960px;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Edytuj post</h4>
                </div>
                <form action="{{ url('update-post') }}" method="POST">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <textarea name="text" id="edit-editor" cols="30" rows="10"></textarea>
                        <input type="hidden" name="post_id" >
                        <input type="hidden" name="topic_id">
                    </div>
                    <div class="modal-footer">
                        <button  type="submit" class="btn btn-primary">Zapisz</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection
