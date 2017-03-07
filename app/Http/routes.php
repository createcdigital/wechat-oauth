<?php

Route::get('jssdk', 'WeChatController@jssdk');

Route::group(['middleware' => ['web', 'wechat.oauth']], function () {
    Route::get('oauth', 'WeChatController@oauth');
});