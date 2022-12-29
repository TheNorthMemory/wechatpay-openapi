<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Transactions\Id\_transaction_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Close
{
    /**
     * 关闭订单(微信支付订单号)(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter3_2_7.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'transaction_id' => '1217752501201407033233368018',
        'json' => [
            'mchid' => '1230000109',
            'sub_mchid' => '1230000109',
            'sp_mchid' => '1230000109',
        ],
    ]): ResponseInterface;

    /**
     * 关闭订单(微信支付订单号)(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter3_2_7.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'transaction_id' => '1217752501201407033233368018',
        'json' => [
            'mchid' => '1230000109',
            'sub_mchid' => '1230000109',
            'sp_mchid' => '1230000109',
        ],
    ]): PromiseInterface;
}
