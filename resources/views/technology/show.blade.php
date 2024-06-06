@extends('layouts.app')
@section('content')
    <div class="row">
        {{-- sidebar --}}
        <div class="dash-nav vh-100 col-lg-2 p-md-4 py-4 text-center" id="sidebar" style="--bs-bg-opacity: .8;">
            <ul class="nav flex-column  gap-2">
                <li class="nav-item">
                    <a class="btn bg-body-secondary rounded-pill px-4" href="{{ route('dashboard') }}">
                        <i class="bi bi-house me-md-2"></i><span>Dashboard</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="col-lg-10 p-md-4 py-4 bg-body-secondary">

            <h5>{{ $technology->name }}</h5>

        </div>

    </div>
@endsection
