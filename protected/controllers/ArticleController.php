<?php

class ArticleController extends WebsiteController {

   public function actions() {
        return array(
            // page action renders "static" pages stored under 'protectediews/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

}