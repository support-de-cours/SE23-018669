<?php 
// class Point 
// { 
    // public int|null $x = null; 
//     public int $y; 
//     public int $z; 
    
//     public function __construct( int $x = 0, int $y = 0, int $z = 0, ) 
//     { 
//         $this->x = $x; 
//         $this->y = $y; 
//         $this->z = $z; 
//     } 
// }

class Point { 
    public function __construct( 
        public int $x = 0, 
        public int $y = 0, 
        public int $z = 0, 
    ) {} 
}


$pt = new Point(10, 42, 25);