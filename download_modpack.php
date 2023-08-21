<!doctype html>
<html lang="en-US">
<head>
<title>Загрузить модпак</title>
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
				<h1>Download</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Загрузите последнюю версию.
				</p>
			</div>
		</div>
	</div>
<div class="page-con-content darkmode-slimbar" style="background:#f7f7f7">
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class="container-emp-block"></div>
						<h2>PC Версия: <span class="bsd-highlight darkmode-highlight">Update 10.1 [ Patch 2 ]</span></h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
											<p>
							 Загрузите файлы мода, разархивируйте на рабочий стол, и перенесите мод в директорию игры с подтверждением замены.
						</p>
					</div>
				</div>
			</div>
			<div class="generic-con-button ">
				<a href='FilesMod/Modpack 10.1 FILES PC.zip' download>
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/download/download.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>##Modpack FILES PC</span>
					</div>
				</div>
				</a>
				<a href='FilesMod/Modpack AutoInstaller.zip' download>
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/download/download.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>##Modpack AutoInstaller</span>
					</div>
				</div>
				</a>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class="container-emp-block"></div>
						<h2>Загрузить Android <span class="bsd-highlight darkmode-highlight">Update 10.1 [ Patch 2 ]</span></h2> 
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Модифицированные АПК с AppGallery | + архив с модом для Android
						</p>
					</div>
				</div>
			</div>
			<div class="generic-con-button ">
				<a href='FilesMod/Android/WoTBlitz.apk' download>
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/download/download.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>##WoT Blitz </span> 
					</div>
				</div>
				</a>
				<a href='FilesMod/Android/TanksBlitz.apk' download>
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/download/download.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>##Tanks Blitz </span> 
					</div>
				</div>
				</a>
				<a href='FilesMod/Android/Modpack 10.1 Android FILES.zip' download>
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/download/download.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>##Modpack Android FILES </span>
					</div>
				</div>
				</a>
				<img src="FilesMod/IMG/IMG.png" width="600">
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
</body>
</html>
