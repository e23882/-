
<!doctype html>
<html>

<head>
	<meta charset="utf-8" name="class[]" value="viewport" content="width=device-width, initial-scale=1">
	<title>推薦課程</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
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
									<a href="nopass.html" data-ajax="false" style="font-family:微軟正黑體; font-size:25px; text-decoration:none;">老師關心分析</a>
								</div>
							</td>
							<td style="width:80%;">
								<div id="one" class="ui-body-d tablist-content" style="padding-left:3%;">
							
							<BR>
<?php
//呼叫資料庫
	require_once 'ConnectionFactory.php';
	//加權變數
	$score = 0;
										$year = 0;
											// echo "<br>入學年度 : ".$_POST['select-choice-year']
											// ."<br>入學管道 : ".$_POST['select-choice-intoschool']
											// ."<br>性別 : ".$_POST['radio-choice_sex1']
											// ."<br>來自哪裡 : ".$_POST['select-choice-from']
											// ."<br>21紀錄 : ".$_POST['radio-choice_21']
											// ."<br>年級 : ".$_POST['radio-choice_grade']
											// ;
											//入學年度
											 if($_POST['select-choice-year']==103)
											 {
												$score+=0.78;
												$year = 103;
											 }
											 else if($_POST['select-choice-year']==102)
											 {
												$score+=0.815;
												$year = 102; 
											 }
											 else if($_POST['select-choice-year']==101)
											 {
												$score+=1.22;
												$year = 101; 
											 }
											 else if($_POST['select-choice-year']==100)
											 {
												$score+=1.53;
												$year = 100;
											 }
											 else if($_POST['select-choice-year']==99)
											 {
												$score+=1.9;
												$year = 99;
											 }
											 else if($_POST['select-choice-year']==98)
											 {
												$score+=2.62;
												$year = 98;
											 }
											 else if($_POST['select-choice-year']==97)
											 {
												$score+=2.95;
												$year = 97;
											 }
											 else if($_POST['select-choice-year']==96)
											 {
												$score+=3.02;
												$year = 96;
											 }
											 else if($_POST['select-choice-year']==95)
											 {
												$score+=0.9;
												$year = 95;
											 }
											 else if($_POST['select-choice-year']==94)
											 {
												$score+=2.48;
												$year = 94;
											 }
											 else if($_POST['select-choice-year']==93)
											 {
												$score+=-3.3;
												$year = 93;
											 }
											 else if($_POST['select-choice-year']==92)
											 {
												$score+=0.65;
												$year = 92;
											 }
											 else
											 {
												$score+=0;
												$year = 104;
											 }
												 
											//入學管道
											$intoschool = "";
											if($_POST['select-choice-intoschool']=='A')
											{
												$score+=1.76;
												$intoschool = "個人申請";
											}
												
											else if($_POST['select-choice-intoschool']=='B')
											{
												$score+=1.77;
												$intoschool = "學校推薦";
											}
												
											else if($_POST['select-choice-intoschool']=='C')
											{
												$score+=1.55;
												$intoschool = "繁星";
											}
												
											else if($_POST['select-choice-intoschool']=='D')
											{
												$score+=1.71;
												$intoschool = "考試入學";
											}
												
											else if($_POST['select-choice-intoschool']=='E')
											{
												$score+=2.6;	
												$intoschool = "國外申請";
											}
											else
											{
												$score+=0;
												$intoschool = "轉學考";
											}
												
											//性別
											$sex = "";
											if($_POST['radio-choice_sex1']=='girl')
											{
												$score+=0.1;
												$sex = "女生";
											}
											else
												$sex = "男生";
												
											//來自哪裡
											$comefrom = "";
											if($_POST['select-choice-from']=='live_1')
											{
												$score+=-1.2;
												$comefrom = "南投";
											}
											 else if($_POST['select-choice-from']=='live_2')//嘉義市
											 {
												$score+=-0.4; 
												$comefrom = "嘉義市";
											 }
											 else if($_POST['select-choice-from']=='live_3')//嘉義縣
											 {
												$score+=0.83;
												$comefrom = "嘉義縣"; 
											 }
											 else if($_POST['select-choice-from']=='live_4')//基隆市
											 {
												$score+=2.77;
												$comefrom = "基隆市"; 
											 }
											 else if($_POST['select-choice-from']=='live_5')//宜蘭縣
											 {
												$score+=1.29;
												$comefrom = "宜蘭縣"; 
											 }
											 else if($_POST['select-choice-from']=='live_6')//屏東
											 {
												$score+=-0.46;
												$comefrom = "屏東縣"; 
											 }
											 else if($_POST['select-choice-from']=='live_7')//彰化
											 {
												$score+=0.41;
												$comefrom = "彰化縣"; 
											 }
											 else if($_POST['select-choice-from']=='live_8')//新北
											 {
												$score+=0.48;
												$comefrom = "新北市(台北市)"; 
											 }
											 else if($_POST['select-choice-from']=='live_9')//新竹市
											 {
												$score+=-0.75;
												$comefrom = "新竹市"; 
											 }
											 else if($_POST['select-choice-from']=='live_10')//新竹縣
											 {
												$score+=1.19;
												$comefrom = "新竹縣"; 
											 }
											 else if($_POST['select-choice-from']=='live_11')//桃園市
											 {
												$score+=4.05;
												$comefrom = "桃園市"; 
											 }												 
											 else if($_POST['select-choice-from']=='live_12')//桃園縣
											 {
												$score+=-1.97;
												$comefrom = "桃園縣"; 
											 }
											 else if($_POST['select-choice-from']=='live_13')//台中市
											 {
												$score+=0.86;
												$comefrom = "台中市"; 
											 }
											 else if($_POST['select-choice-from']=='live_14')//台南市
											 {
												$score+=1.09;
												$comefrom = "台南市"; 
											 }
											 else if($_POST['select-choice-from']=='live_15')//台東縣
											 {
												$score+=6.49;
												$comefrom = "台東縣"; 
											 }
											 else if($_POST['select-choice-from']=='live_16')//花蓮縣
											 {
												$score+=7.02;
												$comefrom = "花蓮縣"; 
											 }
											 else if($_POST['select-choice-from']=='live_17')//苗栗
											 {
												$score+=3.5;
												$comefrom = "苗栗縣"; 
											 }
											 else if($_POST['select-choice-from']=='live_18')//金門
											 {
												$score+=1.2; 
												$comefrom = "金門縣"; 
											 }
												
											 else if($_POST['select-choice-from']=='live_19')//雲林
											 {
												$score+=0.07;
												$comefrom = "雲林縣"; 
											 }
												
											 else if($_POST['select-choice-from']=='live_20')//高雄
											 {
												$score+=-0.33;
												$comefrom = "高雄縣"; 
											 }
											 else
											 {
												$score+=0;
												$comefrom = "其它縣市"; 
											 }
												 
											 //21紀錄
											 $is21 = "";
											if($_POST['radio-choice_21']=='21yes')
											{
												$score+=7;
												$is21 ="有二一紀錄";
											}
											else
												$is21 ="沒有二一紀錄";
											$grade ="";
											if($_POST['radio-choice_grade']=='grade1')
											{
												$score+=-0.714;
												$grade = "一";
											}
											else if($_POST['radio-choice_grade']=='grade2')
												$grade = "二";
											else if($_POST['radio-choice_grade']=='grade3')
												$grade = "三";
											else if($_POST['radio-choice_grade']=='grade4')
												$grade = "四";
											else
												$grade = "其它年級";
	$myclass="";
	if(!empty($_POST["class"]))
	{
		$class = $_POST["class"];
		//分割陣列
		$allclass = implode("%' or '%",$class);
		
		$myclass = "select distinct  b.class_name as name,max(a.trust) as trust, b.avgScore from rule a join class_name b on a.r_class = b.class_code where a.rule like '%".$allclass."%' group by a.r_class order by trust desc";
	}
	else
	{
		$allclass = "";
		$myclass = "select distinct  b.class_name as name,max(a.trust) as trust, b.avgScore from rule a join class_name b on a.r_class = b.class_code where a.rule like '%".$allclass."%' group by a.r_class order by trust desc";
	}
		
	
	// echo $myclass;
	
	  //連接資料庫
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
		  $count = 0;
		  foreach ($result as $value) 
		  {
			$count++;
		   //推薦課程
			echo "<tr><td>".$value->name."</td><td >";
			//推薦星數
			if($value->trust>90)
				echo "<img src='5star.jpg' style='width:100px;' /></td>";
			else if ($value->trust<=90 && $value->trust>80)
				echo "<img src='4star.jpg' style='width:100px;' /></td>";
			else if ($value->trust<=80 && $value->trust>70)
				echo "<img src='3star.jpg' style='width:100px;' /></td>";
			else if ($value->trust<=70 && $value->trust>60)
				echo "<img src='2star.jpg' style='width:100px;' /></td>";
			else
				echo "<img src='1star.jpg' style='width:100px;' /></td>";
			//預估分數
			if($value->avgScore +$score>=90)
				echo "<td>A+</td>";
			else if($value->avgScore +$score>=85 && $value->avgScore +$score<90)
				echo "<td>A</td>";
			else if($value->avgScore +$score>=80 && $value->avgScore +$score<85)
				echo "<td>A-</td>";
			else if($value->avgScore +$score>=77 && $value->avgScore +$score<80)
				echo "<td>B+</td>";
			else if($value->avgScore +$score>=73 && $value->avgScore +$score<77)
				echo "<td>B</td>";
			else if($value->avgScore +$score>=70 && $value->avgScore +$score<73)
				echo "<td>B-</td>";
			else if($value->avgScore +$score>=67 && $value->avgScore +$score<70)
				echo "<td>C+</td>";
			else if($value->avgScore +$score>=63 && $value->avgScore +$score<67)
				echo "<td>C</td>";
			else if($value->avgScore +$score>=60 && $value->avgScore +$score<63)
				echo "<td>C-</td>";
			else if($value->avgScore +$score<60)
				echo "<td>F</td>";
			else
				echo "<td>error</td>";
			
		  }
		  if($count==0)
			  echo "<td style='color:red;font-family:標楷體;font-size:30px;padding-left:8px;'>無推薦結果</td>";
		echo"</tr></table>";
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

