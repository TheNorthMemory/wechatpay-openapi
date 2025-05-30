<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\Recharges\OutRechargeNo\_out_recharge_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Close
{
    /**
     * 关闭二级商户充值(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharges/out-recharge-no/%7Bout_recharge_no%7D/close
     */
    public function post(array $options = [
        'out_recharge_no' => 'cz2020042013',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): ResponseInterface;

    /**
     * 关闭二级商户充值(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharges/out-recharge-no/%7Bout_recharge_no%7D/close
     */
    public function postAsync(array $options = [
        'out_recharge_no' => 'cz2020042013',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): PromiseInterface;
}
