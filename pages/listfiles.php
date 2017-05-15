<style>.file-list ul {list-style: none;margin-bottom: 12px; }</style>
<section class="margtop">
	<div class="row file-list">
		<div class="small-6 columns">
			<h5>&nbsp;&nbsp;Root folders</h5>
			<hr class="folder">
			<ul>
				<?php
				$rep=opendir('.');
				$bAuMoinsUnRepertoire = false;
				while ($file = readdir($rep)){
					if (is_dir($file) && !in_array($file, array(".", "..", "css", "images"))){
						if (is_dir($file)){
							$bAuMoinsUnRepertoire = true;
							print("<li class='text1' ><i class='fa fa-folder-o'></i>&nbsp;&nbsp;$file</li>");
						}
					}
				}
				if ($bAuMoinsUnRepertoire == false) {
					print("<li>-&nbsp; No directory &nbsp;-</li>");
				}
				closedir($rep);
				clearstatcache();
				?>
			</ul>
		</div>
		<div class="small-6 columns">
			<h5>Pages Folder</h5>
			<hr class="folder">
			<ul>
			<?php
				$n = 0; foreach (scandir("./pages") as $file){
					if (strtolower(strrchr($file, '.'))==".php" && $file!="index.html"){
						$n++;
						echo ($n % 3 ? (($n+1) % 3 ? "<li class='text3' ><i class='fa fa-file-text-o'></i>&nbsp;&nbsp;<a href='index.php?page=fileed' rel='external'>" . $file . "</a></li>" : "<li class='text3' ><i class='fa fa-file-text-o'></i>&nbsp;&nbsp;<a href='index.php?page=fileed' rel='external'>" . $file . "</a></li>") : "<li class='text3' ><i class='fa fa-file-text-o'></i>&nbsp;&nbsp;<a href='index.php?page=fileed' rel='external'>" . $file . "</a></li>");
					}
				  }
				echo ($n == 0 ? "<li>-&nbsp; None &nbsp;-</li>" : ($n % 2 == 0 ? "" : "<li></li>"));
			  ?>
			</ul>
		</div>
	</div>
</section>