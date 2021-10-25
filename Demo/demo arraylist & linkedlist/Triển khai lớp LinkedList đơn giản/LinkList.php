<?php

class LinkList
{
    public $firstNode;
    public $lastNode;
    public $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function addFirstNode($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function addLastNode($data)
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode = $node;
            $node->next = null;
            $this->lastNode->next = $node;
            $this->count++;
        } else {
            $this->addFirstNode($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
