## Routes
API urls:
Specifisks produkts ar atribūtiem:
http://*/getProductWithAttributes?product_id=1

Tikai atribūti specifiskam produktam:
http://*/getProductAttributes?product_id=1

Visi produkti:
http://*/getProducts

Produkti HTML tabulā no eloquent buildera:
http://*/getProductsViewEloquent

Produkti HTML tabulā no RAW SQL:
http://*/getProductsViewSQL

## Package installation

Require `allans/productapi` using composer.



##Uzdevums:

1 - Izveidot “bitbucket/github” repozitoriju “visi_forši_produkti”.
2 - Izveidot Laravel projektu
3 - Ieviest autorizāciju.
Nepieciešamas tablulas:
1. products - aprakstošie lauki:
id; name; description; created_at
2. product_attributes aprakstošie lauki ir “Key/Value” stilā:
id; product_id; key; value; created_at; deleted_at
key laukā produkts var saturēt piemēram “svars”, “garša”, “augstums”, “garums” ... u.c
4 - Izveidot CRUD;
5 - Izveidot migrācijas;
6 - Izveidot API komponenti atsevišķā repozitorijā, kuru iesauc caur “composer”, kurai funkcionalitāte ir:
6.1 - JSON formātā atgriezt:
 Visus produktus;
Konkrētā produkta atribūtus.
6.2 - HTML formātā atgriezt “pivot” tabulu:
 datus pieprasot izmantojot iebūvēto “eloquent”
datus pieprasot izmantojot “tīru SQL”
Pivot tabulu sagaidu - kolonnas ir attiecīgi tādas un tik daudz cik ir ievadītās “product_attributes” atslēgas vērtības:
Produkta_id|Nosaukums|Svars|Garša|Augstums|garums|....