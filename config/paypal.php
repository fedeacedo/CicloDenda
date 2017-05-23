<?php
return array(
    // set your paypal credential
    'client_id' => 'AXCVQKkJ9NKkIxa8g0M-4A9KcUogV1NRLLMs9lfsXl9Snd0sEKkUccjn9UE4pMeKP0eb93ctiItncsxy',
    'secret' => 'EMl5cPB7D2mZlLvs2HMTeBZjgSbOjMPT3A1AsGiYfH4nSZVozvfzXzvlJLZj6Y_ppAYFRKWRLcOMYtoJ',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);