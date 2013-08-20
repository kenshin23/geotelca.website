<?php
// Script original escrito por Adam
// Modificado por Héctor (Xombra) Mantellini para xombra.com
// PHP 5 >
// GNU GENERAL PUBLIC LICENSE Ver Terminos en: 
// http://www.gnu.org/copyleft/gpl.html
?>
<table width="100%" border="0" align="left" cellpadding="1" cellspacing="2" class="bordetabla" >
    <tr>
        <td align="left" valign="top">
            <p>Esta acci&oacute;n puede tomar desde 5 segundos hasta 2 minutos seg&uacute;n la velocidad del sitio web a leer y del tama&ntilde;o del c&oacute;digo fuente.</p>
            <form id="form1" name="leer_codigo" method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>">
                <p>Sitio web:<input name="url" type="text" class="campo" size="50" />
                    <br />(formato: www.el-sitio-a-leer.extensi&oacute;n ) <br />
                    ejemplo: www.xombra.com </p>
                <p>
                    <input name="Submit" type="submit" value="Ejecutar" />
                </p>
            </form>
            <hr />
            <?php
            if (!empty($_POST["url"])) {

                define('SHOW_HEADERS',false);  

                function get_source($url, $show_headers = 0) {
                    if(preg_match('!^http://!',$url))  
                    $url = substr($url, 7, strlen($url));

                    if($start = strpos($url, '/'))  { $uri=substr($url,$start,strlen($url));  }
                    else {
                        $uri = ''; }  

                        $fp = fsockopen($url, 80, $errno, $errstr, 4);
                        if (!$fp) {
                            echo "<p class=\"error\">Imposible conectar a: $url</p>";
                            return false;
                        } else {
                            $headers = $buffer = '';  
                                    fputs($fp, "GET /$uri HTTP/1.0\r\n");
                            fputs($fp, "Host: $url\r\n");
                            fputs($fp, "User-Agent: sourcegetter\r\n");
                            fputs($fp, "Connection: close\r\n");
                            fputs($fp, "\r\n");
                            while (!feof($fp)) {
                                if (!isset($end_of_headers)) {
                                    $header = fgets($fp, 4096);
                                    if ($header == "\r\n")
                                        $end_of_headers = 1;
                                    $headers.=$header;
                                } else {
                                    $buffer.=fgets($fp, 4096);
                                }
                            }
                            fclose($fp);
                            if ($show_headers) {
                                $headers = htmlentities($headers);
                                $headers = nl2br($headers);
                                echo $headers;
                            }
                            $buffer = htmlentities($buffer);
                            $buffer = nl2br($buffer);
                            echo $buffer;
                            return true;
                        }
                    }
                    ?>
                    <p>C&oacute;digo fuente HTML de: [ <?php echo $_POST["url"]; ?> ]</p>
                    <p><textarea name="textarea" cols="70" rows="50"><?php get_source("$_POST[url]", SHOW_HEADERS); ?></textarea></p>
    <?php } ?>
        </td>
    </tr>
</table>