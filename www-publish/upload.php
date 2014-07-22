<?php include('header.php'); ?>

<div id="main">
	<div id="block-upload" class="shadow-normal clearfix">

		<div class="clearfix mb30">
			<!-- <a class="btn-upload fl mr30" href="#" title="点击上传图片">点击上传图片</a> -->
			<input id="file_upload" name="file_upload" type="file" multiple="true">
			<span class="mt10 block">可以一次上传多张图片</span>
			<span class="fr">已上传x张图片</span>
		</div>

		<div class="list mb30">
			<ul>
				<?php for($i=0; $i<4; $i++){ ?>
				<li class="item">
					<img class="thumb" src="img/thumb.jpg" alt="">
					<input class="desc mb10 mt10" type="text" value="" placeholder="点击输入图片描述...">
					<input class="setCover mr5" type="radio" name="cover" >设置为封面
					<a class="del fr" href="#">删除</a>
				</li>
				<?php } ?>
			</ul>
		</div>

		<div class="album mb30">

			<ul class="nav list-h">
				<li class="select"><a href="#">添加到已有专辑</a></li>
				<li><a href="#">添加到新建专辑</a></li>
			</ul>

			<div class="list">
				<ul class="clearfix">
					<?php for($i=0; $i<6; $i++){ ?>
					<li>
						<img class="thumb" src="img/thumb_album.jpg" alt="">
						<span class="title">专辑名称xxx专辑名称xxx</span>
					</li>
					<?php } ?>
				</ul>
				
				<div>
					<a href="#">上一页</a>
					<a href="#">下一页</a>
				</div>
			</div>

			<div class="create">
				<input class="album_name" type="text" value="" placeholder="专辑名称...">
				<textarea class="album_desc" placeholder="专辑说明（可以不填）"></textarea>
				<a class="album_create" href="#">创建</a>
			</div>
		</div>
		
		<div class="clearfix mb30">
			<a class="btn-finish fl mr30" href="#">保存</a>
			<a href="#" class="mt10 block">放弃上传</a>
		</div>

	</div>
</div>

<script data-main="js/upload" src="js/lib/require.js"></script>
<?php include('footer.php'); ?>