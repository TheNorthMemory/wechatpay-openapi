<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantStore\Stores\_store_id_\Recipients;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Bind
{
    /**
     * 绑定门店收款信息(同步模式)
     * @param array<string,mixed> $options
     * @link 该API接口可用于给一个特定的门店添加收款商户号。添加绑定成功后，商户号可为门店收款。一个门店目前最多只能添加绑定三个收款商户号，且添加绑定收款主体必须与品牌主主体或已有收款商户主体保持一致。
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
     * 绑定门店收款信息(异步模式)
     * @param array<string,mixed> $options
     * @link 该API接口可用于给一个特定的门店添加收款商户号。添加绑定成功后，商户号可为门店收款。一个门店目前最多只能添加绑定三个收款商户号，且添加绑定收款主体必须与品牌主主体或已有收款商户主体保持一致。#async
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
