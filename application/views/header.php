<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<title>Wysig Web</title>

	<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet"  type="text/css">
	<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet"  type="text/css">
	<script src="<?php echo base_url() ?>libs/tinymce/tinymce.min.js"></script>
	        <script type="text/javascript">
					tinymce.init({
					    selector: '#article',
					     height: 500,
					     theme: 'modern',
					     plugins: [
					       'advlist autolink lists link image charmap print preview hr anchor pagebreak',
					       'searchreplace wordcount visualblocks visualchars code fullscreen',
					       'insertdatetime media nonbreaking save table contextmenu directionality',
					       'emoticons template paste textcolor colorpicker textpattern imagetools'
					     ],
					     toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
					     toolbar2: 'print preview media | forecolor backcolor emoticons',
					     image_advtab: true
					  });
	        </script>

</head>
<body >
	<div class="container">
