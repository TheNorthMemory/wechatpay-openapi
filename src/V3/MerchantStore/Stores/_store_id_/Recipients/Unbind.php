<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantStore\Stores\_store_id_\Recipients;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Unbind
{
    /**
     * 解除门店收款信息绑定(同步模式)
     * @param array<string,mixed> $options
     * @link 该API接口可用于给一个特定的门店解除收款商户号。解除成功后，商户号不能再为门店收款。目前只支持解除此前收款方拒绝的收款商户号。
     */
    public function post(array $options = [
        'store_id' => '20488000',
        'json' => [
            'sub_mchid' => '1900000109',
            'store_recipient' => [[
                'mchid' => '',
                'company_name' => '',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 解除门店收款信息绑定(异步模式)
     * @param array<string,mixed> $options
     * @link 该API接口可用于给一个特定的门店解除收款商户号。解除成功后，商户号不能再为门店收款。目前只支持解除此前收款方拒绝的收款商户号。#async
     */
    public function postAsync(array $options = [
        'store_id' => '20488000',
        'json' => [
            'sub_mchid' => '1900000109',
            'store_recipient' => [[
                'mchid' => '',
                'company_name' => '',
            ],],
        ],
    ]): PromiseInterface;
}
