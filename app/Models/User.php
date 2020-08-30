<?php

namespace App\Models;

use App\Datatables\DatatableModelTrait;
use App\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Yajra\DataTables\EloquentDataTable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, DatatableModelTrait;

    protected $fillable = [
        'name',
        'email',
        'document',
        'rg',
        'phone',
        'address',
        'filiate_code',
        'birthdate',
        'password',
        'role_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function isSuperUser()
    {
        return Auth::check() && Auth::user()->id === 1;
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function fill(array $attributes)
    {
        !isset($attributes['password']) ? null : $attributes['password'] = bcrypt($attributes['password']);
        return parent::fill($attributes);
    }

    private function datatableRoutePrefix(): string
    {
        return "admin.users";
    }

    private function datatableConstruct(): EloquentDataTable
    {
        $datatable = $this->datatableMake();

        $datatable->editColumn('role_name', function ($row) {
            return $row->role->name;
        });

        $datatable->editColumn('created_at', function ($row) {
            return $row->created_at ? $row->created_at->format('d/m/Y - H:i:s') : null;
        });

        $datatable->editColumn('updated_at', function ($row) {
            return $row->updated_at->format('d/m/Y - H:i:s');
        });

        return $datatable;
    }

    private function datatableQuery(): Builder
    {
        return $this->query()->with('role');
    }

    private function datatableColumns(): array
    {
        return [
            ['data' => 'id'],
            ['data' => 'name'],
            ['data' => 'email'],
            ['data' => 'role_name', 'name' => 'role_id'],
            ['data' => 'filiate_code'],
            ['data' => 'created_at'],
            ['data' => 'updated_at'],
        ];
    }

    public function getJWTIdentifier()
    {
        return $this->id;
    }

    public function getJWTCustomClaims()
    {
        return [
            'name' => $this->name
        ];
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

}
