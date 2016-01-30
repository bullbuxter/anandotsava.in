<?php

class Events extends Eloquent {
  protected $table = 'events';
  protected $primaryKey = 'evId';
  protected $fillable = ['evName', 'evIntro', 'evRules', 'evCat'];
  public $timestamps = false;
  public function organizers() {
    return $this->hasMany('Organizer', 'evId');
  }
}
