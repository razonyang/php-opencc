<?php

namespace RazonYang\OpenCC;

class Config
{
    const S2T = 's2t.json'; // Simplified Chinese to Traditional Chinese 簡體到繁體
    const T2S = 't2s.json'; // Traditional Chinese to Simplified Chinese 繁體到簡體
    const S2TW = 's2tw.json'; // Simplified Chinese to Traditional Chinese (Taiwan Standard) 簡體到臺灣正體
    const TW2S = 'tw2s.json'; // Traditional Chinese (Taiwan Standard) to Simplified Chinese 臺灣正體到簡體
    const S2HK = 's2hk.json'; // Simplified Chinese to Traditional Chinese (Hong Kong variant) 簡體到香港繁體
    const HK2S = 'hk2s.json'; // Traditional Chinese (Hong Kong variant) to Simplified Chinese 香港繁體到簡體
    const S2TWP = 's2twp.json'; // Simplified Chinese to Traditional Chinese (Taiwan Standard) with Taiwanese idiom 簡體到繁體（臺灣正體標準）並轉換爲臺灣常用詞彙
    const TW2SP  = 'tw2sp.json'; // Traditional Chinese (Taiwan Standard) to Simplified Chinese with Mainland Chinese idiom 繁體（臺灣正體標準）到簡體並轉換爲中國大陸常用詞彙
    const T2TW  = 't2tw.json'; // Traditional Chinese (OpenCC Standard) to Taiwan Standard 繁體（OpenCC 標準）到臺灣正體
    const HK2T = 'hk2t.json'; // Traditional Chinese (Hong Kong variant) to Traditional Chinese 香港繁體到繁體（OpenCC 標準）
    const T2HK = 't2hk.json'; // Traditional Chinese (OpenCC Standard) to Hong Kong variant 繁體（OpenCC 標準）到香港繁體
    const T2JP = 't2jp.json'; // Traditional Chinese Characters (Kyūjitai) to New Japanese Kanji (Shinjitai) 繁體（OpenCC 標準，舊字體）到日文新字體
    const JP2T = 'jp2t.json'; // New Japanese Kanji (Shinjitai) to Traditional Chinese Characters (Kyūjitai) 日文新字體到繁體（OpenCC 標準，舊字體）
    const TW2T = 'tw2t.json'; // Traditional Chinese (Taiwan standard) to Traditional Chinese 臺灣正體到繁體（OpenCC 標準）
}
