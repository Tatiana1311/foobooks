<?php

class Tag extends Eloquent {

	# Enable fillable on the 'name' column so we can use the Model shortcut Create
	protected $fillable = array('name');

    public function books() {
        # Tags belong to many Books
        return $this->belongsToMany('Book');
    }

}