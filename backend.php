<?php
	include_once __DIR__.'/plot.php';
	$plot = new Plot;
	
	if(isset($_POST['action'])){
		switch($_POST['action']){
			case 1:
				if(isset($_POST['fname']) 
					&& isset($_POST['mname'])
					&& isset($_POST['lname'])
					&& isset($_POST['khatiyan'])
					&& isset($_POST['dag'])
					&& isset($_POST['plot'])
					&& isset($_POST['area'])
					&& isset($_POST['area_under'])
					&& isset($_POST['tax']))
				{
					if($_POST['fname'] 			== "undefined"
						|| $_POST['lname'] 		== "undefined"
						|| $_POST['khatiyan'] 	== "undefined"
						|| $_POST['dag'] 		== "undefined"
						|| $_POST['plot'] 		== "undefined"
						|| $_POST['area'] 		== "undefined"
						|| $_POST['area_under'] == "undefined"
						|| $_POST['tax'] 		== "NaN")
					{
						echo json_encode(array("status"=>EMPTY_PARAMS,"message"=>"Fields must not be empty"));
					}
					else{
						$plot->setFirstName(($_POST['fname']));
						$plot->setMidName(($_POST['mname']));
						$plot->setLastName(($_POST['lname']));
						$plot->setKhatiyan(($_POST['khatiyan']));
						$plot->setDag(($_POST['dag']));
						$plot->setPlot(($_POST['plot']));
						$plot->setArea(($_POST['area']));
						$plot->setAreaUnder(($_POST['area_under']));
						$plot->setTax(($_POST['tax']));
						echo $plot->insertData();
					}
				}
				else
					echo json_encode(array('status'=>INVALID_PARAMS,'message'=>'Invalid Parameters'));
				break;
		}
	}
?>
