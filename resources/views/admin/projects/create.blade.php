@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <section class="container">
        <form action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Aggiungi titolo</label>
              <input type="text" class="form-control" id="title" name="title" >
                          </div>
            <div class="mb-3">
              <label for="description" class="form-label">Descrizione progetto</label>
              <textarea type="text" class="form-control" id="description" name="description">
              </textarea>
            </div>
            <div class="mb-3 ">
                <label for="link" class="form-label">Inserisci l'url del tuo progetto di GIT HUB</label>
                <input type="text" class="form-control" id="link" name="link">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
