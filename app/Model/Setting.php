<?php

class Setting extends AppModel {

    var $name = 'Setting';
    public $displayField = 'name';
    var $useTable = "settings";
    var $items = array();
    var $validate = array(
    );

    function set_all() {
        $this->items = $this->find('list', array('fields' => array('Setting.name', 'Setting.value')));
    }

    function item($item = null) {

        if (!empty($this->items) && isset($this->items["$item"]))
            return $this->items["$item"];

        return null;
    }

}

?>