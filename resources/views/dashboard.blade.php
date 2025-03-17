@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="display-5 fw-bold text-body-emphasis">Dashboard</h1>
    <p class="lead">Welcome to your dashboard. Here you can manage your account, your clients and much more.</p>

    <h2>Clients</h2>
    <ul>
        @foreach ($clients as $client)
            <li>
                <strong>Name:</strong> {{ $client->name }}<br>
                <strong>Email:</strong> {{ $client->email }}<br>
                <strong>Phone:</strong> {{ $client->phone }}<br>
                <strong>Address:</strong> {{ $client->address }}<br>
                @if ($client->company_logo)
                    <strong>Company Logo:</strong> <img src="{{ asset('uploads/' . $client->company_logo) }}" alt="Company Logo" width="100"><br>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
