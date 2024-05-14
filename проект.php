class Player {
    private $score;

    public function __construct() {
        $this->score = 0;
    }

    public function getScore() {
        return $this->score;
    }

    public function addScore($points) {
        $this->score += $points;
    }

    public function setScore($score) {
        $this->score = $score;
    }
}

class Room {
    private $type;
    private $visited;

    public function __construct($type) {
        $this->type = $type;
        $this->visited = false;
    }

    public function getType() {
        return $this->type;
    }

    public function isVisited() {
        return $this->visited;
    }

    public function visit() {
        $this->visited = true;
    }
}

class Dungeon {
    private $rooms;
    private $player;
    private $startRoom;
    private $exitRoom;

    public function __construct($rooms, $startRoom, $exitRoom) {
        $this->rooms = $rooms;
        $this->player = new Player();
        $this->startRoom = $startRoom;
        $this->exitRoom = $exitRoom;
    }

    public function getPlayer() {
        return $this->player;
    }

    public function movePlayer($room) {
        if ($room->getType() == 'monster') {
            
        } elseif ($room->getType() == 'treasure') {
            
        }

        $room->visit();
    }

    public function play() {
        $this->movePlayer($this->startRoom);

        
    }
}