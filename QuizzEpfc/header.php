<?php
if (!$userManager::isLogged() && (!isset($_GET['action']))) {
    include_once('library/login/auth.php');
    /* shows auth error message */
    echo!empty($_SESSION['authMessage']) ? $_SESSION['authMessage'] : '';
    unset($_SESSION['authMessage']);
}
?>
<!-- Navigation -->
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(''); ?>">Quizz Epfc</a>
        </div>
        <!-- /.navbar-header -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php?page=quizz&cat=html-css">Html-Css</a></li>
                <li><a href="index.php?page=quizz&cat=javascript">Js</a></li>
                <li><a href="index.php?page=quizz&cat=php">Php</a></li>
                <li><a href="index.php?page=quizz&cat=mysql">Mysql</a></li>
                <?php
                if ($userManager::isLogged()) {
                    ?>
                    <li><a href="index.php?page=zone-admin">Zone Admin</a></li>
                    <li><a href="index.php?page=login&action=logout">Se déconnecter</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- /.navbar -->