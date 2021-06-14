<template>
    <header id="header">
        <div id="intro">
            <styled-title
                title="Howdy, I'm"
                text-color="#FFFFFF"
                background-color="transparent"
                class="mb-0"
            />
            <h1>Tina Vandervecht</h1>
            <p class="float-lg-right mr-3 by-line">
                &#60; available for freelance &#62;
            </p>
        </div>
        <div class="hero-img">
            <img ref="movingImage" src="/images/robot.png" />
        </div>
        <particles />
    </header>
</template>

<script>
    import particles from '../partials/particles.vue';
    import styledTitle from '../partials/styled-title.vue';

    export default {
        components: {
            particles,
            styledTitle
        },

        mounted() {
            document.addEventListener('mousemove', this.animateBackground);
        },

        methods: {
            animateBackground(cursor) {
                const pageX = (cursor.pageX || cursor.clientX) - (window.innerWidth / 2);
                const pageY = (cursor.pageY || cursor.clientY) - (window.innerHeight / 2);

                const imageX = (((25 / window.innerWidth) * pageX)) * - 1;
                const imageY = (((25 / window.innerHeight) * pageY)) * - 1;
                this.$refs.movingImage.style.transform = `matrix(1,0,0,1.0,${imageX},${imageY})`;
            }
        }
    };
</script>

<style scoped>
    #header {
        background-color: #2c8de8;
        padding-top:10px;
        background-image: linear-gradient(to right, #2c8de8 0%, #2cbfe8 35%);
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 96%, 0 100%);
        clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
        width:100%;
        position:relative;
    }

    #header #intro {
        padding:50px 50px 100px 50px;
        position:relative;
        z-index:2;
    }

    .by-line {
        color:#FCB9D1;
        background:#11599c;
        padding:0 4px;
        display:inline-block;
    }

    h1 {
        font-family: 'Cabin Sketch', cursive;
        color:white;
        font-size:2em;
        margin:0;
    }

    p, h3 {
        font-family: 'Fjalla One', sans-serif;
        color:white;
        margin: 0;
        display:flex;
        align-items: center;
    }

    p span {
        height:1px;
        display:inline-block;
        width: 50px;
        background: white;
        margin-left:5px;
    }

    .hero-img {
        position:absolute;
        right:0;
        top:0;
        width:580px;
        height:100%;
        overflow:hidden;
    }

    .hero-img img {
        height: auto;
        display: none;
        z-index:1;
        position:relative;
        float:right;
        margin-top:100px;
        width:430px;
    }

    @media(min-width:600px) {
        h1 {
            font-size:5em;
        }

        .by-line {
            font-size:1.4em;
        }
    }

    @media(min-width:715px) {
        #header {
            padding-top:100px;
        }
    }
    @media(min-width:940px) {
        #header {
            height:750px;
            padding-top:0;
        }
        #header #intro {
            padding-top:320px;
            max-width:720px;
        }

        .hero-img img {
            display:block;
        }
    }

    @media(min-width:1100px) {
        .hero-img img {
            width: 540px;
            margin: 0 auto;
            float:none;
        }
    }
</style>
