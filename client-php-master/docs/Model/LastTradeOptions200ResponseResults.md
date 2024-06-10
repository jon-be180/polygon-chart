# # LastTradeOptions200ResponseResults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**t** | **string** | The exchange symbol that this item is traded under. |
**c** | **int[]** | A list of condition codes. | [optional]
**e** | **int** | The trade correction indicator. | [optional]
**f** | **int** | The nanosecond accuracy TRF(Trade Reporting Facility) Unix Timestamp. This is the timestamp of when the trade reporting facility received this message. | [optional]
**i** | **string** | The Trade ID which uniquely identifies a trade. These are unique per combination of ticker, exchange, and TRF. For example: A trade for AAPL executed on NYSE and a trade for AAPL executed on NASDAQ could potentially have the same Trade ID. |
**p** | **float** | The price of the trade. This is the actual dollar value per whole share of this trade. A trade of 100 shares with a price of $2.00 would be worth a total dollar value of $200.00. |
**q** | **int** | The sequence number represents the sequence in which message events happened. These are increasing and unique per ticker symbol, but will not always be sequential (e.g., 1, 2, 6, 9, 10, 11). |
**r** | **int** | The ID for the Trade Reporting Facility where the trade took place. | [optional]
**s** | **float** | The size of a trade (also known as volume). | [optional]
**t** | **int** | The nanosecond accuracy SIP Unix Timestamp. This is the timestamp of when the SIP received this message from the exchange which produced it. |
**x** | **int** | The exchange ID. See &lt;a href&#x3D;\&quot;https://polygon.io/docs/stocks/get_v3_reference_exchanges\&quot; alt&#x3D;\&quot;Exchanges\&quot;&gt;Exchanges&lt;/a&gt; for Polygon.io&#39;s mapping of exchange IDs. |
**y** | **int** | The nanosecond accuracy Participant/Exchange Unix Timestamp. This is the timestamp of when the quote was actually generated at the exchange. |
**z** | **int** | There are 3 tapes which define which exchange the ticker is listed on. These are integers in our objects which represent the letter of the alphabet. Eg: 1 &#x3D; A, 2 &#x3D; B, 3 &#x3D; C. * Tape A is NYSE listed securities * Tape B is NYSE ARCA / NYSE American * Tape C is NASDAQ | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
