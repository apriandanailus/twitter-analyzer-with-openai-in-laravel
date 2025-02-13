<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class TwitterAnalyzerController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function analyze(Request $request)
    {
        $request->validate([
            'twitterUrl' => 'required|url',
        ]);

        $twitterUrl = $request->input('twitterUrl');
        $username = basename(parse_url($twitterUrl, PHP_URL_PATH));

        $client = OpenAI::client(env('OPENAI_API_KEY')); // initialize the client
        $response = $client->chat()->create([
            'model'      => 'gpt-3.5-turbo',
            'messages'   => [
                [
                    'role'    => 'user',
                    'content' => "Analyze the Twitter profile of @$username and provide a 2-3 lines summary."
                ]
            ],
            'max_tokens' => 200,
        ]);

        $summary = $response['choices'][0]['message']['content'];

        return redirect('/')->with('summary', $summary);
    }
}