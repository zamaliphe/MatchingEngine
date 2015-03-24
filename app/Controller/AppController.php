<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller'); 

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    var $helpers = array(
        'Cache',
        'myHtml',
        'Html',
        'Form',
        'Session',
        'Text',
        'Time',
        
    );
    //var $cacheAction = '1 year';

    var $components = array(
        'Session',
        'RequestHandler',
        'Paginator',
        'Cookie',
//        'Acl',
        'Auth' => array(
//            'authorize' => 'actions',
            'actionPath' => 'controllers/',
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login',
                'plugin' => false,
                'admin' => false,
            ),
        ),
//        'Security',
    );
    public $paginate = array(
        'limit' => 5,
    );
    public $theme_name = "default";
    public $theme_params = array(
        'header' => array(
            'logo' => 'default.jpg',
            'font' => array(
                'size' => '12px',
                'family' => 'arial',
                'color' => '#000',
            ),
        ), //end of #header
        'menu' => array(
            'type' => '033',
            'background' => 'default/default_nav.png',
            'bgColor' => '',
            'font' => array(
                'size' => '12px',
                'family' => 'arial',
            ),
            "normal" => array(
                'bgColor' => '',
                'color' => '#999999',
                'background' => 'default/default_nav.png',
            ),
            "hover" => array(
                'bgColor' => '',
                'color' => '#FFFFFF',
                'background' => 'default/default_nav.png',
            ),
        ), //end of #menu
        'body' => array(
            'background' => 'default.jpg',
            'bgcolor' => '#FFF',
            'font' => array(
                'size' => '12px',
                'family' => 'arial',
                'color' => '#000',
            ),
        ), //end of #body
        'block' => array(
            'background' => 'default.jpg', //empty for now
            'bgcolor' => '#ccc',
            'font' => array(
                'size' => '12px',
                'family' => 'arial',
                'color' => '#000',
            ), //end of #block
        ),
    );
    public $theme_params_default = array(
        'header' => array(
            'logo' => 'default.jpg',
            'font' => array(
                'size' => '12px',
                'family' => 'arial',
                'color' => '#000',
            ),
        ), //end of #header
        'menu' => array(
            'type' => '033',
            'background' => 'default/default_nav.png',
            'bgColor' => '',
            'font' => array(
                'size' => '12px',
                'family' => 'arial',
            ),
            "normal" => array(
                'bgColor' => '',
                'color' => '#999999',
                'background' => 'default/default_nav.png',
            ),
            "hover" => array(
                'bgColor' => '',
                'color' => '#FFFFFF',
                'background' => 'default/default_nav.png',
            ),
        ), //end of #menu
        'body' => array(
            'background' => 'default.jpg',
            'bgcolor' => '#FFF',
            'font' => array(
                'size' => '12px',
                'family' => 'arial',
                'color' => '#000',
            ),
        ), //end of #body
        'block' => array(
            'background' => 'default.jpg', //empty for now
            'bgcolor' => '#ccc',
            'font' => array(
                'size' => '12px',
                'family' => 'arial',
                'color' => '#000',
            ), //end of #block
        ),
    );
    public $site_params = array(
        'title' => "",
        "meta_keywords" => "",
        "meta_description" => "",
        "fb_apikey" => "",
        "fb_apipass" => "",
        "fb_appname" => "",
        "tw_appname" => "",
        "tw_oauth_token" => "",
        "tw_oauth_token_secret" => "",
    );
    public $theme;
    public $uses = array(
        'SiteTheme',
    );
    var $is_logedin = false;
    var $is_admin = false;
    var $site_id = 1;
    var $user_site_id = 1;
    var $front_is_root = false;
    var $privacy_level = 0;
    var $Breadcrumbs = array();
    var $group_ids = array(
        "admin" => 1,
        "affiliate" => 2,
        "customer" => 3,
    );

//    public $components = array(
//        'DebugKit.Toolbar' => array('autoRun' => true)
//    );


    function beforeFilter() {
        $is_home_page = false;
        $this->_set_default_params();
        $this->_add_Breadcrumbs("Dashboard", array("controller" => "admindashboard", "action" => "index"));

        CakeLog::config('paypal', array(
            'engine' => 'File',
        ));

//        $this->AutoLogin->settings = array(
////		// Model settings
////		'model' => 'Member',
////		'username' => 'name',
////		'password' => 'pass',
////
////		// Controller settings
////		'plugin' => '',
////		'controller' => 'members',
////		'loginAction' => 'signin',
////		'logoutAction' => 'signout',
//
//		// Cookie settings
//		'cookieName' => 'rememberMe',
//		'expires' => '+1 month',
//
//		// Process logic
//		'active' => true,
//		'redirect' => true,
//		'requirePrompt' => true
//	);
//        $this->Session->startup($this);
//        die("here");
        //################################
        // Admin Login Configuration
        //################################

        if (isset($this->params['admin'])) {
            $this->layout = 'admin';
//            die();
            $this->Auth->userScope = array('User.status' => '1', 'User.group_id' => 1);
            $this->Auth->autoRedirect = false;
            $this->Auth->loginAction = array('controller' => 'users', 'action' => 'admin_login');
            $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'admin_login');
            $this->Auth->loginRedirect = array('controller' => 'admindashboard', 'action' => 'admin_index');
            $this->Auth->fields = array('username' => 'username', 'password' => 'password');
//            debug($loged_user);
            $login_array = array(
                'admin_login',
                'admin_logout',
            );

            if ($this->Auth->loggedIn() == TRUE) {
                $this->Auth->allow("*");
                $this->is_admin = true;
                //die("dd");
            } else {
                $this->layout = 'adminLogin';
                if (!in_array($this->params['action'], $login_array)) {
                    $this->redirect(array('controller' => 'users', 'action' => 'admin_login'));
                    exit(0);
                }
                $this->Auth->allow("admin_login");
                $this->Auth->allow("admin_logout");
                //               $this->Auth->allow("*");
                $this->is_admin = true;
            }
        } else {
           
               // set cookie options
              $this->Cookie->httpOnly = true;

            if (!$this->Auth->loggedIn() && $this->Cookie->read('remember_me')) {
                 $cookie = $this->Cookie->read('remember_me');
                 
                     $this->loadModel('User'); // If the User model is not loaded already
                     $user = $this->User->find('first', array(
                        'conditions' => array(
                            'User.username' => $cookie['username'],
                            'User.password' => $cookie['password']
                        )
                 ));
                 
                 if ($user && !$this->Auth->login($user['User'])) {
              
                          $this->redirect('/users/logout'); // destroy session & cookie
                 }

             }
            //$this->layout = 'front';
            //$this->Auth->allow('*');
            $this->Auth->userScope = array('User.status' => '1', 'User.group_id' => 1);
            $this->Auth->autoRedirect = false;
            $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
            $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
            $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'index');
            $this->Auth->fields = array('username' => 'username', 'password' => 'password');
//        
            $this->Auth->allow('login');
            $this->Auth->allow('logout');
            $this->Auth->allow('paypal_ipn');
            
            
             
             
              if ($this->Auth->loggedIn() == TRUE) {
                $this->Auth->allow("*");
                $this->is_admin = true;
                //die("dd");
            } 

        }


        $user = $this->Auth->user();


        if (!empty($user)) {
            $this->is_logedin = true;
        }

        


        $this->User_type = (in_array($user["group_id"], $this->group_ids)) ? array_search($user["group_id"], $this->group_ids) : "customer";

//        if ($this->RequestHandler->isAjax()) {
//            $this->layout = 'ajax';
//        }
        //var_dump($this->Setting->item('system_offline'));die('ok');
        if ($this->Setting->item('system_offline')) {
            $this->set("system_offline_message", $this->Setting->item('system_offline_message'));
            $this->layout = 'adminLogin';
            $this->render('/settings/admin_offline');
        }

        $this->set("selected_with_controller", 'dash');
        $this->set("User", $user);
        $this->set("is_logedin", $this->is_logedin);
        $this->set("is_admin", $this->is_admin);

//        debug($this->is_logedin);die;
        $this->set('user_type', $this->User_type);

        $this->set('is_logedin', $this->is_logedin);
        $this->Paginator->settings["limit"] = $this->Setting->item('settings_limit');
    }

    function beforeRender() {
        parent::beforeRender();
        $this->_add_Breadcrumbs($this->name, array("controller" => $this->name, "action" => "index"));
        $this->set('Breadcrumbs', $this->Breadcrumbs);

        $this->set('topCounts', array("users" => 0, "orders" => 0, "visits" => 0));
    }

    function _set_error_bugs() {

        $this->set('is_home_page', false);
        $this->set('main_cats', array());
        $this->set('fmenu_active', 'home');
    }

    function _set_default_params() {

        $theme_params = array();
        $theme = array();
        $this->loadModel("SiteTheme");

        $this->loadModel('Setting');
        $this->Setting->set_all();

        $this->site_id = 1;
        if (isset($_GET["site_theme"]) && !empty($_GET["site_theme"])) {
            $this->theme_name = $_GET["site_theme"];
            $site_theme = $this->SiteTheme->find('first', array("conditions" => array("SiteTheme.name" => $this->theme_name)));
            Configure::write('App.baseUrl', env('SCRIPT_NAME') . "?site_theme=" . $this->theme_name);

            $theme = !empty($them_prev["SiteTheme"]) ? $them_prev["SiteTheme"] : $theme;
        }

        if (!empty($theme)) {
            $this->theme_name = $theme["name"];
            $theme_params = json_decode($theme["params"], true);
            $theme_params = is_array($theme_params) ? $theme_params : array();
            $this->theme_params = array_merge($this->theme_params_default, $theme_params);
        }

        if ($this->theme_name == 'default') {
            $this->theme_params = $this->theme_params_default;
        }
        $this->language = Configure::read('Site.locale');

        Configure::write('facebook_login_api_key', $this->Setting->item("fb_apikey"));
        Configure::write('secret', $this->Setting->item("fb_apipass"));
        Configure::write('facebook_app_name', $this->Setting->item("fb_appname"));
        //twitter login
        Configure::write('tw_appname', $this->Setting->item("tw_appname"));
        Configure::write('tw_oauth_token', $this->Setting->item("tw_oauth_token"));
        Configure::write('tw_oauth_token_secret', $this->Setting->item("tw_oauth_token_secret"));

        $this->set("language", $this->language);
        $this->set("theme_params", $this->theme_params);
        $this->set("is_logedin", $this->is_logedin);
        $this->set("title_for_layout", '');
        $this->set("nave_for_layout", 'admin/top_nave_2');
        Configure::write('Config.language', $this->language);
    }

    function _add_Breadcrumbs($title = "", $link = array()) {
        $this->Breadcrumbs[] = array("title" => $title, "link" => $link);
    }

    function _set_menus() {
        
    }

    function _sendMail($mail_data) {
        
    }
    
    /**
     * Run whenever auto login is successful.
     *
     * @param array $user - The Auth user session
     */
    public function _autoLogin($user) {
    }

    /**
     * Run whenever auto login fails.
     *
     * @param array $cookie - The login cookie data
     */
    public function _autoLoginError($cookie) {
    }

}
