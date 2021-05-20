<?php

class Controller_Hello2 extends controller {
  public function action_index() {
    return View::forge('hello');
  }
}
