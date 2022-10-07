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
                                    <div class="card-header">
                                        <h5>Registro de Pagos</h5>
                                    </div>
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
{{-- Zelle --}}
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h1 style="text-align: center; color:lightblue; font-family: fantasy;">Registro de Transferencia Zelle</h1>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row m-b-20">
                                                                    <div class="col-sm-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Asunto</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="zl_r_asu" id="zl_r_asu" placeholder="T&iacute;tulo de registro">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Titular</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="zl_r_titular" id="zl_r_titular" placeholder="Titular de la Transferencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Total</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="number" class="form-control" name="zl_r_amount" id="zl_r_amount" placeholder="Total del monto transferido">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Fecha</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="zl_r_date" id="zl_r_date" placeholder="Fecha de la transferencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Nº Referencia</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="zl_r_reference" id="zl_r_reference" placeholder="N&uacute;mero de referencia de transferencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Adjunto</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="file" name="zl_r_file" id="zl_r_file" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <h4 class="sub-title">Mensaje</h4>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="input-group">
                                                                                    <textarea rows="5" cols="5" name="zl_r_message" id="zl_r_message" class="form-control" placeholder="Coloque aqu&iacute; un mensaje o informaci&oacute;n que desee agregar."></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button type="submit" name="zl_r_btn" id="zl_r_btn" class="btn btn-primary btn-block m-b-0">Registrar Pago</button>
                                                            </div>
                                                        </div>
{{-- Zelle --}}
                                                    </div>
                                                    <div class="tab-pane" id="profile3" role="tabpanel">
{{-- PayPal --}}
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h1 style="text-align: center; color:lightblue; font-family: fantasy;">Registro de Transferencia PayPal</h1>
                                                        </div>
                                                        <form method="POST" id="payment-form" action="/payment/add-funds/paypal">
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Asunto</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="pp_r_asu" id="pp_r_asu" placeholder="T&iacute;tulo de registro">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Titular</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="pp_r_titular" id="pp_r_titular" placeholder="Titular de la Transferencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Total</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="number" class="form-control" name="amount" id="amount" placeholder="Total del monto transferido">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Fecha</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="pp_r_date" id="pp_r_date" placeholder="Fecha de la transferencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Nº Referencia</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="pp_r_reference" id="pp_r_reference" placeholder="N&uacute;mero de referencia de transferencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Correo</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="number" class="form-control" name="pp_r_amount" id="pp_r_amount" placeholder="Correo electr&oacute;nico de transferencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row m-b-20">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-1 col-form-label">Adjunto</label>
                                                                            <div class="col-sm-11">
                                                                                <input type="file" name="pp_r_file" id="pp_r_file" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <h4 class="sub-title">Mensaje</h4>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="input-group">
                                                                                    <textarea rows="5" cols="5" name="pp_r_message" id="pp_r_message" class="form-control" placeholder="Coloque aqu&iacute; un mensaje o informaci&oacute;n que desee agregar."></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button type="submit" name="pp_r_btn" id="pp_r_btn" class="btn btn-primary btn-block m-b-0">Registrar Pago</button>
                                                            </div>
                                                        </form>
                                                    </div>
{{-- PayPal --}}
                                                    </div>
                                                    <div class="tab-pane" id="messages3" role="tabpanel">
{{-- Transferencia Bancaria --}}
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h1 style="text-align: center; color:lightblue; font-family: fantasy;">Registro de Transferencia Bancarias</h1>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Asunto</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="tb_r_asu" id="tb_r_asu" placeholder="T&iacute;tulo de Transferencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Titular</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="tb_r_titular" id="tb_r_titular" placeholder="Nombre del titular de la cuenta">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Cuenta</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="number" class="form-control" name="tb_r_amount" id="tb_r_amount" placeholder="Introduzca los n&uacute;meros de cuenta">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Total</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="number" class="form-control" name="tb_r_amount" id="tb_r_amount" placeholder="Total del monto transferido">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-lg-6">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Fecha</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="tb_r_date" id="tb_r_date" placeholder="Fecha de la transferencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">C&eacute;dula o Rif</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="tb_r_reference" id="tb_r_reference" placeholder="Introduzca la C&eacute;dula o Rif">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Banco</label>
                                                                                    <div class="col-sm-9">
                                                                                        <select name="tb_r_banks" id="tb_r_banks" class="form-control">
                                                                                            <option value="0174">Banplus</option>
                                                                                            <option value="0001">Banco Central de Venezuela</option>
                                                                                            <option value="0102">Banco de Venezuela</option>
                                                                                            <option value="0104">Venezolano de Crédito</option>
                                                                                            <option value="0105">Banco Mercantil</option>
                                                                                            <option value="0108">Banco Provincial</option>
                                                                                            <option value="0114">Bancaribe</option>
                                                                                            <option value="0115">Banco Exterior</option>
                                                                                            <option value="0116">Banco Occidental de Descuento</option>
                                                                                            <option value="0128">Banco Caroní</option>
                                                                                            <option value="0134">Banesco</option>
                                                                                            <option value="0137">Banco Sofitasa</option>
                                                                                            <option value="0138">Banco Plaza</option>
                                                                                            <option value="0146">Banco de la Gente Emprendedora</option>
                                                                                            <option value="0151">BFC Banco Fondo Com&uacute;n</option>
                                                                                            <option value="0156">100% Banco</option>
                                                                                            <option value="0157">DelSur Banco Universal</option>
                                                                                            <option value="0163">Banco del Tesoro</option>
                                                                                            <option value="0166">Banco Agrícola de Venezuela</option>
                                                                                            <option value="0168">Bancrecer</option>
                                                                                            <option value="0169">Mi Banco</option>
                                                                                            <option value="0171">Banco Activo</option>
                                                                                            <option value="0172">Bancamica</option>
                                                                                            <option value="0173">Banco Internacional de Desarrollo,</option>
                                                                                            <option value="0175">Banco Bicentenario del Pueblo de la Clase Obrera, Mujer y Comunas</option>
                                                                                            <option value="0176">Novo Banco</option>
                                                                                            <option value="0177">Banco de la Fuerza Armada Nacional Bolivariana</option>
                                                                                            <option value="0190">Citibank</option>
                                                                                            <option value="0191">Banco Nacional de Crédito</option>
                                                                                            <option value="0601">Instituto Municipal de Cr&eacute;dito Popular</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-3 col-form-label">Referencia</label>
                                                                                    <div class="col-sm-9">
                                                                                        <input type="text" class="form-control" name="tb_r_reference" id="tb_r_reference" placeholder="Introduzca el n&uacute;mero de referencia">
                                                                                        <span class="messages"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row  m-b-20">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-1 col-form-label">Adjunto</label>
                                                                            <div class="col-sm-11">
                                                                                <input type="file" name="tb_r_file" id="tb_r_file" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <h4 class="sub-title">Mensaje</h4>
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="input-group">
                                                                                    <textarea rows="5" cols="5" name="tb_r_message" id="tb_r_message" class="form-control" placeholder="Coloque aqu&iacute; un mensaje o informaci&oacute;n que desee agregar."></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button type="submit" name="tb_r_btn" id="tb_r_btn" class="btn btn-primary btn-block m-b-0">Registrar Pago</button>
                                                            </div>
                                                        </div>
{{-- Transferencia Bancaria --}}
                                                    </div>
                                                    <div class="tab-pane" id="settings3" role="tabpanel">

{{-- Pago Movil --}}
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h1 style="text-align: center; color:lightblue; font-family: fantasy;">Registro de Pago Movil</h1>
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Asunto</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" class="form-control" name="pm_r_asu" id="pm_r_asu" placeholder="T&iacute;tulo de Transferencia">
                                                                                    <span class="messages"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Titular</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" class="form-control" name="pm_r_titular" id="pm_r_titular" placeholder="Nombre del titular de la cuenta">
                                                                                    <span class="messages"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Nº Telef&oacute;nico</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="number" class="form-control" name="pm_r_amount" id="pm_r_amount" placeholder="Numero telef&oacute;nico de pago movil">
                                                                                    <span class="messages"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Total</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="number" class="form-control" name="pm_r_amount" id="pm_r_amount" placeholder="Total del monto transferido">
                                                                                    <span class="messages"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-lg-6">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Fecha</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" class="form-control" name="pm_r_date" id="pm_r_date" placeholder="Fecha de la transferencia">
                                                                                    <span class="messages"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">C&eacute;dula o Rif</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" class="form-control" name="pm_r_reference" id="pm_r_reference" placeholder="Introduzca la C&eacute;dula o Rif">
                                                                                    <span class="messages"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Banco</label>
                                                                                <div class="col-sm-9">
                                                                                    <select name="pm_r_banks" id="pm_r_banks" class="form-control">
                                                                                        <option value="0174">Banplus</option>
                                                                                        <option value="0001">Banco Central de Venezuela</option>
                                                                                        <option value="0102">Banco de Venezuela</option>
                                                                                        <option value="0104">Venezolano de Crédito</option>
                                                                                        <option value="0105">Banco Mercantil</option>
                                                                                        <option value="0108">Banco Provincial</option>
                                                                                        <option value="0114">Bancaribe</option>
                                                                                        <option value="0115">Banco Exterior</option>
                                                                                        <option value="0116">Banco Occidental de Descuento</option>
                                                                                        <option value="0128">Banco Caroní</option>
                                                                                        <option value="0134">Banesco</option>
                                                                                        <option value="0137">Banco Sofitasa</option>
                                                                                        <option value="0138">Banco Plaza</option>
                                                                                        <option value="0146">Banco de la Gente Emprendedora</option>
                                                                                        <option value="0151">BFC Banco Fondo Com&uacute;n</option>
                                                                                        <option value="0156">100% Banco</option>
                                                                                        <option value="0157">DelSur Banco Universal</option>
                                                                                        <option value="0163">Banco del Tesoro</option>
                                                                                        <option value="0166">Banco Agrícola de Venezuela</option>
                                                                                        <option value="0168">Bancrecer</option>
                                                                                        <option value="0169">Mi Banco</option>
                                                                                        <option value="0171">Banco Activo</option>
                                                                                        <option value="0172">Bancamica</option>
                                                                                        <option value="0173">Banco Internacional de Desarrollo,</option>
                                                                                        <option value="0175">Banco Bicentenario del Pueblo de la Clase Obrera, Mujer y Comunas</option>
                                                                                        <option value="0176">Novo Banco</option>
                                                                                        <option value="0177">Banco de la Fuerza Armada Nacional Bolivariana</option>
                                                                                        <option value="0190">Citibank</option>
                                                                                        <option value="0191">Banco Nacional de Crédito</option>
                                                                                        <option value="0601">Instituto Municipal de Cr&eacute;dito Popular</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-3 col-form-label">Referencia</label>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" class="form-control" name="pm_r_reference" id="pm_r_reference" placeholder="Introduzca el n&uacute;mero de referencia">
                                                                                    <span class="messages"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row  m-b-20">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-1 col-form-label">Adjunto</label>
                                                                        <div class="col-sm-11">
                                                                            <input type="file" name="pm_r_file" id="pm_r_file" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <h4 class="sub-title">Mensaje</h4>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="input-group">
                                                                                <textarea rows="5" cols="5" name="pm_r_message" id="pm_r_message" class="form-control" placeholder="Coloque aqu&iacute; un mensaje o informaci&oacute;n que desee agregar."></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <button type="submit" name="pm_r_btn" id="pm_r_btn" class="btn btn-primary btn-block m-b-0">Registrar Pago</button>
                                                        </div>
                                                    </div>
{{-- Transferencia Bancaria --}}

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
    </div>
</div>

@endsection

@section('js')

@endsection