<template>
    <section>
        <div id="background">
            <div class='ripple-background'>
                <div class='circle xxlarge'></div>
                <div class='circle xlarge shade2'></div>
                <div class='circle large shade3'></div>
                <div class='circle mediun shade4'></div>
                <div class='circle small shade5'></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <styled-title
                        title="Get in touch"
                        text-color="#141c3a"
                        background-color="#FCB9D1"
                    />
                    <ul class="contact-types">
                        <li>
                            <span class="fa fa-envelope"></span>
                            <a href="mailto:tvandervecht@gmail.com">tvandervecht@gmail.com</a>
                        </li>
                        <li>
                            <span class="fa fa-phone"></span>
                            <a href="tel:2262286628">(226)228-6628</a>
                        </li>
                    </ul>
                    <div class="social-btns">
                        <a class="btn twitter" href="https://twitter.com/sc_nebulous" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="btn instagram" href="https://www.instagram.com/scatterednebulous/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn linkedin" href="https://www.linkedin.com/in/tinavv/" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="btn github" href="https://github.com/tinavandervecht" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import styledTitle from '../partials/styled-title.vue';

    export default {
        components: {
            styledTitle
        }
    }
</script>

<style scoped>
    section {
        padding:200px 0 100px 0;
        position:relative;
        overflow:hidden;
    }

    #background {
        background:#2cbfe8;
        -webkit-clip-path: polygon(0 100%, 0 10%, 100% 40%, 100% 100%);
        clip-path: polygon(0 100%, 0 10%, 100% 40%, 100% 100%);
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        z-index:0;
    }

    .circle {
        position: absolute;
        border-radius: 50%;
        background: white;
        animation: ripple 15s infinite;
    }

    .small{
        width: 200px;
        height: 200px;
        right: -100px;
        bottom: -100px;
        opacity: 0.9;
    }

    .medium{
        width: 400px;
        height: 400px;
        right: -200px;
        bottom: -200px;
        opacity: 0.8;
    }

    .large{
        width: 600px;
        height: 600px;
        right: -300px;
        bottom: -300px;
        opacity: 0.7;
    }

    .xlarge{
        width: 800px;
        height: 800px;
        right: -400px;
        bottom: -400px;
        opacity: 0.5;
    }

    .xxlarge{
        width: 1000px;
        height: 1000px;
        right: -500px;
        bottom: -500px;
        opacity: 0.2;
    }

    section::before {
        content:'';
        width:110%;
        height:1px;
        position:absolute;
        left:-10px;
        top:160px;
        background-color:#ff99be;
        animation: wiggle 2s ease-in-out infinite alternate;
        z-index:1;
    }

    .contact-types {
        padding-left:0;
    }

    .contact-types li {
        list-style-type:none;
        margin:15px 0;
        color:#FCB9D1;
        font-size:20px;
    }

    .contact-types li svg {
        margin-right:10px;
    }

    .contact-types li a {
        color:#FFF;
        font-family: 'Fjalla One', sans-serif;
    }

    .social-btns {
        margin-top:45px;
        margin-left:-10px;
    }

    .social-btns .btn {
        display: inline-block;
        background-color: #fff;
        width: 70px;
        height: 70px;
        line-height: 70px;
        margin: 0 10px;
        text-align: center;
        position: relative;
        overflow: hidden;
        border-radius: 28%;
        box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
    }

    .social-btns .btn:before {
      content: '';
      width: 120%;
      height: 120%;
      position: absolute;
      transform: rotate(45deg);
      top: 90%;
      left: -110%;
    }

    .social-btns .btn svg {
        font-size: 38px;
        vertical-align: middle;
        transform: scale(0.8);
        margin-top:-13px;
    }

    .social-btns .btn.instagram:before {
        background-color: #c13584;
    }

    .social-btns .btn.instagram svg {
        color: #c13584;
    }

    .social-btns .btn.twitter:before {
        background-color: #3cf;
    }

    .social-btns .btn.twitter svg {
        color: #3cf;
    }

    .social-btns .btn.linkedin:before {
        background-color: #2867B2;
    }

    .social-btns .btn.linkedin svg {
        color: #2867B2;
    }

    .social-btns .btn.github:before {
        background-color: #333;
    }

    .social-btns .btn.github svg {
        color: #333;
    }

    .social-btns .btn,
    .social-btns .btn:before,
    .social-btns .btn svg {
        transition: all 0.35s;
        transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
    }

    .social-btns .btn:focus:before,
    .social-btns .btn:hover:before {
        top: -10%;
        left: -10%;
    }

    .social-btns .btn:focus svg,
    .social-btns .btn:hover svg {
        color: #fff;
        transform: scale(1);
    }

    @keyframes ripple {
        0% {
            transform: scale(0.8);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(0.8);
        }
    }

    @keyframes wiggle {
        from {
            transform:rotate(0deg);
        }
        to {
            transform:rotate(-1deg);
        }
    }
</style>