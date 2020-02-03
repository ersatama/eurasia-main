<?php

namespace App\Models\Soap;

use Illuminate\Database\Eloquent\Model;
use Spatie\ArrayToXml\ArrayToXml;
//use Orchestra\Parser\Xml\Facade as XmlParser;

class Soap extends Model
{
    protected const USER = 'EuBankTest';
    protected const PASSWORD = 'gfj@iuGHqqew';
    protected const URL = 'http://sb.eulife.kz:8958/wsEubankTest/ws/wsNovelty.1cws?wsdl';

    public function start(array $data)
    {

        $parameters = [
            'login' => self::USER,
            'password' => self::PASSWORD,
            'trace' => true
        ];

        try {
            $soapClient = new \SoapClient(self::URL, $parameters);
            $response = $soapClient->CreateNewDocument((object)[
                'ID' => $data['ID'],
                'OperationType' => $data['OperationType'],
                'InsuranceProduct' => $data['InsuranceProduct'],
                'Insured' => $data['Insured'],
                'Middleman' => $data['Middleman'],
                'PreviousID' => 0,//$data['PreviousID'],
                'InsuredName' => $data['InsuredName']
            ]);
            if ($response->return === 0) {
                $xml = $this->documentXML($data);

                $save = $soapClient->SaveDocument((object)[
                    'ID' => $data['ID'],
                    'OperationType' => $data['OperationType'],
                    'DocumentXML' => $xml
                ]);

                print_r($save);
                exit;

                return true;
            } else {
                    exit('hello world');
                return false;
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function documentXML(array $data) {
        //$xml = XmlParser::load(asset('storage/res/DocumentXML.xml'));
        return view('xml.DocumentXML',compact('data'))->render();
//        print_r(base64_encode(ArrayToXml::convert(['POLICY'=>[]])));
        exit;
        /*return ArrayToXml::convert(['POLICY'=>[]]);*/
        return base64_encode(view('xml.DocumentXML',compact('data'))->render());

        /*
         * Array
(
    [ID] => 61
    [OperationType] => новый договор
    [InsuranceProduct] => NSL_EB
    [Insured] => 940603300487
    [Middleman] => 940603300487
    [PreviousID] => 60
    [InsuredName] => Dsaasda Ersata
    [user] => 7
    [name] => Dsaasda Ersata
    [iin] => 940603300487
    [type] => 2
    [year] => 25
    [birth] => 1994-06-03
    [sum] => 5000000.00
    [prize] => 27954.4548148148
    [residence] => 1
    [country] => kz
    [ipdl] => 0
    [passport] => rewr
    [address] => werwer
    [addressFact] => werwer
    [phone] => +7(776) 555-55-55
    [email] => ersatama@gmail.com
    [aim] => 1
)
         */
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
