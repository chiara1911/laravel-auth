@extends('layouts.app')

@section('title', $project['title'])

@section('content')
    <section class="container">
        <h1>Project List</h1>
                    <p class="text-uppercase">titolo progetto : {{ $project->title }}</p>
                    <p>Descrizione progetto: {{ $project->description }}</p>
                    <a href="{{ $project->link }}">link progetto su github</a>
    </section>
@endsection
