<section class="main__page-welcome text-center text-white d-flex flex-column justify-content-center">
	@foreach($flashyImageFound as $flashImage)
    <h1 class="display-1 text-shadow">{{ $flashImage->title }}</h1>
    <h3 class="display-4 text-shadow">{{ $flashImage->subtitle }}</h3>
    @endforeach
</section>