<?php 

	$scripts = '<script type="text/javascript" src="/js/map.js"></script>' . "\n" .
		'<script src="http://maps.google.com/maps?file=api&amp;v=1&amp;key=ABQIAAAAoC20TTVpl16JBF_GkXMC5BQTft-6JYx96hNCD94hyM7ZAEhJmBSUPTqc7m6LqVZRAo3DxT5SVIU4mw" type="text/javascript"></script>';

	$title = "Location";
	$section = "location";
	include("../includes/header.inc.php"); 
?>
<!-- ABQIAAAAoC20TTVpl16JBF_GkXMC5BTPL1bDnADF7iT6vdFPhv_HGD71IBSfZZhj6Ikl7C1XhptqAXDkewoO-w
This key is good for all URLs in this directory:
http://dconstruct.dev/
-->

<!--
ABQIAAAAoC20TTVpl16JBF_GkXMC5BQTft-6JYx96hNCD94hyM7ZAEhJmBSUPTqc7m6LqVZRAo3DxT5SVIU4mw
This key is good for all URLs in this directory:
http://dconstruct.org/
-->



<div class="container">
	
	<div class="secondary">
		<ul class="xoxo">

	<li>

		<h3>Traveling</h3>

		<ul>
		<li class="vcard">
			<span class="fn org">Brighton Train Station</span>,
			<abbr class="adr geo" title="50.828907;-0.140623">
			<span class="street-address">Queens Road</span>

			</abbr>
		</li>
		</ul>

	</li>
	<li>

		<h3>Conference venue</h3>

		<ul>
		<li class="vcard">

			<span class="fn org">Brighton Dome</span>,
			<abbr class="adr geo" title="50.8235;-0.138">
			<span class="street-address">Church Street</span>
			</abbr>
		</li>

		</ul>

	</li>
	<li>

		<h3>Workshops</h3>

		<ul>
		<li class="vcard">

			<span class="fn org">Clearleft</span>,
			<abbr class="adr geo" title="50.82636;-0.1382">
			<span class="street-address">28 Kensington Street</span>
			</abbr>
		</li>
		</ul>

	</li>
	<li>

		<h3>Pre-party<br />(thanks to Chi.mp)</h3>

		<ul>
		<li class="vcard">
			<span class="fn org">Po Na Na</span>,
			<abbr class="adr geo" title="50.81968;-0.13905">
			<span class="street-address">75/79 East Street</span>
			</abbr>
		</li>

		</ul>

	</li>
	<li>

		<h3>After-party<br />(thanks to BBC Backstage &amp; Yahoo!)</h3>

		<ul>
		<li class="vcard">
			<span class="fn org">Above Audio</span>,
			<abbr class="adr geo" title="50.8199;-0.1345">

			<span class="street-address">10 Marine Parade</span>
			</abbr>
		</li>
		</ul>

	</li>
	</ul>
	</div>

	<div class="primary locations">
		<p class="loctitle">Conference location:</p>
		<h4 class="vcard" ><span class="fn org">Brighton Dome</span>, <span class="adr"><span class="street-address">Church Street</span>, <span class="locality">Brighton</span> <span class="postal-code">BN1 1UG</span>, <span class="country-name">UK</span></span></h4>
<?php /*
		<p class="loctitle">Workshops location:</p>
		<h4 class="vcard" ><span class="fn org">Clearleft</span>, <span class="adr"><span class="street-address">28 Kensington Street</span>, <span class="locality">Brighton</span> <span class="postal-code">BN1 4AJ</span>, <span class="country-name">UK</span></span></h4>
*/ ?>
	<h4 id="places" ><a href="http://maps.google.co.uk/maps?q=hotels&amp;near=BN1+1UE">Accommodation</a></h4>

	<ul>

	<li>
		<p class="vcard">
		<span class="fn org">myhotel</span>,
		<abbr class="adr geo" title="50.82451;-0.13857">
		<span class="street-address">17 Jubilee Street</span>
		<br />
		<span class="tel">+44 (0)1273 900 300</span>

		</abbr>
		<a class="url" href="http://www.myhotels.com/default.asp?section=60">website</a>
		</p>
		<!--<p class="summary" title="This rate is subject to availability.">We have arranged preferred rates for the nights of Thursday 6th and Friday 7th September. Quote <q>Clearleft rate</q> when you book.</p>-->
	</li>
	<li>
		<p class="vcard">
		<span class="fn org">Old Ship Hotel</span>,
		<abbr class="adr geo" title="50.820401;-0.141953">
		<span class="street-address">31&ndash;38 Kings Road</span>
		<br />
		<span class="tel">+44 (0)1273 329 001</span>

		</abbr>
		<a class="url" href="http://www.paramount-hotels.co.uk/hotels/southern-england/paramount-old-ship-hotel/">website</a>
		</p>
		<!--<p class="summary" title="This rate is subject to availability.">We have arranged preferred rates for the nights of Thursday 6th and Friday 7th September. Quote <q>Clearleft rate</q> when you book.</p>-->
	</li>
	<li>

		<p class="vcard">
		<span class="fn org">Lansdowne Place Hotel</span>,
		<abbr class="adr geo" title="50.823993;-0.161619">
		<span class="street-address">1 Lansdowne Place</span>
		<br />
		<span class="tel">+44 (0)1273 736 266</span>
		</abbr>
		<a class="url" href="http://www.lansdowneplace.co.uk/">website</a>

		</p>
		<!--<p class="summary" title="This rate is subject to availability.">We have arranged preferred rates for the nights of Thursday 6th and Friday 7th September. Quote <q>dConstruct</q> when you book.</p>-->
	</li>
	<li>
		<p class="vcard">
		<span class="fn org">Blanch House</span>,
		<abbr class="adr geo" title="50.819486;-0.129572">

		<span class="street-address">7 Atlingworth Street</span>
		<br />
		<span class="tel">+44 (0)1273 603 504</span>
		</abbr>
		<a class="url" href="http://www.blanchhouse.co.uk/">website</a>
		</p>
		<p class="summary">Rooms from &pound;100&ndash;&pound;190 per night (week nights). Call for <abbr title="Friday">Fri</abbr>/<abbr title="Saturday">Sat</abbr> night rates</p>

	</li>
	<li>
		<p class="vcard">
		<span class="fn org">Drakes Hotel</span>,
		<abbr class="adr geo" title="50.819235;-0.130742">
		<span class="street-address">43&ndash;44 Marine Parade</span>
		<br />
		<span class="tel">+44 (0)1273 696 934</span>

		</abbr>
		<a class="url" href="http://www.drakesofbrighton.com/">website</a>
		</p>
		<p class="summary">Rooms from &pound;95 (week nights) or from &pound;125 (<abbr title="Friday">Fri</abbr>/<abbr title="Saturday">Sat</abbr>)</p>
	</li>

	<li>
		<p class="vcard">
		<span class="fn org">Five Hotel</span>,
		<abbr class="adr geo" title="50.819933;-0.131997">
		<span class="street-address">5 New Steine</span>
		<br />
		<span class="tel">+44 (0)1273 686 547</span>
		</abbr>

		<a class="url" href="http://www.fivehotel.co.uk ">website</a>
		</p>
		<p class="summary">Rooms from &pound;35&ndash;&pound;60 <abbr title="per person">pp</abbr>/<abbr title="per night">pn</abbr></p>
	</li>
	</ul>
	
		<h4><a href="http://maps.google.co.uk/maps?q=restaurants&amp;near=BN1+1UE">Eating</a></h4>

		<ul>

		<li class="hreview">
			<p class="item vcard">
			<span class="fn org">E-Kagen</span>,
			<abbr class="adr geo" title="50.8279;-0.13785">

			<span class="street-address">22&ndash;23 Sydney Street</span>
			</abbr>
			</p>
			<p class="summary">Superb Japanese food served in an unassuming setting. <span class="rating">5</span>/5</p>
		</li>

		<li class="hreview">

			<p class="item vcard">
			<span class="fn org">Wagamama Noodle Bar</span>,
			<abbr class="adr geo" title="50.82565;-0.13845">
			<span class="street-address">Kensington St</span>
			</abbr>
			</p>
			<p class="summary">Asian food chain with lots of seating. <span class="rating">3</span>/5</p>

		</li>

		<li class="hreview">
			<p class="item vcard">
			<span class="fn org">Gourmet Burger Company</span>,
			<abbr class="adr geo" title="50.824854;-0.139335">
			<span class="street-address">44&ndash;47 Gardner Street</span>
			</abbr>
			</p>

			<p class="summary">Not bad for a burger chain. <span class="rating">3</span>/5</p>
		</li>

		<li class="hreview">
			<p class="item vcard">
			<span class="fn org">Strada</span>,
			<abbr class="adr geo" title="50.822868;-0.139915">
			<span class="street-address">160&ndash;161 North Street</span>

			</abbr>
			</p>
			<p class="summary">Reliable Italian fare. <span class="rating">4</span>/5</p>
		</li>

		</ul>
		
		<h4><a href="http://sussexdigital.com/map">Free WiFi</a></h4>

		<ul>

		<li class="hreview">
			<p class="item vcard">
			<span class="fn org">Earth and Stars</span>,
			<abbr class="adr geo" title="50.82476;-0.14221">
			<span class="street-address">46 Windsor Street</span>
			</abbr>

			</p>
			<p class="summary">Locally sourced food and organic beer. <span class="rating">4</span>/5</p>
		</li>

		<li class="hreview">
			<p class="item vcard">
			<span class="fn org">Riki-Tik</span>,
			<abbr class="adr geo" title="50.8237;-0.14025">

			<span class="street-address">18a Bond Street</span>
			</abbr>
			</p>
			<p class="summary">The kids like this trendy bar. <span class="rating">3</span>/5</p>
		</li>

		<li class="hreview">
			<p class="item vcard">

			<span class="fn org">Pavilion Gardens Caf&eacute;</span>,
			<abbr class="adr geo" title="50.823187;-0.1391">
			<span class="street-address">New Road</span>
			</abbr>
			</p>
			<p class="summary">This outdoor caf&eacute; might be a little chilly in September. <span class="rating">3</span>/5</p>

		</li>

		</ul>
	</div>
</div>



<?php include("../includes/footer.inc.php"); ?>