<template>
    <div class="btn-wrapper">
        <a class="btn-slice" :href="link">
            <div class="top"><span>{{ text }}</span></div>
            <div class="bottom"><span>{{ text }}</span></div>
        </a>
    </div>
</template>

<script>
    export default {
        props: {
            text: {
                type: String,
                required: true
            },

            link: {
                type: String,
                required: true
            }
        }
    };
</script>

<style scoped>
    .btn-wrapper {
        text-transform: uppercase;
    }

    .btn-slice {
        color: #ffffff;
        letter-spacing: 0.3rem;
        font-weight: 700;
        font-size:1.1em;
        text-align:center;
        padding: 20px 0;
        display:block;
    }

    .btn-slice .top {
        display:none;
    }

    @media(min-width:715px) {
        .btn-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: fit-content;
        }

        .btn-slice {
            font-size: 0.6875rem;
            padding: 10px 25px;
            border: 2px solid #ffffff;
            border-radius: 0rem;
            position: relative;
        }

        .btn-slice .top {
            position: relative;
            display:block;
            height: 6px;
            overflow: hidden;
            top: 0;
            transition: top 300ms cubic-bezier(1.000, -0.055, 0.025, 1.040);
            transition-timing-function: cubic-bezier(1.000, -0.055, 0.025, 1.040);
            transition-delay:0.15s;
        }

        .btn-slice .bottom {
            position: relative;
            height: 6px;
            overflow: hidden;
            bottom: 0;
            transition: bottom 300ms cubic-bezier(1.000, -0.055, 0.025, 1.040);
            transition-timing-function: cubic-bezier(1.000, -0.055, 0.025, 1.040);
            transition-delay:0.15s;
        }

        .btn-slice .bottom span {
            top: -6px;
            position: absolute;
            left: 0;
        }

        .btn-slice:hover .top {
            top: -5px;
            transition-delay:0.15s;
        }

        .btn-slice:hover .bottom {
            bottom: -5px;
            transition-delay:0.15s;
        }

        .btn-slice:before {
            content: '';
            height: 1px;
            width: 35px;
            background-color: #ffffff;
            position: absolute;
            margin-top: 6px;
            right: -15px;
            transition: all 500ms cubic-bezier(0.890, -0.170, 0.140, 1.225);
            transition-timing-function: cubic-bezier(0.890, -0.170, 0.140, 1.225);
        }

        .btn-slice:hover:before {
            width: 100%;
        }
    }
</style>
