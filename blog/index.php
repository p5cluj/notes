<?php include "views/header.php"; ?>
	<div id="body">
		<div id="b-reques">
			<?php if(is_array($data['datacontent'])){
				foreach ($data['datacontent'] as $key) { ?>
				<p><span><?php echo $key['title'] ?></span></p>
				<p><span><?php echo $key['bodytext'] ?></span></p>
			<?php
			}

			} else { echo "<p><span>".$data['datacontent']."</span></p>"; } ?>
		</div>
	</div>

<?php include "views/footer.php"; ?>