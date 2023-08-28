<?php
    namespace Model\Entities;

    use App\Entity;

    final class Post extends Entity{

        private $id;
        private $nom;

        public function __construct($data){         
            $this->hydrate($data);        
        }

        private function getId(){
            return $this->id;
        }
        private function setId($id){
            $this->id=$id;
            return $this;
        }
      
        public function getNom()
        {
                return $this->nom;
        }
        
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }
    }