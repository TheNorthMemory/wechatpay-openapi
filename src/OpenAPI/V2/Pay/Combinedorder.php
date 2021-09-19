<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Combinedorder
{
    /**
     * 合单下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/combine.php?chapter=24_1&index=2
     */
    public function post(array $options = [
        'xml' => [
            'combine_appid' => 'wx8888888888888888',
            'combine_mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'combine_out_trade_no' => '1217752501201407033233368018',
            'spbill_create_ip' => '8.8.8.8',
            'time_start' => '20171225091010',
            'time_expire' => '20171225091510',
            'notify_url' => 'http://www.weixin.qq.com/wxpay/pay.php',
            'trade_type' => 'JSAPI',
            'product_id' => '1234567890',
            'combine_openid' => '120061098828009406',
            'scene_info' => '{"h5_info": {"type":"IOS","app_name": "王者荣耀","bundle_id": "com.tencent.wzryIOS"}}',
            'sub_order_list' => '{"order_list": [{"appid": "wxdace645e0bc2c424","attach": "深圳分店","body": "子订单1","fee_type": "CNY","mch_id": "1900009001","out_trade_no": "OD201708030001","total_fee": 1234}],"order_num": 3}',
        ],
    ]): ResponseInterface;

    /**
     * 合单下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/combine.php?chapter=24_1&index=2#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'combine_appid' => 'wx8888888888888888',
            'combine_mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'sign_type' => 'HMAC-SHA256',
            'combine_out_trade_no' => '1217752501201407033233368018',
            'spbill_create_ip' => '8.8.8.8',
            'time_start' => '20171225091010',
            'time_expire' => '20171225091510',
            'notify_url' => 'http://www.weixin.qq.com/wxpay/pay.php',
            'trade_type' => 'JSAPI',
            'product_id' => '1234567890',
            'combine_openid' => '120061098828009406',
            'scene_info' => '{"h5_info": {"type":"IOS","app_name": "王者荣耀","bundle_id": "com.tencent.wzryIOS"}}',
            'sub_order_list' => '{"order_list": [{"appid": "wxdace645e0bc2c424","attach": "深圳分店","body": "子订单1","fee_type": "CNY","mch_id": "1900009001","out_trade_no": "OD201708030001","total_fee": 1234}],"order_num": 3}',
        ],
    ]): PromiseInterface;
}
