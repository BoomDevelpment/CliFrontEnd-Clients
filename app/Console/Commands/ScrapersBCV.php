<?php

namespace App\Console\Commands;

use App\Models\Scrapers\Scrapers;
use Illuminate\Console\Command;
use Goutte;

class ScrapersBCV extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scraper:bcv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'CronJob to Scraper the values ​​of the reference rates of the BCV';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
		$url        =   'http://www.bcv.org.ve/';
        $crawler    =   Goutte::request('GET', $url);
        $euro       =   $crawler->filter('#euro')->each(function ($node){ return    $node->text(); });
        $yuan       =   $crawler->filter('#yuan')->each(function ($node){ return    $node->text(); });
        $lira       =   $crawler->filter('#lira')->each(function ($node){ return    $node->text(); });
        $rublo      =   $crawler->filter('#rublo')->each(function ($node){ return    $node->text(); });
        $dolar      =   $crawler->filter('#dolar')->each(function ($node){ return    $node->text(); });
        
        $iData  =   [
            'euro'  =>  ROUND(str_replace(',','.',substr($euro[0],'4',  strlen($euro[0]))),2),
            'yuan'  =>  ROUND(str_replace(',','.',substr($yuan[0],'4',  strlen($yuan[0]))),2),
            'lira'  =>  ROUND(str_replace(',','.',substr($lira[0],'4',  strlen($lira[0]))),2),
            'rublo' =>  ROUND(str_replace(',','.',substr($rublo[0],'4', strlen($rublo[0]))),2),
            'dolar' =>  ROUND(str_replace(',','.',substr($dolar[0],'4', strlen($dolar[0]))),2),
        ];

		$get 	= 	Scrapers::getLast();
		$st 	=	0;

        $iRes  =   [ 'euro'  =>  $get->euro, 'yuan'  =>  $get->yuan, 'lira'  =>  $get->lira, 'rublo' =>  $get->rublo, 'dolar' =>  $get->dolar];
        
		$st 	=	($iRes['dolar'] <> $iData['dolar']) ? 1 : 0;

		if($st == 1)
		{
			$insert 	=	Scrapers::insertData($iData);
			
			if($insert <> false)
			{
				\Log::info(date("Y-m-d H:m:s")." - Scraper - Update values of reference rates BCV - Dolar: ".$iData['dolar']." - Euro: ".$iData['euro']." - Yuan: ".$iData['euro']." - Lira: ".$iData['lira']." - Rublo: ".$iData['rublo']."");
			}else{
				\Log::info(date("Y-m-d H:m:s")." - Scraper - It is not possible to update values of reference rates BCV");
			}
		}

    }
}
