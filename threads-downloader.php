<?php
if (isset($_POST["url"])) {
$shut    = $_POST["url"];
$url = "https://api.threadstap.com/?url=$shut";

        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
        $final = curl_exec($ch); 
    }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Threads Video Downloader</title>
	<meta name="description" content="This free online tool allows users to quickly and easily download Slideshare PDF for free." />
    <link rel="shortcut icon" href="https://cdn.bhawanigarg.com/icon.png">
    <meta property="og:site_name" content="Threads Downloader" />
<meta property="og:title" content="Threads Downloader" />
<meta property="og:description" content="This free online tool allows users to quickly and easily download Threads.net Videos and Photos for free." />
<meta property="og:image" content="https://cdn.bhawanigarg.com/og-facebook.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<script type="text/javascript" src='https://platform-api.sharethis.com/js/sharethis.js#property=5d71f0ecab6f1000123c8034&product=inline-share-buttons' async='async'></script>

    <link href="https://cdn.bhawanigarg.com/styles.css" rel="stylesheet">

</head>

<body>

    <header class="pt-4 pb-4 pb-md-0">
        <nav class="navbar navbar-expand-lg">
            <div class="container-xxl g-codecyan">
                <a class="navbar-brand" href="/">
                    <h1 class="m-0 text-accent-codecyan fw-bold"><img src="https://cdn.bhawanigarg.com/icon.png" alt="profile image of Bhawani" />
</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto my-3 my-lg-0">
                        <li class="nav-item me-5">
                            <a class="nav-link active" aria-current="page" href="https://bhawanigarg.com/">Home</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="https://bhawanigarg.com/#about">About</a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link" href="https://bhawanigarg.com/#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://bhawanigarg.com/#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>


    <main class="main-codecyan">

                    <center>
                        <div class="col-md-6" id="dl">
                        <div class="text-center text-md-start">
                            <br>
                            <center>
                            <h1 class="display-2 fw-bold">Threads Downloader</h1></center>
                        </div>
                        <p class="mt-5 lh-lg">
                            <form method="post" action="threads-downloader.php#dl" target="_top">
<input name="url" type="text" placeholder="Enter Your Slideshare.net URL Here!" class="form-control" required>
<br>

<br>
<input class="btn btn-primary" type="submit" value="Search &rarr;">
</div>


<?php
if ($_POST) {
if (!empty($final))
    echo("<br><a class='btn btn-primary' href='$final' role='button' download>Download &rarr;</a>");
else
    echo "<br><h1 class='fw-bold text-danger'>Oops! Something went wrong!</h1>";
}
//}
?>
                            
</p>
<br>
<br>
<div class="sharethis-inline-share-buttons"></div><br>
</center>

    </main>

    <footer id="contact" class="bg-white py-5">
        <div class="container-xxl g-codecyan overflow-hidden py-5">
            <div class="row justify-content-between gx-0 gy-5">
                <div class="col-md-7">
                    <h5 class="display-4 fw-bold">Let's make something amazing together.</h5>
                    <h5 class="display-4 mt-5 fw-bold">Say hi on Insta <span
                            class="text-danger text-decoration-underline"><a target="_blank" class="text-reset"
                                href="https://www.instagram.com/thebhawanigarg/">@TheBhawaniGarg</a></span>
                    </h5>
                </div>
                <div class="col-md-3">
                    <h5 class="fs-2 fw-bold">Contact</h5>
                    <p class="mt-3 fs-5">Email: <a href="mailto:hi@bhawanigarg.com">hi@bhawanigarg.com</a></p>
                    <p class="mt-3 fs-5">WhatsApp: <a href="https://wa.me/message/6R2PR2BSSPIVJ1">+1 (740) 325-3622</a></p>
                    <p class="mt-3 fs-5">Call: <a href="#">+91-8249389882</a></p>
                    <ul class="navbar-nav gap-2 mt-5">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="https://bhawanigarg.com/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://bhawanigarg.com/#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://bhawanigarg.com/#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://bhawanigarg.com/#contact">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="border-top border-dark my-5 mx-auto" style="width: 80vw;"></div>
                <center><div class="col-md-6">Made with <i class="bi bi-heart-fill text-danger"></i> by <a
                            class="dev-codecyan" href="https://bhawanigarg.com" target="_blank">Bhawani Garg</a>.<br><p>Hosted on <a href="https://my.basezap.com/aff.php?aff=156">BaseZap</a> & <a href="https://bunny.net?ref=q6f841o393">BunnyCDN</a>. </div><br>&copy; 2010 - <?php echo date("Y"); ?></center>
                            
                </div>
            </div>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>
