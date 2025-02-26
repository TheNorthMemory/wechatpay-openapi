<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Realname;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Verify
{
    /**
     * 实名信息校验(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/realname/verify
     */
    public function get(array $options = [
        'query' => [
            'credential_type' => 1,
            'encrypted_credential_id' => 'InhziTSUwVqxfKp9M5nGCSjF395VL',
            'encrypted_name' => 'InhziTSUwVqxfKp9M5nGCSjF395VL',
            'wxp_trade_no' => '442100010320250122523549415021',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 实名信息校验(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/realname/verify
     */
    public function getAsync(array $options = [
        'query' => [
            'credential_type' => 1,
            'encrypted_credential_id' => 'InhziTSUwVqxfKp9M5nGCSjF395VL',
            'encrypted_name' => 'InhziTSUwVqxfKp9M5nGCSjF395VL',
            'wxp_trade_no' => '442100010320250122523549415021',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
