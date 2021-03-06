<?php
    /**
     * Copyright (c) 2020. Def Studio (assistenza@defstudio.it)
     */

    namespace DefStudio\Html\Elements\Attributes;

    use Illuminate\Support\ViewErrorBag;
    use Session;

    trait ChecksError{

        public function checks_error($name){
            /** @var ViewErrorBag $errors */
            $errors = Session::get('errors');
            if(!empty($errors)){
                if(!empty($name)){
                    if($errors->has($name)){
                        return $this->class('is-invalid');
                    }
                }
            }

            return $this;
        }

        private function build_error_message(array $errors): string{
            $html = "";

            foreach($errors as $message){
                $html .= "<div>$message</div>";
            }

            return "<div class='input-error-container'>$html</div>";
        }

    }
