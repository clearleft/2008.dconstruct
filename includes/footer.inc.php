<div class="container">
	
	<div class="secondary">
		<h2>Get event updates by email</h2>
	</div>
	<div class="primary">
		<form action="http://www.feedburner.com/fb/a/emailverifySubmit" method="post" id="signup">
		 	<div>
				<input id="contact-email" name="email" class="title-switch" title="your email address" value="your email address" type="text" />
				<input name="url" value="http://feeds.feedburner.com/~e?ffid=301236" type="hidden" />
				<input name="showEmail" value="false" type="hidden" />
				<input name="title" value="Silverback" type="hidden" />
				<input name="loc" value="en_US" type="hidden" />
				<input src="/img/footer/subscribe.jpg" alt="Sign up for Clearleft event updates." type="image" />
			</div>

			<p class="credit">...or grab the <a href="http://feeds.feedburner.com/ClearleftEvents" class="feed">RSS feed</a> and follow <a href="http://twitter.com/dconstruct" class="twitter">@dConstruct</a> on Twitter.</p>
		</form>
	</div>
</div>



<?php 
	if (isset($rootlevel) && $rootlevel != '') {
		include("includes/sponsors.inc.php");
	} else {
		include("../includes/sponsors.inc.php");
	}
?>

</div> <!-- closing #page-container -->

<div id="footer">
	
	<div class="container vcard">
		<div class="secondary">
			<h2><a href="http://clearleft.com/" class="url"><img class="photo" src="http://dconstruct.s3.amazonaws.com/2008/img/footer/clearleft.gif" alt="Clearleft" /></a></h2>
		</div>
		<div class="primary">
			<p class="tagline"><span class="fn org">Clearleft</span> is a user experience design consultancy based in <span class="adr"><span class="locality">Brighton</span>, <abbr title="United Kingdom" class="country-name">UK</abbr></span>.</p>
			<p>We make websites, and in our spare time we like to give something back to the web design community by running dConstruct. It&#8217;s a grass-roots conference that gathers some of the brightest minds in the industry from around the world, and brings them to our little home by the sea for a cup of tea and a slice of cake.</p>
		</div>
	</div>
	<div class="container aux-nav">
		<div class="primary">
			<ul>
				<li><a href="/privacy/">privacy policy</a></li>
				<li><a href="/terms/">terms &amp; conditions</a></li>
				<li><a href="/accessibility/" accesskey="0">accessibility</a></li>
				<li><a href="/contact/" accesskey="9">contact</a></li>
				<li><a href="/buttons/">buttons</a></li>
			</ul>
		</div>
		<div class="secondary">
			<p>&copy; 2008 <a href="http://www.clearleft.com/">Clearleft</a>. All rights reserved.</p>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="/js/global.js"></script>
<?php 
	if(isset($scripts) && $scripts != '') {
		echo $scripts;
	}
?>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-132181-5";
urchinTracker();
</script>
<script src="http://dconstruct.s3.amazonaws.com/js/dconstruct-status.js"></script>
</body>
</html>