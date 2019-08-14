<?php

function insertQuery($league,$clubName,$website){
    try{

    	$leagueDetails = $_GET['leagueName'];
    	$clubDetails = $_GET['clubName'];
    	$websiteDetails = $_GET['websiteName'];

        $username = "xmlTest";
        $password = "dX\$Qne5i4!98ge37";

        $db = new PDO("mysql:host=localhost;dbname=xml_test", $username, $password);
        $insertQuery = $db->prepare("INSERT INTO markGuarismo(`id`,`league_name`,`club_name`,`website`) VALUES(NULL,'".$leagueDetails."','".$clubDetails."','".$websiteDetails."')");
        if(!$insertQuery->execute()){
        	echo "<pre>".print_r($insertQuery->errorInfo(),1)."</pre>";
        }

    }catch(Exception $e){
        echo $e;
    }

}

function QueryData(){
    try{

        $username = "xmlTest";
        $password = "dX\$Qne5i4!98ge37";

        $db = new PDO("mysql:host=localhost;dbname=xml_test", $username, $password);
        $selectQuery = $db->prepare("SELECT * FROM markGuarismo");
        $selectQuery->execute();
        $selectResult = $selectQuery->fetchAll(PDO::FETCH_ASSOC);
        return $selectResult;

        	//echo "Database connected!";
    }catch(Exception $e){
        echo $e;
    }	
}



if($_GET['addWebsite'] == "Add New Club"){
	
    	$xml = new SimpleXMLElement('<clubs/>');
    	$clubs = $xml->addChild('clubs');
    	$clubs->addChild('league_name',$_GET['leagueName']);
    	$clubs->addChild('club_name',$_GET['clubName']);
    	$clubs->addChild('website',$_GET['websiteName']);

    	Header('Content-type: text/xml');
    	print($xml->asXML());
    	
    	insertQuery($_GET['leagueName'],$_GET['clubName'],$_GET['websiteName']);


}
if($_GET['generateXml'] == "Generate"){
	$data = queryData();

	//echo "<pre>".print_r($data,1)."</pre>";
    	$xml = new SimpleXMLElement('<clubs/>');
    	foreach($data as $val){
	    	$clubs = $xml->addChild('clubs');
    	    $clubs->addChild('league_name',$val['league_name']);
    	    $clubs->addChild('club_name',$_val['club_name']);
    	    $clubs->addChild('website',$_val['website']);
        }
    	Header('Content-type: text/xml');
    	print($xml->asXML());

}
?>
