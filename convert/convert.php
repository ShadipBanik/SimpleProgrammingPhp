<?php

       if(isset($_POST['submit'])) {
         $s1 = $_POST['selectid1'];
         $s2 = $_POST['selectid2'];
         $nmb=$_POST['input'];

      if ($s1=="decimal"  && $s2 =="binary" ) {
         $number = deciToBin();

      }
      else if  ($s1=="decimal"  && $s2=="octal") {
        $number=deciToOct();

      }
      else if  ($s1=="decimal"  && $s2=="hexadecimal") {
          $number=deciToHexa();
      }
      else if  ($s1=="decimal"  && $s2=="decimal")  {
         $nmb=$_POST['input'];
         $number=$nmb;

      }

      //bin to  others
      else if ($s1=="binary"  && $s2 =="decimal" ) {
          $number=binToDec();
      }
      else if  ($s1=="binary"  && $s2=="octal") {
        $number=binToOct();
      }
      else if  ($s1=="binary"  && $s2=="hexadecimal") {
        $number=binToHex();
      }
      else if  ($s1=="binary"  && $s2=="binary")  {
        $nmb=$_POST['input'];
        $number=$nmb;
      }
      //octal to others
      else if ($s1=="octal"  && $s2 =="decimal" ) {
          $number=octToDec();
      }
      else if  ($s1=="octal"  && $s2=="binary") {
          $number=octToBin();
      }
      else if  ($s1=="octal"  && $s2=="hexadecimal") {
          $number=octToHex();
      }
      else if  ($s1=="octal"  && $s2=="octal")  {
        $nmb=$_POST['input'];
        $number=$nmb;
      }
      //hexadecimal to others
      else if ($s1=="hexadecimal"  && $s2 =="decimal" ) {
          $number=hexToDec();
      }
      else if  ($s1=="hexadecimal"  && $s2=="binary") {
          $number=hexToBin();
      }
      else if  ($s1=="hexadecimal"  && $s2=="octal") {
          $number=hexToOct();
      }
      else if  ($s1=="hexadecimal"  && $s2=="hexadecimal")  {
        $nmb=$_POST['input'];
        $number=$nmb;
      }
}
?>
