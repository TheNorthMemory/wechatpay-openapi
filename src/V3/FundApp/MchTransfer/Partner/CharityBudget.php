<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read CharityBudget\_out_budget_no_ $_out_budget_no_
 */
interface CharityBudget
{
    /**
     * 申请公益捐赠预算(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-budget
     */
    public function post(array $options = [
        'json' => [
            'out_budget_no' => 'budget202506300102',
            'sponsor_mchid' => '1900001109',
            'sponsor_subject_name' => '腾讯控股有限公司',
            'activity_name' => '公益企业配捐活动',
            'activity_remark' => '公益活动开始于9月1日，帮助困难儿童筹款活动',
            'amount' => 20000000,
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): ResponseInterface;

    /**
     * 申请公益捐赠预算(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-budget
     */
    public function postAsync(array $options = [
        'json' => [
            'out_budget_no' => 'budget202506300102',
            'sponsor_mchid' => '1900001109',
            'sponsor_subject_name' => '腾讯控股有限公司',
            'activity_name' => '公益企业配捐活动',
            'activity_remark' => '公益活动开始于9月1日，帮助困难儿童筹款活动',
            'amount' => 20000000,
            'notify_url' => 'https://www.weixin.qq.com/wxpay/pay.php',
        ],
    ]): PromiseInterface;
}
