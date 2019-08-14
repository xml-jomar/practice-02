<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>

<style type="text/css">
	h1{
		color:red;
	}
	table{
		border-collapse: collapse;
	}
</style>
<body>
<form id="formPost1" method="GET" action="xmlOutput.php">
<center>
<h1>
Sample 'Add New Club Form'.
</h1>
<br>
<table>
<tr>
    <td>
        League Name:
    </td>
    <td>
    <select id="leagueId" name="">
        <option value="-">Select a league</option>
        <option value="Premier League">Premier League</option>
        <option value="Championship">Championship</option>
    </select>
    </td>
</tr>
<tr>
    <td>
        Club Name:
    </td>
    <td>
        <input type="text" name="" id="clubNameId">
    </td>
</tr>
<tr>
    <td>
        Website:
    </td>
    <td>
        <input type="text" name="" id="websiteNameId">
    </td>
</tr>
<tr>
    <td colspan="=2">
        <input type="submit" name="addWebsite" id="addBtn" value="Add New Club"><input type="submit" name="" value="Generate">
    </td>
</tr>
</table>
</center>
</form>

<?php
/*
    //if(isset($_POST['formPost1'])){
function insertQuery($league,$clubName,$website){
    try{
    	$leagueDetails = $league;
    	$clubDetails = $clubName;
    	$websiteDetails = $website;

        $username = "xmlTest";
        $password = "dX\$Qne5i4!98ge37";

        $db = new PDO("mysql:host=localhost;dbname=xml_test", $username, $password);
        $insertQuery = $db->prepare("INSERT INTO markGuarismo('id','league_name','club_name','website') VALUES(NULL,'".$leagueDetails."','".$clubDetails."','".$websiteDetails."')");
        $insertQuery->execute();

      
        	//echo "Database connected!";
    }catch(Exception $e){
        echo $e;
    }

}
if(isset($_POST['addWebsite'])){
    if($_POST['leagueName'] == "-"){
        echo "<script> alert('Please select a league!');</script>";
    
    }else{
    	$xml = new SimpleXMLElement('<clubs/>');
    	$clubs = $xml->addChild('clubs');
    	$clubs->addChild('league_name',$_POST['leagueName']);
    	Header('Content-type: text/xml');
    	print($xml->asXML());



     //echo "<script> alert('ok!');</script>";    	
    }
}
if(isset($_POST['generateXml'])){

}
*/

?>
</body>
</html>

