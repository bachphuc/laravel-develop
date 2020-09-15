@extends('layouts.default')

@section('content')
    <div>
        <a href="{{route('store.books.index')}}">Buy a new book</a>
    </div>
    <div>
        <a href="{{route('users.index')}}">Manage Users</a>
    </div>

    @isset($form)
    {!! $form->render() !!}
    @endisset
@endsection