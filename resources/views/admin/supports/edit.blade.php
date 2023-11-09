@extends('admin.layouts.app')

@section('title', "Editar a Dúvida: {$support->subject}")

@section('header')
    <h1>Dúvida: {{ $support->subject }}</h1>
@endsection

@section('content')
    <form action="{{ route('supports.update', $support->id) }}" method="POST">
        @method('PUT')
        @include('admin.supports.partials.form', [
            'support' => $support
        ])
    </form>
@endsection