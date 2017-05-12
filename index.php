<?php
$subsfile = fopen("subs.txt", "r") or die("Unable to open file!");
$numsubs = fread($subsfile, 8);
fclose($subsfile);

$newsub = 0;

if(isset($_GET["newsub"])) {
    $newsub = htmlspecialchars($_GET["newsub"]);
}

if ($newsub == 1) {
    $subsfile = fopen("subs.txt", "w") or die("Unable to open file!");
    $numsubs = $numsubs + 1;
    fwrite($subsfile, $numsubs);
    fclose($subsfile);
}
?>
<html>
<head>
<title>Xwater has <?php echo($numsubs);?> Subs!</title>
<style>
body{
  font-family: 'Roboto', sans-serif;
}
.aligner{
  display: flex;
  align-items: center;
  justify-content: center;
}
.item{
  max-width: 50%;
  font-size: 6em;
  font-weight: 300;
  text-align: center;
}
.lg{
  font-size: 2em;
  font-weight: 700;
}
canvas {
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
z-index:-1;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="snow.min.js"></script>
</head>
<body class="aligner">
<canvas width="100%" height="100%" class="snow"></canvas>
<div class="item">
Xwater has<br>
<span class="lg"><?php echo($numsubs);?></span>
<br>Subs!
</div>
</body>

<?php
$mute = 0;

if(isset($_GET["mute"])) {
    $mute = htmlspecialchars($_GET["mute"]);
}

if ($mute == 1) {} else {
echo('<audio autoplay loop src="music.mp3">');
}
?>


<script type="text/javascript">
$(document).ready( function() {
    $("canvas.snow").let_it_snow({
image: "https://cdn.frankerfacez.com/emoticon/154680/1",
size: 16,
speed: 3
});
});
</script>

</html>
