<script src="{{ asset('plugins/jquery.cookieMessage.min.js') }}"></script>
<script type="text/javascript">
    $.cookieMessage({
        'mainMessage': '{{ trans('form.cookiesUsesWebPageMessage', [], \Session::get('locale')) }} <a href="{{ url('/cookies') }}">Cookie Policy</a>. ',
        'acceptButton': '{{ trans('form.accept', [], \Session::get('locale')) }}!',
        'fontSize': '15px',
        'backgroundColor': '#222',
    });
</script>
{{--<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>--}}

<div class="container">
    <p class="text-center">Copyright © 2020 {{ trans('form.allRightsReserved', [], \Session::get('locale')) }}</p>
</div>
