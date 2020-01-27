<div style="margin-top:17%; margin-left: 17%" class="menu trans_500 h-75 w-75">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
        <div class="menu_close_container"><div class="menu_close"></div></div>

        <ul style="margin-top: -100px">
            <li class="menu_item"><a href="/">Anasayfa</a></li>
            <li style="height:50px" class="dropdown menu_item">
                <button class="dropbtn">HAKKIMDA</button>
                <div class="dropdown-content">
                    <a href="{{route('getCV')}}">Prof. Dr. Faruk Ayhan BAŞÇİFTÇİ</a>
                    <a href="{{route('getPublish')}}">Yayınlar</a>

                </div>
            </li>
            <li style="height:50px" class="dropdown menu_item">
                <button class="dropbtn">ORTODONTİ</button>
                <div  class="dropdown-content">
                    <a href="{{route('getOrtodonti')}}">Ortodonti nedir?</a>
                    <a href="{{route('getOrtAnimaller')}}">Ortodontik anomaliler</a>
                    <a href="{{route('getOrtErTedavi')}}">Erişkinlerde Ortodontik Tedavi</a>
                    <a href="{{route('getOrtSSS')}}">Sıkça Sorulan Sorular</a>

                </div>
            </li>
            <li class="menu_item"><a href="{{route('getGallery')}}">Galeri</a></li>
            <li class="menu_item"><a href="{{route('getContact')}}">İletişim</a></li>
        </ul>
    </div>
    <div class="menu_social">
        <ul>

            <li><a href="https://www.facebook.com/faruk.basciftci"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/ortodontistfarukbasciftci"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

        </ul>
    </div>
</div>
