<?php

namespace App\Models\Contact;

use App\Models\Account\Account;
use App\Models\ModelBindingHasher as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'documents';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Get the account record associated with the document.
     *
     * @return BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the contact record associated with the document.
     *
     * @return BelongsTo
     */
    public function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
}
