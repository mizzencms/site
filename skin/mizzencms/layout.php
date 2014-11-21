<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->config->siteName; ?>: <?= $this->meta->title; ?></title>
    <meta name="description" content="<?= $this->meta->description; ?>" />
    <meta name="keywords" content="<?= $this->meta->keywords; ?>">
    <meta property="og:title" content="<?= $this->config->siteName; ?>: <?= $this->meta->title; ?>">
    <link href="/skin/mizzencms/css/bootstrap.min.css" rel="stylesheet"  type="text/css"/>
    <link href="/skin/mizzencms/css/main.css" rel="stylesheet"  type="text/css"/>
    <link href="/skin/mizzencms/fonts/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/skin/mizzencms/fonts/lato/stylesheet.css" rel="stylesheet"  type="text/css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="/skin/mizzencms/images/white-type-navy-bg.jpg" alt="MizzenCMS"/>
                </a>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-top">
                <?= $this->navigation->render(); ?>
            </div>
        </div>
    </nav>
    <div class="bg-wrapper-nav-space"></div>
<?php
    if ($this->getPage()->getPath() === 'index') {
        echo '<div class="bg-wrapper-top">';
            echo $this->renderContent('index-top');
        echo '</div>';
        echo '<div class="bg-wrapper-middle">';
            echo '<div class="container">';
                echo $this->partial('/index', 'index.php', false);
            echo '</div>';
        echo '</div>';
    } else {
        echo '<div class="bg-wrapper-middle">';
            echo '<div class="container">';
                echo $this->content;
            echo '</div>';
        echo '</div>';
    }
?>
    <div class="bg-wrapper-footer">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Please use 
                            <a href="https://github.com/mizzenlite/core/issues">
                            GitHub Issues
                            </a> to report bugs and request new features.
                        </p>
                        <p>
                            Copyright &copy; MizzenCMS <?= date('Y'); ?> | 
                            Design by 
                            <a href="http://madala.eu">Madala.eu</a> | 
                            Development sponsored by 
                            <a href="https://plainmotif.co.uk">
                            Plainmotif Limited
                            </a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/skin/shared/js/jquery-2.1.1.min.js"></script>
    <script src="/skin/mizzencms/js/bootstrap.min.js"></script>
    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
      _paq.push(["setCookieDomain", "*.mizzencms.net"]);
      _paq.push(["setDomains", ["*.mizzencms.net","*.getmizzen.com","*.getmizzen.net","*.mizzencms.com"]]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u=(("https:" == document.location.protocol) ? "https" : "http") + "://plainmotif.co.uk/stats/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 4]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
        g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="http://plainmotif.co.uk/stats/piwik.php?idsite=4" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->
    <script type="text/javascript">var RumID = 5395;</script><script type="text/javascript" async src="https://ec01c392919812c4f818-79afe539d963810002081e6e2a51e67e.ssl.cf2.rackcdn.com/Embed.js"></script>
</body>
</html>
