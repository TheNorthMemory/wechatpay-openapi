# 微信支付OpenAPI接口文档

整理自[微信支付官方文档](https://pay.weixin.qq.com/wiki/doc/apiv3/index.shtml)

## 自有语法糖规则

| URI | 模版变量 | 值 | 说明
| --- | --- | --- | ---
| `v2/secapi/mch/{addinstitutionsub}` | `{addinstitutionsub}` | `addInstitutionsub` | URI上有大写字符
| `v2/secapi/mch/{modifyinstitutionsub}` | `{modifyinstitutionsub}` | `modifyInstitutionsub` | URI上有大写字符
| `v2/secapi/mch/{queryinstitutionsub}` | `{queryinstitutionsub}` | `queryInstitutionsub` | URI上有大写字符
| `v3/applyment4sub/applyment/{stub}` | `{stub}` | | 固定值，空字符串，构造末尾是`/`需要
| `v3/ecommerce/subsidies/{return}` | `{return}` | `return` | 固定值，`return`为PHP语法关键字
| `v3/marketing/busifavor/coupons/{return}` | `{return}` | `return` | 固定值，`return`为PHP语法关键字
| `v3/marketing/busifavor/coupons/{use}` | `{use}` | `use` | 固定值，`use`为PHP语法关键字
## License

[MIT](LICENSE)
