<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'title',
        'description',
        'price',
       
    ];

    public function category(){

        return $this->belongsTo(Category::class);
    }
    
public function user(){


    return $this->belongsTo(User::class);
}

public function setAccepted($value){
$this->is_accepted = $value;
$this->save();
return true;

}

public static function toBeRevisionedCount(){

return Announcement::where('is_accepted', null)->count();

}

   
}
