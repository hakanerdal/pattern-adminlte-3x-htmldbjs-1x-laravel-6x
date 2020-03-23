<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* {{snippet:begin_class}} */

class AdminLTEUserLayout extends Model
{

	/* {{snippet:begin_properties}} */

	protected $fillable = [
		'adminlteuser_id',
		'pagename',
		'widgets'
	];

	/* {{snippet:end_properties}} */

	/* {{snippet:begin_methods}} */

	/* {{snippet:end_methods}} */
}

/* {{snippet:end_class}} */