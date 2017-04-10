<?php

	    $db_host='localhost';
		$db_username='root';
		$db_password='';
		$db_name='foodnonfood';
		$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die(mysqli_error());
		
		
			// Select all the rows in the markers table
		$query = "SELECT * FROM food_requests WHERE 1";
		$result = mysqli_query($db_connect,$query);
		if (!$result) {
		  die('Invalid query: ' . mysql_error());
		}

		function parseToXML($htmlStr)
		{
		$xmlStr=str_replace('<','&lt;',$htmlStr);
		$xmlStr=str_replace('>','&gt;',$xmlStr);
		$xmlStr=str_replace('"','&quot;',$xmlStr);
		$xmlStr=str_replace("'",'&#39;',$xmlStr);
		$xmlStr=str_replace("&",'&amp;',$xmlStr);
		return $xmlStr;
		}

		header("Content-type: text/xml");
		// Start XML file, echo parent node
		echo '<markers>';

		// Iterate through the rows, printing XML nodes for each
		while ($row = @mysqli_fetch_assoc($result)){
		  // Add to XML document node
		  echo '<marker ';
		  echo 'id="' . parseToXML($row['id']) . '" ';
		  echo 'foodlevel="' . $row['foodlevel'] . '" ';
		  echo 'latitude="' . $row['latitude'] . '" ';
		  echo 'latitude="' . $row['longtitude'] . '" ';
		  echo 'address="' . $row['address'] . '" ';
		  
		  echo '/>';
		}

		// End XML file
		echo '</markers>';

?>