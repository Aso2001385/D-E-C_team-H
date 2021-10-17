# ゲスト

|和名|属名|型|PK|NN|FK|備考|
|:---|:---|:---|:---:|:---:|:---|:---|
|ゲストID|guest_id|int|@|@||auto|
|利用者ID|guest_user_id|int||@|@||
|フォロー数|guest_follow|int||||
|制作した時間|created|datetime||@|||


CREATE TABLE `guest` (
  `guest_id` int NOT NULL primary key AUTO_INCREMENT,
  `guest_user_id` int NOT NULL,
  `guest_follow` int NOT NULL DEFAULT '0',
  `created` datetime NOT NULL
)