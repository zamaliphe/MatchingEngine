<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

    var $name = 'Users';
    var $helpers = array('Html', 'Js');
    var $components = array('Session', 'RequestHandler', 'Email', 'Paginator');
    var $uses = array('User');
    var $options = array('first_name' => 'first_name', 'last_name' => 'last_name', 'username' => 'username', 'email' => 'email');

    function beforeFilter() {
        parent::beforeFilter();
        // $this->set("nave_for_layout", 'admin/top_nave/users');
        $this->set("top_nav_intro", 'admin/top_title_intro/top_nave_users');
        $this->set("selected_with_controller", 'user');
    }

    function auto_login() {
        // auto login 
        if ($this->request->data['User']['remember_me'] == 1) {
            // After what time frame should the cookie expire
            $cookieTime = "12 months"; // You can do e.g: 1 week, 17 weeks, 14 days
            // remove "remember me checkbox"
            unset($this->request->data['User']['remember_me']);

            // hash the user's password
            $this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['password']);

            // write the cookie
            $this->Cookie->write('remember_me', $this->request->data['User'], true, $cookieTime);
        }
    }

    function login($login_type = 'login') {

        $this->set('title_for_layout', __('Login', true));
        $this->layout = "users_login";
        //if the user is allready loged in no need to re Do
//        debug($this->Auth->sessionKey);
//        debug($this->Auth->user());
//        debug($this->Admin->user());
//        die();

        if ($this->Auth->user()) {
            //debug($this->Auth->user());die();

            $this->auto_login();
            $this->redirect($this->Auth->redirect());
        }
        $aproved_types = array('login', 'facebook', 'twitter');
        if (empty($login_type) || !in_array($login_type, $aproved_types)) {
            
        }
        $login_type = '_' . $login_type;

        $this->$login_type();
    }

    function logout() {

        $this->Cookie->delete('remember_me');
        $this->Session->destroy();
        //$this->Session->setFlash(__('Log out successful.', true));
        $this->Auth->logout();
        //$this->Cookie->del('Auth.User');
        $this->redirect("/");
    }

    function signup() {

        $userFbData = $this->Session->read('userDataTmp');
        //debug($userFbData);die();
        if (empty($userFbData) && empty($this->request->data)) {
            $this->Session->setFlash(__('Account Not Found', true), 'flash_error');
            // $this->redirect("/");
        }

        $userFbData['email'] = isset($userFbData['email']) ? $userFbData['email'] : "";
        $userFbData['username'] = isset($userFbData['username']) ? $userFbData['username'] : "";
        $this->set("userFbData", $userFbData);

        $this->loadModel("UserAuthType");
        if (!empty($this->request->data)) {
            $this->request->data["User"]['password'] = $this->Auth->password($this->request->data["User"]['password']);
            $this->request->data["User"]["user_token"] = substr(md5(uniqid()), 0, 10);

            $this->Auth->fields = array('username' => 'user_token', 'password' => 'password');
            $oauth_token = $this->Session->read('oauth_token');
            $oauth_token_secret = $this->Session->read('oauth_token_secret');
            $AuthData = array(
                'oauth_token' => $oauth_token,
                'oauth_token_secret' => $oauth_token_secret,
            );
            $this->loadModel('User');
            $this->User->create();
            $this->User->save($this->request->data["User"], false);
            $this->UserAuthType->create();
            $this->UserAuthType->save(array(
                "user_id" => $this->User->id,
                "auth_agent" => $this->request->data["User"]["auth_agent"],
                "auth_token" => $this->request->data["User"]["auth_id"],
                "status" => 1,
                "data" => serialize($AuthData),
            ));

            $this->Auth->login($this->request->data);
//            debug($this->Auth->user());
//            die();

            $this->Session->delete('userDataTmp');
            $this->redirect($this->Auth->redirect());
        }
    }

    function settings() {
        $User_id = $this->Auth->user("id");
        $User = $this->User->read(null, $User_id);
        if (empty($User)) {
            $this->Session->setFlash(__('Account Not Found', true), 'flash_error');
            $this->redirect("/");
        }
        if (!empty($this->request->data)) {
            $this->User->create();
            $this->User->set($this->request->data["User"]);
            if ($this->User->validates()) {
                $this->User->save($this->request->data["User"]);
                $User = $this->User->read(null, $User_id);
                $this->Auth->login($User["User"]["id"]);
            } else {

                $message = __('The User could not be saved. Please, try again.', true);
                $User_error = $this->User->invalidFields();
                $data = $User_error;
                $this->set('errors', compact('message', 'data'));
            }

            $this->Session->setFlash(__('Account Updated Susessfuly', true), 'flash_success');
            $this->redirect(array("action" => "settings"));
        }
        $gallery_types = array(
            '1' => "normal",
            '2' => "other",
        );

        $this->set("gallery_types", $gallery_types);
        $this->set(compact($User));
        $this->request->data = $User;
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('title_for_layout', __('Users', true));
        $this->layout = "front";
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    ################################## logins private functions  #######################
//        private function auto_login() {
//            //-- code inside this function will execute only when autoRedirect was set to false (i.e. in a beforeFilter).
//            if ($this->Auth->user()) {
//                if (!empty($this->request->data) && $this->request->data['User']['remember_me']) {
//              
//                    $cookie = array();
//                    $cookie['username'] = $this->request->data['User']['username'];
//                    $cookie['password'] = $this->request->data['User']['password'];
//                    $this->Cookie->write('Auth.User', $cookie, true, '+2 weeks');
//                    unset($this->request->data['User']['remember_me']);
//                }
//                //$this->redirect($this->Auth->redirect());
//            }
//            
//            
//            if (empty($this->request->data)) {
//                $cookie = $this->Cookie->read('Auth.User');
//                if (!is_null($cookie)) {
//                    if ($this->Auth->login($cookie)) {
//                        //  Clear auth message, just in case we use it.
//                        $this->Session->delete('Message.auth');
//                        //$this->redirect($this->Auth->redirect());
//                    } else { // Delete invalid Cookie
//                        $this->Cookie->delete('Auth.User');
//                    }
//                }
//            }
//            //return;
//        }

    function _login() {

        $this->loadModel('User');

        if (empty($this->request->data)) {
            $cookie = $this->Cookie->read('remember_me');
            if (!is_null($cookie)) {
                if ($this->Auth->login($cookie)) {
                    die();
                    //  Clear auth message, just in case we use it.
                    //$this->Session->delete('Message.auth');
                    $this->redirect($this->Auth->redirect());
                } else { // Delete invalid Cookie
                    $this->Cookie->delete('remember_me');
                }
            }
        }
        $user = $this->Auth->user("id");
        // var_dump($this->request->data);
        //var_dump($user);
        //$this->auto_login();
        // die();
        if (!empty($user)) {
            $this->auto_login();
            $this->redirect(array('controller' => 'pages', 'action' => 'index'));
        }
        if (!empty($this->request->data['User'])) {
//           $pass =  $this->Auth->password(($this->request->data['User']['password']));
//           debug($this->request->data['User']['password']);
//           debug($pass);
            $loged_user = $this->Auth->login();

//            if($this->request->data['User']['remember_me'])
//            {
//                $this->AutoLogin->initialize($this);
//                $this->AutoLogin->startup($this);
//                $this->AutoLogin->beforeRedirect($this , '');
//            }
//            debug($this->Auth->user("id"));
//         debug($loged_user);die('not_logedin');
//            $this->Auth->login($this->request->data['User']);
//            $login = $this->Auth->login($this->request->data);
//            debug($login);
            if (!$this->Auth->loggedIn()) {
                $this->Auth->authError = false;
                $this->Session->setFlash(__('Invalid username Or Password.', true), 'flash_error');
                return;
//                debug($loged_user);
//                die('not_logedin');
            }
            if ($this->Auth->loggedIn()) {
                $this->auto_login();
                $this->redirect(array('controller' => 'pages', 'action' => 'index'));
            } else {
//                debug($this->request->data);
//                debug($user);
                $this->Session->setFlash(__('Log out successful.', true), 'flash_success');
                $this->redirect(array('controller' => 'users', 'action' => 'login'));
//                $this->_flash(__("Username and password didn't match", true), 'error');
            }
        }
    }

    function _twitter() {

        $oauth_token = $this->Session->read('oauth_token');
        $oauth_token_secret = $this->Session->read('oauth_token_secret');
        if (empty($oauth_token) || empty($oauth_token_secret) || empty($_GET['oauth_verifier'])) {
            $tw_user = $this->_sendTw();
        }
        //debug($fb_user);die();

        App::import('Vendor', 'twitter', array('file' => 'twitter/twitteroauth.php'));
        //echo '<pre>';
        $twitteroauth = new TwitterOAuth(Configure::read('tw_oauth_token'), Configure::read('tw_oauth_token_secret'), $oauth_token, $oauth_token_secret);
        // We've got everything we need
        // Let's request the access token
        $access_token = $twitteroauth->getAccessToken($_GET['oauth_verifier']);

        //debug($access_token);die;
        $oauth_token = $access_token["oauth_token"];
        $oauth_token_secret = $access_token["oauth_token_secret"];
        // Save it in a session var
        $this->Session->write('access_token', $access_token);

        $this->Session->write('oauth_token', $oauth_token);
        $this->Session->write('oauth_token_secret', $oauth_token_secret);

        // Let's get the user's info
        $user_info = $twitteroauth->get('account/verify_credentials');

//        debug($access_token);
//        debug($user_info);
//        die;
        if (isset($user_info->error) || isset($user_info->errors) || empty($user_info)) {
            $this->redirect("/");
        }


        $this->loadModel('UserAuthType');

        $user = $this->UserAuthType->find('first', array('conditions' => array('UserAuthType.auth_agent' => 'twitter', 'UserAuthType.auth_token' =>
                $user_info->id)));

        if (!empty($user)) {
            //debug($user);die;
            $this->Auth->fields = array(
                'username' => 'user_token',
                'password' => 'password'
            );

            if (!empty($user["User"]["id"])) {

                $AuthData = array(
                    'oauth_token' => $oauth_token,
                    'oauth_token_secret' => $oauth_token_secret,
                );
                $this->UserAuthType->create();
                $this->UserAuthType->save(
                        array(
                    'id' => $user["UserAuthType"]["id"],
                    'data' => serialize($AuthData))
                        , false, array('data')
                );
                $this->Auth->login($user);
                $this->redirect($this->Auth->redirect());
            }
            $this->UserAuthType->delete($user["UserAuthType"]["id"]);
        }

        $image_url = $this->_saveImage($user_info->profile_image_url, WWW_ROOT . 'user_images' . DS);
        $data = array();
        $name_array = explode(' ', $user_info->name);
        $data['username'] = $user_info->screen_name;
        $data['auth_agent'] = 'twitter';
        $data['auth_id'] = $user_info->id;
        $data['profile_image_url'] = $image_url;

        $data['first_name'] = isset($name_array[0]) ? $name_array[0] : '';
        $data['last_name'] = isset($name_array[1]) ? $name_array[1] : '';

        $this->Session->write('userDataTmp', $data);
        $this->redirect(array('controller' => 'users', 'action' => 'signup'));
        exit;
    }

    function _facebook() {

        //this function will handell facebook loging only
        //we dont trust facebook so we use try catch block to catch any error

        $fb_user = $this->_sendFP();
        //debug($fb_user);die();
        if (!$fb_user) {
            $this->redirect("/");
        }

        $this->loadModel('UserAuthType');

        $user = $this->UserAuthType->find('first', array('conditions' => array('UserAuthType.auth_agent' => 'facebook', 'UserAuthType.auth_token' =>
                $fb_user['facebook_id'])));
        //debug($user);die();

        if (!empty($user)) {

            $this->Auth->fields = array(
                'username' => 'user_token',
                'password' => 'password'
            );

            if (!empty($user["User"]["id"])) {

                $is_logedin = $this->Auth->login($user);
//                var_dump($this->Auth->user());
//                var_dump($is_logedin);die();

                $this->redirect($this->Auth->redirect());
            }
            $this->UserAuthType->delete($user["UserAuthType"]["id"]);
        }

        $fb_image_url = $this->_get_fb_image($fb_user['id']);

        $image_url = $this->_saveImage($fb_image_url, WWW_ROOT . 'user_images' . DS);

        $data = array();
        $data['auth_agent'] = 'facebook';
        $data['auth_id'] = $fb_user['id'];
        $data['profile_image_url'] = $image_url;

        $data['username'] = $fb_user['username'];
        $data['first_name'] = $fb_user['first_name'];
        $data['last_name'] = $fb_user['last_name'];

        $data['email'] = isset($fb_user['email']) ? $fb_user['email'] : null;
        /*
         * save the facebook data in session 
         * and go to Signup 
         */
        //debug($data);die;
        $this->Session->write('userDataTmp', $data);
        $this->redirect(array('controller' => 'users', 'action' => 'signup'));
        exit;
    }

    function _saveImage($url, $savePath) {

        $ch = curl_init($url);
        $new_file_name = substr(md5(uniqid()), 0, 10);
        $org_parts = pathinfo($url);

        $new_save_file = $new_file_name . '.' . $org_parts['extension'];
        $fp = fopen($savePath . $new_save_file, 'wb');

        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $result = curl_exec($ch);

        fclose($fp);
        curl_close($ch);

        return $new_save_file;
    }

    function _get_fb_image($fb_user_id = 0) {
        $headers = get_headers('https://graph.facebook.com/' . $fb_user_id . '/picture?type=large', 1);
        // just a precaution, check whether the header isset...
        if (isset($headers['Location'])) {
            $url = $headers['Location']; // string
        } else {
            $url = false; // nothing there? .. weird, but okay!
        }
        return $url;
    }

    ################################## Admin Layout  #######################

    function admin_login() {
        $this->set('title_for_layout', __('Admin Login', true));
        $this->layout = "adminLogin";
        $this->Auth->autoRedirect = false;
        $user = $this->Auth->user("id");
//        debug($this->Auth->password('123456'));
//        debug($this->request->data);
        if (!empty($user)) {
            $this->redirect(array('controller' => 'admindashboard', 'action' => 'admin_index'));
        }
        if (!empty($this->request->data['User'])) {
//           $pass =  $this->Auth->password(($this->request->data['User']['password']));
//           debug($this->request->data['User']['password']);
//           debug($pass);
            $loged_user = $this->Auth->login();
//            debug($this->Auth->user("id"));
//         debug($loged_user);die('not_logedin');
//            $this->Auth->login($this->request->data['User']);
//            $login = $this->Auth->login($this->request->data);
//            debug($login);
            if (!$this->Auth->loggedIn()) {
                $this->Auth->authError = false;
                $this->Session->setFlash(__('Invalid username Or Password.', true), 'flash_error');
                return;
//                debug($loged_user);
//                die('not_logedin');
            }
            if ($this->Auth->loggedIn()) {
                $this->redirect(array('controller' => 'admindashboard', 'action' => 'admin_index'));
            } else {
//                debug($this->request->data);
//                debug($user);
                $this->Session->setFlash(__('Log out successful.', true), 'flash_success');
                $this->redirect(array('controller' => 'users', 'action' => 'admin_login'));
//                $this->_flash(__("Username and password didn't match", true), 'error');
            }
        }
    }

    function admin_logout() {
        $this->set('title_for_layout', __('Admin Login', true));
        $this->layout = "adminLogin";

        $this->Session->destroy();
        $this->Session->setFlash(__('Log out successful.', true), 'flash_success');
        $this->Auth->logout();

        $this->redirect(array('controller' => 'users', 'action' => 'admin_login'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index($user_type = "customer") {

        $group_id = (isset($this->group_ids["{$user_type}"])) ? $this->group_ids["{$user_type}"] : 3;

        $this->Paginator->settings['conditions'] = array("User.group_id" => $group_id);

        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash_error');
            }
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash_error');
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'), "flash_success");
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'), "flash_error");
        }
        return $this->redirect(array('action' => 'index'));
    }

    function admin_approve($id = null) {
        $this->pageTitle = 'User Approve';

        if ($this->User->saveField('active', 1)) {
            $this->Session->setFlash(__('User have been permited!', true), 'flash_success');
            $this->redirect(array('action' => 'index', 'index'));
        }
    }

    function admin_reject($id = null) {
        $this->pageTitle = 'User Reject';

        if ($this->User->saveField('active', 2)) {
            $this->Session->setFlash(__('User has been Banned!', true), 'flash_success');
            $this->redirect(array('action' => 'index', 'index'));
        }
    }

    ############################### Admin profile and password ################

    function admin_profile() {

        $id = $this->Auth->user('id');

        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->request->data = $this->User->find('first', $options);

        $this->_set_menus();
    }

    function admin_pedit() {
        $id = $this->Auth->user('id');
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if (($this->request->is(array('post', 'put'))) && (!empty($this->request->data))) {

            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'), 'flash_success');
                return $this->redirect(array('controller' => 'Admindashboard', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash_error');
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
    }

    function admin_changepassword() {

        if (($this->request->is(array('post', 'put'))) && (!empty($this->request->data))) {
            $user_password = $this->User->find('first', array('conditions' => array('User.id' => $this->Auth->user('id'))));
            $this->User->create();
            if ($this->Auth->password(($this->request->data['User']['passwd'])) == $user_password['User']['password']) {
                $this->User->save(array('id' => $this->Auth->user('id'), 'password' => $this->Auth->password($this->request->data['User']['password'])), false, array('password'));
                $this->Session->setFlash('The new password has been saved', 'profile', 'flash_success');
                return $this->redirect(array('controller' => 'Admindashboard', 'action' => 'index'));
            }

            $this->Session->setFlash('old password is wrong.', 'profile', 'flash_error');
        }
        $this->_set_menus();
    }

    function admin_resetpassword($id = null) {

        $user = $this->User->read(null, $id);
        $new_password = $this->_genratepassword();
        $this->User->create();
        $this->User->save(array('id' => $id, 'password' => $this->Auth->password($new_password)), false, array('password'));
        $this->set('password', $new_password);
        $this->set('newuser', $user);

        $mail_data = array(
            'template' => "message",
            'subject' => "Reset Password Mail",
            'mailto' => $user['User']['email'],
        );
        $this->_sendMail($mail_data);

        $this->Session->setFlash('The new password has been saved', 'edit/' . $id);
    }

    function _genratepassword() {
        return substr(md5(uniqid('0123456789bcdfghjkmnpqrstvwxyz')), 0, 10);
    }

    function is_logedin() {
        debug($this->Auth->user());
        die();
    }

    
    function admin_printpassword()
    {
        
       echo $this->Auth->password("123456");
       die("\n\n\n ok");
    }
    
}
