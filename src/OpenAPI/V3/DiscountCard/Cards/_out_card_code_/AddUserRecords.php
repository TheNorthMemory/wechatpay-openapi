<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\DiscountCard\Cards\_out_card_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface AddUserRecords
{
    /**
     * 增加用户记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/discount-card/chapter3_2.shtml
     */
    public function post(array $options = [
        'out_card_code' => '',
        'json' => [
            'card_template_id' => '87789b2f25177433bcbf407e8e471f95',
            'objective_completion_records' => [],
            'reward_usage_records' => [],
        ],
    ]): ResponseInterface;

    /**
     * 增加用户记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/discount-card/chapter3_2.shtml#async
     */
    public function postAsync(array $options = [
        'out_card_code' => '',
        'json' => [
            'card_template_id' => '87789b2f25177433bcbf407e8e471f95',
            'objective_completion_records' => [],
            'reward_usage_records' => [],
        ],
    ]): PromiseInterface;
}
