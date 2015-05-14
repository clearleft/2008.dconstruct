<?php 
	$title = "Accessibility";
	$section = "accessibility";
	include("../includes/header.inc.php"); 
?>

<div class="container">
	<div class="primary">
		
		<h3>Accessibility</h3>

		<p>The dConstruct website has been designed and built to be accessible to as wide an audience as possible. Some people with disabilities find using the web difficult and while we know that it is impossible to design a site that everyone can use, if you have problems using our site, please <a href="/contact">let us know</a> and we will do our utmost to help.</p>

		<h4>Conference accessibility</h4>

		<p>If you have specific accessibility requirements while at the conference, please <a href="/contact/">contact us</a> and we'll try our best to accommodate you.</p>

		<h4 id="accessKeys">Access keys</h4>
		<p>Most browsers support jumping to specific links by typing keys defined on the web site. On Windows, you can press <abbr>ALT</abbr> + an access key; on Macintosh, you can press <abbr title="control">CTRL</abbr> + an access key. The following access keys are available throughout the site:</p>

		<table>
		<thead>
		<tr><th scope="col">Access key</th><th scope="col">Target</th></tr>
		</thead>
		<tbody>
		<tr><td>1</td><td>Home page</td></tr>
		<tr><td>9</td><td>Contact</td></tr>
		<tr><td>0</td><td>Accessibility policy</td></tr>

		</tbody>
		</table>

		<h4 id="standardsCompliance">Standards compliance</h4>

		<p>All pages comply with priority 1 guidelines of the <a href="http://www.w3.org/TR/WCAG10/">W3C Web Content Accessibility Guidelines</a> and the <acronym title="United States">US</acronym> Federal Government <a href="http://www.section508.gov/">Section 508 Guidelines</a>.</p>

		<p>All pages validate as <abbr title="eXtensible HyperText Language version 1">XHTML 1</abbr> Strict. They use structured semantic markup.</p>

		<h4 id="links">Links</h4>

		<p>Some links have title attributes which describe the link in greater detail, unless the text of the link already fully describes the target (such as the headline of an article).</p>

		<p>Whenever possible, links are written to make sense out of context. Many browsers (such as <acronym>JAWS</acronym>, Home Page Reader, Lynx, and Opera) can extract the list of links on a page and allow the user to browse the list, separately from the page. To aid this, link text is never duplicated; two links with the same link text always point to the same address.</p>

		<p>There are no <code>javascript:</code> pseudo-links.  All links can be followed in any browser, even if scripting is turned off. There are no links that open new windows without warning.</p>

		<h4 id="visualDesign">Visual design</h4>

		<p>This site uses cascading style sheets for visual layout. If your browser or browsing device does not support stylesheets at all, the content of each page is still readable.</p>

		<p>The layout happily accommodates resizing text.</p>
	</div>
</div>

<?php include("../includes/footer.inc.php"); ?>