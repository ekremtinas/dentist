@extends('Layouts.App')
@section('title')
    <title>Prof. Dr. Faruk Ayhan BAŞÇİFTÇİ | Ortodonti Uzmanı, Konya Ortodonti</title>
    
@endsection
@section('content')
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                            </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Google Map -->


    <div   class="contact_map mt-5 mt-lg-0">
        <!-- Google Map -->
        <div class="map col-lg-8 offset-lg-2">
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <iframe
                       class="col-lg-12" height="70%"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyClt0MRBtvV4wrVr8REDHjV_4Nc2-BNU1o
      &q=Prof Dr. Faruk Ayhan Başçiftçi" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>


    <!-- Services -->

    <div style="margin-top: -200px" class="services">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">Araçlar</div>
                    <div class="section_subtitle"></div>
                </div>
            </div>
            <div class="row icon_boxes_row">

                <!-- Icon Box -->
                <div class="col-xl-4 col-lg-6">
                    <div class="icon_box">

                        <div class="row icon_box_text">
                           <dt class="col-lg-6 text-right col-6">Ziyaretçi Sayısı:</dt><dd class="col-sm-5 col-5"> <?php
                                $openfile = fopen ("hitcount.txt","r");


                                $value = fgets($openfile,1024);


                                fclose($openfile);





                                $writefile = fopen("hitcount.txt","w");


                                $value+=1;


                                fwrite($writefile, $value);


                                fclose($writefile);





                                echo $value;


                                ?></dd>
                            <dt class="col-lg-6 text-right col-6">IP Adresiniz:</dt><dd class="col-sm-5 col-5"><?php echo $_SERVER['REMOTE_ADDR']; ?></dd>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-lg-6">
                    <div class="icon_box">
                        <div >


                            <div class="col-8 offset-2 " style="font-family: Arial;background-color: transparent;border: 1px solid transparent;width: 300px;height: 200px;box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);overflow: hidden; -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px;"><div style="width: 300px;height: 200px;"><div><iframe id="widget-frame" src="http://www.meteovista.com.tr/Go/ExternalWidgetsNew/TwoDaysCityWithSearch?gid=3529981&amp;activityType=0&amp;titleColor=%23212121&amp;linkColor=%230160b2&amp;temperatureScale=Celsius&amp;defaultSettings=False" width="250" height="235" frameborder="0" scrolling="" style="border: none;" allowtransparency="true"></iframe></div></div></div>

                        </div>  </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-lg-6">
                    <div class="icon_box">
                        <div class="col-8 offset-2 " id="datepicker"></div>
                    </div>
                </div>



            </div>

        </div>
    </div>




    @endsection
@section('css')
    <link rel="stylesheet" type="text/css" href="/components/styles/contact.css">
    <link rel="stylesheet" type="text/css" href="/components/styles/contact_responsive.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    @endsection
@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="/components/js/contact.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                monthNames: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],
                dayNamesMin: [ "Pa", "Pt", "Sl", "Ça", "Pe", "Cu", "Ct" ],
                firstDay:1
            });
        } );
    </script>
    @endsection
