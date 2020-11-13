<template>
    <div :class="['easter', {'visible': visible}]">
        <div class="header"></div>
        <div class="body">
            <div class="icon">
                <span class="fa fa-egg"></span>
            </div>
            <div v-html="message"></div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                message: '<h4>Congrats!</h4><p>You found nothing. There\'s nothing here.</p>',
                timesRun: 0,
                duration: 5000,
                buffer: [],
                timer: null,
                visible: false,
                eggs: [],
            };
        },

        mounted () {
            this.setEggs();

            document.addEventListener('keyup', (e) => {
                if (this.timer) {
                    clearTimeout(this.timer);
                }

                this.buffer.push(e.key);

                for (let egg of this.eggs) {
                    if (this.sameArray(this.buffer, egg)) {
                        this.visible = true;
                        this.buffer = [];
                        if (this.duration) {
                            setTimeout(this.resetEasterEgg, this.duration);
                        }

                        return;
                    }
                }

                this.timer = setTimeout(this.resetBuffer, 500);
            });
        },

        methods: {
            setEggs() {
                const defaultKeys = [
                    'ArrowUp',
                    'ArrowUp',
                    'ArrowDown',
                    'ArrowDown',
                    'ArrowLeft',
                    'ArrowRight',
                    'ArrowLeft',
                    'ArrowRight'
                ];

                this.eggs.push(defaultKeys.concat(['b', 'a']));
                this.eggs.push(defaultKeys.concat(['B', 'A']));
            },

            sameArray(a, b) {
                if (a.length !== b.length) {
                    return false;
                }

                for (let i = 0; i < a.length; i++) {
                    if (a[i] !== b[i]) {
                        return false;
                    }
                }

                return true;
            },

            resetBuffer() {
                if (this.timer) {
                    clearTimeout(this.timer);
                }

                this.buffer = [];
            },

            resetEasterEgg() {
                if (this.timer) {
                    clearTimeout(this.timer)
                }

                this.buffer = [];
                this.visible = false;
                setTimeout(() => {
                    this.updateMessage();
                    this.timesRun = this.timesRun === 2 ? 0 : this.timesRun + 1;
                }, 400);
            },

            updateMessage() {
                if (this.timesRun === 0) {
                    this.message = '<h4>Seriously?</h4><p>Do you think I\'m lying? There\'s no easter egg here.</p>';
                } else if (this.timesRun === 1) {
                    this.message = '<h4>Damn.</h4><p>Alright, fine. You win. here\'s your easter egg:</p><img src="/images/easter-egg.png" />';
                } else {
                    this.message = '<h4>Congrats!</h4><p>You found nothing. There\'s nothing here.</p>';
                }
            }
        }
    };
</script>

<style>
    .easter {
        position: fixed;
        bottom: -100%;
        left: 10px;
        border-radius:10px;
        border:1px solid #FFFF99;
        z-index:3;
        text-align:center;
        box-shadow:4px 5px 15px -4px rgba(0,0,0,0.73);
        transition: bottom .3s ease-in-out;
    }

    .easter.visible {
        bottom: 10px;
    }

    .header {
        background:#FFFF99;
        height:65px;
        border-top-left-radius:10px;
        border-top-right-radius:10px;
    }

    .icon {
        border-radius: 50%;
        background: white;
        font-size: 26px;
        width: 70px;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin:-67px auto 0 auto;
        color:#DDA0DD;
    }

    .body {
        padding:25px;
        background:white;
        border-bottom-left-radius:10px;
        border-bottom-right-radius:10px;
    }

    p {
        margin-bottom:0;
    }
</style>