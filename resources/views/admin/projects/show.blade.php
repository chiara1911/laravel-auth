@extends('layouts.app')

@section('title', $project['title'])

@section('content')
    <section class="container-fluid mt-5">
        <div class="row">
            @include('admin.partials.sidebar')
            <div class="col-10">
                <h1>Project List</h1>
                <p class="text-uppercase">titolo progetto : {{ $project->title }}</p>
                <p>Descrizione progetto: {{ $project->description }}</p>
                <a href="{{ $project->link }}">link progetto su github</a>
                <img src="{{ asset('storage/'. $project->image) }}" alt="{{ $project->title }}">
            </div>
        </div>
    </section>
@endsection
