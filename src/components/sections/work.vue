<template>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <styled-title
                        title="Some Past Work"
                        text-color="#141c3a"
                        background-color="#f0f0f0"
                    />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/icons/walkman.png" class="walkman-icon" alt="Walkman" />
                        <img class="card-img-top" src="/images/work/athleticfluency.png" alt="Website Image">
                        <div class="card-body">
                            <h5 class="card-title">Athletic Fluency</h5>
                            <p class="card-text">
                                A local company, Athletic Fluency wants to make waves in the London athletic crowd.
                                To help with that, they asked for a simple, 1 page website to showcase their
                                differences and achievements. Built on Concrete5, this website was designed
                                to expand their influence and help put them on the map.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/work/everspring.png" alt="Website Image">
                        <div class="card-body">
                            <h5 class="card-title">Everspring Farms</h5>
                            <p class="card-text">
                                Everspring Farms was a fun project I developed while at Arcane that connected a
                                Concrete5 framework for the branded website aspects with a drupal online store,
                                since the client wasn't interested in having Arcane re-do their store.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/icons/gameboy.png" class="gameboy-icon" alt="Gameboy" />
                        <img class="card-img-top" src="/images/work/teaseandcompany.png" alt="Website Image">
                        <div class="card-body">
                            <h5 class="card-title">Tease &amp; Company</h5>
                            <p class="card-text">
                                A local company, Tease &amp; Company wanted a fun, clean website to help further
                                their brand and increase their online presence. Designed by
                                <a href="https://github.com/aliciabulhoes" target="_blank">Alicia Bulhoes</a>,
                                this website was built
                                on Concrete5 to make it easy for the client to update and manage their own content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/icons/television.png" class="television-icon" alt="Television" />
                        <img class="card-img-top" src="/images/work/goodlife.jpg" alt="Website Image">
                        <div class="card-body">
                            <h5 class="card-title">GoodLife #sexysmartstrong</h5>
                            <p class="card-text">
                                I was the lead developer on the #sexysmartstrong website while at Arcane.
                                A beautiful campaign, the #sexysmartstrong website pulled in Twitter, Facebook,
                                and Instagram posts to build a never ending page of people eating, living,
                                and being better while posting about it online with the #sexysmartstrong hashtag.
                                I also got to build out a fun little quiz that, after answering a dozen questions,
                                would return with your "Sprit Animal". It was a very fun project!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="/images/work/turkstra.png" alt="Website Image">
                        <div class="card-body">
                            <h5 class="card-title">Turkstra</h5>
                            <p class="card-text">
                                A multi-site project, I was the lead developer at Arcane working on developing
                                several cohesive, connected websites that, while all unique, worked together to create
                                a smooth experience. All websites were built on Concrete5 to allow easy data management
                                for the client.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/icons/microphone.png" class="microphone-icon" alt="Microphone" />
                        <img class="card-img-top" src="/images/work/iecs.png" alt="Website Image">
                        <div class="card-body">
                            <h5 class="card-title">IECS</h5>
                            <p class="card-text">
                                A company I was connected with through Fanshawe's Reactr team,
                                I took on the project halfway through to work closely with the company's
                                engineers to build out a calculator that, when given all the data, will return
                                the proper product IECS can supply for the project. This project was built on
                                CodeIgniter with Javascript, and was a very fun experience with some intense
                                math functions.
                            </p>
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
    }
</script>

<style>
    section {
        padding:100px 0;
        position:relative;
    }

    .card {
        margin-bottom:10px;
        position:relative;
    }

    .walkman-icon {
        position:absolute;
        left: -28px;
        top: 43px;
        width: 55px;
        transform: rotate(-45deg);
        z-index: 1;
        animation: walkmanWiggle 1s ease-in-out infinite alternate;
    }

    .gameboy-icon {
        position: absolute;
        left: -38px;
        bottom: 15%;
        width: 42px;
        transform: rotate(-22deg);
        z-index: 1;
        animation: gameboyWiggle 1.5s ease-in-out infinite alternate;
    }

    .television-icon {
        position: absolute;
        right: -21px;
        top: 50%;
        width: 55px;
        transform: rotate(27deg);
        z-index: 1;
        animation: televisionWiggle .8s ease-in-out infinite alternate;
    }

    .microphone-icon {
        position: absolute;
        right: -31px;
        top: 83%;
        width: 47px;
        transform: rotate(40deg);
        z-index: 1;
        animation: microphoneWiggle 1.2s ease-in-out infinite alternate;
    }

    @keyframes walkmanWiggle {
        from {
            transform:rotate(-45deg);
        }
        to {
            transform:rotate(-35deg);
        }
    }

    @keyframes gameboyWiggle {
        from {
            transform:rotate(-22deg);
        }
        to {
            transform:rotate(-10deg);
        }
    }

    @keyframes televisionWiggle {
        from {
            transform:rotate(27deg);
        }
        to {
            transform:rotate(15deg);
        }
    }

    @keyframes microphoneWiggle {
        from {
            transform:rotate(40deg);
        }
        to {
            transform:rotate(25deg);
        }
    }
</style>
