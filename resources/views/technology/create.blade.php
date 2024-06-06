@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <div class="p-md-4 bg-body-secondary ">
            <h2>Nuovo linguaggio</h2>
            <form method="POST" action="{{ route('technology.store') }}" class="py-3">
                @csrf
                @method('POST')
                <label for="name">Inserisci il nome del nuovo linguaggio</label>
                <br>
                <input type="text" name="name" id="name">
                <br>
                <br>



                <input class="mt-4 btn btn-primary rounded-pill px-4" type="submit" value="CREATE">
            </form>
        </div>



    </div>









    </div>
@endsection
