<?php
use Illuminate\Hashing\Bcrypthasher;

class MD5Hasher extends Bcrypthasher
{
public function check($value, $hashedValue, array $options = array())
   {
      $user = User::wherePassword(md5($value))->first();
      return $user ? true : false;
    }

}
?>
