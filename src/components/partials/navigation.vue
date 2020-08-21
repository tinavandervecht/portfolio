<template>
    <div>
        <span @click="toggleNav()">
            <span class="fas fa-bars" ></span>
        </span>
        <nav id="nav" :class="navOpened ? 'opened' : ''">
            <span @click="toggleNav()">
                <span class="fas fa-window-close"></span>
            </span>
            <styled-button text="About" link="#" />
            <styled-button text="Work" link="#" />
            <styled-button text="Skills" link="#" />
            <styled-button text="Contact" link="#" />
        </nav>
    </div>
</template>

<script>
    import styledButton from './styled-button.vue';

    export default {
        components: {
            styledButton
        },

        data() {
            return {
                navOpened: false
            };
        },

        methods: {
            toggleNav() {
                this.navOpened = ! this.navOpened;
            }
        }
    };
</script>

<style scoped>
    .fa-bars, .fa-window-close {
        padding: 25px 50px;
        color: white;
        cursor:pointer;
        font-size:25px;
        position:relative;
        z-index:1;
    }

    #nav {
        position:fixed;
        z-index:4;
        top:0;
        left:-100%;
        width:100%;
        height: 100%;
        background: rgba(0,0,0,0.7);
        transition: left 300ms ease-in-out;
    }

    #nav.opened {
        left:0%;
    }

    @media(min-width:715px) {
        .fa-bars, .fa-window-close {
            display:none;
        }

        #nav {
            display:flex;
            left:0;
            background:none;
            position:relative;
            padding: 25px 50px;
            position:relative;
            z-index:1;
        }

        #nav /deep/ a {
            margin: 15px 45px 15px 0;
        }
    }
</style>
