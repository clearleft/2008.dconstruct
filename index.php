<?php
$scripts = '<script type="text/javascript" src="/js/slideshow.js"></script>';
include("includes/header.inc.php");
?>
<div class="container">
	<div class="primary">
		<ul class="speakers">
			<li><a href="/schedule/StevenJohnson.php" class="speak2">Steven Johnson</a></li>
			<li><a href="/schedule/AleksKrotoski.php" class="speak3">Aleks Krotoski</a></li>
			<li><a href="/schedule/DanielBurka.php" class="speak4">Daniel Burka</a></li>
			<li><a href="/schedule/MattJones.php" class="speak5">Matt Jones</a></li>
			<li><a href="/schedule/MattBiddulph.php" class="speak6">Matt Biddulph</a></li>
			<li><a href="/schedule/JoshuaPorter.php" class="speak7">Joshua Porter</a></li>
			<li><a href="/schedule/JeremyKeith.php" class="speak8">Jeremy Keith</a></li>
			<li><a href="/schedule/TantekCelik.php" class="speak9">Tantek Celik</a></li>
		</ul>
	</div>
	<div class="secondary">
	
		<p class="intro">dConstruct is the affordable one day conference for people designing and building the latest generation of social web applications.</p>

		<h2>Latest News</h2>
		
		<p class="focus">The audio recording of the talk from Jeremy Keith at dConstruct 2008 is now available for download. You can get it on <a href="/podcast/">the podcast page</a>.</p>
		
	</div>
</div>

<div class="container">
	<div class="primary">
		<div class="slideshow">
			<img id="showing" src="http://dconstruct.s3.amazonaws.com/2008/img/photos/img1.jpg" alt="" />
		</div>
	</div>
	<div class="secondary">
		<h2>Previous years</h2>
		<p><a href="http://2005.dconstruct.org/">2005</a>, <a href="http://2006.dconstruct.org/">2006</a>, <a href="http://2007.dconstruct.org/">2007</a></p>
	</div>
</div>

<?php $rootlevel = 'true'; include("includes/footer.inc.php"); ?>