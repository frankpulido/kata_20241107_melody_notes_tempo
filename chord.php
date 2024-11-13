<?php
declare(strict_types=1);

class Chord {
    //protected CONST notes = ['Do','Re','Mi','Fa','Sol','La','Si'];
    protected $notes = [];
    protected $tempos = [];
    protected $chord = [];

    function __construct(array $notes, array $tempos) {
        $this->notes = $notes;
        $this->tempos = $tempos;
        $this->chord = self::compose();
    }

    public function getNotes() : array {
        return $this->notes;
    }

    public function getTempos() : array {
        return $this->tempos;
    }

    public function setNotes($notes): void {
        $this->notes = $notes;
    }

    public function setTempos($tempos) : void {
        $this->tempos = $tempos;
    }

    public function compose () : array {
        $chord = array_combine($this->notes, $this->tempos);
        return $chord;
    }

    public function play() {
        foreach ($this->chord as $note=>$tempo) {
            echo $note . PHP_EOL;
            sleep((int) $tempo);
        }
    }
}
?>