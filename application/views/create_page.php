
		 <div class="row clear_fix ">
				 	<div class="col-md-12">
							 <form role="form" id="frmArticle" class="form" action="<?php echo base_url() ?>index.php/pages/save" method="POST">
									 <lablel>Title</lablel>
									 <input type="text" name="title" class="form-control">
									 <lablel>Description</lablel>
									 <input type="text" name="description" class="form-control">
									 <lablel>Keywords</lablel>
									 <input type="text" name="keywords" class="form-control">
									 <lablel>Path</lablel>
									 <input type="text" name="path" class="form-control">
									 <lablel>Content</lablel>
									 <textarea id="article" name="article"  class="form-control"></textarea>
									 <input id=btn-article type="submit" name="mit" class="btn btn-primary" value="Add new article">
  							 	 <button type="button" onclick="location.href='<?php echo site_url('') ?>'" class="btn btn-success">Back</button>
							 </form>
						 </div>


			 </div>

			 <div class="row clear_fix">
           <div class="col-md-12 response">
			     </div>
		   </div>
