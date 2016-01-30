<?php
class Participant extends Eloquent {
  public $timestamps = false;
  public function collDetails() {
    return $this->belongsTo('CollDetails', 'cId');
  }
}
