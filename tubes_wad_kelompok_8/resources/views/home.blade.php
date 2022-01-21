@extends('layout.navbar')

@section('isi')

    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-black">Syamaita Wedding Organizer</h1>
                </div>
            </div>
        </div>
    </div><!-- //HERO -->

    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">SERIVCES</h6>
                    <h1>Our Services</h1>
                    <p>Services yang disediakan</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect bounceInUp">
                        <div class="iconbox">
                            <i class="bx bxs-check-shield"></i>
                        </div>
                        <h5 class="mt-4 mb-2">Packages</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                            perferendis </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class="bx bxs-comment-detail"></i>
                        </div>
                        <h5 class="mt-4 mb-2">Vendor</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                            perferendis </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class="bx bxs-cog"></i>
                        </div>
                        <h5 class="mt-4 mb-2">Testimoni</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                            perferendis </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- SERVICES -->

    <!-- TEAM -->
    <section id="team" style="background-color: lightpink;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">TEAM</h6>
                    <h1>Meet Our Crew Members</h1>
                    <p>Kelompok 8 SI4305</p>
                </div>
            </div>
            <div class="row text-center g-4 justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/team1.jpg" alt="">
                        <h5 class="mb-0 mt-4">Muhammad Rafi Mulyawan</h5>
                        <p>Mahasiswa</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/team2.jpg" alt="">
                        <h5 class="mb-0 mt-4">Muhammad Raihan Hadwirianto</h5>
                        <p>Mahasiswa</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/team3.jpg" alt="">
                        <h5 class="mb-0 mt-4">Fitri Adini Firdaus</h5>
                        <p>Mahasiswa</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/team4.jpg" alt="">
                        <h5 class="mb-0 mt-4">Ilham Bagus Sugiarto</h5>
                        <p>Mahasiswa</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/team4.jpg" alt="">
                        <h5 class="mb-0 mt-4">M. Habib Jauhari</h5>
                        <p>Mahasiswa</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- TEAM -->

    <!-- BLOG -->
        <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <img class="logo" src="img/logo-white.svg" alt="">
                    </div>
                    <div class="col-lg-2">
                        
                    </div>
                    
                    <div class="col-lg-3">
                        <h5 class="text-white">Kelompok 8 SI4305</h5>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="js/bootstrap.bundle.min.js"></script>
    
@endsection
