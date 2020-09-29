<?php
    class Birds {
        public $commonName;
        public $habitat;
        public $food;
        public $nest;
        public $behavior;
        public $backyard;
        protected $conservation_id;

        protected const CONSERVATION_OPTIONS = [
            1 => 'Low concern',
            2 => 'Moderate concern',
            3 => 'High concern',
            4 => 'Extreme concern'
        ];

        public function __construct($args=[]) {
            $this->commonName = $args['commonName'] ?? '';
            $this->habitat = $args['habitat'] ?? '';
            $this->food = $args['food'] ?? '';
            $this->nest = $args['nest'] ?? '';
            $this->behavior = $args['behavior'] ?? '';
            $this->conservation = $args['conservation'] ?? '';
            $this->backyard = $args['backyard'] ?? '';
            $this->conservation_id = $args['conservation_id'] ?? 1;
          }

          public function conservation_level() {
            if($this->conservation_id > 0) {
              return self::CONSERVATION_OPTIONS[$this->conservation_id];
            } else {
              return "Unknown";
            }
          }
    }
    
?>