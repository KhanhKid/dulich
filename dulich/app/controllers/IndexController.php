<?php

class IndexController extends ControllerBase
{

    public function indexAction(){
    	$tour = new Tour();

    	$tourtrongnuoc = $tour->find(array(
		    "type = 1",
		    "order" => "timestamp",
		    "limit" => 3
		));
    	$tourngoainuoc = $tour->find(array(
		    "type = 2",
		    "order" => "timestamp",
		    "limit" => 3
		));
    	$tourkhuyenmai = $tour->find(array(
		    "type = 3",
		    "order" => "timestamp",
		    "limit" => 3
		));
    	$tourfree = $tour->find(array(
		    "type = 4",
		    "order" => "timestamp",
		    "limit" => 3
		));

    	// Get VISA
    	$visa = new Visa();
    	$visa_f = $visa->findFirst(array('order' => 'timestamp desc'));
    	
		$visa_all = $visa->find(array(
		    "order" => "timestamp DESC",
		    "limit" => 4
		));

        // Get NEWS
    	$news = new News();
    	$news_f = $news->findFirst(array('order' => 'timestamp desc'));
    	
		$news_all = $news->find(array(
		    "order" => "timestamp DESC",
		    "limit" => 9
		)); 

		// Get DAIRY
    	$dairy = new Dairy();
    	$dairy_f = $dairy->findFirst(array('order' => 'timestamp desc'));
    	
		$dairy_all = $dairy->find(array(
		    "order" => "timestamp DESC",
		    "limit" => 4
		));
    	$this->view->setVars(array(
            'tourtrongnuoc' => $tourtrongnuoc,
            'tourngoainuoc' => $tourngoainuoc,
            'tourkhuyenmai' => $tourkhuyenmai,
            'tourfree' => $tourfree,
            'visa_f' => $visa_f,
            'visa_all' => $visa_all,
            'news_f' => $news_f,
            'news_all' => $news_all,
            'dairy_f' => $dairy_f,
            'dairy_all' => $dairy_all
        ));
    }
    public function gioithieuAction(){

    }
    public function tourtrongnuocAction(){
        $tour = new Tour();

        $tourtrongnuoc = $tour->find(array(
            "type = 1",
            "order" => "timestamp",
            "limit" => 3
        ));
        $tour_suggest = $tour->find(array(
            "type = 1",
            "order" => "timestamp",
            "limit" => 5
        ));
        $this->view->setVars(array(
            'tourtrongnuoc' => $tourtrongnuoc,
            'tour_suggest' => $tour_suggest
        ));
    }    
    public function tourngoainuocAction(){
        $tour = new Tour();

        $tourngoainuoc = $tour->find(array(
            "type = 2",
            "order" => "timestamp",
            "limit" => 3
        ));

        $tour_suggest = $tour->find(array(
            "type = 2",
            "order" => "timestamp",
            "link" => 5,
        ));

        $this->view->setVars(array(
            'tourngoainuoc' => $tourngoainuoc,
            'tour_suggest'=> $tour_suggest
        ));
    }
    public function tourfreeAction(){
        $tour = new Tour();

        $tourfree = $tour->find(array(
            "type = 4",
            "order" => "timestamp",
            "limit" => 3
        ));

        $tour_suggest = $tour->find(array(
            "type = 4",
            "order" => "timestamp",
            "link" => 5,
        ));

        $this->view->setVars(array(
            'tourfree' => $tourfree,
            'tour_suggest'=> $tour_suggest
        ));
    }
    public function tourkhuyenmaiAction(){
        $tour = new Tour();

        $tourkhuyenmai = $tour->find(array(
            "type = 3",
            "order" => "timestamp",
            "limit" => 3
        ));

        $tour_suggest = $tour->find(array(
            "type = 3",
            "order" => "timestamp",
            "link" => 5,
        ));

        $this->view->setVars(array(
            'tourkhuyenmai' => $tourkhuyenmai,
            'tour_suggest'=> $tour_suggest
        ));
    }
    public function thutucvisaAction(){
        
    }

}

