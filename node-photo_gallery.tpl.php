<div id="node-photo_gallery.tpl.php" class="node-photo_gallery.tpl.php">
    <div class="item node-photo_gallery.tpl.php-item">
		<?php foreach($node->field_photo_gallery_images as $item) { ?>
			<?php 
		    $file = field_file_load($item['fid']);
		    $img = theme('imagecache', 'photo_gallery_thumb', $file['filepath']);
			?>
		    <a class="node-photo_gallery.tpl.php-image-link" href="<?php print base_path() . $item['filepath'] ?>" rel="shadowbox" title="<?php if(!empty($item['data']['description'])): print 'DESCRIPTION: ' . $item['data']['description']; endif; if(!empty($item['data']['alt'])): print '. ' . $item['data']['alt']; endif; ?>"> 
		    	<?php print $img; ?>        
		    </a>    
		<?php } ?>
    </div>
</div>