<?php
	include_once __DIR__.'/dbconfig.php';
	
	// A class representing a plot of land
	class Plot{
		// Attributes
		private $fname, $mname, $lname, $khatiyan, $dag, $plot, $area, $area_under, $tax;

		// Setter methods
		public function setFirstName($fname){
			$this->fname = $fname;
		}
		public function setMidName($mname){
			$this->mname = $mname;
		}
		public function setLastName($lname){
			$this->lname = $lname;
		}
		public function setKhatiyan($khatiyan){
			$this->khatiyan = $khatiyan;
		}
		public function setDag($dag){
			$this->dag = $dag;
		}
		public function setPlot($plot){
			$this->plot = $plot;
		}
		public function setArea($area){
			$this->area = $area;
		}
		public function setAreaUnder($area_under){
			$this->area_under = $area_under;
		}
		public function setTax($tax){
			$this->tax = $tax;
		}

		// Checks if the data is already present in the database or not
		private function isAlreadyPresent($document){
			$cursor = $GLOBALS['con']->cms->plot_list->find($document);
			$count = 0;
			foreach($cursor as $data){
				$count += 1;
			}
			return boolval($count);
		}

		// Insert data to database
		public function insertData(){
			// Connect to MongoDB database; if not created, it will be created
			$db = $GLOBALS['con']->cms;

			$name = ($this->mname == "undefined") ? ($this->fname." ". $this->lname) : ($this->fname." ".$this->mname." ".$this->lname);
			// Document to insert
			$document = [
				"owner_name"	=> 	$name,
				"khatiyan"		=> 	$this->khatiyan,
				"dag"			=> 	$this->dag,
				"plot"			=> 	$this->plot,
				"area"			=> 	$this->area,
				"area_under"	=> 	$this->area_under,
				"tax"			=> 	$this->tax
			];
			if($this->isAlreadyPresent($document))
				return json_encode(array('status'=>DUPLICATE,'message'=>"Data already inserted"));
				
			$insertResult = $db->plot_list->insertOne($document);
			if($insertResult->getInsertedCount())
				return json_encode(array("status"=>SUCCESS,"message"=>"Successfully inserted data"));
			else
				return json_encode(array("status"=>FAILURE,"message"=>"Failed to insert data"));
		}
	}
?>
