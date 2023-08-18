@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Channel</h2>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('channels.update', ['channel' => $channel->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="ChannelName">Channel Name</label>
                            <input type="text" name="ChannelName" class="form-control" value="{{ $channel->ChannelName }}" required>
                        </div>

                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea name="Description" class="form-control" rows="3" required>{{ $channel->Description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="SubscribersCount">Subscribers Count</label>
                            <input type="number" name="SubscribersCount" class="form-control" value="{{ $channel->SubscribersCount }}" required>
                        </div>

                        <div class="form-group">
                            <label for="Video">Upload New Video</label>
                            <input type="file" name="video" class="form-control-file">
                        </div>

                        @if ($channel->VideoURL)
                            <div class="form-group">
                                <label>Current Video</label><br>
                                <video controls>
                                    <source src="{{ asset($channel->VideoURL) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary">Update Channel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
