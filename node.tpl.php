<?php
// $Id: node.tpl.php,v 1.5 2011/04/12 09:51:29 usaussie Exp $
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<?php print $picture ?>

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <div class="content clear-block">
    <?php print $content ?>
  </div>

  <div class="clear-block">
    <div class="meta">
    <?php if ($taxonomy): ?>
      <div class="terms">
        <div class="terms-title">Tags: </div>
        <div class="terms-list"><?php print $terms ?></div>
    </div>
    <?php endif;?>
    </div>

    <?php if ($links): ?>
      <div class="links"><?php print $links; ?></div>
    <?php endif; ?>
    
    <?php if ($submitted): ?>
        <div class="submitted-title">Page Information:&nbsp;</div>
        <div class="submitted-list"><?php print $submitted; ?></div>
  	<?php endif; ?>
  </div>

</div>
