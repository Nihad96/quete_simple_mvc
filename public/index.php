 <?php

        require __DIR__ . '/../vendor/autoload.php';

        use Controller;

        $nvCon = new Controller\ItemController();
        $index = $nvCon -> index();

 echo 'bonjour';

