<?php
function convertToHTML($object)
{
    if ($object instanceof Radio)
    {
        $checked = $object->getCheckedState() ? 'checked' : '';
        return "<input type='radio' name='{$object->getName()}' value='{$object->getValue()}' style='background: {$object->getBackground()}; width: {$object->getWidth()}px; height: {$object->getHeight()}px;' $checked />";
    }
    elseif ($object instanceof Checkbox)
    {
        $checked = $object->getCheckedState() ? 'checked' : '';
        return "<input type='checkbox' name='{$object->getName()}' value='{$object->getValue()}' style='background: {$object->getBackground()}; width: {$object->getWidth()}px; height: {$object->getHeight()}px;' $checked />";
    }
    elseif ($object instanceof Select)
    {
        $options = "";
        foreach ($object->getItems() as $item)
        {
            $options .= "<option value='$item'>$item</option>";
        }
        return "<select name='{$object->getName()}' style='background: {$object->getBackground()}; width: {$object->getWidth()}px; height: {$object->getHeight()}px;'>$options</select>";
    }
    return "";
}
$radio = new Radio('#f0f0f0', 100, 30, 'gender', 'male', true);
$checkbox = new Checkbox('#f0f0f0', 100, 30, 'subscribe', 'yes', false);
$select = new Select('#f0f0f0', 100, 30, 'country', '', ['USA', 'Canada', 'Mexico']);
echo "<form>";
echo convertToHTML($radio);
echo convertToHTML($checkbox);
echo convertToHTML($select);
echo "<input type='submit' value='Register' />";
echo "</form>";