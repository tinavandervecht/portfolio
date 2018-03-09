<!DOCTYPE HTML>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tina Vandervecht - Developer</title>
    <meta name="description" content="The portfolio of Tina Vandervecht.">
    <meta name="author" content="Tina Vandervecht">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="google-site-verification" content="Usp5nBFgOCUn7dJnFJjqeG-7_9SuBPuc1qB2lR2bJSU" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/app.css" />

    <?php $logoIcons = ['code','hand-peace-o','rocket','trash-o','heart-o'];?>
</head>

<body class="is-loading">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112380740-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-112380740-1');
    </script>

    <div id="wrapper">

        <header id="header">
			<div class="logo"> 
                <span class="fa fa-<?php echo $logoIcons[rand(0, count($logoIcons) - 1)]; ?>"></span>
			</div>
			<div class="content">
				<div class="inner">
					<h1>Tina Vandervecht</h1>
					<p>Developer. Passionate about trivia. Chronic talker.</p>
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#funFacts">Facts</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</header>

        <section id="main">
            <article id="about">
				<h2 class="major">Howdy</h2>
                <h3>I'm a full-stack developer with a passion for front end from London, Ontario.</h3>
                <p>
                    I enjoy taking ambitious ideas and timelines and delivering simple (dare I say elegant?), creative results.
                    When I'm not diving down the rabbit hole of code, I'm either learning random facts on the internet
                    (because the internet never lies) or drinking wine and wishing I was the inquistor in Dragon Age: Inquisition.
                </p>
			</article>

            <article id="skills">
                <h2 class="major">Skills</h2>
            </article>

            <article id="funFacts">
                <h2 class="major">Fun Facts</h2>
            </article>

            <article id="contact">
				<h2 class="major">Let's Get in Touch!</h2>
                <ul class="contact-types">
                    <li class="email"><a href="mailto:tvandervecht@gmail.com">tvandervecht@gmail.com</a></li>
                    <li class="phone">(226) 228-6628</li>
                </ul>
				<ul class="icons">
					<li><a href="https://twitter.com/sc_nebulous" target="_blank" class="fa fa-twitter"><span class="sr-only">Twitter</span></a></li>
					<li><a href="https://www.instagram.com/scatterednebulous/" target="_blank" class="fa fa-instagram"><span class="sr-only">Instagram</span></a></li>
                    <li><a href="https://www.linkedin.com/in/tinavv/" target="_blank" class="fa fa-linkedin"><span class="sr-only">LinkedIn</span></a></li>
					<li><a href="https://github.com/tinavandervecht" target="_blank" class="fa fa-github"><span class="sr-only">GitHub</span></a></li>
				</ul>
			</article>
        </section>

        <footer id="footer">
            <p class="text-secondary">Copyright &copy; <?php echo date('Y'); ?> Tina Vandervecht.</p>
        </footer>

    </div>
    <div id="bg" data-img-key="<?php echo rand(1, 7) ?>">
        <span class="after"></span>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
