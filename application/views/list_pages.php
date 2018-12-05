<div class="row clear_fix">
  <a href="<?php echo site_url('pages/addArticle') ?>" class="btn btn-add btn-primary">Add New</a>
  </p>
  <div class="table-responsive">
     <table class="table table-bordered table-hover table-striped">
        <caption>List Data</caption>
        <thead>
          <tr>
            <th width="80px">ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Keywords</th>
            <th>Path</th>
            <th>Created</th>
            <th width="80px">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
    if ($data_get == NULL) {
    ?>
    <div class="alert alert-info" role="alert">Empty List!</div>
    <?php
    } else {
    foreach ($data_get as $row) {
    ?>
          <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->title; ?></td>
            <td><?php echo $row->description; ?></td>
            <td><?php echo $row->keywords; ?></td>
            <td><?php echo $row->path; ?></td>
            <td><?php echo $row->created; ?></td>
            <td>
             <a href="<?php echo site_url('pages/edit/' . $row->id); ?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
             <a href="<?php echo site_url('pages/delete/' . $row->id); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
        <?php
        }
    }
        ?>
          </tr>
        </tbody>
     </table>
  </div>
