<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,  "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,  "email", FILTER_SANITIZE_EMAIL));
    $details = trim(filter_input(INPUT_POST,  "details", FILTER_SANITIZE_SPECIAL_CHARS));
    $category = trim(filter_input(INPUT_POST,  "category", FILTER_SANITIZE_STRING));
    $title = trim(filter_input(INPUT_POST,  "title", FILTER_SANITIZE_STRING));
    $format = trim(filter_input(INPUT_POST,  "format", FILTER_SANITIZE_STRING));
    $year = trim(filter_input(INPUT_POST,  "year", FILTER_SANITIZE_STRING));


    if ($name == '' || $email == '' || $category =='' || $title == '') {
        $errorMsg = "Please fill in the required fields: Name, Email, Category and Title";
    }
    if (!isset($errorMsg) && $_POST['address'] != "") {
        $errorMsg = "Bad form input";
    }

    require("inc/phpmailer/class.phpmailer.php");

    $mail = new PHPMailer;

    if (!isset($errorMsg) && !$mail -> ValidateAddress($email)) {
        $errorMsg = "Invalid Email Address";
    }

    if(!isset($errorMsg)) {
        $emailBody = "";
        $emailBody .= "Name " . $name . "\n";
        $emailBody .= "Email " . $email . "\n";
        $emailBody .= "Suggested Item\n";
        $emailBody .= "Category " . $category . "\n";
        $emailBody .= "Format " . $format . "\n";
        $emailBody .= "Year " . $year . "\n";
        $emailBody .= "Details " . $details . "\n";


        $mail->setFrom($email, $name);
        $mail->addAddress('erik.nuber@yahoo.com', 'Erik');     // Add a recipient
        $mail->isHTML(false);                                  // Set email format to HTML, false means it won't be in HTML

        $mail->Subject = 'Personal Media Library Suggestion from ' . $name;
        $mail->Body = $emailBody;

        if ($mail->send()) {
            //NOTE: Header will not work if you are echoing to the screen. So commented out the echos above.
            header("location:suggest.php?status=thanks");
            exit;
        }
        $errorMsg = 'Message could not be sent.';
        $errorMsg .= 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

$pageTitle = "Suggest a Media Item";
$section = "suggest";

include("inc/header.php");

?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a Media Item</h1>
        <?php if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
            echo "<p>Thanks for the email! I'll check out your suggestion shortly!</p>";
        } else {
            if(isset($errorMsg)) {
                echo "<p class='message'>" . $errorMsg. "</p>";
            } else {
                echo "<p>If you think there is something I'm missing, let me know! Complete the form to send
        me an email.</p>";
            }
            ?>
        <form method="post" action="suggest.php">
            <table>
                <tr>
                    <th>
                        <label for="name">Name (required)</label>
                    </th>
                    <td>
                        <input type="text" id="name" name="name" value="<?php if (isset($name)) {echo $name;} ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="email">Email (required)</label>
                    </th>
                    <td>
                        <input type="text" id="email" name="email" value="<?php if (isset($email)) {echo $email;} ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="category">Category (required)</label>
                    </th>
                    <td>
                        <select id="category" name="category" >
                            <option value="">Select One</option>
                            <option value="Books" <?php if(isset($category) && $category == "Books") {echo " selected";} ?>>Book</option>
                            <option value="Movies" <?php if(isset($category) && $category == "Movies") {echo " selected";} ?>>Movies</option>
                            <option value="Music" <?php if(isset($category) && $category == "Music") {echo " selected";} ?>>Music</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="title">Title (required)</label>
                    </th>
                    <td>
                        <input type="text" id="title" name="title" value="<?php if (isset($title)) {echo $title;} ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="format">Format</label>
                    </th>
                    <td>
                        <select id="format" name="format" >
                            <option value="">Select One</option>
                            <optgroup label="Books">
                                <option value="Audio">Audio</option>
                                <option value="Ebook">Ebook</option>
                                <option value="Hardback">Hardback</option>
                                <option value="Paperback">Paperback</option>
                            </optgroup>
                            <optgroup label="Movies">
                                <option value="Blu-ray">Blu-ray</option>
                                <option value="DVD">DVD</option>
                                <option value="Streaming">Streaming</option>
                                <option value="VHS">VHS</option>
                            </optgroup>
                            <optgroup label="Music">
                                <option value="Cassette">Cassette</option>
                                <option value="CD">CD</option>
                                <option value="MP3">MP3</option>
                                <option value="Vinyl">Vinyl</option>
                            </optgroup>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="year">Year</label>
                    </th>
                    <td>
                        <input type="text" id="year" name="year" value="<?php if (isset($year)) {echo $year;} ?>"/>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="details">Additional Details</label>
                    </th>
                    <td>
                        <textarea name="details" id="details"><?php if (isset($details)) {echo htmlspecialchars($_POST["$details"];} ?></textarea>
                    </td>
                </tr>
                <tr style="display:none">
                    <th>
                        <label for="address">Address</label>
                    </th>
                    <td>
                        <input name="address" id="address" />
                        <p>Please leave this field blank</p>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Send" />
        </form>
        <?php } ?>
    </div>
</div>

<?php include("inc/footer.php"); ?>