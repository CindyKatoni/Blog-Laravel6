@extends ('layout')

@section ('content')



<!-- Wrapper -->
<div id="wrapper">

<!-- Intro -->
	<section id="intro" class="wrapper style1 fullscreen fade-up">
		<div class="inner">
			<h1>Blog-Laravel</h1>
			<p>Just another fine responsive blog site <br />
			where you can make your voice heard and post your views on anything from politics, entertainment gossip, educational material..</p>
			<ul class="actions">
				<li><a href="#three" class="button scrolly">Blog Here</a></li>
			</ul>
		</div>
	</section>

					<!-- Article Section -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Available Articles</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class="features">
								<section>
									<span class="icon solid major fa-code"></span>
									<h3>Lorem ipsum amet</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-lock"></span>
									<h3>Aliquam sed nullam</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-cog"></span>
									<h3>Sed erat ullam corper</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-desktop"></span>
									<h3>Veroeros quis lorem</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-link"></span>
									<h3>Urna quis bibendum</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon major fa-gem"></span>
									<h3>Aliquam urna dapibus</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
							</div>
							<ul class="actions">
								<li><a href="generic.html" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>

<!-- Three -->
	<section id="three" class="wrapper style1 fade-up">
		<div class="inner">
			<h2>Type Post Here</h2>
			<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
			<div class="split style1">
				<section>
					<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" />
							</div>
							<div class="field half">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" />
							</div>
							<div class="field">
								<label for="message">Post</label>
								<textarea name="message" id="message" rows="5"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><a href="" class="button submit">Submit</a></li>
						</ul>
					</form>
				</section>
				<section>
					<ul class="contact">
						<li>
							<h3>Address</h3>
							<span>12345 Somewhere Road #654<br />
							Nashville, TN 00000-0000<br />
							USA</span>
						</li>
						<li>
							<h3>Email</h3>
							<a href="#">user@untitled.tld</a>
						</li>
						<li>
							<h3>Phone</h3>
							<span>(000) 000-0000</span>
						</li>
						<li>
							<h3>Social</h3>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
						</li>
					</ul>
				</section>
			</div>
		</div>
	</section>

</div>

@endsection