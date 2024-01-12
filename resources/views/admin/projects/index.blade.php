@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Project List</h1>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-12 col-md-3 m-2 ">
                    <p class="text-uppercase">titolo progetto : {{ $project->title }}</p>
                    <p>Descrizione progetto: {{ $project->description }}</p>
                    <a href="{{ $project->link }}">link progetto su github</a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
