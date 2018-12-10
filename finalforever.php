<?php
//index.php
error_reporting(0);
$FIRNO =  $PoliceStation =  $Time = $Date = $NameofthePlace = $District = $State = $TypeofArea = $AccidentType = $Nooffatalties = $Noofpersonsgrievouslyinjured = $Noofpersonsminorinjured = $PropertyDamage = $NoofMotorizedVehiclesinvolved = $NoofNonMotorizedVehiclesinvolved = $Noofpedestriansinvolved = $Weather = $HitandRun = $number = $Typeofcollision1 = $RoadFeature1 ="NULL";
$error = $filename= '';
$RoadName = $RoadNumber = $landmark = $RoadChainage = $latclicked = $longclicked = $Lanes = $SurfaceCondition = $RoadTypea = $RoadTypeb = $PhysicalDivider = $OngoingRoadWorksConstruction = $SpeedLimit = $VisibiltyattheTimeofAccident = $AccidentSpot = $RoadJunction = $TypeofTrafficControl = $PedestrianInvolved = $a331 = $a332 = $a333 = $a334 = $a335 = $a336 = $a337 = $a341 = $a342 = $a343 = $a344 = $a345 = $a346 = $a347 = $a351 = $a352 = $a353 = $a354 = $a355 = $a356 = $a357 = $a361 = $a362 = $a363 = $a364 = $a365 = $a366 = $a367 = $a37A1 = $a37A2 = $a37A3 = $a37A4 = $a37A5 = $a37A6 = $a37A7 = $a37B1 = $a37B2 = $a37B3 = $a37B4 = $a37B5 = $a37B6 = $a37B7 = $a381 = $a382 = $a383 = $a384 = $a385 = $a386 = $a387 = $a391 = $a395 = $a392 = $a393 = $a394 = $a396 = $a397 =$a401 = $a402 = $a403 = $a404 = $a405 = $a406 = $a407 = $a411 = $a412 = $a413 = $a414 = $a415 = $a416 = $a417 = $a421 = $a422 = $a423 = $a424 = $a425 = $a426 = $a427 = $a431 = $a432 = $a433 = $a434 = $a435 = $a436 = $a437 = $a441 = $a442 = $a443 = $a444 = $a445 = $a446 = $a447 = $a451 = $a452 = $a453 = $a454 = $a455 = $a456 = $a457 = $a461 = $a462 = $a463 = $a464 = $a465 = $a466 = $a467 = $a471 = $a472 = $a473 = $a474 = $a475 = $a476 = $a477 = $a481 = $a482 = $a483 = $a484 = $a485 = $a486 = $a487 = $a491 = $a492 = $a493 = $a494 = $a495 = $a496 = $a497 = $a501 = $a502 = $a503 = $a504 = $a505 = $a506 = $a507 = $a511 = $a512 = $a513 = $a514 = $a515 = $a516 = $a517 = $a521 = $a522 = $a523 = $a524 = $a525 = $a526 = $a527 = $a531 = $a532 = $a533 = $a534 = $a535 = $a536 = $a537 = $a541 = $a542 = $a543 = $a544 = $a545 = $a546 = $a547 = $a551 = $a552 = $a553 = $a554 = $a555 = $a556 = $a557= $remarks= $othersOne= $total= $LocNam ="0";
function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}





$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



 session_start();


            $count=0;
            foreach ($_FILES['file']['name'] as $filename)
            {
                $temp=$target;
                $tmp=$_FILES['file']['tmp_name'][$count];
                $count=$count + 1;
                $temp=$temp.basename($filename);
                move_uploaded_file($tmp,"uploads/");
                $temp='';
                $tmp='';
            }


if(isset($_POST["submit"]))

{







	if(empty($_POST["FIRNO"]))
	{
		$error .= '<p><label class="text-danger" ><b>Please Enter the FIR NO</b></label></p>';
	}
	else
	{
		$FIRNO = clean_text($_POST["FIRNO"]);
		$error .= '';
	}

	if(empty($_POST["PoliceStation"]))
	{
		$error .= '<p><label class="text-danger"><b>PoliceStation is required</b></label></p>';
	}
	else
	{
		$PoliceStation = clean_text($_POST["PoliceStation"]);
		$error .= '';

	}
	$NameofthePlace = clean_text($_POST["NameofthePlace"]);
	$District = clean_text($_POST["District"]);
	$State  = ($_POST["State"]);
	$AccidentType = $_POST["AccidentType"];
	$TypeofArea = ($_POST["TypeofArea"]);
	$Nooffatalties = clean_text($_POST["Nooffatalties"]);
	$Noofpersonsgrievouslyinjured = clean_text($_POST["Noofpersonsgrievouslyinjured"]);
	$Noofpersonsminorinjured = clean_text($_POST["Noofpersonsminorinjured"]);
	$PropertyDamage = clean_text($_POST["PropertyDamage"]);
	$NoofMotorizedVehiclesinvolved = clean_text($_POST["NoofMotorizedVehiclesinvolved"]);
	$NoofNonMotorizedVehiclesinvolved = clean_text($_POST["NoofNonMotorizedVehiclesinvolved"]);
	$Noofpedestriansinvolved  = clean_text($_POST["Noofpedestriansinvolved"]);
	$Weather = ($_POST["Weather"]);
	$HitandRun = ($_POST["HitandRun"]);
	if(isset($_POST['Typeofcollision'])) {
    $Typeofcollision[]=$_POST['Typeofcollision'];//print all checked elements
    }
	if(isset($_POST['RoadFeature'])) {
   $RoadFeature[]=$_POST['RoadFeature'];//print all checked elements
    }
	$Time= $_POST["Time"];
	$Date=$_POST["Date"];
	$RoadNumber = clean_text($_POST["RoadNumber"]);
	$RoadName = clean_text($_POST["RoadName"]);
	$landmark = clean_text($_POST["landmark"]);
	$RoadChainage = clean_text($_POST["RoadChainage"]);
	$latclicked1 = clean_text($_POST["latclicked1"]);
	$longclicked1 = clean_text($_POST["longclicked1"]);
	$Lanes = clean_text($_POST["Lanes"]);
	$SurfaceCondition = clean_text($_POST["SurfaceCondition"]);
	$RoadTypea = clean_text($_POST["RoadTypea"]);
	$RoadTypeb = clean_text($_POST["RoadTypeb"]);
	$PhysicalDivider = clean_text($_POST["PhysicalDivider"]);
	$OngoingRoadWorksConstruction = clean_text($_POST["OngoingRoadWorksConstruction"]);
	$SpeedLimit = clean_text($_POST["SpeedLimit"]);
	$VisibiltyattheTimeofAccident = clean_text($_POST["VisibiltyattheTimeofAccident"]);
	$AccidentSpot = clean_text($_POST["AccidentSpot"]);
	$RoadJunction = clean_text($_POST["RoadJunction"]);
	$TypeofTrafficControl = clean_text($_POST["TypeofTrafficControl"]);
	$PedestrianInvolved = clean_text($_POST["PedestrianInvolved"]);



	$a331 = clean_text($_POST["a331"]);
	$a332 = clean_text($_POST["a332"]);
	$a333 = clean_text($_POST["a333"]);
	$a334 = clean_text($_POST["a334"]);
	$a335 = clean_text($_POST["a335"]);
	$a336 = clean_text($_POST["a336"]);
	$a337 = clean_text($_POST["a337"]);


	if(empty($_POST["a341"]))
	{
		$a341 = "0";
	}
	else
	{
		$a341 = clean_text($_POST["a341"]);

	}


	if(empty($_POST["a342"]))
	{
		$a342 = "0";
	}
	else
	{
		$a342 = clean_text($_POST["a342"]);

	}


	if(empty($_POST["a343"]))
	{
		$a343 = "0";
	}
	else
	{
		$a343 = clean_text($_POST["a343"]);

	}


	if(empty($_POST["a344"]))
	{
		$a344 = "0";
	}
	else
	{
		$a344 = clean_text($_POST["a344"]);

	}


	if(empty($_POST["a345"]))
	{
		$a345 = "0";
	}
	else
	{
		$a345 = clean_text($_POST["a345"]);

	}


	if(empty($_POST["a346"]))
	{
		$a346 = "0";
	}
	else
	{
		$a346 = clean_text($_POST["a346"]);

	}


	if(empty($_POST["a347"]))
	{
		$a347 = "0";
	}
	else
	{
		$a347 = clean_text($_POST["a347"]);

	}

	if(empty($_POST["a351"]))
	{
		$a351 = "0";
	}
	else
	{
		$a351 = clean_text($_POST["a351"]);

	}

	if(empty($_POST["a352"]))
	{
		$a352 = "0";
	}
	else
	{
		$a352 = clean_text($_POST["a352"]);

	}

	if(empty($_POST["a353"]))
	{
		$a353 = "0";
	}
	else
	{
		$a353 = clean_text($_POST["a353"]);

	}

	if(empty($_POST["a354"]))
	{
		$a354 = "0";
	}
	else
	{
		$a354 = clean_text($_POST["a354"]);

	}

	if(empty($_POST["a355"]))
	{
		$a355 = "0";
	}
	else
	{
		$a355 = clean_text($_POST["a355"]);

	}

	if(empty($_POST["a356"]))
	{
		$a356 = "0";
	}
	else
	{
		$a356 = clean_text($_POST["a356"]);

	}

	if(empty($_POST["a357"]))
	{
		$a357 = "0";
	}
	else
	{
		$a357 = clean_text($_POST["a357"]);

	}


	if(empty($_POST["a361"]))
	{
		$a361 = "0";
	}
	else
	{
		$a361 = clean_text($_POST["a361"]);

	}

	if(empty($_POST["a362"]))
	{
		$a362 = "0";
	}
	else
	{
		$a362 = clean_text($_POST["a362"]);

	}

	if(empty($_POST["a363"]))
	{
		$a363 = "0";
	}
	else
	{
		$a363 = clean_text($_POST["a363"]);

	}

	if(empty($_POST["a364"]))
	{
		$a364 = "0";
	}
	else
	{
		$a364 = clean_text($_POST["a364"]);

	}

	if(empty($_POST["a365"]))
	{
		$a365 = "0";
	}
	else
	{
		$a365 = clean_text($_POST["a365"]);

	}

	if(empty($_POST["a366"]))
	{
		$a366 = "0";
	}
	else
	{
		$a366 = clean_text($_POST["a366"]);

	}

	if(empty($_POST["a367"]))
	{
		$a367 = "0";
	}
	else
	{
		$a367 = clean_text($_POST["a367"]);

	}


	if(empty($_POST["a37A1"]))
	{
		$a37A1 = "0";
	}
	else
	{
		$a37A1 = clean_text($_POST["a37A1"]);

	}

	if(empty($_POST["a37A2"]))
	{
		$a37A2 = "0";
	}
	else
	{
		$a37A2 = clean_text($_POST["a37A2"]);

	}

	if(empty($_POST["a37A3"]))
	{
		$a37A3 = "0";
	}
	else
	{
		$a37A3 = clean_text($_POST["a37A3"]);

	}

	if(empty($_POST["a37A4"]))
	{
		$a37A4 = "0";
	}
	else
	{
		$a37A4 = clean_text($_POST["a37A4"]);

	}

	if(empty($_POST["a37A5"]))
	{
		$a37A5 = "0";
	}
	else
	{
		$a37A5 = clean_text($_POST["a37A5"]);

	}

	if(empty($_POST["a37A6"]))
	{
		$a37A6 = "0";
	}
	else
	{
		$a37A6 = clean_text($_POST["a37A6"]);

	}

	if(empty($_POST["a37A7"]))
	{
		$a37A7 = "0";
	}
	else
	{
		$a37A7 = clean_text($_POST["a37A7"]);

	}

	if(empty($_POST["a37B1"]))
	{
		$a37B1 = "0";
	}
	else
	{
		$a37B1 = clean_text($_POST["a37B1"]);

	}

	if(empty($_POST["a37B2"]))
	{
		$a37B2 = "0";
	}
	else
	{
		$a37B2 = clean_text($_POST["a37B2"]);

	}

	if(empty($_POST["a37B3"]))
	{
		$a37B3 = "0";
	}
	else
	{
		$a37B3 = clean_text($_POST["a37B3"]);

	}

	if(empty($_POST["a37B4"]))
	{
		$a37B4 = "0";
	}
	else
	{
		$a37B4 = clean_text($_POST["a37B4"]);

	}

	if(empty($_POST["a37B5"]))
	{
		$a37B5 = "0";
	}
	else
	{
		$a37B5 = clean_text($_POST["a37B5"]);

	}

	if(empty($_POST["a37B6"]))
	{
		$a37B6 = "0";
	}
	else
	{
		$a37B6 = clean_text($_POST["a37B6"]);

	}

	if(empty($_POST["a37B7"]))
	{
		$a37B7 = "0";
	}
	else
	{
		$a37B7 = clean_text($_POST["a37B7"]);

	}

	if(empty($_POST["a381"]))
	{
		$a381 = "0";
	}
	else
	{
		$a381 = clean_text($_POST["a381"]);

	}

	if(empty($_POST["a382"]))
	{
		$a382 = "0";
	}
	else
	{
		$a382 = clean_text($_POST["a382"]);

	}

	if(empty($_POST["a383"]))
	{
		$a383 = "0";
	}
	else
	{
		$a383 = clean_text($_POST["a383"]);

	}

	if(empty($_POST["a384"]))
	{
		$a384 = "0";
	}
	else
	{
		$a384 = clean_text($_POST["a384"]);

	}

	if(empty($_POST["a385"]))
	{
		$a385 = "0";
	}
	else
	{
		$a385 = clean_text($_POST["a385"]);

	}

	if(empty($_POST["a386"]))
	{
		$a386 = "0";
	}
	else
	{
		$a386 = clean_text($_POST["a386"]);

	}

	if(empty($_POST["a387"]))
	{
		$a387 = "0";
	}
	else
	{
		$a387 = clean_text($_POST["a387"]);

	}

	if(empty($_POST["a391"]))
	{
		$a391 = "0";
	}
	else
	{
		$a391 = clean_text($_POST["a391"]);

	}

	if(empty($_POST["a392"]))
	{
		$a392 = "0";
	}
	else
	{
		$a392 = clean_text($_POST["a392"]);

	}

	if(empty($_POST["a393"]))
	{
		$a393 = "0";
	}
	else
	{
		$a393 = clean_text($_POST["a393"]);

	}

	if(empty($_POST["a394"]))
	{
		$a394 = "0";
	}
	else
	{
		$a394 = clean_text($_POST["a394"]);

	}

	if(empty($_POST["a395"]))
	{
		$a395 = "0";
	}
	else
	{
		$a395 = clean_text($_POST["a395"]);

	}

	if(empty($_POST["a396"]))
	{
		$a396 = "0";
	}
	else
	{
		$a396 = clean_text($_POST["a396"]);

	}

	if(empty($_POST["a397"]))
	{
		$a397 = "0";
	}
	else
	{
		$a397 = clean_text($_POST["a397"]);

	}

	if(empty($_POST["a401"]))
	{
		$a401 = "0";
	}
	else
	{
		$a401 = clean_text($_POST["a401"]);

	}

	if(empty($_POST["a402"]))
	{
		$a402 = "0";
	}
	else
	{
		$a402 = clean_text($_POST["a402"]);

	}

	if(empty($_POST["a403"]))
	{
		$a403 = "0";
	}
	else
	{
		$a403 = clean_text($_POST["a403"]);

	}

	if(empty($_POST["a404"]))
	{
		$a404 = "0";
	}
	else
	{
		$a404 = clean_text($_POST["a404"]);

	}

	if(empty($_POST["a405"]))
	{
		$a405 = "0";
	}
	else
	{
		$a405 = clean_text($_POST["a405"]);

	}

	if(empty($_POST["a406"]))
	{
		$a406 = "0";
	}
	else
	{
		$a406 = clean_text($_POST["a406"]);

	}

	if(empty($_POST["a407"]))
	{
		$a407 = "0";
	}
	else
	{
		$a407 = clean_text($_POST["a407"]);

	}

	if(empty($_POST["a411"]))
	{
		$a411 = "0";
	}
	else
	{
		$a411 = clean_text($_POST["a411"]);

	}

	if(empty($_POST["a412"]))
	{
		$a412 = "0";
	}
	else
	{
		$a412 = clean_text($_POST["a412"]);

	}

	if(empty($_POST["a413"]))
	{
		$a413 = "0";
	}
	else
	{
		$a413 = clean_text($_POST["a413"]);

	}

	if(empty($_POST["a414"]))
	{
		$a414 = "0";
	}
	else
	{
		$a414 = clean_text($_POST["a414"]);

	}

	if(empty($_POST["a415"]))
	{
		$a415 = "0";
	}
	else
	{
		$a415 = clean_text($_POST["a415"]);

	}

	if(empty($_POST["a416"]))
	{
		$a416 = "0";
	}
	else
	{
		$a416 = clean_text($_POST["a416"]);

	}

	if(empty($_POST["a417"]))
	{
		$a417 = "0";
	}
	else
	{
		$a417 = clean_text($_POST["a417"]);

	}

	if(empty($_POST["a421"]))
	{
		$a421 = "0";
	}
	else
	{
		$a421 = clean_text($_POST["a421"]);

	}

	if(empty($_POST["a422"]))
	{
		$a422 = "0";
	}
	else
	{
		$a422 = clean_text($_POST["a422"]);

	}

	if(empty($_POST["a423"]))
	{
		$a423 = "0";
	}
	else
	{
		$a423 = clean_text($_POST["a423"]);

	}

	if(empty($_POST["a424"]))
	{
		$a424 = "0";
	}
	else
	{
		$a424 = clean_text($_POST["a424"]);

	}

	if(empty($_POST["a425"]))
	{
		$a425 = "0";
	}
	else
	{
		$a425 = clean_text($_POST["a425"]);

	}

	if(empty($_POST["a426"]))
	{
		$a426 = "0";
	}
	else
	{
		$a426 = clean_text($_POST["a426"]);

	}

	if(empty($_POST["a427"]))
	{
		$a427 = "0";
	}
	else
	{
		$a427 = clean_text($_POST["a427"]);

	}

	if(empty($_POST["a431"]))
	{
		$a431 = "0";
	}
	else
	{
		$a431 = clean_text($_POST["a431"]);

	}

	if(empty($_POST["a432"]))
	{
		$a432 = "0";
	}
	else
	{
		$a432 = clean_text($_POST["a432"]);

	}

	if(empty($_POST["a433"]))
	{
		$a433 = "0";
	}
	else
	{
		$a433 = clean_text($_POST["a433"]);

	}

	if(empty($_POST["a434"]))
	{
		$a434 = "0";
	}
	else
	{
		$a434 = clean_text($_POST["a434"]);

	}

	if(empty($_POST["a435"]))
	{
		$a435 = "0";
	}
	else
	{
		$a435 = clean_text($_POST["a435"]);

	}

	if(empty($_POST["a436"]))
	{
		$a436 = "0";
	}
	else
	{
		$a436 = clean_text($_POST["a436"]);

	}

	if(empty($_POST["a437"]))
	{
		$a437 = "0";
	}
	else
	{
		$a437 = clean_text($_POST["a437"]);

	}

	if(empty($_POST["a441"]))
	{
		$a441 = "0";
	}
	else
	{
		$a441 = clean_text($_POST["a441"]);

	}

	if(empty($_POST["a442"]))
	{
		$a442 = "0";
	}
	else
	{
		$a442 = clean_text($_POST["a442"]);

	}

	if(empty($_POST["a443"]))
	{
		$a443 = "0";
	}
	else
	{
		$a443 = clean_text($_POST["a443"]);

	}

	if(empty($_POST["a444"]))
	{
		$a444 = "0";
	}
	else
	{
		$a444 = clean_text($_POST["a444"]);

	}

	if(empty($_POST["a445"]))
	{
		$a445 = "0";
	}
	else
	{
		$a445 = clean_text($_POST["a445"]);

	}

	if(empty($_POST["a446"]))
	{
		$a446 = "0";
	}
	else
	{
		$a446 = clean_text($_POST["a446"]);

	}

	if(empty($_POST["a447"]))
	{
		$a447 = "0";
	}
	else
	{
		$a447 = clean_text($_POST["a447"]);

	}


	if(empty($_POST["a451"]))
	{
		$a451 = "0";
	}
	else
	{
		$a411 = clean_text($_POST["a451"]);

	}

	if(empty($_POST["a452"]))
	{
		$a452 = "0";
	}
	else
	{
		$a452 = clean_text($_POST["a452"]);

	}

	if(empty($_POST["a453"]))
	{
		$a453 = "0";
	}
	else
	{
		$a453 = clean_text($_POST["a453"]);

	}

	if(empty($_POST["a454"]))
	{
		$a454 = "0";
	}
	else
	{
		$a454 = clean_text($_POST["a454"]);

	}

	if(empty($_POST["a455"]))
	{
		$a455 = "0";
	}
	else
	{
		$a455 = clean_text($_POST["a455"]);

	}

	if(empty($_POST["a456"]))
	{
		$a456 = "0";
	}
	else
	{
		$a456 = clean_text($_POST["a456"]);

	}

	if(empty($_POST["a457"]))
	{
		$a457 = "0";
	}
	else
	{
		$a457 = clean_text($_POST["a457"]);

	}

	if(empty($_POST["a461"]))
	{
		$a461 = "0";
	}
	else
	{
		$a461 = clean_text($_POST["a461"]);

	}

	if(empty($_POST["a462"]))
	{
		$a462 = "0";
	}
	else
	{
		$a462 = clean_text($_POST["a462"]);

	}

	if(empty($_POST["a463"]))
	{
		$a463 = "0";
	}
	else
	{
		$a463 = clean_text($_POST["a463"]);

	}

	if(empty($_POST["a464"]))
	{
		$a464 = "0";
	}
	else
	{
		$a464 = clean_text($_POST["a464"]);

	}

	if(empty($_POST["a465"]))
	{
		$a465 = "0";
	}
	else
	{
		$a465 = clean_text($_POST["a465"]);

	}

	if(empty($_POST["a466"]))
	{
		$a466 = "0";
	}
	else
	{
		$a466 = clean_text($_POST["a466"]);

	}

	if(empty($_POST["a467"]))
	{
		$a467 = "0";
	}
	else
	{
		$a467 = clean_text($_POST["a467"]);

	}

	if(empty($_POST["a471"]))
	{
		$a471 = "0";
	}
	else
	{
		$a471 = clean_text($_POST["a471"]);

	}

	if(empty($_POST["a472"]))
	{
		$a472 = "0";
	}
	else
	{
		$a472 = clean_text($_POST["a472"]);

	}

	if(empty($_POST["a473"]))
	{
		$a473 = "0";
	}
	else
	{
		$a473 = clean_text($_POST["a473"]);

	}

	if(empty($_POST["a474"]))
	{
		$a474 = "0";
	}
	else
	{
		$a474 = clean_text($_POST["a474"]);

	}

	if(empty($_POST["a475"]))
	{
		$a475 = "0";
	}
	else
	{
		$a475 = clean_text($_POST["a475"]);

	}

	if(empty($_POST["a476"]))
	{
		$a476 = "0";
	}
	else
	{
		$a476 = clean_text($_POST["a476"]);

	}

	if(empty($_POST["a477"]))
	{
		$a477 = "0";
	}
	else
	{
		$a477 = clean_text($_POST["a477"]);

	}

	if(empty($_POST["a481"]))
	{
		$a481 = "0";
	}
	else
	{
		$a481 = clean_text($_POST["a481"]);

	}

	if(empty($_POST["a482"]))
	{
		$a482 = "0";
	}
	else
	{
		$a482 = clean_text($_POST["a482"]);

	}

	if(empty($_POST["a483"]))
	{
		$a483 = "0";
	}
	else
	{
		$a483 = clean_text($_POST["a483"]);

	}

	if(empty($_POST["a484"]))
	{
		$a484 = "0";
	}
	else
	{
		$a484 = clean_text($_POST["a484"]);

	}

	if(empty($_POST["a485"]))
	{
		$a485 = "0";
	}
	else
	{
		$a485 = clean_text($_POST["a485"]);

	}

	if(empty($_POST["a486"]))
	{
		$a486 = "0";
	}
	else
	{
		$a486 = clean_text($_POST["a486"]);

	}

	if(empty($_POST["a487"]))
	{
		$a487 = "0";
	}
	else
	{
		$a487 = clean_text($_POST["a487"]);

	}

	if(empty($_POST["a491"]))
	{
		$a491 = "0";
	}
	else
	{
		$a491 = clean_text($_POST["a491"]);

	}

	if(empty($_POST["a492"]))
	{
		$a492 = "0";
	}
	else
	{
		$a492 = clean_text($_POST["a492"]);

	}

	if(empty($_POST["a493"]))
	{
		$a493 = "0";
	}
	else
	{
		$a493 = clean_text($_POST["a493"]);

	}

	if(empty($_POST["a494"]))
	{
		$a494 = "0";
	}
	else
	{
		$a494 = clean_text($_POST["a494"]);

	}

	if(empty($_POST["a495"]))
	{
		$a495 = "0";
	}
	else
	{
		$a495 = clean_text($_POST["a495"]);

	}

	if(empty($_POST["a496"]))
	{
		$a496 = "0";
	}
	else
	{
		$a496 = clean_text($_POST["a496"]);

	}

	if(empty($_POST["a497"]))
	{
		$a497 = "0";
	}
	else
	{
		$a497 = clean_text($_POST["a497"]);

	}

	if(empty($_POST["a501"]))
	{
		$a501 = "0";
	}
	else
	{
		$a501 = clean_text($_POST["a501"]);

	}

	if(empty($_POST["a502"]))
	{
		$a502 = "0";
	}
	else
	{
		$a502 = clean_text($_POST["a502"]);

	}

	if(empty($_POST["a503"]))
	{
		$a503 = "0";
	}
	else
	{
		$a503 = clean_text($_POST["a503"]);

	}

	if(empty($_POST["a504"]))
	{
		$a504 = "0";
	}
	else
	{
		$a504 = clean_text($_POST["a504"]);

	}

	if(empty($_POST["a505"]))
	{
		$a505 = "0";
	}
	else
	{
		$a505 = clean_text($_POST["a505"]);

	}

	if(empty($_POST["a506"]))
	{
		$a506 = "0";
	}
	else
	{
		$a506 = clean_text($_POST["a506"]);

	}

	if(empty($_POST["a507"]))
	{
		$a507 = "0";
	}
	else
	{
		$a507 = clean_text($_POST["a507"]);

	}

	if(empty($_POST["a511"]))
	{
		$a511 = "0";
	}
	else
	{
		$a511 = clean_text($_POST["a511"]);

	}

	if(empty($_POST["a512"]))
	{
		$a512 = "0";
	}
	else
	{
		$a512 = clean_text($_POST["a512"]);

	}

	if(empty($_POST["a513"]))
	{
		$a513 = "0";
	}
	else
	{
		$a513 = clean_text($_POST["a513"]);

	}

	if(empty($_POST["a514"]))
	{
		$a514 = "0";
	}
	else
	{
		$a514 = clean_text($_POST["a514"]);

	}

	if(empty($_POST["a515"]))
	{
		$a515 = "0";
	}
	else
	{
		$a515 = clean_text($_POST["a515"]);

	}

	if(empty($_POST["a516"]))
	{
		$a516 = "0";
	}
	else
	{
		$a516 = clean_text($_POST["a516"]);

	}

	if(empty($_POST["a517"]))
	{
		$a517 = "0";
	}
	else
	{
		$a517 = clean_text($_POST["a517"]);

	}


	if(empty($_POST["a521"]))
	{
		$a521 = "0";
	}
	else
	{
		$a521 = clean_text($_POST["a521"]);

	}

	if(empty($_POST["a522"]))
	{
		$a522 = "0";
	}
	else
	{
		$a522 = clean_text($_POST["a522"]);

	}

	if(empty($_POST["a523"]))
	{
		$a523 = "0";
	}
	else
	{
		$a523 = clean_text($_POST["a523"]);

	}

	if(empty($_POST["a524"]))
	{
		$a524 = "0";
	}
	else
	{
		$a524 = clean_text($_POST["a524"]);

	}

	if(empty($_POST["a525"]))
	{
		$a525 = "0";
	}
	else
	{
		$a525 = clean_text($_POST["a525"]);

	}

	if(empty($_POST["a526"]))
	{
		$a526 = "0";
	}
	else
	{
		$a526 = clean_text($_POST["a526"]);

	}

	if(empty($_POST["a527"]))
	{
		$a527 = "0";
	}
	else
	{
		$a527 = clean_text($_POST["a527"]);

	}

	if(empty($_POST["a531"]))
	{
		$a531 = "0";
	}
	else
	{
		$a531 = clean_text($_POST["a531"]);

	}

	if(empty($_POST["a532"]))
	{
		$a532 = "0";
	}
	else
	{
		$a532 = clean_text($_POST["a532"]);

	}

	if(empty($_POST["a533"]))
	{
		$a533 = "0";
	}
	else
	{
		$a533 = clean_text($_POST["a533"]);

	}

	if(empty($_POST["a534"]))
	{
		$a534 = "0";
	}
	else
	{
		$a534 = clean_text($_POST["a534"]);

	}

	if(empty($_POST["a535"]))
	{
		$a535 = "0";
	}
	else
	{
		$a535 = clean_text($_POST["a535"]);

	}

	if(empty($_POST["a536"]))
	{
		$a536 = "0";
	}
	else
	{
		$a536 = clean_text($_POST["a536"]);

	}

	if(empty($_POST["a537"]))
	{
		$a537 = "0";
	}
	else
	{
		$a537 = clean_text($_POST["a537"]);

	}

	if(empty($_POST["a541"]))
	{
		$a541 = "0";
	}
	else
	{
		$a541 = clean_text($_POST["a541"]);

	}

	if(empty($_POST["a542"]))
	{
		$a542 = "0";
	}
	else
	{
		$a542 = clean_text($_POST["a542"]);

	}

	if(empty($_POST["a543"]))
	{
		$a543 = "0";
	}
	else
	{
		$a543 = clean_text($_POST["a543"]);

	}

	if(empty($_POST["a544"]))
	{
		$a544 = "0";
	}
	else
	{
		$a544 = clean_text($_POST["a544"]);

	}

	if(empty($_POST["a545"]))
	{
		$a545 = "0";
	}
	else
	{
		$a545 = clean_text($_POST["a545"]);

	}

	if(empty($_POST["a546"]))
	{
		$a546 = "0";
	}
	else
	{
		$a546 = clean_text($_POST["a546"]);

	}

	if(empty($_POST["a547"]))
	{
		$a547 = "0";
	}
	else
	{
		$a547 = clean_text($_POST["a547"]);

	}

	if(empty($_POST["a551"]))
	{
		$a551 = "0";
	}
	else
	{
		$a551 = clean_text($_POST["a551"]);

	}

	if(empty($_POST["a552"]))
	{
		$a552 = "0";
	}
	else
	{
		$a552 = clean_text($_POST["a552"]);

	}

	if(empty($_POST["a553"]))
	{
		$a553 = "0";
	}
	else
	{
		$a553 = clean_text($_POST["a553"]);

	}

	if(empty($_POST["a554"]))
	{
		$a554 = "0";
	}
	else
	{
		$a554 = clean_text($_POST["a554"]);

	}

	if(empty($_POST["a555"]))
	{
		$a555 = "0";
	}
	else
	{
		$a555 = clean_text($_POST["a555"]);

	}

	if(empty($_POST["a556"]))
	{
		$a556 = "0";
	}
	else
	{
		$a556 = clean_text($_POST["a556"]);

	}

	if(empty($_POST["a557"]))
	{
		$a557 = "0";
	}
	else
	{
		$a557 = clean_text($_POST["a557"]);

	}

		if(empty($_POST["LocNam"]))
	{
		$LocNam = "0";
	}
	else
	{
		$LocNam = clean_text($_POST["LocNam"]);

	}


	$othersOne = clean_text($_POST["othersOne"]);
	$remarks = clean_text($_POST["remarks"]);
	$total = ($Nooffatalties*10)+($Noofpersonsgrievouslyinjured*7)+($Noofpersonsminorinjured*4);

	//$number = count($_POST['Typeofcollision']);
	$Typeofcollision1= json_encode($Typeofcollision);
	$RoadFeature1 = json_encode($RoadFeature);

	if($error == '')
	{
		$file_open = fopen("form_datanew113.csv","a");
		$no_rows = count(file("form_datanew113.csv"));
		if($no_rows > 1)
		{
			$no_rows = ($no_rows - 1) + 1;
		}
		$form_data = array(
			'sr_no'		=>	$no_rows,
			'FIRNO'		=>	$FIRNO,
			'NameofthePlace'	=> $NameofthePlace,
			'PoliceStation'		=>	$PoliceStation,
			'District '		=>	$District ,
			'State'		=>	$State,
			'AccidentType'		=>	$AccidentType,
			'TypeofArea'		=>	$TypeofArea,
			'Nooffatalties'		=>	$Nooffatalties,
			'Noofpersonsgrievouslyinjured'		=>	$Noofpersonsgrievouslyinjured,
			'Noofpersonsminorinjured'		=>	$Noofpersonsminorinjured,
			'PropertyDamage'		=>	$PropertyDamage,
			'NoofMotorizedVehiclesinvolved'		=>	$NoofMotorizedVehiclesinvolved,
			'NoofNonMotorizedVehiclesinvolved'		=>	$NoofNonMotorizedVehiclesinvolved,
			'Noofpedestriansinvolved'		=>	$Noofpedestriansinvolved,
			'Weather'		=>	$Weather,
			'HitandRun'		=>	$HitandRun,
			'Time'		=>	$Time,
			'Date'		=>	$Date,
			'Typeofcollision1'		=>	$Typeofcollision1,
			'RoadFeature1'		=>	$RoadFeature1,
			'RoadName'		=>	$RoadName,
			'RoadNumber'		=>	$RoadNumber,
			'landmark'		=>	$landmark,
			'RoadChainage'		=>	$RoadChainage,
			'latclicked1'		=>	$latclicked1,
			'longclicked1'		=>	$longclicked1,
			'Lanes'		=>	$Lanes,
			'SurfaceCondition'		=>	$SurfaceCondition,
			'RoadTypea'		=>	$RoadTypea,
			'RoadTypeb'		=>	$RoadTypeb,
			'PhysicalDivider'		=>	$PhysicalDivider,
			'OngoingRoadWorksConstruction'		=>	$OngoingRoadWorksConstruction,
			'SpeedLimit'		=>	$SpeedLimit,
			'VisibiltyattheTimeofAccident'		=>	$VisibiltyattheTimeofAccident,
			'AccidentSpot'		=>	$AccidentSpot,
			'RoadJunction'		=>	$RoadJunction,
			'TypeofTrafficControl'		=>	$TypeofTrafficControl,
			'PedestrianInvolved'		=>	$PedestrianInvolved,
			'a331'		=>	$a331,
			'a332'		=>	$a332,
			'a333'		=>	$a333,
			'a334'		=>	$a334,
			'a335'		=>	$a335,
			'a336'		=>	$a336,
			'a337'		=>	$a337,
			'a341'		=>	$a341,
			'a342'		=>	$a342,
			'a343'		=>	$a343,
			'a344'		=>	$a344,
			'a345'		=>	$a345,
			'a346'		=>	$a346,
			'a347'		=>	$a337,
			'a351'		=>	$a351,
			'a352'		=>	$a352,
			'a353'		=>	$a353,
			'a354'		=>	$a354,
			'a355'		=>	$a355,
			'a356'		=>	$a356,
			'a357'		=>	$a357,
			'a361'		=>	$a361,
			'a362'		=>	$a362,
			'a363'		=>	$a363,
			'a364'		=>	$a364,
			'a365'		=>	$a365,
			'a366'		=>	$a366,
			'a367'		=>	$a367,
			'a37A1'		=>	$a37A1,
			'a37A2'		=>	$a37A2,
			'a37A3'		=>	$a37A3,
			'a37A4'		=>	$a37A4,
			'a37A5'		=>	$a37A5,
			'a37A6'		=>	$a37A6,
			'a37A7'		=>	$a37A7,
			'a37B1'		=>	$a37B1,
			'a37B2'		=>	$a37B2,
			'a37B3'		=>	$a37B3,
			'a37B4'		=>	$a37B4,
			'a37B5'		=>	$a37B5,
			'a37B6'		=>	$a37B6,
			'a37B7'		=>	$a37B7,
			'a381'		=>	$a381,
			'a382'		=>	$a382,
			'a383'		=>	$a383,
			'a384'		=>	$a384,
			'a385'		=>	$a385,
			'a386'		=>	$a386,
			'a387'		=>	$a387,
			'a391'		=>	$a391,
			'a392'		=>	$a392,
			'a393'		=>	$a393,
			'a394'		=>	$a394,
			'a395'		=>	$a395,
			'a396'		=>	$a396,
			'a397'		=>	$a397,
			'a401'		=>	$a401,
			'a402'		=>	$a402,
			'a403'		=>	$a403,
			'a404'		=>	$a404,
			'a405'		=>	$a405,
			'a406'		=>	$a406,
			'a407'		=>	$a407,
			'a411'		=>	$a411,
			'a412'		=>	$a412,
			'a413'		=>	$a413,
			'a414'		=>	$a414,
			'a415'		=>	$a415,
			'a416'		=>	$a416,
			'a417'		=>	$a417,
			'a421'		=>	$a421,
			'a422'		=>	$a422,
			'a423'		=>	$a423,
			'a424'		=>	$a424,
			'a425'		=>	$a425,
			'a426'		=>	$a426,
			'a427'		=>	$a427,
			'a431'		=>	$a431,
			'a432'		=>	$a432,
			'a433'		=>	$a433,
			'a434'		=>	$a434,
			'a435'		=>	$a435,
			'a436'		=>	$a436,
			'a437'		=>	$a437,
			'a441'		=>	$a441,
			'a442'		=>	$a442,
			'a443'		=>	$a443,
			'a444'		=>	$a444,
			'a445'		=>	$a445,
			'a446'		=>	$a446,
			'a447'		=>	$a447,
			'a451'		=>	$a451,
			'a452'		=>	$a452,
			'a453'		=>	$a453,
			'a454'		=>	$a454,
			'a455'		=>	$a455,
			'a456'		=>	$a456,
			'a457'		=>	$a457,
			'a461'		=>	$a461,
			'a462'		=>	$a462,
			'a463'		=>	$a463,
			'a464'		=>	$a464,
			'a465'		=>	$a465,
			'a466'		=>	$a466,
			'a467'		=>	$a467,
			'a471'		=>	$a471,
			'a472'		=>	$a472,
			'a473'		=>	$a473,
			'a474'		=>	$a474,
			'a475'		=>	$a475,
			'a476'		=>	$a476,
			'a477'		=>	$a477,
			'a481'		=>	$a481,
			'a482'		=>	$a482,
			'a483'		=>	$a483,
			'a484'		=>	$a484,
			'a485'		=>	$a485,
			'a486'		=>	$a486,
			'a487'		=>	$a487,
			'a491'		=>	$a491,
			'a492'		=>	$a492,
			'a493'		=>	$a493,
			'a494'		=>	$a494,
			'a495'		=>	$a495,
			'a496'		=>	$a496,
			'a497'		=>	$a497,
			'a501'		=>	$a501,
			'a502'		=>	$a502,
			'a503'		=>	$a503,
			'a504'		=>	$a504,
			'a505'		=>	$a505,
			'a506'		=>	$a506,
			'a507'		=>	$a507,
			'a511'		=>	$a511,
			'a512'		=>	$a512,
			'a513'		=>	$a513,
			'a514'		=>	$a514,
			'a515'		=>	$a515,
			'a516'		=>	$a516,
			'a517'		=>	$a517,
			'a521'		=>	$a521,
			'a522'		=>	$a522,
			'a523'		=>	$a523,
			'a524'		=>	$a524,
			'a525'		=>	$a525,
			'a526'		=>	$a526,
			'a527'		=>	$a527,
			'a531'		=>	$a531,
			'a532'		=>	$a532,
			'a533'		=>	$a533,
			'a534'		=>	$a534,
			'a535'		=>	$a535,
			'a536'		=>	$a536,
			'a537'		=>	$a537,
			'a541'		=>	$a541,
			'a542'		=>	$a542,
			'a543'		=>	$a543,
			'a544'		=>	$a544,
			'a545'		=>	$a545,
			'a546'		=>	$a546,
			'a547'		=>	$a547,
			'a551'		=>	$a551,
			'a552'		=>	$a552,
			'a553'		=>	$a553,
			'a554'		=>	$a554,
			'a555'		=>	$a555,
			'a556'		=>	$a556,
			'a557'		=>	$a557,
			'othersOne' =>  $othersOne,
			'remarks' =>  $remarks,
			'total'		=>	$total,
			'LocNam'		=>	$LocNam,
		);
		fputcsv($file_open, $form_data);
		fclose($file_open);
		//$error = '<label class="text-success">Thank you for contacting us</label>';

	}

	if($error == '')
	{
		$file_open = fopen("form_datanew114.csv","a");
		$no_rows = count(file("form_datanew114.csv"));
		if($no_rows > 1)
		{
			$no_rows = ($no_rows - 1) + 1;
		}
		$form_data = array(
			'latclicked1'		=>	$latclicked1,
			'longclicked1'		=>	$longclicked1);
		fputcsv($file_open, $form_data);
		fclose($file_open);
	}
}


?>




<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Accident Form</title>
<link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="dist/jquery-clockpicker.min.css">
</head>
<style>
	#map{
    width: 500px;
    height: 500px;
    border:10px inset #e5e4e2;
}
	body{
		background-color:#fff ;
		background-repeat:no-repeat;
		background-size: contain;
		background-position: center;
		font-size: 13pt;
		text-align: center;
		font-family:"Arial";
		margin: 0;
		padding: 0;
		animation: Gradient 30s ease infinite;
		height: 100%;

	}
	table,th,td{
		border: 1px solid #fff;
		border-collapse: collapse;
	}
	th,td{
		padding: 10px;
		text-align: left;
		padding-top: 20px;
		padding-bottom: 20px;
	}
	.error {color: red;
		font-size: 18;}
	::-webkit-input-placeholder {
   font-style: italic;
}
:-moz-placeholder {
   font-style: italic;
}
::-moz-placeholder {
   font-style: italic;
}
:-ms-input-placeholder {
   font-style: italic;
}

	#pac-input {
        font-family: Roboto;
		color: black;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
		height: 30px;
		 background-color: #fff;opacity: 1

		      }
	.container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 13pt;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #fff;
  border:2px outset #e5e4e2;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content:"";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
  left: 7px;
  top: 3px;
  width: 3px;
  height: 8px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

      #pac-input:focus {
        border-color: #4d90fe;
      }
#div1,#div2{
	display: inline;
}

</style>
<body>

<div style="width: 100%; background-image:url(tU89SSy2.jpg);background-size: cover; height: 500px;margin: 0;padding: 0;">



	<form style="padding-top: 40px" id="form1" enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<?php echo $error; ?>

		<div class="container" style="align-content: center;margin: 0 auto;width: 1000px;">

			<fieldset style="width: 100%; background-color:#e5e4e2; margin: 0;padding: 0">
			<div style="width: 100%;height: 210px;background-color: #fff"><img src="logo.jpg" style="width: 200px;height: 200px;padding-top: 10px;padding-bottom: 6px"></div>

			<div><h1 style="font-size:240%;width: 100%;text-align:  center;opacity: 1; background-color: #c0c0c0; text-emphasis-color: #56E7FF; margin: 0;padding-top:20px; padding-bottom: 20px; background-image:url(tU89SSy2.jpg); color:#fff ;background-size: cover;"><b>ROAD ACCIDENT RECORDING FORM </b></h1></div>
				<div><h1 style="font-size:150%;width: 100%;text-align:  left;opacity: 1; background-color: #c0c0c0; color: #0099cc;margin-top: 0;padding-top: 20px; padding-bottom: 20px "> &emsp; A. Accident Details</h1></div>
			<div style="padding: 20px"> <div class="cont1" style="text-align: left; padding: 10px">
				<label style="color:black"><b>1. FIR NO.</b></label>&emsp;
			<input type="text" name="FIRNO" style="padding: 5px;font-size: 12pt;width: 150px;border: 1px solid black">&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;



			<label style="color:black"><b>2. Time</b></label>&emsp;
			<input type="time" name="Time" id="timepicker1" placeholder="" style="width: 150px ;padding: 1px;font-size: 13pt;;border: 1px solid black">&emsp;&emsp;&emsp;&emsp;&emsp;

			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

			<!-- Updated JavaScript url -->
			<script src="dist/jquery-clockpicker.js"></script>


			<script>
			$(function() {
 			  $('#timepicker1').clockpicker({
				default : 'now',
				donetext : 'Done',
				autoclose : true
			});
			 });
			</script>


			<label style="color:black"><b>3. Date</b></label>
			<input type="date" name="Date" value="" onclick="myFunction()" style="width:150px;padding: 1px;border: 1px solid black;font-size: 13pt"><br><br>
			<script>
				function myFunction() {
    				var x = document.getElementById("Date").value;
    				document.getElementById("demo").innerHTML = x;
			}
			</script>


			</div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px">
				<label><b>4. Name of the Place</b></label>
			<input type="text" name="NameofthePlace" style="width: 300px;padding: 5px;font-size: 12pt;border: 1px solid black	">&emsp;&emsp;
			<label><b>5. Police Station</b></label>

			<input type="text" name="PoliceStation" style="width: 290px;padding: 5px;font-size: 12pt;border: 1px solid black"><br><br>
			</div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px;">
				<label><b>6. District</b></label>&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;
			<input type="text" name="District" style="width: 300px;padding: 5px;font-size: 12pt;border: 1px solid black">&emsp;&emsp;
			<label><b>7. State</b></label>&emsp;&emsp;&emsp;&ensp;&ensp;
			<select name="State" style="width: 305px;padding: 5px;font-size: 12pt;border: 1px solid black">
				 <option value="" disabled selected>Select Option</option>
				<option value="Andaman And Nicobar Islands">Andaman And Nicobar Islands</option>
				<option value="AndhraPradesh">Andhra Pradesh</option>
				<option value="ArunachalPradesh">Arunachal Pradesh</option>
				<option value="Assam">Assam</option>
				<option value="Bihar">Bihar</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Chhattisgarh">Chhattisgarh</option>
				<option value="Dadra And Nagar Haveli">Dadra And Nagar Haveli</option>
				<option value="Daman And Diu">Daman And Diu</option>
				<option value="Delhi">Delhi</option>
				<option value="Goa">Goa</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Haryana">Haryana</option>
				<option value="Himachal Pradesh">Himachal Pradesh</option>
				<option value="Jammu And Kashmir">Jammu And Kashmir</option>
				<option value="Jharkhand">Jharkhand</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kerala">Kerala</option>
				<option value="Lakshadweep">Lakshadweep</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Manipur">Manipur</option>
				<option value="Meghalaya">Meghalaya</option>
				<option value="Mizoram">Mizoram</option>
				<option value="Nagaland">Nagaland</option>
				<option value="Odisha">Odisha</option>
				<option value="Puducherry">Puducherry</option>
				<option value="Punjab">Punjab</option>
				<option value="Rajasthan">Rajasthan</option>
				<option value="Sikkim">Sikkim</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Telangana">Telangana</option>
				<option value="Tripura">Tripura</option>
				<option value="Uttar Pradesh">Uttarakhand</option>
				<option value="West Bengal" >West Bengal</option>
			</select><br><br></div>
		<div class="cont1" style="text-align: left; width: 1000px;padding: 10px;"><label><b>8. Type of Area</b></label>&emsp;&emsp;&ensp;
			<select name="TypeofArea" style="width: 315px;padding: 5px;font-size: 12pt;border: 1px solid black">
				 <option value="" disabled selected>Select Option</option>
				<option value="Urban">Urban</option>
				<option value="Rural">Rural</option>
			</select><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px;"><label><b>9. Accident Type</b></label>&emsp;&nbsp;&ensp;
			<select name="AccidentType" style="width: 315px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Fatal">Fatal</option>
				<option value="Grieviously injured">Grieviously Injured(Need Hospitalization)</option>
				<option value="Minor injury">Minor Injury(No Need for Hospitalization)</option>
				<option value="No injury">No Injury</option>
			</select><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>10. No. of Fatalties </b></label>&nbsp;&nbsp;
			<input type="number" name="Nooffatalties" style="width:50px;padding: 5px;font-size: 12pt;border: 1px solid black">&emsp;&emsp;
			<label><b>No. of Persons Grievously Injured</b></label>&nbsp;
			<input type="number" name="Noofpersonsgrievouslyinjured" style="width: 50px;padding: 5px;font-size: 12pt;border: 1px solid black">&emsp;&emsp;
			<label><b>No. of Persons Minor Injured</b></label>&nbsp;
			<input type="number" name="Noofpersonsminorinjured" style="width: 50px;padding: 5px;font-size: 12pt;border: 1px solid black"><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>11. Property Damage</b></label>&emsp;
			<select name="PropertyDamage" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Public">Public</option>
				<option value="Private">Private</option>
				<option value="Public And Private">Public And Private</option>
				<option value="Others">Others</option>
			</select><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>12. (a) No. of  Motorized Vehicles Involved</b></label>&emsp;
			<input type="number" name="NoofMotorizedVehiclesinvolved" style="width:50px;padding :5px; font-size: 12pt;border: 1px solid black">&emsp;&emsp;&emsp;&emsp;&emsp;
			<label><b> (b) No. of  Non Motorized Vehicles Involved</b></label>&emsp;
			<input type="number" name="NoofNonMotorizedVehiclesinvolved" style="width: 50px;padding :5px;font-size: 12pt;border: 1px solid black"><br><br>&emsp;&nbsp;
			<label><b>(c) No. of Pedestrians Involved</b></label>&emsp;&emsp;&emsp;&emsp;&ensp;
			<input type="number" name="Noofpedestriansinvolved" style="width: 50px;padding :5px;font-size: 12pt;border: 1px solid black"><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>13. Type of Weather</b></label>&emsp;
			<select name="Weather" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Sunny/Clear">Sunny/Clear</option>
				<option value="Rainy">Rainy</option>
				<option value="Foggy/Misty">Foggy/Misty</option>
				<option value="Hail/Sleet">Hail/Sleet</option>
				<option value="Other">Other</option>
			</select><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>14. Hit and Run</b></label>&emsp;&emsp;&emsp;
			<select name="HitandRun" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px">
				<label><b>15. Type of Collision&ensp;</b> <i>( click on the option(s) to select )</i></label><br>&emsp;</div>
				<div class="cont1" style="text-align: center; width: 1000px;padding: 10px"><table style="width:100%">
					<col style="width:200px">
				<col style="width: 200px">
				<col style="width: 200px">
				<tr>
    				<td style="padding-bottom: 3px" ><label class="container1" ></span><input type="checkbox" name="Typeofcollision[]" value="Pedestrian">&emsp;Pedestrian<span class="checkmark"></span></label></td>
			<td style="padding-bottom: 3px" ><label class="container1"><input type="checkbox" name="Typeofcollision[]" value="Hit from Back">&emsp;Hit from Back<span class="checkmark"></span></label></td>
			<td style="padding-bottom: 3px" ><label class="container1"><input type="checkbox" name="Typeofcollision[]" value="Hit from Side">&emsp;Hit from Side<span class="checkmark"></span></label></td>

  				</tr>
  				<tr>
    				<td style="padding-bottom: 3px"><label class="container1"><input type="checkbox" name="Typeofcollision[]" value="Run off road">&emsp;Run off Road<span class="checkmark"></span></label></td>
			<td style="padding-bottom: 3px"><label class="container1"><input type="checkbox" name="Typeofcollision[]" value="With Animal">&emsp;With Animal<span class="checkmark"></span></label></td>
			<td style="padding-bottom: 3px"><label class="container1"><input type="checkbox" name="Typeofcollision[]" value="With Parked Vehicle">&emsp;With Parked Vehicle<span class="checkmark"></span></label></td>
  				</tr>

			<tr>
    				<td style="padding-bottom: 3px"><label class="container1"><input type="checkbox" name="Typeofcollision[]" value="Fixed/Stationary object">&emsp;Fixed/Stationary Object<span class="checkmark"></span></label></td>
			<td style="padding-bottom: 3px"><label class="container1"><input type="checkbox" name="Typeofcollision[]" value="Vehicle Overturn">&emsp;Vehicle Overturn<span class="checkmark">
</span></label></td>
			<td style="padding-bottom: 3px"><label class="container1"><input type="checkbox" name="Typeofcollision[]" value="Head on Collision">&emsp;Head on Collision<span class="checkmark"></span></label></td>
  				</tr>

			<tr>
				<td style="padding-bottom: 20px" colspan="3"><div id="div1" style="width: 100%"><label class="container1"><input type="checkbox" name="Typeofcollision[]" value="Others">&emsp;Others&emsp;<input type="text" name="othersOne" id="othersOne" style="width: 800px; background-color: #fff;opacity: 1;height: 20px;font-size: 12pt;padding: 5px;border: 0px solid black"; placeholder="(Specify here)"><span class="checkmark"></span></label></div>
					</td>
			</tr>
			</table>
			</div></div>
		<br><br>


			<div><h1 style="font-size:150%;width: 100%;text-align:  left;opacity: 1; background-color: #c0c0c0;  color: #0099cc;padding-top: 20px;padding-bottom: 20px"> &emsp;B. Road Related Details</h1></div>
			<div style="padding: 20px"><div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>16. Road Name</b></label>
			<input type="text" name="RoadName" style="width: 300px;padding: 5px;font-size: 12pt;border: 1px solid black">&emsp;&emsp;
			<label><b>17. Road Number</b></label>&nbsp;&nbsp;
			<input type="number" name="RoadNumber" style="width: 300px;padding: 5px;font-size: 12pt;border: 1px solid black"><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>18. Landmark</b></label>&ensp;&nbsp;
			<input type="text" name="landmark" style="width: 300px;padding: 5px;font-size: 12pt;border: 1px solid black">&emsp;&emsp;
			<label><b>19. Road Chainage</b></label>
			<input type="text" name="RoadChainage" style="width: 300px;padding: 5px;font-size: 12pt;border: 1px solid black"><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>20. GPS Location</b></label>&ensp;<label><i>(Double click on the accident Location in the map)</i></label><br><br>&emsp;&nbsp;
			<label><b><i>Latitude</i></b></label>
			<div name="latclicked1" id="latclicked" style="display: none"></div><input type="text" name="latclicked1" id="latclicked1" style="padding: 5px;font-size: 12pt;border: 1px solid black">&emsp;&nbsp;
			<label><b><i>Longitude</i></b></label>
			 <div name="longclicked1" id="longclicked" style="display: none"></div><input type="text"  name="longclicked1" id="longclicked1" style="padding: 5px;font-size: 12pt;border: 1px solid black"><br><br>


         &emsp;&ensp;  <label><b><i>Location Name</i></b></label>
			 <div name="LocNam" id="longclicked" style="display: none"></div><input type="text"  name="LocNam" id="LocNam" style="padding: 5px;font-size: 12pt;border: 1px solid black"><br>



       <div name="latmoved" id="latmoved" style="display: none"></div>
        &emsp;&emsp;<div name="longmoved" id="longmoved" style="display: none"></div>
        <input id="pac-input" class="controls" type="text" placeholder="Search Box" style="margin-top: 10px;width: 400px;border: 1px solid grey">
        <div style="padding:20px; align-items: center;">
            <div id="map" style="padding: 10px;width: 920px"></div>
        </div></div>

		<div class="cont1" style="text-align: center; width: 1000px;padding: 10px"><table style="width:100%; border: 1px solid #e5e4e2;">


			<col style="width:150px">
			<col style="width: 250px">
			<tr >
				<td style="padding: 5px; border: 1px solid #e5e4e2;"><div class="cont1" style="text-align: left; padding: 10px"><label><b>21. Lanes</b></label>&emsp;&emsp;
			<select name="Lanes" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Single Lane">Single Lane</option>
				<option value="Double Lane">Double Lane</option>
				<option value="More than 2 lanes without central divider">More than 2 lanes  without central divider</option>
				<option value="More than 3 lanes with central divider">More than 3 lanes  with central divider</option>
			</select><br><br></div></td>
			<td style="padding: 5px; border: 1px solid #e5e4e2;">
				<div class="cont1" style="text-align: left; padding: 10px"><label><b>22. Surface Condition</b></label>&emsp;&emsp;
			<select name="SurfaceCondition" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Paved">Paved</option>
				<option value="Unpaved">Unpaved</option>
			</select><br><br></div>
			</td>

			</tr>
			<tr>
				<td style="padding: 5px; border: 1px solid #e5e4e2;" colspan="2">
					<div class="cont1" style="text-align: left; padding: 10px"><label><b>23. Road Type</b></label><br><br>&emsp;
			<label><b>(a)</b></label>&emsp;
			<select name="RoadTypea" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Expressway">Expressway</option>
				<option value="National Highway">National Highway</option>
				<option value="State Highway">State Highway</option>
				<option value="District Road">District Road</option>
				<option value="Village Road">Village Road</option>
				<option value="Others">Other Roads</option>
			</select>&emsp;&emsp;
			<label><b>(b)</b></label>&emsp;
			<select name="RoadTypeb" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Urban">Urban</option>
				<option value="Non Urban">Non Urban</option>
			</select><br><br></div>
				</td>
			</tr>
			<tr>
				<td style="padding: 5px; border: 1px solid #e5e4e2;">
					<div class="cont1" style="text-align: left; padding: 10px"><label><b>24. Physical Divider</b></label>&emsp;
			<select name="PhysicalDivider" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select><br><br></div>
				</td>
				<td style="padding: 5px; border: 1px solid #e5e4e2;">
					<div class="cont1" style="text-align: left; padding: 5px"><label><b>25. Ongoing Road Works</b></label>&emsp;&emsp;&emsp;&emsp;&ensp;
			<select name="OngoingRoadWorksConstruction" style="width:200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select><br><br></div>
				</td>
			</tr>

			<tr>
				<td style="padding: 5px; border: 1px solid #e5e4e2;">
					<div class="cont1" style="text-align: left; padding: 10px"><label><b>26. Speed Limit</b></label>&emsp;&emsp;&ensp;&nbsp;&nbsp;
			<select name="SpeedLimit" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="<40">less than 40 </option>
				<option value="40-60">40-60</option>
				<option value="60-80">60-80</option>
				<option value=">80">greater than 80</option>
			</select><br><br></div>
				</td>
				<td style="padding: 5px; border: 1px solid #e5e4e2;">
						<div class="cont1" style="text-align: left; padding: 5px"><label><b>27.Visibilty at the Time of Accident</b></label>
			<select name=" VisibiltyattheTimeofAccident" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Good">Good</option>
				<option value="Poor">Poor</option>
				<option value="Not Known">Not Known</option>
			</select><br><br></div>
				</td>
			</tr>
			<tr>
				<td style="padding: 5px; border: 1px solid #e5e4e2;" colspan="2">
					<div class="cont1" style="text-align: left; padding: 10px"><label><b>28. Accident Spot</b></label>&emsp;&ensp;&nbsp;&nbsp;
			<select name=" AccidentSpot" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Residential Area">Residential Area</option>
				<option value="Institutional Area">Institutional Area</option>
				<option value="Market/Commercial Area">Market/Commercial Area</option>
				<option value="Open Area">Open Area</option>
				<option value="Other">Other</option>
			</select><br><br></div>
				</td>
			</tr>




		</table></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 1px"><label><b>29. Road Features</b></label><br>&emsp;</div>&emsp;
							<div class="cont1" style="text-align: center; width:  px;padding: 1px"><table style="width:100%">
					<col style="width:150px">
				<col style="width: 150px">
				<col style="width: 150px">
			<tr>
				<td style="padding-bottom: 3px">
					<label class="container1"><input type="checkbox" name="RoadFeature[]" value="Straight Road">Straight Road<span class="checkmark"></span></label>
				</td>
				<td style="padding-bottom: 3px">
					<label class="container1"><input type="checkbox" name="RoadFeature[]" value="Curved Road">Curved Road<span class="checkmark"></span></label>
				</td>
				<td style="padding-bottom: 3px">
					<label class="container1"><input type="checkbox" name="RoadFeature[]" value="Bridge">Bridge<span class="checkmark"></span></label>
				</td>
			</tr>
			<tr>
				<td style="padding-bottom: 3px">
					<label class="container1"><input type="checkbox" name="RoadFeature[]" value="Culvert">Culvert<span class="checkmark"></span></label>
				</td>
				<td style="padding-bottom: 3px">
					<label class="container1"><input type="checkbox" name="RoadFeature[]" value="Pot holes">Pot Holes<span class="checkmark"></span></label>
				</td>
				<td style="padding-bottom: 3px">
					<label class="container1"><input type="checkbox" name="RoadFeature[]" value="Steep Grade">Steep Grade<span class="checkmark"></span></label>
				</td>
			</tr>



		</table></div><br><br>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>30. Road Junction</b> (fill only if the accident is at a junction)</label>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;
			<select name="RoadJunction" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="T Junction">T Junction</option>
				<option value="Y Junction">Y Junction</option>
				<option value="Four Arm Junction">Four Arm Junction</option>
				<option value="Staggered Junction">Staggered Junction</option>
				<option value="Round About Junction">Round About Junction</option>
			</select><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>31. Type of Traffic Control</b> (fill only if the accident is at a junction)</label>&emsp;&emsp;
			<select name=" TypeofTrafficControl" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="Traffic Light Signal">Traffic Light Signal</option>
				<option value="Police Control">Police Control</option>
				<option value="Stop Sign">Stop Sign</option>
				<option value="Flashing Signal/Blinker">Flashing Signal/Blinker</option>
				<option value="Uncontrolled">Uncontrolled</option>
			</select><br><br></div>
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><label><b>32. Pedestrian Involved </b>(if applicable)</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
			<select name="PedestrianInvolved" style="width: 200px;padding: 5px;font-size: 12pt;border: 1px solid black">
				<option value="" disabled selected>Select Option</option>
				<option value="No Facility">No Facility</option>
				<option value="Footpath">Footpath</option>
				<option value="Zebra Crossing">Zebra Crossing</option>
				<option value="Foot Bridge/Subway">Foot Bridge/Subway</option>
				<option value="Not Applicable">Not Applicable</option><br>

				</select><br><br></div></div>
		<br>


				<div><h1 style="font-size:150%;width: 100%;text-align:  left;opacity: 1; background-color: #c0c0c0;  color: #0099cc; padding-bottom: 20px; padding-top: 20px">&emsp;C. Vehicles Involved in the Accident</h1></div>
				<div style="padding: 20px">
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><table style="width:100%">
				<col style="width:5%">
				<col style="width: 80px">
				<col style="width: 140px">
				<col style="width: 130px">
				<col style="width: 80px">
				<col style="width: 200px">
				<col style="width: 100px">
				<col style="width: 100px">
			  	<tr>
    				<th>S.No.</th>
    				<th>Type of Vehicle</th>
    				<th>Registration No.</th>
					<th>Disposition</th>
					<th>Load Condition(Passengers)</th>
					<th>Load Condition(Goods)</th>
					<th>Mechanical Failure</th>
					<th>Age of Vehicle</th>
  				</tr>
  				<tr>
			    	<td><input type="number" name="a331" style="width: 40px;font-size: 12pt"></td>
					<td><select name="a341" style="width:100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select>
					</td>
					<td><input type="text" style="width: 100px;font-size: 12pt" name="a351"></td>
					<td>
						<select name="a361" style="width: 100px;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Needs to be Towed">Needs to be Towed</option>
							<option value="Can be driven away">Can be driven away</option>
						</select>
					</td>
					<td><select name="a37A1" style="width: 150px;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a37B1" style="width: 150px;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a381" style="width: 90px;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Yes">Yes</option>
							<option value="NO">No</option>
						</select></td>
					<td><input type="number" style="width: 60px;font-size: 12pt;" name="a391"></td>
				</tr>
  				<tr>
			    	<td><input type="number" name="a332" style="width: 40px;font-size: 12pt"></td>
					<td><select name="a342" style="width:100px  ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select>
					</td>
					<td><input type="text" style="width: 100px;font-size: 12pt" name="a352"></td>
					<td>
						<select name="a362" style="width: 100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Needs to be Towed">Needs to be Towed</option>
							<option value="Can be driven away">Can be driven away</option>
						</select>
					</td>
					<td><select name="a37A2" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a37B2" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a382" style="width: 90px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Yes">Yes</option>
							<option value="NO">No</option>
						</select></td>
					<td><input type="number" style="width: 60px;font-size: 12pt" name="a392"></td>
				</tr>
				<tr>
			    	<td><input type="number" name="a333" style="width: 40px;font-size: 12pt"></td>
					<td><select name="a343" style="width:100px  ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select>
					</td>
					<td><input type="text" style="width: 100px;font-size: 12pt" name="a353"></td>
					<td>
						<select name="a363" style="width: 100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Needs to be Towed">Needs to be Towed</option>
							<option value="Can be driven away">Can be driven away</option>
						</select>
					</td>
					<td><select name="a37A3" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a37B3" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a383" style="width: 90px ;font-size: 12pt;height: 25px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Yes">Yes</option>
							<option value="NO">No</option>
						</select></td>
					<td><input type="number" style="width: 60px;font-size: 12pt" name="a393"></td>
				</tr>
				<tr>
			    	<td><input type="number" name="a334" style="width: 40px;font-size: 12pt"></td>
					<td><select name="a344" style="width:100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select>
					</td>
					<td><input type="text" style="width: 100px;font-size: 12pt" name="a354"></td>
					<td>
						<select name="a364" style="width: 100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Needs to be Towed">Needs to be Towed</option>
							<option value="Can be driven away">Can be driven away</option>
						</select>
					</td>
					<td><select name="a37A4" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a37B4" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a384" style="width: 90px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Yes">Yes</option>
							<option value="NO">No</option>
						</select></td>
					<td><input type="number" style="width: 60px;font-size: 12pt" name="a394"></td>
				</tr>
				<tr>
			    	<td><input type="number" name="a335" style="width: 40px;font-size: 12pt"></td>
					<td><select name="a345" style="width:100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select>
					</td>
					<td><input type="text" style="width: 100px;font-size: 12pt" name="a355"></td>
					<td>
						<select name="a365" style="width: 100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Needs to be Towed">Needs to be Towed</option>
							<option value="Can be driven away">Can be driven away</option>
						</select>
					</td>
					<td><select name="a37A5" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a37B5" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a385" style="width: 90px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Yes">Yes</option>
							<option value="NO">No</option>
						</select></td>
					<td><input type="number" style="width: 60px;font-size: 12pt" name="a395"></td>
				</tr>
				<tr>
			    	<td><input type="number" name="a336" style="width: 40px;font-size: 12pt"></td>
					<td><select name="a346" style="width:100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select>
					</td>
					<td><input type="text" style="width: 100px;font-size: 12pt" name="a356"></td>
					<td>
						<select name="a366" style="width: 100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Needs to be Towed">Needs to be Towed</option>
							<option value="Can be driven away">Can be driven away</option>
						</select>
					</td>
					<td><select name="a37A6" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a37B6" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a386" style="width: 90px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Yes">Yes</option>
							<option value="NO">No</option>
						</select></td>
					<td><input type="number" style="width: 60px;font-size: 12pt" name="a396"></td>
				</tr>
				<tr>
			    	<td><input type="number" name="a337" style="width: 40px;font-size: 12pt"></td>
					<td><select name="a347" style="width:100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select>
					</td>
					<td><input type="text" style="width: 100px;font-size: 12pt" name="a357"></td>
					<td>
						<select name="a367" style="width: 100px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Needs to be Towed">Needs to be Towed</option>
							<option value="Can be driven away">Can be driven away</option>
						</select>
					</td>
					<td><select name="a37A7" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a37B7" style="width: 150px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Normally Loaded">Normally Loaded</option>
							<option value="Overloaded/Hanging">Overloaded/Hanging</option>
							<option value="Empty">Empty</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a387" style="width: 90px ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Yes">Yes</option>
							<option value="NO">No</option>
						</select></td>
					<td><input type="number" style="width: 60px;font-size: 12pt" name="a397"></td>
				</tr>
				</table> </div></div>


		<br>


		<div><h1 style="font-size:150%;width: 100%;text-align:  left;opacity: 1; background-color: #c0c0c0;  color: #0099cc;padding-bottom: 20px;padding-top: 20px">&emsp;D. Driver Details</h1></div>
				<div style="padding: 20px">
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><table style="width:100%">
				<col style="width:5%">
				<col style="width: 80px">
				<col style="width: 140px">
				<col style="width: 40px">
				<col style="width: 130px">
				<col style="width: 80px">
				<col style="width: 200px">
				<col style="width: 100px">
				<col style="width: 100px">
			  	<tr>
    				<th style="width: 30px">S.No.</th>
    				<th style="width: 100px">Sex</th>
    				<th style="width:150px">Impacting Vehicle</th>
					<th style="width: 30px">Age</th>
					<th style="width: 100px">Type of Licence</th>
					<th style="width: 60px">Licence No.</th>
					<th style="width: 150px">Type of Trafic Violation</th>
					<th style="width: 100px">Type of Injury</th>
					<th style="width: 200px">Using Requisite Safety Device</th>
  				</tr>
				<tr>
					<td><input name="a401" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a411" style="width: 100% ;font-size: 12pt;height: 25px">
							<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>
					<td><select name="a421" style="width:100%  ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a431"></td>
					<td><select name="a441" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Valid Permanent Licence">Valid Permanent Licence</option>
							<option value="Learner Licence">Learner Licence</option>
							<option value="Without Licence">Without Licence</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a451"></td>
					<td><select name="a461" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Over Speeding">Over Speeding</option>
							<option value="Jumping Red Light">Jumping Red Light</option>
							<option value="Driving on the wrong side">Driving on the wrong side</option>
							<option value="Drunk Driving">Drunk Driving</option>
							<option value="Use of Mobile Phone">Use of Mobile Phone</option>
							<option value="NO Violation">NO Violation</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a471" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a481" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a402" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a412" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>
					<td><select name="a422" style="width:100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a432"></td>
					<td><select name="a442" style="width: 100% ;font-size: 12pt;height: 25px">

						<option value="" disabled selected>Select Option</option>
							<option value="Valid Permanent Licence">Valid Permanent Licence</option>
							<option value="Learner Licence">Learner Licence</option>
							<option value="Without Licence">Without Licence</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a452"></td>
					<td><select name="a462" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Over Speeding">Over Speeding</option>
							<option value="Jumping Red Light">Jumping Red Light</option>
							<option value="Driving on the wrong side">Driving on the wrong side</option>
							<option value="Drunk Driving">Drunk Driving</option>
							<option value="Use of Mobile Phone">Use of Mobile Phone</option>
							<option value="NO Violation">NO Violation</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a472" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a482" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a403" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a413" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>
					<td><select name="a423" style="width:100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a433"></td>
					<td><select name="a443" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Valid Permanent Licence">Valid Permanent Licence</option>
							<option value="Learner Licence">Learner Licence</option>
							<option value="Without Licence">Without Licence</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a453"></td>
					<td><select name="a463" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Over Speeding">Over Speeding</option>
							<option value="Jumping Red Light">Jumping Red Light</option>
							<option value="Driving on the wrong side">Driving on the wrong side</option>
							<option value="Drunk Driving">Drunk Driving</option>
							<option value="Use of Mobile Phone">Use of Mobile Phone</option>
							<option value="NO Violation">NO Violation</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a473" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a483" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a404" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a414" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>
					<td><select name="a424" style="width:100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a434"></td>
					<td><select name="a444" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Valid Permanent Licence">Valid Permanent Licence</option>
							<option value="Learner Licence">Learner Licence</option>
							<option value="Without Licence">Without Licence</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a454"></td>
					<td><select name="a464" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Over Speeding">Over Speeding</option>
							<option value="Jumping Red Light">Jumping Red Light</option>
							<option value="Driving on the wrong side">Driving on the wrong side</option>
							<option value="Drunk Driving">Drunk Driving</option>
							<option value="Use of Mobile Phone">Use of Mobile Phone</option>
							<option value="NO Violation">NO Violation</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a474" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a484" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a405" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a415" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>
					<td><select name="a425" style="width:100%  ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a435"></td>
					<td><select name="a445" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Valid Permanent Licence">Valid Permanent Licence</option>
							<option value="Learner Licence">Learner Licence</option>
							<option value="Without Licence">Without Licence</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a455"></td>
					<td><select name="a465" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Over Speeding">Over Speeding</option>
							<option value="Jumping Red Light">Jumping Red Light</option>
							<option value="Driving on the wrong side">Driving on the wrong side</option>
							<option value="Drunk Driving">Drunk Driving</option>
							<option value="Use of Mobile Phone">Use of Mobile Phone</option>
							<option value="NO Violation">NO Violation</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a475" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a485" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>

							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a406" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a416" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>
					<td><select name="a426" style="width:100%  ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a436"></td>
					<td><select name="a446" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Valid Permanent Licence">Valid Permanent Licence</option>
							<option value="Learner Licence">Learner Licence</option>
							<option value="Without Licence">Without Licence</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a456"></td>
					<td><select name="a466" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Over Speeding">Over Speeding</option>
							<option value="Jumping Red Light">Jumping Red Light</option>
							<option value="Driving on the wrong side">Driving on the wrong side</option>
							<option value="Drunk Driving">Drunk Driving</option>
							<option value="Use of Mobile Phone">Use of Mobile Phone</option>
							<option value="NO Violation">NO Violation</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a476" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a486" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td>< name="a407" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a417" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>
					<td><select name="a427" style="width:100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a437"></td>
					<td><select name="a447" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>

							<option value="Valid Permanent Licence">Valid Permanent Licence</option>
							<option value="Learner Licence">Learner Licence</option>
							<option value="Without Licence">Without Licence</option>
						</select></td>
					<td><input type="number" style="width: 94%;font-size: 12pt" name="a457"></td>
					<td><select name="a467" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Over Speeding">Over Speeding</option>
							<option value="Jumping Red Light">Jumping Red Light</option>
							<option value="Driving on the wrong side">Driving on the wrong side</option>
							<option value="Drunk Driving">Drunk Driving</option>
							<option value="Use of Mobile Phone">Use of Mobile Phone</option>
							<option value="NO Violation">NO Violation</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a477" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a487" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				</table></div></div>
		<br>


			<div><h1 style="font-size:150%;width: 100%;text-align:  left;opacity: 1; background-color: #c0c0c0;  color: #0099cc;padding-bottom: 20px;padding-top: 20px"> &emsp;E. Persons Other Than Drivers Involved in the Accident</h1></div>
			<div style="padding: 20px">
			<div class="cont1" style="text-align: left; width: 1000px;padding: 10px"><table style="width:100%">
				<col style="width:5%">
				<col style="width: 100px">
				<col style="width: 80px">
				<col style="width: 40px">
				<col style="width: 130px">
				<col style="width: 80px">
				<col style="width: 80px">
			  	<tr>
    				<th>S.No.</th>
					<th>Persons Involved</th>
					<th>Sex</th>
					<th>Age</th>
					<th>Impacting Vehicle</th>
					<th>Type of Injury</th>
					<th>Using Requisite Safety Device</th>
  				</tr>
				<tr>
					<td><input name="a491" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a501" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Passenger">Passenger</option>
							<option value="Pedestrian">Pedestrian</option>
							<option value="Cyclist">Cyclist</option>
						</select></td>
					<td><select name="a511" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>

					<td><input type="number" style="width: 94%;font-size: 12pt" name="a521"></td>
					<td><select name="a531" style="width:100%  ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><select name="a541" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a551" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a492" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a502" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Passenger">Passenger</option>
							<option value="Pedestrian">Pedestrian</option>
							<option value="Cyclist">Cyclist</option>
						</select></td>
					<td><select name="a512" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>

					<td><input type="number" style="width: 94%;font-size: 12pt" name="a522"></td>
					<td><select name="a532" style="width:100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><select name="a542" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a552" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a493" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a503" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Passenger">Passenger</option>
							<option value="Pedestrian">Pedestrian</option>
							<option value="Cyclist">Cyclist</option>
						</select></td>
					<td><select name="a513" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>

					<td><input type="number" style="width: 94%;font-size: 12pt" name="a523"></td>
					<td><select name="a533" style="width:100%  ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><select name="a543" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a553" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a494" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a504" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Passenger">Passenger</option>
							<option value="Pedestrian">Pedestrian</option>
							<option value="Cyclist">Cyclist</option>
						</select></td>
					<td><select name="a514" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>

					<td><input type="number" style="width: 94%;font-size: 12pt" name="a524"></td>
					<td><select name="a534" style="width:100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><select name="a544" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a554" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a495" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a505" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Passenger">Passenger</option>
							<option value="Pedestrian">Pedestrian</option>
							<option value="Cyclist">Cyclist</option>
						</select></td>
					<td><select name="a515" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>

					<td><input type="number" style="width: 94%;font-size: 12pt" name="a525"></td>
					<td><select name="a535" style="width:100%  ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><select name="a545" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a555" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a496" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a506" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Passenger">Passenger</option>
							<option value="Pedestrian">Pedestrian</option>
							<option value="Cyclist">Cyclist</option>
						</select></td>
					<td><select name="a516" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>

					<td><input type="number" style="width: 94%;font-size: 12pt" name="a526"></td>
					<td><select name="a536" style="width:100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><select name="a546" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a556" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
				<tr>
					<td><input name="a497" type="number" style="width: 92%;font-size: 12pt"></td>
					<td><select name="a507" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Passenger">Passenger</option>
							<option value="Pedestrian">Pedestrian</option>
							<option value="Cyclist">Cyclist</option>
						</select></td>
					<td><select name="a517" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						</select></td>

					<td><input type="number" style="width: 94%;font-size: 12pt" name="a527"></td>
					<td><select name="a537" style="width:100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Motorised Two Wheeler">Motorised Two Wheeler</option>
							<option value="Auto Rickshaw">Auto Rickshaw</option>
							<option value="Car/Jeep/Van/Taxi">Car/Jeep/Van/Taxi</option>
							<option value="Bus">Bus</option>
							<option value="Truck/Lorry">Truck/Lorry</option>
							<option value="Heavy Articulated Vehicle/Trolly">Heavy Articulated Vehicle/Trolly</option>
							<option value="Tempo/Tractor">Tempo/Tractor</option>
							<option value="Bicycle">Bicycle</option>
							<option value="Cycle Rickshaw">Cycle Rickshaw</option>
							<option value="Hand Drawn Cart">Hand Drawn Cart</option>
							<option value="Animal Drawn Cart">Animal Drawn Cart</option>
							<option value="Others">Others</option>
						</select></td>
					<td><select name="a547" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Fatal">Fatal</option>
							<option value="Injury needing Hospitalisation">Injury needing Hospitalisation</option>
							<option value="Injury NOT needing Hospitalisation">Injury NOT needing Hospitalisation</option>
							<option value="No injury">No injury</option>
							<option value="Not Known">Not Known</option>
						</select></td>
					<td><select name="a557" style="width: 100% ;font-size: 12pt;height: 25px">
						<option value="" disabled selected>Select Option</option>
							<option value="Helmet Used">Helmet Used</option>
							<option value="Helmet Not Used">Helmet Not Used</option>
							<option value="Seat Belt Used">Seat Belt Used</option>
							<option value="Seat Belt Not Used">Seat Belt Not Used</option>
							<option value="Not Known">Not Known</option>
						</select></td>
				</tr>
			</table><div style="padding-top: 20px;width: 100%"><textarea rows="8" name="remarks" cols="103" placeholder="REMARKS" style="font-size: 12pt;border:solid  #fff"></textarea></div></div></div>
				<label><b>Accident Photos </b></label><br>
				<label>File name:<input style = "padding-left : 40px" type="file" name="file[]" id="file" multiple="multiple"><br></label>



				<div style="padding: 10px;padding-bottom: 40px"><input type="submit" name="submit" value="Submit" style="width: 100px;height: 40px;font-size: 14pt;color:red"></div>
		</fieldset><br><br><br>
	</div>
	</div>

	</form><br><br><br>
<script type="text/javascript">


        var map;
        var markers = [];
        function initMap() {
            var latitude = 17.386543337;
            var longitude =  78.484885589;

            var myLatLng = {lat: latitude, lng: longitude};

            map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              zoom: 8,
              disableDoubleClickZoom: true, // disable the default map zoom on double click
            });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              //title: 'Hello World'

              // setting latitude & longitude as title of the marker
              // title is shown when you hover over the marker
              title: latitude + ', ' + longitude
            });

        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });

            // Update lat/long value of div when anywhere in the map is clicked
           /* google.maps.event.addListener(map,'click',function(event) {
                document.getElementById('latclicked1').value = event.latLng.lat();
                document.getElementById('longclicked1').value =  event.latLng.lng();
            });*/

            // Update lat/long value of div when you move the mouse over the map
            google.maps.event.addListener(map,'mousemove',function(event) {
                document.getElementById('latmoved').innerHTML = event.latLng.lat();
                document.getElementById('longmoved').innerHTML = event.latLng.lng();
            });



            // Update lat/long value of div when the marker is clicked
            marker.addListener('click', function(event) {
              document.getElementById('latclicked1').value = event.latLng.lat();
              document.getElementById('longclicked1').value =  event.latLng.lng();
            });

            // Create new marker on double click event on the map
            google.maps.event.addListener(map,'dblclick',function(event) {
            	 markers.forEach(function(marker) {
            marker.setMap(null);
          });
           document.getElementById('latclicked1').value = event.latLng.lat();
              document.getElementById('longclicked1').value =  event.latLng.lng();
                markers.push( new google.maps.Marker({
                  position: event.latLng,
                  map: map,
                  title: event.latLng.lat()+', '+event.latLng.lng()
                }));

                // Update lat/long value of div when the marker is clicked
                marker.addListener('click', function() {
                  document.getElementById('latclicked1').value = event.latLng.lat();
                  document.getElementById('longclicked1').value =  event.latLng.lng();
                });
            });

            // Create new marker on single click event on the map
            /*google.maps.event.addListener(map,'click',function(event) {
                var marker = new google.maps.Marker({
                  position: event.latLng,
                  map: map,
                  title: event.latLng.lat()+', '+event.latLng.lng()
                });
            });*/

             // Create the search box and link it to the UI element.

        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVD1C8a29ZMRBRzgHCrEKBjOSvV2UFakw&libraries=places&callback=initMap"
        async defer></script>
         <script type="text/javascript">var mbsd_sane_enter_key = function() {
  var input_types;
  input_types ="input, select, button, textarea,checkmark,text";

  return $("body").on("keydown", input_types, function(e) {
    var enter_key, form, input_array, move_direction, move_to, new_index, self, tab_index, tab_key;
    enter_key = 13;
    tab_key = 9;

    if (e.keyCode === tab_key || e.keyCode === enter_key) {
      self = $(this);

      // some controls should react as designed when pressing enter
      if (e.keyCode === enter_key && self.prop('type') ==="submit" ) {
         return true;
       }

      form = self.parents('form:eq(0)');

      // Sort by tab indexes if they exist
      tab_index = parseInt(self.attr('tabindex'));
      if (tab_index) {
        input_array = form.find("[tabindex]").filter(':visible').sort(function(a, b) {
          return parseInt($(a).attr('tabindex')) - parseInt($(b).attr('tabindex'));
        });
      } else {
        input_array = form.find(input_types).filter(':visible');
      }

      // reverse the direction if using shift
      move_direction = e.shiftKey ? -1 : 1;
      new_index = input_array.index(this) + move_direction;

      // wrap around the controls
      if (new_index === input_array.length) {
        new_index = 0;
      } else if (new_index === -1) {
        new_index = input_array.length - 1;
      }

      move_to = input_array.eq(new_index);
      move_to.focus();
      move_to.select();
      return false;
    }
  });
};
$(window).on('ready page:load', function () {
		mbsd_sane_enter_key();
})
</script>
</body>

</html>
