<template>
    <div id="app">
        <navigation />
        <intro />
        <about />
        <skills />
        <work />
        <contact />
        <easter-egg />
    </div>
</template>

<script>
    import navigation from './partials/navigation.vue';
    import intro from './sections/intro.vue';
    import about from './sections/about.vue';
    import skills from './sections/skills.vue';
    import work from './sections/work.vue';
    import contact from './sections/contact.vue';
    import easterEgg from './partials/easter-egg.vue';

    export default {
        components: {
            navigation,
            intro,
            about,
            skills,
            work,
            contact,
            easterEgg
        },
    };
</script>

<style>
    ::selection {
        background: #2c8de8;
    }

    ::-moz-selection {
        background: #2c8de8;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin:0;
        font-family: 'Nunito', sans-serif;
        overflow-x:hidden;
    }

    body /deep/ #header {
        margin-top: -120px;
    }

    @media(max-width:940px) {
        body /deep/ #header {
            padding-top:70px;
        }
    }
</style>