@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista użytkowników <a href="{{ url('/add-user') }}" style="float: right;" class="btn  btn-success btn-xs"> Dodaj użytkownika</a></div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Imie</th>
                                <th>E-mail</th>
                                <th>Rola</th>
                                <th>Akcja</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if( $user->role == 1)
                                                <span class="label label-danger">Admin</span>
                                            @else
                                                <span class="label label-default">User</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/edit-user', $user->id) }}" type="button" class="btn btn-default btn-xs">Edytuj</a>
                                            <a href="{{ url('/delete-user', $user->id) }}" type="button" class="btn btn-default btn-xs">Usuń</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection