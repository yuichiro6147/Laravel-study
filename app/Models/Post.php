<?php

class Post extends Eloquent{

    public function Comments(){
        // 投稿はたくさんのコメントを持つ
        return $this->hasMany('Comment', 'post_id');
    }

    public function Category(){
        // 投稿は1つのカテゴリーに属する
        return $this->belongsTo('Category','cat_id');
    }

}