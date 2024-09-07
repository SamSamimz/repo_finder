<div class="container">
    <div id="section" class="row d-flex align-items-center justify-content-center">
        <div class="text-center">
            @if ($searchOn)
            {{-- <input type="text" class="form-control"> --}}
            <div wire:transition class="col-8 mx-auto">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" wire:model='searchTerm'
                        placeholder="Search for github repo...">
                    <button class="btn btn-primary" type="button" id="button-search"
                        wire:click='submit()'>Search</button>
                </div>
            </div>
            @else
            <h1>Need a resource? <br>
                Let's find out.</h1>
            <button class="btn btn-primary" wire:click="$set('searchOn',true)">Search Now!</button>
            @endif
        </div>
        <div class="bg-white rounded">
            <div wire:loading.remove wire:target='searchTerm'>
                <div class="row">
                    <div class="col-12 col-md-6">
                        @if ($this->githubRepositories)
                        @foreach ($githubRepositories as $repo)
                        {{-- Github Repositories --}}
                        @include('components.github-repo-item',['repo' => $repo])
                        @endforeach
                        @endif
                    </div>
                    <div class="col-12 col-md-6">
                        @if ($this->youtubeRepositories)
                        @foreach ($youtubeRepositories as $repo)
                        {{-- Youtube Repositories --}}
                        @include('components.youtube-repo-item',['repo' => $repo])
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div wire:loading>
        <livewire:loader>
    </div>
    <div class="overlay" wire:loading></div>
</div>