<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Vehicle\Etc;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Preopen
{
    /**
     * 预开通用户ETC指定卡扣费(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/preopen
     */
    public function post(array $options = [
        'json' => [
            'sp_appid' => '10000098',
            'sub_appid' => 'wxcbda96de0b165489',
            'sub_mchid' => '1510770601',
            'openid' => 'ot35_4gNgXsUuh2sQY0lT9N08AU0',
            'plan_id' => '97619',
            'etc_device_id' => 'xxxxxxx',
            'plate_number' => '藏ZZZZZZ',
            'identify' => [
                'encrypted_real_name' => 'LOX6jBeRlK/TErW6DqEM8JFHX4iL3Rlj2vqaEqktvw1KVjgmQ==',
                'encrypted_credential_id' => 't85SAX3GxVYqGQm2Q8cfeFd1dWy40j4s7XpIds8Glw83HG3vN9Q==',
                'credential_type' => 'ID_CARD',
            ],
            'bank_card_no' => 'K/TErW6DqEM8JFHX4iL3Rlj2vqaEqktvw1KVjgmQ==',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 预开通用户ETC指定卡扣费(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/preopen
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_appid' => '10000098',
            'sub_appid' => 'wxcbda96de0b165489',
            'sub_mchid' => '1510770601',
            'openid' => 'ot35_4gNgXsUuh2sQY0lT9N08AU0',
            'plan_id' => '97619',
            'etc_device_id' => 'xxxxxxx',
            'plate_number' => '藏ZZZZZZ',
            'identify' => [
                'encrypted_real_name' => 'LOX6jBeRlK/TErW6DqEM8JFHX4iL3Rlj2vqaEqktvw1KVjgmQ==',
                'encrypted_credential_id' => 't85SAX3GxVYqGQm2Q8cfeFd1dWy40j4s7XpIds8Glw83HG3vN9Q==',
                'credential_type' => 'ID_CARD',
            ],
            'bank_card_no' => 'K/TErW6DqEM8JFHX4iL3Rlj2vqaEqktvw1KVjgmQ==',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
