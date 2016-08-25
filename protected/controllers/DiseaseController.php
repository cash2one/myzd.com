<?php

class DiseaseController extends WebsiteController {

    public function actionView($id) {
        $apiService = new ApiViewDisease($id);
        $data = $apiService->loadApiViewData();
        if ($data->status=="no") {
            $this->throwPageNotFoundException();
        }
        $this->render('view', array(
            'data' => $data
        ));
    }

    public function actionIndex() {
        $this->render('index');
    }

}
