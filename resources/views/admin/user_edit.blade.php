@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edycja użytkownika</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ url('/update-user',$user->id) }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Imie:</label>
                                <input type="text" class="form-control" name='name' id="name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Adres email:</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Nowe hasło:</label>
                                <input type="password" name="password" class="form-control" id="pwd">
                                <small id="passwordHelp" class="form-text text-muted">Wpisz tylko jeśli zmieniasz hasło</small>
                            </div>
                            @if(Auth::user()->role == 1)
                                <div class="form-group">
                                    <label for="sel1"> Rola:</label>
                                    <select class="form-control" name="role" id="sel1">
                                        <option value="1" @if($user->role == 1) selected @endif>Admin</option>
                                        <option value="0" @if($user->role == 0) selected @endif>User</option>
                                    </select>
                                </div>
                            @endif
                            <button type="submit" class="btn btn-primary">Edytuj</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection