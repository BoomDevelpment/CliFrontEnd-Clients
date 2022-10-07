<div class="modal fade" id="ConfirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirmaci&oacute;n de Pagos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background: aliceblue;">
                <div class="row">
                    <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 18px; font-family: fantasy;" >
                        <h5>Desea procesar el siguiente pago</h5>
                    </div>
                    <input type="text" id="mType" name="mType" hidden readonly>
                    <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 18px; font-family: fantasy; color: lightgray;" >
                        <div id="mBCV"></div>
                    </div>
                    <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 72px; font-family: fantasy; color: green;" >
                        <div id="mUSD"></div>
                    </div>
                    <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 36px; font-family: fantasy; color: lightgray;" >
                        <div id="mBS"></div>
                    </div>
                    <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 36px; font-family: fantasy; color: lightgray;" >
                        <div id="mError"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary btn-block m-b-0" onclick="ProcessPayment();">Registrar Pago</a>
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>