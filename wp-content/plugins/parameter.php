<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
&lt;?php<br />
/* Plugin Name: Parameter<br />
Plugin URI: http://webopius.com/<br />
Description: A plugin to allow parameters to be passed in the URL and recognized by WordPress<br />
Author: Adam Boyse<br />
Version: 1.0<br />
Author URI: http://www.webopius.com/<br />
*/<br />
add_filter('query_vars', 'parameter_queryvars' );<br />
function parameter_queryvars( $qvars )<br />
{<br />
$qvars[] = 'email';<br />
return $qvars;<br />
}<br />
?&gt;
</body>
</html>