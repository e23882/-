


<!doctype html>
<html>

<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>老師關心分析結果</title>
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
	<!--側邊選單-->
	
				<div data-role="page" style="">
					<table>
						<tr>
							<td style="border-right:solid 1px #b1b2b4; vertical-align:top;background-color:#DDDDDD; width:200px;padding-left:1%;padding-top:1%;">
								<div style="">
									<a href="lesson.html" data-ajax="false" style="font-family:微軟正黑體; font-size:25px; text-decoration:none;">課程推薦</a><br>
									<a href="nopass.html" data-ajax="false" style="font-family:微軟正黑體; font-size:25px; text-decoration:none;">老師關心分析</a>
								</div>
							</td>
							<td style="width:80%;">
								 <div id="one" class="ui-body-d tablist-content" style="padding-left:3%;">
									<?php
										//入學年度
											//92	0.65
											//93	-3.3
											//94	2.48
											//95	0.9
											//96	3.02
											//97	2.95
											//98	2.62
											//99	1.9
											//100	1.53
											//101	1.22
											//102	0.815
											//103	0.78
											//104	0
										//入學管道
											//A:個人申請  1.76
											//B:學校推薦  1.77
											//C:繁星  	  1.55
											//D:考試入學  1.71
											//E:外國申請  2.6
											//F:轉學考    0
										//性別
											//男 0 女 0.1
										//來自
											//南投		-1.2
											//嘉義市	-0.4
											//嘉義縣	0.83
											//基隆市	2.77
											//宜蘭縣	1.29
											//屏東		-0.46
											//彰化縣	0.41
											//新北		0.48
											//新竹市	-0.75
											//新竹縣	1.19
											//桃園市	4.05
											//桃園縣	-1.97
											//台中市	0.86
											//台南市	1.09
											//台東縣	6.49
											//花蓮縣	7.02
											//苗栗縣	3.5
											//金門		1.2
											//雲林		0.07
											//高雄		-0.33
											//其它		0
										//21 
											//有 7 	無 0
										//年級 
											//一 	-0.714
										//最高:18.81 (3.02 + 1.77 + 7.02 + 7)
										//最低:-5.984  (-3.3 + -1.97 + -0.714)
										//		24.894
										//級距(分十級) 2.4794
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
											//全部數字加上最大負數的絕對值
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
												$score+=-3.3+5.984;
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
												$score+=-1.2+5.984;
												$comefrom = "南投";
											}
											 else if($_POST['select-choice-from']=='live_2')//嘉義市
											 {
												$score+=-0.4+5.984; 
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
												$score+=-0.46+5.984;
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
												$score+=-1.97+5.984;
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
												$score+=-0.33+5.984;
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
												$score+=-0.714+5.984;
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
												
											//四捨五入 round
											echo "<table data-role='table' id='movie-table' data-mode='reflow' class='ui-responsive'><thead><tr>
										  <th data-priority='1'>入學年度</th>
										  <th data-priority='persist'>入學管道</th>
										  <th data-priority='2'>性別</th>
										  <th data-priority='3'>來自</th>
										  <th data-priority='4'>二一記錄</th>
										  <th data-priority='5'>年級</th>
										  <th data-priority='6'>需要關心程度</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
										  <th>".$year."</th><td>".$intoschool."</td><td>".$sex."</td>
										  <td>".$comefrom."</td>
										  <td>".$is21."</td>
										  <td>".$grade."</td>
										  
										  <td>".(100-round(($score/24.894)*100))."%</td>";
											
											
											
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


