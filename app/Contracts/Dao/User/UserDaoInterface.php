<?php

namespace App\Contracts\Dao\User;

interface UserDaoInterface
{
  //get user list
  public function getUserList();

  //insert user
  public function userInsert($request);

  //delete user
  public function userDelete($id);
}
