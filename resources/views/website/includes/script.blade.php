<script src="{{asset('assets')}}/website/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/website/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/website/js/slick.min.js"></script>
<script src="{{asset('assets')}}/website/js/nouislider.min.js"></script>
<script src="{{asset('assets')}}/website/js/jquery.zoom.min.js"></script>
<script src="{{asset('assets')}}/website/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>
