<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Leap Year',
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
            <?php if (isset( $_POST["name"])) {
                $name = $_POST["name"];
                echo "<h1>Welcome, $name</h1>";
                echo "<p>The next 5 leap years, this will be your age!</p>";
            }
            ?>
            <?php if (isset( $_POST["city"])) {
                $place = $_POST["city"];
                if ($_POST["city"] == "Groningen") {
                    echo "<p>Moi eem! Nice to see that you're from Groningen :)</p>";
                }}
            ?>
            <?php if (isset( $_POST["age"])) {
                $age = $_POST["age"];

                echo "<table style=\"width:100%\">";
                echo "<thead>";
                echo "<tr style=\"border-bottom: 2px solid slategrey\">";
                    echo "<th >Year</th>";
                    echo "<th>Age</th>";
                echo"</tr>";
                echo"</thead>";
                echo"<tbody>";

                for($i=1;$i<=1;$i++)
                {
                    ?>
                    <tr style="border-bottom: 1px solid slategrey">
                        <td><?php echo 2024; ?></td>
                        <td><?php echo $age+=4; ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid slategrey">
                        <td><?php echo 2028; ?></td>
                        <td><?php echo $age+=4; ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid slategrey">
                        <td><?php echo 2032; ?></td>
                        <td><?php echo $age+=4;; ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid slategrey">
                        <td><?php echo 2036; ?></td>
                        <td><?php echo $age+=4;; ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid slategrey">
                        <td><?php echo 2040; ?></td>
                        <td><?php echo $age+=4;; ?></td>
                    </tr>
                    <?php
                }
                echo "</tbody>";
            echo "</table></br>";
            }
            ?>


            <form id="myForm" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control letters-only" id="name" placeholder="Jan Bos" />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Perhaps you mistyped something. Please try again.
                    </div>
                </div>

                <div class="form-group">
                    <label for="age">Age</label>
                    <input name="age" type="number" class="form-control numbers-only" id="age" placeholder="Enter your age here" />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter a valid age (between 1 and 125 years).
                    </div>
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input name="city" type="text" class="form-control letters-only" id="city" placeholder="Groningen">
                    <div class="invalid-feedback">
                        Please provide a valid city name (no numbers allowed).
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input name="e-mail" type="email" class="form-control e-mail" id="email" placeholder="example@gmail.com">
                    <div class="invalid-feedback">
                        Please provide a valid mail address.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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