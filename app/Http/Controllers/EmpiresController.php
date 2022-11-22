<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpiresController extends Controller
{
    public function index() {
        return view('empires_display', $this->selectData());
    }
    public function update() {
        return view('empires_update', $this->selectData());
    }
    // Edit an empire
    public function edit(Request $request) {
        $civilBonus = $this->selectData()['dataEmpires'][0]['civilization_bonus'];
        // If the user opted to add a new civilization bonus tack it on to the end
        // else change the selected civilization bonus
        if ($request['emp_civilization_bonus'] == 'add') {
            array_push($civilBonus, $request['emp_civil_bonus_rep']);
        }
        else {
            $civilBonus[$request['emp_civilization_bonus']] = $request['emp_civil_bonus_rep'];
        }
        DB::update('update empires set name = ?, expansion = ?, army_type = ?, team_bonus = ?, civilization_bonus = ? where id = ?;', [$request['emp_name'], $request['emp_expansion'], $request['emp_army_type'], $request['emp_team_bonus'], json_encode($civilBonus), $request['empires']]);
        // Redirect to display and show the edited entry
        $strRedirect = '/#' . $request['empires'];
        return redirect($strRedirect);
    }
    // Add an empire
    public function add(Request $request) {
        // Add a new empire using the data provided and show it at the bottom of the page
        DB::insert('insert into empires (name, expansion, army_type, team_bonus, civilization_bonus) values (?, ?, ?, ?, ?)', [$request['add_name'], $request['add_expansion'], $request['add_army_type'], $request['add_team_bonus'], json_encode($request['civil_bonus'])]);
        return redirect('/#bottom');
    }
    public function delete() {
        return view('empires_delete', $this->selectData());
    }
    // Delete one or more empires
    public function deleteFinal(Request $request) {
        foreach ($request['empiresDelete'] as $key => $value) {
            DB::delete('delete from empires where id = ?', [$value]);
        }
        return redirect('/');
    }
    // Selects the data from the database and formats it
    private function selectData() {
        $dataCatch = json_encode(DB::select('select * from empires'));
        // So the views can access the data
        $empires = [
            'dataEmpires' => json_decode($dataCatch, true)
        ];
        // Civilization Bonus is a string without this
        foreach ($empires['dataEmpires'] as $key => $value) {
            foreach ($value as $k => $v) {
                if ($k == 'civilization_bonus') {
                    $empires['dataEmpires'][$key][$k] = json_decode($v);
                }
            }
        }
        return $empires;
    }
}
