<?php
//session_start();
$servername = "vdb1b.pair.com";
$username = "working_44";
$password = "TFmu223W";
$dbname = "working_homehealth";
$table = "companies"; 
// Create connection
$conn = mysqli_connect( $servername, $username, $password );
debug_to_console( "Test" );
// Check connection
if ( !$conn ) {
    die( "Connection failed: " . mysqli_connect_error() );
    echo( "Connection failed: " . mysqli_connect_error() );
    echo "<br>";
}
$db = mysqli_select_db( $conn, $dbname );

if ( !$db ) {
    die( "Connection failed: " . mysqli_connect_error() );
    echo "<br>";
}
$sql = "SELECT * FROM companies";
$result = $conn->query( $sql );
echo json_encode($result);
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
?>