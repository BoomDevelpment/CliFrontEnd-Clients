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
                            <div class="col-xl-12 col-md-12" style="text-align: center;font-size: 42px; font-family: fantasy; color: darkgray;" >
                                Balance
                            </div>
                            <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 18px; font-family: fantasy; color: lightgray;" >
                                <div id="salBCVWallet"> BCV {{ $divisa->dolar }} Bs</div>
                                <div id="salBCVDateWallet" style="text-align: center; font-size: 12px; font-family: fantasy; color: lightgray;"> {{ $divisa->created_at }}</div>
                            </div>
                            <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 72px; font-family: fantasy; color: green;" >
                                <div id="salUsdWallet"> $ {{ $wallet->balanceFloat }} </div>
                            </div>
                            <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 36px; font-family: fantasy; color: lightgray;" >
                                <div id="salBsWallet"> {{ $bs }} Bs </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-12" style="text-align: center; font-size: 36px; font-family: fantasy; color: lightgray;" >
                                <a href="https://google1.com" class="btn btn-primary btn-block p-t-15 p-b-15">
                                   Ir Facturas
                                </a>
                            </div>
                            <div class="col-xl-6 col-md-12" style="text-align: center; font-size: 36px; font-family: fantasy; color: lightgray;" >
                                <a href="{{ url('/client/wallet/register') }}" class="btn btn-primary btn-block p-t-15 p-b-15">
                                    Registrar Pagos
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="row m-b-30">
                                            <div class="col-lg-12 col-xl-12">
                                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#home3" role="tab">Zelle</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#profile3" role="tab">Paypal</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#messages3" role="tab">Transferecias Bancarias</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#settings3" role="tab">Pago Movil</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">
                                                    <div class="tab-pane active" id="home3" role="tabpanel">
                                                        <div class="card-block">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover table-borderless" style="margin-bottom: 0px; text-align: center;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="text-align: center;">#</th>
                                                                            <th style="text-align: center;">C&oacute;digo</th>
                                                                            <th style="text-align: center;">Fecha</th>
                                                                            <th style="text-align: center;">M&eacute;todo de Pago</th>
                                                                            <th style="text-align: center;">Total $</th>
                                                                            <th style="text-align: center;">Total Bs</th>
                                                                            <th style="text-align: center;">Status</th>
                                                                            <th style="text-align: center;">Registro</th>
                                                                            <th style="text-align: center;">Ver mas</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($zelle as $zl)
                                                                        <tr>
                                                                            <td>{{ $zl->id }}</td>
                                                                            <td>{{ $zl->reference }}</td>
                                                                            <td>{{ $zl->date_trans }}</td>
                                                                            <td>ZELLE</td>
                                                                            <td>{{ $zl->total }}</td>
                                                                            <td>{{ $zl->bs }}</td>
                                                                            @if($zl->status_id != 3)
                                                                                <td><label class="label label-success">COMPROBADO</label></td>
                                                                            @else
                                                                                <td><label class="label label-danger">PENDIENTE</label></td>
                                                                            @endif
                                                                            <td>{{ $zl->created_at }}</td>
                                                                            <td><a onClick="TDCEditModal({{ $zl->id }});" class="btn btn-info btn-outline-info btn-mini">Ver</a></td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                                <div class="text-right m-r-20">
                                                                    <a href="#!" class=" b-b-primary text-primary">Ver todas las facturas</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="profile3" role="tabpanel">
                                                        <div class="card-block">
                                                            Paypal
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="messages3" role="tabpanel">
                                                        <div class="card-block">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover table-borderless" style="margin-bottom: 0px; text-align: center;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="text-align: center;">#</th>
                                                                            <th style="text-align: center;">C&oacute;digo</th>
                                                                            <th style="text-align: center;">Fecha</th>
                                                                            <th style="text-align: center;">M&eacute;todo de Pago</th>
                                                                            <th style="text-align: center;">Total $</th>
                                                                            <th style="text-align: center;">Total Bs</th>
                                                                            <th style="text-align: center;">Status</th>
                                                                            <th style="text-align: center;">Registro</th>
                                                                            <th style="text-align: center;">Ver mas</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach($trans as $tb)
                                                                        <tr>
                                                                            <td>{{ $tb->id }}</td>
                                                                            <td>{{ $tb->reference }}</td>
                                                                            <td>{{ $tb->date_trans }}</td>
                                                                            <td>ZELLE</td>
                                                                            <td>{{ $tb->total }}</td>
                                                                            <td>{{ $tb->bs }}</td>
                                                                            @if($tb->status_id != 3)
                                                                                <td><label class="label label-success">COMPROBADO</label></td>
                                                                            @else
                                                                                <td><label class="label label-danger">PENDIENTE</label></td>
                                                                            @endif
                                                                            <td>{{ $tb->created_at }}</td>
                                                                            <td><a onClick="TDCEditModal({{ $tb->id }});" class="btn btn-info btn-outline-info btn-mini">Ver</a></td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                                <div class="text-right m-r-20">
                                                                    <a href="#!" class=" b-b-primary text-primary">Ver todas las facturas</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="settings3" role="tabpanel">
                                                        <div class="card-block">
                                                            Pago Movil
                                                        </div>
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
</div>

@endsection