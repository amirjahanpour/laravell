<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModels extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "state",
        "city",
        "resume",
        "img",
        "phone",
        "mobile"
    ]; // age in nabashe be raveshe man nemitoni data ezafe koni

    public function citys()
    {
        return $this->belongsTo(cities::class, "city", "id");
    }

    public function provinces()
    {
        return $this->belongsTo(provinces::class, "state", "id");
    }
}
