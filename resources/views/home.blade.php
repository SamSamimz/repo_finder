<div class="container">
    <div id="section" class="row d-flex align-items-center justify-content-center">
        <div class="text-center">
            @if ($searchOn)
            {{-- <input type="text" class="form-control"> --}}
            <div wire:transition class="col-8 mx-auto">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" wire:model='searchTerm' placeholder="Search for github repo...">
                    <button class="btn btn-primary" type="button" id="button-search" wire:click='submit()'>Search</button>
                </div>
            </div>
            @else
            <h1>Need a github resource? <br>
                Let's find out.</h1>
            <button class="btn btn-primary" wire:click="$set('searchOn',true)">Search Now!</button>
            @endif
        </div>
        <div class="bg-white rounded">
            <div wire:loading.remove wire:target='searchTerm'>
                @if ($this->repositories)
                @foreach ($repositories as $repo)
                {{-- Item --}}
                <div class="rounded p-2 mb-2 shadow">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <div>
                                <img src="{{$repo['owner']['avatar_url']}}" width="40" class="rounded">
                            </div>
                            <div class="">
                                <a href="{{$repo['html_url']}}" target="_blank">{{ $repo['name'] }}</a>
                                <p>{{ $repo['full_name'] }}</p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="btn btn-primary">View</a>
                            <a href="" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
        <div wire:loading>
            <livewire:loader>
        </div>
        <div class="overlay" wire:loading></div>
</div>