<template>
    <footer class="mt-auto">
        <div class="mt-3" :class="[tema ? 'bg-footer-light' : 'bg-footer-dark']">
            <div class="flex f-column">
                <div class="container pt-4 pb-2 px-0-md grid-10 gap-20 flex-md between-md" :class="[mobile ? 'px-2' : '']">
                    <div class="about_us g-col-5">
                        <h4 class="bold">About Us</h4>
                        <ul>
                            <li>
                                <a class="aboutUs block flex between" href="https://www.linkedin.com/in/adamo-carangi/">
                                    <span>Adamo</span>
                                    <span><font-awesome-icon icon="fa-brands fa-linkedin" /></span>
                                </a>
                            </li>
                            <li>
                                <a class="aboutUs block flex between" href="https://www.linkedin.com/in/irinel-momoloaca/">
                                    <span>Irinel</span>
                                    <span><font-awesome-icon icon="fa-brands fa-linkedin" /></span>
                                </a>
                            </li>
                            <li>
                                <a class="aboutUs block flex between" href="https://www.linkedin.com/in/jacopo-marini/">
                                    <span>Jacopo</span>
                                    <span><font-awesome-icon icon="fa-brands fa-linkedin" /></span>
                                </a>
                            </li>
                            <li>
                                <a class="aboutUs block flex between" href="https://www.linkedin.com/in/lucaponzoni/">
                                    <span>Luca</span>
                                    <span><font-awesome-icon icon="fa-brands fa-linkedin" /></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lavora_con_noi g-col-5">
                        <h4 class="bold"> Lavora con noi</h4>
                        <ul>
                            <li><a class="block" href="#">Hai un'Attività?</a></li>
                            <li><a class="block" href="#">Entra nel Team</a></li>
                            <li><a class="block" href="#">Diventa un Driver</a></li>
                        </ul>
                    </div>

                    <div class="note_legali g-col-5">
                        <h4 class="bold"> Note Legali</h4>
                        <ul>
                            <li><a class="block" href="#">Termini e Condizioni</a></li>
                            <li><a class="block" href="#">Privacy Policy</a></li>
                            <li><a class="block" href="#">Cookie Policy</a></li>
                            <li><a class="block" href="#">Preferenze Cookies</a></li>
                        </ul>
                    </div>

                    <div class="flex f-column between g-col-5">
                        <div class="flex f-column items-flex-end">
                            <a href="http://" class="download">
                                <img class="img-fluid" :src="'../storage/site_img/img_appstore.png'" alt="" />
                            </a>
                            <a href="http://" class="download">
                                <img class="img-fluid" :src="'../storage/site_img/img_playstore.png'" alt="" />
                            </a>
                        </div>

                        <div class="icons_container j-flex-end">
                            <a href="#"><font-awesome-icon icon="fa-brands fa-facebook" /></a>
                            <a href="#"><font-awesome-icon icon="fa-brands fa-instagram" /></a>
                            <a href="#"><font-awesome-icon icon="fa-brands fa-linkedin" /></a>
                            <a href="#"><font-awesome-icon icon="fa-brands fa-twitter" /></a>
                            <a href="#"><font-awesome-icon icon="fa-brands fa-telegram" /></a>
                        </div>
                    </div>
                </div>
                <div class="py-2 px-0-md" :class="[
                    mobile ? 'px-2' : '',
                    tema ? 'bg-footer-bottom-light' : 'bg-footer-bottom-dark',
                ]">
                    <div class="container flex between i-center py-2">
                        <div>
                            <cite class="fs-2">© Boolean - Classe 70 - Team 5</cite>
                        </div>
                        <div class="flex gap-10 overflow-hidden">
                            <div class="imd-card-pay">
                                <img class="fluid-img" :src="'../storage/site_img/visa.png'" alt="">
                            </div>
                            <div class="imd-card-pay">
                                <img class="fluid-img" :src="'../storage/site_img/mastercard.png'" alt="">
                            </div>
                            <div class="imd-card-pay">
                                <img class="fluid-img" :src="'../storage/site_img/mastercard-securcode.png'" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>


<script>
import store from "../store/store";
export default {
    name: "FooterVue",

    computed: {
        tema () { return store.coloreTema; },

        mobile () { return store.mobile; }
    },
};
</script>


<style scoped lang="scss">
@import "../../sass/variabili.scss";

.imd-card-pay {
    height: 2rem;
}

.download {
    height: 2.5rem;
}

.aboutUs > span:last-of-type {
    color: $textHoverFooterButton;
    opacity: 0;
    transition: opacity 0.6s ease-in-out;
}

.aboutUs:hover > span:last-of-type {
    opacity: 1;
}

.footer_container {
    margin: 0 auto;
}

ul {
    list-style: none;

    li {
        padding-top: 0.6rem;

        a {
            color: inherit;
            text-decoration: none;
        }
    }
}

li::after {
    content: '';
    display: block;
    width: 0%;
    height: 3px;
    background-color: $textHoverFooterButton;
    transition: width 0.6s cubic-bezier(.51, -0.01, .38, 1);
    border-radius: 10px;
}

li:hover::after {
    width: 100%;
}

.download {
    img {
        max-height: 40px;
    }
}

.icons_container {
    display: flex;
    justify-content: center;

    a {
        color: inherit;
        font-size: 1.5rem;
        padding: 0.5rem;
        flex-grow: 1;
        flex-basis: 0;
        display: flex;
        justify-content: center;
        transition: color 0.2s ease-in-out;

        &:hover {
            color: $textHoverFooterButton;
        }
    }
}

.bg-footer-light {
    background-color: $bgFooterLight;
    color: $textButtonLight;
}

.bg-footer-dark {
    background-color: $bgFooterDark;
    color: $textButtonDark;
}

.bg-footer-bottom-light {
    background-color: $bgFooterBottomLight;
}

.bg-footer-bottom-dark {
    background-color: $bgFooterBottomDark;
}
</style>
