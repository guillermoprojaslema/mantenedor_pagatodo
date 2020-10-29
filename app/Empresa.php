<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $categoriaempresa_id
 * @property string $nombre
 * @property string $funcion
 * @property integer $pago_parcial
 * @property integer $pago_abono
 * @property string $contacto_nombre
 * @property string $contacto_fono
 * @property boolean $opcion_numero_recibo
 * @property boolean $opcion_observacion
 * @property boolean $opcion_numero_cliente
 * @property string $impresion_layout
 * @property boolean $recarga_fija
 * @property boolean $opcion_cedula
 * @property boolean $activo
 * @property string $email
 * @property int $visa_id
 * @property string $imagen
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Categoriaempresa $categoriaempresa
 * @property CargoPorServicio[] $cargoPorServicios
 * @property Cedula[] $cedulas
 * @property Cedulasciti[] $cedulascitis
 * @property Cobro[] $cobros
 * @property ComisionesEmpresa[] $comisionesEmpresas
 * @property ComisionesRecaudadora[] $comisionesRecaudadoras
 * @property Contadore[] $contadores
 * @property Cuenta[] $cuentas
 * @property DepositValue[] $depositValues
 * @property Empleado[] $empleados
 * @property EmployeePartner[] $employeePartners
 * @property EmpresasOpcionesrecarga[] $empresasOpcionesrecargas
 * @property Historicocobro[] $historicocobros
 * @property IdentificadorcobrosEmpresa[] $identificadorcobrosEmpresas
 * @property Intranetranking[] $intranetrankings
 * @property LogPartner[] $logPartners
 * @property MediopagosEmpresa[] $mediopagosEmpresas
 * @property Oficina[] $oficinas
 * @property Pago[] $pagos
 * @property Pagosbk[] $pagosbks
 * @property PartnerItem[] $partnerItems
 * @property PaymentsAmount[] $paymentsAmounts
 * @property Promocione[] $promociones
 * @property QueueSetting[] $queueSettings
 * @property Recarga[] $recargas
 * @property RecaudadorasEmpresa[] $recaudadorasEmpresas
 * @property ResponseMessage[] $responseMessages
 * @property ResponseMessagesWebservice[] $responseMessagesWebservices
 * @property Seguro[] $seguros
 * @property ServiciosEmpresa[] $serviciosEmpresas
 */
class Empresa extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['categoriaempresa_id', 'nombre', 'funcion', 'pago_parcial', 'pago_abono', 'contacto_nombre', 'contacto_fono', 'opcion_numero_recibo', 'opcion_observacion', 'opcion_numero_cliente', 'impresion_layout', 'recarga_fija', 'opcion_cedula', 'activo', 'email', 'visa_id', 'imagen', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoriaempresa()
    {
        return $this->belongsTo('App\Categoriaempresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cargoPorServicios()
    {
        return $this->hasMany('App\CargoPorServicio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cedulas()
    {
        return $this->hasMany('App\Cedula');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cedulascitis()
    {
        return $this->hasMany('App\Cedulasciti');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cobros()
    {
        return $this->hasMany('App\Cobro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comisionesEmpresas()
    {
        return $this->hasMany('App\ComisionesEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comisionesRecaudadoras()
    {
        return $this->hasMany('App\ComisionesRecaudadora');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contadores()
    {
        return $this->hasMany('App\Contadore');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuentas()
    {
        return $this->hasMany('App\Cuenta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function depositValues()
    {
        return $this->hasMany('App\DepositValue', 'partner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employeePartners()
    {
        return $this->hasMany('App\EmployeePartner', 'partner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empresasOpcionesrecargas()
    {
        return $this->hasMany('App\EmpresasOpcionesrecarga');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historicocobros()
    {
        return $this->hasMany('App\Historicocobro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function identificadorcobrosEmpresas()
    {
        return $this->hasMany('App\IdentificadorcobrosEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function intranetrankings()
    {
        return $this->hasMany('App\Intranetranking');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logPartners()
    {
        return $this->hasMany('App\LogPartner', 'partner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mediopagosEmpresas()
    {
        return $this->hasMany('App\MediopagosEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function oficinas()
    {
        return $this->hasMany('App\Oficina');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Pago');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagosbks()
    {
        return $this->hasMany('App\Pagosbk');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partnerItems()
    {
        return $this->hasMany('App\PartnerItem', 'partner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsAmounts()
    {
        return $this->hasMany('App\PaymentsAmount', 'partner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function promociones()
    {
        return $this->hasMany('App\Promocione');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function queueSettings()
    {
        return $this->hasMany('App\QueueSetting', 'partner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recargas()
    {
        return $this->hasMany('App\Recarga');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recaudadorasEmpresas()
    {
        return $this->hasMany('App\RecaudadorasEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responseMessages()
    {
        return $this->hasMany('App\ResponseMessage', 'partner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responseMessagesWebservices()
    {
        return $this->hasMany('App\ResponseMessagesWebservice', 'partner_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seguros()
    {
        return $this->hasMany('App\Seguro');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function serviciosEmpresas()
    {
        return $this->hasMany('App\ServiciosEmpresa');
    }
}
