@extends('_layouts.czech')

@section('title')
<title>DevConf.CZ 2020</title>
@endsection


@section('body')
<header class="masthead vh-100">
<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark">
		<span class="nav-brand"></span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
		    aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarMobile">
			<ul class="navbar-nav ml-auto pr-5">
				<li class="nav-item active px-3">
					<a href="#about" class="nav-link">About & Topics</a>
				</li>
				<li class="nav-item active px-3">
					<a href="#news" class="nav-link">News</a>
				</li>
				<li class="nav-item active px-3">
					<a href="#schedule" class="nav-link">Schedule</a>
				</li>
				<li class="nav-item active px-3">
					<a href="#travel" class="nav-link">How to get here?</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/cz/faq"class="nav-link">FAQ</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="row mr-0" style="height: 85%">
		<div class="col-lg-1 border-right text-center pr-0">
			<a href="mailto:info@devconf.cz" target="_blank" title="Mail"><img src="/assets/images/mail.svg" alt="mail" class="social-icon"></a>
			<a href="https://www.facebook.com/DevConf.CZ" target="_blank" title="Facebook"><img src="/assets/images/facebook.svg" alt="facebook" class="social-icon"></a>
			<a href="https://twitter.com/devconf_cz" target="_blank" title="Twitter"><img src="/assets/images/twitter.svg" alt="twitter" class="social-icon"></a>
			<a href="https://t.me/devconfcz" target="_blank" title="Telegram"><img src="/assets/images/telegram.svg" alt="telegram" class="social-icon"></a>
			<a href="https://www.youtube.com/channel/UCmYAQDZIQGm_kPvemBc_qwg" target="_blank" title="YouTube"><img src="/assets/images/youtube.svg" alt="youtube" class="social-icon"></a>
			<a href="https://github.com/devconfcz/devconf" target="_blank" title="Git Hub"><img src="/assets/images/github.svg" alt="github" class="social-icon"></a>
		</div>
		<div class="col-lg-10 h-100 px-0">
                	<div style="padding: 5% 0 0 0">
                        	<img src="/assets/images/devconf-logo-cz-reverse.svg" alt="DevConf logo" class="text-logo">
                        	<img src="/assets/images/devconf-abstract.svg" alt="DevConf abstract logo" class="abstract-logo">
                        </div>
			<div class="heading-text mont-400 h5 pb-5">
				open source community conference
			</div>
			<div class="heading-text mont-700 h1 pt-5">
				January 24-26, 2020
			</div>
			<div class="heading-text mont-700 h4">
				Brno, Czech Republic
			</div>
		</div>
	</div>
</header>

<section id="about" class="mx-auto col-lg-11">
	<div class="card-group py-4 col-lg-8 mx-auto">
		<div class="card-body text-center px-4">
			<a class="underline mont-600" href="https://cfp.devconf.info" target="_blank">Submit a proposal</a>
		</div>
		<div class="card-body text-center px-4">
			<a class="underline mont-600" href="https://cfp.devconf.info" target="_blank">Run a booth</a>
		</div>
		<div class="card-body text-center px-4">
			<a class="underline mont-600" href="https://cfp.devconf.info" target="_blank">Host a meetup</a>
		 </div>
	</div>

	<div class="row py-4">
		<div class="col-lg-4 mx-5 mb-5 text-center">
			<img src="/assets/images/devconf-d-brno.svg" class="mw-100" alt="Brno DevConf image asset">
		</div>
		<div class="col-lg-6 px-5">
			<h1 class="mont-700 underline pb-4">About DevConf</h1>
			<div class="os-400">
				<p>DevConf.CZ 2020 is the 12th annual, free, Red Hat sponsored community conference for developers, admins, DevOps engineers, testers, 
				documentation writers and other contributors to open source technologies such as Linux, Middleware, Virtualization, Storage, Cloud and 
				mobile where FLOSS communities sync, share, and hack on upstream projects together in the beautiful city of Brno, Czech Republic.</p>

				<p>There is no admission or ticket charge for DevConf.CZ events. Free registration is required though. Stay tuned to receive updates about registration.</p>

				<p>We are committed to fostering an open and welcoming environment at our conference. We are setting expectations for inclusive behavior 
				through our code of conduct and media policies, and are prepared to enforce these.</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="h1 mx-5 mont-700">Topics</div>
	</div>
	<div class="row py-4">
		<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-2 mx-auto">
			<ul class="timeline timeline-centered">
			<?php

				$topics = array(
						array("name"=>"Agile, DevOps & CI/CD","description"=>""),
						array("name"=>"Blockchain","description"=>""),
						array("name"=>"Cloud and Containers","description"=>""),
						array("name"=>"Community","description"=>""),
                                                array("name"=>"Immutable OS","description"=>""),
                                                array("name"=>"Debug / Tracing","description"=>""),
                                                array("name"=>"Desktop","description"=>""),
                                                array("name"=>"Developer Tools","description"=>""),
                                                array("name"=>"Documentation","description"=>""),
                                                array("name"=>"Fedora","description"=>""),
                                                array("name"=>"Virtualization","description"=>"")
					  );

				foreach($topics as $i=>$t){
					if($i%2 == 0){?>
				<li class="timeline-item">
					<div class="timeline-content-left">
						<div class="mont-600 timeline-title"><?php echo $t['name'];?></div>
						<p class="timeline-description os-400"><?php echo $t['description'];?></p>
					</div>
					<div class="timeline-marker"></div>
				<?php }else{ ?>
					<div class="timeline-content-right">
						<div class="mont-600 timeline-title"><?php echo $t['name'];?></div>
						<p class="timeline-description os-400"><?php echo $t['description'];?></p>
					</div>
				</li>
				<?php }
				}
				if(count($topics)%2 == 1){
					echo "</div></li>";
				}?>
			</ul>
		</div>
	</div>
</section>

<section id="news" class="mx-auto col-lg-11">
	<div class="row">
		<div class="h1 mx-5 mont-700">Important dates</div>
	</div>
	<div class="row">
		<!-- Keep in pairs -->
		<div class="col-10 col-md-5 mr-md-0 mx-auto py-3 border-bottom">
			<div class="row">
				<div class="col-4 h5 mont-700">Sep 24, 2019</div>
				<div class="col-8">
					<div class="row">
						<div class="col mont-600">CfP Open</div>
					</div>
					<div class="row">
						<div class="col os-400"><a href="https://cfp.devconf.info">Submit your proposal &rarr;</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-10 col-md-5 ml-md-0 mx-auto py-3 border-bottom">
			<div class="row">
				<div class="col-4 h5 mont-700">Nov 1, 2019</div>
				<div class="col-8">
					<div class="row">
						<div class="col mont-600">CfP Closed</div>
					</div>
				</div>
			</div>
                </div>

		<!-- Second pair -->
		<div class="col-10 col-md-5 mr-md-0 mx-auto py-3 border-bottom">
			<div class="row">
				<div class="col-4 h5 mont-700">Nov 19, 2019</div>
				<div class="col-8">
					<div class="row">
						<div class="col mont-600">Acceptance letters</div>
					</div>
				</div>
			</div>
                </div>
		<div class="col-10 col-md-5 ml-md-0 mx-auto py-3 border-bottom">
		</div>
        </div>
</section>

<section id="schedule" class="mx-auto col-lg-12 background-gray text-center my-5 py-5">
	<div class="h1 mont-700 py-4 mt-3">Schedule</div>
	<a class="p-3 mont-700 mb-3 d-inline-block purple-href">SHOW SCHEDULE</a>
</section>

<section id="travel" class="mx-auto col-lg-11">
	<div class="row">
		<div class="mont-700 h1 underline position-relative mx-5 pb-4">How to get there?</div>
	</div>
	<div class="row py-4">
		<div class="col-xl-3 container card-body my-2 ml-xl-auto mr-xl-3" style="background: #ada3ff">
			<div class="row h-100 align-items-center">
				<div class="col text-center">
					<img src="/assets/images/travel-around.svg" class="my-4" alt="Getting around icon" style="height: 74px">
					<h2 class="mont-700 mb-0">Getting around Brno city</h2>
					<div class="card-text os-400 pt-3">Lorem ipsum dolor sit ament. Duis maximus semper maximus. Pellentesque vestibulum iaculis fermentum.</div>
					<p class="card-text my-5">
						<a class="border p-3 mont-700">MORE INFORMATION</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 container card-body my-2 mx-xl-3" style="background: #4a4a7e">
			<div class="row h-100 align-items-center">
				<div class="col text-center">
					<img src="/assets/images/way-to.svg" class="my-4" alt="Getting to icon" style="height: 74px">
					<h2 class="mont-700 pb-4">Getting to Brno</h2>
					<div class="card-text os-400 pt-4">Lorem ipsum dolor sit ament. Duis maximus semper maximus. Pellentesque vestibulum iaculis fermentum.</div>
					<p class="card-text my-5">
						<a class="border p-3 mont-700">MORE INFORMATION</a>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 container card-body my-2 ml-xl-3 mr-xl-auto" style="background: #8e83e4">
			<div class="row h-100 align-items-center">
				<div class="col text-center">
					<img src="/assets/images/hotel.svg" class="my-4" alt="Hotel icon" style="height: 74px">
					<h2 class="mont-700 pb-4">Hotels</h2>
					<div class="card-text os-400 pt-4">Lorem ipsum dolor sit ament. Duis maximus semper maximus. Pellentesque vestibulum iaculis fermentum.</div>
					<p class="card-text my-5">
						<a class="border p-3 mont-700">MORE INFORMATION</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<footer class="background-gray">
	<div class="row py-5 w-100 mx-auto">
		<div class="mx-auto col-lg-11">
			<div class="row px-5">
				<div class="col-lg-7">
					<div class="h5 mont-600">Sponsored by</div>
					<a href="https://redhat.com" target="_blank"><img class="support-logo pr-3 py-3" src="/assets/images/support/logo-redhat.svg"></a>
					<a href="https://www.fit.vutbr.cz" target="_blank"><img class="support-logo pr-3 py-3" src="/assets/images/support/logo-fit-vut.svg"></a>
				</div>
				<div class="col-lg-5 links">
					<div class="row">
					<a class="col-md-6 col-12" href="#">Code of conduct</a>
					<a class="col-md-6 col-12" href="#">Participation agreement</a>
					<a class="col-md-6 col-12" href="#">On-site volunteer roles</a>
					<a class="col-md-6 col-12" href="#">Media policy</a>
					<a class="col-md-6 col-12" href="#">Privacy statement</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row px-5 py-3 border-top w-100 mx-auto">
		<div class="col-lg-11 mx-auto copyright">
			Copyleft <?php echo date("Y", time()); ?> Red Hat. Some rights reserved.
		</div>
	</div>
</footer>
@endsection
