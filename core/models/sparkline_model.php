<?php
require 'core/models/model.php';
    class sparkline_model extends Model {    
        
        public function get_arrays(){
            $e1 = [];
            $e2 = [];
            $d1 = [];
            $d2 = [];

            for($i=0;$i<100;$i++){
                $x = $this->a->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->x;
                $e1[$x] = $this->a->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->y;
            }

            $this->e1 = $e1;

            for($i=0;$i<100;$i++){
                $x = $this->b->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->x;
                $e2[$x] = $this->b->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->y;
            }

            $this->e2=$e2;

            for($i=0;$i<100;$i++){
                $x = $this->a->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->x;
                $d1[$x] = $this->a->Charts->{'Strategy Equity'}->Series->{'Daily Performance'}->Values[$i]->y;
            }

            $this->d1=$d1;

            for($i=0;$i<100;$i++){
                $x = $this->b->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->x;
                $d2[$x] = $this->b->Charts->{'Strategy Equity'}->Series->{'Daily Performance'}->Values[$i]->y;
            }
            $this->d2=$d2;

        }
    }
