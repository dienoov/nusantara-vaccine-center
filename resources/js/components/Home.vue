<template>
    <div class="home">
        <nav class="navbar fixed-top">
            <router-link to="/" class="navbar-brand">
                <img src="/svg/logo-white.svg" alt="logo">
            </router-link>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#news" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a href="#date" class="nav-link">Date</a>
                </li>
                <li class="nav-item">
                    <a href="#vaccine" class="nav-link">Get Vaccine</a>
                </li>
                <li class="nav-item" v-if="!user">
                    <router-link to="/login" class="nav-link-btn">Login</router-link>
                </li>
                <li class="nav-item" v-if="!user">
                    <router-link to="/register" class="nav-link-btn">Register</router-link>
                </li>
                <li class="nav-item nav-user" v-if="user">
                    <a href="#" class="nav-link">{{ user.name }}</a>
                    <ul class="dropdown">
                        <li>
                            <router-link to="/account">My Account</router-link>
                        </li>
                        <li>
                            <a href="#" @click="logout">Sign Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <button class="navbar-toggler">
                <div class="hamburger"></div>
            </button>
        </nav>
        <div id="slider" class="slider">
            <div class="slides">
                <div class="slide fade">
                    <img src="/images/pexels-cottonbro-3951355.jpg" alt="img1">
                    <div class="caption">
                        <div class="container">
                            <h2>Protect Yourself From COVID-19</h2>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, amet architecto
                                asperiores consectetur dolorem doloremque eaque hic ipsam laboriosam nam nemo numquam
                                obcaecati provident quasi rem rerum, vel veritatis vitae.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slide fade">
                    <img src="/images/pexels-cottonbro-3951862.jpg" alt="img2">
                    <div class="caption">
                        <div class="container">
                            <h2>Always Sanitize Your Hands</h2>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cum eius eum hic, molestias
                                nobis non! Assumenda, culpa cum debitis dolorem exercitationem fuga laboriosam magni
                                obcaecati quaerat quia quidem vel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slide fade">
                    <img src="/images/pexels-cottonbro-3951600.jpg" alt="img3">
                    <div class="caption">
                        <div class="container">
                            <h2>Stay-at-home order</h2>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat incidunt molestiae
                                nulla odio? Aut consequatur dolorum eius minus officia, repellat tenetur voluptas.
                                Accusantium aliquam at consequatur error repellat sapiente vero?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slide fade">
                    <img src="/images/pexels-cottonbro-3952238.jpg" alt="img3">
                    <div class="caption">
                        <div class="container">
                            <h2>When Is the End of COVID-19?</h2>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium, architecto
                                aspernatur eius laudantium libero nam, natus nostrum optio quaerat qui quod rem
                                repudiandae! Ab accusamus accusantium laborum voluptas voluptatibus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="py-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="/images/pexels-cottonbro-3952224.jpg" alt="img13" class="img-about">
                        <div class="box">
                            <h3>Covid Vaccine Center</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="box-arrow"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="display-4 my-0">About Us</h2>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, architecto asperiores
                            assumenda cumque dolores earum laborum natus nemo nihil, omnis praesentium quibusdam quis
                            tempora tenetur ullam unde, ut vitae voluptatem.
                        </p>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque, expedita harum, maiores
                            nobis non nostrum quasi, sed soluta sunt tempora voluptatem voluptatum? Aliquid doloribus
                            est maiores officiis placeat voluptas?
                        </p>
                        <!--                        <button class="btn btn-light mt-3">Learn More...</button>-->
                        <div class="row no-gutters mt-4">
                            <div class="col-sm-6">
                                <h3 class="display-4 m-0">250+</h3>
                                <p class="m-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="display-4 m-0">900+</h3>
                                <p class="m-0 text-muted">Accusamus assumenda corporis ducimus.</p>
                            </div>
                        </div>
                        <div class="row no-gutters mt-3">
                            <div class="col-sm-6">
                                <h3 class="display-4 m-0">12</h3>
                                <p class="m-0 text-muted">Assumenda labore, nesciunt.</p>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="display-4 m-0">25</h3>
                                <p class="m-0 text-muted">Quam quos saepe temporibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="news" class="py-80 bg-grey">
            <div class="container">
                <h2 class="display-4">Latest News</h2>
                <div class="row no-gutters wrapper" v-if="news[0]" @click="toggleModal(news[0])">
                    <div class="col-lg-6">
                        <img :src="`/images/${news[0].image}`" :alt="news[0].image" class="img-news-big">
                    </div>
                    <div class="col-lg-6 px-4">
                        <h3>{{ news[0].title }}</h3>
                        <strong class="text-muted">{{ newsDate(news[0].updated_at) }}</strong>
                        <p class="text-muted mb-4" v-html="news[0].body.substr(0, 160) + '…'"></p>
                        <div class="box-arrow ml-auto"></div>
                    </div>
                </div>
                <div class="row no-gutters mt-4">
                    <template v-for="(item, index) in news">
                        <div class="col-lg-4" v-if="index !== 0" @click="toggleModal(item)">
                            <div class="wrapper">
                                <img :src="`/images/${item.image}`" :alt="item.image" class="img-news">
                                <div class="px-3 pb-4">
                                    <h3>{{ item.title }}</h3>
                                    <strong class="text-muted">{{ newsDate(news[0].updated_at) }}</strong>
                                    <p class="text-muted mb-4" v-html="item.body.substr(0, 120) + '…'"></p>
                                    <div class="box-arrow ml-auto"></div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-news" ref="modal">
            <div class="content">
                <div class="container">
                    <div class="head">
                        <h2 class="title display-4 m-0 mb-4">{{ modal.title }}</h2>
                        <div class="close" @click="toggleModal">&times;</div>
                    </div>
                    <div class="body">
                        <img :src="`/images/${modal.image}`" :alt="modal.image" class="d-block">
                        <small class="d-block mt-1 mb-4 text-muted">{{ modal.title }}</small>
                        <div v-html="modal.body"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="date" class="py-80">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <h2 class="display-4 my-0">Save the Date</h2>
                        <p class="text-muted mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda neque quae
                            ratione suscipit. Amet animi architecto autem commodi, esse et id itaque iure molestias nisi
                            numquam quis quod vel!
                        </p>
                        <button class="btn">Schedule <span class="play"></span></button>
                    </div>
                    <div class="col-lg-6 dates my-4">
                        <div>The Priory Center, 16/04/21</div>
                        <div>City Care Center, 18/04/21</div>
                        <div class="active">Royal Hospital, 21/04/21</div>
                        <div>Riverside Park Stadium, 27/04/21</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="vaccine" class="py-80 bg-blue text-center" @click="getVaccine">
            <h2 class="display-1 text-uppercase my-0 text-white" id="get-your-vaccine">Get Your Vaccine</h2>
            <p class="font-weight-bold text-uppercase">Click Here</p>
        </div>
        <footer class="py-80">
            <div class="row">
                <div class="col-lg-3 text-center text-lg-left">
                    <img src="/svg/logo-black.svg" class="footer-logo" alt="logo" height="32">
                    <p class="text-muted mt-3 mb-0">&copy; 2021 SMK Nusantara</p>
                    <p class="text-muted my-0">All Rights Reserved</p>
                </div>
                <div class="col-lg-6">
                    <ul class="footer-nav">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#news" class="nav-link">News</a>
                        </li>
                        <li class="nav-item">
                            <a href="#date" class="nav-link">Date</a>
                        </li>
                        <li class="nav-item">
                            <a href="#vaccine" class="nav-link">Get Vaccine</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center text-lg-right">
                    <a href="#" class="social-media-icon">
                        <img src="/svg/icons8-instagram.svg" alt="instagram" height="30">
                    </a>
                    <a href="#" class="social-media-icon">
                        <img src="/svg/icons8-twitter.svg" alt="twitter" height="30">
                    </a>
                    <a href="#" class="social-media-icon">
                        <img src="/svg/icons8-play-button.svg" alt="youtube" height="30">
                    </a>
                </div>
            </div>
        </footer>
        <button class="btn btn-sidebar">
            <div class="arrow"></div>
        </button>
        <div class="sidebar-backdrop"></div>
        <div id="sidebar">
            <img src="/images/5fe5ac367667c.jpg" alt="info-1">
            <img src="/images/5fd8922e13335.jpg" alt="info-2">
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            user: false,
            news: [],
            modal: {
                title: "",
                image: "",
                body: "",
                updated_at: "",
            },
        };
    },
    methods: {
        loadUser() {
            this.$http.get("/api/scope/user")
                .then(({data}) => {
                    localStorage.setItem("user", JSON.stringify(data));
                    this.user = data;
                })
                .catch(this.logout);
        },
        logout() {
            this.user = false;
            localStorage.removeItem("token");
            localStorage.removeItem("role");
            localStorage.removeItem("user");
        },
        getVaccine() {
            this.$router.push("/account/vac-center");
        },
        loadNews() {
            this.$http.get("/api/latest")
                .then(({data}) => this.news = data.news);
        },
        newsDate(date) {
            date = date.substr(0, 10).split('-');
            return `${date[2]}/${date[1]}/${date[0].substr(0, 2)}`
        },
        toggleModal(news = {}) {
            const display = this.$refs.modal.style.display;
            this.$refs.modal.style.display = display === "block" ? "none" : "block";

            if (news)
                this.modal = news;
        },
    },
    mounted() {
        const script = document.createElement("script");
        script.src = "/js/website.js";
        document.querySelector(".home").appendChild(script);

        this.loadUser();
        this.loadNews();
    },
}
</script>

<style scoped>

</style>
