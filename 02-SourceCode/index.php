<?php
include_once __DIR__."/View/View.php";
include_once __DIR__."/global/view.php";

echo view("Home")->WithDatas([
    "item" => 
    [
        "element 1",
        "element 2",
        "element 3",
        "element 4"
    ]
])->Parse();
?>