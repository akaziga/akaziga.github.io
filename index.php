<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>akaziga - paulo gonçalves - web developer</title>
        <meta name="description" content="akaziga, paulo gonçalves, web developer, personal site">
        <meta name="keywords" content="akaziga, paulo gonçalves, web developer, frontend developer, freelancer">
        <meta name="author" content="Paulo Gonçalves - akaziga"/>
        <meta name="contact" content="akaziga@akaziga.com">
        <!--facebook-->
        <!--        <meta property="og:title" content="akaziga"/>
                <meta property="og:type" content="website"/>
                <meta property="og:url" content="http://akaziga.com/"/>
                <meta property="og:image" content="http://akaziga.com/akaziga/images/akaziga-fb-preview.png"/>
                <meta property="og:site_name" content="akaziga"/>
                <meta property="fb:admins" content="1842054652"/>-->

        <!-- google -->
        <meta name="google-site-verification" content="PlU5TbHmJZaV8vs8Z0MGlxmrq6s1_2BRpx0GWmJ0bkg" />

        <!-- styles-->
        <link rel="stylesheet" media="screen" href="akaziga/app/css/reset.css">
        <link rel="stylesheet" media="screen" href="akaziga/app/css/app.css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- /styles -->
    </head>
    <body>
        <h1>akaziga - paulo gonçalves - web developer</h1>

        <!-- loader -->
        <div class="loader">
            <div class="spinner"></div>
        </div>
        <!-- /loader -->

        <!-- progress bar top -->
        <div class="progess-top">
            <div class="progress-bar-top"></div>
        </div>
        <!-- /progress bar top -->

        <!-- progress bar bottom -->
        <div class="progess-bottom">
            <div class="progress-bar-bottom"></div>
        </div>
        <!-- /progress bar bottom -->

        <div id="weather"></div>

        <!-- particles.js container -->
        <div id="particles-js"></div>
        <!-- /particles.js container -->

        <!-- center-container -->
        <section class="center-container">
            <h2>Hello World!</h2>
            <h2>I´m Paulo Gonçalves</h2>
            <p>Web developer and UX/UI from Lisbon, Portugal</p>
            <p class="social">
                <a href="https://www.linkedin.com/in/akaziga" target="_blank"><img src="akaziga/images/linkedin.svg" alt="linkedin logo"></a>
                <!--<a href="https://twitter.com/akaziga" target="_blank"><img src="akaziga/images/twitter.svg" alt="twitter logo"></a>-->
                <a href="https://github.com/akaziga" target="_blank"><img src="akaziga/images/github.svg" alt="github logo"></a>
            </p>
            <p class="copyright">Copyright &copy; 2016 - <a href="http://akaziga.com">Akaziga - Paulo Gonçalves</a></p>
        </section>
        <!-- /center-container -->

        <!-- scripts -->
        <script src="akaziga/libs/jquery.min.js"></script>
        <script src="akaziga/libs/particles.min.js"></script>
        <script src="akaziga/libs/particles-config.js"></script>
        <script src="akaziga/app/js/app.js"></script>
        <!-- /scripts -->

        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N75BHJ"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        '//www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-N75BHJ');</script>
        <!-- End Google Tag Manager -->

        <!-- Google Tag Analitics -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36536259-3']);
            _gaq.push(['_setDomainName', 'akaziga.com']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <!-- End Google Tag Analitics -->
    </body>
</html>
