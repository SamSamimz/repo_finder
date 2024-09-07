<div class="d-flex align-items-center justify-content-between flex-wrap">
    <div class="card" style="width: 12rem;">
        <img src="{{ $repo['thumbnail'] }}" class="card-img-top" alt="{{ $repo['thumbnail'] }}">
        <div class="card-body">
          <h5 class="card-title">{{ Str::limit($repo['title'],12) }}</h5>
          <p class="card-text">{{ Str::limit($repo['description'],22) }}</p>
          <a href="{{ $repo['url'] }}" class="btn btn-primary">Watch</a>
        </div>
      </div>
    </div>
</div>
</div>