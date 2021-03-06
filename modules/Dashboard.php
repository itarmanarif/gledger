<?php
namespace modules;

use libraries\FontEnd;

class Dashboard {
    private $database = null;
    protected $page_title = null;
    protected $module_script = null;
    protected $module_style = null;
    private $errors = array();
    private $obj_users = null;

    public function __construct() {
        $this->page_title = "Dashboard";
        $this->module_script = $this->define_script();
        $this->module_style = $this->define_style();
        $this->obj_users = new Users();
    }

    public function get_view(){
        include PAGE_DIR . 'dashboard.php';
    }

    public function get_title(){
        return $this->page_title;
    }

    public function get_script(){
        return $this->module_script;
    }

    public function get_style(){
        return $this->module_style;
    }

    public function set_error($error){
        array_push($this->errors, $error);
    }

    public function get_errors(){
       return $this->errors;
    }




    public function define_script(){
        $script = FontEnd::jquery_ui('js');
        $script .= FontEnd::sweetalert2();
        $script .= FontEnd::alertify('js');
        return $script;
    }
    public function define_style(){
        $stylesheets = FontEnd::jquery_ui('css');
        $stylesheets .= FontEnd::alertify('css');
        $stylesheets .= FontEnd::alertify('theme');
        return $stylesheets;
    }

}