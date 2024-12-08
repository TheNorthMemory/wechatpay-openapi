<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Submchmanage
{
    /**
     * 银行特约商户录入/银行特约商户资料查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/submchmanage
     */
    public function post(array $options = [
        'security' => true,
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'merchant_name' => '商户名称',
            'sub_mch_id' => '1230000109',
            'page_index' => '1',
            'page_size' => '10',
        ],
        'nonceless' => true,
        'query' => [
            'action' => 'add | query',
        ],
    ]): ResponseInterface;

    /**
     * 银行特约商户录入/银行特约商户资料查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/submchmanage
     */
    public function postAsync(array $options = [
        'security' => true,
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'merchant_name' => '商户名称',
            'sub_mch_id' => '1230000109',
            'page_index' => '1',
            'page_size' => '10',
        ],
        'nonceless' => true,
        'query' => [
            'action' => 'add | query',
        ],
    ]): PromiseInterface;
}
