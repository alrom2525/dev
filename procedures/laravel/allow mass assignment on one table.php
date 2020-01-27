Add [name] to fillable property to allow mass assignment on [App\Product]. 
->To allow mass assignment on one table
1.1) in the model, we need to declare which column will be fillable 
with the vartype protected.
Example:
	class Service extends Model
	{
	    // To allow mass assignment on [App\Service]
	    // we need to declare which column will be fillable
	    protected $fillable = ['name'];
	}

2.2) other option is to specifies in the model, the type protected $guarded,
that set to off the mass assignment protection.
Example: 
	class Service extends Model
	{    
	    // Second method: guarded by default saves every single field
	    protected $guarded = [];
	}
