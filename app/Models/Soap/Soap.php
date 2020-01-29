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
        $response = $soapClient->CreateNewDocument((object)['ID'=>1,'OperationType'=>'новый договор','InsuranceProduct'=>'NSL_EB','Insured'=>'940603300487','Middleman'=>'940603300487','PreviousID'=>0,'InsuredName'=>'Era Tama']);
        print_r($response);
        exit;
        return true;
    	try {
    		$soap = /*(object) [1,"новый договор",'NSL_EB','940603300487','940603300487',0,'Era Tama'];//*/(object) ['ID'=>1,'OperationType'=>'OperationType','InsuranceProduct'=>'NSL_EB','Insured'=>'940603300487','Middleman'=>'940603300487','PreviousID'=>0,'InsuredName'=>'Era Tama'];
    		echo $soapClient->CreateNewDocument($soap/*[1,"новый договор",'NSL_EB','940603300487','940603300487',0,'Era Tama']*/);

    	} catch (Exception $e) {
    		dd($e);
    	}

        /*
         Array
(
    [0] => CreateNewDocumentResponse CreateNewDocument(CreateNewDocument $parameters)
    [1] => SaveDocumentResponse SaveDocument(SaveDocument $parameters)
    [2] => DamageBlankResponse DamageBlank(DamageBlank $parameters)
    [3] => SavePictureResponse SavePicture(SavePicture $parameters)
    [4] => CreateChequeResponse CreateCheque(CreateCheque $parameters)
    [5] => CreateInsuranceEventResponse CreateInsuranceEvent(CreateInsuranceEvent $parameters)
    [6] => SendSmsResponse SendSms(SendSms $parameters)
    [7] => SendEmailResponse SendEmail(SendEmail $parameters)
    [8] => ValuationOfDamageResponse ValuationOfDamage(ValuationOfDamage $parameters)
    [9] => CheckClientResponse CheckClient(CheckClient $parameters)
    [10] => GetMarksResponse GetMarks(GetMarks $parameters)
    [11] => GetModelsResponse GetModels(GetModels $parameters)
    [12] => GetOKEDResponse GetOKED(GetOKED $parameters)
    [13] => SetNewMarkResponse SetNewMark(SetNewMark $parameters)
    [14] => SetNewModelResponse SetNewModel(SetNewModel $parameters)
    [15] => GetRegionsResponse GetRegions(GetRegions $parameters)
    [16] => GetTransportResponse GetTransport(GetTransport $parameters)
    [17] => SaveInsuredAccidentResponse SaveInsuredAccident(SaveInsuredAccident $parameters)
    [18] => ServiceOutcomeResponse ServiceOutcome(ServiceOutcome $parameters)
    [19] => GetContractsByTFNumberResponse GetContractsByTFNumber(GetContractsByTFNumber $parameters)
    [20] => CheckPolicyByGlobalIDResponse CheckPolicyByGlobalID(CheckPolicyByGlobalID $parameters)
    [21] => CheckPolicyByDriverAndTFResponse CheckPolicyByDriverAndTF(CheckPolicyByDriverAndTF $parameters)
    [22] => CreateNewDocumentResponse CreateNewDocument(CreateNewDocument $parameters)
    [23] => SaveDocumentResponse SaveDocument(SaveDocument $parameters)
    [24] => DamageBlankResponse DamageBlank(DamageBlank $parameters)
    [25] => SavePictureResponse SavePicture(SavePicture $parameters)
    [26] => CreateChequeResponse CreateCheque(CreateCheque $parameters)
    [27] => CreateInsuranceEventResponse CreateInsuranceEvent(CreateInsuranceEvent $parameters)
    [28] => SendSmsResponse SendSms(SendSms $parameters)
    [29] => SendEmailResponse SendEmail(SendEmail $parameters)
    [30] => ValuationOfDamageResponse ValuationOfDamage(ValuationOfDamage $parameters)
    [31] => CheckClientResponse CheckClient(CheckClient $parameters)
    [32] => GetMarksResponse GetMarks(GetMarks $parameters)
    [33] => GetModelsResponse GetModels(GetModels $parameters)
    [34] => GetOKEDResponse GetOKED(GetOKED $parameters)
    [35] => SetNewMarkResponse SetNewMark(SetNewMark $parameters)
    [36] => SetNewModelResponse SetNewModel(SetNewModel $parameters)
    [37] => GetRegionsResponse GetRegions(GetRegions $parameters)
    [38] => GetTransportResponse GetTransport(GetTransport $parameters)
    [39] => SaveInsuredAccidentResponse SaveInsuredAccident(SaveInsuredAccident $parameters)
    [40] => ServiceOutcomeResponse ServiceOutcome(ServiceOutcome $parameters)
    [41] => GetContractsByTFNumberResponse GetContractsByTFNumber(GetContractsByTFNumber $parameters)
    [42] => CheckPolicyByGlobalIDResponse CheckPolicyByGlobalID(CheckPolicyByGlobalID $parameters)
    [43] => CheckPolicyByDriverAndTFResponse CheckPolicyByDriverAndTF(CheckPolicyByDriverAndTF $parameters)
)
         */
    }
}
