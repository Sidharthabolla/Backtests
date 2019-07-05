<?php
require 'core/models/model.php';
    class super_imposed_model extends Model {    
        public function get_arrays(){
            $e1 = [];
            $d1 = [];

            for($i=1;$i<101;$i++){
                $e1[$i] = '['.$this->a->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->x.",".
                            $this->a->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->y.']';
            }

            for($i=1;$i<101;$i++){
                $e2[$i] = '['.$this->b->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->x.",".
                            $this->b->Charts->{'Strategy Equity'}->Series->Equity->Values[$i]->y.']';
            }

            for($i=1;$i<101;$i++){
                $d1[$i] = '['.$this->a->Charts->{'Strategy Equity'}->Series->{'Daily Performance'}->Values[$i]->x.",".
                            $this->a->Charts->{'Strategy Equity'}->Series->{'Daily Performance'}->Values[$i]->y.",".
                            $this->b->Charts->{'Strategy Equity'}->Series->{'Daily Performance'}->Values[$i]->y.']';
            }

            $this->e1=$e1;
            $this->e2=$e2;
            $this->d1=$d1;
        }
    }