<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\CombinePapay\Contracts\PreEntrustSign;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface MiniProgram
{
    /**
     * 小程序方式预签约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/combine-papay/contracts/pre-entrust-sign/mini-program
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'contract_display_account' => '微信代扣用户A',
            'notify_url' => 'https://yourapp.com/notify',
        ],
    ]): ResponseInterface;

    /**
     * 小程序方式预签约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/combine-papay/contracts/pre-entrust-sign/mini-program
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'plan_id' => 12535,
            'out_contract_code' => 'wxwtdk20200910100000',
            'contract_display_account' => '微信代扣用户A',
            'notify_url' => 'https://yourapp.com/notify',
        ],
    ]): PromiseInterface;
}
