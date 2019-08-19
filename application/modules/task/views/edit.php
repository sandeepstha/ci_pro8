<!-- <div class="content-wrapper"> -->
<div class="box box-info">
    <div class="box-header">
      <i class="fa fa-plus"></i>

      <h3 class="box-title">Edit news</h3>
      <!-- tools box -->
      <div class="pull-right box-tools">
        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
      <!-- /. tools -->
    </div>

    <div class="box-body">
    	<!-- <?php print_r($post); ?> -->
      <?php echo form_open('task/update_news'); ?>
      	<div class="form-group">
            <!-- <label for="article_id">Title</label> -->
            <input type="hidden" class="form-control" name="id" placeholder="Title" required="" value="<?php echo $post['article_id']?>" /><br/>
        </div>
        <div class="form-group">
            <!-- <label for="article_title">Title</label> -->
            <input type="input" class="form-control" name="article_title" placeholder="Title" required="" value="<?php echo $post['article_title']?>" /><br/>
        </div>
        <div class="form-group">
            <!-- <label for="category">Category</label> -->
            <input type="input" class="form-control" name="category" placeholder="Category" required="" value="<?php echo $post['category']?>"/><br/>
        </div>
        <div class="form-group">
            <!-- <label for="author">Autor</label> -->
            <input type="input" class="form-control" name="author" placeholder="Autor" required="" value="<?php echo $post['author']?>"/><br/>
        </div>
        <div class="form-group">
            <!-- <label for="postdate">Date</label> -->
            <input type="date" class="form-control" name="postdate" placeholder="Date" required="" value="<?php echo $post['postdate']?>"/><br/>
        </div>

        <div>
            <!-- <label for="content">Content</label> -->
            <textarea name="content"  class="textarea" placeholder="content" required="" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $post['content']?></textarea><br/>
        </div>

        <div class="form-group">
            <input class="pull-right btn btn-default" type="submit" name="submit" value="Update news"/>
        </div>

      </form>
    </div>
  </div>
<!-- </div> -->