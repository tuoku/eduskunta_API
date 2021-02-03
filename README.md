# eduskunta_API
#### Pisteiden hakeminen
Haetaan Sanna Marinin (hetekaID 1297) saamat pisteet:  
`GET users.metropolia.fi/~tuomakuh/eduskunta?id=1297&action=get`  
Palauttaa:  
```
{
    "hetekaID": "1297",
    "score": "4"
}
```
