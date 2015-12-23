<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/26
 * Time: 16:05
 */
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>百度地图坐标转腾讯地图</title>
    <meta name="description" content="个人笔记.">
    <meta name="author" content="梅江">
    <style type="text/css">
        .content{text-align: center;}
        table {color: #fff}
    </style>
</head>
<body>
<div class="content">
    <div class="title">坐标转换接口</div>
    <div class="table">
        <table border="0" cellspacing="5" bgcolor="#a52a2a" cellpadding="5">
        <tr>
            <th>参数</th>
            <th>说明</th>
        </tr>
        <tr>
            <td>url</td>
            <td>http://apis.map.qq.com/ws/coord/v1/translate</td>
        </tr>
        <tr>
            <td>方式</td>
            <td>get</td>
        </tr>
        <tr>
            <td>location</td>
            <td>预转换的坐标，支持批量转换，
                格式：纬度前，经度后，纬度和经度之间用","分隔，每组坐标之间使用";"分隔；
                批量支持坐标个数以HTTP GET方法请求上限为准</td>

        </tr>
        <tr>
            <td>type</td>
            <td>1 GPS坐标;
                2 sogou经纬度;
                3 baidu经纬度;
                4 mapbar经纬度;
                5 [默认]腾讯、google、高德坐标;
                6 sogou墨卡托
            </td>
        </tr>
        </table>
    </div>
</div>

</body>
</html>
