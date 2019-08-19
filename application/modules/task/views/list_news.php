<!-- <div class="content-wrapper"> -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Responsive Hover Table</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>Article title</th>
              <th>Category</th>
              <th>Postdate</th>
              <th>Author</th>
              <!-- <th>Status</th> -->
              <th>Action</th>
            </tr>

            <?php foreach ($query->result() as $row) : ?>
            <tr>
              <td><?php echo $row->article_title; ?></td>
              <td><?php echo $row->category; ?></td>
              <td><?php echo $row->postdate; ?></td>
              <td><?php echo $row->author; ?></td>
              <!-- <td><span class="label label-success">Approved</span></td> -->
              <td>
              <a href="<?php echo base_url('task/edit/'.$row->article_id); ?>">Edit <i class="fa fa-edit"></i></a>
              <a href="<?php echo base_url('task/delete/'.$row->article_id); ?>">Delete <i class="fa fa-trash-o"></i></a>
            </td>
           
            </tr>
             <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col-xs-12 -->
  </div>
  <!-- /.row -->
<!-- </div> -->
<!-- /.content-wrapper -->

 