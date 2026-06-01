<!DOCTYPE html>
<html lang="en">

<head>

    @include('meta')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.3">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.3">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="#aboutus" class="nk-menu-link">
                                        <span class="nk-menu-text ms-3">เกี่ยวกับเรา</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="#service" class="nk-menu-link">
                                        <span class="nk-menu-text ms-3">การบริการ</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="#segway" class="nk-menu-link">
                                        <span class="nk-menu-text ms-3">แนะนำ</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="#product" class="nk-menu-link">
                                        <span class="nk-menu-text ms-3">ข้อมูลผลิตภัณฑ์</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="#contact" class="nk-menu-link">
                                        <span class="nk-menu-text ms-3">ติดต่อเรา</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-wrap">
                <div class="container nk-header nk-header-fixed nk-header-custom" style="transform: translate(-50%); left: 50%;">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-img" src="{{ asset('image/logo.png') }}" alt="logo">
                                </a>
                            </div>
                            <div class="nk-header-tools">
                                <div class="nk-menu-trigger d-lg-none ms-n1">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                                        data-target="sidebarMenu"><em class="icon ni ni-menu"></em>
                                    </a>
                                </div>
                                <div class="nk-header-news d-none d-lg-flex">
                                    <div class="nk-news-list mx-2">
                                        <a class="nk-news-item" href="#aboutus">
                                            เกี่ยวกับเรา
                                        </a>
                                    </div>
                                    <div class="nk-news-list mx-2">
                                        <a class="nk-news-item" href="#service">
                                            การบริการ
                                        </a>
                                    </div>
                                    <div class="nk-news-list mx-2">
                                        <a class="nk-news-item" href="#segway">
                                            แนะนำ
                                        </a>
                                    </div>
                                    <div class="nk-news-list mx-2">
                                        <a class="nk-news-item" href="#product">
                                            ข้อมูลผลิตภัณฑ์
                                        </a>
                                    </div>
                                    <div class="nk-news-list mx-2">
                                        <a class="nk-news-item" href="#contact">
                                            ติดต่อเรา
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="header flex-align-center">
                    <div class="container flex-justify-center">
                        <img src="{{ asset('image/logo-header.png') }}" alt="" class="w-70">
                    </div>
                </div>

                <div class="container slide-logo">
                    <div class="slider">
                        <div class="slide-track">
                            <div class="slide">
                                <img src="{{ asset('image/logo-ruijie.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-tp-link.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-lenovo.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-schneider.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-jabra.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-fanvil.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-asus.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-hikvision.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-ruijie.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-tp-link.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-lenovo.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-schneider.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-jabra.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-fanvil.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-asus.png') }}" height="50px" alt="">
                                <img src="{{ asset('image/logo-hikvision.png') }}" height="50px" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="aboutus mt-5" id="aboutus">
                    <div class="row">
                        <div class="col-lg-3 p-0 flex-align-center" style="position: relative">
                            <img src="{{ asset('image/about-me.png') }}" alt="" class="about-img">
                        </div>
                        <div class="col-lg-8 mt-3 mt-lg-0">
                            <div class="container">
                                <div class="row mb-3 mb-lg-0">
                                    <h2 class="text-topic-56">เกี่ยวกับเรา</h2>
                                </div>
                                <div class="row">
                                    <div class="col ms-3" style="border-left:1px solid #99999940">
                                        <b class="text-red-cus">WORK</b><b class="text-blue-cus">TRUSS</b> เป็นผู้ให้บริการด้านโครงสร้างพื้นฐานระบบเทคโนโลยีสารสนเทศ (IT Infrastructure) 
                                        ระบบเครือข่าย (Network Systems) ระบบไฟฟ้าและพลังงาน (Power Systems) รวมถึงงาน
                                        บริการด้านเทคนิค สำหรับองค์กรภาคเอกชนและหน่วยงานภาครัฐ
                                        <br>
                                        <br>
                                        บริษัทให้บริการครอบคลุมตั้งแต่งานสำรวจ ออกแบบ วางระบบ ติดตั้ง ทดสอบ บำรุงรักษา และดูแลการดำเนินงานของระบบต่างๆ อาทิ ระบบเครือข่ายองค์กร (Enterprise Network) ระบบ WiFi ระบบกล้องวงจรปิด (CCTV) ระบบสำรองไฟฟ้า UPS และแบตเตอรี่ ระบบปรับอากาศสำหรับห้องอุปกรณ์ 
                                        (Precision Air Conditioning) ระบบห้องประชุม และโครงสร้างพื้นฐานด้านเทคนิคที่เกี่ยวข้อง
                                        <br>
                                        <br>
                                        Worktruss ให้ความสำคัญกับคุณภาพของงานติดตั้ง ความเรียบร้อย ความสวยงาม และมาตรฐานในการดำเนินงานในทุกขั้นตอน โดยมีทีมงานที่มีประสบการณ์จริงในการปฏิบัติงานหน้างาน สามารถควบคุมคุณภาพ ประสานงาน และดูแลการดำเนินงานให้เป็นไปตามแผนงานและมาตรฐานที่กำหนด
                                        <br>
                                        <br>
                                        ด้วยแนวทางการทำงานที่เน้นความรับผิดชอบ และการดูแลหลังส่งมอบ เรามุ่งมั่นในการส่งมอบระบบโครงสร้าง พื้นฐานที่มีความเสถียร เชื่อถือได้ และรองรับการใช้งานขององค์กรได้อย่างต่อเนื่องและมีประสิทธิภาพ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" id="service">
                    <div class="row mt-3 g-3">
                        <div class="col-lg-4 flex-align-center">
                            <img class="icon-40 me-2" src="{{ asset('image/icon-network-1.png') }}" alt="">
                            <span class="lh-1">ระบบเครือข่ายองค์กร <br> (Enterprise Network)</span>
                        </div>
                        <div class="col-lg-4 flex-align-center">
                            <img class="icon-40 me-2" src="{{ asset('image/icon-wifi-1.png') }}" alt="">
                            <span class="lh-1">ระบบ WiFi</span>
                        </div>
                        <div class="col-lg-4 flex-align-center">
                            <img class="icon-40 me-2" src="{{ asset('image/icon-cctv-1.png') }}" alt="">
                            <span class="lh-1">ระบบกล้องวงจรปิด (CCTV)</span>
                        </div>
                        <div class="col-lg-4 flex-align-center">
                            <img class="icon-40 me-2" src="{{ asset('image/icon-battery-1.png') }}" alt="">
                            <span class="lh-1">ระบบสำรองไฟฟ้า UPS และแบตเตอรี่</span>
                        </div>
                        <div class="col-lg-4 flex-align-center">
                            <img class="icon-40 me-2" src="{{ asset('image/icon-condition-1.png') }}" alt="">
                            <span class="lh-1">ระบบปรับอากาศสำหรับห้องอุปกรณ์ <br> (Precision Air Conditioning) </span>
                        </div>
                        <div class="col-lg-4 flex-align-center">
                            <img class="icon-40 me-2" src="{{ asset('image/icon-room-1.png') }}" alt="">
                            <span class="lh-1">ระบบห้องประชุม และโครงสร้างพื้นฐาน <br> ด้านเทคนิคที่เกี่ยวข้อง</span>
                        </div>
                    </div>
                </div>

                <div class="service-img mt-5">
                    <div class="d-flex justify-content-center mt-3 d-none d-md-flex"">
                        <button class="btn btn-round btn-outline-red-cus m-1 active" id="btn-service0" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0">IT / CCTV / Network</button>
                        <button class="btn btn-round btn-outline-red-cus m-1" id="btn-service1" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">Power Systems</button>
                        <button class="btn btn-round btn-outline-red-cus m-1" id="btn-service2" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">AV & Conference Systems</button>
                    </div>
                    <div class="d-flex justify-content-center mt-3 d-md-none">
                        <button class="btn btn-round btn-outline-red-cus m-1 active" id="btn-mb-service0" data-bs-target="#carouselExampleIndicators-mb" data-bs-slide-to="0">IT / CCTV / Network</button>
                        <button class="btn btn-round btn-outline-red-cus m-1" id="btn-mb-service1" data-bs-target="#carouselExampleIndicators-mb" data-bs-slide-to="1">Power Systems</button>
                        <button class="btn btn-round btn-outline-red-cus m-1" id="btn-mb-service2" data-bs-target="#carouselExampleIndicators-mb" data-bs-slide-to="2">AV & Conference Systems</button>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide d-none d-md-block">
                        <div class="carousel-indicators" style="bottom: -50px">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="container carousel-inner my-5">
                            <div class="carousel-item active">
                                <img src="{{ asset('image/service-img-it.png') }}" class="d-block" style="height: 330px; object-fit: contain;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/service-img-power.png') }}" class="d-block" style="height: 330px; object-fit: contain;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/service-img-conference.png') }}" class="d-block" style="height: 330px; object-fit: contain;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div id="carouselExampleIndicators-mb" class="carousel slide d-block d-md-none">
                        <div class="carousel-indicators mb" style="bottom: -50px">
                            <button type="button" data-bs-target="#carouselExampleIndicators-mb" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators-mb" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators-mb" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="container carousel-inner my-5">
                            <div class="carousel-item active">
                                <img src="{{ asset('image/service-img-it-mb.png') }}" class="d-block w-100" style="height: 330px; object-fit: contain;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/service-img-power-mb.png') }}" class="d-block w-100" style="height: 330px; object-fit: contain;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('image/service-img-conference-mb.png') }}" class="d-block w-100" style="height: 330px; object-fit: contain;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-mb" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-mb" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="container service slider">
                    <div class="slide-track">
                        <div class="slide">
                            <div class="box">
                                <span>Network & Connectivity</span>
                                <ul>
                                    <li>Enterprise WiFi</li>
                                    <li>Switching & Routing</li>
                                    <li>Internet Infrastructure</li>
                                </ul>
                            </div>
                            <div class="box">
                                <span>Security Systems</span>
                                <ul>
                                    <li>CCTV Systems</li>
                                    <li>Monitoring Systems</li>
                                    <li>Access Control</li>
                                </ul>
                            </div>
                            <div class="box">
                                <span>Power Systems</span>
                                <ul>
                                    <li>UPS Systems</li>
                                    <li>Battery Systems</li>
                                    <li>Backup Power Solutions</li>
                                </ul>
                            </div>
                            <div class="box">
                                <span>Cooling Systems</span>
                                <ul>
                                    <li>Precision Air Conditioning</li>
                                    <li>Technical Room Cooling</li>
                                </ul>
                            </div>
                            <div class="box">
                                <span>AV & Conference Systems</span>
                                <ul>
                                    <li>Conference Room Systems</li>
                                    <li>Audio Visual Systems</li>
                                    <li>Meeting Room Solutions</li>
                                </ul>
                            </div>
                            <div class="box">
                                <span>Network & Connectivity</span>
                                <ul>
                                    <li>Enterprise WiFi</li>
                                    <li>Switching & Routing</li>
                                    <li>Internet Infrastructure</li>
                                </ul>
                            </div>
                            <div class="box">
                                <span>Security Systems</span>
                                <ul>
                                    <li>CCTV Systems</li>
                                    <li>Monitoring Systems</li>
                                    <li>Access Control</li>
                                </ul>
                            </div>
                            <div class="box">
                                <span>Power Systems</span>
                                <ul>
                                    <li>UPS Systems</li>
                                    <li>Battery Systems</li>
                                    <li>Backup Power Solutions</li>
                                </ul>
                            </div>
                            <div class="box">
                                <span>Cooling Systems</span>
                                <ul>
                                    <li>Precision Air Conditioning</li>
                                    <li>Technical Room Cooling</li>
                                </ul>
                            </div>
                            <div class="box">
                                <span>AV & Conference Systems</span>
                                <ul>
                                    <li>Conference Room Systems</li>
                                    <li>Audio Visual Systems</li>
                                    <li>Meeting Room Solutions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="solutions text-center mt-5" id="segway">
                    <h2 class="text-topic-56">ADDITIONAL SOLUTIONS</h2>
                    <span class="text-detail" style="line-height: normal">
                        Specialized Mobility Solutions for Security & Patrol Operations 
                        <br>
                        <span class="text-thai">โซลูชันเพื่อเพิ่มความคล่องตัวสำหรับงานรักษาความปลอดภัยและการปฏิบัติงานภาคสนาม</span>
                    </span> 
                    <br>
                    <img src="{{ asset('image/solution.png') }}" alt="" class="container d-none d-md-block">
                    <img src="{{ asset('image/solution-mb.png') }}" alt="" class="container d-block d-md-none">
                </div>

                <div class="container info mt-5">
                    <div class="row" style="justify-content: center">
                        <div class="col-4 blog" style="background-color: #29548E">
                            <h4 class="text-topic-36 text-white">เสริมภาพลักษณ์<br class="d-none d-lg-block">องค์กรแบบมืออาชีพ</h4>
                            <span>บริการติดสติกเกอร์ตราสัญลักษณ์หน่วยงานบนรถ Segway Plus ช่วยสะท้อนเอกลักษณ์และความเป็นมืออาชีพ</span>
                        </div>
                        <div class="col-7 blog bg-ma" style="background-color: #2C3134; padding-right: 36px;">
                            <h4 class="text-topic-36 text-white">มั่นใจทุกการใช้งานด้วย<br>ประกัน 5 ปีเต็ม</h4>
                            <span>หมดห่วงเรื่องจุกจิกด้วยแพ็กเกจ<br class="d-block d-md-none"> บริการบำรุงรักษา (MA) <br> ดูแลเครื่องให้พร้อมใช้งาน<br class="d-block d-md-none">ยาวนานถึง 5 ปี</span>
                        </div>
                    </div>
                    <div class="row" style="justify-content: center">
                        <div class="col-7 blog bg-onsite text-end text-black mb">
                            <h4 class="text-topic-36 text-black">บริการ On-site<br> ด่วนภายใน <span class="text-red-cus">4</span> ชั่วโมง</h4>
                            <span>สะดวกสบายไม่ต้องขนย้ายเครื่องเอง<br class="d-block d-md-none"> ด้วยทีมวิศวกร<br class="d-none d-lg-block">ผู้เชี่ยวชาญที่พร้อมเข้า<br class="d-block d-md-none">ตรวจเช็กและแก้ไขปัญหาให้ถึงหน้างาน</span>
                        </div>
                        <div class="col-4 blog mb" style="background-color: #D53A33">
                            <h4 class="text-topic-36 text-white">ครอบคลุมทุกพื้นที่ด้วย<br class="d-none d-lg-block">บริการ NBD</h4>
                            <span>ดูแลถึงที่ทุกพื้นที่ จัดส่งทีมช่างเข้าซ่อมบำรุงภายในวันทำการถัดไป (Next Business Day) <br class="d-block d-md-none">พร้อมนัดหมายล่วงหน้า</span>
                        </div>
                    </div>
                </div>

                <div class="product-card text-center pb-3 mt-5" id="product">
                    <h2 class="text-topic-56">
                        Mobility Solutions
                    </h2>
                    <span class="text-detail">สำหรับงานปฏิบัติการ</span>
                    <div class="container flex-justify-center text-start">
                        <div class="space-card">
                            <div class="card">
                                <a href="{{ asset('image/off-road-d1.png') }}" class="glightbox1" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/off-road.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">Off-Road ElectricSelf-Balancing <br> (20 inch)</span>
                                </a>
                            </div>
                            <div class="card d-none">
                                <a href="{{ asset('image/off-road-d2.png') }}" class="glightbox1" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/off-road-d2.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">Off-Road ElectricSelf-Balancing <br> (20 inch)</span>
                                </a>
                            </div>
                            <div class="card d-none">
                                <a href="{{ asset('image/off-road-d3.png') }}" class="glightbox1" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/off-road-d3.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">Off-Road ElectricSelf-Balancing <br> (20 inch)</span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{ asset('image/city-road-d1.png') }}" class="glightbox2" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/city-road.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">City-Road Electric Self Balancing <br> (18 inch)</span>
                                </a>
                            </div>
                            <div class="card d-none">
                                <a href="{{ asset('image/city-road-d2.png') }}" class="glightbox2" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/city-road-d2.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">City-Road Electric Self Balancing <br> (18 inch)</span>
                                </a>
                            </div>
                            <div class="card d-none">
                                <a href="{{ asset('image/city-road-d3.png') }}" class="glightbox2" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/city-road-d3.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">City-Road Electric Self Balancing <br> (18 inch)</span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{ asset('image/patrol-p60-d1.png') }}" class="glightbox3" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/patrol-p60.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">Patrol Electric P60/P60+ <br> (20 inch)</span>
                                </a>
                            </div>
                            <div class="card d-none">
                                <a href="{{ asset('image/patrol-p60-d2.png') }}" class="glightbox3" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/patrol-p60-d2.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">Patrol Electric P60/P60+ <br> (20 inch)</span>
                                </a>
                            </div>
                            <div class="card d-none">
                                <a href="{{ asset('image/patrol-p60-d3.png') }}" class="glightbox3" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/patrol-p60-d3.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">Patrol Electric P60/P60+ <br> (20 inch)</span>
                                </a>
                            </div>
                            <div class="card">
                                <a href="{{ asset('image/patrol-s60-d1.png') }}" class="glightbox4" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/patrol-s60.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">Patrol Electric S60/S60+ <br> (18 inch)</span>
                                </a>
                            </div>
                            <div class="card d-none">
                                <a href="{{ asset('image/patrol-s60-d2.png') }}" class="glightbox4" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/patrol-s60-d2.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">Patrol Electric S60/S60+ <br> (18 inch)</span>
                                </a>
                            </div>
                            <div class="card d-none">
                                <a href="{{ asset('image/patrol-s60-d3.png') }}" class="glightbox4" data-glightbox="width: 700; height: auto;">
                                    <img src="{{ asset('image/patrol-s60-d3.png') }}" alt="" height="100%" style="object-fit: cover">
                                    <span class="mt-3">Patrol Electric S60/S60+ <br> (18 inch)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="multi-area text-center mt-5 py-5">
                    <h2 class="text-topic-56" onclick="test()">
                        รองรับการปฏิบัติงานในหลากหลายพื้นที่
                    </h2>
                    <span class="text-detail">เพิ่มความสะดวก รวดเร็ว และประสิทธิภาพในการดูแลพื้นที่</span>
                    <div class="container justify-content-center">
                        <div class="row mt-3">
                        <div class="col-4">
                            <img src="{{ asset('image/building.png') }}" alt="" class="animate-up">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('image/airport.png') }}" alt="" class="animate-up">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('image/road.png') }}" alt="" class="animate-up">
                        </div></div>
                    </div>
                </div>

                <div class="container contact mt-5" id="contact">
                    <div class="row">
                        <div class="col-lg-5 px-3 px-md-0">
                            <h4 class="text-blue-cus">ติดต่อเรา</h4>
                            <span>สำหรับงานติดตั้ง วางระบบ และดูแลโครงสร้างพื้นฐานด้าน<br class="d-none d-lg-block"> IT Infrastructure & Power Systems</span>
                            <br>
                            <br>
                            <img src="{{ asset('image/icon-phone.png') }}" alt="">
                            <span>094-4499944</span>
                            <br>
                            <img src="{{ asset('image/icon-email.png') }}" alt="">
                            <span>worktruss.system@gmail.com</span>
                        </div>
                        <div class="col-lg-7 text-end mt-lg-0 mt-1">
                            <img src="{{ asset('image/iPad Pro 12.9 - Space Gray - Landscape.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="nk-footer mt-5 text-white">
                    <div class="container-fluid p-5">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> 
                                <img src="{{ asset('image/logo-white.png') }}" alt="">
                            </div>
                            <div class="nk-footer-links mt-3 mt-lg-0" style="line-height: 35px">
                                <img src="{{ asset('image/icon-phone-white.png') }}" alt="">
                                <span>094-4499944</span>
                                <br>
                                <img src="{{ asset('image/icon-email-white.png') }}" alt="">
                                <span>worktruss.system@gmail.com</span>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="menu-footer">
                                    <a class="me-3" href="#aboutus">เกี่ยวกับเรา</a>
                                    <a class="me-3" href="#service">การบริการ</a>
                                    {{-- <a class="me-3" href="#segway">แนะนำ</a>
                                    <a class="me-3" href="#product">ข้อมูลผลิตภัณฑ์</a> --}}
                                    <a class="me-3" href="#contact">ติดต่อเรา</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3 mt-lg-0">
                                <div class="nk-footer-copyright text-lg-end"> 
                                    &copy; 2026 Lift Media. All rights reserved
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bundle.js?ver=3.2.3"></script>
    <script src="./assets/js/scripts.js?ver=3.2.3"></script>
    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
