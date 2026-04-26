<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\IndividualContracts\PreEntrustSign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface MiniProgram
{
    /**
     * 小程序场景预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/pre-entrust-sign/mini-program
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567h23787',
            'out_contract_code' => 'APPLYMENT_00000000001',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        ],
    ]): ResponseInterface;

    /**
     * 小程序场景预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/pre-entrust-sign/mini-program
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567h23787',
            'out_contract_code' => 'APPLYMENT_00000000001',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        ],
    ]): PromiseInterface;
}
