<template>
    <p class="title" :style="`--textColor: ${textColor};--backgroundColor: ${backgroundColor}`">
        {{ title }}
        <span></span>
    </p>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                required: true
            },

            textColor: {
                type: String,
                required: true
            },

            backgroundColor: {
                type: String,
                required: true
            },
        }
    }
</script>

<style scoped>
    .title {
        font-family: 'Fjalla One', sans-serif;
        color:#141c3a;
        margin: 0;
        display:flex;
        align-items: center;
        position:relative;
        z-index:2;
        margin-bottom:30px;
        color: var(--textColor);
    }

    .title:after {
        content: '';
        background:var(--backgroundColor);
        height:calc(100% + 10px);
        width:35px;
        position:absolute;
        top:-5px;
        left:-5px;
        z-index:-1;
    }

    .title span {
        height:1px;
        display:inline-block;
        width: 50px;
        background: var(--textColor);
        margin-left:5px;
    }
</style>