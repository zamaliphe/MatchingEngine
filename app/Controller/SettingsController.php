<?php

class SettingsController extends AppController {

    var $name = 'Settings';
    var $helpers = array('Form');

    function beforeFilter() {
        parent::beforeFilter();
        $this->set("top_nav_intro", 'admin/top_title_intro/top_nave_dashboard');
        $this->set("nave_for_layout", 'admin/top_nave/settings');
    }

    function admin_index() {
        if (!empty($this->data)) {

            $this->Setting->recursive = 0;

            foreach ($this->data["Setting"] as $setting) {
                $result = $this->Setting->save($setting);

                if (!$result)
                    break;
            }
            //debug($this->data);
            //die('Error not ok');
            if ($result) {
                $this->flashSuccess('The user has been saved');
            } else {
                $this->flashWarning('The user could not be saved. Please, try again.');
            }
        }

        $settings = $this->Setting->find('all', array('order' => 'order', 'conditions' => array('Setting.hidden' => 0)));
        $this->set(compact('settings'));
    }

}
