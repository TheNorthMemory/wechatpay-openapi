<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sync
{
    /**
     * 交易信息回传(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/transactions/sync
     */
    public function post(array $options = [
        'json' => [
            'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'id_card_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'phone_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'appliance_id' => 1,
            'out_trade_no' => 'vmall_250120131959_993_4494',
            'energy_grade' => 'FIRST_LEVEL',
            'receive_region_code' => '110101',
            'brand' => '海尔',
            'address' => '深圳市南山区',
            'qualification_region_code' => 310100,
            'seller_name' => '联想（北京）信息技术有限公司',
            'license_number' => '91110108397173806M',
            'order_amount' => 10000,
            'discount_amount' => 2000,
            'transaction_time' => '2025-01-14T19:55:06+08:00',
            'mch_order_id' => '123456789',
            'refund_id' => '123456789',
            'mch_name' => '江苏京东信息技术有限公司',
            'sale_model' => 'SALE_MODEL_OFFLINE',
            'cate_state' => 'CATE_STATE_REDEEM',
            'identity_document_type' => 'ID_DOC_TYPE_ID_CARD',
            'sub_mchid' => '123456',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 交易信息回传(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/transactions/sync
     */
    public function postAsync(array $options = [
        'json' => [
            'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'id_card_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'phone_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'appliance_id' => 1,
            'out_trade_no' => 'vmall_250120131959_993_4494',
            'energy_grade' => 'FIRST_LEVEL',
            'receive_region_code' => '110101',
            'brand' => '海尔',
            'address' => '深圳市南山区',
            'qualification_region_code' => 310100,
            'seller_name' => '联想（北京）信息技术有限公司',
            'license_number' => '91110108397173806M',
            'order_amount' => 10000,
            'discount_amount' => 2000,
            'transaction_time' => '2025-01-14T19:55:06+08:00',
            'mch_order_id' => '123456789',
            'refund_id' => '123456789',
            'mch_name' => '江苏京东信息技术有限公司',
            'sale_model' => 'SALE_MODEL_OFFLINE',
            'cate_state' => 'CATE_STATE_REDEEM',
            'identity_document_type' => 'ID_DOC_TYPE_ID_CARD',
            'sub_mchid' => '123456',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
