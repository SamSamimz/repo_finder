<div>
    <div class="col-6 mx-auto">
        <div class="mb-3">
            <label for="search">Search for anything..</label>
            <input type="search" wire:model='query' class="form-control">
        </div>
        <button class="btn btn-primary" wire:click='search()'>Search</button>
    </div>
</div>