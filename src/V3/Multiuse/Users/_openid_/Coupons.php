<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Multiuse\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Coupons
{
    /**
     * 发放指定批次的消费金(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/multiuse/users/%7Bopenid%7D/coupons
     */
    public function post(array $options = [
        'openid' => '',
        'json' => [
            'stock_id' => '9856000',
            'out_request_no' => '8956000202407191254642',
            'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'id_card_number' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'amount' => 10000,
            'appid' => 'wx233544546545989',
            'card_type' => 'ID_CARD',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 发放指定批次的消费金(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/multiuse/users/%7Bopenid%7D/coupons
     */
    public function postAsync(array $options = [
        'openid' => '',
        'json' => [
            'stock_id' => '9856000',
            'out_request_no' => '8956000202407191254642',
            'user_name' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'id_card_number' => '757b340b45ebef5467rter35gf464344v3542sdf4t6re4tb4f54ty45t4yyry45',
            'amount' => 10000,
            'appid' => 'wx233544546545989',
            'card_type' => 'ID_CARD',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
