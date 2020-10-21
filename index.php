<?php 
/**
 * sentence : 极简句子
 * 
 * @package Typecho Replica Theme 
 * @author mrmj
 * @version 1.0
 * @link https://www.murongmengjie.cn
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 ?>
<?php $this->need('header.php'); ?>
<body>

<!-- banner -->
<div class="banner" style="background-image: url(<?php echo empty($this->options->bg)?'//https://user_logo/back10.png':$this->options->bg;?>);">
	<!-- 菜单按钮 -->
	<!-- <div class="menu menuicon hidden-xs">
		<i class="fa fa-bars"></i>
	</div> -->
	<!-- header -->
	<div class="header container">
		<!--个人信息-->
		<div class="row">
			<div class="col-md-12">
				<div class="personInfo">
					<div class="logo">
						    <a href="<?php echo $this->options->siteUrl; ?>"><img src="<?php echo empty($this->options->logo)?'//https://user_logo/head_.ico':$this->options->logo;?>" alt="logo"></a>
					</div>
					<div class="logoTheme">
						<h1><?php echo empty($this->options->IndexName)?$this->options->title:$this->options->IndexName ?></h1>
					</div>
				</div>				
			</div>
		</div>
	</div> 
</div><!--文章列表-->
<div id="list">
	<?php while($this->next()): ?>
        <div class="articleList container">
		<div class="row">
			<div class="col-md-12">
			    <div class="article">
					<div class="articleHeader">
						<h1 class="articleTitle"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
						<h4 class="aticleSouce"><a>——<?php echo  " " . $this->fields->author . " "  ?><?php echo  "《" . $this->fields->source . "》" ?></a></h4>
					</div>
					<div class="articleFooter clearfix">
						<ul class="articleStatu">
							<li><i class="fa fa-calendar"></i><?php $this->date('Y-m-d'); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php endwhile; ?>
</div>
    <div id="pagination"><?php if(ceil($this->getTotal() / $this->parameter->pageSize)>1)$this->pageLink('加载更多','next');else echo"<span>喵~没有了喵</span>" ?></div>
<?php $this->need('footer.php'); ?>
