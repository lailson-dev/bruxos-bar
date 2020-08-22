<section class="main__page carousel slide container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Cardápio</h1>
            </div>
        </div>
    </div>
    <div class="container pt-2 carousel-inner">
        <div class="row row-equal carousel-item active m-t-0">
            @foreach($products as $product)
            <div class="col-md-4 mt-3">
                <a href="#">
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid" src="assets/images/cardapio/{{ $product->photo }}" alt="Carousel 1">
                        </div>
                        <div class="card-block p-t-2">
                            <h6 class="text-center">{{ $product->subtitle }}</h6>
                            <h3 class="text-center">
                                <a href="#">{{ $product->title }}</a>
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>