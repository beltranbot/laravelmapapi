<?php

use Illuminate\Database\Seeder;

class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // .txt
        DB::table('places')->insert([
            'address' => "Cl. 11 #3-2 a 3-56, Ibagué, Tolima, Colombia",
            'latitude' => "4.444297",
            'longitude' => "-75.241536"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 9 #2-1 a 2-121, Ibagué, Tolima, Colombia",
            'latitude' => "4.445233",
            'longitude' => "-75.243226"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 10 #2a-2 a 2a-56, Ibagué, Tolima, Colombia",
            'latitude' => "4.444666",
            'longitude' => "-75.242448"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 2 #10-2 a 10-60, Ibagué, Tolima, Colombia",
            'latitude' => "4.444024",
            'longitude' => "-75.242899"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 2 #8a-2 a 8a-68, Ibagué, Tolima, Colombia",
            'latitude' => "4.444650",
            'longitude' => "-75.243806"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 10 #1-89 B, Ibagué, Tolima, Colombia",
            'latitude' => "4.443553",
            'longitude' => "-75.243344"
        ]);
        DB::table('places')->insert([
            'address' => "Cra 3 #7-2 a 7-122, Ibagué, Tolima, Colombia",
            'latitude' => "4.445880",
            'longitude' => "-75.244063"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 7 #3-1 a 3-113, Ibagué, Tolima, Colombia",
            'latitude' => "4.446816",
            'longitude' => "-75.244562"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 10 #4-1 a 4-73, Ibagué, Tolima, Colombia",
            'latitude' => "4.445671",
            'longitude' => "-75.241773"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 6 #8-1 a 8-29, Ibagué, Tolima, Colombia",
            'latitude' => "4.450051",
            'longitude' => "-75.243167"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 10 #4a-2 a 4a-90, Ibagué, Tolima, Colombia",
            'latitude' => "4.451458",
            'longitude' => "-75.244052"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 3 #3-2 a 3-30, Ibagué, Tolima, Colombia",
            'latitude' => "4.449367",
            'longitude' => "-75.247722"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #4-2 a 4-76, Ibagué, Tolima, Colombia",
            'latitude' => "4.448976",
            'longitude' => "-75.246874"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #5-2 a 5-34, Ibagué, Tolima, Colombia",
            'latitude' => "4.448131",
            'longitude' => "-75.245860"
        ]);
        DB::table('places')->insert([
            'address' => "Cra 3 #4-1 a 4-163, Ibagué, Tolima, Colombia",
            'latitude' => "4.447650",
            'longitude' => "-75.246601"
        ]);
        DB::table('places')->insert([
            'address' => "Cra 3 #6-1 a 6-53, Ibagué, Tolima, Colombia",
            'latitude' => "4.446880",
            'longitude' => "-75.245640"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 6 #3-44, Ibagué, Tolima, Colombia",
            'latitude' => "4.447885",
            'longitude' => "-75.244991"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 9 #3-116, Ibagué, Tolima, Colombia",
            'latitude' => "4.446110",
            'longitude' => "-75.242545"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 2 #8-1 a 8-41, Ibagué, Tolima, Colombia",
            'latitude' => "4.444976",
            'longitude' => "-75.244369"
        ]);
        DB::table('places')->insert([
            'address' => "Cra 3 #11a-1 a 11a-53, Ibagué, Tolima, Colombia",
            'latitude' => "4.443767",
            'longitude' => "-75.240812"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #10 - 45, Ibagué, Tolima, Colombia",
            'latitude' => "4.445265",
            'longitude' => "-75.241215"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 10 #9-1, Ibagué, Tolima, Colombia",
            'latitude' => "4.450661",
            'longitude' => "-75.242872"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 5 #7, Ibagué, Tolima, Colombia",
            'latitude' => "4.447757",
            'longitude' => "-75.244106"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 10 #5a-1 a 5a-35, Ibagué, Tolima, Colombia",
            'latitude' => "4.446174",
            'longitude' => "-75.241402"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 9 #1 Sur-1 a 1 Sur-55, Ibagué, Tolima, Colombia",
            'latitude' => "4.443484",
            'longitude' => "-75.244508"
        ]);
        // .csv
        DB::table('places')->insert([
            'address' => "Cra. 4a #36-2 a 36-62, Ibagué, Tolima, Colombia",
            'latitude' => "4.431113",
            'longitude' => "-75.218829"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 37 #4b-05, Ibagué, Tolima, Colombia",
            'latitude' => "4.430974",
            'longitude' => "-75.217606"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #38-2, Ibagué, Tolima, Colombia",
            'latitude' => "4.429476",
            'longitude' => "-75.217048"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 2 #36-1 a 36-103, Ibagué, Tolima, Colombia",
            'latitude' => "4.428899",
            'longitude' => "-75.218722"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 2 #35b-1 a 35b-75, Ibagué, Tolima, Colombia",
            'latitude' => "4.430236",
            'longitude' => "-75.219462"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #35-1 a 35-85, Ibagué, Tolima, Colombia",
            'latitude' => "4.431413",
            'longitude' => "-75.220481"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #39-29, Ibagué, Tolima, Colombia",
            'latitude' => "4.430182",
            'longitude' => "-75.216018"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #39-2 a 39-96, Ibagué, Tolima, Colombia",
            'latitude' => "4.430461",
            'longitude' => "-75.214838"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 37 #4a-3 a 4a-35, Ibagué, Tolima, Colombia",
            'latitude' => "4.431744",
            'longitude' => "-75.217938"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 37 #4b-05, Ibagué, Tolima, Colombia",
            'latitude' => "4.432964",
            'longitude' => "-75.217853"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 3a #37-25 a 37-73, Ibagué, Tolima, Colombia",
            'latitude' => "4.428567",
            'longitude' => "-75.217574"
        ]);
        DB::table('places')->insert([
            'address' => "Cra 3 #38c-2 a 38c-84, Ibagué, Tolima, Colombia",
            'latitude' => "4.429749",
            'longitude' => "-75.215524"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 39 #2b-1 a 2b-55, Ibagué, Tolima, Colombia",
            'latitude' => "4.429904",
            'longitude' => "-75.214843"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 42 #2a-2 a 2a-66, Ibagué, Tolima, Colombia",
            'latitude' => "4.430156",
            'longitude' => "-75.213808"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 42, Ibagué, Tolima, Colombia",
            'latitude' => "4.430776",
            'longitude' => "-75.213963"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 42 #4b-38 a 4b-68, Ibagué, Tolima, Colombia",
            'latitude' => "4.431873",
            'longitude' => "-75.214269"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 40 #4a-2 a 4a-40, Ibagué, Tolima, Colombia",
            'latitude' => "4.431322",
            'longitude' => "-75.214189"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 39b #4-54 a 4-68, Ibagué, Tolima, Colombia",
            'latitude' => "4.430878",
            'longitude' => "-75.215814"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4a #38b-31 a 38b-49, Ibagué, Tolima, Colombia",
            'latitude' => "4.430236",
            'longitude' => "-75.217010"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #34b-90 a 34b-94, Ibagué, Tolima, Colombia",
            'latitude' => "4.431536",
            'longitude' => "-75.220733"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4a #35-57 a 35-85, Ibagué, Tolima, Colombia",
            'latitude' => "4.431220",
            'longitude' => "-75.219591"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #38b-2 a 38b-58, Ibagué, Tolima, Colombia",
            'latitude' => "4.430033",
            'longitude' => "-75.216517"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 2a #42-2, Ibagué, Tolima, Colombia",
            'latitude' => "4.429616",
            'longitude' => "-75.213663"
        ]);
        DB::table('places')->insert([
            'address' => "Cra 3 #39-2 a 39-38, Ibagué, Tolima, Colombia",
            'latitude' => "4.430006",
            'longitude' => "-75.214500"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 4 #35-88 a 35-168, Ibagué, Tolima, Colombia",
            'latitude' => "4.431049",
            'longitude' => "-75.220191"
        ]);
        // .json
        DB::table('places')->insert([
            'address' => "Cl. 60 #416, Ibagué, Tolima, Colombia",
            'latitude' => "4.43583",
            'longitude' => "-75.202875"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá #45-2, Ibagué, Tolima, Colombia",
            'latitude' => "4.446559",
            'longitude' => "-75.205686"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60, Ibagué, Tolima, Colombia",
            'latitude' => "4.44611",
            'longitude' => "-75.206094"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60, Ibagué, Tolima, Colombia",
            'latitude' => "4.443949",
            'longitude' => "-75.204978"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60, Ibagué, Tolima, Colombia",
            'latitude' => "4.442837",
            'longitude' => "-75.204785"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60 #9-2 a 9-88, Ibagué, Tolima, Colombia",
            'latitude' => "4.441831",
            'longitude' => "-75.204484"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60 #8-65 a 8-285, Ibagué, Tolima, Colombia",
            'latitude' => "4.441104",
            'longitude' => "-75.204334"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 57 #8a-1 a 8a-111, Ibagué, Tolima, Colombia",
            'latitude' => "4.4412",
            'longitude' => "-75.204839"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 9 #57-15, Ibagué, Tolima, Colombia",
            'latitude' => "4.441147",
            'longitude' => "-75.205611"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 51 #8b-2 a 8b-32, Ibagué, Tolima, Colombia",
            'latitude' => "4.441104",
            'longitude' => "-75.206523"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 9 #60-133, Ibagué, Tolima, Colombia",
            'latitude' => "4.4415",
            'longitude' => "-75.203197"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60 #8-49 a 8-271, Ibagué, Tolima, Colombia",
            'latitude' => "4.440451",
            'longitude' => "-75.204087"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60 #8-2 a 8-64, Ibagué, Tolima, Colombia",
            'latitude' => "4.439285",
            'longitude' => "-75.203809"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60 #7a-2 a 7a-92, Ibagué, Tolima, Colombia",
            'latitude' => "4.438783",
            'longitude' => "-75.203615"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60 #7-2 a 7-52, Ibagué, Tolima, Colombia",
            'latitude' => "4.438162",
            'longitude' => "-75.20354"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60 #6a-1 a 6a-107, Ibagué, Tolima, Colombia",
            'latitude' => "4.4372",
            'longitude' => "-75.203401"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 60 #6-8 a 6-50, Ibagué, Tolima, Colombia",
            'latitude' => "4.436729",
            'longitude' => "-75.203122"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 59 #6b-2 a 6b-58, Ibagué, Tolima, Colombia",
            'latitude' => "4.437879",
            'longitude' => "-75.204002"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 59 #6a-1 a 6a-47, Ibagué, Tolima, Colombia",
            'latitude' => "4.437055",
            'longitude' => "-75.203835"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 61 #7-43 a 7-141, Ibagué, Tolima, Colombia",
            'latitude' => "4.438836",
            'longitude' => "-75.202312"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 6b #61-1 a 61-145, Ibagué, Tolima, Colombia",
            'latitude' => "4.438018",
            'longitude' => "-75.202097"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 8 #51-52 a 51-102, Ibagué, Tolima, Colombia",
            'latitude' => "4.439852",
            'longitude' => "-75.205632"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 57 #7c-2 a 7c-88, Ibagué, Tolima, Colombia",
            'latitude' => "4.43981",
            'longitude' => "-75.204806"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 5 #61a-2 a 61a-152, Ibagué, Tolima, Colombia",
            'latitude' => "4.43629",
            'longitude' => "-75.201555"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 6b #58-1 a 58-51, Ibagué, Tolima, Colombia",
            'latitude' => "4.437472",
            'longitude' => "-75.203937"
        ]);
        // .xml
        DB::table('places')->insert([
            'address' => "Cra. 20 #69a-1 a 69a-73, Ibagué, Tolima, Colombia",
            'latitude' => "4,447885",
            'longitude' => "-75,199764"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá, Ibagué, Tolima, Colombia",
            'latitude' => "4,448078",
            'longitude' => "-75,198305"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá, Ibagué, Tolima, Colombia",
            'latitude' => "4,447736",
            'longitude' => "-75,196545"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 69 #11A-173, Ibagué, Tolima, Colombia",
            'latitude' => "4,446024",
            'longitude' => "-75,198562"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 69 #13-20, Ibagué, Tolima, Colombia",
            'latitude' => "4,444291",
            'longitude' => "-75,198498"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá, Ibagué, Tolima, Colombia",
            'latitude' => "4,447286",
            'longitude' => "-75,194013"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá, Ibagué, Tolima, Colombia",
            'latitude' => "4,448335",
            'longitude' => "-75,194721"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 75, Ibagué, Tolima, Colombia",
            'latitude' => "4,446848",
            'longitude' => "-75,192586"
        ]);
        DB::table('places')->insert([
            'address' => "Cra. 20 #76-1 a 76-101, Ibagué, Tolima, Colombia",
            'latitude' => "4,446698",
            'longitude' => "-75,191277"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 77 #20-100, Ibagué, Tolima, Colombia",
            'latitude' => "4,446891",
            'longitude' => "-75,190387"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá, Ibagué, Tolima, Colombia",
            'latitude' => "4,446324",
            'longitude' => "-75,189561"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 77 #20-100, Ibagué, Tolima, Colombia",
            'latitude' => "4,448003",
            'longitude' => "-75,19014"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 77 #20-100, Ibagué, Tolima, Colombia",
            'latitude' => "4,44919",
            'longitude' => "-75,189389"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 77 #20-100, Ibagué, Tolima, Colombia",
            'latitude' => "4,449629",
            'longitude' => "-75,189078"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 77 #20-100, Ibagué, Tolima, Colombia",
            'latitude' => "4,449436",
            'longitude' => "-75,188134"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá, Ibagué, Tolima, Colombia",
            'latitude' => "4,446559",
            'longitude' => "-75,188026"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá, Ibagué, Tolima, Colombia",
            'latitude' => "4,446431",
            'longitude' => "-75,185688"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá, Ibagué, Tolima, Colombia",
            'latitude' => "4,446516",
            'longitude' => "-75,183949"
        ]);
        DB::table('places')->insert([
            'address' => "Cañaveral, Ibagué, Tolima, Colombia",
            'latitude' => "4,446966",
            'longitude' => "-75,182683"
        ]);
        DB::table('places')->insert([
            'address' => "Av Ambalá, Ibagué, Tolima, Colombia",
            'latitude' => "4,446302",
            'longitude' => "-75,182469"
        ]);
        DB::table('places')->insert([
            'address' => "Cañaveral, Ibagué, Tolima, Colombia",
            'latitude' => "4,447736",
            'longitude' => "-75,183231"
        ]);
        DB::table('places')->insert([
            'address' => "Cañaveral, Ibagué, Tolima, Colombia",
            'latitude' => "4,44949",
            'longitude' => "-75,184658"
        ]);
        DB::table('places')->insert([
            'address' => "Cañaveral, Ibagué, Tolima, Colombia",
            'latitude' => "4,450645",
            'longitude' => "-75,18558"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 77 #20-100, Ibagué, Tolima, Colombia",
            'latitude' => "4,446195",
            'longitude' => "-75,190355"
        ]);
        DB::table('places')->insert([
            'address' => "Cl. 77 #20-100, Ibagué, Tolima, Colombia",
            'latitude' => "4,445778",
            'longitude' => "-75,190945"
        ]);
    }
}
