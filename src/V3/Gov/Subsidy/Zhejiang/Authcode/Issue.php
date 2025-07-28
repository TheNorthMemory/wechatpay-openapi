<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\Authcode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Issue
{
    /**
     * 申请品类凭证码(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/authcode/issue
     */
    public function post(array $options = [
        'json' => [
            'category_id' => 'A01',
            'openid' => '',
            'name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'mobile' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'add_code' => '330000',
            'custom_info' => '',
            'cert_type' => '1',
            'cert_no' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'req_ssn' => '123',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 申请品类凭证码(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/authcode/issue
     */
    public function postAsync(array $options = [
        'json' => [
            'category_id' => 'A01',
            'openid' => '',
            'name' => 'OEimkKuua8igpd+0YDgqF2Z61l=',
            'mobile' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/nunesXwq9ogPnSj7EDA==',
            'add_code' => '330000',
            'custom_info' => '',
            'cert_type' => '1',
            'cert_no' => '1axtI9EZUr0343c89xQznxau+cRWPKP4YhVAoj/mEoNSgJh0nvuqQJ1cdL==',
            'req_ssn' => '123',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
