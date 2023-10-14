<?php
class Login extends Model{

    public function validate(){
        $errors = [];

        if(!$this->email){
            $errors['email'] = 'Email é obrigatorio';
        }

        if(!$this->password){
            $errors['password'] = 'Senha é obrigatoria';
        }

        if(count($errors) > 0) {
            throw new ValidationException($errors);
        }
    }

    public function checkLogin(){
        $this->validate();
        $user = User::getOne(['email' => $this->email]);
        if ($user) {
            if($user->end_date){
                throw new AppException('Usuario desligado da empresa');
            }

            if (password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new AppException('Usuario/Senha invalidos');
    }
}