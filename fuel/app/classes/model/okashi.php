<?php
class Model_Okashi extends Orm\Model {
  # テーブルに定義した全ての列を書く
  protected static $_properties = array('id', 'name1', 'img1', 'name2', 'img2', 'taste', 'price', 'surprise', 'comment', 'created_at', 'updated_at');
}
