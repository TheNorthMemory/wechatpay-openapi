<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\BankPoints\Activity\_activity_id_\Users;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Remove
{
    /**
     * 移除活动目标人群(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank-points/activity/%7Bactivity_id%7D/users/remove
     */
    public function post(array $options = [
        'activity_id' => 'activity_id_example',
        'json' => [
            'contract_id' => ['example_contract_id'],
        ],
    ]): ResponseInterface;

    /**
     * 移除活动目标人群(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/bank-points/activity/%7Bactivity_id%7D/users/remove
     */
    public function postAsync(array $options = [
        'activity_id' => 'activity_id_example',
        'json' => [
            'contract_id' => ['example_contract_id'],
        ],
    ]): PromiseInterface;
}
