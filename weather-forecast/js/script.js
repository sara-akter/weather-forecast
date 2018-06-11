
//AJAX request for weather api
var current_loc, current_coun, current_temp, low, high, humidity, sts, statusIcon, main_body;

var weather = new XMLHttpRequest();
weather.open("GET", "http://api.openweathermap.org/data/2.5/weather?q=Dhaka,bd&units=metric&appid=b768f859692b8aa95f4812cb78383615",false);
weather.send();

var r = JSON.parse(weather.response);
 current_loc = r.name + ',';
 current_coun = r.sys.country;
 current_temp = Math.floor(r.main.temp) + '<sup class="degree">o</sup> C';
 low ='Min : ' + Math.floor(r.main.temp_min) + '<sup class="degree">o</sup> C';
 high ='Max : ' + Math.floor(r.main.temp_max) + '<sup class="degree">o</sup> C';
 humidity = 'Humidity : ' + r.main.humidity;
function getWeather(id,res) {
  document.getElementById(id).innerHTML=res;
}


getWeather("state",current_loc);
getWeather("country",current_coun);
getWeather("current",current_temp);
getWeather("mainLow",low);
getWeather("mainHigh",high);
getWeather("humidity",humidity);
//getWeather("secondaryTemp1",sec_temp);

/*bg change with status*/

sts = document.querySelector('#status').innerHTML;
statusIcon = document.getElementById('statusIcon');
main_body = document.getElementsByClassName('main_body');

	if (sts == "cloudy" ) {
		statusIcon.src = 'img/icon_cloudy.png' ;
		mainBody.style.backgroundImage = "url('img/cover_cloudy.jpg')" ;
	} 
	else if (sts == 'sunny') {
		statusIcon.src = 'img/icon_sunny.gif' ;
		mainBody.style.backgroundImage = "url('img/cover_sunny.jpg')" ;
	}
	else{
		statusIcon.src = 'img/icon_rainy.png' ;
		mainBody.style.backgroundImage = "url('img/cover_rainy.gif')" ;
	}

	