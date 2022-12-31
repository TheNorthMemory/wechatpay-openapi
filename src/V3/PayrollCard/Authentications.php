<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Authentications\_authenticate_number_ $_authenticate_number_
 * @property-read Authentications\PreOrderWithAuth $preOrderWithAuth
 * @property-read Authentications\PreOrder $preOrder
 */
interface Authentications
{
    /**
     * 查询核身记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_5.shtml
     */
    public function get(array $options = [
        'query' => [
            'openid' => 'onqOjjmo8wmTOOtSKwXtGjg9Gb58',
            'appid' => 'wxa1111111',
            'sub_appid' => 'wxa1111111',
            'sub_mchid' => '1111111',
            'authenticate_date' => '2020-12-25',
            'authenticate_state' => 'AUTHENTICATE_SUCCESS',
            'offset' => 0,
            'limit' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 查询核身记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_5.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'openid' => 'onqOjjmo8wmTOOtSKwXtGjg9Gb58',
            'appid' => 'wxa1111111',
            'sub_appid' => 'wxa1111111',
            'sub_mchid' => '1111111',
            'authenticate_date' => '2020-12-25',
            'authenticate_state' => 'AUTHENTICATE_SUCCESS',
            'offset' => 0,
            'limit' => 10,
        ],
    ]): PromiseInterface;
}
