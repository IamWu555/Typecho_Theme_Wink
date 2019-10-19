<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章')
    ), '', ':)'); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" media="only screen and (min-width: 800px)" href="<?php $this->options->themeUrl('CSS/Wink.css'); ?>">
    <link rel="stylesheet" media="only screen and (max-width: 800px)" href="<?php $this->options->themeUrl('CSS/Wink-mobile.css'); ?>">
  </head>
  <body>
    <div class="mainwrap">
      <div class="header">
        <div class="avatar">
          <div class="img">
            <?php $this->author->gravatar(128); ?>
          </div>
          <p><?php $this->options->description() ?></p>
        </div>
        <div class="nav">
          <ul>
            <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
            <li><a href="<?php Helper::options()->siteUrl()?>links.html" <?php if ($this->is('page','links')) : ?> <?php endif; ?>>友人帐</a></li>
            <li><a href="<?php Helper::options()->siteUrl()?>about.html" <?php if ($this->is('page','About')) : ?> <?php endif; ?>>关于</a></li>
          </ul>
        </div>
        <div class="footer">
        <?php $this->need('footer.php'); ?>
        </div>
      </div>
