<?php

namespace App\Assets;

class City1 {
private static $cities_array = array (
  /*
  0 => 
  array (
    'city' => 'Sant Julià de Lòria',
    'region' => '06',
    'country' => 'AD',
    'latitude' => '42.46372',
    'longitude' => '1.49129',
  ),
  1 => 
  array (
    'city' => 'Pas de la Casa',
    'region' => '03',
    'country' => 'AD',
    'latitude' => '42.54277',
    'longitude' => '1.73361',
  ),
  2 => 
  array (
    'city' => 'Ordino',
    'region' => '05',
    'country' => 'AD',
    'latitude' => '42.55623',
    'longitude' => '1.53319',
  ),
  3 => 
  array (
    'city' => 'les Escaldes',
    'region' => '08',
    'country' => 'AD',
    'latitude' => '42.50729',
    'longitude' => '1.53414',
  ),
  4 => 
  array (
    'city' => 'la Massana',
    'region' => '04',
    'country' => 'AD',
    'latitude' => '42.54499',
    'longitude' => '1.51483',
  ),
  5 => 
  array (
    'city' => 'Encamp',
    'region' => '03',
    'country' => 'AD',
    'latitude' => '42.53451',
    'longitude' => '1.5767',
  ),
  6 => 
  array (
    'city' => 'Canillo',
    'region' => '02',
    'country' => 'AD',
    'latitude' => '42.5669',
    'longitude' => '1.59556',
  ),
  7 => 
  array (
    'city' => 'Arinsal',
    'region' => '04',
    'country' => 'AD',
    'latitude' => '42.57205',
    'longitude' => '1.48453',
  ),
  8 => 
  array (
    'city' => 'Andorra la Vella',
    'region' => '07',
    'country' => 'AD',
    'latitude' => '42.50779',
    'longitude' => '1.52109',
  ),
  9 => 
  array (
    'city' => 'Umm al Qaywayn',
    'region' => '07',
    'country' => 'AE',
    'latitude' => '25.5864',
    'longitude' => '55.57603',
  ),
  10 => 
  array (
    'city' => 'Ra’s al Khaymah',
    'region' => '05',
    'country' => 'AE',
    'latitude' => '25.78953',
    'longitude' => '55.9432',
  ),
  11 => 
  array (
    'city' => 'Muzayri‘',
    'region' => '01',
    'country' => 'AE',
    'latitude' => '23.14355',
    'longitude' => '53.7881',
  ),
  12 => 
  array (
    'city' => 'Khawr Fakkān',
    'region' => '06',
    'country' => 'AE',
    'latitude' => '25.33132',
    'longitude' => '56.34199',
  ),
  13 => 
  array (
    'city' => 'Dubai',
    'region' => '03',
    'country' => 'AE',
    'latitude' => '25.25817',
    'longitude' => '55.30472',
  ),
  14 => 
  array (
    'city' => 'Dibā',
    'region' => '06',
    'country' => 'AE',
    'latitude' => '25.61955',
    'longitude' => '56.27291',
  ),
  15 => 
  array (
    'city' => 'Sharjah',
    'region' => '06',
    'country' => 'AE',
    'latitude' => '25.35731',
    'longitude' => '55.4033',
  ),
  16 => 
  array (
    'city' => 'Ar Ruways',
    'region' => '01',
    'country' => 'AE',
    'latitude' => '24.11028',
    'longitude' => '52.73056',
  ),
  17 => 
  array (
    'city' => 'Al Fujayrah',
    'region' => '04',
    'country' => 'AE',
    'latitude' => '25.11641',
    'longitude' => '56.34141',
  ),
  18 => 
  array (
    'city' => 'Al ‘Ayn',
    'region' => '01',
    'country' => 'AE',
    'latitude' => '24.19167',
    'longitude' => '55.76056',
  ),
  19 => 
  array (
    'city' => '`Ajmān',
    'region' => '02',
    'country' => 'AE',
    'latitude' => '25.41111',
    'longitude' => '55.43504',
  ),
  20 => 
  array (
    'city' => 'Adh Dhayd',
    'region' => '07',
    'country' => 'AE',
    'latitude' => '25.28875',
    'longitude' => '55.88137',
  ),
  21 => 
  array (
    'city' => 'Abu Dhabi',
    'region' => '01',
    'country' => 'AE',
    'latitude' => '24.46667',
    'longitude' => '54.36667',
  ),
  22 => 
  array (
    'city' => 'Kōhistān',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '34.65389',
    'longitude' => '61.19778',
  ),
  23 => 
  array (
    'city' => 'Tukzār',
    'region' => '33',
    'country' => 'AF',
    'latitude' => '35.94831',
    'longitude' => '66.42132',
  ),
  24 => 
  array (
    'city' => 'Zindah Jān',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '34.34264',
    'longitude' => '61.74675',
  ),
  25 => 
  array (
    'city' => 'Zarghūn Shahr',
    'region' => '29',
    'country' => 'AF',
    'latitude' => '32.84734',
    'longitude' => '68.44573',
  ),
  26 => 
  array (
    'city' => 'Zaṟah Sharan',
    'region' => '29',
    'country' => 'AF',
    'latitude' => '33.14667',
    'longitude' => '68.79167',
  ),
  27 => 
  array (
    'city' => 'Zaranj',
    'region' => '19',
    'country' => 'AF',
    'latitude' => '30.96667',
    'longitude' => '61.88333',
  ),
  28 => 
  array (
    'city' => 'Yangī Qal‘ah',
    'region' => '26',
    'country' => 'AF',
    'latitude' => '37.46572',
    'longitude' => '69.61131',
  ),
  29 => 
  array (
    'city' => 'Tīr Pul',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '34.59431',
    'longitude' => '61.26895',
  ),
  30 => 
  array (
    'city' => 'Tarinkot',
    'region' => '39',
    'country' => 'AF',
    'latitude' => '32.62675',
    'longitude' => '65.87331',
  ),
  31 => 
  array (
    'city' => 'Taloqan',
    'region' => '26',
    'country' => 'AF',
    'latitude' => '36.73605',
    'longitude' => '69.53451',
  ),
  32 => 
  array (
    'city' => 'Tagāw-Bāy',
    'region' => '33',
    'country' => 'AF',
    'latitude' => '35.69941',
    'longitude' => '66.06164',
  ),
  33 => 
  array (
    'city' => 'Tagāb',
    'region' => '14',
    'country' => 'AF',
    'latitude' => '34.85501',
    'longitude' => '69.64917',
  ),
  34 => 
  array (
    'city' => 'Shīnḏanḏ',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '33.30294',
    'longitude' => '62.1474',
  ),
  35 => 
  array (
    'city' => 'Shibirghān',
    'region' => '31',
    'country' => 'AF',
    'latitude' => '36.66757',
    'longitude' => '65.7529',
  ),
  36 => 
  array (
    'city' => 'Shahrak',
    'region' => '09',
    'country' => 'AF',
    'latitude' => '34.10738',
    'longitude' => '64.3052',
  ),
  37 => 
  array (
    'city' => 'Sar-e Pul',
    'region' => '33',
    'country' => 'AF',
    'latitude' => '36.21544',
    'longitude' => '65.93249',
  ),
  38 => 
  array (
    'city' => 'Sangīn',
    'region' => '10',
    'country' => 'AF',
    'latitude' => '32.07275',
    'longitude' => '64.8359',
  ),
  39 => 
  array (
    'city' => 'Sang-e Chārak',
    'region' => '33',
    'country' => 'AF',
    'latitude' => '35.84972',
    'longitude' => '66.43694',
  ),
  40 => 
  array (
    'city' => 'Sang Atesh',
    'region' => '02',
    'country' => 'AF',
    'latitude' => '35.248',
    'longitude' => '63.0044',
  ),
  41 => 
  array (
    'city' => 'Aībak',
    'region' => '32',
    'country' => 'AF',
    'latitude' => '36.26468',
    'longitude' => '68.01551',
  ),
  42 => 
  array (
    'city' => 'Rūdbār',
    'region' => '19',
    'country' => 'AF',
    'latitude' => '30.15',
    'longitude' => '62.6',
  ),
  43 => 
  array (
    'city' => 'Rustāq',
    'region' => '26',
    'country' => 'AF',
    'latitude' => '37.12604',
    'longitude' => '69.83045',
  ),
  44 => 
  array (
    'city' => 'Qarqīn',
    'region' => '31',
    'country' => 'AF',
    'latitude' => '37.41853',
    'longitude' => '66.04358',
  ),
  45 => 
  array (
    'city' => 'Qarchī Gak',
    'region' => '30',
    'country' => 'AF',
    'latitude' => '37.03999',
    'longitude' => '66.78891',
  ),
  46 => 
  array (
    'city' => 'Qarāwul',
    'region' => '24',
    'country' => 'AF',
    'latitude' => '37.22019',
    'longitude' => '68.78041',
  ),
  47 => 
  array (
    'city' => 'Qarah Bāgh',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '34.94023',
    'longitude' => '61.77589',
  ),
  48 => 
  array (
    'city' => 'Qala i Naw',
    'region' => '02',
    'country' => 'AF',
    'latitude' => '34.98735',
    'longitude' => '63.12891',
  ),
  49 => 
  array (
    'city' => 'Qal‘ah-ye Shahr',
    'region' => '33',
    'country' => 'AF',
    'latitude' => '35.54729',
    'longitude' => '65.5676',
  ),
  50 => 
  array (
    'city' => 'Qalāt',
    'region' => '28',
    'country' => 'AF',
    'latitude' => '32.10575',
    'longitude' => '66.90833',
  ),
  51 => 
  array (
    'city' => 'Qādis',
    'region' => '02',
    'country' => 'AF',
    'latitude' => '34.8085',
    'longitude' => '63.43003',
  ),
  52 => 
  array (
    'city' => 'Pārūn',
    'region' => '38',
    'country' => 'AF',
    'latitude' => '35.4207',
    'longitude' => '70.92214',
  ),
  53 => 
  array (
    'city' => 'Pul-e Khumrī',
    'region' => '03',
    'country' => 'AF',
    'latitude' => '35.94458',
    'longitude' => '68.71512',
  ),
  54 => 
  array (
    'city' => 'Pul-e ‘Alam',
    'region' => '17',
    'country' => 'AF',
    'latitude' => '33.99529',
    'longitude' => '69.02274',
  ),
  55 => 
  array (
    'city' => 'Panjāb',
    'region' => '05',
    'country' => 'AF',
    'latitude' => '34.38795',
    'longitude' => '67.02327',
  ),
  56 => 
  array (
    'city' => 'Paghmān',
    'region' => '13',
    'country' => 'AF',
    'latitude' => '34.5875',
    'longitude' => '68.95333',
  ),
  57 => 
  array (
    'city' => 'Uruzgān',
    'region' => '39',
    'country' => 'AF',
    'latitude' => '32.92775',
    'longitude' => '66.63253',
  ),
  58 => 
  array (
    'city' => 'Urgūn',
    'region' => '29',
    'country' => 'AF',
    'latitude' => '32.94111',
    'longitude' => '69.18',
  ),
  59 => 
  array (
    'city' => 'Nīlī',
    'region' => '41',
    'country' => 'AF',
    'latitude' => '33.72178',
    'longitude' => '66.13023',
  ),
  60 => 
  array (
    'city' => 'Nahrīn',
    'region' => '03',
    'country' => 'AF',
    'latitude' => '36.0649',
    'longitude' => '69.13343',
  ),
  61 => 
  array (
    'city' => 'Ḩokūmat-e Nād ‘Alī',
    'region' => '10',
    'country' => 'AF',
    'latitude' => '31.64286',
    'longitude' => '64.23982',
  ),
  62 => 
  array (
    'city' => 'Bala Murghab',
    'region' => '02',
    'country' => 'AF',
    'latitude' => '35.58408',
    'longitude' => '63.32886',
  ),
  63 => 
  array (
    'city' => 'Mīr Bachah Kōṯ',
    'region' => '13',
    'country' => 'AF',
    'latitude' => '34.74999',
    'longitude' => '69.11899',
  ),
  64 => 
  array (
    'city' => 'Mīrābād',
    'region' => '19',
    'country' => 'AF',
    'latitude' => '30.43624',
    'longitude' => '61.8383',
  ),
  65 => 
  array (
    'city' => 'Maymana',
    'region' => '07',
    'country' => 'AF',
    'latitude' => '35.92139',
    'longitude' => '64.78361',
  ),
  66 => 
  array (
    'city' => 'Mehtar Lām',
    'region' => '35',
    'country' => 'AF',
    'latitude' => '34.67139',
    'longitude' => '70.20944',
  ),
  67 => 
  array (
    'city' => 'Mazār-e Sharīf',
    'region' => '30',
    'country' => 'AF',
    'latitude' => '36.70904',
    'longitude' => '67.11087',
  ),
  68 => 
  array (
    'city' => 'Lashkar Gāh',
    'region' => '10',
    'country' => 'AF',
    'latitude' => '31.59382',
    'longitude' => '64.37161',
  ),
  69 => 
  array (
    'city' => 'Larkird',
    'region' => '33',
    'country' => 'AF',
    'latitude' => '35.48936',
    'longitude' => '66.66409',
  ),
  70 => 
  array (
    'city' => 'Kushk',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '33.29565',
    'longitude' => '61.95221',
  ),
  71 => 
  array (
    'city' => '‘Alāqahdārī-ye Kirān wa Munjān',
    'region' => '01',
    'country' => 'AF',
    'latitude' => '36.02866',
    'longitude' => '70.77258',
  ),
  72 => 
  array (
    'city' => 'Kunduz',
    'region' => '24',
    'country' => 'AF',
    'latitude' => '36.72896',
    'longitude' => '68.857',
  ),
  73 => 
  array (
    'city' => 'Khōst',
    'region' => '37',
    'country' => 'AF',
    'latitude' => '33.33951',
    'longitude' => '69.92041',
  ),
  74 => 
  array (
    'city' => 'Khulm',
    'region' => '30',
    'country' => 'AF',
    'latitude' => '36.69736',
    'longitude' => '67.69826',
  ),
  75 => 
  array (
    'city' => 'Khāsh',
    'region' => '19',
    'country' => 'AF',
    'latitude' => '31.52919',
    'longitude' => '62.79055',
  ),
  76 => 
  array (
    'city' => 'Khandūd',
    'region' => '01',
    'country' => 'AF',
    'latitude' => '36.95127',
    'longitude' => '72.318',
  ),
  77 => 
  array (
    'city' => 'Khanabad',
    'region' => '24',
    'country' => 'AF',
    'latitude' => '36.6825',
    'longitude' => '69.11556',
  ),
  78 => 
  array (
    'city' => 'Kishk-e Nakhūd',
    'region' => '23',
    'country' => 'AF',
    'latitude' => '31.62519',
    'longitude' => '65.05511',
  ),
  79 => 
  array (
    'city' => 'Karukh',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '34.48108',
    'longitude' => '62.5863',
  ),
  80 => 
  array (
    'city' => 'Kandahār',
    'region' => '23',
    'country' => 'AF',
    'latitude' => '31.61332',
    'longitude' => '65.71013',
  ),
  81 => 
  array (
    'city' => 'Kabul',
    'region' => '13',
    'country' => 'AF',
    'latitude' => '34.52813',
    'longitude' => '69.17233',
  ),
  82 => 
  array (
    'city' => 'Jarm',
    'region' => '01',
    'country' => 'AF',
    'latitude' => '36.86477',
    'longitude' => '70.83421',
  ),
  83 => 
  array (
    'city' => 'Jawand',
    'region' => '02',
    'country' => 'AF',
    'latitude' => '35.06361',
    'longitude' => '64.14917',
  ),
  84 => 
  array (
    'city' => 'Jalālābād',
    'region' => '18',
    'country' => 'AF',
    'latitude' => '34.42647',
    'longitude' => '70.45153',
  ),
  85 => 
  array (
    'city' => 'Jabal os Saraj',
    'region' => '40',
    'country' => 'AF',
    'latitude' => '35.11833',
    'longitude' => '69.23778',
  ),
  86 => 
  array (
    'city' => 'Ḩukūmat-e Shīnkaī',
    'region' => '28',
    'country' => 'AF',
    'latitude' => '31.98303',
    'longitude' => '67.33558',
  ),
  87 => 
  array (
    'city' => 'Herāt',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '34.34817',
    'longitude' => '62.19967',
  ),
  88 => 
  array (
    'city' => 'Ghormach',
    'region' => '02',
    'country' => 'AF',
    'latitude' => '35.73062',
    'longitude' => '63.78264',
  ),
  89 => 
  array (
    'city' => 'Ghazni',
    'region' => '08',
    'country' => 'AF',
    'latitude' => '33.55356',
    'longitude' => '68.42689',
  ),
  90 => 
  array (
    'city' => 'Girishk',
    'region' => '10',
    'country' => 'AF',
    'latitude' => '31.82089',
    'longitude' => '64.57005',
  ),
  91 => 
  array (
    'city' => 'Gardēz',
    'region' => '36',
    'country' => 'AF',
    'latitude' => '33.59744',
    'longitude' => '69.22592',
  ),
  92 => 
  array (
    'city' => 'Fayzabad',
    'region' => '01',
    'country' => 'AF',
    'latitude' => '37.11664',
    'longitude' => '70.58002',
  ),
  93 => 
  array (
    'city' => 'Farkhār',
    'region' => '26',
    'country' => 'AF',
    'latitude' => '36.57288',
    'longitude' => '69.85783',
  ),
  94 => 
  array (
    'city' => 'Farāh',
    'region' => '06',
    'country' => 'AF',
    'latitude' => '32.37451',
    'longitude' => '62.11638',
  ),
  95 => 
  array (
    'city' => 'Kafir Qala',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '34.66667',
    'longitude' => '61.06667',
  ),
  96 => 
  array (
    'city' => 'Imām Şāḩib',
    'region' => '24',
    'country' => 'AF',
    'latitude' => '37.18897',
    'longitude' => '68.93644',
  ),
  97 => 
  array (
    'city' => 'Dasht-e Archī',
    'region' => '24',
    'country' => 'AF',
    'latitude' => '37.13333',
    'longitude' => '69.16667',
  ),
  98 => 
  array (
    'city' => 'Darz Āb',
    'region' => '31',
    'country' => 'AF',
    'latitude' => '35.97744',
    'longitude' => '65.37828',
  ),
  99 => 
  array (
    'city' => 'Markaz-e Ḩukūmat-e Darwēshān',
    'region' => '10',
    'country' => 'AF',
    'latitude' => '31.13232',
    'longitude' => '64.1934',
  ),
  100 => 
  array (
    'city' => 'Ḩukūmatī Dahānah-ye Ghōrī',
    'region' => '03',
    'country' => 'AF',
    'latitude' => '35.90617',
    'longitude' => '68.48869',
  ),
  101 => 
  array (
    'city' => 'Chīras',
    'region' => '33',
    'country' => 'AF',
    'latitude' => '35.41674',
    'longitude' => '65.98234',
  ),
  102 => 
  array (
    'city' => 'Charikar',
    'region' => '40',
    'country' => 'AF',
    'latitude' => '35.01361',
    'longitude' => '69.17139',
  ),
  103 => 
  array (
    'city' => 'Chahār Burj',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '34.24475',
    'longitude' => '62.19165',
  ),
  104 => 
  array (
    'city' => 'Chaghcharān',
    'region' => '09',
    'country' => 'AF',
    'latitude' => '34.51952',
    'longitude' => '65.25094',
  ),
  105 => 
  array (
    'city' => 'Bāsawul',
    'region' => '18',
    'country' => 'AF',
    'latitude' => '34.24749',
    'longitude' => '70.87218',
  ),
  106 => 
  array (
    'city' => 'Barakī Barak',
    'region' => '17',
    'country' => 'AF',
    'latitude' => '33.9675',
    'longitude' => '68.94861',
  ),
  107 => 
  array (
    'city' => 'Bāmyān',
    'region' => '05',
    'country' => 'AF',
    'latitude' => '34.82417',
    'longitude' => '67.82167',
  ),
  108 => 
  array (
    'city' => 'Balkh',
    'region' => '30',
    'country' => 'AF',
    'latitude' => '36.75635',
    'longitude' => '66.8972',
  ),
  109 => 
  array (
    'city' => 'Baghlān',
    'region' => '03',
    'country' => 'AF',
    'latitude' => '36.13068',
    'longitude' => '68.70829',
  ),
  110 => 
  array (
    'city' => 'Ḩukūmatī Azrow',
    'region' => '17',
    'country' => 'AF',
    'latitude' => '34.17355',
    'longitude' => '69.64573',
  ),
  111 => 
  array (
    'city' => 'Ārt Khwājah',
    'region' => '26',
    'country' => 'AF',
    'latitude' => '37.08571',
    'longitude' => '69.47958',
  ),
  112 => 
  array (
    'city' => 'Āsmār',
    'region' => '34',
    'country' => 'AF',
    'latitude' => '35.03319',
    'longitude' => '71.3577',
  ),
  113 => 
  array (
    'city' => 'Ashkāsham',
    'region' => '01',
    'country' => 'AF',
    'latitude' => '36.68333',
    'longitude' => '71.53333',
  ),
  114 => 
  array (
    'city' => 'Asadābād',
    'region' => '34',
    'country' => 'AF',
    'latitude' => '34.87311',
    'longitude' => '71.14697',
  ),
  115 => 
  array (
    'city' => 'Andkhōy',
    'region' => '07',
    'country' => 'AF',
    'latitude' => '36.95293',
    'longitude' => '65.12376',
  ),
  116 => 
  array (
    'city' => 'Anār Darah',
    'region' => '06',
    'country' => 'AF',
    'latitude' => '32.7587',
    'longitude' => '61.65397',
  ),
  117 => 
  array (
    'city' => '‘Alāqahdārī Deh-e Shū',
    'region' => '10',
    'country' => 'AF',
    'latitude' => '30.43741',
    'longitude' => '63.31298',
  ),
  118 => 
  array (
    'city' => 'Adriskan',
    'region' => '11',
    'country' => 'AF',
    'latitude' => '33.64573',
    'longitude' => '62.26959',
  ),
  119 => 
  array (
    'city' => 'Bāzārak',
    'region' => '42',
    'country' => 'AF',
    'latitude' => '35.31292',
    'longitude' => '69.51519',
  ),
  120 => 
  array (
    'city' => 'Ḩokūmatī Gīzāb',
    'region' => '41',
    'country' => 'AF',
    'latitude' => '33.37547',
    'longitude' => '66.26891',
  ),
  121 => 
  array (
    'city' => 'Maīdān Shahr',
    'region' => '27',
    'country' => 'AF',
    'latitude' => '34.39561',
    'longitude' => '68.86618',
  ),
  122 => 
  array (
    'city' => 'Lab-Sar',
    'region' => '33',
    'country' => 'AF',
    'latitude' => '36.02634',
    'longitude' => '66.83799',
  ),
  123 => 
  array (
    'city' => 'Markaz-e Woluswalī-ye Āchīn',
    'region' => '18',
    'country' => 'AF',
    'latitude' => '34.12583',
    'longitude' => '70.70778',
  ),
  124 => 
  array (
    'city' => 'Cool űrhajó',
    'region' => '05',
    'country' => 'AF',
    'latitude' => '34.26545',
    'longitude' => '67.34516',
  ),
  125 => 
  array (
    'city' => 'Markaz-e Woluswālī-ye Yōsuf Khēl',
    'region' => '29',
    'country' => 'AF',
    'latitude' => '33.06455',
    'longitude' => '68.67084',
  ),
  126 => 
  array (
    'city' => 'Markaz-e Woluswālī-ye Nārī',
    'region' => '34',
    'country' => 'AF',
    'latitude' => '35.22821',
    'longitude' => '71.52578',
  ),
  127 => 
  array (
    'city' => 'Saint John’s',
    'region' => '04',
    'country' => 'AG',
    'latitude' => '17.11667',
    'longitude' => '-61.85',
  ),
  128 => 
  array (
    'city' => 'Potters Village',
    'region' => '04',
    'country' => 'AG',
    'latitude' => '17.08333',
    'longitude' => '-61.81667',
  ),
  129 => 
  array (
    'city' => 'Liberta',
    'region' => '06',
    'country' => 'AG',
    'latitude' => '17.03333',
    'longitude' => '-61.78333',
  ),
  130 => 
  array (
    'city' => 'Bolans',
    'region' => '05',
    'country' => 'AG',
    'latitude' => '17.03333',
    'longitude' => '-61.88333',
  ),
  131 => 
  array (
    'city' => 'All Saints',
    'region' => '00',
    'country' => 'AG',
    'latitude' => '17.05',
    'longitude' => '-61.8',
  ),
  132 => 
  array (
    'city' => 'The Valley',
    'region' => '00',
    'country' => 'AI',
    'latitude' => '18.21704',
    'longitude' => '-63.05783',
  ),
  133 => 
  array (
    'city' => 'Stoney Ground',
    'region' => '00',
    'country' => 'AI',
    'latitude' => '18.21667',
    'longitude' => '-63.03333',
  ),
  134 => 
  array (
    'city' => 'Sarandë',
    'region' => '51',
    'country' => 'AL',
    'latitude' => '39.87556',
    'longitude' => '20.00528',
  ),
  135 => 
  array (
    'city' => 'Konispol',
    'region' => '51',
    'country' => 'AL',
    'latitude' => '39.65889',
    'longitude' => '20.18139',
  ),
  136 => 
  array (
    'city' => 'Delvinë',
    'region' => '51',
    'country' => 'AL',
    'latitude' => '39.95111',
    'longitude' => '20.09778',
  ),
  137 => 
  array (
    'city' => 'Tepelenë',
    'region' => '45',
    'country' => 'AL',
    'latitude' => '40.29583',
    'longitude' => '20.01917',
  ),
  138 => 
  array (
    'city' => 'Përrenjas-Fshat',
    'region' => '43',
    'country' => 'AL',
    'latitude' => '41.06667',
    'longitude' => '20.53528',
  ),
  139 => 
  array (
    'city' => 'Poliçan',
    'region' => '40',
    'country' => 'AL',
    'latitude' => '40.61222',
    'longitude' => '20.09806',
  ),
  140 => 
  array (
    'city' => 'Peshkopi',
    'region' => '41',
    'country' => 'AL',
    'latitude' => '41.685',
    'longitude' => '20.42889',
  ),
  141 => 
  array (
    'city' => 'Përmet',
    'region' => '45',
    'country' => 'AL',
    'latitude' => '40.23361',
    'longitude' => '20.35167',
  ),
  142 => 
  array (
    'city' => 'Maliq',
    'region' => '46',
    'country' => 'AL',
    'latitude' => '40.70583',
    'longitude' => '20.69972',
  ),
  143 => 
  array (
    'city' => 'Libohovë',
    'region' => '45',
    'country' => 'AL',
    'latitude' => '40.03111',
    'longitude' => '20.26306',
  ),
  144 => 
  array (
    'city' => 'Leskovik',
    'region' => '46',
    'country' => 'AL',
    'latitude' => '40.15139',
    'longitude' => '20.59722',
  ),
  145 => 
  array (
    'city' => 'Kurbnesh',
    'region' => '48',
    'country' => 'AL',
    'latitude' => '41.77972',
    'longitude' => '20.08361',
  ),
  146 => 
  array (
    'city' => 'Kukës',
    'region' => '47',
    'country' => 'AL',
    'latitude' => '42.07694',
    'longitude' => '20.42194',
  ),
  147 => 
  array (
    'city' => 'Korçë',
    'region' => '46',
    'country' => 'AL',
    'latitude' => '40.61861',
    'longitude' => '20.78083',
  ),
  148 => 
  array (
    'city' => 'Këlcyrë',
    'region' => '45',
    'country' => 'AL',
    'latitude' => '40.31306',
    'longitude' => '20.18944',
  ),
  149 => 
  array (
    'city' => 'Gramsh',
    'region' => '43',
    'country' => 'AL',
    'latitude' => '40.86972',
    'longitude' => '20.18444',
  ),
  150 => 
  array (
    'city' => 'Gjirokastër',
    'region' => '45',
    'country' => 'AL',
    'latitude' => '40.07583',
    'longitude' => '20.13889',
  ),
  151 => 
  array (
    'city' => 'Fushë-Arrëz',
    'region' => '49',
    'country' => 'AL',
    'latitude' => '42.06222',
    'longitude' => '20.01667',
  ),
  152 => 
  array (
    'city' => 'Ersekë',
    'region' => '46',
    'country' => 'AL',
    'latitude' => '40.33778',
    'longitude' => '20.67889',
  ),
  153 => 
  array (
    'city' => 'Elbasan',
    'region' => '43',
    'country' => 'AL',
    'latitude' => '41.1125',
    'longitude' => '20.08222',
  ),
  154 => 
  array (
    'city' => 'Çorovodë',
    'region' => '40',
    'country' => 'AL',
    'latitude' => '40.50417',
    'longitude' => '20.22722',
  ),
  155 => 
  array (
    'city' => 'Burrel',
    'region' => '41',
    'country' => 'AL',
    'latitude' => '41.61028',
    'longitude' => '20.00889',
  ),
  156 => 
  array (
    'city' => 'Bulqizë',
    'region' => '41',
    'country' => 'AL',
    'latitude' => '41.49167',
    'longitude' => '20.22194',
  ),
  157 => 
  array (
    'city' => 'Bilisht',
    'region' => '46',
    'country' => 'AL',
    'latitude' => '40.6275',
    'longitude' => '20.99',
  ),
  158 => 
  array (
    'city' => 'Librazhd-Qendër',
    'region' => '43',
    'country' => 'AL',
    'latitude' => '41.19694',
    'longitude' => '20.33556',
  ),
  159 => 
  array (
    'city' => 'Vorë',
    'region' => '50',
    'country' => 'AL',
    'latitude' => '41.39083',
    'longitude' => '19.655',
  ),
  160 => 
  array (
    'city' => 'Vlorë',
    'region' => '51',
    'country' => 'AL',
    'latitude' => '40.46667',
    'longitude' => '19.48972',
  ),
  161 => 
  array (
    'city' => 'Ura Vajgurore',
    'region' => '40',
    'country' => 'AL',
    'latitude' => '40.76889',
    'longitude' => '19.87778',
  ),
  162 => 
  array (
    'city' => 'Tirana',
    'region' => '50',
    'country' => 'AL',
    'latitude' => '41.3275',
    'longitude' => '19.81889',
  ),
  163 => 
  array (
    'city' => 'Shkodër',
    'region' => '49',
    'country' => 'AL',
    'latitude' => '42.06828',
    'longitude' => '19.51258',
  ),
  164 => 
  array (
    'city' => 'Shijak',
    'region' => '42',
    'country' => 'AL',
    'latitude' => '41.34556',
    'longitude' => '19.56722',
  ),
  165 => 
  array (
    'city' => 'Shëngjin',
    'region' => '48',
    'country' => 'AL',
    'latitude' => '41.81361',
    'longitude' => '19.59389',
  ),
  166 => 
  array (
    'city' => 'Selenicë',
    'region' => '51',
    'country' => 'AL',
    'latitude' => '40.53056',
    'longitude' => '19.63583',
  ),
  167 => 
  array (
    'city' => 'Rubik',
    'region' => '48',
    'country' => 'AL',
    'latitude' => '41.77444',
    'longitude' => '19.78611',
  ),
  168 => 
  array (
    'city' => 'Rrogozhinë',
    'region' => '50',
    'country' => 'AL',
    'latitude' => '41.07639',
    'longitude' => '19.66528',
  ),
  169 => 
  array (
    'city' => 'Rrëshen',
    'region' => '48',
    'country' => 'AL',
    'latitude' => '41.7675',
    'longitude' => '19.87556',
  ),
  170 => 
  array (
    'city' => 'Roskovec',
    'region' => '44',
    'country' => 'AL',
    'latitude' => '40.7375',
    'longitude' => '19.70222',
  ),
  171 => 
  array (
    'city' => 'Pukë',
    'region' => '49',
    'country' => 'AL',
    'latitude' => '42.04444',
    'longitude' => '19.89972',
  ),
  172 => 
  array (
    'city' => 'Peqin',
    'region' => '43',
    'country' => 'AL',
    'latitude' => '41.04611',
    'longitude' => '19.75111',
  ),
  173 => 
  array (
    'city' => 'Patos Fshat',
    'region' => '44',
    'country' => 'AL',
    'latitude' => '40.64278',
    'longitude' => '19.65083',
  ),
  174 => 
  array (
    'city' => 'Orikum',
    'region' => '51',
    'country' => 'AL',
    'latitude' => '40.32528',
    'longitude' => '19.47139',
  ),
  175 => 
  array (
    'city' => 'Milot',
    'region' => '48',
    'country' => 'AL',
    'latitude' => '41.68389',
    'longitude' => '19.71556',
  ),
  176 => 
  array (
    'city' => 'Memaliaj',
    'region' => '45',
    'country' => 'AL',
    'latitude' => '40.35167',
    'longitude' => '19.98028',
  ),
  177 => 
  array (
    'city' => 'Mamurras',
    'region' => '48',
    'country' => 'AL',
    'latitude' => '41.5775',
    'longitude' => '19.69222',
  ),
  178 => 
  array (
    'city' => 'Lushnjë',
    'region' => '44',
    'country' => 'AL',
    'latitude' => '40.94194',
    'longitude' => '19.705',
  ),
  179 => 
  array (
    'city' => 'Lezhë',
    'region' => '48',
    'country' => 'AL',
    'latitude' => '41.78361',
    'longitude' => '19.64361',
  ),
  180 => 
  array (
    'city' => 'Laç',
    'region' => '48',
    'country' => 'AL',
    'latitude' => '41.63556',
    'longitude' => '19.71306',
  ),
  181 => 
  array (
    'city' => 'Kuçovë',
    'region' => '40',
    'country' => 'AL',
    'latitude' => '40.80028',
    'longitude' => '19.91667',
  ),
  182 => 
  array (
    'city' => 'Krujë',
    'region' => '42',
    'country' => 'AL',
    'latitude' => '41.50917',
    'longitude' => '19.79278',
  ),
  183 => 
  array (
    'city' => 'Krrabë',
    'region' => '50',
    'country' => 'AL',
    'latitude' => '41.21556',
    'longitude' => '19.97139',
  ),
  184 => 
  array (
    'city' => 'Koplik',
    'region' => '49',
    'country' => 'AL',
    'latitude' => '42.21361',
    'longitude' => '19.43639',
  ),
  185 => 
  array (
    'city' => 'Kavajë',
    'region' => '50',
    'country' => 'AL',
    'latitude' => '41.18556',
    'longitude' => '19.55694',
  ),
  186 => 
  array (
    'city' => 'Kamëz',
    'region' => '50',
    'country' => 'AL',
    'latitude' => '41.38167',
    'longitude' => '19.76028',
  ),
  187 => 
  array (
    'city' => 'Himarë',
    'region' => '51',
    'country' => 'AL',
    'latitude' => '40.10167',
    'longitude' => '19.74472',
  ),
  188 => 
  array (
    'city' => 'Fushë-Krujë',
    'region' => '42',
    'country' => 'AL',
    'latitude' => '41.47833',
    'longitude' => '19.71778',
  ),
  189 => 
  array (
    'city' => 'Fier-Çifçi',
    'region' => '44',
    'country' => 'AL',
    'latitude' => '40.71667',
    'longitude' => '19.56667',
  ),
  190 => 
  array (
    'city' => 'Fier',
    'region' => '44',
    'country' => 'AL',
    'latitude' => '40.72389',
    'longitude' => '19.55611',
  ),
  191 => 
  array (
    'city' => 'Durrës',
    'region' => '42',
    'country' => 'AL',
    'latitude' => '41.32306',
    'longitude' => '19.44139',
  ),
  192 => 
  array (
    'city' => 'Cërrik',
    'region' => '43',
    'country' => 'AL',
    'latitude' => '41.03167',
    'longitude' => '19.97583',
  ),
  193 => 
  array (
    'city' => 'Berat',
    'region' => '40',
    'country' => 'AL',
    'latitude' => '40.70583',
    'longitude' => '19.95222',
  ),
  194 => 
  array (
    'city' => 'Ballsh',
    'region' => '44',
    'country' => 'AL',
    'latitude' => '40.59889',
    'longitude' => '19.73472',
  ),
  195 => 
  array (
    'city' => 'Zarrit’ap’',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.63732',
    'longitude' => '45.51162',
  ),
  196 => 
  array (
    'city' => 'Zangakatun',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.8212',
    'longitude' => '45.04063',
  ),
  197 => 
  array (
    'city' => 'Yenikend',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.90611',
    'longitude' => '44.73171',
  ),
  198 => 
  array (
    'city' => 'Yeghegnavan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.83799',
    'longitude' => '44.62531',
  ),
  199 => 
  array (
    'city' => 'Yeghegnadzor',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.76389',
    'longitude' => '45.33239',
  ),
  200 => 
  array (
    'city' => 'Vostan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.96515',
    'longitude' => '44.55937',
  ),
  201 => 
  array (
    'city' => 'Vosketap’',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.88114',
    'longitude' => '44.64917',
  ),
  202 => 
  array (
    'city' => 'Vernashen',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.79236',
    'longitude' => '45.36389',
  ),
  203 => 
  array (
    'city' => 'Verishen',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.53557',
    'longitude' => '46.31221',
  ),
  204 => 
  array (
    'city' => 'Vedi',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.91421',
    'longitude' => '44.72217',
  ),
  205 => 
  array (
    'city' => 'Vayk’',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.691',
    'longitude' => '45.46653',
  ),
  206 => 
  array (
    'city' => 'Tegh',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.55792',
    'longitude' => '46.47723',
  ),
  207 => 
  array (
    'city' => 'Surenavan',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.75',
    'longitude' => '44.8',
  ),
  208 => 
  array (
    'city' => 'Sisavan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.9',
    'longitude' => '44.66667',
  ),
  209 => 
  array (
    'city' => 'Shinuhayr',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.4367',
    'longitude' => '46.31787',
  ),
  210 => 
  array (
    'city' => 'Shahumyan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.93845',
    'longitude' => '44.56973',
  ),
  211 => 
  array (
    'city' => 'Shatin',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.83568',
    'longitude' => '45.30186',
  ),
  212 => 
  array (
    'city' => 'Shaghat',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.56253',
    'longitude' => '45.91433',
  ),
  213 => 
  array (
    'city' => 'Rrind',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.76022',
    'longitude' => '45.17907',
  ),
  214 => 
  array (
    'city' => 'Noyakert',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.8312',
    'longitude' => '44.66899',
  ),
  215 => 
  array (
    'city' => 'Mrgavan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.97167',
    'longitude' => '44.53318',
  ),
  216 => 
  array (
    'city' => 'Meghri',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '38.90292',
    'longitude' => '46.24458',
  ),
  217 => 
  array (
    'city' => 'Malishka',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.73758',
    'longitude' => '45.39004',
  ),
  218 => 
  array (
    'city' => 'Khndzoresk',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.51224',
    'longitude' => '46.43284',
  ),
  219 => 
  array (
    'city' => 'Kapan',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.20754',
    'longitude' => '46.40576',
  ),
  220 => 
  array (
    'city' => 'Jermuk',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.84173',
    'longitude' => '45.6723',
  ),
  221 => 
  array (
    'city' => 'Goris',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.51288',
    'longitude' => '46.33816',
  ),
  222 => 
  array (
    'city' => 'Gladzor',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.78123',
    'longitude' => '45.35043',
  ),
  223 => 
  array (
    'city' => 'Getap’',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.76306',
    'longitude' => '45.30664',
  ),
  224 => 
  array (
    'city' => 'Dzorastan',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.27059',
    'longitude' => '46.3572',
  ),
  225 => 
  array (
    'city' => 'Dalar',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.97653',
    'longitude' => '44.52649',
  ),
  226 => 
  array (
    'city' => 'Burastan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.98333',
    'longitude' => '44.5',
  ),
  227 => 
  array (
    'city' => 'Brun',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.53491',
    'longitude' => '46.30732',
  ),
  228 => 
  array (
    'city' => 'Brrnakot’',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.49742',
    'longitude' => '45.97241',
  ),
  229 => 
  array (
    'city' => 'Berkanush',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.97726',
    'longitude' => '44.51394',
  ),
  230 => 
  array (
    'city' => 'Aygezard',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.95436',
    'longitude' => '44.6023',
  ),
  231 => 
  array (
    'city' => 'Aygepat',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.95845',
    'longitude' => '44.59982',
  ),
  232 => 
  array (
    'city' => 'Aygavan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.87326',
    'longitude' => '44.66984',
  ),
  233 => 
  array (
    'city' => 'Avshar',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.8536',
    'longitude' => '44.6793',
  ),
  234 => 
  array (
    'city' => 'Hats’avan',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.46405',
    'longitude' => '45.97047',
  ),
  235 => 
  array (
    'city' => 'Artashat',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.96144',
    'longitude' => '44.54447',
  ),
  236 => 
  array (
    'city' => 'Yeghegis',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.87181',
    'longitude' => '45.36002',
  ),
  237 => 
  array (
    'city' => 'Armash',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.76532',
    'longitude' => '44.80902',
  ),
  238 => 
  array (
    'city' => 'Areni',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.71913',
    'longitude' => '45.17991',
  ),
  239 => 
  array (
    'city' => 'Ararat',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.83166',
    'longitude' => '44.70489',
  ),
  240 => 
  array (
    'city' => 'Angeghakot’',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.57017',
    'longitude' => '45.94123',
  ),
  241 => 
  array (
    'city' => 'Aghavnadzor',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.78222',
    'longitude' => '45.22753',
  ),
  242 => 
  array (
    'city' => 'Agarakadzor',
    'region' => '10',
    'country' => 'AM',
    'latitude' => '39.73405',
    'longitude' => '45.35274',
  ),
  243 => 
  array (
    'city' => 'Agarak',
    'region' => '08',
    'country' => 'AM',
    'latitude' => '39.20684',
    'longitude' => '46.5446',
  ),
  244 => 
  array (
    'city' => 'Aralek',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.90195',
    'longitude' => '44.6514',
  ),
  245 => 
  array (
    'city' => 'Horrom',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.66012',
    'longitude' => '43.88819',
  ),
  246 => 
  array (
    'city' => 'Margara',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.03351',
    'longitude' => '44.17709',
  ),
  247 => 
  array (
    'city' => 'Zovuni',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.51083',
    'longitude' => '44.42889',
  ),
  248 => 
  array (
    'city' => 'Zovaber',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.56693',
    'longitude' => '44.78827',
  ),
  249 => 
  array (
    'city' => 'Zorak',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.09109',
    'longitude' => '44.39209',
  ),
  250 => 
  array (
    'city' => 'Zarr',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.2595',
    'longitude' => '44.73086',
  ),
  251 => 
  array (
    'city' => 'Yerevan',
    'region' => '11',
    'country' => 'AM',
    'latitude' => '40.18111',
    'longitude' => '44.51361',
  ),
  252 => 
  array (
    'city' => 'Yerazgavors',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.7',
    'longitude' => '43.75',
  ),
  253 => 
  array (
    'city' => 'Yeraskhahun',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.07167',
    'longitude' => '44.21619',
  ),
  254 => 
  array (
    'city' => 'Yeranos',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.20428',
    'longitude' => '45.19209',
  ),
  255 => 
  array (
    'city' => 'Yeghegnut',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.90302',
    'longitude' => '44.63155',
  ),
  256 => 
  array (
    'city' => 'Yeghegnut',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.09186',
    'longitude' => '44.16018',
  ),
  257 => 
  array (
    'city' => 'Ejmiatsin',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.16557',
    'longitude' => '44.29462',
  ),
  258 => 
  array (
    'city' => 'Yeghvard',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.32053',
    'longitude' => '44.48138',
  ),
  259 => 
  array (
    'city' => 'Voskevaz',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.27678',
    'longitude' => '44.29509',
  ),
  260 => 
  array (
    'city' => 'Voskevan',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '41.12022',
    'longitude' => '45.06532',
  ),
  261 => 
  array (
    'city' => 'Voskehask',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.76426',
    'longitude' => '43.77474',
  ),
  262 => 
  array (
    'city' => 'Verin Getashen',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.13328',
    'longitude' => '45.25068',
  ),
  263 => 
  array (
    'city' => 'Verin Dvin',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.02434',
    'longitude' => '44.59038',
  ),
  264 => 
  array (
    'city' => 'Verin Artashat',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.99046',
    'longitude' => '44.58546',
  ),
  265 => 
  array (
    'city' => 'Verin Akhtala',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.16838',
    'longitude' => '44.75811',
  ),
  266 => 
  array (
    'city' => 'Varser',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.5534',
    'longitude' => '44.9069',
  ),
  267 => 
  array (
    'city' => 'Vardenis',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.18272',
    'longitude' => '45.7311',
  ),
  268 => 
  array (
    'city' => 'Vardenik',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.13928',
    'longitude' => '45.43342',
  ),
  269 => 
  array (
    'city' => 'Vahan',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.57549',
    'longitude' => '45.39769',
  ),
  270 => 
  array (
    'city' => 'Vaghashen',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.13578',
    'longitude' => '45.32879',
  ),
  271 => 
  array (
    'city' => 'Vahagni',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.90698',
    'longitude' => '44.60873',
  ),
  272 => 
  array (
    'city' => 'Ushi',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.34869',
    'longitude' => '44.37252',
  ),
  273 => 
  array (
    'city' => 'Urrut',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.06778',
    'longitude' => '44.39628',
  ),
  274 => 
  array (
    'city' => 'Tsovinar',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.15701',
    'longitude' => '45.46132',
  ),
  275 => 
  array (
    'city' => 'Tsovazard',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.4709',
    'longitude' => '45.05879',
  ),
  276 => 
  array (
    'city' => 'Tsovak',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.18254',
    'longitude' => '45.63286',
  ),
  277 => 
  array (
    'city' => 'Tsovagyugh',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.63029',
    'longitude' => '44.95738',
  ),
  278 => 
  array (
    'city' => 'Tsaghkunk’',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.18075',
    'longitude' => '44.27026',
  ),
  279 => 
  array (
    'city' => 'Tsaghkahovit',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.63428',
    'longitude' => '44.22241',
  ),
  280 => 
  array (
    'city' => 'Tsaghkaber',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.79849',
    'longitude' => '44.10144',
  ),
  281 => 
  array (
    'city' => 'Tsaghkadzor',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.53259',
    'longitude' => '44.72025',
  ),
  282 => 
  array (
    'city' => 'T’azagyugh',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.1382',
    'longitude' => '45.19096',
  ),
  283 => 
  array (
    'city' => 'Tashir',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.12072',
    'longitude' => '44.28462',
  ),
  284 => 
  array (
    'city' => 'Tandzut',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.07015',
    'longitude' => '44.07476',
  ),
  285 => 
  array (
    'city' => 'T’alin',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.38428',
    'longitude' => '43.87387',
  ),
  286 => 
  array (
    'city' => 'Spitak',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.8322',
    'longitude' => '44.2673',
  ),
  287 => 
  array (
    'city' => 'Spandaryan',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.66105',
    'longitude' => '44.01551',
  ),
  288 => 
  array (
    'city' => 'Sovetakan',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.10712',
    'longitude' => '44.05108',
  ),
  289 => 
  array (
    'city' => 'Solak',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.46439',
    'longitude' => '44.70796',
  ),
  290 => 
  array (
    'city' => 'Sis',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.06023',
    'longitude' => '44.38649',
  ),
  291 => 
  array (
    'city' => 'Shnogh',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.14693',
    'longitude' => '44.84043',
  ),
  292 => 
  array (
    'city' => 'Shirak',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.84042',
    'longitude' => '43.91582',
  ),
  293 => 
  array (
    'city' => 'Shenavan',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.48296',
    'longitude' => '44.383',
  ),
  294 => 
  array (
    'city' => 'Shenavan',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.05486',
    'longitude' => '43.92876',
  ),
  295 => 
  array (
    'city' => 'Sevan',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.5484',
    'longitude' => '44.94868',
  ),
  296 => 
  array (
    'city' => 'Sarukhan',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.29053',
    'longitude' => '45.13059',
  ),
  297 => 
  array (
    'city' => 'Sarigyugh',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '41.03531',
    'longitude' => '45.14486',
  ),
  298 => 
  array (
    'city' => 'Saratak',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.66992',
    'longitude' => '43.86915',
  ),
  299 => 
  array (
    'city' => 'Saramech',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.77487',
    'longitude' => '44.2222',
  ),
  300 => 
  array (
    'city' => 'Sarahart’',
    'region' => '00',
    'country' => 'AM',
    'latitude' => '40.87043',
    'longitude' => '44.21407',
  ),
  301 => 
  array (
    'city' => 'Samaghar',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.18516',
    'longitude' => '44.24331',
  ),
  302 => 
  array (
    'city' => 'Ptghni',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.25576',
    'longitude' => '44.58407',
  ),
  303 => 
  array (
    'city' => 'Ptghunk’',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.16505',
    'longitude' => '44.36328',
  ),
  304 => 
  array (
    'city' => 'Pshatavan',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.03865',
    'longitude' => '44.06629',
  ),
  305 => 
  array (
    'city' => 'Prroshyan',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.24853',
    'longitude' => '44.41631',
  ),
  306 => 
  array (
    'city' => 'Pokr Mantash',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.64026',
    'longitude' => '44.04666',
  ),
  307 => 
  array (
    'city' => 'Zoravan',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.35326',
    'longitude' => '44.52319',
  ),
  308 => 
  array (
    'city' => 'Pemzashen',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.5851',
    'longitude' => '43.94021',
  ),
  309 => 
  array (
    'city' => 'Parravak’ar',
    'region' => '00',
    'country' => 'AM',
    'latitude' => '40.98154',
    'longitude' => '45.367',
  ),
  310 => 
  array (
    'city' => 'Oshakan',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.2646',
    'longitude' => '44.31456',
  ),
  311 => 
  array (
    'city' => 'Hoktember',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.13206',
    'longitude' => '44.00969',
  ),
  312 => 
  array (
    'city' => 'Odzun',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.05321',
    'longitude' => '44.61341',
  ),
  313 => 
  array (
    'city' => 'Noyemberyan',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '41.17244',
    'longitude' => '44.99917',
  ),
  314 => 
  array (
    'city' => 'Nor Gyugh',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.2673',
    'longitude' => '44.6563',
  ),
  315 => 
  array (
    'city' => 'Nor Geghi',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.32105',
    'longitude' => '44.58027',
  ),
  316 => 
  array (
    'city' => 'Norashen',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.18886',
    'longitude' => '44.33336',
  ),
  317 => 
  array (
    'city' => 'Norashen',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '39.9996',
    'longitude' => '44.58952',
  ),
  318 => 
  array (
    'city' => 'Nor Armavir',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.08563',
    'longitude' => '43.99242',
  ),
  319 => 
  array (
    'city' => 'Noramarg',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.02384',
    'longitude' => '44.42403',
  ),
  320 => 
  array (
    'city' => 'Norakert',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.19229',
    'longitude' => '44.34774',
  ),
  321 => 
  array (
    'city' => 'Noratus',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.37547',
    'longitude' => '45.17718',
  ),
  322 => 
  array (
    'city' => 'Nerk’in Getashen',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.14046',
    'longitude' => '45.279',
  ),
  323 => 
  array (
    'city' => 'Navur',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.86694',
    'longitude' => '45.34179',
  ),
  324 => 
  array (
    'city' => 'Nalbandyan',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.06236',
    'longitude' => '43.9869',
  ),
  325 => 
  array (
    'city' => 'Musayelyan',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.75767',
    'longitude' => '43.99274',
  ),
  326 => 
  array (
    'city' => 'Hovtamej',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.18347',
    'longitude' => '44.25862',
  ),
  327 => 
  array (
    'city' => 'Mrgashen',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.28523',
    'longitude' => '44.54107',
  ),
  328 => 
  array (
    'city' => 'Mrgashat',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.12462',
    'longitude' => '44.06584',
  ),
  329 => 
  array (
    'city' => 'Mrganush',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.02857',
    'longitude' => '44.55831',
  ),
  330 => 
  array (
    'city' => 'Mosesgegh',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.90571',
    'longitude' => '45.48637',
  ),
  331 => 
  array (
    'city' => 'Mets Parni',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.83335',
    'longitude' => '44.11042',
  ),
  332 => 
  array (
    'city' => 'Mets Masrik',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.21825',
    'longitude' => '45.76809',
  ),
  333 => 
  array (
    'city' => 'Mets Mant’ash',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.64376',
    'longitude' => '44.05653',
  ),
  334 => 
  array (
    'city' => 'Metsavan',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.20156',
    'longitude' => '44.22877',
  ),
  335 => 
  array (
    'city' => 'Metsamor',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.07302',
    'longitude' => '44.28962',
  ),
  336 => 
  array (
    'city' => 'Mertsavan',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.1814',
    'longitude' => '44.40032',
  ),
  337 => 
  array (
    'city' => 'Meghrashen',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.67259',
    'longitude' => '43.95783',
  ),
  338 => 
  array (
    'city' => 'Meghradzor',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.60611',
    'longitude' => '44.65147',
  ),
  339 => 
  array (
    'city' => 'Mayakovski',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.25196',
    'longitude' => '44.63928',
  ),
  340 => 
  array (
    'city' => 'Masis',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.06762',
    'longitude' => '44.43591',
  ),
  341 => 
  array (
    'city' => 'Martuni',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.13768',
    'longitude' => '45.3045',
  ),
  342 => 
  array (
    'city' => 'Marmarashen',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.05734',
    'longitude' => '44.47012',
  ),
  343 => 
  array (
    'city' => 'Marmashen',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.83486',
    'longitude' => '43.7779',
  ),
  344 => 
  array (
    'city' => 'Margahovit',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.73381',
    'longitude' => '44.68474',
  ),
  345 => 
  array (
    'city' => 'Maralik',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.57453',
    'longitude' => '43.86862',
  ),
  346 => 
  array (
    'city' => 'Mayisyan',
    'region' => '00',
    'country' => 'AM',
    'latitude' => '40.84715',
    'longitude' => '43.83938',
  ),
  347 => 
  array (
    'city' => 'Madina',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.07638',
    'longitude' => '45.25507',
  ),
  348 => 
  array (
    'city' => 'Lukashin',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.17583',
    'longitude' => '44.01861',
  ),
  349 => 
  array (
    'city' => 'Lorut',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.93717',
    'longitude' => '44.77142',
  ),
  350 => 
  array (
    'city' => 'Lichk’',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.15933',
    'longitude' => '45.23467',
  ),
  351 => 
  array (
    'city' => 'Lernavan',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.7882',
    'longitude' => '44.16024',
  ),
  352 => 
  array (
    'city' => 'Lerrnapat',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.81538',
    'longitude' => '44.39344',
  ),
  353 => 
  array (
    'city' => 'Spitak',
    'region' => '00',
    'country' => 'AM',
    'latitude' => '40.79532',
    'longitude' => '44.27435',
  ),
  354 => 
  array (
    'city' => 'Lerrnanist',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.46676',
    'longitude' => '44.79249',
  ),
  355 => 
  array (
    'city' => 'Lerrnakert',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.56118',
    'longitude' => '43.93851',
  ),
  356 => 
  array (
    'city' => 'Khoronk’',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.13507',
    'longitude' => '44.24541',
  ),
  357 => 
  array (
    'city' => 'Lchashen',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.51757',
    'longitude' => '44.9319',
  ),
  358 => 
  array (
    'city' => 'Lchap’',
    'region' => '00',
    'country' => 'AM',
    'latitude' => '40.45462',
    'longitude' => '45.0728',
  ),
  359 => 
  array (
    'city' => 'Lanjaghbyur',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.27146',
    'longitude' => '45.14038',
  ),
  360 => 
  array (
    'city' => 'Kotayk’',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.27534',
    'longitude' => '44.66036',
  ),
  361 => 
  array (
    'city' => 'Kosh',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.29999',
    'longitude' => '44.15584',
  ),
  362 => 
  array (
    'city' => 'Vanadzor',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.80456',
    'longitude' => '44.4939',
  ),
  363 => 
  array (
    'city' => 'Hnaberd',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.63721',
    'longitude' => '44.14058',
  ),
  364 => 
  array (
    'city' => 'Khasht’arrak',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.93668',
    'longitude' => '45.1821',
  ),
  365 => 
  array (
    'city' => 'Kasakh',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.53697',
    'longitude' => '44.41046',
  ),
  366 => 
  array (
    'city' => 'Karchaghbyur',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.17048',
    'longitude' => '45.57785',
  ),
  367 => 
  array (
    'city' => 'Karbi',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.33236',
    'longitude' => '44.37665',
  ),
  368 => 
  array (
    'city' => 'Karanlukh',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.10444',
    'longitude' => '45.28972',
  ),
  369 => 
  array (
    'city' => 'Kaputan',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.32407',
    'longitude' => '44.69693',
  ),
  370 => 
  array (
    'city' => 'K’anak’erravan',
    'region' => '11',
    'country' => 'AM',
    'latitude' => '40.24739',
    'longitude' => '44.53511',
  ),
  371 => 
  array (
    'city' => 'Kamo',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.82572',
    'longitude' => '43.95071',
  ),
  372 => 
  array (
    'city' => 'Gavarr',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.35398',
    'longitude' => '45.12386',
  ),
  373 => 
  array (
    'city' => 'Zhdanov',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.15701',
    'longitude' => '44.09192',
  ),
  374 => 
  array (
    'city' => 'Shahumyan',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.77482',
    'longitude' => '44.54596',
  ),
  375 => 
  array (
    'city' => 'Ijevan',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.87832',
    'longitude' => '45.14922',
  ),
  376 => 
  array (
    'city' => 'Hrazdan',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.49748',
    'longitude' => '44.7662',
  ),
  377 => 
  array (
    'city' => 'Armavir',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.15446',
    'longitude' => '44.03815',
  ),
  378 => 
  array (
    'city' => 'Hayanist',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.12166',
    'longitude' => '44.37523',
  ),
  379 => 
  array (
    'city' => 'Haghartsin',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.77614',
    'longitude' => '44.96847',
  ),
  380 => 
  array (
    'city' => 'Gyumri',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.7942',
    'longitude' => '43.84528',
  ),
  381 => 
  array (
    'city' => 'Gyulagarak',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.96715',
    'longitude' => '44.47144',
  ),
  382 => 
  array (
    'city' => 'Ghukasavan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.12585',
    'longitude' => '44.41594',
  ),
  383 => 
  array (
    'city' => 'Geghamasar',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.31091',
    'longitude' => '45.67924',
  ),
  384 => 
  array (
    'city' => 'Gugark’',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.8046',
    'longitude' => '44.54025',
  ),
  385 => 
  array (
    'city' => 'Tsiatsan',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.1869',
    'longitude' => '44.26608',
  ),
  386 => 
  array (
    'city' => 'Goght’',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.13495',
    'longitude' => '44.78093',
  ),
  387 => 
  array (
    'city' => 'Gogaran',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.89255',
    'longitude' => '44.19915',
  ),
  388 => 
  array (
    'city' => 'Getazat',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.03844',
    'longitude' => '44.56369',
  ),
  389 => 
  array (
    'city' => 'Getashen',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.04405',
    'longitude' => '43.94203',
  ),
  390 => 
  array (
    'city' => 'Geghanist',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.14493',
    'longitude' => '44.43054',
  ),
  391 => 
  array (
    'city' => 'Geghamavan',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.5634',
    'longitude' => '44.8879',
  ),
  392 => 
  array (
    'city' => 'Garrni',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.11931',
    'longitude' => '44.73442',
  ),
  393 => 
  array (
    'city' => 'Gagarin',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.54031',
    'longitude' => '44.86918',
  ),
  394 => 
  array (
    'city' => 'Fantan',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.39438',
    'longitude' => '44.68476',
  ),
  395 => 
  array (
    'city' => 'Fioletovo',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.72241',
    'longitude' => '44.71769',
  ),
  396 => 
  array (
    'city' => 'Dzoraghbyur',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.20412',
    'longitude' => '44.6415',
  ),
  397 => 
  array (
    'city' => 'Dzoragyugh',
    'region' => '00',
    'country' => 'AM',
    'latitude' => '40.16957',
    'longitude' => '45.18336',
  ),
  398 => 
  array (
    'city' => 'Dzit’hank’ov',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.50891',
    'longitude' => '43.82107',
  ),
  399 => 
  array (
    'city' => 'Jrashen',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.79028',
    'longitude' => '44.18664',
  ),
  400 => 
  array (
    'city' => 'Jrashen',
    'region' => '11',
    'country' => 'AM',
    'latitude' => '40.05276',
    'longitude' => '44.51259',
  ),
  401 => 
  array (
    'city' => 'Jrahovit',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.04533',
    'longitude' => '44.47372',
  ),
  402 => 
  array (
    'city' => 'Janfida',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.04391',
    'longitude' => '44.02334',
  ),
  403 => 
  array (
    'city' => 'Dvin',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.01984',
    'longitude' => '44.58376',
  ),
  404 => 
  array (
    'city' => 'Dsegh',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.9617',
    'longitude' => '44.65003',
  ),
  405 => 
  array (
    'city' => 'Drakhtik',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.56496',
    'longitude' => '45.2367',
  ),
  406 => 
  array (
    'city' => 'Doghs',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.22373',
    'longitude' => '44.27171',
  ),
  407 => 
  array (
    'city' => 'Dilijan',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.74103',
    'longitude' => '44.86362',
  ),
  408 => 
  array (
    'city' => 'Ddmashen',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.56972',
    'longitude' => '44.81851',
  ),
  409 => 
  array (
    'city' => 'Darpas',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.83674',
    'longitude' => '44.42494',
  ),
  410 => 
  array (
    'city' => 'Dalarik',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.22664',
    'longitude' => '43.87538',
  ),
  411 => 
  array (
    'city' => 'Chochkan',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.18118',
    'longitude' => '44.83217',
  ),
  412 => 
  array (
    'city' => 'Chambarak',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.59655',
    'longitude' => '45.35498',
  ),
  413 => 
  array (
    'city' => 'Bjni',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.4559',
    'longitude' => '44.64812',
  ),
  414 => 
  array (
    'city' => 'Byureghavan',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.31485',
    'longitude' => '44.59396',
  ),
  415 => 
  array (
    'city' => 'Byurakan',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.338',
    'longitude' => '44.27138',
  ),
  416 => 
  array (
    'city' => 'Buzhakan',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.45294',
    'longitude' => '44.52105',
  ),
  417 => 
  array (
    'city' => 'Berd',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.88149',
    'longitude' => '45.38985',
  ),
  418 => 
  array (
    'city' => 'Bazum',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.86763',
    'longitude' => '44.43978',
  ),
  419 => 
  array (
    'city' => 'Byuravan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.01604',
    'longitude' => '44.51889',
  ),
  420 => 
  array (
    'city' => 'Bambakashat',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.10993',
    'longitude' => '44.01608',
  ),
  421 => 
  array (
    'city' => 'Balahovit',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.25373',
    'longitude' => '44.60426',
  ),
  422 => 
  array (
    'city' => 'Bagratashen',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '41.24358',
    'longitude' => '44.81737',
  ),
  423 => 
  array (
    'city' => 'Azatan',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.71959',
    'longitude' => '43.82727',
  ),
  424 => 
  array (
    'city' => 'Haykavan',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.80312',
    'longitude' => '43.75172',
  ),
  425 => 
  array (
    'city' => 'Aygestan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.00258',
    'longitude' => '44.55905',
  ),
  426 => 
  array (
    'city' => 'Aygeshat',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.23571',
    'longitude' => '44.28692',
  ),
  427 => 
  array (
    'city' => 'Aygeshat',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.07641',
    'longitude' => '44.05797',
  ),
  428 => 
  array (
    'city' => 'Aknalich',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.14315',
    'longitude' => '44.1498',
  ),
  429 => 
  array (
    'city' => 'Aygehovit',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.97951',
    'longitude' => '45.25033',
  ),
  430 => 
  array (
    'city' => 'Artimet',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.1508',
    'longitude' => '44.26543',
  ),
  431 => 
  array (
    'city' => 'Astghadzor',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.12248',
    'longitude' => '45.35698',
  ),
  432 => 
  array (
    'city' => 'Ashtarak',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.2991',
    'longitude' => '44.36204',
  ),
  433 => 
  array (
    'city' => 'Ashnak',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.32887',
    'longitude' => '43.91848',
  ),
  434 => 
  array (
    'city' => 'Arzni',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.29626',
    'longitude' => '44.59664',
  ),
  435 => 
  array (
    'city' => 'Arzakan',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.44997',
    'longitude' => '44.60648',
  ),
  436 => 
  array (
    'city' => 'Arteni',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.29848',
    'longitude' => '43.7622',
  ),
  437 => 
  array (
    'city' => 'Arshaluys',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.1684',
    'longitude' => '44.21375',
  ),
  438 => 
  array (
    'city' => 'Armavir',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.08658',
    'longitude' => '44.05363',
  ),
  439 => 
  array (
    'city' => 'Argel',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.37943',
    'longitude' => '44.59828',
  ),
  440 => 
  array (
    'city' => 'Argavand',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.15876',
    'longitude' => '44.43916',
  ),
  441 => 
  array (
    'city' => 'Argavand',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.06097',
    'longitude' => '44.09474',
  ),
  442 => 
  array (
    'city' => 'Arevshat',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.65345',
    'longitude' => '44.04419',
  ),
  443 => 
  array (
    'city' => 'Arevshat',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.03963',
    'longitude' => '44.54179',
  ),
  444 => 
  array (
    'city' => 'Arevik',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.74226',
    'longitude' => '43.9029',
  ),
  445 => 
  array (
    'city' => 'Arevik',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.09945',
    'longitude' => '44.09127',
  ),
  446 => 
  array (
    'city' => 'Arevashogh',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.86039',
    'longitude' => '44.27438',
  ),
  447 => 
  array (
    'city' => 'Arevashat',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.1425',
    'longitude' => '44.37068',
  ),
  448 => 
  array (
    'city' => 'Archis',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '41.16351',
    'longitude' => '44.87632',
  ),
  449 => 
  array (
    'city' => 'Arbat’',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.13811',
    'longitude' => '44.402',
  ),
  450 => 
  array (
    'city' => 'Arazap',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.04195',
    'longitude' => '44.14721',
  ),
  451 => 
  array (
    'city' => 'Arrap’i',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.78276',
    'longitude' => '43.80583',
  ),
  452 => 
  array (
    'city' => 'Aramus',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.25095',
    'longitude' => '44.66351',
  ),
  453 => 
  array (
    'city' => 'Arak’s',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.0544',
    'longitude' => '44.30257',
  ),
  454 => 
  array (
    'city' => 'Aragats',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.48887',
    'longitude' => '44.35279',
  ),
  455 => 
  array (
    'city' => 'Aparan',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.59323',
    'longitude' => '44.3589',
  ),
  456 => 
  array (
    'city' => 'Apaga',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.09666',
    'longitude' => '44.25157',
  ),
  457 => 
  array (
    'city' => 'Anushavan',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.65013',
    'longitude' => '43.97756',
  ),
  458 => 
  array (
    'city' => 'Amasia',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.95442',
    'longitude' => '43.7872',
  ),
  459 => 
  array (
    'city' => 'Alaverdi',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.09766',
    'longitude' => '44.67316',
  ),
  460 => 
  array (
    'city' => 'Akunk’',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.26883',
    'longitude' => '44.68481',
  ),
  461 => 
  array (
    'city' => 'Akunk’',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.15886',
    'longitude' => '45.72568',
  ),
  462 => 
  array (
    'city' => 'Akhuryan',
    'region' => '07',
    'country' => 'AM',
    'latitude' => '40.78003',
    'longitude' => '43.90027',
  ),
  463 => 
  array (
    'city' => 'Aghavnatun',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.23238',
    'longitude' => '44.24974',
  ),
  464 => 
  array (
    'city' => 'Aghavnadzor',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.58195',
    'longitude' => '44.69581',
  ),
  465 => 
  array (
    'city' => 'Agarak',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '41.01072',
    'longitude' => '44.46845',
  ),
  466 => 
  array (
    'city' => 'Agarak',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.32932',
    'longitude' => '44.07033',
  ),
  467 => 
  array (
    'city' => 'Abovyan',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.26741',
    'longitude' => '44.62656',
  ),
  468 => 
  array (
    'city' => 'Abovyan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.04851',
    'longitude' => '44.54742',
  ),
  469 => 
  array (
    'city' => 'Vardablur',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.97083',
    'longitude' => '44.50889',
  ),
  470 => 
  array (
    'city' => 'Bartsrashen',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.08533',
    'longitude' => '44.57958',
  ),
  471 => 
  array (
    'city' => 'Nshavan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.02787',
    'longitude' => '44.52565',
  ),
  472 => 
  array (
    'city' => 'Norabats’',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.10568',
    'longitude' => '44.42988',
  ),
  473 => 
  array (
    'city' => 'Berdavan',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '41.20503',
    'longitude' => '44.99967',
  ),
  474 => 
  array (
    'city' => 'Shirakamut',
    'region' => '06',
    'country' => 'AM',
    'latitude' => '40.86056',
    'longitude' => '44.15278',
  ),
  475 => 
  array (
    'city' => 'Azatamut',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.98796',
    'longitude' => '45.20794',
  ),
  476 => 
  array (
    'city' => 'Getahovit',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.89782',
    'longitude' => '45.13924',
  ),
  477 => 
  array (
    'city' => 'Artsvaberd',
    'region' => '09',
    'country' => 'AM',
    'latitude' => '40.83361',
    'longitude' => '45.47111',
  ),
  478 => 
  array (
    'city' => 'Nor Yerznka',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.31356',
    'longitude' => '44.40483',
  ),
  479 => 
  array (
    'city' => 'Nor Sasunik',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.24869',
    'longitude' => '44.33957',
  ),
  480 => 
  array (
    'city' => 'Kamaris',
    'region' => '05',
    'country' => 'AM',
    'latitude' => '40.23539',
    'longitude' => '44.69459',
  ),
  481 => 
  array (
    'city' => 'Gandzak',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.31472',
    'longitude' => '45.11139',
  ),
  482 => 
  array (
    'city' => 'Myasnikyan',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.1775',
    'longitude' => '43.90639',
  ),
  483 => 
  array (
    'city' => 'Lenughi',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.12562',
    'longitude' => '43.96484',
  ),
  484 => 
  array (
    'city' => 'Metsamor',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.14481',
    'longitude' => '44.11998',
  ),
  485 => 
  array (
    'city' => 'Gay',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.08389',
    'longitude' => '44.30556',
  ),
  486 => 
  array (
    'city' => 'Baghramyan',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.19344',
    'longitude' => '44.36832',
  ),
  487 => 
  array (
    'city' => 'Musalerr',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.15393',
    'longitude' => '44.37894',
  ),
  488 => 
  array (
    'city' => 'Darakert',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.10547',
    'longitude' => '44.41334',
  ),
  489 => 
  array (
    'city' => 'Dashtavan',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.10121',
    'longitude' => '44.39067',
  ),
  490 => 
  array (
    'city' => 'Nizami',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.09114',
    'longitude' => '44.40453',
  ),
  491 => 
  array (
    'city' => 'Artsvanist',
    'region' => '04',
    'country' => 'AM',
    'latitude' => '40.15444',
    'longitude' => '45.50222',
  ),
  492 => 
  array (
    'city' => 'Vardadzor',
    'region' => '11',
    'country' => 'AM',
    'latitude' => '40.18701',
    'longitude' => '45.19212',
  ),
  493 => 
  array (
    'city' => 'Taronik',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.13367',
    'longitude' => '44.19957',
  ),
  494 => 
  array (
    'city' => 'Aknashen',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.09551',
    'longitude' => '44.28604',
  ),
  495 => 
  array (
    'city' => 'Haykashen',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.07303',
    'longitude' => '44.30628',
  ),
  496 => 
  array (
    'city' => 'Hovtashat',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.10328',
    'longitude' => '44.33891',
  ),
  497 => 
  array (
    'city' => 'Sayat’-Nova',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.07428',
    'longitude' => '44.39846',
  ),
  498 => 
  array (
    'city' => 'Voskehat',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.14158',
    'longitude' => '44.32918',
  ),
  499 => 
  array (
    'city' => 'Griboyedov',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.11307',
    'longitude' => '44.27169',
  ),
  500 => 
  array (
    'city' => 'Amberd',
    'region' => '01',
    'country' => 'AM',
    'latitude' => '40.24192',
    'longitude' => '44.27227',
  ),
  501 => 
  array (
    'city' => 'Aygek',
    'region' => '03',
    'country' => 'AM',
    'latitude' => '40.18861',
    'longitude' => '44.38333',
  ),
  502 => 
  array (
    'city' => 'Hovtashen',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.0251',
    'longitude' => '44.45129',
  ),
  503 => 
  array (
    'city' => 'Dimitrov',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.00752',
    'longitude' => '44.48999',
  ),
  504 => 
  array (
    'city' => 'Mrgavet',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.02779',
    'longitude' => '44.48252',
  ),
  505 => 
  array (
    'city' => 'Arevabuyr',
    'region' => '02',
    'country' => 'AM',
    'latitude' => '40.03712',
    'longitude' => '44.46934',
  ),
  506 => 
  array (
    'city' => 'Saurimo',
    'region' => '18',
    'country' => 'AO',
    'latitude' => '-9.66078',
    'longitude' => '20.39155',
  ),
  507 => 
  array (
    'city' => 'Lucapa',
    'region' => '17',
    'country' => 'AO',
    'latitude' => '-8.41915',
    'longitude' => '20.74466',
  ),
  508 => 
  array (
    'city' => 'Lumeje',
    'region' => '14',
    'country' => 'AO',
    'latitude' => '-11.55',
    'longitude' => '20.78333',
  ),
  509 => 
  array (
    'city' => 'Luau',
    'region' => '14',
    'country' => 'AO',
    'latitude' => '-10.70727',
    'longitude' => '22.22466',
  ),
  510 => 
  array (
    'city' => 'Leúa',
    'region' => '14',
    'country' => 'AO',
    'latitude' => '-11.65',
    'longitude' => '20.45',
  ),
  511 => 
  array (
    'city' => 'Cazaji',
    'region' => '18',
    'country' => 'AO',
    'latitude' => '-11.06715',
    'longitude' => '20.70148',
  ),
  512 => 
  array (
    'city' => 'Uíge',
    'region' => '15',
    'country' => 'AO',
    'latitude' => '-7.61328',
    'longitude' => '15.05662',
  ),
  513 => 
  array (
    'city' => 'Soio',
    'region' => '16',
    'country' => 'AO',
    'latitude' => '-6.1349',
    'longitude' => '12.36894',
  ),
  514 => 
  array (
    'city' => 'Nzeto',
    'region' => '16',
    'country' => 'AO',
    'latitude' => '-7.23116',
    'longitude' => '12.8666',
  ),
  515 => 
  array (
    'city' => 'N’dalatando',
    'region' => '05',
    'country' => 'AO',
    'latitude' => '-9.3',
    'longitude' => '14.91667',
  ),
  516 => 
  array (
    'city' => 'Mbanza Congo',
    'region' => '16',
    'country' => 'AO',
    'latitude' => '-6.26703',
    'longitude' => '14.2401',
  ),
  517 => 
  array (
    'city' => 'Malanje',
    'region' => '12',
    'country' => 'AO',
    'latitude' => '-9.54472',
    'longitude' => '16.34528',
  ),
  518 => 
  array (
    'city' => 'Luanda',
    'region' => '20',
    'country' => 'AO',
    'latitude' => '-8.8368',
    'longitude' => '13.23317',
  ),
  519 => 
  array (
    'city' => 'Caxito',
    'region' => '19',
    'country' => 'AO',
    'latitude' => '-8.58',
    'longitude' => '13.66417',
  ),
  520 => 
  array (
    'city' => 'Camabatela',
    'region' => '05',
    'country' => 'AO',
    'latitude' => '-8.18812',
    'longitude' => '15.37495',
  ),
  521 => 
  array (
    'city' => 'Cabinda',
    'region' => '03',
    'country' => 'AO',
    'latitude' => '-5.55',
    'longitude' => '12.2',
  ),
  522 => 
  array (
    'city' => 'Uacu Cungo',
    'region' => '06',
    'country' => 'AO',
    'latitude' => '-11.36343',
    'longitude' => '15.12078',
  ),
  523 => 
  array (
    'city' => 'Sumbe',
    'region' => '06',
    'country' => 'AO',
    'latitude' => '-11.20605',
    'longitude' => '13.84371',
  ),
  524 => 
  array (
    'city' => 'Quibala',
    'region' => '06',
    'country' => 'AO',
    'latitude' => '-10.73366',
    'longitude' => '14.97995',
  ),
  525 => 
  array (
    'city' => 'Ondjiva',
    'region' => '07',
    'country' => 'AO',
    'latitude' => '-17.06667',
    'longitude' => '15.73333',
  ),
  526 => 
  array (
    'city' => 'Namibe',
    'region' => '13',
    'country' => 'AO',
    'latitude' => '-15.19611',
    'longitude' => '12.15222',
  ),
  527 => 
  array (
    'city' => 'Menongue',
    'region' => '04',
    'country' => 'AO',
    'latitude' => '-14.6585',
    'longitude' => '17.69099',
  ),
  528 => 
  array (
    'city' => 'Luena',
    'region' => '14',
    'country' => 'AO',
    'latitude' => '-11.78333',
    'longitude' => '19.91667',
  ),
  529 => 
  array (
    'city' => 'Lubango',
    'region' => '09',
    'country' => 'AO',
    'latitude' => '-14.91667',
    'longitude' => '13.5',
  ),
  530 => 
  array (
    'city' => 'Longonjo',
    'region' => '08',
    'country' => 'AO',
    'latitude' => '-12.90667',
    'longitude' => '15.25333',
  ),
  531 => 
  array (
    'city' => 'Lobito',
    'region' => '01',
    'country' => 'AO',
    'latitude' => '-12.34806',
    'longitude' => '13.54556',
  ),
  532 => 
  array (
    'city' => 'Kuito',
    'region' => '02',
    'country' => 'AO',
    'latitude' => '-12.38333',
    'longitude' => '16.93333',
  ),
  533 => 
  array (
    'city' => 'Huambo',
    'region' => '08',
    'country' => 'AO',
    'latitude' => '-12.77611',
    'longitude' => '15.73917',
  ),
  534 => 
  array (
    'city' => 'Chissamba',
    'region' => '02',
    'country' => 'AO',
    'latitude' => '-12.16667',
    'longitude' => '17.33333',
  ),
  535 => 
  array (
    'city' => 'Catumbela',
    'region' => '01',
    'country' => 'AO',
    'latitude' => '-12.43139',
    'longitude' => '13.54722',
  ),
  536 => 
  array (
    'city' => 'Catabola',
    'region' => '02',
    'country' => 'AO',
    'latitude' => '-12.15',
    'longitude' => '17.28333',
  ),
  537 => 
  array (
    'city' => 'Camacupa',
    'region' => '02',
    'country' => 'AO',
    'latitude' => '-12.01667',
    'longitude' => '17.48333',
  ),
  538 => 
  array (
    'city' => 'Caluquembe',
    'region' => '09',
    'country' => 'AO',
    'latitude' => '-13.78333',
    'longitude' => '14.68333',
  ),
  539 => 
  array (
    'city' => 'Caconda',
    'region' => '09',
    'country' => 'AO',
    'latitude' => '-13.73333',
    'longitude' => '15.06667',
  ),
  540 => 
  array (
    'city' => 'Caála',
    'region' => '08',
    'country' => 'AO',
    'latitude' => '-12.8525',
    'longitude' => '15.56056',
  ),
  541 => 
  array (
    'city' => 'Benguela',
    'region' => '01',
    'country' => 'AO',
    'latitude' => '-12.57833',
    'longitude' => '13.40722',
  ),
  542 => 
  array (
    'city' => 'McMurdo Station',
    'region' => '',
    'country' => 'AQ',
    'latitude' => '-77.65535',
    'longitude' => '168.22266',
  ),
  543 => 
  array (
    'city' => 'Zárate',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.09814',
    'longitude' => '-59.02858',
  ),
  544 => 
  array (
    'city' => 'Yataity Calle',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.01913',
    'longitude' => '-58.90846',
  ),
  545 => 
  array (
    'city' => 'Yapeyú',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.46914',
    'longitude' => '-56.81841',
  ),
  546 => 
  array (
    'city' => 'Villa Paranacito',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-33.72208',
    'longitude' => '-58.65798',
  ),
  547 => 
  array (
    'city' => 'Villa Ocampo',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-28.48752',
    'longitude' => '-59.35515',
  ),
  548 => 
  array (
    'city' => 'Villa María Grande',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.66565',
    'longitude' => '-59.90182',
  ),
  549 => 
  array (
    'city' => 'Villa Mantero',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.39727',
    'longitude' => '-58.74596',
  ),
  550 => 
  array (
    'city' => 'Villa Hernandarias',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.23101',
    'longitude' => '-59.985',
  ),
  551 => 
  array (
    'city' => 'Villaguay',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.8653',
    'longitude' => '-59.02689',
  ),
  552 => 
  array (
    'city' => 'Villa Gesell',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-37.26394',
    'longitude' => '-56.97304',
  ),
  553 => 
  array (
    'city' => 'Villa Escolar',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-26.62209',
    'longitude' => '-58.67134',
  ),
  554 => 
  array (
    'city' => 'Villa Elisa',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.1632',
    'longitude' => '-58.40082',
  ),
  555 => 
  array (
    'city' => 'Villa del Rosario',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-30.79567',
    'longitude' => '-57.91257',
  ),
  556 => 
  array (
    'city' => 'Veinticinco de Mayo',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.37679',
    'longitude' => '-54.74312',
  ),
  557 => 
  array (
    'city' => 'Urdinarrain',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.68573',
    'longitude' => '-58.89324',
  ),
  558 => 
  array (
    'city' => 'Ubajay',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.79358',
    'longitude' => '-58.3135',
  ),
  559 => 
  array (
    'city' => 'Tres Capones',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-28.00641',
    'longitude' => '-55.60471',
  ),
  560 => 
  array (
    'city' => 'Tandil',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-37.32167',
    'longitude' => '-59.13316',
  ),
  561 => 
  array (
    'city' => 'Tabossi',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.80135',
    'longitude' => '-59.93477',
  ),
  562 => 
  array (
    'city' => 'Sauce de Luna',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.23794',
    'longitude' => '-59.21872',
  ),
  563 => 
  array (
    'city' => 'San Vicente',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.61667',
    'longitude' => '-54.13333',
  ),
  564 => 
  array (
    'city' => 'Santo Tomé',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.54939',
    'longitude' => '-56.04077',
  ),
  565 => 
  array (
    'city' => 'Santo Pipó',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.14132',
    'longitude' => '-55.40867',
  ),
  566 => 
  array (
    'city' => 'Santa Rosa',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.26318',
    'longitude' => '-58.11891',
  ),
  567 => 
  array (
    'city' => 'Santa María',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.90356',
    'longitude' => '-55.38541',
  ),
  568 => 
  array (
    'city' => 'Santa Lucía',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.98746',
    'longitude' => '-59.10287',
  ),
  569 => 
  array (
    'city' => 'Santa Elena',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-30.94768',
    'longitude' => '-59.78696',
  ),
  570 => 
  array (
    'city' => 'Santa Anita',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.17476',
    'longitude' => '-58.78622',
  ),
  571 => 
  array (
    'city' => 'Santa Ana',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-30.90004',
    'longitude' => '-57.93162',
  ),
  572 => 
  array (
    'city' => 'San Salvador',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.62487',
    'longitude' => '-58.50524',
  ),
  573 => 
  array (
    'city' => 'San Pedro',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.62207',
    'longitude' => '-54.10842',
  ),
  574 => 
  array (
    'city' => 'San Miguel',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.99585',
    'longitude' => '-57.58964',
  ),
  575 => 
  array (
    'city' => 'San Luis del Palmar',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.5079',
    'longitude' => '-58.55454',
  ),
  576 => 
  array (
    'city' => 'San Lorenzo',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.13306',
    'longitude' => '-58.76733',
  ),
  577 => 
  array (
    'city' => 'San Justo',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.44654',
    'longitude' => '-58.43569',
  ),
  578 => 
  array (
    'city' => 'San José de Feliciano',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-30.38452',
    'longitude' => '-58.75167',
  ),
  579 => 
  array (
    'city' => 'San José',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.76979',
    'longitude' => '-55.7826',
  ),
  580 => 
  array (
    'city' => 'San Javier',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-30.57781',
    'longitude' => '-59.9317',
  ),
  581 => 
  array (
    'city' => 'San Gustavo',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-30.68961',
    'longitude' => '-59.3984',
  ),
  582 => 
  array (
    'city' => 'San Francisco de Laishí',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-26.24262',
    'longitude' => '-58.63039',
  ),
  583 => 
  array (
    'city' => 'San Cosme',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.37123',
    'longitude' => '-58.51214',
  ),
  584 => 
  array (
    'city' => 'San Clemente del Tuyú',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-36.35694',
    'longitude' => '-56.72351',
  ),
  585 => 
  array (
    'city' => 'San Carlos',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.74586',
    'longitude' => '-55.8973',
  ),
  586 => 
  array (
    'city' => 'Saladas',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.25384',
    'longitude' => '-58.62591',
  ),
  587 => 
  array (
    'city' => 'Ruiz de Montoya',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.98333',
    'longitude' => '-55.05',
  ),
  588 => 
  array (
    'city' => 'Rosario del Tala',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.30286',
    'longitude' => '-59.14545',
  ),
  589 => 
  array (
    'city' => 'Riachuelo',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.57754',
    'longitude' => '-58.73945',
  ),
  590 => 
  array (
    'city' => 'Riacho Eh-Eh',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-25.36209',
    'longitude' => '-58.2775',
  ),
  591 => 
  array (
    'city' => 'Retiro',
    'region' => '07',
    'country' => 'AR',
    'latitude' => '-34.58333',
    'longitude' => '-58.38333',
  ),
  592 => 
  array (
    'city' => 'Resistencia',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.46056',
    'longitude' => '-58.98389',
  ),
  593 => 
  array (
    'city' => 'Reconquista',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-29.15',
    'longitude' => '-59.65',
  ),
  594 => 
  array (
    'city' => 'Quilmes',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.72418',
    'longitude' => '-58.25265',
  ),
  595 => 
  array (
    'city' => 'Puerto Yeruá',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.53713',
    'longitude' => '-58.01527',
  ),
  596 => 
  array (
    'city' => 'Puerto Vilelas',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.51414',
    'longitude' => '-58.93906',
  ),
  597 => 
  array (
    'city' => 'Puerto Tirol',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.37218',
    'longitude' => '-59.08206',
  ),
  598 => 
  array (
    'city' => 'Puerto Rico',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.79598',
    'longitude' => '-55.02402',
  ),
  599 => 
  array (
    'city' => 'Puerto Piray',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.46779',
    'longitude' => '-54.71476',
  ),
  600 => 
  array (
    'city' => 'Puerto Libertad',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-25.91641',
    'longitude' => '-54.62089',
  ),
  601 => 
  array (
    'city' => 'Puerto Leoni',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.96069',
    'longitude' => '-55.1657',
  ),
  602 => 
  array (
    'city' => 'Puerto Iguazú',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-25.59912',
    'longitude' => '-54.57355',
  ),
  603 => 
  array (
    'city' => 'Puerto Ibicuy',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-33.73333',
    'longitude' => '-59.18333',
  ),
  604 => 
  array (
    'city' => 'Puerto Esperanza',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.01517',
    'longitude' => '-54.67306',
  ),
  605 => 
  array (
    'city' => 'Puerto Eldorado',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.40842',
    'longitude' => '-54.69463',
  ),
  606 => 
  array (
    'city' => 'Puerto Bermejo',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.93173',
    'longitude' => '-58.50538',
  ),
  607 => 
  array (
    'city' => 'Pueblo Libertador',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-30.22087',
    'longitude' => '-59.38981',
  ),
  608 => 
  array (
    'city' => 'Pronunciamiento',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.34617',
    'longitude' => '-58.43287',
  ),
  609 => 
  array (
    'city' => 'Presidencia Roca',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.1409',
    'longitude' => '-59.59541',
  ),
  610 => 
  array (
    'city' => 'Presidencia de la Plaza',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.00147',
    'longitude' => '-59.84243',
  ),
  611 => 
  array (
    'city' => 'Posadas',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.36708',
    'longitude' => '-55.89608',
  ),
  612 => 
  array (
    'city' => 'Pirané',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-25.73239',
    'longitude' => '-59.10879',
  ),
  613 => 
  array (
    'city' => 'Piedras Blancas',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.18623',
    'longitude' => '-59.95957',
  ),
  614 => 
  array (
    'city' => 'Picada Gobernador López',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.67069',
    'longitude' => '-55.24585',
  ),
  615 => 
  array (
    'city' => 'Perugorría',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.34132',
    'longitude' => '-58.61059',
  ),
  616 => 
  array (
    'city' => 'Pedro R. Fernández',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.75097',
    'longitude' => '-58.65583',
  ),
  617 => 
  array (
    'city' => 'Paso de los Libres',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.71311',
    'longitude' => '-57.08991',
  ),
  618 => 
  array (
    'city' => 'Paso de la Patria',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.31676',
    'longitude' => '-58.57197',
  ),
  619 => 
  array (
    'city' => 'Panambí',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.7237',
    'longitude' => '-54.91514',
  ),
  620 => 
  array (
    'city' => 'Pampa del Indio',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.06468',
    'longitude' => '-59.91898',
  ),
  621 => 
  array (
    'city' => 'Pampa Almirón',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.7',
    'longitude' => '-59.13333',
  ),
  622 => 
  array (
    'city' => 'Palo Santo',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-25.56332',
    'longitude' => '-59.33781',
  ),
  623 => 
  array (
    'city' => 'Palmar Grande',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.94195',
    'longitude' => '-57.90057',
  ),
  624 => 
  array (
    'city' => 'Oberá',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.48706',
    'longitude' => '-55.11994',
  ),
  625 => 
  array (
    'city' => 'Nueve de Julio',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.84051',
    'longitude' => '-58.8265',
  ),
  626 => 
  array (
    'city' => 'Nuestra Señora del Rosario de Caa Catí',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.75072',
    'longitude' => '-57.62073',
  ),
  627 => 
  array (
    'city' => 'Necochea',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-38.54726',
    'longitude' => '-58.73675',
  ),
  628 => 
  array (
    'city' => 'Monte Caseros',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-30.25359',
    'longitude' => '-57.63626',
  ),
  629 => 
  array (
    'city' => 'Montecarlo',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.5662',
    'longitude' => '-54.757',
  ),
  630 => 
  array (
    'city' => 'Mojón Grande',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.71164',
    'longitude' => '-55.15631',
  ),
  631 => 
  array (
    'city' => 'Mocoretá',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-30.61891',
    'longitude' => '-57.96344',
  ),
  632 => 
  array (
    'city' => 'Mercedes',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.65146',
    'longitude' => '-59.43068',
  ),
  633 => 
  array (
    'city' => 'Mercedes',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.18186',
    'longitude' => '-58.07895',
  ),
  634 => 
  array (
    'city' => 'Mburucuyá',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.04539',
    'longitude' => '-58.22449',
  ),
  635 => 
  array (
    'city' => 'Mártires',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.43333',
    'longitude' => '-55.38333',
  ),
  636 => 
  array (
    'city' => 'Mariano I. Loza',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.37668',
    'longitude' => '-58.19436',
  ),
  637 => 
  array (
    'city' => 'Margarita Belén',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.2616',
    'longitude' => '-58.97219',
  ),
  638 => 
  array (
    'city' => 'Mar del Plata',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-38.00228',
    'longitude' => '-57.55754',
  ),
  639 => 
  array (
    'city' => 'Malabrigo',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-29.34636',
    'longitude' => '-59.96957',
  ),
  640 => 
  array (
    'city' => 'Makallé',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.20687',
    'longitude' => '-59.28696',
  ),
  641 => 
  array (
    'city' => 'Maciá',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.1722',
    'longitude' => '-59.39947',
  ),
  642 => 
  array (
    'city' => 'Luján',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.57028',
    'longitude' => '-59.105',
  ),
  643 => 
  array (
    'city' => 'Lucas González',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.3843',
    'longitude' => '-59.53013',
  ),
  644 => 
  array (
    'city' => 'Los Helechos',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.5576',
    'longitude' => '-55.07683',
  ),
  645 => 
  array (
    'city' => 'Los Conquistadores',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-30.5908',
    'longitude' => '-58.46773',
  ),
  646 => 
  array (
    'city' => 'Los Charrúas',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.17276',
    'longitude' => '-58.18882',
  ),
  647 => 
  array (
    'city' => 'Loreto',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.76834',
    'longitude' => '-57.27531',
  ),
  648 => 
  array (
    'city' => 'Loreto',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.33635',
    'longitude' => '-55.52225',
  ),
  649 => 
  array (
    'city' => 'Lomas de Vallejos',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.73501',
    'longitude' => '-57.9185',
  ),
  650 => 
  array (
    'city' => 'Libertad',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-30.043',
    'longitude' => '-57.8202',
  ),
  651 => 
  array (
    'city' => 'La Verde',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.12634',
    'longitude' => '-59.37352',
  ),
  652 => 
  array (
    'city' => 'Las Toscas',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-28.3529',
    'longitude' => '-59.25795',
  ),
  653 => 
  array (
    'city' => 'Las Garcitas',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.58333',
    'longitude' => '-59.8',
  ),
  654 => 
  array (
    'city' => 'Larroque',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-33.03595',
    'longitude' => '-59.00125',
  ),
  655 => 
  array (
    'city' => 'La Plata',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.92145',
    'longitude' => '-57.95453',
  ),
  656 => 
  array (
    'city' => 'La Paz',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-30.74485',
    'longitude' => '-59.64566',
  ),
  657 => 
  array (
    'city' => 'Lapachito',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.15998',
    'longitude' => '-59.38604',
  ),
  658 => 
  array (
    'city' => 'La Leonesa',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.03786',
    'longitude' => '-58.70347',
  ),
  659 => 
  array (
    'city' => 'Laguna Naick-Neck',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-25.24769',
    'longitude' => '-58.09383',
  ),
  660 => 
  array (
    'city' => 'Laguna Limpia',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.49565',
    'longitude' => '-59.68083',
  ),
  661 => 
  array (
    'city' => 'La Escondida',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.10724',
    'longitude' => '-59.44784',
  ),
  662 => 
  array (
    'city' => 'La Eduvigis',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.85545',
    'longitude' => '-59.06842',
  ),
  663 => 
  array (
    'city' => 'La Cruz',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.17443',
    'longitude' => '-56.64326',
  ),
  664 => 
  array (
    'city' => 'La Criolla',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.26755',
    'longitude' => '-58.10605',
  ),
  665 => 
  array (
    'city' => 'Juan Pujol',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-30.41873',
    'longitude' => '-57.85612',
  ),
  666 => 
  array (
    'city' => 'Jardín América',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.04346',
    'longitude' => '-55.22698',
  ),
  667 => 
  array (
    'city' => 'Itatí',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.27043',
    'longitude' => '-58.24458',
  ),
  668 => 
  array (
    'city' => 'Itá Ibaté',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.42573',
    'longitude' => '-57.33758',
  ),
  669 => 
  array (
    'city' => 'Ibarreta',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-25.21438',
    'longitude' => '-59.85851',
  ),
  670 => 
  array (
    'city' => 'Herrera',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.43516',
    'longitude' => '-58.62462',
  ),
  671 => 
  array (
    'city' => 'Herradura',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-26.48705',
    'longitude' => '-58.31198',
  ),
  672 => 
  array (
    'city' => 'Herlitzka',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.56516',
    'longitude' => '-58.25557',
  ),
  673 => 
  array (
    'city' => 'Hasenkamp',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.51226',
    'longitude' => '-59.83545',
  ),
  674 => 
  array (
    'city' => 'Guaraní',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.51667',
    'longitude' => '-55.16667',
  ),
  675 => 
  array (
    'city' => 'Gualeguaychú',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-33.00938',
    'longitude' => '-58.51722',
  ),
  676 => 
  array (
    'city' => 'Gualeguay',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-33.14156',
    'longitude' => '-59.30966',
  ),
  677 => 
  array (
    'city' => 'Goya',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.14003',
    'longitude' => '-59.26256',
  ),
  678 => 
  array (
    'city' => 'Gobernador Roca',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.18636',
    'longitude' => '-55.46433',
  ),
  679 => 
  array (
    'city' => 'Gobernador Mansilla',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.54453',
    'longitude' => '-59.3548',
  ),
  680 => 
  array (
    'city' => 'Gobernador Juan E. Martínez',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.91705',
    'longitude' => '-58.93292',
  ),
  681 => 
  array (
    'city' => 'Gobernador Ingeniero Valentín Virasoro',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.05',
    'longitude' => '-56.03333',
  ),
  682 => 
  array (
    'city' => 'General Vedia',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.93382',
    'longitude' => '-58.6604',
  ),
  683 => 
  array (
    'city' => 'General José de San Martín',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.53743',
    'longitude' => '-59.34158',
  ),
  684 => 
  array (
    'city' => 'General Galarza',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.72034',
    'longitude' => '-59.39615',
  ),
  685 => 
  array (
    'city' => 'General Campos',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.52311',
    'longitude' => '-58.4049',
  ),
  686 => 
  array (
    'city' => 'General Alvear',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.43333',
    'longitude' => '-55.16667',
  ),
  687 => 
  array (
    'city' => 'Garupá',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.48171',
    'longitude' => '-55.82921',
  ),
  688 => 
  array (
    'city' => 'Garuhapé',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.81768',
    'longitude' => '-54.95664',
  ),
  689 => 
  array (
    'city' => 'Garruchos',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.18514',
    'longitude' => '-55.63947',
  ),
  690 => 
  array (
    'city' => 'Formosa',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-26.17753',
    'longitude' => '-58.17814',
  ),
  691 => 
  array (
    'city' => 'Fontana',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.41813',
    'longitude' => '-59.02392',
  ),
  692 => 
  array (
    'city' => 'Florentino Ameghino',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.56667',
    'longitude' => '-55.13333',
  ),
  693 => 
  array (
    'city' => 'Felipe Yofré',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.10226',
    'longitude' => '-58.33772',
  ),
  694 => 
  array (
    'city' => 'Federal',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-30.95465',
    'longitude' => '-58.78326',
  ),
  695 => 
  array (
    'city' => 'Federación',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.00621',
    'longitude' => '-57.89962',
  ),
  696 => 
  array (
    'city' => 'Esquina',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-30.01444',
    'longitude' => '-59.52719',
  ),
  697 => 
  array (
    'city' => 'El Soberbio',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.29846',
    'longitude' => '-54.19877',
  ),
  698 => 
  array (
    'city' => 'El Colorado',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-26.30808',
    'longitude' => '-59.37291',
  ),
  699 => 
  array (
    'city' => 'El Alcázar',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.71459',
    'longitude' => '-54.81523',
  ),
  700 => 
  array (
    'city' => 'Dos de Mayo',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.02277',
    'longitude' => '-54.68669',
  ),
  701 => 
  array (
    'city' => 'Dos Arroyos',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.70784',
    'longitude' => '-55.23364',
  ),
  702 => 
  array (
    'city' => 'Domínguez',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.9871',
    'longitude' => '-58.96197',
  ),
  703 => 
  array (
    'city' => 'Dolores',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-36.31322',
    'longitude' => '-57.67918',
  ),
  704 => 
  array (
    'city' => 'Curuzú Cuatiá',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.79171',
    'longitude' => '-58.0546',
  ),
  705 => 
  array (
    'city' => 'Cruz de los Milagros',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.83646',
    'longitude' => '-59.00476',
  ),
  706 => 
  array (
    'city' => 'Coté-Lai',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.5',
    'longitude' => '-59.6',
  ),
  707 => 
  array (
    'city' => 'Corrientes',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-27.4806',
    'longitude' => '-58.8341',
  ),
  708 => 
  array (
    'city' => 'Conscripto Bernardi',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.04837',
    'longitude' => '-59.08435',
  ),
  709 => 
  array (
    'city' => 'Concordia',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.39296',
    'longitude' => '-58.02089',
  ),
  710 => 
  array (
    'city' => 'Concepción del Uruguay',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.48249',
    'longitude' => '-58.23722',
  ),
  711 => 
  array (
    'city' => 'Concepción de la Sierra',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.98311',
    'longitude' => '-55.52031',
  ),
  712 => 
  array (
    'city' => 'Concepción',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.39175',
    'longitude' => '-57.88777',
  ),
  713 => 
  array (
    'city' => 'Comandante Fontana',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-25.33453',
    'longitude' => '-59.68212',
  ),
  714 => 
  array (
    'city' => 'Colonia Wanda',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-25.97408',
    'longitude' => '-54.42806',
  ),
  715 => 
  array (
    'city' => 'Colonias Unidas',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.69825',
    'longitude' => '-59.63154',
  ),
  716 => 
  array (
    'city' => 'Colonia Elisa',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.93041',
    'longitude' => '-59.51861',
  ),
  717 => 
  array (
    'city' => 'Colonia Elía',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.66625',
    'longitude' => '-58.32148',
  ),
  718 => 
  array (
    'city' => 'Colonia Benítez',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.33099',
    'longitude' => '-58.94622',
  ),
  719 => 
  array (
    'city' => 'Colonia Aurora',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.47428',
    'longitude' => '-54.52498',
  ),
  720 => 
  array (
    'city' => 'Colegiales',
    'region' => '07',
    'country' => 'AR',
    'latitude' => '-34.57365',
    'longitude' => '-58.44924',
  ),
  721 => 
  array (
    'city' => 'Clorinda',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-25.28481',
    'longitude' => '-57.71851',
  ),
  722 => 
  array (
    'city' => 'Ciervo Petiso',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.58041',
    'longitude' => '-59.63094',
  ),
  723 => 
  array (
    'city' => 'Chavarría',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-28.95488',
    'longitude' => '-58.57277',
  ),
  724 => 
  array (
    'city' => 'Charadai',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.63333',
    'longitude' => '-59.9',
  ),
  725 => 
  array (
    'city' => 'Chajarí',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-30.75048',
    'longitude' => '-57.97962',
  ),
  726 => 
  array (
    'city' => 'Cerro Corá',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.5131',
    'longitude' => '-55.60896',
  ),
  727 => 
  array (
    'city' => 'Cerro Azul',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.6331',
    'longitude' => '-55.4962',
  ),
  728 => 
  array (
    'city' => 'Ceibas',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-33.43333',
    'longitude' => '-58.75',
  ),
  729 => 
  array (
    'city' => 'Caseros',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.46325',
    'longitude' => '-58.47872',
  ),
  730 => 
  array (
    'city' => 'Caraguatay',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.60587',
    'longitude' => '-54.78093',
  ),
  731 => 
  array (
    'city' => 'Capitán Solari',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.80215',
    'longitude' => '-59.56089',
  ),
  732 => 
  array (
    'city' => 'Capioví',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.92998',
    'longitude' => '-55.06084',
  ),
  733 => 
  array (
    'city' => 'Candelaria',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.4595',
    'longitude' => '-55.74536',
  ),
  734 => 
  array (
    'city' => 'Campo Viera',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.38333',
    'longitude' => '-55.03333',
  ),
  735 => 
  array (
    'city' => 'Campo Ramón',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.46108',
    'longitude' => '-55.01901',
  ),
  736 => 
  array (
    'city' => 'Campo Grande',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.2077',
    'longitude' => '-54.97977',
  ),
  737 => 
  array (
    'city' => 'Campana',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.16874',
    'longitude' => '-58.95914',
  ),
  738 => 
  array (
    'city' => 'Buenos Aires',
    'region' => '07',
    'country' => 'AR',
    'latitude' => '-34.61315',
    'longitude' => '-58.37723',
  ),
  739 => 
  array (
    'city' => 'Bovril',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.34311',
    'longitude' => '-59.44512',
  ),
  740 => 
  array (
    'city' => 'Bonpland',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.82397',
    'longitude' => '-57.43146',
  ),
  741 => 
  array (
    'city' => 'Bonpland',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.48218',
    'longitude' => '-55.47756',
  ),
  742 => 
  array (
    'city' => 'Bernardo de Irigoyen',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-26.2552',
    'longitude' => '-53.64581',
  ),
  743 => 
  array (
    'city' => 'Basail',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.86667',
    'longitude' => '-59.3',
  ),
  744 => 
  array (
    'city' => 'Barranqueras',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.48299',
    'longitude' => '-58.93579',
  ),
  745 => 
  array (
    'city' => 'Azul',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-36.77698',
    'longitude' => '-59.85854',
  ),
  746 => 
  array (
    'city' => 'Azara',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-28.0616',
    'longitude' => '-55.67797',
  ),
  747 => 
  array (
    'city' => 'Avellaneda',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-29.11761',
    'longitude' => '-59.65834',
  ),
  748 => 
  array (
    'city' => 'Arroyo del Medio',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.7',
    'longitude' => '-55.41667',
  ),
  749 => 
  array (
    'city' => 'Aristóbulo del Valle',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.09625',
    'longitude' => '-54.89626',
  ),
  750 => 
  array (
    'city' => 'Alvear',
    'region' => '06',
    'country' => 'AR',
    'latitude' => '-29.09683',
    'longitude' => '-56.55043',
  ),
  751 => 
  array (
    'city' => 'Almafuerte',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.50518',
    'longitude' => '-55.39497',
  ),
  752 => 
  array (
    'city' => 'Aldea San Antonio',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.62376',
    'longitude' => '-58.70333',
  ),
  753 => 
  array (
    'city' => 'Alba Posse',
    'region' => '14',
    'country' => 'AR',
    'latitude' => '-27.56978',
    'longitude' => '-54.68262',
  ),
  754 => 
  array (
    'city' => 'Zonda',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.55',
    'longitude' => '-68.73333',
  ),
  755 => 
  array (
    'city' => 'Zapala',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.89916',
    'longitude' => '-70.05442',
  ),
  756 => 
  array (
    'city' => 'Yuto',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.64342',
    'longitude' => '-64.47194',
  ),
  757 => 
  array (
    'city' => 'Yerba Buena',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-26.81667',
    'longitude' => '-65.31667',
  ),
  758 => 
  array (
    'city' => 'Yacimiento Río Turbio',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-51.57321',
    'longitude' => '-72.3508',
  ),
  759 => 
  array (
    'city' => 'Winifreda',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.22643',
    'longitude' => '-64.23388',
  ),
  760 => 
  array (
    'city' => 'Wenceslao Escalante',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.17303',
    'longitude' => '-62.77078',
  ),
  761 => 
  array (
    'city' => 'Vista Alegre',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.75',
    'longitude' => '-68.18333',
  ),
  762 => 
  array (
    'city' => 'Vinchina',
    'region' => '12',
    'country' => 'AR',
    'latitude' => '-28.75964',
    'longitude' => '-68.20692',
  ),
  763 => 
  array (
    'city' => 'Villa Valeria',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.34093',
    'longitude' => '-64.9203',
  ),
  764 => 
  array (
    'city' => 'Villa Urquiza',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.64731',
    'longitude' => '-60.3748',
  ),
  765 => 
  array (
    'city' => 'Villa Tulumba',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.39552',
    'longitude' => '-64.1224',
  ),
  766 => 
  array (
    'city' => 'Villa Trinidad',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-30.21329',
    'longitude' => '-61.87597',
  ),
  767 => 
  array (
    'city' => 'Villa Rumipal',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.1879',
    'longitude' => '-64.48027',
  ),
  768 => 
  array (
    'city' => 'Villa Regina',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.1',
    'longitude' => '-67.06667',
  ),
  769 => 
  array (
    'city' => 'Villa Reducción',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.20105',
    'longitude' => '-63.86234',
  ),
  770 => 
  array (
    'city' => 'Villa Paula de Sarmiento',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.4933',
    'longitude' => '-68.53838',
  ),
  771 => 
  array (
    'city' => 'Villa Ojo de Agua',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-29.50003',
    'longitude' => '-63.69377',
  ),
  772 => 
  array (
    'city' => 'Villa Nueva',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.43293',
    'longitude' => '-63.24763',
  ),
  773 => 
  array (
    'city' => 'Villa María',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.40751',
    'longitude' => '-63.24016',
  ),
  774 => 
  array (
    'city' => 'Villa Las Rosas',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.95021',
    'longitude' => '-65.05354',
  ),
  775 => 
  array (
    'city' => 'Villa La Angostura',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-40.77974',
    'longitude' => '-71.6615',
  ),
  776 => 
  array (
    'city' => 'Villa Huidobro',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.83826',
    'longitude' => '-64.58686',
  ),
  777 => 
  array (
    'city' => 'Villa Giardino',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.03333',
    'longitude' => '-64.48333',
  ),
  778 => 
  array (
    'city' => 'Villa General Mitre',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-29.1431',
    'longitude' => '-62.65248',
  ),
  779 => 
  array (
    'city' => 'Villa General Belgrano',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.97542',
    'longitude' => '-64.5559',
  ),
  780 => 
  array (
    'city' => 'Villa Dolores',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.94585',
    'longitude' => '-65.18958',
  ),
  781 => 
  array (
    'city' => 'Villa de Soto',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.85523',
    'longitude' => '-64.99947',
  ),
  782 => 
  array (
    'city' => 'Villa del Totoral',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.81667',
    'longitude' => '-63.71667',
  ),
  783 => 
  array (
    'city' => 'Villa del Dique',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.17667',
    'longitude' => '-64.45543',
  ),
  784 => 
  array (
    'city' => 'Villa Cura Brochero',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.70578',
    'longitude' => '-65.01796',
  ),
  785 => 
  array (
    'city' => 'Villa Constitución',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-33.22778',
    'longitude' => '-60.3297',
  ),
  786 => 
  array (
    'city' => 'Villa Concepción del Tío',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.32259',
    'longitude' => '-62.81354',
  ),
  787 => 
  array (
    'city' => 'Villa Carlos Paz',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.42414',
    'longitude' => '-64.49778',
  ),
  788 => 
  array (
    'city' => 'Villa Cañás',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-34.00565',
    'longitude' => '-61.60757',
  ),
  789 => 
  array (
    'city' => 'Villa Bustos',
    'region' => '12',
    'country' => 'AR',
    'latitude' => '-29.28356',
    'longitude' => '-67.02249',
  ),
  790 => 
  array (
    'city' => 'Villa Berthet',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.29174',
    'longitude' => '-60.41263',
  ),
  791 => 
  array (
    'city' => 'Villa Atamisqui',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-28.49609',
    'longitude' => '-63.81609',
  ),
  792 => 
  array (
    'city' => 'Villa Ascasubi',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.16351',
    'longitude' => '-63.89157',
  ),
  793 => 
  array (
    'city' => 'Villa Ángela',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.57383',
    'longitude' => '-60.71526',
  ),
  794 => 
  array (
    'city' => 'Villa Allende',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.29458',
    'longitude' => '-64.29538',
  ),
  795 => 
  array (
    'city' => 'Viedma',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-40.81345',
    'longitude' => '-62.99668',
  ),
  796 => 
  array (
    'city' => 'Vicuña Mackenna',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.91965',
    'longitude' => '-64.39215',
  ),
  797 => 
  array (
    'city' => 'Victorica',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.21505',
    'longitude' => '-65.43586',
  ),
  798 => 
  array (
    'city' => 'Victoria',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.61841',
    'longitude' => '-60.15478',
  ),
  799 => 
  array (
    'city' => 'Viamonte',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.74647',
    'longitude' => '-63.09764',
  ),
  800 => 
  array (
    'city' => 'Viale',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.86782',
    'longitude' => '-60.00722',
  ),
  801 => 
  array (
    'city' => 'Vera',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-29.4593',
    'longitude' => '-60.21261',
  ),
  802 => 
  array (
    'city' => 'Venado Tuerto',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-33.74556',
    'longitude' => '-61.96884',
  ),
  803 => 
  array (
    'city' => 'Veintiocho de Noviembre',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-51.65',
    'longitude' => '-72.3',
  ),
  804 => 
  array (
    'city' => 'Veinticinco de Mayo',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-37.7741',
    'longitude' => '-67.71638',
  ),
  805 => 
  array (
    'city' => 'Veinticinco de Mayo',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-35.4323',
    'longitude' => '-60.17271',
  ),
  806 => 
  array (
    'city' => 'Valle Hermoso',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.11732',
    'longitude' => '-64.48084',
  ),
  807 => 
  array (
    'city' => 'Valcheta',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-40.7',
    'longitude' => '-66.15',
  ),
  808 => 
  array (
    'city' => 'Ushuaia',
    'region' => '23',
    'country' => 'AR',
    'latitude' => '-54.8',
    'longitude' => '-68.3',
  ),
  809 => 
  array (
    'city' => 'Uriburu',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.50682',
    'longitude' => '-63.86226',
  ),
  810 => 
  array (
    'city' => 'Unquillo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.23073',
    'longitude' => '-64.31615',
  ),
  811 => 
  array (
    'city' => 'Unión',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-35.15282',
    'longitude' => '-65.94602',
  ),
  812 => 
  array (
    'city' => 'Ucacha',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.03203',
    'longitude' => '-63.50666',
  ),
  813 => 
  array (
    'city' => 'Trevelín',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-43.0858',
    'longitude' => '-71.46386',
  ),
  814 => 
  array (
    'city' => 'Tres Isletas',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.34066',
    'longitude' => '-60.43207',
  ),
  815 => 
  array (
    'city' => 'Tres Arroyos',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-38.37394',
    'longitude' => '-60.27978',
  ),
  816 => 
  array (
    'city' => 'Trenel',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.69837',
    'longitude' => '-64.13218',
  ),
  817 => 
  array (
    'city' => 'Trelew',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-43.24895',
    'longitude' => '-65.30505',
  ),
  818 => 
  array (
    'city' => 'Trancas',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-26.23135',
    'longitude' => '-65.28025',
  ),
  819 => 
  array (
    'city' => 'Totoras',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.5844',
    'longitude' => '-61.16852',
  ),
  820 => 
  array (
    'city' => 'Tostado',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-29.23202',
    'longitude' => '-61.76917',
  ),
  821 => 
  array (
    'city' => 'Toledo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.55574',
    'longitude' => '-64.00947',
  ),
  822 => 
  array (
    'city' => 'Tío Pujio',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.2879',
    'longitude' => '-63.35598',
  ),
  823 => 
  array (
    'city' => 'Tintina',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-27.03333',
    'longitude' => '-62.71667',
  ),
  824 => 
  array (
    'city' => 'Tinogasta',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.06319',
    'longitude' => '-67.56488',
  ),
  825 => 
  array (
    'city' => 'Tilisarao',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-32.73292',
    'longitude' => '-65.29109',
  ),
  826 => 
  array (
    'city' => 'Tilcara',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.57757',
    'longitude' => '-65.3509',
  ),
  827 => 
  array (
    'city' => 'Ticino',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.6935',
    'longitude' => '-63.43606',
  ),
  828 => 
  array (
    'city' => 'Termas de Río Hondo',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-27.49983',
    'longitude' => '-64.86042',
  ),
  829 => 
  array (
    'city' => 'Telén',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.26429',
    'longitude' => '-65.51018',
  ),
  830 => 
  array (
    'city' => 'Tartagal',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-22.51636',
    'longitude' => '-63.80131',
  ),
  831 => 
  array (
    'city' => 'Tancacha',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.24309',
    'longitude' => '-63.9807',
  ),
  832 => 
  array (
    'city' => 'Tafí Viejo',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-26.73201',
    'longitude' => '-65.25921',
  ),
  833 => 
  array (
    'city' => 'Tafí del Valle',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-26.85275',
    'longitude' => '-65.70983',
  ),
  834 => 
  array (
    'city' => 'Taco Pozo',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-25.61667',
    'longitude' => '-63.28333',
  ),
  835 => 
  array (
    'city' => 'Suncho Corral',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-27.93357',
    'longitude' => '-63.42938',
  ),
  836 => 
  array (
    'city' => 'Sunchales',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-30.94404',
    'longitude' => '-61.56148',
  ),
  837 => 
  array (
    'city' => 'Sumampa',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-29.3847',
    'longitude' => '-63.46906',
  ),
  838 => 
  array (
    'city' => 'Simoca',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-27.26272',
    'longitude' => '-65.35647',
  ),
  839 => 
  array (
    'city' => 'Sierra Grande',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-41.60602',
    'longitude' => '-65.35574',
  ),
  840 => 
  array (
    'city' => 'Sierra Colorada',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-40.58487',
    'longitude' => '-67.75674',
  ),
  841 => 
  array (
    'city' => 'Serrezuela',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.63761',
    'longitude' => '-65.38692',
  ),
  842 => 
  array (
    'city' => 'Serrano',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.46971',
    'longitude' => '-63.53842',
  ),
  843 => 
  array (
    'city' => 'Senillosa',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-39',
    'longitude' => '-68.41667',
  ),
  844 => 
  array (
    'city' => 'Seguí',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.95642',
    'longitude' => '-60.12488',
  ),
  845 => 
  array (
    'city' => 'Sebastián Elcano',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.16105',
    'longitude' => '-63.5936',
  ),
  846 => 
  array (
    'city' => 'Saturnino M. Laspiur',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.70287',
    'longitude' => '-62.48202',
  ),
  847 => 
  array (
    'city' => 'Sastre',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.76762',
    'longitude' => '-61.82886',
  ),
  848 => 
  array (
    'city' => 'Sarmiento',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-45.58815',
    'longitude' => '-69.06996',
  ),
  849 => 
  array (
    'city' => 'Santo Tomé',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.66274',
    'longitude' => '-60.7653',
  ),
  850 => 
  array (
    'city' => 'Santiago Temple',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.38731',
    'longitude' => '-63.41821',
  ),
  851 => 
  array (
    'city' => 'Santiago del Estero',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-27.79511',
    'longitude' => '-64.26149',
  ),
  852 => 
  array (
    'city' => 'Santa Sylvina',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.83261',
    'longitude' => '-61.13747',
  ),
  853 => 
  array (
    'city' => 'Santa Rosa de Tastil',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-24.45166',
    'longitude' => '-65.97452',
  ),
  854 => 
  array (
    'city' => 'Santa Rosa de Río Primero',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.15231',
    'longitude' => '-63.40191',
  ),
  855 => 
  array (
    'city' => 'Santa Rosa del Conlara',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-32.34286',
    'longitude' => '-65.20323',
  ),
  856 => 
  array (
    'city' => 'Santa Rosa de Calamuchita',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.06905',
    'longitude' => '-64.53631',
  ),
  857 => 
  array (
    'city' => 'Santa Rosa',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.61667',
    'longitude' => '-64.28333',
  ),
  858 => 
  array (
    'city' => 'Santa Magdalena',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.51776',
    'longitude' => '-63.94409',
  ),
  859 => 
  array (
    'city' => 'Santa Lucía',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.53987',
    'longitude' => '-68.49503',
  ),
  860 => 
  array (
    'city' => 'Santa Isabel',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.22724',
    'longitude' => '-66.9424',
  ),
  861 => 
  array (
    'city' => 'Santa Fe de la Vera Cruz',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.63333',
    'longitude' => '-60.7',
  ),
  862 => 
  array (
    'city' => 'Santa Eufemia',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.17658',
    'longitude' => '-63.28281',
  ),
  863 => 
  array (
    'city' => 'Santa Clara',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-24.30921',
    'longitude' => '-64.66253',
  ),
  864 => 
  array (
    'city' => 'San Salvador de Jujuy',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-24.19456',
    'longitude' => '-65.29712',
  ),
  865 => 
  array (
    'city' => 'San Ramón de la Nueva Orán',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-23.13223',
    'longitude' => '-64.32598',
  ),
  866 => 
  array (
    'city' => 'San Rafael',
    'region' => '13',
    'country' => 'AR',
    'latitude' => '-34.61772',
    'longitude' => '-68.33007',
  ),
  867 => 
  array (
    'city' => 'San Pedro',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-27.95386',
    'longitude' => '-65.1665',
  ),
  868 => 
  array (
    'city' => 'San Pedro',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-24.23127',
    'longitude' => '-64.86614',
  ),
  869 => 
  array (
    'city' => 'San Nicolás de los Arroyos',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-33.33578',
    'longitude' => '-60.22523',
  ),
  870 => 
  array (
    'city' => 'San Miguel de Tucumán',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-26.82414',
    'longitude' => '-65.2226',
  ),
  871 => 
  array (
    'city' => 'San Martín de los Andes',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-40.16038',
    'longitude' => '-71.34865',
  ),
  872 => 
  array (
    'city' => 'San Martín',
    'region' => '13',
    'country' => 'AR',
    'latitude' => '-33.08103',
    'longitude' => '-68.46814',
  ),
  873 => 
  array (
    'city' => 'San Martín',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.51599',
    'longitude' => '-68.35273',
  ),
  874 => 
  array (
    'city' => 'San Luis',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-33.29501',
    'longitude' => '-66.33563',
  ),
  875 => 
  array (
    'city' => 'San Justo',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-30.78913',
    'longitude' => '-60.59189',
  ),
  876 => 
  array (
    'city' => 'San Juan',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.5375',
    'longitude' => '-68.53639',
  ),
  877 => 
  array (
    'city' => 'San José de la Dormida',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.3544',
    'longitude' => '-63.94872',
  ),
  878 => 
  array (
    'city' => 'San José de Jáchal',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-30.24057',
    'longitude' => '-68.74693',
  ),
  879 => 
  array (
    'city' => 'San Jorge',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.89618',
    'longitude' => '-61.85984',
  ),
  880 => 
  array (
    'city' => 'San Francisco del Monte de Oro',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-32.59825',
    'longitude' => '-66.12539',
  ),
  881 => 
  array (
    'city' => 'San Francisco del Chañar',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-29.78991',
    'longitude' => '-63.93861',
  ),
  882 => 
  array (
    'city' => 'San Francisco',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.42797',
    'longitude' => '-62.08266',
  ),
  883 => 
  array (
    'city' => 'San Fernando del Valle de Catamarca',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.46957',
    'longitude' => '-65.78524',
  ),
  884 => 
  array (
    'city' => 'San Cristóbal',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-30.31053',
    'longitude' => '-61.23724',
  ),
  885 => 
  array (
    'city' => 'San Carlos Centro',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.72864',
    'longitude' => '-61.09192',
  ),
  886 => 
  array (
    'city' => 'San Carlos',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.17761',
    'longitude' => '-65.10245',
  ),
  887 => 
  array (
    'city' => 'San Bernardo',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.28782',
    'longitude' => '-60.71252',
  ),
  888 => 
  array (
    'city' => 'San Benito',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.78371',
    'longitude' => '-60.44156',
  ),
  889 => 
  array (
    'city' => 'San Basilio',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.49763',
    'longitude' => '-64.31495',
  ),
  890 => 
  array (
    'city' => 'San Antonio Oeste',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-40.73193',
    'longitude' => '-64.94769',
  ),
  891 => 
  array (
    'city' => 'San Antonio de los Cobres',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-24.21804',
    'longitude' => '-66.31877',
  ),
  892 => 
  array (
    'city' => 'San Antonio de Litín',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.21377',
    'longitude' => '-62.63237',
  ),
  893 => 
  array (
    'city' => 'San Antonio',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.00927',
    'longitude' => '-65.71218',
  ),
  894 => 
  array (
    'city' => 'San Agustín de Valle Fértil',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-30.63353',
    'longitude' => '-67.46821',
  ),
  895 => 
  array (
    'city' => 'San Agustín',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.97681',
    'longitude' => '-64.374',
  ),
  896 => 
  array (
    'city' => 'Samuhú',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.52116',
    'longitude' => '-60.39167',
  ),
  897 => 
  array (
    'city' => 'Sampacho',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.3839',
    'longitude' => '-64.72211',
  ),
  898 => 
  array (
    'city' => 'Salta',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-24.7859',
    'longitude' => '-65.41166',
  ),
  899 => 
  array (
    'city' => 'Salsipuedes',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.13724',
    'longitude' => '-64.29589',
  ),
  900 => 
  array (
    'city' => 'Salsacate',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.31649',
    'longitude' => '-65.08529',
  ),
  901 => 
  array (
    'city' => 'Saldán',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.30262',
    'longitude' => '-64.307',
  ),
  902 => 
  array (
    'city' => 'Sacanta',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.663',
    'longitude' => '-63.04505',
  ),
  903 => 
  array (
    'city' => 'Rufino',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-34.26827',
    'longitude' => '-62.71262',
  ),
  904 => 
  array (
    'city' => 'Rosario',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.94682',
    'longitude' => '-60.63932',
  ),
  905 => 
  array (
    'city' => 'Roldán',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.89846',
    'longitude' => '-60.90681',
  ),
  906 => 
  array (
    'city' => 'Río Tercero',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.17301',
    'longitude' => '-64.11406',
  ),
  907 => 
  array (
    'city' => 'Río Segundo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.6526',
    'longitude' => '-63.9099',
  ),
  908 => 
  array (
    'city' => 'Río Pico',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-44.17904',
    'longitude' => '-71.36847',
  ),
  909 => 
  array (
    'city' => 'Río Gallegos',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-51.62261',
    'longitude' => '-69.21813',
  ),
  910 => 
  array (
    'city' => 'Río Cuarto',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.13067',
    'longitude' => '-64.34992',
  ),
  911 => 
  array (
    'city' => 'Río Ceballos',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.16486',
    'longitude' => '-64.32241',
  ),
  912 => 
  array (
    'city' => 'Recreo',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.49076',
    'longitude' => '-60.73299',
  ),
  913 => 
  array (
    'city' => 'Recreo',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-29.28184',
    'longitude' => '-65.06096',
  ),
  914 => 
  array (
    'city' => 'Realicó',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.03658',
    'longitude' => '-64.2447',
  ),
  915 => 
  array (
    'city' => 'Rawson',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-43.30016',
    'longitude' => '-65.10228',
  ),
  916 => 
  array (
    'city' => 'Rancul',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.06862',
    'longitude' => '-64.68107',
  ),
  917 => 
  array (
    'city' => 'Rafaela',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.25033',
    'longitude' => '-61.4867',
  ),
  918 => 
  array (
    'city' => 'Rada Tilly',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-45.93333',
    'longitude' => '-67.53333',
  ),
  919 => 
  array (
    'city' => 'Quitilipi',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.86913',
    'longitude' => '-60.21683',
  ),
  920 => 
  array (
    'city' => 'Quimilí',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-27.63333',
    'longitude' => '-62.41667',
  ),
  921 => 
  array (
    'city' => 'Quilino',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.21397',
    'longitude' => '-64.50063',
  ),
  922 => 
  array (
    'city' => 'Quemú Quemú',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.05463',
    'longitude' => '-63.56428',
  ),
  923 => 
  array (
    'city' => 'Punta Alta',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-38.87588',
    'longitude' => '-62.07359',
  ),
  924 => 
  array (
    'city' => 'Puerto Santa Cruz',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-50.0191',
    'longitude' => '-68.52321',
  ),
  925 => 
  array (
    'city' => 'San Julián',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-49.30554',
    'longitude' => '-67.72743',
  ),
  926 => 
  array (
    'city' => 'Puerto Madryn',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-42.7692',
    'longitude' => '-65.03851',
  ),
  927 => 
  array (
    'city' => 'Puerto Deseado',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-47.75034',
    'longitude' => '-65.89382',
  ),
  928 => 
  array (
    'city' => 'Puerta de Corral Quemado',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-27.23',
    'longitude' => '-66.93635',
  ),
  929 => 
  array (
    'city' => 'Presidencia Roque Sáenz Peña',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.78522',
    'longitude' => '-60.43876',
  ),
  930 => 
  array (
    'city' => 'Pozo del Tigre',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-24.89682',
    'longitude' => '-60.32359',
  ),
  931 => 
  array (
    'city' => 'Pozo del Molle',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.0186',
    'longitude' => '-62.91984',
  ),
  932 => 
  array (
    'city' => 'Porteña',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.01391',
    'longitude' => '-62.0665',
  ),
  933 => 
  array (
    'city' => 'Pomán',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.39455',
    'longitude' => '-66.22052',
  ),
  934 => 
  array (
    'city' => 'Pocito',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.68333',
    'longitude' => '-68.58333',
  ),
  935 => 
  array (
    'city' => 'Plottier',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.96667',
    'longitude' => '-68.23333',
  ),
  936 => 
  array (
    'city' => 'Plaza Huincul',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.92598',
    'longitude' => '-69.20863',
  ),
  937 => 
  array (
    'city' => 'Piquillín',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.30158',
    'longitude' => '-63.75788',
  ),
  938 => 
  array (
    'city' => 'Pilcaniyeu',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-41.11881',
    'longitude' => '-70.72914',
  ),
  939 => 
  array (
    'city' => 'Pilar',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.6789',
    'longitude' => '-63.87964',
  ),
  940 => 
  array (
    'city' => 'Piedra del Águila',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-40.04811',
    'longitude' => '-70.0741',
  ),
  941 => 
  array (
    'city' => 'Picún Leufú',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-39.52351',
    'longitude' => '-69.27966',
  ),
  942 => 
  array (
    'city' => 'Pico Truncado',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-46.7949',
    'longitude' => '-67.95731',
  ),
  943 => 
  array (
    'city' => 'Pergamino',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-33.88995',
    'longitude' => '-60.57357',
  ),
  944 => 
  array (
    'city' => 'Pérez',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.99835',
    'longitude' => '-60.76791',
  ),
  945 => 
  array (
    'city' => 'Pasco',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.74733',
    'longitude' => '-63.34232',
  ),
  946 => 
  array (
    'city' => 'Pascanas',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.1255',
    'longitude' => '-63.04084',
  ),
  947 => 
  array (
    'city' => 'Parera',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.146',
    'longitude' => '-64.50089',
  ),
  948 => 
  array (
    'city' => 'Paraná',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.73197',
    'longitude' => '-60.5238',
  ),
  949 => 
  array (
    'city' => 'Pampa de los Guanacos',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-26.23333',
    'longitude' => '-61.85',
  ),
  950 => 
  array (
    'city' => 'Pampa del Infierno',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.50517',
    'longitude' => '-61.17436',
  ),
  951 => 
  array (
    'city' => 'Palpalá',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-24.25648',
    'longitude' => '-65.21163',
  ),
  952 => 
  array (
    'city' => 'Palma Sola',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.96336',
    'longitude' => '-64.29872',
  ),
  953 => 
  array (
    'city' => 'Oro Verde',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-31.82508',
    'longitude' => '-60.51749',
  ),
  954 => 
  array (
    'city' => 'Ordóñez',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.84057',
    'longitude' => '-62.86552',
  ),
  955 => 
  array (
    'city' => 'Oncativo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.91353',
    'longitude' => '-63.68201',
  ),
  956 => 
  array (
    'city' => 'Oliva',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.04158',
    'longitude' => '-63.56978',
  ),
  957 => 
  array (
    'city' => 'Olavarría',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-36.89272',
    'longitude' => '-60.32254',
  ),
  958 => 
  array (
    'city' => 'Obispo Trejo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.78128',
    'longitude' => '-63.41348',
  ),
  959 => 
  array (
    'city' => 'Nueve de Julio',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-35.44437',
    'longitude' => '-60.88313',
  ),
  960 => 
  array (
    'city' => 'Nueve de Julio',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.66914',
    'longitude' => '-68.39023',
  ),
  961 => 
  array (
    'city' => 'Noetinger',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.36597',
    'longitude' => '-62.31126',
  ),
  962 => 
  array (
    'city' => 'Neuquén',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.95161',
    'longitude' => '-68.0591',
  ),
  963 => 
  array (
    'city' => 'Naschel',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-32.91656',
    'longitude' => '-65.37535',
  ),
  964 => 
  array (
    'city' => 'Napenay',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.73333',
    'longitude' => '-60.61667',
  ),
  965 => 
  array (
    'city' => 'Mutquín',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.32104',
    'longitude' => '-66.14253',
  ),
  966 => 
  array (
    'city' => 'Morteros',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.71164',
    'longitude' => '-61.99862',
  ),
  967 => 
  array (
    'city' => 'Morrison',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.5948',
    'longitude' => '-62.83455',
  ),
  968 => 
  array (
    'city' => 'Monteros',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-27.16742',
    'longitude' => '-65.49832',
  ),
  969 => 
  array (
    'city' => 'Monte Maíz',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.20462',
    'longitude' => '-62.60085',
  ),
  970 => 
  array (
    'city' => 'Monte Cristo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.34312',
    'longitude' => '-63.94437',
  ),
  971 => 
  array (
    'city' => 'Monte Buey',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.91642',
    'longitude' => '-62.45668',
  ),
  972 => 
  array (
    'city' => 'Miramar',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.91858',
    'longitude' => '-62.67814',
  ),
  973 => 
  array (
    'city' => 'Mina Clavero',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.721',
    'longitude' => '-65.00619',
  ),
  974 => 
  array (
    'city' => 'Miguel Riglos',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.85398',
    'longitude' => '-63.68842',
  ),
  975 => 
  array (
    'city' => 'Merlo',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-32.34288',
    'longitude' => '-65.01396',
  ),
  976 => 
  array (
    'city' => 'Mendoza',
    'region' => '13',
    'country' => 'AR',
    'latitude' => '-32.89084',
    'longitude' => '-68.82717',
  ),
  977 => 
  array (
    'city' => 'Mendiolaza',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.26738',
    'longitude' => '-64.30087',
  ),
  978 => 
  array (
    'city' => 'Mattaldi',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.48194',
    'longitude' => '-64.17255',
  ),
  979 => 
  array (
    'city' => 'Marull',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.99471',
    'longitude' => '-62.82576',
  ),
  980 => 
  array (
    'city' => 'Mariano Moreno',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.75029',
    'longitude' => '-70.02367',
  ),
  981 => 
  array (
    'city' => 'Marcos Juárez',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.6978',
    'longitude' => '-62.10672',
  ),
  982 => 
  array (
    'city' => 'Maquinchao',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-41.25',
    'longitude' => '-68.73333',
  ),
  983 => 
  array (
    'city' => 'Malvinas Argentinas',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.38333',
    'longitude' => '-64.06667',
  ),
  984 => 
  array (
    'city' => 'Malagueño',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.46467',
    'longitude' => '-64.3584',
  ),
  985 => 
  array (
    'city' => 'Mainque',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.06667',
    'longitude' => '-67.3',
  ),
  986 => 
  array (
    'city' => 'Maimará',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.62392',
    'longitude' => '-65.40797',
  ),
  987 => 
  array (
    'city' => 'Machagai',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.92614',
    'longitude' => '-60.04956',
  ),
  988 => 
  array (
    'city' => 'Macachín',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-37.13598',
    'longitude' => '-63.6665',
  ),
  989 => 
  array (
    'city' => 'Luján',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-32.3757',
    'longitude' => '-65.9296',
  ),
  990 => 
  array (
    'city' => 'Los Varela',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-27.95482',
    'longitude' => '-65.8655',
  ),
  991 => 
  array (
    'city' => 'Los Telares',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-28.98479',
    'longitude' => '-63.44889',
  ),
  992 => 
  array (
    'city' => 'Los Surgentes',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.98454',
    'longitude' => '-62.02191',
  ),
  993 => 
  array (
    'city' => 'Los Menucos',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-40.84402',
    'longitude' => '-68.08718',
  ),
  994 => 
  array (
    'city' => 'Los Juríes',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-28.46539',
    'longitude' => '-62.10862',
  ),
  995 => 
  array (
    'city' => 'Los Frentones',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.4077',
    'longitude' => '-61.41368',
  ),
  996 => 
  array (
    'city' => 'Los Cóndores',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.31984',
    'longitude' => '-64.27752',
  ),
  997 => 
  array (
    'city' => 'Los Cocos',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.92497',
    'longitude' => '-64.50207',
  ),
  998 => 
  array (
    'city' => 'Los Antiguos',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-46.54972',
    'longitude' => '-71.63086',
  ),
  999 => 
  array (
    'city' => 'Los Altos',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.04845',
    'longitude' => '-65.49946',
  ),
  1000 => 
  array (
    'city' => 'Lonquimay',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.46546',
    'longitude' => '-63.62429',
  ),
  1001 => 
  array (
    'city' => 'Londres',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-27.71439',
    'longitude' => '-67.13349',
  ),
  1002 => 
  array (
    'city' => 'Loncopué',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.07284',
    'longitude' => '-70.61609',
  ),
  1003 => 
  array (
    'city' => 'Lincoln',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.86649',
    'longitude' => '-61.5302',
  ),
  1004 => 
  array (
    'city' => 'Libertador General San Martín',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.80644',
    'longitude' => '-64.78757',
  ),
  1005 => 
  array (
    'city' => 'Leones',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.66174',
    'longitude' => '-62.29678',
  ),
  1006 => 
  array (
    'city' => 'La Toma',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-33.05258',
    'longitude' => '-65.62385',
  ),
  1007 => 
  array (
    'city' => 'La Tigra',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.10996',
    'longitude' => '-60.58719',
  ),
  1008 => 
  array (
    'city' => 'Las Varillas',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.87208',
    'longitude' => '-62.71946',
  ),
  1009 => 
  array (
    'city' => 'Las Varas',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.8026',
    'longitude' => '-62.61655',
  ),
  1010 => 
  array (
    'city' => 'Las Rosas',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.47661',
    'longitude' => '-61.58041',
  ),
  1011 => 
  array (
    'city' => 'Las Perdices',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.69794',
    'longitude' => '-63.70634',
  ),
  1012 => 
  array (
    'city' => 'Las Parejas',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.68478',
    'longitude' => '-61.51637',
  ),
  1013 => 
  array (
    'city' => 'Las Ovejas',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-36.98881',
    'longitude' => '-70.74991',
  ),
  1014 => 
  array (
    'city' => 'Las Lomitas',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-24.70955',
    'longitude' => '-60.59303',
  ),
  1015 => 
  array (
    'city' => 'Las Lajitas',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-24.68333',
    'longitude' => '-64.25',
  ),
  1016 => 
  array (
    'city' => 'Las Lajas',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.52322',
    'longitude' => '-70.36744',
  ),
  1017 => 
  array (
    'city' => 'Las Junturas',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.83125',
    'longitude' => '-63.45016',
  ),
  1018 => 
  array (
    'city' => 'Las Higueras',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.09231',
    'longitude' => '-64.289',
  ),
  1019 => 
  array (
    'city' => 'Las Heras',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-46.54186',
    'longitude' => '-68.93593',
  ),
  1020 => 
  array (
    'city' => 'Las Breñas',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.08966',
    'longitude' => '-61.08161',
  ),
  1021 => 
  array (
    'city' => 'Las Acequias',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.28155',
    'longitude' => '-63.9761',
  ),
  1022 => 
  array (
    'city' => 'La Rioja',
    'region' => '12',
    'country' => 'AR',
    'latitude' => '-29.41105',
    'longitude' => '-66.85067',
  ),
  1023 => 
  array (
    'city' => 'La Quiaca',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-22.10236',
    'longitude' => '-65.59299',
  ),
  1024 => 
  array (
    'city' => 'La Puerta de San José',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-27.55',
    'longitude' => '-67.01667',
  ),
  1025 => 
  array (
    'city' => 'La Playosa',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.10002',
    'longitude' => '-63.03088',
  ),
  1026 => 
  array (
    'city' => 'La Para',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.89416',
    'longitude' => '-63.00107',
  ),
  1027 => 
  array (
    'city' => 'La Mendieta',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-24.31187',
    'longitude' => '-64.96377',
  ),
  1028 => 
  array (
    'city' => 'La Maruja',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.6736',
    'longitude' => '-64.93997',
  ),
  1029 => 
  array (
    'city' => 'Lamarque',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.42304',
    'longitude' => '-65.70208',
  ),
  1030 => 
  array (
    'city' => 'Laguna Yema',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-24.25391',
    'longitude' => '-61.24466',
  ),
  1031 => 
  array (
    'city' => 'Laguna Paiva',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.30391',
    'longitude' => '-60.65894',
  ),
  1032 => 
  array (
    'city' => 'Laguna Larga',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.77652',
    'longitude' => '-63.80104',
  ),
  1033 => 
  array (
    'city' => 'La Granja',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.00919',
    'longitude' => '-64.26869',
  ),
  1034 => 
  array (
    'city' => 'Lago Puelo',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-42.08095',
    'longitude' => '-71.61405',
  ),
  1035 => 
  array (
    'city' => 'La Francia',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.40675',
    'longitude' => '-62.63396',
  ),
  1036 => 
  array (
    'city' => 'La Falda',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.08841',
    'longitude' => '-64.48987',
  ),
  1037 => 
  array (
    'city' => 'La Cumbre',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.98201',
    'longitude' => '-64.49139',
  ),
  1038 => 
  array (
    'city' => 'La Cocha',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-27.77729',
    'longitude' => '-65.57035',
  ),
  1039 => 
  array (
    'city' => 'La Clotilde',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.13333',
    'longitude' => '-60.66667',
  ),
  1040 => 
  array (
    'city' => 'La Cesira',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.95115',
    'longitude' => '-62.97238',
  ),
  1041 => 
  array (
    'city' => 'La Carlota',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.41993',
    'longitude' => '-63.29769',
  ),
  1042 => 
  array (
    'city' => 'La Calera',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.34377',
    'longitude' => '-64.33529',
  ),
  1043 => 
  array (
    'city' => 'Laboulaye',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.12662',
    'longitude' => '-63.39119',
  ),
  1044 => 
  array (
    'city' => 'Laborde',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.15319',
    'longitude' => '-62.85661',
  ),
  1045 => 
  array (
    'city' => 'Justo Daract',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-33.8594',
    'longitude' => '-65.18277',
  ),
  1046 => 
  array (
    'city' => 'Justiniano Posse',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.88411',
    'longitude' => '-62.67788',
  ),
  1047 => 
  array (
    'city' => 'Junín de los Andes',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-39.95043',
    'longitude' => '-71.06936',
  ),
  1048 => 
  array (
    'city' => 'Junín',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.58382',
    'longitude' => '-60.94332',
  ),
  1049 => 
  array (
    'city' => 'José de San Martín',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-44.05032',
    'longitude' => '-70.46967',
  ),
  1050 => 
  array (
    'city' => 'Joaquín V. González',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-25.08333',
    'longitude' => '-64.18333',
  ),
  1051 => 
  array (
    'city' => 'Jesús María',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.98153',
    'longitude' => '-64.09424',
  ),
  1052 => 
  array (
    'city' => 'James Craik',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.1612',
    'longitude' => '-63.46688',
  ),
  1053 => 
  array (
    'city' => 'Jacinto Arauz',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-38.08606',
    'longitude' => '-63.43169',
  ),
  1054 => 
  array (
    'city' => 'Italó',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.79237',
    'longitude' => '-63.78199',
  ),
  1055 => 
  array (
    'city' => 'Isla Verde',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.24104',
    'longitude' => '-62.40297',
  ),
  1056 => 
  array (
    'city' => 'Intendente Alvear',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.23383',
    'longitude' => '-63.59205',
  ),
  1057 => 
  array (
    'city' => 'Inriville',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.94424',
    'longitude' => '-62.23028',
  ),
  1058 => 
  array (
    'city' => 'Ingenio La Esperanza',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-24.22554',
    'longitude' => '-64.83896',
  ),
  1059 => 
  array (
    'city' => 'Ingeniero Luis A. Huergo',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.08333',
    'longitude' => '-67.23333',
  ),
  1060 => 
  array (
    'city' => 'Ingeniero Luiggi',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.38585',
    'longitude' => '-64.46519',
  ),
  1061 => 
  array (
    'city' => 'Ingeniero Jacobacci',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-41.34269',
    'longitude' => '-69.54479',
  ),
  1062 => 
  array (
    'city' => 'Ingeniero Guillermo N. Juárez',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-23.9',
    'longitude' => '-61.85',
  ),
  1063 => 
  array (
    'city' => 'Idiazábal',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.81411',
    'longitude' => '-63.03252',
  ),
  1064 => 
  array (
    'city' => 'Icaño',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.91934',
    'longitude' => '-65.32817',
  ),
  1065 => 
  array (
    'city' => 'Humahuaca',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.20544',
    'longitude' => '-65.35048',
  ),
  1066 => 
  array (
    'city' => 'Huinca Renancó',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.84038',
    'longitude' => '-64.3758',
  ),
  1067 => 
  array (
    'city' => 'Huillapima',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.72533',
    'longitude' => '-65.9787',
  ),
  1068 => 
  array (
    'city' => 'Huerta Grande',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.07524',
    'longitude' => '-64.49063',
  ),
  1069 => 
  array (
    'city' => 'Huanchillas',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.66652',
    'longitude' => '-63.63701',
  ),
  1070 => 
  array (
    'city' => 'Hualfín',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-27.22896',
    'longitude' => '-66.83131',
  ),
  1071 => 
  array (
    'city' => 'Hoyo de Epuyén',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-42.07189',
    'longitude' => '-71.50811',
  ),
  1072 => 
  array (
    'city' => 'Hersilia',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-30.00447',
    'longitude' => '-61.8408',
  ),
  1073 => 
  array (
    'city' => 'Hernando',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.42657',
    'longitude' => '-63.73333',
  ),
  1074 => 
  array (
    'city' => 'Hernández',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.3373',
    'longitude' => '-60.0216',
  ),
  1075 => 
  array (
    'city' => 'Hermoso Campo',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.60816',
    'longitude' => '-61.34441',
  ),
  1076 => 
  array (
    'city' => 'Guatraché',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-37.66776',
    'longitude' => '-63.53022',
  ),
  1077 => 
  array (
    'city' => 'Guatimozín',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.4615',
    'longitude' => '-62.43844',
  ),
  1078 => 
  array (
    'city' => 'Graneros',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-27.64934',
    'longitude' => '-65.4383',
  ),
  1079 => 
  array (
    'city' => 'Granadero Baigorria',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.85683',
    'longitude' => '-60.71754',
  ),
  1080 => 
  array (
    'city' => 'Gobernador Gálvez',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-33.03016',
    'longitude' => '-60.64045',
  ),
  1081 => 
  array (
    'city' => 'Gobernador Costa',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-44.04992',
    'longitude' => '-70.59798',
  ),
  1082 => 
  array (
    'city' => 'General San Martín',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-37.97904',
    'longitude' => '-63.60449',
  ),
  1083 => 
  array (
    'city' => 'General Roca',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.03333',
    'longitude' => '-67.58333',
  ),
  1084 => 
  array (
    'city' => 'General Roca',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.73196',
    'longitude' => '-61.91599',
  ),
  1085 => 
  array (
    'city' => 'General Ramírez',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.17601',
    'longitude' => '-60.20079',
  ),
  1086 => 
  array (
    'city' => 'General Pinedo',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.31667',
    'longitude' => '-61.28333',
  ),
  1087 => 
  array (
    'city' => 'General Pico',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.65662',
    'longitude' => '-63.75682',
  ),
  1088 => 
  array (
    'city' => 'General Manuel J. Campos',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-37.46025',
    'longitude' => '-63.58537',
  ),
  1089 => 
  array (
    'city' => 'General Levalle',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.01472',
    'longitude' => '-63.92413',
  ),
  1090 => 
  array (
    'city' => 'General Fernández Oro',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-38.95297',
    'longitude' => '-67.92489',
  ),
  1091 => 
  array (
    'city' => 'General Enrique Mosconi',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-23.21667',
    'longitude' => '-62.3',
  ),
  1092 => 
  array (
    'city' => 'General Enrique Mosconi',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-22.59588',
    'longitude' => '-63.81255',
  ),
  1093 => 
  array (
    'city' => 'General Enrique Godoy',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.08333',
    'longitude' => '-67.15',
  ),
  1094 => 
  array (
    'city' => 'General Conesa',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-40.1',
    'longitude' => '-64.43333',
  ),
  1095 => 
  array (
    'city' => 'General Cabrera',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.81313',
    'longitude' => '-63.87243',
  ),
  1096 => 
  array (
    'city' => 'General Baldissera',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.12246',
    'longitude' => '-62.3063',
  ),
  1097 => 
  array (
    'city' => 'General Acha',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-37.37698',
    'longitude' => '-64.60431',
  ),
  1098 => 
  array (
    'city' => 'Gancedo',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.49038',
    'longitude' => '-61.67571',
  ),
  1099 => 
  array (
    'city' => 'Gálvez',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.02927',
    'longitude' => '-61.22103',
  ),
  1100 => 
  array (
    'city' => 'Gaimán',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-43.2897',
    'longitude' => '-65.4929',
  ),
  1101 => 
  array (
    'city' => 'Funes',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.91568',
    'longitude' => '-60.80995',
  ),
  1102 => 
  array (
    'city' => 'Fray Luis Beltrán',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.31667',
    'longitude' => '-65.76667',
  ),
  1103 => 
  array (
    'city' => 'Fray Luis A. Beltrán',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.79122',
    'longitude' => '-60.72819',
  ),
  1104 => 
  array (
    'city' => 'Fraile Pintado',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.94079',
    'longitude' => '-64.79943',
  ),
  1105 => 
  array (
    'city' => 'Firmat',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-33.45937',
    'longitude' => '-61.4832',
  ),
  1106 => 
  array (
    'city' => 'Fiambalá',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-27.68705',
    'longitude' => '-67.6149',
  ),
  1107 => 
  array (
    'city' => 'Famaillá',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-27.05413',
    'longitude' => '-65.40329',
  ),
  1108 => 
  array (
    'city' => 'Etruria',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.94008',
    'longitude' => '-63.2466',
  ),
  1109 => 
  array (
    'city' => 'Estanislao del Campo',
    'region' => '09',
    'country' => 'AR',
    'latitude' => '-25.05504',
    'longitude' => '-60.09218',
  ),
  1110 => 
  array (
    'city' => 'Esquel',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-42.9',
    'longitude' => '-71.31667',
  ),
  1111 => 
  array (
    'city' => 'Esperanza',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.4488',
    'longitude' => '-60.93173',
  ),
  1112 => 
  array (
    'city' => 'Embarcación',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-23.20898',
    'longitude' => '-64.09605',
  ),
  1113 => 
  array (
    'city' => 'Embalse',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.18',
    'longitude' => '-64.41809',
  ),
  1114 => 
  array (
    'city' => 'Embajador Martini',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.38633',
    'longitude' => '-64.28092',
  ),
  1115 => 
  array (
    'city' => 'El Trébol',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.2008',
    'longitude' => '-61.7014',
  ),
  1116 => 
  array (
    'city' => 'El Tío',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.38357',
    'longitude' => '-62.82938',
  ),
  1117 => 
  array (
    'city' => 'El Rodeo',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.21518',
    'longitude' => '-65.8742',
  ),
  1118 => 
  array (
    'city' => 'El Quebrachal',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-25.28333',
    'longitude' => '-64.06667',
  ),
  1119 => 
  array (
    'city' => 'El Maitén',
    'region' => '07',
    'country' => 'AR',
    'latitude' => '-42.04924',
    'longitude' => '-71.16693',
  ),
  1120 => 
  array (
    'city' => 'El Huecú',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-37.64522',
    'longitude' => '-70.58006',
  ),
  1121 => 
  array (
    'city' => 'El Hoyo',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-27.02872',
    'longitude' => '-63.23197',
  ),
  1122 => 
  array (
    'city' => 'El Galpón',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-25.38069',
    'longitude' => '-64.65259',
  ),
  1123 => 
  array (
    'city' => 'Elena',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.57205',
    'longitude' => '-64.39481',
  ),
  1124 => 
  array (
    'city' => 'El Carril',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-25.0741',
    'longitude' => '-65.49174',
  ),
  1125 => 
  array (
    'city' => 'El Calafate',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-50.34075',
    'longitude' => '-72.27682',
  ),
  1126 => 
  array (
    'city' => 'El Bolsón',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-41.96667',
    'longitude' => '-71.51667',
  ),
  1127 => 
  array (
    'city' => 'El Arañado',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.7412',
    'longitude' => '-62.89322',
  ),
  1128 => 
  array (
    'city' => 'El Aguilar',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.22582',
    'longitude' => '-65.69213',
  ),
  1129 => 
  array (
    'city' => 'Eduardo Castex',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.91501',
    'longitude' => '-64.29448',
  ),
  1130 => 
  array (
    'city' => 'Dolavón',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-43.3',
    'longitude' => '-65.7',
  ),
  1131 => 
  array (
    'city' => 'Doblas',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-37.14967',
    'longitude' => '-64.01183',
  ),
  1132 => 
  array (
    'city' => 'Diamante',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.06641',
    'longitude' => '-60.63836',
  ),
  1133 => 
  array (
    'city' => 'Devoto',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.40431',
    'longitude' => '-62.30634',
  ),
  1134 => 
  array (
    'city' => 'Despeñaderos',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.81626',
    'longitude' => '-64.28989',
  ),
  1135 => 
  array (
    'city' => 'Del Campillo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.37659',
    'longitude' => '-64.49504',
  ),
  1136 => 
  array (
    'city' => 'Deán Funes',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.42036',
    'longitude' => '-64.34984',
  ),
  1137 => 
  array (
    'city' => 'Darwin',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.2',
    'longitude' => '-65.76667',
  ),
  1138 => 
  array (
    'city' => 'Dalmacio Vélez Sársfield',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.61072',
    'longitude' => '-63.58038',
  ),
  1139 => 
  array (
    'city' => 'Cutral-Có',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.94688',
    'longitude' => '-69.20889',
  ),
  1140 => 
  array (
    'city' => 'Cruz del Eje',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.72644',
    'longitude' => '-64.80387',
  ),
  1141 => 
  array (
    'city' => 'Cruz Alta',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.00887',
    'longitude' => '-61.80746',
  ),
  1142 => 
  array (
    'city' => 'Crespo',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.02873',
    'longitude' => '-60.30658',
  ),
  1143 => 
  array (
    'city' => 'Costa Sacate',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.6477',
    'longitude' => '-63.75935',
  ),
  1144 => 
  array (
    'city' => 'Cosquín',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.24508',
    'longitude' => '-64.46563',
  ),
  1145 => 
  array (
    'city' => 'Corzuela',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.95374',
    'longitude' => '-60.96928',
  ),
  1146 => 
  array (
    'city' => 'Corralito',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.02462',
    'longitude' => '-64.19216',
  ),
  1147 => 
  array (
    'city' => 'Corral de Bustos',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.28205',
    'longitude' => '-62.18463',
  ),
  1148 => 
  array (
    'city' => 'Coronel Suárez',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-37.45467',
    'longitude' => '-61.93343',
  ),
  1149 => 
  array (
    'city' => 'Coronel Moldes',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.6227',
    'longitude' => '-64.59711',
  ),
  1150 => 
  array (
    'city' => 'Coronel Du Graty',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.68038',
    'longitude' => '-60.91462',
  ),
  1151 => 
  array (
    'city' => 'Coronel Belisle',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.18333',
    'longitude' => '-65.98333',
  ),
  1152 => 
  array (
    'city' => 'Coronel Baigorria',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.8477',
    'longitude' => '-64.36107',
  ),
  1153 => 
  array (
    'city' => 'Coronda',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.97263',
    'longitude' => '-60.91982',
  ),
  1154 => 
  array (
    'city' => 'Córdoba',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.4135',
    'longitude' => '-64.18105',
  ),
  1155 => 
  array (
    'city' => 'Contraalmirante Cordero',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-38.72423',
    'longitude' => '-68.15284',
  ),
  1156 => 
  array (
    'city' => 'Concepción del Bermejo',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.59926',
    'longitude' => '-60.94617',
  ),
  1157 => 
  array (
    'city' => 'Concarán',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-32.56009',
    'longitude' => '-65.2427',
  ),
  1158 => 
  array (
    'city' => 'Comodoro Rivadavia',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-45.86667',
    'longitude' => '-67.5',
  ),
  1159 => 
  array (
    'city' => 'Comandante Luis Piedra Buena',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-49.98513',
    'longitude' => '-68.91467',
  ),
  1160 => 
  array (
    'city' => 'Comallo',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-41.02993',
    'longitude' => '-70.26784',
  ),
  1161 => 
  array (
    'city' => 'Colonia San Bartolomé',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.5278',
    'longitude' => '-62.72436',
  ),
  1162 => 
  array (
    'city' => 'Colonia La Tordilla',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.23746',
    'longitude' => '-63.06134',
  ),
  1163 => 
  array (
    'city' => 'Colonia Dora',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-28.6',
    'longitude' => '-62.95',
  ),
  1164 => 
  array (
    'city' => 'Colonia Barón',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.15152',
    'longitude' => '-63.85404',
  ),
  1165 => 
  array (
    'city' => 'Clodomira',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-27.5744',
    'longitude' => '-64.13108',
  ),
  1166 => 
  array (
    'city' => 'Cipolletti',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-38.93392',
    'longitude' => '-67.99032',
  ),
  1167 => 
  array (
    'city' => 'Cintra',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.30673',
    'longitude' => '-62.65214',
  ),
  1168 => 
  array (
    'city' => 'Cinco Saltos',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-38.82224',
    'longitude' => '-68.06293',
  ),
  1169 => 
  array (
    'city' => 'Chos Malal',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-37.37809',
    'longitude' => '-70.27085',
  ),
  1170 => 
  array (
    'city' => 'Chorotis',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.91578',
    'longitude' => '-61.39982',
  ),
  1171 => 
  array (
    'city' => 'Choele Choel',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.26667',
    'longitude' => '-65.68333',
  ),
  1172 => 
  array (
    'city' => 'Chivilcoy',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.89566',
    'longitude' => '-60.01667',
  ),
  1173 => 
  array (
    'city' => 'Chimpay',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.16482',
    'longitude' => '-66.14236',
  ),
  1174 => 
  array (
    'city' => 'Chimbas',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.48333',
    'longitude' => '-68.53333',
  ),
  1175 => 
  array (
    'city' => 'Chilecito',
    'region' => '12',
    'country' => 'AR',
    'latitude' => '-29.16195',
    'longitude' => '-67.4974',
  ),
  1176 => 
  array (
    'city' => 'Chicoana',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-25.10088',
    'longitude' => '-65.5331',
  ),
  1177 => 
  array (
    'city' => 'Chichinales',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.11505',
    'longitude' => '-66.92714',
  ),
  1178 => 
  array (
    'city' => 'Chazón',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.07872',
    'longitude' => '-63.27657',
  ),
  1179 => 
  array (
    'city' => 'Charras',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.024',
    'longitude' => '-64.04719',
  ),
  1180 => 
  array (
    'city' => 'Charata',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-27.21438',
    'longitude' => '-61.18795',
  ),
  1181 => 
  array (
    'city' => 'Chamical',
    'region' => '12',
    'country' => 'AR',
    'latitude' => '-30.36002',
    'longitude' => '-66.31399',
  ),
  1182 => 
  array (
    'city' => 'Chacabuco',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.64167',
    'longitude' => '-60.47389',
  ),
  1183 => 
  array (
    'city' => 'Cervantes',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-39.05',
    'longitude' => '-67.38333',
  ),
  1184 => 
  array (
    'city' => 'Ceres',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-29.881',
    'longitude' => '-61.94504',
  ),
  1185 => 
  array (
    'city' => 'Centenario',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.80433',
    'longitude' => '-68.13998',
  ),
  1186 => 
  array (
    'city' => 'Cavanagh',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.47606',
    'longitude' => '-62.33888',
  ),
  1187 => 
  array (
    'city' => 'Caucete',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.65179',
    'longitude' => '-68.28105',
  ),
  1188 => 
  array (
    'city' => 'Catriló',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.40598',
    'longitude' => '-63.42168',
  ),
  1189 => 
  array (
    'city' => 'Catriel',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-37.87907',
    'longitude' => '-67.7956',
  ),
  1190 => 
  array (
    'city' => 'Castro Barros',
    'region' => '12',
    'country' => 'AR',
    'latitude' => '-30.57952',
    'longitude' => '-65.72696',
  ),
  1191 => 
  array (
    'city' => 'Castelli',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-25.94679',
    'longitude' => '-60.61947',
  ),
  1192 => 
  array (
    'city' => 'Casilda',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-33.04417',
    'longitude' => '-61.16806',
  ),
  1193 => 
  array (
    'city' => 'Carrilobo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.87296',
    'longitude' => '-63.11716',
  ),
  1194 => 
  array (
    'city' => 'Carnerillo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.9137',
    'longitude' => '-64.02175',
  ),
  1195 => 
  array (
    'city' => 'Carcarañá',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.85679',
    'longitude' => '-61.15331',
  ),
  1196 => 
  array (
    'city' => 'Capitán Bermúdez',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.82262',
    'longitude' => '-60.71852',
  ),
  1197 => 
  array (
    'city' => 'Capilla del Monte',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.86088',
    'longitude' => '-64.52515',
  ),
  1198 => 
  array (
    'city' => 'Capayán',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.76105',
    'longitude' => '-66.05024',
  ),
  1199 => 
  array (
    'city' => 'Candelaria',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-32.06036',
    'longitude' => '-65.82477',
  ),
  1200 => 
  array (
    'city' => 'Canals',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.56542',
    'longitude' => '-62.88927',
  ),
  1201 => 
  array (
    'city' => 'Cañada de Luque',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.73341',
    'longitude' => '-63.72376',
  ),
  1202 => 
  array (
    'city' => 'Cañada de Gómez',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.81636',
    'longitude' => '-61.39493',
  ),
  1203 => 
  array (
    'city' => 'Campo Quijano',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-24.90982',
    'longitude' => '-65.63656',
  ),
  1204 => 
  array (
    'city' => 'Campo Largo',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.80077',
    'longitude' => '-60.84215',
  ),
  1205 => 
  array (
    'city' => 'Campo Gallo',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-26.58333',
    'longitude' => '-62.85',
  ),
  1206 => 
  array (
    'city' => 'Camilo Aldao',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.12745',
    'longitude' => '-62.09453',
  ),
  1207 => 
  array (
    'city' => 'Camarones',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-44.79709',
    'longitude' => '-65.70994',
  ),
  1208 => 
  array (
    'city' => 'Calingasta',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.33084',
    'longitude' => '-69.40783',
  ),
  1209 => 
  array (
    'city' => 'Calilegua',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.77368',
    'longitude' => '-64.77002',
  ),
  1210 => 
  array (
    'city' => 'Caleufú',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.59559',
    'longitude' => '-64.55778',
  ),
  1211 => 
  array (
    'city' => 'Caleta Olivia',
    'region' => '20',
    'country' => 'AR',
    'latitude' => '-46.43929',
    'longitude' => '-67.52814',
  ),
  1212 => 
  array (
    'city' => 'Calchaquí',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-29.88767',
    'longitude' => '-60.28696',
  ),
  1213 => 
  array (
    'city' => 'Caimancito',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-23.7407',
    'longitude' => '-64.5937',
  ),
  1214 => 
  array (
    'city' => 'Cafayate',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-26.07295',
    'longitude' => '-65.97614',
  ),
  1215 => 
  array (
    'city' => 'Cachí',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-25.12033',
    'longitude' => '-66.16519',
  ),
  1216 => 
  array (
    'city' => 'Buta Ranquil',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-37.05222',
    'longitude' => '-69.87713',
  ),
  1217 => 
  array (
    'city' => 'Burruyacú',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-26.49918',
    'longitude' => '-64.74206',
  ),
  1218 => 
  array (
    'city' => 'Buena Esperanza',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-34.75647',
    'longitude' => '-65.2538',
  ),
  1219 => 
  array (
    'city' => 'Buchardo',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-34.72263',
    'longitude' => '-63.5092',
  ),
  1220 => 
  array (
    'city' => 'Brinkmann',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.8659',
    'longitude' => '-62.03742',
  ),
  1221 => 
  array (
    'city' => 'Berrotarán',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.451',
    'longitude' => '-64.38867',
  ),
  1222 => 
  array (
    'city' => 'Bernasconi',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-37.90459',
    'longitude' => '-63.7424',
  ),
  1223 => 
  array (
    'city' => 'Bernardo Larroudé',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.02449',
    'longitude' => '-63.58253',
  ),
  1224 => 
  array (
    'city' => 'Beltrán',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-27.82913',
    'longitude' => '-64.06098',
  ),
  1225 => 
  array (
    'city' => 'Bell Ville',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.62591',
    'longitude' => '-62.68873',
  ),
  1226 => 
  array (
    'city' => 'Bella Vista',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-27.03084',
    'longitude' => '-65.30315',
  ),
  1227 => 
  array (
    'city' => 'Barrancas',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-36.81667',
    'longitude' => '-69.91667',
  ),
  1228 => 
  array (
    'city' => 'Balnearia',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.0088',
    'longitude' => '-62.66733',
  ),
  1229 => 
  array (
    'city' => 'Bahía Blanca',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-38.7196',
    'longitude' => '-62.27243',
  ),
  1230 => 
  array (
    'city' => 'Aviá Terai',
    'region' => '03',
    'country' => 'AR',
    'latitude' => '-26.68532',
    'longitude' => '-60.7292',
  ),
  1231 => 
  array (
    'city' => 'Arrufó',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-30.23281',
    'longitude' => '-61.72862',
  ),
  1232 => 
  array (
    'city' => 'Arroyo Seco',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-33.15489',
    'longitude' => '-60.50863',
  ),
  1233 => 
  array (
    'city' => 'Arroyo Cabral',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.49119',
    'longitude' => '-63.40126',
  ),
  1234 => 
  array (
    'city' => 'Arroyito',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.42022',
    'longitude' => '-63.05002',
  ),
  1235 => 
  array (
    'city' => 'Armstrong',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-32.78215',
    'longitude' => '-61.60222',
  ),
  1236 => 
  array (
    'city' => 'Arias',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.64411',
    'longitude' => '-62.40272',
  ),
  1237 => 
  array (
    'city' => 'Arauco',
    'region' => '12',
    'country' => 'AR',
    'latitude' => '-28.5805',
    'longitude' => '-66.79438',
  ),
  1238 => 
  array (
    'city' => 'Arata',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.63895',
    'longitude' => '-64.35621',
  ),
  1239 => 
  array (
    'city' => 'Aranguren',
    'region' => '08',
    'country' => 'AR',
    'latitude' => '-32.24252',
    'longitude' => '-60.16107',
  ),
  1240 => 
  array (
    'city' => 'Apolinario Saravia',
    'region' => '17',
    'country' => 'AR',
    'latitude' => '-24.43276',
    'longitude' => '-63.99535',
  ),
  1241 => 
  array (
    'city' => 'Anguil',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-36.52567',
    'longitude' => '-64.01025',
  ),
  1242 => 
  array (
    'city' => 'Añelo',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-38.35441',
    'longitude' => '-68.7884',
  ),
  1243 => 
  array (
    'city' => 'Andalgalá',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-27.58195',
    'longitude' => '-66.31646',
  ),
  1244 => 
  array (
    'city' => 'Andacollo',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-37.17945',
    'longitude' => '-70.66912',
  ),
  1245 => 
  array (
    'city' => 'Ancasti',
    'region' => '02',
    'country' => 'AR',
    'latitude' => '-28.81247',
    'longitude' => '-65.50145',
  ),
  1246 => 
  array (
    'city' => 'Añatuya',
    'region' => '22',
    'country' => 'AR',
    'latitude' => '-28.46064',
    'longitude' => '-62.83472',
  ),
  1247 => 
  array (
    'city' => 'Aluminé',
    'region' => '15',
    'country' => 'AR',
    'latitude' => '-39.23686',
    'longitude' => '-70.9197',
  ),
  1248 => 
  array (
    'city' => 'Altos de Chipión',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-30.9559',
    'longitude' => '-62.33727',
  ),
  1249 => 
  array (
    'city' => 'Alto Río Senguer',
    'region' => '04',
    'country' => 'AR',
    'latitude' => '-45.04105',
    'longitude' => '-70.81982',
  ),
  1250 => 
  array (
    'city' => 'Alta Italia',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-35.3335',
    'longitude' => '-64.11496',
  ),
  1251 => 
  array (
    'city' => 'Alta Gracia',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.65292',
    'longitude' => '-64.42826',
  ),
  1252 => 
  array (
    'city' => 'Alpachiri',
    'region' => '11',
    'country' => 'AR',
    'latitude' => '-37.37704',
    'longitude' => '-63.77445',
  ),
  1253 => 
  array (
    'city' => 'Almafuerte',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-32.19296',
    'longitude' => '-64.25559',
  ),
  1254 => 
  array (
    'city' => 'Allen',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-38.97736',
    'longitude' => '-67.82714',
  ),
  1255 => 
  array (
    'city' => 'Alejo Ledesma',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.60643',
    'longitude' => '-62.62304',
  ),
  1256 => 
  array (
    'city' => 'Alejandro Roca',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.35369',
    'longitude' => '-63.71849',
  ),
  1257 => 
  array (
    'city' => 'Alderetes',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-26.81667',
    'longitude' => '-65.13333',
  ),
  1258 => 
  array (
    'city' => 'Albardón',
    'region' => '18',
    'country' => 'AR',
    'latitude' => '-31.43722',
    'longitude' => '-68.52556',
  ),
  1259 => 
  array (
    'city' => 'Aguilares',
    'region' => '24',
    'country' => 'AR',
    'latitude' => '-27.4338',
    'longitude' => '-65.61427',
  ),
  1260 => 
  array (
    'city' => 'Agua de Oro',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.06661',
    'longitude' => '-64.30017',
  ),
  1261 => 
  array (
    'city' => 'Adelia María',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.63152',
    'longitude' => '-64.02097',
  ),
  1262 => 
  array (
    'city' => 'Achiras',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-33.17538',
    'longitude' => '-64.99331',
  ),
  1263 => 
  array (
    'city' => 'Abra Pampa',
    'region' => '10',
    'country' => 'AR',
    'latitude' => '-22.72049',
    'longitude' => '-65.69697',
  ),
  1264 => 
  array (
    'city' => 'Villa Santa Rita',
    'region' => '07',
    'country' => 'AR',
    'latitude' => '-34.61082',
    'longitude' => '-58.481',
  ),
  1265 => 
  array (
    'city' => 'Bella Italia',
    'region' => '21',
    'country' => 'AR',
    'latitude' => '-31.27268',
    'longitude' => '-61.42396',
  ),
  1266 => 
  array (
    'city' => 'Villa Mercedes',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-33.67571',
    'longitude' => '-65.45783',
  ),
  1267 => 
  array (
    'city' => 'La Punta',
    'region' => '19',
    'country' => 'AR',
    'latitude' => '-33.18368',
    'longitude' => '-66.3127',
  ),
  1268 => 
  array (
    'city' => 'Villa Berna',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.90321',
    'longitude' => '-64.75651',
  ),
  1269 => 
  array (
    'city' => 'Cuesta Blanca',
    'region' => '05',
    'country' => 'AR',
    'latitude' => '-31.48658',
    'longitude' => '-64.5715',
  ),
  1270 => 
  array (
    'city' => 'Avellaneda',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.66018',
    'longitude' => '-58.36744',
  ),
  1271 => 
  array (
    'city' => 'San Carlos de Bariloche',
    'region' => '16',
    'country' => 'AR',
    'latitude' => '-41.14557',
    'longitude' => '-71.30822',
  ),
  1272 => 
  array (
    'city' => 'Santa Catalina - Dique Lujan',
    'region' => '01',
    'country' => 'AR',
    'latitude' => '-34.38375',
    'longitude' => '-58.70673',
  ),
  1273 => 
  array (
    'city' => 'Aūa',
    'region' => '010',
    'country' => 'AS',
    'latitude' => '-14.27611',
    'longitude' => '-170.66389',
  ),
  1274 => 
  array (
    'city' => 'Vaitogi',
    'region' => '050',
    'country' => 'AS',
    'latitude' => '-14.35889',
    'longitude' => '-170.73472',
  ),
  1275 => 
  array (
    'city' => 'Vailoatai',
    'region' => '00',
    'country' => 'AS',
    'latitude' => '-14.3552',
    'longitude' => '-170.78329',
  ),
  1276 => 
  array (
    'city' => 'Tāfuna',
    'region' => '050',
    'country' => 'AS',
    'latitude' => '-14.33583',
    'longitude' => '-170.72',
  ),
  1277 => 
  array (
    'city' => 'Faleniu',
    'region' => '050',
    'country' => 'AS',
    'latitude' => '-14.3325',
    'longitude' => '-170.74444',
  ),
  1278 => 
  array (
    'city' => 'Fagatogo',
    'region' => '010',
    'country' => 'AS',
    'latitude' => '-14.2825',
    'longitude' => '-170.69',
  ),
  1279 => 
  array (
    'city' => 'Leone',
    'region' => '050',
    'country' => 'AS',
    'latitude' => '-14.34389',
    'longitude' => '-170.785',
  ),
  1280 => 
  array (
    'city' => 'Malaeimi',
    'region' => '050',
    'country' => 'AS',
    'latitude' => '-14.32278',
    'longitude' => '-170.73389',
  ),
  1281 => 
  array (
    'city' => 'Mapusagafou',
    'region' => '050',
    'country' => 'AS',
    'latitude' => '-14.33056',
    'longitude' => '-170.75278',
  ),
  1282 => 
  array (
    'city' => 'Pago Pago',
    'region' => '010',
    'country' => 'AS',
    'latitude' => '-14.27806',
    'longitude' => '-170.7025',
  ),
  1283 => 
  array (
    'city' => 'Neu-Guntramsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.0642',
    'longitude' => '16.31573',
  ),
  1284 => 
  array (
    'city' => 'Kleinarl',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.27725',
    'longitude' => '13.31955',
  ),
  1285 => 
  array (
    'city' => 'Edelstauden',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.98333',
    'longitude' => '15.61667',
  ),
  1286 => 
  array (
    'city' => 'Neuhaus am Klausenbach',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '46.86667',
    'longitude' => '16.03333',
  ),
  1287 => 
  array (
    'city' => 'Millstatt',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.80417',
    'longitude' => '13.58056',
  ),
  1288 => 
  array (
    'city' => 'Zwölfaxing',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1099',
    'longitude' => '16.46267',
  ),
  1289 => 
  array (
    'city' => 'Zwettl Stift',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.61667',
    'longitude' => '15.2',
  ),
  1290 => 
  array (
    'city' => 'Zwettl an der Rodl',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.46667',
    'longitude' => '14.26667',
  ),
  1291 => 
  array (
    'city' => 'Zurndorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.98314',
    'longitude' => '17.00315',
  ),
  1292 => 
  array (
    'city' => 'Zöblen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '10.48333',
  ),
  1293 => 
  array (
    'city' => 'Zöbern',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '16.11667',
  ),
  1294 => 
  array (
    'city' => 'Zistersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.53333',
    'longitude' => '16.75',
  ),
  1295 => 
  array (
    'city' => 'Zirl',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.23333',
  ),
  1296 => 
  array (
    'city' => 'Zillingtal',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.81667',
    'longitude' => '16.4',
  ),
  1297 => 
  array (
    'city' => 'Zillingdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.85',
    'longitude' => '16.33333',
  ),
  1298 => 
  array (
    'city' => 'Ziersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.51667',
    'longitude' => '15.91667',
  ),
  1299 => 
  array (
    'city' => 'Zeutschach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '14.36667',
  ),
  1300 => 
  array (
    'city' => 'Zettling',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.95',
    'longitude' => '15.41667',
  ),
  1301 => 
  array (
    'city' => 'Zerlach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.93333',
    'longitude' => '15.65',
  ),
  1302 => 
  array (
    'city' => 'Zeltweg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '14.75',
  ),
  1303 => 
  array (
    'city' => 'Zellerndorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.68333',
    'longitude' => '15.95',
  ),
  1304 => 
  array (
    'city' => 'Zellberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '11.85',
  ),
  1305 => 
  array (
    'city' => 'Zell am Ziller',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '11.88333',
  ),
  1306 => 
  array (
    'city' => 'Zell am See',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.32556',
    'longitude' => '12.79444',
  ),
  1307 => 
  array (
    'city' => 'Zell am Pettenfirst',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '13.58333',
  ),
  1308 => 
  array (
    'city' => 'Zell am Moos',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.9',
    'longitude' => '13.31667',
  ),
  1309 => 
  array (
    'city' => 'Zeillern',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11667',
    'longitude' => '14.8',
  ),
  1310 => 
  array (
    'city' => 'Zederhaus',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '13.5',
  ),
  1311 => 
  array (
    'city' => 'Zams',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.15844',
    'longitude' => '10.5897',
  ),
  1312 => 
  array (
    'city' => 'Zagersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.76667',
    'longitude' => '16.51667',
  ),
  1313 => 
  array (
    'city' => 'Ybbsitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.93333',
    'longitude' => '14.88333',
  ),
  1314 => 
  array (
    'city' => 'Ybbs an der Donau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.16667',
    'longitude' => '15.08333',
  ),
  1315 => 
  array (
    'city' => 'Würmla',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.25497',
    'longitude' => '15.86031',
  ),
  1316 => 
  array (
    'city' => 'Würflach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.77648',
    'longitude' => '16.05463',
  ),
  1317 => 
  array (
    'city' => 'Wundschuh',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.92639',
    'longitude' => '15.45111',
  ),
  1318 => 
  array (
    'city' => 'Wullersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.61667',
    'longitude' => '16.1',
  ),
  1319 => 
  array (
    'city' => 'Wulkaprodersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.8',
    'longitude' => '16.5',
  ),
  1320 => 
  array (
    'city' => 'Wörth an der Lafnitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '16.06667',
  ),
  1321 => 
  array (
    'city' => 'Wörterberg',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '16.1',
  ),
  1322 => 
  array (
    'city' => 'Wörschach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.55',
    'longitude' => '14.15',
  ),
  1323 => 
  array (
    'city' => 'Wörgl',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '12.06667',
  ),
  1324 => 
  array (
    'city' => 'Wördern',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.334',
    'longitude' => '16.21016',
  ),
  1325 => 
  array (
    'city' => 'Wolkersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.38333',
    'longitude' => '16.51667',
  ),
  1326 => 
  array (
    'city' => 'Wolfurt',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '9.75',
  ),
  1327 => 
  array (
    'city' => 'Wolfsthal',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '17',
  ),
  1328 => 
  array (
    'city' => 'Wolfsgraben',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1587',
    'longitude' => '16.12098',
  ),
  1329 => 
  array (
    'city' => 'Wolfsegg am Hausruck',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.10669',
    'longitude' => '13.67274',
  ),
  1330 => 
  array (
    'city' => 'Wolfsberg im Schwarzautal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.84389',
    'longitude' => '15.65889',
  ),
  1331 => 
  array (
    'city' => 'Wolfsberg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.84056',
    'longitude' => '14.84417',
  ),
  1332 => 
  array (
    'city' => 'Wolfsbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '14.66667',
  ),
  1333 => 
  array (
    'city' => 'Wolfpassing',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '15.05',
  ),
  1334 => 
  array (
    'city' => 'Wolfau',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '16.1',
  ),
  1335 => 
  array (
    'city' => 'Winklern bei Oberwölz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '14.23333',
  ),
  1336 => 
  array (
    'city' => 'Winklern',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.87361',
    'longitude' => '12.87472',
  ),
  1337 => 
  array (
    'city' => 'Winklarn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08333',
    'longitude' => '14.83333',
  ),
  1338 => 
  array (
    'city' => 'Windigsteig',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.76667',
    'longitude' => '15.28333',
  ),
  1339 => 
  array (
    'city' => 'Winden am See',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '16.75',
  ),
  1340 => 
  array (
    'city' => 'Wimpassing an der Leitha',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.91667',
    'longitude' => '16.43333',
  ),
  1341 => 
  array (
    'city' => 'Wimpassing im Schwarzatale',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.70295',
    'longitude' => '16.03334',
  ),
  1342 => 
  array (
    'city' => 'Willendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.78929',
    'longitude' => '16.05686',
  ),
  1343 => 
  array (
    'city' => 'Wilhelmsburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.10571',
    'longitude' => '15.60539',
  ),
  1344 => 
  array (
    'city' => 'Wilfersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.58333',
    'longitude' => '16.63333',
  ),
  1345 => 
  array (
    'city' => 'Wildon',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.88333',
    'longitude' => '15.51667',
  ),
  1346 => 
  array (
    'city' => 'Wildermieming',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '11.01667',
  ),
  1347 => 
  array (
    'city' => 'Wildalpen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.65',
    'longitude' => '14.98333',
  ),
  1348 => 
  array (
    'city' => 'Wiesmath',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.61667',
    'longitude' => '16.28333',
  ),
  1349 => 
  array (
    'city' => 'Wiesing',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.40486',
    'longitude' => '11.79708',
  ),
  1350 => 
  array (
    'city' => 'Wiesfleck',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '16.13333',
  ),
  1351 => 
  array (
    'city' => 'Wiesen',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.73333',
    'longitude' => '16.33333',
  ),
  1352 => 
  array (
    'city' => 'Wieselburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '15.13333',
  ),
  1353 => 
  array (
    'city' => 'Wies',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.72028',
    'longitude' => '15.27194',
  ),
  1354 => 
  array (
    'city' => 'Wiener Neustadt',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.8',
    'longitude' => '16.25',
  ),
  1355 => 
  array (
    'city' => 'Wiener Neudorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08278',
    'longitude' => '16.31384',
  ),
  1356 => 
  array (
    'city' => 'Vienna',
    'region' => '09',
    'country' => 'AT',
    'latitude' => '48.20849',
    'longitude' => '16.37208',
  ),
  1357 => 
  array (
    'city' => 'Weyer Markt',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.85',
    'longitude' => '14.66667',
  ),
  1358 => 
  array (
    'city' => 'Wettmannstätten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.83056',
    'longitude' => '15.38722',
  ),
  1359 => 
  array (
    'city' => 'Westendorf',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '12.21667',
  ),
  1360 => 
  array (
    'city' => 'Wernersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.71667',
    'longitude' => '15.2',
  ),
  1361 => 
  array (
    'city' => 'Werndorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.92417',
    'longitude' => '15.49083',
  ),
  1362 => 
  array (
    'city' => 'Wernberg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.61667',
    'longitude' => '13.93333',
  ),
  1363 => 
  array (
    'city' => 'Werfenweng',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '13.25',
  ),
  1364 => 
  array (
    'city' => 'Werfen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '13.18333',
  ),
  1365 => 
  array (
    'city' => 'Weppersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '16.43333',
  ),
  1366 => 
  array (
    'city' => 'Wenns',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '10.73333',
  ),
  1367 => 
  array (
    'city' => 'Wels',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.16667',
    'longitude' => '14.03333',
  ),
  1368 => 
  array (
    'city' => 'Weiz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '15.61667',
  ),
  1369 => 
  array (
    'city' => 'Weitra',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.7',
    'longitude' => '14.88333',
  ),
  1370 => 
  array (
    'city' => 'Weitersfeld',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.76667',
    'longitude' => '15.8',
  ),
  1371 => 
  array (
    'city' => 'Weitendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.89611',
    'longitude' => '15.46694',
  ),
  1372 => 
  array (
    'city' => 'Weiten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.28333',
    'longitude' => '15.25',
  ),
  1373 => 
  array (
    'city' => 'Weistrach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.05',
    'longitude' => '14.58333',
  ),
  1374 => 
  array (
    'city' => 'Weißkirchen in Steiermark',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '14.73333',
  ),
  1375 => 
  array (
    'city' => 'Weißenbach bei Liezen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '14.21667',
  ),
  1376 => 
  array (
    'city' => 'Weissenbach an der Triesting',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.98211',
    'longitude' => '16.03935',
  ),
  1377 => 
  array (
    'city' => 'Weinzierl bei Krems',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.4',
    'longitude' => '15.6',
  ),
  1378 => 
  array (
    'city' => 'Weinzierl am Walde',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.41667',
    'longitude' => '15.43333',
  ),
  1379 => 
  array (
    'city' => 'Weingraben',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '16.36667',
  ),
  1380 => 
  array (
    'city' => 'Weinburg am Saßbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.75361',
    'longitude' => '15.72111',
  ),
  1381 => 
  array (
    'city' => 'Weinburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11351',
    'longitude' => '15.53295',
  ),
  1382 => 
  array (
    'city' => 'Weiler',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.29972',
    'longitude' => '9.65',
  ),
  1383 => 
  array (
    'city' => 'Weikersdorf am Steinfelde',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.80612',
    'longitude' => '16.14389',
  ),
  1384 => 
  array (
    'city' => 'Weikendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.34438',
    'longitude' => '16.76651',
  ),
  1385 => 
  array (
    'city' => 'Weiden bei Rechnitz',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '16.35',
  ),
  1386 => 
  array (
    'city' => 'Weiden am See',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.92532',
    'longitude' => '16.86899',
  ),
  1387 => 
  array (
    'city' => 'Weichselbaum',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '46.9425',
    'longitude' => '16.1875',
  ),
  1388 => 
  array (
    'city' => 'Weer',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.63333',
  ),
  1389 => 
  array (
    'city' => 'Wattens',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.6',
  ),
  1390 => 
  array (
    'city' => 'Wattenberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.6',
  ),
  1391 => 
  array (
    'city' => 'Wartmannstetten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.69359',
    'longitude' => '16.07506',
  ),
  1392 => 
  array (
    'city' => 'Warth',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.65',
    'longitude' => '16.11667',
  ),
  1393 => 
  array (
    'city' => 'Warth',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '10.18333',
  ),
  1394 => 
  array (
    'city' => 'Wängle',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '10.68333',
  ),
  1395 => 
  array (
    'city' => 'Wang',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.04538',
    'longitude' => '15.02672',
  ),
  1396 => 
  array (
    'city' => 'Walpersbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.71667',
    'longitude' => '16.23333',
  ),
  1397 => 
  array (
    'city' => 'Wallern im Burgenland',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.72847',
    'longitude' => '16.93706',
  ),
  1398 => 
  array (
    'city' => 'Waldzell',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.13562',
    'longitude' => '13.42701',
  ),
  1399 => 
  array (
    'city' => 'Waldneukirchen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.99854',
    'longitude' => '14.25879',
  ),
  1400 => 
  array (
    'city' => 'Waldkirchen an der Thaya',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.93333',
    'longitude' => '15.35',
  ),
  1401 => 
  array (
    'city' => 'Walding',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.35',
    'longitude' => '14.16667',
  ),
  1402 => 
  array (
    'city' => 'Wald im Pinzgau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '12.23333',
  ),
  1403 => 
  array (
    'city' => 'Waldhausen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.51667',
    'longitude' => '15.25',
  ),
  1404 => 
  array (
    'city' => 'Waldenstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.71667',
    'longitude' => '15.01667',
  ),
  1405 => 
  array (
    'city' => 'Waldegg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.86852',
    'longitude' => '16.05154',
  ),
  1406 => 
  array (
    'city' => 'Wald am Schoberpaß',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.45',
    'longitude' => '14.66667',
  ),
  1407 => 
  array (
    'city' => 'Walchsee',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.65163',
    'longitude' => '12.31868',
  ),
  1408 => 
  array (
    'city' => 'Waidring',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '12.56667',
  ),
  1409 => 
  array (
    'city' => 'Waidmannsfeld',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.87042',
    'longitude' => '15.98116',
  ),
  1410 => 
  array (
    'city' => 'Waidhofen an der Ybbs',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.96004',
    'longitude' => '14.77361',
  ),
  1411 => 
  array (
    'city' => 'Waidhofen an der Thaya',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.81667',
    'longitude' => '15.28333',
  ),
  1412 => 
  array (
    'city' => 'Wagrain',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.33528',
    'longitude' => '13.29889',
  ),
  1413 => 
  array (
    'city' => 'Wagna',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.75',
    'longitude' => '15.55',
  ),
  1414 => 
  array (
    'city' => 'Vösendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.12107',
    'longitude' => '16.34036',
  ),
  1415 => 
  array (
    'city' => 'Murau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.11056',
    'longitude' => '14.16944',
  ),
  1416 => 
  array (
    'city' => 'Vordernberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '15',
  ),
  1417 => 
  array (
    'city' => 'Vorderhornbach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '10.53333',
  ),
  1418 => 
  array (
    'city' => 'Vorchdorf',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.00388',
    'longitude' => '13.92122',
  ),
  1419 => 
  array (
    'city' => 'Vorau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '15.88333',
  ),
  1420 => 
  array (
    'city' => 'Vomp',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.33333',
    'longitude' => '11.68333',
  ),
  1421 => 
  array (
    'city' => 'Völs',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '11.33333',
  ),
  1422 => 
  array (
    'city' => 'Völkermarkt',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.66222',
    'longitude' => '14.63444',
  ),
  1423 => 
  array (
    'city' => 'Volders',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.56667',
  ),
  1424 => 
  array (
    'city' => 'Voitsberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '15.15',
  ),
  1425 => 
  array (
    'city' => 'Vöcklamarkt',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.0025',
    'longitude' => '13.48383',
  ),
  1426 => 
  array (
    'city' => 'Vöcklabruck',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '13.65',
  ),
  1427 => 
  array (
    'city' => 'Vitis',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.75964',
    'longitude' => '15.18259',
  ),
  1428 => 
  array (
    'city' => 'Virgen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47',
    'longitude' => '12.45',
  ),
  1429 => 
  array (
    'city' => 'Vils',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.55',
    'longitude' => '10.63333',
  ),
  1430 => 
  array (
    'city' => 'Villach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.61028',
    'longitude' => '13.85583',
  ),
  1431 => 
  array (
    'city' => 'Viktorsberg',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.29972',
    'longitude' => '9.66667',
  ),
  1432 => 
  array (
    'city' => 'Viehhofen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '12.73333',
  ),
  1433 => 
  array (
    'city' => 'Velden am Wörthersee',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.61301',
    'longitude' => '14.0413',
  ),
  1434 => 
  array (
    'city' => 'Veitsch',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.57815',
    'longitude' => '15.4945',
  ),
  1435 => 
  array (
    'city' => 'Uttendorf',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '12.56667',
  ),
  1436 => 
  array (
    'city' => 'Unterwart',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '16.23333',
  ),
  1437 => 
  array (
    'city' => 'Untertauern',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '13.5',
  ),
  1438 => 
  array (
    'city' => 'Unterstinkenbrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.66667',
    'longitude' => '16.33333',
  ),
  1439 => 
  array (
    'city' => 'Untersiebenbrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.25',
    'longitude' => '16.73333',
  ),
  1440 => 
  array (
    'city' => 'Rohrbach an der Gölsen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.04699',
    'longitude' => '15.74169',
  ),
  1441 => 
  array (
    'city' => 'Unterpremstätten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.96472',
    'longitude' => '15.40417',
  ),
  1442 => 
  array (
    'city' => 'Unterperfuss',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '11.25',
  ),
  1443 => 
  array (
    'city' => 'Unterlamm',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.97694',
    'longitude' => '16.06389',
  ),
  1444 => 
  array (
    'city' => 'Unterkohlstätten',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '16.31667',
  ),
  1445 => 
  array (
    'city' => 'Grünburg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.97234',
    'longitude' => '14.26472',
  ),
  1446 => 
  array (
    'city' => 'Unterfrauenhaid',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '16.5',
  ),
  1447 => 
  array (
    'city' => 'Unterfladnitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '15.66667',
  ),
  1448 => 
  array (
    'city' => 'Unterbergla',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.8',
    'longitude' => '15.31667',
  ),
  1449 => 
  array (
    'city' => 'Unterbergla',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.73333',
    'longitude' => '15.28333',
  ),
  1450 => 
  array (
    'city' => 'Unterauersbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.86556',
    'longitude' => '15.77028',
  ),
  1451 => 
  array (
    'city' => 'Unken',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.65',
    'longitude' => '12.71667',
  ),
  1452 => 
  array (
    'city' => 'Ungerdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '15.66667',
  ),
  1453 => 
  array (
    'city' => 'Ungenach',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.05',
    'longitude' => '13.61667',
  ),
  1454 => 
  array (
    'city' => 'Umhausen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '10.93333',
  ),
  1455 => 
  array (
    'city' => 'Ulrichsberg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.67498',
    'longitude' => '13.91049',
  ),
  1456 => 
  array (
    'city' => 'Uderns',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '11.86667',
  ),
  1457 => 
  array (
    'city' => 'Übersbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '16.05',
  ),
  1458 => 
  array (
    'city' => 'Übersaxen',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.25284',
    'longitude' => '9.6708',
  ),
  1459 => 
  array (
    'city' => 'Übelbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.22534',
    'longitude' => '15.23615',
  ),
  1460 => 
  array (
    'city' => 'Tweng',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '13.6',
  ),
  1461 => 
  array (
    'city' => 'Türnitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.93095',
    'longitude' => '15.49295',
  ),
  1462 => 
  array (
    'city' => 'Turnau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.55',
    'longitude' => '15.33333',
  ),
  1463 => 
  array (
    'city' => 'Tulln',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.32829',
    'longitude' => '16.05858',
  ),
  1464 => 
  array (
    'city' => 'Tulfes',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '11.53333',
  ),
  1465 => 
  array (
    'city' => 'Tulbing',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.29336',
    'longitude' => '16.12226',
  ),
  1466 => 
  array (
    'city' => 'Tschanigraben',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '16.3',
  ),
  1467 => 
  array (
    'city' => 'Tschagguns',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '9.9',
  ),
  1468 => 
  array (
    'city' => 'Trumau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.99348',
    'longitude' => '16.34268',
  ),
  1469 => 
  array (
    'city' => 'Trössing',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.81667',
    'longitude' => '15.81667',
  ),
  1470 => 
  array (
    'city' => 'Trofaiach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '15',
  ),
  1471 => 
  array (
    'city' => 'Tristach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.81611',
    'longitude' => '12.78972',
  ),
  1472 => 
  array (
    'city' => 'Trins',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '11.41667',
  ),
  1473 => 
  array (
    'city' => 'Triebendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '14.23333',
  ),
  1474 => 
  array (
    'city' => 'Trieben',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '14.48333',
  ),
  1475 => 
  array (
    'city' => 'Treglwang',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '14.58333',
  ),
  1476 => 
  array (
    'city' => 'Trebesing',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.88639',
    'longitude' => '13.51028',
  ),
  1477 => 
  array (
    'city' => 'Trautmannsdorf in Oststeiermark',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.86667',
    'longitude' => '15.88333',
  ),
  1478 => 
  array (
    'city' => 'Trautmannsdorf an der Leitha',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '16.63333',
  ),
  1479 => 
  array (
    'city' => 'Trausdorf an der Wulka',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.8135',
    'longitude' => '16.5576',
  ),
  1480 => 
  array (
    'city' => 'Traunstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.43333',
    'longitude' => '15.1',
  ),
  1481 => 
  array (
    'city' => 'Traun',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.22656',
    'longitude' => '14.23459',
  ),
  1482 => 
  array (
    'city' => 'Trattenbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '15.86667',
  ),
  1483 => 
  array (
    'city' => 'Traismauer',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.35',
    'longitude' => '15.73333',
  ),
  1484 => 
  array (
    'city' => 'Traiskirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01485',
    'longitude' => '16.29324',
  ),
  1485 => 
  array (
    'city' => 'Traisen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.03333',
    'longitude' => '15.6',
  ),
  1486 => 
  array (
    'city' => 'Trahütten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.825',
    'longitude' => '15.15694',
  ),
  1487 => 
  array (
    'city' => 'Traboch',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '14.98333',
  ),
  1488 => 
  array (
    'city' => 'Tobaj',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '16.3',
  ),
  1489 => 
  array (
    'city' => 'Tobadill',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '10.51667',
  ),
  1490 => 
  array (
    'city' => 'Timelkam',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.00394',
    'longitude' => '13.6076',
  ),
  1491 => 
  array (
    'city' => 'Tieschen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.78611',
    'longitude' => '15.94222',
  ),
  1492 => 
  array (
    'city' => 'Tiefgraben',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.88333',
    'longitude' => '13.35',
  ),
  1493 => 
  array (
    'city' => 'Thüringen',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '9.76667',
  ),
  1494 => 
  array (
    'city' => 'Thörl',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '15.21667',
  ),
  1495 => 
  array (
    'city' => 'Thomatal',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '13.75',
  ),
  1496 => 
  array (
    'city' => 'Thomasberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '16.13333',
  ),
  1497 => 
  array (
    'city' => 'Theresienfeld',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.85',
    'longitude' => '16.23333',
  ),
  1498 => 
  array (
    'city' => 'Thaya',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.85489',
    'longitude' => '15.28902',
  ),
  1499 => 
  array (
    'city' => 'Thaur',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.46667',
  ),
  1500 => 
  array (
    'city' => 'Thalheim bei Wels',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.15',
    'longitude' => '14.03333',
  ),
  1501 => 
  array (
    'city' => 'Thalgau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.83333',
    'longitude' => '13.25',
  ),
  1502 => 
  array (
    'city' => 'Teufenbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '14.35',
  ),
  1503 => 
  array (
    'city' => 'Ternitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.71565',
    'longitude' => '16.03575',
  ),
  1504 => 
  array (
    'city' => 'Ternberg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.93333',
    'longitude' => '14.35',
  ),
  1505 => 
  array (
    'city' => 'Terfens',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '11.65',
  ),
  1506 => 
  array (
    'city' => 'Telfs',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.06667',
  ),
  1507 => 
  array (
    'city' => 'Telfes im Stubai',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '11.36667',
  ),
  1508 => 
  array (
    'city' => 'Teesdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '16.28333',
  ),
  1509 => 
  array (
    'city' => 'Taxenbach',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '12.96667',
  ),
  1510 => 
  array (
    'city' => 'Tauplitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.56005',
    'longitude' => '14.01293',
  ),
  1511 => 
  array (
    'city' => 'Tattendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '16.3',
  ),
  1512 => 
  array (
    'city' => 'Tarrenz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '10.76667',
  ),
  1513 => 
  array (
    'city' => 'Tannheim',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '10.51667',
  ),
  1514 => 
  array (
    'city' => 'Tamsweg',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.12808',
    'longitude' => '13.81102',
  ),
  1515 => 
  array (
    'city' => 'Tadten',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.76667',
    'longitude' => '16.98333',
  ),
  1516 => 
  array (
    'city' => 'Sulzberg',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '9.9',
  ),
  1517 => 
  array (
    'city' => 'Sulz',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.28721',
    'longitude' => '9.65183',
  ),
  1518 => 
  array (
    'city' => 'Sulztal an der Weinstraße',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.68333',
    'longitude' => '15.55',
  ),
  1519 => 
  array (
    'city' => 'Stummerberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.91667',
  ),
  1520 => 
  array (
    'city' => 'Stumm',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.88333',
  ),
  1521 => 
  array (
    'city' => 'Stuhlfelden',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '12.51667',
  ),
  1522 => 
  array (
    'city' => 'Studenzen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.00583',
    'longitude' => '15.75417',
  ),
  1523 => 
  array (
    'city' => 'Stubenberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '15.8',
  ),
  1524 => 
  array (
    'city' => 'Stronsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.65',
    'longitude' => '16.28333',
  ),
  1525 => 
  array (
    'city' => 'Strobl',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.71667',
    'longitude' => '13.48333',
  ),
  1526 => 
  array (
    'city' => 'Strengen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '10.45',
  ),
  1527 => 
  array (
    'city' => 'Strengberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '14.63333',
  ),
  1528 => 
  array (
    'city' => 'Strem',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '16.41667',
  ),
  1529 => 
  array (
    'city' => 'Stratzing',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.45',
    'longitude' => '15.6',
  ),
  1530 => 
  array (
    'city' => 'Strasswalchen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.98333',
    'longitude' => '13.25',
  ),
  1531 => 
  array (
    'city' => 'Straß in Steiermark',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.72722',
    'longitude' => '15.62444',
  ),
  1532 => 
  array (
    'city' => 'Strasshof an der Nordbahn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.31667',
    'longitude' => '16.66667',
  ),
  1533 => 
  array (
    'city' => 'Strassen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.75389',
    'longitude' => '12.48417',
  ),
  1534 => 
  array (
    'city' => 'Straßburg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.89444',
    'longitude' => '14.32861',
  ),
  1535 => 
  array (
    'city' => 'Strass im Zillertal',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.39556',
    'longitude' => '11.81966',
  ),
  1536 => 
  array (
    'city' => 'Strallegg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '15.71667',
  ),
  1537 => 
  array (
    'city' => 'Straden',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.80917',
    'longitude' => '15.86806',
  ),
  1538 => 
  array (
    'city' => 'Stotzing',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.9',
    'longitude' => '16.55',
  ),
  1539 => 
  array (
    'city' => 'Stössing',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.12267',
    'longitude' => '15.81379',
  ),
  1540 => 
  array (
    'city' => 'Stoob',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '16.46667',
  ),
  1541 => 
  array (
    'city' => 'Stocking',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.88333',
    'longitude' => '15.53333',
  ),
  1542 => 
  array (
    'city' => 'Stockerau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.38333',
    'longitude' => '16.21667',
  ),
  1543 => 
  array (
    'city' => 'Stockenboi',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.72611',
    'longitude' => '13.52306',
  ),
  1544 => 
  array (
    'city' => 'Stiwoll',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '15.21667',
  ),
  1545 => 
  array (
    'city' => 'Steinbrunn',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.83333',
    'longitude' => '16.41667',
  ),
  1546 => 
  array (
    'city' => 'Stinatz',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '16.11667',
  ),
  1547 => 
  array (
    'city' => 'Steyregg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.28513',
    'longitude' => '14.36995',
  ),
  1548 => 
  array (
    'city' => 'Steyr',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.04274',
    'longitude' => '14.42127',
  ),
  1549 => 
  array (
    'city' => 'Steuerberg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.78333',
    'longitude' => '14.11667',
  ),
  1550 => 
  array (
    'city' => 'Stetten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.36667',
    'longitude' => '16.38333',
  ),
  1551 => 
  array (
    'city' => 'Stetteldorf am Wagram',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.4',
    'longitude' => '16.01667',
  ),
  1552 => 
  array (
    'city' => 'Stenzengreith',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '15.51667',
  ),
  1553 => 
  array (
    'city' => 'Steinhaus',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.11614',
    'longitude' => '14.0189',
  ),
  1554 => 
  array (
    'city' => 'Steinfeld',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.76556',
    'longitude' => '13.27167',
  ),
  1555 => 
  array (
    'city' => 'Steindorf am Ossiacher See',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.69833',
    'longitude' => '14.00917',
  ),
  1556 => 
  array (
    'city' => 'Steinbach am Attersee',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.81667',
    'longitude' => '13.55',
  ),
  1557 => 
  array (
    'city' => 'Steinakirchen am Forst',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '15.03333',
  ),
  1558 => 
  array (
    'city' => 'Steinach am Brenner',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '11.46667',
  ),
  1559 => 
  array (
    'city' => 'Stein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.99778',
    'longitude' => '16.08694',
  ),
  1560 => 
  array (
    'city' => 'Stegersbach',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '16.16667',
  ),
  1561 => 
  array (
    'city' => 'Steeg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.24393',
    'longitude' => '10.29436',
  ),
  1562 => 
  array (
    'city' => 'Statzendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.30752',
    'longitude' => '15.64127',
  ),
  1563 => 
  array (
    'city' => 'Stattegg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '15.41667',
  ),
  1564 => 
  array (
    'city' => 'Stanz bei Landeck',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.14758',
    'longitude' => '10.5534',
  ),
  1565 => 
  array (
    'city' => 'Stanzach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '10.56667',
  ),
  1566 => 
  array (
    'city' => 'Stans',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '11.71667',
  ),
  1567 => 
  array (
    'city' => 'Stams',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.27603',
    'longitude' => '10.98315',
  ),
  1568 => 
  array (
    'city' => 'Stambach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.33333',
    'longitude' => '15.93333',
  ),
  1569 => 
  array (
    'city' => 'Stallhofen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '15.21667',
  ),
  1570 => 
  array (
    'city' => 'Stallhof',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.88333',
    'longitude' => '15.28333',
  ),
  1571 => 
  array (
    'city' => 'Stallehr',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.13306',
    'longitude' => '9.85',
  ),
  1572 => 
  array (
    'city' => 'Stall',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.89056',
    'longitude' => '13.03694',
  ),
  1573 => 
  array (
    'city' => 'Stainz bei Straden',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.82444',
    'longitude' => '15.89222',
  ),
  1574 => 
  array (
    'city' => 'Stainz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.89444',
    'longitude' => '15.26722',
  ),
  1575 => 
  array (
    'city' => 'Stainach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.53343',
    'longitude' => '14.10872',
  ),
  1576 => 
  array (
    'city' => 'Stadtschlaining',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '16.28333',
  ),
  1577 => 
  array (
    'city' => 'Stadl-Paura',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.08333',
    'longitude' => '13.86667',
  ),
  1578 => 
  array (
    'city' => 'Stadl an der Mur',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '13.96667',
  ),
  1579 => 
  array (
    'city' => 'Staatz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.66667',
    'longitude' => '16.48333',
  ),
  1580 => 
  array (
    'city' => 'Spitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.3656',
    'longitude' => '15.41416',
  ),
  1581 => 
  array (
    'city' => 'Spittal an der Drau',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.8',
    'longitude' => '13.5',
  ),
  1582 => 
  array (
    'city' => 'Spital am Semmering',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.61345',
    'longitude' => '15.75096',
  ),
  1583 => 
  array (
    'city' => 'Spillern',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.38333',
    'longitude' => '16.25',
  ),
  1584 => 
  array (
    'city' => 'Spielfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.70556',
    'longitude' => '15.63722',
  ),
  1585 => 
  array (
    'city' => 'Spielberg bei Knittelfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '14.78333',
  ),
  1586 => 
  array (
    'city' => 'Spannberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.46393',
    'longitude' => '16.73647',
  ),
  1587 => 
  array (
    'city' => 'Sonntagberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.99561',
    'longitude' => '14.76065',
  ),
  1588 => 
  array (
    'city' => 'Sommerein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.98333',
    'longitude' => '16.65',
  ),
  1589 => 
  array (
    'city' => 'Sollenau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.88333',
    'longitude' => '16.25',
  ),
  1590 => 
  array (
    'city' => 'Söll',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.50378',
    'longitude' => '12.19221',
  ),
  1591 => 
  array (
    'city' => 'Sölden',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.96667',
    'longitude' => '11',
  ),
  1592 => 
  array (
    'city' => 'Hall in Tirol',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.51667',
  ),
  1593 => 
  array (
    'city' => 'Södingberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '15.16667',
  ),
  1594 => 
  array (
    'city' => 'Söchau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '16.01667',
  ),
  1595 => 
  array (
    'city' => 'Soboth',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.68139',
    'longitude' => '15.07833',
  ),
  1596 => 
  array (
    'city' => 'Sitzendorf an der Schmida',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.58333',
    'longitude' => '15.93333',
  ),
  1597 => 
  array (
    'city' => 'Sittersdorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.54444',
    'longitude' => '14.60583',
  ),
  1598 => 
  array (
    'city' => 'Sistrans',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '11.45',
  ),
  1599 => 
  array (
    'city' => 'Sinabelkirchen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '15.81667',
  ),
  1600 => 
  array (
    'city' => 'Silz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '10.93333',
  ),
  1601 => 
  array (
    'city' => 'Sillian',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.75278',
    'longitude' => '12.42111',
  ),
  1602 => 
  array (
    'city' => 'Silbertal',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.09368',
    'longitude' => '9.98314',
  ),
  1603 => 
  array (
    'city' => 'Sigmundsherberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.68333',
    'longitude' => '15.75',
  ),
  1604 => 
  array (
    'city' => 'Sierning',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.04343',
    'longitude' => '14.30935',
  ),
  1605 => 
  array (
    'city' => 'Sierndorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.41667',
    'longitude' => '16.15',
  ),
  1606 => 
  array (
    'city' => 'Sieghartskirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.25531',
    'longitude' => '16.01223',
  ),
  1607 => 
  array (
    'city' => 'Sieggraben',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.65',
    'longitude' => '16.36667',
  ),
  1608 => 
  array (
    'city' => 'Siegersdorf bei Herberstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '15.78333',
  ),
  1609 => 
  array (
    'city' => 'Sibratsgfäll',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.42667',
    'longitude' => '10.03806',
  ),
  1610 => 
  array (
    'city' => 'Serfaus',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '10.6',
  ),
  1611 => 
  array (
    'city' => 'Senftenberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.43333',
    'longitude' => '15.55',
  ),
  1612 => 
  array (
    'city' => 'Semriach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '15.4',
  ),
  1613 => 
  array (
    'city' => 'Semmering',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.63347',
    'longitude' => '15.82993',
  ),
  1614 => 
  array (
    'city' => 'Selzthal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.55',
    'longitude' => '14.33333',
  ),
  1615 => 
  array (
    'city' => 'Seiersberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47',
    'longitude' => '15.4',
  ),
  1616 => 
  array (
    'city' => 'Seibersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.96667',
    'longitude' => '16.51667',
  ),
  1617 => 
  array (
    'city' => 'Seggauberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.76667',
    'longitude' => '15.51667',
  ),
  1618 => 
  array (
    'city' => 'Seewalchen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.95246',
    'longitude' => '13.58382',
  ),
  1619 => 
  array (
    'city' => 'Seekirchen am Wallersee',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.9',
    'longitude' => '13.13333',
  ),
  1620 => 
  array (
    'city' => 'Seeham',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.96667',
    'longitude' => '13.08333',
  ),
  1621 => 
  array (
    'city' => 'Seefeld in Tirol',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.33016',
    'longitude' => '11.18786',
  ),
  1622 => 
  array (
    'city' => 'Seeboden',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.82194',
    'longitude' => '13.495',
  ),
  1623 => 
  array (
    'city' => 'Seebenstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.68333',
    'longitude' => '16.13333',
  ),
  1624 => 
  array (
    'city' => 'See',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '10.46667',
  ),
  1625 => 
  array (
    'city' => 'Seckau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '14.78333',
  ),
  1626 => 
  array (
    'city' => 'Sebersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '15.98333',
  ),
  1627 => 
  array (
    'city' => 'Schwoich',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.546',
    'longitude' => '12.14049',
  ),
  1628 => 
  array (
    'city' => 'Schwendt',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.63333',
    'longitude' => '12.38333',
  ),
  1629 => 
  array (
    'city' => 'Schwendau',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.19753',
    'longitude' => '11.85897',
  ),
  1630 => 
  array (
    'city' => 'Schweiggers',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.66667',
    'longitude' => '15.06667',
  ),
  1631 => 
  array (
    'city' => 'Schwechat',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '16.46667',
  ),
  1632 => 
  array (
    'city' => 'Schwaz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.35169',
    'longitude' => '11.71014',
  ),
  1633 => 
  array (
    'city' => 'Schwarzenbach an der Pielach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.93333',
    'longitude' => '15.38333',
  ),
  1634 => 
  array (
    'city' => 'Schwarzenbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.63333',
    'longitude' => '16.35',
  ),
  1635 => 
  array (
    'city' => 'Schwarzenau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.74436',
    'longitude' => '15.25838',
  ),
  1636 => 
  array (
    'city' => 'Schwarzau im Schwarzautal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.86667',
    'longitude' => '15.66667',
  ),
  1637 => 
  array (
    'city' => 'Schwarzau im Gebirge',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.81223',
    'longitude' => '15.70581',
  ),
  1638 => 
  array (
    'city' => 'Schwarzach im Pongau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '13.15',
  ),
  1639 => 
  array (
    'city' => 'Schwarzach',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.44904',
    'longitude' => '9.76213',
  ),
  1640 => 
  array (
    'city' => 'Schwanenstadt',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.05537',
    'longitude' => '13.77505',
  ),
  1641 => 
  array (
    'city' => 'Schwanberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.75833',
    'longitude' => '15.20833',
  ),
  1642 => 
  array (
    'city' => 'Schwadorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '16.58333',
  ),
  1643 => 
  array (
    'city' => 'Schützen am Gebirge',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.85',
    'longitude' => '16.61667',
  ),
  1644 => 
  array (
    'city' => 'Schruns',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '9.91667',
  ),
  1645 => 
  array (
    'city' => 'Schrems bei Frohnleiten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '15.35',
  ),
  1646 => 
  array (
    'city' => 'Schrems',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.78333',
    'longitude' => '15.06667',
  ),
  1647 => 
  array (
    'city' => 'Schrattenthal',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.7',
    'longitude' => '15.9',
  ),
  1648 => 
  array (
    'city' => 'Schrattenberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.71667',
    'longitude' => '16.71667',
  ),
  1649 => 
  array (
    'city' => 'Schrattenbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.77902',
    'longitude' => '15.9906',
  ),
  1650 => 
  array (
    'city' => 'Schottwien',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.65683',
    'longitude' => '15.8725',
  ),
  1651 => 
  array (
    'city' => 'Schoppernau',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.31333',
    'longitude' => '10.0175',
  ),
  1652 => 
  array (
    'city' => 'Schönwies',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.19665',
    'longitude' => '10.65742',
  ),
  1653 => 
  array (
    'city' => 'Schönberg im Stubaital',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '11.41667',
  ),
  1654 => 
  array (
    'city' => 'Schönbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.45',
    'longitude' => '15.03333',
  ),
  1655 => 
  array (
    'city' => 'Schönau an der Triesting',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.93452',
    'longitude' => '16.25376',
  ),
  1656 => 
  array (
    'city' => 'Schöder',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '14.1',
  ),
  1657 => 
  array (
    'city' => 'Schnifis',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '9.73306',
  ),
  1658 => 
  array (
    'city' => 'Schnepfau',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '9.95',
  ),
  1659 => 
  array (
    'city' => 'Schmirn',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '11.56667',
  ),
  1660 => 
  array (
    'city' => 'Schlitters',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '11.83333',
  ),
  1661 => 
  array (
    'city' => 'Schlins',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '9.7',
  ),
  1662 => 
  array (
    'city' => 'Schleedorf',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '13.15',
  ),
  1663 => 
  array (
    'city' => 'Schlatt',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.07177',
    'longitude' => '13.78904',
  ),
  1664 => 
  array (
    'city' => 'Schladming',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.39289',
    'longitude' => '13.68699',
  ),
  1665 => 
  array (
    'city' => 'Schiefling am See',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.60444',
    'longitude' => '14.0975',
  ),
  1666 => 
  array (
    'city' => 'Schenkenfelden',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.50273',
    'longitude' => '14.36188',
  ),
  1667 => 
  array (
    'city' => 'Scheifling',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '14.4',
  ),
  1668 => 
  array (
    'city' => 'Scheibbs',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.00474',
    'longitude' => '15.16817',
  ),
  1669 => 
  array (
    'city' => 'Scheffau am Wilden Kaiser',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.52943',
    'longitude' => '12.25139',
  ),
  1670 => 
  array (
    'city' => 'Scheffau am Tennengebirge',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.58831',
    'longitude' => '13.2202',
  ),
  1671 => 
  array (
    'city' => 'Schattwald',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '10.45',
  ),
  1672 => 
  array (
    'city' => 'Schattendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.71667',
    'longitude' => '16.5',
  ),
  1673 => 
  array (
    'city' => 'Scharnstein',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.90426',
    'longitude' => '13.96135',
  ),
  1674 => 
  array (
    'city' => 'Scharnitz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.38899',
    'longitude' => '11.26455',
  ),
  1675 => 
  array (
    'city' => 'Scharndorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08333',
    'longitude' => '16.78333',
  ),
  1676 => 
  array (
    'city' => 'Schärding',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.45294',
    'longitude' => '13.43722',
  ),
  1677 => 
  array (
    'city' => 'Schandorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '16.41667',
  ),
  1678 => 
  array (
    'city' => 'Schäffern',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '16.1',
  ),
  1679 => 
  array (
    'city' => 'Schachendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '16.43333',
  ),
  1680 => 
  array (
    'city' => 'Sautens',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '10.86667',
  ),
  1681 => 
  array (
    'city' => 'Sattledt',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '14.05',
  ),
  1682 => 
  array (
    'city' => 'Satteins',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '9.66667',
  ),
  1683 => 
  array (
    'city' => 'Sankt Wolfgang im Salzkammergut',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.73932',
    'longitude' => '13.44666',
  ),
  1684 => 
  array (
    'city' => 'Sankt Veit im Pongau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.33333',
    'longitude' => '13.15',
  ),
  1685 => 
  array (
    'city' => 'Sankt Veit an der Gölsen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.0432',
    'longitude' => '15.66942',
  ),
  1686 => 
  array (
    'city' => 'Sankt Veit an der Glan',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.76806',
    'longitude' => '14.36028',
  ),
  1687 => 
  array (
    'city' => 'Sankt Veit am Vogau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.73333',
    'longitude' => '15.61667',
  ),
  1688 => 
  array (
    'city' => 'Sankt Valentin',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.16667',
    'longitude' => '14.51667',
  ),
  1689 => 
  array (
    'city' => 'Sankt Ulrich bei Steyr',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.02185',
    'longitude' => '14.42419',
  ),
  1690 => 
  array (
    'city' => 'Sankt Ulrich am Waasen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.93333',
    'longitude' => '15.53333',
  ),
  1691 => 
  array (
    'city' => 'Sankt Stefan ob Stainz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.92861',
    'longitude' => '15.25889',
  ),
  1692 => 
  array (
    'city' => 'Sankt Stefan ob Leoben',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '14.98333',
  ),
  1693 => 
  array (
    'city' => 'Sankt Stefan im Rosental',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.90389',
    'longitude' => '15.71',
  ),
  1694 => 
  array (
    'city' => 'Sankt Ruprecht ob Murau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.12043',
    'longitude' => '14.02594',
  ),
  1695 => 
  array (
    'city' => 'Sankt Ruprecht an der Raab',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.15336',
    'longitude' => '15.66256',
  ),
  1696 => 
  array (
    'city' => 'Sankt Radegund bei Graz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '15.48333',
  ),
  1697 => 
  array (
    'city' => 'Sankt Pölten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.2',
    'longitude' => '15.63333',
  ),
  1698 => 
  array (
    'city' => 'Sankt Peter ob Judenburg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18417',
    'longitude' => '14.58639',
  ),
  1699 => 
  array (
    'city' => 'Sankt Peter im Sulmtal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.75',
    'longitude' => '15.25',
  ),
  1700 => 
  array (
    'city' => 'Sankt Peter-Freienstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '15.01667',
  ),
  1701 => 
  array (
    'city' => 'Sankt Peter am Ottersbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.79778',
    'longitude' => '15.75917',
  ),
  1702 => 
  array (
    'city' => 'Sankt Peter am Kammersberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '14.18333',
  ),
  1703 => 
  array (
    'city' => 'Sankt Oswald bei Plankenwarth',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '15.26667',
  ),
  1704 => 
  array (
    'city' => 'Sankt Nikolai ob Draßling',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.80889',
    'longitude' => '15.65083',
  ),
  1705 => 
  array (
    'city' => 'Sankt Nikolai im Sölktal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '14.05',
  ),
  1706 => 
  array (
    'city' => 'Sankt Nikolai im Sausal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.82111',
    'longitude' => '15.45194',
  ),
  1707 => 
  array (
    'city' => 'Sankt Michael in Obersteiermark',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.33333',
    'longitude' => '15',
  ),
  1708 => 
  array (
    'city' => 'Sankt Michael im Lungau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '13.63333',
  ),
  1709 => 
  array (
    'city' => 'Sankt Michael im Burgenland',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '16.26667',
  ),
  1710 => 
  array (
    'city' => 'Sankt Martin im Sulmtal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.75611',
    'longitude' => '15.29722',
  ),
  1711 => 
  array (
    'city' => 'Sankt Martin bei Lofer',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '12.7',
  ),
  1712 => 
  array (
    'city' => 'Sankt Martin an der Raab',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '46.9225',
    'longitude' => '16.13611',
  ),
  1713 => 
  array (
    'city' => 'Sankt Martin am Grimming',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.48873',
    'longitude' => '13.98105',
  ),
  1714 => 
  array (
    'city' => 'Sankt Margarethen im Lungau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '13.68333',
  ),
  1715 => 
  array (
    'city' => 'Sankt Margarethen im Burgenland',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.80335',
    'longitude' => '16.60875',
  ),
  1716 => 
  array (
    'city' => 'Sankt Margarethen bei Knittelfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '14.86667',
  ),
  1717 => 
  array (
    'city' => 'Sankt Margarethen an der Sierning',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1591',
    'longitude' => '15.49055',
  ),
  1718 => 
  array (
    'city' => 'Sankt Margarethen an der Raab',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '15.75',
  ),
  1719 => 
  array (
    'city' => 'Sankt Marein im Mürztal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '15.36667',
  ),
  1720 => 
  array (
    'city' => 'Sankt Marein bei Neumarkt',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '14.41667',
  ),
  1721 => 
  array (
    'city' => 'Sankt Marein bei Knittelfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '14.86667',
  ),
  1722 => 
  array (
    'city' => 'Sankt Marein bei Graz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.01583',
    'longitude' => '15.68389',
  ),
  1723 => 
  array (
    'city' => 'Sankt Lorenzen im Mürztal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '15.36667',
  ),
  1724 => 
  array (
    'city' => 'Sankt Lorenzen bei Scheifling',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.14556',
    'longitude' => '14.40583',
  ),
  1725 => 
  array (
    'city' => 'Sankt Lorenzen bei Knittelfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '14.88333',
  ),
  1726 => 
  array (
    'city' => 'Sankt Lorenzen am Wechsel',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '15.95',
  ),
  1727 => 
  array (
    'city' => 'Sankt Lorenz',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.81667',
    'longitude' => '13.36667',
  ),
  1728 => 
  array (
    'city' => 'Sankt Leonhard am Forst',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '15.28333',
  ),
  1729 => 
  array (
    'city' => 'Sankt Lambrecht',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '14.3',
  ),
  1730 => 
  array (
    'city' => 'Sankt Kathrein am Offenegg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '15.58333',
  ),
  1731 => 
  array (
    'city' => 'Sankt Kathrein am Hauenstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '15.68333',
  ),
  1732 => 
  array (
    'city' => 'Sankt Katharein an der Laming',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.47069',
    'longitude' => '15.16319',
  ),
  1733 => 
  array (
    'city' => 'Sankt Josef (Weststeiermark)',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.90917',
    'longitude' => '15.33639',
  ),
  1734 => 
  array (
    'city' => 'Sankt Johann in der Haide',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '16.01667',
  ),
  1735 => 
  array (
    'city' => 'Sankt Johann im Saggautal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.70389',
    'longitude' => '15.40278',
  ),
  1736 => 
  array (
    'city' => 'Sankt Johann im Pongau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '13.2',
  ),
  1737 => 
  array (
    'city' => 'Sankt Johann bei Herberstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '15.8',
  ),
  1738 => 
  array (
    'city' => 'Sankt Johann am Tauern',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '14.46667',
  ),
  1739 => 
  array (
    'city' => 'Sankt Jakob im Walde',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '15.78333',
  ),
  1740 => 
  array (
    'city' => 'Sankt Jakob',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.54778',
    'longitude' => '14.05722',
  ),
  1741 => 
  array (
    'city' => 'Sankt Ilgen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.55',
    'longitude' => '15.16667',
  ),
  1742 => 
  array (
    'city' => 'Sankt Gotthard im Mühlkreis',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.36667',
    'longitude' => '14.13333',
  ),
  1743 => 
  array (
    'city' => 'Sankt Gilgen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.76667',
    'longitude' => '13.36667',
  ),
  1744 => 
  array (
    'city' => 'Sankt Georgen ob Murau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '14.1',
  ),
  1745 => 
  array (
    'city' => 'Sankt Georgen ob Judenburg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '14.5',
  ),
  1746 => 
  array (
    'city' => 'Sankt Georgen im Attergau',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.93595',
    'longitude' => '13.48306',
  ),
  1747 => 
  array (
    'city' => 'Sankt Georgen an der Stiefing',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.87333',
    'longitude' => '15.57972',
  ),
  1748 => 
  array (
    'city' => 'Sankt Georgen an der Leys',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.03149',
    'longitude' => '15.22722',
  ),
  1749 => 
  array (
    'city' => 'Sankt Georgen am Ybbsfelde',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '14.95',
  ),
  1750 => 
  array (
    'city' => 'Sankt Gallenkirch',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '9.96667',
  ),
  1751 => 
  array (
    'city' => 'Sankt Gallen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.68333',
    'longitude' => '14.6',
  ),
  1752 => 
  array (
    'city' => 'Sankt Florian am Inn',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.44122',
    'longitude' => '13.44263',
  ),
  1753 => 
  array (
    'city' => 'Sankt Corona am Wechsel',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '16',
  ),
  1754 => 
  array (
    'city' => 'Sankt Blasen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '14.3',
  ),
  1755 => 
  array (
    'city' => 'Sankt Bartholomä',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '15.25',
  ),
  1756 => 
  array (
    'city' => 'Sankt Anton im Montafon',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '9.86667',
  ),
  1757 => 
  array (
    'city' => 'Sankt Anton am Arlberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.1275',
    'longitude' => '10.26372',
  ),
  1758 => 
  array (
    'city' => 'Sankt Anna am Aigen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.83111',
    'longitude' => '15.97139',
  ),
  1759 => 
  array (
    'city' => 'Sankt Andrä im Lungau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '13.78333',
  ),
  1760 => 
  array (
    'city' => 'Sankt Andrä am Zicksee',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.7841',
    'longitude' => '16.94195',
  ),
  1761 => 
  array (
    'city' => 'Sankt Andrä',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.76611',
    'longitude' => '14.82361',
  ),
  1762 => 
  array (
    'city' => 'Salzburg',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.79941',
    'longitude' => '13.04399',
  ),
  1763 => 
  array (
    'city' => 'Sallingberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.46667',
    'longitude' => '15.23333',
  ),
  1764 => 
  array (
    'city' => 'Salla',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '14.96667',
  ),
  1765 => 
  array (
    'city' => 'Sachsenburg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.82917',
    'longitude' => '13.355',
  ),
  1766 => 
  array (
    'city' => 'Saalfelden am Steinernen Meer',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.42681',
    'longitude' => '12.848',
  ),
  1767 => 
  array (
    'city' => 'Saalbach',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.39138',
    'longitude' => '12.63642',
  ),
  1768 => 
  array (
    'city' => 'Rutzenham',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.06076',
    'longitude' => '13.71883',
  ),
  1769 => 
  array (
    'city' => 'Rüstorf',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.04326',
    'longitude' => '13.78982',
  ),
  1770 => 
  array (
    'city' => 'Rust',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.80122',
    'longitude' => '16.67158',
  ),
  1771 => 
  array (
    'city' => 'Ruprechtshofen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13648',
    'longitude' => '15.27675',
  ),
  1772 => 
  array (
    'city' => 'Rum',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.45',
  ),
  1773 => 
  array (
    'city' => 'Rudersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '16.11667',
  ),
  1774 => 
  array (
    'city' => 'Ruden',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.65833',
    'longitude' => '14.77639',
  ),
  1775 => 
  array (
    'city' => 'Rottenmann',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '14.35',
  ),
  1776 => 
  array (
    'city' => 'Röthis',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.29332',
    'longitude' => '9.65484',
  ),
  1777 => 
  array (
    'city' => 'Röthelstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '15.36667',
  ),
  1778 => 
  array (
    'city' => 'Rotenturm an der Pinka',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '16.25',
  ),
  1779 => 
  array (
    'city' => 'Rosegg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.58333',
    'longitude' => '14.03333',
  ),
  1780 => 
  array (
    'city' => 'Röschitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.64312',
    'longitude' => '15.81774',
  ),
  1781 => 
  array (
    'city' => 'Roppen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '10.81667',
  ),
  1782 => 
  array (
    'city' => 'Röns',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '9.7',
  ),
  1783 => 
  array (
    'city' => 'Rohr im Gebirge',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.89471',
    'longitude' => '15.73603',
  ),
  1784 => 
  array (
    'city' => 'Rohr im Burgenland',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '16.16667',
  ),
  1785 => 
  array (
    'city' => 'Röhrenbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.65',
    'longitude' => '15.5',
  ),
  1786 => 
  array (
    'city' => 'Rohrbach bei Mattersburg',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.71667',
    'longitude' => '16.41667',
  ),
  1787 => 
  array (
    'city' => 'Rohrbach an der Lafnitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '16',
  ),
  1788 => 
  array (
    'city' => 'Rohrau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '16.85',
  ),
  1789 => 
  array (
    'city' => 'Ritzing',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '16.5',
  ),
  1790 => 
  array (
    'city' => 'Rinn',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '11.5',
  ),
  1791 => 
  array (
    'city' => 'Rietz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.05',
  ),
  1792 => 
  array (
    'city' => 'Riegersburg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47',
    'longitude' => '15.93028',
  ),
  1793 => 
  array (
    'city' => 'Riefensberg',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '9.96667',
  ),
  1794 => 
  array (
    'city' => 'Riedlingsdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '16.13333',
  ),
  1795 => 
  array (
    'city' => 'Ried im Oberinntal',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '10.65',
  ),
  1796 => 
  array (
    'city' => 'Ried im Innkreis',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.21123',
    'longitude' => '13.48855',
  ),
  1797 => 
  array (
    'city' => 'Reutte',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '10.71667',
  ),
  1798 => 
  array (
    'city' => 'Reuthe',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.37022',
    'longitude' => '9.89044',
  ),
  1799 => 
  array (
    'city' => 'Retznei',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.73333',
    'longitude' => '15.56667',
  ),
  1800 => 
  array (
    'city' => 'Retz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.75',
    'longitude' => '15.95',
  ),
  1801 => 
  array (
    'city' => 'Rettenschöss',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.65718',
    'longitude' => '12.26872',
  ),
  1802 => 
  array (
    'city' => 'Rettenegg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '15.78333',
  ),
  1803 => 
  array (
    'city' => 'Reith bei Seefeld',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.2',
  ),
  1804 => 
  array (
    'city' => 'Reith bei Kitzbühel',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '12.35',
  ),
  1805 => 
  array (
    'city' => 'Reith im Alpbachtal',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.41694',
    'longitude' => '11.87785',
  ),
  1806 => 
  array (
    'city' => 'Reisenberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48',
    'longitude' => '16.51667',
  ),
  1807 => 
  array (
    'city' => 'Reinsberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.98567',
    'longitude' => '15.07067',
  ),
  1808 => 
  array (
    'city' => 'Reingers',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.96667',
    'longitude' => '15.13333',
  ),
  1809 => 
  array (
    'city' => 'Reifling',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '14.66667',
  ),
  1810 => 
  array (
    'city' => 'Reichraming',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.88333',
    'longitude' => '14.45',
  ),
  1811 => 
  array (
    'city' => 'Reichenthal',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.54286',
    'longitude' => '14.38471',
  ),
  1812 => 
  array (
    'city' => 'Reichenfels',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '47',
    'longitude' => '14.75',
  ),
  1813 => 
  array (
    'city' => 'Reichendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '15.75',
  ),
  1814 => 
  array (
    'city' => 'Reichenau im Mühlkreis',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.45',
    'longitude' => '14.35',
  ),
  1815 => 
  array (
    'city' => 'Reichenau an der Rax',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.69509',
    'longitude' => '15.84572',
  ),
  1816 => 
  array (
    'city' => 'Redlham',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '13.73333',
  ),
  1817 => 
  array (
    'city' => 'Redleiten',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '13.55',
  ),
  1818 => 
  array (
    'city' => 'Rechnitz',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '16.45',
  ),
  1819 => 
  array (
    'city' => 'Raxendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.33333',
    'longitude' => '15.26667',
  ),
  1820 => 
  array (
    'city' => 'Ravelsbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.55',
    'longitude' => '15.85',
  ),
  1821 => 
  array (
    'city' => 'Rauris',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.22656',
    'longitude' => '12.99459',
  ),
  1822 => 
  array (
    'city' => 'Rauchenwarth',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08333',
    'longitude' => '16.51667',
  ),
  1823 => 
  array (
    'city' => 'Rattenberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '11.9',
  ),
  1824 => 
  array (
    'city' => 'Ratten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '15.71667',
  ),
  1825 => 
  array (
    'city' => 'Ratschendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.74222',
    'longitude' => '15.81583',
  ),
  1826 => 
  array (
    'city' => 'Ratsch an der Weinstraße',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.68944',
    'longitude' => '15.57111',
  ),
  1827 => 
  array (
    'city' => 'Rastenfeld',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.57348',
    'longitude' => '15.33176',
  ),
  1828 => 
  array (
    'city' => 'Rassach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.86028',
    'longitude' => '15.27',
  ),
  1829 => 
  array (
    'city' => 'Rappottenstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.52161',
    'longitude' => '15.07925',
  ),
  1830 => 
  array (
    'city' => 'Ranten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '14.08333',
  ),
  1831 => 
  array (
    'city' => 'Rankweil',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.27108',
    'longitude' => '9.64308',
  ),
  1832 => 
  array (
    'city' => 'Raning',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.85',
    'longitude' => '15.81667',
  ),
  1833 => 
  array (
    'city' => 'Ranggen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '11.2',
  ),
  1834 => 
  array (
    'city' => 'Rangersdorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.86528',
    'longitude' => '12.97833',
  ),
  1835 => 
  array (
    'city' => 'Randegg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01198',
    'longitude' => '14.97334',
  ),
  1836 => 
  array (
    'city' => 'Ramsau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.00313',
    'longitude' => '15.80332',
  ),
  1837 => 
  array (
    'city' => 'Ramsau im Zillertal',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.20383',
    'longitude' => '11.87545',
  ),
  1838 => 
  array (
    'city' => 'Ramingstein',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '13.83333',
  ),
  1839 => 
  array (
    'city' => 'Raiding',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '16.53333',
  ),
  1840 => 
  array (
    'city' => 'Ragnitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.83667',
    'longitude' => '15.59278',
  ),
  1841 => 
  array (
    'city' => 'Raggal',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '9.83306',
  ),
  1842 => 
  array (
    'city' => 'Radstadt',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '13.45',
  ),
  1843 => 
  array (
    'city' => 'Bad Radkersburg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.68806',
    'longitude' => '15.98806',
  ),
  1844 => 
  array (
    'city' => 'Radfeld',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.45',
    'longitude' => '11.91667',
  ),
  1845 => 
  array (
    'city' => 'Radenthein',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.80056',
    'longitude' => '13.71167',
  ),
  1846 => 
  array (
    'city' => 'Rachau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '14.9',
  ),
  1847 => 
  array (
    'city' => 'Rabenwald',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '15.8',
  ),
  1848 => 
  array (
    'city' => 'Rabenstein an der Pielach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06535',
    'longitude' => '15.46772',
  ),
  1849 => 
  array (
    'city' => 'Rabensburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.65',
    'longitude' => '16.9',
  ),
  1850 => 
  array (
    'city' => 'Raasdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.24657',
    'longitude' => '16.56532',
  ),
  1851 => 
  array (
    'city' => 'Raach am Hochgebirge',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.63333',
    'longitude' => '15.93333',
  ),
  1852 => 
  array (
    'city' => 'Raabs an der Thaya',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.85',
    'longitude' => '15.5',
  ),
  1853 => 
  array (
    'city' => 'Raabau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.96278',
    'longitude' => '15.91167',
  ),
  1854 => 
  array (
    'city' => 'Raaba',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '15.5',
  ),
  1855 => 
  array (
    'city' => 'Pyhra',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1591',
    'longitude' => '15.68624',
  ),
  1856 => 
  array (
    'city' => 'Pusterwald',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.30611',
    'longitude' => '14.37556',
  ),
  1857 => 
  array (
    'city' => 'Purkersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.20769',
    'longitude' => '16.17539',
  ),
  1858 => 
  array (
    'city' => 'Purgstall',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.05841',
    'longitude' => '15.13478',
  ),
  1859 => 
  array (
    'city' => 'Pulkau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.70484',
    'longitude' => '15.86031',
  ),
  1860 => 
  array (
    'city' => 'Pühret',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.03333',
    'longitude' => '13.71667',
  ),
  1861 => 
  array (
    'city' => 'Puchenstuben',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.92819',
    'longitude' => '15.28748',
  ),
  1862 => 
  array (
    'city' => 'Puchberg am Schneeberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.78709',
    'longitude' => '15.91352',
  ),
  1863 => 
  array (
    'city' => 'Puch bei Weiz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '15.71667',
  ),
  1864 => 
  array (
    'city' => 'Puch bei Hallein',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.71536',
    'longitude' => '13.09296',
  ),
  1865 => 
  array (
    'city' => 'Prutz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '10.66667',
  ),
  1866 => 
  array (
    'city' => 'Pruggern',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '13.86667',
  ),
  1867 => 
  array (
    'city' => 'Proleb',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '15.13333',
  ),
  1868 => 
  array (
    'city' => 'Prinzersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.2',
    'longitude' => '15.51667',
  ),
  1869 => 
  array (
    'city' => 'Prigglitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.70318',
    'longitude' => '15.92794',
  ),
  1870 => 
  array (
    'city' => 'Pressbaum',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.18333',
    'longitude' => '16.08333',
  ),
  1871 => 
  array (
    'city' => 'Prellenkirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '16.95',
  ),
  1872 => 
  array (
    'city' => 'Preitenegg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.94',
    'longitude' => '14.92583',
  ),
  1873 => 
  array (
    'city' => 'Preding',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.85861',
    'longitude' => '15.40972',
  ),
  1874 => 
  array (
    'city' => 'Poysdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.66667',
    'longitude' => '16.63333',
  ),
  1875 => 
  array (
    'city' => 'Potzneusiedl',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '48.03333',
    'longitude' => '16.93333',
  ),
  1876 => 
  array (
    'city' => 'Pöttsching',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.8',
    'longitude' => '16.38333',
  ),
  1877 => 
  array (
    'city' => 'Pottenstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.9582',
    'longitude' => '16.0948',
  ),
  1878 => 
  array (
    'city' => 'Pottendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.9',
    'longitude' => '16.38333',
  ),
  1879 => 
  array (
    'city' => 'Pöttelsdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.75',
    'longitude' => '16.43333',
  ),
  1880 => 
  array (
    'city' => 'Poppendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.85611',
    'longitude' => '15.85639',
  ),
  1881 => 
  array (
    'city' => 'Pöls',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '14.58333',
  ),
  1882 => 
  array (
    'city' => 'Polling in Tirol',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.15',
  ),
  1883 => 
  array (
    'city' => 'Pöllauberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '15.85',
  ),
  1884 => 
  array (
    'city' => 'Pöllau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '15.83333',
  ),
  1885 => 
  array (
    'city' => 'Pöggstall',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.31667',
    'longitude' => '15.18333',
  ),
  1886 => 
  array (
    'city' => 'Poggersdorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.65',
    'longitude' => '14.45',
  ),
  1887 => 
  array (
    'city' => 'Podersdorf am See',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.85412',
    'longitude' => '16.83706',
  ),
  1888 => 
  array (
    'city' => 'Pöchlarn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.2',
    'longitude' => '15.2',
  ),
  1889 => 
  array (
    'city' => 'Plainfeld',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.83333',
    'longitude' => '13.18333',
  ),
  1890 => 
  array (
    'city' => 'Pitzenberg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.07361',
    'longitude' => '13.72484',
  ),
  1891 => 
  array (
    'city' => 'Pitten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.71667',
    'longitude' => '16.18333',
  ),
  1892 => 
  array (
    'city' => 'Pitschgau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.7',
    'longitude' => '15.26667',
  ),
  1893 => 
  array (
    'city' => 'Pistorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.76667',
    'longitude' => '15.36667',
  ),
  1894 => 
  array (
    'city' => 'Pirka',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47',
    'longitude' => '15.38333',
  ),
  1895 => 
  array (
    'city' => 'Piringsdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '16.41667',
  ),
  1896 => 
  array (
    'city' => 'Pirching am Traubenberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.95',
    'longitude' => '15.6',
  ),
  1897 => 
  array (
    'city' => 'Pinkafeld',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '16.11667',
  ),
  1898 => 
  array (
    'city' => 'Pinggau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '16.06667',
  ),
  1899 => 
  array (
    'city' => 'Pillichsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.35',
    'longitude' => '16.53333',
  ),
  1900 => 
  array (
    'city' => 'Pill',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '11.68333',
  ),
  1901 => 
  array (
    'city' => 'Pilgersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '16.35',
  ),
  1902 => 
  array (
    'city' => 'Piesendorf',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '12.71667',
  ),
  1903 => 
  array (
    'city' => 'Piberegg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '15.08333',
  ),
  1904 => 
  array (
    'city' => 'Pians',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.13486',
    'longitude' => '10.51237',
  ),
  1905 => 
  array (
    'city' => 'Pfunds',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.96667',
    'longitude' => '10.55',
  ),
  1906 => 
  array (
    'city' => 'Pfons',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '11.46667',
  ),
  1907 => 
  array (
    'city' => 'Pflach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '10.71667',
  ),
  1908 => 
  array (
    'city' => 'Pfarrkirchen im Mühlkreis',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.50375',
    'longitude' => '13.82638',
  ),
  1909 => 
  array (
    'city' => 'Pfarrkirchen bei Bad Hall',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.03046',
    'longitude' => '14.19914',
  ),
  1910 => 
  array (
    'city' => 'Pfaffstätten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01737',
    'longitude' => '16.26354',
  ),
  1911 => 
  array (
    'city' => 'Pfaffing',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.018',
    'longitude' => '13.47507',
  ),
  1912 => 
  array (
    'city' => 'Pfaffenhofen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.08333',
  ),
  1913 => 
  array (
    'city' => 'Petzenkirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '15.15',
  ),
  1914 => 
  array (
    'city' => 'Petronell-Carnuntum',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11667',
    'longitude' => '16.85',
  ),
  1915 => 
  array (
    'city' => 'Pertlstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.94056',
    'longitude' => '15.96167',
  ),
  1916 => 
  array (
    'city' => 'Pernitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.89759',
    'longitude' => '15.96022',
  ),
  1917 => 
  array (
    'city' => 'Pernersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.7',
    'longitude' => '16.01667',
  ),
  1918 => 
  array (
    'city' => 'Pernegg an der Mur',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.35979',
    'longitude' => '15.34236',
  ),
  1919 => 
  array (
    'city' => 'Pernegg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.73333',
    'longitude' => '15.61667',
  ),
  1920 => 
  array (
    'city' => 'Perlsdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.91361',
    'longitude' => '15.81417',
  ),
  1921 => 
  array (
    'city' => 'Perg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.25',
    'longitude' => '14.63333',
  ),
  1922 => 
  array (
    'city' => 'Perchtoldsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11935',
    'longitude' => '16.26607',
  ),
  1923 => 
  array (
    'city' => 'Perchau am Sattel',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '14.45',
  ),
  1924 => 
  array (
    'city' => 'Pennewang',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '13.85',
  ),
  1925 => 
  array (
    'city' => 'Peggau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '15.35',
  ),
  1926 => 
  array (
    'city' => 'Payerbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.69209',
    'longitude' => '15.8634',
  ),
  1927 => 
  array (
    'city' => 'Paudorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.35',
    'longitude' => '15.61667',
  ),
  1928 => 
  array (
    'city' => 'Patsch',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '11.41667',
  ),
  1929 => 
  array (
    'city' => 'Paternion',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.71417',
    'longitude' => '13.63611',
  ),
  1930 => 
  array (
    'city' => 'Passail',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '15.51667',
  ),
  1931 => 
  array (
    'city' => 'Pasching',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.25931',
    'longitude' => '14.20369',
  ),
  1932 => 
  array (
    'city' => 'Parschlug',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.4809',
    'longitude' => '15.28645',
  ),
  1933 => 
  array (
    'city' => 'Parndorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.99963',
    'longitude' => '16.86049',
  ),
  1934 => 
  array (
    'city' => 'Parbasdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.28333',
    'longitude' => '16.6',
  ),
  1935 => 
  array (
    'city' => 'Pamhagen',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.70092',
    'longitude' => '16.90779',
  ),
  1936 => 
  array (
    'city' => 'Pama',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '48.05',
    'longitude' => '17.03333',
  ),
  1937 => 
  array (
    'city' => 'Palfau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.7',
    'longitude' => '14.8',
  ),
  1938 => 
  array (
    'city' => 'Paldau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.94222',
    'longitude' => '15.79583',
  ),
  1939 => 
  array (
    'city' => 'Pack',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.97917',
    'longitude' => '14.98417',
  ),
  1940 => 
  array (
    'city' => 'Oetz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '10.9',
  ),
  1941 => 
  array (
    'city' => 'Otterthal',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.61667',
    'longitude' => '15.93333',
  ),
  1942 => 
  array (
    'city' => 'Ottenthal',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.75',
    'longitude' => '16.56667',
  ),
  1943 => 
  array (
    'city' => 'Ottensheim',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.33246',
    'longitude' => '14.17425',
  ),
  1944 => 
  array (
    'city' => 'Ottenschlag im Mühlkreis',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.46667',
    'longitude' => '14.36667',
  ),
  1945 => 
  array (
    'city' => 'Ottenschlag',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.41667',
    'longitude' => '15.21667',
  ),
  1946 => 
  array (
    'city' => 'Osterwitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.85806',
    'longitude' => '15.13278',
  ),
  1947 => 
  array (
    'city' => 'Ossiach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.66667',
    'longitude' => '13.98333',
  ),
  1948 => 
  array (
    'city' => 'Oslip',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.82906',
    'longitude' => '16.61957',
  ),
  1949 => 
  array (
    'city' => 'Orth an der Donau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.14524',
    'longitude' => '16.70089',
  ),
  1950 => 
  array (
    'city' => 'Opponitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.86667',
    'longitude' => '14.81667',
  ),
  1951 => 
  array (
    'city' => 'Oppenberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '14.26667',
  ),
  1952 => 
  array (
    'city' => 'Ollersdorf im Burgenland',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '16.16667',
  ),
  1953 => 
  array (
    'city' => 'Olbendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '16.2',
  ),
  1954 => 
  array (
    'city' => 'Offenhausen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.15',
    'longitude' => '13.83333',
  ),
  1955 => 
  array (
    'city' => 'Öblarn',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.45938',
    'longitude' => '13.99023',
  ),
  1956 => 
  array (
    'city' => 'Oberzeiring',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '14.48333',
  ),
  1957 => 
  array (
    'city' => 'Oberwölz Stadt',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '14.26667',
  ),
  1958 => 
  array (
    'city' => 'Oberweg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '14.63333',
  ),
  1959 => 
  array (
    'city' => 'Oberwart',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '16.2',
  ),
  1960 => 
  array (
    'city' => 'Oberwang',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.86667',
    'longitude' => '13.43333',
  ),
  1961 => 
  array (
    'city' => 'Oberwaltersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.97567',
    'longitude' => '16.32191',
  ),
  1962 => 
  array (
    'city' => 'Obervogau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.745',
    'longitude' => '15.58472',
  ),
  1963 => 
  array (
    'city' => 'Obervellach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.93667',
    'longitude' => '13.20417',
  ),
  1964 => 
  array (
    'city' => 'Obertrum am See',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.93722',
    'longitude' => '13.07722',
  ),
  1965 => 
  array (
    'city' => 'Obertilliach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.71056',
    'longitude' => '12.61444',
  ),
  1966 => 
  array (
    'city' => 'Oberstorcha',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.96667',
    'longitude' => '15.8',
  ),
  1967 => 
  array (
    'city' => 'Obersiebenbrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.26667',
    'longitude' => '16.7',
  ),
  1968 => 
  array (
    'city' => 'Oberschützen',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '16.2',
  ),
  1969 => 
  array (
    'city' => 'Oberrettenbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '15.8',
  ),
  1970 => 
  array (
    'city' => 'Oberpullendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.50352',
    'longitude' => '16.50447',
  ),
  1971 => 
  array (
    'city' => 'Pettnau',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.13333',
  ),
  1972 => 
  array (
    'city' => 'Oberneukirchen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.45',
    'longitude' => '14.21667',
  ),
  1973 => 
  array (
    'city' => 'Oberndorf in Tirol',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '12.38333',
  ),
  1974 => 
  array (
    'city' => 'Oberndorf bei Schwanenstadt',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.05559',
    'longitude' => '13.75677',
  ),
  1975 => 
  array (
    'city' => 'Oberndorf bei Salzburg',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '12.93333',
  ),
  1976 => 
  array (
    'city' => 'Oberndorf an der Melk',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06386',
    'longitude' => '15.2243',
  ),
  1977 => 
  array (
    'city' => 'Oberloisdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.45',
    'longitude' => '16.5',
  ),
  1978 => 
  array (
    'city' => 'Oberlienz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.84722',
    'longitude' => '12.73139',
  ),
  1979 => 
  array (
    'city' => 'Oberkurzheim',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '14.58333',
  ),
  1980 => 
  array (
    'city' => 'Oberhofen im Inntal',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.08333',
  ),
  1981 => 
  array (
    'city' => 'Oberhofen am Irrsee',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '13.3',
  ),
  1982 => 
  array (
    'city' => 'Oberhaag',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.6869',
    'longitude' => '15.33202',
  ),
  1983 => 
  array (
    'city' => 'Ober-Grafendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1504',
    'longitude' => '15.54531',
  ),
  1984 => 
  array (
    'city' => 'Oberdrauburg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.74306',
    'longitude' => '12.97028',
  ),
  1985 => 
  array (
    'city' => 'Oberdorf im Burgenland',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '16.21667',
  ),
  1986 => 
  array (
    'city' => 'Oberdorf am Hochegg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.97861',
    'longitude' => '15.72167',
  ),
  1987 => 
  array (
    'city' => 'Oberalm',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.7',
    'longitude' => '13.1',
  ),
  1988 => 
  array (
    'city' => 'Oberaich',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '15.21667',
  ),
  1989 => 
  array (
    'city' => 'Obdach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '14.68333',
  ),
  1990 => 
  array (
    'city' => 'Nüziders',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '9.8',
  ),
  1991 => 
  array (
    'city' => 'Nußdorf am Haunsberg',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.95944',
    'longitude' => '13.00917',
  ),
  1992 => 
  array (
    'city' => 'Nöchling',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.22433',
    'longitude' => '14.98123',
  ),
  1993 => 
  array (
    'city' => 'Nitscha',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '15.75',
  ),
  1994 => 
  array (
    'city' => 'Nikolsdorf',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.78583',
    'longitude' => '12.91333',
  ),
  1995 => 
  array (
    'city' => 'Niklasdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '15.15',
  ),
  1996 => 
  array (
    'city' => 'Nikitsch',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '16.66667',
  ),
  1997 => 
  array (
    'city' => 'Niederwölz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '14.36667',
  ),
  1998 => 
  array (
    'city' => 'Niederthalheim',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.1',
    'longitude' => '13.75',
  ),
  1999 => 
  array (
    'city' => 'Niederöblarn',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '14.01667',
  ),
  2000 => 
  array (
    'city' => 'Niedernsill',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '12.65',
  ),
  2001 => 
  array (
    'city' => 'Niederndorf',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.65',
    'longitude' => '12.21667',
  ),
  2002 => 
  array (
    'city' => 'Niederleis',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.55',
    'longitude' => '16.4',
  ),
  2003 => 
  array (
    'city' => 'Niederhollabrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.43333',
    'longitude' => '16.3',
  ),
  2004 => 
  array (
    'city' => 'Nickelsdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.94056',
    'longitude' => '17.06944',
  ),
  2005 => 
  array (
    'city' => 'Neutal',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '16.43333',
  ),
  2006 => 
  array (
    'city' => 'Neustift im Stubaital',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '11.31667',
  ),
  2007 => 
  array (
    'city' => 'Neustift bei Güssing',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '16.26667',
  ),
  2008 => 
  array (
    'city' => 'Neustift an der Lafnitz',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '16.03333',
  ),
  2009 => 
  array (
    'city' => 'Neusiedl an der Zaya',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.63333',
    'longitude' => '16.8',
  ),
  2010 => 
  array (
    'city' => 'Neusiedl am See',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.94901',
    'longitude' => '16.8417',
  ),
  2011 => 
  array (
    'city' => 'Neunkirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.72096',
    'longitude' => '16.08107',
  ),
  2012 => 
  array (
    'city' => 'Neumarkt in Steiermark',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.07083',
    'longitude' => '14.42278',
  ),
  2013 => 
  array (
    'city' => 'Neumarkt an der Ybbs',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '15.05',
  ),
  2014 => 
  array (
    'city' => 'Neumarkt am Wallersee',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '13.23333',
  ),
  2015 => 
  array (
    'city' => 'Neulengbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.19745',
    'longitude' => '15.90219',
  ),
  2016 => 
  array (
    'city' => 'Neukirchen bei Lambach',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.1',
    'longitude' => '13.81667',
  ),
  2017 => 
  array (
    'city' => 'Neukirchen an der Vöckla',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.03333',
    'longitude' => '13.53333',
  ),
  2018 => 
  array (
    'city' => 'Neukirchen am Großvenediger',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '12.28333',
  ),
  2019 => 
  array (
    'city' => 'Neuhofen an der Ybbs',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.05795',
    'longitude' => '14.85489',
  ),
  2020 => 
  array (
    'city' => 'Neuhaus am Klausenbach',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '46.87056',
    'longitude' => '16.02889',
  ),
  2021 => 
  array (
    'city' => 'Neuhaus',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.63333',
    'longitude' => '14.88333',
  ),
  2022 => 
  array (
    'city' => 'Neufeld an der Leitha',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.85',
    'longitude' => '16.36667',
  ),
  2023 => 
  array (
    'city' => 'Neudörfl',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.78333',
    'longitude' => '16.28333',
  ),
  2024 => 
  array (
    'city' => 'Neudorf bei Staatz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.72083',
    'longitude' => '16.49139',
  ),
  2025 => 
  array (
    'city' => 'Neudau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '16.1',
  ),
  2026 => 
  array (
    'city' => 'Neuberg an der Mürz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.66423',
    'longitude' => '15.57226',
  ),
  2027 => 
  array (
    'city' => 'Nestelbach im Ilztal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '15.86667',
  ),
  2028 => 
  array (
    'city' => 'Nestelbach bei Graz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06053',
    'longitude' => '15.6114',
  ),
  2029 => 
  array (
    'city' => 'Nesselwängle',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '10.61667',
  ),
  2030 => 
  array (
    'city' => 'Nenzing',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.18436',
    'longitude' => '9.70539',
  ),
  2031 => 
  array (
    'city' => 'Neidling',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.23333',
    'longitude' => '15.55',
  ),
  2032 => 
  array (
    'city' => 'Neckenmarkt',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '16.55',
  ),
  2033 => 
  array (
    'city' => 'Nauders',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.88333',
    'longitude' => '10.51667',
  ),
  2034 => 
  array (
    'city' => 'Natters',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23414',
    'longitude' => '11.37342',
  ),
  2035 => 
  array (
    'city' => 'Nassereith',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '10.83333',
  ),
  2036 => 
  array (
    'city' => 'Namlos',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '10.66667',
  ),
  2037 => 
  array (
    'city' => 'Naas',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '15.6',
  ),
  2038 => 
  array (
    'city' => 'Mutters',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '11.38333',
  ),
  2039 => 
  array (
    'city' => 'Musau',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '10.66667',
  ),
  2040 => 
  array (
    'city' => 'Mürzzuschlag',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '15.68333',
  ),
  2041 => 
  array (
    'city' => 'Mürzsteg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.66667',
    'longitude' => '15.48333',
  ),
  2042 => 
  array (
    'city' => 'Mürzhofen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '15.38333',
  ),
  2043 => 
  array (
    'city' => 'Mureck',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.70806',
    'longitude' => '15.77472',
  ),
  2044 => 
  array (
    'city' => 'Murau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '14.16667',
  ),
  2045 => 
  array (
    'city' => 'Münster',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.42164',
    'longitude' => '11.83356',
  ),
  2046 => 
  array (
    'city' => 'Münchendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.03333',
    'longitude' => '16.38333',
  ),
  2047 => 
  array (
    'city' => 'Müllendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.83333',
    'longitude' => '16.45',
  ),
  2048 => 
  array (
    'city' => 'Muhr',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '13.5',
  ),
  2049 => 
  array (
    'city' => 'Mühlgraben',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '46.88972',
    'longitude' => '16.04083',
  ),
  2050 => 
  array (
    'city' => 'Mühlen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.03071',
    'longitude' => '14.50848',
  ),
  2051 => 
  array (
    'city' => 'Mühldorf bei Feldbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.93861',
    'longitude' => '15.9075',
  ),
  2052 => 
  array (
    'city' => 'Mühldorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.36667',
    'longitude' => '15.35',
  ),
  2053 => 
  array (
    'city' => 'Mühldorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.86028',
    'longitude' => '13.35361',
  ),
  2054 => 
  array (
    'city' => 'Mühlbach am Hochkönig',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '13.13333',
  ),
  2055 => 
  array (
    'city' => 'Muggendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.91059',
    'longitude' => '15.93533',
  ),
  2056 => 
  array (
    'city' => 'Mötz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '10.95',
  ),
  2057 => 
  array (
    'city' => 'Moschendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '16.48333',
  ),
  2058 => 
  array (
    'city' => 'Mörtschach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.92389',
    'longitude' => '12.91778',
  ),
  2059 => 
  array (
    'city' => 'Mortantsch',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '15.56667',
  ),
  2060 => 
  array (
    'city' => 'Mörbisch am See',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.75',
    'longitude' => '16.66667',
  ),
  2061 => 
  array (
    'city' => 'Mooskirchen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.98167',
    'longitude' => '15.27889',
  ),
  2062 => 
  array (
    'city' => 'Moosburg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.6575',
    'longitude' => '14.17472',
  ),
  2063 => 
  array (
    'city' => 'Moosbrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '16.45',
  ),
  2064 => 
  array (
    'city' => 'Mönichwald',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.45',
    'longitude' => '15.86667',
  ),
  2065 => 
  array (
    'city' => 'Mönichkirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '16.03333',
  ),
  2066 => 
  array (
    'city' => 'Mondsee',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.85648',
    'longitude' => '13.34908',
  ),
  2067 => 
  array (
    'city' => 'Mönchhof',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.8802',
    'longitude' => '16.94126',
  ),
  2068 => 
  array (
    'city' => 'Mölbling',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.85',
    'longitude' => '14.43333',
  ),
  2069 => 
  array (
    'city' => 'Möggers',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '9.81667',
  ),
  2070 => 
  array (
    'city' => 'Mogersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '46.94917',
    'longitude' => '16.23222',
  ),
  2071 => 
  array (
    'city' => 'Modriach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.95',
    'longitude' => '15.05',
  ),
  2072 => 
  array (
    'city' => 'Mödling',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08605',
    'longitude' => '16.28921',
  ),
  2073 => 
  array (
    'city' => 'Mittersill',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '12.48333',
  ),
  2074 => 
  array (
    'city' => 'Mitterndorf an der Fischa',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.98333',
    'longitude' => '16.46667',
  ),
  2075 => 
  array (
    'city' => 'Mitterlabill',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.88917',
    'longitude' => '15.63556',
  ),
  2076 => 
  array (
    'city' => 'Mitterdorf im Mürztal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '15.51667',
  ),
  2077 => 
  array (
    'city' => 'Mitterdorf an der Raab',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '15.6',
  ),
  2078 => 
  array (
    'city' => 'Mitterbach am Erlaufsee',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.81396',
    'longitude' => '15.29537',
  ),
  2079 => 
  array (
    'city' => 'Mittelberg',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.3237',
    'longitude' => '10.15463',
  ),
  2080 => 
  array (
    'city' => 'Mistelbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.57',
    'longitude' => '16.57667',
  ),
  2081 => 
  array (
    'city' => 'Mischendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '16.31667',
  ),
  2082 => 
  array (
    'city' => 'Mils bei Imst',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.20616',
    'longitude' => '10.67485',
  ),
  2083 => 
  array (
    'city' => 'Miesenbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.84035',
    'longitude' => '15.98236',
  ),
  2084 => 
  array (
    'city' => 'Mieming',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '10.98333',
  ),
  2085 => 
  array (
    'city' => 'Mieders',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '11.38333',
  ),
  2086 => 
  array (
    'city' => 'Michelhausen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.29085',
    'longitude' => '15.93893',
  ),
  2087 => 
  array (
    'city' => 'Micheldorf in Oberösterreich',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.87764',
    'longitude' => '14.13357',
  ),
  2088 => 
  array (
    'city' => 'Micheldorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.91667',
    'longitude' => '14.41667',
  ),
  2089 => 
  array (
    'city' => 'Michaelerberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.41083',
    'longitude' => '13.89333',
  ),
  2090 => 
  array (
    'city' => 'Mettersdorf am Saßbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.80583',
    'longitude' => '15.71111',
  ),
  2091 => 
  array (
    'city' => 'Metnitz',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.98056',
    'longitude' => '14.21667',
  ),
  2092 => 
  array (
    'city' => 'Merkendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.85722',
    'longitude' => '15.90389',
  ),
  2093 => 
  array (
    'city' => 'Mellach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.93333',
    'longitude' => '15.51667',
  ),
  2094 => 
  array (
    'city' => 'Melk',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.22737',
    'longitude' => '15.33186',
  ),
  2095 => 
  array (
    'city' => 'Meiningen',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.29891',
    'longitude' => '9.57862',
  ),
  2096 => 
  array (
    'city' => 'Mayrhofen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '11.86667',
  ),
  2097 => 
  array (
    'city' => 'Mautern in Steiermark',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '14.83333',
  ),
  2098 => 
  array (
    'city' => 'Mauterndorf',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.13451',
    'longitude' => '13.67884',
  ),
  2099 => 
  array (
    'city' => 'Mauerbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.24514',
    'longitude' => '16.16793',
  ),
  2100 => 
  array (
    'city' => 'Mattsee',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.96667',
    'longitude' => '13.1',
  ),
  2101 => 
  array (
    'city' => 'Mattersburg',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.73333',
    'longitude' => '16.4',
  ),
  2102 => 
  array (
    'city' => 'Matrei in Osttirol',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47',
    'longitude' => '12.53333',
  ),
  2103 => 
  array (
    'city' => 'Matrei am Brenner',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '11.45',
  ),
  2104 => 
  array (
    'city' => 'Marz',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.71667',
    'longitude' => '16.41667',
  ),
  2105 => 
  array (
    'city' => 'Martinsberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.36667',
    'longitude' => '15.15',
  ),
  2106 => 
  array (
    'city' => 'Markt Sankt Martin',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '16.43333',
  ),
  2107 => 
  array (
    'city' => 'Sankt Florian',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.20568',
    'longitude' => '14.37836',
  ),
  2108 => 
  array (
    'city' => 'Bad Pirawarth',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.45194',
    'longitude' => '16.59833',
  ),
  2109 => 
  array (
    'city' => 'Markt Piesting',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.87358',
    'longitude' => '16.1251',
  ),
  2110 => 
  array (
    'city' => 'Markt Neuhodis',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '16.4',
  ),
  2111 => 
  array (
    'city' => 'Markt Allhau',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '16.08333',
  ),
  2112 => 
  array (
    'city' => 'Markgrafneusiedl',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.26667',
    'longitude' => '16.63333',
  ),
  2113 => 
  array (
    'city' => 'Mariazell',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.77306',
    'longitude' => '15.31639',
  ),
  2114 => 
  array (
    'city' => 'Maria Wörth',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.61639',
    'longitude' => '14.16306',
  ),
  2115 => 
  array (
    'city' => 'Maria Taferl',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.21667',
    'longitude' => '15.15',
  ),
  2116 => 
  array (
    'city' => 'Mariastein',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '12.05',
  ),
  2117 => 
  array (
    'city' => 'Mariasdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '16.21667',
  ),
  2118 => 
  array (
    'city' => 'Maria Saal',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.68083',
    'longitude' => '14.34861',
  ),
  2119 => 
  array (
    'city' => 'Maria Rain',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.55389',
    'longitude' => '14.29556',
  ),
  2120 => 
  array (
    'city' => 'Mariapfarr',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '13.75',
  ),
  2121 => 
  array (
    'city' => 'Maria Neustift',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.93333',
    'longitude' => '14.6',
  ),
  2122 => 
  array (
    'city' => 'Maria Lankowitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '15.06667',
  ),
  2123 => 
  array (
    'city' => 'Maria Laach am Jauerling',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.3',
    'longitude' => '15.33333',
  ),
  2124 => 
  array (
    'city' => 'Mariahof',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '14.4',
  ),
  2125 => 
  array (
    'city' => 'Maria Enzersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1',
    'longitude' => '16.28333',
  ),
  2126 => 
  array (
    'city' => 'Maria-Anzbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.19012',
    'longitude' => '15.93155',
  ),
  2127 => 
  array (
    'city' => 'Maria Alm am Steinernen Meer',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.40579',
    'longitude' => '12.90121',
  ),
  2128 => 
  array (
    'city' => 'Marchtrenk',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.18333',
    'longitude' => '14.11667',
  ),
  2129 => 
  array (
    'city' => 'Marchegg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.27885',
    'longitude' => '16.90933',
  ),
  2130 => 
  array (
    'city' => 'Marbach an der Donau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.21667',
    'longitude' => '15.15',
  ),
  2131 => 
  array (
    'city' => 'Mannsdorf an der Donau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.152',
    'longitude' => '16.66506',
  ),
  2132 => 
  array (
    'city' => 'Manning',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.08851',
    'longitude' => '13.66682',
  ),
  2133 => 
  array (
    'city' => 'Mannersdorf an der Rabnitz',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '16.51667',
  ),
  2134 => 
  array (
    'city' => 'Mannersdorf am Leithagebirge',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.96667',
    'longitude' => '16.6',
  ),
  2135 => 
  array (
    'city' => 'Mank',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11024',
    'longitude' => '15.33915',
  ),
  2136 => 
  array (
    'city' => 'Maissau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.56667',
    'longitude' => '15.81667',
  ),
  2137 => 
  array (
    'city' => 'Maishofen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '12.8',
  ),
  2138 => 
  array (
    'city' => 'Mailberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.67379',
    'longitude' => '16.18132',
  ),
  2139 => 
  array (
    'city' => 'Maierdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.8925',
    'longitude' => '15.84972',
  ),
  2140 => 
  array (
    'city' => 'Mäder',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '9.61667',
  ),
  2141 => 
  array (
    'city' => 'Lutzmannsburg',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '16.63333',
  ),
  2142 => 
  array (
    'city' => 'Lustenau',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.42642',
    'longitude' => '9.65851',
  ),
  2143 => 
  array (
    'city' => 'Lunz am See',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.8612',
    'longitude' => '15.02998',
  ),
  2144 => 
  array (
    'city' => 'Ludmannsdorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.54139',
    'longitude' => '14.13425',
  ),
  2145 => 
  array (
    'city' => 'Ludesch',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '9.78306',
  ),
  2146 => 
  array (
    'city' => 'Losenstein',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.92428',
    'longitude' => '14.43672',
  ),
  2147 => 
  array (
    'city' => 'Lorüns',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.13306',
    'longitude' => '9.85',
  ),
  2148 => 
  array (
    'city' => 'Loretto',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.9',
    'longitude' => '16.51667',
  ),
  2149 => 
  array (
    'city' => 'Loosdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.2',
    'longitude' => '15.4',
  ),
  2150 => 
  array (
    'city' => 'Loipersdorf bei Fürstenfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47',
    'longitude' => '16.1',
  ),
  2151 => 
  array (
    'city' => 'Loipersbach im Burgenland',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.7',
    'longitude' => '16.46667',
  ),
  2152 => 
  array (
    'city' => 'Loich',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.99578',
    'longitude' => '15.40163',
  ),
  2153 => 
  array (
    'city' => 'Lofer',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.58634',
    'longitude' => '12.6932',
  ),
  2154 => 
  array (
    'city' => 'Lödersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.95861',
    'longitude' => '15.94333',
  ),
  2155 => 
  array (
    'city' => 'Lochau',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '9.75',
  ),
  2156 => 
  array (
    'city' => 'Litzelsdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '16.15',
  ),
  2157 => 
  array (
    'city' => 'Litschau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.93333',
    'longitude' => '15.05',
  ),
  2158 => 
  array (
    'city' => 'Linz',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.30639',
    'longitude' => '14.28611',
  ),
  2159 => 
  array (
    'city' => 'Lilienfeld',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01312',
    'longitude' => '15.59664',
  ),
  2160 => 
  array (
    'city' => 'Ligist',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.99389',
    'longitude' => '15.21083',
  ),
  2161 => 
  array (
    'city' => 'Liezen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '14.23333',
  ),
  2162 => 
  array (
    'city' => 'Lienz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.8289',
    'longitude' => '12.76903',
  ),
  2163 => 
  array (
    'city' => 'Lieboch',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.97417',
    'longitude' => '15.3375',
  ),
  2164 => 
  array (
    'city' => 'Lichtenwörth',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.83333',
    'longitude' => '16.28333',
  ),
  2165 => 
  array (
    'city' => 'Lichtenegg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '16.2',
  ),
  2166 => 
  array (
    'city' => 'Leutschach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.66722',
    'longitude' => '15.46889',
  ),
  2167 => 
  array (
    'city' => 'Lermoos',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '10.88333',
  ),
  2168 => 
  array (
    'city' => 'Leopoldsdorf im Marchfelde',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.22261',
    'longitude' => '16.68858',
  ),
  2169 => 
  array (
    'city' => 'Leopoldsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11557',
    'longitude' => '16.39126',
  ),
  2170 => 
  array (
    'city' => 'Leonding',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.27965',
    'longitude' => '14.2533',
  ),
  2171 => 
  array (
    'city' => 'Leogang',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.43906',
    'longitude' => '12.76109',
  ),
  2172 => 
  array (
    'city' => 'Leobersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.92796',
    'longitude' => '16.21651',
  ),
  2173 => 
  array (
    'city' => 'Leobendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.38333',
    'longitude' => '16.31667',
  ),
  2174 => 
  array (
    'city' => 'Leoben',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '15.1',
  ),
  2175 => 
  array (
    'city' => 'Lenzing',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.97326',
    'longitude' => '13.60846',
  ),
  2176 => 
  array (
    'city' => 'Lengenfeld',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.46667',
    'longitude' => '15.58333',
  ),
  2177 => 
  array (
    'city' => 'Lendorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.83528',
    'longitude' => '13.43028',
  ),
  2178 => 
  array (
    'city' => 'Lend',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.29856',
    'longitude' => '13.05176',
  ),
  2179 => 
  array (
    'city' => 'Leitzersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.41667',
    'longitude' => '16.23333',
  ),
  2180 => 
  array (
    'city' => 'Leithaprodersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.93333',
    'longitude' => '16.46667',
  ),
  2181 => 
  array (
    'city' => 'Leitersdorf im Raabtal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.95',
    'longitude' => '15.95',
  ),
  2182 => 
  array (
    'city' => 'Leisach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.8125',
    'longitude' => '12.74861',
  ),
  2183 => 
  array (
    'city' => 'Leibnitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.78161',
    'longitude' => '15.53836',
  ),
  2184 => 
  array (
    'city' => 'Leiben',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.24628',
    'longitude' => '15.2746',
  ),
  2185 => 
  array (
    'city' => 'Lechaschau',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '10.7',
  ),
  2186 => 
  array (
    'city' => 'Lech',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.20797',
    'longitude' => '10.14184',
  ),
  2187 => 
  array (
    'city' => 'Laxenburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06833',
    'longitude' => '16.35607',
  ),
  2188 => 
  array (
    'city' => 'Lavant',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.79889',
    'longitude' => '12.83806',
  ),
  2189 => 
  array (
    'city' => 'Lavamünd',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.64019',
    'longitude' => '14.94733',
  ),
  2190 => 
  array (
    'city' => 'Lauterach',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.48306',
    'longitude' => '9.73306',
  ),
  2191 => 
  array (
    'city' => 'Laussa',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '14.45',
  ),
  2192 => 
  array (
    'city' => 'Lassing',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '14.26667',
  ),
  2193 => 
  array (
    'city' => 'Lassee',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.22479',
    'longitude' => '16.8223',
  ),
  2194 => 
  array (
    'city' => 'Lanzenkirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.73333',
    'longitude' => '16.23333',
  ),
  2195 => 
  array (
    'city' => 'Lans',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '11.45',
  ),
  2196 => 
  array (
    'city' => 'Lannach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.94611',
    'longitude' => '15.33722',
  ),
  2197 => 
  array (
    'city' => 'Langschlag',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.56667',
    'longitude' => '14.88333',
  ),
  2198 => 
  array (
    'city' => 'Langenzersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.3',
    'longitude' => '16.35',
  ),
  2199 => 
  array (
    'city' => 'Langenwang',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '15.61667',
  ),
  2200 => 
  array (
    'city' => 'Langenrohr',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.30489',
    'longitude' => '16.01034',
  ),
  2201 => 
  array (
    'city' => 'Langenlois',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.46667',
    'longitude' => '15.66667',
  ),
  2202 => 
  array (
    'city' => 'Langegg bei Graz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '15.63333',
  ),
  2203 => 
  array (
    'city' => 'Langau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.83207',
    'longitude' => '15.7156',
  ),
  2204 => 
  array (
    'city' => 'Lang',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.83765',
    'longitude' => '15.50471',
  ),
  2205 => 
  array (
    'city' => 'Landl',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.65',
    'longitude' => '14.71667',
  ),
  2206 => 
  array (
    'city' => 'Landeck',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.13988',
    'longitude' => '10.56593',
  ),
  2207 => 
  array (
    'city' => 'Lamprechtshausen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.98333',
    'longitude' => '12.95',
  ),
  2208 => 
  array (
    'city' => 'Lambach',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.09276',
    'longitude' => '13.87453',
  ),
  2209 => 
  array (
    'city' => 'Lafnitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '16.01667',
  ),
  2210 => 
  array (
    'city' => 'Ladis',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '10.63333',
  ),
  2211 => 
  array (
    'city' => 'Ladendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.53333',
    'longitude' => '16.48333',
  ),
  2212 => 
  array (
    'city' => 'Lackendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '16.5',
  ),
  2213 => 
  array (
    'city' => 'Lackenbach',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '16.46667',
  ),
  2214 => 
  array (
    'city' => 'Labuch',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '15.66667',
  ),
  2215 => 
  array (
    'city' => 'Laakirchen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.98188',
    'longitude' => '13.82166',
  ),
  2216 => 
  array (
    'city' => 'Laab im Walde',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.15486',
    'longitude' => '16.17359',
  ),
  2217 => 
  array (
    'city' => 'Laa an der Thaya',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.71667',
    'longitude' => '16.38333',
  ),
  2218 => 
  array (
    'city' => 'Kundl',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '11.98333',
  ),
  2219 => 
  array (
    'city' => 'Kumberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '15.53333',
  ),
  2220 => 
  array (
    'city' => 'Kulm am Zirbitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '14.48333',
  ),
  2221 => 
  array (
    'city' => 'Kukmirn',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.07544',
    'longitude' => '16.21033',
  ),
  2222 => 
  array (
    'city' => 'Kufstein',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '12.16667',
  ),
  2223 => 
  array (
    'city' => 'Kuchl',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.62647',
    'longitude' => '13.1448',
  ),
  2224 => 
  array (
    'city' => 'Krusdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.83944',
    'longitude' => '15.86083',
  ),
  2225 => 
  array (
    'city' => 'Krumegg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.02111',
    'longitude' => '15.63139',
  ),
  2226 => 
  array (
    'city' => 'Krumbach',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.48306',
    'longitude' => '9.93583',
  ),
  2227 => 
  array (
    'city' => 'Krumau am Kamp',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.58333',
    'longitude' => '15.43333',
  ),
  2228 => 
  array (
    'city' => 'Krottendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '15.63333',
  ),
  2229 => 
  array (
    'city' => 'Krispl',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.71667',
    'longitude' => '13.18333',
  ),
  2230 => 
  array (
    'city' => 'Krieglach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '15.55',
  ),
  2231 => 
  array (
    'city' => 'Bad Kreuzen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.26737',
    'longitude' => '14.80648',
  ),
  2232 => 
  array (
    'city' => 'Krensdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.78333',
    'longitude' => '16.41667',
  ),
  2233 => 
  array (
    'city' => 'Kremsmünster',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.0529',
    'longitude' => '14.12919',
  ),
  2234 => 
  array (
    'city' => 'Krems an der Donau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.40921',
    'longitude' => '15.61415',
  ),
  2235 => 
  array (
    'city' => 'Kraubath an der Mur',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '14.93333',
  ),
  2236 => 
  array (
    'city' => 'Kramsach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.45',
    'longitude' => '11.86667',
  ),
  2237 => 
  array (
    'city' => 'Krakauschatten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '13.96667',
  ),
  2238 => 
  array (
    'city' => 'Krakauhintermühlen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '13.98333',
  ),
  2239 => 
  array (
    'city' => 'Krakaudorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '14.01667',
  ),
  2240 => 
  array (
    'city' => 'Köttmannsdorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.56139',
    'longitude' => '14.23389',
  ),
  2241 => 
  array (
    'city' => 'Kottingbrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.95096',
    'longitude' => '16.22715',
  ),
  2242 => 
  array (
    'city' => 'Köstendorf',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '13.2',
  ),
  2243 => 
  array (
    'city' => 'Kössen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.6699',
    'longitude' => '12.40545',
  ),
  2244 => 
  array (
    'city' => 'Korneuburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.35',
    'longitude' => '16.33333',
  ),
  2245 => 
  array (
    'city' => 'Koppl',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.80808',
    'longitude' => '13.15561',
  ),
  2246 => 
  array (
    'city' => 'Königstetten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.30198',
    'longitude' => '16.14492',
  ),
  2247 => 
  array (
    'city' => 'Königsdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47',
    'longitude' => '16.16667',
  ),
  2248 => 
  array (
    'city' => 'Kolsass',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.63333',
  ),
  2249 => 
  array (
    'city' => 'Kohlschwarz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '15.11667',
  ),
  2250 => 
  array (
    'city' => 'Kohlberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.9',
    'longitude' => '15.78333',
  ),
  2251 => 
  array (
    'city' => 'Kohfidisch',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '16.35',
  ),
  2252 => 
  array (
    'city' => 'Koglhof',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '15.68333',
  ),
  2253 => 
  array (
    'city' => 'Köflach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '15.08333',
  ),
  2254 => 
  array (
    'city' => 'Koblach',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.33306',
    'longitude' => '9.6',
  ),
  2255 => 
  array (
    'city' => 'Kobersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '16.4',
  ),
  2256 => 
  array (
    'city' => 'Kobenz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '14.85',
  ),
  2257 => 
  array (
    'city' => 'Knittelfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '14.81667',
  ),
  2258 => 
  array (
    'city' => 'Klosterneuburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.30521',
    'longitude' => '16.32522',
  ),
  2259 => 
  array (
    'city' => 'Klösterle',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '10.08333',
  ),
  2260 => 
  array (
    'city' => 'Kloster',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.88333',
    'longitude' => '15.08333',
  ),
  2261 => 
  array (
    'city' => 'Klöch',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.76472',
    'longitude' => '15.96556',
  ),
  2262 => 
  array (
    'city' => 'Klingenbach',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.75',
    'longitude' => '16.55',
  ),
  2263 => 
  array (
    'city' => 'Kleinzell im Mühlkreis',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.45585',
    'longitude' => '13.99195',
  ),
  2264 => 
  array (
    'city' => 'Kleinzell',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.97993',
    'longitude' => '15.7362',
  ),
  2265 => 
  array (
    'city' => 'Kleinsölk',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.39444',
    'longitude' => '13.93944',
  ),
  2266 => 
  array (
    'city' => 'Klein-Pöchlarn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.21667',
    'longitude' => '15.21667',
  ),
  2267 => 
  array (
    'city' => 'Kleinmürbisch',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '16.33333',
  ),
  2268 => 
  array (
    'city' => 'Kleinlobming',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '14.83333',
  ),
  2269 => 
  array (
    'city' => 'Kleinkirchheim',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.82278',
    'longitude' => '13.79222',
  ),
  2270 => 
  array (
    'city' => 'Klausen-Leopoldsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08771',
    'longitude' => '16.01686',
  ),
  2271 => 
  array (
    'city' => 'Klaus',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.30913',
    'longitude' => '9.64678',
  ),
  2272 => 
  array (
    'city' => 'Klagenfurt am Wörthersee',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.62472',
    'longitude' => '14.30528',
  ),
  2273 => 
  array (
    'city' => 'Kitzeck im Sausal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.76667',
    'longitude' => '15.43333',
  ),
  2274 => 
  array (
    'city' => 'Kitzbühel',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.44637',
    'longitude' => '12.39215',
  ),
  2275 => 
  array (
    'city' => 'Kittsee',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '48.0925',
    'longitude' => '17.06389',
  ),
  2276 => 
  array (
    'city' => 'Kirnberg an der Mank',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.07246',
    'longitude' => '15.32232',
  ),
  2277 => 
  array (
    'city' => 'Kirchstetten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.18333',
    'longitude' => '15.81667',
  ),
  2278 => 
  array (
    'city' => 'Kirchschlag in der Buckligen Welt',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '16.28333',
  ),
  2279 => 
  array (
    'city' => 'Kirchschlag bei Linz',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.4',
    'longitude' => '14.26667',
  ),
  2280 => 
  array (
    'city' => 'Kirchschlag',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.38333',
    'longitude' => '15.21667',
  ),
  2281 => 
  array (
    'city' => 'Kirchdorf in Tirol',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.56667',
    'longitude' => '12.45',
  ),
  2282 => 
  array (
    'city' => 'Kirchbichl',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '12.08333',
  ),
  2283 => 
  array (
    'city' => 'Kirchberg in Tirol',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.44539',
    'longitude' => '12.31602',
  ),
  2284 => 
  array (
    'city' => 'Kirchberg an der Raab',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.98583',
    'longitude' => '15.76694',
  ),
  2285 => 
  array (
    'city' => 'Kirchberg an der Pielach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.0269',
    'longitude' => '15.42875',
  ),
  2286 => 
  array (
    'city' => 'Kirchberg am Wechsel',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.60738',
    'longitude' => '15.99103',
  ),
  2287 => 
  array (
    'city' => 'Kirchberg am Walde',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.71667',
    'longitude' => '15.08333',
  ),
  2288 => 
  array (
    'city' => 'Kirchberg am Wagram',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.43333',
    'longitude' => '15.88333',
  ),
  2289 => 
  array (
    'city' => 'Kirchbach in Steiermark',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.93167',
    'longitude' => '15.66194',
  ),
  2290 => 
  array (
    'city' => 'Kirchbach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.65028',
    'longitude' => '13.21139',
  ),
  2291 => 
  array (
    'city' => 'Kindberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '15.45',
  ),
  2292 => 
  array (
    'city' => 'Kilb',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.10101',
    'longitude' => '15.4085',
  ),
  2293 => 
  array (
    'city' => 'Keutschach am See',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.59306',
    'longitude' => '14.18889',
  ),
  2294 => 
  array (
    'city' => 'Kennelbach',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.48306',
    'longitude' => '9.76667',
  ),
  2295 => 
  array (
    'city' => 'Kemeten',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '16.15',
  ),
  2296 => 
  array (
    'city' => 'Kematen in Tirol',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '11.26667',
  ),
  2297 => 
  array (
    'city' => 'Kematen an der Ybbs',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.02541',
    'longitude' => '14.76468',
  ),
  2298 => 
  array (
    'city' => 'Kautzen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.91667',
    'longitude' => '15.23333',
  ),
  2299 => 
  array (
    'city' => 'Kauns',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '10.68333',
  ),
  2300 => 
  array (
    'city' => 'Kaumberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.02415',
    'longitude' => '15.89842',
  ),
  2301 => 
  array (
    'city' => 'Katzelsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.78333',
    'longitude' => '16.28333',
  ),
  2302 => 
  array (
    'city' => 'Kasten bei Böheimkirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1532',
    'longitude' => '15.77946',
  ),
  2303 => 
  array (
    'city' => 'Kartitsch',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.72889',
    'longitude' => '12.50083',
  ),
  2304 => 
  array (
    'city' => 'Karrösten',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '10.76667',
  ),
  2305 => 
  array (
    'city' => 'Karres',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '10.78333',
  ),
  2306 => 
  array (
    'city' => 'Karlstetten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.25',
    'longitude' => '15.56667',
  ),
  2307 => 
  array (
    'city' => 'Kaprun',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.27239',
    'longitude' => '12.75985',
  ),
  2308 => 
  array (
    'city' => 'Kappl',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '10.38333',
  ),
  2309 => 
  array (
    'city' => 'Kappel am Krappfeld',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.83861',
    'longitude' => '14.48639',
  ),
  2310 => 
  array (
    'city' => 'Kapfenstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.88611',
    'longitude' => '15.97167',
  ),
  2311 => 
  array (
    'city' => 'Kapfenberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.44458',
    'longitude' => '15.29331',
  ),
  2312 => 
  array (
    'city' => 'Kapelln',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.25817',
    'longitude' => '15.75731',
  ),
  2313 => 
  array (
    'city' => 'Kapellen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.63333',
    'longitude' => '15.61667',
  ),
  2314 => 
  array (
    'city' => 'Kammern im Liesingtal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '14.9',
  ),
  2315 => 
  array (
    'city' => 'Kalwang',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '14.75',
  ),
  2316 => 
  array (
    'city' => 'Kaltenleutgeben',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11646',
    'longitude' => '16.19956',
  ),
  2317 => 
  array (
    'city' => 'Kaltenbach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.86667',
  ),
  2318 => 
  array (
    'city' => 'Kalsdorf bei Graz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.96528',
    'longitude' => '15.48028',
  ),
  2319 => 
  array (
    'city' => 'Kaisersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '16.4',
  ),
  2320 => 
  array (
    'city' => 'Kaindorf an der Sulm',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.79248',
    'longitude' => '15.53879',
  ),
  2321 => 
  array (
    'city' => 'Kaindorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '15.9',
  ),
  2322 => 
  array (
    'city' => 'Kainach bei Voitsberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '15.08333',
  ),
  2323 => 
  array (
    'city' => 'Kaibing',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '15.83333',
  ),
  2324 => 
  array (
    'city' => 'Jungholz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.57409',
    'longitude' => '10.44723',
  ),
  2325 => 
  array (
    'city' => 'Judenburg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '14.66667',
  ),
  2326 => 
  array (
    'city' => 'Jois',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.96165',
    'longitude' => '16.79604',
  ),
  2327 => 
  array (
    'city' => 'Johnsbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '14.58333',
  ),
  2328 => 
  array (
    'city' => 'Jochberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '12.4',
  ),
  2329 => 
  array (
    'city' => 'Jerzens',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '10.73333',
  ),
  2330 => 
  array (
    'city' => 'Jennersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '46.93848',
    'longitude' => '16.14158',
  ),
  2331 => 
  array (
    'city' => 'Jenbach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.39173',
    'longitude' => '11.77245',
  ),
  2332 => 
  array (
    'city' => 'Jedenspeigen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.49807',
    'longitude' => '16.87225',
  ),
  2333 => 
  array (
    'city' => 'Japons',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.7925',
    'longitude' => '15.56831',
  ),
  2334 => 
  array (
    'city' => 'Jaidhof',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.53333',
    'longitude' => '15.48333',
  ),
  2335 => 
  array (
    'city' => 'Jagerberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.85361',
    'longitude' => '15.73806',
  ),
  2336 => 
  array (
    'city' => 'Jabing',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '16.28333',
  ),
  2337 => 
  array (
    'city' => 'Ischgl',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.01257',
    'longitude' => '10.29179',
  ),
  2338 => 
  array (
    'city' => 'Irschen',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.75694',
    'longitude' => '13.02528',
  ),
  2339 => 
  array (
    'city' => 'Irdning',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.50529',
    'longitude' => '14.10155',
  ),
  2340 => 
  array (
    'city' => 'Inzing',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.18333',
  ),
  2341 => 
  array (
    'city' => 'Inzenhof',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '16.31667',
  ),
  2342 => 
  array (
    'city' => 'Innsbruck',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.26266',
    'longitude' => '11.39454',
  ),
  2343 => 
  array (
    'city' => 'Innervillgraten',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.81194',
    'longitude' => '12.37472',
  ),
  2344 => 
  array (
    'city' => 'Innerschwand',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.83333',
    'longitude' => '13.4',
  ),
  2345 => 
  array (
    'city' => 'Innerbraz',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '9.91667',
  ),
  2346 => 
  array (
    'city' => 'Imsterberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.20517',
    'longitude' => '10.69605',
  ),
  2347 => 
  array (
    'city' => 'Imst',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.24504',
    'longitude' => '10.73974',
  ),
  2348 => 
  array (
    'city' => 'Ilz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '15.91667',
  ),
  2349 => 
  array (
    'city' => 'Illmitz',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.76148',
    'longitude' => '16.80024',
  ),
  2350 => 
  array (
    'city' => 'Hüttschlag',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '13.23333',
  ),
  2351 => 
  array (
    'city' => 'Hüttenberg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.94139',
    'longitude' => '14.55',
  ),
  2352 => 
  array (
    'city' => 'Hüttau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '13.3',
  ),
  2353 => 
  array (
    'city' => 'Hürm',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.15601',
    'longitude' => '15.41262',
  ),
  2354 => 
  array (
    'city' => 'Hundsheim',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11749',
    'longitude' => '16.93581',
  ),
  2355 => 
  array (
    'city' => 'Hörsching',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.22627',
    'longitude' => '14.17786',
  ),
  2356 => 
  array (
    'city' => 'Hornstein',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.86667',
    'longitude' => '16.43333',
  ),
  2357 => 
  array (
    'city' => 'Horn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.66274',
    'longitude' => '15.65663',
  ),
  2358 => 
  array (
    'city' => 'Horitschon',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '16.55',
  ),
  2359 => 
  array (
    'city' => 'Hörbranz',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.55',
    'longitude' => '9.75',
  ),
  2360 => 
  array (
    'city' => 'Hopfgarten im Brixental',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.45',
    'longitude' => '12.16667',
  ),
  2361 => 
  array (
    'city' => 'Hopfgarten in Defereggen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.91917',
    'longitude' => '12.53639',
  ),
  2362 => 
  array (
    'city' => 'Holzhausen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.21667',
    'longitude' => '14.08333',
  ),
  2363 => 
  array (
    'city' => 'Hollersbach im Pinzgau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '12.41667',
  ),
  2364 => 
  array (
    'city' => 'Hollenthon',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '16.25',
  ),
  2365 => 
  array (
    'city' => 'Hollenstein an der Ybbs',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.8',
    'longitude' => '14.76667',
  ),
  2366 => 
  array (
    'city' => 'Hollenegg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.79147',
    'longitude' => '15.21345',
  ),
  2367 => 
  array (
    'city' => 'Hollabrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.55',
    'longitude' => '16.08333',
  ),
  2368 => 
  array (
    'city' => 'Hohenweiler',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '9.78333',
  ),
  2369 => 
  array (
    'city' => 'Hohenthurn',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.55833',
    'longitude' => '13.66778',
  ),
  2370 => 
  array (
    'city' => 'Hohentauern',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '14.48333',
  ),
  2371 => 
  array (
    'city' => 'Hohenruppersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.45',
    'longitude' => '16.65',
  ),
  2372 => 
  array (
    'city' => 'Hohenems',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '9.68306',
  ),
  2373 => 
  array (
    'city' => 'Hoheneich',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.76667',
    'longitude' => '15.01667',
  ),
  2374 => 
  array (
    'city' => 'Hohenberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.90679',
    'longitude' => '15.61998',
  ),
  2375 => 
  array (
    'city' => 'Hohenau an der Raab',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '15.55',
  ),
  2376 => 
  array (
    'city' => 'Hofstätten an der Raab',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '15.73333',
  ),
  2377 => 
  array (
    'city' => 'Höfen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '10.68333',
  ),
  2378 => 
  array (
    'city' => 'Hof bei Straden',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.8',
    'longitude' => '15.93333',
  ),
  2379 => 
  array (
    'city' => 'Hof bei Salzburg',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.81929',
    'longitude' => '13.21488',
  ),
  2380 => 
  array (
    'city' => 'Hof am Leithaberge',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '16.58333',
  ),
  2381 => 
  array (
    'city' => 'Hochwolkersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.65',
    'longitude' => '16.28333',
  ),
  2382 => 
  array (
    'city' => 'Höchst',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.45934',
    'longitude' => '9.6405',
  ),
  2383 => 
  array (
    'city' => 'Hochfilzen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '12.61667',
  ),
  2384 => 
  array (
    'city' => 'Hitzendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '15.3',
  ),
  2385 => 
  array (
    'city' => 'Hirtenberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.93095',
    'longitude' => '16.17908',
  ),
  2386 => 
  array (
    'city' => 'Hirschbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.73333',
    'longitude' => '15.11667',
  ),
  2387 => 
  array (
    'city' => 'Hirnsdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '15.81667',
  ),
  2388 => 
  array (
    'city' => 'Hirm',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.78652',
    'longitude' => '16.4546',
  ),
  2389 => 
  array (
    'city' => 'Hippach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.20435',
    'longitude' => '11.86523',
  ),
  2390 => 
  array (
    'city' => 'Hintersee',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.7',
    'longitude' => '13.28333',
  ),
  2391 => 
  array (
    'city' => 'Hinterbrühl',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08611',
    'longitude' => '16.24809',
  ),
  2392 => 
  array (
    'city' => 'Himmelberg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.75667',
    'longitude' => '14.03056',
  ),
  2393 => 
  array (
    'city' => 'Himberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08333',
    'longitude' => '16.43333',
  ),
  2394 => 
  array (
    'city' => 'Hieflau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '14.73333',
  ),
  2395 => 
  array (
    'city' => 'Heugraben',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '16.18333',
  ),
  2396 => 
  array (
    'city' => 'Herzogsdorf',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.43011',
    'longitude' => '14.1128',
  ),
  2397 => 
  array (
    'city' => 'Herzogenburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.28137',
    'longitude' => '15.69431',
  ),
  2398 => 
  array (
    'city' => 'Herrnbaumgarten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.68333',
    'longitude' => '16.68333',
  ),
  2399 => 
  array (
    'city' => 'Hernstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.89465',
    'longitude' => '16.10561',
  ),
  2400 => 
  array (
    'city' => 'Hermagor',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.62722',
    'longitude' => '13.36722',
  ),
  2401 => 
  array (
    'city' => 'Hennersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11173',
    'longitude' => '16.36311',
  ),
  2402 => 
  array (
    'city' => 'Henndorf am Wallersee',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.9',
    'longitude' => '13.18333',
  ),
  2403 => 
  array (
    'city' => 'Hengsberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.86667',
    'longitude' => '15.43333',
  ),
  2404 => 
  array (
    'city' => 'Hellmonsödt',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.43333',
    'longitude' => '14.3',
  ),
  2405 => 
  array (
    'city' => 'Heiterwang',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.45',
    'longitude' => '10.75',
  ),
  2406 => 
  array (
    'city' => 'Heiligenkreuz im Lafnitztal',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '46.98917',
    'longitude' => '16.26083',
  ),
  2407 => 
  array (
    'city' => 'Heiligenkreuz am Waasen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.95583',
    'longitude' => '15.58806',
  ),
  2408 => 
  array (
    'city' => 'Heiligenkreuz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.05559',
    'longitude' => '16.12493',
  ),
  2409 => 
  array (
    'city' => 'Heiligenbrunn',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '16.41667',
  ),
  2410 => 
  array (
    'city' => 'Heiligenblut',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '12.83333',
  ),
  2411 => 
  array (
    'city' => 'Heidenreichstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.86667',
    'longitude' => '15.11667',
  ),
  2412 => 
  array (
    'city' => 'Hausmannstätten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.99111',
    'longitude' => '15.51139',
  ),
  2413 => 
  array (
    'city' => 'Hausleiten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.38333',
    'longitude' => '16.1',
  ),
  2414 => 
  array (
    'city' => 'Hauskirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.6',
    'longitude' => '16.76667',
  ),
  2415 => 
  array (
    'city' => 'Hausbrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.61667',
    'longitude' => '16.81667',
  ),
  2416 => 
  array (
    'city' => 'Haus',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.40997',
    'longitude' => '13.76724',
  ),
  2417 => 
  array (
    'city' => 'Haunoldstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.2',
    'longitude' => '15.45',
  ),
  2418 => 
  array (
    'city' => 'Haugsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.7',
    'longitude' => '16.06667',
  ),
  2419 => 
  array (
    'city' => 'Haugschlag',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.98333',
    'longitude' => '15.05',
  ),
  2420 => 
  array (
    'city' => 'Hatzendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.98111',
    'longitude' => '15.99556',
  ),
  2421 => 
  array (
    'city' => 'Hatting',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.16667',
  ),
  2422 => 
  array (
    'city' => 'Häselgehr',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '10.5',
  ),
  2423 => 
  array (
    'city' => 'Hartl',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '15.91667',
  ),
  2424 => 
  array (
    'city' => 'Hart im Zillertal',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.35232',
    'longitude' => '11.87201',
  ),
  2425 => 
  array (
    'city' => 'Hartberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '15.96667',
  ),
  2426 => 
  array (
    'city' => 'Harmannsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.38333',
    'longitude' => '16.36667',
  ),
  2427 => 
  array (
    'city' => 'Haringsee',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1927',
    'longitude' => '16.78741',
  ),
  2428 => 
  array (
    'city' => 'Bad Häring',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '12.11667',
  ),
  2429 => 
  array (
    'city' => 'Hardegg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.85',
    'longitude' => '15.85',
  ),
  2430 => 
  array (
    'city' => 'Hard',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.48306',
    'longitude' => '9.68306',
  ),
  2431 => 
  array (
    'city' => 'Hannersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '16.38333',
  ),
  2432 => 
  array (
    'city' => 'Hallwang',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.85',
    'longitude' => '13.08333',
  ),
  2433 => 
  array (
    'city' => 'Hallein',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.68333',
    'longitude' => '13.1',
  ),
  2434 => 
  array (
    'city' => 'Hall',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '14.45',
  ),
  2435 => 
  array (
    'city' => 'Halbturn',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.87019',
    'longitude' => '16.97542',
  ),
  2436 => 
  array (
    'city' => 'Halbenrain',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.72194',
    'longitude' => '15.94667',
  ),
  2437 => 
  array (
    'city' => 'Hainzenberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.21788',
    'longitude' => '11.90034',
  ),
  2438 => 
  array (
    'city' => 'Hainsdorf im Schwarzautal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.83583',
    'longitude' => '15.64139',
  ),
  2439 => 
  array (
    'city' => 'Hainfeld',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.0339',
    'longitude' => '15.77414',
  ),
  2440 => 
  array (
    'city' => 'Hainersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '15.93333',
  ),
  2441 => 
  array (
    'city' => 'Hainburg an der Donau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.14627',
    'longitude' => '16.94504',
  ),
  2442 => 
  array (
    'city' => 'Haiming',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '10.88333',
  ),
  2443 => 
  array (
    'city' => 'Haidershofen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '14.45',
  ),
  2444 => 
  array (
    'city' => 'Haibach im Mühlkreis',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.45',
    'longitude' => '14.35',
  ),
  2445 => 
  array (
    'city' => 'Hagenbrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.33333',
    'longitude' => '16.4',
  ),
  2446 => 
  array (
    'city' => 'Hafning bei Trofaiach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '15',
  ),
  2447 => 
  array (
    'city' => 'Hafnerbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.21667',
    'longitude' => '15.48333',
  ),
  2448 => 
  array (
    'city' => 'Hadres',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.7',
    'longitude' => '16.11667',
  ),
  2449 => 
  array (
    'city' => 'Hackerberg',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '16.11667',
  ),
  2450 => 
  array (
    'city' => 'Haag',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.15',
    'longitude' => '15.5',
  ),
  2451 => 
  array (
    'city' => 'Haag',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1',
    'longitude' => '14.56667',
  ),
  2452 => 
  array (
    'city' => 'Haag',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.05',
    'longitude' => '14.51667',
  ),
  2453 => 
  array (
    'city' => 'Güttenbach',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '16.3',
  ),
  2454 => 
  array (
    'city' => 'Guttaring',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.88333',
    'longitude' => '14.5',
  ),
  2455 => 
  array (
    'city' => 'Gutenstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.876',
    'longitude' => '15.88881',
  ),
  2456 => 
  array (
    'city' => 'Gutenbrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.35',
    'longitude' => '15.11667',
  ),
  2457 => 
  array (
    'city' => 'Güssing',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.05936',
    'longitude' => '16.32431',
  ),
  2458 => 
  array (
    'city' => 'Gurk',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.87389',
    'longitude' => '14.29167',
  ),
  2459 => 
  array (
    'city' => 'Guntramsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.04687',
    'longitude' => '16.31384',
  ),
  2460 => 
  array (
    'city' => 'Guntersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.65',
    'longitude' => '16.05',
  ),
  2461 => 
  array (
    'city' => 'Gunskirchen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '13.95',
  ),
  2462 => 
  array (
    'city' => 'Günselsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.94395',
    'longitude' => '16.26062',
  ),
  2463 => 
  array (
    'city' => 'Gundersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.95',
    'longitude' => '15.23333',
  ),
  2464 => 
  array (
    'city' => 'Gumpoldskirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.04538',
    'longitude' => '16.2771',
  ),
  2465 => 
  array (
    'city' => 'Gschaid bei Birkfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.33333',
    'longitude' => '15.73333',
  ),
  2466 => 
  array (
    'city' => 'Grünbach am Schneeberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.79747',
    'longitude' => '15.98785',
  ),
  2467 => 
  array (
    'city' => 'Grünau im Almtal',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.85493',
    'longitude' => '13.95573',
  ),
  2468 => 
  array (
    'city' => 'Großweikersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.46667',
    'longitude' => '15.98333',
  ),
  2469 => 
  array (
    'city' => 'Großsölk',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '13.96667',
  ),
  2470 => 
  array (
    'city' => 'Groß-Siegharts',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.78333',
    'longitude' => '15.4',
  ),
  2471 => 
  array (
    'city' => 'Groß-Schweinbarth',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.41472',
    'longitude' => '16.63194',
  ),
  2472 => 
  array (
    'city' => 'Groß Sankt Florian',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.82444',
    'longitude' => '15.31861',
  ),
  2473 => 
  array (
    'city' => 'Großrußbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.46667',
    'longitude' => '16.41667',
  ),
  2474 => 
  array (
    'city' => 'Großriedenthal',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.48333',
    'longitude' => '15.86667',
  ),
  2475 => 
  array (
    'city' => 'Grosspetersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '16.31667',
  ),
  2476 => 
  array (
    'city' => 'Großmugl',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.49917',
    'longitude' => '16.23056',
  ),
  2477 => 
  array (
    'city' => 'Großlobming',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '14.8',
  ),
  2478 => 
  array (
    'city' => 'Großkrut',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.64389',
    'longitude' => '16.72361',
  ),
  2479 => 
  array (
    'city' => 'Großklein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.73611',
    'longitude' => '15.44444',
  ),
  2480 => 
  array (
    'city' => 'Großhofen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.25834',
    'longitude' => '16.6194',
  ),
  2481 => 
  array (
    'city' => 'Heimschuh',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.76',
    'longitude' => '15.49306',
  ),
  2482 => 
  array (
    'city' => 'Großharras',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.66389',
    'longitude' => '16.24556',
  ),
  2483 => 
  array (
    'city' => 'Groß-Gerungs',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.57422',
    'longitude' => '14.95789',
  ),
  2484 => 
  array (
    'city' => 'Groß-Enzersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.20278',
    'longitude' => '16.55083',
  ),
  2485 => 
  array (
    'city' => 'Groß-Engersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.35',
    'longitude' => '16.56667',
  ),
  2486 => 
  array (
    'city' => 'Großebersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.36244',
    'longitude' => '16.46868',
  ),
  2487 => 
  array (
    'city' => 'Grödig',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.73333',
    'longitude' => '13.03333',
  ),
  2488 => 
  array (
    'city' => 'Gröbming',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.44272',
    'longitude' => '13.90122',
  ),
  2489 => 
  array (
    'city' => 'Grins',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.14034',
    'longitude' => '10.51409',
  ),
  2490 => 
  array (
    'city' => 'Grimmenstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.61667',
    'longitude' => '16.13333',
  ),
  2491 => 
  array (
    'city' => 'Griffen',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.70444',
    'longitude' => '14.73278',
  ),
  2492 => 
  array (
    'city' => 'Grieskirchen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.23333',
    'longitude' => '13.83333',
  ),
  2493 => 
  array (
    'city' => 'Gries im Sellrain',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.19554',
    'longitude' => '11.15619',
  ),
  2494 => 
  array (
    'city' => 'Gries am Brenner',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '11.48333',
  ),
  2495 => 
  array (
    'city' => 'Gresten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.98521',
    'longitude' => '15.02552',
  ),
  2496 => 
  array (
    'city' => 'Gressenberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.8',
    'longitude' => '15.11667',
  ),
  2497 => 
  array (
    'city' => 'Greisdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.91667',
    'longitude' => '15.21667',
  ),
  2498 => 
  array (
    'city' => 'Greifenburg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.75583',
    'longitude' => '13.17778',
  ),
  2499 => 
  array (
    'city' => 'Graz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.06667',
    'longitude' => '15.45',
  ),
  2500 => 
  array (
    'city' => 'Gratwein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '15.31667',
  ),
  2501 => 
  array (
    'city' => 'Gratkorn',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '15.35',
  ),
  2502 => 
  array (
    'city' => 'Grän',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '10.55',
  ),
  2503 => 
  array (
    'city' => 'Grambach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '15.5',
  ),
  2504 => 
  array (
    'city' => 'Gramatneusiedl',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '16.48333',
  ),
  2505 => 
  array (
    'city' => 'Gramastetten',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.38028',
    'longitude' => '14.19185',
  ),
  2506 => 
  array (
    'city' => 'Gramais',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '10.53333',
  ),
  2507 => 
  array (
    'city' => 'Grafenwörth',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.4',
    'longitude' => '15.78333',
  ),
  2508 => 
  array (
    'city' => 'Grafenstein',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.6',
    'longitude' => '14.46667',
  ),
  2509 => 
  array (
    'city' => 'Grafenschlag',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.5',
    'longitude' => '15.16667',
  ),
  2510 => 
  array (
    'city' => 'Grafenschachen',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '16.06667',
  ),
  2511 => 
  array (
    'city' => 'Grafenegg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.41667',
    'longitude' => '15.73333',
  ),
  2512 => 
  array (
    'city' => 'Grafendorf bei Hartberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '16',
  ),
  2513 => 
  array (
    'city' => 'Grabersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.84306',
    'longitude' => '15.82472',
  ),
  2514 => 
  array (
    'city' => 'Götzis',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.33306',
    'longitude' => '9.63306',
  ),
  2515 => 
  array (
    'city' => 'Götzens',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23606',
    'longitude' => '11.31154',
  ),
  2516 => 
  array (
    'city' => 'Götzendorf an der Leitha',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '16.58333',
  ),
  2517 => 
  array (
    'city' => 'Göstling an der Ybbs',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.8',
    'longitude' => '14.91667',
  ),
  2518 => 
  array (
    'city' => 'Gössendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.98333',
    'longitude' => '15.48333',
  ),
  2519 => 
  array (
    'city' => 'Gossendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.91667',
    'longitude' => '15.91667',
  ),
  2520 => 
  array (
    'city' => 'Gössenberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '13.81667',
  ),
  2521 => 
  array (
    'city' => 'Gosdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.72778',
    'longitude' => '15.7925',
  ),
  2522 => 
  array (
    'city' => 'Göpfritz an der Wild',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.71667',
    'longitude' => '15.4',
  ),
  2523 => 
  array (
    'city' => 'Gols',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.89689',
    'longitude' => '16.91113',
  ),
  2524 => 
  array (
    'city' => 'Golling an der Salzach',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '13.16667',
  ),
  2525 => 
  array (
    'city' => 'Göllersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.48333',
    'longitude' => '16.11667',
  ),
  2526 => 
  array (
    'city' => 'Goldwörth',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.33333',
    'longitude' => '14.1',
  ),
  2527 => 
  array (
    'city' => 'Goldegg',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.31875',
    'longitude' => '13.09922',
  ),
  2528 => 
  array (
    'city' => 'Göfis',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.23356',
    'longitude' => '9.63458',
  ),
  2529 => 
  array (
    'city' => 'Gnesau',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.77544',
    'longitude' => '13.96251',
  ),
  2530 => 
  array (
    'city' => 'Gnas',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.87306',
    'longitude' => '15.82528',
  ),
  2531 => 
  array (
    'city' => 'Gnadendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.61667',
    'longitude' => '16.4',
  ),
  2532 => 
  array (
    'city' => 'Gmunden',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.91887',
    'longitude' => '13.79754',
  ),
  2533 => 
  array (
    'city' => 'Gmünd',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.7683',
    'longitude' => '14.9808',
  ),
  2534 => 
  array (
    'city' => 'Gmünd',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.90722',
    'longitude' => '13.52944',
  ),
  2535 => 
  array (
    'city' => 'Glojach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.86667',
    'longitude' => '15.66667',
  ),
  2536 => 
  array (
    'city' => 'Gloggnitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.67487',
    'longitude' => '15.93893',
  ),
  2537 => 
  array (
    'city' => 'Glödnitz',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.86667',
    'longitude' => '14.11667',
  ),
  2538 => 
  array (
    'city' => 'Globasnitz',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.55694',
    'longitude' => '14.70278',
  ),
  2539 => 
  array (
    'city' => 'Glinzendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.24605',
    'longitude' => '16.6406',
  ),
  2540 => 
  array (
    'city' => 'Gleisdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.10559',
    'longitude' => '15.71011',
  ),
  2541 => 
  array (
    'city' => 'Gleinstätten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.75361',
    'longitude' => '15.36972',
  ),
  2542 => 
  array (
    'city' => 'Glanegg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.71361',
    'longitude' => '14.20639',
  ),
  2543 => 
  array (
    'city' => 'Gießhübl',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.0978',
    'longitude' => '16.23479',
  ),
  2544 => 
  array (
    'city' => 'Gföhl',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.51667',
    'longitude' => '15.48333',
  ),
  2545 => 
  array (
    'city' => 'Gersdorf an der Feistritz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '15.85',
  ),
  2546 => 
  array (
    'city' => 'Gerersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.18333',
    'longitude' => '15.55',
  ),
  2547 => 
  array (
    'city' => 'Gerasdorf bei Wien',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.29447',
    'longitude' => '16.46765',
  ),
  2548 => 
  array (
    'city' => 'Geras',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.79725',
    'longitude' => '15.67268',
  ),
  2549 => 
  array (
    'city' => 'Geistthal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '15.16667',
  ),
  2550 => 
  array (
    'city' => 'Gedersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.43319',
    'longitude' => '15.68865',
  ),
  2551 => 
  array (
    'city' => 'Gaweinstal',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.46667',
    'longitude' => '16.58333',
  ),
  2552 => 
  array (
    'city' => 'Gaubitsch',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.65',
    'longitude' => '16.38333',
  ),
  2553 => 
  array (
    'city' => 'Gattendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '16.98333',
  ),
  2554 => 
  array (
    'city' => 'Gastern',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.89446',
    'longitude' => '15.22027',
  ),
  2555 => 
  array (
    'city' => 'Gasen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '15.56667',
  ),
  2556 => 
  array (
    'city' => 'Gaschurn',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '46.98333',
    'longitude' => '10.03333',
  ),
  2557 => 
  array (
    'city' => 'Garsten',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.0224',
    'longitude' => '14.40747',
  ),
  2558 => 
  array (
    'city' => 'Gars am Kamp',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.58333',
    'longitude' => '15.65',
  ),
  2559 => 
  array (
    'city' => 'Garanas',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.76667',
    'longitude' => '15.11667',
  ),
  2560 => 
  array (
    'city' => 'Ganz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '15.68333',
  ),
  2561 => 
  array (
    'city' => 'Gänserndorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.33925',
    'longitude' => '16.72016',
  ),
  2562 => 
  array (
    'city' => 'Bad Gams',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.87111',
    'longitude' => '15.22472',
  ),
  2563 => 
  array (
    'city' => 'Gams bei Hieflau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.66667',
    'longitude' => '14.78333',
  ),
  2564 => 
  array (
    'city' => 'Gampern',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.98745',
    'longitude' => '13.55927',
  ),
  2565 => 
  array (
    'city' => 'Gamlitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.72028',
    'longitude' => '15.55333',
  ),
  2566 => 
  array (
    'city' => 'Gaming',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.929',
    'longitude' => '15.08818',
  ),
  2567 => 
  array (
    'city' => 'Galtür',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.96667',
    'longitude' => '10.18333',
  ),
  2568 => 
  array (
    'city' => 'Gallzein',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '11.76667',
  ),
  2569 => 
  array (
    'city' => 'Gallneukirchen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.35363',
    'longitude' => '14.41604',
  ),
  2570 => 
  array (
    'city' => 'Gallmannsegg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '15.06667',
  ),
  2571 => 
  array (
    'city' => 'Gallizien',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.55',
    'longitude' => '14.51667',
  ),
  2572 => 
  array (
    'city' => 'Gaißau',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '9.6',
  ),
  2573 => 
  array (
    'city' => 'Gaflenz',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.88333',
    'longitude' => '14.71667',
  ),
  2574 => 
  array (
    'city' => 'Gablitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.22856',
    'longitude' => '16.15437',
  ),
  2575 => 
  array (
    'city' => 'Gabersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.77722',
    'longitude' => '15.58417',
  ),
  2576 => 
  array (
    'city' => 'Gaal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '14.66667',
  ),
  2577 => 
  array (
    'city' => 'Gaaden',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.05364',
    'longitude' => '16.20003',
  ),
  2578 => 
  array (
    'city' => 'Fußach',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.47933',
    'longitude' => '9.66278',
  ),
  2579 => 
  array (
    'city' => 'Fuschl am See',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.8',
    'longitude' => '13.3',
  ),
  2580 => 
  array (
    'city' => 'Furth an der Triesting',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.97326',
    'longitude' => '15.97326',
  ),
  2581 => 
  array (
    'city' => 'Fürstenfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '16.08333',
  ),
  2582 => 
  array (
    'city' => 'Fulpmes',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '11.35',
  ),
  2583 => 
  array (
    'city' => 'Fügenberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '11.83333',
  ),
  2584 => 
  array (
    'city' => 'Fügen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '11.85',
  ),
  2585 => 
  array (
    'city' => 'Frohnleiten',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '15.31667',
  ),
  2586 => 
  array (
    'city' => 'Fritzens',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.58333',
  ),
  2587 => 
  array (
    'city' => 'Friesach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.95528',
    'longitude' => '14.40583',
  ),
  2588 => 
  array (
    'city' => 'Friedberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '16.05',
  ),
  2589 => 
  array (
    'city' => 'Fresach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.71556',
    'longitude' => '13.69083',
  ),
  2590 => 
  array (
    'city' => 'Freistadt',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.51103',
    'longitude' => '14.50453',
  ),
  2591 => 
  array (
    'city' => 'Freiland bei Deutschlandsberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.83333',
    'longitude' => '15.13333',
  ),
  2592 => 
  array (
    'city' => 'Fraxern',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.31498',
    'longitude' => '9.67391',
  ),
  2593 => 
  array (
    'city' => 'Frauenkirchen',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.83678',
    'longitude' => '16.92581',
  ),
  2594 => 
  array (
    'city' => 'Frauenberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.42855',
    'longitude' => '15.34206',
  ),
  2595 => 
  array (
    'city' => 'Frannach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.91306',
    'longitude' => '15.63361',
  ),
  2596 => 
  array (
    'city' => 'Frankenmarkt',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.98333',
    'longitude' => '13.41667',
  ),
  2597 => 
  array (
    'city' => 'Frankenfels',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.98234',
    'longitude' => '15.32593',
  ),
  2598 => 
  array (
    'city' => 'Frankenburg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.06844',
    'longitude' => '13.49065',
  ),
  2599 => 
  array (
    'city' => 'Forstau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '13.53333',
  ),
  2600 => 
  array (
    'city' => 'Fornach',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.02277',
    'longitude' => '13.42941',
  ),
  2601 => 
  array (
    'city' => 'Forchach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '10.58333',
  ),
  2602 => 
  array (
    'city' => 'Fohnsdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '14.68333',
  ),
  2603 => 
  array (
    'city' => 'Floing',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '15.75',
  ),
  2604 => 
  array (
    'city' => 'Flirsch',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.15',
    'longitude' => '10.4',
  ),
  2605 => 
  array (
    'city' => 'Flaurling',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.28333',
    'longitude' => '11.11667',
  ),
  2606 => 
  array (
    'city' => 'Flattach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.93861',
    'longitude' => '13.13444',
  ),
  2607 => 
  array (
    'city' => 'Flatschach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '14.75',
  ),
  2608 => 
  array (
    'city' => 'Fladnitz im Raabtal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.99167',
    'longitude' => '15.78528',
  ),
  2609 => 
  array (
    'city' => 'Flachau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.34406',
    'longitude' => '13.39148',
  ),
  2610 => 
  array (
    'city' => 'Fiss',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '10.61667',
  ),
  2611 => 
  array (
    'city' => 'Fischbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '15.65',
  ),
  2612 => 
  array (
    'city' => 'Fischamend Dorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11884',
    'longitude' => '16.61287',
  ),
  2613 => 
  array (
    'city' => 'Filzmoos',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.43333',
    'longitude' => '13.51667',
  ),
  2614 => 
  array (
    'city' => 'Fieberbrunn',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '12.55',
  ),
  2615 => 
  array (
    'city' => 'Ferschnitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08333',
    'longitude' => '15',
  ),
  2616 => 
  array (
    'city' => 'Fernitz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.97389',
    'longitude' => '15.50111',
  ),
  2617 => 
  array (
    'city' => 'Ferndorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.73972',
    'longitude' => '13.6375',
  ),
  2618 => 
  array (
    'city' => 'Ferlach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.52694',
    'longitude' => '14.30194',
  ),
  2619 => 
  array (
    'city' => 'Fendels',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '10.66667',
  ),
  2620 => 
  array (
    'city' => 'Fels am Wagram',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.43333',
    'longitude' => '15.81667',
  ),
  2621 => 
  array (
    'city' => 'Felixdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.88159',
    'longitude' => '16.24208',
  ),
  2622 => 
  array (
    'city' => 'Feldkirchen in Kärnten',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.71667',
    'longitude' => '14.1',
  ),
  2623 => 
  array (
    'city' => 'Feldkirchen bei Graz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '15.45',
  ),
  2624 => 
  array (
    'city' => 'Feldkirchen an der Donau',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.35',
    'longitude' => '14.05',
  ),
  2625 => 
  array (
    'city' => 'Feldkirch',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.23306',
    'longitude' => '9.6',
  ),
  2626 => 
  array (
    'city' => 'Feldbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.95306',
    'longitude' => '15.88833',
  ),
  2627 => 
  array (
    'city' => 'Feld am See',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.77639',
    'longitude' => '13.74778',
  ),
  2628 => 
  array (
    'city' => 'Feistritz ob Bleiburg',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.55',
    'longitude' => '14.76667',
  ),
  2629 => 
  array (
    'city' => 'Feistritz im Rosental',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.51667',
    'longitude' => '14.16667',
  ),
  2630 => 
  array (
    'city' => 'Feistritz bei Knittelfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '14.88333',
  ),
  2631 => 
  array (
    'city' => 'Feistritz an der Gail',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.5775',
    'longitude' => '13.60667',
  ),
  2632 => 
  array (
    'city' => 'Feistritz am Wechsel',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '16.05',
  ),
  2633 => 
  array (
    'city' => 'Fehring',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.94',
    'longitude' => '16.00806',
  ),
  2634 => 
  array (
    'city' => 'Fallbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.65',
    'longitude' => '16.41667',
  ),
  2635 => 
  array (
    'city' => 'Falkenstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.71667',
    'longitude' => '16.58333',
  ),
  2636 => 
  array (
    'city' => 'Falkendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '13.98333',
  ),
  2637 => 
  array (
    'city' => 'Faistenau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.76667',
    'longitude' => '13.23333',
  ),
  2638 => 
  array (
    'city' => 'Euratsfeld',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08181',
    'longitude' => '14.93154',
  ),
  2639 => 
  array (
    'city' => 'Eugendorf',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.86667',
    'longitude' => '13.11667',
  ),
  2640 => 
  array (
    'city' => 'Eschenau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.04825',
    'longitude' => '15.56694',
  ),
  2641 => 
  array (
    'city' => 'Ernstbrunn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.53333',
    'longitude' => '16.35',
  ),
  2642 => 
  array (
    'city' => 'Erlauf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.18333',
    'longitude' => '15.18333',
  ),
  2643 => 
  array (
    'city' => 'Erlach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.71667',
    'longitude' => '16.21667',
  ),
  2644 => 
  array (
    'city' => 'Erl',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.68333',
    'longitude' => '12.18333',
  ),
  2645 => 
  array (
    'city' => 'Enzersfeld',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.35',
    'longitude' => '16.41667',
  ),
  2646 => 
  array (
    'city' => 'Enzersdorf an der Fischa',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08333',
    'longitude' => '16.6',
  ),
  2647 => 
  array (
    'city' => 'Enzenreith',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.66839',
    'longitude' => '15.95249',
  ),
  2648 => 
  array (
    'city' => 'Ennsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.21181',
    'longitude' => '14.5029',
  ),
  2649 => 
  array (
    'city' => 'Enns',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.21346',
    'longitude' => '14.47612',
  ),
  2650 => 
  array (
    'city' => 'Engerwitzdorf',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.34507',
    'longitude' => '14.44204',
  ),
  2651 => 
  array (
    'city' => 'Engelhartstetten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.16667',
    'longitude' => '16.88333',
  ),
  2652 => 
  array (
    'city' => 'Empersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.98333',
    'longitude' => '15.6',
  ),
  2653 => 
  array (
    'city' => 'Emmersdorf an der Donau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.2414',
    'longitude' => '15.33721',
  ),
  2654 => 
  array (
    'city' => 'Eltendorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47',
    'longitude' => '16.2',
  ),
  2655 => 
  array (
    'city' => 'Elsbethen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.75',
    'longitude' => '13.08333',
  ),
  2656 => 
  array (
    'city' => 'Elmen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.33333',
    'longitude' => '10.53333',
  ),
  2657 => 
  array (
    'city' => 'Ellmau',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.51378',
    'longitude' => '12.29937',
  ),
  2658 => 
  array (
    'city' => 'Elixhausen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.86667',
    'longitude' => '13.06667',
  ),
  2659 => 
  array (
    'city' => 'Elbigenalp',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '10.43333',
  ),
  2660 => 
  array (
    'city' => 'Eisgarn',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.9',
    'longitude' => '15.1',
  ),
  2661 => 
  array (
    'city' => 'Eisenstadt',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.85',
    'longitude' => '16.51667',
  ),
  2662 => 
  array (
    'city' => 'Eisenerz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '14.88333',
  ),
  2663 => 
  array (
    'city' => 'Eisbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '15.26667',
  ),
  2664 => 
  array (
    'city' => 'Eidenberg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.38333',
    'longitude' => '14.23333',
  ),
  2665 => 
  array (
    'city' => 'Eichgraben',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.17204',
    'longitude' => '15.98391',
  ),
  2666 => 
  array (
    'city' => 'Eichfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.72528',
    'longitude' => '15.76806',
  ),
  2667 => 
  array (
    'city' => 'Eichenberg',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '9.78333',
  ),
  2668 => 
  array (
    'city' => 'Eichberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '15.96667',
  ),
  2669 => 
  array (
    'city' => 'Eibiswald',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.68667',
    'longitude' => '15.24722',
  ),
  2670 => 
  array (
    'city' => 'Ehrenhausen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.72417',
    'longitude' => '15.58667',
  ),
  2671 => 
  array (
    'city' => 'Ehenbichl',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '10.7',
  ),
  2672 => 
  array (
    'city' => 'Eggersdorf bei Graz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '15.58333',
  ),
  2673 => 
  array (
    'city' => 'Eggern',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.90829',
    'longitude' => '15.14877',
  ),
  2674 => 
  array (
    'city' => 'Eggenburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.63892',
    'longitude' => '15.81903',
  ),
  2675 => 
  array (
    'city' => 'Egg',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.43194',
    'longitude' => '9.89556',
  ),
  2676 => 
  array (
    'city' => 'Edt bei Lambach',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.11667',
    'longitude' => '13.88333',
  ),
  2677 => 
  array (
    'city' => 'Edlitz',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '16.13333',
  ),
  2678 => 
  array (
    'city' => 'Edelstal',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '48.1',
    'longitude' => '16.98333',
  ),
  2679 => 
  array (
    'city' => 'Edelsgrub',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '15.6',
  ),
  2680 => 
  array (
    'city' => 'Edelschrott',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '15.05',
  ),
  2681 => 
  array (
    'city' => 'Edelsbach bei Feldbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.98944',
    'longitude' => '15.83694',
  ),
  2682 => 
  array (
    'city' => 'Eckartsau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.14507',
    'longitude' => '16.79737',
  ),
  2683 => 
  array (
    'city' => 'Echsenbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.71667',
    'longitude' => '15.21667',
  ),
  2684 => 
  array (
    'city' => 'Ebreichsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.95',
    'longitude' => '16.4',
  ),
  2685 => 
  array (
    'city' => 'Eberstein',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.80806',
    'longitude' => '14.56',
  ),
  2686 => 
  array (
    'city' => 'Ebersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '15.95',
  ),
  2687 => 
  array (
    'city' => 'Eberndorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.59139',
    'longitude' => '14.64361',
  ),
  2688 => 
  array (
    'city' => 'Ebergassing',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.04567',
    'longitude' => '16.51709',
  ),
  2689 => 
  array (
    'city' => 'Eberau',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.1',
    'longitude' => '16.46667',
  ),
  2690 => 
  array (
    'city' => 'Ebenthal',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.43333',
    'longitude' => '16.78333',
  ),
  2691 => 
  array (
    'city' => 'Ebenthal',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.60806',
    'longitude' => '14.36417',
  ),
  2692 => 
  array (
    'city' => 'Ebensee',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.80716',
    'longitude' => '13.779',
  ),
  2693 => 
  array (
    'city' => 'Eben im Pongau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '13.4',
  ),
  2694 => 
  array (
    'city' => 'Ebenfurth',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.86667',
    'longitude' => '16.36667',
  ),
  2695 => 
  array (
    'city' => 'Ebenau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.79073',
    'longitude' => '13.17527',
  ),
  2696 => 
  array (
    'city' => 'Ebbs',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.63333',
    'longitude' => '12.21667',
  ),
  2697 => 
  array (
    'city' => 'Dürnstein in der Steiermark',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.98833',
    'longitude' => '14.39167',
  ),
  2698 => 
  array (
    'city' => 'Dürnstein',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.38333',
    'longitude' => '15.51667',
  ),
  2699 => 
  array (
    'city' => 'Dürnkrut',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.47315',
    'longitude' => '16.85062',
  ),
  2700 => 
  array (
    'city' => 'Düns',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '9.71667',
  ),
  2701 => 
  array (
    'city' => 'Drösing',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.539',
    'longitude' => '16.90264',
  ),
  2702 => 
  array (
    'city' => 'Drasenhofen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.75',
    'longitude' => '16.65',
  ),
  2703 => 
  array (
    'city' => 'Dornbirn',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '9.73306',
  ),
  2704 => 
  array (
    'city' => 'Dorfstetten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.32573',
    'longitude' => '14.98218',
  ),
  2705 => 
  array (
    'city' => 'Dorfgastein',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '13.1',
  ),
  2706 => 
  array (
    'city' => 'Dorfbeuern',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '13.01667',
  ),
  2707 => 
  array (
    'city' => 'Doren',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.49278',
    'longitude' => '9.87972',
  ),
  2708 => 
  array (
    'city' => 'Donnerskirchen',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.89425',
    'longitude' => '16.64635',
  ),
  2709 => 
  array (
    'city' => 'Donnersbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.46139',
    'longitude' => '14.12972',
  ),
  2710 => 
  array (
    'city' => 'Dölsach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.82833',
    'longitude' => '12.84528',
  ),
  2711 => 
  array (
    'city' => 'Dobersberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.9',
    'longitude' => '15.31667',
  ),
  2712 => 
  array (
    'city' => 'Diex',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.75',
    'longitude' => '14.6',
  ),
  2713 => 
  array (
    'city' => 'Dietersdorf am Gnasbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.80917',
    'longitude' => '15.81167',
  ),
  2714 => 
  array (
    'city' => 'Dienten am Hochkönig',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.38324',
    'longitude' => '13.00369',
  ),
  2715 => 
  array (
    'city' => 'Dienersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '15.88333',
  ),
  2716 => 
  array (
    'city' => 'Deutsch-Wagram',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.29972',
    'longitude' => '16.56667',
  ),
  2717 => 
  array (
    'city' => 'Deutschlandsberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.81528',
    'longitude' => '15.22222',
  ),
  2718 => 
  array (
    'city' => 'Deutschkreutz',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.6',
    'longitude' => '16.63333',
  ),
  2719 => 
  array (
    'city' => 'Deutsch Kaltenbrunn',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.08789',
    'longitude' => '16.10793',
  ),
  2720 => 
  array (
    'city' => 'Deutsch Jahrndorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '17.1',
  ),
  2721 => 
  array (
    'city' => 'Deutsch Goritz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.75083',
    'longitude' => '15.82944',
  ),
  2722 => 
  array (
    'city' => 'Deutschfeistritz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.18333',
    'longitude' => '15.33333',
  ),
  2723 => 
  array (
    'city' => 'Desselbrunn',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '13.76667',
  ),
  2724 => 
  array (
    'city' => 'Dellach im Drautal',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.7375',
    'longitude' => '13.07833',
  ),
  2725 => 
  array (
    'city' => 'Dellach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.66667',
    'longitude' => '13.08333',
  ),
  2726 => 
  array (
    'city' => 'Dechantskirchen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '16.01667',
  ),
  2727 => 
  array (
    'city' => 'Dalaas',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.12446',
    'longitude' => '9.99104',
  ),
  2728 => 
  array (
    'city' => 'Bürs',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.14972',
    'longitude' => '9.8',
  ),
  2729 => 
  array (
    'city' => 'Burgau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.14268',
    'longitude' => '16.09643',
  ),
  2730 => 
  array (
    'city' => 'Buchkirchen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.22427',
    'longitude' => '14.02242',
  ),
  2731 => 
  array (
    'city' => 'Buch bei Jenbach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.36667',
    'longitude' => '11.75',
  ),
  2732 => 
  array (
    'city' => 'Buchbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.69648',
    'longitude' => '15.98425',
  ),
  2733 => 
  array (
    'city' => 'Brunn an der Wild',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.69425',
    'longitude' => '15.52008',
  ),
  2734 => 
  array (
    'city' => 'Brunn am Gebirge',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.10697',
    'longitude' => '16.28466',
  ),
  2735 => 
  array (
    'city' => 'Bruckneudorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '16.78333',
  ),
  2736 => 
  array (
    'city' => 'Brückl',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.75167',
    'longitude' => '14.53667',
  ),
  2737 => 
  array (
    'city' => 'Bruck an der Mur',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '15.28333',
  ),
  2738 => 
  array (
    'city' => 'Bruck an der Leitha',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '16.76667',
  ),
  2739 => 
  array (
    'city' => 'Bruck an der Großglocknerstraße',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.28494',
    'longitude' => '12.8231',
  ),
  2740 => 
  array (
    'city' => 'Bruck am Ziller',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.38998',
    'longitude' => '11.85124',
  ),
  2741 => 
  array (
    'city' => 'Bromberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.66667',
    'longitude' => '16.2',
  ),
  2742 => 
  array (
    'city' => 'Brixlegg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.42942',
    'longitude' => '11.87794',
  ),
  2743 => 
  array (
    'city' => 'Brixen im Thale',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.45',
    'longitude' => '12.25',
  ),
  2744 => 
  array (
    'city' => 'Bretstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.33333',
    'longitude' => '14.41667',
  ),
  2745 => 
  array (
    'city' => 'Breitenwang',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '10.73333',
  ),
  2746 => 
  array (
    'city' => 'Breitenfurt bei Wien',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '16.15',
  ),
  2747 => 
  array (
    'city' => 'Breitenfeld an der Rittschein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '15.95',
  ),
  2748 => 
  array (
    'city' => 'Breitenfeld am Tannenriegel',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.85',
    'longitude' => '15.63333',
  ),
  2749 => 
  array (
    'city' => 'Breitenbrunn',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.94452',
    'longitude' => '16.73149',
  ),
  2750 => 
  array (
    'city' => 'Breitenbach am Inn',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '11.96667',
  ),
  2751 => 
  array (
    'city' => 'Breitenau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.73355',
    'longitude' => '16.14338',
  ),
  2752 => 
  array (
    'city' => 'Bregenz',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.50311',
    'longitude' => '9.7471',
  ),
  2753 => 
  array (
    'city' => 'Braunau am Inn',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.25628',
    'longitude' => '13.04343',
  ),
  2754 => 
  array (
    'city' => 'Brandenberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.49053',
    'longitude' => '11.89459',
  ),
  2755 => 
  array (
    'city' => 'Bramberg am Wildkogel',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '12.35',
  ),
  2756 => 
  array (
    'city' => 'Böheimkirchen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.19779',
    'longitude' => '15.76178',
  ),
  2757 => 
  array (
    'city' => 'Bocksdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '16.16667',
  ),
  2758 => 
  array (
    'city' => 'Bockfließ',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.36',
    'longitude' => '16.60389',
  ),
  2759 => 
  array (
    'city' => 'Bad Blumau',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '16.05',
  ),
  2760 => 
  array (
    'city' => 'Bludesch',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '9.73306',
  ),
  2761 => 
  array (
    'city' => 'Bludenz',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.14972',
    'longitude' => '9.81667',
  ),
  2762 => 
  array (
    'city' => 'Blons',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.22327',
    'longitude' => '9.83414',
  ),
  2763 => 
  array (
    'city' => 'Blindenmarkt',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13333',
    'longitude' => '14.98333',
  ),
  2764 => 
  array (
    'city' => 'Blaindorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '15.85',
  ),
  2765 => 
  array (
    'city' => 'Bizau',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.36889',
    'longitude' => '9.92333',
  ),
  2766 => 
  array (
    'city' => 'Bischofstetten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.12222',
    'longitude' => '15.46909',
  ),
  2767 => 
  array (
    'city' => 'Bischofshofen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '13.21667',
  ),
  2768 => 
  array (
    'city' => 'Bisamberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.33333',
    'longitude' => '16.35',
  ),
  2769 => 
  array (
    'city' => 'Birkfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '15.68333',
  ),
  2770 => 
  array (
    'city' => 'Birgitz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23536',
    'longitude' => '11.29922',
  ),
  2771 => 
  array (
    'city' => 'Bildstein',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.45',
    'longitude' => '9.76667',
  ),
  2772 => 
  array (
    'city' => 'Bierbaum am Auersbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.83333',
    'longitude' => '15.78333',
  ),
  2773 => 
  array (
    'city' => 'Biedermannsdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08393',
    'longitude' => '16.34542',
  ),
  2774 => 
  array (
    'city' => 'Bichlbach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '10.78333',
  ),
  2775 => 
  array (
    'city' => 'Biberwier',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '10.9',
  ),
  2776 => 
  array (
    'city' => 'Biberbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '14.7',
  ),
  2777 => 
  array (
    'city' => 'Bezau',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.385',
    'longitude' => '9.90167',
  ),
  2778 => 
  array (
    'city' => 'Berwang',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '10.75',
  ),
  2779 => 
  array (
    'city' => 'Bernstein',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '16.25',
  ),
  2780 => 
  array (
    'city' => 'Bernhardsthal',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.69158',
    'longitude' => '16.86951',
  ),
  2781 => 
  array (
    'city' => 'Berndorf bei Salzburg',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.98333',
    'longitude' => '13.06667',
  ),
  2782 => 
  array (
    'city' => 'Berndorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.94567',
    'longitude' => '16.10973',
  ),
  2783 => 
  array (
    'city' => 'Bergheim',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.83333',
    'longitude' => '13.03333',
  ),
  2784 => 
  array (
    'city' => 'Berg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1',
    'longitude' => '17.03333',
  ),
  2785 => 
  array (
    'city' => 'Behamberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01667',
    'longitude' => '14.48333',
  ),
  2786 => 
  array (
    'city' => 'Baumkirchen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.56667',
  ),
  2787 => 
  array (
    'city' => 'Baumgarten bei Gnas',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.91667',
    'longitude' => '15.76667',
  ),
  2788 => 
  array (
    'city' => 'Bartholomäberg',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.08333',
    'longitude' => '9.9',
  ),
  2789 => 
  array (
    'city' => 'Bärnkopf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.4',
    'longitude' => '15',
  ),
  2790 => 
  array (
    'city' => 'Bärnbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.03333',
    'longitude' => '15.85',
  ),
  2791 => 
  array (
    'city' => 'Baldramsdorf',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.80111',
    'longitude' => '13.45333',
  ),
  2792 => 
  array (
    'city' => 'Bairisch Kölldorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.86667',
    'longitude' => '15.93333',
  ),
  2793 => 
  array (
    'city' => 'Bad Wimsbach-Neydharting',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.06667',
    'longitude' => '13.9',
  ),
  2794 => 
  array (
    'city' => 'Bad Vöslau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.96533',
    'longitude' => '16.21359',
  ),
  2795 => 
  array (
    'city' => 'Bad Tatzmannsdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.33333',
    'longitude' => '16.21667',
  ),
  2796 => 
  array (
    'city' => 'Bad Schönau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.48333',
    'longitude' => '16.23333',
  ),
  2797 => 
  array (
    'city' => 'Bad Schallerbach',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.22999',
    'longitude' => '13.91925',
  ),
  2798 => 
  array (
    'city' => 'Bad Sankt Leonhard im Lavanttal',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.96278',
    'longitude' => '14.79167',
  ),
  2799 => 
  array (
    'city' => 'Bad Ischl',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.71109',
    'longitude' => '13.61893',
  ),
  2800 => 
  array (
    'city' => 'Bad Hofgastein',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '13.1',
  ),
  2801 => 
  array (
    'city' => 'Bad Hall',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.03832',
    'longitude' => '14.20773',
  ),
  2802 => 
  array (
    'city' => 'Bad Goisern',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.64252',
    'longitude' => '13.61609',
  ),
  2803 => 
  array (
    'city' => 'Bad Gleichenberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.87556',
    'longitude' => '15.90861',
  ),
  2804 => 
  array (
    'city' => 'Bad Gastein',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.11547',
    'longitude' => '13.13467',
  ),
  2805 => 
  array (
    'city' => 'Badersdorf',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '16.36667',
  ),
  2806 => 
  array (
    'city' => 'Baden',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.00543',
    'longitude' => '16.23264',
  ),
  2807 => 
  array (
    'city' => 'Bad Deutsch-Altenburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.13425',
    'longitude' => '16.90624',
  ),
  2808 => 
  array (
    'city' => 'Bad Aussee',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.60998',
    'longitude' => '13.78243',
  ),
  2809 => 
  array (
    'city' => 'Bachmanning',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.11667',
    'longitude' => '13.8',
  ),
  2810 => 
  array (
    'city' => 'Axams',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23111',
    'longitude' => '11.27892',
  ),
  2811 => 
  array (
    'city' => 'Außervillgraten',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.7875',
    'longitude' => '12.43139',
  ),
  2812 => 
  array (
    'city' => 'Aurach am Hongar',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.95182',
    'longitude' => '13.67291',
  ),
  2813 => 
  array (
    'city' => 'Auersthal',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.36667',
    'longitude' => '16.63333',
  ),
  2814 => 
  array (
    'city' => 'Auersbach',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '15.86667',
  ),
  2815 => 
  array (
    'city' => 'Au am Leithaberge',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.91667',
    'longitude' => '16.55',
  ),
  2816 => 
  array (
    'city' => 'Au',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.32278',
    'longitude' => '9.97583',
  ),
  2817 => 
  array (
    'city' => 'Atzesberg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.49849',
    'longitude' => '13.9241',
  ),
  2818 => 
  array (
    'city' => 'Atzenbrugg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.29119',
    'longitude' => '15.90614',
  ),
  2819 => 
  array (
    'city' => 'Atzbach',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.08364',
    'longitude' => '13.70347',
  ),
  2820 => 
  array (
    'city' => 'Attersee',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.91646',
    'longitude' => '13.53953',
  ),
  2821 => 
  array (
    'city' => 'Attendorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '15.31667',
  ),
  2822 => 
  array (
    'city' => 'Asten',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.21941',
    'longitude' => '14.41784',
  ),
  2823 => 
  array (
    'city' => 'Asperhofen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.24583',
    'longitude' => '15.92606',
  ),
  2824 => 
  array (
    'city' => 'Asparn an der Zaya',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.58333',
    'longitude' => '16.5',
  ),
  2825 => 
  array (
    'city' => 'Arzl im Pitztal',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '10.76667',
  ),
  2826 => 
  array (
    'city' => 'Arzberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '15.51667',
  ),
  2827 => 
  array (
    'city' => 'Arriach',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.73194',
    'longitude' => '13.85194',
  ),
  2828 => 
  array (
    'city' => 'Arnoldstein',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.54611',
    'longitude' => '13.71',
  ),
  2829 => 
  array (
    'city' => 'Arnfels',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.67639',
    'longitude' => '15.40306',
  ),
  2830 => 
  array (
    'city' => 'Ardning',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.58333',
    'longitude' => '14.35',
  ),
  2831 => 
  array (
    'city' => 'Arbesbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.48333',
    'longitude' => '14.95',
  ),
  2832 => 
  array (
    'city' => 'Apfelberg',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.2',
    'longitude' => '14.83333',
  ),
  2833 => 
  array (
    'city' => 'Apetlon',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.74394',
    'longitude' => '16.8302',
  ),
  2834 => 
  array (
    'city' => 'Anthering',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.88333',
    'longitude' => '13.01667',
  ),
  2835 => 
  array (
    'city' => 'Antau',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.76667',
    'longitude' => '16.48333',
  ),
  2836 => 
  array (
    'city' => 'Ansfelden',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.20969',
    'longitude' => '14.29004',
  ),
  2837 => 
  array (
    'city' => 'Anras',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.77389',
    'longitude' => '12.56083',
  ),
  2838 => 
  array (
    'city' => 'Annaberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.87134',
    'longitude' => '15.37648',
  ),
  2839 => 
  array (
    'city' => 'Anif',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.75',
    'longitude' => '13.06667',
  ),
  2840 => 
  array (
    'city' => 'Angern an der March',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.37778',
    'longitude' => '16.82806',
  ),
  2841 => 
  array (
    'city' => 'Anger',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '15.68333',
  ),
  2842 => 
  array (
    'city' => 'Angath',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.5',
    'longitude' => '12.06667',
  ),
  2843 => 
  array (
    'city' => 'Andlersdorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.18333',
    'longitude' => '16.66667',
  ),
  2844 => 
  array (
    'city' => 'Andelsbuch',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.41357',
    'longitude' => '9.89559',
  ),
  2845 => 
  array (
    'city' => 'Andau',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.77441',
    'longitude' => '17.03293',
  ),
  2846 => 
  array (
    'city' => 'Amstetten',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.1229',
    'longitude' => '14.87206',
  ),
  2847 => 
  array (
    'city' => 'Ampass',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.26667',
    'longitude' => '11.45',
  ),
  2848 => 
  array (
    'city' => 'Amlach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.81639',
    'longitude' => '12.76361',
  ),
  2849 => 
  array (
    'city' => 'Altmünster',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.90219',
    'longitude' => '13.76415',
  ),
  2850 => 
  array (
    'city' => 'Altmelon',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.45',
    'longitude' => '14.96667',
  ),
  2851 => 
  array (
    'city' => 'Altlichtenwarth',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.63333',
    'longitude' => '16.8',
  ),
  2852 => 
  array (
    'city' => 'Altlengbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.15355',
    'longitude' => '15.92606',
  ),
  2853 => 
  array (
    'city' => 'Althofen',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.87298',
    'longitude' => '14.47449',
  ),
  2854 => 
  array (
    'city' => 'Altheim',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.25154',
    'longitude' => '13.23406',
  ),
  2855 => 
  array (
    'city' => 'Altenmarkt im Pongau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.38333',
    'longitude' => '13.41667',
  ),
  2856 => 
  array (
    'city' => 'Altenmarkt bei Sankt Gallen',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.71667',
    'longitude' => '14.63333',
  ),
  2857 => 
  array (
    'city' => 'Altenmarkt bei Fürstenfeld',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '16.05',
  ),
  2858 => 
  array (
    'city' => 'Altenmarkt an der Triesting',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.01553',
    'longitude' => '15.99661',
  ),
  2859 => 
  array (
    'city' => 'Altendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '47.65',
    'longitude' => '16.01667',
  ),
  2860 => 
  array (
    'city' => 'Altenburg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.63333',
    'longitude' => '15.58333',
  ),
  2861 => 
  array (
    'city' => 'Altenberg bei Linz',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.37193',
    'longitude' => '14.34763',
  ),
  2862 => 
  array (
    'city' => 'Altaussee',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.63333',
    'longitude' => '13.76667',
  ),
  2863 => 
  array (
    'city' => 'Altach',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.35',
    'longitude' => '9.65',
  ),
  2864 => 
  array (
    'city' => 'Allhartsberg',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.02633',
    'longitude' => '14.79009',
  ),
  2865 => 
  array (
    'city' => 'Allerheiligen im Mürztal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '15.4',
  ),
  2866 => 
  array (
    'city' => 'Allerheiligen bei Wildon',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.91417',
    'longitude' => '15.55444',
  ),
  2867 => 
  array (
    'city' => 'Allentsteig',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.69725',
    'longitude' => '15.32756',
  ),
  2868 => 
  array (
    'city' => 'Alland',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.05829',
    'longitude' => '16.07901',
  ),
  2869 => 
  array (
    'city' => 'Aldrans',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.25',
    'longitude' => '11.45',
  ),
  2870 => 
  array (
    'city' => 'Alberndorf in der Riedmark',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.4',
    'longitude' => '14.41667',
  ),
  2871 => 
  array (
    'city' => 'Ainet',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.86611',
    'longitude' => '12.70139',
  ),
  2872 => 
  array (
    'city' => 'Aigen im Ennstal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.51667',
    'longitude' => '14.13333',
  ),
  2873 => 
  array (
    'city' => 'Aichkirchen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.1',
    'longitude' => '13.78333',
  ),
  2874 => 
  array (
    'city' => 'Aich',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.41667',
    'longitude' => '13.81667',
  ),
  2875 => 
  array (
    'city' => 'Aibl',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.68333',
    'longitude' => '15.21667',
  ),
  2876 => 
  array (
    'city' => 'Aggsbach',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.29404',
    'longitude' => '15.40382',
  ),
  2877 => 
  array (
    'city' => 'Aflenz Kurort',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.53333',
    'longitude' => '15.23333',
  ),
  2878 => 
  array (
    'city' => 'Adnet',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.68333',
    'longitude' => '13.13333',
  ),
  2879 => 
  array (
    'city' => 'Admont',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.57537',
    'longitude' => '14.46075',
  ),
  2880 => 
  array (
    'city' => 'Aderklaa',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.28333',
    'longitude' => '16.53333',
  ),
  2881 => 
  array (
    'city' => 'Achenkirch',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.52659',
    'longitude' => '11.70559',
  ),
  2882 => 
  array (
    'city' => 'Achau',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.08026',
    'longitude' => '16.38611',
  ),
  2883 => 
  array (
    'city' => 'Abtenau',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.56373',
    'longitude' => '13.34599',
  ),
  2884 => 
  array (
    'city' => 'Absam',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.5',
  ),
  2885 => 
  array (
    'city' => 'Abfaltersbach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.76028',
    'longitude' => '12.54194',
  ),
  2886 => 
  array (
    'city' => 'Schlaiten',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.87944',
    'longitude' => '12.65417',
  ),
  2887 => 
  array (
    'city' => 'Thurn',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.85056',
    'longitude' => '12.76861',
  ),
  2888 => 
  array (
    'city' => 'Untertilliach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.70417',
    'longitude' => '12.70861',
  ),
  2889 => 
  array (
    'city' => 'Finkenstein am Faaker See',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.56556',
    'longitude' => '13.86528',
  ),
  2890 => 
  array (
    'city' => 'Mölbling',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.86222',
    'longitude' => '14.44806',
  ),
  2891 => 
  array (
    'city' => 'Attnang-Puchheim',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.00833',
    'longitude' => '13.71667',
  ),
  2892 => 
  array (
    'city' => 'Obernberg am Brenner',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.01667',
    'longitude' => '11.41667',
  ),
  2893 => 
  array (
    'city' => 'Mühlbachl',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.13333',
    'longitude' => '11.45',
  ),
  2894 => 
  array (
    'city' => 'Leutasch',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3689',
    'longitude' => '11.14404',
  ),
  2895 => 
  array (
    'city' => 'Gschnitz',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.05',
    'longitude' => '11.36667',
  ),
  2896 => 
  array (
    'city' => 'Navis',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.11667',
    'longitude' => '11.53333',
  ),
  2897 => 
  array (
    'city' => 'Ellbögen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.16667',
    'longitude' => '11.45',
  ),
  2898 => 
  array (
    'city' => 'Sellrain',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '11.21667',
  ),
  2899 => 
  array (
    'city' => 'Oberperfuss',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '11.25',
  ),
  2900 => 
  array (
    'city' => 'Obsteig',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '10.93333',
  ),
  2901 => 
  array (
    'city' => 'Kolsassberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.63333',
  ),
  2902 => 
  array (
    'city' => 'Gnadenwald',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.31667',
    'longitude' => '11.56667',
  ),
  2903 => 
  array (
    'city' => 'Ehrwald',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.4',
    'longitude' => '10.91667',
  ),
  2904 => 
  array (
    'city' => 'Lanzendorf',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.11056',
    'longitude' => '16.445',
  ),
  2905 => 
  array (
    'city' => 'Ansfelden',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.965',
    'longitude' => '13.04944',
  ),
  2906 => 
  array (
    'city' => 'Heinfels',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '46.75',
    'longitude' => '12.45',
  ),
  2907 => 
  array (
    'city' => 'Gerlosberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '11.93333',
  ),
  2908 => 
  array (
    'city' => 'Gerlos',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '12',
  ),
  2909 => 
  array (
    'city' => 'Krimml',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.21667',
    'longitude' => '12.18333',
  ),
  2910 => 
  array (
    'city' => 'Rohrberg',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.23333',
    'longitude' => '11.91667',
  ),
  2911 => 
  array (
    'city' => 'Ried im Zillertal',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.3',
    'longitude' => '11.86667',
  ),
  2912 => 
  array (
    'city' => 'Alpbach',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.39878',
    'longitude' => '11.94373',
  ),
  2913 => 
  array (
    'city' => 'Itter',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.46667',
    'longitude' => '12.13333',
  ),
  2914 => 
  array (
    'city' => 'Brand',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.10083',
    'longitude' => '9.73722',
  ),
  2915 => 
  array (
    'city' => 'Liebenfels',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.73778',
    'longitude' => '14.28667',
  ),
  2916 => 
  array (
    'city' => 'Frauenstein',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.81417',
    'longitude' => '14.29417',
  ),
  2917 => 
  array (
    'city' => 'Eppenstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.12833',
    'longitude' => '14.7375',
  ),
  2918 => 
  array (
    'city' => 'Bretstein',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.3325',
    'longitude' => '14.41972',
  ),
  2919 => 
  array (
    'city' => 'Hochleithen',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.46667',
    'longitude' => '16.53333',
  ),
  2920 => 
  array (
    'city' => 'Sankt Oswald ob Eibiswald',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '46.70833',
    'longitude' => '15.14667',
  ),
  2921 => 
  array (
    'city' => 'Wildschönau',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.40619',
    'longitude' => '12.03784',
  ),
  2922 => 
  array (
    'city' => 'Langkampfen',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.55111',
    'longitude' => '12.09325',
  ),
  2923 => 
  array (
    'city' => 'Hart bei Graz',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.04311',
    'longitude' => '15.51527',
  ),
  2924 => 
  array (
    'city' => 'Berg im Drautal',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.74915',
    'longitude' => '13.13536',
  ),
  2925 => 
  array (
    'city' => 'Lockenhaus',
    'region' => '01',
    'country' => 'AT',
    'latitude' => '47.40753',
    'longitude' => '16.41623',
  ),
  2926 => 
  array (
    'city' => 'St. Georgen am Längsee',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.78061',
    'longitude' => '14.43033',
  ),
  2927 => 
  array (
    'city' => 'Großkirchheim',
    'region' => '02',
    'country' => 'AT',
    'latitude' => '46.97352',
    'longitude' => '12.90482',
  ),
  2928 => 
  array (
    'city' => 'Damüls',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.28034',
    'longitude' => '9.89164',
  ),
  2929 => 
  array (
    'city' => 'Bad Waltersdorf',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.1696',
    'longitude' => '16.0087',
  ),
  2930 => 
  array (
    'city' => 'Bad Leonfelden',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.51615',
    'longitude' => '14.29527',
  ),
  2931 => 
  array (
    'city' => 'Pfarrwerfen',
    'region' => '05',
    'country' => 'AT',
    'latitude' => '47.45729',
    'longitude' => '13.20531',
  ),
  2932 => 
  array (
    'city' => 'Thal',
    'region' => '06',
    'country' => 'AT',
    'latitude' => '47.07644',
    'longitude' => '15.36052',
  ),
  2933 => 
  array (
    'city' => 'Bürserberg',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.14644',
    'longitude' => '9.77736',
  ),
  2934 => 
  array (
    'city' => 'Holzgau',
    'region' => '07',
    'country' => 'AT',
    'latitude' => '47.26045',
    'longitude' => '10.34419',
  ),
  2935 => 
  array (
    'city' => 'Schröcken',
    'region' => '08',
    'country' => 'AT',
    'latitude' => '47.2574',
    'longitude' => '10.09272',
  ),
  2936 => 
  array (
    'city' => 'Rossleithen',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '47.7017',
    'longitude' => '14.2736',
  ),
  2937 => 
  array (
    'city' => 'Sankt Georgen am Walde',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.35979',
    'longitude' => '14.90235',
  ),
  2938 => 
  array (
    'city' => 'Nebelberg',
    'region' => '04',
    'country' => 'AT',
    'latitude' => '48.62854',
    'longitude' => '13.84629',
  ),
  2939 => 
  array (
    'city' => 'Baden',
    'region' => '03',
    'country' => 'AT',
    'latitude' => '48.00221',
    'longitude' => '16.23097',
  ),
  2940 => 
  array (
    'city' => 'York',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.9',
    'longitude' => '116.76667',
  ),
  2941 => 
  array (
    'city' => 'Yanchep',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.55',
    'longitude' => '115.68333',
  ),
  2942 => 
  array (
    'city' => 'Yallingup',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.65',
    'longitude' => '115.03333',
  ),
  2943 => 
  array (
    'city' => 'Wundowie',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.76667',
    'longitude' => '116.38333',
  ),
  2944 => 
  array (
    'city' => 'Wooroloo',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.81667',
    'longitude' => '116.33333',
  ),
  2945 => 
  array (
    'city' => 'Woodville',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.88333',
    'longitude' => '138.55',
  ),
  2946 => 
  array (
    'city' => 'Woodside',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.95',
    'longitude' => '138.86667',
  ),
  2947 => 
  array (
    'city' => 'Wongan Hills',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-30.88333',
    'longitude' => '116.7',
  ),
  2948 => 
  array (
    'city' => 'Williamstown',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.66667',
    'longitude' => '138.86667',
  ),
  2949 => 
  array (
    'city' => 'Willaston',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.58333',
    'longitude' => '138.75',
  ),
  2950 => 
  array (
    'city' => 'Whyalla',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-33.03333',
    'longitude' => '137.58333',
  ),
  2951 => 
  array (
    'city' => 'Wembley',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.93333',
    'longitude' => '115.8',
  ),
  2952 => 
  array (
    'city' => 'Wellard',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.26667',
    'longitude' => '115.83333',
  ),
  2953 => 
  array (
    'city' => 'Wayville',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.95',
    'longitude' => '138.58333',
  ),
  2954 => 
  array (
    'city' => 'Waroona',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.83333',
    'longitude' => '115.91667',
  ),
  2955 => 
  array (
    'city' => 'Wanneroo',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.75',
    'longitude' => '115.8',
  ),
  2956 => 
  array (
    'city' => 'Wallaroo',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-33.93333',
    'longitude' => '137.63333',
  ),
  2957 => 
  array (
    'city' => 'Waikerie',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.18333',
    'longitude' => '139.98333',
  ),
  2958 => 
  array (
    'city' => 'Wagin',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.3',
    'longitude' => '117.35',
  ),
  2959 => 
  array (
    'city' => 'Waggrakine',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-28.71667',
    'longitude' => '114.61667',
  ),
  2960 => 
  array (
    'city' => 'Virginia',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.66667',
    'longitude' => '138.56667',
  ),
  2961 => 
  array (
    'city' => 'Victor Harbour',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.56667',
    'longitude' => '138.61667',
  ),
  2962 => 
  array (
    'city' => 'Vasse',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.66667',
    'longitude' => '115.25',
  ),
  2963 => 
  array (
    'city' => 'Upper Sturt',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.01667',
    'longitude' => '138.68333',
  ),
  2964 => 
  array (
    'city' => 'Unley',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.95',
    'longitude' => '138.6',
  ),
  2965 => 
  array (
    'city' => 'Two Wells',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.6',
    'longitude' => '138.5',
  ),
  2966 => 
  array (
    'city' => 'Tumby Bay',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.38333',
    'longitude' => '136.08333',
  ),
  2967 => 
  array (
    'city' => 'Trigg',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.86939',
    'longitude' => '115.7571',
  ),
  2968 => 
  array (
    'city' => 'Toodyay',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.55',
    'longitude' => '116.46667',
  ),
  2969 => 
  array (
    'city' => 'Thebarton',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.91667',
    'longitude' => '138.56667',
  ),
  2970 => 
  array (
    'city' => 'Tennant Creek',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-19.65',
    'longitude' => '134.2',
  ),
  2971 => 
  array (
    'city' => 'Tanunda',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.53333',
    'longitude' => '138.95',
  ),
  2972 => 
  array (
    'city' => 'Swan View',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.88333',
    'longitude' => '116.05',
  ),
  2973 => 
  array (
    'city' => 'Swanbourne',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.96667',
    'longitude' => '115.78333',
  ),
  2974 => 
  array (
    'city' => 'Subiaco',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.95',
    'longitude' => '115.8',
  ),
  2975 => 
  array (
    'city' => 'Sturt',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.01667',
    'longitude' => '138.55',
  ),
  2976 => 
  array (
    'city' => 'Streaky Bay',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-32.8',
    'longitude' => '134.21667',
  ),
  2977 => 
  array (
    'city' => 'Strathalbyn',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.26667',
    'longitude' => '138.9',
  ),
  2978 => 
  array (
    'city' => 'Stoneville',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-30.86667',
    'longitude' => '121.76667',
  ),
  2979 => 
  array (
    'city' => 'Stirling',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35',
    'longitude' => '138.71667',
  ),
  2980 => 
  array (
    'city' => 'Spearwood',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.1',
    'longitude' => '115.78333',
  ),
  2981 => 
  array (
    'city' => 'South Perth',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.98333',
    'longitude' => '115.86667',
  ),
  2982 => 
  array (
    'city' => 'Solomontown',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-33.2',
    'longitude' => '138.03333',
  ),
  2983 => 
  array (
    'city' => 'Smithfield',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.68333',
    'longitude' => '138.68333',
  ),
  2984 => 
  array (
    'city' => 'Serpentine',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.35',
    'longitude' => '115.96667',
  ),
  2985 => 
  array (
    'city' => 'Seaton',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.9',
    'longitude' => '138.51667',
  ),
  2986 => 
  array (
    'city' => 'Seaford',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.18333',
    'longitude' => '138.46667',
  ),
  2987 => 
  array (
    'city' => 'Scarborough',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.89578',
    'longitude' => '115.76431',
  ),
  2988 => 
  array (
    'city' => 'Salisbury',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.76667',
    'longitude' => '138.63333',
  ),
  2989 => 
  array (
    'city' => 'Safety Bay',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.3',
    'longitude' => '115.7',
  ),
  2990 => 
  array (
    'city' => 'Roxby Downs',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-30.56305',
    'longitude' => '136.89546',
  ),
  2991 => 
  array (
    'city' => 'Roseworthy',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.53333',
    'longitude' => '138.73333',
  ),
  2992 => 
  array (
    'city' => 'Roebourne',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-20.78333',
    'longitude' => '117.13333',
  ),
  2993 => 
  array (
    'city' => 'Rockingham',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.28333',
    'longitude' => '115.71667',
  ),
  2994 => 
  array (
    'city' => 'Maida Vale',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.95187',
    'longitude' => '116.02764',
  ),
  2995 => 
  array (
    'city' => 'Reynella',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.09372',
    'longitude' => '138.53082',
  ),
  2996 => 
  array (
    'city' => 'Ravensthorpe',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.58333',
    'longitude' => '120.03333',
  ),
  2997 => 
  array (
    'city' => 'Quorn',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-32.35',
    'longitude' => '138.03333',
  ),
  2998 => 
  array (
    'city' => 'Quindalup',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.66667',
    'longitude' => '115.13333',
  ),
  2999 => 
  array (
    'city' => 'Prospect',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.88241',
    'longitude' => '138.5933',
  ),
  3000 => 
  array (
    'city' => 'Port Willunga',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.26667',
    'longitude' => '138.45',
  ),
  3001 => 
  array (
    'city' => 'Port Victoria',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.5',
    'longitude' => '137.48333',
  ),
  3002 => 
  array (
    'city' => 'Port Pirie',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-33.18333',
    'longitude' => '138.01667',
  ),
  3003 => 
  array (
    'city' => 'Port Noarlunga',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.15',
    'longitude' => '138.46667',
  ),
  3004 => 
  array (
    'city' => 'Port Lincoln',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.73333',
    'longitude' => '135.86667',
  ),
  3005 => 
  array (
    'city' => 'Port Keats',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-14.25',
    'longitude' => '129.55',
  ),
  3006 => 
  array (
    'city' => 'Port Hedland',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-20.31667',
    'longitude' => '118.56667',
  ),
  3007 => 
  array (
    'city' => 'Port Elliot',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.53333',
    'longitude' => '138.68333',
  ),
  3008 => 
  array (
    'city' => 'Port Augusta West',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-32.48333',
    'longitude' => '137.75',
  ),
  3009 => 
  array (
    'city' => 'Port Augusta',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-32.5',
    'longitude' => '137.76667',
  ),
  3010 => 
  array (
    'city' => 'Port Adelaide',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.85',
    'longitude' => '138.46667',
  ),
  3011 => 
  array (
    'city' => 'Plympton',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.95',
    'longitude' => '138.55',
  ),
  3012 => 
  array (
    'city' => 'Pinjarra',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.63333',
    'longitude' => '115.88333',
  ),
  3013 => 
  array (
    'city' => 'Peterborough',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-32.96667',
    'longitude' => '138.83333',
  ),
  3014 => 
  array (
    'city' => 'Perth',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.93333',
    'longitude' => '115.83333',
  ),
  3015 => 
  array (
    'city' => 'Pemberton',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-34.46667',
    'longitude' => '116.01667',
  ),
  3016 => 
  array (
    'city' => 'Pearce',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.66667',
    'longitude' => '116.01667',
  ),
  3017 => 
  array (
    'city' => 'Parkerville',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.88333',
    'longitude' => '116.13333',
  ),
  3018 => 
  array (
    'city' => 'Parap',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.43333',
    'longitude' => '130.83333',
  ),
  3019 => 
  array (
    'city' => 'One Tree Hill',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.7',
    'longitude' => '138.76667',
  ),
  3020 => 
  array (
    'city' => 'Oakbank',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.98333',
    'longitude' => '138.85',
  ),
  3021 => 
  array (
    'city' => 'Nuriootpa',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.48333',
    'longitude' => '139',
  ),
  3022 => 
  array (
    'city' => 'North Fremantle',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.03333',
    'longitude' => '115.75',
  ),
  3023 => 
  array (
    'city' => 'North Beach',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.86298',
    'longitude' => '115.75624',
  ),
  3024 => 
  array (
    'city' => 'Northampton',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-28.35',
    'longitude' => '114.61667',
  ),
  3025 => 
  array (
    'city' => 'Northam',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.66667',
    'longitude' => '116.66667',
  ),
  3026 => 
  array (
    'city' => 'Normanville',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.44781',
    'longitude' => '138.31495',
  ),
  3027 => 
  array (
    'city' => 'Noarlunga',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.18333',
    'longitude' => '138.5',
  ),
  3028 => 
  array (
    'city' => 'Nhulunbuy',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.23333',
    'longitude' => '136.76667',
  ),
  3029 => 
  array (
    'city' => 'Newman',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-23.36667',
    'longitude' => '119.73333',
  ),
  3030 => 
  array (
    'city' => 'Narrogin',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.93333',
    'longitude' => '117.16667',
  ),
  3031 => 
  array (
    'city' => 'Nairne',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.03333',
    'longitude' => '138.9',
  ),
  3032 => 
  array (
    'city' => 'Murray Bridge',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.11667',
    'longitude' => '139.26667',
  ),
  3033 => 
  array (
    'city' => 'Mundijong',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.3',
    'longitude' => '115.98333',
  ),
  3034 => 
  array (
    'city' => 'Mundaring',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.9',
    'longitude' => '116.16667',
  ),
  3035 => 
  array (
    'city' => 'Mount Isa',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-20.73333',
    'longitude' => '139.5',
  ),
  3036 => 
  array (
    'city' => 'Mount Helena',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.88333',
    'longitude' => '116.2',
  ),
  3037 => 
  array (
    'city' => 'Mount Compass',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.36667',
    'longitude' => '138.61667',
  ),
  3038 => 
  array (
    'city' => 'Mount Barker',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.06667',
    'longitude' => '138.86667',
  ),
  3039 => 
  array (
    'city' => 'Mount Barker',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-34.63333',
    'longitude' => '117.66667',
  ),
  3040 => 
  array (
    'city' => 'Mosman Park',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32',
    'longitude' => '115.75',
  ),
  3041 => 
  array (
    'city' => 'Morphett Vale',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.13333',
    'longitude' => '138.51667',
  ),
  3042 => 
  array (
    'city' => 'Moora',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-30.65',
    'longitude' => '116.01667',
  ),
  3043 => 
  array (
    'city' => 'Modbury',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.83333',
    'longitude' => '138.68333',
  ),
  3044 => 
  array (
    'city' => 'Moana',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.2',
    'longitude' => '138.48333',
  ),
  3045 => 
  array (
    'city' => 'Mitcham',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.98333',
    'longitude' => '138.6',
  ),
  3046 => 
  array (
    'city' => 'Midland',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.9',
    'longitude' => '116',
  ),
  3047 => 
  array (
    'city' => 'Middle Swan',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.85',
    'longitude' => '116.01667',
  ),
  3048 => 
  array (
    'city' => 'Merredin',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.48333',
    'longitude' => '118.26667',
  ),
  3049 => 
  array (
    'city' => 'Meningie',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.7',
    'longitude' => '139.33333',
  ),
  3050 => 
  array (
    'city' => 'Melville',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-28.18333',
    'longitude' => '116.73333',
  ),
  3051 => 
  array (
    'city' => 'Medina',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.23333',
    'longitude' => '115.78333',
  ),
  3052 => 
  array (
    'city' => 'Meadows',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.18333',
    'longitude' => '138.75',
  ),
  3053 => 
  array (
    'city' => 'McMinns Lagoon',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.53333',
    'longitude' => '131.05',
  ),
  3054 => 
  array (
    'city' => 'McLaren Vale',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.23333',
    'longitude' => '138.53333',
  ),
  3055 => 
  array (
    'city' => 'Maylands',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.93333',
    'longitude' => '115.88333',
  ),
  3056 => 
  array (
    'city' => 'Marion',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.01667',
    'longitude' => '138.56667',
  ),
  3057 => 
  array (
    'city' => 'Marino',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.03333',
    'longitude' => '138.51667',
  ),
  3058 => 
  array (
    'city' => 'Margaret River',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.95',
    'longitude' => '115.06667',
  ),
  3059 => 
  array (
    'city' => 'Mannum',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.91667',
    'longitude' => '139.31667',
  ),
  3060 => 
  array (
    'city' => 'Manning',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.01594',
    'longitude' => '115.86714',
  ),
  3061 => 
  array (
    'city' => 'Manjimup',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-34.23333',
    'longitude' => '116.15',
  ),
  3062 => 
  array (
    'city' => 'Mandurah',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.55',
    'longitude' => '115.7',
  ),
  3063 => 
  array (
    'city' => 'Mallala',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.45',
    'longitude' => '138.5',
  ),
  3064 => 
  array (
    'city' => 'Maitland',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.38333',
    'longitude' => '137.66667',
  ),
  3065 => 
  array (
    'city' => 'Maddington',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.05',
    'longitude' => '115.98333',
  ),
  3066 => 
  array (
    'city' => 'Macclesfield',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.18333',
    'longitude' => '138.83333',
  ),
  3067 => 
  array (
    'city' => 'Lyndoch',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.61667',
    'longitude' => '138.88333',
  ),
  3068 => 
  array (
    'city' => 'Lower Chittering',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.58333',
    'longitude' => '116.11667',
  ),
  3069 => 
  array (
    'city' => 'Lobethal',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.9',
    'longitude' => '138.86667',
  ),
  3070 => 
  array (
    'city' => 'Littlehampton',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.05',
    'longitude' => '138.85',
  ),
  3071 => 
  array (
    'city' => 'Lewiston',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.6',
    'longitude' => '138.6',
  ),
  3072 => 
  array (
    'city' => 'Largs Bay',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.8',
    'longitude' => '138.46667',
  ),
  3073 => 
  array (
    'city' => 'Langhorne Creek',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.3',
    'longitude' => '139.03333',
  ),
  3074 => 
  array (
    'city' => 'Kwinana',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.25',
    'longitude' => '115.76667',
  ),
  3075 => 
  array (
    'city' => 'Kununurra',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-15.76667',
    'longitude' => '128.73333',
  ),
  3076 => 
  array (
    'city' => 'Kojonup',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '117.15',
  ),
  3077 => 
  array (
    'city' => 'Kingscote',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.66667',
    'longitude' => '137.63333',
  ),
  3078 => 
  array (
    'city' => 'Kenwick',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.03333',
    'longitude' => '115.96667',
  ),
  3079 => 
  array (
    'city' => 'Kendenup',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-34.48333',
    'longitude' => '117.65',
  ),
  3080 => 
  array (
    'city' => 'Kelmscott',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.11667',
    'longitude' => '116.01667',
  ),
  3081 => 
  array (
    'city' => 'Katherine',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-14.46667',
    'longitude' => '132.26667',
  ),
  3082 => 
  array (
    'city' => 'Katanning',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.7',
    'longitude' => '117.55',
  ),
  3083 => 
  array (
    'city' => 'Kapunda',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.35',
    'longitude' => '138.9',
  ),
  3084 => 
  array (
    'city' => 'Kalgoorlie',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-30.75',
    'longitude' => '121.46667',
  ),
  3085 => 
  array (
    'city' => 'Kalbarri',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-27.66667',
    'longitude' => '114.16667',
  ),
  3086 => 
  array (
    'city' => 'Kadina',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '137.71667',
  ),
  3087 => 
  array (
    'city' => 'Jamestown',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-33.2',
    'longitude' => '138.6',
  ),
  3088 => 
  array (
    'city' => 'Ingle Farm',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.83333',
    'longitude' => '138.63333',
  ),
  3089 => 
  array (
    'city' => 'Hope Valley',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.83333',
    'longitude' => '138.7',
  ),
  3090 => 
  array (
    'city' => 'Heathfield',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.01667',
    'longitude' => '138.71667',
  ),
  3091 => 
  array (
    'city' => 'Harvey',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.08333',
    'longitude' => '115.9',
  ),
  3092 => 
  array (
    'city' => 'Happy Valley',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.08333',
    'longitude' => '138.53333',
  ),
  3093 => 
  array (
    'city' => 'Halls Creek',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-18.26667',
    'longitude' => '127.76667',
  ),
  3094 => 
  array (
    'city' => 'Hahndorf',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.03333',
    'longitude' => '138.8',
  ),
  3095 => 
  array (
    'city' => 'Hackham',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.15',
    'longitude' => '138.51667',
  ),
  3096 => 
  array (
    'city' => 'Gumeracha',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.83333',
    'longitude' => '138.88333',
  ),
  3097 => 
  array (
    'city' => 'Guildford',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.9',
    'longitude' => '115.96667',
  ),
  3098 => 
  array (
    'city' => 'Greenmount',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.9',
    'longitude' => '116.05',
  ),
  3099 => 
  array (
    'city' => 'Grasmere',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-35.01806',
    'longitude' => '117.75556',
  ),
  3100 => 
  array (
    'city' => 'Grange',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.9',
    'longitude' => '138.48333',
  ),
  3101 => 
  array (
    'city' => 'Gosnells',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.08333',
    'longitude' => '116',
  ),
  3102 => 
  array (
    'city' => 'Gooseberry Hill',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.95',
    'longitude' => '116.05',
  ),
  3103 => 
  array (
    'city' => 'Goolwa',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.50261',
    'longitude' => '138.78462',
  ),
  3104 => 
  array (
    'city' => 'Golden Grove',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.78333',
    'longitude' => '138.73333',
  ),
  3105 => 
  array (
    'city' => 'Glenelg',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.98333',
    'longitude' => '138.51667',
  ),
  3106 => 
  array (
    'city' => 'Gilles Plains',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.85',
    'longitude' => '138.65',
  ),
  3107 => 
  array (
    'city' => 'Geraldton',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-28.76667',
    'longitude' => '114.6',
  ),
  3108 => 
  array (
    'city' => 'Gawler',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.6',
    'longitude' => '138.73333',
  ),
  3109 => 
  array (
    'city' => 'Fremantle',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.05',
    'longitude' => '115.76667',
  ),
  3110 => 
  array (
    'city' => 'Freeling',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.45',
    'longitude' => '138.8',
  ),
  3111 => 
  array (
    'city' => 'Findon',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.9',
    'longitude' => '138.53333',
  ),
  3112 => 
  array (
    'city' => 'Esperance',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.86667',
    'longitude' => '121.9',
  ),
  3113 => 
  array (
    'city' => 'Encounter Bay',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.58333',
    'longitude' => '138.6',
  ),
  3114 => 
  array (
    'city' => 'Elizabeth',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.73333',
    'longitude' => '138.65',
  ),
  3115 => 
  array (
    'city' => 'Donnybrook',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.58333',
    'longitude' => '115.81667',
  ),
  3116 => 
  array (
    'city' => 'Dongara',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-29.25',
    'longitude' => '114.93333',
  ),
  3117 => 
  array (
    'city' => 'Chidlow',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.86094',
    'longitude' => '116.27243',
  ),
  3118 => 
  array (
    'city' => 'Derby',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-17.3',
    'longitude' => '123.96667',
  ),
  3119 => 
  array (
    'city' => 'Denmark',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-34.96067',
    'longitude' => '117.35321',
  ),
  3120 => 
  array (
    'city' => 'Port Denison',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-29.28333',
    'longitude' => '114.91667',
  ),
  3121 => 
  array (
    'city' => 'Darwin',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.46113',
    'longitude' => '130.84185',
  ),
  3122 => 
  array (
    'city' => 'Darlington',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.03333',
    'longitude' => '138.56667',
  ),
  3123 => 
  array (
    'city' => 'Darlington',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.91667',
    'longitude' => '116.08333',
  ),
  3124 => 
  array (
    'city' => 'Dampier',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-20.66667',
    'longitude' => '116.7',
  ),
  3125 => 
  array (
    'city' => 'Cunderdin',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.65',
    'longitude' => '117.25',
  ),
  3126 => 
  array (
    'city' => 'Cummins',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.26667',
    'longitude' => '135.73333',
  ),
  3127 => 
  array (
    'city' => 'Crystal Brook',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-33.36667',
    'longitude' => '138.2',
  ),
  3128 => 
  array (
    'city' => 'Craigburn Farm',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.05',
    'longitude' => '138.61667',
  ),
  3129 => 
  array (
    'city' => 'Crafers',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35',
    'longitude' => '138.7',
  ),
  3130 => 
  array (
    'city' => 'Cottesloe',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32',
    'longitude' => '115.76667',
  ),
  3131 => 
  array (
    'city' => 'Coromandel Valley',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.05',
    'longitude' => '138.61667',
  ),
  3132 => 
  array (
    'city' => 'Coogee',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.11667',
    'longitude' => '115.76667',
  ),
  3133 => 
  array (
    'city' => 'Coober Pedy',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-29.01415',
    'longitude' => '134.75495',
  ),
  3134 => 
  array (
    'city' => 'Collie',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.36667',
    'longitude' => '116.15',
  ),
  3135 => 
  array (
    'city' => 'Cleve',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-33.7',
    'longitude' => '136.5',
  ),
  3136 => 
  array (
    'city' => 'Clare',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '138.6',
  ),
  3137 => 
  array (
    'city' => 'Cheltenham',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.86667',
    'longitude' => '138.51667',
  ),
  3138 => 
  array (
    'city' => 'Ceduna',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-32.11667',
    'longitude' => '133.66667',
  ),
  3139 => 
  array (
    'city' => 'Caversham',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.88333',
    'longitude' => '115.96667',
  ),
  3140 => 
  array (
    'city' => 'Carnarvon',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-24.86667',
    'longitude' => '113.63333',
  ),
  3141 => 
  array (
    'city' => 'Capel',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.56667',
    'longitude' => '115.55',
  ),
  3142 => 
  array (
    'city' => 'Cannington',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.01667',
    'longitude' => '115.95',
  ),
  3143 => 
  array (
    'city' => 'Campbelltown',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.88333',
    'longitude' => '138.66667',
  ),
  3144 => 
  array (
    'city' => 'Callington',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.11667',
    'longitude' => '139.01667',
  ),
  3145 => 
  array (
    'city' => 'Byford',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.21667',
    'longitude' => '116',
  ),
  3146 => 
  array (
    'city' => 'Busselton',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.65',
    'longitude' => '115.33333',
  ),
  3147 => 
  array (
    'city' => 'Bunbury',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.33333',
    'longitude' => '115.63333',
  ),
  3148 => 
  array (
    'city' => 'Bullsbrook',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.66667',
    'longitude' => '116',
  ),
  3149 => 
  array (
    'city' => 'Broome',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-17.96667',
    'longitude' => '122.23333',
  ),
  3150 => 
  array (
    'city' => 'Brighton',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.01667',
    'longitude' => '138.51667',
  ),
  3151 => 
  array (
    'city' => 'Bridgewater',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35',
    'longitude' => '138.75',
  ),
  3152 => 
  array (
    'city' => 'Bridgetown',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.95',
    'longitude' => '116.13333',
  ),
  3153 => 
  array (
    'city' => 'Boyup Brook',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '116.4',
  ),
  3154 => 
  array (
    'city' => 'Boyanup',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.48333',
    'longitude' => '115.73333',
  ),
  3155 => 
  array (
    'city' => 'Boulder',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-30.78333',
    'longitude' => '121.48333',
  ),
  3156 => 
  array (
    'city' => 'Blackwood',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.01667',
    'longitude' => '138.61667',
  ),
  3157 => 
  array (
    'city' => 'Birkenhead',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.83333',
    'longitude' => '138.5',
  ),
  3158 => 
  array (
    'city' => 'Birdwood',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.81667',
    'longitude' => '138.96667',
  ),
  3159 => 
  array (
    'city' => 'Beverley',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.11667',
    'longitude' => '116.91667',
  ),
  3160 => 
  array (
    'city' => 'Bentley',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32',
    'longitude' => '115.91667',
  ),
  3161 => 
  array (
    'city' => 'Bellevue',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.9',
    'longitude' => '116.01667',
  ),
  3162 => 
  array (
    'city' => 'Belair',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35',
    'longitude' => '138.63333',
  ),
  3163 => 
  array (
    'city' => 'Bedford Park',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.03333',
    'longitude' => '138.56667',
  ),
  3164 => 
  array (
    'city' => 'Bedfordale',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.18333',
    'longitude' => '116.05',
  ),
  3165 => 
  array (
    'city' => 'Beaumont',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.93333',
    'longitude' => '138.65',
  ),
  3166 => 
  array (
    'city' => 'Bassendean',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.9',
    'longitude' => '115.95',
  ),
  3167 => 
  array (
    'city' => 'Balhannah',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.98333',
    'longitude' => '138.83333',
  ),
  3168 => 
  array (
    'city' => 'Balaklava',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.15',
    'longitude' => '138.41667',
  ),
  3169 => 
  array (
    'city' => 'Australind',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.26667',
    'longitude' => '115.71667',
  ),
  3170 => 
  array (
    'city' => 'Augusta',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-34.31667',
    'longitude' => '115.16667',
  ),
  3171 => 
  array (
    'city' => 'Armadale',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.15',
    'longitude' => '116',
  ),
  3172 => 
  array (
    'city' => 'Ardrossan',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.43333',
    'longitude' => '137.9',
  ),
  3173 => 
  array (
    'city' => 'Applecross',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.01667',
    'longitude' => '115.83333',
  ),
  3174 => 
  array (
    'city' => 'Angle Vale',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.63333',
    'longitude' => '138.65',
  ),
  3175 => 
  array (
    'city' => 'Angaston',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.5',
    'longitude' => '139.03333',
  ),
  3176 => 
  array (
    'city' => 'Alice Springs',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-23.7',
    'longitude' => '133.88333',
  ),
  3177 => 
  array (
    'city' => 'Aldinga',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.28333',
    'longitude' => '138.48333',
  ),
  3178 => 
  array (
    'city' => 'Aldgate',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.01667',
    'longitude' => '138.73333',
  ),
  3179 => 
  array (
    'city' => 'Albany',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-35.01694',
    'longitude' => '117.89167',
  ),
  3180 => 
  array (
    'city' => 'Adelaide',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.93333',
    'longitude' => '138.6',
  ),
  3181 => 
  array (
    'city' => 'Dunsborough',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.58333',
    'longitude' => '115.08333',
  ),
  3182 => 
  array (
    'city' => 'Eaton',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.31667',
    'longitude' => '115.71667',
  ),
  3183 => 
  array (
    'city' => 'Seacliff',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-35.03333',
    'longitude' => '138.525',
  ),
  3184 => 
  array (
    'city' => 'Clapham',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.99139',
    'longitude' => '138.6',
  ),
  3185 => 
  array (
    'city' => 'Two Rocks',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.55056',
    'longitude' => '115.58889',
  ),
  3186 => 
  array (
    'city' => 'Quinns Rocks',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.68611',
    'longitude' => '115.67778',
  ),
  3187 => 
  array (
    'city' => 'East Fremantle',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.03889',
    'longitude' => '115.76667',
  ),
  3188 => 
  array (
    'city' => 'Peppermint Grove',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.00417',
    'longitude' => '115.76389',
  ),
  3189 => 
  array (
    'city' => 'Claremont',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.9875',
    'longitude' => '115.78611',
  ),
  3190 => 
  array (
    'city' => 'Bicton',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.02778',
    'longitude' => '115.78333',
  ),
  3191 => 
  array (
    'city' => 'Attadale',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.02361',
    'longitude' => '115.79583',
  ),
  3192 => 
  array (
    'city' => 'Shenton Park',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.95833',
    'longitude' => '115.79722',
  ),
  3193 => 
  array (
    'city' => 'Dalkeith',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.99583',
    'longitude' => '115.79583',
  ),
  3194 => 
  array (
    'city' => 'Jurien',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-30.30417',
    'longitude' => '115.0375',
  ),
  3195 => 
  array (
    'city' => 'Warnbro',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.33611',
    'longitude' => '115.74861',
  ),
  3196 => 
  array (
    'city' => 'Mullaloo',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.77896',
    'longitude' => '115.73676',
  ),
  3197 => 
  array (
    'city' => 'Alyangula',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-13.84833',
    'longitude' => '136.41917',
  ),
  3198 => 
  array (
    'city' => 'Stuart Park',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.44306',
    'longitude' => '130.845',
  ),
  3199 => 
  array (
    'city' => 'Larrakeyah',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.45527',
    'longitude' => '130.83172',
  ),
  3200 => 
  array (
    'city' => 'Leanyer',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.36667',
    'longitude' => '130.9',
  ),
  3201 => 
  array (
    'city' => 'Ludmilla',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.42032',
    'longitude' => '130.85506',
  ),
  3202 => 
  array (
    'city' => 'Fannie Bay',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.42618',
    'longitude' => '130.83979',
  ),
  3203 => 
  array (
    'city' => 'Nightcliff',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.38056',
    'longitude' => '130.85389',
  ),
  3204 => 
  array (
    'city' => 'Glen Iris',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-33.34167',
    'longitude' => '115.66667',
  ),
  3205 => 
  array (
    'city' => 'Lower King',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-34.95778',
    'longitude' => '117.93833',
  ),
  3206 => 
  array (
    'city' => 'Young',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.31667',
    'longitude' => '148.3',
  ),
  3207 => 
  array (
    'city' => 'Yeppoon',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-23.13333',
    'longitude' => '150.73333',
  ),
  3208 => 
  array (
    'city' => 'Yatala',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.71667',
    'longitude' => '153.21667',
  ),
  3209 => 
  array (
    'city' => 'Yarrawonga',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.01667',
    'longitude' => '146',
  ),
  3210 => 
  array (
    'city' => 'Yarraman',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.83333',
    'longitude' => '151.98333',
  ),
  3211 => 
  array (
    'city' => 'Yandina',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.56667',
    'longitude' => '152.96667',
  ),
  3212 => 
  array (
    'city' => 'Wynyard',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41',
    'longitude' => '145.71667',
  ),
  3213 => 
  array (
    'city' => 'Wynnum',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.45',
    'longitude' => '153.16667',
  ),
  3214 => 
  array (
    'city' => 'Worrolong',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-37.81667',
    'longitude' => '140.86667',
  ),
  3215 => 
  array (
    'city' => 'Woree',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-16.95',
    'longitude' => '145.75',
  ),
  3216 => 
  array (
    'city' => 'Woorim',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.06667',
    'longitude' => '153.21667',
  ),
  3217 => 
  array (
    'city' => 'Woombye',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.66667',
    'longitude' => '152.96667',
  ),
  3218 => 
  array (
    'city' => 'Woolgoolga',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.11667',
    'longitude' => '153.2',
  ),
  3219 => 
  array (
    'city' => 'Woodridge',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.63333',
    'longitude' => '153.1',
  ),
  3220 => 
  array (
    'city' => 'Woodford',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.95',
    'longitude' => '152.78333',
  ),
  3221 => 
  array (
    'city' => 'Wondai',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.31667',
    'longitude' => '151.86667',
  ),
  3222 => 
  array (
    'city' => 'Wodonga',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.11667',
    'longitude' => '146.88333',
  ),
  3223 => 
  array (
    'city' => 'Windaroo',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.73333',
    'longitude' => '153.2',
  ),
  3224 => 
  array (
    'city' => 'Westcourt',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.8',
    'longitude' => '150.15',
  ),
  3225 => 
  array (
    'city' => 'Westbury',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.51667',
    'longitude' => '146.85',
  ),
  3226 => 
  array (
    'city' => 'Westbrook',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.61667',
    'longitude' => '151.86667',
  ),
  3227 => 
  array (
    'city' => 'Wellington Point',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.48333',
    'longitude' => '153.25',
  ),
  3228 => 
  array (
    'city' => 'Wellington',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.55',
    'longitude' => '148.95',
  ),
  3229 => 
  array (
    'city' => 'Warwick',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-28.23333',
    'longitude' => '152.01667',
  ),
  3230 => 
  array (
    'city' => 'Warrnambool',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.38333',
    'longitude' => '142.48333',
  ),
  3231 => 
  array (
    'city' => 'Warrane',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.86667',
    'longitude' => '147.38333',
  ),
  3232 => 
  array (
    'city' => 'Warragul',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.16667',
    'longitude' => '145.93333',
  ),
  3233 => 
  array (
    'city' => 'Wangaratta',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.36667',
    'longitude' => '146.33333',
  ),
  3234 => 
  array (
    'city' => 'Walkerston',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-21.16667',
    'longitude' => '149.06667',
  ),
  3235 => 
  array (
    'city' => 'Wagga Wagga',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.11667',
    'longitude' => '147.36667',
  ),
  3236 => 
  array (
    'city' => 'Wacol',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.58333',
    'longitude' => '152.93333',
  ),
  3237 => 
  array (
    'city' => 'Victoria Point',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.58333',
    'longitude' => '153.3',
  ),
  3238 => 
  array (
    'city' => 'Urraween',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-25.3',
    'longitude' => '152.81667',
  ),
  3239 => 
  array (
    'city' => 'Urangan',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-25.3',
    'longitude' => '152.9',
  ),
  3240 => 
  array (
    'city' => 'Upper Coomera',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.9',
    'longitude' => '153.3',
  ),
  3241 => 
  array (
    'city' => 'Ulverstone',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.15',
    'longitude' => '146.16667',
  ),
  3242 => 
  array (
    'city' => 'Ulladulla',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.35',
    'longitude' => '150.46667',
  ),
  3243 => 
  array (
    'city' => 'Tumut',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.3',
    'longitude' => '148.21667',
  ),
  3244 => 
  array (
    'city' => 'Tugun',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-28.15',
    'longitude' => '153.5',
  ),
  3245 => 
  array (
    'city' => 'Trinity Beach',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-16.78876',
    'longitude' => '145.69682',
  ),
  3246 => 
  array (
    'city' => 'Traralgon',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.18333',
    'longitude' => '146.53333',
  ),
  3247 => 
  array (
    'city' => 'Townsville',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-19.25',
    'longitude' => '146.8',
  ),
  3248 => 
  array (
    'city' => 'Torquay',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-25.28333',
    'longitude' => '152.86667',
  ),
  3249 => 
  array (
    'city' => 'Toowoomba',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.55',
    'longitude' => '151.96667',
  ),
  3250 => 
  array (
    'city' => 'Toolooa',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-23.93333',
    'longitude' => '151.28333',
  ),
  3251 => 
  array (
    'city' => 'Tolga',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-17.23333',
    'longitude' => '145.48333',
  ),
  3252 => 
  array (
    'city' => 'Tin Can Bay',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-25.91667',
    'longitude' => '153',
  ),
  3253 => 
  array (
    'city' => 'The Entrance',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.35',
    'longitude' => '151.5',
  ),
  3254 => 
  array (
    'city' => 'Thagoona',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.63333',
    'longitude' => '152.63333',
  ),
  3255 => 
  array (
    'city' => 'Thabeban',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-24.9',
    'longitude' => '152.35',
  ),
  3256 => 
  array (
    'city' => 'Tewantin',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.38333',
    'longitude' => '153.03333',
  ),
  3257 => 
  array (
    'city' => 'Tarragindi',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.53333',
    'longitude' => '153.03333',
  ),
  3258 => 
  array (
    'city' => 'Taroona',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.95',
    'longitude' => '147.33333',
  ),
  3259 => 
  array (
    'city' => 'Taroom',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-25.65',
    'longitude' => '149.8',
  ),
  3260 => 
  array (
    'city' => 'Taree',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.9',
    'longitude' => '152.46667',
  ),
  3261 => 
  array (
    'city' => 'Tamworth',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.1',
    'longitude' => '150.93333',
  ),
  3262 => 
  array (
    'city' => 'Tallebudgera',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-28.15',
    'longitude' => '153.43333',
  ),
  3263 => 
  array (
    'city' => 'Sydney',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.86785',
    'longitude' => '151.20732',
  ),
  3264 => 
  array (
    'city' => 'Swan Hill',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-35.33781',
    'longitude' => '143.5544',
  ),
  3265 => 
  array (
    'city' => 'Surfers Paradise',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-28.00274',
    'longitude' => '153.42999',
  ),
  3266 => 
  array (
    'city' => 'Sunnybank',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.58333',
    'longitude' => '153.05',
  ),
  3267 => 
  array (
    'city' => 'Sunbury',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.58333',
    'longitude' => '144.73333',
  ),
  3268 => 
  array (
    'city' => 'Strathpine',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.30414',
    'longitude' => '152.98977',
  ),
  3269 => 
  array (
    'city' => 'Port Stephens',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.6966',
    'longitude' => '152.06348',
  ),
  3270 => 
  array (
    'city' => 'Stawell',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.05',
    'longitude' => '142.76667',
  ),
  3271 => 
  array (
    'city' => 'Stanthorpe',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-28.66667',
    'longitude' => '151.95',
  ),
  3272 => 
  array (
    'city' => 'Spring Hill',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.46141',
    'longitude' => '153.02311',
  ),
  3273 => 
  array (
    'city' => 'Southport',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.96667',
    'longitude' => '153.4',
  ),
  3274 => 
  array (
    'city' => 'South Grafton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.7',
    'longitude' => '152.95',
  ),
  3275 => 
  array (
    'city' => 'Sorrento',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.31667',
    'longitude' => '144.73333',
  ),
  3276 => 
  array (
    'city' => 'Sorell',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.78444',
    'longitude' => '147.56028',
  ),
  3277 => 
  array (
    'city' => 'Somerville',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.21667',
    'longitude' => '145.16667',
  ),
  3278 => 
  array (
    'city' => 'Smithton',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-40.83333',
    'longitude' => '145.11667',
  ),
  3279 => 
  array (
    'city' => 'Slacks Creek',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.65',
    'longitude' => '153.15',
  ),
  3280 => 
  array (
    'city' => 'Singleton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.56667',
    'longitude' => '151.18333',
  ),
  3281 => 
  array (
    'city' => 'Shorncliffe',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.32759',
    'longitude' => '153.08161',
  ),
  3282 => 
  array (
    'city' => 'Shepparton',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.38333',
    'longitude' => '145.4',
  ),
  3283 => 
  array (
    'city' => 'Shellharbour Village',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.58333',
    'longitude' => '150.86667',
  ),
  3284 => 
  array (
    'city' => 'Sheffield',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.38333',
    'longitude' => '146.33333',
  ),
  3285 => 
  array (
    'city' => 'Sharon',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-24.88333',
    'longitude' => '152.26667',
  ),
  3286 => 
  array (
    'city' => 'Sebastopol',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.58532',
    'longitude' => '143.83953',
  ),
  3287 => 
  array (
    'city' => 'Scottsdale',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.15',
    'longitude' => '147.51667',
  ),
  3288 => 
  array (
    'city' => 'Scarness',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-25.28333',
    'longitude' => '152.85',
  ),
  3289 => 
  array (
    'city' => 'Sawtell',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.38333',
    'longitude' => '153.1',
  ),
  3290 => 
  array (
    'city' => 'Sarina',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-21.43333',
    'longitude' => '149.21667',
  ),
  3291 => 
  array (
    'city' => 'Sandgate',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.32198',
    'longitude' => '153.06951',
  ),
  3292 => 
  array (
    'city' => 'Sandford',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.93333',
    'longitude' => '147.5',
  ),
  3293 => 
  array (
    'city' => 'Sale',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.1',
    'longitude' => '147.06667',
  ),
  3294 => 
  array (
    'city' => 'Saint Kilda',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.8676',
    'longitude' => '144.98099',
  ),
  3295 => 
  array (
    'city' => 'Saint Helens',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.32028',
    'longitude' => '148.23889',
  ),
  3296 => 
  array (
    'city' => 'Rosebery',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.78333',
    'longitude' => '145.51667',
  ),
  3297 => 
  array (
    'city' => 'Roma',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.58333',
    'longitude' => '148.78333',
  ),
  3298 => 
  array (
    'city' => 'Rokeby',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.9',
    'longitude' => '147.43333',
  ),
  3299 => 
  array (
    'city' => 'Rocklea',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.53917',
    'longitude' => '153.00402',
  ),
  3300 => 
  array (
    'city' => 'Rockhampton',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-23.38333',
    'longitude' => '150.5',
  ),
  3301 => 
  array (
    'city' => 'Riverview',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.6',
    'longitude' => '152.85',
  ),
  3302 => 
  array (
    'city' => 'Riverstone',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.68333',
    'longitude' => '150.86667',
  ),
  3303 => 
  array (
    'city' => 'Richmond',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.6',
    'longitude' => '150.76667',
  ),
  3304 => 
  array (
    'city' => 'Rhodes',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '151.08333',
  ),
  3305 => 
  array (
    'city' => 'Revesby',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.95',
    'longitude' => '151.01667',
  ),
  3306 => 
  array (
    'city' => 'Renmark West',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.16667',
    'longitude' => '140.7',
  ),
  3307 => 
  array (
    'city' => 'Renmark',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.17702',
    'longitude' => '140.74697',
  ),
  3308 => 
  array (
    'city' => 'Regents Park',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.88333',
    'longitude' => '151.01667',
  ),
  3309 => 
  array (
    'city' => 'Redlynch',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-16.88333',
    'longitude' => '145.7',
  ),
  3310 => 
  array (
    'city' => 'Redland Bay',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.61343',
    'longitude' => '153.30245',
  ),
  3311 => 
  array (
    'city' => 'Red Hill',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-20.31667',
    'longitude' => '148.5',
  ),
  3312 => 
  array (
    'city' => 'Redhead',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.01667',
    'longitude' => '151.71667',
  ),
  3313 => 
  array (
    'city' => 'Redfern',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.89279',
    'longitude' => '151.20415',
  ),
  3314 => 
  array (
    'city' => 'Redbank',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.6',
    'longitude' => '152.86667',
  ),
  3315 => 
  array (
    'city' => 'Raworth',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.73333',
    'longitude' => '151.61667',
  ),
  3316 => 
  array (
    'city' => 'Ravenshoe',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-17.63333',
    'longitude' => '145.48333',
  ),
  3317 => 
  array (
    'city' => 'Rathmines',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.03333',
    'longitude' => '151.6',
  ),
  3318 => 
  array (
    'city' => 'Quirindi',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.51667',
    'longitude' => '150.68333',
  ),
  3319 => 
  array (
    'city' => 'Queenstown',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.08333',
    'longitude' => '145.55',
  ),
  3320 => 
  array (
    'city' => 'Queenscliff',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.26667',
    'longitude' => '144.65',
  ),
  3321 => 
  array (
    'city' => 'Queanbeyan',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.35',
    'longitude' => '149.23333',
  ),
  3322 => 
  array (
    'city' => 'Quakers Hill',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.73333',
    'longitude' => '150.88333',
  ),
  3323 => 
  array (
    'city' => 'Pymble',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.75',
    'longitude' => '151.15',
  ),
  3324 => 
  array (
    'city' => 'Port Sorell',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.16667',
    'longitude' => '146.55',
  ),
  3325 => 
  array (
    'city' => 'Port Macquarie',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.43333',
    'longitude' => '152.91667',
  ),
  3326 => 
  array (
    'city' => 'Portland',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.33333',
    'longitude' => '141.6',
  ),
  3327 => 
  array (
    'city' => 'Portland',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.36667',
    'longitude' => '150',
  ),
  3328 => 
  array (
    'city' => 'Port Kennedy',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-10.585',
    'longitude' => '142.21778',
  ),
  3329 => 
  array (
    'city' => 'Port Kembla',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.46667',
    'longitude' => '150.9',
  ),
  3330 => 
  array (
    'city' => 'Port Douglas',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-16.48333',
    'longitude' => '145.46667',
  ),
  3331 => 
  array (
    'city' => 'Point Clare',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.45',
    'longitude' => '151.33333',
  ),
  3332 => 
  array (
    'city' => 'Pitt Town',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.58333',
    'longitude' => '150.86667',
  ),
  3333 => 
  array (
    'city' => 'Picton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.18333',
    'longitude' => '150.6',
  ),
  3334 => 
  array (
    'city' => 'Phillip',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.13333',
    'longitude' => '150.85',
  ),
  3335 => 
  array (
    'city' => 'Perthville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.48333',
    'longitude' => '149.53333',
  ),
  3336 => 
  array (
    'city' => 'Perth',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.56667',
    'longitude' => '147.16667',
  ),
  3337 => 
  array (
    'city' => 'Penshurst',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '151.08333',
  ),
  3338 => 
  array (
    'city' => 'Penrith',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.75',
    'longitude' => '150.7',
  ),
  3339 => 
  array (
    'city' => 'Penola',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-37.38333',
    'longitude' => '140.81667',
  ),
  3340 => 
  array (
    'city' => 'Pennant Hills',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.73783',
    'longitude' => '151.07216',
  ),
  3341 => 
  array (
    'city' => 'Penguin',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.11667',
    'longitude' => '146.06667',
  ),
  3342 => 
  array (
    'city' => 'Peak Hill',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.73333',
    'longitude' => '148.18333',
  ),
  3343 => 
  array (
    'city' => 'Parkes',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.13333',
    'longitude' => '148.18333',
  ),
  3344 => 
  array (
    'city' => 'Palm Beach',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.59664',
    'longitude' => '151.32384',
  ),
  3345 => 
  array (
    'city' => 'Pakenham Upper',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.01667',
    'longitude' => '145.51667',
  ),
  3346 => 
  array (
    'city' => 'Ouyen',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-35.06667',
    'longitude' => '142.31667',
  ),
  3347 => 
  array (
    'city' => 'Orange',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.28333',
    'longitude' => '149.1',
  ),
  3348 => 
  array (
    'city' => 'One Mile',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.62902',
    'longitude' => '152.73768',
  ),
  3349 => 
  array (
    'city' => 'Old Beach',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.75',
    'longitude' => '147.28333',
  ),
  3350 => 
  array (
    'city' => 'Old Bar',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.96667',
    'longitude' => '152.58333',
  ),
  3351 => 
  array (
    'city' => 'Oberon',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.71667',
    'longitude' => '149.86667',
  ),
  3352 => 
  array (
    'city' => 'Oatley',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.98333',
    'longitude' => '151.06667',
  ),
  3353 => 
  array (
    'city' => 'Oakdale',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.08333',
    'longitude' => '150.51667',
  ),
  3354 => 
  array (
    'city' => 'Nyngan',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.56667',
    'longitude' => '147.18333',
  ),
  3355 => 
  array (
    'city' => 'Nowra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.88333',
    'longitude' => '150.6',
  ),
  3356 => 
  array (
    'city' => 'Notting Hill',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.905',
    'longitude' => '145.1427',
  ),
  3357 => 
  array (
    'city' => 'North Wonthaggi',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.6',
    'longitude' => '145.6',
  ),
  3358 => 
  array (
    'city' => 'North Turramurra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.71345',
    'longitude' => '151.14726',
  ),
  3359 => 
  array (
    'city' => 'Northmead',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.78333',
    'longitude' => '150.98333',
  ),
  3360 => 
  array (
    'city' => 'North Haven',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.63333',
    'longitude' => '152.81667',
  ),
  3361 => 
  array (
    'city' => 'Normanhurst',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.73333',
    'longitude' => '151.1',
  ),
  3362 => 
  array (
    'city' => 'Noosa Heads',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.38333',
    'longitude' => '153.15',
  ),
  3363 => 
  array (
    'city' => 'Nimbin',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.59726',
    'longitude' => '153.22254',
  ),
  3364 => 
  array (
    'city' => 'Newtown',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.89835',
    'longitude' => '151.17754',
  ),
  3365 => 
  array (
    'city' => 'Newstead',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.43333',
    'longitude' => '147.16667',
  ),
  3366 => 
  array (
    'city' => 'Newport',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.65517',
    'longitude' => '151.32126',
  ),
  3367 => 
  array (
    'city' => 'New Norfolk',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.78261',
    'longitude' => '147.0587',
  ),
  3368 => 
  array (
    'city' => 'Newnham',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.38333',
    'longitude' => '147.13333',
  ),
  3369 => 
  array (
    'city' => 'Newcastle',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.92715',
    'longitude' => '151.77647',
  ),
  3370 => 
  array (
    'city' => 'Nerang',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.98333',
    'longitude' => '153.33333',
  ),
  3371 => 
  array (
    'city' => 'Nelson Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.71667',
    'longitude' => '152.15',
  ),
  3372 => 
  array (
    'city' => 'Narromine',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.15',
    'longitude' => '148.25',
  ),
  3373 => 
  array (
    'city' => 'Narrandera',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.75',
    'longitude' => '146.55',
  ),
  3374 => 
  array (
    'city' => 'Narrabri',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.31667',
    'longitude' => '149.78333',
  ),
  3375 => 
  array (
    'city' => 'Narrabeen',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.71277',
    'longitude' => '151.29736',
  ),
  3376 => 
  array (
    'city' => 'Narooma',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.21667',
    'longitude' => '150.05',
  ),
  3377 => 
  array (
    'city' => 'Narellan',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.03333',
    'longitude' => '150.73333',
  ),
  3378 => 
  array (
    'city' => 'Narara',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.4',
    'longitude' => '151.35',
  ),
  3379 => 
  array (
    'city' => 'Naracoorte',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-36.95785',
    'longitude' => '140.7383',
  ),
  3380 => 
  array (
    'city' => 'Nana Glen',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.13333',
    'longitude' => '153.01667',
  ),
  3381 => 
  array (
    'city' => 'Nambucca Heads',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.65',
    'longitude' => '153',
  ),
  3382 => 
  array (
    'city' => 'Nambucca',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.63333',
    'longitude' => '152.98333',
  ),
  3383 => 
  array (
    'city' => 'Nambour',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.63333',
    'longitude' => '152.95',
  ),
  3384 => 
  array (
    'city' => 'Nabiac',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.1',
    'longitude' => '152.38333',
  ),
  3385 => 
  array (
    'city' => 'Muswellbrook',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.26667',
    'longitude' => '150.9',
  ),
  3386 => 
  array (
    'city' => 'Murwillumbah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.31667',
    'longitude' => '153.4',
  ),
  3387 => 
  array (
    'city' => 'Murrumbateman',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.96667',
    'longitude' => '149.03333',
  ),
  3388 => 
  array (
    'city' => 'Mundulla',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-36.36667',
    'longitude' => '140.68333',
  ),
  3389 => 
  array (
    'city' => 'Mulwala',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.98333',
    'longitude' => '146.01667',
  ),
  3390 => 
  array (
    'city' => 'Mulgrave',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.91667',
    'longitude' => '145.2',
  ),
  3391 => 
  array (
    'city' => 'Mulgoa',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '150.66667',
  ),
  3392 => 
  array (
    'city' => 'Mudgee',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.59426',
    'longitude' => '149.5871',
  ),
  3393 => 
  array (
    'city' => 'Mount Gambier',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-37.83333',
    'longitude' => '140.76667',
  ),
  3394 => 
  array (
    'city' => 'Mount Druitt',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.76667',
    'longitude' => '150.81667',
  ),
  3395 => 
  array (
    'city' => 'Mount Colah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.68333',
    'longitude' => '151.11667',
  ),
  3396 => 
  array (
    'city' => 'Mount Beauty',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.75',
    'longitude' => '147.16667',
  ),
  3397 => 
  array (
    'city' => 'Moss Vale',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.55',
    'longitude' => '150.38333',
  ),
  3398 => 
  array (
    'city' => 'Mosman',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.82778',
    'longitude' => '151.23333',
  ),
  3399 => 
  array (
    'city' => 'Morwell',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.23333',
    'longitude' => '146.4',
  ),
  3400 => 
  array (
    'city' => 'Mortdale',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '151.08333',
  ),
  3401 => 
  array (
    'city' => 'Mornington',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.21667',
    'longitude' => '145.03333',
  ),
  3402 => 
  array (
    'city' => 'Moree',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.46667',
    'longitude' => '149.85',
  ),
  3403 => 
  array (
    'city' => 'Mordialloc',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38',
    'longitude' => '145.08333',
  ),
  3404 => 
  array (
    'city' => 'Morayfield',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.11667',
    'longitude' => '152.95',
  ),
  3405 => 
  array (
    'city' => 'Moonee Beach',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.20575',
    'longitude' => '153.15293',
  ),
  3406 => 
  array (
    'city' => 'Moonah',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.85',
    'longitude' => '147.3',
  ),
  3407 => 
  array (
    'city' => 'Mooloolaba',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.68333',
    'longitude' => '153.11667',
  ),
  3408 => 
  array (
    'city' => 'Montrose',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.81667',
    'longitude' => '145.35',
  ),
  3409 => 
  array (
    'city' => 'Monash',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.23333',
    'longitude' => '140.56667',
  ),
  3410 => 
  array (
    'city' => 'Molong',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.1',
    'longitude' => '148.86667',
  ),
  3411 => 
  array (
    'city' => 'Moggill',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.58333',
    'longitude' => '152.86667',
  ),
  3412 => 
  array (
    'city' => 'Moe',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.16667',
    'longitude' => '146.26667',
  ),
  3413 => 
  array (
    'city' => 'Moama',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.11667',
    'longitude' => '144.78333',
  ),
  3414 => 
  array (
    'city' => 'Mittagong',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.45',
    'longitude' => '150.45',
  ),
  3415 => 
  array (
    'city' => 'Miranda',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.03333',
    'longitude' => '151.1',
  ),
  3416 => 
  array (
    'city' => 'Milton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.31667',
    'longitude' => '150.43333',
  ),
  3417 => 
  array (
    'city' => 'Millthorpe',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.45',
    'longitude' => '149.18333',
  ),
  3418 => 
  array (
    'city' => 'Millicent',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-37.6',
    'longitude' => '140.35',
  ),
  3419 => 
  array (
    'city' => 'Mildura',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-34.2',
    'longitude' => '142.15',
  ),
  3420 => 
  array (
    'city' => 'Merrylands',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '150.98333',
  ),
  3421 => 
  array (
    'city' => 'Merriwa',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.15',
    'longitude' => '150.35',
  ),
  3422 => 
  array (
    'city' => 'Merimbula',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.9',
    'longitude' => '149.9',
  ),
  3423 => 
  array (
    'city' => 'Menai',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.01667',
    'longitude' => '151.01667',
  ),
  3424 => 
  array (
    'city' => 'Melton',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.68333',
    'longitude' => '144.58333',
  ),
  3425 => 
  array (
    'city' => 'Melbourne',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.814',
    'longitude' => '144.96332',
  ),
  3426 => 
  array (
    'city' => 'Medowie',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.73333',
    'longitude' => '151.86667',
  ),
  3427 => 
  array (
    'city' => 'Matraville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.95',
    'longitude' => '151.23333',
  ),
  3428 => 
  array (
    'city' => 'Mascot',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.93333',
    'longitude' => '151.2',
  ),
  3429 => 
  array (
    'city' => 'Maryborough',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.05',
    'longitude' => '143.75',
  ),
  3430 => 
  array (
    'city' => 'Maryborough',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-25.53333',
    'longitude' => '152.7',
  ),
  3431 => 
  array (
    'city' => 'Marrickville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.91667',
    'longitude' => '151.16667',
  ),
  3432 => 
  array (
    'city' => 'Maroubra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.95',
    'longitude' => '151.23333',
  ),
  3433 => 
  array (
    'city' => 'Margate',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-43.03333',
    'longitude' => '147.26667',
  ),
  3434 => 
  array (
    'city' => 'Margate',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.24761',
    'longitude' => '153.09809',
  ),
  3435 => 
  array (
    'city' => 'Mareeba',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-17',
    'longitude' => '145.43333',
  ),
  3436 => 
  array (
    'city' => 'Mansfield',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.05',
    'longitude' => '146.08333',
  ),
  3437 => 
  array (
    'city' => 'Manly',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.79798',
    'longitude' => '151.28826',
  ),
  3438 => 
  array (
    'city' => 'Manilla',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.75',
    'longitude' => '150.71667',
  ),
  3439 => 
  array (
    'city' => 'Malabar',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '151.25',
  ),
  3440 => 
  array (
    'city' => 'Maitland',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.73333',
    'longitude' => '151.55',
  ),
  3441 => 
  array (
    'city' => 'Maclean',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.46667',
    'longitude' => '153.21667',
  ),
  3442 => 
  array (
    'city' => 'Macksville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.71667',
    'longitude' => '152.9',
  ),
  3443 => 
  array (
    'city' => 'Mackay',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-21.15',
    'longitude' => '149.2',
  ),
  3444 => 
  array (
    'city' => 'Luddenham',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.88333',
    'longitude' => '150.68333',
  ),
  3445 => 
  array (
    'city' => 'Loveday',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.28333',
    'longitude' => '140.43333',
  ),
  3446 => 
  array (
    'city' => 'Lorn',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.73333',
    'longitude' => '151.56667',
  ),
  3447 => 
  array (
    'city' => 'Long Jetty',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.36667',
    'longitude' => '151.48333',
  ),
  3448 => 
  array (
    'city' => 'Longford',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.6',
    'longitude' => '147.11667',
  ),
  3449 => 
  array (
    'city' => 'Liverpool',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.9',
    'longitude' => '150.93333',
  ),
  3450 => 
  array (
    'city' => 'Lithgow',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.48333',
    'longitude' => '150.15',
  ),
  3451 => 
  array (
    'city' => 'Lismore',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.81354',
    'longitude' => '153.2773',
  ),
  3452 => 
  array (
    'city' => 'Lisarow',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.38333',
    'longitude' => '151.36667',
  ),
  3453 => 
  array (
    'city' => 'Lindisfarne',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.83333',
    'longitude' => '147.35',
  ),
  3454 => 
  array (
    'city' => 'Lindfield',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.78333',
    'longitude' => '151.16667',
  ),
  3455 => 
  array (
    'city' => 'Lightning Ridge',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.43333',
    'longitude' => '147.98333',
  ),
  3456 => 
  array (
    'city' => 'Lidcombe',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.86436',
    'longitude' => '151.0397',
  ),
  3457 => 
  array (
    'city' => 'Leura',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.71667',
    'longitude' => '150.33333',
  ),
  3458 => 
  array (
    'city' => 'Leumeah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.05',
    'longitude' => '150.83333',
  ),
  3459 => 
  array (
    'city' => 'Leopold',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.18333',
    'longitude' => '144.46667',
  ),
  3460 => 
  array (
    'city' => 'Leichhardt',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.88333',
    'longitude' => '151.15',
  ),
  3461 => 
  array (
    'city' => 'Leeton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.56667',
    'longitude' => '146.4',
  ),
  3462 => 
  array (
    'city' => 'Lawson',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.71667',
    'longitude' => '150.43333',
  ),
  3463 => 
  array (
    'city' => 'Lavington',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.05',
    'longitude' => '146.93333',
  ),
  3464 => 
  array (
    'city' => 'Laurieton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.65',
    'longitude' => '152.8',
  ),
  3465 => 
  array (
    'city' => 'Launceston',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.45',
    'longitude' => '147.16667',
  ),
  3466 => 
  array (
    'city' => 'Lauderdale',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.9',
    'longitude' => '147.48333',
  ),
  3467 => 
  array (
    'city' => 'Latrobe',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.23333',
    'longitude' => '146.41667',
  ),
  3468 => 
  array (
    'city' => 'Larnook',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.65',
    'longitude' => '153.11667',
  ),
  3469 => 
  array (
    'city' => 'Largs',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.7',
    'longitude' => '151.6',
  ),
  3470 => 
  array (
    'city' => 'Lara',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.01667',
    'longitude' => '144.4',
  ),
  3471 => 
  array (
    'city' => 'Lane Cove',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.81667',
    'longitude' => '151.16667',
  ),
  3472 => 
  array (
    'city' => 'Lakes Entrance',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.88115',
    'longitude' => '147.98103',
  ),
  3473 => 
  array (
    'city' => 'Lakemba',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.91667',
    'longitude' => '151.08333',
  ),
  3474 => 
  array (
    'city' => 'Lake Illawarra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.54658',
    'longitude' => '150.85645',
  ),
  3475 => 
  array (
    'city' => 'Lake Cargelligo',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.3',
    'longitude' => '146.38333',
  ),
  3476 => 
  array (
    'city' => 'Lake Albert',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.16667',
    'longitude' => '147.38333',
  ),
  3477 => 
  array (
    'city' => 'Kyogle',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.61667',
    'longitude' => '153',
  ),
  3478 => 
  array (
    'city' => 'Kyabram',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.31667',
    'longitude' => '145.05',
  ),
  3479 => 
  array (
    'city' => 'Kurri Kurri',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.81667',
    'longitude' => '151.48333',
  ),
  3480 => 
  array (
    'city' => 'Kurnell',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.01667',
    'longitude' => '151.2',
  ),
  3481 => 
  array (
    'city' => 'Kuranda',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-16.81667',
    'longitude' => '145.65',
  ),
  3482 => 
  array (
    'city' => 'Kotara',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.95',
    'longitude' => '151.68333',
  ),
  3483 => 
  array (
    'city' => 'Kootingal',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.06667',
    'longitude' => '151.05',
  ),
  3484 => 
  array (
    'city' => 'Kogarah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.98333',
    'longitude' => '151.11667',
  ),
  3485 => 
  array (
    'city' => 'Kirribilli',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.85',
    'longitude' => '151.21667',
  ),
  3486 => 
  array (
    'city' => 'Kingston Beach',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.98333',
    'longitude' => '147.31667',
  ),
  3487 => 
  array (
    'city' => 'Kingston',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.96667',
    'longitude' => '147.31667',
  ),
  3488 => 
  array (
    'city' => 'Kingston',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.23333',
    'longitude' => '140.35',
  ),
  3489 => 
  array (
    'city' => 'Kingscliff',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.26667',
    'longitude' => '153.56667',
  ),
  3490 => 
  array (
    'city' => 'Kingaroy',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.53333',
    'longitude' => '151.83333',
  ),
  3491 => 
  array (
    'city' => 'Kiama',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.68333',
    'longitude' => '150.86667',
  ),
  3492 => 
  array (
    'city' => 'Kettering',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-43.11667',
    'longitude' => '147.26667',
  ),
  3493 => 
  array (
    'city' => 'Kenthurst',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.66667',
    'longitude' => '151',
  ),
  3494 => 
  array (
    'city' => 'Kensington',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.91667',
    'longitude' => '151.21667',
  ),
  3495 => 
  array (
    'city' => 'Kendall',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.63333',
    'longitude' => '152.7',
  ),
  3496 => 
  array (
    'city' => 'Kempsey',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.08333',
    'longitude' => '152.83333',
  ),
  3497 => 
  array (
    'city' => 'Kelso',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.41667',
    'longitude' => '149.6',
  ),
  3498 => 
  array (
    'city' => 'Keith',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-36.1',
    'longitude' => '140.35',
  ),
  3499 => 
  array (
    'city' => 'Keiraville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.41667',
    'longitude' => '150.86667',
  ),
  3500 => 
  array (
    'city' => 'Katoomba',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.7',
    'longitude' => '150.3',
  ),
  3501 => 
  array (
    'city' => 'Kanwal',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.25391',
    'longitude' => '151.49177',
  ),
  3502 => 
  array (
    'city' => 'Kangaroo Valley',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.73333',
    'longitude' => '150.53333',
  ),
  3503 => 
  array (
    'city' => 'Kandos',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.85',
    'longitude' => '149.96667',
  ),
  3504 => 
  array (
    'city' => 'Kahibah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.96667',
    'longitude' => '151.71667',
  ),
  3505 => 
  array (
    'city' => 'Junee',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.88333',
    'longitude' => '147.58333',
  ),
  3506 => 
  array (
    'city' => 'Jindera',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.95',
    'longitude' => '146.9',
  ),
  3507 => 
  array (
    'city' => 'Jindabyne',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.41667',
    'longitude' => '148.63333',
  ),
  3508 => 
  array (
    'city' => 'Jilliby',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.22605',
    'longitude' => '151.41684',
  ),
  3509 => 
  array (
    'city' => 'Jannali',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.01667',
    'longitude' => '151.06667',
  ),
  3510 => 
  array (
    'city' => 'Jamberoo',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.65',
    'longitude' => '150.78333',
  ),
  3511 => 
  array (
    'city' => 'Inverell',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.78333',
    'longitude' => '151.11667',
  ),
  3512 => 
  array (
    'city' => 'Innisfail',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-17.53333',
    'longitude' => '146.03333',
  ),
  3513 => 
  array (
    'city' => 'Ingleburn',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34',
    'longitude' => '150.86667',
  ),
  3514 => 
  array (
    'city' => 'Ingham',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-18.65',
    'longitude' => '146.16667',
  ),
  3515 => 
  array (
    'city' => 'Hurstville Grove',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '151.1',
  ),
  3516 => 
  array (
    'city' => 'Huonville',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-43.03333',
    'longitude' => '147.03333',
  ),
  3517 => 
  array (
    'city' => 'Howlong',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.96667',
    'longitude' => '146.63333',
  ),
  3518 => 
  array (
    'city' => 'Horsham',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.71667',
    'longitude' => '142.2',
  ),
  3519 => 
  array (
    'city' => 'Hornsby',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.70244',
    'longitude' => '151.09931',
  ),
  3520 => 
  array (
    'city' => 'Home Hill',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-19.66667',
    'longitude' => '147.41667',
  ),
  3521 => 
  array (
    'city' => 'Homebush',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.86667',
    'longitude' => '151.08333',
  ),
  3522 => 
  array (
    'city' => 'Holsworthy',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.98333',
    'longitude' => '150.96667',
  ),
  3523 => 
  array (
    'city' => 'Holgate',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.4',
    'longitude' => '151.41667',
  ),
  3524 => 
  array (
    'city' => 'Holbrook',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.73333',
    'longitude' => '147.31667',
  ),
  3525 => 
  array (
    'city' => 'Hobart',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.87936',
    'longitude' => '147.32941',
  ),
  3526 => 
  array (
    'city' => 'Hillston',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.48333',
    'longitude' => '145.53333',
  ),
  3527 => 
  array (
    'city' => 'Henty',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.51667',
    'longitude' => '147.05',
  ),
  3528 => 
  array (
    'city' => 'Helensburgh',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.18333',
    'longitude' => '151',
  ),
  3529 => 
  array (
    'city' => 'Heddon Greta',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.8',
    'longitude' => '151.51667',
  ),
  3530 => 
  array (
    'city' => 'Heathcote',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.08333',
    'longitude' => '151.01667',
  ),
  3531 => 
  array (
    'city' => 'Healesville',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.65',
    'longitude' => '145.51667',
  ),
  3532 => 
  array (
    'city' => 'Hazelbrook',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.73333',
    'longitude' => '150.45',
  ),
  3533 => 
  array (
    'city' => 'Haymarket',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.87868',
    'longitude' => '151.20526',
  ),
  3534 => 
  array (
    'city' => 'Hawks Nest',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.66667',
    'longitude' => '152.16667',
  ),
  3535 => 
  array (
    'city' => 'Hastings',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.3',
    'longitude' => '145.18333',
  ),
  3536 => 
  array (
    'city' => 'Harrington',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.86667',
    'longitude' => '152.7',
  ),
  3537 => 
  array (
    'city' => 'Hamilton',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.74425',
    'longitude' => '142.02202',
  ),
  3538 => 
  array (
    'city' => 'Haberfield',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.88333',
    'longitude' => '151.2',
  ),
  3539 => 
  array (
    'city' => 'Gympie',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.18979',
    'longitude' => '152.66499',
  ),
  3540 => 
  array (
    'city' => 'Guyra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.23333',
    'longitude' => '151.66667',
  ),
  3541 => 
  array (
    'city' => 'Gunnedah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.98333',
    'longitude' => '150.25',
  ),
  3542 => 
  array (
    'city' => 'Gundaroo',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.03333',
    'longitude' => '149.25',
  ),
  3543 => 
  array (
    'city' => 'Gundagai',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.06667',
    'longitude' => '148.1',
  ),
  3544 => 
  array (
    'city' => 'Gulgong',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.36667',
    'longitude' => '149.53333',
  ),
  3545 => 
  array (
    'city' => 'Griffith',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.28333',
    'longitude' => '146.03333',
  ),
  3546 => 
  array (
    'city' => 'Greta',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.7',
    'longitude' => '151.38333',
  ),
  3547 => 
  array (
    'city' => 'Grenfell',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.9',
    'longitude' => '148.16667',
  ),
  3548 => 
  array (
    'city' => 'Greenwell Point',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.9',
    'longitude' => '150.73333',
  ),
  3549 => 
  array (
    'city' => 'Greensborough',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.70462',
    'longitude' => '145.10302',
  ),
  3550 => 
  array (
    'city' => 'Granville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '151.01667',
  ),
  3551 => 
  array (
    'city' => 'Granton',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.75149',
    'longitude' => '147.22795',
  ),
  3552 => 
  array (
    'city' => 'Grafton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.68333',
    'longitude' => '152.93333',
  ),
  3553 => 
  array (
    'city' => 'Goulburn',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.75',
    'longitude' => '149.71667',
  ),
  3554 => 
  array (
    'city' => 'Gosford',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.43333',
    'longitude' => '151.35',
  ),
  3555 => 
  array (
    'city' => 'Gorokan',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.25742',
    'longitude' => '151.51134',
  ),
  3556 => 
  array (
    'city' => 'Gordon',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.3',
    'longitude' => '152.71667',
  ),
  3557 => 
  array (
    'city' => 'Goonellabah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.81667',
    'longitude' => '153.31667',
  ),
  3558 => 
  array (
    'city' => 'Goodna',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.61667',
    'longitude' => '152.9',
  ),
  3559 => 
  array (
    'city' => 'Gol Gol',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.18333',
    'longitude' => '142.21667',
  ),
  3560 => 
  array (
    'city' => 'Gold Coast',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-28',
    'longitude' => '153.43333',
  ),
  3561 => 
  array (
    'city' => 'Gloucester',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32',
    'longitude' => '151.96667',
  ),
  3562 => 
  array (
    'city' => 'Glenorie',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.6',
    'longitude' => '151.01667',
  ),
  3563 => 
  array (
    'city' => 'Glenorchy',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.83343',
    'longitude' => '147.27593',
  ),
  3564 => 
  array (
    'city' => 'Glen Innes',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.73333',
    'longitude' => '151.73333',
  ),
  3565 => 
  array (
    'city' => 'Glenhaven',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.7',
    'longitude' => '151',
  ),
  3566 => 
  array (
    'city' => 'Glenfield',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '150.9',
  ),
  3567 => 
  array (
    'city' => 'Glenbrook',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.76667',
    'longitude' => '150.61667',
  ),
  3568 => 
  array (
    'city' => 'Gladstone',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-23.85',
    'longitude' => '151.25',
  ),
  3569 => 
  array (
    'city' => 'Gilgandra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.71667',
    'longitude' => '148.65',
  ),
  3570 => 
  array (
    'city' => 'Gilgai',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.86667',
    'longitude' => '151.11667',
  ),
  3571 => 
  array (
    'city' => 'Gerringong',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.75',
    'longitude' => '150.85',
  ),
  3572 => 
  array (
    'city' => 'George Town',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.1',
    'longitude' => '146.83333',
  ),
  3573 => 
  array (
    'city' => 'Geeveston',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-43.16337',
    'longitude' => '146.92549',
  ),
  3574 => 
  array (
    'city' => 'Geelong West',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.13333',
    'longitude' => '144.35',
  ),
  3575 => 
  array (
    'city' => 'Geelong',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.14711',
    'longitude' => '144.36069',
  ),
  3576 => 
  array (
    'city' => 'Gayndah',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-25.63333',
    'longitude' => '151.6',
  ),
  3577 => 
  array (
    'city' => 'Gatton',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.55',
    'longitude' => '152.28333',
  ),
  3578 => 
  array (
    'city' => 'Galston',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.65',
    'longitude' => '151.05',
  ),
  3579 => 
  array (
    'city' => 'Frederickton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.03333',
    'longitude' => '152.86667',
  ),
  3580 => 
  array (
    'city' => 'Frankston East',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.13333',
    'longitude' => '145.13333',
  ),
  3581 => 
  array (
    'city' => 'Franklin',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-43.08333',
    'longitude' => '147',
  ),
  3582 => 
  array (
    'city' => 'Forster',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.16667',
    'longitude' => '152.51667',
  ),
  3583 => 
  array (
    'city' => 'Forest Hill',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.15',
    'longitude' => '147.46667',
  ),
  3584 => 
  array (
    'city' => 'Forbes',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.38333',
    'longitude' => '148.01667',
  ),
  3585 => 
  array (
    'city' => 'Finley',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.63333',
    'longitude' => '145.58333',
  ),
  3586 => 
  array (
    'city' => 'Federal',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.65',
    'longitude' => '153.45',
  ),
  3587 => 
  array (
    'city' => 'Falls Creek',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.96667',
    'longitude' => '150.6',
  ),
  3588 => 
  array (
    'city' => 'Evans Head',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.11667',
    'longitude' => '153.43333',
  ),
  3589 => 
  array (
    'city' => 'Evandale',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.58333',
    'longitude' => '147.23333',
  ),
  3590 => 
  array (
    'city' => 'Eulomogo',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.26667',
    'longitude' => '148.68333',
  ),
  3591 => 
  array (
    'city' => 'Ettalong Beach',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.51667',
    'longitude' => '151.33333',
  ),
  3592 => 
  array (
    'city' => 'Ettalong',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.51667',
    'longitude' => '151.35',
  ),
  3593 => 
  array (
    'city' => 'Erina',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.43333',
    'longitude' => '151.38333',
  ),
  3594 => 
  array (
    'city' => 'Epping',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.77271',
    'longitude' => '151.08184',
  ),
  3595 => 
  array (
    'city' => 'Engadine',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.06667',
    'longitude' => '151.01667',
  ),
  3596 => 
  array (
    'city' => 'Empire Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.5',
    'longitude' => '151.36667',
  ),
  3597 => 
  array (
    'city' => 'Emerald',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-23.53333',
    'longitude' => '148.16667',
  ),
  3598 => 
  array (
    'city' => 'Eglinton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.38333',
    'longitude' => '149.55',
  ),
  3599 => 
  array (
    'city' => 'Eden',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-37.06667',
    'longitude' => '149.9',
  ),
  3600 => 
  array (
    'city' => 'Echuca',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.13333',
    'longitude' => '144.75',
  ),
  3601 => 
  array (
    'city' => 'East Maitland',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.75',
    'longitude' => '151.58333',
  ),
  3602 => 
  array (
    'city' => 'East Hills',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '150.98333',
  ),
  3603 => 
  array (
    'city' => 'East Gosford',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.43333',
    'longitude' => '151.35',
  ),
  3604 => 
  array (
    'city' => 'East Ballina',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.86667',
    'longitude' => '153.58333',
  ),
  3605 => 
  array (
    'city' => 'Earlwood',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.95',
    'longitude' => '151.1',
  ),
  3606 => 
  array (
    'city' => 'Dungog',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.41667',
    'longitude' => '151.76667',
  ),
  3607 => 
  array (
    'city' => 'Dunedoo',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.01667',
    'longitude' => '149.4',
  ),
  3608 => 
  array (
    'city' => 'Dubbo',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.25',
    'longitude' => '148.61667',
  ),
  3609 => 
  array (
    'city' => 'Douglas Park',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.18333',
    'longitude' => '150.71667',
  ),
  3610 => 
  array (
    'city' => 'Dorrigo',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.33333',
    'longitude' => '152.7',
  ),
  3611 => 
  array (
    'city' => 'Dora Creek',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.08333',
    'longitude' => '151.5',
  ),
  3612 => 
  array (
    'city' => 'Doonside',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.76667',
    'longitude' => '150.86667',
  ),
  3613 => 
  array (
    'city' => 'Dingley Village',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.9827',
    'longitude' => '145.1342',
  ),
  3614 => 
  array (
    'city' => 'Devonport',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.16667',
    'longitude' => '146.35',
  ),
  3615 => 
  array (
    'city' => 'Denman',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.38333',
    'longitude' => '150.68333',
  ),
  3616 => 
  array (
    'city' => 'Deniliquin',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.53333',
    'longitude' => '144.96667',
  ),
  3617 => 
  array (
    'city' => 'Deloraine',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.53333',
    'longitude' => '146.66667',
  ),
  3618 => 
  array (
    'city' => 'Deception Bay',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.2',
    'longitude' => '153.03333',
  ),
  3619 => 
  array (
    'city' => 'Deagon',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.33333',
    'longitude' => '153.06667',
  ),
  3620 => 
  array (
    'city' => 'Davistown',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.48333',
    'longitude' => '151.36667',
  ),
  3621 => 
  array (
    'city' => 'Davidson',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.74297',
    'longitude' => '151.2008',
  ),
  3622 => 
  array (
    'city' => 'Darlington Point',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.56667',
    'longitude' => '146',
  ),
  3623 => 
  array (
    'city' => 'Darlinghurst',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.87939',
    'longitude' => '151.21925',
  ),
  3624 => 
  array (
    'city' => 'Dareton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.1',
    'longitude' => '142.05',
  ),
  3625 => 
  array (
    'city' => 'Darch',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.75',
    'longitude' => '145.11667',
  ),
  3626 => 
  array (
    'city' => 'Dapto',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.5',
    'longitude' => '150.78333',
  ),
  3627 => 
  array (
    'city' => 'Dalby',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.18333',
    'longitude' => '151.26667',
  ),
  3628 => 
  array (
    'city' => 'Daceyville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.93333',
    'longitude' => '151.23333',
  ),
  3629 => 
  array (
    'city' => 'Cygnet',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-43.15',
    'longitude' => '147.06667',
  ),
  3630 => 
  array (
    'city' => 'Cundletown',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.9',
    'longitude' => '152.53333',
  ),
  3631 => 
  array (
    'city' => 'Culcairn',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.66667',
    'longitude' => '147.05',
  ),
  3632 => 
  array (
    'city' => 'Croydon',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.88333',
    'longitude' => '151.11667',
  ),
  3633 => 
  array (
    'city' => 'Crookwell',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.46667',
    'longitude' => '149.46667',
  ),
  3634 => 
  array (
    'city' => 'Cronulla',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.05',
    'longitude' => '151.15',
  ),
  3635 => 
  array (
    'city' => 'Cringila',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.46667',
    'longitude' => '150.88333',
  ),
  3636 => 
  array (
    'city' => 'Crescent Head',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.2',
    'longitude' => '152.98333',
  ),
  3637 => 
  array (
    'city' => 'Cranbourne',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.1',
    'longitude' => '145.28333',
  ),
  3638 => 
  array (
    'city' => 'Craigieburn',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.6',
    'longitude' => '144.95',
  ),
  3639 => 
  array (
    'city' => 'Cowra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '148.68333',
  ),
  3640 => 
  array (
    'city' => 'Cowes',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.45',
    'longitude' => '145.23333',
  ),
  3641 => 
  array (
    'city' => 'Coutts Crossing',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.83333',
    'longitude' => '152.9',
  ),
  3642 => 
  array (
    'city' => 'Corrimal',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.36667',
    'longitude' => '150.9',
  ),
  3643 => 
  array (
    'city' => 'Corowa',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.03333',
    'longitude' => '146.38333',
  ),
  3644 => 
  array (
    'city' => 'Coraki',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.98333',
    'longitude' => '153.3',
  ),
  3645 => 
  array (
    'city' => 'Cootamundra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.65',
    'longitude' => '148.03333',
  ),
  3646 => 
  array (
    'city' => 'Cooranbong',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.08333',
    'longitude' => '151.43333',
  ),
  3647 => 
  array (
    'city' => 'Coonamble',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.95',
    'longitude' => '148.4',
  ),
  3648 => 
  array (
    'city' => 'Coonabarabran',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.26667',
    'longitude' => '149.28333',
  ),
  3649 => 
  array (
    'city' => 'Cooma',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.23333',
    'longitude' => '149.13333',
  ),
  3650 => 
  array (
    'city' => 'Coolum Beach',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.53333',
    'longitude' => '153.1',
  ),
  3651 => 
  array (
    'city' => 'Coolamon',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.83333',
    'longitude' => '147.2',
  ),
  3652 => 
  array (
    'city' => 'Coogee',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.9205',
    'longitude' => '151.25522',
  ),
  3653 => 
  array (
    'city' => 'Coniston',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.45',
    'longitude' => '150.88333',
  ),
  3654 => 
  array (
    'city' => 'Condobolin',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.08333',
    'longitude' => '147.15',
  ),
  3655 => 
  array (
    'city' => 'Concord',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.86667',
    'longitude' => '151.1',
  ),
  3656 => 
  array (
    'city' => 'Como',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34',
    'longitude' => '151.06667',
  ),
  3657 => 
  array (
    'city' => 'Colo Vale',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.4',
    'longitude' => '150.48333',
  ),
  3658 => 
  array (
    'city' => 'Colac',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.33333',
    'longitude' => '143.58333',
  ),
  3659 => 
  array (
    'city' => 'Coffs Harbour',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.3',
    'longitude' => '153.13333',
  ),
  3660 => 
  array (
    'city' => 'Cobbitty',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.01667',
    'longitude' => '150.68333',
  ),
  3661 => 
  array (
    'city' => 'Cobar',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.5',
    'longitude' => '145.81667',
  ),
  3662 => 
  array (
    'city' => 'Clifton Springs',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.15',
    'longitude' => '144.56667',
  ),
  3663 => 
  array (
    'city' => 'Cleveland',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.53333',
    'longitude' => '153.26667',
  ),
  3664 => 
  array (
    'city' => 'Clarence Town',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.58333',
    'longitude' => '151.78333',
  ),
  3665 => 
  array (
    'city' => 'Claremont',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.78333',
    'longitude' => '147.25',
  ),
  3666 => 
  array (
    'city' => 'Wollongong',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.43333',
    'longitude' => '150.88333',
  ),
  3667 => 
  array (
    'city' => 'Churchill',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.64233',
    'longitude' => '152.75022',
  ),
  3668 => 
  array (
    'city' => 'Chipping Norton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.9',
    'longitude' => '150.95',
  ),
  3669 => 
  array (
    'city' => 'Chippendale',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.88673',
    'longitude' => '151.19745',
  ),
  3670 => 
  array (
    'city' => 'Chinderah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.23333',
    'longitude' => '153.55',
  ),
  3671 => 
  array (
    'city' => 'Chatswood',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.8',
    'longitude' => '151.18333',
  ),
  3672 => 
  array (
    'city' => 'Charters Towers',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-20.1',
    'longitude' => '146.26667',
  ),
  3673 => 
  array (
    'city' => 'Charlestown',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.95',
    'longitude' => '151.66667',
  ),
  3674 => 
  array (
    'city' => 'Cessnock',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.83333',
    'longitude' => '151.35',
  ),
  3675 => 
  array (
    'city' => 'Caulfield',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.88251',
    'longitude' => '145.02288',
  ),
  3676 => 
  array (
    'city' => 'Castlemaine',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.06667',
    'longitude' => '144.21667',
  ),
  3677 => 
  array (
    'city' => 'Castle Hill',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.73333',
    'longitude' => '151',
  ),
  3678 => 
  array (
    'city' => 'Castlecrag',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.8',
    'longitude' => '151.21667',
  ),
  3679 => 
  array (
    'city' => 'Casino',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.86667',
    'longitude' => '153.05',
  ),
  3680 => 
  array (
    'city' => 'Carlingford',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.78269',
    'longitude' => '151.04888',
  ),
  3681 => 
  array (
    'city' => 'Caringbah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.05',
    'longitude' => '151.13333',
  ),
  3682 => 
  array (
    'city' => 'Cardiff',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.95',
    'longitude' => '151.66667',
  ),
  3683 => 
  array (
    'city' => 'Canowindra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.56667',
    'longitude' => '148.66667',
  ),
  3684 => 
  array (
    'city' => 'Canberra',
    'region' => '01',
    'country' => 'AU',
    'latitude' => '-35.28346',
    'longitude' => '149.12807',
  ),
  3685 => 
  array (
    'city' => 'Camperdown',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.88965',
    'longitude' => '151.17642',
  ),
  3686 => 
  array (
    'city' => 'Campbelltown',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.06667',
    'longitude' => '150.81667',
  ),
  3687 => 
  array (
    'city' => 'Cambridge',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.83333',
    'longitude' => '147.45',
  ),
  3688 => 
  array (
    'city' => 'Camberwell',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.84205',
    'longitude' => '145.0694',
  ),
  3689 => 
  array (
    'city' => 'Caloundra',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.8',
    'longitude' => '153.13333',
  ),
  3690 => 
  array (
    'city' => 'Cairns',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-16.91667',
    'longitude' => '145.76667',
  ),
  3691 => 
  array (
    'city' => 'Caboolture',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.08333',
    'longitude' => '152.95',
  ),
  3692 => 
  array (
    'city' => 'Byron Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.65',
    'longitude' => '153.61667',
  ),
  3693 => 
  array (
    'city' => 'Buxton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.25',
    'longitude' => '150.53333',
  ),
  3694 => 
  array (
    'city' => 'Burringbar',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.43333',
    'longitude' => '153.48333',
  ),
  3695 => 
  array (
    'city' => 'Burpengary',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.15746',
    'longitude' => '152.95758',
  ),
  3696 => 
  array (
    'city' => 'Burnie',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.06667',
    'longitude' => '145.91667',
  ),
  3697 => 
  array (
    'city' => 'Bungendore',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.25',
    'longitude' => '149.43333',
  ),
  3698 => 
  array (
    'city' => 'Bundanoon',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.65',
    'longitude' => '150.3',
  ),
  3699 => 
  array (
    'city' => 'Bundamba',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.60947',
    'longitude' => '152.81133',
  ),
  3700 => 
  array (
    'city' => 'Bundaberg',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-24.85',
    'longitude' => '152.35',
  ),
  3701 => 
  array (
    'city' => 'Bulli',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.33333',
    'longitude' => '150.91667',
  ),
  3702 => 
  array (
    'city' => 'Bulahdelah',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.41667',
    'longitude' => '152.21667',
  ),
  3703 => 
  array (
    'city' => 'Budgewoi',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.23333',
    'longitude' => '151.56667',
  ),
  3704 => 
  array (
    'city' => 'Buderim',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.68333',
    'longitude' => '153.05',
  ),
  3705 => 
  array (
    'city' => 'Brunswick Heads',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.55',
    'longitude' => '153.55',
  ),
  3706 => 
  array (
    'city' => 'Brunswick',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.76667',
    'longitude' => '144.96667',
  ),
  3707 => 
  array (
    'city' => 'Broulee',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.85469',
    'longitude' => '150.17392',
  ),
  3708 => 
  array (
    'city' => 'Broken Hill',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.95',
    'longitude' => '141.43333',
  ),
  3709 => 
  array (
    'city' => 'Broadmeadows',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.68015',
    'longitude' => '144.91877',
  ),
  3710 => 
  array (
    'city' => 'Brisbane',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.46794',
    'longitude' => '153.02809',
  ),
  3711 => 
  array (
    'city' => 'Bringelly',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.93333',
    'longitude' => '150.73333',
  ),
  3712 => 
  array (
    'city' => 'Brighton',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.29582',
    'longitude' => '153.05721',
  ),
  3713 => 
  array (
    'city' => 'Bridport',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41',
    'longitude' => '147.4',
  ),
  3714 => 
  array (
    'city' => 'Bridgewater',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.73333',
    'longitude' => '147.23333',
  ),
  3715 => 
  array (
    'city' => 'Brewarrina',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.95',
    'longitude' => '146.86667',
  ),
  3716 => 
  array (
    'city' => 'Branxton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.66667',
    'longitude' => '151.36667',
  ),
  3717 => 
  array (
    'city' => 'Braidwood',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.45',
    'longitude' => '149.78333',
  ),
  3718 => 
  array (
    'city' => 'Box Hill',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.81887',
    'longitude' => '145.12545',
  ),
  3719 => 
  array (
    'city' => 'Bowraville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.65',
    'longitude' => '152.85',
  ),
  3720 => 
  array (
    'city' => 'Bowral',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.46667',
    'longitude' => '150.41667',
  ),
  3721 => 
  array (
    'city' => 'Bowenfels',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.51667',
    'longitude' => '150.11667',
  ),
  3722 => 
  array (
    'city' => 'Bowen',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-20.01667',
    'longitude' => '148.23333',
  ),
  3723 => 
  array (
    'city' => 'Bourke',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.1',
    'longitude' => '145.93333',
  ),
  3724 => 
  array (
    'city' => 'Botany',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '151.2',
  ),
  3725 => 
  array (
    'city' => 'Bordertown',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-36.31667',
    'longitude' => '140.76667',
  ),
  3726 => 
  array (
    'city' => 'Boorowa',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.43333',
    'longitude' => '148.73333',
  ),
  3727 => 
  array (
    'city' => 'Booker Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.51667',
    'longitude' => '151.35',
  ),
  3728 => 
  array (
    'city' => 'Bonville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.38333',
    'longitude' => '153.06667',
  ),
  3729 => 
  array (
    'city' => 'Bongaree',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.07972',
    'longitude' => '153.15861',
  ),
  3730 => 
  array (
    'city' => 'Bombala',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.9',
    'longitude' => '149.23333',
  ),
  3731 => 
  array (
    'city' => 'Bomaderry',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.85',
    'longitude' => '150.61667',
  ),
  3732 => 
  array (
    'city' => 'Bolwarra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.71667',
    'longitude' => '151.56667',
  ),
  3733 => 
  array (
    'city' => 'Boggabri',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.7',
    'longitude' => '150.03333',
  ),
  3734 => 
  array (
    'city' => 'Boggabilla',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.61667',
    'longitude' => '150.35',
  ),
  3735 => 
  array (
    'city' => 'Boambee',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.35',
    'longitude' => '153.1',
  ),
  3736 => 
  array (
    'city' => 'Blayney',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.53333',
    'longitude' => '149.26667',
  ),
  3737 => 
  array (
    'city' => 'Blaxland',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.75',
    'longitude' => '150.6',
  ),
  3738 => 
  array (
    'city' => 'Blair Athol',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.65',
    'longitude' => '150.2',
  ),
  3739 => 
  array (
    'city' => 'Blackwater',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-23.58333',
    'longitude' => '148.88333',
  ),
  3740 => 
  array (
    'city' => 'Blackwall',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.5',
    'longitude' => '151.31667',
  ),
  3741 => 
  array (
    'city' => 'Blacktown',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.76667',
    'longitude' => '150.91667',
  ),
  3742 => 
  array (
    'city' => 'Blackmans Bay',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-43.01667',
    'longitude' => '147.31667',
  ),
  3743 => 
  array (
    'city' => 'Blackheath',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.65',
    'longitude' => '150.26667',
  ),
  3744 => 
  array (
    'city' => 'Bingara',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-29.86667',
    'longitude' => '150.56667',
  ),
  3745 => 
  array (
    'city' => 'Biloela',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-24.41667',
    'longitude' => '150.5',
  ),
  3746 => 
  array (
    'city' => 'Bilambil',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.23333',
    'longitude' => '153.46667',
  ),
  3747 => 
  array (
    'city' => 'Bexley',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.95',
    'longitude' => '151.11667',
  ),
  3748 => 
  array (
    'city' => 'Berry',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.78333',
    'longitude' => '150.7',
  ),
  3749 => 
  array (
    'city' => 'Berrigan',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.65',
    'longitude' => '145.81667',
  ),
  3750 => 
  array (
    'city' => 'Berriedale',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.81667',
    'longitude' => '147.25',
  ),
  3751 => 
  array (
    'city' => 'Berridale',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.36667',
    'longitude' => '148.83333',
  ),
  3752 => 
  array (
    'city' => 'Berri',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.28333',
    'longitude' => '140.6',
  ),
  3753 => 
  array (
    'city' => 'Berowra',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.63333',
    'longitude' => '151.15',
  ),
  3754 => 
  array (
    'city' => 'Bermagui',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.41667',
    'longitude' => '150.05',
  ),
  3755 => 
  array (
    'city' => 'Berkeley Vale',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.35',
    'longitude' => '151.43333',
  ),
  3756 => 
  array (
    'city' => 'Berkeley',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.48333',
    'longitude' => '150.85',
  ),
  3757 => 
  array (
    'city' => 'Beresfield',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.8',
    'longitude' => '151.65',
  ),
  3758 => 
  array (
    'city' => 'Bentleigh',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.91806',
    'longitude' => '145.03544',
  ),
  3759 => 
  array (
    'city' => 'Bensville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.5',
    'longitude' => '151.38333',
  ),
  3760 => 
  array (
    'city' => 'Bendigo',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.76667',
    'longitude' => '144.28333',
  ),
  3761 => 
  array (
    'city' => 'Benalla',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-36.55',
    'longitude' => '145.98333',
  ),
  3762 => 
  array (
    'city' => 'Belmont',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.03333',
    'longitude' => '151.66667',
  ),
  3763 => 
  array (
    'city' => 'Bellingen',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.45',
    'longitude' => '152.88333',
  ),
  3764 => 
  array (
    'city' => 'Bellerive',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.86667',
    'longitude' => '147.36667',
  ),
  3765 => 
  array (
    'city' => 'Belconnen',
    'region' => '01',
    'country' => 'AU',
    'latitude' => '-35.21667',
    'longitude' => '149.08333',
  ),
  3766 => 
  array (
    'city' => 'Bega',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.66667',
    'longitude' => '149.83333',
  ),
  3767 => 
  array (
    'city' => 'Beauty Point',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.16667',
    'longitude' => '146.81667',
  ),
  3768 => 
  array (
    'city' => 'Beaconsfield Upper',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38',
    'longitude' => '145.41667',
  ),
  3769 => 
  array (
    'city' => 'Beaconsfield',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.2',
    'longitude' => '146.81667',
  ),
  3770 => 
  array (
    'city' => 'Batemans Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-35.71667',
    'longitude' => '150.18333',
  ),
  3771 => 
  array (
    'city' => 'Barmera',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.25',
    'longitude' => '140.46667',
  ),
  3772 => 
  array (
    'city' => 'Banora Point',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.21298',
    'longitude' => '153.53634',
  ),
  3773 => 
  array (
    'city' => 'Ballina',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.86667',
    'longitude' => '153.56667',
  ),
  3774 => 
  array (
    'city' => 'Ballarat',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.56622',
    'longitude' => '143.84957',
  ),
  3775 => 
  array (
    'city' => 'Bairnsdale',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.83333',
    'longitude' => '147.61667',
  ),
  3776 => 
  array (
    'city' => 'Bacchus Marsh',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.67268',
    'longitude' => '144.43829',
  ),
  3777 => 
  array (
    'city' => 'Ayr',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-19.58333',
    'longitude' => '147.4',
  ),
  3778 => 
  array (
    'city' => 'Austins Ferry',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.76667',
    'longitude' => '147.25',
  ),
  3779 => 
  array (
    'city' => 'Atherton',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-17.26667',
    'longitude' => '145.48333',
  ),
  3780 => 
  array (
    'city' => 'Armidale',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.51667',
    'longitude' => '151.65',
  ),
  3781 => 
  array (
    'city' => 'Ararat',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.28333',
    'longitude' => '142.93333',
  ),
  3782 => 
  array (
    'city' => 'Apollo Bay',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.75',
    'longitude' => '143.65',
  ),
  3783 => 
  array (
    'city' => 'Anglesea',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.41667',
    'longitude' => '144.16667',
  ),
  3784 => 
  array (
    'city' => 'Albury',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-36.08333',
    'longitude' => '146.91667',
  ),
  3785 => 
  array (
    'city' => 'Holmesville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.9',
    'longitude' => '151.59167',
  ),
  3786 => 
  array (
    'city' => 'Lambton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.91667',
    'longitude' => '151.7',
  ),
  3787 => 
  array (
    'city' => 'New Lambton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.95',
    'longitude' => '151.68333',
  ),
  3788 => 
  array (
    'city' => 'Raymond Terrace',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.75',
    'longitude' => '151.75',
  ),
  3789 => 
  array (
    'city' => 'Mayfield',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.38722',
    'longitude' => '147.13333',
  ),
  3790 => 
  array (
    'city' => 'Invermay',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-41.39167',
    'longitude' => '147.13056',
  ),
  3791 => 
  array (
    'city' => 'Gymea',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.03333',
    'longitude' => '151.08333',
  ),
  3792 => 
  array (
    'city' => 'Kirrawee',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.03333',
    'longitude' => '151.06667',
  ),
  3793 => 
  array (
    'city' => 'Loftus',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.05',
    'longitude' => '151.05',
  ),
  3794 => 
  array (
    'city' => 'Dolans Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.05',
    'longitude' => '151.11667',
  ),
  3795 => 
  array (
    'city' => 'Bundeena',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.08333',
    'longitude' => '151.15',
  ),
  3796 => 
  array (
    'city' => 'Gymea Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.05',
    'longitude' => '151.08333',
  ),
  3797 => 
  array (
    'city' => 'Kareela',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.01667',
    'longitude' => '151.08333',
  ),
  3798 => 
  array (
    'city' => 'Bonnet Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34',
    'longitude' => '151.05',
  ),
  3799 => 
  array (
    'city' => 'Oyster Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34',
    'longitude' => '151.06667',
  ),
  3800 => 
  array (
    'city' => 'Grays Point',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.05',
    'longitude' => '151.08333',
  ),
  3801 => 
  array (
    'city' => 'Brighton-Le-Sands',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.95',
    'longitude' => '151.15',
  ),
  3802 => 
  array (
    'city' => 'Monterey',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '151.15',
  ),
  3803 => 
  array (
    'city' => 'Ramsgate',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.98333',
    'longitude' => '151.15',
  ),
  3804 => 
  array (
    'city' => 'Blakehurst',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.98333',
    'longitude' => '151.1',
  ),
  3805 => 
  array (
    'city' => 'Connells Point',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.98333',
    'longitude' => '151.08333',
  ),
  3806 => 
  array (
    'city' => 'Lugarno',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.98333',
    'longitude' => '151.03333',
  ),
  3807 => 
  array (
    'city' => 'Peakhurst',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.96667',
    'longitude' => '151.05',
  ),
  3808 => 
  array (
    'city' => 'Padstow',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.95',
    'longitude' => '151.03333',
  ),
  3809 => 
  array (
    'city' => 'Goodwood',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.825',
    'longitude' => '147.29444',
  ),
  3810 => 
  array (
    'city' => 'Lutana',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.83611',
    'longitude' => '147.31111',
  ),
  3811 => 
  array (
    'city' => 'New Town',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.86',
    'longitude' => '147.30833',
  ),
  3812 => 
  array (
    'city' => 'Lake Heights',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.48667',
    'longitude' => '150.875',
  ),
  3813 => 
  array (
    'city' => 'Sandy Bay',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.913',
    'longitude' => '147.35318',
  ),
  3814 => 
  array (
    'city' => 'Fairy Meadow',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.39667',
    'longitude' => '150.89583',
  ),
  3815 => 
  array (
    'city' => 'Mount Ousley',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.4',
    'longitude' => '150.875',
  ),
  3816 => 
  array (
    'city' => 'Mount Keira',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.41889',
    'longitude' => '150.85417',
  ),
  3817 => 
  array (
    'city' => 'Gwynneville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.41667',
    'longitude' => '150.8875',
  ),
  3818 => 
  array (
    'city' => 'Mangerton',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.43667',
    'longitude' => '150.87167',
  ),
  3819 => 
  array (
    'city' => 'Mount Saint Thomas',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.44333',
    'longitude' => '150.87222',
  ),
  3820 => 
  array (
    'city' => 'Palm Cove',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-16.75',
    'longitude' => '145.66667',
  ),
  3821 => 
  array (
    'city' => 'Yorkeys Knob',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-16.81667',
    'longitude' => '145.71667',
  ),
  3822 => 
  array (
    'city' => 'South Brisbane',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.48333',
    'longitude' => '153.01667',
  ),
  3823 => 
  array (
    'city' => 'Scarborough',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.20083',
    'longitude' => '153.11028',
  ),
  3824 => 
  array (
    'city' => 'Laverton',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.86202',
    'longitude' => '144.76979',
  ),
  3825 => 
  array (
    'city' => 'North Brighton',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.90694',
    'longitude' => '145.00528',
  ),
  3826 => 
  array (
    'city' => 'Highett',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.95167',
    'longitude' => '145.03944',
  ),
  3827 => 
  array (
    'city' => 'Parkdale',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.99423',
    'longitude' => '145.07339',
  ),
  3828 => 
  array (
    'city' => 'Bellevue Hill',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.87944',
    'longitude' => '151.25056',
  ),
  3829 => 
  array (
    'city' => 'Pyrmont',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.86944',
    'longitude' => '151.19389',
  ),
  3830 => 
  array (
    'city' => 'Paddington',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.88528',
    'longitude' => '151.23',
  ),
  3831 => 
  array (
    'city' => 'Lilyfield',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.87611',
    'longitude' => '151.16556',
  ),
  3832 => 
  array (
    'city' => 'Drummoyne',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.85361',
    'longitude' => '151.15417',
  ),
  3833 => 
  array (
    'city' => 'Greenwich',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.84056',
    'longitude' => '151.18306',
  ),
  3834 => 
  array (
    'city' => 'Hunters Hill',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '151.14083',
  ),
  3835 => 
  array (
    'city' => 'Longueville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83278',
    'longitude' => '151.16639',
  ),
  3836 => 
  array (
    'city' => 'Crows Nest',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.82806',
    'longitude' => '151.20167',
  ),
  3837 => 
  array (
    'city' => 'Cammeray',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.8225',
    'longitude' => '151.21583',
  ),
  3838 => 
  array (
    'city' => 'Clontarf',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.80972',
    'longitude' => '151.25667',
  ),
  3839 => 
  array (
    'city' => 'Cremorne',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '151.225',
  ),
  3840 => 
  array (
    'city' => 'Neutral Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83889',
    'longitude' => '151.21667',
  ),
  3841 => 
  array (
    'city' => 'Point Piper',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.86667',
    'longitude' => '151.25',
  ),
  3842 => 
  array (
    'city' => 'Darling Point',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.87083',
    'longitude' => '151.23889',
  ),
  3843 => 
  array (
    'city' => 'Dover Heights',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.87083',
    'longitude' => '151.27917',
  ),
  3844 => 
  array (
    'city' => 'Randwick',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.91667',
    'longitude' => '151.24167',
  ),
  3845 => 
  array (
    'city' => 'Clovelly',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.9125',
    'longitude' => '151.25',
  ),
  3846 => 
  array (
    'city' => 'Bronte',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.9',
    'longitude' => '151.26667',
  ),
  3847 => 
  array (
    'city' => 'Bondi',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.89167',
    'longitude' => '151.26667',
  ),
  3848 => 
  array (
    'city' => 'Gladesville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.83333',
    'longitude' => '151.13333',
  ),
  3849 => 
  array (
    'city' => 'Forestville',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.76667',
    'longitude' => '151.20833',
  ),
  3850 => 
  array (
    'city' => 'Brookvale',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.76667',
    'longitude' => '151.26667',
  ),
  3851 => 
  array (
    'city' => 'Curl Curl',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.76667',
    'longitude' => '151.29167',
  ),
  3852 => 
  array (
    'city' => 'Dee Why',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.75',
    'longitude' => '151.3',
  ),
  3853 => 
  array (
    'city' => 'Blairgowrie',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.36131',
    'longitude' => '144.77955',
  ),
  3854 => 
  array (
    'city' => 'Flinders',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.58333',
    'longitude' => '150.85516',
  ),
  3855 => 
  array (
    'city' => 'Palmerston',
    'region' => '03',
    'country' => 'AU',
    'latitude' => '-12.48602',
    'longitude' => '130.9833',
  ),
  3856 => 
  array (
    'city' => 'Tom Price',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-22.6939',
    'longitude' => '117.7931',
  ),
  3857 => 
  array (
    'city' => 'Moranbah',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-22.00163',
    'longitude' => '148.04661',
  ),
  3858 => 
  array (
    'city' => 'Heyfield',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.9813',
    'longitude' => '146.78559',
  ),
  3859 => 
  array (
    'city' => 'Kaleen',
    'region' => '02,01',
    'country' => 'AU',
    'latitude' => '-35.21814',
    'longitude' => '149.10516',
  ),
  3860 => 
  array (
    'city' => 'Karratha',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-20.73765',
    'longitude' => '116.84629',
  ),
  3861 => 
  array (
    'city' => 'Enfield',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.8526',
    'longitude' => '138.60255',
  ),
  3862 => 
  array (
    'city' => 'Hillarys',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.80698',
    'longitude' => '115.74045',
  ),
  3863 => 
  array (
    'city' => 'Kingsford',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.92399',
    'longitude' => '151.22749',
  ),
  3864 => 
  array (
    'city' => 'Klemzig',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.87928',
    'longitude' => '138.63562',
  ),
  3865 => 
  array (
    'city' => 'Osborne Park',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.90066',
    'longitude' => '115.81083',
  ),
  3866 => 
  array (
    'city' => 'Seven Mile Beach',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.85759',
    'longitude' => '147.50381',
  ),
  3867 => 
  array (
    'city' => 'Corlette',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-32.72014',
    'longitude' => '152.10846',
  ),
  3868 => 
  array (
    'city' => 'Burswood',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.95872',
    'longitude' => '115.90396',
  ),
  3869 => 
  array (
    'city' => 'Howrah',
    'region' => '06',
    'country' => 'AU',
    'latitude' => '-42.88728',
    'longitude' => '147.40554',
  ),
  3870 => 
  array (
    'city' => 'Springfield Lakes',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.66757',
    'longitude' => '152.92488',
  ),
  3871 => 
  array (
    'city' => 'North Narrabeen',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.70935',
    'longitude' => '151.29607',
  ),
  3872 => 
  array (
    'city' => 'Joondalup',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.74445',
    'longitude' => '115.76835',
  ),
  3873 => 
  array (
    'city' => 'Como',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.99119',
    'longitude' => '115.86336',
  ),
  3874 => 
  array (
    'city' => 'East Lismore',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-28.81933',
    'longitude' => '153.28743',
  ),
  3875 => 
  array (
    'city' => 'Mindarie',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.68932',
    'longitude' => '115.70698',
  ),
  3876 => 
  array (
    'city' => 'Clarkson',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.68282',
    'longitude' => '115.7247',
  ),
  3877 => 
  array (
    'city' => 'Kinross',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.71868',
    'longitude' => '115.73839',
  ),
  3878 => 
  array (
    'city' => 'Currambine',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.73306',
    'longitude' => '115.74766',
  ),
  3879 => 
  array (
    'city' => 'Iluka',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.73554',
    'longitude' => '115.73058',
  ),
  3880 => 
  array (
    'city' => 'Heathridge',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-31.76244',
    'longitude' => '115.75895',
  ),
  3881 => 
  array (
    'city' => 'Girraween',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.799',
    'longitude' => '150.943',
  ),
  3882 => 
  array (
    'city' => 'Freshwater',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.77867',
    'longitude' => '151.28569',
  ),
  3883 => 
  array (
    'city' => 'Tieri',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-23.03829',
    'longitude' => '148.34463',
  ),
  3884 => 
  array (
    'city' => 'Taringa',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.49061',
    'longitude' => '152.97861',
  ),
  3885 => 
  array (
    'city' => 'Inala',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.59715',
    'longitude' => '152.97432',
  ),
  3886 => 
  array (
    'city' => 'Main Beach',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.97879',
    'longitude' => '153.4266',
  ),
  3887 => 
  array (
    'city' => 'Paradise',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.87361',
    'longitude' => '138.66896',
  ),
  3888 => 
  array (
    'city' => 'Blair Athol',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.85889',
    'longitude' => '138.59656',
  ),
  3889 => 
  array (
    'city' => 'Athelstone',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.86979',
    'longitude' => '138.70288',
  ),
  3890 => 
  array (
    'city' => 'Wooloowin',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.42244',
    'longitude' => '153.04204',
  ),
  3891 => 
  array (
    'city' => 'Zillmere',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.35591',
    'longitude' => '153.04453',
  ),
  3892 => 
  array (
    'city' => 'Taigum',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.34265',
    'longitude' => '153.04444',
  ),
  3893 => 
  array (
    'city' => 'Bracken Ridge',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.3171',
    'longitude' => '153.03097',
  ),
  3894 => 
  array (
    'city' => 'Woolloongabba',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.48855',
    'longitude' => '153.03655',
  ),
  3895 => 
  array (
    'city' => 'Toowong',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.4836',
    'longitude' => '152.98943',
  ),
  3896 => 
  array (
    'city' => 'Windsor',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.43631',
    'longitude' => '153.02882',
  ),
  3897 => 
  array (
    'city' => 'Twin Waters',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-26.61',
    'longitude' => '153',
  ),
  3898 => 
  array (
    'city' => 'Canada Bay',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.85',
    'longitude' => '151.15',
  ),
  3899 => 
  array (
    'city' => 'Camden',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-34.05',
    'longitude' => '150.7',
  ),
  3900 => 
  array (
    'city' => 'Canterbury',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.9167',
    'longitude' => '151.1',
  ),
  3901 => 
  array (
    'city' => 'Forresters Beach',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.407',
    'longitude' => '151.476',
  ),
  3902 => 
  array (
    'city' => 'Tamborine Mountain',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.96954',
    'longitude' => '153.19937',
  ),
  3903 => 
  array (
    'city' => 'East Melbourne',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.81667',
    'longitude' => '144.9879',
  ),
  3904 => 
  array (
    'city' => 'Rainbow Beach',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-25.90432',
    'longitude' => '153.09174',
  ),
  3905 => 
  array (
    'city' => 'North Shore',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-31.40237',
    'longitude' => '152.90185',
  ),
  3906 => 
  array (
    'city' => 'North Melbourne',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.80289',
    'longitude' => '144.94816',
  ),
  3907 => 
  array (
    'city' => 'Caroline Springs',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.74124',
    'longitude' => '144.73631',
  ),
  3908 => 
  array (
    'city' => 'Hoppers Crossing',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.88264',
    'longitude' => '144.7003',
  ),
  3909 => 
  array (
    'city' => 'West Melbourne',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.81014',
    'longitude' => '144.95',
  ),
  3910 => 
  array (
    'city' => 'Rouse Hill',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.68207',
    'longitude' => '150.9154',
  ),
  3911 => 
  array (
    'city' => 'Logan City',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.63917',
    'longitude' => '153.10944',
  ),
  3912 => 
  array (
    'city' => 'Carindale',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.50578',
    'longitude' => '153.10236',
  ),
  3913 => 
  array (
    'city' => 'Paramatta',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.8178',
    'longitude' => '151.00348',
  ),
  3914 => 
  array (
    'city' => 'Macquarie',
    'region' => '01',
    'country' => 'AU',
    'latitude' => '-35.25126',
    'longitude' => '149.06362',
  ),
  3915 => 
  array (
    'city' => 'Ferntree Gully',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.88461',
    'longitude' => '145.29539',
  ),
  3916 => 
  array (
    'city' => 'Fullarton',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.951',
    'longitude' => '138.629',
  ),
  3917 => 
  array (
    'city' => 'Macarthur',
    'region' => '01',
    'country' => 'AU',
    'latitude' => '-35.40856',
    'longitude' => '149.13196',
  ),
  3918 => 
  array (
    'city' => 'City of Parramatta',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.81667',
    'longitude' => '151',
  ),
  3919 => 
  array (
    'city' => 'Phillip Island',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.48349',
    'longitude' => '145.23102',
  ),
  3920 => 
  array (
    'city' => 'Springwood',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.61183',
    'longitude' => '153.12899',
  ),
  3921 => 
  array (
    'city' => 'Adelaide Hills',
    'region' => '05',
    'country' => 'AU',
    'latitude' => '-34.91118',
    'longitude' => '138.70735',
  ),
  3922 => 
  array (
    'city' => 'Erskine',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.55717',
    'longitude' => '115.70657',
  ),
  3923 => 
  array (
    'city' => 'Canning Vale',
    'region' => '08',
    'country' => 'AU',
    'latitude' => '-32.05798',
    'longitude' => '115.91814',
  ),
  3924 => 
  array (
    'city' => 'Varsity Lakes',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-28.0894',
    'longitude' => '153.4122',
  ),
  3925 => 
  array (
    'city' => 'Roselands',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.93317',
    'longitude' => '151.0732',
  ),
  3926 => 
  array (
    'city' => 'Oxenford',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.89033',
    'longitude' => '153.31309',
  ),
  3927 => 
  array (
    'city' => 'Toormina',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-30.35262',
    'longitude' => '153.09028',
  ),
  3928 => 
  array (
    'city' => 'Glenmore Park',
    'region' => '02',
    'country' => 'AU',
    'latitude' => '-33.79068',
    'longitude' => '150.6693',
  ),
  3929 => 
  array (
    'city' => 'Magnetic Island',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-19.15514',
    'longitude' => '146.8485',
  ),
  3930 => 
  array (
    'city' => 'Melton West',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.67852',
    'longitude' => '144.56883',
  ),
  3931 => 
  array (
    'city' => 'Brookfield',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.7008',
    'longitude' => '144.56025',
  ),
  3932 => 
  array (
    'city' => 'Kurunjang',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.67587',
    'longitude' => '144.5969',
  ),
  3933 => 
  array (
    'city' => 'Ashburton',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.86259',
    'longitude' => '145.07936',
  ),
  3934 => 
  array (
    'city' => 'Ashwood',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.86659',
    'longitude' => '145.10553',
  ),
  3935 => 
  array (
    'city' => 'Glen Iris',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.85995',
    'longitude' => '145.05489',
  ),
  3936 => 
  array (
    'city' => 'Toorak',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.84077',
    'longitude' => '145.00957',
  ),
  3937 => 
  array (
    'city' => 'Armadale',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.8552',
    'longitude' => '145.02176',
  ),
  3938 => 
  array (
    'city' => 'Windsor',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.8548',
    'longitude' => '144.99267',
  ),
  3939 => 
  array (
    'city' => 'Balaclava',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.86916',
    'longitude' => '144.99773',
  ),
  3940 => 
  array (
    'city' => 'Caulfield North',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.87255',
    'longitude' => '145.02262',
  ),
  3941 => 
  array (
    'city' => 'Elsternwick',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.88441',
    'longitude' => '145.00434',
  ),
  3942 => 
  array (
    'city' => 'Elwood',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.8817',
    'longitude' => '144.98305',
  ),
  3943 => 
  array (
    'city' => 'Burwood',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.84978',
    'longitude' => '145.11901',
  ),
  3944 => 
  array (
    'city' => 'Box Hill South',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.83236',
    'longitude' => '145.12098',
  ),
  3945 => 
  array (
    'city' => 'Blackburn',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.81901',
    'longitude' => '145.15326',
  ),
  3946 => 
  array (
    'city' => 'Canterbury',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.8247',
    'longitude' => '145.08476',
  ),
  3947 => 
  array (
    'city' => 'Surrey Hills',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.82524',
    'longitude' => '145.10038',
  ),
  3948 => 
  array (
    'city' => 'Hawthorn East',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.82484',
    'longitude' => '145.0464',
  ),
  3949 => 
  array (
    'city' => 'Kew East',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.79758',
    'longitude' => '145.05378',
  ),
  3950 => 
  array (
    'city' => 'Balwyn North',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.79086',
    'longitude' => '145.09386',
  ),
  3951 => 
  array (
    'city' => 'Mont Albert North',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.80043',
    'longitude' => '145.10828',
  ),
  3952 => 
  array (
    'city' => 'Box Hill North',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.80266',
    'longitude' => '145.12656',
  ),
  3953 => 
  array (
    'city' => 'Blackburn North',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.80931',
    'longitude' => '145.1518',
  ),
  3954 => 
  array (
    'city' => 'Forest Hill',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.83656',
    'longitude' => '145.16519',
  ),
  3955 => 
  array (
    'city' => 'Blackburn South',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.83975',
    'longitude' => '145.15549',
  ),
  3956 => 
  array (
    'city' => 'Chadstone',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.88766',
    'longitude' => '145.09519',
  ),
  3957 => 
  array (
    'city' => 'Carnegie',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.88867',
    'longitude' => '145.05713',
  ),
  3958 => 
  array (
    'city' => 'Glen Huntly',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.88949',
    'longitude' => '145.04605',
  ),
  3959 => 
  array (
    'city' => 'Malvern East',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.87397',
    'longitude' => '145.04253',
  ),
  3960 => 
  array (
    'city' => 'Murrumbeena',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.89023',
    'longitude' => '145.07112',
  ),
  3961 => 
  array (
    'city' => 'Oakleigh South',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.92416',
    'longitude' => '145.09146',
  ),
  3962 => 
  array (
    'city' => 'Oakleigh East',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.89904',
    'longitude' => '145.10571',
  ),
  3963 => 
  array (
    'city' => 'Caulfield South',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.89673',
    'longitude' => '145.02734',
  ),
  3964 => 
  array (
    'city' => 'Brighton East',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.90141',
    'longitude' => '145.01884',
  ),
  3965 => 
  array (
    'city' => 'Hampton',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.93723',
    'longitude' => '145.0046',
  ),
  3966 => 
  array (
    'city' => 'Hampton East',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.93695',
    'longitude' => '145.02863',
  ),
  3967 => 
  array (
    'city' => 'Bentleigh',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.9184',
    'longitude' => '145.03584',
  ),
  3968 => 
  array (
    'city' => 'Bentleigh East',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.9201',
    'longitude' => '145.05987',
  ),
  3969 => 
  array (
    'city' => 'Black Rock',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.97357',
    'longitude' => '145.01636',
  ),
  3970 => 
  array (
    'city' => 'Aspendale Gardens',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-38.02277',
    'longitude' => '145.11798',
  ),
  3971 => 
  array (
    'city' => 'Booval',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.61328',
    'longitude' => '152.78944',
  ),
  3972 => 
  array (
    'city' => 'North Booval',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.60392',
    'longitude' => '152.79485',
  ),
  3973 => 
  array (
    'city' => 'North Ipswich',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.60286',
    'longitude' => '152.76146',
  ),
  3974 => 
  array (
    'city' => 'Brassall',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.59753',
    'longitude' => '152.74755',
  ),
  3975 => 
  array (
    'city' => 'Silkstone',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.62126',
    'longitude' => '152.78768',
  ),
  3976 => 
  array (
    'city' => 'Eastern Heights',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.62849',
    'longitude' => '152.77828',
  ),
  3977 => 
  array (
    'city' => 'Raceview',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.63472',
    'longitude' => '152.77519',
  ),
  3978 => 
  array (
    'city' => 'Flinders View',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.65046',
    'longitude' => '152.77451',
  ),
  3979 => 
  array (
    'city' => 'Deebing Heights',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.66719',
    'longitude' => '152.74867',
  ),
  3980 => 
  array (
    'city' => 'Yamanto',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.66027',
    'longitude' => '152.73863',
  ),
  3981 => 
  array (
    'city' => 'Redbank Plains',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.64613',
    'longitude' => '152.85965',
  ),
  3982 => 
  array (
    'city' => 'Collingwood Park',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.61282',
    'longitude' => '152.86008',
  ),
  3983 => 
  array (
    'city' => 'Clontarf',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.25341',
    'longitude' => '153.07835',
  ),
  3984 => 
  array (
    'city' => 'Woody Point',
    'region' => '04',
    'country' => 'AU',
    'latitude' => '-27.25608',
    'longitude' => '153.10427',
  ),
  3985 => 
  array (
    'city' => 'Ballarat Central',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.56206',
    'longitude' => '143.85082',
  ),
  3986 => 
  array (
    'city' => 'Golden Point',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.57493',
    'longitude' => '143.8687',
  ),
  3987 => 
  array (
    'city' => 'Delacombe',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.58911',
    'longitude' => '143.81472',
  ),
  3988 => 
  array (
    'city' => 'St Albans',
    'region' => '07',
    'country' => 'AU',
    'latitude' => '-37.74496',
    'longitude' => '144.80049',
  ),
  3989 => 
  array (
    'city' => 'Oranjestad',
    'region' => '00',
    'country' => 'AW',
    'latitude' => '12.52398',
    'longitude' => '-70.02703',
  ),
  3990 => 
  array (
    'city' => 'Babijn',
    'region' => '00',
    'country' => 'AW',
    'latitude' => '12.53333',
    'longitude' => '-69.98333',
  ),
  3991 => 
  array (
    'city' => 'Arasji',
    'region' => '00',
    'country' => 'AW',
    'latitude' => '12.61667',
    'longitude' => '-70.06667',
  ),
  3992 => 
  array (
    'city' => 'Angochi',
    'region' => '00',
    'country' => 'AW',
    'latitude' => '12.51667',
    'longitude' => '-69.95',
  ),
  3993 => 
  array (
    'city' => 'Sund',
    'region' => '01',
    'country' => 'AX',
    'latitude' => '60.25',
    'longitude' => '20.11667',
  ),
  3994 => 
  array (
    'city' => 'Saltvik',
    'region' => '01',
    'country' => 'AX',
    'latitude' => '60.28333',
    'longitude' => '20.05',
  ),
  3995 => 
  array (
    'city' => 'Lemland',
    'region' => '01',
    'country' => 'AX',
    'latitude' => '60.08333',
    'longitude' => '20.1',
  ),
  3996 => 
  array (
    'city' => 'Mariehamn',
    'region' => '478',
    'country' => 'AX',
    'latitude' => '60.09726',
    'longitude' => '19.93481',
  ),
  3997 => 
  array (
    'city' => 'Jomala',
    'region' => '01',
    'country' => 'AX',
    'latitude' => '60.15',
    'longitude' => '19.96667',
  ),
  3998 => 
  array (
    'city' => 'Hammarland',
    'region' => '01',
    'country' => 'AX',
    'latitude' => '60.21667',
    'longitude' => '19.75',
  ),
  3999 => 
  array (
    'city' => 'Finström',
    'region' => '01',
    'country' => 'AX',
    'latitude' => '60.26667',
    'longitude' => '19.93333',
  ),
  4000 => 
  array (
    'city' => 'Eckerö',
    'region' => '043',
    'country' => 'AX',
    'latitude' => '60.21249',
    'longitude' => '19.61442',
  ),
  4001 => 
  array (
    'city' => 'Prishibinskoye',
    'region' => '15',
    'country' => 'AZ',
    'latitude' => '39.11958',
    'longitude' => '48.59361',
  ),
  4002 => 
  array (
    'city' => 'Zangilan',
    'region' => '69',
    'country' => 'AZ',
    'latitude' => '39.08834',
    'longitude' => '46.65119',
  ),
  4003 => 
  array (
    'city' => 'Yardımlı',
    'region' => '66',
    'country' => 'AZ',
    'latitude' => '38.92056',
    'longitude' => '48.23722',
  ),
  4004 => 
  array (
    'city' => 'Novyy Karanlug',
    'region' => '65',
    'country' => 'AZ',
    'latitude' => '39.79546',
    'longitude' => '47.10989',
  ),
  4005 => 
  array (
    'city' => 'Xankǝndi',
    'region' => '61',
    'country' => 'AZ',
    'latitude' => '39.8177',
    'longitude' => '46.7528',
  ),
  4006 => 
  array (
    'city' => 'Tel’mankend',
    'region' => '45',
    'country' => 'AZ',
    'latitude' => '39.87867',
    'longitude' => '48.39902',
  ),
  4007 => 
  array (
    'city' => 'Shushi',
    'region' => '56',
    'country' => 'AZ',
    'latitude' => '39.75893',
    'longitude' => '46.74919',
  ),
  4008 => 
  array (
    'city' => 'Salyan',
    'region' => '49',
    'country' => 'AZ',
    'latitude' => '39.59362',
    'longitude' => '48.98055',
  ),
  4009 => 
  array (
    'city' => 'Şahbuz',
    'region' => '35',
    'country' => 'AZ',
    'latitude' => '39.40722',
    'longitude' => '45.57389',
  ),
  4010 => 
  array (
    'city' => 'Sedarak',
    'region' => '35',
    'country' => 'AZ',
    'latitude' => '39.71144',
    'longitude' => '44.88805',
  ),
  4011 => 
  array (
    'city' => 'Qubadlı',
    'region' => '43',
    'country' => 'AZ',
    'latitude' => '39.34396',
    'longitude' => '46.58196',
  ),
  4012 => 
  array (
    'city' => 'Qaraçala',
    'region' => '49',
    'country' => 'AZ',
    'latitude' => '39.81318',
    'longitude' => '48.9523',
  ),
  4013 => 
  array (
    'city' => 'Orconikidze',
    'region' => '12',
    'country' => 'AZ',
    'latitude' => '39.63222',
    'longitude' => '47.69076',
  ),
  4014 => 
  array (
    'city' => 'Ordubad',
    'region' => '35',
    'country' => 'AZ',
    'latitude' => '38.90595',
    'longitude' => '46.02341',
  ),
  4015 => 
  array (
    'city' => 'Neftçala',
    'region' => '36',
    'country' => 'AZ',
    'latitude' => '39.37417',
    'longitude' => '49.24722',
  ),
  4016 => 
  array (
    'city' => 'Nakhchivan',
    'region' => '35',
    'country' => 'AZ',
    'latitude' => '39.20889',
    'longitude' => '45.41222',
  ),
  4017 => 
  array (
    'city' => 'Mincivan',
    'region' => '69',
    'country' => 'AZ',
    'latitude' => '39.02935',
    'longitude' => '46.71847',
  ),
  4018 => 
  array (
    'city' => 'Masally',
    'region' => '32',
    'country' => 'AZ',
    'latitude' => '39.03532',
    'longitude' => '48.6654',
  ),
  4019 => 
  array (
    'city' => 'Lerik',
    'region' => '31',
    'country' => 'AZ',
    'latitude' => '38.77263',
    'longitude' => '48.41279',
  ),
  4020 => 
  array (
    'city' => 'Lǝnkǝran',
    'region' => '30',
    'country' => 'AZ',
    'latitude' => '38.72262',
    'longitude' => '48.81466',
  ),
  4021 => 
  array (
    'city' => 'Laçın',
    'region' => '28',
    'country' => 'AZ',
    'latitude' => '39.59881',
    'longitude' => '46.55045',
  ),
  4022 => 
  array (
    'city' => 'Qırmızı Bazar',
    'region' => '65',
    'country' => 'AZ',
    'latitude' => '39.67833',
    'longitude' => '46.94884',
  ),
  4023 => 
  array (
    'city' => 'Kijoba',
    'region' => '08',
    'country' => 'AZ',
    'latitude' => '38.53278',
    'longitude' => '48.81667',
  ),
  4024 => 
  array (
    'city' => 'Xocalı',
    'region' => '64',
    'country' => 'AZ',
    'latitude' => '39.91297',
    'longitude' => '46.79028',
  ),
  4025 => 
  array (
    'city' => 'Xıllı',
    'region' => '36',
    'country' => 'AZ',
    'latitude' => '39.43012',
    'longitude' => '49.10166',
  ),
  4026 => 
  array (
    'city' => 'Imishli',
    'region' => '24',
    'country' => 'AZ',
    'latitude' => '39.87095',
    'longitude' => '48.05995',
  ),
  4027 => 
  array (
    'city' => 'Horadiz',
    'region' => '18',
    'country' => 'AZ',
    'latitude' => '39.44877',
    'longitude' => '47.33531',
  ),
  4028 => 
  array (
    'city' => 'Haftoni',
    'region' => '29',
    'country' => 'AZ',
    'latitude' => '38.76325',
    'longitude' => '48.76223',
  ),
  4029 => 
  array (
    'city' => 'Hadrut',
    'region' => '65',
    'country' => 'AZ',
    'latitude' => '39.52002',
    'longitude' => '47.0318',
  ),
  4030 => 
  array (
    'city' => 'Jebrail',
    'region' => '14',
    'country' => 'AZ',
    'latitude' => '39.39917',
    'longitude' => '47.02834',
  ),
  4031 => 
  array (
    'city' => 'Julfa',
    'region' => '35',
    'country' => 'AZ',
    'latitude' => '38.9558',
    'longitude' => '45.6308',
  ),
  4032 => 
  array (
    'city' => 'Dzhalilabad',
    'region' => '15',
    'country' => 'AZ',
    'latitude' => '39.20963',
    'longitude' => '48.49186',
  ),
  4033 => 
  array (
    'city' => 'Boradigah',
    'region' => '32',
    'country' => 'AZ',
    'latitude' => '38.93389',
    'longitude' => '48.70375',
  ),
  4034 => 
  array (
    'city' => 'Pushkino',
    'region' => '13',
    'country' => 'AZ',
    'latitude' => '39.45833',
    'longitude' => '48.545',
  ),
  4035 => 
  array (
    'city' => 'Severo-Vostotchnyi Bank',
    'region' => '36',
    'country' => 'AZ',
    'latitude' => '39.41117',
    'longitude' => '49.24792',
  ),
  4036 => 
  array (
    'city' => 'Astara',
    'region' => '08',
    'country' => 'AZ',
    'latitude' => '38.45598',
    'longitude' => '48.87498',
  ),
  4037 => 
  array (
    'city' => 'Askyaran',
    'region' => '64',
    'country' => 'AZ',
    'latitude' => '39.93667',
    'longitude' => '46.83278',
  ),
  4038 => 
  array (
    'city' => 'Zubovka',
    'region' => '07',
    'country' => 'AZ',
    'latitude' => '39.93788',
    'longitude' => '48.92855',
  ),
  4039 => 
  array (
    'city' => 'Ağdam',
    'region' => '03',
    'country' => 'AZ',
    'latitude' => '39.99096',
    'longitude' => '46.92736',
  ),
  4040 => 
  array (
    'city' => 'Sovetabad',
    'region' => '36',
    'country' => 'AZ',
    'latitude' => '39.33667',
    'longitude' => '49.21414',
  ),
  4041 => 
  array (
    'city' => 'Zyrya',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.3661',
    'longitude' => '50.2917',
  ),
  4042 => 
  array (
    'city' => 'Zardob',
    'region' => '71',
    'country' => 'AZ',
    'latitude' => '40.21833',
    'longitude' => '47.70833',
  ),
  4043 => 
  array (
    'city' => 'Zaqatala',
    'region' => '70',
    'country' => 'AZ',
    'latitude' => '41.63361',
    'longitude' => '46.64333',
  ),
  4044 => 
  array (
    'city' => 'Zabrat',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.4761',
    'longitude' => '49.94158',
  ),
  4045 => 
  array (
    'city' => 'Yevlakh',
    'region' => '68',
    'country' => 'AZ',
    'latitude' => '40.61832',
    'longitude' => '47.15014',
  ),
  4046 => 
  array (
    'city' => 'Xudat',
    'region' => '60',
    'country' => 'AZ',
    'latitude' => '41.63096',
    'longitude' => '48.681',
  ),
  4047 => 
  array (
    'city' => 'Xanlar',
    'region' => '62',
    'country' => 'AZ',
    'latitude' => '40.58694',
    'longitude' => '46.31583',
  ),
  4048 => 
  array (
    'city' => 'Xaçmaz',
    'region' => '60',
    'country' => 'AZ',
    'latitude' => '41.46349',
    'longitude' => '48.80605',
  ),
  4049 => 
  array (
    'city' => 'Verkhniy Dashkesan',
    'region' => '16',
    'country' => 'AZ',
    'latitude' => '40.49228',
    'longitude' => '46.07137',
  ),
  4050 => 
  array (
    'city' => 'Ujar',
    'region' => '59',
    'country' => 'AZ',
    'latitude' => '40.51902',
    'longitude' => '47.65423',
  ),
  4051 => 
  array (
    'city' => 'Türkan',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.36389',
    'longitude' => '50.215',
  ),
  4052 => 
  array (
    'city' => 'Tovuz',
    'region' => '58',
    'country' => 'AZ',
    'latitude' => '40.99222',
    'longitude' => '45.62889',
  ),
  4053 => 
  array (
    'city' => 'Terter',
    'region' => '57',
    'country' => 'AZ',
    'latitude' => '40.345',
    'longitude' => '46.92889',
  ),
  4054 => 
  array (
    'city' => 'Sumqayıt',
    'region' => '54',
    'country' => 'AZ',
    'latitude' => '40.58972',
    'longitude' => '49.66861',
  ),
  4055 => 
  array (
    'city' => 'Şuraabad',
    'region' => '63',
    'country' => 'AZ',
    'latitude' => '40.81924',
    'longitude' => '49.46874',
  ),
  4056 => 
  array (
    'city' => 'Qaraçuxur',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.39667',
    'longitude' => '49.97361',
  ),
  4057 => 
  array (
    'city' => 'Saray',
    'region' => '01',
    'country' => 'AZ',
    'latitude' => '40.53222',
    'longitude' => '49.71639',
  ),
  4058 => 
  array (
    'city' => 'Samur',
    'region' => '44',
    'country' => 'AZ',
    'latitude' => '41.63254',
    'longitude' => '48.43025',
  ),
  4059 => 
  array (
    'city' => 'Shamkhor',
    'region' => '51',
    'country' => 'AZ',
    'latitude' => '40.82972',
    'longitude' => '46.01889',
  ),
  4060 => 
  array (
    'city' => 'Shamakhi',
    'region' => '50',
    'country' => 'AZ',
    'latitude' => '40.63141',
    'longitude' => '48.64137',
  ),
  4061 => 
  array (
    'city' => 'Sheki',
    'region' => '48',
    'country' => 'AZ',
    'latitude' => '41.19194',
    'longitude' => '47.17056',
  ),
  4062 => 
  array (
    'city' => 'Sabunçu',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.4425',
    'longitude' => '49.94806',
  ),
  4063 => 
  array (
    'city' => 'Sabirabad',
    'region' => '46',
    'country' => 'AZ',
    'latitude' => '40.00946',
    'longitude' => '48.47515',
  ),
  4064 => 
  array (
    'city' => 'Qusar',
    'region' => '44',
    'country' => 'AZ',
    'latitude' => '41.42728',
    'longitude' => '48.42893',
  ),
  4065 => 
  array (
    'city' => 'Quba',
    'region' => '42',
    'country' => 'AZ',
    'latitude' => '41.36259',
    'longitude' => '48.51519',
  ),
  4066 => 
  array (
    'city' => 'Qobustan',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.08238',
    'longitude' => '49.41205',
  ),
  4067 => 
  array (
    'city' => 'Aja Kabul',
    'region' => '23',
    'country' => 'AZ',
    'latitude' => '40.04084',
    'longitude' => '48.94451',
  ),
  4068 => 
  array (
    'city' => 'Qazax',
    'region' => '40',
    'country' => 'AZ',
    'latitude' => '41.09333',
    'longitude' => '45.36611',
  ),
  4069 => 
  array (
    'city' => 'Qax',
    'region' => '39',
    'country' => 'AZ',
    'latitude' => '41.4225',
    'longitude' => '46.92417',
  ),
  4070 => 
  array (
    'city' => 'Qutqashen',
    'region' => '38',
    'country' => 'AZ',
    'latitude' => '40.98139',
    'longitude' => '47.84583',
  ),
  4071 => 
  array (
    'city' => 'Puta',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.29667',
    'longitude' => '49.66028',
  ),
  4072 => 
  array (
    'city' => 'Oğuz',
    'region' => '37',
    'country' => 'AZ',
    'latitude' => '41.07083',
    'longitude' => '47.45833',
  ),
  4073 => 
  array (
    'city' => 'Hacı Zeynalabdin',
    'region' => '54',
    'country' => 'AZ',
    'latitude' => '40.62333',
    'longitude' => '49.55861',
  ),
  4074 => 
  array (
    'city' => 'Nardaran',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.55611',
    'longitude' => '50.00556',
  ),
  4075 => 
  array (
    'city' => 'Naftalan',
    'region' => '34',
    'country' => 'AZ',
    'latitude' => '40.50667',
    'longitude' => '46.825',
  ),
  4076 => 
  array (
    'city' => 'Mingelchaur',
    'region' => '33',
    'country' => 'AZ',
    'latitude' => '40.76395',
    'longitude' => '47.05953',
  ),
  4077 => 
  array (
    'city' => 'Maştağa',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.53278',
    'longitude' => '50.00389',
  ),
  4078 => 
  array (
    'city' => 'Mardakyany',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.49222',
    'longitude' => '50.13889',
  ),
  4079 => 
  array (
    'city' => 'Marazy',
    'region' => '41',
    'country' => 'AZ',
    'latitude' => '40.53371',
    'longitude' => '48.92726',
  ),
  4080 => 
  array (
    'city' => 'Lökbatan',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.32372',
    'longitude' => '49.72804',
  ),
  4081 => 
  array (
    'city' => 'Qızılhacılı',
    'region' => '21',
    'country' => 'AZ',
    'latitude' => '40.57456',
    'longitude' => '46.84098',
  ),
  4082 => 
  array (
    'city' => 'Qobu',
    'region' => '01',
    'country' => 'AZ',
    'latitude' => '40.40472',
    'longitude' => '49.71306',
  ),
  4083 => 
  array (
    'city' => 'Kilyazi',
    'region' => '63',
    'country' => 'AZ',
    'latitude' => '40.87098',
    'longitude' => '49.34233',
  ),
  4084 => 
  array (
    'city' => 'Khyzy',
    'region' => '63',
    'country' => 'AZ',
    'latitude' => '40.90576',
    'longitude' => '49.08127',
  ),
  4085 => 
  array (
    'city' => 'Khodzhi-Gasan',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.41348',
    'longitude' => '49.77209',
  ),
  4086 => 
  array (
    'city' => 'Korgöz',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.30306',
    'longitude' => '49.62',
  ),
  4087 => 
  array (
    'city' => 'Qarayeri',
    'region' => '52',
    'country' => 'AZ',
    'latitude' => '40.78862',
    'longitude' => '46.30659',
  ),
  4088 => 
  array (
    'city' => 'Vurğun',
    'region' => '05',
    'country' => 'AZ',
    'latitude' => '41.09423',
    'longitude' => '45.47162',
  ),
  4089 => 
  array (
    'city' => 'Kerbakhiar',
    'region' => '26',
    'country' => 'AZ',
    'latitude' => '40.10667',
    'longitude' => '46.03833',
  ),
  4090 => 
  array (
    'city' => 'Qala',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.44182',
    'longitude' => '50.16812',
  ),
  4091 => 
  array (
    'city' => 'İsmayıllı',
    'region' => '25',
    'country' => 'AZ',
    'latitude' => '40.77897',
    'longitude' => '48.16375',
  ),
  4092 => 
  array (
    'city' => 'Gyuzdek',
    'region' => '01',
    'country' => 'AZ',
    'latitude' => '40.37444',
    'longitude' => '49.68194',
  ),
  4093 => 
  array (
    'city' => 'Geoktschai',
    'region' => '22',
    'country' => 'AZ',
    'latitude' => '40.65306',
    'longitude' => '47.74056',
  ),
  4094 => 
  array (
    'city' => 'Hövsan',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.37444',
    'longitude' => '50.08528',
  ),
  4095 => 
  array (
    'city' => 'Goranboy',
    'region' => '21',
    'country' => 'AZ',
    'latitude' => '40.61028',
    'longitude' => '46.78972',
  ),
  4096 => 
  array (
    'city' => 'Ganja',
    'region' => '20',
    'country' => 'AZ',
    'latitude' => '40.68278',
    'longitude' => '46.36056',
  ),
  4097 => 
  array (
    'city' => 'Kyadabek',
    'region' => '19',
    'country' => 'AZ',
    'latitude' => '40.56556',
    'longitude' => '45.81611',
  ),
  4098 => 
  array (
    'city' => 'Corat',
    'region' => '54',
    'country' => 'AZ',
    'latitude' => '40.5725',
    'longitude' => '49.70639',
  ),
  4099 => 
  array (
    'city' => 'Ceyranbatan',
    'region' => '01',
    'country' => 'AZ',
    'latitude' => '40.54083',
    'longitude' => '49.65972',
  ),
  4100 => 
  array (
    'city' => 'Dzagam',
    'region' => '51',
    'country' => 'AZ',
    'latitude' => '40.9033',
    'longitude' => '45.88564',
  ),
  4101 => 
  array (
    'city' => 'Digah',
    'region' => '01',
    'country' => 'AZ',
    'latitude' => '40.49257',
    'longitude' => '49.87478',
  ),
  4102 => 
  array (
    'city' => 'Yukhary-Dashkesan',
    'region' => '16',
    'country' => 'AZ',
    'latitude' => '40.49472',
    'longitude' => '46.07722',
  ),
  4103 => 
  array (
    'city' => 'Dolyar',
    'region' => '51',
    'country' => 'AZ',
    'latitude' => '40.86278',
    'longitude' => '46.03493',
  ),
  4104 => 
  array (
    'city' => 'Çinarlı',
    'region' => '39',
    'country' => 'AZ',
    'latitude' => '41.4723',
    'longitude' => '46.9156',
  ),
  4105 => 
  array (
    'city' => 'Buzovna',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.51789',
    'longitude' => '50.1139',
  ),
  4106 => 
  array (
    'city' => 'Binagadi',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.46602',
    'longitude' => '49.82783',
  ),
  4107 => 
  array (
    'city' => 'Biny Selo',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.45193',
    'longitude' => '50.08564',
  ),
  4108 => 
  array (
    'city' => 'Bilajer',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.56806',
    'longitude' => '50.03778',
  ),
  4109 => 
  array (
    'city' => 'Basqal',
    'region' => '25',
    'country' => 'AZ',
    'latitude' => '40.7552',
    'longitude' => '48.39104',
  ),
  4110 => 
  array (
    'city' => 'Baş Göynük',
    'region' => '47',
    'country' => 'AZ',
    'latitude' => '41.32278',
    'longitude' => '47.11333',
  ),
  4111 => 
  array (
    'city' => 'Barda',
    'region' => '11',
    'country' => 'AZ',
    'latitude' => '40.37444',
    'longitude' => '47.12667',
  ),
  4112 => 
  array (
    'city' => 'Belokany',
    'region' => '10',
    'country' => 'AZ',
    'latitude' => '41.72583',
    'longitude' => '46.40833',
  ),
  4113 => 
  array (
    'city' => 'Balakhani',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.46344',
    'longitude' => '49.91893',
  ),
  4114 => 
  array (
    'city' => 'Bilajari',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.4444',
    'longitude' => '49.80566',
  ),
  4115 => 
  array (
    'city' => 'Baku',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.37767',
    'longitude' => '49.89201',
  ),
  4116 => 
  array (
    'city' => 'Artyom',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.47226',
    'longitude' => '50.33304',
  ),
  4117 => 
  array (
    'city' => 'Amirdzhan',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.42639',
    'longitude' => '49.98361',
  ),
  4118 => 
  array (
    'city' => 'Altıağac',
    'region' => '63',
    'country' => 'AZ',
    'latitude' => '40.85927',
    'longitude' => '48.93477',
  ),
  4119 => 
  array (
    'city' => 'Əliabad',
    'region' => '70',
    'country' => 'AZ',
    'latitude' => '41.48224',
    'longitude' => '46.63528',
  ),
  4120 => 
  array (
    'city' => 'Aghsu',
    'region' => '06',
    'country' => 'AZ',
    'latitude' => '40.57028',
    'longitude' => '48.40087',
  ),
  4121 => 
  array (
    'city' => 'Aghstafa',
    'region' => '05',
    'country' => 'AZ',
    'latitude' => '41.11889',
    'longitude' => '45.45389',
  ),
  4122 => 
  array (
    'city' => 'Ağdaş',
    'region' => '04',
    'country' => 'AZ',
    'latitude' => '40.65',
    'longitude' => '47.47611',
  ),
  4123 => 
  array (
    'city' => 'Martakert',
    'region' => '57',
    'country' => 'AZ',
    'latitude' => '40.2104',
    'longitude' => '46.82097',
  ),
  4124 => 
  array (
    'city' => 'Ağdam',
    'region' => '03',
    'country' => 'AZ',
    'latitude' => '40.90528',
    'longitude' => '45.55639',
  ),
  4125 => 
  array (
    'city' => 'Agdzhabedy',
    'region' => '02',
    'country' => 'AZ',
    'latitude' => '40.05278',
    'longitude' => '47.46139',
  ),
  4126 => 
  array (
    'city' => 'Mughan',
    'region' => '23',
    'country' => 'AZ',
    'latitude' => '40.09902',
    'longitude' => '48.81886',
  ),
  4127 => 
  array (
    'city' => 'Qabaqçöl',
    'region' => '10',
    'country' => 'AZ',
    'latitude' => '41.72',
    'longitude' => '46.26472',
  ),
  4128 => 
  array (
    'city' => 'Bakıxanov',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.42167',
    'longitude' => '49.96444',
  ),
  4129 => 
  array (
    'city' => 'Aran',
    'region' => '67',
    'country' => 'AZ',
    'latitude' => '40.62528',
    'longitude' => '46.97556',
  ),
  4130 => 
  array (
    'city' => 'Ramana',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.44222',
    'longitude' => '49.98056',
  ),
  4131 => 
  array (
    'city' => 'Badamdar',
    'region' => '09',
    'country' => 'AZ',
    'latitude' => '40.33944',
    'longitude' => '49.80389',
  ),
  4132 => 
  array (
    'city' => 'Zvornik',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.38694',
    'longitude' => '19.10139',
  ),
  4133 => 
  array (
    'city' => 'Živinice',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.54722',
    'longitude' => '17.375',
  ),
  4134 => 
  array (
    'city' => 'Živinice',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.44944',
    'longitude' => '18.64972',
  ),
  4135 => 
  array (
    'city' => 'Žepče',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.42667',
    'longitude' => '18.03778',
  ),
  4136 => 
  array (
    'city' => 'Zenica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.20139',
    'longitude' => '17.90639',
  ),
  4137 => 
  array (
    'city' => 'Željezno Polje',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.40833',
    'longitude' => '17.93194',
  ),
  4138 => 
  array (
    'city' => 'Zborište',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.14583',
    'longitude' => '16.01778',
  ),
  4139 => 
  array (
    'city' => 'Zavidovići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.44583',
    'longitude' => '18.14972',
  ),
  4140 => 
  array (
    'city' => 'Zabrišće',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.7925',
    'longitude' => '16.94222',
  ),
  4141 => 
  array (
    'city' => 'Vukovije Donje',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.46361',
    'longitude' => '18.75389',
  ),
  4142 => 
  array (
    'city' => 'Vrnograč',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.16361',
    'longitude' => '15.95361',
  ),
  4143 => 
  array (
    'city' => 'Vozuća',
    'region' => '00',
    'country' => 'BA',
    'latitude' => '44.36139',
    'longitude' => '18.35778',
  ),
  4144 => 
  array (
    'city' => 'Voljevac',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.87861',
    'longitude' => '17.65917',
  ),
  4145 => 
  array (
    'city' => 'Vogošća',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.90194',
    'longitude' => '18.34806',
  ),
  4146 => 
  array (
    'city' => 'Vlasenica',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.18194',
    'longitude' => '18.94056',
  ),
  4147 => 
  array (
    'city' => 'Vitina',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.2375',
    'longitude' => '17.48389',
  ),
  4148 => 
  array (
    'city' => 'Vitez',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.15444',
    'longitude' => '17.79028',
  ),
  4149 => 
  array (
    'city' => 'Visoko',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.98889',
    'longitude' => '18.17806',
  ),
  4150 => 
  array (
    'city' => 'Višegrad',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.78472',
    'longitude' => '19.29917',
  ),
  4151 => 
  array (
    'city' => 'Vidoši',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.77139',
    'longitude' => '17.02833',
  ),
  4152 => 
  array (
    'city' => 'Velika Obarska',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.80528',
    'longitude' => '19.16417',
  ),
  4153 => 
  array (
    'city' => 'Velika Kladuša',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.18944',
    'longitude' => '15.81167',
  ),
  4154 => 
  array (
    'city' => 'Velagići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.55722',
    'longitude' => '16.73167',
  ),
  4155 => 
  array (
    'city' => 'Varoška Rijeka',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.08472',
    'longitude' => '16.01417',
  ),
  4156 => 
  array (
    'city' => 'Vareš',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.16444',
    'longitude' => '18.32833',
  ),
  4157 => 
  array (
    'city' => 'Ustikolina',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.58361',
    'longitude' => '18.79',
  ),
  4158 => 
  array (
    'city' => 'Ugljevik',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.66361',
    'longitude' => '19.02028',
  ),
  4159 => 
  array (
    'city' => 'Tuzla',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.54278',
    'longitude' => '18.66944',
  ),
  4160 => 
  array (
    'city' => 'Turbe',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.24361',
    'longitude' => '17.57139',
  ),
  4161 => 
  array (
    'city' => 'Tržačka Raštela',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.97333',
    'longitude' => '15.79028',
  ),
  4162 => 
  array (
    'city' => 'Trn',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.85972',
    'longitude' => '17.23639',
  ),
  4163 => 
  array (
    'city' => 'Trebinje',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '42.71194',
    'longitude' => '18.34417',
  ),
  4164 => 
  array (
    'city' => 'Travnik',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.22667',
    'longitude' => '17.67056',
  ),
  4165 => 
  array (
    'city' => 'Tojšići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.50111',
    'longitude' => '18.78556',
  ),
  4166 => 
  array (
    'city' => 'Teslić',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.60639',
    'longitude' => '17.85972',
  ),
  4167 => 
  array (
    'city' => 'Tešanj',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.61167',
    'longitude' => '17.98722',
  ),
  4168 => 
  array (
    'city' => 'Svodna',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.03722',
    'longitude' => '16.53833',
  ),
  4169 => 
  array (
    'city' => 'Šumatac',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.09889',
    'longitude' => '15.8575',
  ),
  4170 => 
  array (
    'city' => 'Šturlić',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.06389',
    'longitude' => '15.77806',
  ),
  4171 => 
  array (
    'city' => 'Stupari',
    'region' => '00',
    'country' => 'BA',
    'latitude' => '44.31472',
    'longitude' => '18.68417',
  ),
  4172 => 
  array (
    'city' => 'Stolac',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.08444',
    'longitude' => '17.9575',
  ),
  4173 => 
  array (
    'city' => 'Stjepan-Polje',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.71722',
    'longitude' => '18.25944',
  ),
  4174 => 
  array (
    'city' => 'Stijena',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.93528',
    'longitude' => '16.01722',
  ),
  4175 => 
  array (
    'city' => 'Srebrenik',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.70778',
    'longitude' => '18.48806',
  ),
  4176 => 
  array (
    'city' => 'Srebrenica',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.10639',
    'longitude' => '19.29694',
  ),
  4177 => 
  array (
    'city' => 'Srbac',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.09778',
    'longitude' => '17.525',
  ),
  4178 => 
  array (
    'city' => 'Solina',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.56028',
    'longitude' => '18.69472',
  ),
  4179 => 
  array (
    'city' => 'Sokolac',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.93972',
    'longitude' => '18.80167',
  ),
  4180 => 
  array (
    'city' => 'Sladna',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.72944',
    'longitude' => '18.42417',
  ),
  4181 => 
  array (
    'city' => 'Skender Vakuf',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.49083',
    'longitude' => '17.3775',
  ),
  4182 => 
  array (
    'city' => 'Šipovo',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.28139',
    'longitude' => '17.08389',
  ),
  4183 => 
  array (
    'city' => 'Šerići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.46528',
    'longitude' => '18.55806',
  ),
  4184 => 
  array (
    'city' => 'Šekovići',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.29861',
    'longitude' => '18.85278',
  ),
  4185 => 
  array (
    'city' => 'Sarajevo',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.84864',
    'longitude' => '18.35644',
  ),
  4186 => 
  array (
    'city' => 'Sanski Most',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.76528',
    'longitude' => '16.66556',
  ),
  4187 => 
  array (
    'city' => 'Sanica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.61417',
    'longitude' => '16.64111',
  ),
  4188 => 
  array (
    'city' => 'Rumboci',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.83222',
    'longitude' => '17.50111',
  ),
  4189 => 
  array (
    'city' => 'Rudo',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.61778',
    'longitude' => '19.36639',
  ),
  4190 => 
  array (
    'city' => 'Rogatica',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.80083',
    'longitude' => '19.0025',
  ),
  4191 => 
  array (
    'city' => 'Rodoč',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.30889',
    'longitude' => '17.80694',
  ),
  4192 => 
  array (
    'city' => 'Radišići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.22194',
    'longitude' => '17.54306',
  ),
  4193 => 
  array (
    'city' => 'Puračić',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.54694',
    'longitude' => '18.47667',
  ),
  4194 => 
  array (
    'city' => 'Novi Travnik',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.17111',
    'longitude' => '17.6575',
  ),
  4195 => 
  array (
    'city' => 'Prozor',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.82222',
    'longitude' => '17.60917',
  ),
  4196 => 
  array (
    'city' => 'Prnjavor',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.87028',
    'longitude' => '17.66278',
  ),
  4197 => 
  array (
    'city' => 'Prijedor',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.98139',
    'longitude' => '16.71306',
  ),
  4198 => 
  array (
    'city' => 'Priboj',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.60278',
    'longitude' => '18.93139',
  ),
  4199 => 
  array (
    'city' => 'Pribinić',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.61056',
    'longitude' => '17.69056',
  ),
  4200 => 
  array (
    'city' => 'Potoci',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.40861',
    'longitude' => '17.87861',
  ),
  4201 => 
  array (
    'city' => 'Popovi',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.76556',
    'longitude' => '19.2875',
  ),
  4202 => 
  array (
    'city' => 'Polje-Bijela',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.63333',
    'longitude' => '17.97222',
  ),
  4203 => 
  array (
    'city' => 'Podzvizd',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.17417',
    'longitude' => '15.87361',
  ),
  4204 => 
  array (
    'city' => 'Podhum',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.72306',
    'longitude' => '17.00111',
  ),
  4205 => 
  array (
    'city' => 'Petkovci',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.45306',
    'longitude' => '19.07611',
  ),
  4206 => 
  array (
    'city' => 'Pećigrad',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.05444',
    'longitude' => '15.89694',
  ),
  4207 => 
  array (
    'city' => 'Peći',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.62722',
    'longitude' => '16.78611',
  ),
  4208 => 
  array (
    'city' => 'Pazarić',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.78861',
    'longitude' => '18.16083',
  ),
  4209 => 
  array (
    'city' => 'Pale',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.81611',
    'longitude' => '18.56944',
  ),
  4210 => 
  array (
    'city' => 'Otoka',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.96',
    'longitude' => '16.17917',
  ),
  4211 => 
  array (
    'city' => 'Ostrožac',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.90861',
    'longitude' => '15.94028',
  ),
  4212 => 
  array (
    'city' => 'Oštra Luka',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45',
    'longitude' => '18.58833',
  ),
  4213 => 
  array (
    'city' => 'Orguz',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.77389',
    'longitude' => '16.86389',
  ),
  4214 => 
  array (
    'city' => 'Orašje',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.03556',
    'longitude' => '18.69333',
  ),
  4215 => 
  array (
    'city' => 'Orašac',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.62889',
    'longitude' => '16.07111',
  ),
  4216 => 
  array (
    'city' => 'Orahovica Donja',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.65306',
    'longitude' => '18.37028',
  ),
  4217 => 
  array (
    'city' => 'Omarska',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.89',
    'longitude' => '16.89917',
  ),
  4218 => 
  array (
    'city' => 'Olovo',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.13',
    'longitude' => '18.58278',
  ),
  4219 => 
  array (
    'city' => 'Odžak',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.01111',
    'longitude' => '18.32667',
  ),
  4220 => 
  array (
    'city' => 'Obudovac',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.965',
    'longitude' => '18.61222',
  ),
  4221 => 
  array (
    'city' => 'Novi Šeher',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.51028',
    'longitude' => '18.02583',
  ),
  4222 => 
  array (
    'city' => 'Nevesinje',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.25861',
    'longitude' => '18.11333',
  ),
  4223 => 
  array (
    'city' => 'Neum',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '42.92333',
    'longitude' => '17.61556',
  ),
  4224 => 
  array (
    'city' => 'Mrkonjić Grad',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.41583',
    'longitude' => '17.08611',
  ),
  4225 => 
  array (
    'city' => 'Mramor',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.59167',
    'longitude' => '18.56444',
  ),
  4226 => 
  array (
    'city' => 'Mostar',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.34333',
    'longitude' => '17.80806',
  ),
  4227 => 
  array (
    'city' => 'Modriča',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.95444',
    'longitude' => '18.30361',
  ),
  4228 => 
  array (
    'city' => 'Mionica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.86722',
    'longitude' => '18.46306',
  ),
  4229 => 
  array (
    'city' => 'Milići',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.17111',
    'longitude' => '19.09028',
  ),
  4230 => 
  array (
    'city' => 'Maslovare',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.56556',
    'longitude' => '17.53361',
  ),
  4231 => 
  array (
    'city' => 'Marićka',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.86861',
    'longitude' => '16.84056',
  ),
  4232 => 
  array (
    'city' => 'Mala Kladuša',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.13417',
    'longitude' => '15.85861',
  ),
  4233 => 
  array (
    'city' => 'Mahala',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.01194',
    'longitude' => '18.25528',
  ),
  4234 => 
  array (
    'city' => 'Maglajani',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.94861',
    'longitude' => '17.34944',
  ),
  4235 => 
  array (
    'city' => 'Maglaj',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.54917',
    'longitude' => '18.09667',
  ),
  4236 => 
  array (
    'city' => 'Lukavica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.76278',
    'longitude' => '18.16889',
  ),
  4237 => 
  array (
    'city' => 'Lopare',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.63778',
    'longitude' => '18.84278',
  ),
  4238 => 
  array (
    'city' => 'Lokvine',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.20472',
    'longitude' => '17.85639',
  ),
  4239 => 
  array (
    'city' => 'Ljubuški',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.19694',
    'longitude' => '17.545',
  ),
  4240 => 
  array (
    'city' => 'Ljubinje',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '42.95083',
    'longitude' => '18.08861',
  ),
  4241 => 
  array (
    'city' => 'Livno',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.82694',
    'longitude' => '17.00778',
  ),
  4242 => 
  array (
    'city' => 'Široki Brijeg',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.38333',
    'longitude' => '17.59278',
  ),
  4243 => 
  array (
    'city' => 'Laktaši',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.90806',
    'longitude' => '17.30083',
  ),
  4244 => 
  array (
    'city' => 'Kotor-Varoš',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.61694',
    'longitude' => '17.37167',
  ),
  4245 => 
  array (
    'city' => 'Kočerin',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.38972',
    'longitude' => '17.485',
  ),
  4246 => 
  array (
    'city' => 'Kobilja Glava',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.88194',
    'longitude' => '18.38917',
  ),
  4247 => 
  array (
    'city' => 'Ključ',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.535',
    'longitude' => '16.77222',
  ),
  4248 => 
  array (
    'city' => 'Kladanj',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.22639',
    'longitude' => '18.69139',
  ),
  4249 => 
  array (
    'city' => 'Kiseljak',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.48889',
    'longitude' => '18.56889',
  ),
  4250 => 
  array (
    'city' => 'Kiseljak',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.9425',
    'longitude' => '18.07667',
  ),
  4251 => 
  array (
    'city' => 'Karadaglije',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.57167',
    'longitude' => '18.01833',
  ),
  4252 => 
  array (
    'city' => 'Kalenderovci Donji',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.945',
    'longitude' => '17.83389',
  ),
  4253 => 
  array (
    'city' => 'Kakanj',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.12722',
    'longitude' => '18.11806',
  ),
  4254 => 
  array (
    'city' => 'Jezerski',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.98083',
    'longitude' => '16.08417',
  ),
  4255 => 
  array (
    'city' => 'Janja',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.66528',
    'longitude' => '19.24778',
  ),
  4256 => 
  array (
    'city' => 'Jajce',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.34222',
    'longitude' => '17.26556',
  ),
  4257 => 
  array (
    'city' => 'Izačić',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.875',
    'longitude' => '15.78194',
  ),
  4258 => 
  array (
    'city' => 'Ilijaš',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.95083',
    'longitude' => '18.27083',
  ),
  4259 => 
  array (
    'city' => 'Han Pijesak',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.08083',
    'longitude' => '18.9525',
  ),
  4260 => 
  array (
    'city' => 'Hadžići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.82222',
    'longitude' => '18.20667',
  ),
  4261 => 
  array (
    'city' => 'Grude',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.36417',
    'longitude' => '17.42056',
  ),
  4262 => 
  array (
    'city' => 'Gromiljak',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.96667',
    'longitude' => '18.05306',
  ),
  4263 => 
  array (
    'city' => 'Gradačac',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.88083',
    'longitude' => '18.42694',
  ),
  4264 => 
  array (
    'city' => 'Gračanica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.70333',
    'longitude' => '18.30972',
  ),
  4265 => 
  array (
    'city' => 'Gračanica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.73333',
    'longitude' => '18.28333',
  ),
  4266 => 
  array (
    'city' => 'Gostovići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.415',
    'longitude' => '18.15833',
  ),
  4267 => 
  array (
    'city' => 'Gornji Vakuf',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.93806',
    'longitude' => '17.58833',
  ),
  4268 => 
  array (
    'city' => 'Gornje Živinice',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.42861',
    'longitude' => '18.61694',
  ),
  4269 => 
  array (
    'city' => 'Gornje Moštre',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.01889',
    'longitude' => '18.15333',
  ),
  4270 => 
  array (
    'city' => 'Gornja Tuzla',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.55611',
    'longitude' => '18.76139',
  ),
  4271 => 
  array (
    'city' => 'Gornja Koprivna',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.01194',
    'longitude' => '15.95722',
  ),
  4272 => 
  array (
    'city' => 'Goražde',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.66694',
    'longitude' => '18.97639',
  ),
  4273 => 
  array (
    'city' => 'Gnojnica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.62056',
    'longitude' => '18.44667',
  ),
  4274 => 
  array (
    'city' => 'Glamoč',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.04583',
    'longitude' => '16.84861',
  ),
  4275 => 
  array (
    'city' => 'Gacko',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.16722',
    'longitude' => '18.53528',
  ),
  4276 => 
  array (
    'city' => 'Fojnica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.9625',
    'longitude' => '17.89833',
  ),
  4277 => 
  array (
    'city' => 'Foča',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.505',
    'longitude' => '18.77861',
  ),
  4278 => 
  array (
    'city' => 'Tomislavgrad',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.71806',
    'longitude' => '17.22667',
  ),
  4279 => 
  array (
    'city' => 'Dubravica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.44194',
    'longitude' => '18.11806',
  ),
  4280 => 
  array (
    'city' => 'Dubrave Gornje',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.47139',
    'longitude' => '18.72972',
  ),
  4281 => 
  array (
    'city' => 'Dubrave Donje',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.48111',
    'longitude' => '18.69611',
  ),
  4282 => 
  array (
    'city' => 'Drinovci',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.355',
    'longitude' => '17.35389',
  ),
  4283 => 
  array (
    'city' => 'Donji Vakuf',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.14361',
    'longitude' => '17.4',
  ),
  4284 => 
  array (
    'city' => 'Donja Međiđa',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.8025',
    'longitude' => '18.40333',
  ),
  4285 => 
  array (
    'city' => 'Donja Mahala',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.04694',
    'longitude' => '18.66639',
  ),
  4286 => 
  array (
    'city' => 'Donja Dubica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.075',
    'longitude' => '18.41139',
  ),
  4287 => 
  array (
    'city' => 'Dobrljin',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.15333',
    'longitude' => '16.4775',
  ),
  4288 => 
  array (
    'city' => 'Dobrinje',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.04972',
    'longitude' => '18.11944',
  ),
  4289 => 
  array (
    'city' => 'Doboj',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.73472',
    'longitude' => '18.08778',
  ),
  4290 => 
  array (
    'city' => 'Divičani',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.36667',
    'longitude' => '17.32611',
  ),
  4291 => 
  array (
    'city' => 'Derventa',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.97722',
    'longitude' => '17.91028',
  ),
  4292 => 
  array (
    'city' => 'Čitluk',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.22861',
    'longitude' => '17.70083',
  ),
  4293 => 
  array (
    'city' => 'Cim',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.35278',
    'longitude' => '17.77722',
  ),
  4294 => 
  array (
    'city' => 'Čečava',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.68667',
    'longitude' => '17.77056',
  ),
  4295 => 
  array (
    'city' => 'Cazin',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.96694',
    'longitude' => '15.94306',
  ),
  4296 => 
  array (
    'city' => 'Čapljina',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.12139',
    'longitude' => '17.68444',
  ),
  4297 => 
  array (
    'city' => 'Čajniče',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.5575',
    'longitude' => '19.07111',
  ),
  4298 => 
  array (
    'city' => 'Bužim',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.05472',
    'longitude' => '16.03194',
  ),
  4299 => 
  array (
    'city' => 'Busovača',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.0975',
    'longitude' => '17.87889',
  ),
  4300 => 
  array (
    'city' => 'Bugojno',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.05722',
    'longitude' => '17.45083',
  ),
  4301 => 
  array (
    'city' => 'Bronzani Majdan',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.78694',
    'longitude' => '16.93111',
  ),
  4302 => 
  array (
    'city' => 'Brčko',
    'region' => 'BRC',
    'country' => 'BA',
    'latitude' => '44.87278',
    'longitude' => '18.80833',
  ),
  4303 => 
  array (
    'city' => 'Bratunac',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.1875',
    'longitude' => '19.33944',
  ),
  4304 => 
  array (
    'city' => 'Bosansko Grahovo',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.17944',
    'longitude' => '16.36389',
  ),
  4305 => 
  array (
    'city' => 'Bosanski Šamac',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.05917',
    'longitude' => '18.46694',
  ),
  4306 => 
  array (
    'city' => 'Bosanski Novi',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.04583',
    'longitude' => '16.38028',
  ),
  4307 => 
  array (
    'city' => 'Bosanski Brod',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.1375',
    'longitude' => '17.98972',
  ),
  4308 => 
  array (
    'city' => 'Bosanska Krupa',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.8825',
    'longitude' => '16.15139',
  ),
  4309 => 
  array (
    'city' => 'Kostajnica',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.21972',
    'longitude' => '16.53583',
  ),
  4310 => 
  array (
    'city' => 'Bosanska Gradiška',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.14111',
    'longitude' => '17.25',
  ),
  4311 => 
  array (
    'city' => 'Bosanska Dubica',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.17667',
    'longitude' => '16.80944',
  ),
  4312 => 
  array (
    'city' => 'Blatnica',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.48639',
    'longitude' => '17.82333',
  ),
  4313 => 
  array (
    'city' => 'Blagaj',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.2575',
    'longitude' => '17.88861',
  ),
  4314 => 
  array (
    'city' => 'Bileća',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '42.87194',
    'longitude' => '18.42972',
  ),
  4315 => 
  array (
    'city' => 'Bila',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.7825',
    'longitude' => '16.92528',
  ),
  4316 => 
  array (
    'city' => 'Bijeljina',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.75694',
    'longitude' => '19.21611',
  ),
  4317 => 
  array (
    'city' => 'Bihać',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.81694',
    'longitude' => '15.87083',
  ),
  4318 => 
  array (
    'city' => 'Banovići',
    'region' => '00',
    'country' => 'BA',
    'latitude' => '44.40528',
    'longitude' => '18.52417',
  ),
  4319 => 
  array (
    'city' => 'Banja Luka',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.77583',
    'longitude' => '17.18556',
  ),
  4320 => 
  array (
    'city' => 'Balatun',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.86278',
    'longitude' => '19.34139',
  ),
  4321 => 
  array (
    'city' => 'Koran',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '43.81028',
    'longitude' => '18.56889',
  ),
  4322 => 
  array (
    'city' => 'Jelah',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.65417',
    'longitude' => '17.95806',
  ),
  4323 => 
  array (
    'city' => 'Stanari',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.74722',
    'longitude' => '17.82944',
  ),
  4324 => 
  array (
    'city' => 'Podbrdo',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.44083',
    'longitude' => '17.01389',
  ),
  4325 => 
  array (
    'city' => 'Malešići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.73806',
    'longitude' => '18.27389',
  ),
  4326 => 
  array (
    'city' => 'Svojat',
    'region' => '00',
    'country' => 'BA',
    'latitude' => '44.39472',
    'longitude' => '18.73917',
  ),
  4327 => 
  array (
    'city' => 'Dvorovi',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.80667',
    'longitude' => '19.26056',
  ),
  4328 => 
  array (
    'city' => 'Knežica',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '45.10278',
    'longitude' => '16.6775',
  ),
  4329 => 
  array (
    'city' => 'Pjanići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.98361',
    'longitude' => '15.82278',
  ),
  4330 => 
  array (
    'city' => 'Polje',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.88056',
    'longitude' => '18.07444',
  ),
  4331 => 
  array (
    'city' => 'Ilići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.34722',
    'longitude' => '17.76806',
  ),
  4332 => 
  array (
    'city' => 'Careva Ćuprija',
    'region' => '00',
    'country' => 'BA',
    'latitude' => '44.26583',
    'longitude' => '18.42917',
  ),
  4333 => 
  array (
    'city' => 'Čelinac',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.72278',
    'longitude' => '17.32778',
  ),
  4334 => 
  array (
    'city' => 'Hiseti',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.76111',
    'longitude' => '17.17944',
  ),
  4335 => 
  array (
    'city' => 'Piskavica',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.86806',
    'longitude' => '16.97361',
  ),
  4336 => 
  array (
    'city' => 'Lamovita',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.92556',
    'longitude' => '16.90722',
  ),
  4337 => 
  array (
    'city' => 'Putiševac',
    'region' => '02',
    'country' => 'BA',
    'latitude' => '44.53944',
    'longitude' => '17.06278',
  ),
  4338 => 
  array (
    'city' => 'Tešanjka',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.67306',
    'longitude' => '18.01278',
  ),
  4339 => 
  array (
    'city' => 'Kovači',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.44917',
    'longitude' => '18.205',
  ),
  4340 => 
  array (
    'city' => 'Liješnica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.49417',
    'longitude' => '18.07417',
  ),
  4341 => 
  array (
    'city' => 'Ćoralići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.00694',
    'longitude' => '15.87194',
  ),
  4342 => 
  array (
    'city' => 'Crnići',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.12889',
    'longitude' => '17.86667',
  ),
  4343 => 
  array (
    'city' => 'Barice',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.54056',
    'longitude' => '18.48111',
  ),
  4344 => 
  array (
    'city' => 'Hotonj',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.89472',
    'longitude' => '18.37278',
  ),
  4345 => 
  array (
    'city' => 'Skokovi',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.03139',
    'longitude' => '15.91444',
  ),
  4346 => 
  array (
    'city' => 'Drežnica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.52889',
    'longitude' => '17.28194',
  ),
  4347 => 
  array (
    'city' => 'Kačuni',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.065',
    'longitude' => '17.93861',
  ),
  4348 => 
  array (
    'city' => 'Pajić Polje',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.97583',
    'longitude' => '17.5275',
  ),
  4349 => 
  array (
    'city' => 'Gornja Breza',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '44.03694',
    'longitude' => '18.24472',
  ),
  4350 => 
  array (
    'city' => 'Todorovo',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '45.08833',
    'longitude' => '15.93083',
  ),
  4351 => 
  array (
    'city' => 'Konjic',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.65194',
    'longitude' => '17.96139',
  ),
  4352 => 
  array (
    'city' => 'Jablanica',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.66028',
    'longitude' => '17.76167',
  ),
  4353 => 
  array (
    'city' => 'Bijela',
    'region' => '01',
    'country' => 'BA',
    'latitude' => '43.60861',
    'longitude' => '17.95194',
  ),
  4354 => 
  array (
    'city' => 'Speightstown',
    'region' => '09',
    'country' => 'BB',
    'latitude' => '13.25',
    'longitude' => '-59.65',
  ),
  4355 => 
  array (
    'city' => 'Oistins',
    'region' => '01',
    'country' => 'BB',
    'latitude' => '13.06667',
    'longitude' => '-59.53333',
  ),
  4356 => 
  array (
    'city' => 'Holetown',
    'region' => '04',
    'country' => 'BB',
    'latitude' => '13.18672',
    'longitude' => '-59.63808',
  ),
  4357 => 
  array (
    'city' => 'Bridgetown',
    'region' => '08',
    'country' => 'BB',
    'latitude' => '13.1',
    'longitude' => '-59.61667',
  ),
  4358 => 
  array (
    'city' => 'Bathsheba',
    'region' => '06',
    'country' => 'BB',
    'latitude' => '13.21667',
    'longitude' => '-59.51667',
  ),
  4359 => 
  array (
    'city' => 'Thākurgaon',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '26.03333',
    'longitude' => '88.46667',
  ),
  4360 => 
  array (
    'city' => 'Teknāf',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '20.86243',
    'longitude' => '92.30582',
  ),
  4361 => 
  array (
    'city' => 'Tungi',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '23.89',
    'longitude' => '90.40583',
  ),
  4362 => 
  array (
    'city' => 'Sylhet',
    'region' => '86',
    'country' => 'BD',
    'latitude' => '24.89667',
    'longitude' => '91.87167',
  ),
  4363 => 
  array (
    'city' => 'Dohār',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '23.58833',
    'longitude' => '90.14694',
  ),
  4364 => 
  array (
    'city' => 'Jamālpur',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.91667',
    'longitude' => '89.93333',
  ),
  4365 => 
  array (
    'city' => 'Shibganj',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '24.68293',
    'longitude' => '88.15975',
  ),
  4366 => 
  array (
    'city' => 'Sātkhira',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '22.71667',
    'longitude' => '89.1',
  ),
  4367 => 
  array (
    'city' => 'Sirājganj',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.45',
    'longitude' => '89.71667',
  ),
  4368 => 
  array (
    'city' => 'Netrakona',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '24.88333',
    'longitude' => '90.71667',
  ),
  4369 => 
  array (
    'city' => 'Narsingdi',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '23.92083',
    'longitude' => '90.71806',
  ),
  4370 => 
  array (
    'city' => 'Sandwīp',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '22.46778',
    'longitude' => '91.45611',
  ),
  4371 => 
  array (
    'city' => 'Shāhzādpur',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.16667',
    'longitude' => '89.6',
  ),
  4372 => 
  array (
    'city' => 'Rāmganj',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '23.1',
    'longitude' => '90.85',
  ),
  4373 => 
  array (
    'city' => 'Rājshāhi',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '24.36667',
    'longitude' => '88.6',
  ),
  4374 => 
  array (
    'city' => 'Pirojpur',
    'region' => '85',
    'country' => 'BD',
    'latitude' => '22.56667',
    'longitude' => '89.98333',
  ),
  4375 => 
  array (
    'city' => 'Panchagarh',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '26.33129',
    'longitude' => '88.562',
  ),
  4376 => 
  array (
    'city' => 'Patiya',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '22.29312',
    'longitude' => '91.97621',
  ),
  4377 => 
  array (
    'city' => 'Parbatipur',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '25.66491',
    'longitude' => '88.9247',
  ),
  4378 => 
  array (
    'city' => 'Nārāyanganj',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '23.62333',
    'longitude' => '90.50111',
  ),
  4379 => 
  array (
    'city' => 'Nālchiti',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '22.63333',
    'longitude' => '90.28333',
  ),
  4380 => 
  array (
    'city' => 'Nageswari',
    'region' => '87',
    'country' => 'BD',
    'latitude' => '25.96881',
    'longitude' => '89.69299',
  ),
  4381 => 
  array (
    'city' => 'Mymensingh',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.75',
    'longitude' => '90.4',
  ),
  4382 => 
  array (
    'city' => 'Muktāgācha',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.76667',
    'longitude' => '90.23333',
  ),
  4383 => 
  array (
    'city' => 'Mirzāpur',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.1',
    'longitude' => '90.1',
  ),
  4384 => 
  array (
    'city' => 'Moulvi Bāzār',
    'region' => '86',
    'country' => 'BD',
    'latitude' => '24.48333',
    'longitude' => '91.78333',
  ),
  4385 => 
  array (
    'city' => 'Morrelgonj',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '22.4537',
    'longitude' => '89.8587',
  ),
  4386 => 
  array (
    'city' => 'Mehendiganj',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '22.81667',
    'longitude' => '90.53333',
  ),
  4387 => 
  array (
    'city' => 'Mathba',
    'region' => '85',
    'country' => 'BD',
    'latitude' => '22.2855',
    'longitude' => '89.9629',
  ),
  4388 => 
  array (
    'city' => 'Lalmanirhat',
    'region' => '87',
    'country' => 'BD',
    'latitude' => '25.91244',
    'longitude' => '89.44729',
  ),
  4389 => 
  array (
    'city' => 'Lākshām',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '23.24722',
    'longitude' => '91.1425',
  ),
  4390 => 
  array (
    'city' => 'Comilla',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '23.45778',
    'longitude' => '91.20444',
  ),
  4391 => 
  array (
    'city' => 'Rangpur',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '25.75',
    'longitude' => '89.25',
  ),
  4392 => 
  array (
    'city' => 'Kushtia',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '23.90105',
    'longitude' => '89.12207',
  ),
  4393 => 
  array (
    'city' => 'Kālīganj',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '23.4095',
    'longitude' => '89.1402',
  ),
  4394 => 
  array (
    'city' => 'Jhingergācha',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '23.1131',
    'longitude' => '89.0938',
  ),
  4395 => 
  array (
    'city' => 'Joypurhat',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '25.09433',
    'longitude' => '89.02169',
  ),
  4396 => 
  array (
    'city' => 'Ishurdi',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.13333',
    'longitude' => '89.08333',
  ),
  4397 => 
  array (
    'city' => 'Habiganj',
    'region' => '86',
    'country' => 'BD',
    'latitude' => '24.38333',
    'longitude' => '91.41667',
  ),
  4398 => 
  array (
    'city' => 'Gaurnadi',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '22.96667',
    'longitude' => '90.23333',
  ),
  4399 => 
  array (
    'city' => 'Gafargaon',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.43333',
    'longitude' => '90.56667',
  ),
  4400 => 
  array (
    'city' => 'Feni',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '23.01861',
    'longitude' => '91.41',
  ),
  4401 => 
  array (
    'city' => 'Rāipur',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '23.05',
    'longitude' => '90.76667',
  ),
  4402 => 
  array (
    'city' => 'Sarankhola',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '22.3082',
    'longitude' => '89.7897',
  ),
  4403 => 
  array (
    'city' => 'Dhaka',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '23.7104',
    'longitude' => '90.40744',
  ),
  4404 => 
  array (
    'city' => 'Chilmāri',
    'region' => '87',
    'country' => 'BD',
    'latitude' => '25.55592',
    'longitude' => '89.67152',
  ),
  4405 => 
  array (
    'city' => 'Chhāgalnāiya',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '23.03',
    'longitude' => '91.50694',
  ),
  4406 => 
  array (
    'city' => 'Lālmohan',
    'region' => '85',
    'country' => 'BD',
    'latitude' => '22.3384',
    'longitude' => '90.7419',
  ),
  4407 => 
  array (
    'city' => 'Khagrāchari',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '23.1',
    'longitude' => '91.96667',
  ),
  4408 => 
  array (
    'city' => 'Chhātak',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '25.03333',
    'longitude' => '91.66667',
  ),
  4409 => 
  array (
    'city' => 'Bhātpāra Abhaynagar',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '23.01531',
    'longitude' => '89.4432',
  ),
  4410 => 
  array (
    'city' => 'Bherāmāra',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '24.0232',
    'longitude' => '88.9925',
  ),
  4411 => 
  array (
    'city' => 'Bhairab Bāzār',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.06667',
    'longitude' => '90.96667',
  ),
  4412 => 
  array (
    'city' => 'Bāndarban',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '22.1965',
    'longitude' => '92.2262',
  ),
  4413 => 
  array (
    'city' => 'Kālia',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '23.0396',
    'longitude' => '89.6328',
  ),
  4414 => 
  array (
    'city' => 'Baniachang',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.51667',
    'longitude' => '91.36667',
  ),
  4415 => 
  array (
    'city' => 'Bājitpur',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.21667',
    'longitude' => '90.95',
  ),
  4416 => 
  array (
    'city' => 'Badarganj',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '25.67403',
    'longitude' => '89.0549',
  ),
  4417 => 
  array (
    'city' => 'Narail',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '23.16667',
    'longitude' => '89.5',
  ),
  4418 => 
  array (
    'city' => 'Tungipāra',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '22.9',
    'longitude' => '89.91667',
  ),
  4419 => 
  array (
    'city' => 'Sarishābāri',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.73333',
    'longitude' => '89.83333',
  ),
  4420 => 
  array (
    'city' => 'Sakhipur',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.3',
    'longitude' => '90.18333',
  ),
  4421 => 
  array (
    'city' => 'Raojān',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '22.53702',
    'longitude' => '91.91984',
  ),
  4422 => 
  array (
    'city' => 'Phultala',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '22.7',
    'longitude' => '89.51667',
  ),
  4423 => 
  array (
    'city' => 'Pālang',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '23.21667',
    'longitude' => '90.35',
  ),
  4424 => 
  array (
    'city' => 'Pār Naogaon',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '24.80287',
    'longitude' => '88.95084',
  ),
  4425 => 
  array (
    'city' => 'Nabīnagar',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '23.89167',
    'longitude' => '90.97333',
  ),
  4426 => 
  array (
    'city' => 'Lakshmīpur',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '22.95',
    'longitude' => '90.83333',
  ),
  4427 => 
  array (
    'city' => 'Kesabpur',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '22.91667',
    'longitude' => '89.21667',
  ),
  4428 => 
  array (
    'city' => 'Hājīganj',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '23.25111',
    'longitude' => '90.85917',
  ),
  4429 => 
  array (
    'city' => 'Farīdpur',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '23.6',
    'longitude' => '89.83333',
  ),
  4430 => 
  array (
    'city' => 'Dinājpur',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '25.62715',
    'longitude' => '88.63864',
  ),
  4431 => 
  array (
    'city' => 'Uttar Char Fasson',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '22.23322',
    'longitude' => '90.71323',
  ),
  4432 => 
  array (
    'city' => 'Chittagong',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '22.33306',
    'longitude' => '91.83639',
  ),
  4433 => 
  array (
    'city' => 'Char Bhadrāsan',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '23.31667',
    'longitude' => '90.21667',
  ),
  4434 => 
  array (
    'city' => 'Bera',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.08333',
    'longitude' => '89.61667',
  ),
  4435 => 
  array (
    'city' => 'Burhānuddin',
    'region' => '85',
    'country' => 'BD',
    'latitude' => '22.49184',
    'longitude' => '90.72346',
  ),
  4436 => 
  array (
    'city' => 'Sātkania',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '22.0796',
    'longitude' => '92.0572',
  ),
  4437 => 
  array (
    'city' => 'Cox’s Bāzār',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '21.45324',
    'longitude' => '91.97977',
  ),
  4438 => 
  array (
    'city' => 'Khulna',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '22.81348',
    'longitude' => '89.56723',
  ),
  4439 => 
  array (
    'city' => 'Bhola',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '22.68333',
    'longitude' => '90.65',
  ),
  4440 => 
  array (
    'city' => 'Barisāl',
    'region' => '85',
    'country' => 'BD',
    'latitude' => '22.70194',
    'longitude' => '90.37111',
  ),
  4441 => 
  array (
    'city' => 'Jessore',
    'region' => '82',
    'country' => 'BD',
    'latitude' => '23.16869',
    'longitude' => '89.21315',
  ),
  4442 => 
  array (
    'city' => 'Pābna',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24',
    'longitude' => '89.25',
  ),
  4443 => 
  array (
    'city' => 'Tāngāil',
    'region' => '00',
    'country' => 'BD',
    'latitude' => '24.25',
    'longitude' => '89.91667',
  ),
  4444 => 
  array (
    'city' => 'Bogra',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '24.85',
    'longitude' => '89.36667',
  ),
  4445 => 
  array (
    'city' => 'Pīrgaaj',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '25.8604',
    'longitude' => '88.3635',
  ),
  4446 => 
  array (
    'city' => 'Nawābganj',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '24.59112',
    'longitude' => '88.27102',
  ),
  4447 => 
  array (
    'city' => 'Mādārīpur',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '23.17528',
    'longitude' => '90.20722',
  ),
  4448 => 
  array (
    'city' => 'Sherpur',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '25.01881',
    'longitude' => '90.01751',
  ),
  4449 => 
  array (
    'city' => 'Kishorganj',
    'region' => '81',
    'country' => 'BD',
    'latitude' => '24.43333',
    'longitude' => '90.76667',
  ),
  4450 => 
  array (
    'city' => 'Manikchari',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '22.8408',
    'longitude' => '91.844',
  ),
  4451 => 
  array (
    'city' => 'Bhāndāria',
    'region' => '85',
    'country' => 'BD',
    'latitude' => '22.4861',
    'longitude' => '90.0609',
  ),
  4452 => 
  array (
    'city' => 'Fatikchari',
    'region' => '84',
    'country' => 'BD',
    'latitude' => '22.68726',
    'longitude' => '91.7853',
  ),
  4453 => 
  array (
    'city' => 'Saidpur',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '25.77769',
    'longitude' => '88.89169',
  ),
  4454 => 
  array (
    'city' => 'Gaibandha',
    'region' => '83',
    'country' => 'BD',
    'latitude' => '25.3293',
    'longitude' => '89.5438',
  ),
  4455 => 
  array (
    'city' => 'Zwijndrecht',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.21979',
    'longitude' => '4.32664',
  ),
  4456 => 
  array (
    'city' => 'Zwevegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.81268',
    'longitude' => '3.33848',
  ),
  4457 => 
  array (
    'city' => 'Zutendaal',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.93306',
    'longitude' => '5.5753',
  ),
  4458 => 
  array (
    'city' => 'Zulte',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.91954',
    'longitude' => '3.44859',
  ),
  4459 => 
  array (
    'city' => 'Zuienkerke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.26511',
    'longitude' => '3.15506',
  ),
  4460 => 
  array (
    'city' => 'Zoutleeuw',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.83316',
    'longitude' => '5.10376',
  ),
  4461 => 
  array (
    'city' => 'Zottegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.86956',
    'longitude' => '3.81052',
  ),
  4462 => 
  array (
    'city' => 'Zonnebeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.8726',
    'longitude' => '2.98725',
  ),
  4463 => 
  array (
    'city' => 'Zonhoven',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.99064',
    'longitude' => '5.36819',
  ),
  4464 => 
  array (
    'city' => 'Zomergem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.11994',
    'longitude' => '3.56496',
  ),
  4465 => 
  array (
    'city' => 'Zoersel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.26825',
    'longitude' => '4.71296',
  ),
  4466 => 
  array (
    'city' => 'Zingem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.90409',
    'longitude' => '3.65305',
  ),
  4467 => 
  array (
    'city' => 'Zemst',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.98318',
    'longitude' => '4.46079',
  ),
  4468 => 
  array (
    'city' => 'Zelzate',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.18963',
    'longitude' => '3.80777',
  ),
  4469 => 
  array (
    'city' => 'Zele',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.06566',
    'longitude' => '4.0403',
  ),
  4470 => 
  array (
    'city' => 'Zeebrugge',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.32902',
    'longitude' => '3.18188',
  ),
  4471 => 
  array (
    'city' => 'Zedelgem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.14236',
    'longitude' => '3.1368',
  ),
  4472 => 
  array (
    'city' => 'Zaventem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.88365',
    'longitude' => '4.47298',
  ),
  4473 => 
  array (
    'city' => 'Zandhoven',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.21488',
    'longitude' => '4.66164',
  ),
  4474 => 
  array (
    'city' => 'Yvoir',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.3279',
    'longitude' => '4.88059',
  ),
  4475 => 
  array (
    'city' => 'Wuustwezel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.39214',
    'longitude' => '4.59546',
  ),
  4476 => 
  array (
    'city' => 'Wommelgem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.20452',
    'longitude' => '4.5225',
  ),
  4477 => 
  array (
    'city' => 'Wingene',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.05782',
    'longitude' => '3.27359',
  ),
  4478 => 
  array (
    'city' => 'Willebroek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.06041',
    'longitude' => '4.36019',
  ),
  4479 => 
  array (
    'city' => 'Wijnegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.22787',
    'longitude' => '4.51895',
  ),
  4480 => 
  array (
    'city' => 'Wielsbeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.9',
    'longitude' => '3.36667',
  ),
  4481 => 
  array (
    'city' => 'Wichelen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.00526',
    'longitude' => '3.97683',
  ),
  4482 => 
  array (
    'city' => 'Wezembeek-Oppem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.8395',
    'longitude' => '4.49427',
  ),
  4483 => 
  array (
    'city' => 'Wevelgem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.8',
    'longitude' => '3.16667',
  ),
  4484 => 
  array (
    'city' => 'Wetteren',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.00526',
    'longitude' => '3.88341',
  ),
  4485 => 
  array (
    'city' => 'Westerlo',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09049',
    'longitude' => '4.91544',
  ),
  4486 => 
  array (
    'city' => 'Wervik',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.78069',
    'longitude' => '3.03854',
  ),
  4487 => 
  array (
    'city' => 'Wenduine',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.2983',
    'longitude' => '3.08213',
  ),
  4488 => 
  array (
    'city' => 'Wemmel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.90812',
    'longitude' => '4.30613',
  ),
  4489 => 
  array (
    'city' => 'Wellin',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.08133',
    'longitude' => '5.11413',
  ),
  4490 => 
  array (
    'city' => 'Wellen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.84096',
    'longitude' => '5.33867',
  ),
  4491 => 
  array (
    'city' => 'Welkenraedt',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.6605',
    'longitude' => '5.97034',
  ),
  4492 => 
  array (
    'city' => 'Wavre',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71717',
    'longitude' => '4.60138',
  ),
  4493 => 
  array (
    'city' => 'Waterloo',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71255',
    'longitude' => '4.4014',
  ),
  4494 => 
  array (
    'city' => 'Wasseiges',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.62186',
    'longitude' => '5.00528',
  ),
  4495 => 
  array (
    'city' => 'Waremme',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.6976',
    'longitude' => '5.25524',
  ),
  4496 => 
  array (
    'city' => 'Waregem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.88898',
    'longitude' => '3.42756',
  ),
  4497 => 
  array (
    'city' => 'Wanze',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.53907',
    'longitude' => '5.20846',
  ),
  4498 => 
  array (
    'city' => 'Walhain-Saint-Paul',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.62627',
    'longitude' => '4.69837',
  ),
  4499 => 
  array (
    'city' => 'Walcourt',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.25401',
    'longitude' => '4.43796',
  ),
  4500 => 
  array (
    'city' => 'Waimes',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.41488',
    'longitude' => '6.11207',
  ),
  4501 => 
  array (
    'city' => 'Wachtebeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.16852',
    'longitude' => '3.87183',
  ),
  4502 => 
  array (
    'city' => 'Waasmunster',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.10572',
    'longitude' => '4.08573',
  ),
  4503 => 
  array (
    'city' => 'Waarschoot',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.1525',
    'longitude' => '3.605',
  ),
  4504 => 
  array (
    'city' => 'Vosselaar',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.30856',
    'longitude' => '4.8896',
  ),
  4505 => 
  array (
    'city' => 'Vorselaar',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.20243',
    'longitude' => '4.77259',
  ),
  4506 => 
  array (
    'city' => 'Visé',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.7376',
    'longitude' => '5.69907',
  ),
  4507 => 
  array (
    'city' => 'Virton',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.56824',
    'longitude' => '5.53259',
  ),
  4508 => 
  array (
    'city' => 'Vilvoorde',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.92814',
    'longitude' => '4.42938',
  ),
  4509 => 
  array (
    'city' => 'Villers-le-Bouillet',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.57708',
    'longitude' => '5.25945',
  ),
  4510 => 
  array (
    'city' => 'Villers-la-Ville',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.56667',
    'longitude' => '4.51667',
  ),
  4511 => 
  array (
    'city' => 'Vielsalm',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.28472',
    'longitude' => '5.91861',
  ),
  4512 => 
  array (
    'city' => 'Veurne',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.07231',
    'longitude' => '2.66238',
  ),
  4513 => 
  array (
    'city' => 'Verviers',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.58907',
    'longitude' => '5.86241',
  ),
  4514 => 
  array (
    'city' => 'Verlaine',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.60743',
    'longitude' => '5.3174',
  ),
  4515 => 
  array (
    'city' => 'Vaux-sur-Sûre',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.90111',
    'longitude' => '5.56553',
  ),
  4516 => 
  array (
    'city' => 'Turnhout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.32254',
    'longitude' => '4.94471',
  ),
  4517 => 
  array (
    'city' => 'Tubize',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.69059',
    'longitude' => '4.2009',
  ),
  4518 => 
  array (
    'city' => 'Trooz',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.57026',
    'longitude' => '5.69521',
  ),
  4519 => 
  array (
    'city' => 'Trois-Ponts',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.37128',
    'longitude' => '5.87146',
  ),
  4520 => 
  array (
    'city' => 'Tremelo',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.99231',
    'longitude' => '4.70807',
  ),
  4521 => 
  array (
    'city' => 'Tournai',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.60715',
    'longitude' => '3.38932',
  ),
  4522 => 
  array (
    'city' => 'Torhout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.0656',
    'longitude' => '3.10085',
  ),
  4523 => 
  array (
    'city' => 'Tongeren',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.78054',
    'longitude' => '5.46484',
  ),
  4524 => 
  array (
    'city' => 'Tintigny',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.68326',
    'longitude' => '5.51349',
  ),
  4525 => 
  array (
    'city' => 'Tinlot',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.47493',
    'longitude' => '5.37755',
  ),
  4526 => 
  array (
    'city' => 'Tienen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.80744',
    'longitude' => '4.9378',
  ),
  4527 => 
  array (
    'city' => 'Tielt',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.99931',
    'longitude' => '3.32707',
  ),
  4528 => 
  array (
    'city' => 'Thuin',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.33933',
    'longitude' => '4.28604',
  ),
  4529 => 
  array (
    'city' => 'Theux',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.53323',
    'longitude' => '5.81245',
  ),
  4530 => 
  array (
    'city' => 'Tessenderlo',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.06513',
    'longitude' => '5.08856',
  ),
  4531 => 
  array (
    'city' => 'Tervuren',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.82372',
    'longitude' => '4.51418',
  ),
  4532 => 
  array (
    'city' => 'Ternat',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.86654',
    'longitude' => '4.16682',
  ),
  4533 => 
  array (
    'city' => 'Tenneville',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.09501',
    'longitude' => '5.52894',
  ),
  4534 => 
  array (
    'city' => 'Temse',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.12794',
    'longitude' => '4.21372',
  ),
  4535 => 
  array (
    'city' => 'Tellin',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.08038',
    'longitude' => '5.21638',
  ),
  4536 => 
  array (
    'city' => 'Stoumont',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.40667',
    'longitude' => '5.80838',
  ),
  4537 => 
  array (
    'city' => 'Stekene',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.2099',
    'longitude' => '4.0365',
  ),
  4538 => 
  array (
    'city' => 'Steenokkerzeel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.91851',
    'longitude' => '4.50989',
  ),
  4539 => 
  array (
    'city' => 'Stavelot',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.395',
    'longitude' => '5.93124',
  ),
  4540 => 
  array (
    'city' => 'Staden',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.97456',
    'longitude' => '3.01468',
  ),
  4541 => 
  array (
    'city' => 'Stabroek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.33189',
    'longitude' => '4.37127',
  ),
  4542 => 
  array (
    'city' => 'Sprimont',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.50922',
    'longitude' => '5.6595',
  ),
  4543 => 
  array (
    'city' => 'Spa',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.48375',
    'longitude' => '5.86674',
  ),
  4544 => 
  array (
    'city' => 'Soumagne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.61385',
    'longitude' => '5.74679',
  ),
  4545 => 
  array (
    'city' => 'Somme-Leuze',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.33699',
    'longitude' => '5.36705',
  ),
  4546 => 
  array (
    'city' => 'Sombreffe',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.52865',
    'longitude' => '4.60087',
  ),
  4547 => 
  array (
    'city' => 'Soignies',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.57904',
    'longitude' => '4.07129',
  ),
  4548 => 
  array (
    'city' => 'Sint-Truiden',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.81679',
    'longitude' => '5.18647',
  ),
  4549 => 
  array (
    'city' => 'Sint-Pieters-Leeuw',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.77926',
    'longitude' => '4.24355',
  ),
  4550 => 
  array (
    'city' => 'Sint-Niklaas',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.16509',
    'longitude' => '4.1437',
  ),
  4551 => 
  array (
    'city' => 'Sint-Martens-Lennik',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.81158',
    'longitude' => '4.16965',
  ),
  4552 => 
  array (
    'city' => 'Sint-Martens-Latem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.01459',
    'longitude' => '3.63779',
  ),
  4553 => 
  array (
    'city' => 'Sint-Maria-Lierde',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.82172',
    'longitude' => '3.84814',
  ),
  4554 => 
  array (
    'city' => 'Sint-Lievens-Houtem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.9197',
    'longitude' => '3.86225',
  ),
  4555 => 
  array (
    'city' => 'Sint-Laureins',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.24202',
    'longitude' => '3.52441',
  ),
  4556 => 
  array (
    'city' => 'Sint-Katelijne-Waver',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.06691',
    'longitude' => '4.53469',
  ),
  4557 => 
  array (
    'city' => 'Sint-Gillis-Waas',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.21914',
    'longitude' => '4.12374',
  ),
  4558 => 
  array (
    'city' => 'Sint-Genesius-Rode',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.74645',
    'longitude' => '4.35754',
  ),
  4559 => 
  array (
    'city' => 'Sint-Amands',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.05645',
    'longitude' => '4.20957',
  ),
  4560 => 
  array (
    'city' => 'Silly',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.64877',
    'longitude' => '3.92363',
  ),
  4561 => 
  array (
    'city' => 'Seraing',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.58362',
    'longitude' => '5.50115',
  ),
  4562 => 
  array (
    'city' => 'Seneffe',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.53134',
    'longitude' => '4.26301',
  ),
  4563 => 
  array (
    'city' => 'Schoten',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.25251',
    'longitude' => '4.50268',
  ),
  4564 => 
  array (
    'city' => 'Schilde',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.24107',
    'longitude' => '4.58336',
  ),
  4565 => 
  array (
    'city' => 'Schelle',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.12615',
    'longitude' => '4.34114',
  ),
  4566 => 
  array (
    'city' => 'Saint-Yvon',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.74335',
    'longitude' => '2.90992',
  ),
  4567 => 
  array (
    'city' => 'Saint-Vith',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.28146',
    'longitude' => '6.12724',
  ),
  4568 => 
  array (
    'city' => 'Saint-Nicolas',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.62837',
    'longitude' => '5.53243',
  ),
  4569 => 
  array (
    'city' => 'Saint-Léger',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.61196',
    'longitude' => '5.65688',
  ),
  4570 => 
  array (
    'city' => 'Saint-Hubert',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.02668',
    'longitude' => '5.37401',
  ),
  4571 => 
  array (
    'city' => 'Saint-Ghislain',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.44816',
    'longitude' => '3.81886',
  ),
  4572 => 
  array (
    'city' => 'Sainte-Ode',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.08333',
    'longitude' => '5.53333',
  ),
  4573 => 
  array (
    'city' => 'Rumst',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.08153',
    'longitude' => '4.42217',
  ),
  4574 => 
  array (
    'city' => 'Rumes',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.5545',
    'longitude' => '3.30535',
  ),
  4575 => 
  array (
    'city' => 'Ruiselede',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.04039',
    'longitude' => '3.39416',
  ),
  4576 => 
  array (
    'city' => 'Rouvroy',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.53771',
    'longitude' => '5.49031',
  ),
  4577 => 
  array (
    'city' => 'Rotselaar',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.95302',
    'longitude' => '4.71665',
  ),
  4578 => 
  array (
    'city' => 'Ronse',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.74574',
    'longitude' => '3.6005',
  ),
  4579 => 
  array (
    'city' => 'Roeulx',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.50365',
    'longitude' => '4.11163',
  ),
  4580 => 
  array (
    'city' => 'Roeselare',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.94653',
    'longitude' => '3.12269',
  ),
  4581 => 
  array (
    'city' => 'Rochefort',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.1631',
    'longitude' => '5.2216',
  ),
  4582 => 
  array (
    'city' => 'Rixensart',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71229',
    'longitude' => '4.52529',
  ),
  4583 => 
  array (
    'city' => 'Rijkevorsel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.34795',
    'longitude' => '4.76053',
  ),
  4584 => 
  array (
    'city' => 'Riemst',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.80995',
    'longitude' => '5.60131',
  ),
  4585 => 
  array (
    'city' => 'Retie',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.26652',
    'longitude' => '5.08242',
  ),
  4586 => 
  array (
    'city' => 'Rendeux',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.23422',
    'longitude' => '5.50414',
  ),
  4587 => 
  array (
    'city' => 'Remicourt',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.68069',
    'longitude' => '5.32785',
  ),
  4588 => 
  array (
    'city' => 'Rebecq-Rognon',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.65147',
    'longitude' => '4.10683',
  ),
  4589 => 
  array (
    'city' => 'Ravels',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.37274',
    'longitude' => '4.9921',
  ),
  4590 => 
  array (
    'city' => 'Ranst',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.18983',
    'longitude' => '4.56533',
  ),
  4591 => 
  array (
    'city' => 'Ramillies',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.63395',
    'longitude' => '4.90119',
  ),
  4592 => 
  array (
    'city' => 'Raeren',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.6672',
    'longitude' => '6.11535',
  ),
  4593 => 
  array (
    'city' => 'Quiévrain',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.40737',
    'longitude' => '3.68351',
  ),
  4594 => 
  array (
    'city' => 'Quévy-le-Petit',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.36879',
    'longitude' => '3.93602',
  ),
  4595 => 
  array (
    'city' => 'Quaregnon',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.44067',
    'longitude' => '3.8653',
  ),
  4596 => 
  array (
    'city' => 'Puurs',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.07409',
    'longitude' => '4.28844',
  ),
  4597 => 
  array (
    'city' => 'Putte',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.05337',
    'longitude' => '4.63263',
  ),
  4598 => 
  array (
    'city' => 'Profondeville',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.37581',
    'longitude' => '4.86506',
  ),
  4599 => 
  array (
    'city' => 'Poperinge',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.85386',
    'longitude' => '2.72659',
  ),
  4600 => 
  array (
    'city' => 'Pont-à-Celles',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.50518',
    'longitude' => '4.36887',
  ),
  4601 => 
  array (
    'city' => 'Plombières',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.73656',
    'longitude' => '5.95922',
  ),
  4602 => 
  array (
    'city' => 'Pittem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.99279',
    'longitude' => '3.26317',
  ),
  4603 => 
  array (
    'city' => 'Philippeville',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.19612',
    'longitude' => '4.54374',
  ),
  4604 => 
  array (
    'city' => 'Perwez',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.62426',
    'longitude' => '4.81354',
  ),
  4605 => 
  array (
    'city' => 'Péruwelz',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.50819',
    'longitude' => '3.59373',
  ),
  4606 => 
  array (
    'city' => 'Perre',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.88914',
    'longitude' => '3.86098',
  ),
  4607 => 
  array (
    'city' => 'Pepinster',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.57375',
    'longitude' => '5.8049',
  ),
  4608 => 
  array (
    'city' => 'Pepingen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.75922',
    'longitude' => '4.15983',
  ),
  4609 => 
  array (
    'city' => 'Peer',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.1303',
    'longitude' => '5.45952',
  ),
  4610 => 
  array (
    'city' => 'Pecq',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.68619',
    'longitude' => '3.33789',
  ),
  4611 => 
  array (
    'city' => 'Paliseul',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.90395',
    'longitude' => '5.13537',
  ),
  4612 => 
  array (
    'city' => 'Overpelt',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.21038',
    'longitude' => '5.41557',
  ),
  4613 => 
  array (
    'city' => 'Overijse',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.77436',
    'longitude' => '4.53461',
  ),
  4614 => 
  array (
    'city' => 'Oupeye',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71184',
    'longitude' => '5.6468',
  ),
  4615 => 
  array (
    'city' => 'Ouffet',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.4387',
    'longitude' => '5.4657',
  ),
  4616 => 
  array (
    'city' => 'Oud-Turnhout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.31978',
    'longitude' => '4.9841',
  ),
  4617 => 
  array (
    'city' => 'Oud-Heverlee',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.83522',
    'longitude' => '4.66421',
  ),
  4618 => 
  array (
    'city' => 'Oudenburg',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.18489',
    'longitude' => '3.00035',
  ),
  4619 => 
  array (
    'city' => 'Oudenaarde',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.85168',
    'longitude' => '3.60891',
  ),
  4620 => 
  array (
    'city' => 'Ottignies',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.66535',
    'longitude' => '4.56679',
  ),
  4621 => 
  array (
    'city' => 'Oreye',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71749',
    'longitude' => '5.3488',
  ),
  4622 => 
  array (
    'city' => 'Opwijk',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.96724',
    'longitude' => '4.18442',
  ),
  4623 => 
  array (
    'city' => 'Opglabbeek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.04258',
    'longitude' => '5.58346',
  ),
  4624 => 
  array (
    'city' => 'Oostrozebeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.92093',
    'longitude' => '3.33799',
  ),
  4625 => 
  array (
    'city' => 'Oostkamp',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.15432',
    'longitude' => '3.23128',
  ),
  4626 => 
  array (
    'city' => 'Oosterzele',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.95261',
    'longitude' => '3.79826',
  ),
  4627 => 
  array (
    'city' => 'Oostende',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.22339',
    'longitude' => '2.91185',
  ),
  4628 => 
  array (
    'city' => 'Onhaye',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.24148',
    'longitude' => '4.84069',
  ),
  4629 => 
  array (
    'city' => 'Olne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.58994',
    'longitude' => '5.74662',
  ),
  4630 => 
  array (
    'city' => 'Olen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.14391',
    'longitude' => '4.8598',
  ),
  4631 => 
  array (
    'city' => 'Ohey',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.4357',
    'longitude' => '5.12375',
  ),
  4632 => 
  array (
    'city' => 'Nivelles',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.59833',
    'longitude' => '4.32848',
  ),
  4633 => 
  array (
    'city' => 'Ninove',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.82776',
    'longitude' => '4.02657',
  ),
  4634 => 
  array (
    'city' => 'Nijlen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.16096',
    'longitude' => '4.67008',
  ),
  4635 => 
  array (
    'city' => 'Nieuwpoort',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.13008',
    'longitude' => '2.75134',
  ),
  4636 => 
  array (
    'city' => 'Nieuwerkerken',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.8638',
    'longitude' => '5.19467',
  ),
  4637 => 
  array (
    'city' => 'Niel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.11096',
    'longitude' => '4.33428',
  ),
  4638 => 
  array (
    'city' => 'Nevele',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.03531',
    'longitude' => '3.54574',
  ),
  4639 => 
  array (
    'city' => 'Neufchâteau',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.84074',
    'longitude' => '5.43535',
  ),
  4640 => 
  array (
    'city' => 'Neerpelt',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.22807',
    'longitude' => '5.4427',
  ),
  4641 => 
  array (
    'city' => 'Nazareth',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.95686',
    'longitude' => '3.59426',
  ),
  4642 => 
  array (
    'city' => 'Nassogne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.12849',
    'longitude' => '5.34274',
  ),
  4643 => 
  array (
    'city' => 'Nandrin',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.50674',
    'longitude' => '5.41905',
  ),
  4644 => 
  array (
    'city' => 'Namur',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.4669',
    'longitude' => '4.86746',
  ),
  4645 => 
  array (
    'city' => 'Musson',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.55681',
    'longitude' => '5.69952',
  ),
  4646 => 
  array (
    'city' => 'Mouscron',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.74497',
    'longitude' => '3.20639',
  ),
  4647 => 
  array (
    'city' => 'Mortsel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.16697',
    'longitude' => '4.45127',
  ),
  4648 => 
  array (
    'city' => 'Morlanwelz-Mariemont',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.45502',
    'longitude' => '4.24519',
  ),
  4649 => 
  array (
    'city' => 'Moorslede',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.8919',
    'longitude' => '3.06117',
  ),
  4650 => 
  array (
    'city' => 'Mont-Saint-Guibert',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.63427',
    'longitude' => '4.61061',
  ),
  4651 => 
  array (
    'city' => 'Mons',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.45413',
    'longitude' => '3.95229',
  ),
  4652 => 
  array (
    'city' => 'Momignies',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.02968',
    'longitude' => '4.16477',
  ),
  4653 => 
  array (
    'city' => 'Mol',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.19188',
    'longitude' => '5.11662',
  ),
  4654 => 
  array (
    'city' => 'Moerbeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.17409',
    'longitude' => '3.93001',
  ),
  4655 => 
  array (
    'city' => 'Modave',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.44614',
    'longitude' => '5.29532',
  ),
  4656 => 
  array (
    'city' => 'Middelkerke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.18532',
    'longitude' => '2.82077',
  ),
  4657 => 
  array (
    'city' => 'Meulebeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.95136',
    'longitude' => '3.28804',
  ),
  4658 => 
  array (
    'city' => 'Mettet',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.32119',
    'longitude' => '4.66232',
  ),
  4659 => 
  array (
    'city' => 'Messancy',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.592',
    'longitude' => '5.81878',
  ),
  4660 => 
  array (
    'city' => 'Merksplas',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.35851',
    'longitude' => '4.86513',
  ),
  4661 => 
  array (
    'city' => 'Merelbeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.99447',
    'longitude' => '3.74621',
  ),
  4662 => 
  array (
    'city' => 'Merchtem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.95129',
    'longitude' => '4.23197',
  ),
  4663 => 
  array (
    'city' => 'Merbes-le-Château',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.3245',
    'longitude' => '4.1649',
  ),
  4664 => 
  array (
    'city' => 'Menen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.79722',
    'longitude' => '3.12245',
  ),
  4665 => 
  array (
    'city' => 'Melle',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.00232',
    'longitude' => '3.80526',
  ),
  4666 => 
  array (
    'city' => 'Meix-devant-Virton',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.60581',
    'longitude' => '5.48045',
  ),
  4667 => 
  array (
    'city' => 'Meise',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.93934',
    'longitude' => '4.32655',
  ),
  4668 => 
  array (
    'city' => 'Meerhout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.1321',
    'longitude' => '5.07842',
  ),
  4669 => 
  array (
    'city' => 'Mechelen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.02574',
    'longitude' => '4.47762',
  ),
  4670 => 
  array (
    'city' => 'Martelange',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.83195',
    'longitude' => '5.73655',
  ),
  4671 => 
  array (
    'city' => 'Marchin',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.46707',
    'longitude' => '5.2428',
  ),
  4672 => 
  array (
    'city' => 'Marche-en-Famenne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.22678',
    'longitude' => '5.34416',
  ),
  4673 => 
  array (
    'city' => 'Manhay',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.29219',
    'longitude' => '5.67562',
  ),
  4674 => 
  array (
    'city' => 'Manage',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.50312',
    'longitude' => '4.23589',
  ),
  4675 => 
  array (
    'city' => 'Malmédy',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.42686',
    'longitude' => '6.02794',
  ),
  4676 => 
  array (
    'city' => 'Maldegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.20737',
    'longitude' => '3.44511',
  ),
  4677 => 
  array (
    'city' => 'Machelen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.91061',
    'longitude' => '4.44174',
  ),
  4678 => 
  array (
    'city' => 'Maasmechelen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.96545',
    'longitude' => '5.69452',
  ),
  4679 => 
  array (
    'city' => 'Maaseik',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09802',
    'longitude' => '5.78379',
  ),
  4680 => 
  array (
    'city' => 'Lummen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.98772',
    'longitude' => '5.19121',
  ),
  4681 => 
  array (
    'city' => 'Lubbeek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.88278',
    'longitude' => '4.83896',
  ),
  4682 => 
  array (
    'city' => 'Lovendegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.10168',
    'longitude' => '3.61298',
  ),
  4683 => 
  array (
    'city' => 'Louvain-la-Neuve',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.66829',
    'longitude' => '4.61443',
  ),
  4684 => 
  array (
    'city' => 'Lontzen',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.68126',
    'longitude' => '6.00712',
  ),
  4685 => 
  array (
    'city' => 'Londerzeel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.00468',
    'longitude' => '4.30304',
  ),
  4686 => 
  array (
    'city' => 'Lommel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.23074',
    'longitude' => '5.31349',
  ),
  4687 => 
  array (
    'city' => 'Lokeren',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.10364',
    'longitude' => '3.99339',
  ),
  4688 => 
  array (
    'city' => 'Lochristi',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09644',
    'longitude' => '3.83194',
  ),
  4689 => 
  array (
    'city' => 'Lobbes',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.3522',
    'longitude' => '4.26836',
  ),
  4690 => 
  array (
    'city' => 'Lint',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.12708',
    'longitude' => '4.49669',
  ),
  4691 => 
  array (
    'city' => 'Linkebeek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.76781',
    'longitude' => '4.33688',
  ),
  4692 => 
  array (
    'city' => 'Lincent',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71222',
    'longitude' => '5.03654',
  ),
  4693 => 
  array (
    'city' => 'Limbourg',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.61222',
    'longitude' => '5.9412',
  ),
  4694 => 
  array (
    'city' => 'Lille',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.24197',
    'longitude' => '4.82312',
  ),
  4695 => 
  array (
    'city' => 'Lier',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.13128',
    'longitude' => '4.57042',
  ),
  4696 => 
  array (
    'city' => 'Lierneux',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.28477',
    'longitude' => '5.79236',
  ),
  4697 => 
  array (
    'city' => 'Liège',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.63373',
    'longitude' => '5.56749',
  ),
  4698 => 
  array (
    'city' => 'Liedekerke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.86892',
    'longitude' => '4.08743',
  ),
  4699 => 
  array (
    'city' => 'Lichtervelde',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.03333',
    'longitude' => '3.15',
  ),
  4700 => 
  array (
    'city' => 'Libin',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.98107',
    'longitude' => '5.25612',
  ),
  4701 => 
  array (
    'city' => 'Leuven',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.87959',
    'longitude' => '4.70093',
  ),
  4702 => 
  array (
    'city' => 'Lessines',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71104',
    'longitude' => '3.83579',
  ),
  4703 => 
  array (
    'city' => 'Leopoldsburg',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.11667',
    'longitude' => '5.25',
  ),
  4704 => 
  array (
    'city' => 'Lens',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.55696',
    'longitude' => '3.89946',
  ),
  4705 => 
  array (
    'city' => 'Lendelede',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.88626',
    'longitude' => '3.23747',
  ),
  4706 => 
  array (
    'city' => 'Léglise',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.79985',
    'longitude' => '5.53652',
  ),
  4707 => 
  array (
    'city' => 'Ledegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.85785',
    'longitude' => '3.12409',
  ),
  4708 => 
  array (
    'city' => 'Ledeberg',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.03859',
    'longitude' => '3.74458',
  ),
  4709 => 
  array (
    'city' => 'Ledeberg',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.84356',
    'longitude' => '4.09112',
  ),
  4710 => 
  array (
    'city' => 'Lede',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.96626',
    'longitude' => '3.98594',
  ),
  4711 => 
  array (
    'city' => 'Lebbeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.00464',
    'longitude' => '4.13457',
  ),
  4712 => 
  array (
    'city' => 'La Roche-en-Ardenne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.18361',
    'longitude' => '5.57547',
  ),
  4713 => 
  array (
    'city' => 'Landen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.75266',
    'longitude' => '5.082',
  ),
  4714 => 
  array (
    'city' => 'Lanaken',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.89318',
    'longitude' => '5.6468',
  ),
  4715 => 
  array (
    'city' => 'La Louvière',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.48657',
    'longitude' => '4.18785',
  ),
  4716 => 
  array (
    'city' => 'La Hulpe',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.73091',
    'longitude' => '4.48577',
  ),
  4717 => 
  array (
    'city' => 'La Calamine',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71809',
    'longitude' => '6.01107',
  ),
  4718 => 
  array (
    'city' => 'La Bruyère',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.39478',
    'longitude' => '4.61444',
  ),
  4719 => 
  array (
    'city' => 'Laarne',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.03078',
    'longitude' => '3.85077',
  ),
  4720 => 
  array (
    'city' => 'Kuurne',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.85143',
    'longitude' => '3.2824',
  ),
  4721 => 
  array (
    'city' => 'Kruishoutem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.90168',
    'longitude' => '3.52588',
  ),
  4722 => 
  array (
    'city' => 'Kruibeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.17048',
    'longitude' => '4.31444',
  ),
  4723 => 
  array (
    'city' => 'Kraainem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.86155',
    'longitude' => '4.46946',
  ),
  4724 => 
  array (
    'city' => 'Kortrijk',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.82803',
    'longitude' => '3.26487',
  ),
  4725 => 
  array (
    'city' => 'Kortessem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.8589',
    'longitude' => '5.38974',
  ),
  4726 => 
  array (
    'city' => 'Kortenberg',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.88982',
    'longitude' => '4.54353',
  ),
  4727 => 
  array (
    'city' => 'Kortenaken',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.90862',
    'longitude' => '5.05968',
  ),
  4728 => 
  array (
    'city' => 'Kortemark',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.02951',
    'longitude' => '3.04112',
  ),
  4729 => 
  array (
    'city' => 'Kontich',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.13213',
    'longitude' => '4.44706',
  ),
  4730 => 
  array (
    'city' => 'Koksijde',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.11642',
    'longitude' => '2.63772',
  ),
  4731 => 
  array (
    'city' => 'Koekelare',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09047',
    'longitude' => '2.9783',
  ),
  4732 => 
  array (
    'city' => 'Knokke-Heist',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.35',
    'longitude' => '3.26667',
  ),
  4733 => 
  array (
    'city' => 'Knesselare',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.13932',
    'longitude' => '3.41282',
  ),
  4734 => 
  array (
    'city' => 'Kinrooi',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.14543',
    'longitude' => '5.74207',
  ),
  4735 => 
  array (
    'city' => 'Keerbergen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.00295',
    'longitude' => '4.63434',
  ),
  4736 => 
  array (
    'city' => 'Kasterlee',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.24118',
    'longitude' => '4.96651',
  ),
  4737 => 
  array (
    'city' => 'Kaprijke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.2172',
    'longitude' => '3.61519',
  ),
  4738 => 
  array (
    'city' => 'Kapelle-op-den-Bos',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.0097',
    'longitude' => '4.36303',
  ),
  4739 => 
  array (
    'city' => 'Kapellen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.31377',
    'longitude' => '4.43539',
  ),
  4740 => 
  array (
    'city' => 'Kampenhout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.9421',
    'longitude' => '4.55103',
  ),
  4741 => 
  array (
    'city' => 'Kalmthout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.38442',
    'longitude' => '4.47556',
  ),
  4742 => 
  array (
    'city' => 'Jurbise',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.531',
    'longitude' => '3.90942',
  ),
  4743 => 
  array (
    'city' => 'Juprelle',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.7076',
    'longitude' => '5.53127',
  ),
  4744 => 
  array (
    'city' => 'Jodoigne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.72357',
    'longitude' => '4.86914',
  ),
  4745 => 
  array (
    'city' => 'Jalhay',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.55876',
    'longitude' => '5.96764',
  ),
  4746 => 
  array (
    'city' => 'Jabbeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.18185',
    'longitude' => '3.08935',
  ),
  4747 => 
  array (
    'city' => 'Izegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.91396',
    'longitude' => '3.21378',
  ),
  4748 => 
  array (
    'city' => 'Ittre',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.64396',
    'longitude' => '4.26476',
  ),
  4749 => 
  array (
    'city' => 'Ingelmunster',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.92081',
    'longitude' => '3.25571',
  ),
  4750 => 
  array (
    'city' => 'Incourt',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.69151',
    'longitude' => '4.79816',
  ),
  4751 => 
  array (
    'city' => 'Ieper',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.85114',
    'longitude' => '2.88569',
  ),
  4752 => 
  array (
    'city' => 'Ichtegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09572',
    'longitude' => '3.01549',
  ),
  4753 => 
  array (
    'city' => 'Huy',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.51894',
    'longitude' => '5.23284',
  ),
  4754 => 
  array (
    'city' => 'Hulshout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.07451',
    'longitude' => '4.79081',
  ),
  4755 => 
  array (
    'city' => 'Huldenberg',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.78939',
    'longitude' => '4.5831',
  ),
  4756 => 
  array (
    'city' => 'Hove',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.15446',
    'longitude' => '4.4707',
  ),
  4757 => 
  array (
    'city' => 'Houyet',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.18619',
    'longitude' => '5.00762',
  ),
  4758 => 
  array (
    'city' => 'Houthulst',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.97824',
    'longitude' => '2.9505',
  ),
  4759 => 
  array (
    'city' => 'Houthalen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.03427',
    'longitude' => '5.37429',
  ),
  4760 => 
  array (
    'city' => 'Houffalize',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.13343',
    'longitude' => '5.78876',
  ),
  4761 => 
  array (
    'city' => 'Hotton',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.26742',
    'longitude' => '5.44609',
  ),
  4762 => 
  array (
    'city' => 'Hoogstraten',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.40029',
    'longitude' => '4.76034',
  ),
  4763 => 
  array (
    'city' => 'Hooglede',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.98333',
    'longitude' => '3.08333',
  ),
  4764 => 
  array (
    'city' => 'Holsbeek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.92097',
    'longitude' => '4.75747',
  ),
  4765 => 
  array (
    'city' => 'Hoeselt',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.84714',
    'longitude' => '5.48767',
  ),
  4766 => 
  array (
    'city' => 'Hoeilaart',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.7673',
    'longitude' => '4.46835',
  ),
  4767 => 
  array (
    'city' => 'Hoegaarden',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.7756',
    'longitude' => '4.88952',
  ),
  4768 => 
  array (
    'city' => 'Hoboken',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.17611',
    'longitude' => '4.34844',
  ),
  4769 => 
  array (
    'city' => 'Heusden',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.03664',
    'longitude' => '5.28013',
  ),
  4770 => 
  array (
    'city' => 'Herzele',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.88681',
    'longitude' => '3.89014',
  ),
  4771 => 
  array (
    'city' => 'Herve',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.64083',
    'longitude' => '5.79353',
  ),
  4772 => 
  array (
    'city' => 'Herstal',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.66415',
    'longitude' => '5.62346',
  ),
  4773 => 
  array (
    'city' => 'Herselt',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.05159',
    'longitude' => '4.88231',
  ),
  4774 => 
  array (
    'city' => 'Héron',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.54731',
    'longitude' => '5.09774',
  ),
  4775 => 
  array (
    'city' => 'Herne',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.72423',
    'longitude' => '4.03481',
  ),
  4776 => 
  array (
    'city' => 'Herk-de-Stad',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.94013',
    'longitude' => '5.16636',
  ),
  4777 => 
  array (
    'city' => 'Herenthout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.1401',
    'longitude' => '4.75572',
  ),
  4778 => 
  array (
    'city' => 'Herentals',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.17655',
    'longitude' => '4.83248',
  ),
  4779 => 
  array (
    'city' => 'Herent',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.90861',
    'longitude' => '4.67056',
  ),
  4780 => 
  array (
    'city' => 'Herbeumont',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.78086',
    'longitude' => '5.2358',
  ),
  4781 => 
  array (
    'city' => 'Hensies',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.43263',
    'longitude' => '3.68411',
  ),
  4782 => 
  array (
    'city' => 'Hemiksem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.14484',
    'longitude' => '4.33874',
  ),
  4783 => 
  array (
    'city' => 'Helchteren',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.05591',
    'longitude' => '5.38244',
  ),
  4784 => 
  array (
    'city' => 'Heist-op-den-Berg',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.07537',
    'longitude' => '4.72827',
  ),
  4785 => 
  array (
    'city' => 'Heers',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.75383',
    'longitude' => '5.3021',
  ),
  4786 => 
  array (
    'city' => 'Havelange',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.38931',
    'longitude' => '5.23816',
  ),
  4787 => 
  array (
    'city' => 'Hastière-Lavaux',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.21849',
    'longitude' => '4.82446',
  ),
  4788 => 
  array (
    'city' => 'Hasselt',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.93106',
    'longitude' => '5.33781',
  ),
  4789 => 
  array (
    'city' => 'Harelbeke',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.85343',
    'longitude' => '3.30935',
  ),
  4790 => 
  array (
    'city' => 'Hannut',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.67142',
    'longitude' => '5.07898',
  ),
  4791 => 
  array (
    'city' => 'Hamois',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.3402',
    'longitude' => '5.15619',
  ),
  4792 => 
  array (
    'city' => 'Hamoir',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.42675',
    'longitude' => '5.53304',
  ),
  4793 => 
  array (
    'city' => 'Hamme',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09822',
    'longitude' => '4.13705',
  ),
  4794 => 
  array (
    'city' => 'Halle',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.73385',
    'longitude' => '4.23454',
  ),
  4795 => 
  array (
    'city' => 'Halen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.94837',
    'longitude' => '5.11096',
  ),
  4796 => 
  array (
    'city' => 'Habay-la-Vieille',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.72329',
    'longitude' => '5.61999',
  ),
  4797 => 
  array (
    'city' => 'Haaltert',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.90634',
    'longitude' => '4.00093',
  ),
  4798 => 
  array (
    'city' => 'Haacht',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.97737',
    'longitude' => '4.63777',
  ),
  4799 => 
  array (
    'city' => 'Grobbendonk',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.19043',
    'longitude' => '4.73562',
  ),
  4800 => 
  array (
    'city' => 'Grimbergen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.93409',
    'longitude' => '4.37213',
  ),
  4801 => 
  array (
    'city' => 'Grez-Doiceau',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.73901',
    'longitude' => '4.69829',
  ),
  4802 => 
  array (
    'city' => 'Gouvy',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.186',
    'longitude' => '5.93918',
  ),
  4803 => 
  array (
    'city' => 'Gooik',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.79443',
    'longitude' => '4.11378',
  ),
  4804 => 
  array (
    'city' => 'Glabbeek-Zuurbemde',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.87348',
    'longitude' => '4.94442',
  ),
  4805 => 
  array (
    'city' => 'Gistel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.15612',
    'longitude' => '2.96388',
  ),
  4806 => 
  array (
    'city' => 'Gingelom',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.74792',
    'longitude' => '5.13422',
  ),
  4807 => 
  array (
    'city' => 'Gesves',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.40146',
    'longitude' => '5.07457',
  ),
  4808 => 
  array (
    'city' => 'Gerpinnes',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.33789',
    'longitude' => '4.52731',
  ),
  4809 => 
  array (
    'city' => 'Geraardsbergen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.77343',
    'longitude' => '3.88223',
  ),
  4810 => 
  array (
    'city' => 'Gent',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.05',
    'longitude' => '3.71667',
  ),
  4811 => 
  array (
    'city' => 'Genk',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.965',
    'longitude' => '5.50082',
  ),
  4812 => 
  array (
    'city' => 'Genappe',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.61173',
    'longitude' => '4.45152',
  ),
  4813 => 
  array (
    'city' => 'Gembloux',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.56149',
    'longitude' => '4.69889',
  ),
  4814 => 
  array (
    'city' => 'Geetbets',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.89431',
    'longitude' => '5.11199',
  ),
  4815 => 
  array (
    'city' => 'Geer',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.6699',
    'longitude' => '5.17364',
  ),
  4816 => 
  array (
    'city' => 'Geel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.16557',
    'longitude' => '4.98917',
  ),
  4817 => 
  array (
    'city' => 'Gedinne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.98037',
    'longitude' => '4.93674',
  ),
  4818 => 
  array (
    'city' => 'Gavere',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.92917',
    'longitude' => '3.66184',
  ),
  4819 => 
  array (
    'city' => 'Galmaarden',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.75389',
    'longitude' => '3.97121',
  ),
  4820 => 
  array (
    'city' => 'Froidchapelle',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.15106',
    'longitude' => '4.32742',
  ),
  4821 => 
  array (
    'city' => 'Frasnes-lez-Buissenal',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.66783',
    'longitude' => '3.62047',
  ),
  4822 => 
  array (
    'city' => 'Frameries',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.40578',
    'longitude' => '3.89603',
  ),
  4823 => 
  array (
    'city' => 'Sint-Pieters-Voeren',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.73863',
    'longitude' => '5.82224',
  ),
  4824 => 
  array (
    'city' => 'Fosses-la-Ville',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.39517',
    'longitude' => '4.69623',
  ),
  4825 => 
  array (
    'city' => 'Florenville',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.69983',
    'longitude' => '5.3074',
  ),
  4826 => 
  array (
    'city' => 'Florennes',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.25127',
    'longitude' => '4.60636',
  ),
  4827 => 
  array (
    'city' => 'Floreffe',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.43452',
    'longitude' => '4.7596',
  ),
  4828 => 
  array (
    'city' => 'Flobecq',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.73733',
    'longitude' => '3.73876',
  ),
  4829 => 
  array (
    'city' => 'Fleurus',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.48351',
    'longitude' => '4.55006',
  ),
  4830 => 
  array (
    'city' => 'Fléron',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.61516',
    'longitude' => '5.68062',
  ),
  4831 => 
  array (
    'city' => 'Flémalle-Haute',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.59994',
    'longitude' => '5.44471',
  ),
  4832 => 
  array (
    'city' => 'Fexhe-le-Haut-Clocher',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.6654',
    'longitude' => '5.39978',
  ),
  4833 => 
  array (
    'city' => 'Ferrières',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.40157',
    'longitude' => '5.61092',
  ),
  4834 => 
  array (
    'city' => 'Fauvillers',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.85057',
    'longitude' => '5.66717',
  ),
  4835 => 
  array (
    'city' => 'Farciennes',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.43006',
    'longitude' => '4.54152',
  ),
  4836 => 
  array (
    'city' => 'Faimes',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.66252',
    'longitude' => '5.26005',
  ),
  4837 => 
  array (
    'city' => 'Evergem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.1053',
    'longitude' => '3.704',
  ),
  4838 => 
  array (
    'city' => 'Eupen',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.6279',
    'longitude' => '6.03647',
  ),
  4839 => 
  array (
    'city' => 'Étalle',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.6764',
    'longitude' => '5.60201',
  ),
  4840 => 
  array (
    'city' => 'Estinnes-au-Val',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.41016',
    'longitude' => '4.10477',
  ),
  4841 => 
  array (
    'city' => 'Estaimpuis',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.70485',
    'longitude' => '3.26785',
  ),
  4842 => 
  array (
    'city' => 'Essen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.46272',
    'longitude' => '4.45393',
  ),
  4843 => 
  array (
    'city' => 'Esneux',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.53596',
    'longitude' => '5.56775',
  ),
  4844 => 
  array (
    'city' => 'Erquelinnes',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.30334',
    'longitude' => '4.10664',
  ),
  4845 => 
  array (
    'city' => 'Érezée',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.29292',
    'longitude' => '5.55815',
  ),
  4846 => 
  array (
    'city' => 'Engis',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.58156',
    'longitude' => '5.39916',
  ),
  4847 => 
  array (
    'city' => 'Enghien',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.68373',
    'longitude' => '4.03284',
  ),
  4848 => 
  array (
    'city' => 'Ellezelles',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.73512',
    'longitude' => '3.67985',
  ),
  4849 => 
  array (
    'city' => 'Éghezée',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.59076',
    'longitude' => '4.91175',
  ),
  4850 => 
  array (
    'city' => 'Eeklo',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.18703',
    'longitude' => '3.55654',
  ),
  4851 => 
  array (
    'city' => 'Edegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.15662',
    'longitude' => '4.44504',
  ),
  4852 => 
  array (
    'city' => 'Écaussinnes-d\'Enghien',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.56822',
    'longitude' => '4.1658',
  ),
  4853 => 
  array (
    'city' => 'Durbuy',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.35291',
    'longitude' => '5.45631',
  ),
  4854 => 
  array (
    'city' => 'Duffel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09554',
    'longitude' => '4.50903',
  ),
  4855 => 
  array (
    'city' => 'Drogenbos',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.78733',
    'longitude' => '4.31471',
  ),
  4856 => 
  array (
    'city' => 'Dour',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.39583',
    'longitude' => '3.77792',
  ),
  4857 => 
  array (
    'city' => 'Donceel',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.64827',
    'longitude' => '5.32',
  ),
  4858 => 
  array (
    'city' => 'Doische',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.13356',
    'longitude' => '4.73545',
  ),
  4859 => 
  array (
    'city' => 'Dison',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.61004',
    'longitude' => '5.8534',
  ),
  4860 => 
  array (
    'city' => 'Dinant',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.25807',
    'longitude' => '4.91166',
  ),
  4861 => 
  array (
    'city' => 'Dilbeek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.84799',
    'longitude' => '4.25972',
  ),
  4862 => 
  array (
    'city' => 'Diksmuide',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.03248',
    'longitude' => '2.86384',
  ),
  4863 => 
  array (
    'city' => 'Diest',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.98923',
    'longitude' => '5.05062',
  ),
  4864 => 
  array (
    'city' => 'Diepenbeek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.90769',
    'longitude' => '5.41875',
  ),
  4865 => 
  array (
    'city' => 'Destelbergen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.05952',
    'longitude' => '3.79899',
  ),
  4866 => 
  array (
    'city' => 'Dessel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.23855',
    'longitude' => '5.11448',
  ),
  4867 => 
  array (
    'city' => 'De Pinte',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.99339',
    'longitude' => '3.64747',
  ),
  4868 => 
  array (
    'city' => 'De Panne',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09793',
    'longitude' => '2.59368',
  ),
  4869 => 
  array (
    'city' => 'Dentergem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.96429',
    'longitude' => '3.41617',
  ),
  4870 => 
  array (
    'city' => 'Dendermonde',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.02869',
    'longitude' => '4.10106',
  ),
  4871 => 
  array (
    'city' => 'Denderleeuw',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.88506',
    'longitude' => '4.07601',
  ),
  4872 => 
  array (
    'city' => 'Deinze',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.98175',
    'longitude' => '3.53096',
  ),
  4873 => 
  array (
    'city' => 'De Haan',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.27261',
    'longitude' => '3.03446',
  ),
  4874 => 
  array (
    'city' => 'Deerlijk',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.85337',
    'longitude' => '3.35416',
  ),
  4875 => 
  array (
    'city' => 'Daverdisse',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.02161',
    'longitude' => '5.11811',
  ),
  4876 => 
  array (
    'city' => 'Damme',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.25147',
    'longitude' => '3.28144',
  ),
  4877 => 
  array (
    'city' => 'Dalhem',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71315',
    'longitude' => '5.72774',
  ),
  4878 => 
  array (
    'city' => 'Crisnée',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71703',
    'longitude' => '5.39802',
  ),
  4879 => 
  array (
    'city' => 'Couvin',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.05284',
    'longitude' => '4.49495',
  ),
  4880 => 
  array (
    'city' => 'Court-Saint-Étienne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.63378',
    'longitude' => '4.56851',
  ),
  4881 => 
  array (
    'city' => 'Courcelles',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.46379',
    'longitude' => '4.3747',
  ),
  4882 => 
  array (
    'city' => 'Comblain-au-Pont',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.47488',
    'longitude' => '5.57711',
  ),
  4883 => 
  array (
    'city' => 'Colfontaine',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.4141',
    'longitude' => '3.85569',
  ),
  4884 => 
  array (
    'city' => 'Clavier',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.40069',
    'longitude' => '5.35154',
  ),
  4885 => 
  array (
    'city' => 'Ciney',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.29449',
    'longitude' => '5.10015',
  ),
  4886 => 
  array (
    'city' => 'Chiny',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.73833',
    'longitude' => '5.34104',
  ),
  4887 => 
  array (
    'city' => 'Chimay',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.04856',
    'longitude' => '4.31712',
  ),
  4888 => 
  array (
    'city' => 'Chièvres',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.58787',
    'longitude' => '3.80711',
  ),
  4889 => 
  array (
    'city' => 'Chaumont-Gistoux',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.67753',
    'longitude' => '4.7212',
  ),
  4890 => 
  array (
    'city' => 'Chaudfontaine',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.5828',
    'longitude' => '5.6341',
  ),
  4891 => 
  array (
    'city' => 'Châtelet',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.40338',
    'longitude' => '4.52826',
  ),
  4892 => 
  array (
    'city' => 'Chastre-Villeroux-Blanmont',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.60857',
    'longitude' => '4.64198',
  ),
  4893 => 
  array (
    'city' => 'Chasse Royale',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.42842',
    'longitude' => '3.95001',
  ),
  4894 => 
  array (
    'city' => 'Charleroi',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.41136',
    'longitude' => '4.44448',
  ),
  4895 => 
  array (
    'city' => 'Chapelle-lez-Herlaimont',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.4713',
    'longitude' => '4.28227',
  ),
  4896 => 
  array (
    'city' => 'Cerfontaine',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.17047',
    'longitude' => '4.41028',
  ),
  4897 => 
  array (
    'city' => 'Celles',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.71229',
    'longitude' => '3.45733',
  ),
  4898 => 
  array (
    'city' => 'Butgenbach',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.42689',
    'longitude' => '6.20504',
  ),
  4899 => 
  array (
    'city' => 'Burdinne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.58454',
    'longitude' => '5.07663',
  ),
  4900 => 
  array (
    'city' => 'Bullange',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.40731',
    'longitude' => '6.25749',
  ),
  4901 => 
  array (
    'city' => 'Buggenhout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.0159',
    'longitude' => '4.20173',
  ),
  4902 => 
  array (
    'city' => 'Brussels',
    'region' => 'BRU',
    'country' => 'BE',
    'latitude' => '50.85045',
    'longitude' => '4.34878',
  ),
  4903 => 
  array (
    'city' => 'Brunehault',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.50524',
    'longitude' => '4.43209',
  ),
  4904 => 
  array (
    'city' => 'Brugge',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.20892',
    'longitude' => '3.22424',
  ),
  4905 => 
  array (
    'city' => 'Brugelette',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.59577',
    'longitude' => '3.85363',
  ),
  4906 => 
  array (
    'city' => 'Bree',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.14152',
    'longitude' => '5.5969',
  ),
  4907 => 
  array (
    'city' => 'Bredene',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.23489',
    'longitude' => '2.97559',
  ),
  4908 => 
  array (
    'city' => 'Brecht',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.35024',
    'longitude' => '4.63829',
  ),
  4909 => 
  array (
    'city' => 'Brasschaat',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.2912',
    'longitude' => '4.49182',
  ),
  4910 => 
  array (
    'city' => 'Braives',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.61745',
    'longitude' => '5.13302',
  ),
  4911 => 
  array (
    'city' => 'Braine-le-Comte',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.60979',
    'longitude' => '4.14658',
  ),
  4912 => 
  array (
    'city' => 'Braine-le-Château',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.6799',
    'longitude' => '4.27385',
  ),
  4913 => 
  array (
    'city' => 'Braine-l\'Alleud',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.68363',
    'longitude' => '4.36784',
  ),
  4914 => 
  array (
    'city' => 'Boutersem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.83511',
    'longitude' => '4.8345',
  ),
  4915 => 
  array (
    'city' => 'Boussu',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.43417',
    'longitude' => '3.7944',
  ),
  4916 => 
  array (
    'city' => 'Bouillon',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.79324',
    'longitude' => '5.06704',
  ),
  4917 => 
  array (
    'city' => 'Borsbeek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.19661',
    'longitude' => '4.48543',
  ),
  4918 => 
  array (
    'city' => 'Bornem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09716',
    'longitude' => '4.24364',
  ),
  4919 => 
  array (
    'city' => 'Borgloon',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.80505',
    'longitude' => '5.34366',
  ),
  4920 => 
  array (
    'city' => 'Boortmeerbeek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.97929',
    'longitude' => '4.57443',
  ),
  4921 => 
  array (
    'city' => 'Boom',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09242',
    'longitude' => '4.3717',
  ),
  4922 => 
  array (
    'city' => 'Bonheiden',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.02261',
    'longitude' => '4.54714',
  ),
  4923 => 
  array (
    'city' => 'Boechout',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.15959',
    'longitude' => '4.49195',
  ),
  4924 => 
  array (
    'city' => 'Bocholt',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.17337',
    'longitude' => '5.57994',
  ),
  4925 => 
  array (
    'city' => 'Blégny',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.67255',
    'longitude' => '5.72508',
  ),
  4926 => 
  array (
    'city' => 'Blankenberge',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.31306',
    'longitude' => '3.13227',
  ),
  4927 => 
  array (
    'city' => 'Binche',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.41155',
    'longitude' => '4.16469',
  ),
  4928 => 
  array (
    'city' => 'Bilzen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.87325',
    'longitude' => '5.5184',
  ),
  4929 => 
  array (
    'city' => 'Bièvre',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.94086',
    'longitude' => '5.01592',
  ),
  4930 => 
  array (
    'city' => 'Bierbeek',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.82876',
    'longitude' => '4.75949',
  ),
  4931 => 
  array (
    'city' => 'Beyne-Heusay',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.62251',
    'longitude' => '5.66508',
  ),
  4932 => 
  array (
    'city' => 'Beveren',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.21187',
    'longitude' => '4.25633',
  ),
  4933 => 
  array (
    'city' => 'Bever',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.91667',
    'longitude' => '4.31667',
  ),
  4934 => 
  array (
    'city' => 'Bertrix',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.85596',
    'longitude' => '5.25539',
  ),
  4935 => 
  array (
    'city' => 'Bertogne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.08501',
    'longitude' => '5.66839',
  ),
  4936 => 
  array (
    'city' => 'Bertem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.86403',
    'longitude' => '4.62918',
  ),
  4937 => 
  array (
    'city' => 'Bernissart',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.4746',
    'longitude' => '3.64961',
  ),
  4938 => 
  array (
    'city' => 'Berloz',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.69829',
    'longitude' => '5.21236',
  ),
  4939 => 
  array (
    'city' => 'Berlare',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.03333',
    'longitude' => '4',
  ),
  4940 => 
  array (
    'city' => 'Berlaar',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.1176',
    'longitude' => '4.65835',
  ),
  4941 => 
  array (
    'city' => 'Beringen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.04954',
    'longitude' => '5.22606',
  ),
  4942 => 
  array (
    'city' => 'Beloeil',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.55047',
    'longitude' => '3.73484',
  ),
  4943 => 
  array (
    'city' => 'Bekkevoort',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.94074',
    'longitude' => '4.969',
  ),
  4944 => 
  array (
    'city' => 'Begijnendijk',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.01942',
    'longitude' => '4.78377',
  ),
  4945 => 
  array (
    'city' => 'Beersel',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.76589',
    'longitude' => '4.3002',
  ),
  4946 => 
  array (
    'city' => 'Beerse',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.31927',
    'longitude' => '4.85304',
  ),
  4947 => 
  array (
    'city' => 'Beernem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.13981',
    'longitude' => '3.33896',
  ),
  4948 => 
  array (
    'city' => 'Beauvechain',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.78195',
    'longitude' => '4.7718',
  ),
  4949 => 
  array (
    'city' => 'Beauraing',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.11042',
    'longitude' => '4.95554',
  ),
  4950 => 
  array (
    'city' => 'Beaumont',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.23699',
    'longitude' => '4.23926',
  ),
  4951 => 
  array (
    'city' => 'Bastogne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.00347',
    'longitude' => '5.71844',
  ),
  4952 => 
  array (
    'city' => 'Bassenge',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.75883',
    'longitude' => '5.60989',
  ),
  4953 => 
  array (
    'city' => 'Basse Lasne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.69503',
    'longitude' => '4.49218',
  ),
  4954 => 
  array (
    'city' => 'Balen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.16837',
    'longitude' => '5.17027',
  ),
  4955 => 
  array (
    'city' => 'Baelen',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.63131',
    'longitude' => '5.97433',
  ),
  4956 => 
  array (
    'city' => 'Baarle-Hertog',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.40504',
    'longitude' => '4.89226',
  ),
  4957 => 
  array (
    'city' => 'Aywaille',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.47411',
    'longitude' => '5.67684',
  ),
  4958 => 
  array (
    'city' => 'Awans',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.66774',
    'longitude' => '5.46329',
  ),
  4959 => 
  array (
    'city' => 'Avelgem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.77618',
    'longitude' => '3.44502',
  ),
  4960 => 
  array (
    'city' => 'Aubel',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.70189',
    'longitude' => '5.85812',
  ),
  4961 => 
  array (
    'city' => 'Aubange',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.56652',
    'longitude' => '5.80492',
  ),
  4962 => 
  array (
    'city' => 'Attert',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.75035',
    'longitude' => '5.78634',
  ),
  4963 => 
  array (
    'city' => 'Ath',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.62937',
    'longitude' => '3.77801',
  ),
  4964 => 
  array (
    'city' => 'Assesse',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.36934',
    'longitude' => '5.02204',
  ),
  4965 => 
  array (
    'city' => 'Assenede',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.22598',
    'longitude' => '3.75085',
  ),
  4966 => 
  array (
    'city' => 'Asse',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.91011',
    'longitude' => '4.19836',
  ),
  4967 => 
  array (
    'city' => 'As',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.00755',
    'longitude' => '5.58453',
  ),
  4968 => 
  array (
    'city' => 'Arlon',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '49.68333',
    'longitude' => '5.81667',
  ),
  4969 => 
  array (
    'city' => 'Arendonk',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.32267',
    'longitude' => '5.08289',
  ),
  4970 => 
  array (
    'city' => 'Ardooie',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.9757',
    'longitude' => '3.19736',
  ),
  4971 => 
  array (
    'city' => 'Anzegem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.837',
    'longitude' => '3.47786',
  ),
  4972 => 
  array (
    'city' => 'Antwerpen',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.21989',
    'longitude' => '4.40346',
  ),
  4973 => 
  array (
    'city' => 'Antoing',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.56765',
    'longitude' => '3.4492',
  ),
  4974 => 
  array (
    'city' => 'Anthisnes',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.48323',
    'longitude' => '5.519',
  ),
  4975 => 
  array (
    'city' => 'Ans',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.6623',
    'longitude' => '5.52029',
  ),
  4976 => 
  array (
    'city' => 'Anhée',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.31039',
    'longitude' => '4.87827',
  ),
  4977 => 
  array (
    'city' => 'Anderlues',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.40704',
    'longitude' => '4.27136',
  ),
  4978 => 
  array (
    'city' => 'Andenne',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.48941',
    'longitude' => '5.09513',
  ),
  4979 => 
  array (
    'city' => 'Amblève',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.35357',
    'longitude' => '6.17002',
  ),
  4980 => 
  array (
    'city' => 'Amay',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.54829',
    'longitude' => '5.30974',
  ),
  4981 => 
  array (
    'city' => 'Alveringem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.01238',
    'longitude' => '2.71117',
  ),
  4982 => 
  array (
    'city' => 'Alken',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.87552',
    'longitude' => '5.30558',
  ),
  4983 => 
  array (
    'city' => 'Aiseau',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.41158',
    'longitude' => '4.58671',
  ),
  4984 => 
  array (
    'city' => 'Aartselaar',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.13412',
    'longitude' => '4.38678',
  ),
  4985 => 
  array (
    'city' => 'Aarschot',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.98715',
    'longitude' => '4.83695',
  ),
  4986 => 
  array (
    'city' => 'Aalter',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.09017',
    'longitude' => '3.44693',
  ),
  4987 => 
  array (
    'city' => 'Aalst',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.93604',
    'longitude' => '4.0355',
  ),
  4988 => 
  array (
    'city' => 'Frasnes-lez-Anvaing',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.69211',
    'longitude' => '3.63562',
  ),
  4989 => 
  array (
    'city' => 'Chastre',
    'region' => 'WAL',
    'country' => 'BE',
    'latitude' => '50.60067',
    'longitude' => '4.634',
  ),
  4990 => 
  array (
    'city' => 'Lennik',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '50.80903',
    'longitude' => '4.16219',
  ),
  4991 => 
  array (
    'city' => 'Laakdal',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.08067',
    'longitude' => '5.00556',
  ),
  4992 => 
  array (
    'city' => 'Scherpenheuvel-Zichem',
    'region' => 'VLG',
    'country' => 'BE',
    'latitude' => '51.01041',
    'longitude' => '4.97492',
  ),
  4993 => 
  array (
    'city' => 'Zorgho',
    'region' => '11',
    'country' => 'BF',
    'latitude' => '12.24889',
    'longitude' => '-0.61583',
  ),
  4994 => 
  array (
    'city' => 'Ziniaré',
    'region' => '11',
    'country' => 'BF',
    'latitude' => '12.58222',
    'longitude' => '-1.29833',
  ),
  4995 => 
  array (
    'city' => 'Yako',
    'region' => '10',
    'country' => 'BF',
    'latitude' => '12.96667',
    'longitude' => '-2.26667',
  ),
  4996 => 
  array (
    'city' => 'Tougan',
    'region' => '01',
    'country' => 'BF',
    'latitude' => '13.06667',
    'longitude' => '-3.06667',
  ),
  4997 => 
  array (
    'city' => 'Toma',
    'region' => '01',
    'country' => 'BF',
    'latitude' => '12.76667',
    'longitude' => '-2.88333',
  ),
  4998 => 
  array (
    'city' => 'Titao',
    'region' => '10',
    'country' => 'BF',
    'latitude' => '13.76667',
    'longitude' => '-2.06667',
  ),
  4999 => 
  array (
    'city' => 'Tenkodogo',
    'region' => '04',
    'country' => 'BF',
    'latitude' => '11.78',
    'longitude' => '-0.36972',
  ),
  5000 => 
  array (
    'city' => 'Solenzo',
    'region' => '01',
    'country' => 'BF',
    'latitude' => '12.18333',
    'longitude' => '-4.08333',
  ),
  5001 => 
  array (
    'city' => 'Sindou',
    'region' => '02',
    'country' => 'BF',
    'latitude' => '10.66667',
    'longitude' => '-5.16667',
  ),
  5002 => 
  array (
    'city' => 'Sebba',
    'region' => '12',
    'country' => 'BF',
    'latitude' => '13.43641',
    'longitude' => '0.53044',
  ),
  5003 => 
  array (
    'city' => 'Sapouy',
    'region' => '06',
    'country' => 'BF',
    'latitude' => '11.55444',
    'longitude' => '-1.77361',
  ),
  5004 => 
  array (
    'city' => 'Réo',
    'region' => '06',
    'country' => 'BF',
    'latitude' => '12.31667',
    'longitude' => '-2.46667',
  ),
  5005 => 
  array (
    'city' => 'Pô',
    'region' => '07',
    'country' => 'BF',
    'latitude' => '11.16972',
    'longitude' => '-1.145',
  ),
  5006 => 
  array (
    'city' => 'Pitmoaga',
    'region' => '06',
    'country' => 'BF',
    'latitude' => '12.23972',
    'longitude' => '-1.87667',
  ),
  5007 => 
  array (
    'city' => 'Pama',
    'region' => '08',
    'country' => 'BF',
    'latitude' => '11.24972',
    'longitude' => '0.7075',
  ),
  5008 => 
  array (
    'city' => 'Ouargaye',
    'region' => '04',
    'country' => 'BF',
    'latitude' => '11.50333',
    'longitude' => '0.05722',
  ),
  5009 => 
  array (
    'city' => 'Ouahigouya',
    'region' => '10',
    'country' => 'BF',
    'latitude' => '13.58278',
    'longitude' => '-2.42158',
  ),
  5010 => 
  array (
    'city' => 'Ouagadougou',
    'region' => '03',
    'country' => 'BF',
    'latitude' => '12.36423',
    'longitude' => '-1.53834',
  ),
  5011 => 
  array (
    'city' => 'Nouna',
    'region' => '01',
    'country' => 'BF',
    'latitude' => '12.73333',
    'longitude' => '-3.86667',
  ),
  5012 => 
  array (
    'city' => 'Manga',
    'region' => '07',
    'country' => 'BF',
    'latitude' => '11.66361',
    'longitude' => '-1.07306',
  ),
  5013 => 
  array (
    'city' => 'Léo',
    'region' => '06',
    'country' => 'BF',
    'latitude' => '11.1',
    'longitude' => '-2.1',
  ),
  5014 => 
  array (
    'city' => 'Koupéla',
    'region' => '04',
    'country' => 'BF',
    'latitude' => '12.17944',
    'longitude' => '-0.35167',
  ),
  5015 => 
  array (
    'city' => 'Koudougou',
    'region' => '06',
    'country' => 'BF',
    'latitude' => '12.25',
    'longitude' => '-2.36667',
  ),
  5016 => 
  array (
    'city' => 'Kongoussi',
    'region' => '05',
    'country' => 'BF',
    'latitude' => '13.32583',
    'longitude' => '-1.53472',
  ),
  5017 => 
  array (
    'city' => 'Kombissiri',
    'region' => '07',
    'country' => 'BF',
    'latitude' => '12.06556',
    'longitude' => '-1.3375',
  ),
  5018 => 
  array (
    'city' => 'Kokologo',
    'region' => '06',
    'country' => 'BF',
    'latitude' => '12.18972',
    'longitude' => '-1.88556',
  ),
  5019 => 
  array (
    'city' => 'Kaya',
    'region' => '05',
    'country' => 'BF',
    'latitude' => '13.09167',
    'longitude' => '-1.08444',
  ),
  5020 => 
  array (
    'city' => 'Houndé',
    'region' => '09',
    'country' => 'BF',
    'latitude' => '11.5',
    'longitude' => '-3.51667',
  ),
  5021 => 
  array (
    'city' => 'Gourcy',
    'region' => '10',
    'country' => 'BF',
    'latitude' => '13.21667',
    'longitude' => '-2.35',
  ),
  5022 => 
  array (
    'city' => 'Goulouré',
    'region' => '06',
    'country' => 'BF',
    'latitude' => '12.23056',
    'longitude' => '-1.92889',
  ),
  5023 => 
  array (
    'city' => 'Gorom-Gorom',
    'region' => '12',
    'country' => 'BF',
    'latitude' => '14.44389',
    'longitude' => '-0.23611',
  ),
  5024 => 
  array (
    'city' => 'Gayéri',
    'region' => '08',
    'country' => 'BF',
    'latitude' => '12.64972',
    'longitude' => '0.49306',
  ),
  5025 => 
  array (
    'city' => 'Garango',
    'region' => '04',
    'country' => 'BF',
    'latitude' => '11.8',
    'longitude' => '-0.55056',
  ),
  5026 => 
  array (
    'city' => 'Fada N’Gourma',
    'region' => '08',
    'country' => 'BF',
    'latitude' => '12.06222',
    'longitude' => '0.35778',
  ),
  5027 => 
  array (
    'city' => 'Dori',
    'region' => '12',
    'country' => 'BF',
    'latitude' => '14.0354',
    'longitude' => '-0.0345',
  ),
  5028 => 
  array (
    'city' => 'Djibo',
    'region' => '12',
    'country' => 'BF',
    'latitude' => '14.10222',
    'longitude' => '-1.63056',
  ),
  5029 => 
  array (
    'city' => 'Diébougou',
    'region' => '13',
    'country' => 'BF',
    'latitude' => '10.96667',
    'longitude' => '-3.25',
  ),
  5030 => 
  array (
    'city' => 'Diapaga',
    'region' => '08',
    'country' => 'BF',
    'latitude' => '12.07083',
    'longitude' => '1.78889',
  ),
  5031 => 
  array (
    'city' => 'Dédougou',
    'region' => '01',
    'country' => 'BF',
    'latitude' => '12.46667',
    'longitude' => '-3.46667',
  ),
  5032 => 
  array (
    'city' => 'Dano',
    'region' => '13',
    'country' => 'BF',
    'latitude' => '11.15',
    'longitude' => '-3.06667',
  ),
  5033 => 
  array (
    'city' => 'Boussé',
    'region' => '11',
    'country' => 'BF',
    'latitude' => '12.66056',
    'longitude' => '-1.89222',
  ),
  5034 => 
  array (
    'city' => 'Boulsa',
    'region' => '05',
    'country' => 'BF',
    'latitude' => '12.6675',
    'longitude' => '-0.57583',
  ),
  5035 => 
  array (
    'city' => 'Boromo',
    'region' => '01',
    'country' => 'BF',
    'latitude' => '11.75',
    'longitude' => '-2.93333',
  ),
  5036 => 
  array (
    'city' => 'Bogandé',
    'region' => '08',
    'country' => 'BF',
    'latitude' => '12.97139',
    'longitude' => '-0.14361',
  ),
  5037 => 
  array (
    'city' => 'Bobo-Dioulasso',
    'region' => '09',
    'country' => 'BF',
    'latitude' => '11.17715',
    'longitude' => '-4.2979',
  ),
  5038 => 
  array (
    'city' => 'Batié',
    'region' => '13',
    'country' => 'BF',
    'latitude' => '9.88333',
    'longitude' => '-2.91667',
  ),
  5039 => 
  array (
    'city' => 'Banfora',
    'region' => '02',
    'country' => 'BF',
    'latitude' => '10.63333',
    'longitude' => '-4.76667',
  ),
  5040 => 
  array (
    'city' => 'Gaoua',
    'region' => '13',
    'country' => 'BF',
    'latitude' => '10.29917',
    'longitude' => '-3.25083',
  ),
  5041 => 
  array (
    'city' => 'Orodara',
    'region' => '09',
    'country' => 'BF',
    'latitude' => '10.94917',
    'longitude' => '-4.93417',
  ),
  5042 => 
  array (
    'city' => 'Beloslav',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.18333',
    'longitude' => '27.7',
  ),
  5043 => 
  array (
    'city' => 'Zlatograd',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.38333',
    'longitude' => '25.1',
  ),
  5044 => 
  array (
    'city' => 'Zlatitsa',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.71667',
    'longitude' => '24.13333',
  ),
  5045 => 
  array (
    'city' => 'Zlataritsa',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.05',
    'longitude' => '25.9',
  ),
  5046 => 
  array (
    'city' => 'Zemen',
    'region' => '49',
    'country' => 'BG',
    'latitude' => '42.47889',
    'longitude' => '22.74917',
  ),
  5047 => 
  array (
    'city' => 'Zelenikovo',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.4',
    'longitude' => '25.08333',
  ),
  5048 => 
  array (
    'city' => 'Zavet',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.76667',
    'longitude' => '26.66667',
  ),
  5049 => 
  array (
    'city' => 'Yambol',
    'region' => '65',
    'country' => 'BG',
    'latitude' => '42.48333',
    'longitude' => '26.5',
  ),
  5050 => 
  array (
    'city' => 'Yakoruda',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '42.02528',
    'longitude' => '23.68417',
  ),
  5051 => 
  array (
    'city' => 'Yakimovo',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.64306',
    'longitude' => '23.36778',
  ),
  5052 => 
  array (
    'city' => 'Yablanitsa',
    'region' => '46',
    'country' => 'BG',
    'latitude' => '43.03139',
    'longitude' => '24.11278',
  ),
  5053 => 
  array (
    'city' => 'Vŭrshets',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.19528',
    'longitude' => '23.28611',
  ),
  5054 => 
  array (
    'city' => 'Vŭrbitsa',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43',
    'longitude' => '26.63333',
  ),
  5055 => 
  array (
    'city' => 'Vŭlchidol',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.4',
    'longitude' => '27.55',
  ),
  5056 => 
  array (
    'city' => 'Vŭlchedrŭm',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.69639',
    'longitude' => '23.44472',
  ),
  5057 => 
  array (
    'city' => 'Vratsa',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.21',
    'longitude' => '23.5625',
  ),
  5058 => 
  array (
    'city' => 'Sveti Vlas',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.7136',
    'longitude' => '27.75867',
  ),
  5059 => 
  array (
    'city' => 'Vidin',
    'region' => '63',
    'country' => 'BG',
    'latitude' => '43.99',
    'longitude' => '22.8725',
  ),
  5060 => 
  array (
    'city' => 'Vetrino',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.31667',
    'longitude' => '27.43333',
  ),
  5061 => 
  array (
    'city' => 'Vetovo',
    'region' => '53',
    'country' => 'BG',
    'latitude' => '43.7',
    'longitude' => '26.26667',
  ),
  5062 => 
  array (
    'city' => 'Venets',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43.55',
    'longitude' => '26.93333',
  ),
  5063 => 
  array (
    'city' => 'Velingrad',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '42.02724',
    'longitude' => '23.99569',
  ),
  5064 => 
  array (
    'city' => 'Veliko Tŭrnovo',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.08124',
    'longitude' => '25.62904',
  ),
  5065 => 
  array (
    'city' => 'Varna',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.21667',
    'longitude' => '27.91667',
  ),
  5066 => 
  array (
    'city' => 'Ugŭrchin',
    'region' => '46',
    'country' => 'BG',
    'latitude' => '43.1',
    'longitude' => '24.41667',
  ),
  5067 => 
  array (
    'city' => 'Tvŭrditsa',
    'region' => '56',
    'country' => 'BG',
    'latitude' => '42.7',
    'longitude' => '25.9',
  ),
  5068 => 
  array (
    'city' => 'Tutrakan',
    'region' => '55',
    'country' => 'BG',
    'latitude' => '44.05',
    'longitude' => '26.61667',
  ),
  5069 => 
  array (
    'city' => 'Tŭrgovishte',
    'region' => '60',
    'country' => 'BG',
    'latitude' => '43.25917',
    'longitude' => '26.58917',
  ),
  5070 => 
  array (
    'city' => 'Tsenovo',
    'region' => '53',
    'country' => 'BG',
    'latitude' => '43.53333',
    'longitude' => '25.65',
  ),
  5071 => 
  array (
    'city' => 'Tryavna',
    'region' => '41',
    'country' => 'BG',
    'latitude' => '42.86667',
    'longitude' => '25.5',
  ),
  5072 => 
  array (
    'city' => 'Trŭn',
    'region' => '49',
    'country' => 'BG',
    'latitude' => '42.83528',
    'longitude' => '22.65167',
  ),
  5073 => 
  array (
    'city' => 'Troyan',
    'region' => '46',
    'country' => 'BG',
    'latitude' => '42.89427',
    'longitude' => '24.71589',
  ),
  5074 => 
  array (
    'city' => 'Topolovgrad',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '42.08333',
    'longitude' => '26.33333',
  ),
  5075 => 
  array (
    'city' => 'Tonchevtsi',
    'region' => '41',
    'country' => 'BG',
    'latitude' => '42.9',
    'longitude' => '25.31667',
  ),
  5076 => 
  array (
    'city' => 'Dobrich',
    'region' => '40',
    'country' => 'BG',
    'latitude' => '43.56667',
    'longitude' => '27.83333',
  ),
  5077 => 
  array (
    'city' => 'Tochilari',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.85',
    'longitude' => '26.46667',
  ),
  5078 => 
  array (
    'city' => 'Teteven',
    'region' => '46',
    'country' => 'BG',
    'latitude' => '42.91667',
    'longitude' => '24.26667',
  ),
  5079 => 
  array (
    'city' => 'Tervel',
    'region' => '40',
    'country' => 'BG',
    'latitude' => '43.75',
    'longitude' => '27.4',
  ),
  5080 => 
  array (
    'city' => 'Batanovtsi',
    'region' => '49',
    'country' => 'BG',
    'latitude' => '42.59972',
    'longitude' => '22.95056',
  ),
  5081 => 
  array (
    'city' => 'Svoge',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.96667',
    'longitude' => '23.35',
  ),
  5082 => 
  array (
    'city' => 'Svishtov',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.62306',
    'longitude' => '25.35389',
  ),
  5083 => 
  array (
    'city' => 'Svilengrad',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '41.76667',
    'longitude' => '26.2',
  ),
  5084 => 
  array (
    'city' => 'Suvorovo',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.33333',
    'longitude' => '27.6',
  ),
  5085 => 
  array (
    'city' => 'Sungurlare',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.76667',
    'longitude' => '26.78333',
  ),
  5086 => 
  array (
    'city' => 'Sukhindol',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.19167',
    'longitude' => '25.18111',
  ),
  5087 => 
  array (
    'city' => 'Sŭedinenie',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.26667',
    'longitude' => '24.55',
  ),
  5088 => 
  array (
    'city' => 'Strumyani',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.63333',
    'longitude' => '23.2',
  ),
  5089 => 
  array (
    'city' => 'Strelcha',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '42.5',
    'longitude' => '24.31667',
  ),
  5090 => 
  array (
    'city' => 'Strazhitsa',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.23333',
    'longitude' => '25.96667',
  ),
  5091 => 
  array (
    'city' => 'Straldzha',
    'region' => '65',
    'country' => 'BG',
    'latitude' => '42.6',
    'longitude' => '26.68333',
  ),
  5092 => 
  array (
    'city' => 'Stara Zagora',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.43278',
    'longitude' => '25.64194',
  ),
  5093 => 
  array (
    'city' => 'Stara Kresna',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.8',
    'longitude' => '23.18333',
  ),
  5094 => 
  array (
    'city' => 'Dupnitsa',
    'region' => '45',
    'country' => 'BG',
    'latitude' => '42.26667',
    'longitude' => '23.11667',
  ),
  5095 => 
  array (
    'city' => 'Stamboliyski',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.13333',
    'longitude' => '24.53333',
  ),
  5096 => 
  array (
    'city' => 'Sozopol',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.41667',
    'longitude' => '27.7',
  ),
  5097 => 
  array (
    'city' => 'Sofia',
    'region' => '42',
    'country' => 'BG',
    'latitude' => '42.69751',
    'longitude' => '23.32415',
  ),
  5098 => 
  array (
    'city' => 'Smyadovo',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43.06667',
    'longitude' => '27.01667',
  ),
  5099 => 
  array (
    'city' => 'Smolyan',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.58528',
    'longitude' => '24.69194',
  ),
  5100 => 
  array (
    'city' => 'Slivo Pole',
    'region' => '53',
    'country' => 'BG',
    'latitude' => '43.95',
    'longitude' => '26.2',
  ),
  5101 => 
  array (
    'city' => 'Slivnitsa',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.85',
    'longitude' => '23.03333',
  ),
  5102 => 
  array (
    'city' => 'Sliven',
    'region' => '56',
    'country' => 'BG',
    'latitude' => '42.68583',
    'longitude' => '26.32917',
  ),
  5103 => 
  array (
    'city' => 'Slavyanovo',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.46667',
    'longitude' => '24.86667',
  ),
  5104 => 
  array (
    'city' => 'Sitovo',
    'region' => '55',
    'country' => 'BG',
    'latitude' => '44.01667',
    'longitude' => '27.01667',
  ),
  5105 => 
  array (
    'city' => 'Simitli',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.88333',
    'longitude' => '23.11667',
  ),
  5106 => 
  array (
    'city' => 'Simeonovgrad',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '42.03333',
    'longitude' => '25.83333',
  ),
  5107 => 
  array (
    'city' => 'Silistra',
    'region' => '55',
    'country' => 'BG',
    'latitude' => '44.11667',
    'longitude' => '27.26667',
  ),
  5108 => 
  array (
    'city' => 'Shumen',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43.27064',
    'longitude' => '26.92286',
  ),
  5109 => 
  array (
    'city' => 'Shipka',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.71667',
    'longitude' => '25.33333',
  ),
  5110 => 
  array (
    'city' => 'Shabla',
    'region' => '40',
    'country' => 'BG',
    'latitude' => '43.53333',
    'longitude' => '28.53333',
  ),
  5111 => 
  array (
    'city' => 'Sevlievo',
    'region' => '41',
    'country' => 'BG',
    'latitude' => '43.02583',
    'longitude' => '25.11361',
  ),
  5112 => 
  array (
    'city' => 'Septemvri',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '42.21667',
    'longitude' => '24.1',
  ),
  5113 => 
  array (
    'city' => 'Senovo',
    'region' => '53',
    'country' => 'BG',
    'latitude' => '43.65',
    'longitude' => '26.36667',
  ),
  5114 => 
  array (
    'city' => 'Satovcha',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.61667',
    'longitude' => '23.98333',
  ),
  5115 => 
  array (
    'city' => 'Sapareva Banya',
    'region' => '45',
    'country' => 'BG',
    'latitude' => '42.28333',
    'longitude' => '23.26667',
  ),
  5116 => 
  array (
    'city' => 'Sandanski',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.56667',
    'longitude' => '23.28333',
  ),
  5117 => 
  array (
    'city' => 'Samuil',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.51667',
    'longitude' => '26.75',
  ),
  5118 => 
  array (
    'city' => 'Samokov',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.33333',
    'longitude' => '23.55',
  ),
  5119 => 
  array (
    'city' => 'Sadovo',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.13333',
    'longitude' => '24.93333',
  ),
  5120 => 
  array (
    'city' => 'Ruzhintsi',
    'region' => '63',
    'country' => 'BG',
    'latitude' => '43.62333',
    'longitude' => '22.83083',
  ),
  5121 => 
  array (
    'city' => 'Ruse',
    'region' => '53',
    'country' => 'BG',
    'latitude' => '43.85639',
    'longitude' => '25.97083',
  ),
  5122 => 
  array (
    'city' => 'Ruen',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.8',
    'longitude' => '27.28333',
  ),
  5123 => 
  array (
    'city' => 'Rudozem',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.48333',
    'longitude' => '24.85',
  ),
  5124 => 
  array (
    'city' => 'Roman',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.15',
    'longitude' => '23.91667',
  ),
  5125 => 
  array (
    'city' => 'Rila',
    'region' => '45',
    'country' => 'BG',
    'latitude' => '42.13333',
    'longitude' => '23.13333',
  ),
  5126 => 
  array (
    'city' => 'Razlog',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.8863',
    'longitude' => '23.46714',
  ),
  5127 => 
  array (
    'city' => 'Razgrad',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.53333',
    'longitude' => '26.51667',
  ),
  5128 => 
  array (
    'city' => 'Rakovski',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.3',
    'longitude' => '24.96667',
  ),
  5129 => 
  array (
    'city' => 'Rakitovo',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '41.98333',
    'longitude' => '24.08333',
  ),
  5130 => 
  array (
    'city' => 'Radomir',
    'region' => '49',
    'country' => 'BG',
    'latitude' => '42.54444',
    'longitude' => '22.95778',
  ),
  5131 => 
  array (
    'city' => 'Radnevo',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.3',
    'longitude' => '25.93333',
  ),
  5132 => 
  array (
    'city' => 'Pŭrvomaytsi',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.15',
    'longitude' => '25.65',
  ),
  5133 => 
  array (
    'city' => 'Provadiya',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.18333',
    'longitude' => '27.43333',
  ),
  5134 => 
  array (
    'city' => 'Primorsko',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.26667',
    'longitude' => '27.76667',
  ),
  5135 => 
  array (
    'city' => 'Veliki Preslav',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43.16667',
    'longitude' => '26.81667',
  ),
  5136 => 
  array (
    'city' => 'Pravets',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.88333',
    'longitude' => '23.91667',
  ),
  5137 => 
  array (
    'city' => 'Pordim',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.38333',
    'longitude' => '24.85',
  ),
  5138 => 
  array (
    'city' => 'Popovo',
    'region' => '60',
    'country' => 'BG',
    'latitude' => '43.35',
    'longitude' => '26.23333',
  ),
  5139 => 
  array (
    'city' => 'Pomorie',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.55882',
    'longitude' => '27.64393',
  ),
  5140 => 
  array (
    'city' => 'Polski Trŭmbesh',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.38361',
    'longitude' => '25.64972',
  ),
  5141 => 
  array (
    'city' => 'Plovdiv',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.15',
    'longitude' => '24.75',
  ),
  5142 => 
  array (
    'city' => 'Pliska',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43.36667',
    'longitude' => '27.11667',
  ),
  5143 => 
  array (
    'city' => 'Pleven',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.41667',
    'longitude' => '24.61667',
  ),
  5144 => 
  array (
    'city' => 'Pirdop',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.7',
    'longitude' => '24.18333',
  ),
  5145 => 
  array (
    'city' => 'Petrich',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.4',
    'longitude' => '23.21667',
  ),
  5146 => 
  array (
    'city' => 'Peshtera',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '42.03333',
    'longitude' => '24.3',
  ),
  5147 => 
  array (
    'city' => 'Perushtitsa',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.05',
    'longitude' => '24.55',
  ),
  5148 => 
  array (
    'city' => 'Pernik',
    'region' => '49',
    'country' => 'BG',
    'latitude' => '42.6',
    'longitude' => '23.03333',
  ),
  5149 => 
  array (
    'city' => 'Iskŭr',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.45',
    'longitude' => '24.26667',
  ),
  5150 => 
  array (
    'city' => 'Pazardzhik',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '42.2',
    'longitude' => '24.33333',
  ),
  5151 => 
  array (
    'city' => 'Pavlikeni',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.24278',
    'longitude' => '25.32194',
  ),
  5152 => 
  array (
    'city' => 'Pavel Banya',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.6',
    'longitude' => '25.2',
  ),
  5153 => 
  array (
    'city' => 'Panagyurishte',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '42.5',
    'longitude' => '24.18333',
  ),
  5154 => 
  array (
    'city' => 'Oryakhovo',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.73333',
    'longitude' => '23.96667',
  ),
  5155 => 
  array (
    'city' => 'Opaka',
    'region' => '60',
    'country' => 'BG',
    'latitude' => '43.45',
    'longitude' => '26.16667',
  ),
  5156 => 
  array (
    'city' => 'Omurtag',
    'region' => '60',
    'country' => 'BG',
    'latitude' => '43.1',
    'longitude' => '26.41667',
  ),
  5157 => 
  array (
    'city' => 'Obzor',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.81667',
    'longitude' => '27.88333',
  ),
  5158 => 
  array (
    'city' => 'Novo Selo',
    'region' => '63',
    'country' => 'BG',
    'latitude' => '44.15861',
    'longitude' => '22.78667',
  ),
  5159 => 
  array (
    'city' => 'Novi Pazar',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43.35',
    'longitude' => '27.2',
  ),
  5160 => 
  array (
    'city' => 'Nova Zagora',
    'region' => '56',
    'country' => 'BG',
    'latitude' => '42.48333',
    'longitude' => '26.01667',
  ),
  5161 => 
  array (
    'city' => 'Nikopol',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.7',
    'longitude' => '24.9',
  ),
  5162 => 
  array (
    'city' => 'Nikolaevo',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.63333',
    'longitude' => '25.8',
  ),
  5163 => 
  array (
    'city' => 'Nesebŭr',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.65921',
    'longitude' => '27.73602',
  ),
  5164 => 
  array (
    'city' => 'Nedelino',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.45',
    'longitude' => '25.08333',
  ),
  5165 => 
  array (
    'city' => 'Mŭglizh',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.6',
    'longitude' => '25.55',
  ),
  5166 => 
  array (
    'city' => 'Miziya',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.68333',
    'longitude' => '23.85',
  ),
  5167 => 
  array (
    'city' => 'Mirkovo',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.7',
    'longitude' => '23.98333',
  ),
  5168 => 
  array (
    'city' => 'Mineralni Bani',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '41.91667',
    'longitude' => '25.35',
  ),
  5169 => 
  array (
    'city' => 'Montana',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.4125',
    'longitude' => '23.225',
  ),
  5170 => 
  array (
    'city' => 'Tsarevo',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.16667',
    'longitude' => '27.85',
  ),
  5171 => 
  array (
    'city' => 'Mezdra',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.15',
    'longitude' => '23.7',
  ),
  5172 => 
  array (
    'city' => 'Medovene',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.76667',
    'longitude' => '26.51667',
  ),
  5173 => 
  array (
    'city' => 'Medkovets',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.62972',
    'longitude' => '23.18111',
  ),
  5174 => 
  array (
    'city' => 'Malko Tŭrnovo',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '41.98333',
    'longitude' => '27.53333',
  ),
  5175 => 
  array (
    'city' => 'Madzharovo',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '41.63333',
    'longitude' => '25.86667',
  ),
  5176 => 
  array (
    'city' => 'Madan',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.5',
    'longitude' => '24.95',
  ),
  5177 => 
  array (
    'city' => 'Lyubimets',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '41.83333',
    'longitude' => '26.08333',
  ),
  5178 => 
  array (
    'city' => 'Lyaskovets',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.11111',
    'longitude' => '25.72833',
  ),
  5179 => 
  array (
    'city' => 'Lukovit',
    'region' => '46',
    'country' => 'BG',
    'latitude' => '43.2',
    'longitude' => '24.16667',
  ),
  5180 => 
  array (
    'city' => 'Lŭki',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '41.85',
    'longitude' => '24.81667',
  ),
  5181 => 
  array (
    'city' => 'Loznitsa',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.36667',
    'longitude' => '26.6',
  ),
  5182 => 
  array (
    'city' => 'Lovech',
    'region' => '46',
    'country' => 'BG',
    'latitude' => '43.13333',
    'longitude' => '24.71667',
  ),
  5183 => 
  array (
    'city' => 'Lom',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.81389',
    'longitude' => '23.23611',
  ),
  5184 => 
  array (
    'city' => 'Levski',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.36667',
    'longitude' => '25.13333',
  ),
  5185 => 
  array (
    'city' => 'Letnitsa',
    'region' => '46',
    'country' => 'BG',
    'latitude' => '43.31167',
    'longitude' => '25.07333',
  ),
  5186 => 
  array (
    'city' => 'Lesichevo',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '42.35',
    'longitude' => '24.11667',
  ),
  5187 => 
  array (
    'city' => 'Lakatnik',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '43.05',
    'longitude' => '23.4',
  ),
  5188 => 
  array (
    'city' => 'Kyustendil',
    'region' => '45',
    'country' => 'BG',
    'latitude' => '42.28389',
    'longitude' => '22.69111',
  ),
  5189 => 
  array (
    'city' => 'Kŭrdzhali',
    'region' => '44',
    'country' => 'BG',
    'latitude' => '41.65',
    'longitude' => '25.36667',
  ),
  5190 => 
  array (
    'city' => 'Kula',
    'region' => '63',
    'country' => 'BG',
    'latitude' => '43.88778',
    'longitude' => '22.52139',
  ),
  5191 => 
  array (
    'city' => 'Kubrat',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.8',
    'longitude' => '26.5',
  ),
  5192 => 
  array (
    'city' => 'Krushari',
    'region' => '40',
    'country' => 'BG',
    'latitude' => '43.81667',
    'longitude' => '27.75',
  ),
  5193 => 
  array (
    'city' => 'Krumovgrad',
    'region' => '44',
    'country' => 'BG',
    'latitude' => '41.46667',
    'longitude' => '25.65',
  ),
  5194 => 
  array (
    'city' => 'Krivodol',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.37444',
    'longitude' => '23.48444',
  ),
  5195 => 
  array (
    'city' => 'Krichim',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.05',
    'longitude' => '24.46667',
  ),
  5196 => 
  array (
    'city' => 'Kresna',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.73333',
    'longitude' => '23.15',
  ),
  5197 => 
  array (
    'city' => 'Kozloduy',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.78333',
    'longitude' => '23.73333',
  ),
  5198 => 
  array (
    'city' => 'Koynare',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.35',
    'longitude' => '24.13333',
  ),
  5199 => 
  array (
    'city' => 'Kotel',
    'region' => '56',
    'country' => 'BG',
    'latitude' => '42.88333',
    'longitude' => '26.45',
  ),
  5200 => 
  array (
    'city' => 'Kostinbrod',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.81667',
    'longitude' => '23.21667',
  ),
  5201 => 
  array (
    'city' => 'Koprivshtitsa',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.63333',
    'longitude' => '24.35',
  ),
  5202 => 
  array (
    'city' => 'Kocherinovo',
    'region' => '45',
    'country' => 'BG',
    'latitude' => '42.08333',
    'longitude' => '23.06667',
  ),
  5203 => 
  array (
    'city' => 'Knezha',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.5',
    'longitude' => '24.08333',
  ),
  5204 => 
  array (
    'city' => 'Klisura',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.7',
    'longitude' => '24.45',
  ),
  5205 => 
  array (
    'city' => 'Kiten',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.08333',
    'longitude' => '27.31667',
  ),
  5206 => 
  array (
    'city' => 'Kiten',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.23424',
    'longitude' => '27.7749',
  ),
  5207 => 
  array (
    'city' => 'Kilifarevo',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '42.98333',
    'longitude' => '25.63333',
  ),
  5208 => 
  array (
    'city' => 'Tsar Kaloyan',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.61667',
    'longitude' => '26.25',
  ),
  5209 => 
  array (
    'city' => 'Khisarya',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.5',
    'longitude' => '24.7',
  ),
  5210 => 
  array (
    'city' => 'Khayredin',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.6',
    'longitude' => '23.66667',
  ),
  5211 => 
  array (
    'city' => 'Khaskovo',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '41.94028',
    'longitude' => '25.56944',
  ),
  5212 => 
  array (
    'city' => 'Kharmanli',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '41.93333',
    'longitude' => '25.9',
  ),
  5213 => 
  array (
    'city' => 'Khadzhidimovo',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.52222',
    'longitude' => '23.86861',
  ),
  5214 => 
  array (
    'city' => 'Kermen',
    'region' => '56',
    'country' => 'BG',
    'latitude' => '42.5',
    'longitude' => '26.25',
  ),
  5215 => 
  array (
    'city' => 'Kazanlŭk',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.61667',
    'longitude' => '25.4',
  ),
  5216 => 
  array (
    'city' => 'Kaynardzha',
    'region' => '55',
    'country' => 'BG',
    'latitude' => '43.98333',
    'longitude' => '27.5',
  ),
  5217 => 
  array (
    'city' => 'Kavarna',
    'region' => '40',
    'country' => 'BG',
    'latitude' => '43.43333',
    'longitude' => '28.33333',
  ),
  5218 => 
  array (
    'city' => 'Kaspichan',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43.31667',
    'longitude' => '27.16667',
  ),
  5219 => 
  array (
    'city' => 'Karnobat',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.65',
    'longitude' => '26.98333',
  ),
  5220 => 
  array (
    'city' => 'Karlovo',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.63333',
    'longitude' => '24.8',
  ),
  5221 => 
  array (
    'city' => 'Kaolinovo',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43.61667',
    'longitude' => '27.11667',
  ),
  5222 => 
  array (
    'city' => 'Kameno',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.56667',
    'longitude' => '27.3',
  ),
  5223 => 
  array (
    'city' => 'Kaloyanovo',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.35',
    'longitude' => '24.73333',
  ),
  5224 => 
  array (
    'city' => 'Kalofer',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.61667',
    'longitude' => '24.98333',
  ),
  5225 => 
  array (
    'city' => 'Ivaylovgrad',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '41.53333',
    'longitude' => '26.13333',
  ),
  5226 => 
  array (
    'city' => 'Ivanovo',
    'region' => '53',
    'country' => 'BG',
    'latitude' => '43.7',
    'longitude' => '25.98333',
  ),
  5227 => 
  array (
    'city' => 'Isperikh',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.71667',
    'longitude' => '26.83333',
  ),
  5228 => 
  array (
    'city' => 'Ikhtiman',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.43333',
    'longitude' => '23.81667',
  ),
  5229 => 
  array (
    'city' => 'Gŭrmen',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.6',
    'longitude' => '23.81667',
  ),
  5230 => 
  array (
    'city' => 'Gurkovo',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.66667',
    'longitude' => '25.8',
  ),
  5231 => 
  array (
    'city' => 'Gulyantsi',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.63333',
    'longitude' => '24.7',
  ),
  5232 => 
  array (
    'city' => 'Sredets',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.34747',
    'longitude' => '27.17898',
  ),
  5233 => 
  array (
    'city' => 'Gramada',
    'region' => '63',
    'country' => 'BG',
    'latitude' => '43.83444',
    'longitude' => '22.65861',
  ),
  5234 => 
  array (
    'city' => 'Gyovren',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.4',
    'longitude' => '24.23',
  ),
  5235 => 
  array (
    'city' => 'Gotse Delchev',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.56667',
    'longitude' => '23.73333',
  ),
  5236 => 
  array (
    'city' => 'Gorna Oryakhovitsa',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.12778',
    'longitude' => '25.70167',
  ),
  5237 => 
  array (
    'city' => 'Gorna Malina',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.68333',
    'longitude' => '23.7',
  ),
  5238 => 
  array (
    'city' => 'Gorichevo',
    'region' => '52',
    'country' => 'BG',
    'latitude' => '43.85',
    'longitude' => '26.45',
  ),
  5239 => 
  array (
    'city' => 'Godech',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '43.015',
    'longitude' => '23.04417',
  ),
  5240 => 
  array (
    'city' => 'Glavinitsa',
    'region' => '55',
    'country' => 'BG',
    'latitude' => '43.91667',
    'longitude' => '26.83333',
  ),
  5241 => 
  array (
    'city' => 'Dolni Chiflik',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '42.98333',
    'longitude' => '27.71667',
  ),
  5242 => 
  array (
    'city' => 'General-Toshevo',
    'region' => '40',
    'country' => 'BG',
    'latitude' => '43.7',
    'longitude' => '28.03333',
  ),
  5243 => 
  array (
    'city' => 'Gara Khitrino',
    'region' => '54',
    'country' => 'BG',
    'latitude' => '43.43333',
    'longitude' => '26.91667',
  ),
  5244 => 
  array (
    'city' => 'Gabrovo',
    'region' => '41',
    'country' => 'BG',
    'latitude' => '42.87472',
    'longitude' => '25.33417',
  ),
  5245 => 
  array (
    'city' => 'Gabrovo',
    'region' => '44',
    'country' => 'BG',
    'latitude' => '41.8',
    'longitude' => '25.26667',
  ),
  5246 => 
  array (
    'city' => 'Etropole',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.83333',
    'longitude' => '24',
  ),
  5247 => 
  array (
    'city' => 'Elkhovo',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.38333',
    'longitude' => '25.43333',
  ),
  5248 => 
  array (
    'city' => 'Elkhovo',
    'region' => '65',
    'country' => 'BG',
    'latitude' => '42.16667',
    'longitude' => '26.56667',
  ),
  5249 => 
  array (
    'city' => 'Elin Pelin',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.66667',
    'longitude' => '23.6',
  ),
  5250 => 
  array (
    'city' => 'Elena',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '42.93333',
    'longitude' => '25.88333',
  ),
  5251 => 
  array (
    'city' => 'Dzhebel',
    'region' => '44',
    'country' => 'BG',
    'latitude' => '41.5',
    'longitude' => '25.3',
  ),
  5252 => 
  array (
    'city' => 'Dve Mogili',
    'region' => '53',
    'country' => 'BG',
    'latitude' => '43.6',
    'longitude' => '25.86667',
  ),
  5253 => 
  array (
    'city' => 'Dunavtsi',
    'region' => '63',
    'country' => 'BG',
    'latitude' => '43.92111',
    'longitude' => '22.82111',
  ),
  5254 => 
  array (
    'city' => 'Dulovo',
    'region' => '55',
    'country' => 'BG',
    'latitude' => '43.81667',
    'longitude' => '27.15',
  ),
  5255 => 
  array (
    'city' => 'Dŭlgopol',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.05',
    'longitude' => '27.35',
  ),
  5256 => 
  array (
    'city' => 'Dryanovo',
    'region' => '41',
    'country' => 'BG',
    'latitude' => '42.97897',
    'longitude' => '25.4785',
  ),
  5257 => 
  array (
    'city' => 'Dragoman',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.91889',
    'longitude' => '22.93167',
  ),
  5258 => 
  array (
    'city' => 'Dospat',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.65',
    'longitude' => '24.16667',
  ),
  5259 => 
  array (
    'city' => 'Dolni Dŭbnik',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.4',
    'longitude' => '24.43333',
  ),
  5260 => 
  array (
    'city' => 'Dolna Mitropoliya',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.46667',
    'longitude' => '24.53333',
  ),
  5261 => 
  array (
    'city' => 'Dolna Banya',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.3',
    'longitude' => '23.76667',
  ),
  5262 => 
  array (
    'city' => 'Dimovo',
    'region' => '63',
    'country' => 'BG',
    'latitude' => '43.74167',
    'longitude' => '22.72694',
  ),
  5263 => 
  array (
    'city' => 'Dimitrovgrad',
    'region' => '43',
    'country' => 'BG',
    'latitude' => '42.05',
    'longitude' => '25.6',
  ),
  5264 => 
  array (
    'city' => 'Devnya',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.22222',
    'longitude' => '27.56944',
  ),
  5265 => 
  array (
    'city' => 'Devin',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '41.74327',
    'longitude' => '24.40003',
  ),
  5266 => 
  array (
    'city' => 'Debelets',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.03333',
    'longitude' => '25.61667',
  ),
  5267 => 
  array (
    'city' => 'Chirpan',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.2',
    'longitude' => '25.33333',
  ),
  5268 => 
  array (
    'city' => 'Chiprovtsi',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.38417',
    'longitude' => '22.88083',
  ),
  5269 => 
  array (
    'city' => 'Cherven Bryag',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.26667',
    'longitude' => '24.1',
  ),
  5270 => 
  array (
    'city' => 'Chernomorets',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.44589',
    'longitude' => '27.63834',
  ),
  5271 => 
  array (
    'city' => 'Chepelare',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.73333',
    'longitude' => '24.68333',
  ),
  5272 => 
  array (
    'city' => 'Chelopech',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.7',
    'longitude' => '24.08333',
  ),
  5273 => 
  array (
    'city' => 'Chavdar',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.65',
    'longitude' => '24.05',
  ),
  5274 => 
  array (
    'city' => 'Byala Slatina',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.46667',
    'longitude' => '23.93333',
  ),
  5275 => 
  array (
    'city' => 'Byala Cherkva',
    'region' => '62',
    'country' => 'BG',
    'latitude' => '43.2',
    'longitude' => '25.3',
  ),
  5276 => 
  array (
    'city' => 'Byala',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '42.88333',
    'longitude' => '27.88333',
  ),
  5277 => 
  array (
    'city' => 'Burgas',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.50606',
    'longitude' => '27.46781',
  ),
  5278 => 
  array (
    'city' => 'Bukhovo',
    'region' => '42',
    'country' => 'BG',
    'latitude' => '42.76667',
    'longitude' => '23.56667',
  ),
  5279 => 
  array (
    'city' => 'Brusartsi',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.66667',
    'longitude' => '23.06667',
  ),
  5280 => 
  array (
    'city' => 'Brezovo',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.35',
    'longitude' => '25.08333',
  ),
  5281 => 
  array (
    'city' => 'Breznik',
    'region' => '49',
    'country' => 'BG',
    'latitude' => '42.74139',
    'longitude' => '22.89806',
  ),
  5282 => 
  array (
    'city' => 'Bregovo',
    'region' => '63',
    'country' => 'BG',
    'latitude' => '44.15167',
    'longitude' => '22.6425',
  ),
  5283 => 
  array (
    'city' => 'Bratsigovo',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '42.01667',
    'longitude' => '24.36667',
  ),
  5284 => 
  array (
    'city' => 'Bozhurishte',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.75',
    'longitude' => '23.2',
  ),
  5285 => 
  array (
    'city' => 'Boychinovtsi',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.47222',
    'longitude' => '23.33583',
  ),
  5286 => 
  array (
    'city' => 'Bov',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '43.0325',
    'longitude' => '23.37806',
  ),
  5287 => 
  array (
    'city' => 'Botevgrad',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.9',
    'longitude' => '23.78333',
  ),
  5288 => 
  array (
    'city' => 'Borovo',
    'region' => '53',
    'country' => 'BG',
    'latitude' => '43.5',
    'longitude' => '25.8',
  ),
  5289 => 
  array (
    'city' => 'Borovan',
    'region' => '64',
    'country' => 'BG',
    'latitude' => '43.43333',
    'longitude' => '23.75',
  ),
  5290 => 
  array (
    'city' => 'Borino',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.68333',
    'longitude' => '24.28333',
  ),
  5291 => 
  array (
    'city' => 'Bolyarovo',
    'region' => '65',
    'country' => 'BG',
    'latitude' => '42.15',
    'longitude' => '26.81667',
  ),
  5292 => 
  array (
    'city' => 'Bobovdol',
    'region' => '45',
    'country' => 'BG',
    'latitude' => '42.36972',
    'longitude' => '23.01722',
  ),
  5293 => 
  array (
    'city' => 'Boboshevo',
    'region' => '45',
    'country' => 'BG',
    'latitude' => '42.15972',
    'longitude' => '23.01639',
  ),
  5294 => 
  array (
    'city' => 'Blagoevgrad',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '42.01667',
    'longitude' => '23.1',
  ),
  5295 => 
  array (
    'city' => 'Berkovitsa',
    'region' => '47',
    'country' => 'BG',
    'latitude' => '43.23611',
    'longitude' => '23.12583',
  ),
  5296 => 
  array (
    'city' => 'Belovo',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '42.21667',
    'longitude' => '24.01667',
  ),
  5297 => 
  array (
    'city' => 'Belogradchik',
    'region' => '63',
    'country' => 'BG',
    'latitude' => '43.62722',
    'longitude' => '22.68361',
  ),
  5298 => 
  array (
    'city' => 'Belitsa',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.95694',
    'longitude' => '23.5725',
  ),
  5299 => 
  array (
    'city' => 'Belene',
    'region' => '50',
    'country' => 'BG',
    'latitude' => '43.65',
    'longitude' => '25.11667',
  ),
  5300 => 
  array (
    'city' => 'Batak',
    'region' => '48',
    'country' => 'BG',
    'latitude' => '41.95',
    'longitude' => '24.21667',
  ),
  5301 => 
  array (
    'city' => 'Bansko',
    'region' => '38',
    'country' => 'BG',
    'latitude' => '41.8383',
    'longitude' => '23.48851',
  ),
  5302 => 
  array (
    'city' => 'Banite',
    'region' => '57',
    'country' => 'BG',
    'latitude' => '41.61667',
    'longitude' => '25.01667',
  ),
  5303 => 
  array (
    'city' => 'Balchik',
    'region' => '40',
    'country' => 'BG',
    'latitude' => '43.41667',
    'longitude' => '28.16667',
  ),
  5304 => 
  array (
    'city' => 'Aytos',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.7',
    'longitude' => '27.25',
  ),
  5305 => 
  array (
    'city' => 'Asenovgrad',
    'region' => '51',
    'country' => 'BG',
    'latitude' => '42.01667',
    'longitude' => '24.86667',
  ),
  5306 => 
  array (
    'city' => 'Asen',
    'region' => '59',
    'country' => 'BG',
    'latitude' => '42.65',
    'longitude' => '25.2',
  ),
  5307 => 
  array (
    'city' => 'Ardino',
    'region' => '44',
    'country' => 'BG',
    'latitude' => '41.58333',
    'longitude' => '25.13333',
  ),
  5308 => 
  array (
    'city' => 'Apriltsi',
    'region' => '46',
    'country' => 'BG',
    'latitude' => '42.84142',
    'longitude' => '24.91759',
  ),
  5309 => 
  array (
    'city' => 'Antonovo',
    'region' => '60',
    'country' => 'BG',
    'latitude' => '43.15',
    'longitude' => '26.16667',
  ),
  5310 => 
  array (
    'city' => 'Anton',
    'region' => '58',
    'country' => 'BG',
    'latitude' => '42.75',
    'longitude' => '24.28333',
  ),
  5311 => 
  array (
    'city' => 'Alfatar',
    'region' => '55',
    'country' => 'BG',
    'latitude' => '43.95',
    'longitude' => '27.28333',
  ),
  5312 => 
  array (
    'city' => 'Aksakovo',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.25',
    'longitude' => '27.81667',
  ),
  5313 => 
  array (
    'city' => 'Akhtopol',
    'region' => '39',
    'country' => 'BG',
    'latitude' => '42.1',
    'longitude' => '27.95',
  ),
  5314 => 
  array (
    'city' => 'Zlatni Pyasatsi',
    'region' => '61',
    'country' => 'BG',
    'latitude' => '43.285',
    'longitude' => '28.0418',
  ),
  5315 => 
  array (
    'city' => 'Sitrah',
    'region' => '18',
    'country' => 'BH',
    'latitude' => '26.15472',
    'longitude' => '50.62056',
  ),
  5316 => 
  array (
    'city' => 'Madīnat ‘Īsá',
    'region' => '18',
    'country' => 'BH',
    'latitude' => '26.17361',
    'longitude' => '50.54778',
  ),
  5317 => 
  array (
    'city' => 'Jidd Ḩafş',
    'region' => '16',
    'country' => 'BH',
    'latitude' => '26.21861',
    'longitude' => '50.54778',
  ),
  5318 => 
  array (
    'city' => 'Madīnat Ḩamad',
    'region' => '19',
    'country' => 'BH',
    'latitude' => '26.11528',
    'longitude' => '50.50694',
  ),
  5319 => 
  array (
    'city' => 'Dār Kulayb',
    'region' => '19',
    'country' => 'BH',
    'latitude' => '26.06861',
    'longitude' => '50.50389',
  ),
  5320 => 
  array (
    'city' => 'Al Muḩarraq',
    'region' => '15',
    'country' => 'BH',
    'latitude' => '26.25722',
    'longitude' => '50.61194',
  ),
  5321 => 
  array (
    'city' => 'Manama',
    'region' => '16',
    'country' => 'BH',
    'latitude' => '26.21536',
    'longitude' => '50.5832',
  ),
  5322 => 
  array (
    'city' => 'Al Ḩadd',
    'region' => '15',
    'country' => 'BH',
    'latitude' => '26.24556',
    'longitude' => '50.65417',
  ),
  5323 => 
  array (
    'city' => 'Ar Rifā‘',
    'region' => '18',
    'country' => 'BH',
    'latitude' => '26.13',
    'longitude' => '50.555',
  ),
  5324 => 
  array (
    'city' => 'Makamba',
    'region' => '17',
    'country' => 'BI',
    'latitude' => '-4.1348',
    'longitude' => '29.804',
  ),
  5325 => 
  array (
    'city' => 'Bururi',
    'region' => '10',
    'country' => 'BI',
    'latitude' => '-3.94877',
    'longitude' => '29.62438',
  ),
  5326 => 
  array (
    'city' => 'Rumonge',
    'region' => '10',
    'country' => 'BI',
    'latitude' => '-3.9736',
    'longitude' => '29.4386',
  ),
  5327 => 
  array (
    'city' => 'Mwaro',
    'region' => '23',
    'country' => 'BI',
    'latitude' => '-3.5272',
    'longitude' => '29.7034',
  ),
  5328 => 
  array (
    'city' => 'Bujumbura',
    'region' => '24',
    'country' => 'BI',
    'latitude' => '-3.3822',
    'longitude' => '29.3644',
  ),
  5329 => 
  array (
    'city' => 'Muramvya',
    'region' => '22',
    'country' => 'BI',
    'latitude' => '-3.2682',
    'longitude' => '29.6079',
  ),
  5330 => 
  array (
    'city' => 'Gitega',
    'region' => '13',
    'country' => 'BI',
    'latitude' => '-3.4264',
    'longitude' => '29.9308',
  ),
  5331 => 
  array (
    'city' => 'Ruyigi',
    'region' => '21',
    'country' => 'BI',
    'latitude' => '-3.47639',
    'longitude' => '30.24861',
  ),
  5332 => 
  array (
    'city' => 'Cankuzo',
    'region' => '11',
    'country' => 'BI',
    'latitude' => '-3.2186',
    'longitude' => '30.5528',
  ),
  5333 => 
  array (
    'city' => 'Karuzi',
    'region' => '14',
    'country' => 'BI',
    'latitude' => '-3.10608',
    'longitude' => '30.17351',
  ),
  5334 => 
  array (
    'city' => 'Bubanza',
    'region' => '09',
    'country' => 'BI',
    'latitude' => '-3.0804',
    'longitude' => '29.391',
  ),
  5335 => 
  array (
    'city' => 'Cibitoke',
    'region' => '12',
    'country' => 'BI',
    'latitude' => '-2.8869',
    'longitude' => '29.1248',
  ),
  5336 => 
  array (
    'city' => 'Ngozi',
    'region' => '19',
    'country' => 'BI',
    'latitude' => '-2.9075',
    'longitude' => '29.8306',
  ),
  5337 => 
  array (
    'city' => 'Kayanza',
    'region' => '15',
    'country' => 'BI',
    'latitude' => '-2.9221',
    'longitude' => '29.6293',
  ),
  5338 => 
  array (
    'city' => 'Muyinga',
    'region' => '18',
    'country' => 'BI',
    'latitude' => '-2.8451',
    'longitude' => '30.3414',
  ),
  5339 => 
  array (
    'city' => 'Kirundo',
    'region' => '16',
    'country' => 'BI',
    'latitude' => '-2.5845',
    'longitude' => '30.0959',
  ),
  5340 => 
  array (
    'city' => 'Rutana',
    'region' => '20',
    'country' => 'BI',
    'latitude' => '-3.9279',
    'longitude' => '29.992',
  ),
  5341 => 
  array (
    'city' => 'Tchaourou',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '8.88649',
    'longitude' => '2.59752',
  ),
  5342 => 
  array (
    'city' => 'Tanguiéta',
    'region' => '08',
    'country' => 'BJ',
    'latitude' => '10.62118',
    'longitude' => '1.26651',
  ),
  5343 => 
  array (
    'city' => 'Savé',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '8.04253',
    'longitude' => '2.48599',
  ),
  5344 => 
  array (
    'city' => 'Savalou',
    'region' => '11',
    'country' => 'BJ',
    'latitude' => '7.92807',
    'longitude' => '1.97558',
  ),
  5345 => 
  array (
    'city' => 'Sakété',
    'region' => '17',
    'country' => 'BJ',
    'latitude' => '6.73618',
    'longitude' => '2.65866',
  ),
  5346 => 
  array (
    'city' => 'Porto-Novo',
    'region' => '16',
    'country' => 'BJ',
    'latitude' => '6.49646',
    'longitude' => '2.60359',
  ),
  5347 => 
  array (
    'city' => 'Pobé',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '6.98008',
    'longitude' => '2.6649',
  ),
  5348 => 
  array (
    'city' => 'Parakou',
    'region' => '10',
    'country' => 'BJ',
    'latitude' => '9.33716',
    'longitude' => '2.63031',
  ),
  5349 => 
  array (
    'city' => 'Ouidah',
    'region' => '09',
    'country' => 'BJ',
    'latitude' => '6.36307',
    'longitude' => '2.08506',
  ),
  5350 => 
  array (
    'city' => 'Nikki',
    'region' => '10',
    'country' => 'BJ',
    'latitude' => '9.94009',
    'longitude' => '3.21075',
  ),
  5351 => 
  array (
    'city' => 'Natitingou',
    'region' => '08',
    'country' => 'BJ',
    'latitude' => '10.30416',
    'longitude' => '1.37962',
  ),
  5352 => 
  array (
    'city' => 'Malanville',
    'region' => '08',
    'country' => 'BJ',
    'latitude' => '11.86846',
    'longitude' => '3.38989',
  ),
  5353 => 
  array (
    'city' => 'Lokossa',
    'region' => '15',
    'country' => 'BJ',
    'latitude' => '6.63869',
    'longitude' => '1.71674',
  ),
  5354 => 
  array (
    'city' => 'Kétou',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '7.36332',
    'longitude' => '2.59978',
  ),
  5355 => 
  array (
    'city' => 'Kandi',
    'region' => '07',
    'country' => 'BJ',
    'latitude' => '11.13417',
    'longitude' => '2.93861',
  ),
  5356 => 
  array (
    'city' => 'Grand-Popo',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '6.28036',
    'longitude' => '1.82251',
  ),
  5357 => 
  array (
    'city' => 'Dogbo',
    'region' => '12',
    'country' => 'BJ',
    'latitude' => '6.81667',
    'longitude' => '1.78333',
  ),
  5358 => 
  array (
    'city' => 'Djougou',
    'region' => '13',
    'country' => 'BJ',
    'latitude' => '9.70853',
    'longitude' => '1.66598',
  ),
  5359 => 
  array (
    'city' => 'Dassa-Zoumé',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '7.75',
    'longitude' => '2.18333',
  ),
  5360 => 
  array (
    'city' => 'Cové',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '7.22097',
    'longitude' => '2.34017',
  ),
  5361 => 
  array (
    'city' => 'Cotonou',
    'region' => '14',
    'country' => 'BJ',
    'latitude' => '6.36536',
    'longitude' => '2.41833',
  ),
  5362 => 
  array (
    'city' => 'Comé',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '6.40764',
    'longitude' => '1.88198',
  ),
  5363 => 
  array (
    'city' => 'Bohicon',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '7.17826',
    'longitude' => '2.0667',
  ),
  5364 => 
  array (
    'city' => 'Bétérou',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '9.19916',
    'longitude' => '2.25855',
  ),
  5365 => 
  array (
    'city' => 'Bembèrèkè',
    'region' => '10',
    'country' => 'BJ',
    'latitude' => '10.22827',
    'longitude' => '2.66335',
  ),
  5366 => 
  array (
    'city' => 'Bassila',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '9.00814',
    'longitude' => '1.6654',
  ),
  5367 => 
  array (
    'city' => 'Banikoara',
    'region' => '07',
    'country' => 'BJ',
    'latitude' => '11.29845',
    'longitude' => '2.43856',
  ),
  5368 => 
  array (
    'city' => 'Aplahoué',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '6.93333',
    'longitude' => '1.68333',
  ),
  5369 => 
  array (
    'city' => 'Allada',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '6.66547',
    'longitude' => '2.15138',
  ),
  5370 => 
  array (
    'city' => 'Abomey-Calavi',
    'region' => '00',
    'country' => 'BJ',
    'latitude' => '6.44852',
    'longitude' => '2.35566',
  ),
  5371 => 
  array (
    'city' => 'Abomey',
    'region' => '18',
    'country' => 'BJ',
    'latitude' => '7.18286',
    'longitude' => '1.99119',
  ),
  5372 => 
  array (
    'city' => 'Gustavia',
    'region' => '00',
    'country' => 'BL',
    'latitude' => '17.89618',
    'longitude' => '-62.84978',
  ),
  5373 => 
  array (
    'city' => 'Saint George',
    'region' => '06',
    'country' => 'BM',
    'latitude' => '32.38167',
    'longitude' => '-64.67806',
  ),
  5374 => 
  array (
    'city' => 'Hamilton',
    'region' => '03',
    'country' => 'BM',
    'latitude' => '32.29149',
    'longitude' => '-64.77797',
  ),
  5375 => 
  array (
    'city' => 'Tutong',
    'region' => '00',
    'country' => 'BN',
    'latitude' => '4.8',
    'longitude' => '114.65',
  ),
  5376 => 
  array (
    'city' => 'Seria',
    'region' => '00',
    'country' => 'BN',
    'latitude' => '4.61667',
    'longitude' => '114.31667',
  ),
  5377 => 
  array (
    'city' => 'Kuala Belait',
    'region' => '00',
    'country' => 'BN',
    'latitude' => '4.58333',
    'longitude' => '114.18333',
  ),
  5378 => 
  array (
    'city' => 'Bangar',
    'region' => '00',
    'country' => 'BN',
    'latitude' => '4.71667',
    'longitude' => '115.06667',
  ),
  5379 => 
  array (
    'city' => 'Bandar Seri Begawan',
    'region' => '02',
    'country' => 'BN',
    'latitude' => '4.94029',
    'longitude' => '114.94806',
  ),
  5380 => 
  array (
    'city' => 'San Pedro',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-18.28333',
    'longitude' => '-59.81667',
  ),
  5381 => 
  array (
    'city' => 'San Matías',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-16.36667',
    'longitude' => '-58.4',
  ),
  5382 => 
  array (
    'city' => 'Roboré',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-18.33333',
    'longitude' => '-59.75',
  ),
  5383 => 
  array (
    'city' => 'Puerto Quijarro',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.78333',
    'longitude' => '-57.76667',
  ),
  5384 => 
  array (
    'city' => 'Yamparáez',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.18722',
    'longitude' => '-65.12583',
  ),
  5385 => 
  array (
    'city' => 'Yacuiba',
    'region' => '09',
    'country' => 'BO',
    'latitude' => '-22.03333',
    'longitude' => '-63.68333',
  ),
  5386 => 
  array (
    'city' => 'Warnes',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.5',
    'longitude' => '-63.16667',
  ),
  5387 => 
  array (
    'city' => 'Viloco',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.95',
    'longitude' => '-67.55',
  ),
  5388 => 
  array (
    'city' => 'Villazón',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-22.08659',
    'longitude' => '-65.59422',
  ),
  5389 => 
  array (
    'city' => 'Villa Yapacaní',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.4',
    'longitude' => '-63.83333',
  ),
  5390 => 
  array (
    'city' => 'Villa Serrano',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.11667',
    'longitude' => '-64.33333',
  ),
  5391 => 
  array (
    'city' => 'Yotala',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.15861',
    'longitude' => '-65.26417',
  ),
  5392 => 
  array (
    'city' => 'Villamontes',
    'region' => '09',
    'country' => 'BO',
    'latitude' => '-21.25',
    'longitude' => '-63.5',
  ),
  5393 => 
  array (
    'city' => 'Vallegrande',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-18.48972',
    'longitude' => '-64.10694',
  ),
  5394 => 
  array (
    'city' => 'Uyuni',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-20.45967',
    'longitude' => '-66.82503',
  ),
  5395 => 
  array (
    'city' => 'Urubichá',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-15.38333',
    'longitude' => '-62.95',
  ),
  5396 => 
  array (
    'city' => 'Tupiza',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-21.45',
    'longitude' => '-65.71667',
  ),
  5397 => 
  array (
    'city' => 'La Santisima Trinidad',
    'region' => '03',
    'country' => 'BO',
    'latitude' => '-14.83333',
    'longitude' => '-64.9',
  ),
  5398 => 
  array (
    'city' => 'Totoral',
    'region' => '05',
    'country' => 'BO',
    'latitude' => '-18.51667',
    'longitude' => '-66.86667',
  ),
  5399 => 
  array (
    'city' => 'Totora',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.72662',
    'longitude' => '-65.1932',
  ),
  5400 => 
  array (
    'city' => 'Tomina',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.18333',
    'longitude' => '-64.53333',
  ),
  5401 => 
  array (
    'city' => 'Tomás Barrón',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-17.58333',
    'longitude' => '-67.51667',
  ),
  5402 => 
  array (
    'city' => 'Tiahuanaco',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.55',
    'longitude' => '-68.7',
  ),
  5403 => 
  array (
    'city' => 'Tarija',
    'region' => '09',
    'country' => 'BO',
    'latitude' => '-21.53549',
    'longitude' => '-64.72956',
  ),
  5404 => 
  array (
    'city' => 'Tarata',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.61667',
    'longitude' => '-66.01667',
  ),
  5405 => 
  array (
    'city' => 'Tarabuco',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.16667',
    'longitude' => '-64.91667',
  ),
  5406 => 
  array (
    'city' => 'Sucre',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.03332',
    'longitude' => '-65.26274',
  ),
  5407 => 
  array (
    'city' => 'Sotomayor',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.34',
    'longitude' => '-64.99917',
  ),
  5408 => 
  array (
    'city' => 'Sorata',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-15.76667',
    'longitude' => '-68.63333',
  ),
  5409 => 
  array (
    'city' => 'Sipe Sipe',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.45',
    'longitude' => '-66.38333',
  ),
  5410 => 
  array (
    'city' => 'Sapirangui',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.93333',
    'longitude' => '-63.78333',
  ),
  5411 => 
  array (
    'city' => 'Santiago del Torno',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.98333',
    'longitude' => '-63.38333',
  ),
  5412 => 
  array (
    'city' => 'Santa Rosa',
    'region' => '03',
    'country' => 'BO',
    'latitude' => '-14.16667',
    'longitude' => '-66.88333',
  ),
  5413 => 
  array (
    'city' => 'Santa Rita',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.96667',
    'longitude' => '-63.35',
  ),
  5414 => 
  array (
    'city' => 'Santa Elena',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.55',
    'longitude' => '-64.78333',
  ),
  5415 => 
  array (
    'city' => 'Santa Cruz de la Sierra',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.8',
    'longitude' => '-63.16667',
  ),
  5416 => 
  array (
    'city' => 'Santa Bárbara',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-20.91667',
    'longitude' => '-66.05',
  ),
  5417 => 
  array (
    'city' => 'San Ramón',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-14.48333',
    'longitude' => '-63.15',
  ),
  5418 => 
  array (
    'city' => 'San Ramón',
    'region' => '03',
    'country' => 'BO',
    'latitude' => '-13.28333',
    'longitude' => '-64.71667',
  ),
  5419 => 
  array (
    'city' => 'San Pedro',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.61667',
    'longitude' => '-64.5',
  ),
  5420 => 
  array (
    'city' => 'San Pedro',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.23333',
    'longitude' => '-68.85',
  ),
  5421 => 
  array (
    'city' => 'San Pablo',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.21667',
    'longitude' => '-68.83333',
  ),
  5422 => 
  array (
    'city' => 'San Julian',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.78333',
    'longitude' => '-62.86667',
  ),
  5423 => 
  array (
    'city' => 'San Juan del Surutú',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.48333',
    'longitude' => '-63.7',
  ),
  5424 => 
  array (
    'city' => 'San Juan',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-21.26667',
    'longitude' => '-65.3',
  ),
  5425 => 
  array (
    'city' => 'San Ignacio de Velasco',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-16.36667',
    'longitude' => '-60.95',
  ),
  5426 => 
  array (
    'city' => 'San Francisco',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.71667',
    'longitude' => '-64.7',
  ),
  5427 => 
  array (
    'city' => 'San Carlos',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.4',
    'longitude' => '-63.75',
  ),
  5428 => 
  array (
    'city' => 'San Borja',
    'region' => '03',
    'country' => 'BO',
    'latitude' => '-14.81667',
    'longitude' => '-66.85',
  ),
  5429 => 
  array (
    'city' => 'Samaipata',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-18.15',
    'longitude' => '-63.86667',
  ),
  5430 => 
  array (
    'city' => 'Salitre',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.88333',
    'longitude' => '-64.91667',
  ),
  5431 => 
  array (
    'city' => 'Rurrenabaque',
    'region' => '03',
    'country' => 'BO',
    'latitude' => '-14.44125',
    'longitude' => '-67.52781',
  ),
  5432 => 
  array (
    'city' => 'Rosario del Ingre',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.58333',
    'longitude' => '-63.9',
  ),
  5433 => 
  array (
    'city' => 'Riberalta',
    'region' => '03',
    'country' => 'BO',
    'latitude' => '-10.98333',
    'longitude' => '-66.1',
  ),
  5434 => 
  array (
    'city' => 'Reyes',
    'region' => '03',
    'country' => 'BO',
    'latitude' => '-14.31667',
    'longitude' => '-67.38333',
  ),
  5435 => 
  array (
    'city' => 'Quime',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.98333',
    'longitude' => '-67.21667',
  ),
  5436 => 
  array (
    'city' => 'Punata',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.55',
    'longitude' => '-65.83333',
  ),
  5437 => 
  array (
    'city' => 'Pulqui',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.23333',
    'longitude' => '-65.21667',
  ),
  5438 => 
  array (
    'city' => 'Puesto de Pailas',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.65',
    'longitude' => '-62.8',
  ),
  5439 => 
  array (
    'city' => 'Presto',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-18.92944',
    'longitude' => '-64.93917',
  ),
  5440 => 
  array (
    'city' => 'Potosí',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-19.58361',
    'longitude' => '-65.75306',
  ),
  5441 => 
  array (
    'city' => 'Potolo',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.00556',
    'longitude' => '-65.52861',
  ),
  5442 => 
  array (
    'city' => 'Portachuelo',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.35',
    'longitude' => '-63.4',
  ),
  5443 => 
  array (
    'city' => 'Poopó',
    'region' => '05',
    'country' => 'BO',
    'latitude' => '-18.36667',
    'longitude' => '-66.96667',
  ),
  5444 => 
  array (
    'city' => 'Pocpo',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-18.83333',
    'longitude' => '-65.36667',
  ),
  5445 => 
  array (
    'city' => 'Piocera',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-18.75',
    'longitude' => '-65.4',
  ),
  5446 => 
  array (
    'city' => 'Pilaya',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.95',
    'longitude' => '-64.75',
  ),
  5447 => 
  array (
    'city' => 'Patacamaya',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-17.23333',
    'longitude' => '-67.91667',
  ),
  5448 => 
  array (
    'city' => 'Pailón',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.65',
    'longitude' => '-62.75',
  ),
  5449 => 
  array (
    'city' => 'Padilla',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.3',
    'longitude' => '-64.3',
  ),
  5450 => 
  array (
    'city' => 'Oruro',
    'region' => '05',
    'country' => 'BO',
    'latitude' => '-17.98333',
    'longitude' => '-67.15',
  ),
  5451 => 
  array (
    'city' => 'Okinawa Número Uno',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.23333',
    'longitude' => '-62.81667',
  ),
  5452 => 
  array (
    'city' => 'Montero',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.33333',
    'longitude' => '-63.25',
  ),
  5453 => 
  array (
    'city' => 'Monteagudo',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.81667',
    'longitude' => '-63.98333',
  ),
  5454 => 
  array (
    'city' => 'Mojotoro',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-18.91667',
    'longitude' => '-65.06667',
  ),
  5455 => 
  array (
    'city' => 'Mojocoya',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-18.76333',
    'longitude' => '-64.62139',
  ),
  5456 => 
  array (
    'city' => 'Mizque',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.94101',
    'longitude' => '-65.34016',
  ),
  5457 => 
  array (
    'city' => 'Mineros',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.11667',
    'longitude' => '-63.23333',
  ),
  5458 => 
  array (
    'city' => 'Maragua',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.04611',
    'longitude' => '-65.42861',
  ),
  5459 => 
  array (
    'city' => 'Mapiri',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-15.25',
    'longitude' => '-68.16667',
  ),
  5460 => 
  array (
    'city' => 'Mairana',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-18.11667',
    'longitude' => '-63.93333',
  ),
  5461 => 
  array (
    'city' => 'Machacamarca',
    'region' => '05',
    'country' => 'BO',
    'latitude' => '-18.16667',
    'longitude' => '-67.03333',
  ),
  5462 => 
  array (
    'city' => 'Los Negros',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.73333',
    'longitude' => '-63.43333',
  ),
  5463 => 
  array (
    'city' => 'Llallagua',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-18.41667',
    'longitude' => '-66.63333',
  ),
  5464 => 
  array (
    'city' => 'Lintaca',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.76667',
    'longitude' => '-65.33333',
  ),
  5465 => 
  array (
    'city' => 'Limoncito',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-18.01667',
    'longitude' => '-63.4',
  ),
  5466 => 
  array (
    'city' => 'Las Carreras',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-21.25',
    'longitude' => '-65.28333',
  ),
  5467 => 
  array (
    'city' => 'Las Carreras',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-21.21667',
    'longitude' => '-65.28333',
  ),
  5468 => 
  array (
    'city' => 'La Paz',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.5',
    'longitude' => '-68.15',
  ),
  5469 => 
  array (
    'city' => 'Lahuachaca',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-17.36667',
    'longitude' => '-67.66667',
  ),
  5470 => 
  array (
    'city' => 'La Cueva',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.93333',
    'longitude' => '-64.9',
  ),
  5471 => 
  array (
    'city' => 'La Bélgica',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.55',
    'longitude' => '-63.21667',
  ),
  5472 => 
  array (
    'city' => 'Jorochito',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-18.05',
    'longitude' => '-63.43333',
  ),
  5473 => 
  array (
    'city' => 'Isla del Sol',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.01667',
    'longitude' => '-69.15',
  ),
  5474 => 
  array (
    'city' => 'Irpa Irpa',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.71667',
    'longitude' => '-66.26667',
  ),
  5475 => 
  array (
    'city' => 'Huayllas',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.16972',
    'longitude' => '-65.32611',
  ),
  5476 => 
  array (
    'city' => 'Huatajata',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.2',
    'longitude' => '-68.68333',
  ),
  5477 => 
  array (
    'city' => 'Huata',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.01667',
    'longitude' => '-65.25',
  ),
  5478 => 
  array (
    'city' => 'Huanuni',
    'region' => '05',
    'country' => 'BO',
    'latitude' => '-18.26667',
    'longitude' => '-66.85',
  ),
  5479 => 
  array (
    'city' => 'Huajlaya',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.6',
    'longitude' => '-64.55',
  ),
  5480 => 
  array (
    'city' => 'Guayaramerín',
    'region' => '03',
    'country' => 'BO',
    'latitude' => '-10.83676',
    'longitude' => '-65.36136',
  ),
  5481 => 
  array (
    'city' => 'Entre Ríos',
    'region' => '09',
    'country' => 'BO',
    'latitude' => '-21.53333',
    'longitude' => '-64.2',
  ),
  5482 => 
  array (
    'city' => 'Culpina',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.83333',
    'longitude' => '-64.96667',
  ),
  5483 => 
  array (
    'city' => 'Cotoca',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.81667',
    'longitude' => '-63.05',
  ),
  5484 => 
  array (
    'city' => 'Coroico',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.18889',
    'longitude' => '-67.72713',
  ),
  5485 => 
  array (
    'city' => 'Coripata',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.3',
    'longitude' => '-67.6',
  ),
  5486 => 
  array (
    'city' => 'Copacabana',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.15',
    'longitude' => '-69.08333',
  ),
  5487 => 
  array (
    'city' => 'Concepción',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-16.43333',
    'longitude' => '-60.9',
  ),
  5488 => 
  array (
    'city' => 'Comarapa',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.9',
    'longitude' => '-64.48333',
  ),
  5489 => 
  array (
    'city' => 'Colquiri',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-17.41667',
    'longitude' => '-67.13333',
  ),
  5490 => 
  array (
    'city' => 'Colquechaca',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-18.66667',
    'longitude' => '-66.01667',
  ),
  5491 => 
  array (
    'city' => 'Colomi',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.35',
    'longitude' => '-65.86667',
  ),
  5492 => 
  array (
    'city' => 'Colchani',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-20.3',
    'longitude' => '-66.93333',
  ),
  5493 => 
  array (
    'city' => 'Colchani',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.31667',
    'longitude' => '-66.71667',
  ),
  5494 => 
  array (
    'city' => 'Cochabamba',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.3895',
    'longitude' => '-66.1568',
  ),
  5495 => 
  array (
    'city' => 'Cobija',
    'region' => '06',
    'country' => 'BO',
    'latitude' => '-11.02671',
    'longitude' => '-68.76918',
  ),
  5496 => 
  array (
    'city' => 'Cliza',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.6',
    'longitude' => '-65.93333',
  ),
  5497 => 
  array (
    'city' => 'Chuqui Chuqui',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-18.81667',
    'longitude' => '-65.06667',
  ),
  5498 => 
  array (
    'city' => 'Chulumani',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.40962',
    'longitude' => '-67.52626',
  ),
  5499 => 
  array (
    'city' => 'Chimoré',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-16.98333',
    'longitude' => '-65.13333',
  ),
  5500 => 
  array (
    'city' => 'Chaunaca',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-19.01667',
    'longitude' => '-65.46667',
  ),
  5501 => 
  array (
    'city' => 'Charagua',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-19.8',
    'longitude' => '-63.21667',
  ),
  5502 => 
  array (
    'city' => 'Challapata',
    'region' => '05',
    'country' => 'BO',
    'latitude' => '-18.9',
    'longitude' => '-66.76667',
  ),
  5503 => 
  array (
    'city' => 'Carandayti',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.75',
    'longitude' => '-63.06667',
  ),
  5504 => 
  array (
    'city' => 'Capinota',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.71667',
    'longitude' => '-66.23333',
  ),
  5505 => 
  array (
    'city' => 'Camiri',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-20.05',
    'longitude' => '-63.51667',
  ),
  5506 => 
  array (
    'city' => 'Camatindi',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.98333',
    'longitude' => '-63.43333',
  ),
  5507 => 
  array (
    'city' => 'Camargo',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.65',
    'longitude' => '-65.21667',
  ),
  5508 => 
  array (
    'city' => 'Buena Vista',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-17.45',
    'longitude' => '-63.66667',
  ),
  5509 => 
  array (
    'city' => 'Boyuibe',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-20.41667',
    'longitude' => '-63.28333',
  ),
  5510 => 
  array (
    'city' => 'Betanzos',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-19.55056',
    'longitude' => '-65.45333',
  ),
  5511 => 
  array (
    'city' => 'Azurduy',
    'region' => '01',
    'country' => 'BO',
    'latitude' => '-20.1',
    'longitude' => '-64.41667',
  ),
  5512 => 
  array (
    'city' => 'Atocha',
    'region' => '07',
    'country' => 'BO',
    'latitude' => '-20.93333',
    'longitude' => '-66.23333',
  ),
  5513 => 
  array (
    'city' => 'Ascensión',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-15.7',
    'longitude' => '-63.08333',
  ),
  5514 => 
  array (
    'city' => 'Arani',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-17.56667',
    'longitude' => '-65.76667',
  ),
  5515 => 
  array (
    'city' => 'Aiquile',
    'region' => '02',
    'country' => 'BO',
    'latitude' => '-18.20408',
    'longitude' => '-65.18068',
  ),
  5516 => 
  array (
    'city' => 'Achacachi',
    'region' => '04',
    'country' => 'BO',
    'latitude' => '-16.05',
    'longitude' => '-68.68333',
  ),
  5517 => 
  array (
    'city' => 'Abapó',
    'region' => '08',
    'country' => 'BO',
    'latitude' => '-18.83333',
    'longitude' => '-63.46667',
  ),
  5518 => 
  array (
    'city' => 'Upper Hell\'s Gate',
    'region' => 'SB',
    'country' => 'BQ',
    'latitude' => '17.643',
    'longitude' => '-63.22649',
  ),
  5519 => 
  array (
    'city' => 'The Bottom',
    'region' => 'SB',
    'country' => 'BQ',
    'latitude' => '17.6259',
    'longitude' => '-63.24919',
  ),
  5520 => 
  array (
    'city' => 'Oranjestad',
    'region' => 'SE',
    'country' => 'BQ',
    'latitude' => '17.48268',
    'longitude' => '-62.98324',
  ),
  5521 => 
  array (
    'city' => 'Kralendijk',
    'region' => 'BO',
    'country' => 'BQ',
    'latitude' => '12.15',
    'longitude' => '-68.26667',
  ),
  5522 => 
  array (
    'city' => 'Dorp Tera Kora',
    'region' => 'BO',
    'country' => 'BQ',
    'latitude' => '12.13333',
    'longitude' => '-68.26667',
  ),
  5523 => 
  array (
    'city' => 'Dorp Rincón',
    'region' => 'BO',
    'country' => 'BQ',
    'latitude' => '12.23333',
    'longitude' => '-68.33333',
  ),
  5524 => 
  array (
    'city' => 'Dorp Antriol',
    'region' => 'BO',
    'country' => 'BQ',
    'latitude' => '12.16667',
    'longitude' => '-68.26667',
  ),
  5525 => 
  array (
    'city' => 'Vitorino Freire',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.06667',
    'longitude' => '-45.16667',
  ),
  5526 => 
  array (
    'city' => 'Vitória do Mearim',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.46222',
    'longitude' => '-44.87056',
  ),
  5527 => 
  array (
    'city' => 'Vitória de Santo Antão',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.11806',
    'longitude' => '-35.29139',
  ),
  5528 => 
  array (
    'city' => 'Viseu',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.19667',
    'longitude' => '-46.14',
  ),
  5529 => 
  array (
    'city' => 'Conde',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.25972',
    'longitude' => '-34.9075',
  ),
  5530 => 
  array (
    'city' => 'Vigia',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.85833',
    'longitude' => '-48.14167',
  ),
  5531 => 
  array (
    'city' => 'Viçosa do Ceará',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.56222',
    'longitude' => '-41.09222',
  ),
  5532 => 
  array (
    'city' => 'Viçosa',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.37139',
    'longitude' => '-36.24083',
  ),
  5533 => 
  array (
    'city' => 'Vicência',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.65694',
    'longitude' => '-35.32667',
  ),
  5534 => 
  array (
    'city' => 'Viana',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.22028',
    'longitude' => '-45.00361',
  ),
  5535 => 
  array (
    'city' => 'Várzea Alegre',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.35',
    'longitude' => '-40.38333',
  ),
  5536 => 
  array (
    'city' => 'Varjota',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.19444',
    'longitude' => '-40.47667',
  ),
  5537 => 
  array (
    'city' => 'Vargem Grande',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.54306',
    'longitude' => '-43.91583',
  ),
  5538 => 
  array (
    'city' => 'Valença do Piauí',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-6.4075',
    'longitude' => '-41.74556',
  ),
  5539 => 
  array (
    'city' => 'Urucurituba',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-2.68333',
    'longitude' => '-57.66667',
  ),
  5540 => 
  array (
    'city' => 'Uruçuí',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-7.22944',
    'longitude' => '-44.55611',
  ),
  5541 => 
  array (
    'city' => 'Urucará',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-2.53639',
    'longitude' => '-57.76',
  ),
  5542 => 
  array (
    'city' => 'Uruburetama',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.625',
    'longitude' => '-39.50833',
  ),
  5543 => 
  array (
    'city' => 'Urbano Santos',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.20778',
    'longitude' => '-43.40361',
  ),
  5544 => 
  array (
    'city' => 'Upanema',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.64194',
    'longitude' => '-37.25778',
  ),
  5545 => 
  array (
    'city' => 'União dos Palmares',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.16278',
    'longitude' => '-36.03194',
  ),
  5546 => 
  array (
    'city' => 'União',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-4.58583',
    'longitude' => '-42.86417',
  ),
  5547 => 
  array (
    'city' => 'Umirim',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.67722',
    'longitude' => '-39.35028',
  ),
  5548 => 
  array (
    'city' => 'Umbuzeiro',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.69556',
    'longitude' => '-35.66361',
  ),
  5549 => 
  array (
    'city' => 'Umarizal',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.99056',
    'longitude' => '-37.81444',
  ),
  5550 => 
  array (
    'city' => 'Uiraúna',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.51833',
    'longitude' => '-38.41222',
  ),
  5551 => 
  array (
    'city' => 'Ubajara',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.85444',
    'longitude' => '-40.92111',
  ),
  5552 => 
  array (
    'city' => 'Uauá',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-9.84139',
    'longitude' => '-39.48167',
  ),
  5553 => 
  array (
    'city' => 'Tutóia',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.76194',
    'longitude' => '-42.27444',
  ),
  5554 => 
  array (
    'city' => 'Turiaçu',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-1.66333',
    'longitude' => '-45.37167',
  ),
  5555 => 
  array (
    'city' => 'Tupanatinga',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.75333',
    'longitude' => '-37.33972',
  ),
  5556 => 
  array (
    'city' => 'Tuntum',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.25806',
    'longitude' => '-44.64889',
  ),
  5557 => 
  array (
    'city' => 'Tucuruí',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-3.76611',
    'longitude' => '-49.6725',
  ),
  5558 => 
  array (
    'city' => 'Tucumã',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.18333',
    'longitude' => '-50.05',
  ),
  5559 => 
  array (
    'city' => 'Triunfo',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.56667',
    'longitude' => '-38.6',
  ),
  5560 => 
  array (
    'city' => 'Trindade',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.76194',
    'longitude' => '-40.26778',
  ),
  5561 => 
  array (
    'city' => 'Trairi',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.27778',
    'longitude' => '-39.26889',
  ),
  5562 => 
  array (
    'city' => 'Traipu',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.97056',
    'longitude' => '-37.00333',
  ),
  5563 => 
  array (
    'city' => 'Touros',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.19889',
    'longitude' => '-35.46083',
  ),
  5564 => 
  array (
    'city' => 'Toritama',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.00667',
    'longitude' => '-36.05667',
  ),
  5565 => 
  array (
    'city' => 'Tomé Açu',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.41889',
    'longitude' => '-48.15222',
  ),
  5566 => 
  array (
    'city' => 'Timon',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.09417',
    'longitude' => '-42.83667',
  ),
  5567 => 
  array (
    'city' => 'Timbiras',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.25528',
    'longitude' => '-43.94056',
  ),
  5568 => 
  array (
    'city' => 'Timbaúba',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.50528',
    'longitude' => '-35.31833',
  ),
  5569 => 
  array (
    'city' => 'Tianguá',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.73222',
    'longitude' => '-40.99167',
  ),
  5570 => 
  array (
    'city' => 'Terra Santa',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.10417',
    'longitude' => '-56.48694',
  ),
  5571 => 
  array (
    'city' => 'Teresina',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.08917',
    'longitude' => '-42.80194',
  ),
  5572 => 
  array (
    'city' => 'Teixeira',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.22278',
    'longitude' => '-37.25417',
  ),
  5573 => 
  array (
    'city' => 'Tavares',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.63583',
    'longitude' => '-37.87833',
  ),
  5574 => 
  array (
    'city' => 'São João dos Inhamuns',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6',
    'longitude' => '-40.28333',
  ),
  5575 => 
  array (
    'city' => 'Taquaritinga do Norte',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.90306',
    'longitude' => '-36.04417',
  ),
  5576 => 
  array (
    'city' => 'Taquarana',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.645',
    'longitude' => '-36.49722',
  ),
  5577 => 
  array (
    'city' => 'Taperoá',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.2075',
    'longitude' => '-36.82667',
  ),
  5578 => 
  array (
    'city' => 'Tangará',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.19944',
    'longitude' => '-35.80167',
  ),
  5579 => 
  array (
    'city' => 'Tamboril',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.83222',
    'longitude' => '-40.32056',
  ),
  5580 => 
  array (
    'city' => 'Tamandaré',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.75972',
    'longitude' => '-35.10472',
  ),
  5581 => 
  array (
    'city' => 'Taipu',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.62167',
    'longitude' => '-35.59667',
  ),
  5582 => 
  array (
    'city' => 'Tabira',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.59083',
    'longitude' => '-37.53944',
  ),
  5583 => 
  array (
    'city' => 'Surubim',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.83306',
    'longitude' => '-35.75472',
  ),
  5584 => 
  array (
    'city' => 'Sumé',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.67167',
    'longitude' => '-36.88',
  ),
  5585 => 
  array (
    'city' => 'Sousa',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.75917',
    'longitude' => '-38.22806',
  ),
  5586 => 
  array (
    'city' => 'Soure',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.71667',
    'longitude' => '-48.52333',
  ),
  5587 => 
  array (
    'city' => 'Soledade',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.05722',
    'longitude' => '-36.36278',
  ),
  5588 => 
  array (
    'city' => 'Solânea',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.755',
    'longitude' => '-35.54',
  ),
  5589 => 
  array (
    'city' => 'Sobral',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.68611',
    'longitude' => '-40.34972',
  ),
  5590 => 
  array (
    'city' => 'Simplício Mendes',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-7.85389',
    'longitude' => '-41.91028',
  ),
  5591 => 
  array (
    'city' => 'Simões',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-7.59889',
    'longitude' => '-40.81778',
  ),
  5592 => 
  array (
    'city' => 'Severiano Melo',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.77722',
    'longitude' => '-37.95778',
  ),
  5593 => 
  array (
    'city' => 'Sertânia',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.07361',
    'longitude' => '-37.26444',
  ),
  5594 => 
  array (
    'city' => 'Serra Talhada',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.99194',
    'longitude' => '-38.29833',
  ),
  5595 => 
  array (
    'city' => 'Serra Branca',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.53333',
    'longitude' => '-38.26667',
  ),
  5596 => 
  array (
    'city' => 'Senador Pompeu',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.58806',
    'longitude' => '-39.37167',
  ),
  5597 => 
  array (
    'city' => 'Senador José Porfírio',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.59083',
    'longitude' => '-51.95417',
  ),
  5598 => 
  array (
    'city' => 'Satuba',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.56333',
    'longitude' => '-35.82444',
  ),
  5599 => 
  array (
    'city' => 'São Tomé',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.9725',
    'longitude' => '-36.07528',
  ),
  5600 => 
  array (
    'city' => 'São Sebastião',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.93361',
    'longitude' => '-36.55417',
  ),
  5601 => 
  array (
    'city' => 'São Raimundo Nonato',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-9.01528',
    'longitude' => '-42.69944',
  ),
  5602 => 
  array (
    'city' => 'São Raimundo das Mangabeiras',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-7.02194',
    'longitude' => '-45.48111',
  ),
  5603 => 
  array (
    'city' => 'São Pedro do Piauí',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.92944',
    'longitude' => '-42.71861',
  ),
  5604 => 
  array (
    'city' => 'São Paulo do Potengi',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.895',
    'longitude' => '-35.76278',
  ),
  5605 => 
  array (
    'city' => 'São Miguel do Tapuio',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.50361',
    'longitude' => '-41.32333',
  ),
  5606 => 
  array (
    'city' => 'São Miguel dos Campos',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.78111',
    'longitude' => '-36.09361',
  ),
  5607 => 
  array (
    'city' => 'São Miguel do Guamá',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.62667',
    'longitude' => '-47.48333',
  ),
  5608 => 
  array (
    'city' => 'São Miguel',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.46667',
    'longitude' => '-35.36667',
  ),
  5609 => 
  array (
    'city' => 'São Mateus do Maranhão',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.04167',
    'longitude' => '-44.475',
  ),
  5610 => 
  array (
    'city' => 'São Luís do Quitunde',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.31833',
    'longitude' => '-35.56111',
  ),
  5611 => 
  array (
    'city' => 'São Luís',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.52972',
    'longitude' => '-44.30278',
  ),
  5612 => 
  array (
    'city' => 'São Lourenço da Mata',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.00222',
    'longitude' => '-35.01833',
  ),
  5613 => 
  array (
    'city' => 'São José do Egito',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.47889',
    'longitude' => '-37.27444',
  ),
  5614 => 
  array (
    'city' => 'São José do Campestre',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.31556',
    'longitude' => '-35.71389',
  ),
  5615 => 
  array (
    'city' => 'São José do Belmonte',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.86139',
    'longitude' => '-38.75972',
  ),
  5616 => 
  array (
    'city' => 'São José de Ribamar',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.56194',
    'longitude' => '-44.05417',
  ),
  5617 => 
  array (
    'city' => 'São José de Piranhas',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.12056',
    'longitude' => '-38.50194',
  ),
  5618 => 
  array (
    'city' => 'São José de Mipibu',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.07472',
    'longitude' => '-35.23778',
  ),
  5619 => 
  array (
    'city' => 'São José da Tapera',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.55833',
    'longitude' => '-37.38111',
  ),
  5620 => 
  array (
    'city' => 'São José da Laje',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.00972',
    'longitude' => '-36.05833',
  ),
  5621 => 
  array (
    'city' => 'São José da Coroa Grande',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.89778',
    'longitude' => '-35.14778',
  ),
  5622 => 
  array (
    'city' => 'São Joaquim do Monte',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.4325',
    'longitude' => '-35.80444',
  ),
  5623 => 
  array (
    'city' => 'São João dos Patos',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-6.495',
    'longitude' => '-43.70222',
  ),
  5624 => 
  array (
    'city' => 'São João do Piauí',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-8.35806',
    'longitude' => '-42.24667',
  ),
  5625 => 
  array (
    'city' => 'São João de Pirabas',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.77472',
    'longitude' => '-47.17722',
  ),
  5626 => 
  array (
    'city' => 'São João Batista',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.95528',
    'longitude' => '-44.80694',
  ),
  5627 => 
  array (
    'city' => 'São João',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.87556',
    'longitude' => '-36.36667',
  ),
  5628 => 
  array (
    'city' => 'São Gonçalo do Amarante',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.79333',
    'longitude' => '-35.32944',
  ),
  5629 => 
  array (
    'city' => 'São Gonçalo do Amarante',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.60722',
    'longitude' => '-38.96833',
  ),
  5630 => 
  array (
    'city' => 'São Geraldo do Araguaia',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-6.40056',
    'longitude' => '-48.555',
  ),
  5631 => 
  array (
    'city' => 'São Félix do Xingu',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-6.64472',
    'longitude' => '-51.995',
  ),
  5632 => 
  array (
    'city' => 'São Domingos do Maranhão',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.57583',
    'longitude' => '-44.38528',
  ),
  5633 => 
  array (
    'city' => 'São Caetano de Odivelas',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.75',
    'longitude' => '-48.02',
  ),
  5634 => 
  array (
    'city' => 'São Bernardo',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.36139',
    'longitude' => '-42.41778',
  ),
  5635 => 
  array (
    'city' => 'São Bento',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.28333',
    'longitude' => '-37.75',
  ),
  5636 => 
  array (
    'city' => 'São Bento',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.69583',
    'longitude' => '-44.82139',
  ),
  5637 => 
  array (
    'city' => 'São Benedito do Rio Preto',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.33361',
    'longitude' => '-43.52833',
  ),
  5638 => 
  array (
    'city' => 'Santo Antônio do Tauá',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.15194',
    'longitude' => '-48.12944',
  ),
  5639 => 
  array (
    'city' => 'Santo Antônio',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.31056',
    'longitude' => '-35.47889',
  ),
  5640 => 
  array (
    'city' => 'Santa Rita',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.11389',
    'longitude' => '-34.97806',
  ),
  5641 => 
  array (
    'city' => 'Santa Rita',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.83333',
    'longitude' => '-43.88333',
  ),
  5642 => 
  array (
    'city' => 'Santarém',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.44306',
    'longitude' => '-54.70833',
  ),
  5643 => 
  array (
    'city' => 'Santa Quitéria do Maranhão',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.51556',
    'longitude' => '-42.54667',
  ),
  5644 => 
  array (
    'city' => 'Santa Quitéria',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.33194',
    'longitude' => '-40.15667',
  ),
  5645 => 
  array (
    'city' => 'Santana do Mundaú',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.16806',
    'longitude' => '-36.22222',
  ),
  5646 => 
  array (
    'city' => 'Santana do Matos',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.9575',
    'longitude' => '-36.65556',
  ),
  5647 => 
  array (
    'city' => 'Santana do Ipanema',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.37833',
    'longitude' => '-37.24528',
  ),
  5648 => 
  array (
    'city' => 'Santana do Acaraú',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.46056',
    'longitude' => '-40.21222',
  ),
  5649 => 
  array (
    'city' => 'Santa Maria do Pará',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.35028',
    'longitude' => '-47.57556',
  ),
  5650 => 
  array (
    'city' => 'Santa Maria da Boa Vista',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.80778',
    'longitude' => '-39.82556',
  ),
  5651 => 
  array (
    'city' => 'Santa Luzia',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-7.63333',
    'longitude' => '-47.2',
  ),
  5652 => 
  array (
    'city' => 'Santa Luzia',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.87222',
    'longitude' => '-36.91861',
  ),
  5653 => 
  array (
    'city' => 'Santa Inês',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.66667',
    'longitude' => '-45.38',
  ),
  5654 => 
  array (
    'city' => 'Santa Helena',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.23111',
    'longitude' => '-45.3',
  ),
  5655 => 
  array (
    'city' => 'Santa Cruz do Capibaribe',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.9575',
    'longitude' => '-36.20472',
  ),
  5656 => 
  array (
    'city' => 'Santa Cruz',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.22944',
    'longitude' => '-36.02278',
  ),
  5657 => 
  array (
    'city' => 'Salinópolis',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.61361',
    'longitude' => '-47.35611',
  ),
  5658 => 
  array (
    'city' => 'Salgueiro',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.07417',
    'longitude' => '-39.11917',
  ),
  5659 => 
  array (
    'city' => 'Salgado de São Félix',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.35694',
    'longitude' => '-35.44056',
  ),
  5660 => 
  array (
    'city' => 'Russas',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.94028',
    'longitude' => '-37.97583',
  ),
  5661 => 
  array (
    'city' => 'Rio Tinto',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.80306',
    'longitude' => '-35.08056',
  ),
  5662 => 
  array (
    'city' => 'Rio Largo',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.47833',
    'longitude' => '-35.85333',
  ),
  5663 => 
  array (
    'city' => 'Rio Formoso',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.66361',
    'longitude' => '-35.15861',
  ),
  5664 => 
  array (
    'city' => 'Ribeirão',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.51444',
    'longitude' => '-35.37778',
  ),
  5665 => 
  array (
    'city' => 'Riachão',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-7.36194',
    'longitude' => '-46.61722',
  ),
  5666 => 
  array (
    'city' => 'Reriutaba',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.14167',
    'longitude' => '-40.58222',
  ),
  5667 => 
  array (
    'city' => 'Remígio',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.93333',
    'longitude' => '-35.78333',
  ),
  5668 => 
  array (
    'city' => 'Regeneração',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-6.23778',
    'longitude' => '-42.68833',
  ),
  5669 => 
  array (
    'city' => 'Redenção',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.22583',
    'longitude' => '-38.73056',
  ),
  5670 => 
  array (
    'city' => 'Recife',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.05389',
    'longitude' => '-34.88111',
  ),
  5671 => 
  array (
    'city' => 'Raposa',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-6.51667',
    'longitude' => '-44.18333',
  ),
  5672 => 
  array (
    'city' => 'Quixeré',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.07417',
    'longitude' => '-37.98861',
  ),
  5673 => 
  array (
    'city' => 'Quixeramobim',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.19917',
    'longitude' => '-39.29278',
  ),
  5674 => 
  array (
    'city' => 'Quixadá',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.97139',
    'longitude' => '-39.01528',
  ),
  5675 => 
  array (
    'city' => 'Quipapá',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.82778',
    'longitude' => '-36.01167',
  ),
  5676 => 
  array (
    'city' => 'Quebrangulo',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.31889',
    'longitude' => '-36.47111',
  ),
  5677 => 
  array (
    'city' => 'Puxinanã',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.16111',
    'longitude' => '-35.96056',
  ),
  5678 => 
  array (
    'city' => 'Princesa Isabel',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.73667',
    'longitude' => '-37.99333',
  ),
  5679 => 
  array (
    'city' => 'Presidente Dutra',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.29',
    'longitude' => '-44.49',
  ),
  5680 => 
  array (
    'city' => 'Prainha',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.8',
    'longitude' => '-53.48',
  ),
  5681 => 
  array (
    'city' => 'Santana',
    'region' => '03',
    'country' => 'BR',
    'latitude' => '-0.05833',
    'longitude' => '-51.18167',
  ),
  5682 => 
  array (
    'city' => 'Porto Franco',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-6.33833',
    'longitude' => '-47.39917',
  ),
  5683 => 
  array (
    'city' => 'Porto de Moz',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.74833',
    'longitude' => '-52.23833',
  ),
  5684 => 
  array (
    'city' => 'Porto da Folha',
    'region' => '28',
    'country' => 'BR',
    'latitude' => '-9.91722',
    'longitude' => '-37.27833',
  ),
  5685 => 
  array (
    'city' => 'Porto Calvo',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.045',
    'longitude' => '-35.39833',
  ),
  5686 => 
  array (
    'city' => 'Porto',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-3.89333',
    'longitude' => '-42.71',
  ),
  5687 => 
  array (
    'city' => 'Portel',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.93556',
    'longitude' => '-50.82111',
  ),
  5688 => 
  array (
    'city' => 'Pombos',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.14139',
    'longitude' => '-35.39583',
  ),
  5689 => 
  array (
    'city' => 'Pombal',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.77028',
    'longitude' => '-37.80167',
  ),
  5690 => 
  array (
    'city' => 'Poço das Trincheiras',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.3125',
    'longitude' => '-37.28556',
  ),
  5691 => 
  array (
    'city' => 'Poço Branco',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.62278',
    'longitude' => '-35.66278',
  ),
  5692 => 
  array (
    'city' => 'Pocinhos',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.07667',
    'longitude' => '-36.06111',
  ),
  5693 => 
  array (
    'city' => 'Poção de Pedras',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.66667',
    'longitude' => '-44.85',
  ),
  5694 => 
  array (
    'city' => 'Pitimbu',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.47056',
    'longitude' => '-34.80861',
  ),
  5695 => 
  array (
    'city' => 'Pirpirituba',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.78',
    'longitude' => '-35.49861',
  ),
  5696 => 
  array (
    'city' => 'Piripiri',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-4.27333',
    'longitude' => '-41.77694',
  ),
  5697 => 
  array (
    'city' => 'Pirapemas',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.72667',
    'longitude' => '-44.22333',
  ),
  5698 => 
  array (
    'city' => 'Piracuruca',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-3.92806',
    'longitude' => '-41.70917',
  ),
  5699 => 
  array (
    'city' => 'Pio XII',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.8325',
    'longitude' => '-45.1525',
  ),
  5700 => 
  array (
    'city' => 'Pio IX',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-6.8375',
    'longitude' => '-40.57917',
  ),
  5701 => 
  array (
    'city' => 'Pinheiro',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.52139',
    'longitude' => '-45.0825',
  ),
  5702 => 
  array (
    'city' => 'Pindaré Mirim',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.60833',
    'longitude' => '-45.34333',
  ),
  5703 => 
  array (
    'city' => 'Pimenteiras',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-6.24528',
    'longitude' => '-41.41917',
  ),
  5704 => 
  array (
    'city' => 'Pilar',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.59722',
    'longitude' => '-35.95667',
  ),
  5705 => 
  array (
    'city' => 'Pilar',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.26722',
    'longitude' => '-35.26',
  ),
  5706 => 
  array (
    'city' => 'Picuí',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.51056',
    'longitude' => '-36.34694',
  ),
  5707 => 
  array (
    'city' => 'Picos',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-7.07694',
    'longitude' => '-41.46694',
  ),
  5708 => 
  array (
    'city' => 'Piancó',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.19806',
    'longitude' => '-37.92917',
  ),
  5709 => 
  array (
    'city' => 'Petrolina',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-9.39861',
    'longitude' => '-40.50083',
  ),
  5710 => 
  array (
    'city' => 'Jatobá',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-9.18306',
    'longitude' => '-38.26889',
  ),
  5711 => 
  array (
    'city' => 'Pesqueira',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.35778',
    'longitude' => '-36.69639',
  ),
  5712 => 
  array (
    'city' => 'Pentecoste',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.79278',
    'longitude' => '-39.27028',
  ),
  5713 => 
  array (
    'city' => 'Pendências',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.26',
    'longitude' => '-36.72222',
  ),
  5714 => 
  array (
    'city' => 'Penalva',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.29417',
    'longitude' => '-45.17361',
  ),
  5715 => 
  array (
    'city' => 'Pedro Velho',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.43917',
    'longitude' => '-35.22139',
  ),
  5716 => 
  array (
    'city' => 'Pedro II',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-4.42472',
    'longitude' => '-41.45861',
  ),
  5717 => 
  array (
    'city' => 'Pedras de Fogo',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.40194',
    'longitude' => '-35.11639',
  ),
  5718 => 
  array (
    'city' => 'Pedra Branca',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.45417',
    'longitude' => '-39.71722',
  ),
  5719 => 
  array (
    'city' => 'Pedra',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.49694',
    'longitude' => '-36.94083',
  ),
  5720 => 
  array (
    'city' => 'Paulo Ramos',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.21667',
    'longitude' => '-45.18333',
  ),
  5721 => 
  array (
    'city' => 'Paulo Afonso',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-9.40611',
    'longitude' => '-38.21472',
  ),
  5722 => 
  array (
    'city' => 'Paulista',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.94083',
    'longitude' => '-34.87306',
  ),
  5723 => 
  array (
    'city' => 'Paulista',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.59389',
    'longitude' => '-37.62417',
  ),
  5724 => 
  array (
    'city' => 'Patu',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.11',
    'longitude' => '-37.63667',
  ),
  5725 => 
  array (
    'city' => 'Patos',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.02444',
    'longitude' => '-37.28',
  ),
  5726 => 
  array (
    'city' => 'Pastos Bons',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-6.60167',
    'longitude' => '-44.07667',
  ),
  5727 => 
  array (
    'city' => 'Passira',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.995',
    'longitude' => '-35.58056',
  ),
  5728 => 
  array (
    'city' => 'Passagem Franca',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-6.17972',
    'longitude' => '-43.78361',
  ),
  5729 => 
  array (
    'city' => 'Parnarama',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.68167',
    'longitude' => '-43.09333',
  ),
  5730 => 
  array (
    'city' => 'Parnamirim',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.09056',
    'longitude' => '-39.57833',
  ),
  5731 => 
  array (
    'city' => 'Parnamirim',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.91556',
    'longitude' => '-35.26278',
  ),
  5732 => 
  array (
    'city' => 'Parnaíba',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-2.90472',
    'longitude' => '-41.77667',
  ),
  5733 => 
  array (
    'city' => 'Parintins',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-2.62833',
    'longitude' => '-56.73583',
  ),
  5734 => 
  array (
    'city' => 'Parelhas',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.68778',
    'longitude' => '-36.6575',
  ),
  5735 => 
  array (
    'city' => 'Parambu',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.21111',
    'longitude' => '-40.69444',
  ),
  5736 => 
  array (
    'city' => 'Paraipaba',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.43944',
    'longitude' => '-39.14833',
  ),
  5737 => 
  array (
    'city' => 'Paraibano',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-6.43306',
    'longitude' => '-43.98361',
  ),
  5738 => 
  array (
    'city' => 'Paragominas',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.96667',
    'longitude' => '-47.48333',
  ),
  5739 => 
  array (
    'city' => 'Paracuru',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.41',
    'longitude' => '-39.03056',
  ),
  5740 => 
  array (
    'city' => 'Pão de Açúcar',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.74833',
    'longitude' => '-37.43667',
  ),
  5741 => 
  array (
    'city' => 'Palmeirais',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.97778',
    'longitude' => '-43.06333',
  ),
  5742 => 
  array (
    'city' => 'Palmares',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.68333',
    'longitude' => '-35.59167',
  ),
  5743 => 
  array (
    'city' => 'Pacatuba',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.98417',
    'longitude' => '-38.62028',
  ),
  5744 => 
  array (
    'city' => 'Pacajus',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.1725',
    'longitude' => '-38.46056',
  ),
  5745 => 
  array (
    'city' => 'Ouricuri',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.8825',
    'longitude' => '-40.08167',
  ),
  5746 => 
  array (
    'city' => 'Ourém',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.55194',
    'longitude' => '-47.11444',
  ),
  5747 => 
  array (
    'city' => 'Orós',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.24444',
    'longitude' => '-38.91361',
  ),
  5748 => 
  array (
    'city' => 'Orobó',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.745',
    'longitude' => '-35.60222',
  ),
  5749 => 
  array (
    'city' => 'Oriximiná',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.76556',
    'longitude' => '-55.86611',
  ),
  5750 => 
  array (
    'city' => 'Olivença',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.51861',
    'longitude' => '-37.19056',
  ),
  5751 => 
  array (
    'city' => 'Olinda',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.00889',
    'longitude' => '-34.85528',
  ),
  5752 => 
  array (
    'city' => 'Oeiras do Pará',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.00306',
    'longitude' => '-49.85444',
  ),
  5753 => 
  array (
    'city' => 'Oeiras',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-7.02528',
    'longitude' => '-42.13111',
  ),
  5754 => 
  array (
    'city' => 'Ocara',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.49083',
    'longitude' => '-38.59667',
  ),
  5755 => 
  array (
    'city' => 'Ábidos',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.9175',
    'longitude' => '-55.51806',
  ),
  5756 => 
  array (
    'city' => 'Novo Oriente',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.53444',
    'longitude' => '-40.77417',
  ),
  5757 => 
  array (
    'city' => 'Novo Lino',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-8.915',
    'longitude' => '-35.64667',
  ),
  5758 => 
  array (
    'city' => 'Nova Russas',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.70667',
    'longitude' => '-40.56306',
  ),
  5759 => 
  array (
    'city' => 'Nova Olinda do Norte',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-3.88806',
    'longitude' => '-59.09417',
  ),
  5760 => 
  array (
    'city' => 'Nova Floresta',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.45528',
    'longitude' => '-36.20333',
  ),
  5761 => 
  array (
    'city' => 'Nova Cruz',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.47806',
    'longitude' => '-35.43389',
  ),
  5762 => 
  array (
    'city' => 'Nísia Floresta',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.09111',
    'longitude' => '-35.20861',
  ),
  5763 => 
  array (
    'city' => 'Nhamundá',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-2.18611',
    'longitude' => '-56.71306',
  ),
  5764 => 
  array (
    'city' => 'Nazaré da Mata',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.74167',
    'longitude' => '-35.22778',
  ),
  5765 => 
  array (
    'city' => 'Natuba',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.64139',
    'longitude' => '-35.55',
  ),
  5766 => 
  array (
    'city' => 'Natal',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.795',
    'longitude' => '-35.20944',
  ),
  5767 => 
  array (
    'city' => 'Murici',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.30667',
    'longitude' => '-35.94333',
  ),
  5768 => 
  array (
    'city' => 'Mulungu',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.02444',
    'longitude' => '-35.46194',
  ),
  5769 => 
  array (
    'city' => 'Muaná',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.52833',
    'longitude' => '-49.21667',
  ),
  5770 => 
  array (
    'city' => 'Morros',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-9.44667',
    'longitude' => '-46.30028',
  ),
  5771 => 
  array (
    'city' => 'Moreno',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.11861',
    'longitude' => '-35.09222',
  ),
  5772 => 
  array (
    'city' => 'Morada Nova',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.10667',
    'longitude' => '-38.3725',
  ),
  5773 => 
  array (
    'city' => 'Montes Altos',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.83333',
    'longitude' => '-47.06667',
  ),
  5774 => 
  array (
    'city' => 'Monteiro',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.88944',
    'longitude' => '-37.12',
  ),
  5775 => 
  array (
    'city' => 'Monte Alegre',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.88972',
    'longitude' => '-36.30139',
  ),
  5776 => 
  array (
    'city' => 'Monte Alegre',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.00778',
    'longitude' => '-54.06917',
  ),
  5777 => 
  array (
    'city' => 'Montanhas',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.48583',
    'longitude' => '-35.2875',
  ),
  5778 => 
  array (
    'city' => 'Monsenhor Gil',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.56417',
    'longitude' => '-42.60778',
  ),
  5779 => 
  array (
    'city' => 'Monção',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.49167',
    'longitude' => '-45.25111',
  ),
  5780 => 
  array (
    'city' => 'Mombaça',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.74306',
    'longitude' => '-39.6275',
  ),
  5781 => 
  array (
    'city' => 'Moju',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.88389',
    'longitude' => '-48.76889',
  ),
  5782 => 
  array (
    'city' => 'Mogeiro',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.29944',
    'longitude' => '-35.47944',
  ),
  5783 => 
  array (
    'city' => 'Mossoró',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.1875',
    'longitude' => '-37.34417',
  ),
  5784 => 
  array (
    'city' => 'Mocajuba',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.58417',
    'longitude' => '-49.50722',
  ),
  5785 => 
  array (
    'city' => 'Missão Velha',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.24972',
    'longitude' => '-39.14306',
  ),
  5786 => 
  array (
    'city' => 'Mirador',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-6.37083',
    'longitude' => '-44.36306',
  ),
  5787 => 
  array (
    'city' => 'Minador do Negrão',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.30528',
    'longitude' => '-36.86472',
  ),
  5788 => 
  array (
    'city' => 'Milagres',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.31333',
    'longitude' => '-38.94556',
  ),
  5789 => 
  array (
    'city' => 'Miguel Alves',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-4.16556',
    'longitude' => '-42.89528',
  ),
  5790 => 
  array (
    'city' => 'Messias',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.38333',
    'longitude' => '-35.84167',
  ),
  5791 => 
  array (
    'city' => 'Mazagão',
    'region' => '03',
    'country' => 'BR',
    'latitude' => '-0.115',
    'longitude' => '-51.28944',
  ),
  5792 => 
  array (
    'city' => 'Maués',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-3.38361',
    'longitude' => '-57.71861',
  ),
  5793 => 
  array (
    'city' => 'Matriz de Camaragibe',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.15167',
    'longitude' => '-35.53333',
  ),
  5794 => 
  array (
    'city' => 'Matinha',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.10056',
    'longitude' => '-45.03361',
  ),
  5795 => 
  array (
    'city' => 'Matias Olímpio',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-3.71583',
    'longitude' => '-42.55556',
  ),
  5796 => 
  array (
    'city' => 'Mata Grande',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.1175',
    'longitude' => '-37.73222',
  ),
  5797 => 
  array (
    'city' => 'Massaranduba',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.20028',
    'longitude' => '-35.78917',
  ),
  5798 => 
  array (
    'city' => 'Maribondo',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.57722',
    'longitude' => '-36.30528',
  ),
  5799 => 
  array (
    'city' => 'Mari',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.06',
    'longitude' => '-35.31944',
  ),
  5800 => 
  array (
    'city' => 'Marechal Deodoro',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.71028',
    'longitude' => '-35.895',
  ),
  5801 => 
  array (
    'city' => 'Marco',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.12389',
    'longitude' => '-40.14667',
  ),
  5802 => 
  array (
    'city' => 'Marapanim',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.7175',
    'longitude' => '-47.69972',
  ),
  5803 => 
  array (
    'city' => 'Maraial',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.7825',
    'longitude' => '-35.80889',
  ),
  5804 => 
  array (
    'city' => 'Maragogi',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.01222',
    'longitude' => '-35.2225',
  ),
  5805 => 
  array (
    'city' => 'Maracanaú',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.87667',
    'longitude' => '-38.62556',
  ),
  5806 => 
  array (
    'city' => 'Maracanã',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.76667',
    'longitude' => '-47.45',
  ),
  5807 => 
  array (
    'city' => 'Maracaçumé',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.04278',
    'longitude' => '-45.95917',
  ),
  5808 => 
  array (
    'city' => 'Marabá',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-5.36861',
    'longitude' => '-49.11778',
  ),
  5809 => 
  array (
    'city' => 'Manaíra',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.70611',
    'longitude' => '-38.15444',
  ),
  5810 => 
  array (
    'city' => 'Mamanguape',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.83861',
    'longitude' => '-35.12611',
  ),
  5811 => 
  array (
    'city' => 'Major Isidoro',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.53222',
    'longitude' => '-36.985',
  ),
  5812 => 
  array (
    'city' => 'Maceió',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.66583',
    'longitude' => '-35.73528',
  ),
  5813 => 
  array (
    'city' => 'Macau',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.115',
    'longitude' => '-36.63444',
  ),
  5814 => 
  array (
    'city' => 'Macaparana',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.55472',
    'longitude' => '-35.45306',
  ),
  5815 => 
  array (
    'city' => 'Macapá',
    'region' => '03',
    'country' => 'BR',
    'latitude' => '0.03889',
    'longitude' => '-51.06639',
  ),
  5816 => 
  array (
    'city' => 'Macaíba',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.85833',
    'longitude' => '-35.35389',
  ),
  5817 => 
  array (
    'city' => 'Luzilândia',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-3.45778',
    'longitude' => '-42.37028',
  ),
  5818 => 
  array (
    'city' => 'Luís Correia',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-2.87917',
    'longitude' => '-41.66694',
  ),
  5819 => 
  array (
    'city' => 'Limoeiro do Norte',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.14556',
    'longitude' => '-38.09806',
  ),
  5820 => 
  array (
    'city' => 'Limoeiro do Ajuru',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.89528',
    'longitude' => '-49.38056',
  ),
  5821 => 
  array (
    'city' => 'Limoeiro de Anadia',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.74056',
    'longitude' => '-36.50278',
  ),
  5822 => 
  array (
    'city' => 'Limoeiro',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.87472',
    'longitude' => '-35.45028',
  ),
  5823 => 
  array (
    'city' => 'Lavras da Mangabeira',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.75333',
    'longitude' => '-38.96444',
  ),
  5824 => 
  array (
    'city' => 'Lajedo',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.66361',
    'longitude' => '-36.32',
  ),
  5825 => 
  array (
    'city' => 'Lago da Pedra',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.33333',
    'longitude' => '-45.16667',
  ),
  5826 => 
  array (
    'city' => 'Lagoa Seca',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.17083',
    'longitude' => '-35.85361',
  ),
  5827 => 
  array (
    'city' => 'Lagoa Nova',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.1',
    'longitude' => '-36.48333',
  ),
  5828 => 
  array (
    'city' => 'Lagoa do Itaenga',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.93611',
    'longitude' => '-35.29028',
  ),
  5829 => 
  array (
    'city' => 'Lagoa da Canoa',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.82972',
    'longitude' => '-36.73778',
  ),
  5830 => 
  array (
    'city' => 'Juruti',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.15222',
    'longitude' => '-56.09222',
  ),
  5831 => 
  array (
    'city' => 'Juru',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.53694',
    'longitude' => '-37.81861',
  ),
  5832 => 
  array (
    'city' => 'Juripiranga',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.37333',
    'longitude' => '-35.23806',
  ),
  5833 => 
  array (
    'city' => 'Junqueiro',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.92528',
    'longitude' => '-36.47583',
  ),
  5834 => 
  array (
    'city' => 'Jundiá',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-8.93472',
    'longitude' => '-35.57361',
  ),
  5835 => 
  array (
    'city' => 'Jucurutu',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.03389',
    'longitude' => '-37.02028',
  ),
  5836 => 
  array (
    'city' => 'Jucás',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.52528',
    'longitude' => '-39.5275',
  ),
  5837 => 
  array (
    'city' => 'Juazeiro do Norte',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.21306',
    'longitude' => '-39.31528',
  ),
  5838 => 
  array (
    'city' => 'Juàzeirinho',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.81667',
    'longitude' => '-38.05',
  ),
  5839 => 
  array (
    'city' => 'José de Freitas',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-4.75639',
    'longitude' => '-42.57556',
  ),
  5840 => 
  array (
    'city' => 'Joaquim Nabuco',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.62444',
    'longitude' => '-35.53333',
  ),
  5841 => 
  array (
    'city' => 'João Pessoa',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.115',
    'longitude' => '-34.86306',
  ),
  5842 => 
  array (
    'city' => 'João Câmara',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.5375',
    'longitude' => '-35.81972',
  ),
  5843 => 
  array (
    'city' => 'João Alfredo',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.85583',
    'longitude' => '-35.58833',
  ),
  5844 => 
  array (
    'city' => 'Girau do Ponciano',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.88417',
    'longitude' => '-36.82889',
  ),
  5845 => 
  array (
    'city' => 'Jardim do Seridó',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.58444',
    'longitude' => '-36.77444',
  ),
  5846 => 
  array (
    'city' => 'Jardim de Piranhas',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.37861',
    'longitude' => '-37.35194',
  ),
  5847 => 
  array (
    'city' => 'Jardim',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.46444',
    'longitude' => '-39.05667',
  ),
  5848 => 
  array (
    'city' => 'Jaicós',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-7.35917',
    'longitude' => '-41.13778',
  ),
  5849 => 
  array (
    'city' => 'Jaguaruana',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.83389',
    'longitude' => '-37.78111',
  ),
  5850 => 
  array (
    'city' => 'Jaguaribe',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.89056',
    'longitude' => '-38.62194',
  ),
  5851 => 
  array (
    'city' => 'Jacareacanga',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-6.22222',
    'longitude' => '-57.75278',
  ),
  5852 => 
  array (
    'city' => 'Jacaraú',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.61222',
    'longitude' => '-35.29278',
  ),
  5853 => 
  array (
    'city' => 'Jaboatão',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.18028',
    'longitude' => '-35.00139',
  ),
  5854 => 
  array (
    'city' => 'Itupiranga',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-5.13472',
    'longitude' => '-49.32667',
  ),
  5855 => 
  array (
    'city' => 'Itaueira',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-7.60333',
    'longitude' => '-43.02556',
  ),
  5856 => 
  array (
    'city' => 'Itatuba',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.375',
    'longitude' => '-35.62833',
  ),
  5857 => 
  array (
    'city' => 'Itaquitinga',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.66778',
    'longitude' => '-35.10167',
  ),
  5858 => 
  array (
    'city' => 'Itacoatiara',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-3.14306',
    'longitude' => '-58.44417',
  ),
  5859 => 
  array (
    'city' => 'Itaporanga',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.30444',
    'longitude' => '-38.15028',
  ),
  5860 => 
  array (
    'city' => 'Itapissuma',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.77639',
    'longitude' => '-34.89222',
  ),
  5861 => 
  array (
    'city' => 'Itapipoca',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.49444',
    'longitude' => '-39.57861',
  ),
  5862 => 
  array (
    'city' => 'Itapecuru Mirim',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.3925',
    'longitude' => '-44.35861',
  ),
  5863 => 
  array (
    'city' => 'Itapagé',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.68667',
    'longitude' => '-39.58611',
  ),
  5864 => 
  array (
    'city' => 'Itamaracá',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.74778',
    'longitude' => '-34.82556',
  ),
  5865 => 
  array (
    'city' => 'Itaituba',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-4.27611',
    'longitude' => '-55.98361',
  ),
  5866 => 
  array (
    'city' => 'Itaitinga',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.96944',
    'longitude' => '-38.52806',
  ),
  5867 => 
  array (
    'city' => 'Itainópolis',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-7.44694',
    'longitude' => '-41.47833',
  ),
  5868 => 
  array (
    'city' => 'Itaíba',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.9475',
    'longitude' => '-37.42278',
  ),
  5869 => 
  array (
    'city' => 'Itabaiana',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.32861',
    'longitude' => '-35.3325',
  ),
  5870 => 
  array (
    'city' => 'Irituia',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.77111',
    'longitude' => '-47.43806',
  ),
  5871 => 
  array (
    'city' => 'Irauçuba',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.74611',
    'longitude' => '-39.78333',
  ),
  5872 => 
  array (
    'city' => 'Ipueiras',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.03333',
    'longitude' => '-40.45',
  ),
  5873 => 
  array (
    'city' => 'Ipubi',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.65194',
    'longitude' => '-40.14889',
  ),
  5874 => 
  array (
    'city' => 'Ipu',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.32222',
    'longitude' => '-40.71083',
  ),
  5875 => 
  array (
    'city' => 'Ipojuca',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.39889',
    'longitude' => '-35.06389',
  ),
  5876 => 
  array (
    'city' => 'Ipanguaçu',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.49833',
    'longitude' => '-36.855',
  ),
  5877 => 
  array (
    'city' => 'Inhuma',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-6.66833',
    'longitude' => '-41.70778',
  ),
  5878 => 
  array (
    'city' => 'Inhapi',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.22139',
    'longitude' => '-37.74861',
  ),
  5879 => 
  array (
    'city' => 'Ingá',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.28083',
    'longitude' => '-35.60444',
  ),
  5880 => 
  array (
    'city' => 'Independência',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.39639',
    'longitude' => '-40.30861',
  ),
  5881 => 
  array (
    'city' => 'Imperatriz',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.52639',
    'longitude' => '-47.49167',
  ),
  5882 => 
  array (
    'city' => 'Imaculada',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.38972',
    'longitude' => '-37.50917',
  ),
  5883 => 
  array (
    'city' => 'Iguatu',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.35944',
    'longitude' => '-39.29861',
  ),
  5884 => 
  array (
    'city' => 'Igarapé Miri',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.975',
    'longitude' => '-48.95972',
  ),
  5885 => 
  array (
    'city' => 'Igarapé Açu',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.12889',
    'longitude' => '-47.62',
  ),
  5886 => 
  array (
    'city' => 'Igarassu',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.83417',
    'longitude' => '-34.90639',
  ),
  5887 => 
  array (
    'city' => 'Igaci',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.53694',
    'longitude' => '-36.63361',
  ),
  5888 => 
  array (
    'city' => 'Icó',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.40111',
    'longitude' => '-38.86222',
  ),
  5889 => 
  array (
    'city' => 'Icatu',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.77583',
    'longitude' => '-44.06583',
  ),
  5890 => 
  array (
    'city' => 'Ibimirim',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.54056',
    'longitude' => '-37.69028',
  ),
  5891 => 
  array (
    'city' => 'Ibiapina',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.92333',
    'longitude' => '-40.88944',
  ),
  5892 => 
  array (
    'city' => 'Ibateguara',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-8.9725',
    'longitude' => '-35.93944',
  ),
  5893 => 
  array (
    'city' => 'Humberto de Campos',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.59833',
    'longitude' => '-43.46111',
  ),
  5894 => 
  array (
    'city' => 'Horizonte',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.1',
    'longitude' => '-38.48333',
  ),
  5895 => 
  array (
    'city' => 'Hidrolândia',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.40806',
    'longitude' => '-40.43778',
  ),
  5896 => 
  array (
    'city' => 'Gurupá',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.405',
    'longitude' => '-51.64',
  ),
  5897 => 
  array (
    'city' => 'Gurinhém',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.12389',
    'longitude' => '-35.42444',
  ),
  5898 => 
  array (
    'city' => 'Guaraciaba do Norte',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.16694',
    'longitude' => '-40.7475',
  ),
  5899 => 
  array (
    'city' => 'Guarabira',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.85472',
    'longitude' => '-35.49',
  ),
  5900 => 
  array (
    'city' => 'Guajará',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-2.96667',
    'longitude' => '-57.66667',
  ),
  5901 => 
  array (
    'city' => 'Guaiúba',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.03972',
    'longitude' => '-38.63722',
  ),
  5902 => 
  array (
    'city' => 'Guabiraba',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.41667',
    'longitude' => '-35.66667',
  ),
  5903 => 
  array (
    'city' => 'Gravatá',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.20111',
    'longitude' => '-35.56472',
  ),
  5904 => 
  array (
    'city' => 'Granja',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.12028',
    'longitude' => '-40.82611',
  ),
  5905 => 
  array (
    'city' => 'Grajaú',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.81944',
    'longitude' => '-46.13861',
  ),
  5906 => 
  array (
    'city' => 'Governador Dix Sept Rosado',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.45889',
    'longitude' => '-37.52083',
  ),
  5907 => 
  array (
    'city' => 'Goianinha',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.26472',
    'longitude' => '-35.2125',
  ),
  5908 => 
  array (
    'city' => 'Goiana',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.56056',
    'longitude' => '-35.0025',
  ),
  5909 => 
  array (
    'city' => 'Glória do Goitá',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.00167',
    'longitude' => '-35.29278',
  ),
  5910 => 
  array (
    'city' => 'Gilbués',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-9.83167',
    'longitude' => '-45.34389',
  ),
  5911 => 
  array (
    'city' => 'Gararu',
    'region' => '28',
    'country' => 'BR',
    'latitude' => '-9.9675',
    'longitude' => '-37.08333',
  ),
  5912 => 
  array (
    'city' => 'Garanhuns',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.89028',
    'longitude' => '-36.49278',
  ),
  5913 => 
  array (
    'city' => 'Gameleira',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.58444',
    'longitude' => '-35.38667',
  ),
  5914 => 
  array (
    'city' => 'Fortuna',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.73333',
    'longitude' => '-44.15833',
  ),
  5915 => 
  array (
    'city' => 'Fortaleza',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.71722',
    'longitude' => '-38.54306',
  ),
  5916 => 
  array (
    'city' => 'Forquilha',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.79833',
    'longitude' => '-40.26056',
  ),
  5917 => 
  array (
    'city' => 'Floriano',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-6.76694',
    'longitude' => '-43.0225',
  ),
  5918 => 
  array (
    'city' => 'Floresta',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.60111',
    'longitude' => '-38.56861',
  ),
  5919 => 
  array (
    'city' => 'Flores',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.86806',
    'longitude' => '-37.97472',
  ),
  5920 => 
  array (
    'city' => 'Flexeiras',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.1975',
    'longitude' => '-35.78083',
  ),
  5921 => 
  array (
    'city' => 'Feira Nova',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.95083',
    'longitude' => '-35.38917',
  ),
  5922 => 
  array (
    'city' => 'Farias Brito',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.93056',
    'longitude' => '-39.56556',
  ),
  5923 => 
  array (
    'city' => 'Fagundes',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.355',
    'longitude' => '-35.775',
  ),
  5924 => 
  array (
    'city' => 'Exu',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.51194',
    'longitude' => '-39.72417',
  ),
  5925 => 
  array (
    'city' => 'Eusébio',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.89',
    'longitude' => '-38.45056',
  ),
  5926 => 
  array (
    'city' => 'Extremoz',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.70556',
    'longitude' => '-35.30722',
  ),
  5927 => 
  array (
    'city' => 'Estreito',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.78333',
    'longitude' => '-43.25',
  ),
  5928 => 
  array (
    'city' => 'Esperantinópolis',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.86667',
    'longitude' => '-44.70833',
  ),
  5929 => 
  array (
    'city' => 'Esperantina',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-3.90167',
    'longitude' => '-42.23361',
  ),
  5930 => 
  array (
    'city' => 'Esperança',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.03306',
    'longitude' => '-35.85722',
  ),
  5931 => 
  array (
    'city' => 'Escada',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.35917',
    'longitude' => '-35.22361',
  ),
  5932 => 
  array (
    'city' => 'Elesbão Veloso',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-6.20194',
    'longitude' => '-42.14028',
  ),
  5933 => 
  array (
    'city' => 'Dona Inês',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.61667',
    'longitude' => '-35.63333',
  ),
  5934 => 
  array (
    'city' => 'Dom Pedro',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.48333',
    'longitude' => '-44.45',
  ),
  5935 => 
  array (
    'city' => 'Dois Riachos',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.3925',
    'longitude' => '-37.10056',
  ),
  5936 => 
  array (
    'city' => 'Desterro',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.29056',
    'longitude' => '-37.09389',
  ),
  5937 => 
  array (
    'city' => 'Demerval Lobão',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.35833',
    'longitude' => '-42.67639',
  ),
  5938 => 
  array (
    'city' => 'Delmiro Gouveia',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.38861',
    'longitude' => '-37.99917',
  ),
  5939 => 
  array (
    'city' => 'Custódia',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.0875',
    'longitude' => '-37.64306',
  ),
  5940 => 
  array (
    'city' => 'Cururupu',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-1.82833',
    'longitude' => '-44.86833',
  ),
  5941 => 
  array (
    'city' => 'Curuçá',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.72889',
    'longitude' => '-47.84806',
  ),
  5942 => 
  array (
    'city' => 'Currais Novos',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.26083',
    'longitude' => '-36.51778',
  ),
  5943 => 
  array (
    'city' => 'Curaçá',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-8.99028',
    'longitude' => '-39.90944',
  ),
  5944 => 
  array (
    'city' => 'Cupira',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.61667',
    'longitude' => '-35.95',
  ),
  5945 => 
  array (
    'city' => 'Cumaru',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.00611',
    'longitude' => '-35.69722',
  ),
  5946 => 
  array (
    'city' => 'Cuité',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.48361',
    'longitude' => '-36.15361',
  ),
  5947 => 
  array (
    'city' => 'Cruz do Espírito Santo',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.14',
    'longitude' => '-35.08639',
  ),
  5948 => 
  array (
    'city' => 'Cruz',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-2.91778',
    'longitude' => '-40.17167',
  ),
  5949 => 
  array (
    'city' => 'Crato',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.23417',
    'longitude' => '-39.40944',
  ),
  5950 => 
  array (
    'city' => 'Crateús',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.17833',
    'longitude' => '-40.6775',
  ),
  5951 => 
  array (
    'city' => 'Coroatá',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.13',
    'longitude' => '-44.12417',
  ),
  5952 => 
  array (
    'city' => 'Coremas',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.01444',
    'longitude' => '-37.94583',
  ),
  5953 => 
  array (
    'city' => 'Coreaú',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.53333',
    'longitude' => '-40.65667',
  ),
  5954 => 
  array (
    'city' => 'Condado',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.58583',
    'longitude' => '-35.10583',
  ),
  5955 => 
  array (
    'city' => 'Conceição do Araguaia',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-8.25778',
    'longitude' => '-49.26472',
  ),
  5956 => 
  array (
    'city' => 'Colônia Leopoldina',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-8.90889',
    'longitude' => '-35.725',
  ),
  5957 => 
  array (
    'city' => 'Colinas',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-6.02583',
    'longitude' => '-44.24917',
  ),
  5958 => 
  array (
    'city' => 'Coité do Nóia',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.63222',
    'longitude' => '-36.57861',
  ),
  5959 => 
  array (
    'city' => 'Coelho Neto',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.25667',
    'longitude' => '-43.01278',
  ),
  5960 => 
  array (
    'city' => 'Codó',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.45528',
    'longitude' => '-43.88556',
  ),
  5961 => 
  array (
    'city' => 'Cocal',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-3.47194',
    'longitude' => '-41.5575',
  ),
  5962 => 
  array (
    'city' => 'Chorozinho',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.30028',
    'longitude' => '-38.49778',
  ),
  5963 => 
  array (
    'city' => 'Chapadinha',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.74167',
    'longitude' => '-43.36028',
  ),
  5964 => 
  array (
    'city' => 'Chã Grande',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.23833',
    'longitude' => '-35.46167',
  ),
  5965 => 
  array (
    'city' => 'Cerro Corá',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.04556',
    'longitude' => '-36.34583',
  ),
  5966 => 
  array (
    'city' => 'Cedro',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.60667',
    'longitude' => '-39.06222',
  ),
  5967 => 
  array (
    'city' => 'Ceará Mirim',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.63444',
    'longitude' => '-35.42556',
  ),
  5968 => 
  array (
    'city' => 'Caucaia',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.73611',
    'longitude' => '-38.65306',
  ),
  5969 => 
  array (
    'city' => 'Catolé do Rocha',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.34389',
    'longitude' => '-37.74667',
  ),
  5970 => 
  array (
    'city' => 'Catende',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.66667',
    'longitude' => '-35.71667',
  ),
  5971 => 
  array (
    'city' => 'Castelo do Piauí',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.32222',
    'longitude' => '-41.5525',
  ),
  5972 => 
  array (
    'city' => 'Castanhal',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.29389',
    'longitude' => '-47.92639',
  ),
  5973 => 
  array (
    'city' => 'Cascavel',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.13306',
    'longitude' => '-38.24194',
  ),
  5974 => 
  array (
    'city' => 'Carutapera',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-1.195',
    'longitude' => '-46.02',
  ),
  5975 => 
  array (
    'city' => 'Caruaru',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.28333',
    'longitude' => '-35.97611',
  ),
  5976 => 
  array (
    'city' => 'Carpina',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.85083',
    'longitude' => '-35.25472',
  ),
  5977 => 
  array (
    'city' => 'Carolina',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-7.33278',
    'longitude' => '-47.46944',
  ),
  5978 => 
  array (
    'city' => 'Carnaíba',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.7',
    'longitude' => '-37.66667',
  ),
  5979 => 
  array (
    'city' => 'Caririaçu',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.04222',
    'longitude' => '-39.28361',
  ),
  5980 => 
  array (
    'city' => 'Cariré',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.95056',
    'longitude' => '-40.47333',
  ),
  5981 => 
  array (
    'city' => 'Careiro da Várzea',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-3.20028',
    'longitude' => '-59.81194',
  ),
  5982 => 
  array (
    'city' => 'Caraúbas',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.7925',
    'longitude' => '-37.55667',
  ),
  5983 => 
  array (
    'city' => 'Capoeiras',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.73472',
    'longitude' => '-36.62667',
  ),
  5984 => 
  array (
    'city' => 'Capitão Poço',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.74639',
    'longitude' => '-47.05944',
  ),
  5985 => 
  array (
    'city' => 'Capela',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.4075',
    'longitude' => '-36.07361',
  ),
  5986 => 
  array (
    'city' => 'Capanema',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.19583',
    'longitude' => '-47.18083',
  ),
  5987 => 
  array (
    'city' => 'Canto do Buriti',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-8.11',
    'longitude' => '-42.94444',
  ),
  5988 => 
  array (
    'city' => 'Cantanhede',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.63333',
    'longitude' => '-44.37667',
  ),
  5989 => 
  array (
    'city' => 'Canindé de São Francisco',
    'region' => '28',
    'country' => 'BR',
    'latitude' => '-9.66',
    'longitude' => '-37.78944',
  ),
  5990 => 
  array (
    'city' => 'Canindé',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.35889',
    'longitude' => '-39.31167',
  ),
  5991 => 
  array (
    'city' => 'Canhotinho',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.88222',
    'longitude' => '-36.19111',
  ),
  5992 => 
  array (
    'city' => 'Canguaretama',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.38',
    'longitude' => '-35.12889',
  ),
  5993 => 
  array (
    'city' => 'Cândido Mendes',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-1.44667',
    'longitude' => '-45.71667',
  ),
  5994 => 
  array (
    'city' => 'Campos Sales',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.07444',
    'longitude' => '-40.37611',
  ),
  5995 => 
  array (
    'city' => 'Campo Maior',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-4.82778',
    'longitude' => '-42.16861',
  ),
  5996 => 
  array (
    'city' => 'Campo Alegre',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.78194',
    'longitude' => '-36.35083',
  ),
  5997 => 
  array (
    'city' => 'Campina Grande',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.23056',
    'longitude' => '-35.88111',
  ),
  5998 => 
  array (
    'city' => 'Camocim de São Félix',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.35861',
    'longitude' => '-35.76194',
  ),
  5999 => 
  array (
    'city' => 'Camocim',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-2.90222',
    'longitude' => '-40.84111',
  ),
  6000 => 
  array (
    'city' => 'Cametá',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.24444',
    'longitude' => '-49.49583',
  ),
  6001 => 
  array (
    'city' => 'Cajueiro',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.71667',
    'longitude' => '-36.45',
  ),
  6002 => 
  array (
    'city' => 'Cajazeiras',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.89028',
    'longitude' => '-38.55528',
  ),
  6003 => 
  array (
    'city' => 'Caicó',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.45833',
    'longitude' => '-37.09778',
  ),
  6004 => 
  array (
    'city' => 'Caetés',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.77306',
    'longitude' => '-36.6225',
  ),
  6005 => 
  array (
    'city' => 'Cacimbinhas',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.40028',
    'longitude' => '-36.99028',
  ),
  6006 => 
  array (
    'city' => 'Cacimba de Dentro',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.64167',
    'longitude' => '-35.79',
  ),
  6007 => 
  array (
    'city' => 'Cachoeirinha',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.48639',
    'longitude' => '-36.23306',
  ),
  6008 => 
  array (
    'city' => 'Cabrobó',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.51417',
    'longitude' => '-39.31',
  ),
  6009 => 
  array (
    'city' => 'Cabo',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.28333',
    'longitude' => '-35.03333',
  ),
  6010 => 
  array (
    'city' => 'Cabedelo',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.98111',
    'longitude' => '-34.83389',
  ),
  6011 => 
  array (
    'city' => 'Caaporã',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.51556',
    'longitude' => '-34.90833',
  ),
  6012 => 
  array (
    'city' => 'Buriti dos Lopes',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-3.175',
    'longitude' => '-41.86694',
  ),
  6013 => 
  array (
    'city' => 'Buriti Bravo',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.83722',
    'longitude' => '-43.83361',
  ),
  6014 => 
  array (
    'city' => 'Bujaru',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.515',
    'longitude' => '-48.04472',
  ),
  6015 => 
  array (
    'city' => 'Buíque',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.62306',
    'longitude' => '-37.15583',
  ),
  6016 => 
  array (
    'city' => 'Breves',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.68222',
    'longitude' => '-50.48028',
  ),
  6017 => 
  array (
    'city' => 'Brejo Santo',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.49333',
    'longitude' => '-38.98722',
  ),
  6018 => 
  array (
    'city' => 'Brejo da Madre de Deus',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.14583',
    'longitude' => '-36.37111',
  ),
  6019 => 
  array (
    'city' => 'Brejo',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.68444',
    'longitude' => '-42.75028',
  ),
  6020 => 
  array (
    'city' => 'Brejinho',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.19083',
    'longitude' => '-35.35667',
  ),
  6021 => 
  array (
    'city' => 'Bragança',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.05361',
    'longitude' => '-46.76556',
  ),
  6022 => 
  array (
    'city' => 'Borba',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-4.38778',
    'longitude' => '-59.59389',
  ),
  6023 => 
  array (
    'city' => 'Boqueirão (1)',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.5',
    'longitude' => '-36.13333',
  ),
  6024 => 
  array (
    'city' => 'Bonito',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.47028',
    'longitude' => '-35.72861',
  ),
  6025 => 
  array (
    'city' => 'Bom Jesus',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-9.07444',
    'longitude' => '-44.35861',
  ),
  6026 => 
  array (
    'city' => 'Bom Jardim',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.79583',
    'longitude' => '-35.58722',
  ),
  6027 => 
  array (
    'city' => 'Bom Jardim',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-7.01667',
    'longitude' => '-46.48333',
  ),
  6028 => 
  array (
    'city' => 'Bom Conselho',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-9.16972',
    'longitude' => '-36.67972',
  ),
  6029 => 
  array (
    'city' => 'Boa Viagem',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-5.1275',
    'longitude' => '-39.73222',
  ),
  6030 => 
  array (
    'city' => 'Bezerros',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.23333',
    'longitude' => '-35.79694',
  ),
  6031 => 
  array (
    'city' => 'Bequimão',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.44889',
    'longitude' => '-44.7825',
  ),
  6032 => 
  array (
    'city' => 'Benevides',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.36139',
    'longitude' => '-48.24472',
  ),
  6033 => 
  array (
    'city' => 'Beneditinos',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.45',
    'longitude' => '-42.36667',
  ),
  6034 => 
  array (
    'city' => 'Belo Jardim',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.33556',
    'longitude' => '-36.42417',
  ),
  6035 => 
  array (
    'city' => 'Belém do Brejo do Cruz',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.18861',
    'longitude' => '-37.53583',
  ),
  6036 => 
  array (
    'city' => 'Belém de São Francisco',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.75389',
    'longitude' => '-38.96583',
  ),
  6037 => 
  array (
    'city' => 'Belém',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.69167',
    'longitude' => '-35.53333',
  ),
  6038 => 
  array (
    'city' => 'Belém',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.45583',
    'longitude' => '-48.50444',
  ),
  6039 => 
  array (
    'city' => 'Bela Cruz',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.05056',
    'longitude' => '-40.16778',
  ),
  6040 => 
  array (
    'city' => 'Beberibe',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.17972',
    'longitude' => '-38.13056',
  ),
  6041 => 
  array (
    'city' => 'Bayeux',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.125',
    'longitude' => '-34.93222',
  ),
  6042 => 
  array (
    'city' => 'Baturité',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.32861',
    'longitude' => '-38.88472',
  ),
  6043 => 
  array (
    'city' => 'Batalha',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.67778',
    'longitude' => '-37.12472',
  ),
  6044 => 
  array (
    'city' => 'Batalha',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-4.025',
    'longitude' => '-42.075',
  ),
  6045 => 
  array (
    'city' => 'Barroquinha',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.01889',
    'longitude' => '-41.13611',
  ),
  6046 => 
  array (
    'city' => 'Barro',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.71667',
    'longitude' => '-38.86667',
  ),
  6047 => 
  array (
    'city' => 'Barreiros',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.81833',
    'longitude' => '-35.18639',
  ),
  6048 => 
  array (
    'city' => 'Barreirinhas',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.74694',
    'longitude' => '-42.82639',
  ),
  6049 => 
  array (
    'city' => 'Barreirinha',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-2.79333',
    'longitude' => '-57.07',
  ),
  6050 => 
  array (
    'city' => 'Barras',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-4.24444',
    'longitude' => '-42.29444',
  ),
  6051 => 
  array (
    'city' => 'Barra do Corda',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.5',
    'longitude' => '-45.25',
  ),
  6052 => 
  array (
    'city' => 'Barra de Santo Antônio',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.40472',
    'longitude' => '-35.50722',
  ),
  6053 => 
  array (
    'city' => 'Barcarena',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.50583',
    'longitude' => '-48.62583',
  ),
  6054 => 
  array (
    'city' => 'Barbalha',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.31111',
    'longitude' => '-39.30417',
  ),
  6055 => 
  array (
    'city' => 'Baraúna',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.08',
    'longitude' => '-37.61667',
  ),
  6056 => 
  array (
    'city' => 'Bananeiras',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.75',
    'longitude' => '-35.63333',
  ),
  6057 => 
  array (
    'city' => 'Balsas',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-7.5325',
    'longitude' => '-46.03556',
  ),
  6058 => 
  array (
    'city' => 'Baião',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-2.79056',
    'longitude' => '-49.67167',
  ),
  6059 => 
  array (
    'city' => 'Bacabal',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-4.29167',
    'longitude' => '-44.79167',
  ),
  6060 => 
  array (
    'city' => 'Autazes',
    'region' => '04',
    'country' => 'BR',
    'latitude' => '-3.57972',
    'longitude' => '-59.13056',
  ),
  6061 => 
  array (
    'city' => 'Aurora',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.9425',
    'longitude' => '-38.9675',
  ),
  6062 => 
  array (
    'city' => 'Augusto Corrêa',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.02167',
    'longitude' => '-46.635',
  ),
  6063 => 
  array (
    'city' => 'Atalaia',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.50194',
    'longitude' => '-36.02278',
  ),
  6064 => 
  array (
    'city' => 'Assaré',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.87444',
    'longitude' => '-39.875',
  ),
  6065 => 
  array (
    'city' => 'Aroeiras',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.54528',
    'longitude' => '-35.7075',
  ),
  6066 => 
  array (
    'city' => 'Arês',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.19444',
    'longitude' => '-35.16028',
  ),
  6067 => 
  array (
    'city' => 'Areia Branca',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-4.95611',
    'longitude' => '-37.13694',
  ),
  6068 => 
  array (
    'city' => 'Areia',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.96333',
    'longitude' => '-35.69167',
  ),
  6069 => 
  array (
    'city' => 'Arcoverde',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.41889',
    'longitude' => '-37.05389',
  ),
  6070 => 
  array (
    'city' => 'Araruna',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.55833',
    'longitude' => '-35.74167',
  ),
  6071 => 
  array (
    'city' => 'Araripina',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.57611',
    'longitude' => '-40.49833',
  ),
  6072 => 
  array (
    'city' => 'Araripe',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-7.2125',
    'longitude' => '-40.04611',
  ),
  6073 => 
  array (
    'city' => 'Arari',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.45361',
    'longitude' => '-44.78',
  ),
  6074 => 
  array (
    'city' => 'Arara',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.82833',
    'longitude' => '-35.75833',
  ),
  6075 => 
  array (
    'city' => 'Arapiraca',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.7525',
    'longitude' => '-36.66111',
  ),
  6076 => 
  array (
    'city' => 'Araioses',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.89',
    'longitude' => '-41.90306',
  ),
  6077 => 
  array (
    'city' => 'Araguaína',
    'region' => '31',
    'country' => 'BR',
    'latitude' => '-7.19111',
    'longitude' => '-48.20722',
  ),
  6078 => 
  array (
    'city' => 'Araçoiaba',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.79028',
    'longitude' => '-35.09083',
  ),
  6079 => 
  array (
    'city' => 'Aracoiaba',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.37111',
    'longitude' => '-38.81417',
  ),
  6080 => 
  array (
    'city' => 'Aracati',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-4.56167',
    'longitude' => '-37.76972',
  ),
  6081 => 
  array (
    'city' => 'Aquiraz',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.90139',
    'longitude' => '-38.39111',
  ),
  6082 => 
  array (
    'city' => 'Apodi',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.66417',
    'longitude' => '-37.79889',
  ),
  6083 => 
  array (
    'city' => 'Angicos',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.66556',
    'longitude' => '-36.60111',
  ),
  6084 => 
  array (
    'city' => 'Ananindeua',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.36556',
    'longitude' => '-48.37222',
  ),
  6085 => 
  array (
    'city' => 'Anajatuba',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-3.26444',
    'longitude' => '-44.61972',
  ),
  6086 => 
  array (
    'city' => 'Anadia',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.68444',
    'longitude' => '-36.30417',
  ),
  6087 => 
  array (
    'city' => 'Amontada',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-3.36167',
    'longitude' => '-39.83167',
  ),
  6088 => 
  array (
    'city' => 'Amarante do Maranhão',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-5.56667',
    'longitude' => '-46.74222',
  ),
  6089 => 
  array (
    'city' => 'Amarante',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-6.24111',
    'longitude' => '-42.85472',
  ),
  6090 => 
  array (
    'city' => 'Amaraji',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.38306',
    'longitude' => '-35.4525',
  ),
  6091 => 
  array (
    'city' => 'Altos',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.03806',
    'longitude' => '-42.46',
  ),
  6092 => 
  array (
    'city' => 'Alto Longá',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.25111',
    'longitude' => '-42.21028',
  ),
  6093 => 
  array (
    'city' => 'Altinho',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.48972',
    'longitude' => '-36.05944',
  ),
  6094 => 
  array (
    'city' => 'Altamira',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-3.20333',
    'longitude' => '-52.20639',
  ),
  6095 => 
  array (
    'city' => 'Alta Floresta',
    'region' => '14',
    'country' => 'BR',
    'latitude' => '-9.9',
    'longitude' => '-55.9',
  ),
  6096 => 
  array (
    'city' => 'Almeirim',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.52333',
    'longitude' => '-52.58167',
  ),
  6097 => 
  array (
    'city' => 'Alhandra',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.43861',
    'longitude' => '-34.91444',
  ),
  6098 => 
  array (
    'city' => 'Alexandria',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-6.4125',
    'longitude' => '-38.01583',
  ),
  6099 => 
  array (
    'city' => 'Alenquer',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.94167',
    'longitude' => '-54.73833',
  ),
  6100 => 
  array (
    'city' => 'Alcântara',
    'region' => '13',
    'country' => 'BR',
    'latitude' => '-2.40889',
    'longitude' => '-44.41472',
  ),
  6101 => 
  array (
    'city' => 'Alagoinha',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-6.95',
    'longitude' => '-35.545',
  ),
  6102 => 
  array (
    'city' => 'Alagoa Nova',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.07083',
    'longitude' => '-35.75833',
  ),
  6103 => 
  array (
    'city' => 'Alagoa Grande',
    'region' => '17',
    'country' => 'BR',
    'latitude' => '-7.15833',
    'longitude' => '-35.63',
  ),
  6104 => 
  array (
    'city' => 'Águas Belas',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-9.11139',
    'longitude' => '-37.12306',
  ),
  6105 => 
  array (
    'city' => 'Água Preta',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.7075',
    'longitude' => '-35.53056',
  ),
  6106 => 
  array (
    'city' => 'Água Branca',
    'region' => '02',
    'country' => 'BR',
    'latitude' => '-9.26083',
    'longitude' => '-37.93611',
  ),
  6107 => 
  array (
    'city' => 'Água Branca',
    'region' => '20',
    'country' => 'BR',
    'latitude' => '-5.89222',
    'longitude' => '-42.63611',
  ),
  6108 => 
  array (
    'city' => 'Agrestina',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-8.45806',
    'longitude' => '-35.94472',
  ),
  6109 => 
  array (
    'city' => 'Afuá',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-0.15667',
    'longitude' => '-50.38667',
  ),
  6110 => 
  array (
    'city' => 'Afonso Bezerra',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.49833',
    'longitude' => '-36.50556',
  ),
  6111 => 
  array (
    'city' => 'Afogados da Ingazeira',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.75083',
    'longitude' => '-37.63917',
  ),
  6112 => 
  array (
    'city' => 'Açu',
    'region' => '22',
    'country' => 'BR',
    'latitude' => '-5.57667',
    'longitude' => '-36.90861',
  ),
  6113 => 
  array (
    'city' => 'Acopiara',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-6.09528',
    'longitude' => '-39.4525',
  ),
  6114 => 
  array (
    'city' => 'Acaraú',
    'region' => '06',
    'country' => 'BR',
    'latitude' => '-2.88556',
    'longitude' => '-40.12',
  ),
  6115 => 
  array (
    'city' => 'Acará',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.96083',
    'longitude' => '-48.19667',
  ),
  6116 => 
  array (
    'city' => 'Abreu e Lima',
    'region' => '30',
    'country' => 'BR',
    'latitude' => '-7.91167',
    'longitude' => '-34.90278',
  ),
  6117 => 
  array (
    'city' => 'Abaetetuba',
    'region' => '16',
    'country' => 'BR',
    'latitude' => '-1.71806',
    'longitude' => '-48.8825',
  ),
  6118 => 
  array (
    'city' => 'Xique Xique',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-10.82167',
    'longitude' => '-42.73111',
  ),
  6119 => 
  array (
    'city' => 'Chavantes',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.03889',
    'longitude' => '-49.70944',
  ),
  6120 => 
  array (
    'city' => 'Xanxerê',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-26.87694',
    'longitude' => '-52.40417',
  ),
  6121 => 
  array (
    'city' => 'Votuporanga',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-20.42278',
    'longitude' => '-49.97278',
  ),
  6122 => 
  array (
    'city' => 'Votorantim',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.54667',
    'longitude' => '-47.43778',
  ),
  6123 => 
  array (
    'city' => 'Volta Redonda',
    'region' => '21',
    'country' => 'BR',
    'latitude' => '-22.52306',
    'longitude' => '-44.10417',
  ),
  6124 => 
  array (
    'city' => 'Vitória da Conquista',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-14.86611',
    'longitude' => '-40.83944',
  ),
  6125 => 
  array (
    'city' => 'Vitória',
    'region' => '08',
    'country' => 'BR',
    'latitude' => '-20.31944',
    'longitude' => '-40.33778',
  ),
  6126 => 
  array (
    'city' => 'Visconde do Rio Branco',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-21.01028',
    'longitude' => '-42.84056',
  ),
  6127 => 
  array (
    'city' => 'Viradouro',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-20.87306',
    'longitude' => '-48.29694',
  ),
  6128 => 
  array (
    'city' => 'Vinhedo',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.02972',
    'longitude' => '-46.97528',
  ),
  6129 => 
  array (
    'city' => 'Vila Velha',
    'region' => '08',
    'country' => 'BR',
    'latitude' => '-20.32972',
    'longitude' => '-40.2925',
  ),
  6130 => 
  array (
    'city' => 'Videira',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-27.00833',
    'longitude' => '-51.15167',
  ),
  6131 => 
  array (
    'city' => 'Viçosa',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-20.75389',
    'longitude' => '-42.88194',
  ),
  6132 => 
  array (
    'city' => 'Vianópolis',
    'region' => '29',
    'country' => 'BR',
    'latitude' => '-16.74194',
    'longitude' => '-48.51639',
  ),
  6133 => 
  array (
    'city' => 'Viana',
    'region' => '08',
    'country' => 'BR',
    'latitude' => '-20.39028',
    'longitude' => '-40.49611',
  ),
  6134 => 
  array (
    'city' => 'Viamão',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-30.08111',
    'longitude' => '-51.02333',
  ),
  6135 => 
  array (
    'city' => 'Vespasiano',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-19.69194',
    'longitude' => '-43.92333',
  ),
  6136 => 
  array (
    'city' => 'Veranópolis',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-28.93611',
    'longitude' => '-51.54944',
  ),
  6137 => 
  array (
    'city' => 'Vera Cruz',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-12.63333',
    'longitude' => '-41.03333',
  ),
  6138 => 
  array (
    'city' => 'Wenceslau Braz',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-23.87389',
    'longitude' => '-49.80278',
  ),
  6139 => 
  array (
    'city' => 'Venâncio Aires',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.60639',
    'longitude' => '-52.19194',
  ),
  6140 => 
  array (
    'city' => 'Vazante',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-17.98694',
    'longitude' => '-46.90778',
  ),
  6141 => 
  array (
    'city' => 'Vassouras',
    'region' => '21',
    'country' => 'BR',
    'latitude' => '-22.40389',
    'longitude' => '-43.6625',
  ),
  6142 => 
  array (
    'city' => 'Varzelândia',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-15.70139',
    'longitude' => '-44.0275',
  ),
  6143 => 
  array (
    'city' => 'Várzea Paulista',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.21139',
    'longitude' => '-46.82833',
  ),
  6144 => 
  array (
    'city' => 'Várzea Grande',
    'region' => '14',
    'country' => 'BR',
    'latitude' => '-15.64667',
    'longitude' => '-56.1325',
  ),
  6145 => 
  array (
    'city' => 'Várzea da Palma',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-17.59806',
    'longitude' => '-44.73083',
  ),
  6146 => 
  array (
    'city' => 'Varginha',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-21.55139',
    'longitude' => '-45.43028',
  ),
  6147 => 
  array (
    'city' => 'Vargem Grande do Sul',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.83222',
    'longitude' => '-46.89361',
  ),
  6148 => 
  array (
    'city' => 'Vargem Alta',
    'region' => '08',
    'country' => 'BR',
    'latitude' => '-20.67139',
    'longitude' => '-41.00694',
  ),
  6149 => 
  array (
    'city' => 'Valparaíso',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.22778',
    'longitude' => '-50.86833',
  ),
  6150 => 
  array (
    'city' => 'Valinhos',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-22.97056',
    'longitude' => '-46.99583',
  ),
  6151 => 
  array (
    'city' => 'Valente',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-11.41222',
    'longitude' => '-39.46194',
  ),
  6152 => 
  array (
    'city' => 'Valença',
    'region' => '21',
    'country' => 'BR',
    'latitude' => '-22.24556',
    'longitude' => '-43.70028',
  ),
  6153 => 
  array (
    'city' => 'Valença',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-13.37028',
    'longitude' => '-39.07306',
  ),
  6154 => 
  array (
    'city' => 'Vacaria',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-28.51222',
    'longitude' => '-50.93389',
  ),
  6155 => 
  array (
    'city' => 'Urussanga',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-28.51778',
    'longitude' => '-49.32083',
  ),
  6156 => 
  array (
    'city' => 'Urupês',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.20167',
    'longitude' => '-49.29',
  ),
  6157 => 
  array (
    'city' => 'Uruguaiana',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.75472',
    'longitude' => '-57.08833',
  ),
  6158 => 
  array (
    'city' => 'Uruçuca',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-14.59306',
    'longitude' => '-39.28444',
  ),
  6159 => 
  array (
    'city' => 'Uruana',
    'region' => '29',
    'country' => 'BR',
    'latitude' => '-15.49806',
    'longitude' => '-49.6875',
  ),
  6160 => 
  array (
    'city' => 'Uruaçu',
    'region' => '29',
    'country' => 'BR',
    'latitude' => '-14.52472',
    'longitude' => '-49.14083',
  ),
  6161 => 
  array (
    'city' => 'União da Vitória',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-26.23',
    'longitude' => '-51.08639',
  ),
  6162 => 
  array (
    'city' => 'Unaí',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-16.3575',
    'longitude' => '-46.90611',
  ),
  6163 => 
  array (
    'city' => 'Una',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-15.29333',
    'longitude' => '-39.07528',
  ),
  6164 => 
  array (
    'city' => 'Umuarama',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-23.76639',
    'longitude' => '-53.325',
  ),
  6165 => 
  array (
    'city' => 'Umbaúba',
    'region' => '28',
    'country' => 'BR',
    'latitude' => '-11.38333',
    'longitude' => '-37.65778',
  ),
  6166 => 
  array (
    'city' => 'Uberlândia',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-18.91861',
    'longitude' => '-48.27722',
  ),
  6167 => 
  array (
    'city' => 'Uberaba',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-19.74833',
    'longitude' => '-47.93194',
  ),
  6168 => 
  array (
    'city' => 'Ubatuba',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.43389',
    'longitude' => '-45.07111',
  ),
  6169 => 
  array (
    'city' => 'Ubatã',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-14.21389',
    'longitude' => '-39.52278',
  ),
  6170 => 
  array (
    'city' => 'Ubaitaba',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-14.3125',
    'longitude' => '-39.32333',
  ),
  6171 => 
  array (
    'city' => 'Ubaíra',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-13.26806',
    'longitude' => '-39.66278',
  ),
  6172 => 
  array (
    'city' => 'Ubá',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-21.12',
    'longitude' => '-42.94278',
  ),
  6173 => 
  array (
    'city' => 'Turmalina',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-17.28556',
    'longitude' => '-42.73',
  ),
  6174 => 
  array (
    'city' => 'Tupi Paulista',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.38111',
    'longitude' => '-51.57056',
  ),
  6175 => 
  array (
    'city' => 'Tupanciretã',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.08056',
    'longitude' => '-53.83583',
  ),
  6176 => 
  array (
    'city' => 'Tupaciguara',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-18.59222',
    'longitude' => '-48.705',
  ),
  6177 => 
  array (
    'city' => 'Tupã',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.93472',
    'longitude' => '-50.51361',
  ),
  6178 => 
  array (
    'city' => 'Tucano',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-10.96306',
    'longitude' => '-38.78667',
  ),
  6179 => 
  array (
    'city' => 'Tubarão',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-28.46667',
    'longitude' => '-49.00694',
  ),
  6180 => 
  array (
    'city' => 'Triunfo',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.94333',
    'longitude' => '-51.71806',
  ),
  6181 => 
  array (
    'city' => 'Trindade',
    'region' => '29',
    'country' => 'BR',
    'latitude' => '-16.64944',
    'longitude' => '-49.48889',
  ),
  6182 => 
  array (
    'city' => 'Três Rios',
    'region' => '21',
    'country' => 'BR',
    'latitude' => '-22.11667',
    'longitude' => '-43.20917',
  ),
  6183 => 
  array (
    'city' => 'Três Pontas',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-21.36667',
    'longitude' => '-45.5125',
  ),
  6184 => 
  array (
    'city' => 'Três Passos',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-27.45556',
    'longitude' => '-53.93194',
  ),
  6185 => 
  array (
    'city' => 'Três Lagoas',
    'region' => '11',
    'country' => 'BR',
    'latitude' => '-20.75111',
    'longitude' => '-51.67833',
  ),
  6186 => 
  array (
    'city' => 'Três de Maio',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-27.77333',
    'longitude' => '-54.24',
  ),
  6187 => 
  array (
    'city' => 'Três Coroas',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.51694',
    'longitude' => '-50.77778',
  ),
  6188 => 
  array (
    'city' => 'Três Corações',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-21.69694',
    'longitude' => '-45.25333',
  ),
  6189 => 
  array (
    'city' => 'Três Barras',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-26.10639',
    'longitude' => '-50.32222',
  ),
  6190 => 
  array (
    'city' => 'Tremembé',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-22.95833',
    'longitude' => '-45.54944',
  ),
  6191 => 
  array (
    'city' => 'Tremedal',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-14.97583',
    'longitude' => '-41.41083',
  ),
  6192 => 
  array (
    'city' => 'Tramandaí',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.98472',
    'longitude' => '-50.13361',
  ),
  6193 => 
  array (
    'city' => 'Torres',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.33528',
    'longitude' => '-49.72694',
  ),
  6194 => 
  array (
    'city' => 'Tomar do Geru',
    'region' => '28',
    'country' => 'BR',
    'latitude' => '-11.37333',
    'longitude' => '-37.84056',
  ),
  6195 => 
  array (
    'city' => 'Toledo',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-24.71361',
    'longitude' => '-53.74306',
  ),
  6196 => 
  array (
    'city' => 'Tocantins',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-21.175',
    'longitude' => '-43.01778',
  ),
  6197 => 
  array (
    'city' => 'Tobias Barreto',
    'region' => '28',
    'country' => 'BR',
    'latitude' => '-11.18389',
    'longitude' => '-37.99833',
  ),
  6198 => 
  array (
    'city' => 'Tiradentes',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-21.11028',
    'longitude' => '-44.17806',
  ),
  6199 => 
  array (
    'city' => 'Timóteo',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-19.5825',
    'longitude' => '-42.64444',
  ),
  6200 => 
  array (
    'city' => 'Timbó',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-26.82333',
    'longitude' => '-49.27167',
  ),
  6201 => 
  array (
    'city' => 'Tijucas',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-27.24139',
    'longitude' => '-48.63361',
  ),
  6202 => 
  array (
    'city' => 'Tietê',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.10194',
    'longitude' => '-47.71472',
  ),
  6203 => 
  array (
    'city' => 'Tibagi',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-24.50944',
    'longitude' => '-50.41361',
  ),
  6204 => 
  array (
    'city' => 'Teutônia',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.44806',
    'longitude' => '-51.80639',
  ),
  6205 => 
  array (
    'city' => 'Terra Roxa',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-23.85571',
    'longitude' => '-50.0314',
  ),
  6206 => 
  array (
    'city' => 'Terra Rica',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-22.70944',
    'longitude' => '-52.61694',
  ),
  6207 => 
  array (
    'city' => 'Terra Nova',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-12.36667',
    'longitude' => '-40.66667',
  ),
  6208 => 
  array (
    'city' => 'Terra Boa',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-23.76806',
    'longitude' => '-52.44417',
  ),
  6209 => 
  array (
    'city' => 'Teresópolis',
    'region' => '21',
    'country' => 'BR',
    'latitude' => '-22.41222',
    'longitude' => '-42.96556',
  ),
  6210 => 
  array (
    'city' => 'Terenos',
    'region' => '11',
    'country' => 'BR',
    'latitude' => '-20.44222',
    'longitude' => '-54.86028',
  ),
  6211 => 
  array (
    'city' => 'Teófilo Otoni',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-17.8575',
    'longitude' => '-41.50528',
  ),
  6212 => 
  array (
    'city' => 'Teodoro Sampaio',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-22.5325',
    'longitude' => '-52.1675',
  ),
  6213 => 
  array (
    'city' => 'Telêmaco Borba',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-24.32389',
    'longitude' => '-50.61556',
  ),
  6214 => 
  array (
    'city' => 'Taubaté',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.02639',
    'longitude' => '-45.55528',
  ),
  6215 => 
  array (
    'city' => 'Tatuí',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.35556',
    'longitude' => '-47.85694',
  ),
  6216 => 
  array (
    'city' => 'Tarumã',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-22.74667',
    'longitude' => '-50.57722',
  ),
  6217 => 
  array (
    'city' => 'Taquarituba',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.53306',
    'longitude' => '-49.24444',
  ),
  6218 => 
  array (
    'city' => 'Taquaritinga',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.40611',
    'longitude' => '-48.50472',
  ),
  6219 => 
  array (
    'city' => 'Taquari',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.79972',
    'longitude' => '-51.86444',
  ),
  6220 => 
  array (
    'city' => 'Taquara',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-29.65056',
    'longitude' => '-50.78056',
  ),
  6221 => 
  array (
    'city' => 'Tapiramutá',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-11.84722',
    'longitude' => '-40.79139',
  ),
  6222 => 
  array (
    'city' => 'Tapes',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-30.67333',
    'longitude' => '-51.39583',
  ),
  6223 => 
  array (
    'city' => 'Taperoá',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-13.53806',
    'longitude' => '-39.09861',
  ),
  6224 => 
  array (
    'city' => 'Tapejara',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-28.06806',
    'longitude' => '-52.01389',
  ),
  6225 => 
  array (
    'city' => 'Tapejara',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-23.73306',
    'longitude' => '-52.87333',
  ),
  6226 => 
  array (
    'city' => 'Tanhaçu',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-14.02139',
    'longitude' => '-41.24806',
  ),
  6227 => 
  array (
    'city' => 'Tanguá',
    'region' => '21',
    'country' => 'BR',
    'latitude' => '-22.73028',
    'longitude' => '-42.71417',
  ),
  6228 => 
  array (
    'city' => 'Tanabi',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-20.62639',
    'longitude' => '-49.64917',
  ),
  6229 => 
  array (
    'city' => 'Tambaú',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.705',
    'longitude' => '-47.27444',
  ),
  6230 => 
  array (
    'city' => 'Taiobeiras',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-15.80778',
    'longitude' => '-42.23306',
  ),
  6231 => 
  array (
    'city' => 'Taguatinga',
    'region' => '31',
    'country' => 'BR',
    'latitude' => '-12.40389',
    'longitude' => '-46.43611',
  ),
  6232 => 
  array (
    'city' => 'Taboão da Serra',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.62611',
    'longitude' => '-46.79167',
  ),
  6233 => 
  array (
    'city' => 'Tabatinga',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.71667',
    'longitude' => '-48.6875',
  ),
  6234 => 
  array (
    'city' => 'Suzano',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.5425',
    'longitude' => '-46.31083',
  ),
  6235 => 
  array (
    'city' => 'Sumaré',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-22.82194',
    'longitude' => '-47.26694',
  ),
  6236 => 
  array (
    'city' => 'Sorocaba',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-23.50167',
    'longitude' => '-47.45806',
  ),
  6237 => 
  array (
    'city' => 'Sombrio',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-29.11389',
    'longitude' => '-49.61667',
  ),
  6238 => 
  array (
    'city' => 'Soledade',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-28.81833',
    'longitude' => '-52.51028',
  ),
  6239 => 
  array (
    'city' => 'Socorro',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-22.59139',
    'longitude' => '-46.52889',
  ),
  6240 => 
  array (
    'city' => 'Sobradinho',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-12.83333',
    'longitude' => '-39.1',
  ),
  6241 => 
  array (
    'city' => 'Siqueira Campos',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-23.68889',
    'longitude' => '-49.83389',
  ),
  6242 => 
  array (
    'city' => 'Simão Dias',
    'region' => '28',
    'country' => 'BR',
    'latitude' => '-10.73833',
    'longitude' => '-37.81111',
  ),
  6243 => 
  array (
    'city' => 'Silvânia',
    'region' => '29',
    'country' => 'BR',
    'latitude' => '-16.65889',
    'longitude' => '-48.60806',
  ),
  6244 => 
  array (
    'city' => 'Silva Jardim',
    'region' => '21',
    'country' => 'BR',
    'latitude' => '-22.65083',
    'longitude' => '-42.39167',
  ),
  6245 => 
  array (
    'city' => 'Sidrolândia',
    'region' => '11',
    'country' => 'BR',
    'latitude' => '-20.93194',
    'longitude' => '-54.96139',
  ),
  6246 => 
  array (
    'city' => 'Siderópolis',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-28.59778',
    'longitude' => '-49.42444',
  ),
  6247 => 
  array (
    'city' => 'Severínia',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-20.80944',
    'longitude' => '-48.80278',
  ),
  6248 => 
  array (
    'city' => 'Sete Lagoas',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-19.46583',
    'longitude' => '-44.24667',
  ),
  6249 => 
  array (
    'city' => 'Sertãozinho',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.13778',
    'longitude' => '-47.99028',
  ),
  6250 => 
  array (
    'city' => 'Sertanópolis',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-23.05861',
    'longitude' => '-51.03639',
  ),
  6251 => 
  array (
    'city' => 'Serro',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-18.60472',
    'longitude' => '-43.37944',
  ),
  6252 => 
  array (
    'city' => 'Serrinha',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-11.66417',
    'longitude' => '-39.0075',
  ),
  6253 => 
  array (
    'city' => 'Serra Negra',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-22.61222',
    'longitude' => '-46.70056',
  ),
  6254 => 
  array (
    'city' => 'Serrana',
    'region' => '27',
    'country' => 'BR',
    'latitude' => '-21.21139',
    'longitude' => '-47.59556',
  ),
  6255 => 
  array (
    'city' => 'Serra',
    'region' => '08',
    'country' => 'BR',
    'latitude' => '-20.12861',
    'longitude' => '-40.30778',
  ),
  6256 => 
  array (
    'city' => 'Seropédica',
    'region' => '21',
    'country' => 'BR',
    'latitude' => '-22.74389',
    'longitude' => '-43.7075',
  ),
  6257 => 
  array (
    'city' => 'Senhor do Bonfim',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-10.46139',
    'longitude' => '-40.18944',
  ),
  6258 => 
  array (
    'city' => 'Sengés',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-24.11278',
    'longitude' => '-49.46361',
  ),
  6259 => 
  array (
    'city' => 'Senador Canedo',
    'region' => '29',
    'country' => 'BR',
    'latitude' => '-16.70806',
    'longitude' => '-49.09306',
  ),
  6260 => 
  array (
    'city' => 'Seabra',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-12.41861',
    'longitude' => '-41.77028',
  ),
  6261 => 
  array (
    'city' => 'Schroeder',
    'region' => '26',
    'country' => 'BR',
    'latitude' => '-26.4125',
    'longitude' => '-49.07306',
  ),
  6262 => 
  array (
    'city' => 'Saubara',
    'region' => '05',
    'country' => 'BR',
    'latitude' => '-12.7375',
    'longitude' => '-38.76861',
  ),
  6263 => 
  array (
    'city' => 'Sarzedo',
    'region' => '15',
    'country' => 'BR',
    'latitude' => '-20.03528',
    'longitude' => '-44.14472',
  ),
  6264 => 
  array (
    'city' => 'Sarandi',
    'region' => '23',
    'country' => 'BR',
    'latitude' => '-27.94389',
    'longitude' => '-52.92306',
  ),
  6265 => 
  array (
    'city' => 'Sarandi',
    'region' => '18',
    'country' => 'BR',
    'latitude' => '-23.44361',
    'longitude' => '-51.87389',
  ),
  6266 => 
  array (
  ),
  array (