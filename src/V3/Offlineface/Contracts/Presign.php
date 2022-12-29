<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Presign
{
    /**
     * 预签约接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html
     */
    public function post(array $options = [
        'json' => [
            'business_name' => '',
            'facepay_user' => [
                'out_user_id' => '',
                'identification_name' => '',
                'organization_id' => '',
                'identification' => [
                    'identification_type' => 'IDCARD',
                    'identification_number' => '',
                ],
                'phone' => '',
            ],
            'limit_bank_card' => [
                'bank_card_number' => '',
                'identification_name' => '',
                'identification' => [
                    'identification_type' => 'IDCARD',
                    'identification_number' => '',
                ],
                'valid_thru' => '',
                'bank_type' => '',
                'phone' => '',
            ],
            'contract_mode' => 'LIMIT_BANK_CARD | PRIORITY_BANK_CARD | LIMIT_NONE',
        ],
    ]): ResponseInterface;

    /**
     * 预签约接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'business_name' => '',
            'facepay_user' => [
                'out_user_id' => '',
                'identification_name' => '',
                'organization_id' => '',
                'identification' => [
                    'identification_type' => 'IDCARD',
                    'identification_number' => '',
                ],
                'phone' => '',
            ],
            'limit_bank_card' => [
                'bank_card_number' => '',
                'identification_name' => '',
                'identification' => [
                    'identification_type' => 'IDCARD',
                    'identification_number' => '',
                ],
                'valid_thru' => '',
                'bank_type' => '',
                'phone' => '',
            ],
            'contract_mode' => 'LIMIT_BANK_CARD | PRIORITY_BANK_CARD | LIMIT_NONE',
        ],
    ]): PromiseInterface;
}
