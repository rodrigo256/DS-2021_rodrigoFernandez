<div class="form-group">
    <div class="col-12">
        <div class="">
            Nombre del titular<br>
            <input class="form-control
            col-12" id="card_name" name="card_name" required autofocus />
        </div>
        <div class="">
                Número de la tarjeta<br>
            <input class="col-12 form-control" id="card_number" name="card_number" required pattern="[0-9]{12,19}" />
        </div>
        <div class="row">
            
            <div class="col-6">
                Vencimiento<br>
                <input class="col-12 form-control" id="card_expiry" name="card_expiry" placeholder="mm/yyyy" required
                    pattern="[0-1][0-9]/20[1-2][0-9]" />
            </div>
            <div class="col-6">
                CVC<br>
                <input id="card_cvc" class="col-12 form-control" name="card_cvc" required pattern="[0-9]{3,4}" />
            </div>
        </div>
    </div>
</div>
<div class="form-group">
<div class="col-md-12">
    <button type="submit" class="btn btn-primary" style="width: 100%">
        Guardar
    </button>
</div>
</div>

 {{-- <form id="form" class="col-12">
                @csrf
                    
            </form> --}}