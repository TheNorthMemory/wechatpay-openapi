<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Qualifications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Query
{
    /**
     * 批量查询用户资格(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/qualifications/query
     */
    public function post(array $options = [
        'json' => [
            'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'id_card_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'phone_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'qualification_region_code' => 310100,
            'identity_document_type' => 'ID_DOC_TYPE_ID_CARD',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 批量查询用户资格(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/qualifications/query
     */
    public function postAsync(array $options = [
        'json' => [
            'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'id_card_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'phone_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'qualification_region_code' => 310100,
            'identity_document_type' => 'ID_DOC_TYPE_ID_CARD',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
