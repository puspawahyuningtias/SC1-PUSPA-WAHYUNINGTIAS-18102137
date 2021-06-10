<!DOCTYPE html>
<html>

<body>
    <!-- strlen() - Return the Length of a String -->
    <?php
    echo strlen("Hello world!");
    ?>
    <br>
    <!-- str_word_count() - Count Words in a String -->
    <?php
    echo str_word_count("Hello world!"); // outputs 2
    ?>
    <br>
    <!-- strrev() - Reverse a String -->
    <?php
    echo strrev("Hello world!"); // outputs !dlrow olleH
    ?>
    <br>
    <!-- strpos() - Search For a Text Within a String -->
    <?php
    echo strpos("Hello world!", "world"); // outputs 6
    ?>
    <br>
    <!-- str_replace() - Replace Text Within a String -->
    <?php
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
    ?>
</body>

</html>