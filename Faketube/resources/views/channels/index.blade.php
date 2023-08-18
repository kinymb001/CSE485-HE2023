@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Channel List</h2>
                    <a href="{{ url('/channels/create') }}" class="btn btn-primary">Create New Channel</a>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($channels as $channel)
                            <li class="list-group-item">
                                <h4 class="card-title">{{ $channel->ChannelName }}</h4>
                                <p class="card-text">{{ $channel->Description }}</p>
                                <a href="{{ url('/channels/' . $channel->id . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger delete-button" data-id="{{ $channel->id }}">Delete</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-button');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const channelId = this.getAttribute('data-id');
                    const confirmed = confirm('Are you sure you want to delete this channel?');
                    if (confirmed) {
                        window.location.href = '/channels/' + channelId;
                    }
                });
            });
        });
    </script>
@endsection
