<?php
/**
 * A Typecho Theme Wink By IamWu555
 *
 * @package Wink
 * @author IamWu555
 * @version 1.0.0
 * @link https://wu555.ink
 */
 $this->need('header.php');
?>

<?php if($this->have()):?>
  <div class="main">
    <div class="main-content">
      <div class="article">
        <div class="top">
          <div>
            <h1>Today</h1>
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
        <?php while($this->next()): ?>
          <a href="<?php $this->permalink() ?>">
           <div class="article-view" style="background-image:url(<?php  $this->fields->imgurl(); ?>);">
            <h2><?php $this->title() ?></h2>
            <?php if ($this->options->enableOneRow == 0): ?><?php $this->excerpt(50);?><?php endif; ?>
            <p>
              <span class="date"><?php $this->date('y-m-d'); ?></span>
              <span class="author"><?php $this->author(); ?></span>
            </p>
           </div>
         </a>
        <?php endwhile; ?>
      </div>
    <?php else:?>
      <div class="article">
        <p class="title">暂无文章</p>
      </div>
    <?php endif?>
    <div class="pages">
      <?php $this->pageLink('更多 >','next'); ?></a>
      <?php $this->pageLink('< 返回','prev'); ?></a>
    </div>
    </div>
  </div>
