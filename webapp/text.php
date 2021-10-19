<html>
<body>
<?php str_word_count(string $string, int $format = 0, ?string $characters = null): array|int; 
        echo "Your word count is int " ?>
<?php
    $length = strlen($_POST['textbox']);
    echo "Your Character count is:  $length.";
?>
Welcome <?php echo $_GET["textbox"]; ?><br>
Your word count is: <?php echo $_GET["textbox"]; ?>
</body>
</html>
