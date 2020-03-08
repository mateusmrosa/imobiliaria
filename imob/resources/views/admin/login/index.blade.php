@extends('layouts.app')

@section('content')

    <div class="container">
        <h4>Entrar</h4>
        <form action="{{ route('admin.login') }}" method="post">
            {{ csrf_field() }}
            @include('admin.login._form')
            <button class="btn blue" type="submit">Entrar</button>
        </form>
    </div>

@endsection