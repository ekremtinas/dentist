<header class="header" id="header">
    <div>
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo">
                                <a href="/"> <img width="150px" src="/components/images/logo1.jpg"></a>
                            </div>
                            <div class="ml-lg-5 btn-lg title">
                                <a style="color:#838383" href="/">  <b> Prof. Dr. Faruk Ayhan BAŞÇİFTÇİ<br><div class="ml-lg-5 pl-lg-3">Ortodonti Uzmanı</div></b>
                                </a> </div>
                            <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                <div class="header_top_nav">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a target="_blank" href="https://www.doktortakvimi.com/faruk-ayhan-basciftci/ortodonti-dis-hekimi/konya">Randevu Al</a></li>

                                    </ul>
                                </div>
                                <div class="header_top_phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+90 332 350 89 05</span><br>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+90 553 688 89 05</span>
                                </div>

                            </div>
                            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_nav" id="header_nav_pin">
            <div class="header_nav_inner">
                <div class="header_nav_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                    <nav class="main_nav">
                                        <ul class="d-flex flex-row align-items-center justify-content-start">
                                            <li style="margin-top:60px" class="active"><a href="/">Anasayfa</a></li>
                                            <div class="dropdown">
                                                <button class="dropbtn">HAKKIMDA</button>
                                                <div class="dropdown-content">
                                                    <a href="{{route('getCV')}}">Prof. Dr. Faruk Ayhan BAŞÇİFTÇİ</a>
                                                    <a href="{{route('getPublish')}}">Yayınlar</a>

                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <button class="dropbtn">ORTODONTİ</button>
                                                <div class="dropdown-content">
                                                    <a href="{{route('getOrtodonti')}}">Ortodonti nedir?</a>
                                                    <a href="{{route('getOrtAnimaller')}}">Ortodontik anomaliler</a>
                                                    <a href="{{route('getOrtErTedavi')}}">Erişkinlerde Ortodontik Tedavi</a>
                                                    <a href="{{route('getOrtSSS')}}">Sıkça Sorulan Sorular</a>

                                                </div>
                                            </div>
                                            <li style="margin-top:60px"><a href="{{route('getGallery')}}">Galeri</a></li>
                                            <li style="margin-top:60px"><a href="{{route('getContact')}}">İletişim</a></li>
                                        </ul>
                                    </nav>
                                    <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
                                        <form action="#" id="search_container_form" class="search_container_form">
                                            <input type="text" class="search_container_input" placeholder="Ara" required="required">
                                            <button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
