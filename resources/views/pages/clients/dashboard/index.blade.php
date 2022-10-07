@extends('layouts.default')

@section('title', 'Boom Solutions - Test')

@section('content')

<div class="pcoded-wrapper">
	<div class="pcoded-content">
		<div class="pcoded-inner-content">
			<div class="main-body">
				
				<div class="page-wrapper">
					<div class="page-body m-t-50">
						<div class="row">
							<!-- task, page, download counter  start -->
							<div class="col-xl-3 col-md-6">
								<div class="card bg-c-pink update-card">
									<div class="card-block">
										<div class="row align-items-end">
											<div class="col-8">
												<h4 class="text-white">$ 19.99</h4>
												<h6 class="text-white m-b-0">Total de Facturas</h6>
											</div>
											<div class="col-4 text-right">
												<i class="ti-clipboard f-50"></i>
											</div>
										</div>
									</div>
									<div class="card-footer">
                                        <a href="https://google1.com" class="button">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">Ver mas</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <i class="feather icon-trending-up text-white f-16"></i>
                                                </div>
                                            </div>
                                        </a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card bg-c-green update-card">
									<div class="card-block">
										<div class="row align-items-end">
											<div class="col-8">
												<h4 class="text-white">3</h4>
												<h6 class="text-white m-b-0">Notificaciones</h6>
											</div>
											<div class="col-4 text-right">
												<i class="ti-email f-50"></i>
											</div>
										</div>
									</div>
									<div class="card-footer">
                                        <a href="https://google2.com" class="button">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">Ver mas</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <i class="feather icon-trending-up text-white f-16"></i>
                                                </div>
                                            </div>
                                        </a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card bg-c-yellow update-card">
									<div class="card-block">
										<div class="row align-items-end">
											<div class="col-8">
												<h4 class="text-white">1</h4>
												<h6 class="text-white m-b-0">Ticket sin leer</h6>
											</div>
											<div class="col-4 text-right">
												<i class="feather icon-file-text f-50"></i>
											</div>
										</div>
									</div>
									<div class="card-footer">
                                        <a href="https://google3.com" class="button">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">Ver mas</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <i class="feather icon-trending-up text-white f-16"></i>
                                                </div>
                                            </div>
                                        </a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card bg-c-lite-green update-card">
									<div class="card-block">
										<div class="row align-items-end">
											<div class="col-8">
												<h4 class="text-white">$ 5.99</h4>
												<h6 class="text-white m-b-0">Billetera Digital</h6>
											</div>
											<div class="col-4 text-right">
												<i class="ti-wallet f-50"></i>
											</div>
										</div>
									</div>
									<div class="card-footer">
                                        <a href="https://google4.com" class="button">
                                            <div class="row align-items-center">
                                                <div class="col-9">
                                                    <p class="text-white m-b-0">Ver mas</p>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <i class="feather icon-trending-up text-white f-16"></i>
                                                </div>
                                            </div>
                                        </a>
									</div>
								</div>
							</div>
							<!-- task, page, download counter  end -->

							<!--  sale analytics start -->
							<div class="col-xl-8 col-md-12">
								<div class="card">
									<div class="card-header">
										<h5>Listado de Facturacion</h5>
									</div>
									<div class="card-block" style="height: 308px;">
										<div class="table-responsive">
											<table class="table table-hover table-borderless" style="margin-bottom: 0px;">
												<thead>
													<tr>
														<th>Status</th>
														<th># Factura</th>
														<th>Emitido</th>
														<th>Total</th>
														<th>Pagado</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><label class="label label-danger">NO PAGADO</label></td>
														<td>00087115</td>
														<td>14/07/2022</td>
														<td>$ 44.80</td>
														<td>00/00/0000</td>
													</tr>
													<tr>
														<td><label class="label label-success">PAGADO</label></td>
														<td>00082030</td>
														<td>18/06/2022</td>
														<td>$ 25.00</td>
														<td>18/06/2022</td>
													</tr>
													<tr>
														<td><label class="label label-success">PAGADO</label></td>
														<td>00082018</td>
														<td>18/06/2022</td>
														<td>$ 34.80</td>
														<td>18/06/2022</td>
													</tr>
													<tr>
														<td><label class="label label-primary">ANULADO</label></td>
														<td>00072337</td>
														<td>19/04/2022</td>
														<td>$ 34.80</td>
														<td>00/00/0000</td>
													</tr>
													<tr>
														<td><label class="label label-success">PAGADO</label></td>
														<td>00054614</td>
														<td>26/12/2021</td>
														<td>$ 0.00</td>
														<td>26/12/2021</td>
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
							<div class="col-xl-4 col-md-12">
								<div class="card user-card2">
									<div class="card-block text-center">
										<h6 class="m-b-15">Status del Servicio</h6>
                                        <div class="card bg-c-yellow text-white widget-visitor-card">
                                            <div class="card-block-small text-center">
                                                <h3>Activo</h3>
                                                <i class="feather icon-user"></i>
                                            </div>
                                        </div>
										<div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
											<div class="col m-t-15 b-r-default">
												<h6 class="text-muted">Fecha Facturaci&oacute;n</h6>
												<h6>20/07/2022</h6>
											</div>
											<div class="col m-t-15">
												<h6 class="text-muted">Fecha de Corte</h6>
												<h6>14/08/2022</h6>
											</div>
										</div>
										<div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
											<div class="col m-t-15 b-r-default">
												<h6 class="text-muted">Fecha Pago</h6>
												<h6>01/08/2022</h6>
											</div>
											<div class="col m-t-15">
												<h6 class="text-muted">Fecha Pago Max.</h6>
												<h6>05/08/2022</h6>
											</div>
										</div>
									</div>
									
                                    <a href="https://google1.com" class="btn btn-warning btn-block p-t-15 p-b-15">
                                        Ver mas informaci&oacute;n
                                    </a>
								</div>
							</div>
							<!--  sale analytics end -->

							<div class="col-xl-8 col-md-12">
								<div class="card user-card-full">
									<div class="row m-l-0 m-r-0">
										<div class="col-sm-4 bg-c-lite-green user-profile">
											<div class="card-block text-center text-white">
												<div class="m-b-25">
													<img src="{{ asset('src/assets/images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
												</div>
												<h6 class="f-w-600">Luis Campos</h6>

												<ul class="social-link list-unstyled m-t-40 m-b-10">
													<li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
													<li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-sm-8">
											<div class="card-block">
												<h6 class="m-b-20 p-b-5 b-b-default f-w-600">Datos del cliente</h6>
												<div class="row">
													<div class="col-sm-12">
														<p class="m-b-10 f-w-600">Direcci&oacute;n</p>
														<h6 class="text-muted f-w-400">Direccion de Prueba</h6>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<p class="m-b-10 f-w-600">Tel&eacute;fono Fijo</p>
														<h6 class="text-muted f-w-400">0414-123456789</h6>
													</div>
													<div class="col-sm-6">
														<p class="m-b-10 f-w-600">Tel&eacute;fono Movil</p>
														<h6 class="text-muted f-w-400">0414-987654321</h6>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<p class="m-b-10 f-w-600">Email Principal</p>
														<h6 class="text-muted f-w-400">luis.924@boomsolutions.com</h6>
													</div>
													<div class="col-sm-6">
														<p class="m-b-10 f-w-600">Email Secundario</p>
														<h6 class="text-muted f-w-400">luis.924@boomsolutions.com</h6>
													</div>
												</div>
											</div>
											<a href="https://google1.com" class="btn btn-warning btn-block p-t-15 p-b-15">
												Editar Perfil
											</a>
											<br>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4 col-md-12">
								<div class="card-sub" style=" text-align: center; background: white;">
									<img class="card-img-top img-fluid m-t-10" src="{{ asset('src/assets/images/manitos-boom.png') }}" alt="Card image cap" style="width: 230px;">
									<div class="card-block">
										<a href="https://google1.com" class="btn btn-warning btn-block p-t-15">Realizar Donativo</a>
									</div>
								</div>

								{{-- <div class="card user-card2">
									<div class="col-sm-4 bg-c-lite-green user-profile">
										<div class="card-block text-center text-white">
											<div class="m-b-25">
												<img src="{{ asset('src/assets/images/manitos-boom.png') }}" class="img-radius" alt="User-Profile-Image" style="width: 10px;">
											</div>
											<h6 class="f-w-600">Luis Campos</h6>
										</div>
									</div> --}}

									{{-- <div class="card text-white widget-visitor-card">
										<img src="{{ asset('src/assets/images/manitos-boom.png') }}" class="img-radius p-b-15" alt="manitos boom">
										<a href="https://google1.com" class="btn btn-warning btn-block p-t-15">Realizar Donativo</a>
									</div>								 --}}
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