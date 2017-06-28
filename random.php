<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>random</title>
    <link rel="stylesheet" href="http://besthomehealthcare.info/wp-content/themes/bootstrap-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" id="videoelements-css-css" href="http://besthomehealthcare.info/wp-content/plugins/wpvideo/theme/include/style002.css" type="text/css" media="all">
</head>

<body>
    <?php
    require( "connect.php" );
    $sql = "SELECT * FROM " . $table;
    $sql .= " ORDER BY RAND() LIMIT 1";
    $result = $conn->query( $sql );

    if ( $result->num_rows > 0 ) {
        while ( $row = $result->fetch_assoc() ) {
            $banner = $row[ "banner" ];
            $logo = $row[ "square logo" ];
            $name = $row[ "name" ];
            $tag = $row[ "tagline" ];
            $location = $row[ "location" ];
            $phone = $row[ "phone" ];
            $url = $row[ "internal_url" ];
            if ( !$logo ) {
                $logo = $banner;
            }
        }
    } else {
        echo "0 results";
    }
    ?>
    <section class="video-side text-center">
        <img src="<?=$logo?>" class="img img-responsive center-block" alt="<?=$name?>"/>
        <div class="video-side-text">
            <h2 class="name">
                <?=$name?>
            </h2>
            <h3 class="tagline">
                <?=$tag?>
            </h3>
            <div class="serving">
                <h4>Serving<br>
                <?=$location?>
            </h4>
            </div>
            <div class="tel">
                <h5>
<a href="tel:<?=$phone?>" title="Call Now">
        <?=$phone?>
        </a>
        </h5>
            
            </div>

        </div>
    </section>

</body>

</html>