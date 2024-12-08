<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Vehicle\Etc\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _contract_id_
{
    /**
     * 通过商户ETC绑定号查询签约状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/contracts/%7Bcontract_id%7D
     */
    public function get(array $options = [
        'contract_id' => 'aAfixCs13LsdKPpfZfDkk2189ssXjfx',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 通过商户ETC绑定号查询签约状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/contracts/%7Bcontract_id%7D
     */
    public function getAsync(array $options = [
        'contract_id' => 'aAfixCs13LsdKPpfZfDkk2189ssXjfx',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
