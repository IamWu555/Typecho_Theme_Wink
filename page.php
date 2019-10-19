<?php $this->need('header.php'); ?>
<div class="main">
  <div class="main-content">
    <div class="page_top">
      <div>
        <h1><?php $this->options->title(); ?></h1>
      </div>
      <div class="gravatar">
        <div class="slide">
          <a href="javascript:divShow();" id="btnhref"><?php $this->author->gravatar(40); ?></a>
        </div>
      </div>
    </div>
    <div id="btnshow" class="mobile_nav">
        <a href="<?php $this->options->siteUrl(); ?>">首页</a>
        <a href="<?php Helper::options()->siteUrl()?>links.html" <?php if ($this->is('page','links')) : ?> <?php endif; ?>>友人帐</a>
        <a href="<?php Helper::options()->siteUrl()?>about.html" <?php if ($this->is('page','About')) : ?> <?php endif; ?>>关于</a>
    </div>
    <div class="content">
      <h2><?php $this->title();?></h2>
      <?php $this->content();?>
    </div>
  </div>
</div>
<div class="sideBar">

</div>
