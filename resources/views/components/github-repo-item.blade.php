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
            <a href="{{$repo['html_url']}}" target="_blank">View</a>
        </div>
    </div>
</div>