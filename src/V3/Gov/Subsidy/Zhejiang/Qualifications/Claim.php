<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\Qualifications;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Claim
{
    /**
     * 领取资格(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/qualifications/claim
     */
    public function post(array $options = [
        'json' => [
            'cate_code' => 'A01',
            'cert_no' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'tel' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'cert_type' => '1',
            'req_ssn' => '123',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 领取资格(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/qualifications/claim
     */
    public function postAsync(array $options = [
        'json' => [
            'cate_code' => 'A01',
            'cert_no' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'tel' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'cert_type' => '1',
            'req_ssn' => '123',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
