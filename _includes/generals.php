<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$app_url = "http://".$_SERVER['HTTP_HOST']."/".
    trim(str_replace(str_replace('\\', "/", $path), "", str_replace('\\', "/", dirname(__DIR__))), "/")."/";



function print_header($title) {
    global $app_url;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    <link href="<?php echo $app_url;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $app_url;?>css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo $app_url;?>js/jquery.min.js"></script>
    <script src="<?php echo $app_url;?>js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    Meet When?
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="#">Create an event</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container-fluid">
        <div class="hero text-center">
            <h2>Use Meetable to arrage meet-ups with your friends!</h2>
            <a class="btn btn-primary btn-lg">Create an event now!</a>
        </div>
    </main>
<?php
}
