<template>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 d-none d-xl-block">
                    <div class="blob_container">
                        <div class="blob _one"></div>
                        <div class="blob _two"></div>
                        <div class="ring _one"></div>
                        <div class="ring _two"></div>
                    </div>
                    <img src="/images/avatar.png" alt="Avatar" />
                </div>
                <div class="col-xl-5">
                    <styled-title
                        title="About Me"
                        text-color="#141c3a"
                        background-color="#f0f0f0"
                    />
                    <img src="/images/avatar.png" alt="Avatar" class="d-xl-none mb-5" />
                    <h2><strong>Hi, I'm Tina! Nice to meet you.</strong></h2>
                    <h3>
                        I'm a full-stack developer with a passion for front end from London, Ontario.
                    </h3>
                    <p class="lead">
                        I enjoy taking ambitious ideas and timelines and delivering simple, creative results. When I'm not diving down the rabbit hole of code, I'm either learning random facts on the internet (because the internet never lies) or drinking wine and wishing I was the inquistor in Dragon Age: Inquisition.
                    </p>

                    <styled-button
                        class="mt-5"
                        text="Resume"
                        link="/files/tvandervecht_resume.pdf"
                        target="_blank"
                        color="#ff99be"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import styledButton from '../partials/styled-button.vue';
    import styledTitle from '../partials/styled-title.vue';

    export default {
        components: {
            styledTitle,
            styledButton
        }
    };
</script>

<style scoped>
    section {
        padding: 100px;
        padding-bottom:0;
        color:#141c3a;
    }

    @media(max-width:1200px) {
        section {
            padding: 50px;
        }

        .col-xl-5 {
            text-align: center;
        }

        /deep/ .btn-wrapper {
            margin: 0 auto;
        }
    }

    img {
        max-width:100%;
        margin:0 auto;
        display:block;
    }

    h2, h3 {
        margin-bottom: 15px;
    }

    .blob_container {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        transform: translate(-25%, -10%);
        z-index: -1;
    }

    .blob._one {
        position: absolute;
        height: 70%;
        width: 70%;
        top: 30%;
        left: 10%;
        background-color: #2cbfe8;
        animation: blobs 8s ease-in-out infinite alternate;
    }

    .blob._two {
        position: absolute;
        height: 40%;
        width: 30%;
        top: 15%;
        left: 90%;
        background-color: #2c8de8;
        animation: blobs 6s ease-in-out infinite alternate;
    }

    .ring {
        position: absolute;
        display: block;
        z-index: 1001;
        border-radius: 50% 50% 66% 34%/33% 34% 66% 67%;
        background-color: transparent;
        border: 0.5px solid #ff99be;
    }

    .ring._one {
        top: 30%;
        left: 15%;
        height: 30%;
        width: 30%;
        animation: grow 5s ease-in-out infinite alternate;
    }

    .ring._two {
        top: 30%;
        left: 85%;
        height: 20%;
        width: 20%;
        animation: grow 8s ease-in-out infinite alternate;
    }

    @keyframes blobs {
        from {
            border-radius: 59% 41% 64% 36%/79% 63% 37% 21%;
        }
        to {
            border-radius: 50% 50% 66% 34%/33% 34% 66% 67%;
        }
    }

    @keyframes grow {
        0% {
            border-radius: 50% 50% 66% 34%/33% 34% 66% 67%;
            width: 30%;
            height: 30%;
            transform: rotate3d(0, 1, 0, 30deg);
        }
        100% {
            border-radius: 59% 41% 64% 36%/79% 63% 37% 21%;
            width: 45%;
            height: 45%;
            transform: rotate3d(2, 1, 0, 40deg);
        }
    }
</style>
