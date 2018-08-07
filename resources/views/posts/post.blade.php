<div class="blog-post">
	<h2 class="blog-post-title">{{ $post->title }}</h2>
	<p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">Jacob</a></p>

	{{ $post->body }}
</div><!-- /.blog-post -->
