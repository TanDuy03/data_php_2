<?php
    namespace app\core;
    class Field{
        public const TYPE_TEXT = 'text';
        public const TYPE_PASSWORD = 'password';
        public const TYPE_NUMBER = 'number';

        public string $type;
        public string $attribute;

        public function __construct(string $attribute){
            $this->type = self::TYPE_TEXT;
            $this->attribute = $attribute;
        }
        public function __toString(){
            return sprintf('
                <div class="form-group">
                    <label>%s</label>
                    <input type="%s" name="%s" style="border:1px solid #ccc; margin-bottom:10px; height:25px; border-radius:5px; outline:none;">
                </div>
            ', 
            $this->getLabel($this->attribute), 
            $this->type,
            $this->attribute
            );
        }
        public function passwordField(){
            $this->type = self::TYPE_PASSWORD;
            return $this;
        }
        public function sdtField(){
            $this->type = self::TYPE_NUMBER;
            return $this;
        }
        public function arrayName(){
            $this->type = self::TYPE_TEXT;
            return $this;
        }
        public function labels():array{
            return [
                'first_name' => 'First Name',
                'last_name' => 'Last Name',
                'email' => 'Email',
                'password' => 'Password',
                'confirmPassword' => 'Confirm Password',
                'SDT' => 'SDT',
                'address' => 'address',
            ];
        }
        public function getLabel($attribute){
            return $this->labels()[$attribute] ?? $attribute;
        }
    }
?>