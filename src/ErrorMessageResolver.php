<?php
/**
 * Error message resolver class
 *
 * @author      Stanley Sie <swookon@gmail.com>
 * @access      public
 * @version     Release: 1.0
 */

namespace Stanleysie\HkError;

/**
 * This class resolves error messages based on keys defined in the data array.
 */
class ErrorMessageResolver
{
    /**
     * Array containing error messages.
     *
     * @var array
     */
    private $errorMessages;

    /**
     * Constructor.
     *
     * @param array $errorMessages An associative array of error messages with keys as error codes.
     */
    public function __construct(array $errorMessages = [])
    {
        if (!empty($errorMessages)) {
            $this->errorMessages = $errorMessages;
        } else {
            // Define default error messages
            $this->errorMessages = [
                "ERR001" => "無法更新帳戶資料",
                "ERR002" => "無法變更帳戶密碼",
                "ERR003" => "無法取消訂單自動續約",
                "ERR004" => "無法綁定信用卡",
                "ERR005" => "無法刪除信用卡設定",
                "ERR006" => "信用卡綁定數量已達上限",
                "ERR007" => "無法新增發票設定",
                "ERR008" => "發票設定數量已達上限",
                "ERR009" => "無法更新發票設定",
                "ERR010" => "無法刪除發票設定",
                "ERR011" => "無法建立小幫手帳號",
                "ERR012" => "無法新增小幫手",
                "ERR013" => "無法更新小幫手資訊",
                "ERR014" => "無法移除小幫手",
                "ERR015" => "無法建立 TapPay 付款請求",
                "ERR016" => "無法建立訂單",
                "ERR017" => "無法新增訂單項目",
                "ERR018" => "無法更新訂單交易資訊",
                "ERR019" => "無法設定預設發票",
                "ERR020" => "無法設定預設信用卡",
                "ERR021" => "交易失敗",
                "ERR022" => "3D 驗證失敗",
                "ERR023" => "無法建立網站",
                "ERR024" => "無法建立網站 Meta",
                "ERR025" => "無法建立網站服務",
                "ERR026" => "無法停止試用服務",
                "ERR027" => "無法建立網站服務",
                "ERR028" => "無法升級網站",
                "ERR029" => "無法轉移店家資訊",
                "ERR030" => "無法轉移優惠券",
                "ERR031" => "無法轉移自訂欄位",
                "ERR032" => "無法轉移金流設定",
                "ERR033" => "無法轉移物流設定",
                "ERR034" => "無法轉移金物流關聯",
                "ERR035" => "無法轉移商品資料",
                "ERR036" => "無法轉移商品分類",
                "ERR037" => "無法轉移商品分類關聯",
                "ERR038" => "無法轉移全館活動",
                "ERR039" => "無法轉移店家訊息",
                "ERR040" => "無法轉移訂單資訊",
                "ERR041" => "無法更新基本設定",
                "ERR042" => "上傳圖片失敗",
                "ERR043" => "無法更新網站 Meta 設定",
                "ERR044" => "無法新增網站活動紀錄",
                "ERR045" => "無法更新設定檔",
                "ERR046" => "無法刪除網站",
                "ERR047" => "無法建立商品資訊",
                "ERR048" => "無法建立商品圖片資訊",
                "ERR049" => "無法建立商品影片資訊",
                "ERR050" => "無法建立商品分類關聯",
                "ERR051" => "無法建立商品規格資訊",
                "ERR052" => "無法更新商品資訊",
                "ERR053" => "無法更新商品圖片資訊",
                "ERR054" => "無法更新商品影片資訊",
                "ERR055" => "無法更新商品分類關聯",
                "ERR056" => "無法更新商品規格資訊",
                "ERR057" => "無法刪除商品資訊",
                "ERR058" => "無法刪除商品圖片資訊",
                "ERR059" => "無法刪除商品影片資訊",
                "ERR060" => "無法刪除商品分類關聯",
                "ERR061" => "無法刪除商品規格資訊",
                "ERR062" => "無法建立商品分類",
                "ERR063" => "無法刪除商品分類",
                "ERR064" => "無法更新商品分類",
                "ERR065" => "無法新增店家資訊",
                "ERR066" => "無法更新店家資訊",
                "ERR067" => "無法新增自訂金流",
                "ERR068" => "無法更新自訂金流",
                "ERR069" => "無法刪除自訂金流",
                "ERR070" => "無法新增綠界交貨便設定",
                "ERR071" => "無法更新綠界交貨便設定",
                "ERR072" => "無法新增綠界黑貓宅急便設定",
                "ERR073" => "無法更新綠界黑貓宅急便設定",
                "ERR074" => "無法新增綠界信用卡設定",
                "ERR075" => "無法更新綠界信用卡設定",
                "ERR076" => "無法新增永豐 QR Pay 設定",
                "ERR077" => "無法更新永豐 QR Pay 設定",
                "ERR078" => "無法移除物流關聯",
                "ERR079" => "無法新增物流設定",
                "ERR080" => "無法更新物流設定",
                "ERR081" => "無法刪除物流設定",
                "ERR082" => "無法刪除金流關聯",
                "ERR083" => "無法新增自訂欄位",
                "ERR084" => "無法更新自訂欄位",
                "ERR085" => "無法新增全館活動",
                "ERR086" => "無法更新全館活動",
                "ERR087" => "無法新增優惠券",
                "ERR088" => "無法更新優惠券",
                "ERR089" => "無法刪除優惠券",
                "ERR090" => "無法安裝 FBE",
                "ERR091" => "無法更新 FBE 設定",
                "ERR092" => "無法移除 FBE 設定",
                "ERR093" => "無法新增 Google 搜尋引擎收錄設定",
                "ERR094" => "無法更新 Google 搜尋引擎收錄設定",
                "ERR095" => "無法新增追蹤碼設定",
                "ERR096" => "無法更新追蹤碼設定",
                "ERR097" => "無法取得瀏覽量數據",
                "ERR098" => "無法取得事件數據",
                "ERR099" => "帳號驗證時間已過期",
                "ERR100" => "帳號已完成驗證",
                "ERR101" => "驗證信重新寄送次數已達今日上限",
                "ERR102" => "信箱格式驗證錯誤",
                "ERR103" => "查無此帳號",
                "ERR104" => "參數錯誤",
                "ERR105" => "密碼更新失敗",
                "ERR106" => "確認密碼輸入錯誤",
                "ERR107" => "重設密碼頁已過期",
                "ERR108" => "註冊失敗",
                "ERR109" => "Email驗證錯誤",
                "ERR110" => "Email帳號已存在",
                "ERR111" => "此帳號本日驗證次數已達上限",
                "ERR112" => "系統連線失敗，請稍後再試",
                "ERR113" => "套用主題失敗",
                "ERR114" => "套用主題失敗(預覽頁)",
                "ERR115" => "頁首頁尾套用失敗",
                "ERR116" => "字型配色套用失敗",
                "ERR117" => "無法更新選單",
                "ERR118" => "頁面無法隱藏",
                "ERR119" => "頁面無法顯示",
                "ERR120" => "無法設定首頁",
                "ERR121" => "板塊無法隱藏",
                "ERR122" => "板塊無法顯示",
                "ERR123" => "板塊無法刪除",
                "ERR124" => "輪播圖上傳失敗",
                "ERR125" => "網站更新失敗",
                "ERR126" => "logo上傳失敗",
                "ERR127" => "介紹圖上傳失敗",
                "ERR128" => "商店訊息更新失敗",
                "ERR129" => "最新消息刪除失敗",
                "ERR130" => "最新消息上傳圖片失敗",
                "ERR131" => "最新消息新增失敗",
                "ERR132" => "最新消息更新失敗",
                "ERR133" => "服務項目新增失敗",
                "ERR134" => "服務項目刪除失敗",
                "ERR135" => "服務項目上傳圖片失敗",
                "ERR136" => "服務項目更新失敗",
                "ERR137" => "服務項目無法隱藏",
                "ERR138" => "服務項目無法顯示",
                "ERR139" => "商店政策更新失敗",
                "ERR140" => "無法移除已綁定 Pro 方案的網站",
                "ERR141" => "無法更新使用者quota",
                "ERR142" => "無法新增帳戶活動紀錄",
                "ERR143" => "無效的使用者",
                "ERR144" => "無效的 CRM 使用者",
                "ERR145" => "CRM 主機回傳錯誤代碼",
                "ERR146" => "CRM 主機沒有回傳使用者資料",
                "ERR147" => "黑卡客戶不存在或已無效",
                "ERR148" => "無效的廣告媒體",
                "ERR149" => "無效的報表格式",
                "ERR150" => "無法新增黑卡寄送任務",
                "ERR151" => "無法更新黑卡寄送任務",
                "ERR152" => "無法刪除黑卡寄送任務",
                "ERR153" => "無法設定連結網域",
                "ERR154" => "無法移除連結網域",
                "ERR155" => "無法更新網站 lookup file",
                "ERR156" => "無法產生行銷工具 template",
                "ERR157" => "無法新增使用者取消續訂回饋",
                "ERR158" => "此網域已存在",
                "ERR159" => "無效的方案",
                "ERR160" => "無法發送簡訊驗證碼",
                "ERR161" => "此號碼已經驗證",
            ];
        }
    }

    /**
     * Get the error message for the given key.
     *
     * @param string $key The key to retrieve the error message for.
     *
     * @return string A JSON encoded string containing the key and the corresponding error message.
     *                If the key is not found, the message will be "Unknown error".
     */
    public function getErrorMessage($key)
    {
        if (array_key_exists($key, $this->errorMessages)) {
            return json_encode(array('key' => $key, 'msg' => $this->errorMessages[$key]));
        } else {
            return json_encode(array('key' => $key, 'msg' => "Unknown error"));
        }
    }

}
