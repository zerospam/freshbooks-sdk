<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 1:12 PM
 */

namespace ZEROSPAM\Freshbooks\Business\Enums\Currency;


use MabeEnum\Enum;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Impl\PrimalValuedEnumTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

/**
 * Class CurrencyEnum
 *
 * @method static CurrencyEnum CNX()
 * @method static CurrencyEnum BOV()
 * @method static CurrencyEnum MVP()
 * @method static CurrencyEnum AFN()
 * @method static CurrencyEnum AFA()
 * @method static CurrencyEnum BRZ()
 * @method static CurrencyEnum ROL()
 * @method static CurrencyEnum MZM()
 * @method static CurrencyEnum KRO()
 * @method static CurrencyEnum SDP()
 * @method static CurrencyEnum MGA()
 * @method static CurrencyEnum ARA()
 * @method static CurrencyEnum THB()
 * @method static CurrencyEnum PAB()
 * @method static CurrencyEnum ETB()
 * @method static CurrencyEnum BOL()
 * @method static CurrencyEnum BOB()
 * @method static CurrencyEnum VEF()
 * @method static CurrencyEnum VEB()
 * @method static CurrencyEnum GHS()
 * @method static CurrencyEnum GHC()
 * @method static CurrencyEnum CRC()
 * @method static CurrencyEnum SVC()
 * @method static CurrencyEnum DKK()
 * @method static CurrencyEnum SKK()
 * @method static CurrencyEnum EEK()
 * @method static CurrencyEnum CSK()
 * @method static CurrencyEnum ISK()
 * @method static CurrencyEnum ISJ()
 * @method static CurrencyEnum NOK()
 * @method static CurrencyEnum SEK()
 * @method static CurrencyEnum CZK()
 * @method static CurrencyEnum BRC()
 * @method static CurrencyEnum BRN()
 * @method static CurrencyEnum BRR()
 * @method static CurrencyEnum BRE()
 * @method static CurrencyEnum BRB()
 * @method static CurrencyEnum GEK()
 * @method static CurrencyEnum MDC()
 * @method static CurrencyEnum NIC()
 * @method static CurrencyEnum NIO()
 * @method static CurrencyEnum GMD()
 * @method static CurrencyEnum MKD()
 * @method static CurrencyEnum MKN()
 * @method static CurrencyEnum DZD()
 * @method static CurrencyEnum YUN()
 * @method static CurrencyEnum HRD()
 * @method static CurrencyEnum BHD()
 * @method static CurrencyEnum BAD()
 * @method static CurrencyEnum YUD()
 * @method static CurrencyEnum YDD()
 * @method static CurrencyEnum IQD()
 * @method static CurrencyEnum YUR()
 * @method static CurrencyEnum JOD()
 * @method static CurrencyEnum KWD()
 * @method static CurrencyEnum LYD()
 * @method static CurrencyEnum RSD()
 * @method static CurrencyEnum CSD()
 * @method static CurrencyEnum SDD()
 * @method static CurrencyEnum TND()
 * @method static CurrencyEnum STD()
 * @method static CurrencyEnum VND()
 * @method static CurrencyEnum VNN()
 * @method static CurrencyEnum GRD()
 * @method static CurrencyEnum AMD()
 * @method static CurrencyEnum AED()
 * @method static CurrencyEnum MAD()
 * @method static CurrencyEnum AUD()
 * @method static CurrencyEnum CAD()
 * @method static CurrencyEnum BBD()
 * @method static CurrencyEnum BZD()
 * @method static CurrencyEnum BND()
 * @method static CurrencyEnum GYD()
 * @method static CurrencyEnum HKD()
 * @method static CurrencyEnum SGD()
 * @method static CurrencyEnum SRD()
 * @method static CurrencyEnum TTD()
 * @method static CurrencyEnum BSD()
 * @method static CurrencyEnum BMD()
 * @method static CurrencyEnum KYD()
 * @method static CurrencyEnum SBD()
 * @method static CurrencyEnum XCD()
 * @method static CurrencyEnum USD()
 * @method static CurrencyEnum USN()
 * @method static CurrencyEnum USS()
 * @method static CurrencyEnum FJD()
 * @method static CurrencyEnum JMD()
 * @method static CurrencyEnum LRD()
 * @method static CurrencyEnum NAD()
 * @method static CurrencyEnum NZD()
 * @method static CurrencyEnum RHD()
 * @method static CurrencyEnum ZWD()
 * @method static CurrencyEnum ZWR()
 * @method static CurrencyEnum ZWL()
 * @method static CurrencyEnum GQE()
 * @method static CurrencyEnum CVE()
 * @method static CurrencyEnum TPE()
 * @method static CurrencyEnum GWE()
 * @method static CurrencyEnum MZE()
 * @method static CurrencyEnum PTE()
 * @method static CurrencyEnum CLE()
 * @method static CurrencyEnum EUR()
 * @method static CurrencyEnum CHE()
 * @method static CurrencyEnum SRG()
 * @method static CurrencyEnum ANG()
 * @method static CurrencyEnum AWG()
 * @method static CurrencyEnum NLG()
 * @method static CurrencyEnum XRE()
 * @method static CurrencyEnum XOF()
 * @method static CurrencyEnum XAF()
 * @method static CurrencyEnum XPF()
 * @method static CurrencyEnum XFU()
 * @method static CurrencyEnum CHW()
 * @method static CurrencyEnum BEF()
 * @method static CurrencyEnum BEC()
 * @method static CurrencyEnum BEL()
 * @method static CurrencyEnum CDF()
 * @method static CurrencyEnum LUC()
 * @method static CurrencyEnum BIF()
 * @method static CurrencyEnum DJF()
 * @method static CurrencyEnum RWF()
 * @method static CurrencyEnum KMF()
 * @method static CurrencyEnum LUL()
 * @method static CurrencyEnum FRF()
 * @method static CurrencyEnum GNF()
 * @method static CurrencyEnum LUF()
 * @method static CurrencyEnum MGF()
 * @method static CurrencyEnum MLF()
 * @method static CurrencyEnum MAF()
 * @method static CurrencyEnum MCF()
 * @method static CurrencyEnum XFO()
 * @method static CurrencyEnum CHF()
 * @method static CurrencyEnum HUF()
 * @method static CurrencyEnum HTG()
 * @method static CurrencyEnum PYG()
 * @method static CurrencyEnum UAH()
 * @method static CurrencyEnum KRH()
 * @method static CurrencyEnum JPY()
 * @method static CurrencyEnum PEI()
 * @method static CurrencyEnum CNY()
 * @method static CurrencyEnum UAK()
 * @method static CurrencyEnum PGK()
 * @method static CurrencyEnum LAK()
 * @method static CurrencyEnum HRK()
 * @method static CurrencyEnum MWK()
 * @method static CurrencyEnum ZMW()
 * @method static CurrencyEnum ZMK()
 * @method static CurrencyEnum AOA()
 * @method static CurrencyEnum AOK()
 * @method static CurrencyEnum AOR()
 * @method static CurrencyEnum BUK()
 * @method static CurrencyEnum MMK()
 * @method static CurrencyEnum GEL()
 * @method static CurrencyEnum LVL()
 * @method static CurrencyEnum ALL()
 * @method static CurrencyEnum ALK()
 * @method static CurrencyEnum HNL()
 * @method static CurrencyEnum SLL()
 * @method static CurrencyEnum MDL()
 * @method static CurrencyEnum RON()
 * @method static CurrencyEnum BGN()
 * @method static CurrencyEnum BGO()
 * @method static CurrencyEnum BGL()
 * @method static CurrencyEnum BGM()
 * @method static CurrencyEnum SZL()
 * @method static CurrencyEnum ITL()
 * @method static CurrencyEnum MTL()
 * @method static CurrencyEnum TRY()
 * @method static CurrencyEnum TRL()
 * @method static CurrencyEnum LTL()
 * @method static CurrencyEnum GIP()
 * @method static CurrencyEnum SHP()
 * @method static CurrencyEnum FKP()
 * @method static CurrencyEnum SSP()
 * @method static CurrencyEnum EGP()
 * @method static CurrencyEnum GBP()
 * @method static CurrencyEnum IEP()
 * @method static CurrencyEnum ILP()
 * @method static CurrencyEnum LBP()
 * @method static CurrencyEnum MTP()
 * @method static CurrencyEnum SDG()
 * @method static CurrencyEnum SYP()
 * @method static CurrencyEnum CYP()
 * @method static CurrencyEnum LSL()
 * @method static CurrencyEnum AZN()
 * @method static CurrencyEnum AZM()
 * @method static CurrencyEnum TMT()
 * @method static CurrencyEnum TMM()
 * @method static CurrencyEnum DEM()
 * @method static CurrencyEnum BAM()
 * @method static CurrencyEnum DDM()
 * @method static CurrencyEnum FIM()
 * @method static CurrencyEnum MZN()
 * @method static CurrencyEnum NGN()
 * @method static CurrencyEnum ERN()
 * @method static CurrencyEnum BTN()
 * @method static CurrencyEnum BAN()
 * @method static CurrencyEnum YUM()
 * @method static CurrencyEnum TWD()
 * @method static CurrencyEnum AON()
 * @method static CurrencyEnum BYB()
 * @method static CurrencyEnum ILS()
 * @method static CurrencyEnum ZRN()
 * @method static CurrencyEnum MRO()
 * @method static CurrencyEnum MOP()
 * @method static CurrencyEnum TOP()
 * @method static CurrencyEnum ARS()
 * @method static CurrencyEnum ARM()
 * @method static CurrencyEnum ARP()
 * @method static CurrencyEnum BOP()
 * @method static CurrencyEnum COP()
 * @method static CurrencyEnum CUC()
 * @method static CurrencyEnum CUP()
 * @method static CurrencyEnum GWP()
 * @method static CurrencyEnum MXP()
 * @method static CurrencyEnum DOP()
 * @method static CurrencyEnum PHP()
 * @method static CurrencyEnum ARL()
 * @method static CurrencyEnum MXN()
 * @method static CurrencyEnum UYU()
 * @method static CurrencyEnum UYP()
 * @method static CurrencyEnum UYI()
 * @method static CurrencyEnum CLP()
 * @method static CurrencyEnum ADP()
 * @method static CurrencyEnum ESP()
 * @method static CurrencyEnum ESA()
 * @method static CurrencyEnum ESB()
 * @method static CurrencyEnum BWP()
 * @method static CurrencyEnum GTQ()
 * @method static CurrencyEnum ZAR()
 * @method static CurrencyEnum ZAL()
 * @method static CurrencyEnum BRL()
 * @method static CurrencyEnum QAR()
 * @method static CurrencyEnum YER()
 * @method static CurrencyEnum IRR()
 * @method static CurrencyEnum OMR()
 * @method static CurrencyEnum SAR()
 * @method static CurrencyEnum KHR()
 * @method static CurrencyEnum MYR()
 * @method static CurrencyEnum BYN()
 * @method static CurrencyEnum BYR()
 * @method static CurrencyEnum LVR()
 * @method static CurrencyEnum RUB()
 * @method static CurrencyEnum RUR()
 * @method static CurrencyEnum SUR()
 * @method static CurrencyEnum TJR()
 * @method static CurrencyEnum LKR()
 * @method static CurrencyEnum MVR()
 * @method static CurrencyEnum SCR()
 * @method static CurrencyEnum IDR()
 * @method static CurrencyEnum MUR()
 * @method static CurrencyEnum NPR()
 * @method static CurrencyEnum PKR()
 * @method static CurrencyEnum INR()
 * @method static CurrencyEnum PEN()
 * @method static CurrencyEnum PES()
 * @method static CurrencyEnum KGS()
 * @method static CurrencyEnum UZS()
 * @method static CurrencyEnum TJS()
 * @method static CurrencyEnum ECS()
 * @method static CurrencyEnum GNS()
 * @method static CurrencyEnum BDT()
 * @method static CurrencyEnum WST()
 * @method static CurrencyEnum LTT()
 * @method static CurrencyEnum KZT()
 * @method static CurrencyEnum SIT()
 * @method static CurrencyEnum MNT()
 * @method static CurrencyEnum CLF()
 * @method static CurrencyEnum MXV()
 * @method static CurrencyEnum ECV()
 * @method static CurrencyEnum COU()
 * @method static CurrencyEnum XEU()
 * @method static CurrencyEnum VUV()
 * @method static CurrencyEnum KPW()
 * @method static CurrencyEnum KRW()
 * @method static CurrencyEnum ILR()
 * @method static CurrencyEnum ATS()
 * @method static CurrencyEnum KES()
 * @method static CurrencyEnum SOS()
 * @method static CurrencyEnum TZS()
 * @method static CurrencyEnum UGX()
 * @method static CurrencyEnum UGS()
 * @method static CurrencyEnum ZRZ()
 * @method static CurrencyEnum PLN()
 * @method static CurrencyEnum PLZ()
 * Currencies Enumeration
 *
 * @package ZEROSPAM\Freshbooks\Business\Enums
 */
class CurrencyEnum extends Enum implements PrimalValued
{
    use PrimalValuedEnumTrait;

    const CNX = 'CNX';
    const BOV = 'BOV';
    const MVP = 'MVP';
    const AFN = 'AFN';
    const AFA = 'AFA';
    const BRZ = 'BRZ';
    const ROL = 'ROL';
    const MZM = 'MZM';
    const KRO = 'KRO';
    const SDP = 'SDP';
    const MGA = 'MGA';
    const ARA = 'ARA';
    const THB = 'THB';
    const PAB = 'PAB';
    const ETB = 'ETB';
    const BOL = 'BOL';
    const BOB = 'BOB';
    const VEF = 'VEF';
    const VEB = 'VEB';
    const GHS = 'GHS';
    const GHC = 'GHC';
    const CRC = 'CRC';
    const SVC = 'SVC';
    const DKK = 'DKK';
    const SKK = 'SKK';
    const EEK = 'EEK';
    const CSK = 'CSK';
    const ISK = 'ISK';
    const ISJ = 'ISJ';
    const NOK = 'NOK';
    const SEK = 'SEK';
    const CZK = 'CZK';
    const BRC = 'BRC';
    const BRN = 'BRN';
    const BRR = 'BRR';
    const BRE = 'BRE';
    const BRB = 'BRB';
    const GEK = 'GEK';
    const MDC = 'MDC';
    const NIC = 'NIC';
    const NIO = 'NIO';
    const GMD = 'GMD';
    const MKD = 'MKD';
    const MKN = 'MKN';
    const DZD = 'DZD';
    const YUN = 'YUN';
    const HRD = 'HRD';
    const BHD = 'BHD';
    const BAD = 'BAD';
    const YUD = 'YUD';
    const YDD = 'YDD';
    const IQD = 'IQD';
    const YUR = 'YUR';
    const JOD = 'JOD';
    const KWD = 'KWD';
    const LYD = 'LYD';
    const RSD = 'RSD';
    const CSD = 'CSD';
    const SDD = 'SDD';
    const TND = 'TND';
    const STD = 'STD';
    const VND = 'VND';
    const VNN = 'VNN';
    const GRD = 'GRD';
    const AMD = 'AMD';
    const AED = 'AED';
    const MAD = 'MAD';
    const AUD = 'AUD';
    const CAD = 'CAD';
    const BBD = 'BBD';
    const BZD = 'BZD';
    const BND = 'BND';
    const GYD = 'GYD';
    const HKD = 'HKD';
    const SGD = 'SGD';
    const SRD = 'SRD';
    const TTD = 'TTD';
    const BSD = 'BSD';
    const BMD = 'BMD';
    const KYD = 'KYD';
    const SBD = 'SBD';
    const XCD = 'XCD';
    const USD = 'USD';
    const USN = 'USN';
    const USS = 'USS';
    const FJD = 'FJD';
    const JMD = 'JMD';
    const LRD = 'LRD';
    const NAD = 'NAD';
    const NZD = 'NZD';
    const RHD = 'RHD';
    const ZWD = 'ZWD';
    const ZWR = 'ZWR';
    const ZWL = 'ZWL';
    const GQE = 'GQE';
    const CVE = 'CVE';
    const TPE = 'TPE';
    const GWE = 'GWE';
    const MZE = 'MZE';
    const PTE = 'PTE';
    const CLE = 'CLE';
    const EUR = 'EUR';
    const CHE = 'CHE';
    const SRG = 'SRG';
    const ANG = 'ANG';
    const AWG = 'AWG';
    const NLG = 'NLG';
    const XRE = 'XRE';
    const XOF = 'XOF';
    const XAF = 'XAF';
    const XPF = 'XPF';
    const XFU = 'XFU';
    const CHW = 'CHW';
    const BEF = 'BEF';
    const BEC = 'BEC';
    const BEL = 'BEL';
    const CDF = 'CDF';
    const LUC = 'LUC';
    const BIF = 'BIF';
    const DJF = 'DJF';
    const RWF = 'RWF';
    const KMF = 'KMF';
    const LUL = 'LUL';
    const FRF = 'FRF';
    const GNF = 'GNF';
    const LUF = 'LUF';
    const MGF = 'MGF';
    const MLF = 'MLF';
    const MAF = 'MAF';
    const MCF = 'MCF';
    const XFO = 'XFO';
    const CHF = 'CHF';
    const HUF = 'HUF';
    const HTG = 'HTG';
    const PYG = 'PYG';
    const UAH = 'UAH';
    const KRH = 'KRH';
    const JPY = 'JPY';
    const PEI = 'PEI';
    const CNY = 'CNY';
    const UAK = 'UAK';
    const PGK = 'PGK';
    const LAK = 'LAK';
    const HRK = 'HRK';
    const MWK = 'MWK';
    const ZMW = 'ZMW';
    const ZMK = 'ZMK';
    const AOA = 'AOA';
    const AOK = 'AOK';
    const AOR = 'AOR';
    const BUK = 'BUK';
    const MMK = 'MMK';
    const GEL = 'GEL';
    const LVL = 'LVL';
    const ALL = 'ALL';
    const ALK = 'ALK';
    const HNL = 'HNL';
    const SLL = 'SLL';
    const MDL = 'MDL';
    const RON = 'RON';
    const BGN = 'BGN';
    const BGO = 'BGO';
    const BGL = 'BGL';
    const BGM = 'BGM';
    const SZL = 'SZL';
    const ITL = 'ITL';
    const MTL = 'MTL';
    const TRY = 'TRY';
    const TRL = 'TRL';
    const LTL = 'LTL';
    const GIP = 'GIP';
    const SHP = 'SHP';
    const FKP = 'FKP';
    const SSP = 'SSP';
    const EGP = 'EGP';
    const GBP = 'GBP';
    const IEP = 'IEP';
    const ILP = 'ILP';
    const LBP = 'LBP';
    const MTP = 'MTP';
    const SDG = 'SDG';
    const SYP = 'SYP';
    const CYP = 'CYP';
    const LSL = 'LSL';
    const AZN = 'AZN';
    const AZM = 'AZM';
    const TMT = 'TMT';
    const TMM = 'TMM';
    const DEM = 'DEM';
    const BAM = 'BAM';
    const DDM = 'DDM';
    const FIM = 'FIM';
    const MZN = 'MZN';
    const NGN = 'NGN';
    const ERN = 'ERN';
    const BTN = 'BTN';
    const BAN = 'BAN';
    const YUM = 'YUM';
    const TWD = 'TWD';
    const AON = 'AON';
    const BYB = 'BYB';
    const ILS = 'ILS';
    const ZRN = 'ZRN';
    const MRO = 'MRO';
    const MOP = 'MOP';
    const TOP = 'TOP';
    const ARS = 'ARS';
    const ARM = 'ARM';
    const ARP = 'ARP';
    const BOP = 'BOP';
    const COP = 'COP';
    const CUC = 'CUC';
    const CUP = 'CUP';
    const GWP = 'GWP';
    const MXP = 'MXP';
    const DOP = 'DOP';
    const PHP = 'PHP';
    const ARL = 'ARL';
    const MXN = 'MXN';
    const UYU = 'UYU';
    const UYP = 'UYP';
    const UYI = 'UYI';
    const CLP = 'CLP';
    const ADP = 'ADP';
    const ESP = 'ESP';
    const ESA = 'ESA';
    const ESB = 'ESB';
    const BWP = 'BWP';
    const GTQ = 'GTQ';
    const ZAR = 'ZAR';
    const ZAL = 'ZAL';
    const BRL = 'BRL';
    const QAR = 'QAR';
    const YER = 'YER';
    const IRR = 'IRR';
    const OMR = 'OMR';
    const SAR = 'SAR';
    const KHR = 'KHR';
    const MYR = 'MYR';
    const BYN = 'BYN';
    const BYR = 'BYR';
    const LVR = 'LVR';
    const RUB = 'RUB';
    const RUR = 'RUR';
    const SUR = 'SUR';
    const TJR = 'TJR';
    const LKR = 'LKR';
    const MVR = 'MVR';
    const SCR = 'SCR';
    const IDR = 'IDR';
    const MUR = 'MUR';
    const NPR = 'NPR';
    const PKR = 'PKR';
    const INR = 'INR';
    const PEN = 'PEN';
    const PES = 'PES';
    const KGS = 'KGS';
    const UZS = 'UZS';
    const TJS = 'TJS';
    const ECS = 'ECS';
    const GNS = 'GNS';
    const BDT = 'BDT';
    const WST = 'WST';
    const LTT = 'LTT';
    const KZT = 'KZT';
    const SIT = 'SIT';
    const MNT = 'MNT';
    const CLF = 'CLF';
    const MXV = 'MXV';
    const ECV = 'ECV';
    const COU = 'COU';
    const XEU = 'XEU';
    const VUV = 'VUV';
    const KPW = 'KPW';
    const KRW = 'KRW';
    const ILR = 'ILR';
    const ATS = 'ATS';
    const KES = 'KES';
    const SOS = 'SOS';
    const TZS = 'TZS';
    const UGX = 'UGX';
    const UGS = 'UGS';
    const ZRZ = 'ZRZ';
    const PLN = 'PLN';
    const PLZ = 'PLZ';
}