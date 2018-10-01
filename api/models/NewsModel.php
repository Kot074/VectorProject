<?php
    class NewsModel {
        private $title;
        private $body;
        private $date;
        private $id;

        public function __construct($title, $body, $id = -1)
        {
            $this->id = $id;
            $this->title = $title;
            $this->body = $body;
            $this->date = date("d/m/Y H:i");
        }

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @param mixed $title
         */
        public function setTitle($title)
        {
            $this->title = $title;
        }

        /**
         * @return mixed
         */
        public function getBody()
        {
            return $this->body;
        }

        /**
         * @param mixed $body
         */
        public function setBody($body)
        {
            $this->body = $body;
        }

        /**
         * @return mixed
         */
        public function getDate()
        {
            return $this->date;
        }

        /**
         * @param mixed $date
         */
        public function setDate($date)
        {
            $this->date = $date;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return associate array
         */
        public function toArray() {
            return array("id" => $this->id, "title" => $this->title, "body" => $this->body, "date" => $this->date);
        }
    }
?>