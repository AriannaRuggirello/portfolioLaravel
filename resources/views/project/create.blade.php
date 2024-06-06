@extends('layouts.app')
@section('content')
    <div class="container py-4  ">


        <div class="p-md-4 bg-body-secondary ">
            <h2>Nuovo progetto</h2>
            <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    {{-- immagini proggetto --}}

                    {{-- informazioini del progetto,tipologia e linguaggi --}}
                    <div class="col">
                        {{-- info project --}}
                        <section class="py-4">
                            <h4>Informazioni sul progetto:</h4>
                            <label for="title">Titolo</label>
                            <br>
                            <input type="text" name="title" id="title">
                            <br>
                            <label for="publish_year">Anno di pubblicazione</label>
                            <br>
                            <input type="year" name="publish_year" id="publish_year">
                            <br>
                            <label for="description">Descrizione del proggetto</label>
                            <br>
                            <input type="text" name="description" id="description">
                            <br>
                            <label for="image" class="form-label">Selezionare immagine:</label>
                            <br>
                            <input required type="file" name="image" id="image" placeholder="selezionare immagine"
                                value="{{ old('image') }}">
                            <br>
                            <label for="link" class="form-label">Aggiungi link:</label>
                            <br>
                            <input type="text" name="link" id="link">

                        </section>

                        {{-- technologies --}}
                        <section class="py-4">
                            <h4>Linguaggi di proggrammazione utilizzati:</h4>

                            @foreach ($technologies as $technology)
                                <div>
                                    <input class="form-check-input" type="checkbox" value="{{ $technology->id }}"
                                        name="technologies[]" id="technology-{{ $technology->id }}">
                                    <label class="form-check-label" for="technology-{{ $technology->id }}">
                                        {{ $technology->name }}
                                    </label>
                                </div>
                            @endforeach
                        </section>

                        {{-- types --}}
                        <section class="py-4">
                            <h4>Tipologia di progetto:</h4>

                            <select name="type_id" id="type_id">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                        </section>

                        <input class="btn btn-primary rounded-pill px-4 my-4 " type="submit" value="CREATE">

                    </div>

                </div>


            </form>
        </div>

    </div>









    </div>
@endsection
