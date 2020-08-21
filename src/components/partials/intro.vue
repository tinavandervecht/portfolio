<template>
    <header id="header">
        <div id="intro">
            <p>
                Hello, I'm
                <span></span>
            </p>
            <h1>Tina Vandervecht</h1>
        </div>
        <div class="hero-img">
            <img ref="movingImage" src="/images/robot.png" />
        </div>
        <particles />
    </header>
</template>

<script>
    import particles from './particles.vue';

    export default {
        components: {
            particles
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

    h1 {
        font-family: 'Cabin Sketch', cursive;
        color:white;
        font-size:2em;
        margin:0;
    }

    p {
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
    }

    @media(min-width:940px) {
        #header {
            height:750px;
        }
        #header #intro {
            padding-top:320px;
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
