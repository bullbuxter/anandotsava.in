<?php
class CollDetails extends Eloquent {
  public $table = 'coll_details';
  public $timestamps = false;
  protected $fillable = ['name', 'place', 'caName', 'caPhone'];
  public function participants() {
    return $this->hasMany('Participant', 'cId', 'id');
  }
}
