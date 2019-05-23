<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
    'items' => Array(
        'News' => '/~s3791734/WP19/assignment_3/index.php',
        'Add news item' => '/~s3791734/WP19/assignment_3/news_add.php',
        'Leap Year' => '/~s3791734/WP19/assignment_3/leapyear.php',
        'Simple Form' => '/~s3791734/WP19/assignment_3/simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>


    <div class="row">
        <div class="col-md-12">
            <?php if (isset( $_GET["name"])) {
                $name = $_GET["name"];
            echo "<h1>Welcome $name!</h1>";
            }
            ?>
            <?php if (isset( $_GET["place"])) {
                $place = $_GET["place"];
                if ($place == "Amsterdam") {
                    echo "<p>You're from the capital of the Netherlands!</p>";
                    }
                else {
                echo "<p>You're from $place!</p>";
            }}
            ?>
            <form action="simple_form.php" method="get">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Jan Bos" value="<?php echo htmlspecialchars($name); ?>" />
                </div>
                <div class="form-group">
                    <label for="place">Place</label>
                    <input name="place" type="text" class="form-control" id="place" placeholder="Groningen" value="<?php echo $place; ?>" />
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

<?php
/* Enable error reporting */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php
include __DIR__ . '/tpl/body_end.php';
?>