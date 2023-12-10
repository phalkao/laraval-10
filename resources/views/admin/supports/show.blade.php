@extends('layouts.admin')

@section('title', 'Detalhes')

@section('header')
    <h1>Detalhes da dúvida</h1>
@endsection

@section('content')
    <ul>
        <li>Assunto: {{ $support->subject }}</li>
        <li>Conteúdo: {{ $support->body }}</li>
        <li>Status: {{ $support->status }}</li>
    </ul>
@endsection
