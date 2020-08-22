<section class="main__page-about container py-5 my-5">
    <div class="row">
        <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
            <div class="about__title mb-5 text-uppercase">
                <h1>Sobre Nós</h1>
            </div>
            <div class=" about__info d-flex">
                <div class="col-md-12">
                    <div class="about__info-text row">
                        <div class="col-md-6">
                            <p class="lead">
                                @foreach($aboutPage as $about)
                                {{ $about->description }}
                                @endforeach
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="about__info-image">
                                @foreach($aboutPage as $about)                                
                                <img src="assets/images/{{ $about->photo }}"
                                    alt="Bruxo's Bar - Boteco Baiano em Minas Gerais" class="img-fluid">
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>