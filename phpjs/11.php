<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    javascript
    <script>
      list = new Array("d","f","a","c");
      i = 0;
      while(i<list.length){
        document.write("<li>"+list[i]);
        i++;
      }
    </script>
    <ul>
      <?php
      $list = array("e","g","o","i");
      $i =0;
      while($i<count($list)){
        echo "<li>".$list[$i]."</li>";
        $i++;
      }
       ?>

    </ul>
  </body>
</html>
