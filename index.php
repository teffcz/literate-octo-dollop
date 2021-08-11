<?php
        $title=gethostname();
?>

<DOCTYPE html>
<html>
<head>
        <title><?php $title ?></title>
</head>

<body bgcolor="yellow">

        <table style='margin: auto; width: 1400px; border: solid 1px black; text-align: center;'>
         <tr> <th style='text-decoration: underline;'><?php echo $title; ?></th> </tr>

         <?php /*
        $radku = 20;
        $soubor = file("access.log");
        // vystup radku - jde nam pouze o poslednich $radku
        for ($i = max(0, count($soubor)-$radku); $i < count ($soubor); $i++) {
                echo "<tr> <td>".$soubor[$i]."</td> \n";
        }*/
?>

        </table>

        <?php
  $x = 0.0001;
  for ($i = 0; $i <= 100000000; $i++) {
    $x += sqrt($x);
  }
  echo "OK!";
?>

</body>
</html>
