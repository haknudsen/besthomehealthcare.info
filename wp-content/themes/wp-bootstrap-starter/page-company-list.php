<?php
get_header();
echo '<div id="primary" class="content-area col-sm-12 col-md-8">';
echo '<main id="main" class="site-main" role="main">';
require( "connect.php" );
$sql = "SELECT * FROM " . $table;
$sql .= " ORDER BY name";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {
    echo '<section class="companies">';
    echo PHP_EOL;
    while ( $row = $result->fetch_assoc() ) {
        echo '<a href="' . $row[ "internal_url" ] . '">';
        echo '<img src="' . $row[ "banner" ] . '" class="img img-responsive center-block" alt="' . $row[ "name" ] . '"/><br>';
        echo '</a>';
        echo PHP_EOL;
        echo '<div class="row">';
        echo PHP_EOL;
        echo '  <div class="col-sm-5">';
        echo PHP_EOL;
        echo '      <h2>' . $row[ "name" ] . '</h2>';
        echo PHP_EOL;
        echo '  </div>';
        echo PHP_EOL;
        echo '  <div class="col-sm-7">';
        echo PHP_EOL;
        echo '      <h3 class="thin">' . $row[ "tagline" ] . '</h3>';
        echo PHP_EOL;
        echo '  </div>';
        echo PHP_EOL;
        echo '</div>';
        echo PHP_EOL;
        echo '<div class="row alert-info">';
        echo PHP_EOL;
        echo '  <div class="col-sm-3">';
        echo PHP_EOL;
        echo '      <h3>' . $row[ "location" ] . '</h3>';
        echo '  </div>';
        echo PHP_EOL;
        echo '  <div class="col-sm-6">';
        echo PHP_EOL;
        echo '  <a href="//' . $row[ "url" ] . '" target="_blank">';
        echo '<h3>' . $row[ "url" ] . '</h3>';
        echo '</a>';
        echo PHP_EOL;
        echo '  </div>';
        echo PHP_EOL;
        echo '  <div class="col-sm-3">';
        echo PHP_EOL;
        echo '      <h3>';
        echo '<a href="tel:' . $row[ "phone" ] . '">' . $row[ "phone" ] . '</a></h3>';
        echo PHP_EOL;
        echo '  </div>';
        echo '</div>';
        echo PHP_EOL;
        echo '<br>';
        echo '<hr>';
    }
} else {
    echo "0 results";
}
echo PHP_EOL;
echo '</section>';
echo '</main><!-- #main -->';
echo '</div><!-- #primary -->';
get_sidebar();
get_footer();
?>
</body>
</html>