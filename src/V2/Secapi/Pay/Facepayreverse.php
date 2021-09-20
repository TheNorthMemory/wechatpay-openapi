<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Facepayreverse
{
    /**
     * 撤销订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://share.weiyun.com/5dxUgCw
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 撤销订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://share.weiyun.com/5dxUgCw#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000100',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): PromiseInterface;
}
