<?php

/**
 * footer.php
 * 
 * <footer>
 * 侧边和页脚的配置
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<div id="loading" style="display: block;">
	<div id="loading-center">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>
<?php if (!$this->is('post')) : ?>
	<!--footer-->
	<!-- <footer>
		<div class="main-footer">
			<div class="container">
				<div class="row">
					<div class="copyright">
						<span>Powered by Typecho • <a>Theme MeaWord</a>&nbsp;&nbsp;</span>
					</div>
				</div>
			</div>
		</div>
	</footer> -->
<?php endif; ?>



<!-- 菜单&侧边栏按钮 -->
<a class="to-add" id="to-add">
	<span class="topicon"><i class="fa fa-plus"></i></span>
	<span class="toptext">Add</span>
</a>

<a class="to-top">
	<span class="topicon"><i class="fa fa-angle-up"></i></span>
	<span class="toptext">Top</span>
</a>

<div id="Tip" style="display: none;">
	<div id="Tip-center">
		<h1>喵~没有更多了喵~</h1>
		<h5>喵~提示信息将于1.5S后关闭喵</h5>
	</div>
</div>

<script>
	$("#to-add").click(function() {
		layer.open({
			type: 2,
			title: '新的摘录',
			shadeClose: true,
			shade: 0.8,
			//开启最大化最小化按钮maxmin: true,
			area: ['80%', '500px'],
			content: '/admin/' //iframe的url
		});
	});
</script>
</body>

</html>