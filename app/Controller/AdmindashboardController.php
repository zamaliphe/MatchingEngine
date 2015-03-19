<?php

class AdmindashboardController extends AppController
{

    public $name = 'Admindashboard';

    public $uses = array(
        'User'
    );
    
    // public $helpers = array('Html', 'Form');
    public function beforeFilter()
    {
        parent::beforeFilter();
        $last_update = strtotime('-1 day');
        $data = array();
        $this->layout = "admin";
        
        /*
         * $this->set("top_nav_intro", 'admin/top_title_intro/top_nave_dashboard');
         * $this->set("nave_for_layout", 'admin/top_nave/dashboard');
         * $this->set("selected_with_controller", 'dash');
         * $this->loadModel('Customer');
         * $this->loadModel('Order');
         * $Order_siteLimit = array("Order.site_id" => $this->site_id);
         * $Customer_siteLimit = array("Customer.site_id" => $this->site_id);
         * if ($this->root_acc) {
         * $Order_siteLimit = array();
         * $Customer_siteLimit = array();
         * }
         * $Customer_siteLimit = array();
         *
         *
         * $conditions = array('Order.paymentstatus' => '2',);
         * $conditions = array_merge($conditions, $Order_siteLimit);
         * $data["GenralBalance"] = $this->Order->find('count', array('conditions' => $conditions));
         *
         * $conditions = array();
         * $conditions = array_merge($conditions, $Order_siteLimit);
         * $data["OrderAll"] = $this->Order->find('count', array('conditions' => $conditions));
         *
         * $conditions = array('Order.paymentstatus' => '2',);
         * $conditions = array_merge($conditions, $Order_siteLimit);
         * $data["OrderActive"] = $this->Order->find('count', array('conditions' => $conditions));
         * $conditions = array('Order.paymentstatus' => '0',);
         * $conditions = array_merge($conditions, $Order_siteLimit);
         * $data["OrderNew"] = $this->Order->find('count', array('conditions' => $conditions));
         *
         * $conditions = array('Customer.status' => '1',);
         * $conditions = array_merge($conditions, $Customer_siteLimit);
         * $data["CustomerActive"] = $this->Customer->find('count', array('conditions' => $conditions));
         *
         * $conditions = array('Customer.status' => '1', 'Customer.created >=' => date('Y-m-d', $last_update));
         * $conditions = array_merge($conditions, $Customer_siteLimit);
         * $data["CustomerNew"] = $this->Customer->find('count', array('conditions' => $conditions));
         */
        
        // $this->_gatCharts();
        $this->_setIcons();
        $this->set('dashData', $data);
    }

    public function admin_index()
    {
        $this->set('title_for_layout', __('Dashboard', true));
    }

    public function admin_sysinfo()
    {
        $this->set('title_for_layout', __('System Information', true));
        $sysinfo_contents = '';
        $this->set(compact('sysinfo_contents'));
    }

    public function admin_logs($logfile = null)
    {
        App::import('Core', 'File');
        $this->set('title_for_layout', __('System Logs', true));
        if ($logfile == '') {
            $logsobj = new Folder(LOGS, false, false);
            $logfiles = (array) $logsobj->findRecursive();
            $this->set(compact('logfiles'));
            $this->render('admin_logs_select');
            return;
        } else {
            $logfile = str_replace(',', DS, $logfile);
            if ($logfile != '') {
                $logfileobj = new File(LOGS . DS . $logfile);
                $log_contents = $logfileobj->read();
                $this->set(compact('log_contents'));
            }
        }
    }

    public function admin_statistics()
    {
        $this->set('title_for_layout', __('Statistics', true));
        $data["usersAll"] = $this->User->find('count');
        
        $data["usersActive"] = $this->User->find('count', array(
            'conditions' => array(
                'User.status' => '1'
            )
        ));
        $data["usersInActive"] = $this->User->find('count', array(
            'conditions' => array(
                'User.is_deleted' => '1'
            )
        ));
        
        $data["usersToday"] = $this->User->find('count', array(
            'conditions' => array(
                'User.created' => date('c')
            )
        ));
        
        $this->set('data', $data);
    }

    public function admin_itemperpage($limit = 10)
    {
        $success = true;
        $this->Session->write('settings_limit', $limit);
        
        $response = array(
            "ok" => true,
            "success" => $success
        );
        echo json_encode($response);
        exit(0);
    }

    public function _gatCharts($from = null, $to = null, $type = 'Customer')
    {
        switch ($type) {
            case 'Customer':
                $data = $this->_getChartCustomer($from, $to);
                
                break;
            
            default:
                $data = $this->_getChartCustomer($from, $to);
                break;
        }
        
        debug($data);
        die();
        return $data;
    }

    public function _getChartCustomer($from = null, $to = null)
    {
        $from = strtotime($from);
        if (empty($from) || ($from < strtotime('-1 Year'))) {
            $from = strtotime('-1 Year');
        }
        $join_i = date('Ymd', $from);
        $today_i = date('Ymd');
        
        for ($join_i; $join_i <= $today_i; $join_i = date('Ymd', strtotime($join_i . ' +1 day'))) {
            $arr_key = date('Y-m-d', strtotime($join_i));
            $chart_data[$arr_key]['value'] = 0.0;
            $chart_data[$arr_key]['name'] = $arr_key;
        } // end for loop
        
        $crrnt_data = $this->Customer->find('all', array(
            'conditions' => array(
                'Customer.status' => '1'
            ),
            'order' => 'created ASC',
            'recursive' => - 1
        ));
        
        foreach ($crrnt_data as $d_name) {
            if (empty($d_name['Customer']['created'])) {
                continue;
            }
            $arr_key = date('Y-m-d', $d_name['Customer']['created']);
            $chart_data[$arr_key]['value'] += 1;
        } // end foreach
        
        return $chart_data;
    }

    public function _setIcons()
    {
        $icons = array(
            array(
                'title' => 'Sites Manage',
                'image' => 'layout.png',
                'link' => array(
                    'plugin' => null,
                    'controller' => 'sites',
                    'action' => 'index'
                ),
                'class' => 'productpacks'
            ),
            array(
                'title' => 'Add Site',
                'image' => 'useradd.png',
                'link' => array(
                    'plugin' => null,
                    'controller' => 'sites',
                    'action' => 'add'
                ),
                'class' => 'addcontent'
            ),
            array(
                'title' => 'Site Layouts',
                'image' => 'sysinfo.png',
                'link' => array(
                    'plugin' => null,
                    'controller' => 'site_themes',
                    'action' => 'index'
                ),
                'class' => 'layout'
            ),
            array(
                'title' => 'Add Layout',
                'image' => 'contentadd.png',
                'link' => array(
                    'plugin' => null,
                    'controller' => 'site_themes',
                    'action' => 'add'
                ),
                'class' => 'layout'
            ),
            array(
                'title' => 'Statistics',
                'image' => 'sysstats.png',
                'link' => array(
                    'plugin' => null,
                    'controller' => 'admindashboard',
                    'action' => 'statistics'
                ),
                'class' => 'sysstats'
            ),
            array(
                'title' => 'System Logs',
                'image' => 'syslogs.png',
                'link' => array(
                    'plugin' => null,
                    'controller' => 'admindashboard',
                    'action' => 'logs'
                ),
                'class' => 'syslogs'
            ),
            array(
                'title' => 'System Info',
                'image' => 'sysinfo.png',
                'link' => array(
                    'plugin' => null,
                    'controller' => 'admindashboard',
                    'action' => 'sysinfo'
                ),
                'class' => 'sysinfo'
            ),
            array(
                'title' => 'Settings',
                'image' => 'settings.png',
                'link' => array(
                    'plugin' => null,
                    'controller' => 'settings',
                    'action' => 'settings'
                ),
                'class' => 'settings'
            )
        );
        
        $this->set(compact('icons'));
    }
}

