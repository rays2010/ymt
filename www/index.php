<?php include('header.php'); ?>

<div id="main" class="clearfix">
	<div class="side">
		<div class="cell hots">
			<div class="hotCat mb15">
				<h2>热门分类</h2>
				<div class="links">
					<a href="">时尚</a>
					<a href="">艺术</a>
					<a href="">摄影</a>
					<a href="">设计</a>
					<a href="">插画</a>
					<a href="">主题</a>
				</div>
			</div>
			<div class="hotTag mb15">
				<h2>热门标签</h2>
				<div class="links">
					<a href="">美女</a>
					<a href="">帅哥</a>
					<a href="">摄影</a>
					<a href="">设计</a>
					<a href="">插画</a>
					<a href="">主题</a>
					<a href="">头像</a>
					<a href="">桌面</a>
					<a href="">来自星星的你</a>
					<a href="">hot tags 2014</a>
				</div>
			</div>
		</div>
		<div class="cell ads">
			<a href="#"><img src="img/ad.jpg" alt=""></a>
			<a href="#"><img src="img/ad.jpg" alt=""></a>
			<a href="#"><img src="img/ad.jpg" alt=""></a>
			<a href="#"><img src="img/ad.jpg" alt=""></a>
			<a href="#"><img src="img/ad.jpg" alt=""></a>
		</div>
	</div>

	<div class="clearfix">
		<?php for ($i=0; $i < 10; $i++) { ?>
		<div class="pic">
			<a href="#"><img class="thumb" src="img/pic.jpg" alt=""></a>
			<div class="act">
				<h2 class="header"></h2>
				<h2 class="title"></h2>
			</div>
		</div>
		<? } ?>
	</div>

	<div id="pagination">
		<div class="main mr30">
			<a class="prev">上页</a>
			<a class="select" href="">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<a href="">5</a>
			<span class="dot">...</span>
			<a href="">100</a>
			<a class="next">下页</a>
		</div>
		<form class="goto" method="get" action="http://www.topit.me/">
			去第<input class="num" type="text" name="p"><input class="confirm" type="submit" value="确认">页
		</form>
	</div>
</div>

<script data-main="js/home" src="js/lib/require.js"></script>
<?php include('footer.php'); ?>