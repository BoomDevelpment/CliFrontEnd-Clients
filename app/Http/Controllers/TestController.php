<?php

namespace App\Http\Controllers;

use App\Models\Profile\Client;
use App\Models\Scrapers\Scrapers;
use App\Models\Transference\TransferenceBank;
use App\Models\Transference\TransferenceMethod;
use App\Models\Transference\TransferenceMovil;
use App\Models\Transference\TransferencePaypal;
use App\Models\Transference\TransferencePending;
use App\Models\Transference\TransferenceStatus;
use App\Models\Transference\TransferenceZelle;
use App\Models\User;
use Illuminate\Http\Request;
use Goutte;
use PhpParser\Node\Stmt\TryCatch;

class TestController extends Controller
{
    public static function index(Request $request)
    {

        $user       =   User::find(auth()->user()->id);
        $myWallet   =   $user->getWallet(auth()->user()->identified); 

        $myWallet->WithdrawFloat(5, ['Description' => 'PAYMENT FOR MONTH']);
        $balance    =   $myWallet->balanceFloat;
        dd($balance);

        try {
            $client     =   Client::findOrFail(1);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        $cc     =   $idWa   =   $idWaMe     =   0;
        $iPend  =   [];
        if(COUNT($client->pending) > 0) 
        {
            foreach ($client->pending as $c => $pen) 
            {
                
                if($pen->status_id == TransferenceStatus::where('name','like','%pen%')->get()['0']->id )
                {
                    $iPend[$cc++]   =   $user->transactions()->where([['wallet_id', $myWallet->id], ['id', $pen->transaction], ['confirmed', 0]])->get()[0];
                }
            }

        }else{
            dd("Sin Informacio");
        }

       
        $iDPen  =   1;
        $idWa   =   1;
        $idWaMe =   1;
        
        /**
         * Confirmar un pago pendiente.
         */
        
        if($myWallet->confirm($iPend[0]) == true)
        {
            switch ($idWaMe) 
            {
                case '1':   $report     =   TransferenceZelle::find($idWa);     break;
                case '2':   $report     =   TransferencePaypal::find($idWa);    break;
                case '3':   $report     =   TransferenceBank::find($idWa);      break;
                case '4':   $report     =   TransferenceMovil::find($idWa);     break;
            }



            $report->status_id  =   TransferenceStatus::where('name','like','%proce%')->get()['0']->id;
            $report->save();

            $pending            =   TransferencePending::find($iDPen);
            $pending->status_id =   TransferenceStatus::where('name','like','%proce%')->get()['0']->id;
            $pending->save();

        }
        dd($myWallet->balanceFloat);


        dd("Segundo",$myWallet->balanceFloat, $iPend);

        // try {
        //     dd(auth()->user()->id);
            
        //     $pending    =   TransferencePending::where(['client_id', '=', '2'])->get();
        //     // $pending    =   TransferencePending::where(['client_id', '=', auth()->user()->id])->get();
        //     dd($pending);
            
        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }

        
        
        
        // $user       =   User::find(auth()->user()->id);
        // $client     =   Client::find($user->client->client_id);

        // $zelle      =   $client->zelle;

        // foreach ($zelle as $z => $ze) 
        // {

        //     dd($ze->status->name, $ze->type->name);
        // }
        
        // dd($user->client->client_id, );

        dd("Test Controller");
    }

    public static function Scrapers(Request $request)
    {
        $url        =   'http://www.bcv.org.ve/';
        $crawler    =   Goutte::request('GET', $url);
        $euro       =   $crawler->filter('#euro')->each(function ($node){ return    $node->text(); });
        $yuan       =   $crawler->filter('#yuan')->each(function ($node){ return    $node->text(); });
        $lira       =   $crawler->filter('#lira')->each(function ($node){ return    $node->text(); });
        $rublo      =   $crawler->filter('#rublo')->each(function ($node){ return    $node->text(); });
        $dolar      =   $crawler->filter('#dolar')->each(function ($node){ return    $node->text(); });    
                
        $iData  =   [
            'euro'  =>  substr( str_replace(',','.',substr($euro[0],'4',  strlen($euro[0]))),   0, -6),
            'yuan'  =>  substr( str_replace(',','.',substr($yuan[0],'4',  strlen($yuan[0]))),   0, -6),
            'lira'  =>  substr( str_replace(',','.',substr($lira[0],'4',  strlen($lira[0]))),   0, -6),
            'rublo' =>  substr( str_replace(',','.',substr($rublo[0],'4', strlen($rublo[0]))),  0, -6),
            'dolar' =>  substr( str_replace(',','.',substr($dolar[0],'4', strlen($dolar[0]))),  0, -6),
        ];

        $get    =   Scrapers::getLast();
        $st     =   0;

        $iRes  =   [ 'euro'  =>  $get->euro, 'yuan'  =>  $get->yuan, 'lira'  =>  $get->lira, 'rublo' =>  $get->rublo, 'dolar' =>  $get->dolar];
        
        $sE     =   ($iRes['euro']  <> $iData['euro'])  ? 1 : 0;
        $sY     =   ($iRes['lira']  <> $iData['lira'])  ? 1 : 0;
        $sL     =   ($iRes['yuan']  <> $iData['yuan'])  ? 1 : 0;
        $sR     =   ($iRes['rublo'] <> $iData['rublo']) ? 1 : 0;
        $sD     =   ($iRes['dolar'] <> $iData['dolar']) ? 1 : 0;

        if( ($sE == 1) || ($sY == 1) || ($sL == 1) || ($sR == 1) || ($sD == 1) )
        {
            $insert     =   Scrapers::insertData($iData);
            
            if($insert <> false)
            {
                \Log::info(date("Y-m-d H:m:s")." - Scraper - Update values of reference rates BCV - Dolar: ".$iData['dolar']." - Euro: ".$iData['euro']." - Yuan: ".$iData['euro']." - Lira: ".$iData['lira']." - Rublo: ".$iData['rublo']."");
            }else{
                \Log::info(date("Y-m-d H:m:s")." - Scraper - It is not possible to update values of reference rates BCV");
            }
        }

        dd("Scrapers TestController");
    }
}
