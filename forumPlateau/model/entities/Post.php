<?php
    namespace Model\Entities;

    use App\Entity;

    final class Post extends Entity{

        private $id;
        private $dateCreation;
        private $text;
        private $user;
        private $topic;

        public function __construct($data){         
            $this->hydrate($data);        
        }

        private function getId(){
            return $this->id;
        }
        public function getDateCreation(){
            $formattedDate = $this->dateCreation->format("d/m/Y, H:i:s");
            return $formattedDate;
        }
        private function getText(){
            return $this->text ;
        }

        private function getUser(){
            return $this->user ;
        }
        private function getTopic(){
            return $this->topic ;
        }

        private function setId($id){
            $this->id=$id;
            return $this;
        }
      
        public function setDateCreation($date){
            $this->dateCreation = new \DateTime($date);
            return $this;
        }

        private function setText($text){
            $this->text=$text;
            return $this;
        }

        private function setUser($user){
            $this->user=$user;
            return $this;
        }

        private function setTopic($topic){
            $this->topic=$topic;
            return $this;
        }
       

       






    }