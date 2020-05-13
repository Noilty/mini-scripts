<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
	width: 90%;
	margin: 0 auto;
}
html {
	margin-top: 17%;
}
body {
	background-color: #000;
	color: #00ff00;
	text-shadow: 1px 1px 2px lime, 0 0 1em green;
}
p {
	text-align: center;
	font-size: 60px;
	margin-top: 0px;
}
.shadowtext {
	text-shadow: 3px 3px 5px lime, 0px 5px 1em white; /* Параметры тени */
	color: white; /* Белый цвет текста */
	font-size: 2em; /* Размер надписи */
}
</style>
</head>
<body style="text-align: center;">
<div class = "shadowtext">
<p style="border-left: 15px solid;border-right: 15px solid;">DEMO: World of Tanks Blitz [В ЭФИРЕ]</p>
<p style="border-left: 15px solid;border-right: 15px solid;" id="demo"></p>
</div>
<script>
// Установите дату, до которой мы ведем обратный отсчет
var countDownDate = new Date("April 21, 2020 22:00:00").getTime();

// Обновляйте обратный отсчет каждые 1 секунду
var x = setInterval(function() {

  // Получить сегодняшнюю дату и время
  var now = new Date().getTime();
    
  // Найдите расстояние между моментом сейчас и датой обратного отсчета
  var distance = countDownDate - now;
    
  // Расчеты времени для дней, часов, минут и секунд
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Выведите результат в виде элемента с id="demo"
  document.getElementById("demo").innerHTML = /*days + "д " +*/ hours + "ч "
  + minutes + "м " + seconds + "с ";
    
  // Если обратный отсчет закончился, напишите какой-нибудь текст
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
