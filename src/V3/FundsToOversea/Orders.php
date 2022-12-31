<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundsToOversea;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Orders\_out_order_id_ $_out_order_id_
 */
interface Orders
{
    /**
     * 申请资金出境(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_10_2.shtml
     */
    public function post(array $options = [
        'json' => [
            'out_order_id' => 'merchant_1123123',
            'sub_mchid' => '123456',
            'transaction_id' => '420000000000000010',
            'amount' => 10,
            'foreign_currency' => 'USD',
            'goods_info' => [[
                'goods_name' => '橘子',
                'goods_category' => '家用电器',
                'goods_unit_price' => 1,
                'goods_quantity' => 1,
            ],],
            'seller_info' => [
                'oversea_business_name' => '香港xxxx公司',
                'oversea_shop_name' => '香港xxx公司xxx店铺',
                'seller_id' => 'id2123123123',
            ],
            'express_info' => [
                'courier_number' => 'curier_number_1231',
                'express_company_name' => '国际xxx物流',
            ],
            'payee_info' => [
                'payee_id' => 'ID123112312',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 申请资金出境(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter7_10_2.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_order_id' => 'merchant_1123123',
            'sub_mchid' => '123456',
            'transaction_id' => '420000000000000010',
            'amount' => 10,
            'foreign_currency' => 'USD',
            'goods_info' => [[
                'goods_name' => '橘子',
                'goods_category' => '家用电器',
                'goods_unit_price' => 1,
                'goods_quantity' => 1,
            ],],
            'seller_info' => [
                'oversea_business_name' => '香港xxxx公司',
                'oversea_shop_name' => '香港xxx公司xxx店铺',
                'seller_id' => 'id2123123123',
            ],
            'express_info' => [
                'courier_number' => 'curier_number_1231',
                'express_company_name' => '国际xxx物流',
            ],
            'payee_info' => [
                'payee_id' => 'ID123112312',
            ],
        ],
    ]): PromiseInterface;
}
