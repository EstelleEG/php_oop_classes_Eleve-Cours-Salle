<?php 

    class Cours {
        
        public int $id;
        public string $nom;
        public string $salleId;


        public function __construct(int $id, string $nom, int $salleId) {

            $this->setId($id);
            $this->setNom($nom);
            $this->setSalleId($salleId);
        }

        public function getId(): int {
            return $this->id;
        }

        public function getNom(): string {
            return $this->nom;
        }

        public function getSalleId(): int {
            return $this->salleId;
        }


        public function setId(int $id)
        {
            $this->id = $id; 
        }

        public function setNom(string $nom)
        {
            $this->nom = $nom; 
        }

        public function setSalleId(int $salleId)
        {
            $this->salleId = $salleId; 
        }

        
        // public function getCours(){
        //     $pdo = Db::getConnection();
        //     //SQL REQUEST : Get all eleves with coursId = 1
        //     $query = $pdo->query('SELECT * FROM Cours WHERE salle_id =' .$this->getSalleId());//id 3
           
        //     // I have an array of objects
        //     $cours = $query->fetchAll(); 
        //     echo '<pre>';
        //     var_dump($cours);
        //  }



        public function displayCours(){
            $pdo = Db::getConnection();
            $query = $pdo->query('SELECT * FROM Cours');
            //I have an array of objects
            $cours = $query->fetchAll(); 
            $this->getNom();
            echo "Aujourd'hui, nous avons cours de " .$this->nom;
        }
   

    

}