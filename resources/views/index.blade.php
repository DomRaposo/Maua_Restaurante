@extends('layouts.app')

@section('content')
    <h2>Usuários</h2>
    <a href="{{ route('users.store') }}">Novo Usuário</a>

    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->nome }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->tipo }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
