<?php
    $topicTitle = $_POST['name'];
    $topicContent= $_POST['topic'];
    $category = $_POST['category'];
    
    
    mysql_connect("localhost", "root","");
    mysql_select_db("project_era_db");

    
    $result = mysql_query("insert into project(project_title, project_content, project_category) 
    	values('$topicTitle','$topicContent', '$category')");
	
	if(!$result) {
		echo "inserterror";
	}
	 else
	  {
		header("Location:branch/cse/cse.html");
	}
?>