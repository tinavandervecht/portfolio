<template>
    <div>
        <div id="particle-one"></div>
        <div id="particle-two"></div>
        <div id="particle-three"></div>
        <div id="particle-four"></div>
        <div id="particle-five"></div>
        <div id="particle-six"></div>
        <div id="particle-seven"></div>
        <div id="particle-eight"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            document.addEventListener('mousemove', this.animateParticles);
        },

        methods: {
            animateParticles(cursor) {
                const pageX = (cursor.pageX || cursor.clientX) - (window.innerWidth / 2);
                const pageY = (cursor.pageY || cursor.clientY) - (window.innerHeight / 2);

                const pOneX = (((15 / window.innerWidth) * pageX)) * - 1;
                const pOneY = (((15 / window.innerHeight) * pageY)) * - 1;
                document.getElementById('particle-one').style.transform = `matrix(1,0,0,1.0,${pOneX},${pOneY})`;

                const pTwoX = (((45 / window.innerWidth) * pageX)) * - 1;
                const pTwoY = (((45 / window.innerHeight) * pageY)) * - 1;
                document.getElementById('particle-two').style.transform = `matrix(1,0,0,1.0,${pTwoX},${pTwoY})`;

                const pThreeX = (((50 / window.innerWidth) * pageX)) * - 1;
                const pThreeY = (((15 / window.innerHeight) * pageY)) * - 1;
                document.getElementById('particle-three').style.transform = `matrix(1,0,0,1.0,${pThreeX},${pThreeY})`;

                const pFourX = (((15 / window.innerWidth) * pageX)) * - 1;
                const pFourY = (((50 / window.innerHeight) * pageY)) * - 1;
                document.getElementById('particle-four').style.transform = `matrix(1,0,0,1.0,${pFourX},${pFourY})`;

                const pFiveX = (((75 / window.innerWidth) * pageX)) * - 1;
                const pFiveY = (((75 / window.innerHeight) * pageY)) * - 1;
                document.getElementById('particle-five').style.transform = `matrix(1,0,0,1.0,${pFiveX},${pFiveY})`;
                document.getElementById('particle-six').style.transform = `matrix(1,0,0,1.0,${pFiveX},${pFiveY})`;
                document.getElementById('particle-seven').style.transform = `matrix(1,0,0,1.0,${pFiveX},${pFiveY})`;
                document.getElementById('particle-eight').style.transform = `matrix(1,0,0,1.0,${pFiveX},${pFiveY})`;
            }
        }
    };
</script>

<style scoped>
    #particle-one {
        width:20px;
        height:20px;
        border-radius:50%;
        border:3px solid #2c8de8;
        position:absolute;
        left:45%;
        top:60%;
    }

    #particle-two {
        width:40px;
        height:40px;
        border-radius:50%;
        background:#2cbfe8;
        position:absolute;
        left:15%;
        top:20%;
    }

    #particle-three {
        width:50px;
        height:50px;
        border-radius:50%;
        border:2px solid #2c8de8;
        position:absolute;
        right:35%;
        top:10%;
        opacity:.6;
    }

    #particle-four {
        width:50px;
        height:50px;
        border-radius:50%;
        border:6px solid #2cbfe8;
        position:absolute;
        left:5%;
        bottom:10%;
        opacity:.6;
    }

    #particle-five,
    #particle-six,
    #particle-seven,
    #particle-eight {
        width:15px;
        height:15px;
        border-radius:50%;
        background:#2c8de8;
        position:absolute;
        opacity:.3;
    }

    #particle-five {
        left:70%;
        bottom:20%;
    }

    #particle-six {
        left:5%;
        top:15%;
        background:#2cbfe8;
    }

    #particle-seven {
        left:30%;
        bottom:10%;
    }

    #particle-eight {
        left:90%;
        top:5%;
    }
</style>
