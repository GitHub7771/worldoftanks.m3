<!doctype html>
<html lang="en-US">
<head>
<title>Помощь</title>
<meta charset="utf-8">
<?php include 'lib/module/sys-meta.php';?>
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<?php include 'lib/module/inc-sidebar-quickstart.php';?>
<?php
if (@include_once("lib/compat/objects/Build.php"))
	$build = Build::get_latest();
?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Помощь</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
			</div>
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='container-con-block darkmode-block'>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<h2>Установка PC</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
                    	<p class="download-desc">
                         1. <b>WGC:</b> Диск / WotBlitz / Data = Кидаем<p>
                         1. <b>LGC:</b> Диск / TanksBlitz / Data = Кидаем<p>
                         1. <b>MSSTORE:</b> Диск / WindowsApps / Data = Кидаем<p>
                         1. <b>STEAM</b>: Диск / Steam / SteamApps / Data = Кидаем<p>
						</p>
					</div>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<hr>
					<div class='container-tx1-block darkmode-txt'>
						<h2>Установка Android</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p class="download-desc">
                         1. Переименуйте кэш добавив одну букву.<p>
                         2. Удаляйте ориг.апк<p>
                         3. Установите модифицированный.<p>
                         4. Уберите букву в кэше - и запустите игру<p>
                         5. Игра не будет просить скачивание ресурсов
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php include 'lib/module/inc-footer.php';?>
	    <script type="text/javascript" >
    window.onkeydown = function(evt) {
        if(evt.keyCode == 123) return false;
    };

    window.onkeypress = function(evt) {
        if(evt.keyCode == 123) return false;
    };
</script>
</div>
</body>
</body oncontextmenu="return false">
<body oncopy="return false;" onmousedown="return false;">
<body oncontextmenu="return false">
  ...
</body>
</html>
