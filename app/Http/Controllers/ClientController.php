<?php

namespace App\Http\Controllers;

use App\Models\General\Bank;
use App\Models\General\Status;
use App\Models\Payments\AccountBank;
use App\Models\Payments\AccountBankEntity;
use App\Models\Payments\AccountBankType;
use App\Models\Payments\CreditCard;
use App\Models\Payments\CreditCardEntity;
use App\Models\Payments\CreditCardType;
use App\Models\Profile\Client;
use App\Models\Scrapers\Scrapers;
use App\Models\Transference\TransferenceBank;
use App\Models\Transference\TransferenceFile;
use App\Models\Transference\TransferenceMethod;
use App\Models\Transference\TransferenceMovil;
use App\Models\Transference\TransferencePending;
use App\Models\Transference\TransferenceStatus;
use App\Models\Transference\TransferenceType;
use App\Models\Transference\TransferenceZelle;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ProIndex(Request $request)
    {
        try {

            $cli    =   Client::GetClient(['field'=>'id', 'id' => auth()->user()->client->client_id]);

            return view('pages/clients/profile/index',[
                'data'      =>  $cli,
                'bank'      =>  Bank::get(),
                'tdc'       =>  CreditCard::orderBy('status_id', 'ASC')->orderBy('id', 'DESC')->get(),
                'ab'        =>  AccountBank::orderBy('status_id', 'ASC')->orderBy('id', 'DESC')->get(),
                'status'    =>  Status::get(),
                'cc_entity' =>  CreditCardEntity::get(),
                'cc_type'   =>  CreditCardType::get(),
                'ab_entity' =>  AccountBankEntity::get(),
                'ab_type'   =>  AccountBankType::get(),
            
            ]);

        } catch (\Exception $e) {
            return redirect('/404');
        }        
    
    }

    public function ProUpdate(Request $request)
    {
        try {
            $update     =   Client::findOrFail($request->iId);

            $validator      =   Validator::make($request->all(), [
                'iName'     => 'required|string|min:5',
                'iAddress'  => 'required',
                'iPhone'    => 'required',
                'iEmail'    => 'required',
            ]);
    
            if ($validator->fails()) 
            {   
                return response()->json([
                    'success' => false,
                    'message' => 'Incorrect or incomplete parameters (Name, Address, Phone OR Email).',
                ], Response::HTTP_UNAUTHORIZED);
            }


            Client::UpdateCLI($request->all());

            return response()->json([
                'success'   =>  true,
                'url'       =>  url('/client/profile')
            ],  Response::HTTP_OK);

        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Incorrect or incomplete parameters.',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function RegisterTDC(Request $request)
    {
        $validator      =   Validator::make($request->all(), [
            'cTitle'    => 'required|string|min:5',
            'cNumber'   => 'required|min:13',
            'cCvv'      => 'required',
            'cMonth'    => 'required',
            'cYear'     => 'required',
            'cEntity'   => 'required',
            'cType'     => 'required',
        ]);

        if ($validator->fails()) 
        {   
            return response()->json([
                'success' => false,
                'message' => 'Incorrect or incomplete parameters.',
            ], Response::HTTP_UNAUTHORIZED);
        }

        try {
            $card   =   CreditCard::Register($request->all());

            return response()->json([
                'success'   =>  true,
                'url'       =>  url('/client/profile')
            ],  Response::HTTP_OK);

        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Incorrect or incomplete parameters.',
            ], Response::HTTP_UNAUTHORIZED);
        }      
    
    }

    public function SearchTDC(Request $request)
    {
        try {
            $card   =   CreditCard::Search($request->id);

            if($card == false)
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Credit Card not Found',
                ], Response::HTTP_UNAUTHORIZED);
            }

            return response()->json([
                'success'   => true,
                'card'      => $card,
            ], Response::HTTP_OK);

        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Credit Card not Found',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function UpdateTDC(Request $request)
    {
        try {
            $card   =   CreditCard::findOrFail($request->mId);

            $validator      =   Validator::make($request->all(), [
                'mTitle'    => 'required|string|min:5',
                'mNumber'   => 'required|min:13',
                'mCvv'      => 'required',
                'mMonth'    => 'required',
                'mYear'     => 'required',
                'mEntity'   => 'required',
                'mType'     => 'required',
                'mStatus'   => 'required',
            ]);
    
            if ($validator->fails()) 
            {   
                return response()->json([
                    'success' => false,
                    'message' => 'Incorrect or incomplete parameters.',
                ], Response::HTTP_UNAUTHORIZED);
            }


            $upd    =   CreditCard::UpdateTDC($request);

            if($upd == false)
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Credit Card not Found adfasdf',
                ], Response::HTTP_UNAUTHORIZED);
            }

            return response()->json([
                'success'   => true,
                'url'       =>  url('/client/profile')
            ], Response::HTTP_OK);

        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Credit Card not Found',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function RegisterAB(Request $request)
    {
        $validator      =   Validator::make($request->all(), [
            'aTitle'    => 'required|min:5',
            'aNumber'   => 'required|min:5',
            'aEntity'   => 'required',
            'aType'     => 'required',
            'aBank'     => 'required',
        ]);

        if ($validator->fails()) 
        {   
            return response()->json([
                'success' => false,
                'message' => 'Incorrect or incomplete parameters.',
            ], Response::HTTP_UNAUTHORIZED);
        }

        try {
            
            $card   =   AccountBank::Register($request->all());

            return response()->json([
                'success'   =>  true,
                'url'       =>  url('/client/profile')
            ],  Response::HTTP_OK);

        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Incorrect or incomplete parameters.',
            ], Response::HTTP_UNAUTHORIZED);
        } 

    }

    public function SearchAB(Request $request)
    {
        try {
            $card   =   AccountBank::Search($request->id);

            if($card == false)
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Account Bank not Found',
                ], Response::HTTP_UNAUTHORIZED);
            }

            return response()->json([
                'success'   => true,
                'card'      => $card,
            ], Response::HTTP_OK);

        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Account Bank not Found',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function UpdateAB(Request $request)
    {
        try {
            $card   =   AccountBank::findOrFail($request->abId);

            $validator      =   Validator::make($request->all(), [
                'abTitle'   => 'required|min:5',
                'abNumber'  => 'required|min:5',
                'abEntity'  => 'required',
                'abType'    => 'required',
                'abBank'    => 'required',
                'abStatus'  => 'required',
            ]);
    
            if ($validator->fails()) 
            {   
                return response()->json([
                    'success' => false,
                    'message' => 'Incorrect or incomplete parameters.',
                ], Response::HTTP_UNAUTHORIZED);
            }

            $upd    =   AccountBank::UpdateAB($request);

            if($upd == false)
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Account Bank not Found adfasdf',
                ], Response::HTTP_UNAUTHORIZED);
            }

            return response()->json([
                'success'   => true,
                'url'       =>  url('/client/profile')
            ], Response::HTTP_OK);

        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Account Bank not Found',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function Wallet(Request $request)
    {
        try {

            $cli    =   Client::GetClient(['field'=>'id', 'id' => auth()->user()->client->client_id]);

        } catch (\Exception $e) {
            return redirect('/404');

        } 
        
        $user       =   User::find(auth()->user()->id);
        $myWallet   =   $user->getWallet(auth()->user()->identified);

        if($myWallet == false)
        {
            $user->createWallet([
                'name'          =>  $user->identified,
                'slug'          =>  $user->identified,
                'meta'          =>  'USD',
                'description'   =>  'Wallet Client: '.$user->name.''
            ]);
        }

        $myWallet   =   $user->getWallet(auth()->user()->identified);

        $divisa     =   Scrapers::getLast();
        $bs         =   ($myWallet->balanceFloat > 0) ? ROUND(($myWallet->balanceFloat * $divisa->dolar),2) : '0.00';

        return view('pages/clients/wallet/index',[
            'data'      =>  $cli,
            'wallet'    =>  $myWallet,
            'bs'        =>  $bs,
            'divisa'    =>  Scrapers::getLast(),
            'zelle'     =>  TransferenceZelle::where('client_id', $cli->id)->limit(10)->orderBy('id', 'DESC')->get(),
            'trans'     =>  TransferenceBank::where('client_id', $cli->id)->limit(10)->orderBy('id', 'DESC')->get()
        ]);
    }

    public function WaRegister(Request $request)
    {
        return view('pages/clients/wallet/register/index', [
            'bank'      =>  Bank::get(),
            'divisa'    =>  Scrapers::getLast()
        ]);
    }

    public function RegisterZelle(Request $request)
    {
        $validator      =   Validator::make($request->all(), [
            'zl_r_asu'          => 'required|min:5',
            'zl_r_titular'      => 'required|min:5',
            'zl_r_date'         => 'required|min:5',
            'zl_r_reference'    => 'required|min:5',
            'zl_r_amount'       => 'required',
        ]);

        
        if ($validator->fails()) 
        {   
            return response()->json([
                'success' => false,
                'message' => 'Parametros Incompletos',
            ], Response::HTTP_UNAUTHORIZED);
        }
        
        if(COUNT(TransferenceFile::SearchFile($request->zl_r_ide)) == 0)
        {
            return response()->json([
                'success' => false,
                'message' => 'Para completar la solicitud debe ingresar al menos un archivo adjunto.',
            ], Response::HTTP_UNAUTHORIZED); 
        }
        
        $divisa     =   Scrapers::getLast();
        $type       =   TransferenceType::where([ ['status_id', '=', 1], ['name', 'like', '%dol%'] ])->get()[0];
        $status     =   TransferenceStatus::where([ ['status_id', '=', 1], ['name', 'like', '%pen%'] ])->get()[0];

        $iData  =   [
            'identified'    =>   $request->zl_r_ide,
            'client_id'     =>   auth()->user()->client->client_id,
            'subject'       =>   $request->zl_r_asu,
            'title'         =>   $request->zl_r_titular,
            'date_trans'    =>   $request->zl_r_date,
            'reference'     =>   $request->zl_r_reference,
            'total'         =>   $request->zl_r_amount,
            'bs'            =>   round( ($divisa->dolar * $request->zl_r_amount), 2),
            'description'   =>   ($request->zl_r_message <> '') ? $request->zl_r_message : 'Transfer date: '.date("Y-m-d H:m:s").'',
            'type'          =>   $type->id,
            'status'        =>   $status->id,
        ];

        $reg    =   TransferenceZelle::RegisteTrans($iData);
      
        if($reg <> false)
        {
            $user       =   User::find(auth()->user()->id);
            $myWallet   =   $user->getWallet(auth()->user()->identified);

            $transaction    =   $myWallet->depositFloat($iData['total'], 
                [
                    'Description'   =>  $iData['description'],
                    'USD'           =>  $request->zl_r_amount,
                    'BS'            =>  $iData['bs'],
                    'DIVISA'        =>  $divisa->dolar,
                ], false);
            
            $iPend   =   [
                'identified'    =>  $request->zl_r_ide,
                'client'        =>  auth()->user()->client->client_id,
                'transaction'   =>  $transaction->id,
                'status'        =>  $status->id,
                'method'        =>  TransferenceMethod::where('name', 'like', '%zel%')->get()[0]->id
            ];

            $pen    =   TransferencePending::RegisteTrans($iPend);

            if($pen <> false)
            {
                return response()->json([
                    'success'   =>  true,
                    'message'   =>  'Datos almacenados correctamente.',
                    'url'       =>  url('/client/wallet')
                ], Response::HTTP_OK);        

            }else{

                return response()->json([
                    'success' => false,
                    'message' => 'Error al intentar almancenar la informaci&oacute;n, intente nuevamente.',
                ], Response::HTTP_UNAUTHORIZED); 

            }

        }else{

            return response()->json([
                'success' => false,
                'message' => 'Error al intentar almancenar la informaci&oacute;n, intente nuevamente.',
            ], Response::HTTP_UNAUTHORIZED); 
        }

    }

    public function FilesZelle(Request $request)
    {
        if($files   =   $request->file('file'))
        {
            try {
                $fileName   =   auth()->user()->client->client_id.'-'.time().'.'.$request->file->extension();
                $request->file->move(public_path('files/zelle'), $fileName);

                $data   =   [
                    'identified'    =>  $request->zl_r_ide_f,
                    'name'          =>  $fileName,
                    'dir'           =>  'files/zelle'
                ];

                $res    =   TransferenceFile::RegFile($data);

                if($res <> false)
                {
                    return response()->json([
                        'success'   =>  true,
                        'file'      =>  $fileName,
                        'id'        =>  $request->zl_r_ide_f
                    ],  Response::HTTP_OK);

                }else{
                    return response()->json([
                        'success'   => false,
                        'file'      => '',
                    ], Response::HTTP_UNAUTHORIZED);
                }    

            } catch (\Throwable $th) {
                return response()->json([
                    'success'   => false,
                    'file'      => '',
                ], Response::HTTP_UNAUTHORIZED);
            }

        }else{
            return response()->json([
                'success'   => false,
                'file'      => '',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function DeleteFiles(Request $request)
    {
        try {
            $files  =   TransferenceFile::where('identified', '=', $request->id)->delete();
            
            return response()->json([
                'success'   =>  true,
            ],  Response::HTTP_OK);
            
        } catch (\Exception $e) {
            return response()->json([
                'success'   => false,
                'file'      => '',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function GetDivisa(Request $request)
    {
        return response()->json([
            'success'   =>  true,
            'divisa'    =>  Scrapers::getLast()
        ], Response::HTTP_OK);
    }

    public function RegisterTransference(Request $request)
    {
        $validator      =   Validator::make($request->all(), [
            't_asu'         => 'required|min:5',
            't_title'       => 'required|min:5',
            't_total'       => 'required',
            't_date'        => 'required',
            't_dni'         => 'required|min:5',
            't_bank'        => 'required',
            't_reference'   => 'required',
        ]);
       
        if ($validator->fails()) 
        {   
            return response()->json([
                'success' => false,
                'message' => 'Parametros Incompletos',
            ], Response::HTTP_UNAUTHORIZED);
        }

        if(COUNT(TransferenceFile::SearchFile($request->t_ide)) == 0)
        {
            return response()->json([
                'success' => false,
                'message' => 'Para completar la solicitud debe ingresar al menos un archivo adjunto.',
            ], Response::HTTP_UNAUTHORIZED); 
        }
        
        $divisa     =   Scrapers::getLast();
        $type       =   TransferenceType::where([ ['status_id', '=', 1], ['name', 'like', '%bol%'] ])->get()[0];
        $status     =   TransferenceStatus::where([ ['status_id', '=', 1], ['name', 'like', '%pen%'] ])->get()[0];

        $iData  =   [
            'identified'    =>   $request->t_ide,
            'client_id'     =>   auth()->user()->client->client_id,
            'subject'       =>   $request->t_asu,
            'title'         =>   $request->t_title,
            'date_trans'    =>   $request->t_date,
            'dni'           =>   $request->t_dni,
            'account'       =>   ($request->t_account <> '') ? $request->t_account : '',
            'reference'     =>   $request->t_reference,
            'total'         =>   round( ($request->t_total / $divisa->dolar), 2),
            'bs'            =>   $request->t_total,
            'description'   =>   ($request->t_message <> '') ? $request->t_message : 'Transfer date: '.date("Y-m-d H:m:s").'',
            'bank'          =>   $request->t_bank,
            'type'          =>   $type->id,
            'status'        =>   $status->id,
        ];

        $reg    =   TransferenceBank::RegisteTrans($iData);
      
        if($reg <> false)
        {
            $user       =   User::find(auth()->user()->id);
            $myWallet   =   $user->getWallet(auth()->user()->identified);

            $transaction    =   $myWallet->depositFloat($iData['total'], 
                [
                    'Description'   =>  $iData['description'],
                    'USD'           =>  $request->t_amount,
                    'BS'            =>  $iData['bs'],
                    'DIVISA'        =>  $divisa->dolar,
                ], false);
            
            $iPend   =   [
                'identified'    =>  $request->t_ide,
                'client'        =>  auth()->user()->client->client_id,
                'transaction'   =>  $transaction->id,
                'status'        =>  $status->id,
                'method'        =>  TransferenceMethod::where('name', 'like', '%trans%')->get()[0]->id
            ];

            $pen    =   TransferencePending::RegisteTrans($iPend);

            if($pen <> false)
            {
                return response()->json([
                    'success'   =>  true,
                    'message'   =>  'Datos almacenados correctamente.',
                    'url'       =>  url('/client/wallet')
                ], Response::HTTP_OK);        

            }else{

                return response()->json([
                    'success' => false,
                    'message' => 'Error al intentar almancenar la informaci&oacute;n, intente nuevamente. Pending',
                ], Response::HTTP_UNAUTHORIZED); 

            }

        }else{

            return response()->json([
                'success' => false,
                'message' => 'Error al intentar almancenar la informaci&oacute;n, intente nuevamente. Register',
            ], Response::HTTP_UNAUTHORIZED); 
        }

    }

    public function FilesTransference(Request $request)
    {
        if($request->file('t_file'))
        {
            try {
                $fileName   =   auth()->user()->client->client_id.'-'.time().'.'.$request->file('t_file')->extension();
                $request->file('t_file')->move(public_path('files/transference'), $fileName);

                $data   =   [
                    'identified'    =>  $request->t_ide_f,
                    'name'          =>  $fileName,
                    'dir'           =>  'files/transference'
                ];

                $res    =   TransferenceFile::RegFile($data);

                if($res <> false)
                {
                    return response()->json([
                        'success'   =>  true,
                        'file'      =>  $fileName,
                        'tp'        =>  1,
                        'id'        =>  $request->t_ide_f
                    ],  Response::HTTP_OK);

                }else{
                    return response()->json([
                        'success'   => false,
                        'file'      => '',
                    ], Response::HTTP_UNAUTHORIZED);
                }    

            } catch (\Throwable $th) {
                return response()->json([
                    'success'   => false,
                    'file'      => '',
                ], Response::HTTP_UNAUTHORIZED);
            }

        }else{
            return response()->json([
                'success'   => false,
                'file'      => 'asdfasf',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function ConfirmPayment(Request $request)
    {
        $divisa     =   Scrapers::getLast();

        return response()->json([
            'success'   =>  true,
            'bs'        =>  round($request->amount,2),
            'usd'       =>  round( ($request->amount / $divisa->dolar), 2),
            'dolar'     =>  $divisa->dolar
        ],  Response::HTTP_OK);

    }

    public function DeleteFilesBS(Request $request)
    {
        try {
            $files  =   TransferenceFile::where('identified', '=', $request->id)->delete();
            
            return response()->json([
                'success'   =>  true,
            ],  Response::HTTP_OK);
            
        } catch (\Exception $e) {
            return response()->json([
                'success'   => false,
                'file'      => '',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }

    public function RegisterMovil(Request $request)
    {       
        $validator      =   Validator::make($request->all(), [
            'm_asu'         => 'required|min:5',
            'm_title'       => 'required|min:5',
            'm_phone'       => 'required',
            'm_total'       => 'required',
            'm_date'        => 'required',
            'm_dni'         => 'required',
            'm_bank'        => 'required',
            'm_reference'   => 'required',
        ]);
       
        if ($validator->fails()) 
        {   
            return response()->json([
                'success' => false,
                'message' => 'Parametros Incompletos',
            ], Response::HTTP_UNAUTHORIZED);
        }

        if(COUNT(TransferenceFile::SearchFile($request->m_ide)) == 0)
        {
            return response()->json([
                'success' => false,
                'message' => 'Para completar la solicitud debe ingresar al menos un archivo adjunto.',
            ], Response::HTTP_UNAUTHORIZED); 
        }
        
        $divisa     =   Scrapers::getLast();
        $type       =   TransferenceType::where([ ['status_id', '=', 1], ['name', 'like', '%bol%'] ])->get()[0];
        $status     =   TransferenceStatus::where([ ['status_id', '=', 1], ['name', 'like', '%pen%'] ])->get()[0];

        $iData  =   [
            'identified'    =>   $request->m_ide,
            'client_id'     =>   auth()->user()->client->client_id,
            'subject'       =>   $request->m_asu,
            'title'         =>   $request->m_title,
            'date_trans'    =>   $request->m_date,
            'dni'           =>   $request->m_dni,
            'phone'         =>   ($request->m_phone <> '') ? $request->m_phone : '',
            'reference'     =>   $request->m_reference,
            'total'         =>   round( ($request->m_total / $divisa->dolar), 2),
            'bs'            =>   $request->m_total,
            'description'   =>   ($request->m_message <> '') ? $request->m_message : 'Transfer date: '.date("Y-m-d H:m:s").'',
            'bank'          =>   $request->m_bank,
            'type'          =>   $type->id,
            'status'        =>   $status->id,
        ];


        $reg    =   TransferenceMovil::RegisteTrans($iData);
      
        if($reg <> false)
        {
            $user       =   User::find(auth()->user()->id);
            $myWallet   =   $user->getWallet(auth()->user()->identified);

            $transaction    =   $myWallet->depositFloat($iData['total'], 
                [
                    'Description'   =>  $iData['description'],
                    'USD'           =>  $request->t_amount,
                    'BS'            =>  $iData['bs'],
                    'DIVISA'        =>  $divisa->dolar,
                ], false);
            
            $iPend   =   [
                'identified'    =>  $request->m_ide,
                'client'        =>  auth()->user()->client->client_id,
                'transaction'   =>  $transaction->id,
                'status'        =>  $status->id,
                'method'        =>  TransferenceMethod::where('name', 'like', '%pag%')->get()[0]->id
            ];

            $pen    =   TransferencePending::RegisteTrans($iPend);

            if($pen <> false)
            {
                return response()->json([
                    'success'   =>  true,
                    'message'   =>  'Datos almacenados correctamente.',
                    'url'       =>  url('/client/wallet')
                ], Response::HTTP_OK);        

            }else{

                return response()->json([
                    'success' => false,
                    'message' => 'Error al intentar almancenar la informaci&oacute;n, intente nuevamente. Pending',
                ], Response::HTTP_UNAUTHORIZED); 

            }

        }else{

            return response()->json([
                'success' => false,
                'message' => 'Error al intentar almancenar la informaci&oacute;n, intente nuevamente. Register',
            ], Response::HTTP_UNAUTHORIZED); 
        }

    }

    public function FilesMovil(Request $request)
    {
        if($request->file('m_file'))
        {
            try {
                $fileName   =   auth()->user()->client->client_id.'-'.time().'.'.$request->file('m_file')->extension();
                $request->file('m_file')->move(public_path('files/movil'), $fileName);

                $data   =   [
                    'identified'    =>  $request->m_ide_f,
                    'name'          =>  $fileName,
                    'dir'           =>  'files/movil'
                ];

                $res    =   TransferenceFile::RegFile($data);

                if($res <> false)
                {
                    return response()->json([
                        'success'   =>  true,
                        'file'      =>  $fileName,
                        'tp'        =>  2,
                        'id'        =>  $request->m_ide_f
                    ],  Response::HTTP_OK);

                }else{
                    return response()->json([
                        'success'   => false,
                        'file'      => '',
                    ], Response::HTTP_UNAUTHORIZED);
                }    

            } catch (\Throwable $th) {
                return response()->json([
                    'success'   => false,
                    'file'      => '',
                ], Response::HTTP_UNAUTHORIZED);
            }

        }else{
            return response()->json([
                'success'   => false,
                'file'      => 'asdfasf',
            ], Response::HTTP_UNAUTHORIZED);
        }
    }
    
}
