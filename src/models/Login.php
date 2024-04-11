<?php
loadModel('User');

class login extends Model {


    public function checkLogin() {
        $user = User::getOne(['email' => $this->email]);
        if($user) {
            if($user->end_date) {
                throw new AppException('Usuário está desligado da empresa');
            }

            if(password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new AppException('Usuário e senha Inválidos');
    }
}