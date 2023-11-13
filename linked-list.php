//Singly linked list implemented in PHP.

<?php

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function isEmpty() {
        return $this->head === null;
    }

    public function insert($data) {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function display() {
        $current = $this->head;
        while($current !== null) {
            echo $current->data . ' ';
            $current = $current->next;
        }
    }
}

$linkedList = new LinkedList();

$linkedList->insert(6);
$linkedList->insert(44);
$linkedList->insert(22);
$linkedList->insert(34);
$linkedList->insert(67);
$linkedList->insert(7);

echo "Linked list: ";
$linkedList->display();
?>