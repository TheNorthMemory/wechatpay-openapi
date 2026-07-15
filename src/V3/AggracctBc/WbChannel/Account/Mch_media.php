<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\Account;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Mch_media
{
    /**
     * 查询商户影像件资料(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/account/mch_media
     */
    public function get(array $options = [
        'query' => [
            'mchid' => 'mchid_example',
            'platform_trx_id' => 'platform_trx_id_example',
            'business_scene' => 'SJT_MICRO_PLUS_OPEN_ACCOUNT',
            'mch_media_type' => 'ID_CARD_FRONT',
            'media_id' => 'media_id_example',
        ],
    ]): ResponseInterface;

    /**
     * 查询商户影像件资料(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/account/mch_media
     */
    public function getAsync(array $options = [
        'query' => [
            'mchid' => 'mchid_example',
            'platform_trx_id' => 'platform_trx_id_example',
            'business_scene' => 'SJT_MICRO_PLUS_OPEN_ACCOUNT',
            'mch_media_type' => 'ID_CARD_FRONT',
            'media_id' => 'media_id_example',
        ],
    ]): PromiseInterface;
}
