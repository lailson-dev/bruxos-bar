@php
if (isset($_SESSION['flash'])) {
    var_dump($_SESSION['flash']);
}
@endphp

<section class="booking container py-5 my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="booking__title">
                    <h1>Faça sua reserva</h1>
                </div>
            </div>            
            <div class="col-md-12">
                <div class="booking__form">
                    <form action="/booking_store" method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="input-name" id="input-name"
                                        placeholder="Nome completo">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="input-email" id="input-email"
                                        placeholder="Seu email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="input-message" rows="3" 
                                        placeholder="Mensagem"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" name="input-phone" id="input-phone"
                                        placeholder="Telefone" pattern="[0-9]+$">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="date" name="input-date" id="input-date"
                                        placeholder="Data">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="number" value="1" name="input-quantity"
                                        id="input-quantity" placeholder="Quantas pessoas">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-block btn-outline-primary"
                                        type="submit">Reservar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>