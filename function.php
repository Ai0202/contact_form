<?php

// 引数に渡された文字列をエスケープする関数
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
