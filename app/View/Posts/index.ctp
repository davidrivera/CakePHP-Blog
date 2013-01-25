<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<table class='table'>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Edit</th>
        <th>Created</th>
        <th>Delete</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php 
                echo $this->HTML->link(
                    "Edit",
                    array('controller' => 'posts','action' => 'edit', $post['Post']['id'])                    
                );
            ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
<?php 
    echo $this->HTML->link(
        "Add",
        array('controller' => 'posts','action' => 'add')
    );
?>
