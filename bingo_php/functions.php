<?php

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); //htmlspecialchars(エスケープする文字列, エスケープの種類, 文字コード);
}
