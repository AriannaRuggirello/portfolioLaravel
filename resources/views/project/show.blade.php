@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col">
                @if (!empty($project->image))
                    <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="Apartment Image">
                @else
                    <img src="{{ asset('storage/defaultImage.jpg') }}" class="card-img-top" alt="Default Image">
                @endif
            </div>
            <div class="col">
                {{-- info --}}
                <section>
                    <h2 class="my-4">{{ $project->title }}</h2>
                    <h6 class="my-4">Pubblicato il: </h6>
                    <span>{{ $project->publish_year }}</span>
                    <p class="my-4">{{ $project->description }}</p>
                </section>
                {{-- type --}}
                <section class="my-4">
                    <h6>Proggetto {{ $project->type->name }}</h6>
                </section>
                {{-- link --}}
                <section class="my-4">
                    <section class="my-4">
                        <h6>Link Github: <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a></h6>
                    </section>

                </section>

                {{-- technologies --}}
                <section>
                    <h4>LINGUAGGI UTILIZZATI</h4>
                    @foreach ($project->technologies as $technology)
                        <span>{{ $technology->name }}</span><br>
                    @endforeach
                </section>
                {{-- edit --}}
                <a class="link-offset-2 link-underline link-underline-opacity-0 link-light"
                    href="{{ route('project.edit', $project->id) }}">
                    <button type="button" class="my-3 px-4 btn btn-warning rounded-pill">
                        Edit
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
