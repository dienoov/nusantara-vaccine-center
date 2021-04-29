<template>
    <div>
        <nav class="navbar fixed-top bg-light border-bottom-black">
            <a href="/" class="navbar-brand">
                <img src="/images/logo-black.png" alt="logo">
            </a>
            <ul class="navbar-nav">
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
            <button class="navbar-toggler">
                <div class="hamburger"></div>
            </button>
        </nav>
        <div id="slider" class="slider border-bottom-black">
            <div class="slides">
                <div class="slide fade">
                    <img src="/images/img1.jpg" alt="img1">
                    <div class="caption">
                        <h2>Boris Johnson faces battle to get vaccine passports through parliament</h2>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, molestias, nesciunt! Aut
                            esse ex
                            laboriosam quisquam rerum. Amet, aperiam consequuntur corporis dolores eum minima pariatur
                            placeat
                            qui quod quos, repellat.
                        </p>
                    </div>
                    <div class="detail text-right">
                        <h4 class="my-0">April 5, 2021</h4>
                        <p class="text-muted mt-1 mb-3">4:30pm</p>
                        <h4 class="my-0">Jakarta Selatan</h4>
                        <p class="text-muted mt-1 mb-3">DKI Jakarta, Indonesia</p>
                    </div>
                </div>
                <div class="slide fade">
                    <img src="/images/img2.jpg" alt="img2">
                    <div class="caption">
                        <h2>Modernas Covid vaccine rolled out in Nusantara</h2>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti doloremque earum eius,
                            eos,
                            eveniet expedita facere facilis inventore iste nemo, neque officia officiis perferendis
                            placeat
                            quisquam quo quod sapiente totam.
                        </p>
                    </div>
                    <div class="detail text-right">
                        <h4 class="my-0">April 3, 2021</h4>
                        <p class="text-muted mt-1 mb-3">2:21pm</p>
                        <h4 class="my-0">Semarang</h4>
                        <p class="text-muted mt-1 mb-3">Jawa Tengah, Indonesia</p>
                    </div>
                </div>
                <div class="slide fade">
                    <img src="/images/img3.jpg" alt="img3">
                    <div class="caption">
                        <h2>A coronavirus vaccine developed by Chinas Sinovac has been found</h2>
                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti doloremque earum eius,
                            eos,
                            eveniet expedita facere facilis inventore iste nemo, neque officia officiis perferendis
                            placeat
                            quisquam quo quod sapiente totam.
                        </p>
                    </div>
                    <div class="detail text-right">
                        <h4 class="my-0">April 1, 2021</h4>
                        <p class="text-muted mt-1 mb-3">6:03am</p>
                        <h4 class="my-0">Malang</h4>
                        <p class="text-muted mt-1 mb-3">Jawa Timur, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="py-80 border-bottom-black">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-4 my-0">About Us</h2>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi facere fugiat id illum odio quam
                        qui
                        sapiente. Adipisci aspernatur deleniti dolorum fuga iure laudantium omnis sed sunt voluptatem!
                        Cupiditate, quo. Adipisci animi at debitis esse ipsum iusto labore laboriosam laborum magnam
                        mollitia natus nihil non pariatur qui quis, ratione sint ullam vel?
                    </p>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, alias dolore, doloremque esse est
                        facere
                        facilis, ipsum laboriosam minima quaerat sequi tempore voluptate! Error, esse excepturi
                        exercitationem
                        explicabo facere non?
                    </p>
                    <button class="btn btn-light mt-3">Learn More...</button>
                </div>
                <div class="col-lg-6">
                    <img src="/images/img13.jpg" alt="img13" class="img-about mb-3">
                    <img src="/images/img14.jpg" alt="img14" class="img-about">
                </div>
            </div>
        </div>
        <div id="news" class="border-bottom-black">
            <div class="row">
                <div class="col-lg-3 py-80 px-20 bg-black">
                    <h2 class="display-4 text-center">Latest News</h2>
                </div>
                <div class="col-lg-9 px-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="/images/covid-19-and-tobacco-1---bi.png" alt="news-1" class="img-news-big">
                        </div>
                        <div class="col-lg-6">
                            <h3>Covid-19 and Tobacco</h3>
                            <p>April 10, 2021</p>
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam autem dignissimos
                                labore
                                magnam ratione repudiandae sunt. Aliquid deserunt, eaque et molestiae nisi nobis quaerat
                                quisquam tempore unde, velit vitae, voluptate!
                            </p>
                            <a href="#" class="news-link" data-toggle="modal" data-target="#modal-news">Read More...</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="/images/new-normal-1---bie4b73458c9a84d4995ebef27544a3a0a.png" alt="news-2"
                                 class="img-news">
                            <h3>How to Protect Yourself From Covid-19</h3>
                            <p>April 8, 2021</p>
                            <a href="#" class="news-link" data-toggle="modal" data-target="#modal-news">Read More...</a>
                        </div>
                        <div class="col-lg-4">
                            <img src="/images/new-normal-2---bi082a3c1d6a2345f280eded572345272f.png" alt="news-3"
                                 class="img-news">
                            <h3>Stay Alert, Control the Virus, Save Lives</h3>
                            <p>April 7, 2021</p>
                            <a href="#" class="news-link" data-toggle="modal" data-target="#modal-news">Read More...</a>
                        </div>
                        <div class="col-lg-4">
                            <img src="/images/new-normal-4---bi.png" alt="news-4" class="img-news">
                            <h3>Wash Your Hands. Dont Get Sick.</h3>
                            <p>April 6, 2021</p>
                            <a href="#" class="news-link" data-toggle="modal" data-target="#modal-news">Read More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modal-news">
            <div class="content">
                <div class="head">
                    <h3 class="title">How to Protect Yourself From Covid-19</h3>
                    <span class="close" data-dismiss='modal'>&times;</span>
                </div>
                <div class="body">
                    <img src="/images/new-normal-1---bie4b73458c9a84d4995ebef27544a3a0a.png" alt="new-normal"
                         class="mx-auto mb-3">
                    <p>April 20, 2021</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, iure sed! Consequatur
                        culpa ex
                        itaque
                        necessitatibus! Ad animi asperiores aut blanditiis iure labore nihil nobis, numquam optio sint
                        veniam
                        veritatis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolore
                        doloremque est
                        fugit,
                        iusto magnam quas reprehenderit similique sit voluptate. Aperiam consequatur deserunt, ducimus
                        earum
                        facilis
                        maxime quo ratione sunt.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolores eligendi eum labore
                        molestias
                        quia.
                        Accusantium alias cum cumque dignissimos doloribus fuga laboriosam, nam nulla omnis, quo rerum
                        sapiente
                        voluptas? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet commodi cumque deleniti
                        dolor
                        eos
                        et eveniet laborum molestias nihil non obcaecati perferendis quam ratione reprehenderit sunt
                        tempora
                        veritatis vitae, voluptate.
                    </p>
                </div>
            </div>
        </div>
        <div id="date" class="py-80 border-bottom-black">
            <h2 class="display-4 text-center">Save the Date</h2>
            <hr class="border-top-black mx-20">
            <div class="row px-20">
                <div class="col-lg-9">
                    <h3>Sinovac Vaccine</h3>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, alias architecto delectus
                        dolore
                        dolorem earum eius fugit in minus modi perferendis perspiciatis quia quo reprehenderit rerum,
                        sint sit
                        ullam voluptatem?
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-right">April 12, 2021</p>
                </div>
            </div>
            <hr class="border-top-black mx-20">
            <div class="row px-20">
                <div class="col-lg-9">
                    <h3>Moderna Vaccine</h3>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci consequuntur error, illum
                        impedit
                        ipsam maiores maxime, minus necessitatibus possimus quaerat quia quo quos repudiandae similique,
                        vero.
                        Error non rerum voluptas?
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-right">April 16, 2021</p>
                </div>
            </div>
            <hr class="border-top-black mx-20">
            <div class="row px-20">
                <div class="col-lg-9">
                    <h3>Sinovac Vaccine</h3>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, architecto blanditiis
                        corporis dicta
                        distinctio dolore illo illum itaque magnam molestias non nostrum placeat quasi quibusdam quis
                        ratione
                        recusandae saepe totam.
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-right">April 17, 2021</p>
                </div>
            </div>
            <hr class="border-top-black mx-20">
        </div>
        <div id="vaccine" class="py-80 bg-blue text-center border-bottom-black">
            <h2 class="display-1 text-uppercase my-0 text-white" id="get-your-vaccine">Get Your Vaccine</h2>
            <p class="font-weight-bold text-uppercase">Click Here</p>
        </div>
        <footer class="py-80">
            <div class="row">
                <div class="col-lg-3 text-center text-lg-left">
                    <img src="/images/logo-black.png" alt="logo" height="32">
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
                        <img src="/svg/044-instagram.svg" alt="instagram" height="32">
                    </a>
                    <a href="#" class="social-media-icon">
                        <img src="/svg/096-twitter.svg" alt="twitter" height="32">
                    </a>
                    <a href="#" class="social-media-icon">
                        <img src="/svg/116-youtube.svg" alt="youtube" height="32">
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
    name: "Home"
}
</script>

<style scoped>

</style>
