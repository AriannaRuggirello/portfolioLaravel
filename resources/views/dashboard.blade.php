@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row row-cols-2 py-5">
            {{-- left col --}}
            <div class="col-lg-4">
                <button type="button" class="my-3 px-4 btn btn-primary rounded-pill">
                    <a href="{{ route('project.create') }}"
                        class="link-offset-2 link-underline link-underline-opacity-0 text-light">
                        New project
                    </a>
                </button>
                <br>
                <button type="button" class="my-3 px-4 btn btn-primary rounded-pill">
                    <a href="{{ route('technology.create') }}"
                        class="link-offset-2 link-underline link-underline-opacity-0 text-light">
                        New Technology
                    </a>
                </button>
            </div>

            {{-- right col --}}
            <div>
                {{-- projects --}}
                <div class="py-12">

                    <div>
                        <h3>I MIEI PROGETTI</h3>

                        @foreach ($projects as $project)
                            <div class="row row-cols-2">
                                <div>
                                    <h3>{{ $project->title }}</h3>

                                    {{-- <img class="img-thumbnail" src="{{ asset('storage/' . $project->image) }}" alt=""> --}}
                                </div>
                                <div class="row row-cols-4">

                                    <button type="button" class="my-3 px-4 btn btn-success rounded-pill">
                                        <a href="{{ route('project.show', $project) }}"
                                            class="link-offset-2 link-underline link-underline-opacity-0 text-light">View</a>
                                    </button>

                                    <form action="{{ route('project.destroy', $project) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="my-3 px-4 btn btn-danger rounded-pill">Delete</button>
                                    </form>

                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>

                {{-- technologies --}}

                <div class="py-12">

                    <div>
                        <h3>LE MIE TECNOLOGIE</h3>
                        @foreach ($technologies as $technology)
                            <div class="row row-cols-2">
                                <div>
                                    {{ $technology->name }}
                                </div>
                                <div class="row row-cols-4">

                                    {{-- edit --}}
                                    <button type="button" class="my-3 px-4 btn btn-warning rounded-pill">
                                        <a class="link-offset-2 link-underline link-underline-opacity-0 link-light"
                                            href="{{ route('technology.edit', $technology->id) }}">
                                            Edit
                                        </a>
                                    </button>


                                    <form action="{{ route('technology.destroy', $technology) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="my-3 px-4 btn btn-danger rounded-pill">Delete</button>
                                    </form>

                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
