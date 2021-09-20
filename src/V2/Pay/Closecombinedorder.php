<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Closecombinedorder
{
    /**
     * 合单关单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/combine.php?chapter=24_2&index=3
     */
    public function post(array $options = [
        'xml' => [
            'combine_appid' => 'wx8888888888888888',
            'combine_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'combine_out_trade_no' => '1217752501201407033233368018',
            'sub_order_list' => '{"order_list": [{"appid": "wxdace645e0bc2c424","mch_id": "1900009001","out_trade_no": "OD201708030001","sub_appid": "wxdace645e0bc2c423","sub_mch_id": 1900009002}],"order_num": 3}',
        ],
    ]): ResponseInterface;

    /**
     * 合单关单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/combine.php?chapter=24_2&index=3#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'combine_appid' => 'wx8888888888888888',
            'combine_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'combine_out_trade_no' => '1217752501201407033233368018',
            'sub_order_list' => '{"order_list": [{"appid": "wxdace645e0bc2c424","mch_id": "1900009001","out_trade_no": "OD201708030001","sub_appid": "wxdace645e0bc2c423","sub_mch_id": 1900009002}],"order_num": 3}',
        ],
    ]): PromiseInterface;
}
