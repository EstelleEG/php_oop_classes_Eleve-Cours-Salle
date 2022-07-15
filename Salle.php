<?php 

    class Salle {
        
        public int $id;
        public int $num;
    
        public function __construct(int $id, int $num) {
            $this->setId($id);
            $this->setNum($num);
        }

        public function getId(): int {
            return $this->id;
        }

        public function getNum(): int {
            return $this->num;
        }


        public function setId(int $id)
        {
            $this->id = $id; 
        }

        public function setNum(int $num)
        {
            $this->num = $num; 
        }

        public function getSalle(){
            $pdo = Db::getConnection();
            //SQL REQUEST : Get all Salles with coursId = 1
            $query = $pdo->query('SELECT * FROM Salle WHERE num =' .$this->getNum());//num 23
            // I have an array of objects
            $salle = $query->fetchAll(); 
            echo '<pre>';
            var_dump($salle);

        }


    }