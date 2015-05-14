<?php 
	$title = "Matt Biddulph and Matt Jones";
	$section = "podcasts";
	include("../includes/header.inc.php"); 
?>

<div class="container clear">
	<div class="secondary">
		<ul class="speakers">
			<li><a href="/schedule/StevenJohnson.php" class="speak2">Steven Johnson</a></li>
			<li><a href="/schedule/AleksKrotoski.php" class="speak3">Aleks Krotoski</a></li>
			<li><a href="/schedule/DanielBurka.php" class="speak4">Daniel Burka</a></li>
			<li><h2><a href="/schedule/MattJones.php" class="speak5">Matt Jones</a></h2></li>
			<li><h2><a href="/schedule/MattBiddulph.php" class="speak6">Matt Biddulph</a></h2></li>
			<li><a href="/schedule/JoshuaPorter.php" class="speak7">Joshua Porter</a></li>
			<li><a href="/schedule/JeremyKeith.php" class="speak8">Jeremy Keith</a></li>
			<li><a href="/schedule/TantekCelik.php" class="speak9">Tantek Celik</a></li>
		</ul>
	</div>
	<div class="primary transcript">
	<h2>Designing for the Coral Reef</h2>
		<p class="transcript_credit"><a href="http://opera.com"><img src="/img/sponsors/opera.gif" alt="Opera Software" /></a>
		Transcription sponsored by <a href="http://www.opera.com/">Opera</a>.</p>
		
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Hello! Thank you!</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Hello!</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> I'm Matt Jones.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> And I'm Matt Biddulph.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> And we are two of Dopplr.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> [laughs]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> There's not many of us. A couple of things before we begin&mdash;this is a bit of a hypertext. There are stories within it. There are lots of experimental procedures that are going to happen. If any of you have a condition where you react badly to flashing lights, please when we warn you, look away. Really.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> This presentation does contain use of strobes.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> It does. And also, don't be near any vases or anything like that.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> [laughs]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Another thing to kind of...</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Another thing just to get you ready, we're going to be doing science. We're going to be doing an experiment, and to do this experiment, we'd really like you to download&mdash;if you've got an iPhone&mdash;download from the app store a piece of software called NeoReader. Or if you've got a Nokia phone, particularly an N-series, we know this works with the Nokia barcode reader.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Other smart phones are available.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Other smart phones are available.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> But the title of our presentation is, &quot;Designing for the Coral Reef,&quot; and what we're going to talk about, broadly, is what happens when you are trying to design in this medium, this kind of grain of the medium of the social web. Using examples, we're going to talk a little bit about how we try and create delight within the behaviors there.</p>
            <p>Matt is going to do the science bit, as he always does. We're going to talk a bit about how to&mdash;we've heard a lot about how to kind of take and use and give back data to the social web, and we're going to talk a little bit about that. And I really liked Josh's talk, on his cognitive vices. I think I remember one cognitive vice at Dopplr is not invented here, but yay! We don't have to do it.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> So we're going to talk a little bit about that as well. And there's going to be some wild speculation about how humans behave when they're confronted with technology, and when we make odd choices that confuse them, and sort of as a result, create expectations and weird behaviors. And we mean what we say.</p>
            <p>[laughter]</p>
            <p>[applause]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> So we run a little company, a little service called Dopplr. Who's a Dopplr user? Yay! Who isn't a Dopplr user?</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Well, I'm not&mdash;this isn't going to be a pitch, but I do want to set the scene a little bit about where Matt and I and kind of one of the other co-founders, Marko, were when we sort of started this off. And this is probably my number one favorite slide in the world, which is a picture I took in Australia, at the Sydney Opera House, and it was an architectural exhibition.</p>
            <p>But this, for me, is kind of what we do with computers. We make models, we create models of our future with calendars, we create models of our finances with spreadsheets. And what we do when we make these models, we spin them around, we optimize them, we tweak them, we manipulate them, in order to see how we can make them better.</p>
            <p>I think this is the kind of story of information technology, and what we wanted to do was create a model of all of space-time.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> This may change next week when the Large Hadron Collider switches on.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> And let's see if the laser works. So basically, the reason I show this is that Dopplr is all about the future. It's all about your intentions, and kind of modeling your intentions, and sort of finding the kind of perfect line through this top bit of the light cone. Here's you now, and here, in the hopeless surface of the present.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> And then we'll talk about developing a little more stuff about kind of what you can do about the past, and sort of evocatively remembering things from the past, and those kinds of things. And when we sort of pick one axis, and we spin the model around, then we sort of find out new things, and we sort of surface new things. And that's kind of what we're interested more broadly.</p>
            <p>Always have to have an Eno quote&mdash;everything starts with an Eno&mdash;and I love this one. &quot;For words to be interesting, you have to be manipulating it all the time.&quot; And really, that's what we're trying to do a little bit of, is kind of be a part of the social web that helps you kind of model the future of your travel through the world and your social network.</p>
            <p>This is a quote by my friend Stefan, who's the <abbr>CTO</abbr> of Moo, when we were having a drink the other night. I really liked it. He said, &quot;Dopplr is a social physics engine.&quot; And if you're familiar with the term physics engine from the gaming world, it's kind of a piece of software, which is kind of underlying the game's story, underlying your actions in the game.</p>
            <p>But it's a piece of software which is looking at all of the calculations and kind of behaviors of the objects within that game world. But it's not something that you think about&mdash;it's something that is kind of middle-ware underneath that. So I really like the idea of us being this kind of physics engine in a bunch of other kind of parts of the social web.</p>
            <p>Click! And this is another one that I sort of talk about an awful lot. When we started off, we sort of said what we wanted to do was act like a catalyst. So we wanted to find that one bit of catalytic information that we could inject in a whole bunch of other arenas, a whole bunch of other kind of parts of the social web, which would kind of just change and optimize, and make your future that little bit better.</p>
            <p>So one of the things that we talk about an awful lot in terms of this is kind of, when do we get the hell out of the way? When we've delivered that little piece of information to Pants, or to Fire Eagle, via Fire Eagle, those kinds of things, then we kind of hand off to something which is far better at doing the job that it's doing. I'm going to talk a little bit about that.</p>
            <p>And this is kind of a manifestation, in a way, of&mdash;who knows who this guy is? Yeah, easy, because I've shown you the slides! This is John Postel, and Postel's Law is kind of one of the oldest and probably wisest bits of rule-making around the Internet. And he sort of said, &quot;Be conservative in what you send, and be liberal in what you receive.&quot;</p>
            <p>And that's one of the patents that we try and really sort of cling to in designing Dopplr. And the coral reef metaphor is something that's been getting a lot of play in the last kind of year or so. I think Dave Winer coined it first of all, but it talks very much about kind of this imaginary infrastructure.</p>
            <p>But I think the thing that it misses out is that the coral reef is an animal as well as infrastructure, and it has all of these little animals doing its part at different sort of scales in the food web. And we've decided that we are trophic level-two benthic microfauna.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Please take notes.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> And so we try and very carefully sort of think about what can we do to contribute to the rest of the social web? And what can we make use of as well from that? And to tell you a little bit more about that, here's Matthew Biddulph, from the sofa!</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> [laughs] Thank you very much.</p>
            <p>[applause]</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> No! Not now! Not yet! Not yet.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> OK, right. So the Web 2.0 drinking game has begun. Everyone take a shot. So we all know what Web 2.0 is&mdash;it's millions of different definitions, but the way we like to think about it in the context of the way we're building things with Dopplr is that it's an ark of history for what we're doing with connected computers.</p>
            <p>So the way that we started getting and recognizing the real power of computers in the early days of computing possibilities was the mainframe&mdash;a centralized computing resource, timesharing&mdash;and you get a lot of benefit from putting all your stuff in one place. You get massive economies of scale, you can afford the big boxes, the big, shiny lights, and the individuals can benefit from that.</p>
            <p>And then of course, the arc we've all gone through to go down to these fantastic...</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> He's a sharp-looking fellow.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> He is, actually. I mean, I aspire to that as a user of computers.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> And we went through this wonderful evolution, and starting wearing waistcoats, and that was an important element in computer history. But at the same time as the waistcoats came the personal computers. And the personal computers took away that element, where we were all actually quietly, intrinsically connected to each other.</p>
            <p>Sure, our programs were running sandboxes on the mainframe&mdash;we couldn't necessarily see each other's data. But neither were we sharing resources or gaining economies of scale from it.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Waistcoats may have preceded personal computers. Citation needed.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> OK, I'll check them out for you. But now we're moving back again, in this phase&mdash;often the sort of curve, the shape of evolution of technology goes through&mdash;a widening out phase, a narrowing down, and then we widen out again, and look at what's possible if we revisit some of the ideas in the past.</p>
            <p>And with the Internet, and particularly with the more data-oriented uses of the Internet recently, in the last several years, things like Flickr&mdash;Flickr is a mainframe. It's a big, giant machine that stores loads of stuff, and by storing lots of stuff in the same place, we get economies of scale out of it.</p>
            <p>And from there, we come to pretty much where we are now, which is having seen the power of combining massive amounts of information from many sources&mdash;the enormous, sort of easy group-forming power, the zero-coordination power of things like tagging, and linking, and all these things used properly&mdash;is we get to this realization of the original vision of the web, which is the web is not just a sort of teletext or view data system.</p>
            <p>It's a web of data. It was designed as that right from the start. And everyone's dear friend Tom Coates talks in wonderful detail about the way that we are now starting to design not just for our web sites, not just for that little bit you're seeing in your browser, but for the re-use of data, and realizing that data crosses the boundaries of sites. And sites open up access to that data and allow the easy recombination of it with other sites, are themselves benefitting from it.</p>
            <p>And to quote another of our&mdash;this is a friend's quote, a talk, by the way&mdash;another of our respected friends, Matt Webb. He's been talking recently about movement as a paradigm for the way the web is going.</p>
            <p>So the web, when we started out, the web was a physical thing. You went to a site, you hang out on a forum. We had destinations, and people tried to build portals, places that could be almost physical sort of arcologies&mdash;places you could go and put your online life.</p>
            <p>And then we moved from this web page era into the era of web applications&mdash;the sort of the power-lifter, the Internet as magnifier of your individual capabilities&mdash;gives you superpowers and power-ups, and lets you do things over great distances, access knowledge that you can't immediately access from your physical environment.</p>
            <p>And that's the stuff that's evolving now. But as we are able to move from site to site, we get away from the arcology&mdash;the individual approach to sites. We are moving around sites, as is our data. And something that Matt said in a presentation recently, which I think is a really wonderful concept, is that your web service is a finite-state machine that executes on your users.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Take notes.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Everyone got that?</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> So the web is an engine of state&mdash;we move from site to site, and there are sort of infinite combinatorial possibilities of what you can do from click to click. But actually, when you plan out a service, and when your users move through a service, they're making individual state decisions. So like, &quot;Shall I click on this or that? Shall I upload some content? Shall I stop using it?&quot;</p>
            <p>And if you think about that as a design principle, then you can think about the infinite branching possibilities of people navigating your sites and services. And that extends beyond site boundaries, and out into the coral reef. So Mike Migurski of Stamen Studios has been doing a lot of work at Stamen I want to do with maps, and massive amounts of data, and massive amounts of data on maps.</p>
            <p>Very sort of specialist and smart people. And they've been&mdash;as everyone who's done big mash-ups, put stuff on maps has done&mdash;you start off with Google Maps. And you go, &quot;Great, Google Maps, massively powerful. Really, really good platform to bring data into to combine possibilities.&quot;</p>
            <p>But what they've started doing, because they're developing unique web products, is they've started to create open source and sort of unique map frameworks of their own. So there's a Flash library called <a href="http://modestmaps.com/">Modest Maps</a>, and some other libraries called, I think, <a href="http://www.mapnik.org/">Mapnik</a>, that help you do layer combinations and so on.</p>
            <p>And he's been reading a lot, because of it, about games design. Let me come a little closer to my screen. So what they've started calling this Google Maps style of interaction is a generic term: &quot;slipping maps,&quot; things that you sort of scroll around in your browser. It's not the MapQuest days, where you click on the big north arrow, page reloads, you've got some more map.</p>
            <p>You can just sort of keep slipping through. And those slipping map tiles you see in the browser, most importantly, they're actually done by dividing the world up into discrete chunks. They connect them to one another, and then you stream them into the play environment from outside your field of vision.</p>
            <p>So one nice way of putting this is, using an interface like Google Maps, it's a little bit like looking at a blue whale through a letterbox. And I think that's an experience we can all understand.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Brings a little something to our lives. But it's an absurd thing&mdash;looking at a blue whale through a letterbox, that's a fantastic design challenge. How do you boil down this huge experience into what we can see through a browser window?</p>
            <p>But the article that Mike was writing about when he wrote this quote was actually a game design article, and it was about&mdash;there's a really great paper called, &quot;The Continuous World of Dungeon Siege.&quot; Dungeon Siege is a computer game where you go around, it's the usual sort of role-playing stuff.</p>
            <p>And anyone who's a game player knows the loading screen, and knows that over the years, there have been valiant efforts by developers of games to never see a loading screen, to be sort of constantly streaming in the next bit of the map. And that, in its extended analogy, is what I see us getting out of Web 2.0.</p>
            <p>Always off the edge of the map, off the edge of the data you're looking at, is more data. And you can always stream it into the user experience, stream it into the existing page without showing a loading screen.</p>
            <p>So to bring that back to how we treat this on Dopplr, there are lots of places on Dopplr pages where we use data from other sites. So you're looking at your past trip page, and we can show you your Flickr photos. We can do a Flickr query, find the photos from your trip. It's a relatively blunt instrument. We're just doing a Flickr <abbr>API</abbr> query to find out what photos were taken on this sort of range of dates that your trip was on, that you took.</p>
            <p>And we display them. We might not get them exactly right, but if they interest you. If, as one might see a castle on the horizon in a continuously-streaming 3D game, you find that an interesting thing&mdash;you can move closer to that.</p>
            <p>But you haven't immediately left the Dopplr site. We're showing you the possibilities at the edge of the map, and you can then drag your cursor, scroll in, move in that next piece of data, leave the Dopplr site, but continue your thread of thought and data through that.</p>
            <p>With that, I'll hand you back to Matt Jones.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> So that's kind of the theoretical stuff that is going in our heads when we're making these decisions, but we wanted to kind of do the long zoom between the blue whale and the H-card, or something.</p>
            <p>[laughter]</p>
            <p>We're broadly going to talk in a kind of very two cultures&mdash;I'm going to talk about some of the design stuff, Matt's going to talk about some of the technical-ese... technical... technically stuff. Shows what I know about it all.</p>
            <p>[laughter]</p>
            <p>So, I am going to talk a little about Dopplr's identity and the sort of the visual and <abbr>UI</abbr> choices that we made. Who knows what that is?</p>
        </blockquote>
        <blockquote class="speaker_3_text">
            <p><cite class="speaker_3" >Woman:</cite> [inaudible]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> You're murmuring, coke bottle.</p>
        </blockquote>
        <blockquote class="speaker_3_text">
            <p><cite class="speaker_3">Woman:</cite> It's a coke bottle.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Thank you. [laughter] A guy called Martin Lindstrom said, &quot;The genius of a coke bottle is when it smashes into a thousand pieces, you still know it's a coke bottle.&quot; I think that's kind of the sort of challenge that you have got when you're in this kind of slippy Matt Dungeon Siege... slippy Matt? Slippy Matt....Oh, slippy Matt...[laughter]</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Later.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> ...Dungeon Siege world. [laughs] And as we keep quoting people, because we are lazy and didn't have time to write all of these lines. This is a great quote from Dan Saffer of Adaptive Path. Now he's starting his own business called Kicker Studio. And I think this is really key. It's kind of re-TechCrunch or Digg all the rest of it. So you get where you just [practice it for] hours, just all of these same ideas going...Ideas, are not what's going to win in this kind of Coral Reef world. It's going to be execution and it's going to be details.</p>
            <p>And, I think, Dan is absolutely right, and that's where we try and head with this. The identity of Dopplr is something that we sort of came up with ages and ages ago in a cottage in Norfolk, where we were sort of building the first prototype. But it wasn't until we got to the stage where we were selling the prototype, we sort of realized that what we could do technically, with this was to kind of use the data on the edge of the map, and I can bring it in to kind of infuse our identity with the world and also your identity.</p>
            <p>So, as you know if you are as a user of Dopplr, then our brand slowly changes into your brand and becomes your kind of <abbr>DNA</abbr>. And another thing that we learnt was a word called 'delighter'. And delighter is a world that I learnt from a guy who used to run the W Hotels in New York and in San Diego. And he used to say that delighter is a term evolved from the hotel industry or the hospitality industry. Where you put something into somebody's experience or into a room, but you do it in such a way that it creates nothing but absolute joy and delight.</p>
            <p>And the example that he used, which stuck with me for ages, was the rubber duck. If you go into a hotel room and there's a rubber duck already in there. You will go, &quot;Oh, rubber duck. Cool.&quot; If you go into the hotel room on your second night there when you had been shopping all day and it's been raining. And you are naked and you really want to bat, and there's a rubber duck. You will be incredibly delighted. At least that's the theory. So we are always trying to find the rubber duck that we can put into the experience where we can.</p>
            <p>And one of the things that I really like about the logo is that, almost entirely dependably, people don't notice that the colors are changing until like two or three months in. And they go, &quot;Oh! The colors are changing. Why are the colors changing?&quot; And you set up all your vanity alerts on Dopplr on surmise and things like that. And they go, &quot;Oh, just nice, the colors are changing&quot; and, &quot;Why are the colors changing?&quot;</p>
            <p>So then we go and talk to them and say, &quot;Hey, this is why the colors are changing. It reflects what you are doing around the world. And these are city colors that are referring to where you are around the world. They go, &quot;Ah, that's really nice. I really like that.&quot;</p>
            <p>And then apparently another month later they go, &quot;And you did it in the favicon.&quot; [laugher]</p>
            <p>And the secret power behind Dopplr is a guy called Tom Insam, who's the other developer on Dopplr. Pour one out for him. He can't be here today. He's is on holiday. But if you leave him to his own devices, he will just come up with things like this all day, every day. And we have to kind of just slap him around a bit saying, &quot;No. Stop fiddling with that stuff.&quot;</p>
            <p>&quot;No.&quot;</p>
            <p>&quot;No.&quot; Slap. And he's actually probably the design genius behind Dopplr actually. He's fantastic. He actually did a lot of work on the color coding work kind of thing.</p>
            <p>One thing that perhaps I deviously can claim as an intervention - was when we were producing public profile feature, which came out couple of months ago now. We had something that we had to put in there called data toys. We wanted to have a little bunch of things, and I think Tantek gave a great talk. And, was talking about the stuff you can put on your profile. And Daniel Burka was talking about the stuff that can be inferred from your behavior, and sort of put that in your public profile.</p>
            <p>And, one of the things that we wanted to put in there, apart from all the functional utilities stuff, was kind of delighters. And we sort of called these data toys. One of them is called personal velocity. And personal velocity works out - how fast would you would be traveling if you just continually move to the...so it works out with distance you have totally traveled in a year, totally traveled. And then it sort of works back out then how fast you would have to be going continually to achieve that distance without stopping, without resting.</p>
            <p>And we thought it was really nice to do visualization of all that stuff. And I think I may have been drunk, but, I think I said &quot;Yeah, but wouldn't it be good if we turn them into animals.&quot; So we sort of equivalized... Equivalized? Is that a word?</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Good word.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Thanks. [laughter] It is now. We equivalized, <abbr>TM</abbr>, [laughter] your personal velocity to an animal. The tricky thing is, on the Internet, nobody knows you are a dog. Also nobody knows how fast dogs go, really. I spent probably longer trying to figure out what speeds animals go than anything else what I have done on Dopplr. [laughter] We know a have retained a zoologist, [laugher] who we buy clients. And he tells us - the problem is all of the information about animals on the Internet is about when animals attack or they all are about exciting fast animals. And most of us aren't going that fast.</p>
            <p>The fastest person that we have on Dopplr is actually going the speed of a whippet - just 35 miles an hour. But once we got down to kind of tortoise and butterfly and duck. We were like &quot;Oh god, we can't find any more slow animals.&quot; So we had to flip over to the NASA crawler transporter, favorite of mine, and the glacier. So, I think these are two of the coolest, literary, icons.</p>
            <p>Anyway, so, we are not trying to encourage traveler responsibility via animals and shuttles. And the thing about this, again, is kind of, in this quote from Russell Davies. Thank you, Russell, for writing this very nice article about us in Campaign, the adverting magazine. &quot;This is all of course pointless and silly. But it's also charming, engaging and relatively easy to do.&quot; Which is kind of our corporate strategy I think. [laughter]</p>
            <p>And it bore out. It's like within launching this...again like looking at the vanity search. We are finding people, like, talking about, &quot;Oh, I am a butterfly. I am a duck. I am a whippet.&quot; And then taking screen graphs of it. And there is just constant search for using joy and delight to let you sort of investigate some of your behaviors or look at some of the things that you are doing. And again, spin that model around a bit more.</p>
            <p>You all know who this guy is, I am sure. We haven't been seeing a lot of him lately, which is good. Well done boys and girls. We have the fail snail. We hope you never see him, so, we are showing him now. And then this is the...really, if you do react badly to flashing lights look away until I tell you not to. All right, so, when I say look away....who actually is...is anyone? Well don't reveal yourself but just kind of. Don't go &quot;Ahhh...me.&quot; [laughter] But really I don't want to...statically we could be calling ambulances. Right, should we do this?</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Yeah, come on.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> So what we are going to show you is something that we've generated as it what we hope is another delighter. And ready? Look away now.</p>
            <p>[laughter]</p>
            <p>No really look away now.</p>
            <p>[music]</p>
            <p>Did we...you all are all right. Good. So if you find us later and ask us very nicely, what we are going to give you is one of these. And on each one of these six blocks of the Dopplr logo. But they are generate directly from the behavior in aggregate of all Dopplr users, that we've actually printed out the top 78 cities that people travel to. And so, what we are hoping to do is that tonight at the party you will be able to do that kind of really good kind of thing that you used to do when you were a kid with the Pokmon - got, got, need, need, got - and find the cities that you want.</p>
            <p>One of things we are really, really interested in doing with Dopplr, is kind of, creating effects in the real world. And one of the things that we are trying to do is more kind of physical and digital delighters as well.</p>
            <p>But now with science here comes Matt Biddulph.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> I am back again. OK, let's see, so, building a distributed interwoven system. So you've heard quite a lot about the way that we try and subtly influence people's behavior in a non evil way, of course. We hope that Dopplr will link up with the rest of the world.</p>
            <p>So, I am going to talk just a little bit about the way this works under the skin. So, pretty early on we started doing things using <abbr>API</abbr>s Twitter and Flickr to pull in elements from other sites. But if you are developer you will know that there's the dreaded problem with all this. You start off. You build a bit of code. It's nice and simple and all works very nicely on your own laptop. You deploy it to the site. And what you've done the first time around the block, is implemented everything synchronously.</p>
            <p>So if I need to go ask Flickr, &quot;What are the latest photos from your photo stream?&quot; I go do it on my web server while I am rendering your page. And then when that's done, I put in the page and so on. That's all fine. Until - bad network connections, Flickr's a little bit slow, huge traffic spike. And you are suddenly running out of resources on your web server.</p>
            <p>And so, the really important thing in designing a modern website, is, plugging into lots of third party <abbr>API</abbr>s - is to look at asynchronous infrastructures. Asynchronous, it's not just for the browser. It's not just for Ajax. It's for servers too. And there is Dopplr, and a cache in the middle of it - the data we are going to keep copies of. Hopefully we won't have to go around the world to find that new stuff.</p>
            <p>But there are lots of things we need to do to talk to the outside world. We hopefully soon will be sending and receiving <abbr>IM</abbr>s. We send our email alerts. We don't want to be sitting there talking to <abbr>SMTP</abbr> servers in the middle of a web request. We want various cron jobs. We have to have to pre-calculate a bunch of bad stuff, like, overnight - when you might have changed locations. We need to work out what's your new location.</p>
            <p>And on the outside of that, these are what we end up talking to. We are publishing out to FriendFeed and Facebook. And we are checking Mr. and Mrs. Smith, our business partners, for their latest in their wonderful selection of hotels.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Why now?</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Why now? Other hotels are available. And batch calculations, and this sort of thing. And I am not going to any update, but I just want to say to every developer in the room that you need to be playing with asynchronous messaging right now on your servers. You need to grab Apache ActiveMQ or Beanstalk, or play with Amazon's Simple Queue system. And start building a different sort of gearing into your website.</p>
            <p>Think of each of these layers as things that may want to run at different speeds in an engine. And the way you make things run at different speeds in a mechanism, is to put gearing in between them, and to allow them to freewheel from each other from time to time. And not all proceed in lock start. It's, because, it's going to be an enormously important engineering principle for the future.</p>
            <p>So, a shout out to our host Mr. Jeremy Keith, who, we are all looking forward to hearing from next on this stage. I love this blog post from Jeremy. He was writing about why he's really excited about going to San Francisco in a few weeks time, a few weeks ago. And the reason he was really excited, is because he told Dopplr that he was going to be there, which meant, that Dopplr was going to tell Fire Eagle that he was there when he arrived. And Fire Eagle, which is subscribed to by Pownce, will update his Pownce status and then his pownce status would appear - and so on and so forth.</p>
            <p>Got this cascade of information flowing through the web, without you having to even participate. Again, the asynchronous nature of data - not just the asynchronous nature of interactions between you the browser and your server. And I found this lovely, sort of, engineering kind of diagram that someone made. This is possible right now. These sites which were all developed independently of each other, with no coordination. Merely by opening up open APIs. Using published standards, whether it be microformats or a proprietary piece of <abbr>XML</abbr>, or pieces of Jacent, by communicating over <abbr>HTTP</abbr> and other mechanisms. All these updates are possible without us ever having planned it. And I absolutely love that.</p>
            <p>Every time I see a new place where we've been plugged into something else, it's very, very exciting for me. And I love this idea, that, what we originally put is a proposal for this talk - I am not sure if it made it through to the description - is how to build a successful website that nobody has to visit.</p>
            <p>And Dopplr actually appears in lots and lots of other places on the web. And the data that Dopplr receives and send out appears in lots of other places on the web, and as we say, in the physical world. And that's great. I think there's a lot to be gained. It's the classic sort of Google business strategy. There is a lot to be gained by sending people away from your website. It increases trust. It makes you useful in other parts of their web life. And it's not just tying them into some captive experience.</p>
            <p>But, it can get a little Hi-fi separates. I am choosing the right <abbr>CD</abbr> player to go with these speakers? And what if I got the gold plate wire with the Jacent support, would the base response be better? So Dopplr has great base response, by the way. [laughter]</p>
            <p>But if you are into the nerdy side of things, then we have started to open source a bunch of the routines that we used to do, things like our social network import. And we are working all the time on new way to do this. If you go and search, get help for Dopplr. I would love to receive patches and contributions to this. And one of the things we are working right now - I am sure Tantek is going to enjoy a great deal when it comes out - is social network subscription. Which we think is the next step in this inter-connectedness of social network portability.</p>
            <p>Simply that ability to go out and check - not just in front of you right now go check your Facebook network and import from it - but to check it, say, once a week. And then, I think the biggest challenge for all this social network portability work, is actually, the technical work is hard and it takes time and we will have to support the standards and eventually we get there. But because we haven't had it before, we don't know how to do the interactions with the user. And Dopplr is always very careful with social networks to be contextual.</p>
            <p>So we won't automatically import your LiveJournal friends into Dopplr. But because, perhaps, those people that you share with on LiveJournal are not the people you want turning up unexpectedly in a place in the middle of the...you know, somewhere in the middle of nowhere. Perhaps they are a bit creepy. I don't know.</p>
            <p>But social networks are contextual. And certainly my LinkedIn network is not the same as my Facebook network. And I want to make a selection that can choose from them when I make my chose of Dopplr friends.</p>
            <p>Again, we love the idea of small pieces loosely joined. And we added this public profile support a little while back so that you could open up a little bit of your information, make yourself a profile page that says what your past or future trips were.</p>
            <p>We love the idea that on this page we're adding more and more toys. The right-hand column, there, is labeled toys, the personal velocity, and so on. We want these toys because the visualizations are lovely and because the information is useful. We want to have a life outside of Dopplr.</p>
            <p>So the way we've coded this is that every one of these modules can be embedded as a blog bash, you just mouse over and we give you a little bit of code that lets you do that. One of the things we're also working on is that every single one of the boxes on this page is under the skin. It's an open social application.</p>
            <p>So if and when a site you want to share your document information on supports the open social standard, you go to embed one of these, it's a little widget, on your site elsewhere. And again, we will interoperate with them without planning. Sort of unplanned, uncoordinated collaboration, which I think is the massive, massive power of data portability around the web these days.</p>
            <p>What do we have here? Ths is another feature that we launched recently. Your information, where you're going to travel to, might come from anywhere on the web. We are not trying to replace your Google calendar or other things you use to plan your travels.</p>
            <p>So one of the things we launched recently was the ability to send a message to sign up, send this message, register your Twitter account, and then you can just ask Dopplr. I'm going to Budapest for two nights on November 19th. And it goes through to the site. And there we go.</p>
            <p>The interesting thing for me about this, again, as a technologist, is this is absolutely outside the area of Nice standards. I'm not getting an hCard, and hCalendar from Twitter. I'm looking at words that people wrote, and the thing we really like about Twitter is if you say, Dopplr, I'm going to be in Budapest on November the 12th, then that goes to us, but it also goes to other people who follow you.</p>
            <p>So there is this dual purpose in a kind of announcement, a kind of sharing with your Twitter friends, and an instruction to your machine slave at <a href="http://dopplr.com/" >Dopplr.com</a>. And so the thing that I found most interesting building this was the kind of integrity problems you get into. Part, trying to, not pause natural language, as such, there's no AI going on here. We don't know what the verbs and the nouns are.</p>
            <p>But we do have an enormous amount of heuristics to try and understand what are the words in a sentence. We know, after a year and a half of being on the web and collecting people's travels, we know what the top thousand destinations in the world are. So we know that if you say Paris, you're likely to mean Paris in France, not Paris, Texas.</p>
            <p>However, if you've been to Paris, Texas before, and we know that on Dopplr, then we will assume that if you say Paris, you mean Paris, Texas. Because we have a little more heuristics, the more we get to know you.</p>
            <p>And I ended up compiling this lovely list of words, which is actually, they're all common English words that often appear in the body text of email confirmations that you get from airlines and all towns in the world. Compiling that sort of stock list is really, really fiddly. Say a Comfort, Texas. It's a real place, fully like normal. There's a place called Conference, I live in a town called Conference. Maybe my memoirs.</p>
            <p>And so we come to new features.</p>
            <p>[music]</p>
            <p>I love the way this ends. It's such a perfect end there.</p>
            <p>[laughter]</p>
            <p>I hope you remember that from your childhoods.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Who remembers the Red Hand Gang? This is a debate. Who remembers the Red Hand Gang?</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Oh, good. They're with us. [laughs]</p>
            <p>So, I'll go very quickly through this stuff. But yeah, as we were trying to do with new features because it's not enough to have to sweat over a conference tool. We also like to set ourselves a deadline every time we have a conference. So we've been working on a Brighton Release for the last couple of months.</p>
            <p>And we're putting groups into Dopplr. We've created a group, here, for deconstruct, the idea being that Dopplr, when it started out, was all about just sharing with the people that you've chosen, that you know and trust. But we know that there are lots of times that you come together through some affiliation or company association, and you want to be able to keep in touch with people that way.</p>
            <p>So we're adding a group feature where you can share trips, just the trips you select, but you think are relevant, to a group. And it will help you find people that you might want to share trips afterwards. So if you're trying to look back through and find out who was that that I met, someone I want to meet up with again.</p>
            <p>And you end up with a lot of the same features that we have for the individuals as a sort of group. Journal and visualizations, group coincidences so you can see the coincidences with people just for those trips that you've shared. And you can be in more than one group. We have groups for companies.</p>
            <p>And we've carried on with our usual nice line and visualizations and group carbon calculator. Which we think will fit very nicely on some corporate responsibility reports.</p>
            <p>So, talking of corporate responsibility, the BBC. We're rolling out this feature over the next month or so. What we started is a group exclusively for deconstruct attendees, you are the first people to use this feature. And then we are creating groups for a whole bunch of companies: The <abbr>BBC</abbr>, The Guardian, this sort of thing. Rolling it out in a kind of open beta way.</p>
            <p>Oh, one more thing. The features we've been adding all amount kind of more and more openness. Dopplr, when it started out, our absolute concern was about privacy. This is about trip information, where you're going to be in the world. It's not quite the same as things you might twitter, that sort of thing.</p>
            <p>So we were really very concerned that people would trust our site. So our very first version of a system, all you could is share trips with people that you chose, and there's nothing you can see without a Dopplr account. If you're not on the site and logged in, it's a pretty, it's just a front door and nothing else.</p>
            <p>So what we're introducing this week is a &quot;share this trip.&quot; If you've used Flickr's guest pass feature, you'll be familiar with this kind of thing. You can go, and for one specific trip, choose people from your contacts, or people who are not on Dopplr, and send them a message. And that message comes in as an email. And that guest pass URL gives them access to that one trip.</p>
            <p>And I thing that is very, very interesting from a, again, connectedness point of view. We don't want Dopplr to be a walled garden. We want it to be a sort of semi-permeable membrane where things can move back and forth through under the control of the users. So I think this is a nice way to just open up the system. And this is all you'll see as a non-Dopplr user, someone who has been shared with.</p>
            <p>Now the science bit. Mr. Jones, to your position.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Thank you.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> I am now, before your very eyes, going to share a trip with the entire room. And if you would please reach for your i-phones or other <abbr>QR</abbr> code readers, we'd like to try and experiment. [pause] Start your phones. I want to get a picture. [pause]</p>
            <p>Anybody got it? Oop. There's a beep.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> As in whimper. [laughs] Who's got one? Who's got it? Anyone? No? Oh, slow...</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Come on, Matt, back to the stage!</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> OK.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> OK, this experiment will be refined over a number of versions using data from this occasion. Thank you very much for participating. And with that, I hand you back to Mr. Matt Jones. To the stage!</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Oh, it didn't work.</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> No, next time.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Well, the point of that was that we'd like to be able to use some of these things in pushing data out into the world, to push it out into physical forms as well, like the new stickers that you can get from this website. But while I've got you all here...</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> ...and Matt's slightly disappointed...</p>
        </blockquote>
        <blockquote class="speaker_2_text">
            <p><cite class="speaker_2">Matt Biddulph:</cite> Bear in mind, you have five minutes.</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Yes. I'm going to rant at you very, very quickly. Merlin Mann is a god.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> If you need to appear on an Internet list to know whether your somebody's friend, you may have problems a computer can't solve.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> Who knows about this fake follow thing on FriendFeed? Yeah? I mean, it's very clever, and they're doing great work and all the rest of it, but the fact that we have to have all of these contortions and acrobatics to avoid&mdash;I have to make a fake friend, and I have to fake follow the fake friend, so I don't offend the friend who is my friend, who shows up on somebody else's fake friend list...</p>
            <p>And Merlin makes a very good case for it. He also sort of makes a case for things like pause buttons on social networks&mdash;things again that sort of move toward this movement metaphor, rather than kind of a steady-state metaphor that we had previously.</p>
            <p>But the thing that's kind of bubbling up in my mind is that soon, we may have to kind of say this: that a lot of the reasons that we are tying up ourselves in knots is because of language. Because so much is tied on to the notion of friendship, the intimacy, the kind of transitiveness of friendship, what you're able to share, and what you wouldn't with certain people. And then how does that move to friends of friends?</p>
            <p>And all of the things that he was talking about&mdash;I mean, very fantastic things to be able to do with information. But using that word &quot;friend&quot; just kind of takes it to something in our monkey brain, kind of just goes, &quot;Oh, I need to collect a dollhouse of friends, or I need to be very careful about how I handle this.&quot;</p>
            <p>So I'm kind of thinking very carefully about this at the moment. One of the things that we started off at Dopplr&mdash;when we started off Dopplr, we tried to keep to it&mdash;is that we never use the word &quot;friend.&quot; We always talk about the informational relationship. We talk about the kind of switchboard pipe that you're connecting to somebody that you trust.</p>
            <p>And we talk about the information that's going, and we talk about the level of trust, and we talk about what's going to happen, but we don't judge whether that is your friend, your bank manager, your boss, your archenemy, whoever it is. And it just makes life a hell of a lot easier.</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> One of the downsides of this is that you sacrifice kind of the speed of growth that perhaps you see in entirely public symmetrical relationship friend-based sites, those kinds of things. But you can't put this toothpaste back in the tube. So I think kind of starting off very slow and moving out to levels of trust, where people are comfortable with and given control over it, is really important too.</p>
            <p>This is another Merlin Mann quote: &quot;This is awkward, Herr Mozart. The Loopt gentleman has returned yet again. He inquires as to why you did not 'Freund' Herr Salieri.&quot;</p>
            <p>[laughter]</p>
        </blockquote>
        <blockquote class="speaker_1_text">
            <p><cite class="speaker_1">Matt Jones:</cite> And so another thing that we need to build into these sorts of things, if we are talking about relationships and trust, and things that are way harder to do, in terms of when you're talking about friends and all of these very loaded terms, is the case of being able to have plausible deniability. And that's what FriendFeed are trying to establish, but the gymnastics you have to go through, just because you're talking about human relationships rather than informational relationships.</p>
            <p>I mean, talk about informational relationships in a human way, and talk about them clearly. Loading all of this emotion into it is very difficult. We're kind of something that is targeted much more towards business and we're also handling information which is very sensitive to people, and we're very careful with that.</p>
            <p>But it is something that I think this kind of &quot;friending&quot; neologism is something that needs to be challenged. Can you believe there was a &quot;Friends&quot; PlayStation game? Oh, sweet, you played it. I'm sorry.</p>
            <p>Friend is not the only social role we play. Steven Johnson's talk this morning kind of set this up very well. The realm or spectrum of social roles that we play in the city, in the places that we are. Matt Webb, again I'll quote him, he said&mdash;social software, which used to be the kind of trendy term four years ago, we talked about software that's better when other people are there.</p>
            <p>It doesn't mean that they're your friends or you're mapping your relationship, but there's a whole wealth of opportunities and experiments and design prototyping excitement you can take out of the social net thing. This is an idiom that is kind of setting us up for a fall, I think.</p>
            <p>This is a project by Intel Research Berkeley, called &quot;Familiar Stranger.&quot; It's not about friends, it's about strangers, but it's about people that you meet all the time in your neighborhood. The person who is always at the post office at the same time as you, gets on the same train as you. You see him in the corner shop. And it's about surfacing and visualizing those.</p>
            <p>And sort of thinking about all of these different roles that people play other than friend. It's something that I'm super-interested in exploring and continue to explore with Dopplr.</p>
            <p>Jane Jacobs talked - Steven was talking about the eyes on the street, and how that creates a thriving city. And this actually a quote from Steven's Ghost Map: &quot;Jane Jacobs observed many years ago that one of the paradoxical effects of the diversity of cities are the rich cultures that establish themselves in the niches.&quot;</p>
            <p>I think that kinds of ties into the Coral Reef metaphor. Kind of thinking about different social roles and different way that things play in this movement through this thing that is organism and infrastructure, is something that's going to be really, really worthwhile exploring in the next couple of years, rather than this kind of just very trammeled route of looking at social network idioms as we have them at the moment.</p>
            <p>And on a final kind of point of rant and sort of why is it with us doing it this way and continuing to do it this way, you have to have a Tim O'Reilly slide. In other words, you get trucked out of this Web 2.0 mafia.</p>
            <p>He says that, &quot;I argued for several years that one of the critical decisions that we have to make is whether we build a &quot;one ring to rule them all,&quot; this kind of portal thing, or we work with a UNIX Internet model of small pieces loosely joined, where cooperating applications come together to build value greater than any of the pieces do alone.</p>
            <p>&quot;We're into a critical phase of that decision. Application developers need to embrace the small pieces model loosely model. They're being picked off one by one by dominant companies, have already reached scale, and are practicing their own &quot;one ring&quot; model. Mentioning no names.&quot;</p>
            <p>And he finishes of off this great quote from Benjamin Franklin: &quot;We must all hang together or we shall all assuredly hang separately.&quot; So let's do this all together. All right? Thank you very much.</p>
            <p>[music]</p>
            <p>[applause]</p>
        </blockquote>
            
		  <p class="transcript_credit">Transcription by <a href="http://castingwords.com">CastingWords</a>, sponsored by <a href="http://www.opera.com">Opera</a>.</p>
	</div>

</div>


<?php include("../includes/footer.inc.php"); ?>