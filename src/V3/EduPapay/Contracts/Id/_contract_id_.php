<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduPapay\Contracts\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _contract_id_
{
    /**
     * 通过协议号查询签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_2.shtml
     */
    public function get(array $options = [
        'contract_id' => 'wx998877665544wx',
        'query' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
        ],
    ]): ResponseInterface;

    /**
     * 通过协议号查询签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_2.shtml#async
     */
    public function getAsync(array $options = [
        'contract_id' => 'wx998877665544wx',
        'query' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
        ],
    ]): PromiseInterface;
}
