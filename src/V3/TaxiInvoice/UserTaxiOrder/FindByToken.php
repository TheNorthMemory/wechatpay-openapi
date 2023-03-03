<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice\UserTaxiOrder;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface FindByToken
{
    /**
     * 根据凭证查询乘客行程单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/user-taxi-order/query-user-taxi-order-by-token.html
     */
    public function get(array $options = [
        'query' => [
            'token' => 'ESvqG19gjw0qiiy1eeRA4VusLrOmIYQOMJ8rXX2V-ztUUuQvu_YBEZg9FAht0Y15r71mft9rcaMIjn7y6x0KSg',
            'openid' => 'oUypO5fUvaUkyuc6ueOwgwDMjCiM',
            'appid' => 'wxb1170446a4c0a5a2',
            'region_id' => 310100,
            'auth_mode' => 'ORDER_AUTH',
        ],
    ]): ResponseInterface;

    /**
     * 根据凭证查询乘客行程单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/taxi-fapiao/user-taxi-order/query-user-taxi-order-by-token.html#async
     */
    public function getAsync(array $options = [
        'query' => [
            'token' => 'ESvqG19gjw0qiiy1eeRA4VusLrOmIYQOMJ8rXX2V-ztUUuQvu_YBEZg9FAht0Y15r71mft9rcaMIjn7y6x0KSg',
            'openid' => 'oUypO5fUvaUkyuc6ueOwgwDMjCiM',
            'appid' => 'wxb1170446a4c0a5a2',
            'region_id' => 310100,
            'auth_mode' => 'ORDER_AUTH',
        ],
    ]): PromiseInterface;
}
