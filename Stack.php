<?php
class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [1,3,4,5,6];
        $this->limit = $limit;

    }

    public function push($item)
    {
        array_unshift($this->stack, $item);
    }

    public function pop()
    {
        array_shift($this->stack);
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}