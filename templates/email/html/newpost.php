<?= $message ?><br>
<?= "投稿番号 : " . $article->id ?><br>
<?= "title : " . $article->title ?><br>
<?= "body : " . $this->Html->link($article->title, ['controller' => 'Articles', 'action' => 'view', $article->slug, '_full' => true]) . "<br/>" ?><br>