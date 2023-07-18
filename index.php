<?php

require_once('vendor/autoload.php');

?>


<html>

<body>
    <h2>Question 1</h2>
    <p id="text"></p>
    <h2>Question 2</h2>
    <?php echo findEmail('find@me.com'); ?>
    <h2>Question 3</h2>
    <p>Please refer to script.sql in database folder</p>
    <p>I changed each tables primary key to an auto incremented value to ensure uniqueness. I have also normalised the database structure by including a polymorphic table. The reason for this is that subjects are shared between teachers and students.</p>
    <p>I have changed headOfGrade column to boolean because its value is only ever true or false. This better suits this column type</p>
    <p>Lastly I adjusted the salary to a decimal as this better suites storing monetary values like someones salary amount. It also now caters for cents.</p>
    <h2>Question 4</h2>
    <?php
    $widget = new App\Widget();
    $widget->setPrice(50.00);

    //  increase price
    increasePrice($widget, 10.00);

    //  display increased price
    echo $widget->getPrice();


    ?>
    <script src="public/js/script.js"></script>
</body>


</html>