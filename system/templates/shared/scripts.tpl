{*{literal}*}
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{$cdn}js/vendor/jquery-1.12.0.min.js"></script>
    {*<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>*}
    <script src="{$cdn}js/vendor/jquery.form.js"></script>
    <!-- bootstrap js -->
    <script src="{$cdn}js/bootstrap.min.js"></script>
    <!-- nivo slider js-->
    <script src="{$cdn}lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="{$cdn}lib/home.js" type="text/javascript"></script>
    <!-- owl.carousel js -->
    <script src="{$cdn}js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="{$cdn}js/jquery.meanmenu.js"></script>
    <!-- jquery-ui js -->
    <script src="{$cdn}js/jquery-ui.min.js"></script>
    {*<script type="text/javascript" src="https://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>*}
    <!-- elevateZoom js -->
    <script src="{$cdn}js/jquery.elevateZoom-3.0.8.min.js"></script>
    <!-- wow js -->
    <script src="{$cdn}js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="{$cdn}js/plugins.js"></script>

    {*Real time scripts*}
    <script src="{$cdn}lib/jquery.countdown-2.2.0/jquery.countdown.min.js"></script>

    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <!-- main js -->
    <script src="{$cdn}js/main.js"></script>

    <!--Start of Tawk.to Script-->
    {*<script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/56ba5a00a3b1daa206ece438/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>*}
    <!--End of Tawk.to Script-->

    {if $title eq 'Contact Us'}
    <!-- Google Map js -->
        {literal}
            <script>
                function initMap() {
                    var myLatLng = {lat: -1.301234, lng: 36.753701};

                    var map = new google.maps.Map(document.getElementById('contactCenter'), {
                        zoom: 18,
                        center: myLatLng
                    });

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        title: 'My Duka Dot Biz Call Center'
                    });
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqu67uZ1blIWAIwxvRS5NEnQFNksfz_wU&callback=initMap"></script>
        {/literal}

    {/if}
{*{/literal}*}