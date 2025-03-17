@extends('layouts.app')

@section('content')
<body>
    <div class="client-form">
        <h2>Create Client</h2>
        <form method="POST" action="{{ route('clients.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
                <div id="phone" class="form-text">Format: xxx-xxx-xxxx</div>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="company_logo">Company Logo:</label>
                <input type="file" id="company_logo" name="company_logo" required>
            </div>
            <div class="form-group">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</body>
@endsection