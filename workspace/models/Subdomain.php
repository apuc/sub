<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 11.12.19
 * Time: 22:30
 */

namespace workspace\models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Subdomain
 * @package workspace\models
 *
 * @property string $name
 * @property string $region
 * @property string $phone
 */
class Subdomain extends Model
{

    public $timestamps = false;
    protected $table = "subdomains";
    protected $fillable = ['name', 'region' , 'phone'];
}