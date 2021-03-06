<?php 
include TPL_ROOT . 'common/header.html.php';
?>
<?php $common->printPositionBar($this->app->getModuleName());?>
<div class='row'><?php $this->block->printRegion($layouts, 'company_index', 'topBanner', true);?></div>
<div class="row">
  <div class="col-md-9 col-main">
    <div class='row'><?php $this->block->printRegion($layouts, 'company_index', 'top', true);?></div>
    <div class='panel'>
      <div class='panel-heading'><strong><i class='icon-group'></i> <?php echo $lang->aboutUs; ?></strong></div>
      <div class="panel-body">
        <div class='article-content'>
          <?php echo $company->content;?>
        </div>
      </div>
    </div>
    <div class='row'><?php $this->block->printRegion($layouts, 'company_index', 'bottom', true);?></div>
  </div>
  <div class='col-md-3 col-side'><side class='page-side'><?php $this->block->printRegion($layouts, 'company_index', 'side');?></side></div>
</div>
<div class='row'><?php $this->block->printRegion($layouts, 'company_index', 'bottomBanner', true);?></div>
<?php include TPL_ROOT . 'common/footer.html.php'; ?>
