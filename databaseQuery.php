<script src="jquery-1.9.1.js"></script>
<script type="text/javascript">
/*
    $(document).ready(function(){
        $("#addBtn").click(function(){
        	alert();
        	var websiteTxtbox = $("#websiteNameId").val();
        	var clubNameTxtbox = $("#clubNameId").val();
        	var leagueDrpbox = $("#leagueId").val();
        	$.ajax({
        		url: "databaseQuery.php",
        		method: "GET",
        		data:{website:websiteTxtbox},
        		dataType: "json",

        		success: function(result){
        			alert(result)
        		},


        	});
        });
    });
    */
</script>
<?php
echo $_GET['website'];
?>