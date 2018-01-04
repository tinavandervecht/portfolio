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

    <link href="https://fonts.googleapis.com/css?family=Heebo:100,400|News+Cycle:400,700" rel="stylesheet">
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
                        <h1>Tina Vandervecht.</h1>
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
                    <div class="col-md-4">
                        <img src="/images/avatar.png" alt="Picture of Tina Vandervecht" style="max-width:100%"/>
                    </div>
                    <div class="col-md-8">
                        <h1 class="card-title">About</h1>
                        <div class="card">
                            <h2>I'm a full stack developer with a passion for front end from London, Ontario.</h2>
                            <p>
                                this is where a super generic paragraph about me will go. Muffin jelly cheesecake lollipop cheesecake chocolate bar pastry marzipan. Marzipan halvah cotton candy. Toffee jujubes cupcake donut oat cake biscuit dessert jelly biscuit. Tart sweet roll powder pastry cake ice cream cupcake. Sweet lollipop bonbon chocolate powder apple pie. Jelly beans tart chocolate gingerbread topping jelly. Liquorice dragée oat cake tart candy canes pudding danish marzipan cheesecake. Danish sugar plum cheesecake apple pie pie marshmallow biscuit. Sugar plum icing jujubes gummi bears macaroon lollipop dragée.
                            </p>
                            <!-- <p>I’m Tina, a full-stack developer with a passion for all things front-end. My language knowledge reflects that, with a strong grasp on PHP, Javascript (and several packages like VueJS, D3, and JQuery), and CSS/SCSS. I have experience with several CMS including Concrete5, Wordpress, Drupal, and Wix (and a resulting passion for finding the cleanest way to implement each CMS).</p> -->
                            <!-- <p>A little more personally, my three favourite things are wine, sleeping, and my cats. An average night consists of me playing Dragon Age: Inquisition while I learn random trivia facts on the internet (because the internet never lies). I aspire to be the most basic I can be.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="card-title">Tools/Languages</h1>
                        <div class="card">
                            - list of important languages/tools I know/use
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="card-title">Fun Facts</h1>
                        <div class="card">
                            - list of random facts
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="card"></div>
                    </div>
                    <div class="col-md-2">
                        <div class="card"></div>
                    </div>
                    <div class="col-md-2">
                        <div class="card"></div>
                    </div>
                    <div class="col-md-2">
                        <div class="card"></div>
                    </div>
                    <div class="col-md-2">
                        <div class="card"></div>
                    </div>
                    <div class="col-md-2">
                        <div class="card"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="card-title">Skills</h1>
                        <div class="card">
                            - this is where a graph of my skills will go. 
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contactSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="card-title">Contact</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <p>Get in touch and say hello!<br/>
                            Whether you have a work enquiry or<br/>
                            simply want to find out more, let’s talk.</p>
                            <a href="mailto:tvandervecht@gmail.com">Send me an email.</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <form method="POST" action="./form.php">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input  <?php echo getEmptyError('first_name', 'empty'); ?>" id="first-name">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="first_name" value="<?php echo getValue('first_name'); ?>" />
                                            <small class="error-empty-message">First name is required.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input <?php echo getEmptyError('last_name', 'empty'); ?>" id="last-name">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="last_name" value="<?php echo getValue('last_name'); ?>" />
                                            <small class="error-empty-message">Last name is required.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input <?php echo getEmptyError('email', 'empty'); ?> <?php echo getEmptyError('email', 'invalid'); ?>" id="email">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" value="<?php echo getValue('email'); ?>" />
                                            <small class="error-empty-message">Email is required.</small>
                                            <small class="error-invalid-message">Email must be valid.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="input" id="website">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" />
                                </div>
                                <div class="input <?php echo getEmptyError('message', 'empty');?>" id="message">
                                    <label for="message">Message</label>
                                    <textarea name="message" rows="5"><?php echo getValue('message'); ?></textarea>
                                    <small class="error-empty-message">A message is required.</small>
                                </div>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
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
