<?php
require 'convert/Deci_To_Bin.php';
require 'convert/Deci_To_Oct.php';
require 'convert/Deci_To_Hexa.php';
require 'convert/Bin_To_Dec.php';
require 'convert/Bin_To_Oct.php';
require 'convert/Bin_To_Hex.php';
require 'convert/Oct_To_Deci.php';
require 'convert/Oct_To_Bin.php';
require 'convert/Oct_To_Hex.php';
require ("convert/Hex_To_Dec.php");
require ("convert/Hex_To_Bin.php");
require ("convert/Hex_To_Octal.php");
require ("convert/convert.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>

        <div class="center">
              <h1>
              Number Conversion  System .
              </h1>
              <div class="content">

                    <form action="" method="POST">
                          <div class="elmnt1">
                                      <br><br>

                                      <select class="select"  id="selectid1" name="selectid1">
                                      <option value="decimal">Decimal</option>
                                      <option value="binary">Binary</option>
                                      <option value="octal">Octal</option>
                                      <option value="hexadecimal">Hexadecimal</option>

                                      </select><br>
                                      <input class="inp" type="text" Name="input" id="input" placeholder="Enter a number"value="<?php if(isset($nmb)) echo $nmb;  ?>"</input>
                          </div>
                          <div class="elemnt2">
                                      <br><br>
                                      <select class="select" id="selectid2" name="selectid2">
                                      <option value="decimal">Decimal</option>
                                      <option value="binary">Binary</option>
                                      <option value="octal">Octal</option>
                                      <option value="hexadecimal">Hexadecimal</option>

                                      </select><br>
                                      <textarea class="output"  name="output" rows="2" placeholder="Show output" value="" cols="20"><?php if(isset($number)) echo $number;  ?></textarea>
                          </div>

                          <input class="button"  type="submit" name="submit" value="CONVERT"/>
                  </form>
              </div>
        </div>

</body>
</html>
