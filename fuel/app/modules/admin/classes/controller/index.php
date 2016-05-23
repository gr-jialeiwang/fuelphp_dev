<?php
namespace admin;

class Controller_Index extends \Controller
{
    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index()
    {
//        if(!\Auth::check()) {
//            echo 'ログインしていません。更新するとログインします。';
//            \Auth::login('admin', 'ladmin1'); // ログイン処理
//        } else {
//            $name = \Auth::get_screen_name();
//            echo 'ようこそ'.$name.'さん！';
//        }
        
        return \Response::forge(\View::forge('index/index'));
    }
}
