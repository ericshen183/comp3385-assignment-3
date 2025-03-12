@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>
@endsection
