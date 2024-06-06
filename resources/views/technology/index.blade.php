@extends('layouts.app')

@section('content')
    <div class="container py-12">
        <button type="button" class="btn btn-primary my-3">
            <a href="{{ route('technology.create') }}"
                class="link-offset-2 link-underline link-underline-opacity-0 text-light">
                New Technology
            </a>
        </button>
        <div class="">
            @foreach ($technologies as $technology)
                <div class="row row-cols-2">
                    <div>
                        {{ $technology->name }}
                    </div>
                    <div class="row row-cols-4 g-2 gx-3">

                        <button type="button" class="btn btn-success mx-2 ">
                            <a href="{{ route('technology.show', $technology) }}"
                                class="link-offset-2 link-underline link-underline-opacity-0 text-light">View</a>
                        </button>

                        <button type="button" class="btn btn-warning ">
                            <a href="{{ route('technology.edit', $technology) }}"
                                class="link-offset-2 link-underline link-underline-opacity-0 text-light">Edit</a>

                        </button>

                        <form action="{{ route('technology.destroy', $technology) }}" method="POST">
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
