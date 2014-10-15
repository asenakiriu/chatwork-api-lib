<?php
/**
 * Created by PhpStorm.
 * User: asenakiriu
 * Date: 2014/10/16
 * Time: 0:24
 */

class Config {

    protected $_api_token = '***********************';

    protected $_api_base_url = 'https://api.chatwork.com/';

    protected $_api_version = 'v1';


    /**
     * get api_token
     * @return string
     */
    public function getApiToken() {
        return $this->_api_token;
    }

    public function get_api_base_url() {
        return $this->_api_base_url;
    }

    public function gt_end_point_url() {
        return $this->_api_base_url.'/'.$this->_api_version;
    }

} 