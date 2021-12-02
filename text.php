<?php
$title="Загрузка акта"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php";
$data = $_POST;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َHackathon</title>
  </head>
  <body>
    <script src='https://unpkg.com/tesseract.js@v2.1.0/dist/tesseract.min.js'></script>
      <div class = "loader">
        <label for="file" class="inputbtn">Выберите файл</label>
        <input class="mute" type="file" id="file"/>
        <br><br>
        <div id="log" style="min-height: 200px; min-width: 500px; border: 1px solid #eee"></div>
        <br><br>
        <button type="button" id="start">Начать обработку</button>
        <script>
	
	window.onload = function() {
		
		document.getElementById("file").value = ""; // Сбрасываем форму после перезагрузки
		
		var control = document.getElementById("file");
		
		control.addEventListener("change", function() {
		
			var files = control.files;

			document.getElementById("start").addEventListener("click", function() {
				
				document.getElementById("start").innerHTML  = "Идет распознавание текста...";
				Tesseract.recognize(files[0], "rus").then(function(result) {
					document.getElementById("log").innerHTML = result.data.text;
          document.getElementById("start").innerHTML = "Распознано";
          start.disabled = true;
				});
	 
			});
 
		});
		
	};
	
</script>
      </div>
  </body>
</html>