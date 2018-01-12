

<!doctype html>
<html>

<head>
	<meta charset="utf-8" name="class[]" value="viewport" content="width=device-width, initial-scale=1">
	<title>推薦課程</title>
	<link rel="stylesheet" href="http:code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https:code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https:code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https:code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http:code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="http:code.highcharts.com/highcharts.js"></script>
	<script src="js/perf_highcharts.js"></script>
	<style>
		body 
		{
			font-family: "Lato", sans-serif;
		}

		div.tab 
		{
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
		}

		div.tab button 
		{
			background-color: inherit;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 17px;
		}

		div.tab button:hover 
		{
			background-color: #ddd;
		}

		div.tab button.active 
		{
			background-color: #ccc;
		}

		.tabcontent 
		{
			display: none;
			padding: 6px 12px;
			border: 1px solid #ccc;
			border-top: none;
		}
	</style>
</head>
<body>
			
				<div data-role="page" style="">
					<table>
						<tr>
						<!--側邊選單-->
							<td style="border-right:solid 1px #b1b2b4; vertical-align:top;background-color:#DDDDDD; width:200px;padding-left:1%;padding-top:1%;">
								<div style="">
									<a href="lesson.html" data-ajax="false" style="font-family:微軟正黑體; font-size:25px; text-decoration:none;">課程推薦</a><br>
									<a href="nopass.html" data-ajax="false" style="font-family:微軟正黑體; font-size:25px; text-decoration:none;">當掉率分析</a>
								</div>
							</td>
							<td style="width:80%;">
								<div id="one" class="ui-body-d tablist-content" style="padding-left:3%;">
							<form  method="post" enctype="multipart/form-data" action ="filter.php" >
								<select name="select-choice" id="select-choice" data-mini="true" data-inline="true">
									<option value="5">5筆</option>
									<option value="10">10筆</option>
									<option value="15">15筆</option>
									<option value="20">20筆</option>
								</select>
								<input id="Submit" type="image" src="search.png" style="width:25px;vertical-align: middle;padding-top:5px;"/>
							</form>
							<BR>
							<?php
								
								$temp ="";
								$temp = $_SESSION["sql"]." limit ".$_POST['select-choice'];
								require_once 'ConnectionFactory.php';
								$myclass=$temp;
echo $myclass;
	 
								$conn = ConnectionFactory::getFactory()->getConnection();
								  $stmt = $conn->prepare($myclass);
								  $stmt->execute();
								  echo"<table data-role='table' id='movie-table' data-mode='reflow' class='ui-responsive' style='padding:5;'><thead><tr>
										  <th data-priority='1' >推薦課程</th>
										  <th data-priority='persist' style='width:300px;'>推薦星數</th>
										  <th data-priority='2'>預估分數</th>
										  
										  
										</tr>
									  </thead>";
		  $result = $stmt->fetchAll(PDO::FETCH_CLASS);
		 
		  foreach ($result as $value) 
		  {	
		   //推薦課程
			echo "<tr><td>".$value->name."</td><td >";
			//推薦星數
			if($value->trust>90)
				echo "<img src='5star.jpg' style='width:100px;' /></td>";
			else if ($value->trust<90 && $value->trust>80)
				echo "<img src='4star.jpg' style='width:100px;' /></td>";
			else if ($value->trust<80 && $value->trust>70)
				echo "<img src='3star.jpg' style='width:100px;' /></td>";
			else if ($value->trust<70 && $value->trust>60)
				echo "<img src='2star.jpg' style='width:100px;' /></td>";
			else
				echo "<img src='1star.jpg' style='width:100px;' /></td>";
			//預估分數
			if($value->trust+$_SESSION["score"]>80)
				echo "<td>A</td>";
			else if($value->trust+$_SESSION["score"]>70 && $value->trust+$_SESSION["score"]<79)
				echo "<td'>B</td>";
			else if($value->trust+$_SESSION["score"]>60 && $value->trust+$_SESSION["score"]<69)
				echo "<td>C</td>";
			else if($value->trust+$_SESSION["score"]<49)
				echo "<td>F</td>";
			echo "</tr>";
		  }
		echo"</table>";
		  $conn = null;
	  
	  
?>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
						</tr>
					</table>
				</div>
</body>
</html>

