<?php
include MODEL . 'Model.php';

class Controller
{

    function objectsIntoArray($arrObjData, $arrSkipIndices = array())
    {
        $arrData = array();

        // if input is object, convert into array
        if (is_object($arrObjData)) {
            $arrObjData = get_object_vars($arrObjData);
        }

        if (is_array($arrObjData)) {
            foreach ($arrObjData as $index => $value) {
                if (is_object($value) || is_array($value)) {
                    $value = objectsIntoArray($value, $arrSkipIndices);
                }
                if (in_array($index, $arrSkipIndices)) {
                    continue;
                }
                $arrData[$index] = $value;
            }
        }
        return $arrData;
    }

    function render($path, $data=array())
    {
        if (file_exists(VIEW . $path)) {
            extract($data);
            return (include VIEW . $path);
        } else {
          throw new Exception("view $path no found ");
        }
    }

}
