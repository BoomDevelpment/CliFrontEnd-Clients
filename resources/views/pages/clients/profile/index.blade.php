@extends('layouts.default')

@section('title', 'Boom Solutions - Wallet')

@section('content')

<div class="pcoded-wrapper">
	<div class="pcoded-content">
		<div class="pcoded-inner-content">
			<div class="main-body">
				
				<div class="page-wrapper">
					<div class="page-body m-t-50">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cover-profile">
                                    <div class="profile-bg-img">
                                        <img class="profile-bg-img img-fluid" src="{{ asset('src/assets/images/ve.png') }}" alt="bg-img">
                                        <div class="card-block user-info">
                                            <div class="col-md-12">
                                                <div class="media-left">
                                                    <a href="#" class="profile-image">
                                                        <img class="user-img img-radius" src="{{ asset('src/assets/images/avatar-4.jpg') }}" alt="user-img">
                                                    </a>
                                                </div>
                                                <div class="media-body row">
                                                    <div class="col-lg-12">
                                                        <div class="user-title">
                                                            <h2>{{ Auth::User()->name }}</h2>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right cover-btn">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tab-header card">
                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Informaci&oacute;n</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#cards" role="tab">Tarjetas de Cr&eacute;dito</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#accounts" role="tab">Cuentas de Banco</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        @include('pages.clients.profile.information')
                                    </div>
                                    <div class="tab-pane" id="cards" role="tabpanel">
                                        @include('pages.clients.profile.tdc')
                                    </div>
                                    <div class="tab-pane" id="accounts" role="tabpanel">
                                        @include('pages.clients.profile.ab')

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

@include('pages.clients.profile.modal')

@endsection

@section('js')
<script type="text/javascript" src="{{ asset('src/assets/pages/user-profile.js') }}"></script>   

<script>

    $(document).on("submit", "#handleCC", function() 
    {
        $("#err-tdc").html('');

        document.getElementById('err-tdc').innerText='';
        
        var e = this;
        var request = $.ajax({
            url:    $(this).attr('action'),
            type:   'post',
            data:   $(this).serialize(),
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 	'application/x-www-form-urlencoded'
            }
        });
        request.done(function(data){
            document.getElementById('err-tdc').innerText='';
            window.location = data.url
        })
        request.fail(function(response)
        {
            document.getElementById('err-tdc').innerText='';
            $("#err-tdc").html("<div class='alert alert-danger' style='margin-bottom: 0;'>" + JSON.parse(response.responseText).message + "</div>");

        });
        return false;
    });

    $(document).on("submit", "#handleAB", function() 
    {
        var e = this;
        document.getElementById('err-AB').innerText='';
        var request = $.ajax({
            url:    $(this).attr('action'),
            type:   'post',
            data:   $(this).serialize(),
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 	'application/x-www-form-urlencoded'
            }
        });
        request.done(function(data){
            document.getElementById('err-AB').innerText='';
            window.location = data.url
        })
        request.fail(function(response)
        {
            document.getElementById('err-AB').innerText='';
            $("#err-AB").html("<div class='alert alert-danger' style='margin-bottom: 0;'>" + JSON.parse(response.responseText).message + "</div>");

        });
        return false;
    });

    $(document).on("submit", "#handleECC", function() 
    {
        document.getElementById('err-eTDC').innerText='';
        var e = this;
        var request = $.ajax({
            url:    $(this).attr('action'),
            type:   'post',
            data:   $(this).serialize(),
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 	'application/x-www-form-urlencoded'
            }
        });
        request.done(function(data){
            document.getElementById('err-eTDC').innerText='';
            window.location = data.url
        })
        request.fail(function(response)
        {
            document.getElementById('err-eTDC').innerText='';
            $("#err-eTDC").html("<div class='alert alert-danger' style='margin-bottom: 0;'>" + JSON.parse(response.responseText).message + "</div>");

        });
        return false;
    });

    $(document).on("submit", "#handleMAB", function() 
    {
        document.getElementById('err-eAB').innerText='';
        var e = this;
        var request = $.ajax({
            url:    $(this).attr('action'),
            type:   'post',
            data:   $(this).serialize(),
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 	'application/x-www-form-urlencoded'
            }
        });
        request.done(function(data){
            document.getElementById('err-eAB').innerText='';
            window.location = data.url
        })
        request.fail(function(response)
        {
            document.getElementById('err-eAB').innerText='';
            $("#err-eAB").html("<div class='alert alert-danger' style='margin-bottom: 0;'>" + JSON.parse(response.responseText).message + "</div>");

        });
        return false;
    });

    $(document).on("submit", "#handleINFO", function() 
    {
        document.getElementById('err-INFO').innerText='';
        var e = this;
        var request = $.ajax({
            url:    $(this).attr('action'),
            type:   'post',
            data:   $(this).serialize(),
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 	'application/x-www-form-urlencoded'
            }
        });
        request.done(function(data){
            document.getElementById('err-INFO').innerText='';
            window.location = data.url
        })
        request.fail(function(response)
        {
            document.getElementById('err-INFO').innerText='';
            $("#err-INFO").html("<div class='alert alert-danger' style='margin-bottom: 0;'>" + JSON.parse(response.responseText).message + "</div>");

        });
        return false;
    });

    function TDCEditModal(id)
    {
        document.getElementById('err-tdc').innerText='';
        document.getElementById('err-eTDC').innerText='';
        document.getElementById('err-lTDC').innerText='';

        var e = this;
        var request = $.ajax({
            url:    '{{url('creditcard/search')}}',
            type:   'get',
            data:   {id:id},
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 	'application/x-www-form-urlencoded'
            }
        });
        request.done(function(data){
            $('#handleECC')[0].reset();
            document.getElementById('mId').value = data.card.id;
            document.getElementById('mTitle').value = data.card.name;
            document.getElementById('mNumber').value = data.card.card;
            document.getElementById('mCvv').value = data.card.cvv;
            $('#mMonth option[value='+data.card.month+']').prop('selected', true);
            $('#mYear option[value='+data.card.year+']').prop('selected', true);
            $('#mEntity option[value='+data.card.entity+']').prop('selected', true);
            $('#mType option[value='+data.card.type+']').prop('selected', true);
            $('#mStatus option[value='+data.card.status+']').prop('selected', true);
            $('#TdcEditModal').modal('show');
        })
        request.fail(function(response)
        {
            document.getElementById('err-lTDC').innerText='';
            $("#err-lTDC").html("<div class='alert alert-danger' style='margin-bottom: 0;'>" + JSON.parse(response.responseText).message + "</div>");

        });
        return false;
    }

    function ABEditModal(id)
    {
        document.getElementById('err-AB').innerText='';
        document.getElementById('err-lAB').innerText='';
        document.getElementById('err-eAB').innerText='';
        var e = this;
        var request = $.ajax({
            url:    '{{url('accountbank/search')}}',
            type:   'get',
            data:   {id:id},
            headers:{
                'X-CSRF-TOKEN': 	$('meta[name="csrf-token"]').attr('content'),
                'Content-Type': 	'application/x-www-form-urlencoded'
            }
        });
        request.done(function(data){
            $('#handleMAB')[0].reset();
            document.getElementById('abId').value = data.card.id;
            document.getElementById('abTitle').value = data.card.name;
            document.getElementById('abNumber').value = data.card.account;
            $('#abEntity option[value='+data.card.entity+']').prop('selected', true);
            $('#abType option[value='+data.card.type+']').prop('selected', true);
            $('#abBank option[value='+data.card.bank+']').prop('selected', true);
            $('#abStatus option[value='+data.card.status+']').prop('selected', true);
            $('#ABEditModal').modal('show');
        })
        request.fail(function(response)
        {
            document.getElementById('err-lAB').innerText='';
            $("#err-lAB").html("<div class='alert alert-danger' style='margin-bottom: 0;'>" + JSON.parse(response.responseText).message + "</div>");

        });
        return false;
    }
</script>
@endsection