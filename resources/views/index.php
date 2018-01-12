<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tina Vandervecht - Developer</title>
    <meta name="description" content="The portfolio of Tina Vandervecht.">
    <meta name="author" content="Tina Vandervecht">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1a1d34">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,400|VT323:100,400" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <?php
        session_start();
    ?>
    <script type="text/javascript">
        <?php if (isset($_SESSION['success'])) : ?>
            var successfulSubmission = true;
        <?php endif; ?>
    </script>
</head>

<body>
    <div id="particles-js"></div>

    <div class="navi">
        <img class="fairy" src="/images/navi.png" alt="Navi" />
        <img class="speech" src="/images/navi-speech.png" alt='Psst! Play "Zeldas Lullaby!"' />
    </div>

    <div id="main">
        <header class="header wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>
                            <span class="title"></span>
                            <span class="blinking-cursor">|</span>
                            <img src="/images/sprites/ocarina.png" />
                        </h1>
                        <p>Developer. Passionate about trivia. Chronic talker.</p>
                        <a href="mailto:tvandervecht@gmail.com" class="available-flag">Available for freelance.</a>
                        <img src="/images/arrow-down.svg" alt="Scroll Down" class="scroll-down-img" />
                    </div>
                </div>
            </div>
        </header>

        <section id="aboutSection">
            <div class="container">
                <div class="row">
                    <div class="card _avatar col-md-2">
                        <img src="/images/sprites/hey-listen.png" class="card-title" alt="Hey! Listen!" />
                        <img src="/images/avatar.png" alt="Picture of Tina Vandervecht" style="max-width:100%"/>
                    </div>
                    <div class="card _about col-md-5">
                        <img src="/images/sprites/mask.png" class="card-icon" />
                        <img src="/images/sprites/about-title.png" class="card-title" alt="About" />
                        <h2>I'm a full-stack developer with a passion for front end from London, Ontario.</h2>
                        <p>
                            I enjoy taking ambitious ideas and timelines and delivering simple (dare I say elegant?), creative results.
                            When I'm not diving down the rabbit hole of code, I'm either learning random facts on the internet (because the internet never lies) or drinking wine and wishing I was the inquistor in Dragon Age: Inquisition.
                        </p>
                        <p>
                            <a href="mailto:tvandervecht@gmail.com">Why not say hi?</a> You can never have too many friends!
                        </p>
                        <ul class="list-inline social-media-links">
                            <li><a href="https://www.instagram.com/scatterednebulous/" target="_blank"><img src="/images/social_media/instagram-8bit.png" alt="Instagram" /></a></li>
                            <li><a href="https://github.com/tinavandervecht" target="_blank"><img src="/images/social_media/github-8bit.png" class="github-icon" alt="Instagram" /></a></li>
                            <li><a href="https://ca.linkedin.com/in/tinavv" target="_blank"><img src="/images/social_media/linkedin-8bit.png" alt="Instagram" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="factSection">
            <div class="container">
                <div class="row">
                    <div class="card _toolsLanguages col-md-3">
                        <img src="/images/sprites/shield.png" class="card-icon" />
                        <img src="/images/sprites/tools-languages-title.png" class="card-title" alt="Tools & Languages" />
                        <ul>
                            <li>HTML</li>
                            <li>CSS/Sass</li>
                            <li>Javascript/JQuery</li>
                            <li>VueJS</li>
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>Wordpress</li>
                            <li>Concrete5</li>
                            <li>Adobe Photoshop</li>
                            <li>Sketch</li>
                        </ul>
                    </div>
                    <div class="card _funFacts col-md-4">
                        <img src="/images/sprites/chicken.png" class="card-icon" />
                        <img src="/images/sprites/fun-facts-title.png" class="card-title" alt="Fun Facts" />
                        <ul>
                            <li>I'm a cat-lady-in-training</li>
                            <li>I love to make people laugh!</li>
                            <li>I'm afraid of the dark (still)</li>
                            <li>I have some pretty serious anxiety about finishing work <em>before</em> deadlines</li>
                            <li>I love teaching (and learning!) new things</li>
                            <li>I can't wait until I'm old and curmudgeonly</li>
                            <li>I wanna be the most basic ✌️</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="socialMediaSection">
            <div class="container">
                <div class="row">
                    <div class="insta-feed col-md-8" id="instaCard">
                        <img src="/images/sprites/instagram.png" class="card-title" />
                        
                        <div class="row">
                        <?php
                            $json = file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=1703444992.48ea03f.3d9056b104b84e889d7f8e1539804e51');
                            $obj = json_decode($json);

                            foreach($obj->data as $key => $item):
                                if ($key < 12): ?>
                                <div class="col-md-3">
                                    <a href="<?php echo $item->link; ?>" target="_blank">
                                        <span class="insta-img"
                                            style="background:url(<?php echo $item->images->standard_resolution->url; ?>)">
                                        </span>
                                    </a>
                                </div>
                                <?php endif;
                            endforeach; ?>
                            <img src="/images/sprites/boomerang.png" class="card-icon _boomerang" />
                            <img src="/images/sprites/bombchu.png" class="card-icon _bombchu" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contactSection">
            <div class="container">
                <div class="row">
                    <div class="card _contactInfo col-md-3">
                        <img src="/images/sprites/contact-title.png" class="card-title" alt="Contact" />
                        <p>Take a sec and say hi!<br/>
                        Whether you have a work enquiry or
                        simply wanna find out more, let’s talk.</p>
                        <a href="mailto:tvandervecht@gmail.com">Send me an email.</a>
                    </div>
                    <div class="card _contact col-md-7">
                        <img src="/images/sprites/fairy.png" class="card-icon" />
                        <form method="POST" action="./form.php">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input  <?php echo getEmptyError('first_name', 'empty'); ?>" id="first-name">
                                        <label for="first_name" class="sr-only">First Name</label>
                                        <input type="text" name="first_name" placeholder="First Name" value="<?php echo getValue('first_name'); ?>" />
                                        <small class="error-empty-message">First name is required.</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input <?php echo getEmptyError('last_name', 'empty'); ?>" id="last-name">
                                        <label for="last_name" class="sr-only">Last Name</label>
                                        <input type="text" name="last_name" placeholder="Last Name" value="<?php echo getValue('last_name'); ?>" />
                                        <small class="error-empty-message">Last name is required.</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input <?php echo getEmptyError('email', 'empty'); ?> <?php echo getEmptyError('email', 'invalid'); ?>" id="email">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="text" name="email" placeholder="Email" value="<?php echo getValue('email'); ?>" />
                                        <small class="error-empty-message">Email is required.</small>
                                        <small class="error-invalid-message">Email must be valid.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input" id="website">
                                        <label for="website" class="sr-only">Website</label>
                                        <input type="text" name="website" placeholder="Website" value="<?php echo getValue('website'); ?>" />
                                    </div>
                                    <div class="input <?php echo getEmptyError('message', 'empty');?>" id="message">
                                        <label for="message" class="sr-only">Message</label>
                                        <textarea name="message" rows="5" placeholder="Message"><?php echo getValue('message'); ?></textarea>
                                        <small class="error-empty-message">A message is required.</small>
                                    </div>
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="hidden">
            <?php include("./partials/audio.php"); ?>
        </div>

        <div id="modal-container">
            <div class="modal-background">
                <div class="modal">
                    <div class="content">
                        <h6 id="quit-game">QUIT GAME</h6>
                        <iframe id="game" width="800" height="400" frameborder="0" allowfullscreen></iframe>
                        <p class="small-browser">
                            This game is played best on desktop. But feel proud in the knowledge that at least you found it!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <p class="text-secondary">Copyright &copy; <?php echo date('Y'); ?> Tina Vandervecht.
                <br/>
                All icons and verbiage that remind you of Zelda belongs to Nintendo. Pls don't sue.</p>
        </footer>

        <?php
            function getValue($inputType) {
                return isset($_SESSION['values']) && isset($_SESSION['values'][$inputType])
                    ? $_SESSION['values'][$inputType]
                    : null;
            }

            function getEmptyError($inputName, $inputType) {
                return isset($_SESSION['errors']) && isset($_SESSION['errors'][$inputName]) && $_SESSION['errors'][$inputName] == $inputType
                    ? 'error-' . $inputType
                    : null;
            }

            session_unset();
            session_destroy();
        ?>
    </div>
    <script src="https://cdn.rawgit.com/mikeflynn/egg.js/master/egg.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
