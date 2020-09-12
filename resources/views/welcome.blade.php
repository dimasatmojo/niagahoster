@extends('layouts.app')

@section('content')
    <div class="container pt-4 pb-3">
        <div class="row">
            <div class="col-md-6 col-xs-12 mb-2">
                <h2 class="font-bold mb-2">
                    PHP Hosting
                </h2>
                <h3 class="font-light mb-3">
                    <b>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan </b>    
                </h3>
                <ul class="list-unstyled font-regular">
                    <li class="mb-2">
                        <span class="fas fa-check-circle bg-icon-custom float-left pr-2 pt-1"></span>
                        Solusi PHP untuk performa query yang lebih cepat.
                    </li>
                    <li class="mb-2">
                        <span class="fas fa-check-circle bg-icon-custom float-left pr-2 pt-1"></span>
                        Konsumsi memori yang lebih rendah
                    </li>
                    <li class="mb-2">
                        <span class="fas fa-check-circle bg-icon-custom float-left pr-2 pt-1"></span>
                        Support PHP 5.3, PHP 5.5, PHP 5.6, PHP 7
                    </li>
                    <li class="mb-2">
                        <span class="fas fa-check-circle bg-icon-custom float-left pr-2 pt-1"></span>
                        Fitur enskripsi IonCube dan Zend Guard Loaders
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-xs-12 mb-2">
                <img src="{{ asset('assets/svg/illustration banner PHP hosting-01.svg') }}" alt="">
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <section class="pt-4 pb-2">
            <div class="p-0 text-center">
                <div class="row">
                    <div class="col-md-4 col-xs-12 d-flex align-items-center justify-content-center mb-5">
                        <img src="{{ asset('assets/svg/icon PHP Hosting_zendguard.svg') }}" alt="">
                    </div>
                    <div class="col-md-4 col-xs-12 d-flex align-items-center justify-content-center mb-5">
                        <img src="{{ asset('assets/svg/icon PHP Hosting_composer.svg') }}" alt="">
                    </div>
                    <div class="col-md-4 col-xs-12 d-flex align-items-center justify-content-center mb-5">
                        <img src="{{ asset('assets/svg/icon PHP Hosting_ioncube.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-3">
            <div class="p-0" style="text-align: center;">
                <div class="row">
                    <div class="col-12">
                        <h3 class="font-bold mb-2">Paket Hosting Singapura yang Tepat</h3>
                        <h4 class="font-light">
                            <b>Diskon 40% + Domain dan SSL Gratis untuk Anda</b>
                        </h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-5">
            <div class="card-deck mb-3 mr-3 ml-3 text-center">
                <div class="card mb-4 ml-0 mr-0 box-shadow h-100">
                    <div class="card-header bg-white">
                        <h5 class="my-0 font-bold">Bayi</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-bayi">
                        </li>
                        <li class="list-group-item">938 Pengguna Terdaftar</li>
                    </ul>
                    <div class="card-body">
                        <ul class="list-unstyled mt-2 mb-4 fs-4">
                            <li class="pb-2"><b>0.5X RESOURCE POWER</b></li>
                            <li class="pb-2"><b>500 MB</b> Disk Space</li>
                            <li class="pb-2"><b>Unlimited</b> Bandwidth</li>
                            <li class="pb-2"><b>Unlimited</b> Databases</li>
                            <li class="pb-2"><b>1</b> Domain </li>
                            <li class="pb-2"><b>Instant</b> Backup</li>
                            <li class="pb-2"><b>Unlimited SSL</b> Gratis Selamanya</li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary font-bold mt-2 btn-border-bold">Pilih Sekarang</button>
                    </div>
                </div>
                <div class="card mb-4 ml-0 mr-0 box-shadow h-100">
                    <div class="card-header bg-white">
                        <h5 class="my-0 font-bold">Pelajar</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-pelajar">
                        </li>
                        <li class="list-group-item">4.168 Pengguna Terdaftar</li>
                    </ul>
                    <div class="card-body">
                        <ul class="list-unstyled mt-2 mb-4 fs-4">
                            <li class="pb-2"><b>1X RESOURCE POWER</b></li>
                            <li class="pb-2"><b>Unlimited</b> Disk Space</li>
                            <li class="pb-2"><b>Unlimited</b> Bandwidth</li>
                            <li class="pb-2"><b>Unlimited</b> POP3 Email</li>
                            <li class="pb-2"><b>Unlimited</b> Databases</li>
                            <li class="pb-2"><b>10</b> Addon Domains</li>
                            <li class="pb-2"><b>Instant</b> Backup</li>
                            <li class="pb-2"><b>Domain Gratis</b> Selamanya</li>
                            <li class="pb-2"><b>Unlimited SSL</b> Gratis Selamanya</li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary font-bold mt-2 btn-border-bold">Pilih Sekarang</button>
                    </div>
                </div>
                <div class="card mb-4 ml-0 mr-0 box-shadow h-100 best-seller">
                    <div class="card-header bg-custom-1 no-border-bottom text-light pb-5">
                        <h5 class="my-0 font-bold title">Personal</h5>
                    </div>
                    <ul class="list-group list-group-flush text-light">
                        <li class="list-group-item bg-custom-1 no-border-bottom p-personal">
                        </li>
                        <li class="list-group-item bg-custom-2">10.017 Pengguna Terdaftar</li>
                    </ul>
                    <div class="card-body">
                        <ul class="list-unstyled mt-2 mb-4 fs-4">
                            <li class="pb-2"><b>2X RESOURCE POWER</b></li>
                            <li class="pb-2"><b>Unlimited</b> Disk Space</li>
                            <li class="pb-2"><b>Unlimited</b> Bandwidth</li>
                            <li class="pb-2"><b>Unlimited</b> POP3 Email</li>
                            <li class="pb-2"><b>Unlimited</b> Databases</li>
                            <li class="pb-2"><b>Unlimited</b> Addon Domains</li>
                            <li class="pb-2"><b>Instant</b> Backup</li>
                            <li class="pb-2"><b>Domain Gratis</b> Selamanya</li>
                            <li class="pb-2"><b>Unlimited SSL</b> Gratis Selamanya</li>
                            <li class="pb-2"><b>Private</b> Name Server</li>
                            <li class="pb-2"><b>SpamAssasin</b> Mail Protection</li>
                        </ul>
                        <button type="button" class="btn btn-primary font-bold mt-2">Pilih Sekarang</button>
                    </div>
                </div>
                <div class="card mb-4 ml-0 mr-0 box-shadow h-100">
                    <div class="card-header bg-white">
                        <h5 class="my-0 font-bold">Bisnis</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-bisnis">
                        </li>
                        <li class="list-group-item">3.552 Pengguna Terdaftar</li>
                    </ul>
                    <div class="card-body">
                        <ul class="list-unstyled mt-2 mb-4 fs-4">
                            <li class="pb-2"><b>3X RESOURCE POWER</b></li>
                            <li class="pb-2"><b>Unlimited</b> Disk Space</li>
                            <li class="pb-2"><b>Unlimited</b> Bandwidth</li>
                            <li class="pb-2"><b>Unlimited</b> POP3 Email</li>
                            <li class="pb-2"><b>Unlimited</b> Databases</li>
                            <li class="pb-2"><b>Unlimited</b> Addon Domains</li>
                            <li class="pb-2"><b>Magic Auto</b> Backup & Restore</li>
                            <li class="pb-2"><b>Domain Gratis</b> Selamanya</li>
                            <li class="pb-2"><b>Unlimited SSL</b> Gratis Selamanya</li>
                            <li class="pb-2"><b>Private</b> Name Server</li>
                            <li class="pb-2"><b>Prioritas</b> Layanan Support</li>
                            <li class="pb-2"><b>SpamExpert</b> Pro Mail Protection</li>
                        </ul>
                        <button type="button" class="btn btn-outline-secondary font-bold mt-2 btn-border-bold">Pilih Sekarang</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-5">
            <div class="p-0 text-center">
                <div class="row mb-5">
                    <div class="col-12">
                        <h3 class="font-light"><b>Powerful dengan Limit PHP yang Lebih Besar</b></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-deck mb-3 mr-3 ml-3 text-center">
                            <div class="card mb-4 ml-0 mr-0 box-shadow">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <span class="fas fa-check-circle bg-icon-custom float-left"></span>
                                        max execution time 300s
                                    </li>
                                    <li class="list-group-item bg-light">
                                        <span class="fas fa-check-circle bg-icon-custom float-left"></span>
                                        max execution time 300s
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fas fa-check-circle bg-icon-custom float-left"></span>
                                        php memory limit 1024 MB
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-deck mb-3 mr-3 ml-3 text-center">
                            <div class="card mb-4 ml-0 mr-0 box-shadow">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <span class="fas fa-check-circle bg-icon-custom float-left"></span>
                                        post max size 128 MB
                                    </li>
                                    <li class="list-group-item bg-light">
                                        <span class="fas fa-check-circle bg-icon-custom float-left"></span>
                                        upload max filesize 128 MB
                                    </li>
                                    <li class="list-group-item">
                                        <span class="fas fa-check-circle bg-icon-custom float-left"></span>
                                        max input vars 2500
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <span class="small-separator"></span>
        <section class="pt-5">
            <div class="p-0 text-center">
                <div class="row mb-5">
                    <div class="col-12">
                        <h3 class="font-light"><b>Semua Paket Hosting Sudah Termasuk</b></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 pb-5">
                        <img class="p-3" src="{{ asset('assets/svg/icon PHP Hosting_PHP Semua Versi.svg') }}" alt="Generic placeholder image" width="100" height="100">
                        <h5 class="font-bold pt-3">PHP Semua Versi</h5>
                        <p>Pilih mulai dari versi 5.3 s/d PHP. Ubah sesuka Anda!</p>
                    </div>
                    <div class="col-lg-4 pb-5">
                        <img class="p-3" src="{{ asset('assets/svg/icon PHP Hosting_My SQL.svg') }}" alt="Generic placeholder image" width="100" height="100">
                        <h5 class="font-bold pt-3">MySQL Versi 5.6</h5>
                        <p>Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
                    </div>
                    <div class="col-lg-4 pb-5">
                        <img class="p-3" src="{{ asset('assets/svg/icon PHP Hosting_CPanel.svg') }}" alt="Generic placeholder image" width="100" height="100">
                        <h5 class="font-bold pt-3">Panel Hosting cPanel</h5>
                        <p>Kelola website dengan panel canggih yang familiar di hati Anda.</p>
                    </div>
                    <div class="col-lg-4 pb-5">
                        <img class="p-3" src="{{ asset('assets/svg/icon PHP Hosting_garansi uptime.svg') }}" alt="Generic placeholder image" width="100" height="100">
                        <h5 class="font-bold pt-3">Garansi Uptime 99.9%</h5>
                        <p>Data center yang mendukung kelangsungan website Anda 24/7.</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="p-3" src="{{ asset('assets/svg/icon PHP Hosting_InnoDB.svg') }}" alt="Generic placeholder image" width="100" height="100">
                        <h5 class="font-bold pt-3">Database InnoDB Unlimited</h5>
                        <p>Jumlah dan ukuran database yang tumbuh sesuai dengan kebutuhan Anda.</p>
                    </div>
                    <div class="col-lg-4 pb-5">
                        <img class="p-3" src="{{ asset('assets/svg/icon PHP Hosting_My SQL remote.svg') }}" alt="Generic placeholder image" width="100" height="100">
                        <h5 class="font-bold pt-3">Wildcard Remote MySQL</h5>
                        <p>Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
                    </div>
                </div>
            </div>
        </section>
        <span class="small-separator"></span>
        <section class="pt-5">
            <div style="padding: 0px;">
                <div class="row mb-5" style="text-align: center;">
                    <div class="col-12">
                        <h3 class="font-light"><b>Mendukung Penuh Framework Laravel</b></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12 pb-5">
                        <p class="font-regular mb-3">
                            Tak perlu menggunakan dedicated server ataupun VPS 
                            yang mahal. Layanan PHP hosting murah kami mendukung penuh 
                            framework favorit Anda   
                        </p>
                        <ul class="font-regular">
                            <li class="mb-2">Install Laravel <b>1 klik</b> dengan Softaculous Installer.</li>
                            <li class="mb-2">Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json,</b> dan <b>fileinfo.</b></li>
                            <li class="mb-2">Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda.</li>
                        </ul>
                        <p class="small font-regular mb-4">
                            Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis
                        </p>
                        <button class="btn btn-primary font-bold">Pilih Hosting Anda</button>
                    </div>
                    <div class="col-md-6 col-xs-12 pb-5">
                        <img src="{{ asset('assets/svg/illustration banner support laravel hosting.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <hr class="mt-0">
    <div class="container">
        <section class="pt-5">
            <div class="p-0">
                <div class="row mb-5 text-center">
                    <div class="col-12">
                        <h3 class="font-light"><b>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</b></h3>
                    </div>
                </div>
                <div class="row mb-5 center-text">
                    <div class="col-md-3 col-xs-12">
                        <ul class="no-bullets">
                            <li>IcePHP</li>
                            <li>apc</li>
                            <li>apcu</li>
                            <li>apm</li>
                            <li>ares</li>
                            <li>bcmath</li>
                            <li>bcompiler</li>
                            <li>big_int</li>
                            <li>bitset</li>
                            <li>bloomy</li>
                            <li>bz2_filter</li>
                            <li>clamav</li>
                            <li>coin_acceptor</li>
                            <li>crack</li>
                            <li>dba</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <ul class="no-bullets">
                            <li>http</li>
                            <li>huffman</li>
                            <li>idn</li>
                            <li>igbinary</li>
                            <li>imagick</li>
                            <li>imap</li>
                            <li>inclued</li>
                            <li>inotify</li>
                            <li>interbase</li>
                            <li>intl</li>
                            <li>ioncube_loader</li>
                            <li>incoube_loader_4</li>
                            <li>jsmin</li>
                            <li>json</li>
                            <li>ldap</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <ul class="no-bullets">
                            <li>nd_pdo_mysql</li>
                            <li>oauth</li>
                            <li>oci8</li>
                            <li>odbc</li>
                            <li>opcache</li>
                            <li>pdf</li>
                            <li>pdo</li>
                            <li>pdo_dblib</li>
                            <li>pdo_firebird</li>
                            <li>pdo_mysql</li>
                            <li>pdo_odbc</li>
                            <li>pdo_pgsql</li>
                            <li>pdo_sqlite</li>
                            <li>pgsql</li>
                            <li>phalcon</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <ul class="no-bullets">
                            <li>stats</li>
                            <li>stem</li>
                            <li>stomp</li>
                            <li>suhosin</li>
                            <li>sybase_ct</li>
                            <li>sysvmsg</li>
                            <li>sysvsem</li>
                            <li>sysvshm</li>
                            <li>tidy</li>
                            <li>timezonedb</li>
                            <li>trader</li>
                            <li>translit</li>
                            <li>uploadprogress</li>
                            <li>uri_template</li>
                            <li>uuid</li>
                        </ul>
                    </div>
                    <div class="col-12 desktop-only">
                        <button class="btn btn-outline-secondary btn-center font-bold mt-2 btn-border-bold">Selengkapnya</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <p class="display-4" style="font-size: 2rem;">
                            Linux Hosting yang Stabil dengan teknologi LVE  
                        </p>
                        <p>
                            SuperMicro Intel <span class="font-bold">Xeon 24-Cores</span> server dengan RAM 
                            <span class="font-bold">128 GB</span> dan teknologi 
                            <span class="font-bold">LVE CloudLinux</span> untuk stabilitas server Anda. 
                            Dilengkapi dengan <span class="font-bold">SSD</span> untuk 
                            kecepatan <span class="font-bold">MySQL</span> dan caching. 
                            Apache load balancer berbasis LiteSpeed Technologies, 
                            <span class="font-bold">CageFS</span> security, 
                            <span class="font-bold">Raid-10</span> protection dan auto backup untuk keamanan website PHP Anda.
                        </p>
                        <button class="btn btn-primary font-bold">Pilih Hosting Anda</button>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <img class="img-fluid" src="{{ asset('assets/images/Image support.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="bg-light">
        <div class="container">
            <div class="row pb-3 pt-3">
                <div class="col-md-9 col-xs-12 font-regular"><b>Bagikan jika Anda menyukai halaman ini.</b></div>
                <div class="col-md-3 col-xs-12">
                    <div class="row">
                        <div class="col-md-4 col-xs-4">
                            <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
                        </div>
                        <div class="col-md-4 col-xs-4">
                            <a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-custom-1">
        <div class="container">
            <div class="row pb-5 pt-5 center-text">
                <div class="col-md-9 col-xs-12 pb-3 pt-3">
                    <h2 class="font-regular text-light">
                        Perlu <span class="font-bold">BANTUAN?</span> Hubungi Kami : 
                        <span class="font-bold">0274-5305505</span>
                    </h2>
                </div>
                <div class="col-md-3 col-xs-12 pb-3 pt-3 border-left">
                    <button class="btn btn-outline-light font-bold btn-border-bold pl-4 pr-4">
                    <span class="zmdi zmdi-comments mr-4"></span> Live Chat
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection