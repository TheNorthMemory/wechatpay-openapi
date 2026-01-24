<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Inspolicymgr\Deduct;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Authorizations\_out_insurance_no_ $_out_insurance_no_
 */
interface Authorizations
{
    /**
     * 提交保单授权信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/authorizations
     */
    public function post(array $options = [
        'json' => [
            'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
            'appid' => 'wxd678efh567hg6787',
            'plan_id' => '12535',
            'out_contract_code' => 'wxwtdk20200910100000',
            'insurance_name' => '微医保·百万医疗险',
        ],
    ]): ResponseInterface;

    /**
     * 提交保单授权信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/inspolicymgr/deduct/authorizations
     */
    public function postAsync(array $options = [
        'json' => [
            'out_insurance_no' => 'Auisihsiahishishi4hihsid123418id',
            'appid' => 'wxd678efh567hg6787',
            'plan_id' => '12535',
            'out_contract_code' => 'wxwtdk20200910100000',
            'insurance_name' => '微医保·百万医疗险',
        ],
    ]): PromiseInterface;
}
