
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>


		<div id="listarea">
			<ul id="musiclist">
                
                <?php if (!isset($_REQUEST["playlist"])) {
	                $musics = glob("songs/*.mp3");
	                foreach ($musics as $filename) {
	                    ?>
	                    <li class="mp3item"><a href="<?= $filename ?>"> <?= basename($filename) ?> </a></li>
	                    <?php
	                } ?>
	                <?php 
	                $playlists = glob("songs/*.txt");
	                foreach ($playlists as $filename) {
	                	?>
	                	<li class="playlistitem"><a href="music.php?playlist=<?= $filename ?>"><?= basename($filename) ?> </a></li>
	                <?php } ?>  
                <?php } ?> 

					<?php if (isset($_REQUEST["playlist"])) { ?>
						<a href="music.php">Go back</a>

						<?php foreach(file('songs/mypicks.txt') as $song)  { ?>
						<li class="mp3item">
						 	<a href="<?= $song?>"><?= basename($song) ?></a>		
						</li>
					<?php } ?>
				<?php } ?>
					
      
                

                 

			</ul>


		</div>
	</body>
</html>