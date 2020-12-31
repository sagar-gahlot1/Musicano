<?php
$myfile = "dynamic/note1.txt";
if (isset($_POST['ta1'])) {
    $newData =(htmlspecialchars($_POST['ta1']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>1</h2>
<form action="try1.php" method="post">
  <textarea name="ta1" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn1" type="submit" />
</form>


<?php
$myfile = "dynamic/note2.txt";
if (isset($_POST['ta2'])) {
    $newData =(htmlspecialchars($_POST['ta2']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>2</h2>
<form action="try1.php" method="post">
  <textarea name="ta2" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn2" type="submit" />
</form>



<?php
$myfile = "dynamic/note3.txt";
if (isset($_POST['ta3'])) {
    $newData =(htmlspecialchars($_POST['ta3']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>3</h2>
<form action="try1.php" method="post">
  <textarea name="ta3" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn3" type="submit" />
</form>




<?php
$myfile = "dynamic/note4.txt";
if (isset($_POST['ta4'])) {
    $newData =(htmlspecialchars($_POST['ta4']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>4</h2>
<form action="try1.php" method="post">
  <textarea name="ta4" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn4" type="submit" />
</form>




<?php
$myfile = "dynamic/note5.txt";
if (isset($_POST['ta5'])) {
    $newData =(htmlspecialchars($_POST['ta5']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>5</h2>
<form action="try1.php" method="post">
  <textarea name="ta5" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn5" type="submit" />
</form>


<?php
$myfile = "dynamic/note6.txt";
if (isset($_POST['ta6'])) {
    $newData =(htmlspecialchars($_POST['ta6']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>6</h2>
<form action="try1.php" method="post">
  <textarea name="ta6" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn6" type="submit" />
</form>



<?php
$myfile = "dynamic/note7.txt";
if (isset($_POST['ta7'])) {
    $newData =(htmlspecialchars($_POST['ta7']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>7</h2>
<form action="try1.php" method="post">
  <textarea name="ta7" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn7" type="submit" />
</form>



<?php
$myfile = "dynamic/note8.txt";
if (isset($_POST['ta8'])) {
    $newData =(htmlspecialchars($_POST['ta8']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>8</h2>
<form action="try1.php" method="post">
  <textarea name="ta8" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn8" type="submit" />
</form>



<?php
$myfile = "dynamic/note9.txt";
if (isset($_POST['ta9'])) {
    $newData =(htmlspecialchars($_POST['ta9']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>9</h2>
<form action="try1.php" method="post">
  <textarea name="ta9" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn9" type="submit" />
</form>




<?php
$myfile = "dynamic/note10.txt";
if (isset($_POST['ta10'])) {
    $newData =(htmlspecialchars($_POST['ta10']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>10</h2>
<form action="try1.php" method="post">
  <textarea name="ta10" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn10" type="submit" />
</form>



<?php
$myfile = "dynamic/note11.txt";
if (isset($_POST['ta11'])) {
    $newData =(htmlspecialchars($_POST['ta11']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>11</h2>
<form action="try1.php" method="post">
  <textarea name="ta11" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn11" type="submit" />
</form>




<?php
$myfile = "dynamic/note12.txt";
if (isset($_POST['ta12'])) {
    $newData =(htmlspecialchars($_POST['ta12']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>12</h2>
<form action="try1.php" method="post">
  <textarea name="ta12" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn12" type="submit" />
</form>




<?php
$myfile = "dynamic/note13.txt";
if (isset($_POST['ta13'])) {
    $newData =(htmlspecialchars($_POST['ta13']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>13</h2>
<form action="try1.php" method="post">
  <textarea name="ta13" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn13" type="submit" />
</form>


<?php
$myfile = "dynamic/note14.txt";
if (isset($_POST['ta14'])) {
    $newData =(htmlspecialchars($_POST['ta14']));
    $handle = fopen($myfile,"w");
    fwrite($handle,$newData);
    fclose($handle);
}
// ----------------------------
if (file_exists($myfile)) {

    $myData = file_get_contents($myfile);
}
?>
<h2>14</h2>
<form action="try1.php" method="post">
  <textarea name="ta14" cols="154" rows="10">
    <?php echo($myData); ?>
  </textarea>
  <input name="myBtn14" type="submit" />
</form>

