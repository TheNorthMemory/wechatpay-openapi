<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Eduschoolpay\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _contract_id_\Terminate $terminate
 */
interface _contract_id_
{
    /**
     * 通过协议号查询签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/eduschoolpay/contracts/%7Bcontract_id%7D
     */
    public function get(array $options = [
        'contract_id' => '2045011120563805041758214605',
    ]): ResponseInterface;

    /**
     * 通过协议号查询签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/eduschoolpay/contracts/%7Bcontract_id%7D
     */
    public function getAsync(array $options = [
        'contract_id' => '2045011120563805041758214605',
    ]): PromiseInterface;
}
