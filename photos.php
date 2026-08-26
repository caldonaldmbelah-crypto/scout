<?php
// htdocs/scouts/photos.php
include 'header.php';
if (!isset($_SESSION["scout_id"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Scout photos and videos</title>
    <link rel="stylesheet" href="my style.css">
</head>
<body>
    <h2>Scout photos and videos</h2>
    <p>Welcome to our scout photo gallery! Here you’ll find a collection of snapshots capturing the spirit and adventures of our troop. Take a moment to browse through these images, which document everything from exciting outdoor expeditions and skill-building activities to memorable community service projects and the camaraderie that makes scouting so special. </p>
    <p>Below, you’ll discover photos organized to highlight different aspects of our scouting journey under the Kenyan stars. Look out for sections showcasing our camping trips, the teamwork involved in knot-tying and pioneering projects, the joy of earning badges and celebrating achievements, and the impact we make through our various service initiatives within the local community. Feel free to click on any image to view it in more detail and perhaps even spot familiar faces sharing in these valuable scouting experiences.</p>
    <p>You are therefore provided with the below link.click it to download diffrent scout photos</p>
    <a href="scouting photoes.docx" target="_blank">download scouting photos</a>
    <br>
    <a href="https://photos.app.goo.gl/WpibAThQqWMdADY99" target="_blank">view scouting photos</a>
<h3><B><U>VIDEOS</U></B></h3>
<a href="V1.mp4" target="_blank">video 1</a> <br>
<a href="V2.mp4" target="_blank">video 2</a> <br>
<a href="V3.mp4" target="_blank">video 3</a> <br>
<a href="V4.mp4" target="_blank">video 4</a> <br>
<a href="V5.mp4" target="_blank">video 5</a> <br>
<a href="V6.mp4" target="_blank">video 6</a> <br>
<a href="V7.mp4" target="_blank">video 7</a> <br>
<a href="V8.mp4" target="_blank">video 8</a> <br>
<a href="V9.mp4" target="_blank">video 9</a> <br>
<a href="V10.mp4" target="_blank">video 10</a> <br>
</body>
</html>

