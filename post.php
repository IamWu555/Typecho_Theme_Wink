<?php $this -> need('header.php'); ?>
<div class="main">
  <div class="main-content">
    <?php if (array_key_exists('imgurl',unserialize($this->___fields()))): ?>
      <div class="post-header" style="background-image:url(<?php  $this->fields->imgurl(); ?>);">
        <div class="post-header-info">
          <h2><?php $this->title();?></h2>
          <span><?php $this->date('F j, Y'); ?> · <?php $this->category(' · '); ?></span>
        </div>
      </div>
    <?php else : ?>
      <div class="post-header" style="background-image:url(https://pic.superbed.cn/item/5d5f9dc4451253d178226678.jpg);">
        <div class="post-header-info">
          <h2><?php $this->title();?></h2>
          <span><?php $this->date('F j, Y'); ?> · <?php $this->category(' · '); ?></span>
        </div>
      </div>
    <?php endif; ?>
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
