<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\GoodsSubsidyActivity\Activity\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 门店报名品牌加价购活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/retail-store/introduction.html
     */
    public function post(array $options = [
        'activity_id' => '',
        'json' => [
            'caller_merchant_id' => '',
            'apply_infos' => [[
                'store_info' => [
                    'store_id' => '',
                    'accounting_merchant_id' => '',
                    'merchant_id' => '',
                ],
                'goods_original_price' => 0,
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 门店报名品牌加价购活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/products/retail-store/introduction.html#async
     */
    public function postAsync(array $options = [
        'activity_id' => '',
        'json' => [
            'caller_merchant_id' => '',
            'apply_infos' => [[
                'store_info' => [
                    'store_id' => '',
                    'accounting_merchant_id' => '',
                    'merchant_id' => '',
                ],
                'goods_original_price' => 0,
            ],],
        ],
    ]): PromiseInterface;
}
