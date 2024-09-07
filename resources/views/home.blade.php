<div class="container">
    <div id="section" class="row d-flex align-items-center justify-content-center">
        <div class="text-center">
            @if ($searchOn)
            <div wire:transition class="col-8 mx-auto">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" wire:model='searchTerm'
                        placeholder="Search for github repo...">
                    @if (empty($searchTerm))
                    <button class="btn btn-primary" type="button" id="button-search"
                        wire:click='submit()'>Search</button>
                    @endif
                </div>
            </div>
            @else
            <h1>Need a resource? <br>
                Let's find out.</h1>
            <button class="btn btn-primary" wire:click="$set('searchOn',true)">Search Now!</button>
            @endif
        </div>
        <div class="bg-white rounded">
            <div class="row">
                <div class="col-12 col-md-6">
                    @if ($this->githubRepositories)
                    @foreach ($githubRepositories as $repo)
                    @include('components.github-repo-item',['repo' => $repo])
                    @endforeach
                    @endif
                </div>
                <div class="col-12 col-md-6">
                    @if ($this->youtubeRepositories)
                    <div class="row">
                        @foreach ($youtubeRepositories as $repo)
                        <div class="col-12 col-sm-6 mb-3">
                            @include('components.youtube-repo-item', ['repo' => $repo])
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
    <div wire:loading>
        <livewire:loader>
    </div>
    <div class="overlay" wire:loading></div>
</div>