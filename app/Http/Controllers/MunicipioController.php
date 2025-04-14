<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function getMunicipiosGuatemala(Request $request)
    {
        $departamento = $request->input('estado');

        $municipiosGuatemala = [
            'Guatemala' => [
                'Guatemala',
                'Mixco',
                'Villa Nueva',
                'San Miguel Petapa',
                'Santa Catarina Pinula',
                'San José del Golfo',
                'Palencia',
                'Chinautla',
                'San Juan Sacatepéquez',
                'Fraijanes',
                'Amatitlán',
                'Villa Canales',
                'San José Pinula'
            ],
            'Alta Verapaz' => [
                'Cobán',
                'San Cristóbal Verapaz',
                'Santa Cruz Verapaz',
                'Tactic',
                'Raxruha',
                'Chisec'
            ],
            'Baja Verapaz' => [
                'Salamá',
                'San Miguel Chicaj',
                'Rabinal',
                'Cubulco',
                'Granados',
                'Santa Cruz El Chol'
            ],
            'Chimaltenango' => [
                'Chimaltenango',
                'San José Poaquil',
                'San Martín Jilotepeque',
                'Comalapa',
                'San Juan Talpa',
                'El Tejar',
                'Patzún',
                'Pochuta',
                'San Andrés Itzapa'
            ],
            'Chiquimula' => [
                'Chiquimula',
                'Esquipulas',
                'Quetzaltepeque',
                'San José La Arada',
                'San Juan Ermita'
            ],
            'El Progreso' => [
                'Guastatoya',
                'El Jícaro',
                'Morazán',
                'Sanarate',
                'Agua Blanca'
            ],
            'Escuintla' => [
                'Escuintla',
                'Santa Lucía Cotzumalguapa',
                'La Democracia',
                'Siquinalá',
                'Masagua',
                'Iztapa',
                'Palín',
                'Comalapa',
                'Lucrecia',
                'San Vicente',
                'Nueva Concepción'
            ],
            'Huehuetenango' => [
                'Huehuetenango',
                'Chiantla',
                'Malacatancito',
                'Cuilco',
                'Nentón',
                'Jacaltenango',
                'La Democracia',
                'San Pedro Necta',
                'San Rafael La Independencia',
                'San Mateo',
                'Santa Bárbara'
            ],
            'Izabal' => [
                'Puerto Barrios',
                'Livingston',
                'El Estor',
                'Morales'
            ],
            'Jalapa' => [
                'Jalapa',
                'San Pedro Pinula',
                'San Luis Jilotepeque',
                'Monjas',
                'Mataquescuintla'
            ],
            'Jutiapa' => [
                'Jutiapa',
                'El Progreso',
                'Santa Catarina Mita',
                'El Adelanto',
                'Agua Blanca',
                'Atescatempa',
                'Jerez',
                'Moyuta',
                'Pago de Días'
            ],
            'Petén' => [
                'Flores',
                'San Andrés',
                'La Libertad',
                'San Benito',
                'San Francisco',
                'San José',
                'San Luis',
                'Santa Ana',
                'Dolores'
            ],
            'Quetzaltenango' => [
                'Quetzaltenango',
                'Coatepeque',
                'Flores Costa Cuca',
                'Olintepeque',
                'La Esperanza',
                'Salcajá',
                'San Carlos Sija',
                'Sibilia',
                'Cabricán',
                'Cantel'
            ],
            'Quiché' => [
                'Santa Cruz del Quiché',
                'Chinijo',
                'Chiché',
                'Zacualpa',
                'Chajul',
                'Chinancillo',
                'Sacapulas',
                'Canillá'
            ],
            'Retalhuleu' => [
                'Retalhuleu',
                'San Sebastián',
                'Santa Cruz Mulua',
                'San Martín Zapotitlán',
                'San Felipe'
            ],
            'Sacatepéquez' => [
                'Antigua Guatemala',
                'Jocotenango',
                'Pastores',
                'Santo Tomás de Castilla',
                'San Lucas Sacatepéquez',
                'Raxruha'
            ],
            'San Marcos' => [
                'San Marcos',
                'San Pedro Sacatepéquez',
                'Comitancillo',
                'Ayutla',
                'El Tumbador',
                'Ocós',
                'Catarina'
            ],
            'Santa Rosa' => [
                'Cuilapa',
                'Santa Rosa de Lima',
                'Guadalupe',
                'Nuevo Santa Rosa',
                'Oratorio'
            ],
            'Sololá' => [
                'Sololá',
                'Santa Catarina Ixtahuacán',
                'Santa Lucía Utatlán',
                'Nahualá',
                'San Andrés Semetabaj',
                'San Antonio Palopó',
                'San José Chacayá'
            ],
            'Suchitepéquez' => [
                'Mazatenango',
                'Cuyotenango',
                'San Francisco Zapotitlán',
                'Chicacao',
                'Catarina',
                'San Lorenzo'
            ],
            'Totonicapán' => [
                'Totonicapán',
                'San Cristóbal Totonicapán',
                'San Francisco El Alto',
                'Santa Lucía La Reforma'
            ],
            'Zacapa' => [
                'Zacapa',
                'Estanzuela',
                'Rio Hondo',
                'Gualán',
                'Teculután',
                'Usumatlán'
            ],
        ];

        $municipios = [];
        if (array_key_exists($departamento, $municipiosGuatemala)) {
            foreach ($municipiosGuatemala[$departamento] as $mun) {
                $municipios[] = ['municipio' => $mun];
            }
        }

        return response()->json(['municipios' => $municipios]);
    }
}
