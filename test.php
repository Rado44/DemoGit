<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "<h2>Hello world!</h2>";
            echo "Some text";
            echo "Even more some text";
            echo "Thank you for the even more some text";
            $txt = "Heading";
            echo "<h2>".$txt."</h2>";
            echo "It's time for some OOP";
            class PhpOOP {
                public $name;
                public $age;

                function set_name($name) {
                    $this -> name = $name;
                }
                function get_name() {
                    return $this -> name;
                }

                function set_age($age) {
                    $this -> age = $age;
                }
                function get_age() {
                    $this -> age;
                }
            }
        ?>
    </body>
</html>