<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Reply extends Model
{

    protected $table = 'reply';

    public function getReply($tweet_id,$tweet_replyCount)
    {
        $tweet_replyCount = 5;
        // var_dump([$tweet_id,$tweet_replyCount]);
        // exit();

        $selectColumn = ['user.user_id','user.user_iconText','user.user_iconColor',
        'user.user_iconBack','user.user_iconFrame','template.template_word'];

        $replys = DB::table($this->table)->join('user',function($join){
            $join->on('reply.reply_user_id','=','user.user_id');
        })->join('template',function($join){
            $join->on('reply.reply_template_id','=','template.template_id');
        })->where('reply.reply_tweet_id',$tweet_id)->limit($tweet_replyCount)->get($selectColumn);

        return $replys;

    }
}