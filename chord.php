<?php
declare(strict_types=1);

class Chord {
    // CONST notes = ['Do','Re','Mi','Fa','Sol','La','Si'];
    protected array $notes;
    protected array $tempos;
    protected array $chord;

    function __construct(array $notes = [], array $tempos = []) {
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
        if (count($this->notes) == count($this->tempos)) { self::compose(); }
    }

    public function setTempos($tempos) : void {
        $this->tempos = $tempos;
        if (count($this->notes) == count($this->tempos)) { self::compose(); }
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