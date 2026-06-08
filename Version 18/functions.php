<?php
// Keep your redirect function
function redirect($url)
{ ?>
    <script type="text/javascript">
        document.location.href="<?php echo $url;?>";
    </script>
<?php
die;
}


// Centralized DB connection handler
function db_connect($db)
{
    $hostname = "localhost";
    $username = "web_user";
    $password = "!TVxalYKrK5n7GXD";

    $dblink = new mysqli($hostname, $username, $password, $db);

    if ($dblink->connect_error) {
        die("<h2>Something went wrong: " . $dblink->connect_error . "</h2>");
    }

    return $dblink;
}
?>
