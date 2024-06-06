@extends('layouts.app')

@section('content')
    <div class="container py-3 ">



        <div class="col-lg-10 p-md-4  ">
            <h3>Modifica il linguaggio</h3>
            <form method="post" action="{{ route('technology.update', $technology->id) }}">
                @csrf
                @method('PUT')
                {{-- info --}}
                <section>
                    <div class="mb-3">
                        <label class="form-label" for="name">
                            <h6>Name:</h6>
                        </label>
                        <input class="form-control" name="name" id="name" value="{{ $technology->name }}">


                    </div>


                </section>


                <button type="submit" class="btn btn-success px-4 rounded-pill my-4">Save</button>

            </form>
        </div>
    </div>
@endsection
