<?php
/**
 * Created by PhpStorm.
 * User: nihad
 * Date: 01/10/18
 * Time: 14:03
 */

<?php
// src/Controller/ItemController.php
require __DIR__ . '/../Model/ItemManager.php';

$items = selectAllItems();

require __DIR__ . '/../View/item.php';
?>