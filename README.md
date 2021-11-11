# Es_Conn_Insert ESERCITAZIONE PHP - CONNESSIONE DB - INSERIMENTO DATI IN TABELLA
------------------------------------------------------------------------------------
# Scopo 
- Utilizzare le funzioni esterne
- Utilizzare correttante mysqli
- Creare e scrivere un file
- Navigare su una pagina da php
- utilizzare $_GET e $_POST
------------------------------------------------------------------------------------
# Struttura esercitazione
- Login.php: contiene la form per l'acquisizione di dati di connessione al database. Richiama se stessa e inoltra i dati della form in POST e testa la connessione al DB richiamdo la funzione ConnDB salvata in lib/ConnDB.php. Se la conessione è valida:
    1. Chiude la connessione
    2. Salvo i dati di connessione in un file /conf/conf.php
    3. Navigo sulla pagina inserisci.php.
- lib/ConnDB.php: contiene la funzione che crea l'oggetto connessione e lo restituisce
- inserisci.php: Ha una form per acquisire i dati da inseriere nella tabella scuola (vedere schema creato), che richiama se stessa inviando i dati in post. Importare i file php:
    1. conf.php
    2. ConnDB.php