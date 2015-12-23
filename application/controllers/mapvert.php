<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/26
 * Time: 16:01
 */
class Mapvert extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('mapvert');
    }

    /*百度地图坐标转化成腾讯地图坐标
     * @para $lat 纬度坐标
     * @para $lng 经度坐标
     * @return array
    */
    public function mapConvert($lat=35.232465,$lng=115.486744){
        $url = 'http://apis.map.qq.com/ws/coord/v1/translate?locations='.$lat.','.$lng.'&type=3&key=S4JBZ-EB23S-SNMOY-6JSML-AP7M6-RDFQV';
        $res = file_get_contents($url);
        var_dump($res);
    }
}