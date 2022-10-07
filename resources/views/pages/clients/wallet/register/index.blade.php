@extends('layouts.default')

@section('css')

@endsection

@section('title', 'Boom Solutions - Wallet')

@section('content')

<br>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                    <div class="row m-b-30">
                                        <div class="col-lg-12 col-xl-12">
                                            <ul class="nav nav-tabs md-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#zelle" role="tab">Zelle</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#paypal" role="tab">Paypal</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#transference" role="tab">Transferecias Bancarias</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#movil" role="tab">Pago Movil</a>
                                                    <div class="slide"></div>
                                                </li>
                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content card-block">
                                                <div class="tab-pane " id="zelle" role="tabpanel">
                                                    @include('pages.clients.wallet.register.zelle')
                                                </div>
                                                <div class="tab-pane" id="paypal" role="tabpanel">
                                                    @include('pages.clients.wallet.register.paypal')
                                                </div>
                                                <div class="tab-pane" id="transference" role="tabpanel">
                                                    @include('pages.clients.wallet.register.transference')
                                                </div>
                                                <div class="tab-pane active" id="movil" role="tabpanel">
                                                    @include('pages.clients.wallet.register.movil')
                                                </div>
                                            </div>
                                            <!-- End Tab panes -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('pages.clients.wallet.register.modal')

@endsection

@section('js')

<script type="text/javascript">

$(function() 
{   
    RandomTp();

    $("#handleZelleUpload").submit(function(e) 
    {
        $('#errorZelleAdj').html('');
        if(document.getElementById('zl_r_ide').value == '')
        {
            var rand =   random();
            $('#zl_r_ide_f').val(rand);
            $('#zl_r_ide').val(rand);
        }
        e.preventDefault();
        var formData = new FormData(this);
        $('#file-input-error').text('');

        var request = $.ajax({
            type:   'POST',
            url:    "{{url('/zelle/files')}}",
            data:   formData,
            cache: false,
            contentType: false,
            processData: false,
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
            }
        });
        request.done(function(data){
            
            $('#zelleFiles').append('<div class="alert alert-info" style="margin-bottom: 5px; padding-botton: 6px; padding-top: 6px;"><a class="close" onclick="DeleteFile('+data.id+');"><i class="icofont icofont-trash"></i></a>'+data.file+'</div>');
        })
        request.fail(function(response)
        {
            $("#errorZelleAdj").html("<div class='alert alert-danger' style='margin-bottom: 0;'>Error cargando los archivos.</div>");
        })

        return false;
    });

    $("#handleTransferenceUpload").submit(function(e) 
    {
        $('#errorTransferenceAdj').html('');

        e.preventDefault();
        var formData = new FormData(this);
        $('#file-input-error').text('');

        var request = $.ajax({
            type:   'POST',
            url:    "{{url('/transference/files')}}",
            data:   formData,
            cache: false,
            contentType: false,
            processData: false,
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
            }
        });
        request.done(function(data){
            
            $('#TransferenceFiles').append('<div class="alert alert-info" style="margin-bottom: 5px; padding-botton: 6px; padding-top: 6px;"><a class="close" onclick="DeleteFile2('+data.id+', '+data.tp+');"><i class="icofont icofont-trash"></i></a>'+data.file+'</div>');
        })
        request.fail(function(response)
        {
            $("#errorTransferenceAdj").html("<div class='alert alert-danger' style='margin-bottom: 0;'>Error cargando los archivos.</div>");
        })

        return false;
    });

    $("#handleMovilUpload").submit(function(e) 
    {
        $('#errorMovilAdj').html('');

        e.preventDefault();
        var formData = new FormData(this);
        $('#file-input-error').text('');

        var request = $.ajax({
            type:   'POST',
            url:    "{{url('/movil/files')}}",
            data:   formData,
            cache: false,
            contentType: false,
            processData: false,
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
            }
        });
        request.done(function(data){
            
            $('#MovilFiles').append('<div class="alert alert-info" style="margin-bottom: 5px; padding-botton: 6px; padding-top: 6px;"><a class="close" onclick="DeleteFile2('+data.id+', '+data.tp+');"><i class="icofont icofont-trash"></i></a>'+data.file+'</div>');
        })
        request.fail(function(response)
        {
            $("#errorMovilAdj").html("<div class='alert alert-danger' style='margin-bottom: 0;'>Error cargando los archivos.</div>");
        })

        return false;
    });

});

function RandomTp()
{
    var rand    = Math.floor(Math.random() * 1000000000);
    $('#zl_r_ide_f').val(rand); $('#zl_r_ide').val(rand);
    var rand    = Math.floor(Math.random() * 1000000000);
    $('#p_ide_f').val(rand); $('#p_ide').val(rand);
    var rand    = Math.floor(Math.random() * 1000000000);
    $('#t_ide_f').val(rand); $('#t_ide').val(rand);
    var rand    = Math.floor(Math.random() * 1000000000);
    $('#m_ide_f').val(rand); $('#m_ide').val(rand);
}

function RegisterZelle()
{
    document.getElementById('errorZelle').innerText='';   

    var request = $.ajax({
        url:    "{{url('/zelle/register')}}",
        type:   'post',
        data:   $('#handleZelle').serialize(),
        headers:{
            'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 	'application/x-www-form-urlencoded'
        }
    });
    request.done(function(data)
    {
        document.getElementById('errorZelle').innerText='';
        document.getElementById('zelleFiles').innerText='';
        $('#handleZelle')[0].reset();
        $("#errorZelle").html("<div class='alert alert-success' style='margin-bottom: 0;'>" + data.message + "</div>");

        setTimeout( function() { window.location = data.url; }, 2500);        

    })
    request.fail(function(response)
    {
        document.getElementById('errorZelle').innerText='';
        $("#errorZelle").html("<div class='alert alert-danger' style='margin-bottom: 0;'>" + JSON.parse(response.responseText).message + "</div>");

    });
    return false;
}

function DeleteFile(id)
{
    var request = $.ajax({
        type:   'POST',
        url:    "{{url('/zelle/files/delete')}}",
        data:   {id: id},
        headers:{
            'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 	'application/x-www-form-urlencoded'
        }
    });
    request.done(function(data){
        
        $('#zelleFiles').html('');
    })
    request.fail(function(response)
    {
        $("#errorZelleAdj").html("<div class='alert alert-danger' style='margin-bottom: 0;'>Error error eliminando los archivos.</div>");
    })
}

function ConfirmTransference(ty)
{
    if(ty == 1) { amount =  $('#t_total').val(); alert='errorTransference'; }else{ amount =  $('#m_total').val(); alert='errorMovil';}
    if( (amount == '') || (amount < 1))
    {
        $('#'+alert+'').html("<div class='alert alert-danger' style='margin-bottom: 0;'>El valor minino para cualquier tranferencia es de 1 BS.</div>");
    }else{
        $('#'+alert+'').html("");
        $('#mError').html("");

        var request = $.ajax({
            type:   'POST',
            url:    "{{url('/transference/confirms')}}",
            data:   {amount: amount},
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 	'application/x-www-form-urlencoded'
            }
        });
        request.done(function(data)
        {
            $('#mType').val(ty);
            $('#mBCV').html('BCV '+data.dolar+' BS');
            $('#mUSD').html('$ '+data.usd+'');
            $('#mBS').html('BS '+data.bs+'');
            $('#ConfirmModal').modal('show');
        })
        request.fail(function(response)
        {
            $('#mType').val('');
            $('#mBCV').html('BCV 0.00 BS');
            $('#mUSD').html('$ 0.00');
            $('#mBS').html('BS 0.00');
            $("#mError").html("<div class='alert alert-danger' style='margin-bottom: 0'>Error cargando la informaci&oacute;n, intente nevamente.</div>");
            $('#ConfirmModal').modal('show');
        })
    }
}

function ProcessPayment()
{
    if($('#mType').val() == 1)
    {
        var url     =   "{{url('/transference/register')}}";
        var err     =   'errorTransference';
        var errF    =   'transferenceFiles';
        var info    =   $('#handleTransference').serialize();
        var ide     =   't_iden';
        var idef    =   't_iden_f';
        var hand    =   'handleTransference';
    }else{
        var url     =   "{{url('/movil/register')}}";
        var err     =   'errorMovil';
        var errF    =   'movilFiles';
        var info    =   $('#handleMovil').serialize();
        var ide     =  'm_ide';
        var idef    =  'm_ide_f';
        var hand    =   'handleMovil';
    }

    $('#'+err+'').val('');   
    
    var request = $.ajax({
        url:    url,
        type:   'post',
        data:   info,
        headers:{
            'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 	'application/x-www-form-urlencoded'
        }
    });
    request.done(function(data)
    {
        $('#'+err+'').val('');
        $('#'+errF+'').val('');
        $('#'+hand+'')[0].reset();
        $('#'+err+'').html("<div class='alert alert-success' style='margin-bottom: 0;'>" + data.message + "</div>");

        ClearModal();
        $('#ConfirmModal').modal('hide');

        // setTimeout( function() { window.location = data.url; }, 2500);        

    })
    request.fail(function(response)
    {
        ClearModal();
        $('#ConfirmModal').modal('hide');
        $('#'+err+'').val('');
        $('#'+err+'').html("<div class='alert alert-danger' style='margin-bottom: 0;'>" + JSON.parse(response.responseText).message + "</div>");

    });
    return false;
}

function DeleteFile2(id, tp)
{
    if(tp == 1)
    {
        var trans   =   'TransferenceFiles';
        var err     =   'errorTransferenceAdj';
        var url     =   "{{url('/transference/files/delete')}}"
    }else{
        var trans   =   'MovilFiles';
        var err     =   'errorMovilAdj';
        var url     =   "{{url('/movil/files/delete')}}"
    }
    var request = $.ajax({
        type:   'POST',
        url:    url,
        data:   {id: id},
        headers:{
            'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 	'application/x-www-form-urlencoded'
        }
    });
    request.done(function(data){
        
        $('#'+trans+'').html('');
    })
    request.fail(function(response)
    {
        $('#'+err+'').html("<div class='alert alert-danger' style='margin-bottom: 0;'>Error error eliminando los archivos.</div>");
    })
}

function ClearModal()
{
    $('#mType').val('');
    $('#mBCV').html('BCV 0.00 BS');
    $('#mUSD').html('$ 0.00');
    $('#mBS').html('BS 0.00')

}




</script>
@endsection
