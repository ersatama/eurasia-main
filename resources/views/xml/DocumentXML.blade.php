<POLICY xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <POLICY_ID>{{$data['ID']}}</POLICY_ID>				<!-- ID : string-->
    <POLICY_DATE>{{date('d.m.Y')}}</POLICY_DATE> 			<!-- Дата заключения : date-->
    <BEG_DATE>{{date("d.m.Y", strtotime($data['start']))}}</BEG_DATE>				<!-- Дата начала действия договора страхования : date-->
    <END_DATE>{{date("d.m.Y", strtotime(date("d.m.Y", strtotime($data['start'])) . " + 365 day"))}}</END_DATE>				<!-- Дата окончания действия договора страхования : date-->
    <AMOUNT>{{$data['sum']}}</AMOUNT>                                       <!-- Страховая сумма  -->
    <PREMIUM>{{round($data['prize'], 2)}}</PREMIUM>					<!-- Сумма премии -->
    <CONTRACT_OPERATION_TYPE_ID>1</CONTRACT_OPERATION_TYPE_ID> 	<!-- Тип операции 1 : int -->
    <BAR_CODE/>
    <CURRENCIES>
        <PAYMENT_CURRENCY>KZT</PAYMENT_CURRENCY> 			<!-- Валюта платежа: string -->
        <PREMIUM_CURRENCY>KZT</PREMIUM_CURRENCY> 			<!-- Валюта премии: string -->
    </CURRENCIES>
    <CONTRACT_NUMBER>{{$data['ID']}}</CONTRACT_NUMBER> 				<!-- Номер договора Банка : string-->
    <INSURANCE_PRODUCT>
        <VALUE>NSL_EB</VALUE>  					<!-- СтраховойПродукт (NS_SB) : string-->
    </INSURANCE_PRODUCT>
    <BRANCH>
        <VALUE>Восточно-Казахстанская область</VALUE> 		<!-- Филиал : string-->
    </BRANCH>
    <INSURED>							<!-- СТРАХОВАТЕЛЬ-->
        <CLIENT xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
            <CLIENT_ID>{{$data['user']}}</CLIENT_ID>				<!-- ID клиента : string-->
            <IIN>{{$data['iin']}}</IIN>					<!-- ИИН : string-->
            <PERSON_TYPE>1</PERSON_TYPE>				<!-- 0:Юр , 1:ФизЛицо : int-->
            <LAST_NAME>{{$data['surname']}}</LAST_NAME>
            <FIRST_NAME>{{$data['name']}}</FIRST_NAME>
            <MIDDLE_NAME>{{$data['lastname']}}</MIDDLE_NAME>
            <DOCUMENT_TYPE_ID>{{$data['doctype']}}</DOCUMENT_TYPE_ID>                   	     <!-- 1:УЛ , 2 :Пасспорт : Int-->
            <DOCUMENT_NUMBER>{{$data['number']}}</DOCUMENT_NUMBER>                           <!-- Номер документа    : string-->
            <DOCUMENT_GIVED_BY>{{$data['givenBy']}}</DOCUMENT_GIVED_BY>  <!-- Кем выдан          : string-->
            <DOCUMENT_GIVED_DATE>{{date("d.m.Y", strtotime($data['givenDate']))}}</DOCUMENT_GIVED_DATE>
            <DOCUMENT_EXP_DATE>{{date("d.m.Y", strtotime($data['givenDate']))}}</DOCUMENT_EXP_DATE>
            <BORN>{{date('d.m.Y', strtotime(join('', [Auth::user()->iin[2],Auth::user()->iin[3],'/',Auth::user()->iin[4],Auth::user()->iin[5],'/',Auth::user()->iin[0],Auth::user()->iin[1]])))}}</BORN>
            <SEX>{{$data['sex']}}</SEX>                                                            <!-- 1:М , 2:Ж : int-->
            <ADDRESS>{{$data['addressFact']}}</ADDRESS>
            <PHONE>{{$data['phone']}}</PHONE>
            <JURIDICAL_ADDRESS>{{$data['address']}}</JURIDICAL_ADDRESS>
            <IPDL>{{$data['ipdl']}}</IPDL>							      <!--ИПДЛ 1:Нет , 2:Да : int-->
            <BENEFICIAL_OWNER/>
            <FOUNDER/>
            <COUNTRY>
                <VALUE>Республика Казахстан</VALUE>                                   <!--Страна резиденства: string-->
                <ALFA3_CODE>KAZ</ALFA3_CODE>                                          <!--Код страны резиденства: string-->
            </COUNTRY>
            <ACTIVITY_KIND>
                <VALUE>Физические лица</VALUE>  		                      <!--Вид деятельности: string-->
            </ACTIVITY_KIND>
            <ECONOMICS_SECTOR>
                <ID>10</ID>							      <!--Код сектора экономики: int-->
                <VALUE></VALUE>
            </ECONOMICS_SECTOR>
        </CLIENT>
    </INSURED>
    <PAYMENT_ORDER_TYPE>                                              <!--Порядок оплат-->
        <ID>1</ID>								      <!--int-->
        <VALUE>Единовременно</VALUE>					      <!--string-->
    </PAYMENT_ORDER_TYPE>
    <SIGNORY>   								      <!--ПОДПИСАНТ-->
        <CLIENT xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
            <CLIENT_ID>{{$data['user']}}</CLIENT_ID>
            <ESBD_ID></ESBD_ID>
            <IIN>{{$data['iin']}}</IIN>
            <PERSON_TYPE>1</PERSON_TYPE>
            <LAST_NAME>{{$data['surname']}}</LAST_NAME>
            <FIRST_NAME>{{$data['name']}}</FIRST_NAME>
            <MIDDLE_NAME>{{$data['lastname']}}</MIDDLE_NAME>
            <DOCUMENT_TYPE_ID>{{$data['doctype']}}</DOCUMENT_TYPE_ID>                   	     <!-- 1:УЛ , 2 :Пасспорт : Int-->
            <DOCUMENT_NUMBER>{{$data['number']}}</DOCUMENT_NUMBER>                           <!-- Номер документа    : string-->
            <DOCUMENT_GIVED_BY>{{$data['givenBy']}}</DOCUMENT_GIVED_BY>  <!-- Кем выдан          : string-->
            <DOCUMENT_GIVED_DATE>{{date("d.m.Y", strtotime($data['givenDate']))}}</DOCUMENT_GIVED_DATE>
            <DOCUMENT_EXP_DATE>{{date("d.m.Y", strtotime($data['givenDate']))}}</DOCUMENT_EXP_DATE>
            <BORN>{{date('d.m.Y', strtotime(join('', [Auth::user()->iin[2],Auth::user()->iin[3],'/',Auth::user()->iin[4],Auth::user()->iin[5],'/',Auth::user()->iin[0],Auth::user()->iin[1]])))}}</BORN>
            <SEX>{{$data['sex']}}</SEX>
            <BENEFICIAL_OWNER/>
            <FOUNDER/>
            <COUNTRY>
                <VALUE>РЕСПУБЛИКА КАЗАХСТАН</VALUE>
                <ALFA3_CODE>KZ</ALFA3_CODE>
            </COUNTRY>
            <ACTIVITY_KIND>
                <ID>250</ID>
                <VALUE>Физические лица</VALUE>
            </ACTIVITY_KIND>
            <ECONOMICS_SECTOR>
                <ID>10</ID>
                <VALUE>9 Домашние хозяйства</VALUE>
            </ECONOMICS_SECTOR>
        </CLIENT>
    </SIGNORY>
    <MIDDLEMAN>                                                            <!--АГЕНТ-->
        <CLIENT xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
            <CLIENT_ID>5767627</CLIENT_ID>
            <ESBD_ID></ESBD_ID>
            <RNN>214351453443</RNN>
            <IIN>412412341212</IIN>
            <PERSON_TYPE>0</PERSON_TYPE>
            <JURIDICAL_PERSON_NAME>АО "БАНК"</JURIDICAL_PERSON_NAME>
        </CLIENT>
    </MIDDLEMAN>
    <PAYMENT_TYPE>                                             		<!--Тип оплаты-->
        <ID>2</ID>
        <VALUE>Перечислением</VALUE>
    </PAYMENT_TYPE>
    <SCHEDULED_PAYMENTS>                                                  <!--График оплат-->
        <PAYMENT>
            <COUNTER>1</COUNTER>
            <DATE>16.09.2019</DATE>
            <AMOUNT>10.00</AMOUNT>
        </PAYMENT>
    </SCHEDULED_PAYMENTS>
    <VUE_POINT>
        <VALUE>Южно-Казахстанская область</VALUE>                      <!--Место заключения договора :string-->
    </VUE_POINT>
    <OBJECT_PLACE>
        <ID>7</ID>							       <!--Место объекта страхования : int-->
        <VALUE></VALUE>
    </OBJECT_PLACE>
    <SCHEDULED_PAYMENT_LIST/>
    <BENEFICIARIES>                                                     <!--ВЫГОДОПРИОБРЕТАТЕЛЬ-->
        <BENEFICIARY>
            <COUNTER>1</COUNTER>					       <!--Количество выгодоприобретателей :int-->
            <VALUE>
                <CLIENT xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
                    <CLIENT_ID>{{$data['user']}}</CLIENT_ID>				<!-- ID клиента : string-->
                    <IIN>{{$data['iin']}}</IIN>					<!-- ИИН : string-->
                    <PERSON_TYPE>1</PERSON_TYPE>				<!-- 0:Юр , 1:ФизЛицо : int-->
                    <LAST_NAME>{{$data['surname']}}</LAST_NAME>
                    <FIRST_NAME>{{$data['name']}}</FIRST_NAME>
                    <MIDDLE_NAME>{{$data['lastname']}}</MIDDLE_NAME>
                    <DOCUMENT_TYPE_ID>{{$data['doctype']}}</DOCUMENT_TYPE_ID>                   	     <!-- 1:УЛ , 2 :Пасспорт : Int-->
                    <DOCUMENT_NUMBER>{{$data['number']}}</DOCUMENT_NUMBER>                           <!-- Номер документа    : string-->
                    <DOCUMENT_GIVED_BY>{{$data['givenBy']}}</DOCUMENT_GIVED_BY>  <!-- Кем выдан          : string-->
                    <DOCUMENT_GIVED_DATE>{{date("d.m.Y", strtotime($data['givenDate']))}}</DOCUMENT_GIVED_DATE>
                    <DOCUMENT_EXP_DATE>{{date("d.m.Y", strtotime($data['givenDate']))}}</DOCUMENT_EXP_DATE>
                    <BORN>{{date('d.m.Y', strtotime(join('', [Auth::user()->iin[2],Auth::user()->iin[3],'/',Auth::user()->iin[4],Auth::user()->iin[5],'/',Auth::user()->iin[0],Auth::user()->iin[1]])))}}</BORN>
                    <SEX>{{$data['sex']}}</SEX>
                    <ADDRESS>{{$data['addressFact']}}</ADDRESS>
                    <PHONE>{{$data['phone']}}</PHONE>
                    <JURIDICAL_ADDRESS>{{$data['address']}}</JURIDICAL_ADDRESS>
                    <IPDL>1</IPDL>
                    <BENEFICIAL_OWNER/>
                    <FOUNDER/>
                    <COUNTRY>
                        <VALUE>KAZ</VALUE>
                        <ALFA3_CODE>KAZ</ALFA3_CODE>
                    </COUNTRY>
                    <ACTIVITY_KIND>
                        <VALUE>Физические лица</VALUE>
                    </ACTIVITY_KIND>
                    <ECONOMICS_SECTOR>
                        <ID>10</ID>
                        <VALUE/>
                    </ECONOMICS_SECTOR>
                </CLIENT>
            </VALUE>
        </BENEFICIARY>
    </BENEFICIARIES>
    <INSURED_PERSON_LIST>
        <INSURED_PERSON>                               <!--ЗАСТРАХОВАННЫЕ-->
            <CLIENT xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema">
                <CLIENT_ID>{{$data['user']}}</CLIENT_ID>
                <IIN>{{$data['iin']}}</IIN>
                <PERSON_TYPE>1</PERSON_TYPE>
                <LAST_NAME>{{$data['surname']}}</LAST_NAME>
                <FIRST_NAME>{{$data['name']}}</FIRST_NAME>
                <MIDDLE_NAME>{{$data['lastname']}}</MIDDLE_NAME>
                <DOCUMENT_TYPE_ID>{{$data['doctype']}}</DOCUMENT_TYPE_ID>                   	     <!-- 1:УЛ , 2 :Пасспорт : Int-->
                <DOCUMENT_NUMBER>{{$data['number']}}</DOCUMENT_NUMBER>                           <!-- Номер документа    : string-->
                <DOCUMENT_GIVED_BY>{{$data['givenBy']}}</DOCUMENT_GIVED_BY>  <!-- Кем выдан          : string-->
                <DOCUMENT_GIVED_DATE>{{date("d.m.Y", strtotime($data['givenDate']))}}</DOCUMENT_GIVED_DATE>
                <DOCUMENT_EXP_DATE>{{date("d.m.Y", strtotime($data['givenDate']))}}</DOCUMENT_EXP_DATE>
                <BORN>{{date('d.m.Y', strtotime(join('', [Auth::user()->iin[2],Auth::user()->iin[3],'/',Auth::user()->iin[4],Auth::user()->iin[5],'/',Auth::user()->iin[0],Auth::user()->iin[1]])))}}</BORN>
                <SEX>{{$data['sex']}}</SEX>
                <ADDRESS>{{$data['addressFact']}}</ADDRESS>
                <PHONE>{{$data['phone']}}</PHONE>
                <JURIDICAL_ADDRESS>{{$data['addressFact']}}</JURIDICAL_ADDRESS>
                <IPDL>{{($data['ipdl'])}}</IPDL>
                <BENEFICIAL_OWNER/>
                <FOUNDER/>
                <COUNTRY>
                    <VALUE>KAZ</VALUE>
                    <ALFA3_CODE>KAZ</ALFA3_CODE>
                </COUNTRY>
                <ACTIVITY_KIND>
                    <VALUE>Физические лица</VALUE>
                </ACTIVITY_KIND>
                <ECONOMICS_SECTOR>
                    <ID>10</ID>
                    <VALUE></VALUE>
                </ECONOMICS_SECTOR>
            </CLIENT>
        </INSURED_PERSON>
    </INSURED_PERSON_LIST>
</POLICY>
