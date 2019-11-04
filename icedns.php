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
# Don't do anything if the string is empty
$ip = (string)filter_input(INPUT_GET, 'ip');
if( $ip !== '' )
{
    # Split and reverse the IP into an array
    $arr_ip = array_reverse( explode( '.', $ip ) );
    # Check if $ip.iceland.rix.is resolves to 127.1.0.1
    if( gethostbyname( implode( '.', $arr_ip ) . '.iceland.rix.is' ) == '127.1.0.1' )
        # If yes, the IP is Icelandic
        print_r($ip) . print " er .is IP-tala!";
    else
        # Else, the ip is not Icelandic
        print_r($ip) . print " er ekki .is IP-tala!";
}
?> 
</body>
</html>
