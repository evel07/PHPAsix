<?php
namespace App\Controllers;
use App\Models\Vehicle;
class VehiclesController {

    public function index() {
        $vehicles = vehicle::all();
        require '../resources/views/vehicles/index.blade.php';
    }

    public function create() {
        require '../resources/views/vehicles/create.blade.php';
    }

    public function store() {
        $model = $_POST['Model'];
        $year = $_POST['any'];
        $driver = $_POST['Conductor'];
        $max_speed= $_POST['Velocitat Màxima'];

        $newVehicle = new Vehicle([
            'model' => $model,
            'any' => $year,
            'author' => $driver,
            'Velocitat Màxima' => $max_speed,
        ]);
        $newVehicle->save();
        header('Location: /vehicles');
    }

    public function edit($id) {
        $vehicle = (new \App\Models\Vehicle)->find($id);
        if(!$vehicle) {
            header('Location: /vehicles');
            exit();
        }
        require '../resources/views/vehicles/edit.blade.php';
    }

    public function update($id) {
        $vehicle= (new \App\Models\Vehicle)->find($id);
        if(!$vehicle) {
            header('Location: /vehicles');
            exit();
        }
        $vehicle->model = $_POST['name'];
        $vehicle->year = $_POST['any'];
        $vehicle->driver = $_POST['Conductor'];
        $vehicle->max_speed = $_POST['Velocitat Màxima'];
        $vehicle->save();
        header('Location: /vehicles');
    }

    public function delete($id) {
        if ($id === null) {
            header('Location: /books');
            exit();
        }
        $vehicle = (new \App\Models\Vehicle)->find($id);
        return require '../resources/views/vehicles/delete.blade.php';
    }

    public function destroy($id) {
        (new \App\Models\Vehicle)->delete($id);
        header('Location: /vehicles');
    }

    public function confirmDelete($id) {
        $vehicle = (new \App\Models\Vehicle)->find($id);
        return require '../resources/views/vehicles/delete.blade.php';
    }
}