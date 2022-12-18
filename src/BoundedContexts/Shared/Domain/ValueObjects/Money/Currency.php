<?php

declare(strict_types=1);

namespace Shared\Domain\ValueObjects\Money;

use Shared\Domain\ValueObjects\Generic\Text;

class Currency extends Text
{
    // https://html-css-js.com/html/character-codes/currency/
    public const CODES = [
        'ALL' => [
            'name' => 'Albanian lek',
            'symbol' => 'L',
        ],
        'AED' => [
            'name' => 'United Arab Emirates Dirham',
            'symbol' => '&#1583;.&#1573;',
        ],
        'AOA' => [
            'name' => 'Angolan Kwanza',
            'symbol' => '&#75;&#122;'
        ],
        'AFN' => [
            'name' => 'Afghanistan Afghani',
            'symbol' => '&#1547;',
        ],
        'ARS' => [
            'name' => 'Argentine Peso',
            'symbol' => '&#36;',
        ],
        'AWG' => [
            'name' => 'Aruban florin',
            'symbol' => '&#402;',
        ],
        'AMD' => [
            'name' => 'Armenian dram',
            'symbol' => '&#1423;'
        ],
        'AUD' => [
            'name' => 'Australian Dollar',
            'symbol' => '&#65;&#36;',
        ],
        'AZN' => [
            'name' => 'Azerbaijani Manat',
            'symbol' => '&#8380;',
        ],
        'BOB' => [
            'name' => 'Bolivian Boliviano',
            'symbol' => '&#36;&#98;'
        ],
        'BSD' => [
            'name' => 'Bahamas Dollar',
            'symbol' => '&#66;&#36;',
        ],
        'BBD' => [
            'name' => 'Barbados Dollar',
            'symbol' => '&#66;&#100;&#115;&#36;',
        ],
        'BDT' => [
            'name' => 'Bangladeshi taka',
            'symbol' => '&#2547;',
        ],
        'BYN' => [
            'name' => 'Belarus Ruble',
            'symbol' => '&#66;&#114;',
        ],
        'BZD' => [
            'name' => 'Belize Dollar',
            'symbol' => '&#66;&#90;&#36;',
        ],
        'BMD' => [
            'name' => 'Bermudian Dollar',
            'symbol' => '&#66;&#68;&#36;',
        ],
        'BOP' => [
            'name' => 'Boliviano',
            'symbol' => '&#66;&#115;',
        ],
        'BAM' => [
            'name' => 'Bosnia-Herzegovina Convertible Marka',
            'symbol' => '&#75;&#77;',
        ],
        'BWP' => [
            'name' => 'Botswana pula',
            'symbol' => '&#80;',
        ],
        'BIF' => [
            'name' => 'Burundian Franc',
            'symbol' => '&#70;&#66;&#117;'
        ],
        'BHD' => [
            'name' => 'Bahraini Dinar',
            'symbol' => '.&#1583;.&#1576;'
        ],
        'BGN' => [
            'name' => 'Bulgarian lev',
            'symbol' => '&#1083;&#1074;',
        ],
        'BRL' => [
            'name' => 'Brazilian real',
            'symbol' => '&#82;&#36;',
        ],
        'BTN' => [
            'name' => 'Bhutanese ngultrum',
            'symbol' => '&#78;&#117;&#46;',
        ],
        'BND' => [
            'name' => 'Brunei dollar',
            'symbol' => '&#66;&#36;',
        ],
        'KPW' => [
            'name' => 'Korea (North) Won',
            'symbol' => '&#8361;'
        ],
        'KRW' => [
            'name' => 'Korea (South) Won',
            'symbol' => '&#8361;'
        ],
        'KHR' => [
            'name' => 'Cambodian riel',
            'symbol' => '&#6107;'
        ],
        'CAD' => [
            'name' => 'Canadian dollar',
            'symbol' => '&#67;&#36;',
        ],
        'CDF' => [
            'name' => 'Congolese franc',
            'symbol' => '&#70;&#67;'
        ],
        'KYD' => [
            'name' => 'Cayman Islands dollar',
            'symbol' => '&#36;',
        ],
        'CLP' => [
            'name' => 'Chilean peso',
            'symbol' => '&#36;',
        ],
        'CNY' => [
            'name' => 'Chinese Yuan Renminbi',
            'symbol' => '&#165;',
        ],
        'COP' => [
            'name' => 'Colombian peso',
            'symbol' => '&#36;',
        ],
        'CRC' => [
            'name' => 'Costa Rican colón',
            'symbol' => '&#8353;',
        ],
        'HRK' => [
            'name' => 'Croatian kuna',
            'symbol' => '&#107;&#110;',
        ],
        'HTG' => [
            'name' => 'Haitian gourde',
            'symbol' => '&#71;'
        ],
        'CUP' => [
            'name' => 'Cuban peso',
            'symbol' => '&#8369;',
        ],
        'CZK' => [
            'name' => 'Czech koruna',
            'symbol' => '&#75;&#269;',
        ],
        'DZD' => [
            'name' => 'Algerian dinar',
            'symbol' => '&#1583;&#1580;'
        ],
        'DKK' => [
            'name' => 'Danish krone',
            'symbol' => '&#107;&#114;',
        ],
        'DJF' => [
            'name' => 'Djiboutian franc',
            'symbol' => '&#70;&#100;&#106;',
        ],
        'DOP' => [
            'name' => 'Dominican peso',
            'symbol' => '&#82;&#68;&#36;',
        ],
        'GNF' => [
            'name' => 'Guinean franc',
            'symbol' => '&#70;&#71;'
        ],
        'XOF' => [
            'name' => 'CFA franc BCEAO',
            'symbol' => '',
        ],
        'XDR' => [
            'name' => 'CFA',
            'symbol' => '',
        ],
        'XAF' => [
            'name' => 'CFA franc',
            'symbol' => '&#70;&#67;&#70;&#65;'
        ],
        'XPF' => [
            'name' => 'CFP franc',
            'symbol' => '&#70;'
        ],
        'XXX' => [
            'name' => 'Unknown',
            'symbol' => '?'
        ],
        'XCD' => [
            'name' => 'Eastern Caribbean dollar',
            'symbol' => '&#36;',
        ],
        'ETB' => [
            'name' => 'Ethiopian birr',
            'symbol' => '&#66;&#114;'
        ],
        'ERN' => [
            'name' => 'Eritrean nakfa',
            'symbol' => '&#78;&#102;&#107;'
        ],
        'EGP' => [
            'name' => 'Egyptian pound',
            'symbol' => '&#163;',
        ],
        'STN' => [
            'name' => 'Sao Tome &amp; Principe',
            'symbol' => 'Db'
        ],
        'SVC' => [
            'name' => 'Salvadoran colón',
            'symbol' => '&#36;',
        ],
        'EEK' => [
            'name' => 'Estonian kroon',
            'symbol' => '&#75;&#114;',
        ],
        'EUR' => [
            'name' => 'Euro',
            'symbol' => '&#8364;',
        ],
        'FKP' => [
            'name' => 'Falkland Islands (Malvinas) Pound',
            'symbol' => '&#70;&#75;&#163;',
        ],
        'FJD' => [
            'name' => 'Fijian dollar',
            'symbol' => '&#70;&#74;&#36;',
        ],
        'GMD' => [
            'name' => 'Gambian dalasi',
            'symbol' => '&#68;'
        ],
        'GHC' => [
            'name' => 'Ghanaian cedi',
            'symbol' => '&#71;&#72;&#162;',
        ],
        'GIP' => [
            'name' => 'Gibraltar pound',
            'symbol' => '&#163;'
        ],
        'GTQ' => [
            'name' => 'Guatemalan quetzal',
            'symbol' => '&#81;'
        ],
        'GHS' => [
            'name' => 'Ghanaian cedi',
            'symbol' => '&#162;'
        ],
        'GGP' => [
            'name' => 'Guernsey pound',
            'symbol' => '&#81;'
        ],
        'GYD' => [
            'name' => 'Guyanese dollar',
            'symbol' => '&#71;&#89;&#36;'
        ],
        'HNL' => [
            'name' => 'Honduran lempira',
            'symbol' => '&#76;'
        ],
        'HKD' => [
            'name' => 'Hong Kong dollar',
            'symbol' => '&#72;&#75;&#36;'
        ],
        'HUF' => [
            'name' => 'Hungarian forint',
            'symbol' => '&#70;&#116;'
        ],
        'ISK' => [
            'name' => 'Icelandic króna',
            'symbol' => '&#237;&#107;&#114;'
        ],
        'INR' => [
            'name' => 'Indian rupee',
            'symbol' => '&#8377;'
        ],
        'IQD' => [
            'name' => 'Iraqi dinar',
            'symbol' => '&#1593;.&#1583;'
        ],
        'IDR' => [
            'name' => 'Indonesian rupiah',
            'symbol' => '&#82;&#112;'
        ],
        'IRR' => [
            'name' => 'Iranian rial',
            'symbol' => '&#65020;'
        ],
        'IMP' => [
            'name' => 'Manx pound',
            'symbol' => '&#163;'
        ],
        'ILS' => [
            'name' => 'Israeli Shekel',
            'symbol' => '&#8362;'
        ],
        'JOD' => [
            'name' => 'Jordanian dinar',
            'symbol' => '&#74;&#68;'
        ],
        'JMD' => [
            'name' => 'Jamaican dollar',
            'symbol' => '&#74;&#36;'
        ],
        'VES' => [
            'name' => 'Venezuelan bolívar',
            'symbol' => '&#66;&#115;',
        ],
        'VEF' => [
            'name' => 'Venezuelan bolívar',
            'symbol' => '&#66;&#115;',
        ],
        'JPY' => [
            'name' => 'Japanese yen',
            'symbol' => '&#165;'
        ],
        'JEP' => [
            'name' => 'Jersey pound',
            'symbol' => '&#163;'
        ],
        'KMF' => [
            'name' => 'Comorian Franc',
            'symbol' => '&#67;&#70;'
        ],
        'KWD' => [
            'name' => 'Kuwaiti dinar',
            'symbol' => '&#1583;.&#1603;'
        ],
        'KZT' => [
            'name' => 'Kazakhstani tenge',
            'symbol' => '&#8376;'
        ],
        'KPW' => [
            'name' => 'South Korean won',
            'symbol' => '&#8361;'
        ],
        'KES' => [
            'name' => 'Kenyan shilling',
            'symbol' => '&#75;&#83;&#104;'
        ],
        'KGS' => [
            'name' => 'Kyrgyzstani som',
            'symbol' => '&#1083;&#1074;'
        ],
        'LSL' => [
            'name' => 'Lesotho loti',
            'symbol' => '&#76;',
        ],
        'LAK' => [
            'name' => 'Latvian lats',
            'symbol' => '&#8364;'
        ],
        'LVL' => [
            'name' => 'Latvian lats',
            'symbol' => '&#8364;'
        ],
        'LBP' => [
            'name' => 'Lebanese pound',
            'symbol' => '&#76;&#163;'
        ],
        'LRD' => [
            'name' => 'Liberian dollar',
            'symbol' => '&#76;&#68;&#36;'
        ],
        'LTL' => [
            'name' => 'Lithuanian litas',
            'symbol' => '&#8364;'
        ],
        'MAD' => [
            'name' => 'Moroccan dirham',
            'symbol' => '&#1583;.&#1605;.'
        ],
        'MDL' => [
            'name' => 'Moldovan leu',
            'symbol' => '&#76;'
        ],
        'MVR' => [
            'name' => 'Mauritanian rupee',
            'symbol' => '.&#1923;'
        ],
        'MMK' => [
            'name' => 'Myanma kyat',
            'symbol' => '&#75;'
        ],
        'MVK' => [
            'name' => 'Mazatik keso',
            'symbol' => '&#77;&#75;'
        ],
        'MWK' => [
            'name' => 'Malawian kwacha',
            'symbol' => '&#77;&#75;'
        ],
        'MRO' => [
            'name' => 'Mauritian ouguiya',
            'symbol' => ''
        ],
        'MRU' => [
            'name' => 'Mauritanian ouguiya',
            'symbol' => '',
        ],
        'MKD' => [
            'name' => 'Macedonian denar',
            'symbol' => '&#1076;&#1077;&#1085;'
        ],
        'MGA' => [
            'name' => 'Malagasy ariary',
            'symbol' => '&#65;&#114;',
        ],
        'MYR' => [
            'name' => 'Malaysian ringgit',
            'symbol' => '&#82;&#77;'
        ],
        'MUR' => [
            'name' => 'Mauritian rupee',
            'symbol' => '&#82;&#115;'
        ],
        'MXN' => [
            'name' => 'Mexican peso',
            'symbol' => '&#77;&#101;&#120;&#36;'
        ],
        'MNT' => [
            'name' => 'Mongolian tögrög',
            'symbol' => '&#8366;'
        ],
        'MZN' => [
            'name' => 'Mozambican metical',
            'symbol' => '&#77;&#84;'
        ],
        'NAD' => [
            'name' => 'Namibian dollar',
            'symbol' => '&#78;&#36;'
        ],
        'NPR' => [
            'name' => 'Nepalese rupee',
            'symbol' => '&#82;&#115;&#46;'
        ],
        'ANG' => [
            'name' => 'Netherlands Antillean guilder',
            'symbol' => '&#402;'
        ],
        'NZD' => [
            'name' => 'New Zealand dollar',
            'symbol' => '&#36;'
        ],
        'NIO' => [
            'name' => 'Nicaraguan córdoba',
            'symbol' => '&#67;&#36;'
        ],
        'NGN' => [
            'name' => 'Nigerian naira',
            'symbol' => '&#8358;'
        ],
        'NOK' => [
            'name' => 'Norwegian krone',
            'symbol' => '&#107;&#114;'
        ],
        'OMR' => [
            'name' => 'Omani rial',
            'symbol' => '&#65020;'
        ],
        'PKR' => [
            'name' => 'Pakistani rupee',
            'symbol' => '&#82;&#115;'
        ],
        'PGK' => [
            'name' => 'Papua New Guinean kina',
            'symbol' => '&#75;'
        ],
        'PAB' => [
            'name' => 'Panamanian balboa',
            'symbol' => '&#66;&#47;&#46;'
        ],
        'PYG' => [
            'name' => 'Paraguayan Guaraní',
            'symbol' => '&#8370;'
        ],
        'PEN' => [
            'name' => 'Sol',
            'symbol' => '&#83;&#47;&#46;'
        ],
        'PHP' => [
            'name' => 'Philippine peso',
            'symbol' => '&#8369;'
        ],
        'PLN' => [
            'name' => 'Polish złoty',
            'symbol' => 'zł'
        ],
        'QAR' => [
            'name' => 'Qatari Riyal',
            'symbol' => '&#65020;'
        ],
        'RON' => [
            'name' => 'Romanian leu (Leu românesc',
            'symbol' => '&#76;'
        ],
        'RWF' => [
            'name' => 'Rwandan franc',
            'symbol' => '&#1585;.&#1587;',
        ],
        'RUB' => [
            'name' => 'Russian ruble',
            'symbol' => '&#8381;'
        ],
        'SSP' => [
            'name' => 'South Sudanese pound',
            'symbol' => 'SS£'
        ],
        'SHP' => [
            'name' => 'Saint Helena pound',
            'symbol' => '&#163;'
        ],
        'MOP' => [
            'name' => 'Macanese pataca',
            'symbol' => '&#77;&#79;&#80;&#36;',
        ],
        'SLL' => [
            'name' => 'Sierra Leonean leone',
            'symbol' => '&#76;&#101;'
        ],
        'SAR' => [
            'name' => 'Saudi riyal',
            'symbol' => '&#65020;'
        ],
        'RSD' => [
            'name' => 'Serbian dinar',
            'symbol' => '&#100;&#105;&#110;'
        ],
        'SCR' => [
            'name' => 'Seychellois rupee',
            'symbol' => '&#82;&#115;'
        ],
        'SDG' => [
            'name' => 'Sudanese pound',
            'symbol' => '&#163;'
        ],
        'SGD' => [
            'name' => 'Singapore dollar',
            'symbol' => '&#83;&#36;'
        ],
        'SBD' => [
            'name' => 'Solomon Islands dollar',
            'symbol' => '&#83;&#73;&#36;'
        ],
        'SOS' => [
            'name' => 'Somali shilling',
            'symbol' => '&#83;&#104;&#46;&#83;&#111;'
        ],
        'ZAR' => [
            'name' => 'South African rand',
            'symbol' => '&#82;'
        ],
        'LKR' => [
            'name' => 'Sri Lankan rupee',
            'symbol' => '&#82;&#115;'
        ],
        'LYD' => [
            'name' => 'Libyan dinar',
            'symbol' => '&#1604;.&#1583;'
        ],
        'SEK' => [
            'name' => 'Swedish krona',
            'symbol' => '&#107;&#114;'
        ],
        'CUC' => [
            'name' => 'Cuban convertible peso',
            'symbol' => '&#8396;'
        ],
        'CVE' => [
            'name' => 'Cabo Verde escudo',
            'symbol' => '&#36;'
        ],
        'CHF' => [
            'name' => 'Swiss franc',
            'symbol' => '&#67;&#72;&#102;'
        ],
        'SRD' => [
            'name' => 'Suriname Dollar',
            'symbol' => '&#83;&#114;&#36;'
        ],
        'SYP' => [
            'name' => 'Syrian pound',
            'symbol' => '&#163;&#83;'
        ],
        'TOP' => [
            'name' => 'Tongan paʻanga',
            'symbol' => '&#84;&#36;'
        ],
        'TZS' => [
            'name' => 'Tanzanian shilling',
            'symbol' => 'Tsh'
        ],
        'TWD' => [
            'name' => 'New Taiwan dollar',
            'symbol' => '&#78;&#84;&#36;'
        ],
        'TJS' => [
            'name' => 'Somoni tajik',
            'symbol' => '&#65;&#114;'
        ],
        'THB' => [
            'name' => 'Thai baht',
            'symbol' => '&#3647;'
        ],
        'TTD' => [
            'name' => 'Trinidad and Tobago dollar',
            'symbol' => '&#84;&#84;&#36;'
        ],
        'TND' => [
            'name' => 'Tunisian dinar',
            'symbol' => '&#1583;.&#1578;'
        ],
        'TMT' => [
            'name' => 'Turkmenistan manat',
            'symbol' => '&#109;'
        ],
        'TRY' => [
            'name' => 'Turkey Lira',
            'symbol' => '&#8378;'
        ],
        'TVD' => [
            'name' => 'Tuvaluan dollar',
            'symbol' => '&#84;&#86;&#36;'
        ],
        'UAH' => [
            'name' => 'Ukrainian hryvnia',
            'symbol' => '&#8372;'
        ],
        'GBP' => [
            'name' => 'Pound sterling',
            'symbol' => '&#163;'
        ],
        'SZL' => [
            'name' => 'Swazi lilangeni',
            'symbol' => '&#76;',
        ],
        'GEL' => [
            'name' => 'Georgian lari',
            'symbol' => '&#4314;'
        ],
        'UGX' => [
            'name' => 'Ugandan shilling',
            'symbol' => '&#85;&#83;&#104;'
        ],
        'USD' => [
            'name' => 'United States dollar',
            'symbol' => '&#36;'
        ],
        'UYU' => [
            'name' => 'Peso Uruguayolar',
            'symbol' => '&#36;&#85;'
        ],
        'UZS' => [
            'name' => 'Uzbekistani soʻm',
            'symbol' => '&#1083;&#1074;'
        ],
        'VEF' => [
            'name' => 'Venezuelan bolívar',
            'symbol' => '&#66;&#115;'
        ],
        'VUV' => [
            'name' => 'Vanuatu vatu',
            'symbol' => '&#86;&#84;'
        ],
        'VND' => [
            'name' => 'Vietnamese đồng',
            'symbol' => '&#8363;'
        ],
        'YER' => [
            'name' => 'Yemeni rial',
            'symbol' => '&#65020;'
        ],
        'WST' => [
            'name' => 'Samoan tala',
            'symbol' => '&#87;&#83;&#36;'
        ],
        'ZAR' => [
            'name' => 'South African rand',
            'symbol' => '&#82;',
        ],
        'ZMW' => [
            'name' => 'Zambian kwacha',
            'symbol' => '&#90;&#75;'
        ],
        'ZWD' => [
            'name' => 'Zimbabwean dollar',
            'symbol' => '&#90;&#36;'
        ]
    ];

    public function __construct(string $currency)
    {
        $currency = mb_strtoupper($currency, 'UTF-8');

        $this->validate($currency);

        parent::__construct($currency);
    }

    public function name(): string
    {
        return self::CODES[$this->value()]['name'];
    }

    public function symbol(): string
    {
        return self::CODES[$this->value()]['symbol'];
    }

    public function validate(string $value): void
    {
        if (!in_array($value, $this->availableCodes())) {
            throw new \InvalidArgumentException("The currency {$value} does not exists");
        }
    }

    private function availableCodes(): array
    {
        return array_keys(self::CODES);
    }
}
