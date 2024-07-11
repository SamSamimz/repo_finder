<?php

namespace App\Livewire;

use App\Services\GithubService;
use App\Services\YoutubeService;
use Livewire\Component;

class Home extends Component
{
    public $searchOn = false;
    public $searchTerm = '';
    public $githubRepositories = [];
    public $youtubeRepositories = [];
    public $showingRepository = false;
    protected $githubService;
    protected $youtubeService;
    public function boot(GithubService $githubService, YoutubeService $youtubeService) {
        $this->githubService = $githubService;
        $this->youtubeService = $youtubeService;
    }

    public function submit() {
        if(empty($this->searchTerm)) {
            return;
        }

        $this->githubRepositories = $this->githubService->search($this->searchTerm);
        $this->youtubeRepositories = $this->youtubeService->search($this->searchTerm);
        // dd($this->youtubeRepositories);
    }

    public function render()
    {
        return view('home');
    }
}


