@extends('_layouts.page')

@section('social')
<meta property="og:title" content="DevConf.cz | Brno, Czechia">
<meta property="og:site_name" content="DevConf.cz">
<meta property="og:description" content="DevConf are free and open, annual, open-source community conferences for community contibutors, sponsored by Red Hat.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://devconf.info">
<meta property="og:image" content="https://devconf.info/assets/images/devconf-cz-social.png">
<meta property="twitter:image" content="https://devconf.info/assets/images/devconf-cz-social.png">
@endsection

@section('css')
<link rel="stylesheet" href="{{ mix('css/subsite.css', 'assets/build') }}">
<script src="/assets/build/js/matchHeight.js"></script>
@endsection

@section('title')
<title>Schedule - DevConf.CZ</title>
@endsection


@section('body')
<header class="masthead">
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark fixed-top masthead">
		<span class="nav-brand"><a href="/cz"><img src="/assets/images/devconf-logo-cz-reverse.svg"></a></span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile"
		    aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarMobile">
			<ul class="navbar-nav ml-auto pr-5">
				<li class="nav-item active px-3">
					<a href="/cz/" class="nav-link">Home</a>
				</li>
<!--				<li class="nav-item active px-3">
					<a href="/cz/aroundbrno" class="nav-link">Getting around Brno</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/cz/tobrno" class="nav-link">Getting to Brno</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/cz/hotels" class="nav-link">Hotels</a>
				</li> -->
                <li class="nav-item active px-3">
                    <a href="/cz/blog" class="nav-link">Blog</a>
                </li>
				<li class="nav-item active px-3">
					<a href="/cz/faq" class="nav-link">FAQ</a>
				</li>
				<li class="nav-item active px-3">
					<a href="/coc" target="_blank" class="nav-link">Policies</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<section class="mx-auto mt-5 pt-5 pb-3 col-lg-11">
	<div class="row">
		<div class="h1 mx-5 mont-700 underline position-relative">Schedule</div>
	</div>
</section>
<hr>
<?php
foreach($schedule as $k=>$time){
?>
<section id="<?php echo $k; ?>" class="mx-auto col-lg-11 mb-5">
	<div class="row">
		<p class="os-400">See current schedule for DevConf.CZ 2023 at <a href="https://devconfcz2023.sched.com/" target="_blank">Sched.com</a>.</p>
	</div>
</section>
<?php
    
}
?>
<script>

    $(document).ready(function() {
        // matchHeight the contents of each .card-pf and then the .card-pf itself
        $(".row > [class*='col'] > .card .card-title").matchHeight({property: 'min-height'});
        $(".row > [class*='col'] > .card > .card-body").matchHeight({property: 'min-height'});
        $(".row > [class*='col'] > .card > .card-footer").matchHeight({property: 'min-height'});
        $(".row > [class*='col'] > .card").matchHeight({property: 'min-height'});

    });
</script>

@endsection

@include('_layouts.footercz')
