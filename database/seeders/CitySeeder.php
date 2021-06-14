<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();

        City::create([
            'id' => 914,
            'country' => 'Bangladesh',
            'city' => 'Dhaka',
            'latitude' => 23.7230556,
            'longitude' => 90.4086075,
            'altitude' => 4.0,
        ]);

        City::create([
            'id' => 915,
            'country' => 'Bangladesh',
            'city' => 'Chittagong',
            'latitude' => 22.3330556,
            'longitude' => 91.8363876,
            'altitude' => 7.0,
        ]);

        City::create([
            'id' => 916,
            'country' => 'Bangladesh',
            'city' => 'Khulna',
            'latitude' => 22.8,
            'longitude' => 89.5500031,
            'altitude' => 9.0,
        ]);

        City::create([
            'id' => 917,
            'country' => 'Bangladesh',
            'city' => 'Rajshahi',
            'latitude' => 24.3666667,
            'longitude' => 88.5999985,
            'altitude' => 31.0,
        ]);

        City::create([
            'id' => 918,
            'country' => 'Bangladesh',
            'city' => 'Comilla',
            'latitude' => 23.4577778,
            'longitude' => 91.2044449,
            'altitude' => 12.0,
        ]);

        City::create([
            'id' => 919,
            'country' => 'Bangladesh',
            'city' => 'Tungi',
            'latitude' => 23.89,
            'longitude' => 90.4058304,
            'altitude' => 4.0,
        ]);

        City::create([
            'id' => 920,
            'country' => 'Bangladesh',
            'city' => 'Mymensingh',
            'latitude' => 24.75,
            'longitude' => 90.4000015,
            'altitude' => 17.0,
        ]);

        City::create([
            'id' => 921,
            'country' => 'Bangladesh',
            'city' => 'Rangpur',
            'latitude' => 25.75,
            'longitude' => 89.25,
            'altitude' => 36.0,
        ]);

        City::create([
            'id' => 922,
            'country' => 'Bangladesh',
            'city' => 'Narsingdi',
            'latitude' => 23.9208333,
            'longitude' => 90.7180557,
            'altitude' => 4.0,
        ]);

        City::create([
            'id' => 923,
            'country' => 'Bangladesh',
            'city' => 'Jessore',
            'latitude' => 23.1666667,
            'longitude' => 89.2166672,
            'altitude' => 15.0,
        ]);

        City::create([
            'id' => 924,
            'country' => 'Bangladesh',
            'city' => 'Sylhet',
            'latitude' => 24.8966667,
            'longitude' => 91.871666,
            'altitude' => 9.0,
        ]);

        City::create([
            'id' => 925,
            'country' => 'Bangladesh',
            'city' => 'Narayanganj',
            'latitude' => 23.6233333,
            'longitude' => 90.5011139,
            'altitude' => 4.0,
        ]);

        City::create([
            'id' => 926,
            'country' => 'Bangladesh',
            'city' => 'Dinajpur',
            'latitude' => 25.6333333,
            'longitude' => 88.6333313,
            'altitude' => 35.0,
        ]);

        City::create([
            'id' => 927,
            'country' => 'Bangladesh',
            'city' => 'Barisal',
            'latitude' => 22.7019444,
            'longitude' => 90.371109,
            'altitude' => 2.0,
        ]);

        City::create([
            'id' => 928,
            'country' => 'Bangladesh',
            'city' => 'Saidpur',
            'latitude' => 25.7776918,
            'longitude' => 88.8916931,
            'altitude' => 36.0,
        ]);

        City::create([
            'id' => 929,
            'country' => 'Bangladesh',
            'city' => 'Par Naogaon',
            'latitude' => 24.8,
            'longitude' => 88.9499969,
            'altitude' => 14.0,
        ]);

        City::create([
            'id' => 930,
            'country' => 'Bangladesh',
            'city' => 'Tangail',
            'latitude' => 24.25,
            'longitude' => 89.9166641,
            'altitude' => 13.0,
        ]);

        City::create([
            'id' => 931,
            'country' => 'Bangladesh',
            'city' => 'Jamalpur',
            'latitude' => 24.9166667,
            'longitude' => 89.9333344,
            'altitude' => 12.0,
        ]);

        City::create([
            'id' => 932,
            'country' => 'Bangladesh',
            'city' => 'Sirajganj',
            'latitude' => 24.45,
            'longitude' => 89.7166672,
            'altitude' => 13.0,
        ]);

        City::create([
            'id' => 933,
            'country' => 'Bangladesh',
            'city' => 'Nawabganj',
            'latitude' => 24.6,
            'longitude' => 88.2833328,
            'altitude' => 21.0,
        ]);

        City::create([
            'id' => 934,
            'country' => 'Bangladesh',
            'city' => 'Pabna',
            'latitude' => 24.0,
            'longitude' => 89.25,
            'altitude' => 8.0,
        ]);

        City::create([
            'id' => 935,
            'country' => 'Bangladesh',
            'city' => 'Kushtia',
            'latitude' => 23.9166667,
            'longitude' => 89.1166687,
            'altitude' => 26.0,
        ]);

        City::create([
            'id' => 936,
            'country' => 'Bangladesh',
            'city' => 'Satkhira',
            'latitude' => 22.7166667,
            'longitude' => 89.0999985,
            'altitude' => 14.0,
        ]);

        City::create([
            'id' => 937,
            'country' => 'Bangladesh',
            'city' => 'Faridpur',
            'latitude' => 23.6,
            'longitude' => 89.8333359,
            'altitude' => 11.0,
        ]);

        City::create([
            'id' => 938,
            'country' => 'Bangladesh',
            'city' => 'Sherpur',
            'latitude' => 25.0166667,
            'longitude' => 90.0166702,
            'altitude' => 14.0,
        ]);

        City::create([
            'id' => 939,
            'country' => 'Bangladesh',
            'city' => 'Bhairab Bazar',
            'latitude' => 24.0666667,
            'longitude' => 90.9666672,
            'altitude' => 16.0,
        ]);

        City::create([
            'id' => 940,
            'country' => 'Bangladesh',
            'city' => 'Shahzadpur',
            'latitude' => 24.1666667,
            'longitude' => 89.5999985,
            'altitude' => 17.0,
        ]);

        City::create([
            'id' => 941,
            'country' => 'Bangladesh',
            'city' => 'Bhola',
            'latitude' => 22.6833333,
            'longitude' => 90.6500015,
            'altitude' => 1.0,
        ]);

        City::create([
            'id' => 942,
            'country' => 'Bangladesh',
            'city' => 'Kishorganj',
            'latitude' => 24.4333333,
            'longitude' => 90.7666702,
            'altitude' => 10.0,
        ]);

        City::create([
            'id' => 943,
            'country' => 'Bangladesh',
            'city' => 'Habiganj',
            'latitude' => 24.3833333,
            'longitude' => 91.4166641,
            'altitude' => 6.0,
        ]);

        City::create([
            'id' => 944,
            'country' => 'Bangladesh',
            'city' => 'Madaripur',
            'latitude' => 23.1752778,
            'longitude' => 90.207222,
            'altitude' => 9999.0,
        ]);

        City::create([
            'id' => 945,
            'country' => 'Bangladesh',
            'city' => 'Feni',
            'latitude' => 23.0186111,
            'longitude' => 91.4100037,
            'altitude' => 5.0,
        ]);

        City::create([
            'id' => 946,
            'country' => 'Bangladesh',
            'city' => 'Laksham',
            'latitude' => 23.2472222,
            'longitude' => 91.1425018,
            'altitude' => 10.0,
        ]);

        City::create([
            'id' => 947,
            'country' => 'Bangladesh',
            'city' => 'Ishurdi',
            'latitude' => 24.1333333,
            'longitude' => 89.0833359,
            'altitude' => 30.0,
        ]);

        City::create([
            'id' => 948,
            'country' => 'Bangladesh',
            'city' => 'Sarishabari',
            'latitude' => 24.7333333,
            'longitude' => 89.8333359,
            'altitude' => 9.0,
        ]);

        City::create([
            'id' => 949,
            'country' => 'Bangladesh',
            'city' => 'Netrakona',
            'latitude' => 24.8833333,
            'longitude' => 90.7166672,
            'altitude' => 2.0,
        ]);

        City::create([
            'id' => 950,
            'country' => 'Bangladesh',
            'city' => 'Jaipur Hat',
            'latitude' => 25.1,
            'longitude' => 89.0166702,
            'altitude' => 29.0,
        ]);

        City::create([
            'id' => 951,
            'country' => 'Bangladesh',
            'city' => 'Thakurgaon',
            'latitude' => 26.0333333,
            'longitude' => 88.4666672,
            'altitude' => 37.0,
        ]);

        City::create([
            'id' => 952,
            'country' => 'Bangladesh',
            'city' => 'Palang',
            'latitude' => 23.2166667,
            'longitude' => 90.3499985,
            'altitude' => 5.0,
        ]);

        City::create([
            'id' => 953,
            'country' => 'Bangladesh',
            'city' => 'Lalmanir Hat',
            'latitude' => 25.9,
            'longitude' => 89.4499969,
            'altitude' => 32.0,
        ]);

        City::create([
            'id' => 954,
            'country' => 'Bangladesh',
            'city' => 'Raipur',
            'latitude' => 23.05,
            'longitude' => 90.7666702,
            'altitude' => 3.0,
        ]);

        City::create([
            'id' => 955,
            'country' => 'Bangladesh',
            'city' => 'Tungipara',
            'latitude' => 22.9,
            'longitude' => 89.9166641,
            'altitude' => 6.0,
        ]);

        City::create([
            'id' => 956,
            'country' => 'Bangladesh',
            'city' => 'Lakshmipur',
            'latitude' => 22.95,
            'longitude' => 90.8333359,
            'altitude' => 2.0,
        ]);

        City::create([
            'id' => 957,
            'country' => 'Bangladesh',
            'city' => 'Kaptaimukh',
            'latitude' => 22.4713889,
            'longitude' => 92.2322235,
            'altitude' => 18.0,
        ]);

        City::create([
            'id' => 958,
            'country' => 'Bangladesh',
            'city' => 'Moulvi Bazar',
            'latitude' => 24.4833333,
            'longitude' => 91.7833328,
            'altitude' => 13.0,
        ]);

        City::create([
            'id' => 959,
            'country' => 'Bangladesh',
            'city' => 'Ramganj',
            'latitude' => 23.1,
            'longitude' => 90.8499985,
            'altitude' => 3.0,
        ]);

        City::create([
            'id' => 960,
            'country' => 'Bangladesh',
            'city' => 'Narail',
            'latitude' => 23.1666667,
            'longitude' => 89.5,
            'altitude' => 14.0,
        ]);

        City::create([
            'id' => 961,
            'country' => 'Bangladesh',
            'city' => 'Pirojpur',
            'latitude' => 22.5666667,
            'longitude' => 89.9833298,
            'altitude' => 3.0,
        ]);

        City::create([
            'id' => 962,
            'country' => 'Bangladesh',
            'city' => 'Sandwip',
            'latitude' => 22.4677778,
            'longitude' => 91.4561081,
            'altitude' => 6.0,
        ]);

        City::create([
            'id' => 963,
            'country' => 'Bangladesh',
            'city' => 'Satkania',
            'latitude' => 22.0755556,
            'longitude' => 92.0513916,
            'altitude' => 6.0,
        ]);

        City::create([
            'id' => 964,
            'country' => 'Bangladesh',
            'city' => 'Patiya',
            'latitude' => 22.2947222,
            'longitude' => 91.9791641,
            'altitude' => 7.0,
        ]);

        City::create([
            'id' => 965,
            'country' => 'Bangladesh',
            'city' => 'Khagrachari',
            'latitude' => 23.1,
            'longitude' => 91.9666672,
            'altitude' => 48.0,
        ]);

        City::create([
            'id' => 966,
            'country' => 'Bangladesh',
            'city' => 'Chilmari',
            'latitude' => 25.55,
            'longitude' => 89.7166672,
            'altitude' => 18.0,
        ]);

        City::create([
            'id' => 967,
            'country' => 'Bangladesh',
            'city' => 'Nageswari',
            'latitude' => 25.9666667,
            'longitude' => 89.7166672,
            'altitude' => 40.0,
        ]);

        City::create([
            'id' => 968,
            'country' => 'Bangladesh',
            'city' => 'Panchagarh',
            'latitude' => 26.3333333,
            'longitude' => 88.5666656,
            'altitude' => 59.0,
        ]);

        City::create([
            'id' => 969,
            'country' => 'Bangladesh',
            'city' => 'Dakshin Char Fasson',
            'latitude' => 22.2166667,
            'longitude' => 90.7333298,
            'altitude' => 2.0,
        ]);

        City::create([
            'id' => 970,
            'country' => 'Bangladesh',
            'city' => 'Parbatipur',
            'latitude' => 25.65,
            'longitude' => 88.9166641,
            'altitude' => 30.0,
        ]);

        City::create([
            'id' => 971,
            'country' => 'Bangladesh',
            'city' => 'Barahanuddin',
            'latitude' => 22.5,
            'longitude' => 90.7166672,
            'altitude' => 2.0,
        ]);

        City::create([
            'id' => 972,
            'country' => 'Bangladesh',
            'city' => 'Kaliganj',
            'latitude' => 23.4166667,
            'longitude' => 89.1333313,
            'altitude' => 24.0,
        ]);

        City::create([
            'id' => 973,
            'country' => 'Bangladesh',
            'city' => 'Dohar',
            'latitude' => 23.5883333,
            'longitude' => 90.1469421,
            'altitude' => 4.0,
        ]);

        City::create([
            'id' => 974,
            'country' => 'Bangladesh',
            'city' => 'Hajiganj',
            'latitude' => 23.2511111,
            'longitude' => 90.859169,
            'altitude' => 4.0,
        ]);

        City::create([
            'id' => 975,
            'country' => 'Bangladesh',
            'city' => 'Abhaynagar',
            'latitude' => 23.0166667,
            'longitude' => 89.4666672,
            'altitude' => 16.0,
        ]);

        City::create([
            'id' => 976,
            'country' => 'Bangladesh',
            'city' => 'Lalmohan',
            'latitude' => 22.3166667,
            'longitude' => 90.7166672,
            'altitude' => 1.0,
        ]);

        City::create([
            'id' => 977,
            'country' => 'Bangladesh',
            'city' => 'Jhikergacha',
            'latitude' => 23.1166667,
            'longitude' => 89.1166687,
            'altitude' => 11.0,
        ]);

        City::create([
            'id' => 978,
            'country' => 'Bangladesh',
            'city' => 'Mirzapur',
            'latitude' => 24.1,
            'longitude' => 90.0999985,
            'altitude' => 16.0,
        ]);

        City::create([
            'id' => 979,
            'country' => 'Bangladesh',
            'city' => 'Sakhipur',
            'latitude' => 24.3,
            'longitude' => 90.1833344,
            'altitude' => 19.0,
        ]);

        City::create([
            'id' => 980,
            'country' => 'Bangladesh',
            'city' => 'Teknaf',
            'latitude' => 20.8666667,
            'longitude' => 92.3000031,
            'altitude' => 9999.0,
        ]);

        City::create([
            'id' => 981,
            'country' => 'Bangladesh',
            'city' => 'Gaurnadi',
            'latitude' => 22.9666667,
            'longitude' => 90.2333298,
            'altitude' => 2.0,
        ]);

        City::create([
            'id' => 982,
            'country' => 'Bangladesh',
            'city' => 'Kalia',
            'latitude' => 23.05,
            'longitude' => 89.6333313,
            'altitude' => 14.0,
        ]);

        City::create([
            'id' => 983,
            'country' => 'Bangladesh',
            'city' => 'Bera',
            'latitude' => 24.0833333,
            'longitude' => 89.6166687,
            'altitude' => 20.0,
        ]);

        City::create([
            'id' => 984,
            'country' => 'Bangladesh',
            'city' => 'Mehendiganj',
            'latitude' => 22.8166667,
            'longitude' => 90.5333328,
            'altitude' => 2.0,
        ]);

        City::create([
            'id' => 985,
            'country' => 'Bangladesh',
            'city' => 'Chhagalnaiya',
            'latitude' => 23.03,
            'longitude' => 91.5069427,
            'altitude' => 8.0,
        ]);

        City::create([
            'id' => 986,
            'country' => 'Bangladesh',
            'city' => 'Chhatak',
            'latitude' => 25.0333333,
            'longitude' => 91.6666641,
            'altitude' => 6.0,
        ]);

        City::create([
            'id' => 987,
            'country' => 'Bangladesh',
            'city' => 'Nalchiti',
            'latitude' => 22.6333333,
            'longitude' => 90.2833328,
            'altitude' => 2.0,
        ]);

        City::create([
            'id' => 988,
            'country' => 'Bangladesh',
            'city' => 'Bheramara',
            'latitude' => 24.0333333,
            'longitude' => 88.9666672,
            'altitude' => 8.0,
        ]);

        City::create([
            'id' => 989,
            'country' => 'Bangladesh',
            'city' => 'Phultala',
            'latitude' => 22.7,
            'longitude' => 89.5166702,
            'altitude' => 9.0,
        ]);

        City::create([
            'id' => 990,
            'country' => 'Bangladesh',
            'city' => 'Baniachang',
            'latitude' => 24.5166667,
            'longitude' => 91.3666687,
            'altitude' => 4.0,
        ]);

        City::create([
            'id' => 991,
            'country' => 'Bangladesh',
            'city' => 'Sarankhola',
            'latitude' => 22.3,
            'longitude' => 89.7833328,
            'altitude' => 1.0,
        ]);

        City::create([
            'id' => 992,
            'country' => 'Bangladesh',
            'city' => 'Shibganj',
            'latitude' => 24.6833333,
            'longitude' => 88.1666641,
            'altitude' => 17.0,
        ]);

        City::create([
            'id' => 993,
            'country' => 'Bangladesh',
            'city' => 'Pirganj',
            'latitude' => 25.8666667,
            'longitude' => 88.3666687,
            'altitude' => 35.0,
        ]);

        City::create([
            'id' => 994,
            'country' => 'Bangladesh',
            'city' => 'Bajitpur',
            'latitude' => 24.2166667,
            'longitude' => 90.9499969,
            'altitude' => 10.0,
        ]);

        City::create([
            'id' => 995,
            'country' => 'Bangladesh',
            'city' => 'Char Bhadrasan',
            'latitude' => 23.3166667,
            'longitude' => 90.2166672,
            'altitude' => 4.0,
        ]);

        City::create([
            'id' => 996,
            'country' => 'Bangladesh',
            'city' => 'Gafargaon',
            'latitude' => 24.4333333,
            'longitude' => 90.5666656,
            'altitude' => 13.0,
        ]);

        City::create([
            'id' => 997,
            'country' => 'Bangladesh',
            'city' => 'Fatikchari',
            'latitude' => 22.6883333,
            'longitude' => 91.7908325,
            'altitude' => 9.0,
        ]);

        City::create([
            'id' => 998,
            'country' => 'Bangladesh',
            'city' => 'Badarganj',
            'latitude' => 25.6666667,
            'longitude' => 89.0500031,
            'altitude' => 32.0,
        ]);

        City::create([
            'id' => 999,
            'country' => 'Bangladesh',
            'city' => 'Bandarban',
            'latitude' => 22.1980556,
            'longitude' => 92.2197189,
            'altitude' => 10.0,
        ]);

        City::create([
            'id' => 1000,
            'country' => 'Bangladesh',
            'city' => 'Nabinagar',
            'latitude' => 23.8916667,
            'longitude' => 90.9733353,
            'altitude' => 3.0,
        ]);

        City::create([
            'id' => 1001,
            'country' => 'Bangladesh',
            'city' => 'Morrelganj',
            'latitude' => 22.4666667,
            'longitude' => 89.8499985,
            'altitude' => 1.0,
        ]);

        City::create([
            'id' => 1002,
            'country' => 'Bangladesh',
            'city' => 'Kesabpur',
            'latitude' => 22.9166667,
            'longitude' => 89.2166672,
            'altitude' => 14.0,
        ]);

        City::create([
            'id' => 1003,
            'country' => 'Bangladesh',
            'city' => 'Bhandaria',
            'latitude' => 22.4833333,
            'longitude' => 90.0666656,
            'altitude' => 2.0,
        ]);

        City::create([
            'id' => 1004,
            'country' => 'Bangladesh',
            'city' => 'Mathbaria',
            'latitude' => 22.3,
            'longitude' => 89.9499969,
            'altitude' => 7.0,
        ]);

        City::create([
            'id' => 1005,
            'country' => 'Bangladesh',
            'city' => 'Raojan',
            'latitude' => 22.5383333,
            'longitude' => 91.9147186,
            'altitude' => 7.0,
        ]);

        City::create([
            'id' => 1006,
            'country' => 'Bangladesh',
            'city' => 'Manikchhari',
            'latitude' => 22.8625,
            'longitude' => 91.8450012,
            'altitude' => 42.0,
        ]);

        City::create([
            'id' => 1007,
            'country' => 'Bangladesh',
            'city' => 'Muktagacha',
            'latitude' => 24.7666667,
            'longitude' => 90.2333298,
            'altitude' => 23.0,
        ]);
    }
}
