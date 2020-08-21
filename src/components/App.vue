<template>
    <div id="app">
        <navigation />
        <intro />
    </div>
</template>

<script>
    import intro from './partials/intro.vue';
    import navigation from './partials/navigation.vue';

    export default {
        components: {
            intro,
            navigation
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
        font-family: 'Fjalla One', sans-serif;
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