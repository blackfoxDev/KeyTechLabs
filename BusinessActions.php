<?php

try
{
	//Open database connection
	$con = mysql_connect("localhost:3306","rocklee45","N@ruto45");
	mysql_select_db("jtabletestdb2", $con);

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		//Get records from database
		$result = mysql_query("SELECT * FROM business;");
		$jtSorting = mysql_query("SELECT * FROM business ORDER BY BusinessName ASC LIMIT 20,10;");
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		//Insert record into database
		$result = mysql_query("INSERT INTO business(BusinessName, comments, ConsultantName, InterviewDescription, InterviewQuestion, IssuePriority, Needs, StackholderName, StackholderResponsibility, StackholderScorecard, Timeline, Topissues) VALUES('" . $_POST["BusinessName"] . "', '" . $_POST["comments"] . "', '" . $_POST["ConsultantName"] . "', '" . $_POST["InterviewDescription"] . "', '" . $_POST["InterviewQuestion"] . "', '" . $_POST["IssuePriority"] . "', '" . $_POST["Needs"] . "', '" . $_POST["StackholderName"] . "', '" . $_POST["StackholderResponsibility"] . "', '" . $_POST["StackholderScorecard"] . "', '" . $_POST["Timeline"] . "', '" . $_POST["Topissues"] . "');");
				
		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM business WHERE BusinessId = LAST_INSERT_ID();");
		$row = mysql_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{
		//Update record in database
		$result = mysql_query("UPDATE business SET BusinessName = '" . $_POST["BusinessName"] . "',  comments = '" . $_POST["comments"] . "', ConsultantName = '" . $_POST["ConsultantName"] . "', InterviewDescription = '" . $_POST["InterviewDescription"] . "', InterviewQuestion = '" . $_POST["InterviewQuestion"] . "', IssuePriority = '" . $_POST["IssuePriority"] . "', Needs = '" . $_POST["Needs"] ."', StackholderName = '" . $_POST["StackholderName"] ."', StackholderResponsibility = '" . $_POST["StackholderResponsibility"] ."', StackholderScorecard = '" . $_POST["StackholderScorecard"] ."', Timeline = '" . $_POST["Timeline"] ."', Topissues = '" . $_POST["Topissues"] ."' WHERE businessId = '" . $_POST["businessId"] . "';");
// 
		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM business WHERE businessId = " . $_POST["businessId"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	//Close database connection
	mysql_close($con);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>