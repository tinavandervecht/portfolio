<template>
    <div id="app">
        <navigation />
        <intro />
        <about />
    </div>
</template>

<script>
    import navigation from './partials/navigation.vue';
    import intro from './sections/intro.vue';
    import about from './sections/about.vue';

    export default {
        components: {
            navigation,
            intro,
            about,
        }
    };
</script>

<style>
    ::selection {
        background: #2c8de8;
    }

    ::-moz-selection {
        background: #2c8de8;
    }

    body {
        margin:0;
        font-family: 'Nunito', sans-serif;
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