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

    <div id="main">
        <?php include("./partials/navigation.php"); ?>
        <header class="header wrapper">
            <h1>Tina Vandervecht.</h1>
            <p>Developer. Passionate about trivia. Chronic talker.</p>
            <a href="mailto:tvandervecht@gmail.com" class="available-flag">Available for freelance.</a>
            <img src="/images/arrow-down.svg" alt="Scroll Down" class="scroll-down-img" />
        </header>

        <section class="bg-white aboutSection" id="aboutSection">
            <div class="wrapper">
                <h2><span class="number text-secondary">01/</span> About.</h2>
                <div class="avatar">
                    <img src="/images/avatar.png" alt="Picture of Tina Vandervecht" />
                </div>
                <div class="copy">
                    <p>I’m Tina, a full-stack developer with a passion for all things front-end. My language knowledge reflects that, with a strong grasp on PHP, Javascript (and several packages like VueJS, D3, and JQuery), and CSS/SCSS. I have experience with several CMS including Concrete5, Wordpress, Drupal, and Wix (and a resulting passion for finding the cleanest way to implement each CMS).</p>

                    <p>A little more personally, my three favourite things are wine, sleeping, and my cats. An average night consists of me playing Dragon Age: Inquisition while I learn random trivia facts on the internet (because the internet never lies). I aspire to be the most basic I can be.</p>
                </div>
            </div>
        </section>

        <section class="skillsSection" id="skillsSection">
            <div class="wrapper">
                <h2><span class="number text-secondary">02/</span> Skills.</h2>
                <div class="socialMedia">
                    <a href="https://www.linkedin.com/in/tinavv" target="_blank">
                        <img src="/images/social_media/linkedin-logo.png" alt="LinkedIn" />
                    </a>
                    <a href="https://github.com/tinavandervecht" target="_blank">
                        <img src="/images/social_media/github-logo.png" alt="GitHub" />
                    </a>
                </div>

            </div>
        </section>

        <section class="bg-white contactSection" id="contactSection">
            <div class="wrapper">
                <h2><span class="number text-secondary">03/</span> Contact.</h2>
                <div class="left-column">
                    <p>Get in touch and say hello!<br/>
                    Whether you have a work enquiry or<br/>
                    simply want to find out more, let’s talk.</p>
                    <a href="mailto:tvandervecht@gmail.com">Send me an email.</a>
                </div>
                <div class="right-column">
                    <form method="POST" action="./form.php">
                        <div class="input  <?php echo getEmptyError('first_name', 'empty'); ?>" id="first-name">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" value="<?php echo getValue('first_name'); ?>" />
                            <small class="error-empty-message">First name is required.</small>
                        </div>
                        <div class="input <?php echo getEmptyError('last_name', 'empty'); ?>" id="last-name">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" value="<?php echo getValue('last_name'); ?>" />
                            <small class="error-empty-message">Last name is required.</small>
                        </div>
                        <div class="input <?php echo getEmptyError('email', 'empty'); ?> <?php echo getEmptyError('email', 'invalid'); ?>" id="email">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?php echo getValue('email'); ?>" />
                            <small class="error-empty-message">Email is required.</small>
                            <small class="error-invalid-message">Email must be valid.</small>
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
        </section>

        <footer class="footer">
            <p class="text-secondary">Copyright &copy; <?php echo date('Y'); ?> Tina Vandervecht</p>
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
    <script src="js/app.js"></script>
</body>
</html>
