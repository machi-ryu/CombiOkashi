<?php
class Controller_Okashi extends Controller {

  public function action_index() {
    $okashis = Model_Okashi::find('all');
    $valuesOfView['okashis'] = $okashis;

    return Response::forge(View::forge('okashi/index', $valuesOfView));
  }

  public function action_add() {
    if (INPUT::method() === 'GET') {
      return Response::forge(View::forge('okashi/add'));
    }

    $okashi = Model_Okashi::forge();
    $okashi->name1 = INPUT::POST('name1');
    $okashi->img1 = 1;
    $okashi->name2 = INPUT::POST('name2');
    $okashi->img2 = 1;
    $okashi->taste = INPUT::POST('taste');
    $okashi->price = INPUT::POST('price');
    $okashi->surprise = INPUT::POST('surprise');
    $okashi->comment = INPUT::POST('comment');
    //$okashi->created_at = Date::forge()->format("%Y-%m-%d %H:%M:%S");
    //$okashi->updated_at = Date::forge()->format("%Y-%m-%d %H:%M:%S");
    $okashi->save();

    return Response::redirect('okashi/index');
  }
}
