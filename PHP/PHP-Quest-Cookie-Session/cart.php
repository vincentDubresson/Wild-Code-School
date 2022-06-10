<?php 

session_start();

if (empty($_SESSION['login']))
{
    header('Location: login.php');
} else {
    $login = $_SESSION['login'];
}

require 'inc/head.php';

?>

<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <?php foreach($_SESSION['article'] as $article)
        { ?>
            <p><?=$article?></p>
        <?php
        } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
