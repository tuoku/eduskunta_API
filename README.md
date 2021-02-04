# eduskunta_API

## Parametrit  
- `ìd` Kansanedustajan hetekaID  
- `action` Suoritettava toiminto; joko `get`(haetaan pistemäärä), `minus`(pistemäärä--) tai `plus`(pistemäärä++)  

## Esimerkkejä  
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
#### Pisteen antaminen  
Annetaan Erkki Tuomiojalle (hetekaID 357) yksi piste:  
`GET users.metropolia.fi/~tuomakuh/eduskunta?id=357&action=plus`  
Palauttaa:
