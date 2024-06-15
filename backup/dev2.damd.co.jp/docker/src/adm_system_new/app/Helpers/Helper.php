<?php

namespace App\Helpers;

class Helper
{
    /**
     *
     * @param string $name
     * @param string $label
     * @param bool or Model $checked
     * @param string $value
     * @param string $class
     * @param string $id
     * @param array $attr
     */

    public static function Radio($name, $label, $checked, $value, $class = null, $id = null, $attributes = array())
    {
        $attr_array = array();

        if ( get_parent_class($checked) == 'Model' ) {
            $checked = !Common::isEmptyString($checked->$name);
        }

        if ($checked){
            $attr_array += array(new Attribute('checked', 'checked'));
        }

        foreach ($attributes as $k => $v){
            $attr_array += array(new Attribute($k, $v));
        }

        self::echoHtmlTag('input', $id, $name, 'radio', 'radio', 'inp-box '.$class, $value, null, false, $attr_array);
        // echo "<label for='$id'>$label</label>";
        echo "<label for='$id' class='rd d-flex'>";
        echo '<span class="sp_svg">';
        echo '<svg width="12px" height="10px">';
        echo '<use xlink:href="#radio">';
        echo '</use>';
        echo '</svg>';
        echo '</span>';
        echo "<span>$label</span>";
        echo '</label>';
    }

    public static function echoRadioButtons($name, $array, $checked_index = null, $class = null, $cols = 3)
    {
        $i = 0;
        $colWidth = 12 / $cols ;

        foreach ($array as $key => $value) {
            if ($i == 0) {
                echo '<div class="row">';
            }
            $checked = false;
            if ($key == $checked_index) {
                $checked = true;
            }
            echo "<div class='col-lg-$colWidth d-flex align-items-baseline mb-1'>";
            echo self::Radio($name, $value, $checked, $key, 'mr-2 '.$class, $name.'_'.$key);
            echo '</div>';
            $i++;
            if ($i == $cols) {
                echo '</div>';
                $i = 0;
            }
        }
        if ($i != 0) {
            echo '</div>';
        }
    }
}

?>