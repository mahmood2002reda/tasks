<?php
class Email{

    
    public function __construct(string $email){
        $this-> email=$email;
    }
    public function getEmail(){
        return $this->email ;
    }
}
 