<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Eduschoolpay\Contracts\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 商户主动解约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/eduschoolpay/contracts/%7Bcontract_id%7D/terminate
     */
    public function post(array $options = [
        'contract_id' => '2045011120563805041758214605',
    ]): ResponseInterface;

    /**
     * 商户主动解约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/eduschoolpay/contracts/%7Bcontract_id%7D/terminate
     */
    public function postAsync(array $options = [
        'contract_id' => '2045011120563805041758214605',
    ]): PromiseInterface;
}
