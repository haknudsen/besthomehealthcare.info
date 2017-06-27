<?php
require( "connect.php" );
$sql = "SELECT * FROM " . $table;
$sql .= " ORDER BY RAND() LIMIT 1";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
    echo '<section class="video-side text-center">';
    echo PHP_EOL;
    while ( $row = $result->fetch_assoc() ) {
        echo '<a href="//' . $row[ "url" ] . '">';
        echo '<img src="' . $row[ "square logo" ] . '" class="img img-responsive center-block" alt="' . $row[ "name" ] . '"/><br>';
        echo '</a>';
        echo PHP_EOL;
        echo '<h2 class="text-center">' . $row[ "name" ] . '</h2>';
        echo PHP_EOL;
        echo '<h3 class="thin black text-justify"">' . $row[ "tagline" ] . '</h3>';
        echo PHP_EOL;
        echo '<h4 text-center">' . $row[ "location" ] . '</h3>';
        echo PHP_EOL;
        echo '<h5 text-center">';
        echo '<a href="tel:' . $row[ "phone" ] . '">' . $row[ "phone" ] . '</a></h3>';
        echo PHP_EOL;
    }
    echo '</section>';
} else {
    echo "0 results";
}
echo PHP_EOL;
?>