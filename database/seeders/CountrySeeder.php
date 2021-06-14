<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();

        Country::create([
            'id' => 1,
            'code' => 'AF',
            'name' => 'Afghanistan',
            'dial_code' => 93,
            'currency_name' => 'Afghan afghani',
            'currency_symbol' => '؋',
            'currency_code' => 'AFN'
        ]);

        Country::create([
            'id' => 2,
            'code' => 'AL',
            'name' => 'Albania',
            'dial_code' => 355,
            'currency_name' => 'Albanian lek',
            'currency_symbol' => 'L',
            'currency_code' => 'ALL'
        ]);

        Country::create([
            'id' => 3,
            'code' => 'DZ',
            'name' => 'Algeria',
            'dial_code' => 213,
            'currency_name' => 'Algerian dinar',
            'currency_symbol' => 'د.ج',
            'currency_code' => 'DZD'
        ]);

        Country::create([
            'id' => 4,
            'code' => 'AS',
            'name' => 'American Samoa',
            'dial_code' => 1684,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 5,
            'code' => 'AD',
            'name' => 'Andorra',
            'dial_code' => 376,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 6,
            'code' => 'AO',
            'name' => 'Angola',
            'dial_code' => 244,
            'currency_name' => 'Angolan kwanza',
            'currency_symbol' => 'Kz',
            'currency_code' => 'AOA'
        ]);

        Country::create([
            'id' => 7,
            'code' => 'AI',
            'name' => 'Anguilla',
            'dial_code' => 1264,
            'currency_name' => 'East Caribbean dolla',
            'currency_symbol' => '$',
            'currency_code' => 'XCD'
        ]);

        Country::create([
            'id' => 8,
            'code' => 'AQ',
            'name' => 'Antarctica',
            'dial_code' => 0,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 9,
            'code' => 'AG',
            'name' => 'Antigua And Barbuda',
            'dial_code' => 1268,
            'currency_name' => 'East Caribbean dolla',
            'currency_symbol' => '$',
            'currency_code' => 'XCD'
        ]);

        Country::create([
            'id' => 10,
            'code' => 'AR',
            'name' => 'Argentina',
            'dial_code' => 54,
            'currency_name' => 'Argentine peso',
            'currency_symbol' => '$',
            'currency_code' => 'ARS'
        ]);

        Country::create([
            'id' => 11,
            'code' => 'AM',
            'name' => 'Armenia',
            'dial_code' => 374,
            'currency_name' => 'Armenian dram',
            'currency_symbol' => '',
            'currency_code' => 'AMD'
        ]);

        Country::create([
            'id' => 12,
            'code' => 'AW',
            'name' => 'Aruba',
            'dial_code' => 297,
            'currency_name' => 'Aruban florin',
            'currency_symbol' => 'ƒ',
            'currency_code' => 'AWG'
        ]);

        Country::create([
            'id' => 13,
            'code' => 'AU',
            'name' => 'Australia',
            'dial_code' => 61,
            'currency_name' => 'Australian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'AUD'
        ]);

        Country::create([
            'id' => 14,
            'code' => 'AT',
            'name' => 'Austria',
            'dial_code' => 43,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 15,
            'code' => 'AZ',
            'name' => 'Azerbaijan',
            'dial_code' => 994,
            'currency_name' => 'Azerbaijani manat',
            'currency_symbol' => '',
            'currency_code' => 'AZN'
        ]);

        Country::create([
            'id' => 16,
            'code' => 'BS',
            'name' => 'Bahamas The',
            'dial_code' => 1242,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 17,
            'code' => 'BH',
            'name' => 'Bahrain',
            'dial_code' => 973,
            'currency_name' => 'Bahraini dinar',
            'currency_symbol' => '.د.ب',
            'currency_code' => 'BHD'
        ]);

        Country::create([
            'id' => 18,
            'code' => 'BD',
            'name' => 'Bangladesh',
            'dial_code' => 880,
            'currency_name' => 'Bangladeshi taka',
            'currency_symbol' => '৳',
            'currency_code' => 'BDT'
        ]);

        Country::create([
            'id' => 19,
            'code' => 'BB',
            'name' => 'Barbados',
            'dial_code' => 1246,
            'currency_name' => 'Barbadian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'BBD'
        ]);

        Country::create([
            'id' => 20,
            'code' => 'BY',
            'name' => 'Belarus',
            'dial_code' => 375,
            'currency_name' => 'Belarusian ruble',
            'currency_symbol' => 'Br',
            'currency_code' => 'BYR'
        ]);

        Country::create([
            'id' => 21,
            'code' => 'BE',
            'name' => 'Belgium',
            'dial_code' => 32,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 22,
            'code' => 'BZ',
            'name' => 'Belize',
            'dial_code' => 501,
            'currency_name' => 'Belize dollar',
            'currency_symbol' => '$',
            'currency_code' => 'BZD'
        ]);

        Country::create([
            'id' => 23,
            'code' => 'BJ',
            'name' => 'Benin',
            'dial_code' => 229,
            'currency_name' => 'West African CFA fra',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XOF'
        ]);

        Country::create([
            'id' => 24,
            'code' => 'BM',
            'name' => 'Bermuda',
            'dial_code' => 1441,
            'currency_name' => 'Bermudian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'BMD'
        ]);

        Country::create([
            'id' => 25,
            'code' => 'BT',
            'name' => 'Bhutan',
            'dial_code' => 975,
            'currency_name' => 'Bhutanese ngultrum',
            'currency_symbol' => 'Nu.',
            'currency_code' => 'BTN'
        ]);

        Country::create([
            'id' => 26,
            'code' => 'BO',
            'name' => 'Bolivia',
            'dial_code' => 591,
            'currency_name' => 'Bolivian boliviano',
            'currency_symbol' => 'Bs.',
            'currency_code' => 'BOB'
        ]);

        Country::create([
            'id' => 27,
            'code' => 'BA',
            'name' => 'Bosnia and Herzegovina',
            'dial_code' => 387,
            'currency_name' => 'Bosnia and Herzegovi',
            'currency_symbol' => 'KM or КМ',
            'currency_code' => 'BAM'
        ]);

        Country::create([
            'id' => 28,
            'code' => 'BW',
            'name' => 'Botswana',
            'dial_code' => 267,
            'currency_name' => 'Botswana pula',
            'currency_symbol' => 'P',
            'currency_code' => 'BWP'
        ]);

        Country::create([
            'id' => 29,
            'code' => 'BV',
            'name' => 'Bouvet Island',
            'dial_code' => 0,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 30,
            'code' => 'BR',
            'name' => 'Brazil',
            'dial_code' => 55,
            'currency_name' => 'Brazilian real',
            'currency_symbol' => 'R$',
            'currency_code' => 'BRL'
        ]);

        Country::create([
            'id' => 31,
            'code' => 'IO',
            'name' => 'British Indian Ocean Territory',
            'dial_code' => 246,
            'currency_name' => 'United States dollar',
            'currency_symbol' => '$',
            'currency_code' => 'USD'
        ]);

        Country::create([
            'id' => 32,
            'code' => 'BN',
            'name' => 'Brunei',
            'dial_code' => 673,
            'currency_name' => 'Brunei dollar',
            'currency_symbol' => '$',
            'currency_code' => 'BND'
        ]);

        Country::create([
            'id' => 33,
            'code' => 'BG',
            'name' => 'Bulgaria',
            'dial_code' => 359,
            'currency_name' => 'Bulgarian lev',
            'currency_symbol' => 'лв',
            'currency_code' => 'BGN'
        ]);

        Country::create([
            'id' => 34,
            'code' => 'BF',
            'name' => 'Burkina Faso',
            'dial_code' => 226,
            'currency_name' => 'West African CFA fra',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XOF'
        ]);

        Country::create([
            'id' => 35,
            'code' => 'BI',
            'name' => 'Burundi',
            'dial_code' => 257,
            'currency_name' => 'Burundian franc',
            'currency_symbol' => 'Fr',
            'currency_code' => 'BIF'
        ]);

        Country::create([
            'id' => 36,
            'code' => 'KH',
            'name' => 'Cambodia',
            'dial_code' => 855,
            'currency_name' => 'Cambodian riel',
            'currency_symbol' => '៛',
            'currency_code' => 'KHR'
        ]);

        Country::create([
            'id' => 37,
            'code' => 'CM',
            'name' => 'Cameroon',
            'dial_code' => 237,
            'currency_name' => 'Central African CFA ',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XAF'
        ]);

        Country::create([
            'id' => 38,
            'code' => 'CA',
            'name' => 'Canada',
            'dial_code' => 1,
            'currency_name' => 'Canadian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'CAD'
        ]);

        Country::create([
            'id' => 39,
            'code' => 'CV',
            'name' => 'Cape Verde',
            'dial_code' => 238,
            'currency_name' => 'Cape Verdean escudo',
            'currency_symbol' => 'Esc or $',
            'currency_code' => 'CVE'
        ]);

        Country::create([
            'id' => 40,
            'code' => 'KY',
            'name' => 'Cayman Islands',
            'dial_code' => 1345,
            'currency_name' => 'Cayman Islands dolla',
            'currency_symbol' => '$',
            'currency_code' => 'KYD'
        ]);

        Country::create([
            'id' => 41,
            'code' => 'CF',
            'name' => 'Central African Republic',
            'dial_code' => 236,
            'currency_name' => 'Central African CFA ',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XAF'
        ]);

        Country::create([
            'id' => 42,
            'code' => 'TD',
            'name' => 'Chad',
            'dial_code' => 235,
            'currency_name' => 'Central African CFA ',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XAF'
        ]);

        Country::create([
            'id' => 43,
            'code' => 'CL',
            'name' => 'Chile',
            'dial_code' => 56,
            'currency_name' => 'Chilean peso',
            'currency_symbol' => '$',
            'currency_code' => 'CLP'
        ]);

        Country::create([
            'id' => 44,
            'code' => 'CN',
            'name' => 'China',
            'dial_code' => 86,
            'currency_name' => 'Chinese yuan',
            'currency_symbol' => '¥ or 元',
            'currency_code' => 'CNY'
        ]);

        Country::create([
            'id' => 45,
            'code' => 'CX',
            'name' => 'Christmas Island',
            'dial_code' => 61,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 46,
            'code' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
            'dial_code' => 672,
            'currency_name' => 'Australian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'AUD'
        ]);

        Country::create([
            'id' => 47,
            'code' => 'CO',
            'name' => 'Colombia',
            'dial_code' => 57,
            'currency_name' => 'Colombian peso',
            'currency_symbol' => '$',
            'currency_code' => 'COP'
        ]);

        Country::create([
            'id' => 48,
            'code' => 'KM',
            'name' => 'Comoros',
            'dial_code' => 269,
            'currency_name' => 'Comorian franc',
            'currency_symbol' => 'Fr',
            'currency_code' => 'KMF'
        ]);

        Country::create([
            'id' => 49,
            'code' => 'CG',
            'name' => 'Congo',
            'dial_code' => 242,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 50,
            'code' => 'CD',
            'name' => 'Congo The Democratic Republic Of The',
            'dial_code' => 242,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 51,
            'code' => 'CK',
            'name' => 'Cook Islands',
            'dial_code' => 682,
            'currency_name' => 'New Zealand dollar',
            'currency_symbol' => '$',
            'currency_code' => 'NZD'
        ]);

        Country::create([
            'id' => 52,
            'code' => 'CR',
            'name' => 'Costa Rica',
            'dial_code' => 506,
            'currency_name' => 'Costa Rican colón',
            'currency_symbol' => '₡',
            'currency_code' => 'CRC'
        ]);

        Country::create([
            'id' => 53,
            'code' => 'CI',
            'name' => 'Cote D\'Ivoire (Ivory Coast)',
            'dial_code' => 225,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 54,
            'code' => 'HR',
            'name' => 'Croatia (Hrvatska)',
            'dial_code' => 385,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 55,
            'code' => 'CU',
            'name' => 'Cuba',
            'dial_code' => 53,
            'currency_name' => 'Cuban convertible pe',
            'currency_symbol' => '$',
            'currency_code' => 'CUC'
        ]);

        Country::create([
            'id' => 56,
            'code' => 'CY',
            'name' => 'Cyprus',
            'dial_code' => 357,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 57,
            'code' => 'CZ',
            'name' => 'Czech Republic',
            'dial_code' => 420,
            'currency_name' => 'Czech koruna',
            'currency_symbol' => 'Kč',
            'currency_code' => 'CZK'
        ]);

        Country::create([
            'id' => 58,
            'code' => 'DK',
            'name' => 'Denmark',
            'dial_code' => 45,
            'currency_name' => 'Danish krone',
            'currency_symbol' => 'kr',
            'currency_code' => 'DKK'
        ]);

        Country::create([
            'id' => 59,
            'code' => 'DJ',
            'name' => 'Djibouti',
            'dial_code' => 253,
            'currency_name' => 'Djiboutian franc',
            'currency_symbol' => 'Fr',
            'currency_code' => 'DJF'
        ]);

        Country::create([
            'id' => 60,
            'code' => 'DM',
            'name' => 'Dominica',
            'dial_code' => 1767,
            'currency_name' => 'East Caribbean dolla',
            'currency_symbol' => '$',
            'currency_code' => 'XCD'
        ]);

        Country::create([
            'id' => 61,
            'code' => 'DO',
            'name' => 'Dominican Republic',
            'dial_code' => 1809,
            'currency_name' => 'Dominican peso',
            'currency_symbol' => '$',
            'currency_code' => 'DOP'
        ]);

        Country::create([
            'id' => 62,
            'code' => 'TP',
            'name' => 'East Timor',
            'dial_code' => 670,
            'currency_name' => 'United States dollar',
            'currency_symbol' => '$',
            'currency_code' => 'USD'
        ]);

        Country::create([
            'id' => 63,
            'code' => 'EC',
            'name' => 'Ecuador',
            'dial_code' => 593,
            'currency_name' => 'United States dollar',
            'currency_symbol' => '$',
            'currency_code' => 'USD'
        ]);

        Country::create([
            'id' => 64,
            'code' => 'EG',
            'name' => 'Egypt',
            'dial_code' => 20,
            'currency_name' => 'Egyptian pound',
            'currency_symbol' => '£ or ج.م',
            'currency_code' => 'EGP'
        ]);

        Country::create([
            'id' => 65,
            'code' => 'SV',
            'name' => 'El Salvador',
            'dial_code' => 503,
            'currency_name' => 'United States dollar',
            'currency_symbol' => '$',
            'currency_code' => 'USD'
        ]);

        Country::create([
            'id' => 66,
            'code' => 'GQ',
            'name' => 'Equatorial Guinea',
            'dial_code' => 240,
            'currency_name' => 'Central African CFA ',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XAF'
        ]);

        Country::create([
            'id' => 67,
            'code' => 'ER',
            'name' => 'Eritrea',
            'dial_code' => 291,
            'currency_name' => 'Eritrean nakfa',
            'currency_symbol' => 'Nfk',
            'currency_code' => 'ERN'
        ]);

        Country::create([
            'id' => 68,
            'code' => 'EE',
            'name' => 'Estonia',
            'dial_code' => 372,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 69,
            'code' => 'ET',
            'name' => 'Ethiopia',
            'dial_code' => 251,
            'currency_name' => 'Ethiopian birr',
            'currency_symbol' => 'Br',
            'currency_code' => 'ETB'
        ]);

        Country::create([
            'id' => 70,
            'code' => 'XA',
            'name' => 'External Territories of Australia',
            'dial_code' => 61,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 71,
            'code' => 'FK',
            'name' => 'Falkland Islands',
            'dial_code' => 500,
            'currency_name' => 'Falkland Islands pou',
            'currency_symbol' => '£',
            'currency_code' => 'FKP'
        ]);

        Country::create([
            'id' => 72,
            'code' => 'FO',
            'name' => 'Faroe Islands',
            'dial_code' => 298,
            'currency_name' => 'Danish krone',
            'currency_symbol' => 'kr',
            'currency_code' => 'DKK'
        ]);

        Country::create([
            'id' => 73,
            'code' => 'FJ',
            'name' => 'Fiji Islands',
            'dial_code' => 679,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 74,
            'code' => 'FI',
            'name' => 'Finland',
            'dial_code' => 358,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 75,
            'code' => 'FR',
            'name' => 'France',
            'dial_code' => 33,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 76,
            'code' => 'GF',
            'name' => 'French Guiana',
            'dial_code' => 594,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 77,
            'code' => 'PF',
            'name' => 'French Polynesia',
            'dial_code' => 689,
            'currency_name' => 'CFP franc',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XPF'
        ]);

        Country::create([
            'id' => 78,
            'code' => 'TF',
            'name' => 'French Southern Territories',
            'dial_code' => 0,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 79,
            'code' => 'GA',
            'name' => 'Gabon',
            'dial_code' => 241,
            'currency_name' => 'Central African CFA ',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XAF'
        ]);

        Country::create([
            'id' => 80,
            'code' => 'GM',
            'name' => 'Gambia The',
            'dial_code' => 220,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 81,
            'code' => 'GE',
            'name' => 'Georgia',
            'dial_code' => 995,
            'currency_name' => 'Georgian lari',
            'currency_symbol' => 'ლ',
            'currency_code' => 'GEL'
        ]);

        Country::create([
            'id' => 82,
            'code' => 'DE',
            'name' => 'Germany',
            'dial_code' => 49,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 83,
            'code' => 'GH',
            'name' => 'Ghana',
            'dial_code' => 233,
            'currency_name' => 'Ghana cedi',
            'currency_symbol' => '₵',
            'currency_code' => 'GHS'
        ]);

        Country::create([
            'id' => 84,
            'code' => 'GI',
            'name' => 'Gibraltar',
            'dial_code' => 350,
            'currency_name' => 'Gibraltar pound',
            'currency_symbol' => '£',
            'currency_code' => 'GIP'
        ]);

        Country::create([
            'id' => 85,
            'code' => 'GR',
            'name' => 'Greece',
            'dial_code' => 30,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 86,
            'code' => 'GL',
            'name' => 'Greenland',
            'dial_code' => 299,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 87,
            'code' => 'GD',
            'name' => 'Grenada',
            'dial_code' => 1473,
            'currency_name' => 'East Caribbean dolla',
            'currency_symbol' => '$',
            'currency_code' => 'XCD'
        ]);

        Country::create([
            'id' => 88,
            'code' => 'GP',
            'name' => 'Guadeloupe',
            'dial_code' => 590,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 89,
            'code' => 'GU',
            'name' => 'Guam',
            'dial_code' => 1671,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 90,
            'code' => 'GT',
            'name' => 'Guatemala',
            'dial_code' => 502,
            'currency_name' => 'Guatemalan quetzal',
            'currency_symbol' => 'Q',
            'currency_code' => 'GTQ'
        ]);

        Country::create([
            'id' => 91,
            'code' => 'XU',
            'name' => 'Guernsey and Alderney',
            'dial_code' => 44,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 92,
            'code' => 'GN',
            'name' => 'Guinea',
            'dial_code' => 224,
            'currency_name' => 'Guinean franc',
            'currency_symbol' => 'Fr',
            'currency_code' => 'GNF'
        ]);

        Country::create([
            'id' => 93,
            'code' => 'GW',
            'name' => 'Guinea-Bissau',
            'dial_code' => 245,
            'currency_name' => 'West African CFA fra',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XOF'
        ]);

        Country::create([
            'id' => 94,
            'code' => 'GY',
            'name' => 'Guyana',
            'dial_code' => 592,
            'currency_name' => 'Guyanese dollar',
            'currency_symbol' => '$',
            'currency_code' => 'GYD'
        ]);

        Country::create([
            'id' => 95,
            'code' => 'HT',
            'name' => 'Haiti',
            'dial_code' => 509,
            'currency_name' => 'Haitian gourde',
            'currency_symbol' => 'G',
            'currency_code' => 'HTG'
        ]);

        Country::create([
            'id' => 96,
            'code' => 'HM',
            'name' => 'Heard and McDonald Islands',
            'dial_code' => 0,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 97,
            'code' => 'HN',
            'name' => 'Honduras',
            'dial_code' => 504,
            'currency_name' => 'Honduran lempira',
            'currency_symbol' => 'L',
            'currency_code' => 'HNL'
        ]);

        Country::create([
            'id' => 98,
            'code' => 'HK',
            'name' => 'Hong Kong S.A.R.',
            'dial_code' => 852,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 99,
            'code' => 'HU',
            'name' => 'Hungary',
            'dial_code' => 36,
            'currency_name' => 'Hungarian forint',
            'currency_symbol' => 'Ft',
            'currency_code' => 'HUF'
        ]);

        Country::create([
            'id' => 100,
            'code' => 'IS',
            'name' => 'Iceland',
            'dial_code' => 354,
            'currency_name' => 'Icelandic króna',
            'currency_symbol' => 'kr',
            'currency_code' => 'ISK'
        ]);

        Country::create([
            'id' => 101,
            'code' => 'IN',
            'name' => 'India',
            'dial_code' => 91,
            'currency_name' => 'Indian rupee',
            'currency_symbol' => '₹',
            'currency_code' => 'INR'
        ]);

        Country::create([
            'id' => 102,
            'code' => 'ID',
            'name' => 'Indonesia',
            'dial_code' => 62,
            'currency_name' => 'Indonesian rupiah',
            'currency_symbol' => 'Rp',
            'currency_code' => 'IDR'
        ]);

        Country::create([
            'id' => 103,
            'code' => 'IR',
            'name' => 'Iran',
            'dial_code' => 98,
            'currency_name' => 'Iranian rial',
            'currency_symbol' => '﷼',
            'currency_code' => 'IRR'
        ]);

        Country::create([
            'id' => 104,
            'code' => 'IQ',
            'name' => 'Iraq',
            'dial_code' => 964,
            'currency_name' => 'Iraqi dinar',
            'currency_symbol' => 'ع.د',
            'currency_code' => 'IQD'
        ]);

        Country::create([
            'id' => 105,
            'code' => 'IE',
            'name' => 'Ireland',
            'dial_code' => 353,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 106,
            'code' => 'IL',
            'name' => 'Israel',
            'dial_code' => 972,
            'currency_name' => 'Israeli new shekel',
            'currency_symbol' => '₪',
            'currency_code' => 'ILS'
        ]);

        Country::create([
            'id' => 107,
            'code' => 'IT',
            'name' => 'Italy',
            'dial_code' => 39,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 108,
            'code' => 'JM',
            'name' => 'Jamaica',
            'dial_code' => 1876,
            'currency_name' => 'Jamaican dollar',
            'currency_symbol' => '$',
            'currency_code' => 'JMD'
        ]);

        Country::create([
            'id' => 109,
            'code' => 'JP',
            'name' => 'Japan',
            'dial_code' => 81,
            'currency_name' => 'Japanese yen',
            'currency_symbol' => '¥',
            'currency_code' => 'JPY'
        ]);

        Country::create([
            'id' => 110,
            'code' => 'XJ',
            'name' => 'Jersey',
            'dial_code' => 44,
            'currency_name' => 'British pound',
            'currency_symbol' => '£',
            'currency_code' => 'GBP'
        ]);

        Country::create([
            'id' => 111,
            'code' => 'JO',
            'name' => 'Jordan',
            'dial_code' => 962,
            'currency_name' => 'Jordanian dinar',
            'currency_symbol' => 'د.ا',
            'currency_code' => 'JOD'
        ]);

        Country::create([
            'id' => 112,
            'code' => 'KZ',
            'name' => 'Kazakhstan',
            'dial_code' => 7,
            'currency_name' => 'Kazakhstani tenge',
            'currency_symbol' => '',
            'currency_code' => 'KZT'
        ]);

        Country::create([
            'id' => 113,
            'code' => 'KE',
            'name' => 'Kenya',
            'dial_code' => 254,
            'currency_name' => 'Kenyan shilling',
            'currency_symbol' => 'Sh',
            'currency_code' => 'KES'
        ]);

        Country::create([
            'id' => 114,
            'code' => 'KI',
            'name' => 'Kiribati',
            'dial_code' => 686,
            'currency_name' => 'Australian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'AUD'
        ]);

        Country::create([
            'id' => 115,
            'code' => 'KP',
            'name' => 'Korea North',
            'dial_code' => 850,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 116,
            'code' => 'KR',
            'name' => 'Korea South',
            'dial_code' => 82,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 117,
            'code' => 'KW',
            'name' => 'Kuwait',
            'dial_code' => 965,
            'currency_name' => 'Kuwaiti dinar',
            'currency_symbol' => 'د.ك',
            'currency_code' => 'KWD'
        ]);

        Country::create([
            'id' => 118,
            'code' => 'KG',
            'name' => 'Kyrgyzstan',
            'dial_code' => 996,
            'currency_name' => 'Kyrgyzstani som',
            'currency_symbol' => 'лв',
            'currency_code' => 'KGS'
        ]);

        Country::create([
            'id' => 119,
            'code' => 'LA',
            'name' => 'Laos',
            'dial_code' => 856,
            'currency_name' => 'Lao kip',
            'currency_symbol' => '₭',
            'currency_code' => 'LAK'
        ]);

        Country::create([
            'id' => 120,
            'code' => 'LV',
            'name' => 'Latvia',
            'dial_code' => 371,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 121,
            'code' => 'LB',
            'name' => 'Lebanon',
            'dial_code' => 961,
            'currency_name' => 'Lebanese pound',
            'currency_symbol' => 'ل.ل',
            'currency_code' => 'LBP'
        ]);

        Country::create([
            'id' => 122,
            'code' => 'LS',
            'name' => 'Lesotho',
            'dial_code' => 266,
            'currency_name' => 'Lesotho loti',
            'currency_symbol' => 'L',
            'currency_code' => 'LSL'
        ]);

        Country::create([
            'id' => 123,
            'code' => 'LR',
            'name' => 'Liberia',
            'dial_code' => 231,
            'currency_name' => 'Liberian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'LRD'
        ]);

        Country::create([
            'id' => 124,
            'code' => 'LY',
            'name' => 'Libya',
            'dial_code' => 218,
            'currency_name' => 'Libyan dinar',
            'currency_symbol' => 'ل.د',
            'currency_code' => 'LYD'
        ]);

        Country::create([
            'id' => 125,
            'code' => 'LI',
            'name' => 'Liechtenstein',
            'dial_code' => 423,
            'currency_name' => 'Swiss franc',
            'currency_symbol' => 'Fr',
            'currency_code' => 'CHF'
        ]);

        Country::create([
            'id' => 126,
            'code' => 'LT',
            'name' => 'Lithuania',
            'dial_code' => 370,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 127,
            'code' => 'LU',
            'name' => 'Luxembourg',
            'dial_code' => 352,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 128,
            'code' => 'MO',
            'name' => 'Macau S.A.R.',
            'dial_code' => 853,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 129,
            'code' => 'MK',
            'name' => 'Macedonia',
            'dial_code' => 389,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 130,
            'code' => 'MG',
            'name' => 'Madagascar',
            'dial_code' => 261,
            'currency_name' => 'Malagasy ariary',
            'currency_symbol' => 'Ar',
            'currency_code' => 'MGA'
        ]);

        Country::create([
            'id' => 131,
            'code' => 'MW',
            'name' => 'Malawi',
            'dial_code' => 265,
            'currency_name' => 'Malawian kwacha',
            'currency_symbol' => 'MK',
            'currency_code' => 'MWK'
        ]);

        Country::create([
            'id' => 132,
            'code' => 'MY',
            'name' => 'Malaysia',
            'dial_code' => 60,
            'currency_name' => 'Malaysian ringgit',
            'currency_symbol' => 'RM',
            'currency_code' => 'MYR'
        ]);

        Country::create([
            'id' => 133,
            'code' => 'MV',
            'name' => 'Maldives',
            'dial_code' => 960,
            'currency_name' => 'Maldivian rufiyaa',
            'currency_symbol' => '.ރ',
            'currency_code' => 'MVR'
        ]);

        Country::create([
            'id' => 134,
            'code' => 'ML',
            'name' => 'Mali',
            'dial_code' => 223,
            'currency_name' => 'West African CFA fra',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XOF'
        ]);

        Country::create([
            'id' => 135,
            'code' => 'MT',
            'name' => 'Malta',
            'dial_code' => 356,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 136,
            'code' => 'XM',
            'name' => 'Man (Isle of)',
            'dial_code' => 44,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 137,
            'code' => 'MH',
            'name' => 'Marshall Islands',
            'dial_code' => 692,
            'currency_name' => 'United States dollar',
            'currency_symbol' => '$',
            'currency_code' => 'USD'
        ]);

        Country::create([
            'id' => 138,
            'code' => 'MQ',
            'name' => 'Martinique',
            'dial_code' => 596,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 139,
            'code' => 'MR',
            'name' => 'Mauritania',
            'dial_code' => 222,
            'currency_name' => 'Mauritanian ouguiya',
            'currency_symbol' => 'UM',
            'currency_code' => 'MRO'
        ]);

        Country::create([
            'id' => 140,
            'code' => 'MU',
            'name' => 'Mauritius',
            'dial_code' => 230,
            'currency_name' => 'Mauritian rupee',
            'currency_symbol' => '₨',
            'currency_code' => 'MUR'
        ]);

        Country::create([
            'id' => 141,
            'code' => 'YT',
            'name' => 'Mayotte',
            'dial_code' => 269,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 142,
            'code' => 'MX',
            'name' => 'Mexico',
            'dial_code' => 52,
            'currency_name' => 'Mexican peso',
            'currency_symbol' => '$',
            'currency_code' => 'MXN'
        ]);

        Country::create([
            'id' => 143,
            'code' => 'FM',
            'name' => 'Micronesia',
            'dial_code' => 691,
            'currency_name' => 'Micronesian dollar',
            'currency_symbol' => '$',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 144,
            'code' => 'MD',
            'name' => 'Moldova',
            'dial_code' => 373,
            'currency_name' => 'Moldovan leu',
            'currency_symbol' => 'L',
            'currency_code' => 'MDL'
        ]);

        Country::create([
            'id' => 145,
            'code' => 'MC',
            'name' => 'Monaco',
            'dial_code' => 377,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 146,
            'code' => 'MN',
            'name' => 'Mongolia',
            'dial_code' => 976,
            'currency_name' => 'Mongolian tögrög',
            'currency_symbol' => '₮',
            'currency_code' => 'MNT'
        ]);

        Country::create([
            'id' => 147,
            'code' => 'MS',
            'name' => 'Montserrat',
            'dial_code' => 1664,
            'currency_name' => 'East Caribbean dolla',
            'currency_symbol' => '$',
            'currency_code' => 'XCD'
        ]);

        Country::create([
            'id' => 148,
            'code' => 'MA',
            'name' => 'Morocco',
            'dial_code' => 212,
            'currency_name' => 'Moroccan dirham',
            'currency_symbol' => 'د.م.',
            'currency_code' => 'MAD'
        ]);

        Country::create([
            'id' => 149,
            'code' => 'MZ',
            'name' => 'Mozambique',
            'dial_code' => 258,
            'currency_name' => 'Mozambican metical',
            'currency_symbol' => 'MT',
            'currency_code' => 'MZN'
        ]);

        Country::create([
            'id' => 150,
            'code' => 'MM',
            'name' => 'Myanmar',
            'dial_code' => 95,
            'currency_name' => 'Burmese kyat',
            'currency_symbol' => 'Ks',
            'currency_code' => 'MMK'
        ]);

        Country::create([
            'id' => 151,
            'code' => 'NA',
            'name' => 'Namibia',
            'dial_code' => 264,
            'currency_name' => 'Namibian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'NAD'
        ]);

        Country::create([
            'id' => 152,
            'code' => 'NR',
            'name' => 'Nauru',
            'dial_code' => 674,
            'currency_name' => 'Australian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'AUD'
        ]);

        Country::create([
            'id' => 153,
            'code' => 'NP',
            'name' => 'Nepal',
            'dial_code' => 977,
            'currency_name' => 'Nepalese rupee',
            'currency_symbol' => '₨',
            'currency_code' => 'NPR'
        ]);

        Country::create([
            'id' => 154,
            'code' => 'AN',
            'name' => 'Netherlands Antilles',
            'dial_code' => 599,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 155,
            'code' => 'NL',
            'name' => 'Netherlands The',
            'dial_code' => 31,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 156,
            'code' => 'NC',
            'name' => 'New Caledonia',
            'dial_code' => 687,
            'currency_name' => 'CFP franc',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XPF'
        ]);

        Country::create([
            'id' => 157,
            'code' => 'NZ',
            'name' => 'New Zealand',
            'dial_code' => 64,
            'currency_name' => 'New Zealand dollar',
            'currency_symbol' => '$',
            'currency_code' => 'NZD'
        ]);

        Country::create([
            'id' => 158,
            'code' => 'NI',
            'name' => 'Nicaragua',
            'dial_code' => 505,
            'currency_name' => 'Nicaraguan córdoba',
            'currency_symbol' => 'C$',
            'currency_code' => 'NIO'
        ]);

        Country::create([
            'id' => 159,
            'code' => 'NE',
            'name' => 'Niger',
            'dial_code' => 227,
            'currency_name' => 'West African CFA fra',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XOF'
        ]);

        Country::create([
            'id' => 160,
            'code' => 'NG',
            'name' => 'Nigeria',
            'dial_code' => 234,
            'currency_name' => 'Nigerian naira',
            'currency_symbol' => '₦',
            'currency_code' => 'NGN'
        ]);

        Country::create([
            'id' => 161,
            'code' => 'NU',
            'name' => 'Niue',
            'dial_code' => 683,
            'currency_name' => 'New Zealand dollar',
            'currency_symbol' => '$',
            'currency_code' => 'NZD'
        ]);

        Country::create([
            'id' => 162,
            'code' => 'NF',
            'name' => 'Norfolk Island',
            'dial_code' => 672,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 163,
            'code' => 'MP',
            'name' => 'Northern Mariana Islands',
            'dial_code' => 1670,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 164,
            'code' => 'NO',
            'name' => 'Norway',
            'dial_code' => 47,
            'currency_name' => 'Norwegian krone',
            'currency_symbol' => 'kr',
            'currency_code' => 'NOK'
        ]);

        Country::create([
            'id' => 165,
            'code' => 'OM',
            'name' => 'Oman',
            'dial_code' => 968,
            'currency_name' => 'Omani rial',
            'currency_symbol' => 'ر.ع.',
            'currency_code' => 'OMR'
        ]);

        Country::create([
            'id' => 166,
            'code' => 'PK',
            'name' => 'Pakistan',
            'dial_code' => 92,
            'currency_name' => 'Pakistani rupee',
            'currency_symbol' => '₨',
            'currency_code' => 'PKR'
        ]);

        Country::create([
            'id' => 167,
            'code' => 'PW',
            'name' => 'Palau',
            'dial_code' => 680,
            'currency_name' => 'Palauan dollar',
            'currency_symbol' => '$',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 168,
            'code' => 'PS',
            'name' => 'Palestinian Territory Occupied',
            'dial_code' => 970,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 169,
            'code' => 'PA',
            'name' => 'Panama',
            'dial_code' => 507,
            'currency_name' => 'Panamanian balboa',
            'currency_symbol' => 'B/.',
            'currency_code' => 'PAB'
        ]);

        Country::create([
            'id' => 170,
            'code' => 'PG',
            'name' => 'Papua new Guinea',
            'dial_code' => 675,
            'currency_name' => 'Papua New Guinean ki',
            'currency_symbol' => 'K',
            'currency_code' => 'PGK'
        ]);

        Country::create([
            'id' => 171,
            'code' => 'PY',
            'name' => 'Paraguay',
            'dial_code' => 595,
            'currency_name' => 'Paraguayan guaraní',
            'currency_symbol' => '₲',
            'currency_code' => 'PYG'
        ]);

        Country::create([
            'id' => 172,
            'code' => 'PE',
            'name' => 'Peru',
            'dial_code' => 51,
            'currency_name' => 'Peruvian nuevo sol',
            'currency_symbol' => 'S/.',
            'currency_code' => 'PEN'
        ]);

        Country::create([
            'id' => 173,
            'code' => 'PH',
            'name' => 'Philippines',
            'dial_code' => 63,
            'currency_name' => 'Philippine peso',
            'currency_symbol' => '₱',
            'currency_code' => 'PHP'
        ]);

        Country::create([
            'id' => 174,
            'code' => 'PN',
            'name' => 'Pitcairn Island',
            'dial_code' => 0,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 175,
            'code' => 'PL',
            'name' => 'Poland',
            'dial_code' => 48,
            'currency_name' => 'Polish złoty',
            'currency_symbol' => 'zł',
            'currency_code' => 'PLN'
        ]);

        Country::create([
            'id' => 176,
            'code' => 'PT',
            'name' => 'Portugal',
            'dial_code' => 351,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 177,
            'code' => 'PR',
            'name' => 'Puerto Rico',
            'dial_code' => 1787,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 178,
            'code' => 'QA',
            'name' => 'Qatar',
            'dial_code' => 974,
            'currency_name' => 'Qatari riyal',
            'currency_symbol' => 'ر.ق',
            'currency_code' => 'QAR'
        ]);

        Country::create([
            'id' => 179,
            'code' => 'RE',
            'name' => 'Reunion',
            'dial_code' => 262,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 180,
            'code' => 'RO',
            'name' => 'Romania',
            'dial_code' => 40,
            'currency_name' => 'Romanian leu',
            'currency_symbol' => 'lei',
            'currency_code' => 'RON'
        ]);

        Country::create([
            'id' => 181,
            'code' => 'RU',
            'name' => 'Russia',
            'dial_code' => 70,
            'currency_name' => 'Russian ruble',
            'currency_symbol' => '',
            'currency_code' => 'RUB'
        ]);

        Country::create([
            'id' => 182,
            'code' => 'RW',
            'name' => 'Rwanda',
            'dial_code' => 250,
            'currency_name' => 'Rwandan franc',
            'currency_symbol' => 'Fr',
            'currency_code' => 'RWF'
        ]);

        Country::create([
            'id' => 183,
            'code' => 'SH',
            'name' => 'Saint Helena',
            'dial_code' => 290,
            'currency_name' => 'Saint Helena pound',
            'currency_symbol' => '£',
            'currency_code' => 'SHP'
        ]);

        Country::create([
            'id' => 184,
            'code' => 'KN',
            'name' => 'Saint Kitts And Nevis',
            'dial_code' => 1869,
            'currency_name' => 'East Caribbean dolla',
            'currency_symbol' => '$',
            'currency_code' => 'XCD'
        ]);

        Country::create([
            'id' => 185,
            'code' => 'LC',
            'name' => 'Saint Lucia',
            'dial_code' => 1758,
            'currency_name' => 'East Caribbean dolla',
            'currency_symbol' => '$',
            'currency_code' => 'XCD'
        ]);

        Country::create([
            'id' => 186,
            'code' => 'PM',
            'name' => 'Saint Pierre and Miquelon',
            'dial_code' => 508,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 187,
            'code' => 'VC',
            'name' => 'Saint Vincent And The Grenadines',
            'dial_code' => 1784,
            'currency_name' => 'East Caribbean dolla',
            'currency_symbol' => '$',
            'currency_code' => 'XCD'
        ]);

        Country::create([
            'id' => 188,
            'code' => 'WS',
            'name' => 'Samoa',
            'dial_code' => 684,
            'currency_name' => 'Samoan tālā',
            'currency_symbol' => 'T',
            'currency_code' => 'WST'
        ]);

        Country::create([
            'id' => 189,
            'code' => 'SM',
            'name' => 'San Marino',
            'dial_code' => 378,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 190,
            'code' => 'ST',
            'name' => 'Sao Tome and Principe',
            'dial_code' => 239,
            'currency_name' => 'São Tomé and Príncip',
            'currency_symbol' => 'Db',
            'currency_code' => 'STD'
        ]);

        Country::create([
            'id' => 191,
            'code' => 'SA',
            'name' => 'Saudi Arabia',
            'dial_code' => 966,
            'currency_name' => 'Saudi riyal',
            'currency_symbol' => 'ر.س',
            'currency_code' => 'SAR'
        ]);

        Country::create([
            'id' => 192,
            'code' => 'SN',
            'name' => 'Senegal',
            'dial_code' => 221,
            'currency_name' => 'West African CFA fra',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XOF'
        ]);

        Country::create([
            'id' => 193,
            'code' => 'RS',
            'name' => 'Serbia',
            'dial_code' => 381,
            'currency_name' => 'Serbian dinar',
            'currency_symbol' => 'дин. or din.',
            'currency_code' => 'RSD'
        ]);

        Country::create([
            'id' => 194,
            'code' => 'SC',
            'name' => 'Seychelles',
            'dial_code' => 248,
            'currency_name' => 'Seychellois rupee',
            'currency_symbol' => '₨',
            'currency_code' => 'SCR'
        ]);

        Country::create([
            'id' => 195,
            'code' => 'SL',
            'name' => 'Sierra Leone',
            'dial_code' => 232,
            'currency_name' => 'Sierra Leonean leone',
            'currency_symbol' => 'Le',
            'currency_code' => 'SLL'
        ]);

        Country::create([
            'id' => 196,
            'code' => 'SG',
            'name' => 'Singapore',
            'dial_code' => 65,
            'currency_name' => 'Brunei dollar',
            'currency_symbol' => '$',
            'currency_code' => 'BND'
        ]);

        Country::create([
            'id' => 197,
            'code' => 'SK',
            'name' => 'Slovakia',
            'dial_code' => 421,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 198,
            'code' => 'SI',
            'name' => 'Slovenia',
            'dial_code' => 386,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 199,
            'code' => 'XG',
            'name' => 'Smaller Territories of the UK',
            'dial_code' => 44,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 200,
            'code' => 'SB',
            'name' => 'Solomon Islands',
            'dial_code' => 677,
            'currency_name' => 'Solomon Islands doll',
            'currency_symbol' => '$',
            'currency_code' => 'SBD'
        ]);

        Country::create([
            'id' => 201,
            'code' => 'SO',
            'name' => 'Somalia',
            'dial_code' => 252,
            'currency_name' => 'Somali shilling',
            'currency_symbol' => 'Sh',
            'currency_code' => 'SOS'
        ]);

        Country::create([
            'id' => 202,
            'code' => 'ZA',
            'name' => 'South Africa',
            'dial_code' => 27,
            'currency_name' => 'South African rand',
            'currency_symbol' => 'R',
            'currency_code' => 'ZAR'
        ]);

        Country::create([
            'id' => 203,
            'code' => 'GS',
            'name' => 'South Georgia',
            'dial_code' => 0,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 204,
            'code' => 'SS',
            'name' => 'South Sudan',
            'dial_code' => 211,
            'currency_name' => 'South Sudanese pound',
            'currency_symbol' => '£',
            'currency_code' => 'SSP'
        ]);

        Country::create([
            'id' => 205,
            'code' => 'ES',
            'name' => 'Spain',
            'dial_code' => 34,
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_code' => 'EUR'
        ]);

        Country::create([
            'id' => 206,
            'code' => 'LK',
            'name' => 'Sri Lanka',
            'dial_code' => 94,
            'currency_name' => 'Sri Lankan rupee',
            'currency_symbol' => 'Rs or රු',
            'currency_code' => 'LKR'
        ]);

        Country::create([
            'id' => 207,
            'code' => 'SD',
            'name' => 'Sudan',
            'dial_code' => 249,
            'currency_name' => 'Sudanese pound',
            'currency_symbol' => 'ج.س.',
            'currency_code' => 'SDG'
        ]);

        Country::create([
            'id' => 208,
            'code' => 'SR',
            'name' => 'Suriname',
            'dial_code' => 597,
            'currency_name' => 'Surinamese dollar',
            'currency_symbol' => '$',
            'currency_code' => 'SRD'
        ]);

        Country::create([
            'id' => 209,
            'code' => 'SJ',
            'name' => 'Svalbard And Jan Mayen Islands',
            'dial_code' => 47,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 210,
            'code' => 'SZ',
            'name' => 'Swaziland',
            'dial_code' => 268,
            'currency_name' => 'Swazi lilangeni',
            'currency_symbol' => 'L',
            'currency_code' => 'SZL'
        ]);

        Country::create([
            'id' => 211,
            'code' => 'SE',
            'name' => 'Sweden',
            'dial_code' => 46,
            'currency_name' => 'Swedish krona',
            'currency_symbol' => 'kr',
            'currency_code' => 'SEK'
        ]);

        Country::create([
            'id' => 212,
            'code' => 'CH',
            'name' => 'Switzerland',
            'dial_code' => 41,
            'currency_name' => 'Swiss franc',
            'currency_symbol' => 'Fr',
            'currency_code' => 'CHF'
        ]);

        Country::create([
            'id' => 213,
            'code' => 'SY',
            'name' => 'Syria',
            'dial_code' => 963,
            'currency_name' => 'Syrian pound',
            'currency_symbol' => '£ or ل.س',
            'currency_code' => 'SYP'
        ]);

        Country::create([
            'id' => 214,
            'code' => 'TW',
            'name' => 'Taiwan',
            'dial_code' => 886,
            'currency_name' => 'New Taiwan dollar',
            'currency_symbol' => '$',
            'currency_code' => 'TWD'
        ]);

        Country::create([
            'id' => 215,
            'code' => 'TJ',
            'name' => 'Tajikistan',
            'dial_code' => 992,
            'currency_name' => 'Tajikistani somoni',
            'currency_symbol' => 'ЅМ',
            'currency_code' => 'TJS'
        ]);

        Country::create([
            'id' => 216,
            'code' => 'TZ',
            'name' => 'Tanzania',
            'dial_code' => 255,
            'currency_name' => 'Tanzanian shilling',
            'currency_symbol' => 'Sh',
            'currency_code' => 'TZS'
        ]);

        Country::create([
            'id' => 217,
            'code' => 'TH',
            'name' => 'Thailand',
            'dial_code' => 66,
            'currency_name' => 'Thai baht',
            'currency_symbol' => '฿',
            'currency_code' => 'THB'
        ]);

        Country::create([
            'id' => 218,
            'code' => 'TG',
            'name' => 'Togo',
            'dial_code' => 228,
            'currency_name' => 'West African CFA fra',
            'currency_symbol' => 'Fr',
            'currency_code' => 'XOF'
        ]);

        Country::create([
            'id' => 219,
            'code' => 'TK',
            'name' => 'Tokelau',
            'dial_code' => 690,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 220,
            'code' => 'TO',
            'name' => 'Tonga',
            'dial_code' => 676,
            'currency_name' => 'Tongan paʻanga',
            'currency_symbol' => 'T$',
            'currency_code' => 'TOP'
        ]);

        Country::create([
            'id' => 221,
            'code' => 'TT',
            'name' => 'Trinidad And Tobago',
            'dial_code' => 1868,
            'currency_name' => 'Trinidad and Tobago ',
            'currency_symbol' => '$',
            'currency_code' => 'TTD'
        ]);

        Country::create([
            'id' => 222,
            'code' => 'TN',
            'name' => 'Tunisia',
            'dial_code' => 216,
            'currency_name' => 'Tunisian dinar',
            'currency_symbol' => 'د.ت',
            'currency_code' => 'TND'
        ]);

        Country::create([
            'id' => 223,
            'code' => 'TR',
            'name' => 'Turkey',
            'dial_code' => 90,
            'currency_name' => 'Turkish lira',
            'currency_symbol' => '',
            'currency_code' => 'TRY'
        ]);

        Country::create([
            'id' => 224,
            'code' => 'TM',
            'name' => 'Turkmenistan',
            'dial_code' => 7370,
            'currency_name' => 'Turkmenistan manat',
            'currency_symbol' => 'm',
            'currency_code' => 'TMT'
        ]);

        Country::create([
            'id' => 225,
            'code' => 'TC',
            'name' => 'Turks And Caicos Islands',
            'dial_code' => 1649,
            'currency_name' => 'United States dollar',
            'currency_symbol' => '$',
            'currency_code' => 'USD'
        ]);

        Country::create([
            'id' => 226,
            'code' => 'TV',
            'name' => 'Tuvalu',
            'dial_code' => 688,
            'currency_name' => 'Australian dollar',
            'currency_symbol' => '$',
            'currency_code' => 'AUD'
        ]);

        Country::create([
            'id' => 227,
            'code' => 'UG',
            'name' => 'Uganda',
            'dial_code' => 256,
            'currency_name' => 'Ugandan shilling',
            'currency_symbol' => 'Sh',
            'currency_code' => 'UGX'
        ]);

        Country::create([
            'id' => 228,
            'code' => 'UA',
            'name' => 'Ukraine',
            'dial_code' => 380,
            'currency_name' => 'Ukrainian hryvnia',
            'currency_symbol' => '₴',
            'currency_code' => 'UAH'
        ]);

        Country::create([
            'id' => 229,
            'code' => 'AE',
            'name' => 'United Arab Emirates',
            'dial_code' => 971,
            'currency_name' => 'United Arab Emirates',
            'currency_symbol' => 'د.إ',
            'currency_code' => 'AED'
        ]);

        Country::create([
            'id' => 230,
            'code' => 'GB',
            'name' => 'United Kingdom',
            'dial_code' => 44,
            'currency_name' => 'British pound',
            'currency_symbol' => '£',
            'currency_code' => 'GBP'
        ]);

        Country::create([
            'id' => 231,
            'code' => 'US',
            'name' => 'United States',
            'dial_code' => 1,
            'currency_name' => 'United States dollar',
            'currency_symbol' => '$',
            'currency_code' => 'USD'
        ]);

        Country::create([
            'id' => 232,
            'code' => 'UM',
            'name' => 'United States Minor Outlying Islands',
            'dial_code' => 1,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 233,
            'code' => 'UY',
            'name' => 'Uruguay',
            'dial_code' => 598,
            'currency_name' => 'Uruguayan peso',
            'currency_symbol' => '$',
            'currency_code' => 'UYU'
        ]);

        Country::create([
            'id' => 234,
            'code' => 'UZ',
            'name' => 'Uzbekistan',
            'dial_code' => 998,
            'currency_name' => 'Uzbekistani som',
            'currency_symbol' => '',
            'currency_code' => 'UZS'
        ]);

        Country::create([
            'id' => 235,
            'code' => 'VU',
            'name' => 'Vanuatu',
            'dial_code' => 678,
            'currency_name' => 'Vanuatu vatu',
            'currency_symbol' => 'Vt',
            'currency_code' => 'VUV'
        ]);

        Country::create([
            'id' => 236,
            'code' => 'VA',
            'name' => 'Vatican City State (Holy See)',
            'dial_code' => 39,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 237,
            'code' => 'VE',
            'name' => 'Venezuela',
            'dial_code' => 58,
            'currency_name' => 'Venezuelan bolívar',
            'currency_symbol' => 'Bs F',
            'currency_code' => 'VEF'
        ]);

        Country::create([
            'id' => 238,
            'code' => 'VN',
            'name' => 'Vietnam',
            'dial_code' => 84,
            'currency_name' => 'Vietnamese đồng',
            'currency_symbol' => '₫',
            'currency_code' => 'VND'
        ]);

        Country::create([
            'id' => 239,
            'code' => 'VG',
            'name' => 'Virgin Islands (British)',
            'dial_code' => 1284,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 240,
            'code' => 'VI',
            'name' => 'Virgin Islands (US)',
            'dial_code' => 1340,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 241,
            'code' => 'WF',
            'name' => 'Wallis And Futuna Islands',
            'dial_code' => 681,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 242,
            'code' => 'EH',
            'name' => 'Western Sahara',
            'dial_code' => 212,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 243,
            'code' => 'YE',
            'name' => 'Yemen',
            'dial_code' => 967,
            'currency_name' => 'Yemeni rial',
            'currency_symbol' => '﷼',
            'currency_code' => 'YER'
        ]);

        Country::create([
            'id' => 244,
            'code' => 'YU',
            'name' => 'Yugoslavia',
            'dial_code' => 38,
            'currency_name' => '',
            'currency_symbol' => '',
            'currency_code' => ''
        ]);

        Country::create([
            'id' => 245,
            'code' => 'ZM',
            'name' => 'Zambia',
            'dial_code' => 260,
            'currency_name' => 'Zambian kwacha',
            'currency_symbol' => 'ZK',
            'currency_code' => 'ZMW'
        ]);

        Country::create([
            'id' => 246,
            'code' => 'ZW',
            'name' => 'Zimbabwe',
            'dial_code' => 263,
            'currency_name' => 'Botswana pula',
            'currency_symbol' => 'P',
            'currency_code' => 'BWP'
        ]);
    }
}
