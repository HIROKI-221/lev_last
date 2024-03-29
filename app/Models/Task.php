<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
        
    }
    
    protected $fillable = [
        'title',
        ];
        
    public $timestamps = false;
    
    public function records()
    {
        return $this->hasMany(Record::class);
    }
    
    public function getByCategory(int $limit_count = 5)
    {
        return $this->records()->with('task')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
