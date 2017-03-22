<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>


    <div id="content">
        <?php
        $delim=":";
        $number=file("linkList.txt");
        $numberRecs=count($number);
        $fh=fopen('linkList.txt','r') or die("can't open: $php_errormsg");

        for($i=0; $i<$numberRecs;$i++)
        {
            $s=fgets($fh,1024);
            $fields=explode($delim,$s);
            $href=strtolower($fields[3]);
            $output=$fields[2];
            $submit=$fields[0]." ".$fields[1];
            print "<p><a href='http://".$href."'>".$output."</a><br/> from $submit<br/></p>";
        }
        fclose($fh) or die("Can't close: $php_errormsg");
        ?>
    </div>
</body>
</html>
