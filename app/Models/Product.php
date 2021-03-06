<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const ACTIVE = 1;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'product';
  
    public function getAll()
    {
        return Product::orderBy('name','asc')->get();
    }
  
    public function getAllByCompanyId($company_id)
    {
        return Product::where('company_id','=',$company_id)
                        ->orderBy('name','asc')->get();
    }
}