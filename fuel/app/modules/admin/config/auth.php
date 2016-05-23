<?php
return array(
    // ドライバ
    'driver' => array('Simpleauth'),

    // 複数ログインを有効にする場合、 true
    'verify_multiple_logins' => true,

    // セキュリティのために、ソルトを設定しましょう
    'salt' => 'admin_auth',
    
    'iterations' => 10000,
);