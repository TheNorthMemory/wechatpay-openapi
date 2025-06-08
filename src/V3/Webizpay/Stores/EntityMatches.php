<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Stores;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read EntityMatches\_batch_id_ $_batch_id_
 */
interface EntityMatches
{
    /**
     * 发起门店主体匹配(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/stores/entity-matches
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '12341234',
            'out_batch_id' => 'batch12345678',
            'match_details' => [[
                'organization_code' => '91110000710926094P',
                'store_name' => '微信小店',
                'product_type' => 'CODE_PAY',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 发起门店主体匹配(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/stores/entity-matches
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '12341234',
            'out_batch_id' => 'batch12345678',
            'match_details' => [[
                'organization_code' => '91110000710926094P',
                'store_name' => '微信小店',
                'product_type' => 'CODE_PAY',
            ],],
        ],
    ]): PromiseInterface;
}
