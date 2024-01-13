@extends('layouts.app')
@section('content')
    <section class="container-fluid mt-5">

        <h1>Lista dei Progetti</h1>
        <div class="row">
            @include('admin.partials.sidebar')
            <!-- navbar blu -->
            <div class="col-10" >
            <div class="bg-primary ">
                <div class="container-fluid ">

                </div>
            </div>
            <!--section projects  -->
            <div class="card">
                <div class="card-header ">
                    Tutti i progetti
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome Progetto</th>
                            <th>Modifica</th>
                            <th>Cancella</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project->id) }}"  class="text-decoration-none">
                                        <p class="text-uppercase text-black ">titolo progetto :
                                            {{ $project->title }}</p>
                                    </a>
                                <td>
                                    <a href="{{ route('admin.projects.edit', $project->id) }}"
                                        class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="cancel-button btn btn-danger"
                                            data-item-title="{{ $project->title }}"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>

        </div>

        {{-- <div class="d-flex justify-content-between mt-2">
            <h1>Project List</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary text-center">Crea Nuovo
                progetto</a>
        </div>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome Progetto</th>
                        <th>Modifica</th>
                        <th>Cancella</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <a href="{{ route('admin.projects.show', $project->id) }}">
                                    <p class="text-uppercase">titolo progetto : {{ $project->title }}</p>
                                </a> --}}
        {{-- <p>Descrizione progetto: {{ $project->description }}</p> --}}
        {{-- <a href="{{ $project->link }}">link progetto su github</a> --}}
        {{-- <td>
                                <a href="{{ route('admin.projects.edit', $project->id) }}"
                                    class="btn btn-success">Modifica</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="cancel-button btn btn-danger"
                                        data-item-title="{{ $project->title }}"> Cancella </button>
                                </form>
                            </td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




        </div> --}}
    </section>
    @include('admin.partials.modal_delete')
@endsection
