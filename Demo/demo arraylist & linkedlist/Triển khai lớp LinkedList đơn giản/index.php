<?php
include_once "Node.php";
include_once "LinkList.php";

$linkedList = new LinkList();

$linkedList->addFirstNode(11);
$linkedList->addFirstNode(22);
$linkedList->addLastNode(33);
$linkedList->addLastNode(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo "<br>";
echo implode('-', $linkData);