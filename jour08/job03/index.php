<body>
    <?php

    session_start();

    if (!isset($_SESSION['name'])) 
    {
        $_SESSION['name'] = [];
    }

    if (isset($_POST['reset'])) 
    {
        $_SESSION['name'] = [];
        $_POST['reset'] = '';
    }

    if (
        isset($_POST['prenom']) && $_POST['prenom'] != '' && $_POST['prenom'] !== end($_SESSION['name']))
         {
        array_push($_SESSION['name'], $_POST['prenom']);
    }

    ?>
    <form action="" method="post">
        <input type="text" name="prenom" id="">
        <input type="submit">
        <input type="submit" name="reset" value="Reset">
    </form>

    <div>
        <ul>
            <?php
            foreach ($_SESSION['name'] as $key => $val) {
                echo "<li>.$val.</li>";
            } ?>
    </div>
</body>





