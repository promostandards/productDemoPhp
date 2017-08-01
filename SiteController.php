<?php

class SiteController extends Controller {


    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the register page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
                'backend' => 'gd',
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function actionTestProductData() {
        $model = new TestProductData();
        $this->pageTitle = Yii::app()->name . ' - Test Product Data Services(Promostandards)';
        if (isset($_POST['TestProductData'])) {
            $model->attributes = $_POST['TestProductData'];
            if ($model->validate()) {
                $productData = TestProductData::fetchProductData($model);
                $productMedia = TestProductData::getProductMedia($model);
                $inv = TestProductData::getProductInventory($model);
                $pricing = TestProductData::getProductPricing($model);
                if ($productData) {
                    $this->render('_displayProductData', array(
                            'productData' => $productData,
                            'productMedia' => $productMedia,
                            'inv' => $inv,
                            'pricing' => $pricing
                        )
                    );
                    return;
                }
            }
        }
        $this->render('testProductData', array('model' =>  $model, 'id' => 'XXXXX', 'credentials' => 'XXXXXX'));
    }

    public function actionSubmitTestOrder($productSku, $price, $quantity) {
        $model = new TestPoPromostandards();
        $this->pageTitle = Yii::app()->name . ' - Test Submitting Orders(Promostandards)';
        $model->id = "XXXXXX";
        $model->credentials = "XXXXXX";
        if (isset($_POST['yt0']) && $_POST['yt0'] == 'Submit Order') {
            $order = TestPoPromostandards::sendPO($_POST, $model);
            Hit::log(CVarDumper::dumpAsString($order));
            $this->render('orderStatusDisplay', array('order' => $order, 'poNumber' => $_POST['ponumber']));
            return;
        }
        $this->render('submitTestOrderForm', array('model' => $model));
    }

}