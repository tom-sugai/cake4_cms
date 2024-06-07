<h1>Article list</h1>
<?= $this->Html->link('Add Article', ['action' => 'add']) ?>
<table>
    <tr>
        <th>id</th>
        <th>user</th>
        <th>title</th>
        <th>body</th>
        <th>comment</th>
        <th>created</th>
        <th>action</th>
    </tr>
    <?php foreach ($articles as $article ): ?>
        <tr>
            <td>
                <?= $article->id ?>
            </td>
            <td>
                <?= strtok(strtok($article->user->email,'@'),'.') ?>
            </td>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
            </td>
            <td>
                <!--<?= $article->body ?>-->
            </td>
            <td>
                <?php
                    if ($article->comments !== null){
                        echo count($article->comments);
                    } else {
                        echo "0";
                    }    
                 ?>
            </td>
            <td>
                <!--<?= $article->created->format(DATE_RFC850) ?>-->
                <?= $article->created->format('y/m/d') ?>
            </td>
            <td>
                <?= $this->Html->link('edit', ['action' => 'edit', $article->slug]) ?>
                <?= $this->Form->postLink(
                    'delete',
                    ['action' => 'delete', $article->slug],
                    ['confirm' => 'delete OK ?'])
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
</div>