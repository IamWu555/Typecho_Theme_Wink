<?php $this -> need('header.php'); ?>
<div class="main-content">
  <div class="content">
    <p><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章')
    ), '这里是', ':)'); ?></p>
    <?php while($this->next()): ?>
      <a href="<?php $this->permalink() ?>">
        <div class="article">
          <h2> <span><?php $this->title() ?></span> </h2>
          <p> <span><?php $this->author(); ?></span><span><?php $this->date('F j, Y'); ?></span> </p>
        </div>
      </a>
    <?php endwhile; ?>
    <div class="pages">
      <?php $this->pageLink('更多 >','next'); ?>
      <?php $this->pageLink('< 返回','prev'); ?>
    </div>
  </div>
</div>
