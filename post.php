<?php $this -> need('header.php'); ?>
<div class="main">
  <div class="main-content">
    <div class="post-header" style="background-image:url(<?php  $this->fields->imgurl(); ?>);">
      <div class="post-header-info">
        <h2><?php $this->title();?></h2>
        <span><?php $this->date('F j, Y'); ?> · <?php $this->category(' · '); ?></span>
      </div>
    </div>
    <div class="post-content">
       <?php $this->content(); ?>
    </div>
    <div class="post-footer">
      <span class="post-tags">
        标签:<?php $this->tags(',', true, 'none'); ?>
      </span>
      <span class="post-lastEdit">
        最后编辑于:<?php echo date('Y/m/d H:i' , $this->modified); ?>
      </span>
    </div>
  </div>
</div>
