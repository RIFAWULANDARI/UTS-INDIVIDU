<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();

        return view('campaign.index', compact('campaigns'));
    }

    public function create()
    {
        return view('campaign.create');
    }

    public function store(Request $request)
    {
        Campaign::create([
            'title' => $request->title,
            'description' => $request->description,
            'target_donation' => $request->target_donation,
            'deadline' => $request->deadline,
        ]);

        return redirect('/campaign');
    }

    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);

        return view('campaign.edit', compact('campaign'));
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $campaign->update([
            'title' => $request->title,
            'description' => $request->description,
            'target_donation' => $request->target_donation,
            'deadline' => $request->deadline,
        ]);

        return redirect('/campaign');
    }
}