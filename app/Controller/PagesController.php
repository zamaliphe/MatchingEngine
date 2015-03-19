<?php

class PagesController extends AppController {

    var $name = 'Pages';
    var $helpers = array('Html', 'Form', 'UploadPack.Upload', 'fck');
    var $uses = array("Page");
    var $options = array('title' => 'Title', 'url' => 'URL');
    var $components = array('Paypal');
    var $static_pages = array('contact_us', 'about_us');

    function beforeFilter() {
        parent::beforeFilter();
        $this->set("nave_for_layout", 'admin/top_nave/contents');
        $this->set("top_nav_intro", 'admin/top_title_intro/top_nave_contents');
        $this->set("selected_with_controller", 'content');
    }

    function index() {
        if ($this->front_is_root) {
            $this->dashboard_mall();
            return;
            die('ok');
        }
        $this->dashboard_store();
    }

    function dashboard_mall() {



        $this->render('dashboard_mall');
    }

    function dashboard_store() {
        $this->loadModel('ProductCategory');
        $this->loadModel('Product');
        
        $product_featured   = $this->Product->find('all', array('conditions' => array('site_id'=>$this->site_id),'order'=>'','limit'=>4));
        $product_latest     = $this->Product->find('all', array('conditions' => array('site_id'=>$this->site_id),'order'=>'','limit'=>4));
        $products_cat       = $this->ProductCategory->find('list', array('conditions' => array('site_id'=>$this->site_id)));
        
        $this->set('products_cat', $products_cat);
        $this->set('product_latest', $product_latest);
        $this->set('product_featured', $product_featured);

        $this->render('dashboard_store');
    }

    function dashboard() {

        if ($this->front_is_root) {
            unset($shared_conditions["Ad.site_id"]);
            $shared_conditions["Ad.add_type"] = array("Both", "Vmall Front");
        }
        $this->loadModel('Ad');
        $this->loadModel('Product');
        $shared_conditions = array(
            "Ad.status" => 1,
            "Ad.site_id" => $this->site_id,
                //  "Ad.end <" => date("Y-m-d H:m:s")
        );

        if ($this->front_is_root) {
            unset($shared_conditions["Ad.site_id"]);
            $shared_conditions["Ad.add_type"] = array("Both", "Vmall Front");
        }
        $conditions = array_merge(array('Ad.add_position' => 'top', 'Ad.content_type' => 'video'), $shared_conditions);
        $ad_header = $this->Ad->find('first', array('conditions' => $conditions, "order" => "rand()"));

        $conditions = array_merge(array('Ad.add_position' => 'left', 'Ad.content_type' => 'image'), $shared_conditions);
        $ad_left_side = $this->Ad->find('first', array('conditions' => $conditions, "order" => "rand()"));

        $conditions = array_merge(array('Ad.add_position' => 'right', 'Ad.content_type' => 'image'), $shared_conditions);
        $ad_right_side = $this->Ad->find('first', array('conditions' => $conditions, "order" => "rand()"));

        //$ads_content = $this->Product->find('all');
        $adSizes = $this->Ad->AdSize->find('list');
        $this->set(compact('addPositions', 'adSizes'));


        $this->loadModel("Product");
        $Products = $this->Product->find('all', array('conditions' => array('Product.status' => 1), "order" => "rand()"));
        //debug($Products);
        $this->set('Products', $Products);


        $this->set('ad_header', $ad_header);
        $this->set('ad_left_side', $ad_left_side);
        $this->set('ad_right_side', $ad_right_side);
    }

    function page($url = null) {

        if (in_array($url, $this->static_pages)) {
            $this->autoRender = true;
            $this->{"static_$url"}();
            return;
        }
        $this->MenuItem->bindModel(array('hasOne' => array('Page' => array(
                    'foreignKey' => false,
                    'conditions' => array('MenuItem.page_id = Page.id')
            ))));
        $page = $this->MenuItem->find('first', array("conditions" => array('MenuItem.url' => $url)));

        if (empty($page)) {
            $this->flashWarning('Invalid  page', 'dashboard');
        }
        $this->set('page', $page);
    }

    function static_contact_us() {
        $this->render('static_contact_us');
    }

    function static_about_us() {
        $this->render('static_about_us');
    }

    ################# ADMIN LYOUT ####

    function admin_index() {
        $search_siteLimit = array("Page.site_id" => $this->site_id);
        $conditions = array();
        if (!empty($this->data)) {
            $search = 'Page.' . $this->data["Site"]['Select'];
            $equal_cols = array('id',);
            if ($this->data["Site"]['Select'] == "site_id") {
                $sites = $this->Site->find('list', array());
                $site_id = array_search($this->data["Site"]['q'], $sites);
                $conditions = array($search => $site_id);
            } else
            if (in_array($this->data["Site"]['Select'], $equal_cols)) {
                $conditions = array($search => $this->data["Site"]['q']);
            } else {
                $conditions = array($search . ' LIKE' => '%' . trim($this->data["Site"]['q']) . '%');
            }
        }
        if (!$this->root_acc) {
            $conditions = array_merge($conditions, $search_siteLimit);
        }
        $this->paginate['conditions'] = $conditions;
        $settings_limit = $this->Session->read('settings_limit');
        $this->paginate['limit'] = $settings_limit;
        $this->Page->recursive = 0;
        $this->set('pages', $this->paginate());
        $this->set('options', $this->options);
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->flashWarning('Invalid  page', 'index');
        }
        $this->set('page', $this->Page->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Page->create();
            $this->data['Page']['site_id'] = (!$this->root_acc) ? $this->site_id : $this->data['Page']['site_id'];
            $this->data['Page']['url'] = Inflector::slug($this->data['Page']['title'], '-');
            if ($this->Page->save($this->data)) {
                $this->flashSuccess('The page has been saved', 'index');
            } else {
                $this->flashWarning('The page could not be saved. Please, try again.');
            }
        }
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->flashWarning('Invalid page', 'index');
        }
        if (!empty($this->data)) {
            $this->data['Page']['site_id'] = (!$this->root_acc) ? $this->site_id : $this->data['Page']['site_id'];
            $this->data['Page']['url'] = Inflector::slug($this->data['Page']['title'], '-');
            if ($this->Page->save($this->data)) {
                $this->flashSuccess('The page has been saved', 'index');
            } else {
                $this->flashWarning('The page could not be saved. Please, try again.');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Page->read(null, $id);
        }
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->flashWarning('Invalid id for page', 'index');
        }
        if ($this->Page->delete($id)) {
            $this->flashSuccess('page deleted', 'index');
        }
        $this->flashWarning('page was not deleted', 'index');
    }

}
