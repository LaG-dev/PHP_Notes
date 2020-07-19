    <?php
    if (isset($_POST['submit'])) {
        $text = $_POST['text'];
        $minlen = 5;
        if (strlen($text) <= $minlen) {
            echo "please enter more than 5 characters.";
        } else {
            echo $text . " was entered.";
        }
    }
    ?>