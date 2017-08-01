<?php

/**
 * Created by PhpStorm.
 * User: rmukherjee
 * Date: 7/31/2017
 * Time: 1:09 PM
 */
class TestPoPromostandards extends CFormModel
{

    public $wsdlPo;
    public $wsdlOrderStatus;
    public $wsdlOsn;
    public $id;
    public $credentials;
    public $wsVersion;

    public function init()
    {
        $this->wsdlPo = "http://dsstandardtest.hitpromo.net/poService";
        $this->wsdlOrderStatus = "http://dsstandardtest.hitpromo.net/orderStatus";
        parent::init();
    }

    /**
     * @param $data
     * @param TestPoPromostandards $model
     * @return bool
     */
    public static function sendPO($data, $model)
    {
        $soapClient = new SoapClient($model->wsdlPo, array('trace' => 1));
        try {
            $orderData = $soapClient->sendPO(array(
                    'id' => $model->id,
                    'password' => $model->credentials,
                    'wsVersion' => $model->wsVersion,
                    'PO' => array(
                        'orderNumber' => $data['ponumber'],
                        'orderType' => 'CONFIGURED',
                        'orderDate' => date('Ymd'),
                        'lastModified' => date('Ymd'),
                        'orderVersion' => 1,
                        'currency' => 'USD',
                        'totalAmount' => $data['productprice'] * $data['productquantity'],
                        'standardTerms' => 'Net 45',
                        'salesChannel' => 'PROGRAM',
                        'BillTo' => array(
                            'accountName' => 'PS test',
                            'Contact' => array(
                                'attentionTo' => 'Test Customer',
                                'Address1' => '123 easy ST',
                                'city' => 'Tampa',
                                'postalCode' => '70053',
                                'Country' => 'US',
                                'comments' => '....',
                                'contactType' => '',
                                'email' => ''
                            )
                        ),
                        'SoldTo' => array(
                            'accountName' => 'PS test',
                            'Contact' => array(
                                'attentionTo' => 'Test Customer',
                                'Address1' => '123 easy ST',
                                'city' => 'Tampa',
                                'postalCode' => '70053',
                                'Country' => 'US',
                                'comments' => '....',
                                'contactType' => '',
                                'email' => ''
                            )
                        ),
                        'ShipmentArray' => array(
                            'Shipment' => array(
                                'ShipTo' => array
                                (
                                    'shipmentId' => '334343',
                                    'Name' => $data['frstname'],
                                    'Address1' => $data['shippingaddress1'],
                                    'Address2' => $data['shippingaddress2'],
                                    'City' => $data['shippingcity'],
                                    'State' => $data['shippingstate'],
                                    'Country' => $data['shippingcountry'],
                                    'PostalCode' => $data['postalcode'],
                                    'shippingCarrierServiceName' => 'UPSG',
                                    'Contact' => array(
                                        'contactType' => '',
                                        'email' => ''
                                    ),

                                ),
                                'ThirdPartyAccount' => array(
                                    'Contact' => array(
                                        'contactType' => '',
                                        'email' => ''
                                    ),
                                    'accountNumber' => '343434',
                                    'accountName' => '34343'
                                ),
                                'packingListRequired' => '',
                                'blindShip' => '',
                                'allowConsolidation' => '',
                                'CarrierService' => array(
                                    'type' => 'ada',
                                    'code' => 'UPSG'
                                )
                            )
                        ),
                        'shipExact' => true,
                        'LineItemArray' => array(
                            'LineItem' => array(
                                'lineNumber' => '100',
                                'Quantity' => array(
                                    'uom' => 'Each',
                                    'value' => $data['productquantity'],
                                ),
                                'unitPrice' => $data['productprice'],
                                'extendedPrice' => '',
                                'description' => '',
                                'allowPartialShipments' => '',
                                'requestedInHandsDate' => '2017-08-24',
                                'productID' => '7050',
                                'tolerance' => '',
                                'PartArray' => array(
                                    'Part' => array(
                                        'partId' => $data['productsku'],
                                        'partGroup' => "",
                                        'Quantity' =>  array(
                                            'value' => '',
                                            'uom' => ''
                                        ),
                                        'ShipmentLinkArray' => array(
                                            'ShipmentLink' => array(
                                                'shipmentId' => '',
                                                'Quantity' => array(
                                                    'value' => '',
                                                    'uom' => ''
                                                )
                                            ),
                                        )
                                    ),
                                ),
                                'lineType' => '',
                                'Configuration' => array(
                                    'preProductionProof' => '',
                                    'LocationArray' => array()
                                )
                            )
                        ),
                        'OrderContactArray' => array(
                            'Contact' =>
                                array(
                                    'contactType' => 'Inventory',
                                    'firstName' => $data['organization'],
                                    'lastName' => '',
                                    'phone' => $data['phone'],
                                    'email' => $data['email']
                                )
                        ),
                    ),
                )
            );
            return $orderData;
        } catch (Exception $exception) {
            Hit::log("Exception is {$exception->getMessage()}");
            return htmlentities($soapClient->__getLastRequest());
        }
    }

}