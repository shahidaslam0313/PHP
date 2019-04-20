<?php include('header.php'); ?>

<div class="container">
    <h2>Articals </h2>

    <a href="Insert_article" class="btn btn-primary">Add Article</a>

    <?php 
    if ($error = $this->session->flashdata('msg')) :
      $msg_class = $this->session->flashdata('msg_class')
      ?>

    <div class="<?= $msg_class?>"><?php echo $error; ?> </div>
    <?php endif; ?>
   
   
    <table class="table table-striped">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Artical Title</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
        <?php echo $this->pagination->create_links(); ?>
            <?php if (count($articals)) : ?>
           
            <?php foreach ($articals as $artical) : ?>


            <tr>
            <td><?= $artical->id; ?></td>
                <td><?= $artical->article_title; ?></td>
                <td><button hrf="#" class="btn btn-primary">Edit</td>
                <td>
                <?php
                    echo form_open('admin/DelArticle');
                    echo form_hidden('id', $artical->id);
                    $submit = array(
                        'type'  => 'submit',
                        'value' => 'Delete',
                       'class'  =>'btn btn-lg btn-danger btn-block text-uppercase'
                );
                echo form_submit($submit);
                  echo  form_close()
                ?>    
                
                
               
            </tr>
            <?php endforeach; ?>
            <?php else : ?>
            <tr>
                <td colspan="3">No Data Found</td>
            </tr>
        </tbody>
      
    </table>

    <?php endif; ?>
</div> 