<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Vehicle\Etc\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Contracts
{
    /**
     * 查询ETC签约状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/users/%7Bopenid%7D/contracts
     */
    public function get(array $options = [
        'openid' => 'onqOjjmM1tad-3ROpncN-yUfa6ua',
        'query' => [
            'sub_mchid' => '1900000109',
            'plan_id' => '123',
            'plate_number' => '浙ASB945',
        ],
    ]): ResponseInterface;

    /**
     * 查询ETC签约状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/users/%7Bopenid%7D/contracts
     */
    public function getAsync(array $options = [
        'openid' => 'onqOjjmM1tad-3ROpncN-yUfa6ua',
        'query' => [
            'sub_mchid' => '1900000109',
            'plan_id' => '123',
            'plate_number' => '浙ASB945',
        ],
    ]): PromiseInterface;
}
