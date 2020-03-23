<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* {{snippet:begin_class}} */

class AdminLTEUserGroup extends Model
{

	/* {{snippet:begin_properties}} */

	protected $fillable = [
		'enabled',
		'title',
		'menu_permission',
		'service_permission',
		'widget_permission'
	];

	/* {{snippet:end_properties}} */

	/* {{snippet:begin_methods}} */

	/* {{snippet:end_methods}} */
}

/* {{snippet:end_class}} */