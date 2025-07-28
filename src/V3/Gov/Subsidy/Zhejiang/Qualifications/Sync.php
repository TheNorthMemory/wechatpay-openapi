<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\Qualifications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sync
{
    /**
     * 核销资格(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/qualifications/sync
     */
    public function post(array $options = [
        'json' => [
            'req_ssn' => '123',
            'data' => [[
                'auth_code' => '0be5f8c9071ad939651948480316da8a2d610833bb63bf67c78fdee5edd5aea1',
                'cate_code' => 'A01',
                'cert_no' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
                'grade' => '一级 | 二级',
                'name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
                'operation_time' => '',
                'bank_name' => '',
                'bank_subsidy' => '',
                'plat_subsidy' => '',
                'sales' => '',
                'status' => '0 | 1',
                'subsidy' => '',
                'tel' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
                'add_code' => '330000',
                'address' => '',
                'sale_models' => '0 | 1',
                'sn_code' => '',
                'uniscid' => '',
                'corp_name' => '',
                'barcode' => '',
                'item_name' => '',
                'spec_model' => '',
                'brand' => '',
                'logistics_no' => '',
                'delivery_time' => '',
                'invoice_no' => '',
                'is_ai_product' => '',
                'pc_type' => '',
                'order_no' => '',
                'origin_order_no' => '',
                'activity_add_code' => '',
                'imei1' => '',
                'imei2' => '',
                'ccc_sn_order_no' => '',
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 核销资格(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/qualifications/sync
     */
    public function postAsync(array $options = [
        'json' => [
            'req_ssn' => '123',
            'data' => [[
                'auth_code' => '0be5f8c9071ad939651948480316da8a2d610833bb63bf67c78fdee5edd5aea1',
                'cate_code' => 'A01',
                'cert_no' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
                'grade' => '一级 | 二级',
                'name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
                'operation_time' => '',
                'bank_name' => '',
                'bank_subsidy' => '',
                'plat_subsidy' => '',
                'sales' => '',
                'status' => '0 | 1',
                'subsidy' => '',
                'tel' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
                'add_code' => '330000',
                'address' => '',
                'sale_models' => '0 | 1',
                'sn_code' => '',
                'uniscid' => '',
                'corp_name' => '',
                'barcode' => '',
                'item_name' => '',
                'spec_model' => '',
                'brand' => '',
                'logistics_no' => '',
                'delivery_time' => '',
                'invoice_no' => '',
                'is_ai_product' => '',
                'pc_type' => '',
                'order_no' => '',
                'origin_order_no' => '',
                'activity_add_code' => '',
                'imei1' => '',
                'imei2' => '',
                'ccc_sn_order_no' => '',
            ],],
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
