<?php

    namespace OOP;
    class Transportas{
        public $modelis = "";
        public $marke = "";
        public $kaina = 0;
        public $svoris = 0;
        public $galingumas = "";
        public $yraVariklis = false;
        public $maxGreitis = 0;
        public $aprasymas = "";
        public $maxZmoniu = 0;

        public function __construct($modelis, $marke){
            $this->modelis = $modelis;
            $this->marke = $marke;
            echo $this->modelis;
            echo "<br/>";
            echo $this->marke;
        }


        public function keistiTransportas($modelis, $marke, $kaina, $svoris, $yraVariklis,$galingumas,$maxGreitis,$aprasymas,$maxZmoniu ){
            if(!$modelis == null){
                $this->modelis = $modelis;
            }
            if(!$marke == null){
                $this->marke = $marke;
            }
            if(!$kaina == null){
            $this->kaina = $kaina;
            }
            if(!$svoris == null){
        $this->svoris = $svoris;
            }
            if(!$yraVariklis == null){
            $this->yraVariklis = $yraVariklis;
            }
            if(!$galingumas == null){
            $this->galingumas = $galingumas;
            }
            if(!$maxGreitis == null){
            $this->maxGreitis = $maxGreitis;
            }
            if(!$aprasymas == null){
            $this->aprasymas = $aprasymas;
            }
            if(!$maxZmoniu == null){
            $this->maxZmoniu = $maxZmoniu;
            }
        }

        public function keistiTransportoMMKS($modelis, $marke, $kaina, $svoris){
            $this->modelis = $modelis;
            $this->marke = $marke;
            $this->kaina = $kaina;
            $this->svoris = $svoris;
            echo "pakeista";
            echo "<br>";
        }

        public function paziuretiArYraVariklis(){
            if($this->yraVariklis === true){
                    echo "<br>";
                echo "variklis yra:";
                echo "<br/>";
                echo "jo galingumas: ". $this->galingumas;
                echo "<br/>";
                echo "jo max greitis: ". $this->maxGreitis;
                echo "<br/>";
                echo "jo aprasymas: ". $this->aprasymas;
                echo "<br/>";
                echo "kiek zmoniu telpa: ". $this->maxZmoniu;
                
            }else{
                    echo "<br>";
                echo "variklio nera.";
            }
        }

        public function gautiViska(){
            echo "<br>";
            return ["MODELIS"=> $this->modelis, "MARKE"=> $this->marke, "KAINA"=> $this->kaina, "SVORIS"=> $this->svoris, "GALINGUMAS"=> $this->galingumas, "AR_YRA_VARIKLIS"=> $this->yraVariklis, "MAXGREITIS"=> $this->maxGreitis, "APRASYMAS"=> $this->aprasymas, "MAX_ZMONIU"=> $this->maxZmoniu];
        }

    }