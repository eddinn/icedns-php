<html>
<head>
<title>IceDNS</title>
</head>
<body>
<form action="" method="get">
<b>IP tala:</b> </b><input type="text" name="ip" value="" />
<input type="submit" name="x" value="Athuga" />
</form>
<hr />
<?php
# Gerum ekki neitt nema GET-breytan ip innihaldi eitthvað
if( isset($_GET['ip']) != '' )
{
    # Skerum IP töluna niður eftir punktunum og snúum henni við
    $arr_ip = array_reverse( explode( '.', $_GET['ip'] ) );
    # Athugum hvort iptala.iceland.rix.is skili 127.1.0.1
    if( gethostbyname( implode( '.', $arr_ip ) . '.iceland.rix.is' ) == '127.1.0.1' )
        # Ef svo er, er IP-talan íslensk
        echo $_GET['ip'] . ' er .is IP-tala!';
    else
        # Ef ekki, er IP talan ekki íslensk
        echo $_GET['ip'] . ' er ekki .is IP-tala!';
}
?> 
</body>
</html>
