<?php

namespace App\Livewire;

use App\Services\YoutubeService;
use Google\Client;
use Livewire\Component;
use Google\Service\YouTube;

class TestApi extends Component
{

    public $query = 'traversy media';
    public $results = [];

    protected $youtubeService;

    public function boot(YoutubeService $youtubeService) {
        $this->youtubeService = $youtubeService;
    }

    public function search()
    {
        if ($this->query) {
            $this->results = $this->youtubeService->search($this->query);
        }
        if($this->results) {
            dd($this->results);
        }
    }

    public function render()
    {
        return view('test-api');
    }
}
