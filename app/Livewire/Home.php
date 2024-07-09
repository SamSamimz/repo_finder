<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Home extends Component
{
    public $searchOn = false;
    public $searchTerm = '';
    public $repositories = [];
    public $showingRepository = false;

    public function submit() {
        if(empty($this->searchTerm)) {
            return;
        }
        $client = new Client();
        $response = $client->get('https://api.github.com/search/repositories', [
            'query' => [
                'q' => $this->searchTerm
            ],
            'headers' => [
                'Accept' => 'application/vnd.github.v3+json',
                'User-Agent' => 'RepoFinder'
            ]
        ]);
        $data = json_decode($response->getBody()->getContents(), true);
        $this->repositories = $data['items'] ?? [];
        $showingRepository = true;
        
    }

    public function render()
    {
        return view('home');
    }
}


