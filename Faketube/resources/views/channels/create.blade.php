@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Create New Channel</h2>
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

                    <form method="POST" action="{{ route('channels.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="ChannelName">Channel Name</label>
                            <input type="text" name="ChannelName" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="Description">Description</label>
                            <textarea name="Description" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="SubscribersCount">Subscribers Count</label>
                            <input type="number" name="SubscribersCount" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="Video">Upload Video</label>
                            <input type="file" name="video" class="form-control-file" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Channel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
