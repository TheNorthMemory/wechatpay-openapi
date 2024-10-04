<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardActivity\Activities\_activity_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 终止活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/membership-card/member-gift/terminating-activity.html
     */
    public function post(array $options = [
        'activity_id' => '371067',
    ]): ResponseInterface;

    /**
     * 终止活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/membership-card/member-gift/terminating-activity.html#async
     */
    public function postAsync(array $options = [
        'activity_id' => '371067',
    ]): PromiseInterface;
}
