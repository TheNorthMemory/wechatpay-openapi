<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Profitsharingaddreceiver
{
    /**
     * 添加分账接收方(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/allocation_sl.php?chapter=25_3&index=4
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'sign_type' => 'HMAC-SHA256',
            'receiver' => '{"type": "MERCHANT_ID","account": "190001001","name": "示例商户全称","relation_type": "STORE_OWNER"}',
        ],
    ]): ResponseInterface;

    /**
     * 添加分账接收方(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/allocation_sl.php?chapter=25_3&index=4#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'sign_type' => 'HMAC-SHA256',
            'receiver' => '{"type": "MERCHANT_ID","account": "190001001","name": "示例商户全称","relation_type": "STORE_OWNER"}',
        ],
    ]): PromiseInterface;
}
