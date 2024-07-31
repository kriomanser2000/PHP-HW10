<?php
class Input
{
    protected $background;
    protected $width;
    protected $height;
    protected $name;
    protected $value;
    public function __construct($background, $width, $height, $name, $value)
    {
        $this->background = $background;
        $this->width = $width;
        $this->height = $height;
        $this->name = $name;
        $this->value = $value;
    }
    public function getBackground()
    {
        return $this->background;
    }
    public function setBackground($background)
    {
        $this->background = $background;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getValue()
    {
        return $this->value;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
}
class Radio extends Input
{
    private $isChecked;
    public function __construct($background, $width, $height, $name, $value, $isChecked)
    {
        parent::__construct($background, $width, $height, $name, $value);
        $this->setCheckedState($isChecked);
    }
    public function getCheckedState()
    {
        return $this->isChecked;
    }
    public function setCheckedState($isChecked)
    {
        $this->isChecked = $isChecked;
    }
}
class Checkbox extends Input
{
    private $isChecked;
    public function __construct($background, $width, $height, $name, $value, $isChecked)
    {
        parent::__construct($background, $width, $height, $name, $value);
        $this->setCheckedState($isChecked);
    }
    public function getCheckedState()
    {
        return $this->isChecked;
    }
    public function setCheckedState($isChecked)
    {
        $this->isChecked = $isChecked;
    }
}
class Control
{
    protected $background;
    protected $width;
    protected $height;
    protected $name;
    protected $value;
    public function __construct($background, $width, $height, $name, $value)
    {
        $this->background = $background;
        $this->width = $width;
        $this->height = $height;
        $this->name = $name;
        $this->value = $value;
    }
    public function getBackground()
    {
        return $this->background;
    }
    public function setBackground($background)
    {
        $this->background = $background;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getValue()
    {
        return $this->value;
    }
    public function setValue($value)
    {
        $this->value = $value;
    }
}
class Select extends Control
{
    private $items;
    public function __construct($background, $width, $height, $name, $value, $items)
    {
        parent::__construct($background, $width, $height, $name, $value);
        $this->setItems($items);
    }
    public function getItems()
    {
        return $this->items;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }
}