<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mch_operate\Risk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read WithdrawlApply\OutRequestNo $outRequestNo
 * @property-read WithdrawlApply\ApplymentId $applymentId
 */
interface WithdrawlApply
{
    /**
     * 提交已注销商户号可用余额提现申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch_operate/risk/withdrawl-apply
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_account_type' => 'BASIC_ACCOUNT',
            'amount' => 101,
            'out_request_no' => '2019061122222222122',
            'payee_type' => 'OTHER_MERCHANT',
            'payee_mchid' => '1900000109',
            'payee_info' => [
                'account_type' => 'ACCOUNT_TYPE_CORPORATE',
                'bank_account_info' => [
                    'account_name' => 'AOZdYGISxo4y44/UgZ69b0zZXkw==',
                    'account_bank' => '工商银行',
                    'bank_branch_id' => '402713354941',
                    'bank_name' => '402713354941',
                    'account_number' => 'd+xT+MQCvrLHeorwC+w==',
                ],
                'identity_info' => [
                    'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                    'identification_name' => 'pVd1HJ6zyvPedzfg==',
                    'identification_no' => 'AOZdYGISxo4y44/UgZ69bkw==',
                ],
            ],
            'proof_media_list' => [
                'proof_payee_media' => [[
                    'proof_media_type' => 'WECHAT_PAY_WITHDRAWAL_APPLICATION_TYPE_1',
                    'proof_media' => 'jTpGmxUX3FBWVQ5NJTZvlKXQ',
                ],],
            ],
            'additional_materials' => [
                'additional_media' => ['MediaId'],
            ],
            'remark' => '特殊理由',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 提交已注销商户号可用余额提现申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mch_operate/risk/withdrawl-apply
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_account_type' => 'BASIC_ACCOUNT',
            'amount' => 101,
            'out_request_no' => '2019061122222222122',
            'payee_type' => 'OTHER_MERCHANT',
            'payee_mchid' => '1900000109',
            'payee_info' => [
                'account_type' => 'ACCOUNT_TYPE_CORPORATE',
                'bank_account_info' => [
                    'account_name' => 'AOZdYGISxo4y44/UgZ69b0zZXkw==',
                    'account_bank' => '工商银行',
                    'bank_branch_id' => '402713354941',
                    'bank_name' => '402713354941',
                    'account_number' => 'd+xT+MQCvrLHeorwC+w==',
                ],
                'identity_info' => [
                    'id_doc_type' => 'IDENTIFICATION_TYPE_IDCARD',
                    'identification_name' => 'pVd1HJ6zyvPedzfg==',
                    'identification_no' => 'AOZdYGISxo4y44/UgZ69bkw==',
                ],
            ],
            'proof_media_list' => [
                'proof_payee_media' => [[
                    'proof_media_type' => 'WECHAT_PAY_WITHDRAWAL_APPLICATION_TYPE_1',
                    'proof_media' => 'jTpGmxUX3FBWVQ5NJTZvlKXQ',
                ],],
            ],
            'additional_materials' => [
                'additional_media' => ['MediaId'],
            ],
            'remark' => '特殊理由',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
