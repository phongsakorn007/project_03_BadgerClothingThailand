<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Products extends Model

{

    use HasFactory;

    protected $teble = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = ['name','price','image','description','category_id'];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }
}