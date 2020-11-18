<template>
    <section id="skills">
        <div class="particle-wrapper">
            <vue-particles
                color="#ffc7db"
                :particleOpacity="0.2"
                :particlesNumber="40"
                shapeType="circle"
                :particleSize="15"
                :linesWidth="0"
                :lineOpacity="0"
                :moveSpeed=".2"
                :hoverEffect="false"
                :clickEffect="false"
            />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <styled-title
                        title="Languages I Know"
                        text-color="#141c3a"
                        background-color="#5aa6ed"
                    />
                    <div class="tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">Sass</span>
                        <span class="tag">Javascript</span>
                        <span class="tag">JQuery</span>
                        <span class="tag">VueJS</span>
                        <span class="tag">React</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Python</span>
                        <span class="tag">webpack</span>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <styled-title
                        title="Programs/Frameworks I Use"
                        text-color="#141c3a"
                        background-color="#5aa6ed"
                    />
                    <div class="tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">Wordpress</span>
                        <span class="tag">Concrete5</span>
                        <span class="tag">Adobe Photoshop</span>
                        <span class="tag">Sketch</span>
                        <span class="tag">Git</span>
                        <span class="tag">CodeIgniter</span>
                        <span class="tag">Ghost</span>
                        <span class="tag">Adobe InDesign</span>
                    </div>
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
    };
</script>

<style scoped>
    section {
        background: #ff99be;
        padding: 100px 0;
        position:relative;
        margin-bottom:50px;
    }

    .skill {
        margin-top:25px;
    }

    .particle-wrapper {
        height:100%;
        overflow:hidden;
        width:100%;
        position:absolute;
        left:0;
        top:0;
    }

    /deep/ #particles-js {
        width:100%;
    }

    section::before {
        content:'';
        width:110%;
        height:1px;
        position:absolute;
        left:-10px;
        top:0;
        background-color:#2c8de8;
        transform:rotate(-6deg);
        animation: wiggleIn 4s ease-in-out infinite alternate;
    }

    section::after {
        content:'';
        width:110%;
        height:1px;
        position:absolute;
        left:-10px;
        bottom:0;
        background-color:#2c8de8;
        transform:rotate(-6deg);
        animation: wiggleIn 4s ease-in-out infinite alternate;
    }

    .tags {
        margin-left:-10px;
        margin-bottom:50px;
    }

    .tag {
        background:#EDEDED;
        padding:5px 25px;
        border-radius:25px;
        margin:5px;
        display:inline-block;
    }

    @media(min-width: 768px) {
        .tags {
            margin-bottom:0;
        }
    }

    @media(min-width: 1200px) {
        section {
            padding: 200px 0;
        }
    }

    @keyframes wiggleIn {
        from {
            transform:rotate(-6deg);
        }
        to {
            transform:rotate(-5deg);
        }
    }
</style>