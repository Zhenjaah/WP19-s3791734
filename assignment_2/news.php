<?php
/* Header */
$page_title = 'Webprogramming Assignment 2';
$navigation = Array(
    'active' => 'News',
    'items' => Array(
        'Home' => '/~s3791734/WP19/assignment_2/index.php',
        'Links' => '/~s3791734/WP19/assignment_2/links.php',
        'News' => '/~s3791734/WP19/assignment_2/news.php',
        'Future' => '/~s3791734/WP19/assignment_2/future.php'
    )
);
include __DIR__ . '/tpl/head.php';
/* Body */
include __DIR__ . '/tpl/body-start.php';
?>

        <div class="col-md-12">
            <h1>Some nice news for you!</h1>
        </div>
<?php
include __DIR__ . '/tpl/body-end.php';
/* Footer */
include __DIR__ . '/tpl/footer.php';
?>