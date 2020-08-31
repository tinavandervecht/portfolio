<template>
    <section>
        <div class="clearfix">
            <div
                :class="['skill', 'languages', {'active': activeSkill === 'languages', 'ignored': activeSkill === 'tools'}]"
                @mouseover="activeSkill = 'languages'"
                @mouseleave="activeSkill = null"
            >
                <styled-title
                    title="Languages"
                    text-color="#141c3a"
                    background-color="#ff99be"
                />
                <vue-word-cloud
                    style="height: 300px; width: 100%;"
                    :words="languages"
                    font-family="Finger Paint"
                    animation-easing="ease-in-out"
                    :animation-duration="500"
                />
            </div>
            <div
                :class="['skill', 'tools', {'active': activeSkill === 'tools', 'ignored': activeSkill === 'languages'}]"
                @mouseover="activeSkill = 'tools'"
                @mouseleave="activeSkill = null"
            >
                <styled-title
                    title="Programs/Tools"
                    text-color="#141c3a"
                    background-color="#2c8de8"
                />
                <vue-word-cloud
                    style="height: 300px; width: 100%;"
                    :words="tools"
                    font-family="Finger Paint"
                    animation-easing="ease-in-out"
                    :animation-duration="500"
                />
            </div>
        </div>
    </section>
</template>

<script>
    import styledTitle from '../partials/styled-title.vue';
    import VueWordCloud from 'vuewordcloud';

    export default {
        components: {
            styledTitle,
            [VueWordCloud.name]: VueWordCloud,
        },

        data() {
            return {
                activeSkill: null,
                colors: [
                    '#beff99',
                    '#99e4ff',
                    '#ffb999',
                    '#f1ff99'
                ]
            };
        },

        computed: {
            tools() {
                return [
                    {text: 'Laravel', weight: 9, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'Wordpress', weight: 5, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'Concrete5', weight: 5, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'Adobe Photoshop', weight: 4, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'Sketch', weight: 3, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'Git', weight: 9, color: this.colors[Math.floor(Math.random() * this.colors.length)]}
                ];
            },

            languages() {
                return [
                    {text: 'HTML', weight: 9, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'CSS/Sass', weight: 9, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'Javascript/JQuery', weight: 8, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'VueJS', weight: 9, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'React', weight: 6, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'PHP', weight: 9, color: this.colors[Math.floor(Math.random() * this.colors.length)]},
                    {text: 'SQL', weight: 5, color: this.colors[Math.floor(Math.random() * this.colors.length)]}
                ];
            }
        }
    };
</script>

<style scoped>
    .skill {
        padding: 100px 50px;
    }

    .skill.languages {
        background: #2c8de8;
    }

    .skill.tools {
        background: #ff99be;
    }

    @media(min-width: 768px) {
        .skill {
            float: left;
            width: 50%;
            transition: 2s width ease-in-out;
        }

        .skill.active {
            width: 65%;
        }

        .skill.ignored {
            width: 35%;
        }
    }
</style>