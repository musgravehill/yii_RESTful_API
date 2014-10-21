<?php

class Api_v1_productsController extends Controller {

    public function actionIndex() {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Content-type: application/json');
        $this->layout = false;
        $result = 'false';   

		if ($isUnauthorizedSuccess) { //TODO sig request by token
			switch ($_SERVER['REQUEST_METHOD']) {
				case 'GET':					
					$result = Product::get($_REQUEST);
					break;
				case 'PUT':
					$result = Product::update($_REQUEST);
					break;
				case 'POST':
					$result = Product::create($_REQUEST);
					break;
				case 'DELETE':
					$result = Product::delete($_REQUEST);
					break;
			}             
        } else {
            header("HTTP/1.0 401 Unauthorized");
        }
        echo CJSON::encode($result);
        Yii::app()->end();
    }
	

}