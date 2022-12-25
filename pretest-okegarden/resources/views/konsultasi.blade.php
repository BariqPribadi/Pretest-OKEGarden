<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Konsultasi OKE Garden</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="{{asset('/image/favicon.png')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script src="https://kit.fontawesome.com/04ec86b6ec.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script> 

        <style>
           
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg shadow-sm" style="background: #ffffff;">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/image/logo.png')}}" width="200px" height="39px">
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto" style="font-size: 20px;">
                        <li class="nav-item me-4">
                            <a class="nav-link" aria-current="page" href="#">Beranda</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Layanan</a>
                        </li> -->
                        <li class="nav-item me-4 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu" style="font-size: 18px;">
                                <li><a class="dropdown-item" href="#">Layanan 1</a></li>
                                <li><a class="dropdown-item" href="#">Layanan 2</a></li>
                                <li><a class="dropdown-item" href="#">Layanan 3</a></li>
                                <!-- <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Layanan 4</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item me-4 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog
                            </a>
                            <ul class="dropdown-menu" style="font-size: 18px;">
                                <li><a class="dropdown-item" href="#">Blog 1</a></li>
                                <li><a class="dropdown-item" href="#">Blog 2</a></li>
                                <li><a class="dropdown-item" href="#">Blog 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-4 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mitra
                            </a>
                            <ul class="dropdown-menu" style="font-size: 18px;">
                                <li><a class="dropdown-item" href="#">Mitra 1</a></li>
                                <li><a class="dropdown-item" href="#">Mitra 2</a></li>
                                <li><a class="dropdown-item" href="#">Mitra 3</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class="navbar-brand ms-auto" href="#">
                        <img src="{{asset('/image/male.png')}}" class="rounded-circle" width="50px" height="50px">
                    </a>
                </div>
            </div>
        </nav>

        <section class="konsultasi" style="padding: 0px 80px;">
            <div class="container-fluid">
                <div class="row" style="margin-top: 100px;">
                    <h1 class="fw-bold text-center" style="color: #4D4D4D; margin-bottom: 20px;">Konsultasi Taman</h1>
                    <p class="fw-semibold text-center" style="color: #676767;">klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultan kami</p>
                </div>
                <div class="row justify-content-between" style="margin-top: 60px;">
                    <div id="calendarcolumn" class="col-md-5 rounded rounded-4 overflow-auto" style="padding: 60px 40px 10px 40px; background: white; border: solid #ebebeb; height: 603px">
                        <div class="row justify-content-between" style="padding: 0px 20px;">
                            <div id="calendarmonth" class="col-md-auto p1">
                                October 2022
                            </div>
                            <div class="col-md-auto">
                                <button class="button5" id="monthbefore" onclick="monthbefore()"><i class="fa-solid fa-chevron-left"></i></button>
                                <button class="button5" id="monthafter" onclick="monthafter()"><i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div id="october" class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <td><div>Mo</div></td>
                                            <td><div>Tu</div></td>
                                            <td><div>We</div></td>
                                            <td><div>Th</div></td>
                                            <td><div>Fr</div></td>
                                            <td><div>Sa</div></td>
                                            <td><div>Su</div></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td id="OctSaturday1"><div tabindex="0">1</div></td>
                                            <td id="OctSunday1"><div tabindex="0">2</div></td>
                                        </tr>
                                        <tr>
                                            <td id="OctMonday2"><div tabindex="0">3</div></td>
                                            <td id="OctTuesday2"><div tabindex="0">4</div></td>
                                            <td id="OctWednesday2"><div tabindex="0">5</div></td>
                                            <td id="OctThursday2"><div tabindex="0">6</div></td>
                                            <td id="OctFriday2"><div tabindex="0">7</div></td>
                                            <td id="OctSaturday2"><div tabindex="0">8</div></td>
                                            <td id="OctSunday2"><div tabindex="0">9</div></td>
                                        </tr>
                                        <tr>
                                            <td id="OctMonday3"><div tabindex="0">10</div></td>
                                            <td id="OctTuesday3"><div tabindex="0">11</div></td>
                                            <td id="OctWednesday3"><div tabindex="0">12</div></td>
                                            <td id="OctThursday3"><div tabindex="0">13</div></td>
                                            <td id="OctFriday3"><div tabindex="0">14</div></td>
                                            <td id="OctSaturday3"><div tabindex="0">15</div></td>
                                            <td id="OctSunday3"><div tabindex="0">16</div></td>
                                        </tr>
                                        <tr>
                                            <td id="OctMonday4"><div tabindex="0">17</div></td>
                                            <td id="OctTuesday4"><div tabindex="0">18</div></td>
                                            <td id="OctWednesday4"><div tabindex="0">19</div></td>
                                            <td id="OctThursday4"><div tabindex="0">20</div></td>
                                            <td id="OctFriday4"><div tabindex="0">21</div></td>
                                            <td id="OctSaturday4"><div tabindex="0">22</div></td>
                                            <td id="OctSunday4"><div tabindex="0">23</div></td>
                                        </tr>
                                        <tr>
                                            <td id="OctMonday5"><div tabindex="0">24</div></td>
                                            <td id="OctTuesday5"><div tabindex="0">25</div></td>
                                            <td id="OctWednesday5"><div tabindex="0">26</div></td>
                                            <td id="OctThursday5"><div tabindex="0">27</div></td>
                                            <td id="OctFriday5"><div tabindex="0">28</div></td>
                                            <td id="OctSaturday5"><div tabindex="0">29</div></td>
                                            <td id="OctSunday5"><div tabindex="0">30</div></td>
                                        </tr>
                                        <tr>
                                            <td id="OctMonday6"><div tabindex="0">31</div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div id="november" style="display: none;" class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <td><div>Mo</div></td>
                                            <td><div>Tu</div></td>
                                            <td><div>We</div></td>
                                            <td><div>Th</div></td>
                                            <td><div>Fr</div></td>
                                            <td><div>Sa</div></td>
                                            <td><div>Su</div></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div></div></td>
                                            <td id="NovTuesday1"><div tabindex="0">1</div></td>
                                            <td id="NovWednesday1"><div tabindex="0">2</div></td>
                                            <td id="NovThursday1"><div tabindex="0">3</div></td>
                                            <td id="NovFriday1"><div tabindex="0">4</div></td>
                                            <td id="NovSaturday1"><div tabindex="0">5</div></td>
                                            <td id="NovSunday1"><div tabindex="0">6</div></td>
                                        </tr>
                                        <tr>
                                            <td id="NovMonday2"><div tabindex="0">7</div></td>
                                            <td id="NovTuesday2"><div tabindex="0">8</div></td>
                                            <td id="NovWednesday2"><div tabindex="0">9</div></td>
                                            <td id="NovThursday2"><div tabindex="0">10</div></td>
                                            <td id="NovFriday2"><div tabindex="0">11</div></td>
                                            <td id="NovSaturday2"><div tabindex="0">12</div></td>
                                            <td id="NovSunday2"><div tabindex="0">13</div></td>
                                        </tr>
                                        <tr>
                                            <td id="NovMonday3"><div tabindex="0">14</div></td>
                                            <td id="NovTuesday3"><div tabindex="0">15</div></td>
                                            <td id="NovWednesday3"><div tabindex="0">16</div></td>
                                            <td id="NovThursday3"><div tabindex="0">17</div></td>
                                            <td id="NovFriday3"><div tabindex="0">18</div></td>
                                            <td id="NovSaturday3"><div tabindex="0">19</div></td>
                                            <td id="NovSunday3"><div tabindex="0">20</div></td>
                                        </tr>
                                        <tr>
                                            <td id="NovMonday4"><div tabindex="0">21</div></td>
                                            <td id="NovTuesday4"><div tabindex="0">22</div></td>
                                            <td id="NovWednesday4"><div tabindex="0">23</div></td>
                                            <td id="NovThursday4"><div tabindex="0">24</div></td>
                                            <td id="NovFriday4"><div tabindex="0">25</div></td>
                                            <td id="NovSaturday4"><div tabindex="0">26</div></td>
                                            <td id="NovSunday4"><div tabindex="0">27</div></td>
                                        </tr>
                                        <tr>
                                            <td id="NovMonday5"><div tabindex="0">28</div></td>
                                            <td id="NovTuesday5"><div tabindex="0">29</div></td>
                                            <td id="NovWednesday5"><div tabindex="0">30</div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- <div id="december" style="display: none;" class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <td><div>December</div></td>
                                            <td><div>Tu</div></td>
                                            <td><div>We</div></td>
                                            <td><div>Th</div></td>
                                            <td><div>Fr</div></td>
                                            <td><div>Sa</div></td>
                                            <td><div>Su</div></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td id="Thursday1"><div>1</div></td>
                                            <td id="Friday1"><div>2</div></td>
                                            <td><div>3</div></td>
                                            <td><div>4</div></td>
                                        </tr>
                                        <tr>
                                            <td><div>5</div></td>
                                            <td><div>6</div></td>
                                            <td><div>7</div></td>
                                            <td id="Thursday"><div>8</div></td>
                                            <td><div>9</div></td>
                                            <td><div>10</div></td>
                                            <td><div>11</div></td>
                                        </tr>
                                        <tr>
                                            <td><div>12</div></td>
                                            <td><div>13</div></td>
                                            <td><div>14</div></td>
                                            <td id="Thursday"><div>15</div></td>
                                            <td><div>16</div></td>
                                            <td><div>17</div></td>
                                            <td><div>18</div></td>
                                        </tr>
                                        <tr>
                                            <td><div>19</div></td>
                                            <td><div>20</div></td>
                                            <td><div>21</div></td>
                                            <td id="Thursday"><div>22</div></td>
                                            <td><div>23</div></td>
                                            <td><div>24</div></td>
                                            <td><div>25</div></td>
                                        </tr>
                                        <tr>
                                            <td><div>26</div></td>
                                            <td><div>27</div></td>
                                            <td><div>28</div></td>
                                            <td id="Thursday"><div>29</div></td>
                                            <td><div>30</div></td>
                                            <td><div>31</div></td>
                                            <td><div></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> -->

                            <div id="september" style="display: none;" class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <td><div>Mo</div></td>
                                            <td><div>Tu</div></td>
                                            <td><div>We</div></td>
                                            <td><div>Th</div></td>
                                            <td><div>Fr</div></td>
                                            <td><div>Sa</div></td>
                                            <td><div>Su</div></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                            <td id="SepThursday1"><div tabindex="0">1</div></td>
                                            <td id="SepFriday1"><div tabindex="0">2</div></td>
                                            <td id="SepSaturday1"><div tabindex="0">3</div></td>
                                            <td id="SepSunday1"><div tabindex="0">4</div></td>
                                        </tr>
                                        <tr>
                                            <td id="SepMonday2"><div tabindex="0">5</div></td>
                                            <td id="SepTuesday2"><div tabindex="0">6</div></td>
                                            <td id="SepWednesday2"><div tabindex="0">7</div></td>
                                            <td id="SepThursday2"><div tabindex="0">8</div></td>
                                            <td id="SepFriday2"><div tabindex="0">9</div></td>
                                            <td id="SepSaturday2"><div tabindex="0">10</div></td>
                                            <td id="SepSunday2"><div tabindex="0">11</div></td>
                                        </tr>
                                        <tr>
                                            <td id="SepMonday3"><div tabindex="0">12</div></td>
                                            <td id="SepTuesday3"><div tabindex="0">13</div></td>
                                            <td id="SepWednesday3"><div tabindex="0">14</div></td>
                                            <td id="SepThursday3"><div tabindex="0">15</div></td>
                                            <td id="SepFriday3"><div tabindex="0">16</div></td>
                                            <td id="SepSaturday3"><div tabindex="0">17</div></td>
                                            <td id="SepSunday3"><div tabindex="0">18</div></td>
                                        </tr>
                                        <tr>
                                            <td id="SepMonday4"><div tabindex="0">19</div></td>
                                            <td id="SepTuesday4"><div tabindex="0">20</div></td>
                                            <td id="SepWednesday4"><div tabindex="0">21</div></td>
                                            <td id="SepThursday4"><div tabindex="0">22</div></td>
                                            <td id="SepFriday4"><div tabindex="0">23</div></td>
                                            <td id="SepSaturday4"><div tabindex="0">24</div></td>
                                            <td id="SepSunday4"><div tabindex="0">25</div></td>
                                        </tr>
                                        <tr>
                                            <td id="SepMonday5"><div tabindex="0">26</div></td>
                                            <td id="SepTuesday5"><div tabindex="0">27</div></td>
                                            <td id="SepWednesday5"><div tabindex="0">28</div></td>
                                            <td id="SepThursday5"><div tabindex="0">29</div></td>
                                            <td id="SepFriday5"><div tabindex="0">30</div></td>
                                            <td><div></div></td>
                                            <td><div></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div id="datecolumn" class="col-md-auto rounded rounded-4 overflow-auto" style="padding: 60px 40px; background: white; border: solid #ebebeb; width: 770px; height: 603px;">
                        <div class="row">
                            <div class="p1" id="day" style="color: #4a4a4a; text-align: center; margin-top: -20px; margin-bottom: 18px; font-size: 25px;">Day</div>
                            <div class="row p2 justify-content-center" style="color: #4d4d4d; text-align: center; margin-top: -10px;">
                                <div id="month" class="col-md-auto" style="margin-left: 25px; margin-right: -15px;">
                                    October
                                </div>
                                <div id="date" class="col-md-auto" style="margin-right: -24px;">
                                    8
                                </div>
                                <div class="col-md-auto">
                                    , 2022
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <p class="p1" style="color: #4a4a4a;">Pilih Waktu</p>
                            <p class="p2" style="color: #4d4d4d; margin-top: -15px;">Durasi Konsultasi 30 Menit</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="button1" style="margin-bottom: 20px;">09.00</button>
                                <button type="button" class="button1" style="margin-bottom: 20px;">10.00</button>
                                <button type="button" class="button1" style="margin-bottom: 20px;">11.00</button>
                                <button type="button" class="button1">12.00</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="button1" style="margin-bottom: 20px;">13.00</button>
                                <button type="button" class="button1" style="margin-bottom: 20px;">14.00</button>
                                <button type="button" class="button1" style="margin-bottom: 20px;">15.00</button>
                                <button type="button" class="button1">16.00</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="informasi" id="informasi" style="padding: 0px 69px; margin: 50px 0px 100px 0px;">
            <div class="container-fluid">
                <div class="col-md-12" style="padding: 80px 80px; background: white; border: solid #ebebeb; border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom: 3px solid #ebebeb;">
                    <h1 style="margin-bottom: 40px;">Informasi Data Diri</h1>
                    <div class="row">
                        <div class="col-md-5">
                            <form action="#">
                                <label for="namalengkap" class="form-label p1">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namalengkap" placeholder="Yudha Wahyu" style="background: #f3f3f3; border: 0px solid #000;">
                            </form>
                        </div>
                        <div class="col-md-5">
                            <form action="#">
                                <label for="telepon" class="form-label p1">No HP</label>
                                <input type="text" class="form-control" id="telepon" placeholder="+62 852 2324 4747" style="background: #f3f3f3; border: 0px solid #000;">
                            </form>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-md-auto">
                            <p class="p2" style="font-weight: 500; font-size: 18px; color: #4d4d4d;">Alamat</p>
                        </div>
                        <div class="col-md-auto">
                            <div class="col-md-9 p2" style="font-size: 17px; color: #4d4d4d; border: 2px solid #005900; border-radius: 10px; padding: 20px 30px;">
                                {{ $alamat }}
                                <div class="d-md-flex justify-content-end">
                                    <a href="#" class="p2" style="font-size: 15px; color: #076623;">Tambah Alamat Baru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="padding: 80px 80px; background: white; border: solid #ebebeb; border-top: 0px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                    <div class="row">
                        <h1 style="margin-bottom: 40px;">Informasi Konsultasi Tanaman</h1>
                        <p class="p1">Lahan Taman</p>
                        <p class="p3" style="margin-top: -5px;">Pilih jumlah lahan taman yang akan dibuat.</p>
                        <div class="row" style="margin-left: 0;">
                            <button class="button2" style="margin-right: 20px;">1 Lahan Taman</button>
                            <button class="button2" style="margin-right: 20px;">2 Lahan Taman</button>
                            <button class="button2">Lebih Dari 2 Lahan Taman</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 45px;">
                        <p class="p1">Tema Taman</p>
                        <p class="p3" style="margin-top: -5px;">Pilih tema taman yang akan dibuat.</p>
                        <div style="background: #fff2d1; margin-left: 10px; border-radius: 10px; padding-left: 20px; padding-top: 15px; width: 750px;">
                            <p class="p3" style="font-weight: 500;"><span class="p1" style="font-size: 17px; ">Catatan : </span>Jika anda belum memiliki inspirasi tema taman maka anda bisa melewati tahapan ini, konsultan kami akan memberikan rekomendasi terbaik untuk anda.</p>
                        </div>
                        <div class="row" style="margin-top: 50px;">
                            <div class="col-md-4">
                                <img src="{{asset('/image/minimalis.png')}}" style="width: auto; height: 270px; border-radius: 10px;" class="card-img-top img-fluid" alt="Responsive image">
                                <div class="card" style="height: 205px; border-bottom: 3px solid #d7e5d6; border-top: 0; border-right: 3px solid #d7e5d6; border-left: 3px solid #d7e5d6; border-radius: 0px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; margin-top: -5px; background: transparent;">
                                    <div class="card-body overflow-auto" style="padding: 30px 20px 20px 20px;">
                                        <p class="card-title p1">Taman Minimalis</p>
                                        <p class="card-text p3">Taman yang indah dilahan yang sempit</p>
                                        <div class="row text-end">
                                            <a href="#" class="p3" style="color: #00640e; font-size: 20px; margin-top: 40px;">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('/image/kering.png')}}" style="width: auto; height: 270px; border-radius: 10px;" class="card-img-top img-fluid" alt="Responsive image">
                                <div class="card" style="height: 205px; border-bottom: 3px solid #d7e5d6; border-top: 0; border-right: 3px solid #d7e5d6; border-left: 3px solid #d7e5d6; border-radius: 0px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; margin-top: -5px; background: transparent;">
                                    <div class="card-body overflow-auto" style="padding: 30px 20px 20px 20px;">
                                        <p class="card-title p1">Taman Kering</p>
                                        <p class="card-text p3">Taman yang dirancang untuk menghasilkan suasana alam didalam dan diluar rumah</p>
                                        <div class="row text-end">
                                            <a href="#" class="p3" style="color: #00640e; font-size: 20px; margin-top: 17px;">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('/image/tropis.png')}}" style="width: auto; height: 270px; border-radius: 10px;" class="card-img-top img-fluid" alt="Responsive image">
                                <div class="card" style="height: 205px; border-bottom: 3px solid #d7e5d6; border-top: 0; border-right: 3px solid #d7e5d6; border-left: 3px solid #d7e5d6; border-radius: 0px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; margin-top: -5px; background: transparent;">
                                    <div class="card-body overflow-auto" style="padding: 30px 20px 20px 20px;">
                                        <p class="card-title p1">Taman Tropis</p>
                                        <p class="card-text p3">Taman yang paling sesuai dengan iklim di Indonesia</p>
                                        <div class="row text-end">
                                            <a href="#" class="p3" style="color: #00640e; font-size: 20px; margin-top: 17px;">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 50px;">
                            <p class="p1">Estimasi Ukuran Taman</p>
                            <div class="row" style="margin-left: 0;">
                                <button class="button3" style="margin-right: 30px;"><10m2</button>
                                <button class="button3" style="margin-right: 30px;">11-20m2</button>
                                <button class="button3" style="margin-right: 30px;">21-30m2</button>
                                <button class="button3" style="margin-right: 30px;">31-40m2</button>
                                <button class="button3" style="margin-right: 30px;">41-50m2</button>
                                <button class="button3" style="margin-right: 30px;">51-60m2</button>
                                <button class="button3" style="margin-right: 30px;">>100m2</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end" style="padding-right: 35px; margin-top: 100px;">
                        <button class="button4">Batal</button>
                        <button class="button4" style="background: #0d6a28; color: white; margin-left: 25px;">OKE</button>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    </body>
</html>
