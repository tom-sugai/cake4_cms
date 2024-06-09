<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->Html->charset() ?>
<?=$this->Html->meta('viewport',null,array('content'=>'width=device-width, initial-scale=1.0')); ?>
<title><?= $this->fetch('title') ?></title>
<!-- 外部ファイルとスクリプトファイルがここに入れます (詳しくは HTML ヘルパーを参照。) -->
<?= $this->Html->meta('icon') ?>
<?= $this->Html->css('base.css') ?>
<?= $this->Html->css('style.css') ?>
<?= $this->Html->css('article-top.css') ?>
<?= $this->Html->css('hbg-menu.css') ?>
<?= $this->Html->script('jquery-3.6.0.min.js') ?>
<?= $this->Html->script('hbg-menu.js') ?>
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>

    <!-- もしすべてのビューでメニューを表示したい場合、ここに入れます -->
    
    <header>
            <?= $this->element('headerbox'); ?>
    </header>
    <div>
        <?= "Login User : " . $useremail ?>
        <div class="top-menu">
            <?= $this->Html->link('Login','/users/login') ?>/  
            <?= $this->Html->link('Logout','/users/logout') ?>/
            <?= $this->Html->link('NewPost','/articles/add') ?>/ 
            <?= $this->Html->link('MyPage',['controller' => 'Users', 'action' => 'view', $userid]) ?>/
            <?= $this->Html->link('TopPage','/articles/top') ?><br> 
        </div>
    </div>

    <!-- ここがビューで表示されるようにしたい場所です -->
    <container>
            <?= $this->fetch('content') ?>
    </container>
    
    <!-- 表示される各ページにフッターを追加します -->
    <footer>
            <?= $this->element('footerbox'); ?>
    </footer>
    
    </body>
</html>