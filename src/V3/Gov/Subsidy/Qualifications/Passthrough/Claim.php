<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Qualifications\Passthrough;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Claim
{
    /**
     * 领取资格(透传模式)(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/qualifications/passthrough/claim
     */
    public function post(array $options = [
        'json' => [
            'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'id_card_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'phone_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'appliance_id' => 1,
            'qualification_region_code' => 310100,
            'identity_document_type' => 'ID_DOC_TYPE_ID_CARD',
            'longitude' => '',
            'latitude' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 领取资格(透传模式)(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/qualifications/passthrough/claim
     */
    public function postAsync(array $options = [
        'json' => [
            'real_name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'id_card_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'phone_number' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'appliance_id' => 1,
            'qualification_region_code' => 310100,
            'identity_document_type' => 'ID_DOC_TYPE_ID_CARD',
            'longitude' => '',
            'latitude' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
