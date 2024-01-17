@extends('layouts.app')
@section('content')
    <section class="container-fluid mt-5">

        <h1 class="text-center">Lista dei Progetti</h1>
        <div class="row">
            @include('admin.partials.sidebar')
            <!-- navbar blu -->
            <div class="col-6">

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
                                        <a href="{{ route('admin.projects.show', $project->slug) }}"
                                            class="text-decoration-none">
                                            <p class="text-uppercase text-black ">titolo progetto :
                                                {{ $project->title }}</p>
                                        </a>
                                    <td>
                                        <a href="{{ route('admin.projects.edit', $project->slug) }}"
                                            class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="cancel-button btn btn-danger"
                                                data-item-title="{{ $project->title }}"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card mt-3 h-50">
                    <div class="card-header">
                        visualizza tutte le tecnologie utilizzate
                    </div>
                </div>
            </div>


        <div class="col-4">

            <!--section categories  -->
            <div class="card h-50">
                <div class="card-header">
                    visualizza tutte le tecnologie utilizzate
                </div>
            </div>
            <div class="card mt-3 h-50">
                <div class="card-header">
                    visualizza tutte le tecnologie utilizzate
                </div>
            </div>
        </div>
    </section>
    @include('admin.partials.modal_delete')
@endsection
