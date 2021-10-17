## operator
### 管理者テーブル


|和名|属性名|型|PK|NN|FK|備考|
|:---|:---|:---|:---:|:---:|:---:|---|
|管理者ID|operator_id|int|@|@||auto|
|管理者名|operator_name|varchar(50)||@|||
|ログインID|operator_loginId|varchar(50)||@|||
|メールアドレス|operator_mail|varchar(50)||@||「@」マーク無しは弾く|
|電話番号|operator_tell||||@||
|作成日時|operator_created||@||||
|編集日時|operator_updated||@||||
|削除日時|operator_deleted||||||