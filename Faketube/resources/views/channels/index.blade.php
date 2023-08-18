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
                                @if ($channel->URL)
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video controls>
                                            <source src="{{ asset($channel->URL) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                @endif
                                <a href="{{ url('/channels/' . $channel->id . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ url('/channels/' . $channel->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
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
