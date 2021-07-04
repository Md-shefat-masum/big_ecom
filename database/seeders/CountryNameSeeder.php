<?php

namespace Database\Seeders;

use App\Models\CountryName;
use Illuminate\Database\Seeder;

class CountryNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CountryName::truncate();
        
        CountryName::create( [
            'id'=>1,
            'iso'=>'AF',
            'name'=>'AFGHANISTAN',
            'nicename'=>'Afghanistan',
            'iso3'=>'AFG',
            'numcode'=>4,
            'phonecode'=>93
            ] );
            
            
                        
            CountryName::create( [
            'id'=>2,
            'iso'=>'AL',
            'name'=>'ALBANIA',
            'nicename'=>'Albania',
            'iso3'=>'ALB',
            'numcode'=>8,
            'phonecode'=>355
            ] );
            
            
                        
            CountryName::create( [
            'id'=>3,
            'iso'=>'DZ',
            'name'=>'ALGERIA',
            'nicename'=>'Algeria',
            'iso3'=>'DZA',
            'numcode'=>12,
            'phonecode'=>213
            ] );
            
            
                        
            CountryName::create( [
            'id'=>4,
            'iso'=>'AS',
            'name'=>'AMERICAN SAMOA',
            'nicename'=>'American Samoa',
            'iso3'=>'ASM',
            'numcode'=>16,
            'phonecode'=>1684
            ] );
            
            
                        
            CountryName::create( [
            'id'=>5,
            'iso'=>'AD',
            'name'=>'ANDORRA',
            'nicename'=>'Andorra',
            'iso3'=>'AND',
            'numcode'=>20,
            'phonecode'=>376
            ] );
            
            
                        
            CountryName::create( [
            'id'=>6,
            'iso'=>'AO',
            'name'=>'ANGOLA',
            'nicename'=>'Angola',
            'iso3'=>'AGO',
            'numcode'=>24,
            'phonecode'=>244
            ] );
            
            
                        
            CountryName::create( [
            'id'=>7,
            'iso'=>'AI',
            'name'=>'ANGUILLA',
            'nicename'=>'Anguilla',
            'iso3'=>'AIA',
            'numcode'=>660,
            'phonecode'=>1264
            ] );
            
            
                        
            CountryName::create( [
            'id'=>8,
            'iso'=>'AQ',
            'name'=>'ANTARCTICA',
            'nicename'=>'Antarctica',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>0
            ] );
            
            
                        
            CountryName::create( [
            'id'=>9,
            'iso'=>'AG',
            'name'=>'ANTIGUA AND BARBUDA',
            'nicename'=>'Antigua and Barbuda',
            'iso3'=>'ATG',
            'numcode'=>28,
            'phonecode'=>1268
            ] );
            
            
                        
            CountryName::create( [
            'id'=>10,
            'iso'=>'AR',
            'name'=>'ARGENTINA',
            'nicename'=>'Argentina',
            'iso3'=>'ARG',
            'numcode'=>32,
            'phonecode'=>54
            ] );
            
            
                        
            CountryName::create( [
            'id'=>11,
            'iso'=>'AM',
            'name'=>'ARMENIA',
            'nicename'=>'Armenia',
            'iso3'=>'ARM',
            'numcode'=>51,
            'phonecode'=>374
            ] );
            
            
                        
            CountryName::create( [
            'id'=>12,
            'iso'=>'AW',
            'name'=>'ARUBA',
            'nicename'=>'Aruba',
            'iso3'=>'ABW',
            'numcode'=>533,
            'phonecode'=>297
            ] );
            
            
                        
            CountryName::create( [
            'id'=>13,
            'iso'=>'AU',
            'name'=>'AUSTRALIA',
            'nicename'=>'Australia',
            'iso3'=>'AUS',
            'numcode'=>36,
            'phonecode'=>61
            ] );
            
            
                        
            CountryName::create( [
            'id'=>14,
            'iso'=>'AT',
            'name'=>'AUSTRIA',
            'nicename'=>'Austria',
            'iso3'=>'AUT',
            'numcode'=>40,
            'phonecode'=>43
            ] );
            
            
                        
            CountryName::create( [
            'id'=>15,
            'iso'=>'AZ',
            'name'=>'AZERBAIJAN',
            'nicename'=>'Azerbaijan',
            'iso3'=>'AZE',
            'numcode'=>31,
            'phonecode'=>994
            ] );
            
            
                        
            CountryName::create( [
            'id'=>16,
            'iso'=>'BS',
            'name'=>'BAHAMAS',
            'nicename'=>'Bahamas',
            'iso3'=>'BHS',
            'numcode'=>44,
            'phonecode'=>1242
            ] );
            
            
                        
            CountryName::create( [
            'id'=>17,
            'iso'=>'BH',
            'name'=>'BAHRAIN',
            'nicename'=>'Bahrain',
            'iso3'=>'BHR',
            'numcode'=>48,
            'phonecode'=>973
            ] );
            
            
                        
            CountryName::create( [
            'id'=>18,
            'iso'=>'BD',
            'name'=>'BANGLADESH',
            'nicename'=>'Bangladesh',
            'iso3'=>'BGD',
            'numcode'=>50,
            'phonecode'=>880
            ] );
            
            
                        
            CountryName::create( [
            'id'=>19,
            'iso'=>'BB',
            'name'=>'BARBADOS',
            'nicename'=>'Barbados',
            'iso3'=>'BRB',
            'numcode'=>52,
            'phonecode'=>1246
            ] );
            
            
                        
            CountryName::create( [
            'id'=>20,
            'iso'=>'BY',
            'name'=>'BELARUS',
            'nicename'=>'Belarus',
            'iso3'=>'BLR',
            'numcode'=>112,
            'phonecode'=>375
            ] );
            
            
                        
            CountryName::create( [
            'id'=>21,
            'iso'=>'BE',
            'name'=>'BELGIUM',
            'nicename'=>'Belgium',
            'iso3'=>'BEL',
            'numcode'=>56,
            'phonecode'=>32
            ] );
            
            
                        
            CountryName::create( [
            'id'=>22,
            'iso'=>'BZ',
            'name'=>'BELIZE',
            'nicename'=>'Belize',
            'iso3'=>'BLZ',
            'numcode'=>84,
            'phonecode'=>501
            ] );
            
            
                        
            CountryName::create( [
            'id'=>23,
            'iso'=>'BJ',
            'name'=>'BENIN',
            'nicename'=>'Benin',
            'iso3'=>'BEN',
            'numcode'=>204,
            'phonecode'=>229
            ] );
            
            
                        
            CountryName::create( [
            'id'=>24,
            'iso'=>'BM',
            'name'=>'BERMUDA',
            'nicename'=>'Bermuda',
            'iso3'=>'BMU',
            'numcode'=>60,
            'phonecode'=>1441
            ] );
            
            
                        
            CountryName::create( [
            'id'=>25,
            'iso'=>'BT',
            'name'=>'BHUTAN',
            'nicename'=>'Bhutan',
            'iso3'=>'BTN',
            'numcode'=>64,
            'phonecode'=>975
            ] );
            
            
                        
            CountryName::create( [
            'id'=>26,
            'iso'=>'BO',
            'name'=>'BOLIVIA',
            'nicename'=>'Bolivia',
            'iso3'=>'BOL',
            'numcode'=>68,
            'phonecode'=>591
            ] );
            
            
                        
            CountryName::create( [
            'id'=>27,
            'iso'=>'BA',
            'name'=>'BOSNIA AND HERZEGOVINA',
            'nicename'=>'Bosnia and Herzegovina',
            'iso3'=>'BIH',
            'numcode'=>70,
            'phonecode'=>387
            ] );
            
            
                        
            CountryName::create( [
            'id'=>28,
            'iso'=>'BW',
            'name'=>'BOTSWANA',
            'nicename'=>'Botswana',
            'iso3'=>'BWA',
            'numcode'=>72,
            'phonecode'=>267
            ] );
            
            
                        
            CountryName::create( [
            'id'=>29,
            'iso'=>'BV',
            'name'=>'BOUVET ISLAND',
            'nicename'=>'Bouvet Island',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>0
            ] );
            
            
                        
            CountryName::create( [
            'id'=>30,
            'iso'=>'BR',
            'name'=>'BRAZIL',
            'nicename'=>'Brazil',
            'iso3'=>'BRA',
            'numcode'=>76,
            'phonecode'=>55
            ] );
            
            
                        
            CountryName::create( [
            'id'=>31,
            'iso'=>'IO',
            'name'=>'BRITISH INDIAN OCEAN TERRITORY',
            'nicename'=>'British Indian Ocean Territory',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>246
            ] );
            
            
                        
            CountryName::create( [
            'id'=>32,
            'iso'=>'BN',
            'name'=>'BRUNEI DARUSSALAM',
            'nicename'=>'Brunei Darussalam',
            'iso3'=>'BRN',
            'numcode'=>96,
            'phonecode'=>673
            ] );
            
            
                        
            CountryName::create( [
            'id'=>33,
            'iso'=>'BG',
            'name'=>'BULGARIA',
            'nicename'=>'Bulgaria',
            'iso3'=>'BGR',
            'numcode'=>100,
            'phonecode'=>359
            ] );
            
            
                        
            CountryName::create( [
            'id'=>34,
            'iso'=>'BF',
            'name'=>'BURKINA FASO',
            'nicename'=>'Burkina Faso',
            'iso3'=>'BFA',
            'numcode'=>854,
            'phonecode'=>226
            ] );
            
            
                        
            CountryName::create( [
            'id'=>35,
            'iso'=>'BI',
            'name'=>'BURUNDI',
            'nicename'=>'Burundi',
            'iso3'=>'BDI',
            'numcode'=>108,
            'phonecode'=>257
            ] );
            
            
                        
            CountryName::create( [
            'id'=>36,
            'iso'=>'KH',
            'name'=>'CAMBODIA',
            'nicename'=>'Cambodia',
            'iso3'=>'KHM',
            'numcode'=>116,
            'phonecode'=>855
            ] );
            
            
                        
            CountryName::create( [
            'id'=>37,
            'iso'=>'CM',
            'name'=>'CAMEROON',
            'nicename'=>'Cameroon',
            'iso3'=>'CMR',
            'numcode'=>120,
            'phonecode'=>237
            ] );
            
            
                        
            CountryName::create( [
            'id'=>38,
            'iso'=>'CA',
            'name'=>'CANADA',
            'nicename'=>'Canada',
            'iso3'=>'CAN',
            'numcode'=>124,
            'phonecode'=>1
            ] );
            
            
                        
            CountryName::create( [
            'id'=>39,
            'iso'=>'CV',
            'name'=>'CAPE VERDE',
            'nicename'=>'Cape Verde',
            'iso3'=>'CPV',
            'numcode'=>132,
            'phonecode'=>238
            ] );
            
            
                        
            CountryName::create( [
            'id'=>40,
            'iso'=>'KY',
            'name'=>'CAYMAN ISLANDS',
            'nicename'=>'Cayman Islands',
            'iso3'=>'CYM',
            'numcode'=>136,
            'phonecode'=>1345
            ] );
            
            
                        
            CountryName::create( [
            'id'=>41,
            'iso'=>'CF',
            'name'=>'CENTRAL AFRICAN REPUBLIC',
            'nicename'=>'Central African Republic',
            'iso3'=>'CAF',
            'numcode'=>140,
            'phonecode'=>236
            ] );
            
            
                        
            CountryName::create( [
            'id'=>42,
            'iso'=>'TD',
            'name'=>'CHAD',
            'nicename'=>'Chad',
            'iso3'=>'TCD',
            'numcode'=>148,
            'phonecode'=>235
            ] );
            
            
                        
            CountryName::create( [
            'id'=>43,
            'iso'=>'CL',
            'name'=>'CHILE',
            'nicename'=>'Chile',
            'iso3'=>'CHL',
            'numcode'=>152,
            'phonecode'=>56
            ] );
            
            
                        
            CountryName::create( [
            'id'=>44,
            'iso'=>'CN',
            'name'=>'CHINA',
            'nicename'=>'China',
            'iso3'=>'CHN',
            'numcode'=>156,
            'phonecode'=>86
            ] );
            
            
                        
            CountryName::create( [
            'id'=>45,
            'iso'=>'CX',
            'name'=>'CHRISTMAS ISLAND',
            'nicename'=>'Christmas Island',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>61
            ] );
            
            
                        
            CountryName::create( [
            'id'=>46,
            'iso'=>'CC',
            'name'=>'COCOS (KEELING) ISLANDS',
            'nicename'=>'Cocos (Keeling) Islands',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>672
            ] );
            
            
                        
            CountryName::create( [
            'id'=>47,
            'iso'=>'CO',
            'name'=>'COLOMBIA',
            'nicename'=>'Colombia',
            'iso3'=>'COL',
            'numcode'=>170,
            'phonecode'=>57
            ] );
            
            
                        
            CountryName::create( [
            'id'=>48,
            'iso'=>'KM',
            'name'=>'COMOROS',
            'nicename'=>'Comoros',
            'iso3'=>'COM',
            'numcode'=>174,
            'phonecode'=>269
            ] );
            
            
                        
            CountryName::create( [
            'id'=>49,
            'iso'=>'CG',
            'name'=>'CONGO',
            'nicename'=>'Congo',
            'iso3'=>'COG',
            'numcode'=>178,
            'phonecode'=>242
            ] );
            
            
                        
            CountryName::create( [
            'id'=>50,
            'iso'=>'CD',
            'name'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
            'nicename'=>'Congo, the Democratic Republic of the',
            'iso3'=>'COD',
            'numcode'=>180,
            'phonecode'=>242
            ] );
            
            
                        
            CountryName::create( [
            'id'=>51,
            'iso'=>'CK',
            'name'=>'COOK ISLANDS',
            'nicename'=>'Cook Islands',
            'iso3'=>'COK',
            'numcode'=>184,
            'phonecode'=>682
            ] );
            
            
                        
            CountryName::create( [
            'id'=>52,
            'iso'=>'CR',
            'name'=>'COSTA RICA',
            'nicename'=>'Costa Rica',
            'iso3'=>'CRI',
            'numcode'=>188,
            'phonecode'=>506
            ] );
            
            
                        
            CountryName::create( [
            'id'=>53,
            'iso'=>'CI',
            'name'=>'COTE D',
            'nicename'=>'IVOIRE',
            'iso3'=>'Cote D',
            'numcode'=>'Ivoire',
            'phonecode'=>'CIV',
            ] );
            
            
                        
            CountryName::create( [
            'id'=>54,
            'iso'=>'HR',
            'name'=>'CROATIA',
            'nicename'=>'Croatia',
            'iso3'=>'HRV',
            'numcode'=>191,
            'phonecode'=>385
            ] );
            
            
                        
            CountryName::create( [
            'id'=>55,
            'iso'=>'CU',
            'name'=>'CUBA',
            'nicename'=>'Cuba',
            'iso3'=>'CUB',
            'numcode'=>192,
            'phonecode'=>53
            ] );
            
            
                        
            CountryName::create( [
            'id'=>56,
            'iso'=>'CY',
            'name'=>'CYPRUS',
            'nicename'=>'Cyprus',
            'iso3'=>'CYP',
            'numcode'=>196,
            'phonecode'=>357
            ] );
            
            
                        
            CountryName::create( [
            'id'=>57,
            'iso'=>'CZ',
            'name'=>'CZECH REPUBLIC',
            'nicename'=>'Czech Republic',
            'iso3'=>'CZE',
            'numcode'=>203,
            'phonecode'=>420
            ] );
            
            
                        
            CountryName::create( [
            'id'=>58,
            'iso'=>'DK',
            'name'=>'DENMARK',
            'nicename'=>'Denmark',
            'iso3'=>'DNK',
            'numcode'=>208,
            'phonecode'=>45
            ] );
            
            
                        
            CountryName::create( [
            'id'=>59,
            'iso'=>'DJ',
            'name'=>'DJIBOUTI',
            'nicename'=>'Djibouti',
            'iso3'=>'DJI',
            'numcode'=>262,
            'phonecode'=>253
            ] );
            
            
                        
            CountryName::create( [
            'id'=>60,
            'iso'=>'DM',
            'name'=>'DOMINICA',
            'nicename'=>'Dominica',
            'iso3'=>'DMA',
            'numcode'=>212,
            'phonecode'=>1767
            ] );
            
            
                        
            CountryName::create( [
            'id'=>61,
            'iso'=>'DO',
            'name'=>'DOMINICAN REPUBLIC',
            'nicename'=>'Dominican Republic',
            'iso3'=>'DOM',
            'numcode'=>214,
            'phonecode'=>1809
            ] );
            
            
                        
            CountryName::create( [
            'id'=>62,
            'iso'=>'EC',
            'name'=>'ECUADOR',
            'nicename'=>'Ecuador',
            'iso3'=>'ECU',
            'numcode'=>218,
            'phonecode'=>593
            ] );
            
            
                        
            CountryName::create( [
            'id'=>63,
            'iso'=>'EG',
            'name'=>'EGYPT',
            'nicename'=>'Egypt',
            'iso3'=>'EGY',
            'numcode'=>818,
            'phonecode'=>20
            ] );
            
            
                        
            CountryName::create( [
            'id'=>64,
            'iso'=>'SV',
            'name'=>'EL SALVADOR',
            'nicename'=>'El Salvador',
            'iso3'=>'SLV',
            'numcode'=>222,
            'phonecode'=>503
            ] );
            
            
                        
            CountryName::create( [
            'id'=>65,
            'iso'=>'GQ',
            'name'=>'EQUATORIAL GUINEA',
            'nicename'=>'Equatorial Guinea',
            'iso3'=>'GNQ',
            'numcode'=>226,
            'phonecode'=>240
            ] );
            
            
                        
            CountryName::create( [
            'id'=>66,
            'iso'=>'ER',
            'name'=>'ERITREA',
            'nicename'=>'Eritrea',
            'iso3'=>'ERI',
            'numcode'=>232,
            'phonecode'=>291
            ] );
            
            
                        
            CountryName::create( [
            'id'=>67,
            'iso'=>'EE',
            'name'=>'ESTONIA',
            'nicename'=>'Estonia',
            'iso3'=>'EST',
            'numcode'=>233,
            'phonecode'=>372
            ] );
            
            
                        
            CountryName::create( [
            'id'=>68,
            'iso'=>'ET',
            'name'=>'ETHIOPIA',
            'nicename'=>'Ethiopia',
            'iso3'=>'ETH',
            'numcode'=>231,
            'phonecode'=>251
            ] );
            
            
                        
            CountryName::create( [
            'id'=>69,
            'iso'=>'FK',
            'name'=>'FALKLAND ISLANDS (MALVINAS)',
            'nicename'=>'Falkland Islands (Malvinas)',
            'iso3'=>'FLK',
            'numcode'=>238,
            'phonecode'=>500
            ] );
            
            
                        
            CountryName::create( [
            'id'=>70,
            'iso'=>'FO',
            'name'=>'FAROE ISLANDS',
            'nicename'=>'Faroe Islands',
            'iso3'=>'FRO',
            'numcode'=>234,
            'phonecode'=>298
            ] );
            
            
                        
            CountryName::create( [
            'id'=>71,
            'iso'=>'FJ',
            'name'=>'FIJI',
            'nicename'=>'Fiji',
            'iso3'=>'FJI',
            'numcode'=>242,
            'phonecode'=>679
            ] );
            
            
                        
            CountryName::create( [
            'id'=>72,
            'iso'=>'FI',
            'name'=>'FINLAND',
            'nicename'=>'Finland',
            'iso3'=>'FIN',
            'numcode'=>246,
            'phonecode'=>358
            ] );
            
            
                        
            CountryName::create( [
            'id'=>73,
            'iso'=>'FR',
            'name'=>'FRANCE',
            'nicename'=>'France',
            'iso3'=>'FRA',
            'numcode'=>250,
            'phonecode'=>33
            ] );
            
            
                        
            CountryName::create( [
            'id'=>74,
            'iso'=>'GF',
            'name'=>'FRENCH GUIANA',
            'nicename'=>'French Guiana',
            'iso3'=>'GUF',
            'numcode'=>254,
            'phonecode'=>594
            ] );
            
            
                        
            CountryName::create( [
            'id'=>75,
            'iso'=>'PF',
            'name'=>'FRENCH POLYNESIA',
            'nicename'=>'French Polynesia',
            'iso3'=>'PYF',
            'numcode'=>258,
            'phonecode'=>689
            ] );
            
            
                        
            CountryName::create( [
            'id'=>76,
            'iso'=>'TF',
            'name'=>'FRENCH SOUTHERN TERRITORIES',
            'nicename'=>'French Southern Territories',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>0
            ] );
            
            
                        
            CountryName::create( [
            'id'=>77,
            'iso'=>'GA',
            'name'=>'GABON',
            'nicename'=>'Gabon',
            'iso3'=>'GAB',
            'numcode'=>266,
            'phonecode'=>241
            ] );
            
            
                        
            CountryName::create( [
            'id'=>78,
            'iso'=>'GM',
            'name'=>'GAMBIA',
            'nicename'=>'Gambia',
            'iso3'=>'GMB',
            'numcode'=>270,
            'phonecode'=>220
            ] );
            
            
                        
            CountryName::create( [
            'id'=>79,
            'iso'=>'GE',
            'name'=>'GEORGIA',
            'nicename'=>'Georgia',
            'iso3'=>'GEO',
            'numcode'=>268,
            'phonecode'=>995
            ] );
            
            
                        
            CountryName::create( [
            'id'=>80,
            'iso'=>'DE',
            'name'=>'GERMANY',
            'nicename'=>'Germany',
            'iso3'=>'DEU',
            'numcode'=>276,
            'phonecode'=>49
            ] );
            
            
                        
            CountryName::create( [
            'id'=>81,
            'iso'=>'GH',
            'name'=>'GHANA',
            'nicename'=>'Ghana',
            'iso3'=>'GHA',
            'numcode'=>288,
            'phonecode'=>233
            ] );
            
            
                        
            CountryName::create( [
            'id'=>82,
            'iso'=>'GI',
            'name'=>'GIBRALTAR',
            'nicename'=>'Gibraltar',
            'iso3'=>'GIB',
            'numcode'=>292,
            'phonecode'=>350
            ] );
            
            
                        
            CountryName::create( [
            'id'=>83,
            'iso'=>'GR',
            'name'=>'GREECE',
            'nicename'=>'Greece',
            'iso3'=>'GRC',
            'numcode'=>300,
            'phonecode'=>30
            ] );
            
            
                        
            CountryName::create( [
            'id'=>84,
            'iso'=>'GL',
            'name'=>'GREENLAND',
            'nicename'=>'Greenland',
            'iso3'=>'GRL',
            'numcode'=>304,
            'phonecode'=>299
            ] );
            
            
                        
            CountryName::create( [
            'id'=>85,
            'iso'=>'GD',
            'name'=>'GRENADA',
            'nicename'=>'Grenada',
            'iso3'=>'GRD',
            'numcode'=>308,
            'phonecode'=>1473
            ] );
            
            
                        
            CountryName::create( [
            'id'=>86,
            'iso'=>'GP',
            'name'=>'GUADELOUPE',
            'nicename'=>'Guadeloupe',
            'iso3'=>'GLP',
            'numcode'=>312,
            'phonecode'=>590
            ] );
            
            
                        
            CountryName::create( [
            'id'=>87,
            'iso'=>'GU',
            'name'=>'GUAM',
            'nicename'=>'Guam',
            'iso3'=>'GUM',
            'numcode'=>316,
            'phonecode'=>1671
            ] );
            
            
                        
            CountryName::create( [
            'id'=>88,
            'iso'=>'GT',
            'name'=>'GUATEMALA',
            'nicename'=>'Guatemala',
            'iso3'=>'GTM',
            'numcode'=>320,
            'phonecode'=>502
            ] );
            
            
                        
            CountryName::create( [
            'id'=>89,
            'iso'=>'GN',
            'name'=>'GUINEA',
            'nicename'=>'Guinea',
            'iso3'=>'GIN',
            'numcode'=>324,
            'phonecode'=>224
            ] );
            
            
                        
            CountryName::create( [
            'id'=>90,
            'iso'=>'GW',
            'name'=>'GUINEA-BISSAU',
            'nicename'=>'Guinea-Bissau',
            'iso3'=>'GNB',
            'numcode'=>624,
            'phonecode'=>245
            ] );
            
            
                        
            CountryName::create( [
            'id'=>91,
            'iso'=>'GY',
            'name'=>'GUYANA',
            'nicename'=>'Guyana',
            'iso3'=>'GUY',
            'numcode'=>328,
            'phonecode'=>592
            ] );
            
            
                        
            CountryName::create( [
            'id'=>92,
            'iso'=>'HT',
            'name'=>'HAITI',
            'nicename'=>'Haiti',
            'iso3'=>'HTI',
            'numcode'=>332,
            'phonecode'=>509
            ] );
            
            
                        
            CountryName::create( [
            'id'=>93,
            'iso'=>'HM',
            'name'=>'HEARD ISLAND AND MCDONALD ISLANDS',
            'nicename'=>'Heard Island and Mcdonald Islands',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>0
            ] );
            
            
                        
            CountryName::create( [
            'id'=>94,
            'iso'=>'VA',
            'name'=>'HOLY SEE (VATICAN CITY STATE)',
            'nicename'=>'Holy See (Vatican City State)',
            'iso3'=>'VAT',
            'numcode'=>336,
            'phonecode'=>39
            ] );
            
            
                        
            CountryName::create( [
            'id'=>95,
            'iso'=>'HN',
            'name'=>'HONDURAS',
            'nicename'=>'Honduras',
            'iso3'=>'HND',
            'numcode'=>340,
            'phonecode'=>504
            ] );
            
            
                        
            CountryName::create( [
            'id'=>96,
            'iso'=>'HK',
            'name'=>'HONG KONG',
            'nicename'=>'Hong Kong',
            'iso3'=>'HKG',
            'numcode'=>344,
            'phonecode'=>852
            ] );
            
            
                        
            CountryName::create( [
            'id'=>97,
            'iso'=>'HU',
            'name'=>'HUNGARY',
            'nicename'=>'Hungary',
            'iso3'=>'HUN',
            'numcode'=>348,
            'phonecode'=>36
            ] );
            
            
                        
            CountryName::create( [
            'id'=>98,
            'iso'=>'IS',
            'name'=>'ICELAND',
            'nicename'=>'Iceland',
            'iso3'=>'ISL',
            'numcode'=>352,
            'phonecode'=>354
            ] );
            
            
                        
            CountryName::create( [
            'id'=>99,
            'iso'=>'IN',
            'name'=>'INDIA',
            'nicename'=>'India',
            'iso3'=>'IND',
            'numcode'=>356,
            'phonecode'=>91
            ] );
            
            
                        
            CountryName::create( [
            'id'=>100,
            'iso'=>'ID',
            'name'=>'INDONESIA',
            'nicename'=>'Indonesia',
            'iso3'=>'IDN',
            'numcode'=>360,
            'phonecode'=>62
            ] );
            
            
                        
            CountryName::create( [
            'id'=>101,
            'iso'=>'IR',
            'name'=>'IRAN, ISLAMIC REPUBLIC OF',
            'nicename'=>'Iran, Islamic Republic of',
            'iso3'=>'IRN',
            'numcode'=>364,
            'phonecode'=>98
            ] );
            
            
                        
            CountryName::create( [
            'id'=>102,
            'iso'=>'IQ',
            'name'=>'IRAQ',
            'nicename'=>'Iraq',
            'iso3'=>'IRQ',
            'numcode'=>368,
            'phonecode'=>964
            ] );
            
            
                        
            CountryName::create( [
            'id'=>103,
            'iso'=>'IE',
            'name'=>'IRELAND',
            'nicename'=>'Ireland',
            'iso3'=>'IRL',
            'numcode'=>372,
            'phonecode'=>353
            ] );
            
            
                        
            CountryName::create( [
            'id'=>104,
            'iso'=>'IL',
            'name'=>'ISRAEL',
            'nicename'=>'Israel',
            'iso3'=>'ISR',
            'numcode'=>376,
            'phonecode'=>972
            ] );
            
            
                        
            CountryName::create( [
            'id'=>105,
            'iso'=>'IT',
            'name'=>'ITALY',
            'nicename'=>'Italy',
            'iso3'=>'ITA',
            'numcode'=>380,
            'phonecode'=>39
            ] );
            
            
                        
            CountryName::create( [
            'id'=>106,
            'iso'=>'JM',
            'name'=>'JAMAICA',
            'nicename'=>'Jamaica',
            'iso3'=>'JAM',
            'numcode'=>388,
            'phonecode'=>1876
            ] );
            
            
                        
            CountryName::create( [
            'id'=>107,
            'iso'=>'JP',
            'name'=>'JAPAN',
            'nicename'=>'Japan',
            'iso3'=>'JPN',
            'numcode'=>392,
            'phonecode'=>81
            ] );
            
            
                        
            CountryName::create( [
            'id'=>108,
            'iso'=>'JO',
            'name'=>'JORDAN',
            'nicename'=>'Jordan',
            'iso3'=>'JOR',
            'numcode'=>400,
            'phonecode'=>962
            ] );
            
            
                        
            CountryName::create( [
            'id'=>109,
            'iso'=>'KZ',
            'name'=>'KAZAKHSTAN',
            'nicename'=>'Kazakhstan',
            'iso3'=>'KAZ',
            'numcode'=>398,
            'phonecode'=>7
            ] );
            
            
                        
            CountryName::create( [
            'id'=>110,
            'iso'=>'KE',
            'name'=>'KENYA',
            'nicename'=>'Kenya',
            'iso3'=>'KEN',
            'numcode'=>404,
            'phonecode'=>254
            ] );
            
            
                        
            CountryName::create( [
            'id'=>111,
            'iso'=>'KI',
            'name'=>'KIRIBATI',
            'nicename'=>'Kiribati',
            'iso3'=>'KIR',
            'numcode'=>296,
            'phonecode'=>686
            ] );
            
            
                        
            CountryName::create( [
            'id'=>112,
            'iso'=>'KP',
            'name'=>'KOREA, DEMOCRATIC PEOPLE',
            'nicename'=>'S REPUBLIC OF',
            'iso3'=>'Korea, Democratic People',
            'numcode'=>'s Republic of',
            'phonecode'=>'PRK',
            ] );
            
            
                        
            CountryName::create( [
            'id'=>113,
            'iso'=>'KR',
            'name'=>'KOREA, REPUBLIC OF',
            'nicename'=>'Korea, Republic of',
            'iso3'=>'KOR',
            'numcode'=>410,
            'phonecode'=>82
            ] );
            
            
                        
            CountryName::create( [
            'id'=>114,
            'iso'=>'KW',
            'name'=>'KUWAIT',
            'nicename'=>'Kuwait',
            'iso3'=>'KWT',
            'numcode'=>414,
            'phonecode'=>965
            ] );
            
            
                        
            CountryName::create( [
            'id'=>115,
            'iso'=>'KG',
            'name'=>'KYRGYZSTAN',
            'nicename'=>'Kyrgyzstan',
            'iso3'=>'KGZ',
            'numcode'=>417,
            'phonecode'=>996
            ] );
            
            
                        
            CountryName::create( [
            'id'=>116,
            'iso'=>'LA',
            'name'=>'LAO PEOPLE',
            'nicename'=>'S DEMOCRATIC REPUBLIC',
            'iso3'=>'Lao People',
            'numcode'=>'s Democratic Republic',
            'phonecode'=>'LAO',
            ] );
            
            
                        
            CountryName::create( [
            'id'=>117,
            'iso'=>'LV',
            'name'=>'LATVIA',
            'nicename'=>'Latvia',
            'iso3'=>'LVA',
            'numcode'=>428,
            'phonecode'=>371
            ] );
            
            
                        
            CountryName::create( [
            'id'=>118,
            'iso'=>'LB',
            'name'=>'LEBANON',
            'nicename'=>'Lebanon',
            'iso3'=>'LBN',
            'numcode'=>422,
            'phonecode'=>961
            ] );
            
            
                        
            CountryName::create( [
            'id'=>119,
            'iso'=>'LS',
            'name'=>'LESOTHO',
            'nicename'=>'Lesotho',
            'iso3'=>'LSO',
            'numcode'=>426,
            'phonecode'=>266
            ] );
            
            
                        
            CountryName::create( [
            'id'=>120,
            'iso'=>'LR',
            'name'=>'LIBERIA',
            'nicename'=>'Liberia',
            'iso3'=>'LBR',
            'numcode'=>430,
            'phonecode'=>231
            ] );
            
            
                        
            CountryName::create( [
            'id'=>121,
            'iso'=>'LY',
            'name'=>'LIBYAN ARAB JAMAHIRIYA',
            'nicename'=>'Libyan Arab Jamahiriya',
            'iso3'=>'LBY',
            'numcode'=>434,
            'phonecode'=>218
            ] );
            
            
                        
            CountryName::create( [
            'id'=>122,
            'iso'=>'LI',
            'name'=>'LIECHTENSTEIN',
            'nicename'=>'Liechtenstein',
            'iso3'=>'LIE',
            'numcode'=>438,
            'phonecode'=>423
            ] );
            
            
                        
            CountryName::create( [
            'id'=>123,
            'iso'=>'LT',
            'name'=>'LITHUANIA',
            'nicename'=>'Lithuania',
            'iso3'=>'LTU',
            'numcode'=>440,
            'phonecode'=>370
            ] );
            
            
                        
            CountryName::create( [
            'id'=>124,
            'iso'=>'LU',
            'name'=>'LUXEMBOURG',
            'nicename'=>'Luxembourg',
            'iso3'=>'LUX',
            'numcode'=>442,
            'phonecode'=>352
            ] );
            
            
                        
            CountryName::create( [
            'id'=>125,
            'iso'=>'MO',
            'name'=>'MACAO',
            'nicename'=>'Macao',
            'iso3'=>'MAC',
            'numcode'=>446,
            'phonecode'=>853
            ] );
            
            
                        
            CountryName::create( [
            'id'=>126,
            'iso'=>'MK',
            'name'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
            'nicename'=>'Macedonia, the Former Yugoslav Republic of',
            'iso3'=>'MKD',
            'numcode'=>807,
            'phonecode'=>389
            ] );
            
            
                        
            CountryName::create( [
            'id'=>127,
            'iso'=>'MG',
            'name'=>'MADAGASCAR',
            'nicename'=>'Madagascar',
            'iso3'=>'MDG',
            'numcode'=>450,
            'phonecode'=>261
            ] );
            
            
                        
            CountryName::create( [
            'id'=>128,
            'iso'=>'MW',
            'name'=>'MALAWI',
            'nicename'=>'Malawi',
            'iso3'=>'MWI',
            'numcode'=>454,
            'phonecode'=>265
            ] );
            
            
                        
            CountryName::create( [
            'id'=>129,
            'iso'=>'MY',
            'name'=>'MALAYSIA',
            'nicename'=>'Malaysia',
            'iso3'=>'MYS',
            'numcode'=>458,
            'phonecode'=>60
            ] );
            
            
                        
            CountryName::create( [
            'id'=>130,
            'iso'=>'MV',
            'name'=>'MALDIVES',
            'nicename'=>'Maldives',
            'iso3'=>'MDV',
            'numcode'=>462,
            'phonecode'=>960
            ] );
            
            
                        
            CountryName::create( [
            'id'=>131,
            'iso'=>'ML',
            'name'=>'MALI',
            'nicename'=>'Mali',
            'iso3'=>'MLI',
            'numcode'=>466,
            'phonecode'=>223
            ] );
            
            
                        
            CountryName::create( [
            'id'=>132,
            'iso'=>'MT',
            'name'=>'MALTA',
            'nicename'=>'Malta',
            'iso3'=>'MLT',
            'numcode'=>470,
            'phonecode'=>356
            ] );
            
            
                        
            CountryName::create( [
            'id'=>133,
            'iso'=>'MH',
            'name'=>'MARSHALL ISLANDS',
            'nicename'=>'Marshall Islands',
            'iso3'=>'MHL',
            'numcode'=>584,
            'phonecode'=>692
            ] );
            
            
                        
            CountryName::create( [
            'id'=>134,
            'iso'=>'MQ',
            'name'=>'MARTINIQUE',
            'nicename'=>'Martinique',
            'iso3'=>'MTQ',
            'numcode'=>474,
            'phonecode'=>596
            ] );
            
            
                        
            CountryName::create( [
            'id'=>135,
            'iso'=>'MR',
            'name'=>'MAURITANIA',
            'nicename'=>'Mauritania',
            'iso3'=>'MRT',
            'numcode'=>478,
            'phonecode'=>222
            ] );
            
            
                        
            CountryName::create( [
            'id'=>136,
            'iso'=>'MU',
            'name'=>'MAURITIUS',
            'nicename'=>'Mauritius',
            'iso3'=>'MUS',
            'numcode'=>480,
            'phonecode'=>230
            ] );
            
            
                        
            CountryName::create( [
            'id'=>137,
            'iso'=>'YT',
            'name'=>'MAYOTTE',
            'nicename'=>'Mayotte',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>269
            ] );
            
            
                        
            CountryName::create( [
            'id'=>138,
            'iso'=>'MX',
            'name'=>'MEXICO',
            'nicename'=>'Mexico',
            'iso3'=>'MEX',
            'numcode'=>484,
            'phonecode'=>52
            ] );
            
            
                        
            CountryName::create( [
            'id'=>139,
            'iso'=>'FM',
            'name'=>'MICRONESIA, FEDERATED STATES OF',
            'nicename'=>'Micronesia, Federated States of',
            'iso3'=>'FSM',
            'numcode'=>583,
            'phonecode'=>691
            ] );
            
            
                        
            CountryName::create( [
            'id'=>140,
            'iso'=>'MD',
            'name'=>'MOLDOVA, REPUBLIC OF',
            'nicename'=>'Moldova, Republic of',
            'iso3'=>'MDA',
            'numcode'=>498,
            'phonecode'=>373
            ] );
            
            
                        
            CountryName::create( [
            'id'=>141,
            'iso'=>'MC',
            'name'=>'MONACO',
            'nicename'=>'Monaco',
            'iso3'=>'MCO',
            'numcode'=>492,
            'phonecode'=>377
            ] );
            
            
                        
            CountryName::create( [
            'id'=>142,
            'iso'=>'MN',
            'name'=>'MONGOLIA',
            'nicename'=>'Mongolia',
            'iso3'=>'MNG',
            'numcode'=>496,
            'phonecode'=>976
            ] );
            
            
                        
            CountryName::create( [
            'id'=>143,
            'iso'=>'MS',
            'name'=>'MONTSERRAT',
            'nicename'=>'Montserrat',
            'iso3'=>'MSR',
            'numcode'=>500,
            'phonecode'=>1664
            ] );
            
            
                        
            CountryName::create( [
            'id'=>144,
            'iso'=>'MA',
            'name'=>'MOROCCO',
            'nicename'=>'Morocco',
            'iso3'=>'MAR',
            'numcode'=>504,
            'phonecode'=>212
            ] );
            
            
                        
            CountryName::create( [
            'id'=>145,
            'iso'=>'MZ',
            'name'=>'MOZAMBIQUE',
            'nicename'=>'Mozambique',
            'iso3'=>'MOZ',
            'numcode'=>508,
            'phonecode'=>258
            ] );
            
            
                        
            CountryName::create( [
            'id'=>146,
            'iso'=>'MM',
            'name'=>'MYANMAR',
            'nicename'=>'Myanmar',
            'iso3'=>'MMR',
            'numcode'=>104,
            'phonecode'=>95
            ] );
            
            
                        
            CountryName::create( [
            'id'=>147,
            'iso'=>'NA',
            'name'=>'NAMIBIA',
            'nicename'=>'Namibia',
            'iso3'=>'NAM',
            'numcode'=>516,
            'phonecode'=>264
            ] );
            
            
                        
            CountryName::create( [
            'id'=>148,
            'iso'=>'NR',
            'name'=>'NAURU',
            'nicename'=>'Nauru',
            'iso3'=>'NRU',
            'numcode'=>520,
            'phonecode'=>674
            ] );
            
            
                        
            CountryName::create( [
            'id'=>149,
            'iso'=>'NP',
            'name'=>'NEPAL',
            'nicename'=>'Nepal',
            'iso3'=>'NPL',
            'numcode'=>524,
            'phonecode'=>977
            ] );
            
            
                        
            CountryName::create( [
            'id'=>150,
            'iso'=>'NL',
            'name'=>'NETHERLANDS',
            'nicename'=>'Netherlands',
            'iso3'=>'NLD',
            'numcode'=>528,
            'phonecode'=>31
            ] );
            
            
                        
            CountryName::create( [
            'id'=>151,
            'iso'=>'AN',
            'name'=>'NETHERLANDS ANTILLES',
            'nicename'=>'Netherlands Antilles',
            'iso3'=>'ANT',
            'numcode'=>530,
            'phonecode'=>599
            ] );
            
            
                        
            CountryName::create( [
            'id'=>152,
            'iso'=>'NC',
            'name'=>'NEW CALEDONIA',
            'nicename'=>'New Caledonia',
            'iso3'=>'NCL',
            'numcode'=>540,
            'phonecode'=>687
            ] );
            
            
                        
            CountryName::create( [
            'id'=>153,
            'iso'=>'NZ',
            'name'=>'NEW ZEALAND',
            'nicename'=>'New Zealand',
            'iso3'=>'NZL',
            'numcode'=>554,
            'phonecode'=>64
            ] );
            
            
                        
            CountryName::create( [
            'id'=>154,
            'iso'=>'NI',
            'name'=>'NICARAGUA',
            'nicename'=>'Nicaragua',
            'iso3'=>'NIC',
            'numcode'=>558,
            'phonecode'=>505
            ] );
            
            
                        
            CountryName::create( [
            'id'=>155,
            'iso'=>'NE',
            'name'=>'NIGER',
            'nicename'=>'Niger',
            'iso3'=>'NER',
            'numcode'=>562,
            'phonecode'=>227
            ] );
            
            
                        
            CountryName::create( [
            'id'=>156,
            'iso'=>'NG',
            'name'=>'NIGERIA',
            'nicename'=>'Nigeria',
            'iso3'=>'NGA',
            'numcode'=>566,
            'phonecode'=>234
            ] );
            
            
                        
            CountryName::create( [
            'id'=>157,
            'iso'=>'NU',
            'name'=>'NIUE',
            'nicename'=>'Niue',
            'iso3'=>'NIU',
            'numcode'=>570,
            'phonecode'=>683
            ] );
            
            
                        
            CountryName::create( [
            'id'=>158,
            'iso'=>'NF',
            'name'=>'NORFOLK ISLAND',
            'nicename'=>'Norfolk Island',
            'iso3'=>'NFK',
            'numcode'=>574,
            'phonecode'=>672
            ] );
            
            
                        
            CountryName::create( [
            'id'=>159,
            'iso'=>'MP',
            'name'=>'NORTHERN MARIANA ISLANDS',
            'nicename'=>'Northern Mariana Islands',
            'iso3'=>'MNP',
            'numcode'=>580,
            'phonecode'=>1670
            ] );
            
            
                        
            CountryName::create( [
            'id'=>160,
            'iso'=>'NO',
            'name'=>'NORWAY',
            'nicename'=>'Norway',
            'iso3'=>'NOR',
            'numcode'=>578,
            'phonecode'=>47
            ] );
            
            
                        
            CountryName::create( [
            'id'=>161,
            'iso'=>'OM',
            'name'=>'OMAN',
            'nicename'=>'Oman',
            'iso3'=>'OMN',
            'numcode'=>512,
            'phonecode'=>968
            ] );
            
            
                        
            CountryName::create( [
            'id'=>162,
            'iso'=>'PK',
            'name'=>'PAKISTAN',
            'nicename'=>'Pakistan',
            'iso3'=>'PAK',
            'numcode'=>586,
            'phonecode'=>92
            ] );
            
            
                        
            CountryName::create( [
            'id'=>163,
            'iso'=>'PW',
            'name'=>'PALAU',
            'nicename'=>'Palau',
            'iso3'=>'PLW',
            'numcode'=>585,
            'phonecode'=>680
            ] );
            
            
                        
            CountryName::create( [
            'id'=>164,
            'iso'=>'PS',
            'name'=>'PALESTINIAN TERRITORY, OCCUPIED',
            'nicename'=>'Palestinian Territory, Occupied',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>970
            ] );
            
            
                        
            CountryName::create( [
            'id'=>165,
            'iso'=>'PA',
            'name'=>'PANAMA',
            'nicename'=>'Panama',
            'iso3'=>'PAN',
            'numcode'=>591,
            'phonecode'=>507
            ] );
            
            
                        
            CountryName::create( [
            'id'=>166,
            'iso'=>'PG',
            'name'=>'PAPUA NEW GUINEA',
            'nicename'=>'Papua New Guinea',
            'iso3'=>'PNG',
            'numcode'=>598,
            'phonecode'=>675
            ] );
            
            
                        
            CountryName::create( [
            'id'=>167,
            'iso'=>'PY',
            'name'=>'PARAGUAY',
            'nicename'=>'Paraguay',
            'iso3'=>'PRY',
            'numcode'=>600,
            'phonecode'=>595
            ] );
            
            
                        
            CountryName::create( [
            'id'=>168,
            'iso'=>'PE',
            'name'=>'PERU',
            'nicename'=>'Peru',
            'iso3'=>'PER',
            'numcode'=>604,
            'phonecode'=>51
            ] );
            
            
                        
            CountryName::create( [
            'id'=>169,
            'iso'=>'PH',
            'name'=>'PHILIPPINES',
            'nicename'=>'Philippines',
            'iso3'=>'PHL',
            'numcode'=>608,
            'phonecode'=>63
            ] );
            
            
                        
            CountryName::create( [
            'id'=>170,
            'iso'=>'PN',
            'name'=>'PITCAIRN',
            'nicename'=>'Pitcairn',
            'iso3'=>'PCN',
            'numcode'=>612,
            'phonecode'=>0
            ] );
            
            
                        
            CountryName::create( [
            'id'=>171,
            'iso'=>'PL',
            'name'=>'POLAND',
            'nicename'=>'Poland',
            'iso3'=>'POL',
            'numcode'=>616,
            'phonecode'=>48
            ] );
            
            
                        
            CountryName::create( [
            'id'=>172,
            'iso'=>'PT',
            'name'=>'PORTUGAL',
            'nicename'=>'Portugal',
            'iso3'=>'PRT',
            'numcode'=>620,
            'phonecode'=>351
            ] );
            
            
                        
            CountryName::create( [
            'id'=>173,
            'iso'=>'PR',
            'name'=>'PUERTO RICO',
            'nicename'=>'Puerto Rico',
            'iso3'=>'PRI',
            'numcode'=>630,
            'phonecode'=>1787
            ] );
            
            
                        
            CountryName::create( [
            'id'=>174,
            'iso'=>'QA',
            'name'=>'QATAR',
            'nicename'=>'Qatar',
            'iso3'=>'QAT',
            'numcode'=>634,
            'phonecode'=>974
            ] );
            
            
                        
            CountryName::create( [
            'id'=>175,
            'iso'=>'RE',
            'name'=>'REUNION',
            'nicename'=>'Reunion',
            'iso3'=>'REU',
            'numcode'=>638,
            'phonecode'=>262
            ] );
            
            
                        
            CountryName::create( [
            'id'=>176,
            'iso'=>'RO',
            'name'=>'ROMANIA',
            'nicename'=>'Romania',
            'iso3'=>'ROM',
            'numcode'=>642,
            'phonecode'=>40
            ] );
            
            
                        
            CountryName::create( [
            'id'=>177,
            'iso'=>'RU',
            'name'=>'RUSSIAN FEDERATION',
            'nicename'=>'Russian Federation',
            'iso3'=>'RUS',
            'numcode'=>643,
            'phonecode'=>70
            ] );
            
            
                        
            CountryName::create( [
            'id'=>178,
            'iso'=>'RW',
            'name'=>'RWANDA',
            'nicename'=>'Rwanda',
            'iso3'=>'RWA',
            'numcode'=>646,
            'phonecode'=>250
            ] );
            
            
                        
            CountryName::create( [
            'id'=>179,
            'iso'=>'SH',
            'name'=>'SAINT HELENA',
            'nicename'=>'Saint Helena',
            'iso3'=>'SHN',
            'numcode'=>654,
            'phonecode'=>290
            ] );
            
            
                        
            CountryName::create( [
            'id'=>180,
            'iso'=>'KN',
            'name'=>'SAINT KITTS AND NEVIS',
            'nicename'=>'Saint Kitts and Nevis',
            'iso3'=>'KNA',
            'numcode'=>659,
            'phonecode'=>1869
            ] );
            
            
                        
            CountryName::create( [
            'id'=>181,
            'iso'=>'LC',
            'name'=>'SAINT LUCIA',
            'nicename'=>'Saint Lucia',
            'iso3'=>'LCA',
            'numcode'=>662,
            'phonecode'=>1758
            ] );
            
            
                        
            CountryName::create( [
            'id'=>182,
            'iso'=>'PM',
            'name'=>'SAINT PIERRE AND MIQUELON',
            'nicename'=>'Saint Pierre and Miquelon',
            'iso3'=>'SPM',
            'numcode'=>666,
            'phonecode'=>508
            ] );
            
            
                        
            CountryName::create( [
            'id'=>183,
            'iso'=>'VC',
            'name'=>'SAINT VINCENT AND THE GRENADINES',
            'nicename'=>'Saint Vincent and the Grenadines',
            'iso3'=>'VCT',
            'numcode'=>670,
            'phonecode'=>1784
            ] );
            
            
                        
            CountryName::create( [
            'id'=>184,
            'iso'=>'WS',
            'name'=>'SAMOA',
            'nicename'=>'Samoa',
            'iso3'=>'WSM',
            'numcode'=>882,
            'phonecode'=>684
            ] );
            
            
                        
            CountryName::create( [
            'id'=>185,
            'iso'=>'SM',
            'name'=>'SAN MARINO',
            'nicename'=>'San Marino',
            'iso3'=>'SMR',
            'numcode'=>674,
            'phonecode'=>378
            ] );
            
            
                        
            CountryName::create( [
            'id'=>186,
            'iso'=>'ST',
            'name'=>'SAO TOME AND PRINCIPE',
            'nicename'=>'Sao Tome and Principe',
            'iso3'=>'STP',
            'numcode'=>678,
            'phonecode'=>239
            ] );
            
            
                        
            CountryName::create( [
            'id'=>187,
            'iso'=>'SA',
            'name'=>'SAUDI ARABIA',
            'nicename'=>'Saudi Arabia',
            'iso3'=>'SAU',
            'numcode'=>682,
            'phonecode'=>966
            ] );
            
            
                        
            CountryName::create( [
            'id'=>188,
            'iso'=>'SN',
            'name'=>'SENEGAL',
            'nicename'=>'Senegal',
            'iso3'=>'SEN',
            'numcode'=>686,
            'phonecode'=>221
            ] );
            
            
                        
            CountryName::create( [
            'id'=>189,
            'iso'=>'CS',
            'name'=>'SERBIA AND MONTENEGRO',
            'nicename'=>'Serbia and Montenegro',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>381
            ] );
            
            
                        
            CountryName::create( [
            'id'=>190,
            'iso'=>'SC',
            'name'=>'SEYCHELLES',
            'nicename'=>'Seychelles',
            'iso3'=>'SYC',
            'numcode'=>690,
            'phonecode'=>248
            ] );
            
            
                        
            CountryName::create( [
            'id'=>191,
            'iso'=>'SL',
            'name'=>'SIERRA LEONE',
            'nicename'=>'Sierra Leone',
            'iso3'=>'SLE',
            'numcode'=>694,
            'phonecode'=>232
            ] );
            
            
                        
            CountryName::create( [
            'id'=>192,
            'iso'=>'SG',
            'name'=>'SINGAPORE',
            'nicename'=>'Singapore',
            'iso3'=>'SGP',
            'numcode'=>702,
            'phonecode'=>65
            ] );
            
            
                        
            CountryName::create( [
            'id'=>193,
            'iso'=>'SK',
            'name'=>'SLOVAKIA',
            'nicename'=>'Slovakia',
            'iso3'=>'SVK',
            'numcode'=>703,
            'phonecode'=>421
            ] );
            
            
                        
            CountryName::create( [
            'id'=>194,
            'iso'=>'SI',
            'name'=>'SLOVENIA',
            'nicename'=>'Slovenia',
            'iso3'=>'SVN',
            'numcode'=>705,
            'phonecode'=>386
            ] );
            
            
                        
            CountryName::create( [
            'id'=>195,
            'iso'=>'SB',
            'name'=>'SOLOMON ISLANDS',
            'nicename'=>'Solomon Islands',
            'iso3'=>'SLB',
            'numcode'=>90,
            'phonecode'=>677
            ] );
            
            
                        
            CountryName::create( [
            'id'=>196,
            'iso'=>'SO',
            'name'=>'SOMALIA',
            'nicename'=>'Somalia',
            'iso3'=>'SOM',
            'numcode'=>706,
            'phonecode'=>252
            ] );
            
            
                        
            CountryName::create( [
            'id'=>197,
            'iso'=>'ZA',
            'name'=>'SOUTH AFRICA',
            'nicename'=>'South Africa',
            'iso3'=>'ZAF',
            'numcode'=>710,
            'phonecode'=>27
            ] );
            
            
                        
            CountryName::create( [
            'id'=>198,
            'iso'=>'GS',
            'name'=>'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
            'nicename'=>'South Georgia and the South Sandwich Islands',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>0
            ] );
            
            
                        
            CountryName::create( [
            'id'=>199,
            'iso'=>'ES',
            'name'=>'SPAIN',
            'nicename'=>'Spain',
            'iso3'=>'ESP',
            'numcode'=>724,
            'phonecode'=>34
            ] );
            
            
                        
            CountryName::create( [
            'id'=>200,
            'iso'=>'LK',
            'name'=>'SRI LANKA',
            'nicename'=>'Sri Lanka',
            'iso3'=>'LKA',
            'numcode'=>144,
            'phonecode'=>94
            ] );
            
            
                        
            CountryName::create( [
            'id'=>201,
            'iso'=>'SD',
            'name'=>'SUDAN',
            'nicename'=>'Sudan',
            'iso3'=>'SDN',
            'numcode'=>736,
            'phonecode'=>249
            ] );
            
            
                        
            CountryName::create( [
            'id'=>202,
            'iso'=>'SR',
            'name'=>'SURINAME',
            'nicename'=>'Suriname',
            'iso3'=>'SUR',
            'numcode'=>740,
            'phonecode'=>597
            ] );
            
            
                        
            CountryName::create( [
            'id'=>203,
            'iso'=>'SJ',
            'name'=>'SVALBARD AND JAN MAYEN',
            'nicename'=>'Svalbard and Jan Mayen',
            'iso3'=>'SJM',
            'numcode'=>744,
            'phonecode'=>47
            ] );
            
            
                        
            CountryName::create( [
            'id'=>204,
            'iso'=>'SZ',
            'name'=>'SWAZILAND',
            'nicename'=>'Swaziland',
            'iso3'=>'SWZ',
            'numcode'=>748,
            'phonecode'=>268
            ] );
            
            
                        
            CountryName::create( [
            'id'=>205,
            'iso'=>'SE',
            'name'=>'SWEDEN',
            'nicename'=>'Sweden',
            'iso3'=>'SWE',
            'numcode'=>752,
            'phonecode'=>46
            ] );
            
            
                        
            CountryName::create( [
            'id'=>206,
            'iso'=>'CH',
            'name'=>'SWITZERLAND',
            'nicename'=>'Switzerland',
            'iso3'=>'CHE',
            'numcode'=>756,
            'phonecode'=>41
            ] );
            
            
                        
            CountryName::create( [
            'id'=>207,
            'iso'=>'SY',
            'name'=>'SYRIAN ARAB REPUBLIC',
            'nicename'=>'Syrian Arab Republic',
            'iso3'=>'SYR',
            'numcode'=>760,
            'phonecode'=>963
            ] );
            
            
                        
            CountryName::create( [
            'id'=>208,
            'iso'=>'TW',
            'name'=>'TAIWAN, PROVINCE OF CHINA',
            'nicename'=>'Taiwan, Province of China',
            'iso3'=>'TWN',
            'numcode'=>158,
            'phonecode'=>886
            ] );
            
            
                        
            CountryName::create( [
            'id'=>209,
            'iso'=>'TJ',
            'name'=>'TAJIKISTAN',
            'nicename'=>'Tajikistan',
            'iso3'=>'TJK',
            'numcode'=>762,
            'phonecode'=>992
            ] );
            
            
                        
            CountryName::create( [
            'id'=>210,
            'iso'=>'TZ',
            'name'=>'TANZANIA, UNITED REPUBLIC OF',
            'nicename'=>'Tanzania, United Republic of',
            'iso3'=>'TZA',
            'numcode'=>834,
            'phonecode'=>255
            ] );
            
            
                        
            CountryName::create( [
            'id'=>211,
            'iso'=>'TH',
            'name'=>'THAILAND',
            'nicename'=>'Thailand',
            'iso3'=>'THA',
            'numcode'=>764,
            'phonecode'=>66
            ] );
            
            
                        
            CountryName::create( [
            'id'=>212,
            'iso'=>'TL',
            'name'=>'TIMOR-LESTE',
            'nicename'=>'Timor-Leste',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>670
            ] );
            
            
                        
            CountryName::create( [
            'id'=>213,
            'iso'=>'TG',
            'name'=>'TOGO',
            'nicename'=>'Togo',
            'iso3'=>'TGO',
            'numcode'=>768,
            'phonecode'=>228
            ] );
            
            
                        
            CountryName::create( [
            'id'=>214,
            'iso'=>'TK',
            'name'=>'TOKELAU',
            'nicename'=>'Tokelau',
            'iso3'=>'TKL',
            'numcode'=>772,
            'phonecode'=>690
            ] );
            
            
                        
            CountryName::create( [
            'id'=>215,
            'iso'=>'TO',
            'name'=>'TONGA',
            'nicename'=>'Tonga',
            'iso3'=>'TON',
            'numcode'=>776,
            'phonecode'=>676
            ] );
            
            
                        
            CountryName::create( [
            'id'=>216,
            'iso'=>'TT',
            'name'=>'TRINIDAD AND TOBAGO',
            'nicename'=>'Trinidad and Tobago',
            'iso3'=>'TTO',
            'numcode'=>780,
            'phonecode'=>1868
            ] );
            
            
                        
            CountryName::create( [
            'id'=>217,
            'iso'=>'TN',
            'name'=>'TUNISIA',
            'nicename'=>'Tunisia',
            'iso3'=>'TUN',
            'numcode'=>788,
            'phonecode'=>216
            ] );
            
            
                        
            CountryName::create( [
            'id'=>218,
            'iso'=>'TR',
            'name'=>'TURKEY',
            'nicename'=>'Turkey',
            'iso3'=>'TUR',
            'numcode'=>792,
            'phonecode'=>90
            ] );
            
            
                        
            CountryName::create( [
            'id'=>219,
            'iso'=>'TM',
            'name'=>'TURKMENISTAN',
            'nicename'=>'Turkmenistan',
            'iso3'=>'TKM',
            'numcode'=>795,
            'phonecode'=>7370
            ] );
            
            
                        
            CountryName::create( [
            'id'=>220,
            'iso'=>'TC',
            'name'=>'TURKS AND CAICOS ISLANDS',
            'nicename'=>'Turks and Caicos Islands',
            'iso3'=>'TCA',
            'numcode'=>796,
            'phonecode'=>1649
            ] );
            
            
                        
            CountryName::create( [
            'id'=>221,
            'iso'=>'TV',
            'name'=>'TUVALU',
            'nicename'=>'Tuvalu',
            'iso3'=>'TUV',
            'numcode'=>798,
            'phonecode'=>688
            ] );
            
            
                        
            CountryName::create( [
            'id'=>222,
            'iso'=>'UG',
            'name'=>'UGANDA',
            'nicename'=>'Uganda',
            'iso3'=>'UGA',
            'numcode'=>800,
            'phonecode'=>256
            ] );
            
            
                        
            CountryName::create( [
            'id'=>223,
            'iso'=>'UA',
            'name'=>'UKRAINE',
            'nicename'=>'Ukraine',
            'iso3'=>'UKR',
            'numcode'=>804,
            'phonecode'=>380
            ] );
            
            
                        
            CountryName::create( [
            'id'=>224,
            'iso'=>'AE',
            'name'=>'UNITED ARAB EMIRATES',
            'nicename'=>'United Arab Emirates',
            'iso3'=>'ARE',
            'numcode'=>784,
            'phonecode'=>971
            ] );
            
            
                        
            CountryName::create( [
            'id'=>225,
            'iso'=>'GB',
            'name'=>'UNITED KINGDOM',
            'nicename'=>'United Kingdom',
            'iso3'=>'GBR',
            'numcode'=>826,
            'phonecode'=>44
            ] );
            
            
                        
            CountryName::create( [
            'id'=>226,
            'iso'=>'US',
            'name'=>'UNITED STATES',
            'nicename'=>'United States',
            'iso3'=>'USA',
            'numcode'=>840,
            'phonecode'=>1
            ] );
            
            
                        
            CountryName::create( [
            'id'=>227,
            'iso'=>'UM',
            'name'=>'UNITED STATES MINOR OUTLYING ISLANDS',
            'nicename'=>'United States Minor Outlying Islands',
            'iso3'=>NULL,
            'numcode'=>NULL,
            'phonecode'=>1
            ] );
            
            
                        
            CountryName::create( [
            'id'=>228,
            'iso'=>'UY',
            'name'=>'URUGUAY',
            'nicename'=>'Uruguay',
            'iso3'=>'URY',
            'numcode'=>858,
            'phonecode'=>598
            ] );
            
            
                        
            CountryName::create( [
            'id'=>229,
            'iso'=>'UZ',
            'name'=>'UZBEKISTAN',
            'nicename'=>'Uzbekistan',
            'iso3'=>'UZB',
            'numcode'=>860,
            'phonecode'=>998
            ] );
            
            
                        
            CountryName::create( [
            'id'=>230,
            'iso'=>'VU',
            'name'=>'VANUATU',
            'nicename'=>'Vanuatu',
            'iso3'=>'VUT',
            'numcode'=>548,
            'phonecode'=>678
            ] );
            
            
                        
            CountryName::create( [
            'id'=>231,
            'iso'=>'VE',
            'name'=>'VENEZUELA',
            'nicename'=>'Venezuela',
            'iso3'=>'VEN',
            'numcode'=>862,
            'phonecode'=>58
            ] );
            
            
                        
            CountryName::create( [
            'id'=>232,
            'iso'=>'VN',
            'name'=>'VIET NAM',
            'nicename'=>'Viet Nam',
            'iso3'=>'VNM',
            'numcode'=>704,
            'phonecode'=>84
            ] );
            
            
                        
            CountryName::create( [
            'id'=>233,
            'iso'=>'VG',
            'name'=>'VIRGIN ISLANDS, BRITISH',
            'nicename'=>'Virgin Islands, British',
            'iso3'=>'VGB',
            'numcode'=>92,
            'phonecode'=>1284
            ] );
            
            
                        
            CountryName::create( [
            'id'=>234,
            'iso'=>'VI',
            'name'=>'VIRGIN ISLANDS, U.S.',
            'nicename'=>'Virgin Islands, U.s.',
            'iso3'=>'VIR',
            'numcode'=>850,
            'phonecode'=>1340
            ] );
            
            
                        
            CountryName::create( [
            'id'=>235,
            'iso'=>'WF',
            'name'=>'WALLIS AND FUTUNA',
            'nicename'=>'Wallis and Futuna',
            'iso3'=>'WLF',
            'numcode'=>876,
            'phonecode'=>681
            ] );
            
            
                        
            CountryName::create( [
            'id'=>236,
            'iso'=>'EH',
            'name'=>'WESTERN SAHARA',
            'nicename'=>'Western Sahara',
            'iso3'=>'ESH',
            'numcode'=>732,
            'phonecode'=>212
            ] );
            
            
                        
            CountryName::create( [
            'id'=>237,
            'iso'=>'YE',
            'name'=>'YEMEN',
            'nicename'=>'Yemen',
            'iso3'=>'YEM',
            'numcode'=>887,
            'phonecode'=>967
            ] );
            
            
                        
            CountryName::create( [
            'id'=>238,
            'iso'=>'ZM',
            'name'=>'ZAMBIA',
            'nicename'=>'Zambia',
            'iso3'=>'ZMB',
            'numcode'=>894,
            'phonecode'=>260
            ] );
            
            
                        
            CountryName::create( [
            'id'=>239,
            'iso'=>'ZW',
            'name'=>'ZIMBABWE',
            'nicename'=>'Zimbabwe',
            'iso3'=>'ZWE',
            'numcode'=>716,
            'phonecode'=>263
            ] );
            
            
    }
}
