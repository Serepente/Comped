<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowed extends Model
{
    use HasFactory;

    protected $table = 'borrowed'; // Define the table name

    protected $fillable = [
        'user_id',
        'borrower_name',
        'borrowed_item',
        'quantity',
        'admin_id',
        'status',
        'date_issued',
        'return_date',
    ];

    /**
     * Relationship: A borrowed item belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

