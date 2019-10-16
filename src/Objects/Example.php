<?php

namespace NewApp\Objects;

use Kinikit\Persistence\ORM\ActiveRecord;

class Example extends ActiveRecord {

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * @required
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $submitted;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * @return \DateTime
     */
    public function getSubmitted() {
        return $this->submitted;
    }

    /**
     * Convert to a string rep
     *
     * @return string
     */
    public function getSubmittedString() {
        return $this->submitted ? $this->submitted->format("d/m/Y") : "N/A";
    }

}