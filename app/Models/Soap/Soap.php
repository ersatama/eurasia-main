<?php

namespace App\Models\Soap;

use Illuminate\Database\Eloquent\Model;

class Soap extends Model
{
	protected const USER = 'EuBankTest';
	protected const PASSWORD = 'gfj@iuGHqqew';
	protected const URL = 'http://sb.eulife.kz:8958/wsEubankTest/ws/wsNovelty.1cws?wsdl';

    public function start() {

    	$parameters = [
    		'login' => self::USER,
    		'password' => self::PASSWORD,
    		'trace' => true
    	];

    	$soapClient = new \SoapClient(self::URL, $parameters);
    	try {
    		$soap = ['ID'=>1,'OperationType'=>'OperationType','InsuranceProduct'=>'NSL_EB','Insured'=>'940603300487','Middleman'=>'940603300487','PreviousID'=>0,'InsuredName'=>'Era Tama'];
    		
    		echo $soapClient->CreateNewDocument($soap/*[1,"новый договор",'NSL_EB','940603300487','940603300487',0,'Era Tama']*/);
    	} catch (Exception $e) {
    		dd($e);
    	}
    	

    }
}
