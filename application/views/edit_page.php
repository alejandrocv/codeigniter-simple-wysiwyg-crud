<?php echo form_open('pages/updateArticle', 'role="form"'); ?>
  <div class="form-group">
    <label for="fn">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title ?>">
  </div>
  <div class="form-group">
    <label for="fn">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="<?php echo $description ?>">
  </div>
  <div class="form-group">
    <label for="ag">Keywords</label>
    <input type="text" class="form-control" id="keywords" name="keywords" value="<?php echo $keywords ?>">
  </div>
  <div class="form-group">
    <label for="ad">Path</label>
    <input type="text" class="form-control" id="path" name="path" value="<?php echo $path ?>">
  </div>
  <div class="form-group">
    <label for="ad">Content</label>
     <textarea id="article" name="article"  class="form-control" ><?php echo $article ?></textarea>
  </div>
  <input type="hidden" name="id" value="<?php echo $id ?>" />
  <input type="submit" name="mit" class="btn btn-primary" value="Update">
  <button type="button" onclick="location.href='<?php echo site_url('') ?>'" class="btn btn-success">Back</button>
</form>
<?php echo form_close(); ?>
