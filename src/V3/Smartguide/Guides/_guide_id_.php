<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Smartguide\Guides;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _guide_id_\Assign $assign
 */
interface _guide_id_
{
    /**
     * 服务人员信息更新(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/smartguide/guides/%7Bguide_id%7D
     */
    public function patch(array $options = [
        'guide_id' => 'LLA3WJ6DSZUfiaZDS79FH5Wm5m4X69TBic',
        'json' => [
            'sub_mchid' => '1234567890',
            'name' => '',
            'mobile' => '',
            'qr_code' => '',
            'avatar' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 服务人员信息更新(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/smartguide/guides/%7Bguide_id%7D
     */
    public function patchAsync(array $options = [
        'guide_id' => 'LLA3WJ6DSZUfiaZDS79FH5Wm5m4X69TBic',
        'json' => [
            'sub_mchid' => '1234567890',
            'name' => '',
            'mobile' => '',
            'qr_code' => '',
            'avatar' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
