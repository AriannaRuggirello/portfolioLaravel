@extends('layouts.app')

@section('content')
    <div class="container py-12">
        <button type="button" class="btn btn-primary my-3">
            <a href="{{ route('project.create') }}" class="link-offset-2 link-underline link-underline-opacity-0 text-light">
                New project
            </a>
        </button>
        <div class="">
            @foreach ($projects as $project)
                <div class="row row-cols-2">
                    <div>
                        <h1>{{ $project->title }}</h1>

                        {{-- <img class="img-thumbnail" src="{{ asset('storage/' . $project->image) }}" alt=""> --}}
                    </div>
                    <div class="row row-cols-4 g-2 gx-3">

                        <button type="button" class="btn btn-success mx-2 ">
                            <a href="{{ route('project.show', $project) }}"
                                class="link-offset-2 link-underline link-underline-opacity-0 text-light">View</a>
                        </button>

                        <button type="button" class="btn btn-warning ">
                            <a href="{{ route('project.edit', $project) }}"
                                class="link-offset-2 link-underline link-underline-opacity-0 text-light">Edit</a>

                        </button>

                        <form action="{{ route('project.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
