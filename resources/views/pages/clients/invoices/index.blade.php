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
                            <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 72px; font-family: fantasy; color: green;" >
                                <div id="salUsdWallet"> $ 5.99 </div>
                            </div>
                            <div class="col-xl-12 col-md-12" style="text-align: center; font-size: 36px; font-family: fantasy; color: lightgray;" >
                                <div id="salBsWallet"> 33.89 Bs </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-12" style="text-align: center; font-size: 36px; font-family: fantasy; color: lightgray;" >
                                <a href="https://google1.com" class="btn btn-primary btn-block p-t-15 p-b-15">
                                   Ir Facturas
                                </a>
                            </div>
                            <div class="col-xl-6 col-md-12" style="text-align: center; font-size: 36px; font-family: fantasy; color: lightgray;" >
                                <a href="{{ url('/clients/wallet/register') }}" class="btn btn-primary btn-block p-t-15 p-b-15">
                                    Registrar Pagos
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Listado de Facturacion</h5>
                                    </div>
                                    <div class="card-block" style="height: 308px;">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless" style="margin-bottom: 0px;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>C&oacute;digo</th>
                                                        <th>M&eacute;todo de Pago</th>
                                                        <th>Total $</th>
                                                        <th>Total Bs</th>
                                                        <th>Status</th>
                                                        <th>Fecha</th>
                                                        <th>Ver mas</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>00087115</td>
                                                        <td>PAGO MOVIL</td>
                                                        <td>$ 5.99</td>
                                                        <td>Bs 33.89</td>
                                                        <td><label class="label label-success">Comprobado</label></td>
                                                        <td>14/07/2022</td>
                                                        <td><a href="#"> Ver mas</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>00087115</td>
                                                        <td>PAYPAL</td>
                                                        <td>$ 1.00</td>
                                                        <td>Bs 5.65</td>
                                                        <td><label class="label label-danger">Pendiente</label></td>
                                                        <td>14/07/2022</td>
                                                        <td><a href="#"> Ver mas</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="text-right m-r-20">
                                                <a href="#!" class=" b-b-primary text-primary">Ver todas las facturas</a>
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