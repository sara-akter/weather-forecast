<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather forecasting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- 
    <link href="img/fav.ico" rel="icon" type="images/x-icon"/> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
		<div id="mainBody" class="main_body">
			<div class="main_content_overlay">
				<div id="mainHeader" class=" row header">
					<div class="col-md-12">
						<p id="location">
							<span id="state">Dhaka</span>
							<span id="country">Bangladesh</span>  </p>
						<p class="top_header"> C | F </p>
					</div>
				</div>
				<div id="mainContent" class="row main_content">
					<div class="col-md-4 col-sm-4 col-xs-4">
						<div class="status_icon">
							<img id="statusIcon">
						</div>
					</div>

					<div id="currentTempAmound" class="col-md-4 col-sm-4 col-xs-4">
						<div class="current_temp_amount neon">
							<p id="current">21 <sup class="degree">o</sup> C </p>
						</div>
					</div>
					<div id="lowHigh" class="col-md-4 col-sm-4 col-xs-4">
						<div class="low_high">
							<p id="mainLow">Low</p>
							<p id="mainHigh">High</p>
						</div>
					</div>
				</div>
				<div id="mainStatus" class="row main_status">
					<div class="col-md-6 col-sm-6 col-xs-6 current_status">
						<p id="status">rainy</p>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 current_humidity">
						<p id="humidity">Humidity</p>
					</div>
				</div>

			<!-- 	secondary Temp Humidity section -->
				<div id="secTH" class="row">
					<div class="col-md-1"></div>
					<div id="secondaryTempHumidity" class="col-md-2 col-sm-4 col-xs-6">
						<div id="" class="sec_temp_humidity">
							<div id="secondaryTemp1" class="">
								<p>21 <sup>o</sup></p>
							</div>
							<div id="secondaryHumidity1" class="">
								<p>25%</p>
							</div>
						</div>
					</div>
					<div id="secondaryTempHumidity" class="col-md-2 col-sm-4 col-xs-6">
						<div id="" class="sec_temp_humidity">
							<div id="secondaryTemp2" class="">
								<p>21 <sup>o</sup></p>
							</div>
							<div id="secondaryHumidity2" class="">
								<p>25%</p>
							</div>
						</div>
					</div>
					<div id="secondaryTempHumidity" class="col-md-2 col-sm-4 col-xs-6">
						<div id="" class=" sec_temp_humidity">
							<div id="secondaryTemp3" class="">
								<p>21 <sup>o</sup></p>
							</div>
							<div id="secondaryHumidity3" class="">
								<p>25%</p>
							</div>
						</div>
					</div>
					<div id="secondaryTempHumidity" class="col-md-2 col-sm-4 col-xs-6">
						<div id="" class=" sec_temp_humidity">
							<div id="secondaryTemp4" class="">
								<p>21 <sup>o</sup></p>
							</div>
							<div id="secondaryHumidity4" class="">
								<p>25%</p>
							</div>
						</div>
					</div>
					<div id="secondaryTempHumidity" class="col-md-2 col-sm-4 col-xs-6">
						<div id="" class=" sec_temp_humidity">
							<div id="secondaryTemp5" class="">
								<p>21 <sup>o</sup></p>
							</div>
							<div id="secondaryHumidity5" class="">
								<p>25%</p>
							</div>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>	


    <!--script start-->	

        <script type="text/javascript" src="js/script.js"></script>

    <!--script end-->

</body>
</html>