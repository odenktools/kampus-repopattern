<?php

/*
 * Step - 4
 */
namespace Odenktools\Kampus\Repositories\Eloquent;

use Illuminate\Contracts\Foundation\Application;

use Odenktools\Kampus\Contracts\Repositories\MahasiswaRepository;
use Odenktools\Kampus\Models\Mahasiswa;

/**
 * Class EloquentMahasiwaRepository
 *
 * Ini Class Encapsulasi agar model dapat dipanggil dari luar package
 * Note : Tambahkan fungsi disini...
 *
 * @package Odenktools\Kampus\Repositories\Eloquent
 */
class EloquentMahasiwaRepository extends AbstractEloquentRepository implements MahasiswaRepository
{
    /**
     * @param Application $app
     * @param Mahasiswa $model
     */
    public function __construct(Application $app, Mahasiswa $model)
    {
        parent::__construct($app, $model);
    }

    /**
     * Testing Code, Silahkan tambahkan code dibawah kedalam controller anda
     *
     * <code>
     * \Kampus::getMahasiswaModel()->create('testing@demo.com');
     * </code>
     *
     * @param $data
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

	/**
	 * [Hanya Sebuah Fungsi Tambahan]
	 *
	 * <code>
	 * echo json_encode(\Kampus::getMahasiswaModel()->mhsFindById(1));
	 * </code>
	 */
    public function mhsFindById($data)
    {
        return $this->model->findById($data);
    }
}