<?php 

    class Eleve {
        
        public int $id;
        public string $nom;
        public string $prenom;
        public int $age;
        public int $coursId;
        //public Cours $cours;//object


        public function __construct(int $id, string $nom, string $prenom, int $coursId) {

            $this->setId($id);
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setCoursId($coursId);
            $this->setAge(20); //set by default, everytime I create an object
            //$this->cours = $cours; //object

        }

        public function getId(): int {
            return $this->id;
        }

        public function getAge(): int {
            return $this->age;
        }

        public function getNom(): string {
            return $this->nom;
        }

        public function getPrenom(): string {
            return $this->prenom;
        }

        public function getCoursId(): int {
            return $this->coursId;
        }

        // public function getCours(): Cours
        // {
        //     return $this->cours;
        // }


        public function setId(int $id)
        {
            $this->id = $id; 
        }

        public function setNom(string $nom)
        {
            $this->nom = $nom; 
        }

        public function setPrenom(string $prenom)
        {
            $this->prenom = $prenom; 
        }

        public function setAge(int $age)
        {
            $this->age = $age; 
        }

        public function setCoursId(int $coursId)
        {
            $this->coursId = $coursId; 
        }

        // public function setCours(Cours $cours) 
        // {
        //     $this->cours = $cours;
        // }



        //METHODS
        public function getElevesByCoursId(){

            $pdo = Db::getConnection();

            //SQL REQUEST : Get all eleves with coursId = 1
            //$query = $pdo->query('SELECT * FROM Eleve');
            $query = $pdo->query('SELECT * FROM Eleve WHERE cours_id =' .$this->getCoursId());//id 1

            // I have an array of objects
            $eleve = $query->fetchAll(); 
           
            //parse the array with foreach and make each email an object
            $elevesArray = array();

            foreach($eleve as $el){
                //I loop on each eleve and i fetch each input
                $id = $el['id']; //['sql']
                $nom = $el['nom'];
                $prenom = $el['prenom'];
                $coursId = $el['cours_id'];

                //create objects
                $elevesObjects = new Eleve($id, $nom, $prenom, $coursId);

                //add each object into the array
                array_push($elevesArray, $elevesObjects);
            }
            return $elevesArray;


        }

        // display one eleve with nom prenom
        // public function displayOneEleve(){
        //     echo $this->getPrenom();
        //     echo' ';
        //     echo $this->getNom();
        //     echo'<br>';

        // }

        // public function displayAgeNextYear(){
        //     $this->setAge($this->getAge()+1);
        //     echo $this->getAge();
        // }

    }