<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Empires Display</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.01 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <x-navbar></x-navbar>
        <h3 class="row justify-content-center">Edit Empire</h3>
        <form action="/update/edit" method="post">
            @csrf
            <div class="justify-content-center d-flex py-5">
                <select name="empires" id="empires" onchange="empCivilDisplay()">
                    @foreach($dataEmpires as $empire)
                    <option value="{{ $empire['id'] }}">{{ $empire['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Name (Required) -->
            <div class="row justify-content-center pb-3">
                <label for="emp_name" class="col-2">Name</label>
                <input type="text" name="emp_name" id="emp_name" style="border:1px solid black; border-radius:12px" class="col-2" required>
            </div>
            <!-- Expansion (Required) -->
            <div class="row justify-content-center pb-3">
                <label for="emp_expansion" class="col-2">Expansion</label>
                <input type="text" name="emp_expansion" id="emp_expansion" style="border:1px solid black; border-radius:12px" class="col-2" required>
            </div>
            <!-- Army Type (Required) -->
            <div class="row justify-content-center pb-3">
                <label for="emp_army_type" class="col-2">Army Type</label>
                <input type="text" name="emp_army_type" id="emp_army_type" style="border:1px solid black; border-radius:12px" class="col-2" required>
            </div>
            <!-- Team Bonus (Required) -->
            <div class="row justify-content-center pb-3">
                <label for="emp_team_bonus" class="col-2">Team Bonus</label>
                <input type="text" name="emp_team_bonus" id="emp_team_bonus" style="border:1px solid black; border-radius:12px" class="col-2" required>
            </div>
            <!-- Civilization Bonus -->
            <div class="row justify-content-center pb-3">
                <label for="emp_civilization_bonus" class="col-2">Civilization Bonus</label>
                <select name="emp_civilization_bonus" id="emp_civilization_bonus" class="col-5"></select>
            </div>
            <!-- Civilization Bonus Replacement (Required) -->
            <div class="row justify-content-center pb-3">
                <label for="emp_civil_bonus_rep" class="col-2">Civilization Bonus Replacement</label>
                <input type="text" name="emp_civil_bonus_rep" id="emp_civil_bonus_rep" style="border:1px solid black; border-radius:12px" class="col-5" required>
            </div>
            <div class="justify-content-center d-flex py-5">
                <button type="submit">Submit</button>
            </div>
        </form>
        <div style="border-bottom: 5px solid black; margin-bottom: 5rem"></div>
        <h3 class="row justify-content-center">Add New Empire</h3>
        <form action="/update/add" method="post">
            @csrf    
            <!-- Name (Required) -->
            <div class="row justify-content-center pb-3">
                <label for="add_name" class="col-2">Name</label>
                <input type="text" name="add_name" id="add_name" style="border:1px solid black; border-radius:12px" class="col-2" required>
            </div>
            <!-- Expansion (Required) -->
            <div class="row justify-content-center pb-3">
                <label for="add_expansion" class="col-2">Expansion</label>
                <input type="text" name="add_expansion" id="add_expansion" style="border:1px solid black; border-radius:12px" class="col-2" required>
            </div>
            <!-- Army Type (Required) -->
            <div class="row justify-content-center pb-3">
                <label for="add_army_type" class="col-2">Army Type</label>
                <input type="text" name="add_army_type" id="add_army_type" style="border:1px solid black; border-radius:12px" class="col-2" required>
            </div>
            <!-- Team Bonus (Required) -->
            <div class="row justify-content-center pb-3">
                <label for="add_team_bonus" class="col-2">Team Bonus</label>
                <input type="text" name="add_team_bonus" id="add_team_bonus" style="border:1px solid black; border-radius:12px" class="col-2" required>
            </div>
            <!-- Number input for the number of Civilization Bonuses (Required)(JavaScript connection) -->
            <div class="row justify-content-center pb-3">
                <label for="civil_num" class="col-2">Number of Civilization Bonuses</label>
                <input type="number" name="civil_num" id="civil_num" style="border:1px solid black; border-radius:12px" class="col-2" onchange="addCivilBonus()" required>
            </div>
            <!-- The space where the Civilization Bonus inputs appear (All Inputs Required) -->
            <div id="add_civilization_bonus" name="add_civilization_bonus" class="justify-content-center d-flex"></div>
            <div class="justify-content-center d-flex py-5">
                <button type="submit">Submit</button>
            </div>
        </form>
        <script>
            // This just makes sure that the edit fields are filled when the page loads
            empCivilDisplay();
            // JavaScript logic for the Add form
            function addCivilBonus() {
                document.getElementById('add_civilization_bonus').innerHTML = "";
                for (let i = 0; i < document.getElementById('civil_num').value; i++) {
                    var addInput = document.createElement('input');
                    addInput.type = 'text';
                    addInput.style = 'border:1px solid black; border-radius: 12px';
                    addInput.name = 'civil_bonus[]';
                    addInput.required = true;
                    document.getElementById('add_civilization_bonus').appendChild(addInput);
                }
            }
            // JavaScript logic for the Edit form
            function empCivilDisplay() {
                // Gets the array of empires from PHP to JavaScript
                var empires = {!! json_encode($dataEmpires) !!};
                // Fill in the edit fields, makes it easier for the user
                document.getElementById('emp_civilization_bonus').innerHTML = "";
                document.getElementById('emp_name').value = empires[document.getElementById('empires').value - 1]['name'];
                document.getElementById('emp_expansion').value = empires[document.getElementById('empires').value - 1]['expansion'];
                document.getElementById('emp_army_type').value = empires[document.getElementById('empires').value - 1]['army_type'];
                document.getElementById('emp_team_bonus').value = empires[document.getElementById('empires').value - 1]['team_bonus'];
                var i = 0;
                // Fill the edit selection with the civilization bonuses to allow for editing one at a time
                empires[document.getElementById('empires').value - 1]['civilization_bonus'].forEach(element => {
                    var opt = document.createElement('option');
                    opt.innerHTML = element;
                    opt.value = i;
                    document.getElementById('emp_civilization_bonus').appendChild(opt);
                    i++;
                });
                // Allow for adding new civilization bonuses
                var addOpt = document.createElement('option');
                addOpt.innerHTML = 'Add';
                addOpt.value = 'add';
                document.getElementById('emp_civilization_bonus').appendChild(addOpt);
            }
        </script>
    </body>
</html>
