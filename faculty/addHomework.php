<html>
  <head>
    <title>Add Homework</title>
    <script src="add_delete.js"></script>
     <style type="text/css">
    html{font-size:12px;}
	fieldset{width:500px; margin: 0 auto;}
	legend{font-weight:bold; font-size:14px;}
	label{float:left; width:70px; margin-left:10px;}
	.left{margin-left:80px;}
	.input{width:250px;}
	span{color: #666666;}
  </style>
  </head>
  <div>
    <fieldset>
      <legend> Add Homework </legend>
      <form name="AddHomework" method="post" action=<?php 
      $course_id = $_GET['id'];
      echo "newHomework.php?id=$course_id" ?>>
	<p>
	  <label for="description" class="label">Description:</label>
	  <input id="description" name="description" type="text" class="input"/>
	<p>
	  <label for="title" class="label">Title:</label>
	  <input id="title" name="title" type="text" class="input"/>
	</p>
	<p>
	  <label for="deadline" class="label">Deadline(date and time):</label>
	  <input id="deadline" name="deadline" type="datetime-local" class="input"/>
	  
	<p>
	  <label for="point" class="label">Point value:</label>
	  <input id="point" name="point" type="text" class="input"/>
	</p>
	
	<p>
	  <button onclick="submit()">Submit</button>
	</p>
	<p id="output"></p>
	</form>
      </fieldset>
</html>
