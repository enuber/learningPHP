<?php

include("includes/data.php");
include("includes/functions.php");

$pageTitle = "Personal Media Library";
//adding in section here even though we aren't using it because $section needs to have some form of value in the includes file
$section = null;
include("includes/header.php"); ?>

		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
                    <?php
                    $random = array_rand($catalog, 4);
                    foreach($random as $id) {
                        echo getItemHtml($id, $catalog[$id]);
                    }
                    ?>
                </ul>

			</div>

		</div>

<?php include("includes/footer.php"); ?>