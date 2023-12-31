<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChannelController extends Controller
{
    public function index()
    {
        $channels = Channel::all();
        return view('channels.index', compact('channels'));
    }

    public function create()
    {
        return view('channels.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ChannelName' => 'required|string|max:255',
            'Description' => 'required|string',
            'SubscribersCount' => 'required|integer|min:0',
            'video' => 'mimes:mp4,mov,avi,wmv,jpeg,png,gif|max:20000',
        ]);

        $channel = new Channel();
        $channel->ChannelName = $validatedData['ChannelName'];
        $channel->Description = $validatedData['Description'];
        $channel->SubscribersCount = $validatedData['SubscribersCount'];
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('public/videos');
            $channel->URL = Storage::url($videoPath);
        }
        $channel->save();

        return redirect('/channels')->with('success', 'Channel created successfully.');
    }

    public function edit($id)
    {
        $channel = Channel::find($id);
        return view('channels.edit', compact('channel'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ChannelName' => 'required|string|max:255',
            'Description' => 'required|string',
            'SubscribersCount' => 'required|integer|min:0',
            'video' => 'mimes:mp4,mov,avi,wmv,jpeg,png,gif|max:20000',
        ]);

        $channel = Channel::findOrFail($id);
        $channel->ChannelName = $validatedData['ChannelName'];
        $channel->Description = $validatedData['Description'];
        $channel->SubscribersCount = $validatedData['SubscribersCount'];
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('public/videos');
            $channel->URL = Storage::url($videoPath);
        }
        $channel->save();

        return redirect('/channels')->with('success', 'Channel updated successfully.');
    }

    public function destroy($id)
    {
        $channel = Channel::findOrFail($id);
        $channel->delete();

        return redirect('/channels')->with('success', 'Channel deleted successfully.');
    }
}
