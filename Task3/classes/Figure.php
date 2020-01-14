<?php

    class Figure
    {
        protected $type = '';
        public function getType() {
            if ($this->type == '') {
                return 'Не определен';
            } else {
                return $this->type;
            }
        }
    }