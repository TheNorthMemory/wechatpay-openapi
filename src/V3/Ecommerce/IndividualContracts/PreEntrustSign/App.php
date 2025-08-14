<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\IndividualContracts\PreEntrustSign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface App
{
    /**
     * APP场景预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/pre-entrust-sign/app
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567h23787',
            'out_contract_code' => 'APPLYMENT_00000000001',
        ],
    ]): ResponseInterface;

    /**
     * APP场景预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/pre-entrust-sign/app
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567h23787',
            'out_contract_code' => 'APPLYMENT_00000000001',
        ],
    ]): PromiseInterface;
}
