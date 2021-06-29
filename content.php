<?php
session_start();
error_reporting(0);
include "include/koneksi.php";
?>
<?php
if ($_SESSION['id_pengguna'] != "") {
?>
    <?php
    $email = $_SESSION['email']; // mengambil email dari session yang login

    $sql = $conn->query("SELECT * FROM data_pengguna WHERE email='$email'"); // query memilih entri email pada database
    if (mysqli_num_rows($sql) == 0) {
    } else {
        $row = mysqli_fetch_assoc($sql);
    }
    ?>
    <div class="content">
        <h3 class="lg">Selamat Datang <?php echo $row['nama_lengkap'] ?></h3>
        <a href="booking.php" class="btn btn-default">Booking Tempat</a>
    </div>
<?php } else {

?>
    <div class="content">
        <h3 class="lg">Kebun Raya Balikpapan</h3>
        <a href="bukutamu.php" class="btn btn-default">Buku Tamu</a>
    <?php } ?>
    </div>
    </div>
    </div>
    </li>
    <!-- Slide-->
    <li class="slide dark">
        <!-- Background-->
        <div class="hero fs vcenter">
            <div style="background-image: url(images/office/halaman_depan.jpg);" class="bg faded parallax"></div>
            <div class="container text-center">
                <!-- Content-->
                <div class="content">
                    <h1 class="lg">Perkemahan</h1>
                    <h3>Kami menyediakan tempat untuk perkemahan</h3>
                    <a href="bukutamu.php" class="btn btn-default">Daftar Sekrang</a>
                </div>
            </div>
        </div>
    </li>
    <!-- Slide-->
    <li class="slide dark">
        <!-- Background-->
        <div class="hero fs vbottom">
            <div style="background-image: url(images/office/02.jpg);" class="bg faded-subtle parallax"></div>
            <div class="container">
                <!-- Content-->
                <div class="content">
                    <h4>Design is our passion, we love, share, make and breathe it.</h4>
                </div>
            </div>
        </div>
    </li>
    </ul>
    </section>
    <section>
        <div class="container content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="title-block">
                        <h3>From Zero to Hero</h3>
                        <h5>Bone expands your possibilities</h5>
                    </div>
                    <p>Sed lacus augue, congue vel dapibus at, convallis semper lorem. Etiam volutpat, est eget feugiat tristique, erat leo ullamcorper turpis, vel auctor nunc diam vitae urna. Aliquam quis lacus et augue bibendum tincidunt. Duis id cursus ex. Sed cursus tortor id vehicula finibus. Nulla in pharetra lacus. Nulla nec elit nec sem feugiat eleifend sed sed neque. Mauris consequat in purus id cursus. Nunc suscipit lacinia ante, sit amet pulvinar orci venenatis a.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="top-line">
        <div class="container content text-center">
            <div class="row">
                <div class="col-md-3 service">
                    <div class="icon ion-lightbulb item"></div>
                    <h4>Concept</h4>
                    <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-3 service">
                    <div class="icon ion-camera item"></div>
                    <h4>Photography</h4>
                    <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-3 service">
                    <div class="icon ion-monitor item"></div>
                    <h4>Design</h4>
                    <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-3 service">
                    <div class="icon ion-pizza item"></div>
                    <h4>Great food</h4>
                    <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="content gray">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <div class="intro">
                        <h2>A fantastic price</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="plan item">
                                <h3>Silver</h3>
                                <div class="price">&euro; 20 <span>/m</span></div>
                                <ul>
                                    <li><strong>Basic support</strong></li>
                                    <li><strong>Basic features</strong></li>
                                    <li><strong>Basic documentation</strong></li>
                                    <li>10 Iterations</li>
                                    <li>Basic concept</li>
                                    <li>10 Websites</li>
                                    <li>1TB Bandwidth</li>
                                </ul><a href="#" class="btn btn-default">View plan</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="plan highlighted item">
                                <h3>Gold</h3>
                                <div class="price">&euro; 40 <span>/m</span></div>
                                <ul>
                                    <li><strong>Premium support</strong></li>
                                    <li><strong>Premium features</strong></li>
                                    <li><strong>Premium documentation</strong></li>
                                    <li>25 Iterations</li>
                                    <li>Premium concept</li>
                                    <li>25 Websites</li>
                                    <li>2.5TB Bandwidth</li>
                                </ul><a href="#" class="btn btn-default">View plan</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="plan item">
                                <h3>Diamond</h3>
                                <div class="price">&euro; 55 <span>/m</span></div>
                                <ul>
                                    <li><strong>Unlimited support</strong></li>
                                    <li><strong>Unlimited features</strong></li>
                                    <li><strong>Unlimited documentation</strong></li>
                                    <li>Unlimited Iterations</li>
                                    <li>Unlimited concept</li>
                                    <li>Unlimited Websites</li>
                                    <li>Unlimited Bandwidth</li>
                                </ul><a href="#" class="btn btn-default">View plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="intro">
                <h3>Work</h3>
            </div>
            <!-- Portfolio grid-->
            <div class="grid">
                <!-- Portfolio item-->
                <div class="grid-sizer"></div><a href="pages/portfolio-single.html" class="grid-item">
                    <div style="background-image: url(images/thumbs/07.png)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Photography + Video</div>
                        <div class="description">
                            <h4>Land of God</h4>
                            <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </a>
                <!-- Portfolio item--><a href="pages/portfolio-single-2.html" class="grid-item">
                    <div style="background-image: url(images/thumbs/02.png)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Design + Art Direction</div>
                        <div class="description">
                            <h4>Weekly Planner</h4>
                            <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </a>
                <!-- Portfolio item--><a href="pages/portfolio-single.html" class="grid-item tall">
                    <div style="background-image: url(images/thumbs/03.png)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Design + Art Direction</div>
                        <div class="description">
                            <h4>Suit Inc.</h4>
                            <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </a>
                <!-- Portfolio item--><a href="pages/portfolio-single-2.html" class="grid-item">
                    <div style="background-image: url(images/thumbs/04.png)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Drone + Photography</div>
                        <div class="description">
                            <h4>Life on Mars </h4>
                            <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </a>
                <!-- Portfolio item--><a href="pages/portfolio-single.html" class="grid-item">
                    <div style="background-image: url(images/thumbs/05.png)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Design + Architecture</div>
                        <div class="description">
                            <h4>Concept</h4>
                            <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </a>
                <!-- Portfolio item--><a href="pages/portfolio-single-2.html" class="grid-item large">
                    <div style="background-image: url(images/thumbs/06.png)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Photography</div>
                        <div class="description">
                            <h4>Land of God #2</h4>
                            <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </a>
                <!-- Portfolio item--><a href="pages/portfolio-single.html" class="grid-item">
                    <div style="background-image: url(images/portraits/02.jpg)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Photography</div>
                        <div class="description">
                            <h4>She</h4>
                            <p>Lorem ipsum dolor.</p>
                        </div>
                    </div>
                </a>
                <!-- Portfolio item--><a href="pages/portfolio-single-2.html" class="grid-item">
                    <div style="background-image: url(images/thumbs/08.png)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Design + Art Direction</div>
                        <div class="description">
                            <h4>Concept</h4>
                            <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </a>
                <!-- Portfolio item--><a href="pages/portfolio-single.html" class="grid-item">
                    <div style="background-image: url(images/thumbs/09.png)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Architecture + Art Direction</div>
                        <div class="description">
                            <h4>The Architect</h4>
                            <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </a>
                <!-- Portfolio item--><a href="pages/portfolio-single-2.html" class="grid-item wide">
                    <div style="background-image: url(images/thumbs/10.png)" class="thumb"></div>
                    <div class="caption">
                        <div class="type">Photography + Art Direction</div>
                        <div class="description">
                            <h4>The Drive of Your Life</h4>
                            <p>We bring ideas to live. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>