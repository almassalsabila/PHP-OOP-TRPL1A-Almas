<?php
// Create an Iterator
class MyIterator implements Iterator
{
    private $items = [];
    private $pointer = 0;

    public function __construct($items)
    {
        // array_values() makes sure that the keys are numbers
        $this->items = array_values($items);
    }

    public function current(): mixed
    {
        return $this->items[$this->pointer];
    }

    public function key(): mixed
    {
        return $this->pointer;
    }

    public function next(): void
    {
        $this->pointer++;
    }

    public function rewind(): void
    {
        $this->pointer = 0;
    }

    public function valid(): bool
    {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
    }
}

// A function that uses iterables
function printIterable(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item . "<br>";
    }
}

// Use the iterator as an iterable
echo "<b>Iterator Output:</b><br>";
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);

// Use a regular array as an iterable
echo "<br><b>Array Output:</b><br>";
$fruits = ["RRose", "Tulip", "Sunflower"];
printIterable($fruits);