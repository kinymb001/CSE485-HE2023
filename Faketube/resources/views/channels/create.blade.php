@extends('layouts.app')

@section('content')
    <h1>Create New Channel</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/channels') }}">
        @csrf

        <div class="form-group">
            <label for="ChannelName">Channel Name</label>
            <input type="text" name="ChannelName" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="Description">Description</label>
            <textarea name="Description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="SubscribersCount">Subscribers Count</label>
            <input type="number" name="SubscribersCount" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="URL">URL</label>
            <input type="url" name="URL" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Channel</button>
    </form>
@endsection
