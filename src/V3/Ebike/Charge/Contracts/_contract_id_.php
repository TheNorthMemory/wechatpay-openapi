<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ebike\Charge\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _contract_id_\Confirm $confirm
 */
interface _contract_id_
{
    /**
     * 通过签约号查询用户状态(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2019.12.16
     * @link https://wechatpay.im/openapi/v3/ebike/charge/contracts/%7Bcontract_id%7D
     */
    public function get(array $options = [
        'contract_id' => 'aAfixCs13LsdKPpfZfDkk2189ssXjfx',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 通过签约号查询用户状态(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2019.12.16
     * @link https://wechatpay.im/openapi/v3/ebike/charge/contracts/%7Bcontract_id%7D
     */
    public function getAsync(array $options = [
        'contract_id' => 'aAfixCs13LsdKPpfZfDkk2189ssXjfx',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
