# eduskunta_API  
Tällä voidaan jakaa kansanedustajien saamia pisteitä meidän sovellusten välillä. Requesteja ei ole tällä hetkellä rajoitettu joten olkaa kiltisti. 

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
`{"message":"success"}`  

#### Miinuspisteen antaminen  
Annetaan Katja Hänniselle (hetekaID 1276) yksi miinuspiste:  
`GET users.metropolia.fi/~tuomakuh/eduskunta?id=1276&action=minus`  
Palauttaa:  
`{"message":"success"}`  
